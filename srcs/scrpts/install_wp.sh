#wordpress

cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip *.zip
rm *.zip
cp -r /var/www/html/wordpress/* /var/www/html/
cp /conf/wp-config.php /var/www/html/
rm -rf /var/www/html/wp-config-sample.php
rm -rf /var/www/html/wordpress

#install supervisord
cd /
apt-get -y install supervisor;
mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv /conf/supervisord.conf /etc/supervisord.conf;