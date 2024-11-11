FROM php:8.2-cli

WORKDIR /app

COPY index.php .

CMD ["php", "index.php"]