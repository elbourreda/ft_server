#mysql

apt install gdebi-core -y
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
#dpkg -i mysql-apt-config_0.8.14-1_all.deb
gdebi -n mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start

#create DB & user
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'rel-bour'@'localhost' IDENTIFIED BY 'rel-bour';";
mysql --password=rel-bour --user=rel-bour -e "CREATE DATABASE wordpress;";
mysql --password=rel-bour --user=rel-bour -e "FLUSH PRIVILEGES;";

#import DB
mysql --password=rel-bour --user=rel-bour wordpress < /conf/localhost.sql