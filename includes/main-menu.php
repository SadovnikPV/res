<!-- ------------------ Главное меню и его адаптив ------------------- -->

<?php
    include_once "functions.php";
?>

<nav class="main-menu">
    <div class="main-menu__container _container">
        <ul class="main-menu__items">
            <li class="main-menu__item">
                <a href="<?= get_url("index.php") ?>" class="main-menu__link">Главная</a>
            </li>
            <li class="main-menu__item">
                <a href="<?= get_url("portfolio.php") ?>" class="main-menu__link">Портфолио</a>
            </li>
            <li class="main-menu__item">
                <a href="<?= get_url("about-me.php") ?>" class="main-menu__link">Обо мне</a>
            </li>
            <li class="main-menu__item">
                <a href="<?= get_url("help-project.php") ?>" class="main-menu__link">Помочь проекту</a>
            </li>
        </ul>
        <div class="main-menu__container_lowdef">
            <button type="button" class="main-menu__link-wrap_lowdef">
                <img class="main-menu__link-img_lowdef" src="img/icons/menu_button_burger_01.svg" alt="главное меню">
                <span class="main-menu__link_lowdef">Меню</span>
            </button>
            <div class="main-menu__list-wrap_lowdef">
                <ul class="main-menu__list_lowdef">
                    <li class="main-menu__item">
                        <a href="<?= get_url("index.php") ?>" class="main-menu__link">Главная</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="<?= get_url("portfolio.php") ?>" class="main-menu__link">Портфолио</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="<?= get_url("about-me.php") ?>" class="main-menu__link">Обо мне</a>
                    </li>
                    <li class="main-menu__item">
                        <a href="<?= get_url("help-project.php") ?>" class="main-menu__link">Помочь проекту</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>