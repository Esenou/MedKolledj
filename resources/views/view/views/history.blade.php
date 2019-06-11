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
        <h2>История</h2>
        <div class="note-block color-block">
             {{ $history }}



            <p><strong><u>История</u></strong></p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis sagittis feugiat. Suspendisse vel quam quis erat gravida tincidunt non ac nisl. Maecenas in cursus nibh. Donec facilisis cursus pretium. Ut tincidunt sagittis sapien id congue. Suspendisse potenti. Phasellus a enim varius, mollis quam at, posuere quam. Nullam nec orci lobortis, congue lorem ut, dictum eros. Nunc ut est posuere, egestas neque id, hendrerit odio. Pellentesque orci lorem, viverra id tempus id, lacinia nec eros. Aliquam bibendum lobortis ex sed bibendum. Vestibulum sem quam, suscipit at dolor in, posuere feugiat mauris. Nullam ultrices libero risus.</p>

            <p>Aliquam a quam ipsum. Vestibulum ut diam id augue congue consectetur id fermentum quam. Phasellus suscipit quam vel metus luctus faucibus. In consectetur mi nisi, nec egestas tortor mattis vel. Ut volutpat neque et urna rhoncus rutrum. Vivamus nec euismod lorem. Praesent sodales pharetra purus.</p>

            <p>Proin ipsum nulla, interdum quis ligula eget, egestas hendrerit est. Morbi varius rutrum magna, quis laoreet purus dapibus a. Praesent eget ultricies magna. Nulla facilisi. Phasellus viverra ipsum nibh, sed aliquam nulla laoreet quis. Nullam nisi velit, volutpat sed blandit vitae, pretium et lorem. Maecenas tempus dapibus sapien, at hendrerit risus dapibus id. Donec lobortis magna finibus enim finibus, sed tincidunt justo dapibus. Aliquam vel neque id enim mattis elementum. Vestibulum convallis, quam sit amet cursus pretium, augue dolor posuere ex, id molestie ligula tortor ac lorem. Praesent turpis mauris, interdum non posuere a, efficitur id arcu. Proin dictum enim ligula, eu molestie leo ullamcorper eget. Vestibulum consectetur porta orci, ac pharetra justo mattis sit amet.</p>

            <p>Proin ipsum nulla, interdum quis ligula eget, egestas hendrerit est. Morbi varius rutrum magna, quis laoreet purus dapibus a. Praesent eget ultricies magna. Nulla facilisi. Phasellus viverra ipsum nibh, sed aliquam nulla laoreet quis. Nullam nisi velit, volutpat sed blandit vitae, pretium et lorem. Maecenas tempus dapibus sapien, at hendrerit risus dapibus id. Donec lobortis magna finibus enim finibus, sed tincidunt justo dapibus. Aliquam vel neque id enim mattis elementum.</p>

            <p>Praesent eget elementum neque, a eleifend justo. Morbi eget nibh quis lacus consectetur mattis. In ac mattis lectus. Sed dignissim eros non luctus dictum. Donec fermentum, mauris ut fermentum porta, nisl felis consequat sem, at facilisis lorem purus in leo. Suspendisse aliquam, arcu vel vulputate sollicitudin, odio elit lacinia ex, eu varius metus tortor ut ex. Curabitur in tellus pulvinar felis elementum dapibus at id eros. Morbi at congue erat, id sollicitudin mauris. Proin semper urna quis justo vehicula dictum a nec risus. Fusce ultrices est at sem faucibus vulputate. Donec at nunc eget quam feugiat pellentesque. Maecenas at efficitur tortor. Sed aliquam euismod porttitor.</p>

            <p>Donec faucibus ac mauris ac scelerisque. Suspendisse sit amet tincidunt nisl. Phasellus interdum semper sapien, quis pharetra elit mattis et. Mauris a ante nec ipsum tincidunt faucibus. Maecenas pharetra ipsum sem, nec convallis leo interdum nec. Quisque et nisi ut tellus gravida lobortis. Praesent scelerisque nulla at urna lacinia, nec lobortis neque fringilla. Aenean eu mauris in nisi rhoncus cursus. Proin pellentesque diam nunc, in vestibulum tortor efficitur et. </p>

        </div>

    </div>

</div>


{{-- include footer --}}
@include("view.layouts.footer")

{{-- include scripts --}}
@include("view.layouts.scripts")
</body>
</html>
