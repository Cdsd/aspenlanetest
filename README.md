<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

This project uses the latest version of laravel(v.8).

<h1>Laravel package used in this project</h1>

## Laravel Passport

The project use API passport to autorizate external applications to consume the API of user location, it uses Outh 2.0, which means that the external aplications are going to recive a token(public key) when the user is login and the external aplications can request the enpoints using the token(public key), Passport is going to compare the token(public key) with a private key and the externat aplications will get access to the resource

## Laravel Jetstream






<strong>Aspelane Test</strong>
<p>Steps to compile the porject</p>
<p>1. Step: Prepare the resources</p>
<p>Install a PHP Development Environment</p>
<ul>
    <li>If you have windows <a href="https://www.wampserver.com/en/">WAMP</a></li>
    <li>If you have macos <a href="https://www.mamp.info/en/">LAMP</a></li>
    <li>It works in any OS <a href="https://www.apachefriends.org/en/index.html">XAMP</a></li>
</ul>
<span>Last option is recomended<span>

<p>2. Step: Prepare the database </p>
<p>Run the PHP Development Environment downloaded</p>
<p>Create a database in your phpmyadmin, go to <a href="localhost">localhost</a> on the browser and find the phpmyadmin option</p>
<p>In phpmyadmin create a database, remember this database name. Next, create a username and password with all priviliges, remember those data too</p>
<p>Once we have all these data, continue with the next step</p>

<p>3. Step: Clon the repository </p>
<p>Go to the public folder of the PHP development environment; it can be founded with the names "htdocs" or "www" depend of the PHP development environment that was dowloaded</p>
<p>Now dowload the project in the folder,go to <a href="https://github.com/Cdsd/aspenlanetes">Repository</a></p>
<p>Select just one of these options</p>
<ul>
    <li>Clone with the terminal, use this comand <code>git clone https://github.com/Cdsd/aspenlanetes</code></li>
    <li>Download the project directly from the repository, extract the ZIP file and put into your public folder</li>
</ul>
<p>4. Step: Prepare the project </p>
<p>Open the terminal and go to the public folder PHP development enviorment</p>
<p>Run the comand: <code>cp .env.example .env</code></p>
<p>Go to you public folder PHP development enviorment and open the .env file, it can be opened with your word processor</p>
<p>Remember the data that you storage, put in the correspondet variables
    <ul>
        <li>DB_DATABASE=<code>[your_database_name]</code></li>
        <li>DB_USERNAME=<code>[your_user_name]</code></li>
        <li>DB_PASSWORD=<code>[your_user_password]</code></li>
    </ul>
<p>Run the comand: <code>php artisan migrate</code></p>
<p>5. Step: Enjoy the project </p>
<p>Go to yout browser, enter the url: <code>localhost://[name_folder]</code>, and enjoy it</p>

<h1>USAGE</h1>
This project is an API and it is also a microaplication.
The microaplication comsume the locations ENDPOINTS to storage locations
With the API of user location, you can:
<ul>
    <li>Storage user location</li>
    <li>See all the user locations</li>
    <li>Find a specific user locations</li>
</ul>
The microapplication has a Front-end to a better user experience
<ul>
    <li>Login and log out</li>
    <li>Chanage your email and name</li>
    <li>Delete account</li>
    <li>Storage location</li>
    <li>See the user locations</li>
</ul>
        
