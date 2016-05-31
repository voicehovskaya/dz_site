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
        	<h1>Звернення</h1>
            <div class="content_half float_l">
                <h4>Графік опрацювання повідомлень:</h4>
                   <h5>З 09:00 до 19:00</h5>
                <div id="contact_form">
                   <form method="post" name="contact" action="vidpravleno.php">
                        <label for="author">Ім'я:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="text">Повідомлення:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                 <input type="submit" class="submit_btn" name="submit" id="submit" value="відправити"/> 
                    </form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h5>Адреса:</h5>
			м. Київ, пр-т.Московcкий 8 корпус 1, 2й этаж, офис 208<br />		
			Телефон: +38 (044) 303-97-17<br />
			Email: <a href="shoes@market.com">shoes@market.com</a><br/>
        </div>            
        </div> 
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>