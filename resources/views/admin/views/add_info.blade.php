@extends("admin.layouts.layout")

@section("title","Admin Dashboard")

@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add section
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-6">

                <!-- general form elements -->
                <div class="box box-primary">
                    @if(session()->has("message"))
                        <div class="alert alert-success">
                            <p>{{ session('message') }}</p>
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form role="form" id='frm-add-section' method='post' enctype="multipart/form-data" action="{{ route('savesection') }}" >

                        {!! csrf_field() !!}
                        <div class="box-body">
                            <label for="infoSelect">Choose </label>
                            <div class="form-group" style="width:200px">

                                <select id="infoSelect" name="infoSelect">
                                    <option value="1">МЭК в цифрах</option>
                                    <option value="2">Миссия колледжа</option>
                                    <option value="3">Mercedes</option>
                                    <option value="4">Audi</option>
                                </select>
                            </div>

                            <script>
                                var a=0;
                                $(document).ready(function () {

                                    $("#infoSelect").on("change", function () {
                                        a=1;
                                        alert("Error product undefined");
                                    });
                                });
                            </script>
                            <div class="form-group" >
                                <label for="homeSlider_title">Title</label>
                                <input type="text" class="form-control" id="homeSlider_title" name="homeSlider_title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="homeSlider_description">Description</label>
                                <input type="text" class="form-control" id="homeSlider_description" name='homeSlider_description' placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label for="homeSlider_image">Profile Photo</label>
                                <input type="file" class="form-control" id="homeSlider_image" name='homeSlider_image' >

                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->



            </div>



        </section>
        <!-- /.content -->
    </div>

@endsection

