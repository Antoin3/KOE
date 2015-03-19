#!/bin/sh

cd scripts

sed -i "/# AC/i\		curl\ -i\ -X\ POST\ -H\ \"Content-Type:\ application\/json\"\ -d\ \'{\"jsonrpc\":\ \"2.0\",\ \"method\":\ \"AudioLibrary.Clean\",\ \"id\":\ \"2\"}\'\ http:\/\/"$1"\/jsonrpc\ &\ wait" script.sh
sed -i "/# AS/i\		curl\ -i\ -X\ POST\ -H\ \"Content-Type:\ application\/json\"\ -d\ \'{\"jsonrpc\":\ \"2.0\",\ \"method\":\ \"AudioLibrary.Scan\",\ \"id\":\ \"2\"}\'\ http:\/\/"$1"\/jsonrpc\ &\ wait" script.sh
sed -i "/# VC/i\		curl\ -i\ -X\ POST\ -H\ \"Content-Type:\ application\/json\"\ -d\ \'{\"jsonrpc\":\ \"2.0\",\ \"method\":\ \"VideoLibrary.Clean\",\ \"id\":\ \"2\"}\'\ http:\/\/"$1"\/jsonrpc\ &\ wait" script.sh
sed -i "/# VS/i\		curl\ -i\ -X\ POST\ -H\ \"Content-Type:\ application\/json\"\ -d\ \'{\"jsonrpc\":\ \"2.0\",\ \"method\":\ \"VideoLibrary.Scan\",\ \"id\":\ \"2\"}\'\ http:\/\/"$1"\/jsonrpc\ &\ wait" script.sh

exit 0