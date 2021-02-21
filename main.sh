#!bin/bash
cd /home/pi/Documents/qtzctl/
source ~/.bashrc
rails s -b 192.168.1.104 -p 80 -e production
