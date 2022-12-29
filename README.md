## About Backend

Ads Web App

## prerequisites

- PHP version 7.3 or higher
- composer installing
- Node installing

## Setup

- Clone repository
- Create '.env' file from sample '.env.example'
- Update DB credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD etc)
- Ensure you have PHP and apache server running. You can get this via 
[Wamp](https://www.wampserver.com/en/) or [Xammp](https://www.apachefriends.org/), 
- Open terminal and run 
  - `composer install && npm install`
  - `php artisan key:generate`
  - `php artisan migrate`
  - `php artisan db:seed` (for dummy data)
  - `php artisan serve`
- Navigate to 'localhost:8000' and see application is running

## Api
- http://127.0.0.1:8000/api/get-adspost

## Notes
- for daily remainder email please sure that you make the configration of email sender in .env file before test

- command for run schedule : php artisan schedule:run

- email:admin1@example.com
- password:password


   


