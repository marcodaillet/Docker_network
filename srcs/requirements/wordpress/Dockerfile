FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y php
RUN apt-get install -y php-mysql
RUN apt-get install -y tar
RUN apt-get install -y php-fpm
RUN apt-get install -y wget
# install all we need

RUN wget https://fr.wordpress.org/latest-fr_FR.tar.gz
# Gets lates wp

RUN tar xzvf latest-fr_FR.tar.gz
# Extract
RUN rm latest-fr_FR.tar.gz
# Remove trash
RUN mv -f wordpress /var/www/
# Moves wordpress in the right place

RUN chown -R www-data:www-data /var/www/wordpress
# Recursively change the ownership of my wordpress folder to the user and groupe www-data, which is the php-fpm proxy user and group (so it has access to wordpress files (see www-conf)

RUN rm -rf /var/www/wordpress/wp-config-sample.php
# Removes default wp config

COPY ./wp-config.php /var/www/wordpress
COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf
# puts our conf files in the right place

RUN mkdir -p /run/php/

ENTRYPOINT ["php-fpm7.3", "-F"]
# Runs php-fpm

