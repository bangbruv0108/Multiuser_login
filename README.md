 ## Multi-User Login System
Multi-User Login System is a PHP-based website designed to handle different types of user logins based on roles. It supports multiple user roles with distinct access levels, providing a secure and organized way to manage different user permissions.

# Features
Role-Based Login: Different access levels for different user roles.
User Registration: Allows new users to register before logging in.
Admin and User Roles: Customizable roles for managing access to various parts of the system.
## Installation

# Prerequisites
PHP: Make sure you have PHP installed on your server.
phpMyAdmin: Required for database management.
MySQL: Database server for storing user data.
Setup Instructions
Clone the Repository:

bash
Copy code
git clone https://github.com/bangbruv/Multiuser_login.git

# Set Up the Database:

 Open phpMyAdmin and create a new database.
Create the database mentioned in the code or as per your convenience.
Configure Database Connection:

# Open the config.php file in the project directory.
Update the database connection settings with your database credentials:

# php
Copy code
<?php
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";

 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
# Register a User:

Navigate to the registration page (e.g., register.php).
Fill out the registration form to create a new user account. Make sure to assign the appropriate role during registration.
Login:

# Go to the login page (e.g., login.php).
Use your registered credentials to log in. Users will be redirected based on their roles.
Usage
Admin Users: Have access to administrative features and user management.
Regular Users: Access standard features according to their assigned role.


