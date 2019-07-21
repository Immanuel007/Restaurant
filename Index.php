<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="CSS/Styles.css" rel="stylesheet" type="text/css">
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <title>Anita's Kitchen</title>
    <script src="js/script.js"></script>
</head>
<body>
<ul class="nav navbar-nav navbar-right">
    <li><a href="Index.php">Home</a></li>
    <li><a href="Sign_up.php">Signup</a></li>
    <li><a href="Login.php">Login</a></li>
    <li><a href="Logout.php">Logout</a></li>
</ul>

<div id="image">
    <div id="snad">
        <div id="snav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Contacts</a>
            <a href="#">Events</a>
            <a href="#">Menu</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <img src="img/logoBig.png" alt="logo">
    <h1>We provide at the best food at the right place.</h1>
    <h1>At the <strong> right price</strong></h1>
</div>
<div class= "row">
    <div class="col-md-3">
        <div id= "gray">
            <h3>Happy Hour</h3><br>
        </div>
        <div id="Party">
            <h3>Party Time</h3>
        </div>
    </div>

    <div class="col-md-3" id="Breakfast">
        <h3>Breakfast</h3>
    </div>
    <div class="col-md-3" id="Lunch">
        <h3>Lunch</h3>
    </div>
    <div class="col-md-3" id=Dinner>
        <h3>Dinner</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <img src="img/fastFood1.jpg"alt="Fastfood">
            <img src="img/fastFood2.jpg"alt="fastfood">
        </div>
    </div>


    <div class= "col-md-6">
        <div id= "lef">
            <h2>Fast foods</h2>
            <h3>You will love our delicious fast foods</h3>
            <p>lorem ipsum dolor sit amet, consectetur adipisic ing elit,sed do eiusmod tempor icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re prehendent in voluptate velut esse ciilum dolore eu fugiat nulla pariatur. Exceteur sint occaecat cupi datata cupi non proident.</p>
            <h1><button type="button" class="formButton">View Gallery &#8594; </button></h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div id= "march">
            <h2>Drinks</h2>
            <h3>We also produce delicious drinks</h3>
            <p>lorem ipsum dolor sit amet, consectetur adipisic ing elit,sed do eiusmod tempor icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re prehendent in voluptate velut esse ciilum dolore eu fugiat nulla pariatur. Exceteur sint occaecat cupi datata cupi non proident.</p>
            <div class= "some">
                <h1><button type="button" class="formButton">View Gallery &#8594;</button></h1>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="margi">
            <img src="img/drink1.jpg"alt="Drink1">
            <img src="img/drink2.jpg"alt ="Drink2">
        </div>
    </div>
</div>


<div id="Food">
    <div class="container cnt">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">fast Foods</a></li>
            <li><a href="#">Drinks</a></li>
            <li><a href="#">Chicken</a></li>
            <li><a href="#">Rice</a></li>
        </ul>

        <div class="row">

            <div class="col-md-4">
                <img src="img/chickenBurger.jpg" alt="Chicken Burger">
                <h2>Chicken Burger</h2>
            </div>
            <div class="col-md-4">
                <img src="img/beefBurger.jpg" alt="Beef Burger">
                <h2>Beef Burger</h2>
            </div>
            <div class="col-md-4">
                <img src="img/chickenPizza.jpg" alt="Chicken Pizza">
                <h2>Chicken Pizza</h2>
            </div>
        </div>
    </div>
</div>



<div class="row" id="boyd">
    <div id="hap">
        <h3>Our Happy Customers</h3>
    </div>
    <div class = "col-md-6">
        <h3>George</h3>
        <p>Great food!Menu is awesome, there foods are not only great but also in the right place. I'll highly recommend them :)</p>
        <span style="font-size:40px;color:#F15A29;">&#8249;</span>
        <img src="img/p1.png" alt="First customer">
        <img src="img/p2.png" alt="Second customer">
        <img src="img/p3.png" alt="Third customer">
        <span style="font-size:40px;color:#F15A29;">&#8250;</span>
    </div>
    <div class="col-md-6">
        <div id="cus">
            <h3>About menu</h3>
        </div>
        <p>We are menu a little team of 7 members.We make sure that our customers are happy.lorem ipsum dolor sit amet, consectetur adipisic ing elit,sed do eiusmod tempor icididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>

<div id="DailyFoods">
    <h2>Get our daily food items delivered to your email</h2>
    <form>
        <input type="email" name="email" class="formStyle" placeholder="your email" required />
        <button type="button" class="formbutton" name="button">Subscribe</button>
    </form>
</div>

<div class="row">
    <div id="Menu">
        <p><img src="img/logo_white.png" alt="logo_white"></img> MENU</p>
        <h1>Thats what We are</h1>
        <img src="img/facebook.png"alt="facebook">
        <img src="img/twitter.png"alt="twitter">
        <img src="img/pinterest.png"alt="pinterest">
        <p>2016 Menu restaurant</p>
    </div>
</div>
</body>
</html>