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

    <!--Conten -->
        <div class="content">
            <div id="slider-wrapper" class="slider-wrapper">
                <div id="home-slider" class="royalSlider home-slider rsDefault">

                    @foreach($tasks as $task)
                    <div class="rsContent">
                        <a class="rsImg" href="{{$task->image}}">
                            <div class="rsTmb">
                                <div class="th-img-wrapper">
                                    <img src="{{$task->image}}" alt="">
                                </div>
                                <div class="th-text">
                                    <h5>
                                        <a href="#"> {{$task->title}}   </a></h5>
                                    <span> {{$task->description}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="rsABlock sampleBlock">
                            <h5><a href="#">{{$task->title}}</a></h5>
                            <span>{{$task->description}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="uni-section">
                <div class="row">
                    <a href="{{route("about")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/uni.png" alt="">
                            <h3 class="uni__item-text">О колледже</h3>
                        </div>
                    </a>
                    <a href="{{route("how")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/kitep.png" alt="">
                            <h3 class="uni__item-text">Как поступить</h3>
                        </div>
                    </a>
                    <a href="{{route("life")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/jk.png" alt="">
                            <h3 class="uni__item-text">Жизнь студентов</h3>
                        </div>
                    </a>
                    <a href="{{route("faculties")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/fak.png" alt="">
                            <h3 class="uni__item-text">Факультеты</h3>
                        </div>
                    </a>
                    <a href="{{route("contact")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/sms.png" alt="">
                            <h3 class="uni__item-text">Контакты</h3>
                        </div>
                    </a>
                    <a href="{{route("index")}}" class="col-md-4 col-sm-6 uni-item-wrapper">
                        <div class="uni__item">
                            <img src="pub/assets/images/ruchka.png" alt="">
                            <h3 class="uni__item-text">Внешние связи</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="about-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-item">
                            <h3 class="about-item__head"><span>Новости</span></h3>
                            <div class="about-item__body">
                                @foreach($news as $i)
                                <div class="event-item clearfix">
                                    <div class="event-item__date">
                                        <i class="event-item_day">29</i>
                                        <div class="event-item_month" > <time datetime="MM-YYYY">{{$i->data }}</time></div>
                                    </div>
                                    <a href="ru.html" class="event-item-desc">
                                        {{ $i->title }}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <a class="about-item__show-more" href="{{route( "news")}}">Все новости</a>
                        </div>
                    </div>
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