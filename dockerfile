# Use the official PHP image
FROM php:8.2-cli

# Set the working directory
WORKDIR /var/www/html

# Copy all files into the container
COPY . .

# Expose port 10000 (Render uses 10000 internally)
EXPOSE 10000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
