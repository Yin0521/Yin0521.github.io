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
<title>Organick shop</title>
</head>
<style>
    #categoriesShop .title,#categoriesShop .titleText{
        text-align:center;
        margin:2rem 0;
    }
    #productShop{
        display:grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        grid-gap:2rem;
        width:70%;
        margin:5rem auto;
    }
    .productTitle{
        background-color:#274C5B;
        color:white;
        font-size:1.5rem;
        font-weight:500;
        padding:0.5rem;
        border-radius:1rem;
        width:30%;
        text-align:center;
    }
    .product img{
        width:300px;
        height:300px;
        margin:1rem;
        background-color:#fff;
	    box-shadow:0 0.1rem 0.3rem 0.1rem #ddd;
    }
    .product a:hover{
        color:red;
        text-decoration:underline;
    }
    .productName{
        font-size:2rem;
        font-weight:500;
        text-decoration:none;
        color:#274C5B;
    }
    .productName p{
        margin:1rem 0;
    }
    .productNum{
        font-size:1.5rem;
    }
    .through{
        text-decoration:line-through;
        color:#B8B8B8;
    }
    .star{
        color:#FFA858;
        vertical-align:middle;
        margin-bottom:5px;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div id="banner">
        <img src="shopImages/shopBanner.png">
        <span id="bannerTitle">Shop</span>
    </div>
    <section id="categoriesShop">
            <h2 class="title">Categories</h2>
            <p class="titleText">Our Products</p>
            <div id="productShop">
                <div class="product">
                    <p class="productTitle">Vegetable</p>
                    <a href="shopSingle.php"><img src="shopImages/shop01.png"></a>
                    <a href="shopSingle.php" class="productName"><p>Calabrese Broccoli</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;13.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Fresh</p>
                    <a href=""><img src="shopImages/shop02.png"></a>
                    <a href="" class="productName"><p>Fresh Banana Fruites</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;14.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Millets</p>
                    <a href=""><img src="shopImages/shop03.png"></a>
                    <a href="" class="productName"><p>White Nuts</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;15.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Vegetable</p>
                    <a href=""><img src="shopImages/shop04.png"></a>
                    <a href="" class="productName"><p>Vegan Red Tomato</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;17.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Health</p>
                    <a href=""><img src="shopImages/shop05.png"></a>
                    <a href="" class="productName"><p>Mung Bean</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;11.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Nuts</p>
                    <a href=""><img src="shopImages/shop06.png"></a>
                    <a href="" class="productName"><p>Brown Hazelnut</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;12.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Fresh</p>
                    <a href=""><img src="shopImages/shop07.png"></a>
                    <a href="" class="productName"><p>Eggs</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;17.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Fresh</p>
                    <a href=""><img src="shopImages/shop08.png"></a>
                    <a href="" class="productName"><p>Zelco Suji Elaichi Rusk</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;15.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Health</p>
                    <a href=""><img src="shopImages/shop09.png"></a>
                    <a href="" class="productName"><p>Mung Bean</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;11.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Nuts</p>
                    <a href=""><img src="shopImages/shop10.png"></a>
                    <a href="" class="productName"><p>White Hazelnut</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;12.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Fresh</p>
                    <a href=""><img src="shopImages/shop08.png"></a>
                    <a href="" class="productName"><p>Fresh Corn</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;17.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
                <div class="product">
                    <p class="productTitle">Fresh</p>
                    <a href=""><img src="shopImages/shop08.png"></a>
                    <a href="" class="productName"><p>ZOrganic Almonds</p></a>
                    <span class="productNum through">&#36;20.00</span>
                    <span class="productNum">&#36;15.00</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                    <span class="material-icons star">star</span>
                </div>
            </div>
        </section>
    <footer>
        <div id="mailAddress">
            <img src="image/homeAddress.png">
            <div class="mailAddressBox">
                <div class="mailAddressBoxLeft">
                    <p>Subscribe to our Newsletter</p>
                </div>
                <div class="mailAddressBoxRight">
                    <form action="" method="post" autocomplete="off">
                        <input type="email" name="email" id="email" placeholder="Your Email Address" size="40rem">
                        <button class="bluebt">Subscribe</button>
                    </form>
                </div>
             </div>
        </div>
        <?php include("footer.php"); ?>
</body>
</body>
</html>
