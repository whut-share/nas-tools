import log
from pt.searcher import Searcher
from pt.torrent import Torrent
from rmt.media import Media
from utils.sqls import insert_search_results, delete_all_search_torrents


def search_medias_for_web(content, ident_flag=True, filters=None):
    """
    WEB资源搜索
    :param content: 关键字文本，可以包括 类型、标题、季、集、年份等信息，使用 空格分隔，也支持种子的命名格式
    :param ident_flag: 是否进行媒体信息识别
    :param filters: 其它过滤条件
    :return: 查询结果直接插入数据库中，进入WEB页面时查询展示
    """
    mtype, key_word, season_num, episode_num, year, content = Torrent.get_keyword_from_string(content)
    if not key_word:
        log.info("【WEB】%s 检索关键字有误！" % content)
        return
    # 尝试进行识别真实名称加入匹配
    match_words = None
    if ident_flag:
        media_info = Media().get_media_info(title=content, mtype=mtype, strict=True)
        if media_info and media_info.tmdb_info and key_word != media_info.title:
            match_words = [key_word, media_info.title]
    filter_args = {"season": season_num,
                   "episode": episode_num,
                   "year": year}
    # 整合高级查询条件
    if filters:
        filter_args.update(filters)
    # 开始检索
    log.info("【WEB】开始检索 %s ..." % content)
    media_list = Searcher().search_medias(key_word=key_word,
                                          filter_args=filter_args,
                                          match_type=0 if ident_flag else 2,
                                          match_words=match_words)
    delete_all_search_torrents()
    if len(media_list) == 0:
        log.info("【WEB】%s 未检索到任何媒体资源" % content)
        return
    else:
        log.info("【WEB】共检索到 %s 个有效资源" % len(media_list))
        # 分组择优
        media_list = Torrent.get_torrents_group_item(media_list)
        log.info("【WEB】分组择优后剩余 %s 个有效资源" % len(media_list))
        # 插入数据库
        insert_search_results(media_list)
