<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- swiper css link -->
<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    
 

</head>

<body>

<div class="container">

<?php @include 'header.php'; ?>

<section class="home">
    <div class="swiper home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
                <h3>Plan your wedding!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Minus tempore, commodi nisi aperiam illum, cumque rerum tempora asperiores, 
                    tenetur dolorum.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </div>


        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
                <h3>Plan your wedding!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Minus tempore, commodi nisi aperiam illum, cumque rerum tempora asperiores, 
                    tenetur dolorum.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
                <h3>Plan your wedding!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Minus tempore, commodi nisi aperiam illum, cumque rerum tempora asperiores, 
                tenetur dolorum.</p>
                <a href="about.php" class="btn">discover more</a>
            </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>

    </div>

</section>

<?php @include 'footer.php'; ?>

</div>

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
  
</body>

</html>