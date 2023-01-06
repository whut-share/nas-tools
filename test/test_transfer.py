# coding=utf8
import os

os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"
from rmt.filetransfer import FileTransfer
from utils.types import SyncType, OsType



if __name__ == "__main__":

    ft = FileTransfer()
    
    ft.transfer_media(in_from=SyncType.MON,in_path="./test_in",files=[],target_dir="./test_out",unknown_dir="./unknown")