#!/bin/bash

while true
do
wget -O /dev/null http://speedtest.wdc01.softlayer.com/downloads/test100.zip &> intranet.txt

awk '/2017/ {print $3,$4,$5}' /var/www/html/DeseAdmin/intranet.txt >> speedlog.txt

sleep 20m

echo "done"

done


