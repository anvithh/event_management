<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            width: 50%;
            height: 250px;
        }

        button {
            background-color: rgb(128, 0, 0);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 12px;
        }

        button:hover {
            opacity: 0.8;
        }

        body {font-family: Arial, Helvetica, sans-serif;}
    </style>
</head>
<body>
<center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "event_mgmt");
        if ($conn == false) {
            die("ERROR: Couldn't connect.." . mysqli_connect_error());
        }

        $cat = $_REQUEST['category'];
        $city = $_REQUEST['city'];
        $sql = "SELECT event_name FROM events WHERE category='$cat' AND city='$city'";

        $result = $conn->query($sql);
        if (!$result) {
            die("Enter city From List".$conn->error);
        }
        echo "<table>";
        while ($row=$result->fetch_assoc()) {
            echo "<tr>
            <td>".$row['event_name']."</td>
            <td>"?><form method="post" action="booking.php">
                <input type="hidden" name="event" value="<?php echo $row["event_name"];?>" required>

                <button type="submit" name="bt2" type="submit">Book</button>
            </form> <?php "</td>
            </tr>";
        }
        echo "</table>";
        $conn->close();
        $result->close();
        ?>
    </center>
</body>
</html>