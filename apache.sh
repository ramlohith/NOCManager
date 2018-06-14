#!/bin/bash

while true
do

echo "IP Address:" > apachedetails.txt
ipadd=$(awk '/login.php / {print $1}' /var/log/apache2/access.log)
echo "$ipadd" >> apachedetails.txt

echo "Time:" >> apachedetails.txt
awk '/login.php / {print $4}' /var/log/apache2/access.log >> apachedetails.txt

echo "OS:" >> apachedetails.txt
awk '/login.php / {print $14}' /var/log/apache2/access.log >> apachedetails.txt

echo "Browser:" >> apachedetails.txt
awk '/login.php / {print $19}' /var/log/apache2/access.log >> apachedetails.txt

python apache.py

sleep 10m
done

