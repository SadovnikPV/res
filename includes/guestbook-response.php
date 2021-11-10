<?php
// ---------- Обработка посылки гостевой формы и вывод результата на экран -------------

    include_once "begin-html.php";
    include_once "header.php";
    include_once "main-menu.php";

    // Подключение к БД и вывод ошибки в случае неудачи
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
		echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
		echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	mysqli_set_charset($mysqli, 'utf8');

	$current_date = date("Y-m-d H:i:s");
	$db_table = "resume_guestbook";

	// Функция просто выводит обратную ссылку на гостевую форму (используется в выводах условий ниже)
	function link_to_guestbook() {
		return "<br><a class='resume__preview-link' href='".get_url('help-project.php')."'>Вернуться к форме</a>";
	}

    // Информация пользователю о результате отправки его сообщения
    $response = "";

    // $message_correct - проверка правильности заполненной формы. 1 - Все правильно. 0 - Не верно
    $message_correct = 1;

    // Проверка, не пустое ли сообщение (или не состоит из только пробелов, табов или переносов строк)
    if (preg_replace('/\s/', '', $_POST['message']) == "") {
        $response = "Ваше сообщение пусто ("."<br>Пожалуйста, напишите хоть что-нибудь!".link_to_guestbook();
        $message_correct = 0;
    }

       // Если сообщение не пусто
	if ($message_correct == 1) {
		// Создаем подготовленный запрос
		$stmt = $mysqli->prepare("INSERT INTO `".$db_table."` (`id`,`name`,`company`,`message`,`date`) VALUES (NULL,?,?,?,'".$current_date."')");

		// Связь параметров с метками
		$stmt->bind_param("sss", $_POST['name'], $_POST['company'], $_POST['message']);

		// Выполнение запроса
		$result = $stmt->execute();

		if ($result) {
			$response = "Ваше сообщение принято! Спасибо вам огромное за содействие!)".link_to_guestbook();;
		}
		else {
			$response = "К сожалению, по техническим причинам, ваше сообщение не отправлено (<br>Приношу свои извинения. Скоро всё снова будет работать!".link_to_guestbook();;
		}
	}

?>

<main class="main-page">
    <div class="main-page__container _container">
        <div class="main-page__resume resume main-page__resume_center-block">
            <div class="resume__preview-title-img-wrapper">
                <img src="<?= get_url('img/main/resume_main_title_branch_img.png') ?>" alt="декоративное изображение" class="resume__preview-title-img">
            </div>
            <div class="resume__preview">
                <?= $response ?>
            </div>
        </div>
    </div>
</main>
	
<?php 
	include_once "footer.php";
