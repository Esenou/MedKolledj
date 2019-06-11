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
        <h2>Миссия колледжа</h2>
        <div class="note-block color-block">

            <p>Подготовка профессионально компетентных
                медицинских, экономических, социальных работников среднего звена.</p>
        </div>

    </div>

</div>


{{-- include footer --}}
@include("view.layouts.footer")

{{-- include scripts --}}
@include("view.layouts.scripts")
</body>
</html>