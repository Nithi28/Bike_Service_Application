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
# Bike Service Application

This Laravel-based web application is tailored for bike service station owners. It simplifies the process of listing services and enables customers to book one or more services.

## Use Case Example

Consider John, the owner of a bike service station, who provides the following services:

- General service check-up
- Oil change
- Water wash

Customers can register using their email address and mobile number. They have the option to select a service, specify a date for the service, and proceed with the booking. Upon booking, John is promptly notified via email, detailing the requested service. After the service is completed, John can mark the specific booking as "ready for delivery". The customer will then receive an email notification, informing them that their bike is prepared for pickup. Upon delivery, John can mark the booking as "completed".


### For Bike Station Owners:

- Create, modify, and remove services along with their details.
- Access a comprehensive list of all bookings (including pending, ready for delivery, and completed).
- View detailed information for each booking.
- Mark a booking as "ready for delivery".
- Mark a booking as "completed".
- Receive email notifications for every new booking.

### For Customers:

- Register for an account using their email address and mobile number.
- Schedule a service for a specific date.
- Track the status of their booking.
- Access a history of previous bookings.
- Receive email notifications as soon as their booking is ready for delivery.

## Tools Utilized

- Laravel Framework
- Laravel Breeze for authentication
- Spatie for roles and permissions
- Bootstrap for the template
- Database seeders are used to initialize the roles & permissions and Admin user is also created via database seeder
    (To change the admin mail or password you can either use db seeder before seeding or through profile page of the application itself.)

## Technical Insights

- Implemented a service controller with a migration and model incorporating a foreign key referencing the users table.
- User has many services (one to many relationship).
- Integrated mailing functionality through events, listeners, and mailables, with emails being queued via the database (use .env file to configure the queue).

## Getting Started

1. Clone this repository.
2. Install the necessary dependencies using composer install, npm install.
3. Set up the database and execute the migrations with php artisan migrate.
4. Seed the database by executing 'php artisan db:seed'.
4. Optionally, populate the database with initial data.(using factories and seeders)
5. Configure the mail settings in the .env file.
6. Start the application with php artisan serve.


Feel free to reach out for any further assistance or queries!
