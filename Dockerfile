FROM ubuntu/apache2
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update \
    && apt-get -y upgrade \
    && rm -rf /var/lib/apt/lists/* 
RUN apt-get update \
    && apt-get -y install php php-mysqli    
RUN a2enmod rewrite       
COPY . /var/www/html/
COPY 000-default.conf /etc/apache2/sites-available