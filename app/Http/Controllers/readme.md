### https://laravel.com/docs/5.5/controllers
## controllers
- create
    php artisan make:controller yourNameController --resource
    php artisan make:controller yourNameController --resource --model=yourNameController


## Spoofing Form Methods
    Since HTML forms can't make 'PUT', 'PATCH', or 'DELETE' requests, you will need to add a hidden _method field to spoof these HTTP verbs. The method_field helper can create this field for you:

    {{ method_field('PUT') }}