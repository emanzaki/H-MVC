# HMVC Implementation with Laravel

## Overview

This repository demonstrates the implementation of HMVC (Hierarchical Model-View-Controller) architecture in Laravel, a popular PHP web application framework. HMVC is an extension of the MVC (Model-View-Controller) architecture, providing a modular and organized approach to building scalable and maintainable applications.

### Table of Contents
1. [Installation](#installation)
2. [Folder Structure](#folder-structure)
3. [Routing](#routing)
4. [Controllers](#controllers)
5. [Models](#models)
6. [Views](#views)
7. [Service Providers](#service-providers)
8. [Middleware](#middleware)
9. [Configuration](#configuration)
10. [Contributing](#contributing)
11. [License](#license)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/emanzaki/H-MVC.git
   ```

2. Change into the project directory

3. Install Composer dependencies:

   ```bash
   composer install
   ```

4. Copy `.env.example` to `.env` and configure the database connection.

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Run migrations and seeders:

   ```bash
   php artisan migrate --seed
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

8. Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Folder Structure

- **app**
  - **Modules**
    - **ExampleModule**
      - **Models**
      - **resouces**
        - **views**
      - **Providers**
      - **config**
      - **database**
      - **routes**
      - **Http**
        - **Middleware**
        - **Controllers**
        

- **config**
- **resources**
  - **views**
- **routes**
  - **web.php**



## Routing

Routes for each module are defined in the `routes/web.php` file. You can use the `moduleRoute` helper function to define routes for a specific module.

```php
moduleRoute('ExampleModule', function () {
    Route::get('/example', 'ExampleController@index');
});
```

## Controllers

Controllers for each module are stored in the `app/Modules/ExampleModule/Controllers` directory. You can create controllers using Artisan:

```bash
php artisan make:controller ExampleModule\\ExampleController
```

## Models

Models for each module are stored in the `app/Modules/ExampleModule/Models` directory. Create models using Artisan:

```bash
php artisan make:model ExampleModule\\ExampleModel
```

## Views

Views for each module are stored in the `resources/views/modules/ExampleModule` directory. You can organize your views based on your module's structure.

## Service Providers

Service providers for each module can be created using Artisan:

```bash
php artisan make:provider ExampleModule\\ExampleServiceProvider
```

## Middleware

Middleware for a specific module can be created using Artisan:

```bash
php artisan make:middleware ExampleModule\\ExampleMiddleware
```

## Configuration

Configuration for each module is stored in the `config` directory. Customize the configuration files according to your module's requirements.


## Contributing

1. Fork the repository.
2. Create a new branch for your feature: `git checkout -b feature-name`
3. Make your changes and commit: `git commit -m "Add new feature"`
4. Push to the branch: `git push origin feature-name`
5. Create a pull request.

## License

This project is licensed under the MIT License