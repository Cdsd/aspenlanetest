<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

This project uses the latest version of laravel(v.8).

<h1>Laravel's packages used in this project</h1>

## Laravel Passport

The project use API passport to authorize external applications to consume the API of user location, it uses OAuth 2.0, which means that the external aplications are going to receive a token(public key) when the user is login and the external aplications can request the endpoints using the token(public key). Passport is going to compare the token(public key) with a private key and the external aplications will get access to the resource

## Laravel Jetstream

It is a starter kit that provides differents features to implement in the project, with Jetstream you can select two front-end stacks: Livewire and Inertia.js. In this project, we used inertia because we can use vue.js with Inertia in an easy way




<strong>Aspelane Test</strong>
<p>Steps to compile the project</p>
<p>1. Step: Prepare the resources</p>
<p>Install a PHP Development Environment</p>
<ul>
    <li>If you have windows <a href="https://www.wampserver.com/en/" target="_blank">WAMP</a></li>
    <li>If you have macOS <a href="https://www.mamp.info/en/" target="_blank">LAMP</a></li>
    <li>It works in any OS <a href="https://www.apachefriends.org/en/index.html" target="_blank">XAMP</a></li>
</ul>
<span>The last option is recommended<span>

<p>2. Step: Prepare the database </p>
<p>Run the PHP Development Environment downloaded</p>
<p>Create a database in your PHPMyAdmin, go to <a href="http://localhost" target="_blank">localhost</a> on the browser, and find the PHPMyAdmin option</p>
<p>In PHPMyAdmin create a database called "test"</p>
<p>Once we have all these data, continue with the next step</p>

<p>3. Step: Clon the repository</p>
<pGo to the public folder of the PHP development environment; it can be founded with the names "htdocs" or "www" depend on the PHP development environment that was downloaded</p>
<p>Now download the project in the folder, go to <a href="https://github.com/Cdsd/aspenlanetes" target="_blank">Repository</a></p>
<p>Select just one of these options</p>
<ul>
    <li>Clone with the terminal, use this command<code>git clone https://github.com/Cdsd/aspenlanetest.git</code></li>
    <li>Download the project directly from the repository, extract the ZIP file, and put it into your public folder</li>
</ul>
<p>4. Step: Prepare the project</p>
<p>Open the terminal and go to the public folder PHP development environment</p>
<p>Run the command: <code>cp .env.example .env</code></p>
<p>Run the command: <code>php composer.phar install</code></p>
<p>Run the command: <code>php artisan migrate</code></p>
<p>Run the command: <code>php artisan passport:install</code></p>
<p>Give permissions to the next folder, you can do manually:</p>
<ul>
    <li>./storage: 777 permisions</li>
    <li>./bootstrap/cache/: 777 permisions</li>
</ul>
<p>or you can use these commands</p>
<ul>
    <li><code>sudo chmod -R 777 ./storage</code></li>
    <li><code>sudo chmod -R 777 ./bootstrap/cache/</code></li>
</ul>
<p>5. Step: Enjoy the project</p>
<p>Go to your browser, enter the URL: <a href="http://localhost/aspenlanetest/public">Aspenlane User Location</a>, and enjoy it</p>

<h1>USAGE</h1>
<p>This project is an API and it is also a micro application.</p>
<p>The micro application consumes the locations ENDPOINTS to storage locations </p>
<p>With the API of user location, you can:</p>
<ul>
    <li>Storage user location</li>
    <li>See all the user locations</li>
    <li>Find specific user locations</li>
</ul>
The micro application has a Front-end to a better user experience
<ul>
    <li>Log in and log out</li>
    <li>Change your email and name</li>
    <li>Delete account</li>
    <li>Storage location</li>
    <li>See the user locations</li>
</ul>


<h2>API Usage</h2>
<p>ENDPOINTS</p>
<hr>
<p>GET</p>
<p>/api/locations</p>
<p>Get all the user locations</p>
<hr>
<p>GET</p>
<p>/api/location/{id_location}</p>
<p>Get a location </p>
<hr>
<p>POST</p>
<p>/api/location</p>
<p>Request body parameter</p>
<ul>
    <li>location_latitud: required - numeric</li>
    <li>location_longitude: required - numeric</li>
    <li>user_id : required - integer</li>
</ul>
<p>Header parameter</p>
<ul>
    <li>Authorization : 'Bearer ' + Token</li>
</ul>
<hr>
<p>POST</p>
<p>/api/login</p>
<p>Request body parameter</p>
<ul>
    <li>email: required </li>
    <li>password: required </li>
</ul>
<hr>
<p>POST</p>
<p>/api/register</p>
<p>Request body parameter</p>
<ul>
    <li>name: required </li>
    <li>email: required </li>
    <li>password: required </li>
</ul>


        
