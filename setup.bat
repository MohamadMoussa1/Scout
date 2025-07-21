@echo off
echo Setting up Laravel Scout Application...
echo.

echo Installing PHP dependencies...
composer install

echo.
echo Generating application key...
php artisan key:generate

echo.
echo Creating database file (SQLite)...
if not exist "database\database.sqlite" (
    type nul > database\database.sqlite
)

echo.
echo Running database migrations...
php artisan migrate

echo.
echo Seeding database (if seeders exist)...
php artisan db:seed

echo.
echo Building frontend assets...
npm run build

echo.
echo Setup complete! You can now start the development server with:
echo php artisan serve
echo.
pause
