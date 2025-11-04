FROM httpd:2.4

# เปิดใช้งาน modules และคัดลอก config
RUN apt-get update && apt-get install -y vim \
    && mkdir -p /usr/local/apache2/conf/custom

COPY httpd.conf /usr/local/apache2/conf/httpd.conf
