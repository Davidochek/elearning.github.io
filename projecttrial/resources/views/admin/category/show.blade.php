@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('adminn/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('main-content')
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
          <a class="col-md-offset-5 btn btn-success" href="{{ route('categories.create') }}">Add New</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S. No</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                  <td>{{ $loop->index + 1}}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                   <td><a href="{{ route('categories.edit', $category->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td>
                      <form id="delete-form-{{$category->id}}"  method="post" action="{{ route('categories.destroy', $category->id) }}" style="display: none;">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                      </form>
                      <a href="" onclick="if(confirm('Are you sure, You want to delete this?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{$category->id}}').submit();
                    } 
                    else
                    {
                      event.preventDefault();
                    }
                    "><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S. No</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
@section('footerSection')
<script src="{{ asset('adminn/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminn/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@endsection



