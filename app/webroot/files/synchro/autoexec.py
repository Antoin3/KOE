import xbmc, time

time.sleep(2)
xbmc.executebuiltin('XBMC.UpdateLibrary(video,smb://admin:admin@10.10.10.101/Multimedia/Videos)')
time.sleep(2)
xbmc.executebuiltin('XBMC.UpdateLibrary(video,smb://admin:admin@10.10.10.101/Multimedia/TV shows)')
time.sleep(2)
xbmc.executebuiltin('XBMC.UpdateLibrary(music,smb://admin:admin@10.10.10.101/Multimedia/DTC)')
time.sleep(2)
xbmc.executebuiltin('System.Exec(./storage/scripts/script.sh)')