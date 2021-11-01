<?php require 'header.php'; ?>
	<main>
		<img src="img/jdm.jpg" alt="" class="jdmlegend">	
		<div class="advantages__container">
			<div class="advantages">
				<div class="advantages__items">
					<img src="img/1.png" alt="">
					<h2>Описание</h2>
					<p>Подробное описание каждого действия, с дневником событий.</p>
				</div>
				<div class="advantages__items">
					<img src="img/2.png" alt="">
					<h2>Возможности</h2>
					<p>Свап мотора, кузовные работы</p>
				</div>
				<div class="advantages__items">
					<img src="img/3.png" alt="">
					<h2>Анкета</h2>
					<p>История каждого автомобиля!</p>
				</div>
				<div class="advantages__items">
					<img src="img/4.png" alt="">
					<h2>Дополнения</h2>
					<p>Установка дополнительный агрегатов.</p>
				</div>
				<div class="advantages__items">
					<img src="img/5.png" alt="">
					<h2>Диагностика</h2>
					<p>Компьютерная диагностика, считывание ошибок и датчиков.</p>
				</div>
				<div class="advantages__items">
					<img src="img/6.png" alt="">
					<h2>Отзывы</h2>
					<p>Большое количество положительных отзывов от клиентов.</p>
				</div>
			</div>
		</div>	
		<div class="pagination">
	<ul>
		<li class="nav-previous"><?php next_posts_link( '← ' . 'Предыдущие' ); ?></li>
		<li class="nav-next"><?php previous_posts_link( 'Следующие' . ' →' ); ?></li>
	</ul>
</div>
	</main>
	<?php require 'footer.php'; ?>