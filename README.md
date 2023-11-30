## Setting & Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository : 
    git clone https://github.com/OmarRabbi/Inventor-Management-System.git

Set connect XAMPP : start->MySQL DataBase

Switch to the repo folder : 
    cd Inventory-Management-System

Install all the dependencies using composer : 
    composer install

**Make sure you set the correct database connection information before running the migrations**

Run the database migrations (**Set the database connection in .env before migrating**) :
    php artisan migrate

Start the local development server :
    php artisan serve

You can now access the server at : http://localhost:8000

**Server Live :** will be live soon...


## For Using Website

**Register your information first:** 
    1. username
    2. email
    3. password

**login with your account:**
    1. email
    2. password

**Access the CRUD operation:**
    1.View
    2.Create
    3.update
    4.Delete

**At last perform logout to exit from the site:**
    CLICK -> LOGOUT
