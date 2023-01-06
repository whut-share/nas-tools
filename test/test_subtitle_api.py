# coding=utf-8

import requests

from utils.types import MediaType

host = "http://192.168.88.219:19035"
api_key = "aafa2ca9-ec2f-4415-b803-25f15a949ec4"

params = {'video_type': 1,
          'physical_video_file_full_path':
           '/data/media/tvs/国产剧/天下第一 (2005)/Season 1/天下第一 - S01E31 - 第 31 集.mp4',
          'task_priority_level': 3, 'media_server_inside_video_id': '',
          'is_bluray': False}
p2 = {'video_type': 1, 'physical_video_file_full_path': '/data/media/tvs/国产剧/铁齿铜牙纪晓岚 (2001)/Season 1/铁齿铜牙纪晓岚 - S01E19 - 第 19 集.iso', 'task_priority_level': 3, 'media_server_inside_video_id': '', 'is_bluray': False}
def download_chinesesubfinder(items):
    """
    调用ChineseSubFinder下载字幕
    """
    req_url = "%s/api/v1/add-job" % host
    try:
        res = requests.post(req_url, headers={"Authorization": "Bearer %s" % api_key}, json=params,
                            timeout=10)
        if not res or res.status_code != 200:
            print("【SUBTITLE】调用ChineseSubFinder API失败！")
        else:
            job_id = res.json().get("job_id")
            message = res.json().get("message")
            if not job_id:
                print("【SUBTITLE】ChineseSubFinder下载字幕出错：%s" % message)
            else:
                print("【SUBTITLE】ChineseSubFinder任务添加成功：%s" % job_id)
    except Exception as e:
        print("【SUBTITLE】连接ChineseSubFinder出错：" + str(e))
    if not host or not api_key:
        return



                
if __name__ == "__main__":
    download_chinesesubfinder(params)