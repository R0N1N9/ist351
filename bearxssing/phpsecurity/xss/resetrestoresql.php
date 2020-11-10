<?php

$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);

         if(! $dbconn ){
            echo 'Connected failure<br>';
         }
         echo 'Connected successfully<br>';

         $sqldrop = "DROP DATABASE php_security";

                  if (mysqli_query($dbconn, $sqldrop)) {
                  echo "Record deleted successfully";
                  } else {
                     echo "Error deleting record: " . mysqli_error($dbconn);
                  }


         $sqlcreate = "CREATE DATABASE php_security";

         if (mysqli_query($dbconn, $sqlcreate)) {
            echo "Database created successfully";
         } else {
            echo "Error creating database: " . mysqli_error($dbconn);
         }
         mysqli_close($dbconn);

#$conn = mysqli_connect("localhost", "root", "", "empty");
/*
$drop = 'DROP DATABASE empty';
if (mysqli_query($drop, $conn)) {
    echo "Database my_db was successfully dropped\n";
} else {
    echo 'Error dropping database: ' . mysqli_error() . "\n";
}

$create = 'CREATE DATABASE empty';
if (mysqli_query($create, $conn)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysqli_error() . "\n";
}
*/
$conn = mysqli_connect("localhost", "root", "", "php_security");
$filePath = "restore.sql";
function restoreMysqlDB($filePath, $conn)
{
    $sql = '';
    $error = '';

    if (file_exists($filePath)) {
        $lines = file($filePath);

        foreach ($lines as $line) {

            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }

            $sql .= $line;

            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (! $result) {
                    $error .= mysqli_error($conn) . "\n";
                }
                $sql = '';
            }
        } // end foreach

        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "Database Restore Completed Successfully."
            );
        }
    } // end if file exists
    return $response;
}
restoreMysqlDB($filePath,$conn);
?>

<form action="../../index.php">
    <input type="submit" value="Go back" />
</form>
