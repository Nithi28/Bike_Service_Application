## Base Code installation

- Run the command: composer install.
- If vite related error throws during installation, Run
    - npm install
    - npm run dev
    - npm run build
- Create a database or use the existing database and configure the database connection in the environment file.
- Execute the command: php artisan migrate.
- Run the command: php artisan db:seed
- Run the command: php artisan queue:work (for mail queue)
- Run the command: php artisan serve
- To Log in using the admin credentials.
    - Email: admin@admin.com
    - Password: password

