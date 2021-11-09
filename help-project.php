<?php 
	include "includes/begin-html.php";
	include "includes/header.php";
	include "includes/main-menu.php";
?>

		<main class="main-page">
			<div class="main-page__container _container">
				<div class="main-page__resume resume">
					<div class="resume__preview-title-img-wrapper">
						<img src="img/main/resume_main_title_branch_img.png" alt="декоративное изображение" class="resume__preview-title-img">
					</div>
					<div class="resume__preview">Я впечатлен, что вы читаете эти строки! Значит, скорее всего, 
						изучение вами данного ресурса подошло к концу. Я надеюсь, что вам было хотя бы капельку интересно. 
						И теперь я хочу попросить о небольшой помощи. Напишите, пожалуйста, хотя бы несколько слов, о ваших 
						впечатлениях. Что понравилось или не понравилось в данном резюме. Что стоило бы добавить или убрать, 
						чтобы сделать его более привлекательным в ваших глазах. Каких навыков и знаний не достает 
						вашему покорному слуге на данном этапе?
						В общем, я хочу лучше понимать в каком направлении работать, чтобы после просмотра у вас возникла бы 
						мысль : "О! Пожалуй, этого парня мы пригласим на собеседование!".
					</div>

					<div class="resume__title-container">
						<div class="resume__title">Помочь проекту</div>
					</div>

					<div class="resume__resume-section resume-section">
						<div class="resume-section__title">Форма обратной связи</div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__date"></div>
								<img class="resume-section__date-img" src="/img/about-me/resume_about_me_bells.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<p class="resume-section__about-me">Пожалуйста, напишите свои советы и впечатления в форму ниже, я буду вам безмерно признателен!
										По всем остальным вопросам, вы можете обратиться ко мне через контакты, указанные в основном резюме.
									</p>
									<div class="resume-section__guestbook guestbook">
										<form class="guestbook__form" name="guestbook_form" method="POST" action="">
											Имя (необязательно): <input class = "guestbook__input" type="text" name="name" placeholder="Имя"> <br>
											Название компании (необязательно): <input class = "guestbook__input" type="text" name="company" placeholder="Название компании"> <br>
											Отзывы и советы (обязательно): <br>
											<textarea class = "guestbook__textarea" name = "message"></textarea>
											<div class="guestbook__submit-wrap">
												<input class = "guestbook__submit" type="submit" title="Отправить">
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>	
					</div>

				</div>
			</div>
		</main>

<?php 
	include "includes/footer.php";