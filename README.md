# basic-store-creator
A basic website to create online stores with custom subdomains.

## Prerequisites

#### Without Docker
- PHP >= 8.2
- Node.js >= 18
- Composer
- SQLite
 - Git

#### With Docker
- Git
- Composer
- Docker
- Docker Compose

## Installation

### Without Docker

1. Clone the repository:
    ```bash
    git clone https://github.com/rootpaqui/basic-store-creator.git
    cd laravel-sqlite-project
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Create the SQLite database file:
    ```bash
    touch database/database.sqlite
    ```

6. Run the migrations:
    ```bash
    php artisan migrate
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```

### With Docker

1. Clone the repository:
    ```bash
    git clone https://github.com/rootpaqui/basic-store-creator.git
    cd laravel-sqlite-project
    ```

2. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

3. Build and start the Docker containers:
    ```bash
    ./vendor/bin/sail up
    ```

4. Run the migrations:
    ```bash
    ./vendor/bin/sail artisan migrate
    ```

5. Access the application at `http://localhost`.
