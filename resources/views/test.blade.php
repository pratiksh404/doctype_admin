@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <div class="card card-outline card-info">
       <div class="card-header">
           <h3 class="card-title">Post Blog</h3>
       </div>
       <div class="card-body">
<form action="" method="POST">
    @csrf
    <div class="row">
        {{-- -----------------------------------------------------Left Panel----------------------------------------------------- --}}
        <div class="col-lg-8">
    <div class="form-group">
        {{-- Post Title --}}
        <label for="post_title">Post Title</label>
        <input type="text" class="form-control" id="post_title" placeholder="Enter Title">
        {{-- Post Excerpt --}}
        <label for="post_excerpt">Post Excerpt</label>
        <textarea class="form-control" rows="3" id="post_excerpt" placeholder="Enter ..."></textarea>
        <br>
        {{-- Post Body --}}
        <div class="row" >
            <div class="col-md-12">
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                   Post Body
                  </h3>
                  <!-- tools box -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pad">
                  <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 100vh; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- --------- --}}
      </div>
    </div>
    {{-- -------------------------------------------------------End of Left Panel------------------------------------------------------- --}}
    
    {{-- ------------------------------------------------------Start of Right Panel------------------------------------------------------ --}}
    <div class="col-lg-4">
                {{-- Post Description --}}
                <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                           Post Description
                          </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                              <i class="fas fa-times"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                           {{-- Author --}}
                           <label for="post_author">Post Author</label>
                           <select id="post_author" class="form-control">
                             <option>option 1</option>
                             <option>option 2</option>
                             <option>option 3</option>
                             <option>option 4</option>
                             <option>option 5</option>
                           </select>
                           {{-- ---------- --}}
                                 {{-- Category --}}
                                 <label for="post_category">Post Category</label>
                                 <select id="post_category" class="form-control">
                                   <option>option 1</option>
                                   <option>option 2</option>
                                   <option>option 3</option>
                                   <option>option 4</option>
                                   <option>option 5</option>
                                 </select>
                                 {{-- ---------- --}}
                                       {{-- Status --}}
                           <label for="post_status">Post Status</label>
                           <select id="post_status" class="form-control">
                             <option>option 1</option>
                             <option>option 2</option>
                             <option>option 3</option>
                             <option>option 4</option>
                             <option>option 5</option>
                           </select>
                          
                                   {{-- Post Slug --}}
                                   <label for="post_slug">Post Slug</label>
                                   <input type="text" class="form-control" id="post_slug" placeholder="Enter Post Slug">
                                  
                                   {{-- Post Tags --}}
                                   <label for="post_keyword">Post Tags</label>
                                   <select id="post_keyword" class="select2" multiple="multiple" data-placeholder="Select a tag" style="width: 100%;">
                                     <option>Alabama</option>
                                     <option>Alaska</option>
                                     <option>California</option>
                                     <option>Delaware</option>
                                     <option>Tennessee</option>
                                     <option>Texas</option>
                                     <option>Washington</option>
                                   </select>
                                  
                                   {{-- -----Post Featured----- --}}
                                   <br><br>
                           <label for="">Featured</label>
                           <input type="checkbox" name="featured" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- ----Post Description End----- --}}

                  {{-- ---------------------Post Image --------------------- --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                           Post Image
                          </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                              <i class="fas fa-times"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                            <label for="post_image">Post Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="post_image">
                                <label class="custom-file-label" for="post_image">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- ---------------------Post Image End------------------ --}}

                  {{-- ---------------------------- Post SEO ---------------------------- --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                           Post SEO
                          </h3>
                          <!-- tools box -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                              <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                              <i class="fas fa-times"></i></button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                             {{-- Post SEO Title --}}
        <label for="post_seo_title">Post SEO Title</label>
        <input type="text" class="form-control" id="post_seo_title" placeholder="Enter SEO Title">
        <br>
        {{-- Post Meta Description --}}
        <label for="post_meta_description">Post Meta Description</label>
        <textarea class="form-control" rows="3" id="post_excerpt" placeholder="Enter ..."></textarea>
        <br>
        {{-- Post Keywords --}}
     
            <label for="post_keyword">Post Keywords</label>
            <select id="post_keyword" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
              <option>Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- ------------------------------------------------------------------ --}}
    </div>
    {{-- -------------------------------------------------------End of Right Panel------------------------------------------------------- --}}
    
        </div>
</form>
       </div>
    {{-- --------------------------------------------------------------------------------------------------------------------- --}}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
     //Intialize Summernote Text Editor
    $('.textarea').summernote()
    //Initialize Bootstrap Switch
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
});
</script>
@stop
