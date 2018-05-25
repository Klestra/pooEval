#!/bin/bash

sudo apt-get update

sudo apt-get install -y apache2
sudo apt-get install -y php7.0
sudo apt-get install -y libapache2-mod-php7.0
sudo service apache2 restart