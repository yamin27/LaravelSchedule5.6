# Laravel 5.6 Schedule
> Laravel Schedule Email to Client for Product Renew Reminder

## Build Setup

``` bash
# clone the project
git clone git@github.com:yamin27/LaravelSchedule5.6.git

# Nevigate to project and run
sudo cp .env.example .env

# setup database and configure your mail server at .env file 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

//here i use mailtrap.io for testing. you can use gmail, zohomail etc
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=your_mailtrap_username        // it looks like 345a144d30ffd4
MAIL_PASSWORD=your_mailtrap_password        // it looks like fdc465ftr8cc71e
MAIL_ENCRYPTION=tls

# now install composer 
composer install

# Database migration and seeding 
php artisan migrate --seed

# run the project
php artisan serve

# goto browser and hit 
127.0.0.1:8000

```
