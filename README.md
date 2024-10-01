# Laravel API Project

## Overview
This project is a RESTful API built with Laravel that provides endpoints for user authentication and product management. The API is designed to handle user login using JWT (JSON Web Tokens) and retrieve a list of products securely.

## Features
- User authentication with JWT
- Secure product and customer end points retrieval
- Well-structured codebase following best practices
  
### MySQL Configuration
#### Set Up MySQL Database
#### Create a new MySQL database: You can create a database for your Laravel application using the following SQL command:

#### sql
#### Copy code
    CREATE DATABASE laravel_api;
    
#### MySQL Configuration in .env: After setting up your MySQL database, update the .env file with your MySQL credentials. Ensure the following lines are correctly configured:

#### bash
#### Copy code

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tech
    DB_USERNAME=your_mysql_username
    DB_PASSWORD=your_mysql_password

## API Endpoints

### Authentication

#### Login
- **Endpoint:** `POST /api/login`
- **Description:** Authenticates a user and returns a JWT token.
- **Request Body:**
  ```json
  {
      "email": "gennymbesi@gmail.com",
      "password": "password123"
  }

#### Customers
#### Retrieve Customers
- **Endpoint:**: GET /api/products
- **Description:**: Retrieves a list Customers.
- **Headers:**:
- **Authorization:**: Bearer your_jwt_token
- **Request Body:**
  ```json

    {
        "id": 1,
        "name": "customer",
        "email": "customer@gmail.com",
        "phone_number": "123456789",
        "created_at": "2024-10-01T05:37:59.000000Z",
        "updated_at": "2024-10-01T05:37:59.000000Z"
    }

#### Products
#### Retrieve Products
- **Endpoint:**: GET /api/products
- **Description:**: Retrieves a list of all available products.
- **Request Body:**
    ```json
  
    {
        "id": 1,
        "name": "Product 1",
        "price": 100,
        "description": "Description of Product 1"
    },
    {
        "id": 2,
        "name": "Product 2",
        "price": 200,
        "description": "Description of Product 2"
    }

### Installation
#### Clone the repository:
#### bash
#### Copy code   

    git clone https://github.com/Genevive-Mbesi/laravel.git

#### Navigate to the project directory:
#### bash
#### Copy code
    cd laravel
##### Install dependencies:
#### bash
#### Copy code
    composer install
#### Set up your .env file:
#### bash
#### Copy code
    cp .env.example .env
#### Generate an application key:
#### bash
#### Copy code
        php artisan key:generate
#### Run migrations to set up the database:
#### bash
#### Copy code
       php artisan migrate
#### Start the development server:
#### bash
#### Copy code
     php artisan serve
