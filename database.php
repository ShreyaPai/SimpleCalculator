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
            $string = "";
            while($row = $result->fetch_assoc()) {
                $string .= $row["records"]. "<br>";
            }
            return $string;
        } else {
            return "0 results";
        }
    }

    function insertValue($num)
    {
        $sql="insert into history (records) values ('".$num."')";
        executeQuery($sql);
    }

    function deleteAll()
    {
        $sql="delete from history";
        executeQuery($sql);
    }

    function executeQuery($sql){
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }
?>