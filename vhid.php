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
		   <h1>Здійсніть вхід</h1>
    <form method="POST" action="vhid.php">
    <font color=#363636><table width="100%" cellspacing="0" cellpadding="5">
     <td align="right">Логін</td>
     <td><input type="text" name="e_login" placeholder="Введіть логін" maxlength="50" size="20"></td>
    </tr>
	<tr> 
     <td align="right">Пароль</td>
     <td><input type="password" name="e_password" maxlength="50" size="20"></td>
    </tr>
    </table>
	</font>
    <div>
    <input type="submit" name="submit" value="Вхід" />
    </div>
  </form>
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