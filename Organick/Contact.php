<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" >
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<link href="css/shere.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/banner.css" rel="stylesheet" type="text/css">
<link href="css/about.css" rel="stylesheet" type="text/css">
<link href="css/mailAddress.css" rel="stylesheet" type="text/css">
<link href="css/address.css" rel="stylesheet" type="text/css">
<meta name="description" content="網頁描述">
<meta name="Keywords" content="關鍵字">
<title>Contact Us</title>
</head>
<style>
    #aboutLeft{
        text-align:center;
        margin:2rem auto;
    }
    #aboutLeft img{
        width:60%;
    }
    #aboutRight{
        width:80%;
        display:grid;
        grid-auto-rows:15rem;
        margin:5rem 0;
    }
    .aboutAddIcon img{
        width:5%;
        margin:1rem 5rem;
    }
   .aboutAddIcon img:hover{
        transform:translateY(-10%);
    }
    #location{
        position:relative;
    }
    
    .locationText{
        background-color:white;
        padding:5rem;
        position:absolute;
        width:25%;
        height:50rem;
        bottom:10%;
        right:20%;
        border-radius:4rem;
    }
    .locationAdd{
        display:grid;
        grid-template-columns:1fr 3fr;
        margin:5rem 0;
    }
    .locationAdd img{
        width:60%;
    }
    .locationAdd a{
        color:#274C5B;
        text-decoration:none;
    }
    .locationAdd a:hover{
        color:red;
        text-decoration:underline;
    }
    #location .contTitle{
        margin:3rem 0;
    }
    
    
    #userAdd{
        width:80%;
        margin:10rem auto;
        display:grid;
        grid-template-columns:1fr 1fr;
        grid-gap:5rem;
    }
    .userAddText{
        font-size:2rem;
        font-weight:600;
    }
    #userAdd label{
        display:grid;
        grid-auto-rows:7rem;
    }
    #userAdd input{
        border:1px solid black;
        border-radius:1rem;
        font-size:2rem;
        font-style: oblique;
        padding:0 2rem;
    }
    .message{
        grid-column:span 2;
    }
    .message textarea{
        border:1px solid black;
        border-radius:1rem;
        height:20rem;
        font-size:2rem;
        font-style: oblique;
        resize:none;
        padding:2rem;
    }
    #userAdd button{
        width:30%;
        margin-top:15rem;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div id="banner">
        <img src="image/contactBanner.jpg">
        <span id="bannerTitle">Contact Us</span>
    </div>
    <section id="about">
        <div id="aboutLeft">
            <img src="image/contactMsg.png">
        </div>
        <div id="aboutRight">
            <p class="titleText">We'd love to talk about how we can work together.</p>
            <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            <div class="aboutIcon">
                <img src="image/msgIcon.png">
                <div class="aboutIconContent">
                    <p class="contTitle">Massege</p>
                    <p class="contText">support@organic.com</p>
                </div>
            </div>
            <div class="aboutIcon">
                <img src="image/phoneIcon.png">
                <div class="aboutIconContent">
                    <p class="contTitle">Contact Us</p>
                    <p class="contText">+01 123 456 789</p>
                </div>
            </div>
            <div class="aboutAddIcon">
                <a href=""><img src="image/fbicon.png"></a>
                <a href=""><img src="image/igicon.png"></a>
                <a href=""><img src="image/Xicon.png"></a>
                <a href=""><img src="image/Pintresticon.png"></a>
            </div>
        </div>
    </section>
    <section id="location">      
        <img src="image/contactMap.png">
        <div class="locationText">
            <p class="title">Location</p>
            <p class="contTitle">Our Farms</p>
            <p class="contText">Established fact that a reader will be distracted by the readable content of a page when looking a layout. The point of using.</p>
            <div class="locationAdd">
                <div>
                    <a href="https://maps.app.goo.gl/4jmuqPdkZPqEgKSt8" target="new"><img src="image/Location.png"></a>
                </div>
                <div>
                    <p class="contText" style="font-weight:600">New York, USA:</p>
                    <p class="contText"><a href="https://maps.app.goo.gl/4jmuqPdkZPqEgKSt8" target="new">299 Park Avenue New York, New York 10171</a></p>
                </div>
            </div>
            <div class="locationAdd">
                <div>
                    <a href="https://maps.app.goo.gl/hzb4gLo6hxWEbSP8A" target="new"><img src="image/Location.png"></a>
                </div>
                <div>
                    <p class="contText" style="font-weight:600">London, UK:</p>
                    <p class="contText"><a href="https://maps.app.goo.gl/hzb4gLo6hxWEbSP8A" target="new">30 Stamford Street, London SE1 9LQ</a></p>
                </div>
            </div>
        </div>      
    </section>
    <form name="userAdd" id="userAdd" action="" method="post" autocomplete="off">
        <label class="userAddText">Full Name*
            <input type="text" name="username" id="username" placeholder="Your Email Address">
        </label>
        <label class="userAddText">Your Email*
            <input type="email" name="email" id="email" placeholder="example@yourmail.com">
        </label>
        <label class="userAddText">Company*
            <input type="text" name="company" id="company" placeholder="yourcompany name here">
        </label>
        <label class="userAddText">Subject*
            <input type="text" name="subject" id="subject" placeholder="how can we help">
        </label>
        <label class="userAddText message">Message*
            <textarea name="message" id="message" placeholder="hello there,i would like to talk about how to..."></textarea>
        </label>
        <button class="bluebt">Send Message</button>
    </form>
    <?php include("footer.php"); ?>
</body>
</html>
