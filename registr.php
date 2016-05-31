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
<?php
	$connect = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('my_db');
	
	if (isset ($_POST['submit']))
	{
		    $name = mysql_escape_string($_POST['name']);
			$middlename = mysql_escape_string($_POST['middlename']);
			$surname = mysql_escape_string($_POST['surname']);
			$date_bd = mysql_escape_string($_POST['date_bd']);
			$month_bd = mysql_escape_string($_POST['month_bd']);
			$year_bd = mysql_escape_string($_POST['year_bd']);
			$country = mysql_escape_string($_POST['country']);
			$city = mysql_escape_string($_POST['city']);
			$email = mysql_escape_string($_POST['email']);
			$phone = mysql_escape_string($_POST['phone']);
			$login = mysql_escape_string ($_POST['login']);
			$password = mysql_escape_string($_POST['password']);
			$r_password = mysql_escape_string($_POST['r_password']);
		if ($password == $r_password)
		{
			$password = md5($r_password);
			$query = mysql_query("INSERT INTO users VALUES ('','$name','$middlename','$surname','$date_bd','$month_bd','$year_bd','$country','$city','$email','$phone',$login','$password')");
			echo '<center><label><FONT size="4" color=black face="times new roman">Вітаємо, Ви успішно зареєстровані!</label></font><center>';
		}
		else
		{
			echo '<center><label><font size="4" color=black face="times new roman">Паролі не співпадають!</label></font><center>';
		}
	}
	else 
	{
		echo'<div id="content" class="float_r">
	    <h1>Реєстрація</h1>
		<form method="POST" action="registr.php">
		<font color=black><table width="50%" cellspacing="0" cellpadding="5">
		<tr> 
		<td align="right" width="100">Ім*я</td>
		<td><input type="text" name="name" placeholder="Введіть ім*я" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">По-батькові</td>
		<td><input type="text" name="middlename" placeholder="Введіть по-батькові" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Прізвище</td>
		<td><input type="text" name="surname" placeholder="Введіть прізвище" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">День</td>
		<td><select name="date_bd" required>
		<option disabled>Оберіть дату</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>		
		</td>
		<td align="right" width="100">Місяць</td>
		<td><select name="month_bd" required>
		<option disabled>Оберіть місяць</option>
		<option value="січень">січень</option>
		<option value="лютий">лютий</option>
		<option value="березень">березень</option>
		<option value="квітень">квітень</option>
		<option value="травень">травень</option>
		<option value="червень">червень</option>
		<option value="липень">липень</option>
		<option value="серпень">серпень</option>
		<option value="вересень">вересень</option>
		<option value="жовтень">жовтень</option>
		<option value="листопад">листопад</option>
		<option value="грудень">грудень</option>
		</td> 
		<td align="right" width="100">Рік</td>
		<td><select name="year_bd" required>
		<option disabled>Оберіть рік</option>
		<option value="1976">1976</option>
		<option value="1977">1977</option>
		<option value="1978">1978</option>
		<option value="1979">1979</option>
		<option value="1980">1980</option>
		<option value="1981">1981</option>
		<option value="1982">1982</option>
		<option value="1983">1983</option>
		<option value="1984">1984</option>
		<option value="1985">1985</option>
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		</td>
		</tr>
		<tr> 
		<td align="right" width="100">Країна</td>
		<td><select name="country" required>
		<option disabled>Оберіть країну</option>
		<option value="Ukraine">Україна</option>
		<option value="USA">США</option>
		<option value="GB">Польща</option>
		<option value="Russia">Росія</option>
		</td>
		</tr>
		<tr> 
		<td align="right" width="100">Місто</td>
		<td><input type="text" name="city" placeholder="Введіть місто" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">E-mail</td>
		<td><input type="text" name="email" placeholder="Введіть email" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Телефон</td>
		<td><input type="text" name="phone" placeholder="0900000000" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right" width="100">Логін</td>
		<td><input type="text" name="login" placeholder="Введіть логін" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Пароль</td>
		<td><input type="password" name="password" maxlength="50" size="20" required></td>
		</tr>
		<tr> 
		<td align="right">Повторіть пароль</td>
		<td><input type="password" name="r_password" maxlength="50" size="20" required></td>
		</tr>
		</table>
		<div>
			<label for="message">Отримувати повідомлення з сайту про поставку нових товарів:</label>
			<input type="checkbox" name="lan1" value="yes"
			                                   checked>Так
			<input type="checkbox" name="lan2" value="no"
			                                   checked>Ні
		</div>		
		<div>
			<label for="delivery">Пріоритетний тип доставки:</label>
			<input type="radio" name="mail" value="self"
			                                   >Самовивіз
			<input type="radio" name="mail" value="novaposhta"
			                                   >Нова пошта
		     <input type="radio" name="mail" value="in-time"
			                                   >Ін-Тайм
		</div></font>
		<div>
			<input type="submit" name="submit" value="Зареєструватися" />
		</div>
		</form>
		</div>';
	}
?>
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>