# coding=utf-8
import os

import requests

os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"

from pt.sites import Sites
import re
from lxml import etree
from utils.http_utils import RequestUtils

def num_filesize(text):
    if not text:
        return 0
    if not isinstance(text, str):
        text = str(text)
    text = text.replace(",", "").replace(" ", "").upper()
    size = re.sub(r"[KMGTPI]*B", "", text, flags=re.IGNORECASE)
    try:
        size = float(size)
    except Exception as e:
        print(str(e))
        return 0
    if text.find("PB") != -1 or text.find("PIB") != -1:
        size *= 1024 ** 5
    elif text.find("TB") != -1 or text.find("TIB") != -1:
        size *= 1024 ** 4
    elif text.find("GB") != -1 or text.find("GIB") != -1:
        size *= 1024 ** 3
    elif text.find("MB") != -1 or text.find("MIB") != -1:
        size *= 1024 ** 2
    elif text.find("KB") != -1 or text.find("KIB") != -1:
        size *= 1024
    return round(size)

if __name__ == "__main__":
    # headers = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.41"
    # cookies = "c_secure_uid=MjkzMA==; c_secure_pass=6a161a003fdd438005954632590f94b5; c_secure_ssl=eWVhaA==; c_secure_tracker_ssl=eWVhaA==; c_secure_login=bm9wZQ=="
    # url = "https://club.hares.top/userdetails.php?id=2930"
    # s = requests.Session()
    # r = RequestUtils(headers=headers,cookies=cookies)
    # res = r.get_res(url)
    # html_text = res.text
    # html_text = re.sub(r"#\d+", "", re.sub(r"\d+px", "", html_text))
    # TEST1
    # upload_match = re.search(r"[^总]上[传傳]量?[:：<>/a-zA-Z-=\"'\s#;]+([0-9,.\s]+[KMGTPI]*B)", html_text, re.IGNORECASE)
    # upload_match.group(1)
    # a = num_filesize(upload_match.group(1).strip())
    html_text = open("sites/ttg.php", "r", encoding="utf-8").read()
    html = etree.HTML(html_text)

    user_levels_text = html.xpath('//tr/td[text()="等級" or text()="等级" or *[text()="等级"]]/'
                                  'following-sibling::td[1]/img[1]/@title'
                                  '|//tr/td[text()="等級" or text()="等级"]/'
                                  'following-sibling::td[1 and img[not(@title)]]/text()'
                                  '|//tr/td[text()="等級" or text()="等级"]/'
                                  'following-sibling::td[1]//text()')
    html.xpath('//tr/td[text()="等級" or text()="等级"]/following-sibling::td[1]/text()')
    # a = html.xpath('//a[contains(@href, "userdetails")]//b//text()')
    # a = html.xpath('//a[contains(@href, "userdetails")]//text()')
    # a = html.xpath('//a[contains(@href, "user.php")]//text()')
    # b = html.xpath('//a[contains(@href, "/u/")]//text()')
    # xp1 = html.xpath('//a[@class = "User_Name"]//b//bdo/text()')
    # a = html.xpath('//ul[@id = "userinfo_stats"]//li//span//text()')

    # a = html.xpath('//ul[@id = "userinfo_stats"]//li')[3].xpath("i//span//text()")[-1]
    # ups = html.xpath('//ul[@class = "stats nobullet"]')
    # b = ups[4].xpath("li")

    from urllib.parse import urljoin, urlsplit



    # res1 = r.get(urljoin(url, "index.php"))
    # res = RequestUtils(headers="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.41", cookies="cf_clearance=BzWm88VraDnNsf7wwUNp_VBfn6wB.cnKrDhqc28TYA8-1651372790-0-150; c_secure_uid=OTc1OTc=; c_secure_pass=f4695c696b952801c69c644bb236a564; c_secure_ssl=eWVhaA==; c_secure_tracker_ssl=eWVhaA==; c_secure_login=bm9wZQ==").get_res(url="https://pt.btschool.club")
    # res.encoding = res.apparent_encoding
    # html_text = res.text
    # etree.HTML(res2.text).xpath("//title/text()")
    upload_match = re.search(r"[^总]上[传傳]量?[:：<>/a-zA-Z-=\"'\s#;]+([0-9,.\s]+[KMGTPI]*B)", html_text, re.IGNORECASE)
    html = etree.HTML(html.text)
    tmps = html.xpath('//ul[@id = "userinfo_stats"]//li')
    if tmps:
        a = float(str(tmps[2].xpath("span//text()")[-1]).strip())

    tmps = html.xpath('//span[@class = "ucoin-symbol ucoin-gold"]//text()')
    pass

