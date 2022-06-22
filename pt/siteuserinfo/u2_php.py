# -*- coding: utf-8 -*-

from pt.siteuserinfo.nexus_php import NexusPhpSiteUserInfo


class U2SiteUserInfo(NexusPhpSiteUserInfo):
    _site_schema = "U2"
    _brief_page = ""
    _user_traffic_page = ""
    _user_detail_page = "userdetails.php?id="
    _torrent_seeding_page = "getusertorrentlistajax.php?userid="