FROM php:7.1-apache
RUN apt-get update
RUN apt-get install -y \
  curl \
  git \
  apt-utils \
  libpq-dev \
  gnupg \
  libxml2-dev
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV ACCEPT_EULA=Y

# Microsoft SQL Server Prerequisites
RUN apt-get update \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/9/prod.list \
        > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get install -y --no-install-recommends \
        locales \
        apt-transport-https \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen \
    && apt-get update \
    && apt-get -y --no-install-recommends install \
        unixodbc-dev \
        msodbcsql17

RUN docker-php-ext-install mbstring pdo pdo_mysql soap \
    && pecl install sqlsrv pdo_sqlsrv xdebug \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv xdebug

RUN a2enmod rewrite
ENV APP_HOME /var/www/html
RUN mkdir -p /opt/data/public && \
  rm -r /var/www/html && \
  ln -s /opt/data/public $APP_HOME
WORKDIR $APP_HOME
