# Taskoo
Taskoo is a platform that connects taskers with available helpers.<br>
Below is an overview of the user flow:<br><br>
![alt tag](taskoo-userflow.jpg "User Flow")<br>

## Set Up
The below are screenshots of the database setup required in order to try the application:<br><br>
![alt tag](screenshot1.png "DB")<br>
![alt tag](screenshot2.png "DB")<br>

To access the admin panel, change the isadmin column of one of the task_users to true.<br>
Log in and go to '/admindashboard.php'.<br>

Note that as the module demo is done on a desktop browser, mobile device browsers are not supported.<br><br>

## Features

### CRUD functions & Helpers accept tasks:<br><br>
![alt tag](taskoo-create.png "create")<br><br>
![alt tag](taskoo-acceptedtasks.png "accepted")<br><br>
![alt tag](taskoo-details.png "details")<br><br><br>

### Search function:<br><br>
![alt tag](taskoo-search.png "search")<br><br><br>

## Done
- main structure / user flow of web app
- main layouts of pages
- integration with SQL database 
- simple user authentication
- task details view
- separate master-detail view that allows helper and tasker to see each other's contact details when task is accepted
- allow tasker to edit or delete pending tasks
- search function
- admin panel dashboard with CRUD functionality
- form control (error messages for user)
- conform datepickerjs date format to SQL's
