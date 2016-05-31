<?php 
include_once("session.php");
?>
<!DOCTYPE html 
<head>
<?php
     include_once("head.php");
?>
</head>
<body>
<div id="shoes_menu">
<div id="shoes_menu2">
     <?php
     include_once("my_account.php");
     include_once("shoes_menubar.php");
     ?>   
    <div id="category">
	     <?php
		     include_once("sidebar.php");
		 ?>
        <div id="content" class="float_r">
        	<div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/01.jpg" alt="" title="Найкраще взуття за низькими цінами" />
                    <img src="images/slider/02.jpg" alt="" />
                    <img src="images/slider/03.jpg" alt="" />
                    <img src="images/slider/04.jpg" alt="" />
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	<h1>Нові надходження</h1>
            <div class="product_box">
	            <h3>Pier Lucci Код 5714</h3>
             <img src="images/product/01.jpg" alt="Shoes 1" /></a>
                <p class="product_price">2690 грн.</p>
                <a href="Pier Lucci Kod 5714.php" class="addtocart"></a>
                <a href="productdetail1.php" class="detail"></a>
            </div>        	
            <div class="product_box">
            	<h3>Pier Lucci Код 5707</h3>
             <img src="images/product/02.jpg" alt="Shoes 2" /></a>
              <p class="product_price">3340 грн.</p>
                <a href="Pier Lucci Kod 5707.php" class="addtocart"></a>
                <a href="productdetail2.php" class="detail"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Pier Lucci Код 5706</h3>
             <img src="images/product/03.jpg" alt="Shoes 3" /></a>
              <p class="product_price">3280 грн.</p>
                <a href="Pier Lucci Kod 5706.php" class="addtocart"></a>
                <a href="productdetail3.php" class="detail"></a>
            </div>   
            
            <div class="cleaner"></div>
                 	
<div class="product_box">
            	<h3>Wonex Код 5617</h3>
           	 <img src="images/product/04.jpg" alt="Shoes 4" /></a>
             <p class="product_price">340 грн.</p>
                <a href="Wonex Kod 5617.php" class="addtocart"></a>
                <a href="productdetail4.php" class="detail"></a>
            </div>        	
            <div class="product_box">
	            <h3>Wonex Код 5613</h3>
             <img src="images/product/05.jpg" alt="Shoes 5" /></a>
              <p class="product_price">595 грн.</p>
                <a href="Wonex Kod 5613.php" class="addtocart"></a>
                <a href="productdetail5.php" class="detail"></a>
            </div>        	
            <div class="product_box no_margin_right">
            	<h3>Marco Piero Код 4925</h3>
             <img src="images/product/06.jpg" alt="Shoes 6" /></a>
                <p class="product_price">1090 грн.</p>
                <a href="Marco Piero Kod 4925.php" class="addtocart"></a>
                <a href="productdetail6.php" class="detail"></a>
            </div>        	
        </div> 
        <div class="cleaner"></div>
    </div>
    </div> 
    <?php
	include_once("footer.php");
	?>
</div>
</div> 

</body>
</html>