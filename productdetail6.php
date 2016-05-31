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
        	<h1>Marco Piero Код 4925</h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product/06.jpg"><img src="images/product/06.jpg" alt="image" /></a>
            </div>
            <div class="content_half float_r">
                <font size="3" color=black face="times new roman"><table>
                    <tr>
                        <td width="160">Ціна:</td>
                        <td>1090 грн.</td>
                    </tr>
                    <tr>
                        <td>Доступність:</td>
                        <td>В наявності</td>
                    </tr>
                    <tr>
                        <td>Модель:</td>
                        <td>Wonex Код 5613</td>
                    </tr>
					<tr>
                        <td>Виробник:</td>
                        <td>Польща</td>
					 <tr>
                        <td>Колекція:</td>
                        <td>2016</td>
                    </tr>
                    </tr>
                </table></font>
                <div class="cleaner h20"></div>

                <a href="Marco Piero Kod 4925.php" class="addtocart"></a>

			</div>
            <div class="cleaner h30"></div>
         <table border="1">
   <caption>Опис товару</caption>
   <tr>
    <th>Тип</th>
    <th>Матеріал</th>
    <th>Колір</th>
    <th>Тип підошви</th>
	<th>Висота каблука</th>
	<th>Верх</th>
   </tr>
   <tr><td>Спортивні туфлі</td>
        <td>Шкіра</td>
		<td>Білий</td>
		<td>Платформа</td>
		<td>4 см</td>
		<td>Шкіра</td></tr>
  </table>
          <div class="cleaner h50"></div>
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