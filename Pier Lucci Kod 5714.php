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
		<h1 align="center">Замовлення</h1>
		<h2 align="center">Pier Lucci Код 5714</h2>
			<div class="content_half float_l">
				<a  rel="lightbox[portfolio]" href="images/product/01.jpg"><img src="images/product/01.jpg" alt="image" /></a>
            </div>
        <?php
		include_once("form_zamovl.php");
		?>
		<script type="text/javascript">
		function btnClick(){
			//отримуємо всі введені значення (без перевірки на їх заповнення)
			number = document.getElementById('shoes-number').value
			first_name = document.getElementById('user-first-name').value
			last_name = document.getElementById('user-last-name').value
			father_name = document.getElementById('user-father-name').value
			telefon = document.getElementById('telefon').value
			user_address = document.getElementById('user-address').value
			delivery_type = document.getElementById('delivery-type').value
			//початкова повна сума
			total = 2690
			// домножаємо на кількість
			total = total * number
			//та додаємо вартість пересилки в залежності від обраного способу
			switch(delivery_type){
				case 'novaposhta': total += 45; break;
				case 'in-time': total += 30; break;
				case 'self': total += 0; break;
			}
			// формуємо повідомлення 
			msg = 'Шановний(а), ' + first_name + ' ' + father_name + '!<br>Повна вартість Вашого замовлення складає ' + total + ' грн.<br>Дякуємо за покупку!'
			// та виводимо його в innerHTML (щоб тег BR інтерпретувався як тег, а не як частина тексту)
			document.getElementById('result').innerHTML = msg
		}
		</script>
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>