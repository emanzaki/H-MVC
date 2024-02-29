# HMVC Implementation with Laravel

## Overview

This repository demonstrates the implementation of HMVC (Hierarchical Model-View-Controller) architecture in Laravel, a popular PHP web application framework. HMVC is an extension of the MVC (Model-View-Controller) architecture, providing a modular and organized approach to building scalable and maintainable applications.

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


## Contributing

1. Fork the repository.
2. Create a new branch for your feature: `git checkout -b feature-name`
3. Make your changes and commit: `git commit -m "Add new feature"`
4. Push to the branch: `git push origin feature-name`
5. Create a pull request.

## License

This project is licensed under the MIT License
