#!/bin/sh

echo "Running fpp-Hubitat PreStart Script"

sudo chmod 755 /home/fpp/media/plugins/fpp-Hubitat/commands/on.sh
sudo chmod 755 /home/fpp/media/plugins/fpp-Hubitat/commands/off.sh
sudo chmod 755 /home/fpp/media/plugins/fpp-Hubitat/commands/toggle.sh
sudo chmod 755 /home/fpp/media/plugins/fpp-Hubitat/commands/routine.sh
