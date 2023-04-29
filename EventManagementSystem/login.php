<?php
include("dbcon.php");
if (isset($_POST['uname']) && isset($_POST['pswd'])) {
    session_start();
    $uname = $_POST['uname'];
    $pswd = $_POST['pswd'];

    $sql = "SELECT * FROM users WHERE uname='$uname' AND pswd='$pswd'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['uname'] === "admin" && $row['pswd'] === "admin") {
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['pswd'] = $row['pswd'];
            $_SESSION['S.No'] = $row['S.No'];
            header("Location: admin.php");
        }
        else {
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['pswd'] = $row['pswd'];
            $_SESSION['S.No'] = $row['S.No'];
            header("Location: index.php");
        }
        
    }
    else {
        #header("Location: login.php");
        echo "<script>alert('Incorrect Username or Password entered');</script>";
    }
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
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

        .imgcont {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover, .close:focus {
            color: red;
            cursor: pointer;
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }
    </style>
</head>
<body>
    <h2>Website Login</h2>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <div id="id01" class="modal">
        <form class="modal-content animate" action="" method="post">
            <div class="imgcont">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="userimg.png" alt="User Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="pswd"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="pswd" required>

                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>