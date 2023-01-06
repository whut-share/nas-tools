# -*- coding: utf-8 -*-

import _thread
import time
from utils.sqls import *

if __name__ == "__main__":
    # DBHelper().select(, None)
    _thread.start_new_thread(get_site_user_statistics, ())
    _thread.start_new_thread(get_site_user_statistics, ())
    _thread.start_new_thread(get_site_user_statistics, ())
    time.sleep(200)