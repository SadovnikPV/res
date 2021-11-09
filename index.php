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
					<div class="resume__preview">На этой странице вы можете ознакомиться с моим резюме. Всё формально и строго. Почти ;) 
						Чтобы посмотреть мои работы или узнать побольше обо мне, вы можете перейти на страницу
						<a class="resume__preview-link" href="<?= get_url("portfolio.php") ?>">портфолио</a>	
						или 
						<a class="resume__preview-link" href="<?= get_url("about-me.php") ?>">обо мне</a>	
						, соответственно.
					</div>

					<div class="resume__title-container">
						<div class="resume__title">Резюме</div>
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
										<a href="#resume-main-info" class="content-list__link">Общая информация</a>
									</li>
									<li class="content-list__item">
										<a href="#resume-work-exp" class="content-list__link">Опыт работы</a>
									</li>
									<li class="content-list__item">
										<a href="#resume-competency" class="content-list__link">Компетенции</a>
									</li>
									<li class="content-list__item">
										<a href="#resume-education" class="content-list__link">Высшее образование</a>
									</li>
									<li class="content-list__item">
										<a href="#resume-language" class="content-list__link">Знание языков</a>
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
						<div id="resume-main-info" class="resume-section__title">Общая информация</div>
						<div class="resume-section__content">
							<div class="resume-section__item">
								<span class="resume-section__item-field">Пол:</span>
								Мужской
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Дата рождения (возраст):</span>
								05.08.1988 (33 года)
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Район проживания (и ближайшая станция метро):</span>
								г. Москва, Измайлово (метро Первомайская)
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Телефон:</span>
								8-925-055-71-31
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">E-mail:</span>
								sadofev_pv@mail.ru
							</div>
						</div>
					</div>

					<div class="resume__resume-section resume-section">
						<div id="resume-work-exp" class="resume-section__title">Опыт работы</div>
						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__date">Январь 2021</div>
								<div class="resume-section__date">Ноябрь 2021</div>
								<div class="resume-section__date resume-section__date_lowdef">Январь 2021 - Ноябрь 2021</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Организация:</span>
									Самозанятый
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Должность:</span>
									Репетитор по информатике и программированию у школьников и студентов
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Основные обязанности и функционал:</span>
									- Проведение занятий для школьников 8 – 11 классов и студентов по программированию (С++, Python, PHP, JS) и информатике;<br>
									- Подготовка детей к сдаче экзаменов и участию в олимпиадах;<br>
									- Разработка индивидуальных учебных планов и материалов;<br>
									- Проведение дистанционных занятий через Zoom, Discord, MS Teams;
								</div>
							</div>
						</div>
					
						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__date">Ноябрь 2014</div>
								<div class="resume-section__date">Декабрь 2020</div>
								<div class="resume-section__date resume-section__date_lowdef">Ноябрь 2014 - Декабрь 2020</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Организация:</span>
									ГБОУ Школа №444
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Должность:</span>
									Учитель информатики
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Основные обязанности и функционал:</span>
									- Проведение занятий для детей 8 – 11 классов по программированию (С++, Python, PHP, JS), сетевым технологиям (курс Cisco IT Essentials) и информатике;<br>
									- Ведение индивидуальных и командных проектов по программированию;<br>
									- Подготовка детей к участию в олимпиадах;<br>
									- Разработка учебных планов и материалов;<br>
									- Проведение дистанционных занятий через Zoom, Discord, MS Teams;<br>
									- Проведение занятий для взрослых по повышению компьютерной грамотности;<br>
									- Обеспечение всестороннего образования для обучающихся;<br>
									- Обслуживание пользовательских рабочих мест (ремонт компьютеров и ноутбуков, устранение неисправностей, связанных с работой локальной сети, установка ПО, траблшутинг ОС) : Windows 8, 10, MacOS;<br>
									- Техническая поддержка пользователей (стандартное офисное ПО, установка и настройка сред разработки, специализированное ПО);<br>
									- Написание инструкций для пользователей.
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__date">Декабрь 2012</div>
								<div class="resume-section__date">Декабрь 2013</div>
								<div class="resume-section__date resume-section__date_lowdef">Декабрь 2012 - Декабрь 2013</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Организация:</span>
									Вооруженные силы РФ
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Должность:</span>
									Рядовой (Матрос)
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Основные обязанности и функционал:</span>
									Служба в 61-ой отдельной бригаде морской пехоты (в/ч 38643), дежурный по роте, 
									проведение занятий с личным составом взвода, разрешение спорных ситуаций среди личного 
									состава, дежурства в радиоузле (прием сообщений, переданных азбукой Морзе)
								</div>
							</div>
						</div>
					
						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__date">Сентябрь 2012</div>
								<div class="resume-section__date">Декабрь 2012</div>
								<div class="resume-section__date resume-section__date_lowdef">Сентябрь 2012 - Декабрь 2012</div>
								<img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой">
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field">Организация:</span>
									ГБОУ Школа №1811
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Должность:</span>
									Учитель информатики
								</div>
								<div class="resume-section__item">
									<span class="resume-section__item-field">Основные обязанности и функционал:</span>
									- Проведение занятий для детей 8 – 11 классов по программированию (Pascal), сетевым технологиям (курс Cisco IT Essentials) и информатике;
									- Проведение занятий для взрослых по повышению компьютерной грамотности;
									- Обеспечение всестороннего образования для обучающихся;
									- Устранение неисправностей оргтехники;
									- Техническая поддержка пользователей (стандартное офисное ПО, установка и настройка сред разработки, специализированное ПО);
									- Написание инструкций для пользователей;
									- Контроль расходных материалов.
								</div>
							</div>
						</div>
					</div>


					<div class="resume__resume-section resume-section">
						<div id="resume-competency" class="resume-section__title">Компетенции</div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">Верстка</div>
								<!-- <img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой"> -->
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field"></span>
									Хорошее знание HTML5 и CSS3. Умение верстать точно по макету (figma, photoshop). 
									Адаптивная (adaptive), отзывчивая (responsive) верстка. Pixel Perfect.
									Семантическая верстка. Доступность. Понимание и умение верстать по методологии БЭМ.
									Дополнение страниц интерактивными элементами с помощью js (слайдеры, карусели, модальные окна и т.п.).
									Использование SASS (SCSS).
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">JavaScript</div>
								<!-- <img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой"> -->
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field"></span>
									Знание чистого JS, современных стандартов ES6. Работа с DOM. Асинхронность. AJAX. 
									Опыт работы с svg и canvas. Знание jQuery, умение быстро разбираться в дополнительных
									библиотеках и API.
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">BackEnd</div>
								<!-- <img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой"> -->
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field"></span>
									Знание PHP на уровне: взаимодействие с БД, написание скриптов авторизации, 
									работа с файлами, обработка изображений. Сессии, куки.<br>
									Умение писать запросы на языке SQL, знание основ проетирование баз данных. Есть опыт работы с MySQL
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content resume-section__content_work-exp">
							<div class="resume-section__column">
								<div class="resume-section__subtitle">Прочее</div>
								<!-- <img class="resume-section__date-img" src="/img/main/main_section_data_img_1.png" alt="декоративное озображение под датой"> -->
							</div>
							<div class="resume-section__column">
								<div class="resume-section__item">
									<span class="resume-section__item-field"></span>
									- Работа со сборщиком GULP. Умение писать под него задачи. А следовательно есть, правда, пока не очень
								глубокое, понимание работы с node.js.<br>
								- Понимание и умение работать с Git, GitHub. В том числе через консоль.<br>
								- Хорошее знание алгоритмов и структур данных, в том числе использующихся в олимпиадном программировании. Вычислительная сложность алгоритмов.<br>
								- Знание ООП и уметь писать код в данном стиле.<br>
								- Понимание основных паттернов проектирования ПО.<br>
								- Знание и понимание работы протоколов передачи данных.<br>
								- Есть небольшой опыт написания сайтов и последующего администрирования.<br>
								- Шаблонизация и работа с CMS.<br>
								- Чтение документации на английском языке.<br>
								- Хорошее владение Adobe Photoshop и Adobe Premier.<br>
								- Знание C++ и Python на уровне олимпиадного программирования.<br>
								- Стрессоустойчивость, оптимизм и умение работать в команде прилагаются)
								</div>
							</div>
						</div>

						<div class="resume-section__separator"></div>

						<div class="resume-section__content">
							<div class="resume-section__item">
								А еще я люблю постоянно учиться и разбираться в чем-то новом. Всё схватываю на лету.
								И имею огромное желание развиваться в сфере программирования и IT!
							</div>
						</div>
					</div>

					<div class="resume__resume-section resume-section">
						<div id="resume-education" class="resume-section__title">Высшее образование</div>
						<div class="resume-section__content">
							<div class="resume-section__item">
								<span class="resume-section__item-field">Университет:</span>
								Московский городской педагогический университет (МГПУ), Москва
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Факультет:</span>
								Математический
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Направление (специальность):</span>
								Информатика
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Год выпуска:</span>
								2012
							</div>
						</div>
					</div>

					<div class="resume__resume-section resume-section">
						<div id="resume-language" class="resume-section__title">Знание языков</div>
						<div class="resume-section__content">
							<div class="resume-section__item">
								<span class="resume-section__item-field">Русский:</span>
								Родной
							</div>
							<div class="resume-section__item">
								<span class="resume-section__item-field">Английский:</span>
								B1 - Средний
							</div>
						</div>
					</div>

				</div>
			</div>
		</main>

<?php 
	include "includes/footer.php";
