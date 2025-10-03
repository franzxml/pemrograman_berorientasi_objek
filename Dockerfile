FROM php:8.1-apache

# Set ServerName agar tidak ada warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy semua file ke folder default Apache
COPY . /var/www/html/

# Expose port yang dipakai Hugging Face (7860 default)
EXPOSE 7860