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
<title>Organick shopSingle</title>
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
    .singleBox{
        display:grid;
        grid-template-columns:1fr 1fr;
        width:70%;
        margin:10rem auto;
    }
    .singleBox img{
        width:80%;
        height:auto;
    }
    .singleBox .productTitle{
        width:20%;
    }
    .goodsTextBox{
        margin:5rem 0;
    }
    .goodsTextBox .productName{
        font-weight:600;
        font-size:3.2rem;
    }
    .star{
        margin:1.5rem 0;
    }
    .goodsTextBox .contText{
        margin:3rem 0;
    }
    .quantityBox{
        font-size:2rem;
        font-weight:600;
    }
    .quantityBox input[type="number"]{
        height:6rem;
        border:1px solid black;
        border-radius:1rem;
        text-align:center;
        font-weight:600;
        font-size:1.9rem;
        width:30%;
    }
    .ProductDescription{
        width: 60%;
        margin:2rem auto;
        text-align:center;
    }
    .ProductDescriptionBt p{
        display:inline-block;
        width:20rem;
        font-size:2rem;
        font-weight:600;
        cursor:pointer;
    }
    .ProductDescription .contText{
        margin:5rem;
    }
    .ProductDescriptionText{
        display:none;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div id="banner">
        <img src="shopImages/shopSingleBanner.png">
        <span id="bannerTitle">Shop Single</span>
    </div>
    <section id="single">
        <div class="singleBox">
            <div class="product">
                <p class="productTitle">Millets</p>
                <img src="shopImages/shop01.png">
            </div>
            <div class="goodsTextBox">
                <p class="productName">Calabrese Broccoli</p>
                <span class="material-icons star">star</span>
                <span class="material-icons star">star</span>
                <span class="material-icons star">star</span>
                <span class="material-icons star">star</span>
                <span class="material-icons star">star</span>
                <p><span class="productNum through">&#36;20.00</span>
                <span class="productNum">&#36;15.00</span></p>
                <p class="contText">Simply dummy text of the printing and typesetting industry. Lorem had ceased to been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>       
                <div class="quantityBox">
                    <span id="quantityName">Quantity :</span>
                    <input name="quantity" type="number" id="quantity">
                    <button class="bluebt">Add To Cart<span class="material-icons btarrow">arrow_forward</span></button>
                </div>
            </div>
        </div>
        <div class="ProductDescription">
            <div class="ProductDescriptionBt">
                <p id="ProductDescription" class="bluebt">Product Description</p>
                <p id="AdditionalInfo">Additional Info</p>
            </div>
            <p id="ProductContText" class="contText">Welcome to the world of natural and organic. Here you can discover the bounty of nature. We have grown on the principles of health, ecology, and care. We aim to give our customers a healthy chemical-free meal for perfect nutrition. It offers about 8–10% carbs. Simple sugars — such as glucose and fructose — make up 70% and 80% of the carbs in raw.</p>
            <p id="AddContText" class="contText ProductDescriptionText">It offers about 8–10% carbs. Simple sugars — such as glucose and fructose — make up 70% and 80% of the carbs in raw.Welcome to the world of natural and organic. Here you can discover the bounty of nature. We have grown on the principles of health, ecology, and care. We aim to give our customers a healthy chemical-free meal for perfect nutrition. </p>
        </div>
    </section>
    <section id="categoriesShop">
            <h2 class="titleText">Related Products</p>
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
            </div>
        </section>
    <?php include("footer.php"); ?>
</body>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $('#ProductDescription').click(function() {
            $(this).addClass('bluebt');
            $('#AdditionalInfo').removeClass('bluebt');
            $('#AddContText').hide(); // 隱藏所有內容
            $('#ProductContText').removeClass('bluebt');
            $('#ProductContText').show(); // 顯示內容 1
        });

        $('#AdditionalInfo').click(function() {
            $(this).addClass('bluebt');
            $('#ProductDescription').removeClass('bluebt');
            $('#ProductContText').hide(); // 隱藏所有內容
            $('#AddContText').removeClass('bluebt');
            $('#AddContText').show(); // 顯示內容 2
        });
    </script>
</html>
