<header class="header">
    <div class="top-line">
        <ul class="top-line__menu clearfix">
            <li class="top-line__menu__item"><a href="{{route("life")}}">Медия МЭК</a></li>
            <li class="top-line__menu__item"><a href="{{route("index")}}">Библиотека</a></li>
            <li class="top-line__menu__item"><a href="{{route("index")}}">Приложения</a></li>
            <li class="top-line__menu__item"><a href="{{route("contact")}}">Контакты</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="med">
            <div class="col-md-5 logo-mobile-center">
                <a href="{{ route("index") }}" class="logo">
                    <img src="pub/assets/images/logo.png"alt="">
                    <div class="div-u-name" >
                        <p class="u-name">Медицинско-экономический колледж</p>
                        <p class="slogan"></p>
                    </div>
                </a>
            </div>
            <div class="col-md-7">
                <div class="language">
                    <span class="language-label">Языки:</span>
                    <ul class="language-list">
                        <li class="language-list-item">
                            <a href="#" class="language-list-item-icon language-list-item-icon--ru "></a>
                        </li>
                        <li class="language-list-item"><a href="#" class="language-list-item-icon language-list-item-icon--kg "></a></li>
                            </ul>
                </div>
                <div class="search-wrapper clearfix">
                    <div class="search pull-right clearfix">
                        <div class="search__links">
                            <a href="{{route("index")}}" class="search__links-item search__links-item--people"><i></i><span>Найти людей</span></a>
                            <a href="{{route("index")}}" class="search__links-item search__links-item--sitemap"><i></i><span>Карта сайта</span></a>
                        </div>
                        <div class="search__form clearfix">
                            <form action="">
                                <input type="text" class="search__form__field" name="" placeholder="Поиск..." id="">
                                <input type="submit" class="search__form__button" name="" value="" id="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-menu">
        <nav class="navbar navbar-static">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-menu">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-label">Navigation</span>
            </div>
            <div class="collapse navbar-collapse header-menu">
                <ul     class="nav navbar-nav h-menu">
                    <li     class="h-menu__item dropdown-large first">
                        <a href="#"     class="h-menu__item__link dropdown-toggle" data-toggle="dropdown">ИНФОРМАЦИЯ</a>
                        <ul     class="dropdown-menu dropdown-large__menu row menu_level_1">
                            <li     class="col-md-4 dropdown-large__item col-sm-6 border-right first first">
                                <div     class="sub-head">МЭК</div>
                                <ul     class="menu_level_2">
                                    <li     class="first"> <a href="{{ route("meksifrah")}}"    >МЭК в цифрах</a>
                                    </li>
                                    <li    >                <a href="{{route("mission")}}"    >Миссия колледжа</a>
                                    </li>
                                    <li    >                <a href=" {{route("history")}}"    >История</a> </li>

                                    <li>               <a href="{{route("sennosti")}}"    >Ценности колледжа</a></li>

                                </ul>
                            </li>
                            <li     class="col-md-4 dropdown-large__item col-sm-6 border-right last">
                                <div     class="sub-head">Структура</div>
                                <ul     class="menu_level_2">
                                    <li     class="first">                <a href="{{route("trustee")}}"    >Попечительский совет</a>
                                    </li>
                                    <li    >                <a href="{{route("teacher")}}"    >Педогогический совет</a>
                                    </li>
                                    <li     class="last">                <a href="{{route("metod")}}"    >Методический совет</a>
                                    </li>
                                    <li     class="first">                <a href="{{route("supervisory")}}"    >Наблюдательный совет</a>
                                    </li>
                                </ul>
                            </li>
                            <li     class="col-md-4 dropdown-large__item col-sm-6 border-right last">
                                <div     class="sub-head">документы</div>
                                <ul     class="menu_level_2">
                                    <li     class="first">                <a href=" {{route("akty")}}"    >Нормативные-провавые акты</a>
                                    </li>
                                    <li    >                <a href=" {{route("polojenia")}}"    >Положения</a>
                                    </li>
                                    <li     class="last">                <a href="{{route("standarty")}}"    >Образовательные стандарты</a>
                                    </li>
                                    <li     class="first">                <a href="{{route("license")}}"    >Лицензия и стандарты</a>
                                    </li>
                                </ul>
                        </ul>
                    </li>
                    <li     class="h-menu__item a-l">
                        <a href="#"     class="h-menu__item__link dropdown-toggle" data-toggle="dropdown">ОБРАЗОВАНИЕ</a>
                        <ul     class="dropdown-menu dropdown-menu-2 row menu_level_1">
                            <li     class="col-md-5  col-sm-5 first">
                                <div     class="sub-head">Специальности</div>
                                <ul     class="menu_level_2">
                                    <li     class="first">                <a href="{{ route("sestrinskoe")  }}"    >Сестринское дело</a>
                                    </li>
                                    <li    >                <a href="{{route("farmatsia")}}"    >Фармация</a>
                                    </li>
                                    <li    >                <a href="{{route("akusherskoe")}}"    >Акушерское дело</a>
                                    </li>
                                    <li    >                <a href="{{route("social")}}"    >Социальная работа</a>
                                    </li>
                                    <li    >                <a href="{{route("menedgment")}}"    >Менеджмент (по отраслям)</a>
                                    </li>
                                    <li    >                <a href="{{route("finance")}}"    >Финансы (по отраслям)</a>
                                    </li>
                                    <li    >                <a href=" {{route("economic")}}"    >Экономика и бухгалтерский учет (по отраслям)</a>
                                    </li>
                                    <li    >                <a href=" {{route("doschool")}}"    >Дошкольное образование</a>
                                    </li>
                                    <li     class="last">    <a href=" {{route("tourism")}}"    >Туризм</a>
                                    </li>
                                </ul>
                            </li>
                            <li     class="col-md-7  col-sm-7 last">
                                <ul     class="menu_level_2">
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li     class="h-menu__item a-l">
                        <a href="#"     class="h-menu__item__link dropdown-toggle" data-toggle="dropdown">Наука</a>
                        <ul     class="dropdown-menu dropdown-menu-2 row menu_level_1">
                            <li     class="first last">
                                <div     class="sub-head">Наука</div>
                                <ul     class="menu_level_2">
                                    <li     class="first">                <a href="{{route("conferens")}}"    >Конференции</a>
                                    </li>
                                    <li     class="last">                <a href=" {{route("nirs")}}"    >НИРС</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li     class="h-menu__item a-l">
                        <a href="#"     class="h-menu__item__link dropdown-toggle" data-toggle="dropdown">абитуриенты</a>
                        <ul     class="dropdown-menu dropdown-menu-2 row menu_level_1">
                            <li     class="first last">
                                <div     class="sub-head">абитуриенты</div>
                                <ul     class="menu_level_4">
                                    <li     class="first">                <a href="{{route("how")}}"    >Приемная комиссия</a>
                                    </li>
                                    <li    >                <a href="{{route("faculties")}}"    >Информация о направлениях</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>