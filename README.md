<!-- pada saat awal menjalankan:
npm install
npm run build
npm install aos --save
npm install bootstrap@v5.2.3
npm i bootstrap-icons
npm i cloudinary
npm install jquery
npm install chart.js
npm install date-fns chartjs-adapter-date-fns --save
composer require itsgoingd/clockwork
composer require midtrans/midtrans-php

yang perlu ditulis di tiap page:

{{-- bootstrap css --}}
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="node_modules/aos/dist/aos.css">

{{-- bootstrap js --}}
<script src="node_modules/aos/dist/aos.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

{{-- script for animate on scroll --}}
<script>
    AOS.init();
</script> -->
## Fundraising Organizer - FROG
Frog is a website that provides facilities for those who want to make fundraising through selling products and services. It also provides information and statistics about their fundraising to fundraisers. Frog also provides a platform for donators who want to donate by buying products or services that are for sale.

## Requirements
There are some technologies that are used in this websites:
1. Laravel (PHP Framework)
2. Bootstrap (CSS Framework)
3. HTML/CSS
4. Javascript
5. NPM (Node Package Manager)
6. Github & Git

And here's the instruction on how to run this website in you computer:
1. Make sure that you have already install Laravel and NPM on your device. If you're not install it yet, you can see how to install it here <a href="https://laravel.com/docs/8.x/installation">Install Laravel</a> and <a href="https:// docs.npmjs.com/downloading-and-installing-node-js-and-npm">Install NPM</a>.
2. Make sure that you have installed Git on your device and have connected it to your Github account. If you're not install it yet, you can see how to install it <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">here</a>
3. Make sure that you have installed Xampp on your device. If you're not install it yet, you can download and install it <a href="https://www.apachefriends.org/download.html">here</a>
4. Find the URL of Frog Project, or directly copy it from here <a>https://github.com/nicolefeliceee/FROG</a>
5. Open Command Propmt in your desired folder on your device and clone the project by using this command
```sh
git clone https://github.com/nicolefeliceee/FROG
```
6. Open your command propmt in your Frog folder and install composer by using this command
```sh
composer install
```
7. Copy the .env file using this command in your Frog folder command prompt
```sh
copy .env.example .env
```
8. Install the Node Package Manager using this command in your command prompt
```sh
npm install
```
9. Install our CSS Framework that are neccessary to build our website. You can install it by using this command in your command prompt
```sh
npm install bootstrap@v5.2.3
```
10. Install the icons library in the website with this command.
```sh
npm i bootstrap-icons
```
11. Install the scroll animation library in this website with this command.
```sh
npm install aos --save
```
12. Install the jquery library in this website with this command.
```sh
npm install jquery
```
13. Install chart library in this website with this command.
```sh
npm install chart.js
```
14. Install library to load date-fns in chart js in this website with this command.
```sh
npm install date-fns chartjs-adapter-date-fns --save
```
15. Install php dev tools to maintain eager loading in this website with this command.
```sh
composer require itsgoingd/clockwork
```
16. Install php dev tools to perform payment in the website
```sh
    composer require midtrans/midtrans-php
```
17. Prepare the environment of the project using this command in your command prompt
```sh
npm run dev
```
18. To set the database of our website, run XAMPP on your device and create database that will be needed in our website using this command in your command prompt
```sh
php artisan migrate
```
19. Import all database in our website using this command in your command prompt
```sh
php artisan migrate:fresh --seed
```
20. To run and preview our website, you can use this command in youd command prompt
```sh
php artisan serve
```
    
## Website Preview
// Ini nanti ceritanya gambar preview home Frog //
### Home
![img 1](https://github.com/ArdoD/FROG/blob/main/public/assets/img/Home-ss.jpeg)
<!-- ![img 1](https://github.com/nicolefelice/frog/blob/master/public/assets/img/Home-ss.jpeg) -->
The Home page is the initial page that users will get to see when the user has successfully signed in. On the home page, users can view events in Frog and directly access the event details page by simply clicking on the item. In addition, through the home menu, users can also see and access products in Frog, not only that on the home page users can also search for information about fundraising destinations along with the details, just by clicking find destination or clicking the destination item.
### Products
![img 2](https://github.com/ArdoD/FROG/blob/main/public/assets/img/products-ss.jpeg)
<!-- ![img 2](https://github.com/nicolefelice/frog/blob/master/public/assets/img/products-ss.jpeg) -->
On the catalog product page, users can see all the products in frog. In addition, users can access product details by clicking on items from the catalog products listed. Users can also filter product categories by selecting the category bubble-box listed on the product page. In addition, users can also search directly for the desired product in the search bar.
### Create Events
![img 3](https://github.com/ArdoD/FROG/blob/main/public/assets/img/createEvent-ss.jpeg)
<!-- ![img 3](https://github.com/nicolefelice/frog/blob/master/public/assets/img/createEvent-ss.jpeg) -->
On the create event page, users can create their event by simply filling out the required forms. All questions on the form must be filled in and fulfill the terms and conditions that apply. Users can also enter an image of their event by clicking the add image box on the left side of the page. After all the requirements have been met, users can directly press create event to create their event.
### Events Catalog
![img 4](https://github.com/ArdoD/FROG/blob/main/public/assets/img/events-ss.jpeg)
<!-- ![img 4](https://github.com/nicolefelice/frog/blob/master/public/assets/img/events-ss.jpeg) -->
On the Event Catalog page, users can view all events in Frog. Users can also access event details by simply clicking on the desired event item. On this page, users can also filter event categories and search for the desired event.
### Events Detail
![img 5](https://github.com/ArdoD/FROG/blob/main/public/assets/img/eventDetail-ss.jpeg)
<!-- ![img 5](https://github.com/nicolefelice/frog/blob/master/public/assets/img/eventDetail-ss.jpeg) -->
On the event detail page, users can view detailed information about the event, including products, sales details and statistics owned by the event.
![img 6](https://github.com/ArdoD/FROG/blob/main/public/assets/img/eventDetail2-ss.jpeg)
![img 7](https://github.com/ArdoD/FROG/blob/main/public/assets/img/eventDetail3-ss.jpeg)
![img 8](https://github.com/ArdoD/FROG/blob/main/public/assets/img/eventDetail4-ss.jpeg)
<!-- ![img 6](https://github.com/nicolefelice/frog/blob/master/public/assets/img/eventDetail2-ss.jpeg)
![img 7](https://github.com/nicolefelice/frog/blob/master/public/assets/img/eventDetail3-ss.jpeg)
![img 8](https://github.com/nicolefelice/frog/blob/master/public/assets/img/eventDetail4-ss.jpeg) -->
### Destination
![img 9](https://github.com/ArdoD/FROG/blob/main/public/assets/img/destination-ss.jpeg)
<!-- ![img 9](https://github.com/nicolefelice/frog/blob/master/public/assets/img/destination-ss.jpeg) -->
On the destination page, users can search for information about fundraising destinations in frog. Users can also get detailed information from each destination by simply clicking on the desired destination item. On this page users can also filter destination categories and search for the desired destination.
### Add Product
![img 10](https://github.com/ArdoD/FROG/blob/main/public/assets/img/createProduct-ss.jpeg)
<!-- ![img 10](https://github.com/nicolefelice/frog/blob/master/public/assets/img/createProduct-ss.jpeg) -->
On this page, users can add products to the event they have created. To be able to add products, users must fill in the form that has been given completely and match with the existing conditions. After that, users can add products by clicking add product.
