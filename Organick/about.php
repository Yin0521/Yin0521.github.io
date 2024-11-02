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
<link href="css/mailAddress.css" rel="stylesheet" type="text/css">
<link href="css/address.css" rel="stylesheet" type="text/css">
<meta name="description" content="網頁描述">
<meta name="Keywords" content="關鍵字">
<title>Organick about</title>
</head>
<style>
    #about{
        display:grid;
        grid-template-columns:1fr 1fr;
        margin:10rem 0;
    }
    #aboutLeft{
        width:120%;
        margin:0 auto;
    }
    #aboutLeft img{
        width:80%;
    }
    #abourRight{
        margin:auto 0;
    }
    #abourRight p{
        margin:1rem 0;
    }
    .aboutIconBox{
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    .aboutIcon img{
        width:80%;
        margin:0 auto;
    }
    .aboutIconContent{
        width:90%;
        line-height:1.2;
}
/*-----------------choose---------------------------*/
    .chooseBox{
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    .chooseBoxLeft{
        width:90%;
    }
    .chooseBoxLeft p{
        margin:2rem 0;
    }
    .chooseBoxLeftText{
        width:70%;
        margin-top:5rem;
    }
    .chooseBoxLeftText p{
        margin:4rem 0;
    }
    .chooseBoxLeftText .contText{
        margin-left:3rem;
        
    }
    .Textimg{
        border:4px solid #7EB693;
        border-radius:2rem;
        display:inline-block;
        width:1rem;
        height:1rem;
        margin-right:1rem;
    }
    .chooseIconBox{
        display:grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        width:80%;
        margin:10rem auto;
        text-align:center;
        grid-gap:2rem;
        
    }
    .chooseIcon img{
        width:30%;
        height:80px;
    }
    .chooseIcon .contTitle{
        margin:2rem;
    }
    /*--------------------------team----------------------*/
    .teamTitle{
        width:60%;
        margin:2rem auto;
        text-align:center  
    }
    .teamTitle .titleText{
        margin:2rem 0;
    }
    .teamContent{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        width:80%;
        margin:0 auto;
        grid-gap:2rem;        
    }
    .teamPersonBox{
        background-color:#eee;
        border-radius:2rem;
        padding:1rem;
    }
    .teamPersonBox img{
        border-radius:2rem;
    }
    .teamPersonBox .contTitle{
        margin:2rem 0 1rem 0;
    }
    .teamPersonIcon{
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    .teamPersonIcon img{
        width:30px;
        
    }
    .teamPersonIconBox{
        text-align:end;
    }
    .teamTitle .titleText a{
        text-decoration:none;
        color:#274C5B;
    }
    .teamTitle .titleText a:hover{
        text-decoration:underline;
        color:#274C5B;
    }
    /*---------------------Organic------------------*/
    #organic{
        background-color:#274C5B;   
        text-align:center;
        padding:5% 0;
        margin: 10rem 0;
    }
    .productBox{
        width:90%;
        display:grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        margin:0 auto;
        grid-gap:1rem;
    }
    #organic .titleText{
        color:white;
        margin:2rem 0;
    }
    #organic .organicTitle{
        grid-column:span 2;
    }
    .productBox .product{
        border-radius:2rem;
        width:90%;
        margin:0 auto;
    }
    .productBox .product .productImgBox{
        background-color:#fff;
        border-radius:2rem;
    }
    .productBox .product img{
        width:90%;
        height:auto;      
    }
    .productName{
        color:#fff;
        text-decoration:none;
        font-size:2rem;
        margin:2rem;
    }
    .productName:hover{
        text-decoration:underline;
    }
    .productBox .product .productNum, .productBox .product .productName{
        font-weight:600;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div id="banner">
        <img src="image/aboutBanner.png">
        <span id="bannerTitle">About Us</span>
    </div>
    <div id=topcontainer>
        <section id="about">
            <div id="aboutLeft">
                <img src="image/about_1.png">
            </div>
            <div id="abourRight">
                <h2 class="title">About Us</h2>
                <p class="titleText">We do Creative Things for Success</p>
                <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                <div class="aboutIconBox">
                    <div class="aboutIcon">
                        <img src="image/aboutAbout_1.png">
                        <div class="aboutIconContent">
                            <p class="contTitle">Modern Agriculture Equipment</p>
                        </div>
                    </div>
                    <div class="aboutIcon">
                        <img src="image/aboutAbout_2.png">
                        <div class="aboutIconContent">
                            <p class="contTitle">No growth <br>hormones are used</p>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="bluebt">Explore More<span class="material-icons btarrow">arrow_forward</span></button>
                </div>
            </div>
        </section>
        <section id="choose">
            <div class="chooseBox">
                <div class="chooseBoxLeft">
                    <h2 class="title">Why Choose us?</h2>
                    <p class="titleText">We do not buy from the open market &amp; traders.</p>
                    <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard  the 1500s, when an unknown</p>
                    <ul class="chooseBoxLeftText">
                        <span class="Textimg"></span><span class="contTitle">100% Natural Product</span>
                        <p class="contText">Simply dummy text of the printing and typesetting industry Lorem Ipsum</p>
                        <span class="Textimg"></span><span class="contTitle"> Increases resistance</span>
                        <p class="contText">Filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing</p>
                    </ul>
                </div>
                <div class="chooseBoxRight">
                    <img src="image/about_2.png">
                </div>
            </div>
            <div class="chooseIconBox">
                <div class="chooseIcon">
                    <img src="image/aboutIcon_1.svg">
                    <p class="contTitle">Return Policy</p>
                    <p class="contText">Simply dummy text of the printintypesetting industry.</p>
                </div>
                <div class="chooseIcon">
                    <img src="image/aboutIcon_2.svg">
                    <p class="contTitle">100% Fresh</p>
                    <p class="contText">Simply dummy text of the printintypesetting industry.</p>
                </div>
                <div class="chooseIcon">
                    <img src="image/aboutIcon_3.svg">
                    <p class="contTitle">Support 24/7</p>
                    <p class="contText">Simply dummy text of the printintypesetting industry.</p>
                </div>
                <div class="chooseIcon">
                    <img src="image/aboutIcon_4.svg">
                    <p class="contTitle">Secured Payment</p>
                    <p class="contText">Simply dummy text of the printintypesetting industry.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="teamTitle">
                <h2 class="title">Team</h2>
                <p class="titleText"><a href="Team.php">Our Organic Experts<a></p>
                <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            </div>
                    <a></a>
            <div class="teamContent">  
                <div class="teamPersonBox">
                    <img src="image/aboutPersonMan.png">
                    <div class="teamPersonContBox">
                        <p class="contTitle">Giovani Bacardo</p>
                        <div class="teamPersonIcon">
                            <span class="title">Farmer</span>
                            <div class="teamPersonIconBox">
                                <a href=""><img src="image/fbicon.png"></a>
                                <a href=""><img src="image/Xicon.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teamPersonBox">
                    <img src="image/aboutPersonGirl_1.png">
                    <div class="teamPersonContBox">
                        <p class="contTitle">Giovani Bacardo</p>
                        <div class="teamPersonIcon">
                            <span class="title">Farmer</span>
                            <div class="teamPersonIconBox">
                                <a href=""><img src="image/fbicon.png"></a>
                                <a href=""><img src="image/igicon.png"></a>
                                <a href=""><img src="image/Xicon.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teamPersonBox">
                    <img src="image/aboutPersonGirl_2.png">
                    <div class="teamPersonContBox">
                        <p class="contTitle">Giovani Bacardo</p>
                        <div class="teamPersonIcon">
                            <span class="title">Farmer</span>
                            <div class="teamPersonIconBox">
                                <a href=""><img src="image/fbicon.png"></a>
                                <a href=""><img src="image/igicon.png"></a>
                                <a href=""><img src="image/Xicon.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="container">
        <section id="organic">
            <div class="organicBox">
                <div class="organicTitle">
                    <h2 class="title">About Us</h2>
                    <p class="titleText">What We Offer for You</p>
                </div>
                <div class="productBox">
                    <div class="product">
                        <p class="productImgBox"><a href=""><img src="image/aboutSpicy.png"></a></p>
                        <a href="" class="productName"><p>Spicy</p></a>
                    </div>
                    <div class="product">
                        <p class="productImgBox"><a href=""><img src="image/aboutNuts.png"></a></p>
                        <a href="" class="productName"><p>Nuts &amp; Feesd</p></a>
                    </div>
                    <div class="product">
                        <p class="productImgBox"><a href=""><img src="image/aboutFrults.png"></a></p>
                        <a href="" class="productName"><p>Fruits</p></a>  
                    </div>
                    <div class="product">
                        <p class="productImgBox"><a href=""><img src="image/aboutVegetable.png"></a></p>
                        <a href="" class="productName"><p>Vegetable</p></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
