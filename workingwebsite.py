#!/usr/bin/env python

import httplib
import mysql.connector
import urllib
import ssl

cnx = mysql.connector.connect(user='root', password='pass123', host='localhost', database='NOC')
cursor = cnx.cursor()
cursor.execute("select * from website")
data = cursor.fetchall()
s = "success!"
e = "Error!"

for row in data:
    x = str(row[1])


    context = ssl._create_unverified_context()
    webUrl = urllib.urlopen(x, context = context)
    if(str(webUrl.getcode()) == "200"):
      f=open("websitestatus.txt", "a")
      f.write("0 ")
      f.close()
      print "success!"
      cursor.execute("update website set Status = '%s' where Name = '%s'" %(s,x)) 
    else:
      print "ERROR!"
      fi=open("websitestatus.txt", "a")
      fi.write("1 ")
      fi.close()
      cursor.execute("update website set Status = '%s' where Name = '%s'" %(e,x)) 


cnx.commit()

cursor.close()
cnx.close()

