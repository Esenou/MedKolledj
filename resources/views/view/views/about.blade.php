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
        <h2>Факультеты</h2>
        <div class="note-block color-block">
            <li    >                <a href="{{route("meksifrah")}}"    >МЭК в цифрах</a>
            </li>
            <li    >                <a href="{{route("mission")}}"    >Миссия колледжа</a>
            </li>
            <li    >                <a href="{{route("history")}}"    >История</a>
            </li>


        </div>


    </div>


</div>

{{-- include footer --}}
@include("view.layouts.footer")

{{-- include scripts --}}
@include("view.layouts.scripts")
</body>
</html>


