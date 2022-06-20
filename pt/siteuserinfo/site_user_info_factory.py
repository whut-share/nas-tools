from pt.siteuserinfo.nexus_php import NexusPhpSiteUserInfo
from pt.siteuserinfo.nexus_project import NexusProjectSiteUserInfo
from pt.siteuserinfo.other_project import OtherSiteUserInfo
from pt.siteuserinfo.small_horse import SmallHorseSiteUserInfo
from utils.http_utils import RequestUtils,requests
import log

class SiteUserInfoFactory(object):
    @staticmethod
    def build(url, site_name, user_agent=None, site_cookie=None):
        res = RequestUtils(headers=user_agent, cookies=site_cookie).get_res(url=url)
        if res and res.status_code == 200:
            res.encoding = res.apparent_encoding
            html_text = res.text
            # 第一次登录反爬
            if html_text.find("title") == -1:
                i = html_text.find("window.location")
                if i == -1:
                    return None
                tmp_url = url + html_text[i:html_text.find(";")] \
                    .replace("\"", "").replace("+", "").replace(" ", "").replace("window.location=", "")
                res = requests.get(url=tmp_url, cookies={"cookie": site_cookie}, headers={"User-Agent": f"{user_agent}"})
                if res and res.status_code == 200:
                    res.encoding = res.apparent_encoding
                    html_text = res.text
                    if not html_text:
                        return None
                else:
                    log.error("【PT】站点 %s 被反爬限制：%s, 状态码：%s" % (site_name, url, res.status_code))
                    return None
            if "NexusPHP" in html_text in html_text:
                return NexusPhpSiteUserInfo(url, user_agent, site_cookie, html_text)

            if "Nexus Project" in html_text:
                return NexusProjectSiteUserInfo(url, user_agent, site_cookie, html_text)

            if "Small Horse" in html_text:
                return SmallHorseSiteUserInfo(url, user_agent, site_cookie, html_text)
            # 默认其它
            return OtherSiteUserInfo(url, user_agent, site_cookie, html_text)
        elif not res:
            log.error("【PT】站点 %s 连接失败：%s" % (site_name, url))
            return None
        else:
            log.error("【PT】站点 %s 获取流量数据失败，状态码：%s" % (site_name, res.status_code))
