                                                        nbnm<?php
# file connection.php

# host name. 
$host_name = "localhost";

# username for SQL. 
$user_sql = "root";

# password for SQL. 
$pass_sql = "";

# database name.
$name_db = "ppkch";

# connection between database and system
$condb = mysqli_connect($host_name, $user_sql, $pass_sql, $name_db);

# testing if connection success or not
if (!$condb) {
    die("Connection Unsuccessful: " . mysqli_connect_error());
} else {
    echo "Connection Successful";
}
?>
