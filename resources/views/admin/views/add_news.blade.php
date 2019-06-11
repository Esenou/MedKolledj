@extends("admin.layouts.layout")

@section("title","Admin Dashboard")
@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add News
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
                    <form role="form" id='frm-add-section' method='post' enctype="multipart/form-data" action="{{ route('saveNews') }}" >

                        {!! csrf_field() !!}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="newsTitle">Title</label>
                                <input type="text" class="form-control" id="newsTitle" name="newsTitle" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="newsDescription">Description</label>
                                <input type="text" class="form-control" id="newsDescription" name='newsDescription' placeholder="Enter description">
                            </div>
                            <div class="form-group">
                                <label for="newsData">Data</label>
                                <input type="date"  class="form-control" id="newsData" name='newsData' >

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