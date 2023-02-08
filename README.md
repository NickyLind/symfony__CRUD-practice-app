
To get the server running on XAMPP you need to do a series of steps:

1) Find the XAMPP-Control application
2) Start the Apache server and MySQL (MySQL may need you to go into the Task Manager and end whatever task is using up the port(MYSQL80 / MYSQL$MYSQL_EXPRESS))
3) In the web browser, navigate to the location of the file in the localhost (http://localhost/CMS/index.php);

To view the DB:

1) Navigate to http://localhost/phpmyadmin/

## Notes for this course/project ##

### What each of the directories in a Symfony project are for ###
- bin - for unit tests
- config - configuration files
- public - server looks here and reads index.php file
- src - here a programmer makes all files; controllers, entities, etc.
- var -cache files, sessions, etc.
- vendor - folder for external libraries

### HTTP processing workflow in Symfony ###
1. A user makes an action in a browser (clicks a link or sends an html form)
2. The browser sends a request to Symfony on the server
3. Symfony creates a **Request** object that contains data sent by the user (e.g form, data, url parameters etc.)
4. Symfony generates a **Response** object using the data of the **Request** object
5. Symfony through the server sends back the response to the browser
6. The browser displays the response to the user (e.g. html page or json string)

### MVC in Symfony ###
1. Routes
  - Map urls to controller methods
  - Typically exists above a controller method as annotation
2. Controllers (C)
  - Call entities (if needed) and load views
  - src/Controller/**Name**Controller.php
3. Entities (M)
  - Work with the database
  - src/Entity/**EntityName**.php
4. Views (V)
  - Generate front-end markup for user
  - html files supplmented with data from the DB
  - templates/**viewname**.html.twig

### List of Symfony commands ###
- bin/console - shows list of available Symfony commands