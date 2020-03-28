<?php

$data=array();
$data['adapters']['2']=array('wlan0','aa:aa:aa:aa:aa:aa'); // your 2ghz adapter
$data['adapters']['5']=array('wlan1','bb:bb:bb:bb:bb:bb'); // your 5ghz adapter
$data['bssid']='My_SSID'; // your accesspoint ssid
$data['lastneighupdate']=0;
$data['servertype']='hostapd'; // hostapd or openwrt
$data['rssi-2-to-5']=60; // try to roam to own 5ghz at this 2ghz rssi
$data['rssi-2-to-5-min']=65; // if 5ghz has this rssi, roam
$data['rssi-5-to-other']=65; // scan $beaconcheck[5] as this rssi
$data['rssi-5-to-other-min']=62; // if candidate has this rssi, roam
$data['rssi-2-to-other']=70; // scan $beaconcheck[2] as this rssi
$data['rssi-2-to-other-min']=65; // if candidate has this rssi, roam

$roamers=array();
$roamers['cc:cc:cc:cc:cc:cc']=array(); // mac address of your client

$neigh=array();
$neigh['dd:dd:dd:dd:dd:dd']='....'; // mac + neighbor report for everyone of your access points (2+5ghz, ALL of them)

$beaconcheck=array(); // all the entries below MUST be listed in $neigh
$beaconcheck[2][]='ee:ee:ee:ee:ee:ee'; // list of possible roam locations for rssi-2-to-other + rssi-2-to-other-min
$beaconcheck[2][]='ff:ff:ff:ff:ff:ff';
# weak 5.8ghz can roam to
$beaconcheck[5][]='ee:ee:ee:ee:ee:ee'; // list of possible roam locations for rssi-5-to-other + rssi-5-to-other-min
$beaconcheck[5][]='ff:ff:ff:ff:ff:ff';

$beaconcache=array();

?>
