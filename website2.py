#!/usr/bin/env python

import httplib
import mysql.connector
import urllib
import ssl

cnx = mysql.connector.connect(user='root', password='pass123', host='localhost', database='NOC')
cursor = cnx.cursor()
cursor.execute("select * from website")
data = cursor.fetchall()

for row in data:
    x = str(row[1])
    def get_status_code(host, path="/"):
        """ This function retreives the status code of a website by requesting
            HEAD data from the host. This means that it only requests the headers.
            If the host cannot be reached or something else goes wrong, it returns
            None instead.
        """
        try:
            conn = httplib.HTTPConnection(host)
            conn.request("HEAD", path)
            return conn.getresponse().status
        except StandardError:
            return None

    if (get_status_code(x)):
        print "success!"
        f=open("websitestatus.txt", "a")
        f.write("0 ")
        f.close()
    else: 
        context = ssl._create_unverified_context()
        webUrl = urllib.urlopen(x, context = context)
        if(str(webUrl.getcode()) == "200"):
          f=open("websitestatus.txt", "a")
          f.write("0 ")
          f.close()
          print "success!"
        else:
          print "ERROR!"
          fi=open("websitestatus.txt", "a")
          fi.write("1 ")
          fi.close()

cnx.commit()

cursor.close()
cnx.close()
