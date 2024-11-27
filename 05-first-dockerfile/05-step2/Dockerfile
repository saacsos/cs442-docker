FROM php:8.3.14-cli

EXPOSE 8000
RUN mkdir /myproject
COPY index.php /myproject
WORKDIR /myproject
CMD ["php", "-S", "0.0.0.0:8000"]