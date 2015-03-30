#!/bin/sh

cd /

mount flash -o remount,rw

cd ../../flash
case $1 in

MPG2)
sed -i '/=/ s/\(.*\)decode_MPG2=\(.*\)/decode_MPG2='$2'/g' config.txt;;

WVC1)
sed -i '/=/ s/\(.*\)decode_WVC1=\(.*\)/decode_WVC1='$2'/g' config.txt;;

2)
sed -i '/=/ s/\(.*\)decode_MPG2=\(.*\)/decode_MPG2='$2'/g' config.txt
sed -i '/=/ s/\(.*\)decode_WVC1=\(.*\)/decode_WVC1='$3'/g' config.txt;;

esac

exit 0
