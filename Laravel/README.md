# CSC1106 Tutorial Laravel 

## Step 0: Prerequisites
- Install php and MySQL, installing via XAMPP makes this pretty convenient: https://www.apachefriends.org/download.html
- One common issue is the missing/deactivated 'intl' extension, navigate to C:\xampp\php\php.ini (or wherever the php.ini file is) and uncomment 'extension=intl' (remove the ';' from ';extension=intl')
- Open XAMPP and 'Start' both Apache and MySQL Modules (if there's some trouble with MySQL it might have to do with another instance of MySQL service running in the background. On windows, open up 'Services' and stop 'MySQL83' [or whtv it is called on your system])

## Step 1: Migrate/build database models
```php artisan migrate```

## Step 2: Run Application
```php artisan serve```

## Useful Laravel Commands (replace the word 'character' with whatever you need)
Database initialization (usually have to mess with .env file first): ``` php artisan migrate ```
Create database migrate thing (found in database/migrations): ``` php artisan make:migration create_characters_table ```
Create database model (found in database/migrations): ``` php artisan make:model character ```
Create controller (found in database/migrations): ``` php artisan make:controller CharacterController ```