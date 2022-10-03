<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:description" content="Этот сайт - моя визитка, я начинающий Frontend-разработчик">
    <meta property="og:image" content="https://nosarevavs.ru/cnz/bootstrap/img/constructor.jpg">
    <meta property="og:url" content="https://nosarevavs.ru/cnz/bootstrap/mybootstrapHW2.html">
    <meta property="og:title" content="Frontend development">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Портфолио">
    <meta name="keywords" content="html, CSS, HTML5, CSS3, js, JavaScript, Vue, VueJS, Frontend-разработчик, frontend-разработка, фронтенд, работа, сделать сайт, поиск стажеров, стажер, разработка сайта, стажер разработчик">
    <meta name="yandex-verification" content="269ee29eb405e710" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style/mainPage.css">
    <link type="image/png" sizes="16x16" rel="icon" href="image/icon.png">
    <link type="image/png" sizes="32x32" rel="icon" href="image/icon.png">
    <link type="image/png" sizes="96x96" rel="icon" href="image/icon.png">
    <title>Front-end development</title>
</head>

<body>

    <!-- header start -->
    <header>
        <nav class="container navbar navbar-expand-lg navbar-light nav-block">
            <a class="navbar-brand nav-block-brand" href="/index">Носарева В.С.</a>
            <button class="navbar-toggler nav-block-button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Переключатель навигации">
                <img src="image/navbar.svg" alt="menu">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-block-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="/index">Главная <span class="sr-only">(текущая)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2" href="index#skillsList">Мои навыки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2" href="index#contactsList">Контакты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-block-myWork" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Мои работы
                        </a>
                        <div class="dropdown-menu nav-block-myWork-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a target="_blank" class="dropdown-item" href="portfolio/shop/index.html">Учебный
                                сайт (магазин)</a>
                            <a target="_blank" class="dropdown-item" href="portfolio/courses/index.html">Лэндинг
                                (онлайн школа)</a>
                            <a target="_blank" class="dropdown-item" href="portfolio/constructor/index.html">Учебный
                                сайт (платформа для обучения)</a>
                            <a target="_blank" class="dropdown-item" href="portfolio/tools/index.html">Учебный
                                сайт</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- header end -->

    <?php echo $content; ?>

    <!-- Modal window start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title my-modal-title" id="exampleModalLabel">Ваше письмо отправлено</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    В ближайшее время я вам обязательно отвечу
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-all" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal window end -->

    <!-- footer start -->
    <footer class="footerWrapper">
        <div class="container">
            <div class="footerContacts">
                <h2 class="footerHeader">Связаться со мной</h2>
                <div class="footerContacts-block">
                    <div class="footerContacts-data">
                        <h4>Мои контакты:</h4>
                        <a href="tel:+916366747">7 916 363-67-47</a>
                        <a href="mailto:nosareva.vs@gmail.com">nosareva.vs@gmail.com</a>
                        <a href="https://hh.ru/resume/fcf8e2a5ff09c5a8e60039ed1f654972676370">headHunter</a>
                        <div class="footerContacts-data-icon">
                            <a class="git" target="_blank" href="https://github.com/Flukavka"><img src="image/git.svg" alt="git"></a>
                            <a class="telegram" target="_blank" href="https://t.me/flukavka"><img src="image/telegram.svg" alt="telegram"></a>
                            <a class="behance" target="_blank" href="https://www.behance.net/nosarevavs582a"><img src="image/behance.svg" alt="behance"></a>
                        </div>
                    </div>
                    <div class="footerContacts-form">
                        <form onsubmit="sendForm(this); return false;">
                            <div>Ваше имя: <br>
                                <input required name="userName" type="text" placeholder="Имя">
                            </div>
                            <div>Ваш email: <br>
                                <input required name="userEmail" type="email" placeholder="email@mail.ru">
                            </div>
                            <div>
                                Сообщение для меня: <br>
                                <textarea required name="userMessage" rows="10" placeholder="Здесь вы можете оставить меня сообщение, с информацией о том, как с вами связаться и удобное для вас время. Либо просто прислать мне улыбку :)"></textarea>
                            </div>
                            <input class="footerContacts-form-button button-all" data-toggle="modal" data-target="#exampleModal" type="submit" value="Отправить">
                        </form>
                    </div>
                </div>
            </div>
            <div class="protection">©Все права защищены, 2022</div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="scripts/index.js"></script>
    <script src="scripts/ticTakToe.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>