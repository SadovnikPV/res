<!-- --------------------------------- FOOTER ------------------------------------ -->
<!-- ----- А так же подключение скриптов JS и закрывающие теги body и html  ------ -->

<?php
    include_once "functions.php";
?>

        <footer class="footer">
			<div class="footer__container _container">
				<div class="footer__content">
					<div class="footer__logo">
						<h2 class="footer__logo-text">Резюме</h2>
					</div>
					<div class="footer__map">
						<ul class="footer__map-list">
							<li class="footer__map-title">
								Карта сайта
							</li>
							<li class="footer__map-item">
								<a href="<?= get_url("index.php") ?>" class="footer__map-link">Главная</a>
							</li>
							<li class="footer__map-item">
								<a href="<?= get_url("portfolio.php") ?>" class="footer__map-link">Портфолио</a>
							</li>
							<li class="footer__map-item">
								<a href="<?= get_url("about-me.php") ?>" class="footer__map-link">Обо мне</a>
							</li>
							<li class="footer__map-item">
								<a href="<?= get_url("help-project.php") ?>" class="footer__map-link">Помочь проекту</a>
							</li>
						</ul>
					</div>
					<div class="footer__contacts">
						<ul class="footer__contacts-list">
							<li class="footer__contacts-title">
								Контакты
							</li>
							<li class="footer__contacts-item">
								Телефон: <a href="tel: +79250557131" class="footer__contacts-link">8-925-055-71-31</a>
							</li>
							<li class="footer__contacts-item">
								E-mail: <a href="mailto:sadofev_pv@mail.ru" class="footer__contacts-link">sadofev_pv@mail.ru</a>
							</li>
						</ul>
					</div>
					<img class="footer__decor-img-1" src="<?= get_url('img/footer/footer_branch_img_1.png') ?>" alt="декоративное изображение">
				</div>
			</div>
		</footer>
</div>
		<a href="#" class="_scrollup">Наверх</a>

		<script src="<?= get_url('js/jquery.min.js') ?>"></script>
		<script src="<?= get_url('js/script.js') ?>"></script>
	</body>

</html>