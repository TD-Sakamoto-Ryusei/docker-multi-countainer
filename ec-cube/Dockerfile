FROM php:7.4-apache-bullseye

ENV APACHE_DOCUMENT_ROOT ./ec-cube

RUN apt update \
  && apt upgrade -y \
  && apt install --no-install-recommends -y \
    apt-transport-https \
    apt-utils \
    build-essential \
    curl \
    debconf-utils \
    gcc \
    git \
    vim \
    gnupg2 \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    libzip-dev \
    locales \
    ssl-cert \
    unzip \
    zlib1g-dev \
    libwebp-dev \
  && apt upgrade -y ca-certificates \
  && apt clean \
  && rm -rf /var/lib/apt/lists/* \
  && echo "en_US.UTF-8 UTF-8" >/etc/locale.gen \
  && locale-gen \
  ;

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install -j$(nproc) zip gd mysqli pdo_mysql opcache intl pgsql pdo_pgsql \
  ;

RUN pecl install apcu && echo "extension=apcu.so" > /usr/local/etc/php/conf.d/apc.ini

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
  && apt update \
  && apt install -y nodejs \
  && apt clean \
  ;

RUN mkdir -p ${APACHE_DOCUMENT_ROOT} \
  && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
  && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
  ;

RUN a2enmod rewrite headers ssl
# Enable SSL
RUN ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
EXPOSE 443

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# Override with custom configuration settings
COPY ec-cube/dockerbuild/php.ini $PHP_INI_DIR/conf.d/
COPY ec-cube/dockerbuild/docker-php-entrypoint /usr/local/bin/

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/bin/composer && \
    php /usr/bin/composer selfupdate --2 && \
    php /usr/bin/composer create-project ec-cube/ec-cube ec-cube "4.2.x-dev" --keep-vcs

# Composerの設定
RUN composer config -g repos.packagist composer https://packagist.jp

#symfony
RUN curl -sS https://get.symfony.com/cli/installer | bash

COPY . ${APACHE_DOCUMENT_ROOT}
WORKDIR ${APACHE_DOCUMENT_ROOT}

RUN find ${APACHE_DOCUMENT_ROOT} \( -path ${APACHE_DOCUMENT_ROOT}/vendor -prune \) -or -print0 \
  | xargs -0 chown www-data:www-data \
  && find ${APACHE_DOCUMENT_ROOT} \( -path ${APACHE_DOCUMENT_ROOT}/vendor -prune \) -or \( -type d -print0 \) \
  | xargs -0 chmod g+s \
  ;

RUN cd ec-cube &&\
    cat .env

RUN pwd && \
    composer clear-cache && \
    composer install --no-scripts --no-autoloader --no-plugins -d ${APACHE_DOCUMENT_ROOT}

RUN cd ec-cube &&\
    bin/console cache:clear && \
    bin/console doctrine:database:create && \
    bin/console doctrine:schema:create && \
    bin/console eccube:fixtures:load && \
    bin/console eccube:composer:install

HEALTHCHECK --interval=10s --timeout=5s --retries=30 CMD pgrep apache