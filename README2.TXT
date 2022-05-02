Guida Per clonare l'applicazione DA GIT
THE CODE TO COPY AND PASTE
composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate
