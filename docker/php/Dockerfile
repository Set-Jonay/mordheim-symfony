FROM php:8.0.6-fpm

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update 
RUN apt-get install -y git openssl openssh-client wget zip libssh-dev libpq-dev
RUN apt-get install -y libpng-dev zlib1g-dev libzip-dev libxml2-dev libicu-dev 
RUN docker-php-ext-install intl pdo pdo_pgsql zip gd soap bcmath sockets

RUN apt-get install -y gnupg2
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN composer self-update

RUN mkdir -p /appdata/wwwroot

WORKDIR /appdata/wwwroot