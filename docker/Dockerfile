FROM php:7.4.12-fpm-buster

RUN apt-get -y update && \
    apt-get -y install \
    bzip2 \
    libzip-dev; \
    apt-get clean

RUN docker-php-ext-install \
    pdo \
    pdo_mysql

#Install composer for Local Dev
RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
    # Make sure we're installing what we think we're installing!
    && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \
    && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer --version=2.0.7 \
    && rm -f /tmp/composer-setup.*
