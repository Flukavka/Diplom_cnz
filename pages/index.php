
    <!-- carousel start -->
    <div class="container header">
        <div class="row">
            <div class="col-sm-4  ml-2 mt-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-block" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/slide1.jpg" class="d-block w-100 carousel-img" alt="photo slide">
                        </div>
                        <div class="carousel-item">
                            <img src="image/slide2.jpg" class="d-block w-100 carousel-img" alt="photo slide">
                        </div>
                        <div class="carousel-item">
                            <img src="image/slide3.jpg" class="d-block w-100 carousel-img" alt="photo slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- carousel end -->

    <!-- main block start -->
    <div class="main-block">
        <div class="container">
            <div class="main-block-up">
                <h1 class="main-block-up-headding">Привет, меня зовут Виктория</h1>
            </div>
            <div class="main-block-down">
                <p class="main-block-down-paragraph">Я начинающий frontend-разработчик.<br>
                    Раньше я работала инженером по испытаниям в испытательной лаборатории.<br>
                    Занималась измерениями, расчетами и организационной деятельностью.
                </p>
            </div>
        </div>
    </div>
    <!-- main block end -->

    <!-- mySkill block start -->
    <div class="container mySkill">
        <div class="mySkill-header">
            <h2 class="mySkill-header-heading" id="skillsList">Мои навыки</h2>
        </div>
        <div class="mySkill-game mySkill-game-hidden">
            <div class="wrapper">
                <div class="one miniBox"></div>
                <div class="two  miniBox"></div>
                <div class="three  miniBox"></div>
                <div class="four  miniBox"></div>
                <div class="five  miniBox"></div>
                <div class="six  miniBox"></div>
                <div class="seven  miniBox"></div>
                <div class="eight  miniBox"></div>
                <div class="nine  miniBox"></div>
            </div>

            <div id="imgBox">
                <img class="x hidden item" src="image/xplayer.svg" alt="X">
                <img class="zero hidden item" src="image/zeroplayer.svg" alt="0">
                <img class="x hidden item" src="image/xplayer.svg" alt="X">
                <img class="zero hidden item" src="image/zeroplayer.svg" alt="0">
                <img class="x hidden item" src="image/xplayer.svg" alt="X">
                <img class="zero hidden item" src="image/zeroplayer.svg" alt="0">
                <img class="x hidden item" src="image/xplayer.svg" alt="X">
                <img class="zero hidden item" src="image/zeroplayer.svg" alt="0">
                <img class="x item" src="image/xplayer.svg" alt="X">
            </div>
        </div>
        <div class="mySkill-item mySkill-item-css">
            <div class="mySkill-item-header mySkill-item-header-css">
                <img src="image/ellipse.svg" class="mySkill-item-header-image mySkill-item-header-image-css" alt="image">
                <h3 class="mySkill-item-header-heading mySkill-item-header-heading-css">Верстка HTML5 /CSS3</h3>
            </div>
            <p class="mySkill-item-header-paragraph mySkill-item-header-paragraph-css">В рамках изучения верстки, прошла
                несколько курсов по HTML и
                CSS,
                изучила препроцессоры и Bootstrap. Освоила методологию БЭМ,
                компонентный подход к верстке и Pixel Perfect.<br><br>
                Навыки отрабатывала на бесплатных макетах Figma, а так же на учебных работах.</p>
        </div>
        <div class="mySkill-item mySkill-item-js">
            <div class="mySkill-item-header mySkill-item-header-js">
                <img src="image/ellipse.svg" class="mySkill-item-header-image mySkill-item-header-image-js" alt="image">
                <h3 class="mySkill-item-header-heading mySkill-item-header-heading-js">JavaScript</h3>
            </div>
            <p class="mySkill-item-header-paragraph mySkill-item-header-paragraph-js">Прошла два курса, базовый и
                продвинутый JS. В процессе изучила
                основы языка, типы данных, методы и функции,
                области видимости, классы и ассинхронные функции. Знакома с ООП и работой фраемворка Vue JS.
                <br><br>
                <a class="mySkill-item-header-link link" target="_blank" href="https://github.com/Flukavka">Посмотреть мой код, можно на GitHub.</a>
            </p>
        </div>
    </div>
    <!-- mySkill block end -->

    <hr class="container">

    <!-- myWork block start -->
    <div class="container myWork">
        <div class="myWork-header">
            <h2 class="mySkill-header-heading" id="contactsList">Мои работы</h2>
        </div>

        <div class="myWork-wrapper-card">
            <!-- card start -->
            <div class="myWork-card constructor">
                <div class="imageAnimation">
                    <a href="/work">
                        <img class="myWork-card-image" src="image/constructor.jpg" alt="image"></img>
                    </a>
                </div>
                <div class="myWork-card-description">
                    <div class="wrapper-card">
                        <h5 class="myWork-card-description-heading">Сайт<br>
                            (платформа для обучения)
                        </h5>
                        <p class="myWork-card-description-paragraph">Сайт, подготовленный по собственному
                            дизайн-проекту.
                            В настоящий момент в состоянии доработки.</p>
                    </div>
                    <a class="myWork-card-description-link link" target="_blank" href="portfolio/constructor/index.html">Ссылка на проект</a>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="myWork-card shop">
                <div class="imageAnimation">
                    <a href="/work">
                        <img class="myWork-card-image" src="image/shop.jpg" alt="image"></img>
                    </a>
                </div>
                <div class="myWork-card-description">
                    <div class="wrapper-card">
                        <h5 class="myWork-card-description-heading">Сайт
                            <br>
                            (магазин одежды)
                        </h5>
                        <p class="myWork-card-description-paragraph">Учебный проект, подготовленный
                            по макету, предоставленному командой GeekBrains.</p>
                    </div>
                    <a class="myWork-card-description-link link" target="_blank" href="portfolio/shop/index.html">Ссылка
                        на проект</a>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="myWork-card courses">
                <div class="imageAnimation">
                    <a href="/work">
                        <img class="myWork-card-image" src="image/courses.jpg" alt="image"></img>
                    </a>
                </div>
                <div class="myWork-card-description">
                    <div class="wrapper-card">
                        <h5 class="myWork-card-description-heading">Сайт<br>
                            (платформа для обучения)
                        </h5>
                        <p class="myWork-card-description-paragraph">Сайт, подготовленный по собственному
                            дизайн-проекту.
                            В настоящий момент в состоянии доработки.</p>
                    </div>
                    <a class="myWork-card-description-link link" target="_blank" href="portfolio/courses/index.html">Ссылка на проект</a>
                </div>
            </div>
            <!-- card end -->

            <!-- card start -->
            <div class="myWork-card tools">
                <div class="imageAnimation">
                    <a href="/work">
                        <img class="myWork-card-image" src="image/tools.jpg" alt="image"></img>
                    </a>
                </div>
                <div class="myWork-card-description">
                    <div class="wrapper-card">
                        <h5 class="myWork-card-description-heading">Сайт<br>
                            (платформа для обучения)
                        </h5>
                        <p class="myWork-card-description-paragraph">Сайт, подготовленный по собственному
                            дизайн-проекту.
                            В настоящий момент в состоянии доработки.</p>
                    </div>
                    <a class="myWork-card-description-link link" target="_blank" href="portfolio/tools/index.html">Ссылка на проект</a>
                </div>
            </div>
            <!-- card end -->
        </div>

    </div>
    <!-- myWork block end -->
