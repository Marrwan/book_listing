# Book Listing App

## Overview

The **Book Listing App** is a simple yet powerful web application that allows users to browse and manage a collection of books. It provides an intuitive user interface, allowing users to search, view, and manage books in their personal library.

This project is built with **Laravel** for the backend and **Bootstrap** for the frontend, with a focus on a user-friendly, responsive design. Users can sign up, log in, browse books, and manage their reading list.

## Features

- **User Authentication**: Register, login, and manage user accounts.
- **Book Management**: Browse, add, edit, and delete books.
- **Book Details**: View detailed information about each book.
- **Responsive Design**: Fully responsive, optimized for desktop, tablet, and mobile devices.
- **Modern UI**: Utilizes Bootstrap for a clean and professional layout.
- **Personalized Recommendations**: Suggests books based on user behavior (future feature).
- **Easy Navigation**: A simple navigation bar with quick access to important sections.

## Technologies Used

- **Frontend**:
    - HTML, CSS, Bootstrap 5
- **Backend**:
    - Laravel
    - PHP
- **Database**:
    - MySQL
- **Authentication**:
    - Laravel Authentication System

## Installation

Follow these steps to set up the project on your local machine:

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/book-listing-app.git
cd book-listing-app
```
2. Install dependencies
   Make sure you have Composer and Node.js installed on your system.

Run the following commands to install Laravel and frontend dependencies:

```bash
# Install PHP dependencies
composer install


# Install frontend dependencies
npm install
```
3. Configure the environment
   Copy the .env.example file to .env and update your database and environment variables:

```bash
cp .env.example .env
```
Edit the .env file to set your database and app configuration:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_listing
DB_USERNAME=root
DB_PASSWORD=
````
4. Generate the application key
   Run the following command to generate the app's encryption key:

```bash
php artisan key:generate
```
5. Migrate the database
   Run the migrations to set up your database tables:

```bash
php artisan migrate
```
6. Serve the application
   You can now serve the application using Laravel's built-in server:

```bash
php artisan serve
```

By default, the app will be available at http://localhost:8000.
