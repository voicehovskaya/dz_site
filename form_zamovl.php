<!DOCTYPE html 
<html>
<head></head>
<body>
<div id="content" class="float_r">		
	<label for="shoes-number">
	<font size="4" color=#8B8989 face="times new roman">Кількість</label></font>
	<input type="number" value="1" min="1" max="100" id="shoes-number"></font> <br>
	<div>
		<p style="line-height:300%"><font size="5" color=#FF69B4 face="times new roman">Персональна інформація про покупця</p></font>
		<font size="3" color=#FF69B4 face="times new roman"><table width="50%" cellspacing="5" cellpadding="10">
			<tr>
				<td for="user-last-name">Прізвище</td>
				<td> <input type="text" id="user-last-name"></td>
			</tr>
			<tr>
				<td for="user-first-name">Імя</td>
				<td><input type="text" id="user-first-name"></td>
			</tr>
			<tr>
				<td for="user-father-name">По-батькові</td>
				<td><input type="text" id="user-father-name"></td>
			</tr>
			<tr>
				<td for="telefon">Телефон</td>
				<td><input type="text" id="telefon"></td>
			</tr>
			<tr>
				<td for="user-address">Адреса доставки</td>
				<td><input type="text" id="user-address"></td>
			</tr>
			<tr>
				<td for="delivery-type">Тип доставки</td>
				<td>
					<select id="delivery-type">
						<option value="novaposhta" selected="selected">Нова пошта</option>
						<option value="in-time">Ін-Тайм</option>
						<option value="self">Самовивіз</option>
					</select>
				</td>
			</tr>
		</table>
		</div></font>
					<font size="5" color="#363636" face="gabriola"><div id="result"></div>
					<button onclick="btnClick();">Замовити</button></font>
						
			</div>
</body>
</html>