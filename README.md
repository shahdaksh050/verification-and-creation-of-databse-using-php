Description:
This PHP script attempts to connect to a MySQL server, checks whether a specific database exists, and if it doesn't, creates it. The script is designed with error handling to ensure smooth operations. If any connection or database errors occur, they are handled by exceptions and displayed to the user.

Features:
Establishes a connection to a MySQL database server.
Checks if the specified database exists.
If the database doesn’t exist, it attempts to create it.
Implements robust error handling using exceptions.
Automatically closes the database connection after execution.
Requirements:
PHP (with MySQLi extension enabled)
MySQL or MariaDB server running locally or remotely
A web server like Apache or Nginx (for running PHP scripts)
Usage:
Place this PHP file on your web server.
Update the $servername, $username, $password, and $dbname variables with your MySQL server's credentials and the desired database name.
Open the PHP file in a browser or run it through a command-line interface.

Example:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

This script will:
Connect to the MySQL server at localhost with root as the username and an empty password.
Check if the database hehehehe exists.
If it doesn’t, it will create the database.
Error Handling
The script uses the following error-handling strategies:

Connection Error: Throws an exception if the connection to the MySQL server fails.
Database Not Found: If the specified database doesn’t exist, an exception is thrown and the script tries to create it.
General Errors: Catches any unexpected errors and displays an error message.

Example Output
When running the script, the output will look like this:

Connection successful
Database 'test_db' exists.
Connection closed.

If the database does not exist and is created, the output will be:

Connection successful
Database 'test_db' does not exist.
Attempting to create the database 'test_db'.
Database 'test_db' created successfully.
Connection closed.
