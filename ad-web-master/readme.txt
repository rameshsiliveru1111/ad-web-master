==============Aimeos plugin setup=============
1. vendor/aimeos/aimeos-laravel/src/views/base.blade.php (Update file).

2. Database connect run all command given below:-

php artisan vendor:publish --all
php artisan migrate
php artisan aimeos:setup --option=setup/default/demo:1