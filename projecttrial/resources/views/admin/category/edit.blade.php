@extends('admin.layouts.app')
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <br>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           @include('partials/errors')
            <form role="form" action="{{ route('categories.update', $category->id) }}" method="post">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                <div class="col-md-offset-4 col-md-4">  
                  <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$category->name}}">
                </div>
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="slug" value="{{$category->slug}}">
                </div>
                 <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-warning">Back</button></a>
              </div>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
      
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection