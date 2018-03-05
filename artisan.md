## Available commands: ##

    clear-compiled       Remove the compiled class file
    down                 Put the application into maintenance mode
    env                  Display the current framework environment
    help                 Displays help for a command
    inspire              Display an inspiring quote
    list                 Lists commands
    migrate              Run the database migrations
    optimize             Optimize the framework for better performance (deprecated)
    preset               Swap the front-end scaffolding for the application
    serve                Serve the application on the PHP development server
    tinker               Interact with your application
    up                   Bring the application out of maintenance mode

<details>
  <summary>app</summary>
  <p>   > app:name             Set the application namespace</p>
</details>



<details>
  <summary>auth</summary>
  <p>   > auth:clear-resets    Flush expired password reset tokens</p>
</details>




<details>
  <summary>cache</summary>
  <p>   > cache:clear          Flush the application cache</p>
  <p>   > cache:forget         Remove an item from the cache</p>
  <p>   > cache:table          Create a migration for the cache database table</p>
</details>




<details>
  <summary>config</summary>
  <p>   > config:cache         Create a cache file for faster configuration loading</p>
  <p>   > config:clear         Remove the configuration cache file</p>
</details>




<details>
  <summary>db</summary>
  <p>   > db:seed              Seed the database with records</p>
</details>




<details>
  <summary>event</summary>
  <p>   > event:generate       Generate the missing events and listeners based on registration</p>
</details>




<details>
  <summary>key</summary>
  <p>   > key:generate         Set the application key</p>
</details>




<details>
  <summary>make</summary>
  <p>   > 
    make:auth            Scaffold basic login and registration views and routes
  </p>
  <p>   > 
    make:command         Create a new Artisan command
  </p>
  <p>   > 
    make:controller      Create a new controller class
  </p>
  <p>   > 
    make:event           Create a new event class
  </p>
  <p>   > 
    make:exception       Create a new custom exception class
  </p>
  <p>   > 
    make:factory         Create a new model factory
  </p>
  <p>   > 
    make:job             Create a new job class
  </p>
  <p>   > 
    make:listener        Create a new event listener class
  </p>
  <p>   > 
    make:mail            Create a new email class
  </p>
  <p>   > 
    make:middleware      Create a new middleware class
  </p>
  <p>   > 
    make:migration       Create a new migration file
  </p>
  <p>   > 
    make:model           Create a new Eloquent model class
  </p>
  <p>   > 
    make:notification    Create a new notification class
  </p>
  <p>   > 
    make:policy          Create a new policy class
  </p>
  <p>   > 
    make:provider        Create a new service provider class
  </p>
  <p>   > 
    make:request         Create a new form request class
  </p>
  <p>   > 
    make:resource        Create a new resource
  </p>
  <p>   > 
    make:rule            Create a new validation rule
  </p>
  <p>   > 
    make:seeder          Create a new seeder class
  </p>
  <p>   > 
    make:test            Create a new test class
  </p>
</details>




<details>
  <summary>migrate</summary>
  <p>   > 
    migrate:fresh        Drop all tables and re-run all migrations
  </p>
  <p>   > 
    migrate:install      Create the migration repository
  </p>
  <p>   > 
    migrate:refresh      Reset and re-run all migrations
  </p>
  <p>   > 
    migrate:reset        Rollback all database migrations
  </p>
  <p>   > 
    migrate:rollback     Rollback the last database migration
  </p>
  <p>   > 
    migrate:status       Show the status of each migration
  </p>
</details>



<details>
  <summary>notifications</summary>
  <p>   > notifications:table  Create a migration for the notifications table</p>
</details>



<details>
  <summary>package</summary>
  <p>   > package:discover     Rebuild the cached package manifest</p>
</details>



<details>
  <summary>queue</summary>
  <p>   > 
    queue:failed         List all of the failed queue jobs
  </p>
  <p>   > 
    queue:failed-table   Create a migration for the failed queue jobs database table
  </p>
  <p>   > 
    queue:flush          Flush all of the failed queue jobs
  </p>
  <p>   > 
    queue:forget         Delete a failed queue job
  </p>
  <p>   > 
    queue:listen         Listen to a given queue
  </p>
  <p>   > 
    queue:restart        Restart queue worker daemons after their current job
  </p>
  <p>   > 
    queue:retry          Retry a failed queue job
  </p>
  <p>   > 
    queue:table          Create a migration for the queue jobs database table
  </p>
  <p>   > 
    queue:work           Start processing jobs on the queue as a daemon
  </p>
</details>



<details>
  <summary>route</summary>
  <p>   > 
    route:cache          Create a route cache file for faster route registration
  </p>
  <p>   > 
    route:clear          Remove the route cache file
  </p>
  <p>   > 
    route:list           List all registered routes
  </p>
</details>


<details>
  <summary>schedule</summary>
  <p>   > 
    schedule:run         Run the scheduled commands
  </p>
</details>


<details>
  <summary>session</summary>
  <p>   > 
    session:table        Create a migration for the session database table
  </p>
</details>



<details>
  <summary>storage</summary>
  <p>   > 
    storage:link         Create a symbolic link from "public/storage" to "storage/app/public"
  </p>
</details>




<details>
  <summary>vendor</summary>
  <p>   > vendor:publish       Publish any publishable assets from vendor packages</p>
</details>



<details>
  <summary>view</summary>
  <p>   > 
    view:clear           Clear all compiled view files
  </p>
</details>
