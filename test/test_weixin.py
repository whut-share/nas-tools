# coding=utf8
import os

os.environ['NASTOOL_CONFIG'] = "E:\\my_project\\nas-tools\\test\\config.yaml"

from utils.WXBizMsgCrypt3 import WXBizMsgCrypt

if __name__ == "__main__":
    from rwlock import RWLock
    sToken = 'i2bZ1CDbyoghydLbwWdp5'
    sEncodingAESKey = 'X3yGtrguKIloPBOChTvUIn1GxDRDIN1L7pkqTCaqnHq'
    sCorpID = 'ww23f993fe031c1ea7'
    wxcpt = WXBizMsgCrypt(sToken, sEncodingAESKey, sCorpID)
    sVerifyMsgSig = '08c48bcd960003b99bb154390b3ab82ee1633a0d'
    sVerifyTimeStamp = '1653727268'
    sVerifyNonce = '1653860470'
