#!/bin/bash

while true
do

truncate -s 0 /var/www/html/DeseAdmin/details.txt
sudo iptraf-ng -d enp8s0 -t 1 -L /var/www/html/DeseAdmin/details.txt

awk 'BEGIN {ORS = " "}; /IP: /{print $2};' /var/www/html/DeseAdmin/details.txt >random.txt
awk 'BEGIN {ORS = " "}; /TCP:/{print $2};' /var/www/html/DeseAdmin/details.txt >> random.txt

awk 'BEGIN {ORS = " " }; /UDP:/{print $2}' /var/www/html/DeseAdmin/details.txt >> random.txt 

awk 'BEGIN {ORS = " " }; /ICMP:/{print $2}' /var/www/html/DeseAdmin/details.txt >> random.txt

awk 'BEGIN {ORS = " " }; /Other IP:/{print $3}' /var/www/html/DeseAdmin/details.txt >> random.txt

awk 'BEGIN {ORS = " "}; /Broadcast: /{print $2}' /var/www/html/DeseAdmin/details.txt>>random.txt

awk 'BEGIN {ORS = " "}; /incoming: /{print $2};' /var/www/html/DeseAdmin/details.txt>>random.txt
awk 'BEGIN {ORS = " "}; /outgoing: /{print $7};' /var/www/html/DeseAdmin/details.txt >> random.txt

echo "done"
sleep 6000
done

