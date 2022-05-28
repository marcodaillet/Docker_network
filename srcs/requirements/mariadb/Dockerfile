FROM    debian:buster

RUN     apt-get update -y && apt-get upgrade -y
RUN     apt-get install mariadb-server -y

COPY	setup.sh /setup.sh
COPY	my.cnf /etc/mysql/my.cnf
COPY    exported.sql ./

ENTRYPOINT    ["sh", "./setup.sh"]
