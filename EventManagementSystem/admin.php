

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
<header>
        <div class="header1">
            <a href="#" class="logo">EventGo <i class="fas fa-book"></i></a>
        </div>

        <div class="header2">

            <nav class="navbar">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Upload</button>
                <a href="index.php">Home</a>
            </nav>
        </div>
    </header>

    <div id="id01" class="modal">
        <form class="modal-content animate" action="insert.php" method="post">
            <div class="imgcont">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
          	<h1 class="heading">EVENT UPLOAD</h1>
            <div class="container">
                <label for="city"><b>CITY:</b></label>
                <input type="text" placeholder="Enter The City.." name="city" required>

                <label for="cat"><b>CATEGORY:</b></label>
                <input type="text" placeholder="Enter Category.." name="cat" required>

                <label for="name"><b>EVENT NAME:</b></label>
                <input type="text" placeholder="Enter Event Name.." name="name" required>
                
                <label for="date"><b>DATE:</b></label>
                <input type="text" placeholder="Enter Date of Event.." name="date" required>
                
                <label for="time"><b>TIME:</b></label>
                <input type="text" placeholder="Enter Time of Event.." name="time" required>
                
                <label for="seats"><b>SEATS AVAILABLE:</b></label>
                <input type="text" placeholder="Enter Total Seats.." name="seats" required>

                <label for="seatav"><b>SEATS AVAILABLE:</b></label>
                <input type="text" placeholder="Enter Avaialble Seats.." name="seatsav" required>

                <label for="price"><b>PRICE:</b></label>
                <input type="text" placeholder="Enter Price.." name="price" required>

                <button type="submit">UPLOAD</button>
                
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
