#nginx
apt-get install nginx -y
rm /etc/nginx/sites-available/default
cp /conf/default /etc/nginx/sites-available
nginx -g 'daemon off;'
service nginx start