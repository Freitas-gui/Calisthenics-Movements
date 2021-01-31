Calisthenics-Movements

Status: Developing

It is a web application planned by me, where I perform the CRUD of Calisthenics Movements.

Some fields in main Model is:

name 
description
repetation num
sequency num
dificult category
i know
user_id
image
  
Also that, has a User with this fields:

name
email
cpf
birth
active

In addition to CRUD, I implement other features such as:

See the more recently movement created, using Cookie.
Entire verification system to validate forms with personalized messages.
Message of success when create a movement, using Session Flash.
Profile User editable.

This features are in developing:

Search for movements by name and/or dificulted category.
Email verification.

Technologies Used:

PHP 6.*
Laravel 7.4
Composer 2.0
MySql 8.0

How to run the application:

1) run shell: composer install
2) create new Schema MySql
3) create file .env (can copy from .env.example)
4) configure your database variables in .env
5) run shell: php artisan migrate
6) run shell: php artisan serve
