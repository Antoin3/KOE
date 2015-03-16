
#!/bin/sh

cd /

mount flash -o remount,rw

cd ../../flash
sed -n '/arm_freq=\(.*\)/p' config.txt
sed -n '/core_freq=\(.*\)/p' config.txt
sed -n '/sdram_freq=\(.*\)/p' config.txt
sed -n '/over_voltage=\(.*\)/p' config.txt

exit 0
