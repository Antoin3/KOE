#!/bin/sh

cd /

mount flash -o remount,rw

cd ../../flash
case $1 in

default)
sed -i '/=/ s/\(.*\)arm_freq=\(.*\)/arm_freq=700/g' config.txt
sed -i '/=/ s/\(.*\)core_freq=\(.*\)/core_freq=250/g' config.txt
sed -i '/=/ s/\(.*\)sdram_freq=\(.*\)/sdram_freq=400/g' config.txt
sed -i '/=/ s/\(.*\)over_voltage=\(.*\)/over_voltage=0/g' config.txt;;

modest)
sed -i '/=/ s/\(.*\)arm_freq=\(.*\)/arm_freq=800/g' config.txt
sed -i '/=/ s/\(.*\)core_freq=\(.*\)/core_freq=300/g' config.txt
sed -i '/=/ s/\(.*\)sdram_freq=\(.*\)/sdram_freq=400/g' config.txt
sed -i '/=/ s/\(.*\)over_voltage=\(.*\)/over_voltage=0/g' config.txt;;

medium)
sed -i '/=/ s/\(.*\)arm_freq=\(.*\)/arm_freq=900/g' config.txt
sed -i '/=/ s/\(.*\)core_freq=\(.*\)/core_freq=333/g' config.txt
sed -i '/=/ s/\(.*\)sdram_freq=\(.*\)/sdram_freq=450/g' config.txt
sed -i '/=/ s/\(.*\)over_voltage=\(.*\)/over_voltage=2/g' config.txt;;

high)
sed -i '/=/ s/\(.*\)arm_freq=\(.*\)/arm_freq=950/g' config.txt
sed -i '/=/ s/\(.*\)core_freq=\(.*\)/core_freq=450/g' config.txt
sed -i '/=/ s/\(.*\)sdram_freq=\(.*\)/sdram_freq=450/g' config.txt
sed -i '/=/ s/\(.*\)over_voltage=\(.*\)/over_voltage=6/g' config.txt;;

turbo)
sed -i '/=/ s/\(.*\)arm_freq=\(.*\)/arm_freq=1000/g' config.txt
sed -i '/=/ s/\(.*\)core_freq=\(.*\)/core_freq=500/g' config.txt
sed -i '/=/ s/\(.*\)sdram_freq=\(.*\)/sdram_freq=500/g' config.txt
sed -i '/=/ s/\(.*\)over_voltage=\(.*\)/over_voltage=6/g' config.txt;;
esac

exit 0
