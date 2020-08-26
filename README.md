# requirements
    Laravel Version 7
    PHP >= 7.2.5
# installation
    git clone https://github.com/Muthunayake/mini-crm-laravel.git
    composer update
# setup envirnment
    cp .env.example .env
    php artisan key:generate
# setup database
    set the database name[crm] in .env
# migrate database  
    php artisan migrate
    composer dump-autoload
# seed database  
    php artisan db:seed

