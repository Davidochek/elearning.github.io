  @extends('admin.layouts.app')
  @section('headSection')
  <link rel="stylesheet" href="{{ asset('adminn/bower_components/select2/dist/css/select2.min.css') }}">
  @endsection
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
            <h3 class="box-title">Posts</h3>
          </div>
          <!-- /.box-header -->
          @include('partials/errors')
          <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
             <div class="col-md-6">	
              <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="subtitle">Post Sub Title</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="subtitle">
              </div>
              <div class="form-group">
                <label for="slug">Post Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="slug">
              </div>
            </div>
            <div class="col-md-6">
             <div class="form-group">
              <div class="pull-right">
                <label for="image">File input</label>
                <input type="file" id="image" name="image">
              </div>
              <div class="checkbox pull-left">
                <label>
                 <input type="checkbox" name="status" value="1"> Publish
               </label>
             </div>
           </div>
           <br>
           <br>
           <br>   
           <div class="form-group">
            <label>Select Tags</label>
            <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select tags" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
              @foreach ($tags as $tag)
              <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
          </div> 
          <div class="form-group">
            <label>Select Category</label>
            <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Write You Text Body Here
            <small>Simple and fast</small>
          </h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <textarea class="textarea" name="body" placeholder="Place some text here"
          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('posts.index') }}"><button type="button" class="btn btn-warning">Back</button></a>
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
@section('footerSection')
<script src="{{ asset('adminn/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
 $(document).ready(function() {
  $('.select2').select2()
});
</script>
@endsection
@endsection