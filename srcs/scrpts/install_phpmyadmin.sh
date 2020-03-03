#phpmyadmin

apt-get install php7.3-fpm php7.3-mbstring -y

cd /var/www/html/
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
mv phpMyAdmin-5.0.1-all-languages phpmyadmin
rm *.zip
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
rm /var/www/html/phpmyadmin/config.sample.inc.php
cp /conf/config.inc.php /var/www/html/phpmyadmin/
service php7.3-fpm start
