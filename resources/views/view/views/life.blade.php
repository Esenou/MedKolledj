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
        <div class="note-block color-block">

            <h2>Жизнь студентов</h2>
            <div class="note-block color-block">
                <img src="pub/assets/images/slider-img6.jpg" alt="">
                <img src="pub/assets/images/slider-img5.jpg" alt="">
                <img src="pub/assets/images/slider-img4.jpg" alt="">
                <img src="pub/assets/images/slider-img3.png" alt="">
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


