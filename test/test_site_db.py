# coding=utf-8
import os
import _thread
import time

from pt.sites import Sites
from concurrent.futures import ThreadPoolExecutor
os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"
from utils.db_helper import select_by_sql,update_by_sql

def test1():
    sql = "INSERT INTO TEST_1(UPLOAD, DOWNLOAD) VALUES (1, 2)"
    update_by_sql(sql)

def test2():
    select_by_sql("SELECT MAX(UPLOAD), MIN(DOWNLOAD) FROM TEST_1;")

if __name__ == "__main__":
    # s = Sites()
    # s.get_pt_site_statistics_history()
    # update_by_sql('''CREATE TABLE IF NOT EXISTS TEST_1
    #                                                        (ID INTEGER PRIMARY KEY AUTOINCREMENT     NOT NULL,
    #                                                        UPLOAD    TEXT,
    #                                                        DOWNLOAD     TEXT);''')
    # sql = "INSERT INTO TEST_1(UPLOAD, DOWNLOAD) VALUES (1, 2)"
    executor = ThreadPoolExecutor(max_workers=5)
    for i in range(1, 200000):
        if i % 3 == 0:
            executor.submit(test1)
            # _thread.start_new_thread(test1, ())
        else:
            executor.submit(test2)
            # _thread.start_new_thread(test2, ())

    time.sleep(200)

