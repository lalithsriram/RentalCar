<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Anton|Russo+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
    <style>
         .semi-transparent-button {
            display:inline-block;
            transition: all 0.3s ease-out;
            padding:10px 40px;
            display:inline-block;
            min-width:50px;
            border:3px solid white;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         }
         .semi-transparent-button:hover {
                background-color:rgba(77, 77, 77, 0.80)
        }
         h2{
                padding-left:10px;
                font-family: 'Fugaz One', cursive;
                color:orange
        }
        a{
            text-decoration:none;
            color:white;
        }
        .logo{
             display:inline;
             overflow:visible;
        }
        .navlist{
             display:inline;
             overflow:visible;
        }
        body{
            background-image:url(homebg2.jpg);
            background-size:cover;
            margin-top:-15px;
        }
        li{
            float:right;
            text-decoration:none;
            overflow:hidden;
            padding:10px 20px;
            color:white;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        li:hover{
            background-color:rgba(128, 128, 128, 0.21);
        }
        p{
            margin-top:150px;
            text-align:center;
            font-size:100px;
            font-family: 'Russo One', sans-serif;
        }
    </style>
</head>
<body>
    <section>
        <div class="navlist">
            <ul>
                <li><a href="AboutUs.html" />About Us</li>
                <li><a href="order.html" />Order</li>
                <li><a href="cars.html" />Cars</li>
                <li><a href="home.html" />Home</li>
            </ul>
        </div>
        <div class="logo">
            <h2>Rentalcar.com</h2>
        </div>
    </section>
    <p>Let’s find your ideal car.</p>
    <center>
            <a class="semi-transparent-button" href="login.php">Login</a>
            <a class="semi-transparent-button" href="register00.php">Register</a>
    </center>
</body>
</html>
