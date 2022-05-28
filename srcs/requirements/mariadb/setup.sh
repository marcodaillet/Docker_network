#!/bin/sh
service mysql start; #Starts mysql

#mysql -e means -execute, it will execute those SQL Cmds inside mysql

mysql -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE"; #Create a database inside the container
mysql -e "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'"; #Take the env variables and create a User with it
mysql -e "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%'"; #Customing my new user
mysql $MYSQL_DATABASE -u root < ./exported.sql #Importing my previously exported site under a SQL script into my new database
mysql -e "ALTER USER '$MYSQL_ROOT'@'localhost' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD'; FLUSH PRIVILEGES;" #Changes the default pwd for root
mysqladmin -u$MYSQL_ROOT -p$MYSQL_ROOT_PASSWORD shutdown #Exit the admin session

exec mysqld #Execute the main purpose of the container
