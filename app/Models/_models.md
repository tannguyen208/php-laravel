### https://laravel.com/docs/5.5/eloquent ###
## MODELS
__create model__

    php artisan make:model yourNameModel --migration
    php artisan make:model yourNameModel -m



### https://laravel.com/docs/5.5/eloquent-relationships#one-to-many-inverse ###
__model collection__

    hasOne          => One To One
    hasMany         => One To Many
    belongsTo       => One To Many (Inverse)
    belongsToMany   => Many To Many
    hasManyThrough  => Has Many Through
    morphTo         => Polymorphic Relations
    morphedByMany   => Many To Many Polymorphic Relations