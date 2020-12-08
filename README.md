#laravel
What's this repo about
API
Factory
Test

#Example Preview

## Postman test
 <p>  http://127.0.0.1:8000/api/client/  <b>POST</b>
 Add new ,address</p>


<p>  http://127.0.0.1:8000/api/client/complaint <b>POST</b>
Add title ,text, client_id</p>
<p>  http://127.0.0.1:8000/api/client/complaint <b>POST</b>
Add title ,text, client_id</p>

<p> http://127.0.0.1:8000/api/client/complaint/{complaint} <b>GET</b>
Show the entire list of complaints from 1 user</p>

<p>http://127.0.0.1:8000/api/client/complaint/{complaint} <b>Put</b>
 Edit
   title ,text, => table  complaint 
   and update in_work =1 </p>

## Requirements
PHP >= 7.4.0


## Installation

<p>Just clone the project to anywhere in your computer.  </p>
<p>Run composer install.</p>
<p>Php artisan migrate. </p>
<p>Php artisan db:seed (generate 10 client and 10 complaint)  </p>
<p>vendor/bin/phpunit (test create client and complaint )  </p>
<p>Now you are done.</p>






