
# Vascomm - Productian
1. Laravel 9
2. PHP 8
3. Bootstrap 5
4. Account
* Admin: admin@gmail.com pwd:admin




## Usage

### Installation
1. Install productian with composer

```bash
$ composer install
```

2. Copy .env.example and rename to .env
3. To run this project, you will need to config the following environment variables to your .env file

```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

```
3. Generate Key
```bash
$ php artisan key:generate
```
4. Run migration and seed
```bash
$ php artisan migrate
$ php artisan db:seed
```
5. Run application
```bash
$ npm install
$ npm run dev
$ php artisan serve
```

6. Screenshoot Application

Home Page
![home page](https://i.postimg.cc/L65kyghY/home-page.png)

Detail Product Page
![detail product page](https://i.postimg.cc/kXCG40Pn/detail-product-page.png)

Login Page
![login page](https://i.postimg.cc/FsGFqHW2/login-page.png)

Register Page
![register page](https://i.postimg.cc/W3SfVCBb/register-page.png)

Admin User Page
![admin user page](https://i.postimg.cc/qqb5Pf88/admin-user-page.png)

Admin Product Page
![admin product page](https://i.postimg.cc/W16MzGHy/admin-product-page.png)

    