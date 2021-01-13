FROM php:8.0-rc

COPY . .

CMD ["php", "union.php"]