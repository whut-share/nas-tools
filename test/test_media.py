# coding=utf-8
import os

import requests

os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"

import log
from pt.sites import Sites
import re
from lxml import etree
from rmt.media import Media,MetaInfo
from utils.http_utils import RequestUtils
import difflib
RMT_MEDIAEXT = ['.mp4', '.mkv', '.ts', '.iso', '.rmvb', '.avi', '.mov', '.mpeg', '.mpg', '.wmv', '.3gp', '.asf', '.m4v', '.flv']
from rmt.constants import *


def search_engine(feature_name):
    """
    辅助识别关键字
    """
    is_movie = False
    if not feature_name:
        return None, is_movie
    # 剔除不必要字符
    backlist = sorted(KEYWORD_BLACKLIST, key=lambda x: len(x), reverse=True)
    for single in backlist:
        feature_name = feature_name.replace(single, " ")

    def cal_score(strongs, ret_dict):
        for i, s in enumerate(strongs):
            if len(strongs) < 5:
                if i < 2:
                    score = KEYWORD_SEARCH_WEIGHT_3[0]
                else:
                    score = KEYWORD_SEARCH_WEIGHT_3[1]
            elif len(strongs) < 10:
                if i < 2:
                    score = KEYWORD_SEARCH_WEIGHT_2[0]
                else:
                    score = KEYWORD_SEARCH_WEIGHT_2[1] if i < (len(strongs) >> 1) else KEYWORD_SEARCH_WEIGHT_2[2]
            else:
                if i < 2:
                    score = KEYWORD_SEARCH_WEIGHT_1[0]
                else:
                    score = KEYWORD_SEARCH_WEIGHT_1[1] if i < (len(strongs) >> 2) else KEYWORD_SEARCH_WEIGHT_1[2] if i < (
                            len(strongs) >> 1) \
                        else KEYWORD_SEARCH_WEIGHT_1[3] if i < (len(strongs) >> 2 + len(strongs) >> 1) else KEYWORD_SEARCH_WEIGHT_1[
                        4]
            if ret_dict.__contains__(s.lower()):
                ret_dict[s.lower()] += score
                continue
            ret_dict[s.lower()] = score

    bing_url = "https://www.cn.bing.com/search?q=%s&qs=n&form=QBRE&sp=-1" % feature_name
    baidu_url = "https://www.baidu.com/s?ie=utf-8&tn=baiduhome_pg&wd=%s" % feature_name
    res_bing = RequestUtils().get_res(url=bing_url)
    res_baidu = RequestUtils().get_res(url=baidu_url)
    ret_dict = {}
    if res_bing and res_bing.status_code == 200:
        html_text = res_bing.text
        if html_text:
            html = etree.HTML(html_text)
            strongs_bing = list(
                filter(lambda x: (0 if not x else difflib.SequenceMatcher(None, feature_name, x).ratio()) > KEYWORD_STR_SIMILARITY_THRESHOLD,
                       map(lambda x: x.text, html.cssselect(
                           "#sp_requery strong, #sp_recourse strong, #tile_link_cn strong, .b_ad .ad_esltitle~div strong, h2 strong, .b_caption p strong, .b_snippetBigText strong, .recommendationsTableTitle+.b_slideexp strong, .recommendationsTableTitle+table strong, .recommendationsTableTitle+ul strong, .pageRecoContainer .b_module_expansion_control strong, .pageRecoContainer .b_title>strong, .b_rs strong, .b_rrsr strong, #dict_ans strong, .b_listnav>.b_ans_stamp>strong, #b_content #ans_nws .na_cnt strong, .adltwrnmsg strong"))))
            if strongs_bing:
                # doubans = html.xpath("//aside//a[contains(@href, \"movie.douban.com\")]")
                # if len(doubans) > 0:
                title = html.xpath("//aside//h2[@class = \" b_entityTitle\"]/text()")
                if len(title) > 0:
                    if title:
                        t = re.compile(r"\s*\(\d{4}\)$").sub("", title[0])
                        ret_dict[t] = 200
                        if html.xpath("//aside//div[@data-feedbk-ids = \"Movie\"]"):
                            is_movie = True
                cal_score(strongs_bing, ret_dict)
    if res_baidu and res_baidu.status_code == 200:
        html_text = res_baidu.text
        if html_text:
            html = etree.HTML(html_text)
            ems = list(
                filter(lambda x: difflib.SequenceMatcher(None, feature_name, x).ratio() > KEYWORD_STR_SIMILARITY_THRESHOLD,
                       map(lambda x: x.text, html.cssselect("em"))))
            if len(ems) > 0:
                cal_score(ems, ret_dict)
    if not ret_dict:
        return None, False
    ret = sorted(ret_dict.items(), key=lambda d: d[1], reverse=True)
    log.info("【META】推断关键字为：%s ..." % ([k[0] for i, k in enumerate(ret) if i < 4]))
    if len(ret) == 1:
        keyword = ret[0][0]
    else:
        pre = ret[0]
        next = ret[1]
        if next[0].find(pre[0]) > -1:
            # 满分直接判定
            if int(pre[1]) >= 100:
                keyword = pre[0]
            # 得分相差30 以上， 选分高
            elif int(pre[1]) - int(next[1]) > KEYWORD_DIFF_SCORE_THRESHOLD:
                keyword = pre[0]
            # 重复的不选
            elif next[0].replace(pre[0], "").strip() == pre[0]:
                keyword = pre[0]
            else:
                keyword = next[0]

        else:
            keyword = pre[0]
    log.info("【META】选择关键字为：%s " % keyword)
    return keyword, is_movie


if __name__ == "__main__":
    import jieba
    # media = Media()
    # x = media.get_media_info("Y王2")
    x = search_engine("vanwildereriseoftaj2006留级之王2泰吉的崛起")
    # pass
    files = [f for f in os.listdir("Z:\\Video\\9kg\\国内\\300＋3级") if os.path.splitext(f)[-1] in RMT_MEDIAEXT]
    # dic = {}
    # for f in files:
    #     file = os.path.splitext(f)[0]
    #     mi = MetaInfo(f)
    #     mi_name = mi.get_name()
    #     seg_list = list(jieba.cut(mi_name, cut_all=False))
    #     for i, s in enumerate(seg_list):
    #         if dic.__contains__(s):
    #             dic[s] += 1
    #             continue
    #         dic[s] = 1
    # ret = sorted(dic.items(), key=lambda d: d[1], reverse=True)
    # BLACKLIST_KEYWORDS = []
    # for r in ret:
    #     BLACKLIST_KEYWORDS.append(r[0])
    # print(BLACKLIST_KEYWORDS)
    ret = open("result.csv", "w", encoding="utf-8")
    for f in files:
        file = os.path.splitext(f)[0]
        mi = MetaInfo(f)
        mi_name = mi.get_name()
        final_name = search_engine(mi_name)[0]
        log.info("%s,%s,%s\n" % (file, mi_name, final_name))
        ret.write("%s,%s,%s\n" % (file, mi_name, final_name))
    ret.flush()
    ret.close()
