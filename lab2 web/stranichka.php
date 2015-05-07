<!DOCTYPE HTML>
<html>

<head>

<meta charset="utf-8">
<title>web - страничка</title>
<link rel="stylesheet" href="style_stranichka.css">

</head>
<body>

	<header>

		<div class="zag" >Чертежи</div>	

	</header>

	<nav>
	
		<div class="zag" >Навигация</div>
		<li>
			<a href="http://web/stranichka.php">К оглавлению</a>
		</li>
		<li>
			<a href="http://web/stranichka_kartinki.php">Картинки</a>
		</li>
		<li>
			<a href="http://web/stranichka_ssilki.php">Ссылки</a>
		</li>
		<div class="zag" >Регистрация</div>
		<form action="stranichka.php" method="post">
			<label>
				Email
				<br>
					<input type="email" size="24" placeholder="name@email.com" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" >
					<!--required-->
				<br>
			</label>
			<label>
				Логин
				<br>
					<input type="text" size="24" pattern="[a-zA-Z0-9]+" title="комбинации букв английского алфавита и цифр">
				<br>
			</label>
			<label>
				Телефон
				<br>
					<input type="tel" size="24" placeholder="xxxx-xxx-xxxx" pattern="^\d{4}-\d{3}-\d{4}$">
					<!--pattern="(\+?\d[- .]*){7,13}" title="Международный, государственный или местный телефонный номер">-->
				<br>
			</label>
			<label>
				Пароль
				<br>
					<input type="password" size="24" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
							title="Не менее восьми символов, содержащих хотя бы одну цифру и символы из верхнего и нижнего регистра">
				<br>
			</label>
			<label>
				Возраст
				<br>
					<input type="number" min="1" max="200">
				<br>
			</label>
			<br>		
			<div class="reg">
				<input type="submit" name="reg_sub" value="Регистрация" />
			</div>
		</form>
	</nav>

	<?php
	if($_POST['reg_sub']=="Регистрация")
	{
		
	}
	
	?>
	
	
	<article>
		
		<div class="zag" >Содержание</div>
		
	</article>

	<footer>
 
		<div class="zag" >Информация</div>
 
	</footer>

</body>

</html>