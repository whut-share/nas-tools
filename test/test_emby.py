# coding=utf8
import os

os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"
from rmt.filetransfer import FileTransfer
from utils.types import SyncType, OsType

from rmt.category import Category
from pt.media_server import MediaServer
from message.send import Message
from rmt.media import Media

if __name__ == "__main__":
    media = Media()
    message = Message()
    category = Category()
    mediaserver = MediaServer()
    Medias = media.get_media_info_on_files("./test_in/欧美剧/我的天才女友 (2018)/Season 1/我的天才女友 - S01E04 - 第 4 集 - 1080p.mkv")
    for file_item, me in  Medias.items():
        refresh_item = {"type": me.type, "category": me.category, "title": me.title, "year": me.year}
        mediaserver.refresh_library_by_items([refresh_item])