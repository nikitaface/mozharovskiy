<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Можаровский Анатолий Иванович | Главная страница</title>
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
    <!-- PURCHASE-POPUP-BLOCK -->
    <!-- PURCHASE-POPUP-BLOCK -->
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
                <input type="email" name="email" class="overlay-form__input purchase-block__input" placeholder="Введите ваш телефон" required>
                <input type="submit" class="overlay-form__btn purchase-block__btn" value="Отправить">
            </form>
        </div>
    </div>
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <header class="header">
        <div class="content">
            <div class="wrapper-about">
                <div class="about">
                    <h1 class="fullname">Можаровский Анатолий Иванович</h1>
                    <div class="line"></div>
                    <p class="description">Украинский поэт, писатель, публицист </p>
                </div>
            </div>
            <!-- SLIDER-CITATIONS -->
            <!-- SLIDER-CITATIONS -->
            <!-- SLIDER-CITATIONS -->
            <div class="slider-citations">
                <div class="slide">
                    <p class="citation">
Моя страна ты так больна<br> и лекари твои твои отттуда, <br>где умерли мои луга.
                    </p>
                </div>
                <div class="slide">
                    <p class="citation">
                        «222 Я не встречал в своей жизни ни одного
                        американского джентальмена.
                        Прости меня господи, что я соединил
                        эти слова вместе»
                    </p>
                </div>
                <div class="slide">
                    <p class="citation">
                        «333 Я не встречал в своей жизни ни одного
                        американского джентальмена.
                        Прости меня господи, что я соединил
                        эти слова вместе»
                    </p>
                </div>
            </div>
            <!-- NAVIGATION-MENU -->
            <!-- NAVIGATION-MENU -->
            <!-- NAVIGATION-MENU -->
            <nav class="nav-menu">
                <ul class="menu-list">
                    <li class="nav-menu__item">
                        <a href="/home" class="nav-menu__link active">Главная</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="/books" class="nav-menu__link">Книги</a>
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
    <!-- SECTION-BOOKS -->
    <!-- SECTION-BOOKS -->
    <!-- SECTION-BOOKS -->
    <section class="books-block">
        <div class="content">
            <h3 class="title">Книги
                <span class="amount">(32)</span>
            </h3>
<?php

$allzapises = get_all_bookslimit();
 $count = 2;

for($i = 0; $i < count($allzapises); $i++){
if($count == 0){
$count = 2;

}


if($count == 2){
echo '<div class="row">';
}
echo'<div class="book-block">
                    <h2 class="book-block__title">
                        <a href="/about_book?id='.$allzapises[$i]['id_book'].'" class="book-block__link">'.$allzapises[$i]['name_book'].'</a>
                    </h2>
                    <div class="book-block__cover">
                        <a href="/about_book?id='.$allzapises[$i]['id_book'].'" class="book-block__img-link">
                            <img class="book-block__img" src="/books/tytle_book/'.$allzapises[$i]['name_jpg'].'" alt="Обложка книги">
                        </a>
                    </div>
                    <div class="book-block__text">
                        <p class="book-block__discribtion">
                            <!--описание-->
                        </p>
                        <div class="book-block__priceNbtn">
                            <button class="book-block__price">нет цены</button>
                            <button class="book-block__btn" type="buttton">Купить</button>
                        </div>
                        <a class="book-block__readBtn" href="/about_book?id='.$allzapises[$i]['id_book'].'">Читать</a>
                    </div>
                </div>';
$count--;
if($count == 0){
echo '</div>';
}


}

?>
            



        


            <a href="/books" class="show-more-btn">смотреть все книги</a>
        </div>
    </section>
    <!-- SECTION-SHORT-BIO -->
    <!-- SECTION-SHORT-BIO --> 
    <!-- SECTION-SHORT-BIO -->
    <section class="short-bio">
        <div class="content">
            <div class="left-block">
                <div class="photo-block">
                    <img src="img/dist/bio_photo.jpg" alt="Фото" class="photo-block__img">
                </div>
                <div class="citations-block">
                    <p class="citations-block__citation">
А.Можаровскому<br><br>
Превозмогая боль и муки, <br>он шел путем святой науки, <br> и Богу руко подавал,<br> и Бог ее не отвергал.

<br><br>Евгений Пашковский 29/12/16
                    </p>
                    <p class="citations-block__citation">
Моя страна ты так больна<br> и лекари твои твои отттуда, <br>где умерли мои луга.
                    </p>
                </div>
            </div>
            <div class="right-block">
                <h2 class="right-block__fullname">Можаровский Анатолий Иванович</h2>
                <p class="right-block__text">
Родился на Житомерщине 20 ноября 1954 года.
                </p>
                <p class="right-block__text">
Отец мастер литейного цеха завода Ленинская кузница , строил мост имени Патона Мать учительница .
                </p>
                                <p class="right-block__text">
Детство проводил в природе среди лугов и лесов на реках и озерах зимой и летом .Ездил по стране . Много читал и пробовал писать еще в школе . 1969 -1972 г учеба в Киевском техникуме Железнодорожного транспорта . Затем армия . Работал на юго заподной Железной дороге .Окончил Киевский Железнодорожный институт.  Преподавал в институте и занимался наукой. Работал в структурах КПСС .По его словам очень нравился КПСС но пришло разочарование далеко до перестройки. 
                </p>
                                <p class="right-block__text">
Считает все партии в мире ограниченными и конъюнктурными. Все ради собственной власти и денег . К власти как правило за редким исключением и это есть , рвутся барыги , ?прослыги? ради богатства и роскоши. Как правило люди ????? не имеющие никаких талантов самоутверждаються извращаясь во власти . Они вирусом роскоши заразили весь мир а те ищут в этом свой расцвет углеводородов и золота .Все конституции и законы для простых людей а кто прорвался в так называемый «верх»
привет беззаконие во всех отношениях. Эти первыми и довели мир до сегодняшнего состояния .Вот бы законы Бога ????????? ??????????? ?????? власть и холуйство . Занимался бизнесом но власть его уничтожала постоянно . Все мэры, президенты .
,премьеры и почти все депутаты служат дьяволу - враги человеческие .Оценка жесткая но это правда а правду больному нужно знать иначе не исцелиться. К Богу все но по настоящему ! 
                </p>
                                <p class="right-block__text">
Писать начал в 2006 году и уже не останавливался. Основоположник современного нового оригинального стиля в поэзии и прозе. 
                </p>
                                <p class="right-block__text">
Написано 33 тома ,издано 40 томов.
                </p>


                <div class="read-more-block">
                    <a href="/about_anatoliy" class="read-more">Читать больше</a>
                </div>
            </div>
        </div>
    </section>
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
    <script defer src="/js/src/main.js"></script>
</body>
</html>