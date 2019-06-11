
<!-- jQuery 3 -->
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>

<script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script>

<script src="{!! asset('assets/js/jquery.validate.js') !!}"></script>

<script src="{!! asset('assets/js/sweetalert.js') !!}"></script>

<script src="{!! asset('assets/js/custom-script.js') !!}"></script>



<script>
    $(function () {

        if($('#class-sections').length > 0){
            $('#class-sections').DataTable({ // code for list sections
                processing: true,
                serverSide: true,
                ajax: "{{ route('listallsection') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'image', name: 'image' },
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description' },
                    { data: 'action_btns', name: 'action_btns' },

                ]
            });

        }
        if($('#class-news').length > 0){
            $('#class-news').DataTable({ // code for list sections
                processing: true,
                serverSide: true,
                ajax: "{{ route('listAllNews') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description' },
                    { data: 'data', name: 'data' },
                    { data: 'action_btns', name: 'action_btns' },

                ]
            });

        }



    });
</script>

