# -*- coding: utf-8 -*-
import MySQLdb
import serial
import time
from datetime import datetime
if __name__ == "__main__":

    s = serial.Serial('/dev/ttyACM0', 9600)
    time.sleep(20)
    print s.portstr
    str = s.read(3)

    print(str)

    f = open('data.csv', 'a')
    f.write(str+"\n")
    f.close()

    connector = MySQLdb.connect(host="localhost", db="j14006", user="root", passwd="teikyo",charset="utf8")
    cursor = connector.cursor()
    sql = "insert into sensors (illumination) values("+str+")"

    cursor.execute(sql)
    connector.commit()

    cursor.close()
    connector.close()
