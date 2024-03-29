@extends("admin.layouts.layout")

@section("title","Admin Dashboard")
@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                List News
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List News</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        </div>
                        <!-- /.box-header -->

                        <table class="table table-bordered" id="class-news">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>data</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                        </table>
                        <!-- form start -->

                    </div>
                    <!-- /.box -->


                </div>

                <!-- /.content -->
            </div>


        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function () {

            $(document).on("click",".class-section-delete", function () {

                var conf = confirm("Are you sure want to delete ?");

                if (conf) {

                    // ajax call functions
                    var delete_id = $(this).attr("data-id"); // delete id of delete button

                    var postdata = {
                        "_token": "{{ csrf_token() }}",
                        "delete_id": delete_id
                    }

                    $.post("{{ route('deleteNews') }}", postdata, function (response) {

                        var data = $.parseJSON(response);

                        if (data.status == 1) {

                            location.reload();
                        } else {

                            alert(data.message);
                        }
                    })
                }
            });
        });
    </script>
@endsection