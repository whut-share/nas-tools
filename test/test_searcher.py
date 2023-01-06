# coding=utf8
import os
import requests
os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"
from pt.searcher import Searcher
from utils.types import SyncType, OsType
from utils.types import MediaType, SearchType, DownloaderType, SyncType, OsType


url = "http://192.168.88.202:9696/api/v1/search?apikey=1b6aeb6f13cb4747bb5f0ccee29146fa&Query=天下第一"
params = {
  "id": 0,
  "guid": "string",
  "age": 0,
  "ageHours": 0,
  "ageMinutes": 0,
  "size": 0,
  "files": 0,
  "grabs": 0,
  "indexerId": 0,
  "indexer": "string",
  "subGroup": "string",
  "releaseHash": "string",
  "title": "string",
  "approved": True,
  "imdbId": 0,
  "publishDate": "2022-05-28T01:59:45.355Z",
  "commentUrl": "string",
  "downloadUrl": "string",
  "infoUrl": "string",
  "posterUrl": "string",
  "indexerFlags": [
    "string"
  ],
  "categories": [
    {
      "id": 0,
      "name": "string",
      "description": "string"
    }
  ],
  "magnetUrl": "string",
  "infoHash": "string",
  "seeders": 0,
  "leechers": 0,
  "protocol": "unknown"
}
if __name__ == "__main__":

    # searcher = Searcher()
    res = requests.get(url, timeout=30)
    ps = {
        "imdbId": 55448
    }
    pass
    import json
    header = {"Authentication": "1b6aeb6f13cb4747bb5f0ccee29146fa", "content-type":"application/json"}
    res = requests.post("http://192.168.88.202:9696/api/v1/search?apikey=1b6aeb6f13cb4747bb5f0ccee29146fa", json=ps, headers=header)
    pass