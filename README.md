## Project Setup

Do 

Clone the repository

    git clone

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Rename DB_DATABASE in .env maybe as 'create-and-search' and create it in your admin

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Generate App key

    php artisan key:generate

Run the seeds 

    php artisan db:seed --class=ProfileSeeder

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
