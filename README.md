# BuzzMe
BuzzMe is a hack for my appartement buzzer. It allows users connected via LAN to buzz people into the appartment.

#Hardware
It's a RaspberryPi hack, that uses an octocoupler and a wlan dongle to control the appartment buzzer's circuit. On the software

#Software
Created an apache server with my pi that host a php site. Using ajax, a button runs a php file, that runs a python script that turns on the octocopuler, tiggering the buzzer.

