# Debian is a pretty heavy  but complete linux distro, so we wont have to manually install 1353235 things
FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y nginx openssl

COPY default /etc/nginx/sites-available/default

RUN openssl req -newkey rsa:4096 -x509 -days 365 -nodes -out inception.pem -keyout inception.key -subj "/C=FR/ST=Paris/L=Paris/O=42Paris/OU=mdaillet"

# These ugly commands generates an SSL certificate, here is all the options
# -nodes -> If a private key is created it will not be encrypted
# -x509 -> outputs a self-signed certificate instead of a request
# -days n -> needs x509 to work, specify the number of days to certify the certificate for
# -newkey rsa:nbits -> creates a new certificate request and a new RSA key where nbits is the size of the key
# -keyout filename -> gives the filename where to store the newly generated key
# -out filename -> same but to store the certificate itself
# -subj arg -> set subject name

RUN mv inception.pem /etc/ssl/
RUN mv inception.key /etc/ssl/
# After creating the key and the certificate we move them where we need them in our container

CMD ["nginx", "-g", "daemon off;"]
# Define that the container is running nginx and is not a daemon
# A daemon is a background running process, by specifying daemon off, we are saying that nginx should stay at the foreground. Its not capital but its a good practice here because with docker, its one container one process
# -g means global directives, it is to be able to set the daemon off

# RUN exec inside container
# COPY exec from outside to inside
# CMD define the program that will be run inside the container
