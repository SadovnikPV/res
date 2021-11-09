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
					<div class="resume__preview">На этой странице вы можете посмотреть мои работы.
						Для вашего удобства, проекты поделены на разные категории, хотя это разделение довольно условное,
						потому что в каждой работе присутствуют и элементы верстки, и чистый JS, а где-то и 
						back-end составляющая. Приятного просмотра!<br> 
						И не забудьте оставить свои пожелания на странице 
						<a class="resume__preview-link" href="<?= get_url("help-project.php") ?>">помочь проекту</a>
						!
					</div>

					<div class="resume__title-container">
						<div class="resume__title">Примеры работ</div>
					</div>

					<div class="resume__content-list content-list">
						<details class="content-list__details">
							<summary class="content-list__title-link">Содержание</summary>
							<div class="content-list__container">
								<!-- <img class="content-list__decor-img_1" src="/img/content-list/resume_content_list_tree_01.png" alt="декоративное изображение"> -->
								<ul class="content-list__list">
									<li class="content-list__item">
										<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
									</li>
									<li class="content-list__item">
										<a href="#portfolio-design-project" class="content-list__link">Верстка по макету</a>
									</li>
									<li class="content-list__item">
										<a href="#portfolio-js-project" class="content-list__link">JS приложения</a>
									</li>
									<li class="content-list__item">
										<a href="#portfolio-backend-project" class="content-list__link">Back-End</a>
									</li>
									<li class="content-list__item">
										<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
									</li>
								</ul>
								<!-- <img class="content-list__decor-img_1" src="/img/content-list/resume_content_list_tree_04.png" alt="декоративное изображение"> -->
							</div>
						</details>
					</div>

					<div class="resume__resume-section resume-section">
						<div id="portfolio-design-project" class="resume-section__title">Верстка по макету</div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">И снова портфолио...</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<img class="resume-section__project-img" src="img/portfolio/portfolio_design_logo.jpg" alt="логотип или скрин главной страницы проекта">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Ссылка на проект:</span>
									<a class="resume-section__project-link" target="_blank" href="<?= get_url("projects/portfolio-grey-design/index.html") ?>">Открыть работу</a>
								</div>
								<div class="resume-section__item resume-section__item_break-all">
									<span class="resume-section__item-field">Ссылка на GitHub:</span>
									<a class="resume-section__project-link" target="_blank" href="<?= get_url("projects/portfolio-grey-design/index.html") ?>">Посмотреть исходники</a>

								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Открыть макет, как изображение:</span>
									<a class="resume-section__project-link" target="_blank" href="<?= get_url("projects/portfolio-grey-design/index.html") ?>">Макет</a>

								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Сервисы, языки и технологии, используемые при разработке:</span>
									HTML5, CCS3, SASS (SCSS), JavaScript, GULP 4
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Описание проекта: </span>
									Верстка по макету сайта-портфолио. Сам макет был найден на просторах интернета и автор его неизвестен.
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Комментарии разработчика: </span>
									Верстка по методологии БЭМ
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">Relvise consulting</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<img class="resume-section__project-img" src="img/portfolio/relvise_design_logo.png" alt="логотип или скрин главной страницы проекта">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Ссылка:</span>
									Самозанятый
								</div>
								<div class="resume-section__item resume-section__item_break-all">
									<span class="resume-section__item-field">Ссылка на GitHub:</span>
									Самозанятый
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Скачать макет:</span>
									Самозанятый
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Сервисы, языки и технологии, используемые при разработке:</span>
									HTML5, CCS3, SASS (SCSS), GULP 4
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Описание проекта: </span>
									Верстка по макету сайта консалтинговой компании. Верстка нарочито сделана без использования JS, хотя она полностью адаптивна.
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Комментарии разработчика: </span>
									Верстка по методологии БЭМ
								</div>
							</div>
						</div>

					</div>	
					
					<div class="resume__resume-section resume-section">
						<div id="portfolio-js-project" class="resume-section__title">JS приложения</div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">USSR Tank</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<img class="resume-section__project-img" src="img/portfolio/ussrtank_logo.jpg" alt="логотип или скрин главной страницы проекта">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Ссылка:</span>
									Самозанятый
								</div>
								<div class="resume-section__item resume-section__item_break-all">
									<span class="resume-section__item-field">Ссылка на GitHub:</span>
									https://github.com/SadovnikPV/USSRTank
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Сервисы, языки и технологии, используемые при разработке:</span>
									HTML5, CSS3, JS, JQuery
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Описание проекта: </span>
									"От Курска и Орла, война нас довела...".<br>
									Небольшое переосмысление одной из любимых игр детства. 
									"Танчики" теперь в локациях Второй Мировой Войны. Новые локации, обновленная физика, 
									вместо бонусов на уровнях - система набора опыта и прокачки своей боевой машины в перерывах 
									между боями. Пройдите путь от границ Смоленска до Москвы и обратно - до самого Берлина! 
									Начав простым рядовым, проявив отвагу и смекалку, станьте генералом армии СССР! 
									Аутентичное музыкальное сопровождение поможет вам глубже погрузится в то непростое 
									и ужасное время.
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Комментарии разработчика: </span>
									Помимо самой игры в проекте реализован редактор карт, предназначенный, правда, только для разработчика. 
									Поэтому дружелюбным интерфейсом для простого пользователя он похвастаться не может. 
									Ознакомиться с ним можно по ссылке: конструктор уровней.
									Игра написана в основном на JS (jquery) в стиле ООП.
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">Monkey Money</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<img class="resume-section__project-img" src="img/portfolio/monkey_money_logo.jpg" alt="логотип или скрин главной страницы проекта">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Ссылка:</span>
									Самозанятый
								</div>
								<div class="resume-section__item resume-section__item_break-all">
									<span class="resume-section__item-field">Ссылка на GitHub:</span>
									Самозанятый
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Сервисы, языки и технологии, используемые при разработке:</span>
									HTML5, CCS3, SASS (SCSS), JavaScript, CreateJS, GULP 4
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Описание проекта: </span>
									Хотите погрузиться в атмосферу казино? Стрекот игровых автоматов, звон монет, яркие краски. А теперь 
									добавьте к этому оттенок тропической расслабляющей атмосферы. Понравилось? Тогда игра Monkey Money для вас!
									Наш симулятор игрового автомата хоть и навеян реально существующими слотами, но на самом деле является
									самостоятельной творческой реализацией. А теперь...<br>
									Испытай свою удачу!
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Комментарии разработчика: </span>
									Приложение написано с использованием библиотеки CreateJS.<br>
									Проект еще доделывается. А код в ожидании рефокторинга.
								</div>
							</div>
						</div>

					</div>

					<div class="resume__resume-section resume-section">
						<div id="portfolio-backend-project" class="resume-section__title">Back-End</div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">Mini URL - сервис сокращения ссылок</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<img class="resume-section__project-img" src="img/portfolio/mini_url_logo.jpg" alt="логотип или скрин главной страницы проекта">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Ссылка:</span>
									Самозанятый
								</div>
								<div class="resume-section__item resume-section__item_break-all">
									<span class="resume-section__item-field">Ссылка на GitHub:</span>
									https://github.com/SadovnikPV/USSRTank
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Сервисы, языки и технологии, используемые при разработке:</span>
									HTML5, CSS3, JS, PHP, MySQL
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Описание проекта: </span>
									У google есть, у Яндекс есть, даже у Вконтакте есть. А теперь и у нас есть!<br>
									Сервис для сокращения длинных ссылок MiniURL! Авторизация, просмотр статистики, редактирование
									ссылок и многое другое вы можете использовать уже сейчас, воспользовавшись нашим сервисом!
									Объявляем войну длинным ссылкам!
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Комментарии разработчика: </span>
									Серверная часть состоит из БД с двумя связанными таблицами, и несложного скрипта авторизации.
									Проект, как и предыдущий, еще дорабатывается, как в плане дизайна, так и в плане функционала.
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</main>

<?php 
	include "includes/footer.php";
