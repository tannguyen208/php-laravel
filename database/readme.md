# https://laravel.com/docs/5.5/migrations
# Database: Migrations
- create
> php artisan make:migrate yourNameSeeder
> php artisan migrate:make add_votes_to_user_table --table=users
> php artisan migrate:make create_users_table --create=users

- run
> php artisan migrate

- rollback -> last works
> php artisan migrate:rollback

- reset -> null
> php artisan migrate:reset

- refresh and run
> php artisan migrate:refresh
> php artisan migrate:refresh --seed


# https://laravel.com/docs/5.5/seeding
# Database: Seeding
- create
> php artisan make:seeder yourNameSeeder

- run
> php artisan db:seed
or
> php artisan db:seed --class=UsersTableSeeder

