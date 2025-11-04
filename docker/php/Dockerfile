FROM php:8.3-fpm-bullseye

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chmod +x /usr/local/bin/composer

# ติดตั้ง extension intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl

# ติดตั้ง extension zip
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip

# ติดตั้ง extension soap
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    && docker-php-ext-install soap

# ติดตั้ง extension socket
RUN apt-get update && apt-get install -y \
    libcurl4-openssl-dev \
    && docker-php-ext-install sockets

# ติดตั้ง extension redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# ติดตั้ง extension mysqli
RUN apt-get update && apt-get install -y \
    libmariadb-dev \
    && docker-php-ext-install mysqli

# ติดตั้ง MSSQL ODBC driver
RUN apt-get update && apt-get install -y \
    gnupg2 curl lsb-release apt-transport-https unixodbc-dev \
    libgssapi-krb5-2 libodbc1 gcc g++ make autoconf libc-dev pkg-config libssl-dev \
    zip unzip git \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/11/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update && ACCEPT_EULA=Y apt-get install -y msodbcsql18 mssql-tools18 \
    && echo 'export PATH="$PATH:/opt/mssql-tools18/bin"' >> ~/.bashrc \
    && pecl install sqlsrv pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv \
    && docker-php-ext-install pdo

WORKDIR /var/www/html