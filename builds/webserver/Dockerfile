FROM php:7.3.3-apache

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y
RUN docker-php-ext-install mysqli
RUN apt-get -y install apt-utils nano wget dialog
RUN apt-get -y install --fix-missing apt-utils build-essential git curl libcurl3 libcurl3-dev zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 80