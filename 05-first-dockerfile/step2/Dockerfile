FROM php:8.1.5-cli

EXPOSE 8000
RUN mkdir /myproject
COPY index.php /myproject
WORKDIR /myproject
CMD ["php", "-S", "0.0.0.0:8000"]