<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hehehehe";

try 
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) 
    {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    echo "Connection successful<br>";
    try 
    {
        $db_selected = mysqli_select_db($conn, $dbname);

        if (!$db_selected) 
        {
            throw new Exception("Database '$dbname' does not exist.");
        }
        echo "Database '$dbname' exists.<br>";
    } 
    catch (Exception $e) 
    {
        echo $e->getMessage() . "<br>";
        echo "Attempting to create the database '$dbname'.<br>";
        $sql = "CREATE DATABASE $dbname";
        if (mysqli_query($conn, $sql)) 
        {
            echo "Database '$dbname' created successfully.<br>";
        } 
        else 
        {
            throw new Exception("Error creating database: " . mysqli_error($conn));
        }
    }

} 
catch (Exception $e) 
{
    echo "Error: " . $e->getMessage() . "<br>";

} 
finally 
{
    if (isset($conn) && $conn instanceof mysqli) 
    {
        $conn->close();
        echo "Connection closed.<br>";
    }
}
?>
