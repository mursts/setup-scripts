#!/bin/bash

echo "deb http://ppa.launchpad.net/nginx/php5/ubuntu lucid main" > /etc/apt/sources.list.d/php5-lucid.list
echo "deb-src http://ppa.launchpad.net/nginx/php5/ubuntu lucid main" >> /etc/apt/sources.list.d/php5-lucid.list
aptitude update
aptitude install -y php5 php5-cgi php5-cli php-pear php-apc php5-fpm

