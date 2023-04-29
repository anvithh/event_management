<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">

    <title>Event Management</title>
  </head>
  <body>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js">
    </script>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top scroll">
        <a href="" class="navbar-brand">EventPage</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="img-parent">
            <div class="img">
                <img src="header.jpg">
            </div>
            <div class="img-overlay"></div>
        </div>

        <div class="img-content">
            <h2>EXPLORE YOUR FAVOURITE EVENTS IN YOUR FAVOURITE CITY!</h2>
            <br>
            <span>Welcome to the biggest event organising organisation in the country. </span>
        </div>
    </div>

    <br>
    <h3>Events are conducted in the following cities:</h3>

    <div class="container event">

        <div class="row justify-content-center">
            <div class="offset-sm-1 col-sm-5">
                <img src="hyd.jpg" class="img-fluid">
                <div class="event-content">
                    <h4>HYDERABAD</h4>
                    <span>Here are all the events that are happening in Hyderabad:</span>
                    <br>
                    <form action="cathyd.php" method="post">
                        <input type="hidden" name="city" value="Hyderabad">
                        <button type="submit">VIEW EVENTS</button>
                    </form>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5">
                <img src="chennai.jpg" class="img-fluid">
                <div class="event-content">
                    <h4>CHENNAI</h4>
                    <span>Here are all the events that are happening in Chennai:</span>
                    <br>
                    <form action="cathyd.php" method="post">
                        <input type="hidden" name="city" value="Chennai">
                        <button type="submit">VIEW EVENTS</button>
                    </form>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="offset-sm-1 col-sm-5">
                <img src="delhi.jpg" class="img-fluid">
                <div class="event-content">
                    <h4>DELHI</h4>
                    <span>Here are all the events that are happening in Hyderabad:</span>
                    <br>
                    <form action="cathyd.php" method="post">
                        <input type="hidden" name="city" value="Delhi">
                        <button type="submit">VIEW EVENTS</button>
                    </form>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5">
                <img src="bangalore.jpg" class="img-fluid">
                <div class="event-content">
                    <h4>BANGALORE</h4>
                    <span>Here are all the events that are happening in Chennai:</span>
                    <br>
                    <form action="cathyd.php" method="post">
                        <input type="hidden" name="city" value="Bangalore">
                        <button type="submit">VIEW EVENTS</button>
                    </form>
                </div>
            </div>
        </div>





    </div>



    <script>
            $(document).scroll(function() {
                $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
            })
    </script>
    
  </body>
</html>