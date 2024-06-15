# Laravel API with Sanctum Authentication and Swapable Data Source

This is a Laravel project that provides RESTful APIs for province and city data with authentication using Laravel Sanctum. It supports swapable implementation for data sources, allowing you to fetch province and city data either from a database or from the RajaOngkir API.

## Requirements

- PHP >= 7.3
- Composer
- Laravel 8.x

## Installation

1. **Clone the repository:**

   ```bash
   git clone <repository-url>
   cd <project-folder>

2. Install dependencies:
    composer install

3. Set up environment variables:
    - Rename .env.example to .env and configure your database and RajaOngkir API credentials (RAJAONGKIR_API_KEY).
    - Set SANCTUM_STATEFUL_DOMAINS in .env to your frontend domain (e.g., localhost for local development).

4. Generate application key:
    php artisan key:generate

5. Run migrations:
    php artisan migrate

6. Install Laravel Sanctum:
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    php artisan migrate

7. Start the development server:
    php artisan serve

8. Swapable Data Source
    You can configure whether to fetch data from the database or the RajaOngkir API by setting the DATA_SOURCE variable in .env file.
    DATA_SOURCE=database # or api

9. Running Tests
    vendor/bin/phpunit
