FROM php:7.2-apache

COPY . .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "./index.php"]