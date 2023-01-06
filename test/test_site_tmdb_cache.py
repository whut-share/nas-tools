# coding=utf-8
import os
import _thread
import time

from pt.sites import Sites
from concurrent.futures import ThreadPoolExecutor
os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"

from utils.meta_helper import MetaHelper

if __name__ == "__main__":
    # MetaHelper().get_meta_data_by_key('[电视剧]My Brilliant Friend-2020')
    MetaHelper().save_meta_data()

