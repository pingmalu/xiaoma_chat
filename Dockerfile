FROM tutum/apache-php:latest

WORKDIR /
RUN apt-get update && \
	rm -rf /app && \
	mkdir /app && \
    rm -rf /var/lib/apt/lists/*
	
RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

ADD index.php /app/index.php
ADD run.sh /run.sh
RUN chmod +x /*.sh

EXPOSE 80
CMD ["/run.sh"]