FROM debian:buster
EXPOSE 80 443
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get install -y wget

# Setting up nginx
RUN apt-get install -y nginx
COPY srcs/default etc/nginx/sites-available/
COPY srcs/localhost.crt /etc/ssl/certs/
COPY srcs/localhost.key /etc/ssl/private/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# Setting up php & PhpMyAdmin
RUN apt-get install -y php7.3 php7.3-common php7.3-mbstring php7.3-mysql php7.3-fpm
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-english.tar.gz
RUN tar -xvf phpMyAdmin-4.9.4-english.tar.gz
RUN rm -f phpMyAdmin-4.9.4-english.tar.gz
RUN mv phpMyAdmin-4.9.4-english phpmyadmin
RUN cp -rf phpmyadmin /var/www/

# Setting up MySQL
RUN apt-get update
RUN apt-get install -y lsb-release gnupg
RUN wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb

#Setting up wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN rm -rf latest.tar.gz
RUN cp -rf wordpress /var/www/
COPY srcs/wp-config.php /var/www/wordpress
COPY srcs/index.php /var/www/
COPY srcs/wordpressdb.sql /
COPY srcs/run.sh /

ENTRYPOINT  sh run.sh