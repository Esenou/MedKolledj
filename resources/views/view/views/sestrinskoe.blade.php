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
        <h2>Сестринское дело</h2>
        <div class="note-block color-block">

            <p>квалификация: мед. сестра\мед. брат. Срок обучения 2 года 10 месяцев (на базе 11 класса). Очное обучение.</p>
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
