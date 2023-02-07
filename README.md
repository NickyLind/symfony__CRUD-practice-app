
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