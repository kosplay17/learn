<?php require 'header.php'; ?>
	<main>
		<form class="form">
			<p><input type="text" name="name" class="feedback-output" placeholder="Имя" id="name"></ins></p>
			<p><input type="email" name="email" class="feedback-output" placeholder="Email" id="email"></ins></p>
			<p><textarea name="text" id="comment" placeholder="Сообщение" class="feedback-output"></textarea></p>
			<input type="submit" value="Отправить" class="button-submit">
			<div class="ease"></div>
		</form>

	</main>
		<?php require 'footer.php'; ?>