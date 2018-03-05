### https://laravel.com/docs/5.5/eloquent ###
## create model ##

    php artisan make:model yourNameModel --migration
    php artisan make:model yourNameModel -m



### https://laravel.com/docs/5.5/eloquent-relationships#one-to-many-inverse ###
## model collection ##

    hasOne          => One To One
    hasMany         => One To Many
    belongsTo       => One To Many (Inverse)
    belongsToMany   => Many To Many
    hasManyThrough  => Has Many Through
    morphTo         => Polymorphic Relations
    morphedByMany   => Many To Many Polymorphic Relations