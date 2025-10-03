FROM php:8.1-apache

# Set ServerName agar tidak ada warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Ubah Apache listen ke 7860 (port default Hugging Face Spaces)
RUN sed -i 's/80/7860/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Copy semua file project ke direktori web Apache
COPY . /var/www/html/

# Expose port 7860
EXPOSE 7860

CMD ["apache2-foreground"]
