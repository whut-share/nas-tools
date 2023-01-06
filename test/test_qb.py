# coding=utf-8
import os
import _thread
import time

from pt.sites import Sites
from concurrent.futures import ThreadPoolExecutor
os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"

from pt.downloader import Downloader

if __name__ == "__main__":
    # MetaHelper().get_meta_data_by_key('[电视剧]My Brilliant Friend-2020')
    Downloader().pt_transfer()

