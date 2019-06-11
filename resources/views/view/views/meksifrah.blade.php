<html>
<head>
    {{-- include style --}}
    @include("view.layouts.style")
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGN3WR3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <div class="container">

    {{-- include header --}}
    @include("view.layouts.header")
        <style>
            .grid-item{
                background: white;
                border: 1px solid #333;
                border-color: hsla(0, 0%, 0%, 0.5);
                border-radius: 10px;
            }
            .grid-item li{
                padding-left: 1em;
                padding-right: 1em;
            }
            .grid-item li:last-child{
                padding-bottom: 1em;
            }
        </style>
        <!--Conten -->
        <h2>МЭК в цифрах</h2>
        <div class="note-block color-block">

            <div class="grid">
                <div class="grid-sizer">&nbsp;</div>

                <div class="grid-item">
                    <p><strong>Расположение</strong></p>

                    <ul>
                        <li>Город Бишкек &ndash; столица Кыргызской Республики</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Территория</strong></p>

                    <ul>
                        <li>Главный корпус &ndash; 0.88 Га</li>
                        <li>Кампус им. Ч. Айтматова &ndash; 84,14 Га</li>
                        <li>Общая площадь зданий &ndash; 123&nbsp;525 м2</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Учебные подразделения</strong></p>

                    <ul>
                        <li>Факультеты &ndash; 9</li>
                        <li>Высшие школы &ndash; 3</li>
                        <li>Средняя профессиональная школа &ndash; 1</li>
                        <li>Институт естественных наук &ndash; 1</li>
                        <li>Институт общественных наук - 1</li>
                        <li>Отделения (кафедры) &ndash; 46</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Учебные лаборатории, мастерские и студии</strong></p>

                    <ul>
                        <li>Лаборатории, мастерские, студии &ndash; 92</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Профессорско-преподавательский состав</strong></p>

                    <ul>
                        <li>Всего &ndash; 442 (полная ставка &ndash; 374; совместители &ndash; 68)</li>
                        <li>в том числе преподаватели-иностранцы &ndash; 154 (41%)</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Оплата за обучение</strong></p>

                    <ul>
                        <li>Обучение бесплатное</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Образовательные программы</strong></p>

                    <ul>
                        <li>Среднее профессиональное образование &ndash; 7</li>
                        <li>Бакалавриат &ndash; 42</li>
                        <li>Магистратура &ndash; 20</li>
                        <li>Докторантура (PhD) &ndash; 9</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Студенты (2017/2018 учебный год)</strong></p>

                    <ul>
                        <li>Всего &ndash; 5684</li>
                        <li>Подготовительный языковой курс - 1326</li>
                        <li>Среднее профессиональное образование &ndash; 617</li>
                        <li>Бакалавриат &ndash; 3454</li>
                        <li>Магистратура &ndash; 221</li>
                        <li>Докторантура (PhD) &ndash; 66</li>
                        <li>Студенты-иностранцы &ndash; 837 (15%)</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Научно-исследовательские подразделения</strong></p>

                    <ul>
                        <li>Центр исследования тюркской цивилизации</li>
                        <li>Центр исследования биоразнообразия и биотехнологий</li>
                        <li>Центр исследований Центральной Азии</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Научно-исследовательские проекты (2017/2018 учебный год)</strong></p>

                    <ul>
                        <li>Финансируемые из бюджета университета &ndash; 34 832 долларов США</li>
                        <li>Финансируемые из бюджета Кыргызской Республики &ndash; 2&nbsp;445 800 сом</li>
                        <li>Финансируемые из международных источников &ndash; 73 220 долларов США и 15 2500 евро.</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Библиотека</strong></p>

                    <ul>
                        <li>Печатных изданий (книги) - 92015 экземпляров</li>
                        <li>Электронные носители - 596 единиц</li>
                        <li>Карты - 85</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Интернет</strong></p>

                    <ul>
                        <li>7 дней 24 часа в сутки бесплатный интернет со скоростью 256 Мбит/сек</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Выпускники (2017/2018 учебный год)</strong></p>

                    <ul>
                        <li>6165 выпускников, работающих в 28 странах мира</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Студенческие общежития</strong></p>

                    <ul>
                        <li>Современные студенческие общежития на 1380 мест со всеми удобствами для быта, отдыха, учебы и досуга.</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Спорт</strong></p>

                    <ul>
                        <li>Крытый спорт.комплекс для игровых видов спорта - 3180 м2</li>
                        <li>2 футбольных поля</li>
                        <li>теннисный корт</li>
                        <li>2 баскетбольные площадки</li>
                        <li>волейбольная площадка</li>
                        <li>гимнастический зал</li>
                        <li>фитнес зал</li>
                        <li>зал бокса</li>
                        <li>зал борьбы</li>
                        <li>легкоатлетический стадион</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Студенческие клубы</strong></p>

                    <ul>
                        <li>Всего 20 клубов (фотография, горный туризм, поэзия, кулинария, экология и др.)</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Питание</strong></p>

                    <ul>
                        <li>Качественное трехразовое питание в студенческой столовой на 692 посадочных мест для студентов и 300 посадочных мест для сотрудников.</li>
                        <li>Стоимость разового питания для студентов &ndash; 60 сом (0.88 долларов США)</li>
                        <li>Бесплатные месячные карточки питания для нуждающихся студентов</li>
                        <li>Всего буфетов (кантинов) &ndash; 6.</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Жилье для иностранных сотрудников и гостей</strong></p>

                    <ul>
                        <li>Комфортабельные квартиры &ndash; 79 квартир</li>
                        <li>Гостиница &ndash; 18 номеров</li>
                    </ul>
                </div>

                <div class="grid-item">
                    <p><strong>Транспорт</strong></p>

                    <ul>
                        <li>Бесплатный микроавтобус&nbsp;Главный корпус &ndash; кампус им. Ч. Айтматова</li>
                        <li>Бесплатная транспортировка Аэропорт &laquo;Манас&raquo; - кампус им. Ч. Айтматова (по требованию)</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>


{{-- include footer --}}
@include("view.layouts.footer")

{{-- include scripts --}}
@include("view.layouts.scripts")
</body>
</html>