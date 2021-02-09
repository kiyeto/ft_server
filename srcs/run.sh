#!/bin/sh

echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
rm -f mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install -y mysql-server

service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'ab'@localhost IDENTIFIED BY '123';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO 'ab'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
mysql -u root wordpress < wordpressdb.sql

service php7.3-fpm start
service nginx start

bin/bash