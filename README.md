# Admin Panel - Insurance Management System

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

## About The Project

This is a comprehensive admin panel built with Laravel, designed specifically for insurance management. The system provides a robust platform for managing insurance policies, claims, clients, and administrative tasks.

## Features (Upcoming)

-   User Authentication and Authorization
-   Dashboard with Analytics
-   Insurance Policy Management
-   Claims Processing
-   Client Management
-   Document Management
-   Reporting System
-   Email Notifications
-   Audit Trail

## Tech Stack

-   **Framework:** Laravel 12.x
-   **PHP Version:** 8.2+
-   **Database:** SQLite (default), supports MySQL
-   **Frontend:** Blade Templates, CSS, JavaScript
-   **Authentication:** Laravel Breeze/Sanctum

## Prerequisites

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   Git

## Installation

1. Clone the repository

```bash
git clone https://github.com/noumanhussain/adminpanel-inc.git
```

2. Navigate to the project directory

```bash
cd adminpanel-inc
```

3. Install PHP dependencies

```bash
composer install
```

4. Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```

5. Generate a new application key

```bash
php artisan key:generate
```

6. Run database migrations

```bash
php artisan migrate
```

7. Start the local development server

```bash
php artisan serve
```

You can now access the server at http://localhost:8000

## Development Roadmap

-   [ ] Basic Authentication Setup
-   [ ] Dashboard Implementation
-   [ ] User Management
-   [ ] Policy Management
-   [ ] Claims Management
-   [ ] Reporting System
-   [ ] API Integration
-   [ ] Testing Suite

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

Nouman Hussain - [@noumanhussain](https://github.com/noumanhussain)

Project Link: [https://github.com/noumanhussain/adminpanel-inc](https://github.com/noumanhussain/adminpanel-inc)
