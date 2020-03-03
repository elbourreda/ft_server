#instal tolls
apt-get update
apt-get upgrade -y
apt-get install wget unzip -y

#nginx
bash /scrpts/install_nginx.sh

#install phpmyadmin
bash /scrpts/install_phpmyadmin.sh

#ssl
bash /scrpts/install_ssl.sh

#mysql
bash /scrpts/install_mysql.sh

#wordpress
bash /scrpts/install_wp.sh