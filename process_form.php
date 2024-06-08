<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNumber = $_POST["number"];
    $message = $_POST["message"];

    $servername = "your_mysql_server";
    $username = "your_mysql_username";
    $password = "your_mysql_password";
    $dbname = "your_mysql_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO your_table_name (name, email, contact_number, message) VALUES ('$name', '$email', '$contactNumber', '$message')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
