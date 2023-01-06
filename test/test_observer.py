# coding=utf-8

import os
import signal

import log
from config import Config
from watchdog.observers import Observer
from watchdog.observers.polling import PollingObserver
from watchdog.observers.read_directory_changes import WindowsApiObserver
from watchdog.events import FileSystemEventHandler,DirModifiedEvent
from service.sync import FileMonitorHandler,Sync
import time

if __name__ == "__main__":
    os.environ['TZ'] = 'Asia/Shanghai'
    os.environ['NASTOOL_CONFIG'] = './config.yaml'
    log.console("配置文件地址：%s" % os.environ.get('NASTOOL_CONFIG'))


    # 启动进程
    log.console("开始启动进程...")

    observer = WindowsApiObserver()
    observer.schedule(FileMonitorHandler("D:\\Downloads\\ttt", Sync()), path="D:\\Downloads\\ttt", recursive=True)
    observer.start()
    try:
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        observer.stop()
    observer.join()