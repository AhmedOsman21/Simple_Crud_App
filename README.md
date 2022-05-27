
# Simple crud application

This is a simple crud app to create, read, update and delete records.

It's associated with users table in the database where each user has a username, name and email each of them validated before registering or updating user's data.

**Constraints:**
- Username cannot be duplicated.
- Email cannot be duplicated.




## Documentation

### Directories:
#### classes: 
contains the classes files of the project.
#### DB_Class:
contains the classes which connect & handle database operations


### Files:
#### DB_Connection: 
`classes/DB_Class/DB_Connection.php`

Contains the DB_Connection class.

#### Record: 
`classes/DB_Class/Record.php`

Contains the Record class.

#### add_records:
`add_records.php`

Contains the html form for registering new user.


#### autoload:
`autoload.php`

Contains the autoloader of the classes to load it in other files.

#### db_config:
`db_config.php`

Contains the configurations of database connection like: 
- hostname
- username
- password
- database name
- default fetching mode

storing them as constants to be used in the DB_Connection class.


#### db:
`db.sql`

These are the queries of creating the database table to work on.


#### delete:
`delete.php`

Contains the proccess of deleting the user of a specific id.

#### index file:
`index.php`

Of course it's the homepage, so it contains the table of users displayed on the screen.

This page has a button to insert a new record/user, and each user displayed has option buttons [Update - Delete].




#### input_validation:
`input_validation.php`

_This file is imported in both registering and updating files_

Contains the input validation code, which validate each input value and clean it to ensure that there's no errors or username, email redundancy before user's registeration or updating 


#### register:
`register.php`

Contains a registeration proccess which checking for errors first and if there's no errors it sends user's inputs to the database.


#### update:
`update.php`

Contains HTML form for updating & php code to proccess the updating operation so if there's no errors with update values it sends user's inputs to the database.



### Classes:

#### DB_Connection:
A class perform a PDO connection to database through a pdo object.

Constructor's parameters:
- `$db_host`
- `$db_name`
- `$db_user`
- `$db_pass`
- `$db_opt`

Constructor should take database constant from db_config file as arguments.

properties:
protected property `$conn` stores the PDO object to connect to database.



#### Record:
A class derived from DB_Connection class to perform it's operations using the `$conn` property.

Properties:
- `$id`
- `$username`
- `$firstName`
- `$lastName`
- `$email`

Methods:
- `setRecords($id, $username, $firstName, $lastName, $email)` a setter for all properties at once.

- `setId($id)` a setter for the id.
- `setUser($username)` a setter for the username.
- `setFirstName($firstName)` a setter for the firstName.
- `setLastName($lastName)` a setter for the lastName.
- `setEmail($email)` a setter for the email.

- `getId()` a getter for the id.
- `getUser()` a getter for the username.
- `getFirstName()` a getter for the firstName.
- `getLastName()` a getter for the lastName.
- `getEmail()` a getter for the email.

- `insertRecord()` Register a new user.
- `read()` Fetch only one user that has a certain id.
- `readAll()` Fetch all users' records stored in database.
- `update()` Update user data when specify the id to update it's data.
- `delete()` Delete user from users table that has a certain id.
- `userExists($proc)` Check if username already exists in database and behave differently according to `$proc` whether it's update or register.
- `emailExists($proc)` Check if email already exists in database and behave differently according to `$proc` whether it's update or register.
- `resetID()` Resets the auto increment to the start from the last-record's id.


### Functions:
- `cleanInput($data, $type="")` Cleans user inputs and trim leading & ending whitespaces from every data input, in addition it strip slashes and unwanted code that can be injected in input fields, and format name to be first letter uppercase if `$type` was set to `"name"`.


