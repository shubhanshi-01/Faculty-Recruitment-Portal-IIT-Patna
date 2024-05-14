
FROM php:latest

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the project files to the working directory
COPY . /var/www/html

# Install any necessary dependencies
RUN apt-get update && apt-get install -y \
    # Add any additional dependencies required by your project here
    && docker-php-ext-install pdo_mysql

# Expose the port on which your application will run (if applicable)
EXPOSE 80

# Start the PHP development server
CMD ["php", "-S", "0.0.0.0:80"]