<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "event_mgmt");
        if ($conn == false) {
            die("ERROR: Couldn't connect.." . mysqli_connect_error());
        }

        $city = $_REQUEST['city'];
        $category = $_REQUEST['cat'];
        $name = $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $totseats = $_REQUEST['seats'];
        $seatsav = $_REQUEST['seatsav'];
        $price = $_REQUEST['price'];

        $sql = "INSERT INTO events VALUES (NULL, '$city', '$category', '$name', '$date', '$time', $totseats, $seatsav, $price)";

        if (mysqli_query($conn, $sql)) {
            header("Location: admin.php");
        } else {
            echo "ERROR: didnt work" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>
</body>
</html>