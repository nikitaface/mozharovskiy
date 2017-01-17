<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Можаровский Анатолий Иванович | Название книги</title>
    <link rel="stylesheet" href="/css/dist/main.min.css">
    <!--[if lte IE 9)]>
        <style>
            body {margin-top: -23px;}
            .line {display: none;}
        </style>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://use.fontawesome.com/648c0a4557.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script  src="/js/libs/slick.js"></script>
    <script  src="/js/libs/parsley.min.js"></script>
</head>
<body>
    <!-- PURCHASE-POPUP -->
    <!-- PURCHASE-POPUP -->
    <div class="overlay purchase-overlay">
        <div class="submit-block-hidden">
            <div class="close-btn submit-block-hidden__close">
                <a href="#close" class="close-btn__icon submit-block-hidden__icon">&times;</a>
            </div>
            <h3 class="overlay__title">Ваш заказ принят!</h3>
            <p class="overlay__subtitle">
                Мы с Вами свяжемся, ожидайте звонка
            </p>
        </div>
        <div class="inner-block purchase-block">
            <div class="close-btn purchase-block__close">
                <a href="#close" class="close-btn__icon purchase-block__close-icon">&times;</a>
            </div>
            <h3 class="overlay__title">Оформить заказ</h3>
            <p class="overlay__subtitle">Ваше название книги (Последний поцелуй)</p>
            <form action="./purchase-valid.php" class="overlay-form purchase-block__form">
                <input type="text" name="name" class="overlay-form__input purchase-block__input" placeholder="Введите ваше Имя" required>
                <input type="email" name="email" class="overlay-form__input purchase-block__input" placeholder="Введите ваш E-mail" required>
                <input type="submit" class="overlay-form__btn purchase-block__btn" value="Отправить">
            </form>
        </div>
    </div>
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <header class="header-no-bg">
        <div class="content">
			<nav class="nav-menu">
                <ul class="menu-list">
                    <li class="nav-menu__item">
                        <a href="/home" class="nav-menu__link ">Главная</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/books" class="nav-menu__link active">Книги</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/thoughts" class="nav-menu__link">Мысли</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/about_anatoliy" class="nav-menu__link">О человеке</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/photo" class="nav-menu__link">Фото</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/contacts" class="nav-menu__link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<?php

$book_on_id = get_book_on_id($_GET["id"]);


    echo'<div class="readmore-block">
        <div class="content">
            <div class="book-block book-block--width">
                <div class="book-block__cover book-block__cover--width">
                    <img class="book-block__img" src="/books/tytle_book/'.$book_on_id['name_jpg'].'" alt="Обложка книги">
                </div>
                <div class="book-block__text book-block__text--margin">
                    <h2 class="book-block__title">'.$book_on_id["name_book"].'</h2>
                    <p class="book-block__discribtion">
                    '.$book_on_id["opis_book"].'

                    </p>
                    <div class="book-block__priceNbtn">
                        <button class="book-block__price">нет цены</button>
                        <button class="book-block__btn" type="buttton">Купить</button>
                    </div>
                    <embed class="book-block__pdf" src="/books/schort_book/'.$book_on_id['name_schort_pdf'].'" width="100%" height="800" type="application/pdf"/>
                </div>
            </div>
        </div>
    </div>';
?>
    <!-- PRE-FOOTER -->
    <!-- PRE-FOOTER -->
    <!-- PRE-FOOTER -->
    <div class="pre-footer">
        <div class="content">
            <div class="left-block">
                <p class="text">Мы всегда рады ответить на ваши вопросы - звоните, пишите.</p>
                <a href="/contacts" class="contact-us">Свяжитесь с нами</a>
            </div>
            <div class="right-block">
                <adress class="contacts">
                    <p class="text">Контактные данные:</p>
                    <div class="contact-block tel-block">
                        <span class="fa fa-phone contact-block__icon" style="font-size: 16px" aria-hidden="true"></span>
                        <a href="tel:+380987708403" class="contact-block__link">+38(098)770-84-03</a>
                    </div>
                    <div class="contact-block email-block">
                        <span class="fa fa-envelope contact-block__icon" style="font-size: 16px" aria-hidden="true"></span>
                        <a href="mailto:mozharovskiywriter@gmail.com" class="contact-block__link">mozharovskiywriter@gmail.com</a>
                    </div>
                </adress>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <!-- FOOTER -->
    <!-- FOOTER -->
    <footer class="footer">
        <div class="content">
            <div class="left-block">
                <p class="copyright">&copy; Можаровский Анатолий Иванович, 2017. Все права защищены.</p>
            </div>
            <div class="right-block">
                <p class="developed-by">Разработано «Growth 7»</p>
            </div>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <!-- SCRIPTS -->
    <!-- SCRIPTS -->
    <script defer src="/js/dist/main.min.js"></script>
</body>
</html>