#!/bin/bash


echo Waking up computer!
file="/var/www/html/DeseAdmin/wake.txt"

x=$(cat "$file")

echo $x

wakeonlan $x


