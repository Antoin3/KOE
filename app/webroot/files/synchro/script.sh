#!/bin/bash

cd ..

mount -t cifs //10.10.10.101/Multimedia/Videos /storage/partageF -o  username=admin,password=admin
mount -t cifs //10.10.10.101/Multimedia/TV\ shows /storage/partageS -o  username=admin,password=admin
mount -t cifs //10.10.10.101/Multimedia/DTC /storage/partageM -o  username=admin,password=admin

	
t1=$(find ../storage/partageM -type f | wc -l)
t2=$(find ../storage/partageS -type f | wc -l)
t3=$(find ../storage/partageF -type f | wc -l)

while true
do

if [ $t1 != $(find ../storage/partageM -type f | wc -l) ]
then
		t1=$(find ../storage/partageM -type f | wc -l)
		
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "AudioLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# AC
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "AudioLibrary.Scan", "id": "1"}' http://127.0.0.1/jsonrpc & wait
		# AS
		sleep 15s
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "AudioLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# AC
fi
if [ $t2 != $(find ../storage/partageS -type f | wc -l) ]
then
		t2=$(find ../storage/partageS -type f | wc -l)
		
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# VC
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "1"}' http://127.0.0.1/jsonrpc & wait
		# VS
		sleep 15s
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# VC
fi
if [ $t3 != $(find ../storage/partageF -type f | wc -l) ]
then
		t3=$(find ../storage/partageF -type f | wc -l)
		
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# VC
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Scan", "id": "1"}' http://127.0.0.1/jsonrpc & wait
		# VS
		sleep 15s
		curl -i -X POST -H "Content-Type: application/json" -d '{"jsonrpc": "2.0", "method": "VideoLibrary.Clean", "id": "2"}' http://127.0.0.1/jsonrpc & wait
		# VC
fi
done
exit 0
