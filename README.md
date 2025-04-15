# Pawtastic - Pet Grooming Appointment App

This is a simple Laravel web application developed as part of a technical assessment. It allows users to book pet grooming appointments by submitting a form with preferred schedule options.

---

## Features

- Pet grooming appointment booking form
- Bootstrap 5 UI with responsive layout
- Date and time slot selection
- Server-side validation with error/success alerts

---

## Tech Stack

- **Framework**: Laravel 12
- **Language**: PHP 8
- **Frontend**: Bootstrap 5, HTML/CSS
- **Database**: MySQL (or compatible)
- **Animation**: AOS (Animate on Scroll)

---

## ⚙️ Installation & Setup

Follow these steps to set up and run the application locally:

1. Clone the project:

- git clone https://github.com/Jpaolo09/SVEN-Web-janpaolocortez.git

2. Install Dependencies:

-  composer intall

3. Create a copy of the environment file:

- cp .env.example .env

4. Generate application key:

- php artisan key:generate

5. Configure your .env file:

- Update the following lines with your database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pawtastic
DB_USERNAME=root
DB_PASSWORD=

6. Create a new databas using your preferred method (e.g. PHPMyAdmin, MySQL, CLI, etc.):

- CREATE DATABASE pawtastic;

6. Run migrations:

- php artisan migrate

7. Start Development server:

- php artisan serve
- Visit http://127.0.0.1:8000 to access the app.