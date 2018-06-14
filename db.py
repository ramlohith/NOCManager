#!/usr/bin/env python

import os, subprocess
import mysql.connector
import re
import time


cnx = mysql.connector.connect(user='root', password='pass123', host='localhost', database='NOC')
cursor = cnx.cursor()
cursor.execute("drop table if exists network")
cursor.execute("create table network(fname varchar(255), sname varchar(255), ip varchar(255), packet_loss varchar(255), min varchar(255), max varchar(255), avg varchar(255), mdev varchar(255));")
cursor.execute("select * from tree")
data=cursor.fetchall()
starttime=time.time()

for row in data:
        ip = str(row[2])
        sname = str(row[3])
        fname = str(row[4])
        print ip
        print sname

        cursor.execute("insert into network(fname, sname, ip) values('%s','%s', '%s')" %(fname, sname, ip))
        cnx.commit()
        output = subprocess.check_output("ping "+ ip +" -c 7 | egrep \'packet loss|rtt\'", shell = True)
        match = re.search('([\d]*\.[\d]*)/([\d]*\.[\d]*)/([\d]*\.[\d]*)/([\d]*\.[\d]*)', output)
        if match:
                # print output
                ping_min = str(match.group(1))
                ping_avg = str(match.group(2))
                ping_max = str(match.group(3))
                ping_mdev = str(match.group(4))
                match = re.search('(\d*)% packet loss', output)
                pkt_loss = str(match.group(1))
                
        else:
                ping_max = 0
                ping_min = 0
                ping_avg = 0
                ping_mdev = 0
                match = re.search('(\d*)% packet loss', output)
                pkt_loss = str(match.group(1))
                print pkt_loss
                #execfile('sms2.py') 
        if data:
                cursor.execute("update network set packet_loss='%s', min='%s', max='%s', avg='%s', mdev='%s' where ip='%s'" %(pkt_loss, ping_min,ping_max, ping_avg, ping_mdev,ip))

        else:
                cursor.execute("insert into network(ip, fname, packet_loss, min, max, avg, mdev) values('%s', '%s '%s', '%s', '%s', '%s', '%s')" %(ip, fname, pkt_loss, ping_min, ping_max, ping_avg, ping_mdev))

        cnx.commit()



while True:
  for row in data:
          ip = str(row[2])
          sname = str(row[3])
          fname = str(row[4])
          print ip
          print sname

          cnx.commit()
          output = subprocess.check_output("ping "+ ip +" -c 3 | egrep \'packet loss|rtt\'", shell = True)
          match = re.search('([\d]*\.[\d]*)/([\d]*\.[\d]*)/([\d]*\.[\d]*)/([\d]*\.[\d]*)', output)
          if match:
                  # print output
                  ping_min = str(match.group(1))
                  ping_avg = str(match.group(2))
                  ping_max = str(match.group(3))
                  ping_mdev = str(match.group(4))
                  match = re.search('(\d*)% packet loss', output)
                  pkt_loss = str(match.group(1))
                
          else:
                  ping_max = 0
                  ping_min = 0
                  ping_avg = 0
                  ping_mdev = 0
                  match = re.search('(\d*)% packet loss', output)
                  pkt_loss = str(match.group(1))
                  print pkt_loss
                #execfile('sms2.py') 
          if data:
                  cursor.execute("update network set packet_loss='%s', min='%s', max='%s', avg='%s', mdev='%s' where ip='%s'" %(pkt_loss, ping_min,ping_max, ping_avg, ping_mdev,ip))

          else:
                  cursor.execute("insert into network(ip, fname, packet_loss, min, max, avg, mdev) values('%s', '%s '%s', '%s', '%s', '%s', '%s')" %(ip, fname, pkt_loss, ping_min, ping_max, ping_avg, ping_mdev))
            
          cnx.commit()
          time.sleep(120.0 - ((time.time() - starttime) % 120.0))

cursor.close()
cnx.close()



