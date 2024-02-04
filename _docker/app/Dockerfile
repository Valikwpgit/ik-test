FROM php:8.2-fpm

RUN apt-get update && apt-get install -y curl
RUN usermod -u 1000 www-data
RUN groupmod -g 1000 www-data

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    default-mysql-server \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY _docker/app/check_and_download.sh /usr/local/bin/check_and_download.sh

RUN chmod +x /usr/local/bin/check_and_download.sh
ENTRYPOINT ["/usr/local/bin/check_and_download.sh"]

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

RUN docker-php-ext-configure opcache --enable-opcache

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    libbz2-dev \
    libffi-dev \
    libgmp-dev \
    libldap2-dev \
    libxml2-dev \
    libtidy-dev \
    libxslt-dev \
    libmhash-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    curl \
    apt-utils \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    libexif-dev \
    && docker-php-ext-configure gd  \
    --with-freetype \
    --with-jpeg \
    --with-webp  \
    && docker-php-ext-install -j$(nproc) \
        gd \
        opcache \
        xml \
        curl \
        dom \
        filter \
        mbstring \
        pdo \
        session \
        ctype \
        exif \
        fileinfo \
        bz2 \
        calendar \
        dba \
        ffi \
        gettext \
        gmp \
        ldap \
        mysqli \
        shmop \
        soap \
        sockets \
        sysvmsg \
        sysvsem \
        sysvshm \
        tidy \
        xsl \
        pdo_mysql \
        bcmath \
        zip

RUN apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install Imagick
RUN apt-get update && apt-get install -y \
      libmagickwand-dev --no-install-recommends
RUN pecl install imagick && docker-php-ext-enable imagick

#RUN apt-get install -y npm

COPY _docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

RUN apt-get update && apt-get install -y autoconf build-essential

#RUN apt-get update && apt-get install -y nano

CMD ["php-fpm"]

WORKDIR /var/www
