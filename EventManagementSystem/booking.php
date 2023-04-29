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

        $event = $_REQUEST['event']; ?>

        <form action="post">
            <input type="text" name="num" placeholder="Enter Number of Tickets.." required>
            <input type="hidden" name="event" value="<?php echo $event; ?>">
            <input type="submit" name="but3" value="book" class="button">
        </form>
        <?php

        if (array_key_exists('but3', $_POST)) {
            $noti=$_POST['noof'];
            $eventname=$_POST["eventname"];

            $conn1= new mysqli($servername,$dbu,$dbp,$database);
            if($conn1->connect_error)
            {
                die("Connection failed:". $conn1->connect_error);
            }

            $sql2 = "select date, time, seats, price, city, event_name, category  from events where event_name= '".$eventname."'";
            $result1=$conn1->query($sql2);
            if(!$result1)
            {
                die("Enter the city from the list ". $conn1->error);
            }
            while($row=$result1->fetch_assoc())
            {
                $totaltickets=$row['total_seats'];
                $city_name=$row['city_name'];
                $event_date=$row['event_date'];
                $event_time=$row['event_time'];
                

            }
            echo $noti;
            echo $totaltickets;
            echo $city_name;
        }
    

        $conn1->close();
        $result->close();
        ?>
    </center>
</body>
</html>