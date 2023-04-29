<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
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

        $city = $_REQUEST['city'];
        $sql = "SELECT category, city FROM events WHERE city='$city'";

        $result = $conn->query($sql);
        if (!$result) {
            die("Enter city From List".$conn->error);
        }
        echo "<table>";
        while ($row=$result->fetch_assoc()) {
            echo "<tr>
            <td>".$row['category']."</td>
            <td>"?><form method="post" action="event.php">
                <input type="hidden" name="category" value="<?php echo $row["category"];?>" required>
                <input type="hidden" name="city" value="<?php echo $row["city"]; ?>" required>

                <button type="submit" name="bt1" type="submit">Check</button>
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