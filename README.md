## Welcome to the Netanalyzer!

This project is intended for Raspberry Pi with PiFace CAD installed. If you do not have a PiFace available, you can ignore the display file.

### What is the purpose of the project?
I have clients in my job who have problems with unstable network. But this box, we can do a test of the network, router and internet access for a desired time.

By editing settings in the database which IP addresses to be pinged one can see where the packets are stopped.

For example, we can ping 192.168.1.1 ip in the own lan and two remote ips.

### Prerequisites:
Paspberry Pi will run Linux. Preferably without X to reduce resource consumption. Pi must have the LAMP - Linux Apache MySQL and PHP installed.

### Installation:
To the scripts to automatically start we run it as a cronjob.

Next I added in cronetab. You change the file by typing "sudo crontab -e" in the prompt.

`#Run pingscriptet every minute.`

`* * * * * Php /var/www/ping.php`

`#Starts the display to show the current IP.`

`reboot python3 & /home/pi/display/ip.py`

**Good luck with your network analyzer!**
