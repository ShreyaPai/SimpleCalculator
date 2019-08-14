<?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "calculator";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    function displayAll()
    {
        $sql="select records from history";
        $result = executeQuery($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Result: " . $row["records"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    function insertValue($num)
    {
        echo $num;
        $sql="insert into history (records) values ('".$num."')";
        $result = executeQuery($sql);
        echo $result;
        //echo "inserted";
    }

    function deleteAll()
    {
        $sql="delete from history";
        $result = executeQuery($sql);
        echo $result;
    }

    function executeQuery($sql){
        global $conn;
        $result = $conn->query($sql);
        //return $result;
    }
?>