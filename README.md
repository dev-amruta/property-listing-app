
# Property Listing Application

This is a Property Listing Web Application built using Laravel.
The system allows Admin users to manage property listings while normal users can view available properties.



## Installation Steps

1. Clone repository:

- git clone https://github.com/dev-amruta/property-listing-app.git


2. Navigate to project folder:

- cd property-listing-app


3. Install dependencies:

- composer install


4. Create environment file:

- cp .env.example .env


5. Configure database in .env


6. Run migrations:

- php artisan migrate


7. Run development server:

- php artisan serve

- Application will run at:

- http://127.0.0.1:8000


6. Admin Login Credentials:

- Email: amrutavandkar1@gmail.com
- Password: password



## Default Roles

Admin can manage properties (CRUD).
Normal users can only view properties.



## Features

- Admin dashboard
- Property CRUD
- Image upload
- Property filters
- Pagination
