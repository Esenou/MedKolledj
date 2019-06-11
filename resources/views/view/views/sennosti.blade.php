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
        <h2>Ценности колледжа</h2>
        <div class="note-block color-block">

            <p> Удовлетворение потребностей всех заинтересованных сторон.</p>
            <p>Профессионализм и компетенция сотрудников колледжа.</p>
            <p>Партнерские отношения между преподавателями и студентами
                колледжа.</p>
            <p>Углубление связей на основе различных форм взаимного
                сотрудничества с организациями ближнего и дальнего зарубежья.</p>
        </div>


    </div>


</div>

{{-- include footer --}}
@include("view.layouts.footer")

{{-- include scripts --}}
@include("view.layouts.scripts")
</body>
</html>


