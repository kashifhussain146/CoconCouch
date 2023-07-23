@extends('admin.layouts.app')
@section('title')
<title>Create Category</title>
@stop

@section('inlinecss')
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-lightness/jquery-ui.css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('breadcrum')
<h1 class="page-title">Create Category</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>
@stop

@section('content')
<div class="content-header">
    <div class="side-app">

        <!-- PAGE-HEADER -->
        @include('admin.layouts.pagehead')
        <!-- PAGE-HEADER END -->

        <!--  Start Content -->
    <form id="submitForm" class="row"  method="post" enctype="multipart/form-data" action="{{route('category-save')}}">
        {{csrf_field()}}
        <!-- COL END -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Category Forms</h3>
									</div>
									<div class="card-body">

                                        <div class="form-group">
                                            <label class="form-label">Industry*</label>
                                            <select name="industry_id" id="industry_id"  class="form-control">
                                                <option value=""> Select </option>
                                                @foreach ($industry as $keys=>$item)
                                                    <option  value="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

										<div class="form-group">
											<label class="form-label">Title *</label>
											<input type="text" class="form-control" name="title" id="title" placeholder="Title..">
										</div>

                                       <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-10 ">
                                                    <input id="image" type="file" class="form-control align-middle custom-file-input" name="image" onchange="readURL(this, 'FileImg');">
                                                    <label class="text-dark mt-4 ml-2 custom-file-label" for="value">Choose file</label>
                                                    
                                              </div>
                                                <div class="col-md-2 ">
                                                <img id="FileImg" src="{{url('/public/notfound.png')}}"  style="width: 71px;height: 71px">
                                                </div>
                                            </div>
                                         </div>


                                          {{--<div class="form-group">
                                            <label class="control-label"> Icon </label>
                                            <div class="row">
                                                <div class="col-md-10 ">
                                                    <input id="icon" type="file" class="form-control align-middle custom-file-input" name="icon" onchange="readURL(this, 'Fileicon');">
                                                    <label class="text-dark mt-4 ml-2 custom-file-label" for="value">Choose file</label>
                                              </div>
                                                <div class="col-md-2 ">
                                                <img id="Fileicon" src="{{url('/public/notfound.png')}}"  style="width: 71px;height: 71px">
                                                </div>
                                            </div>
                                         </div>
                                         
                                         <div class="form-group">
                                            <label class="control-label"> Banner Image </label>
                                            <div class="row">
                                                <div class="col-md-10 ">
                                                    <input id="icon" type="file" class="form-control align-middle custom-file-input" name="banner_image" onchange="readURL(this, 'BannerImage');">
                                                    <label class="text-dark mt-4 ml-2 custom-file-label" for="value">Choose file</label>
                                              </div>
                                                <div class="col-md-2 ">
                                                <img id="BannerImage" src="{{url('/public/notfound.png')}}"  style="width: 71px;height: 71px">
                                                </div>
                                            </div>
                                         </div>


                                         <div class="form-group">
											<label class="form-label">Link *</label>
											<input type="text" class="form-control" name="link" id="link" placeholder="Link..">
										</div>
                                         

                                        <!--<div class="form-group">-->
                                        <!--    <label  for="value"><b>Description</b></label>-->
                                        <!--        <textarea class="Description" name="description" id="description"></textarea>-->
                                        <!--</div>-->
                                        
                                        <div class="form-group">
                                            <label  for="value"><b>Note</b></label>
                                               <!--<div id="summernote" name="note" id="note"><p>Hello Summernote</p></div>-->
                                               <textarea class="form-control note" name="note" id="note"></textarea>
                                        </div>--}}
                                        

                                        <div class="form-group">
											<label class="form-label">Sort Order *</label>
											<select name="sort_order" id="sort_order" class="form-control">
                                                @for($i=1; $i<=100; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
											</select>
										</div>
                                        
                                        <div class="form-group">
											<label class="form-label">Status *</label>
											<select name="status" id="status" class="form-control">
                                                <option value="">Select</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">InActive</option>
											</select>
                                        </div>

									



                                        <div class="card-footer"></div>
                                            <button type="submit" id="submitButton" class="btn btn-primary float-right"  data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending..." data-rest-text="Create">Create</button>

										</div>

									</div>

								</div>

							</form>
        </div><!-- COL END -->
        <!--  End Content -->

    </div>
</div>

@stop
@section('inlinejs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    function readURL(input) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#icon_image_select').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    
   $('.note').summernote({ height:250 });
        $(function () {
           $('#submitForm').submit(function(){
            var $this = $('#submitButton');
            buttonLoading('loading', $this);
            $('.is-invalid').removeClass('is-invalid state-invalid');
            $('.invalid-feedback').remove();
            $.ajax({
                url: $('#submitForm').attr('action'),
                type: "POST",
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: new FormData($('#submitForm')[0]),
                success: function(data) {
                    if(data.status){
						var btn = '<a href="{{route('category-list')}}" class="btn btn-info btn-sm">GoTo List</a>';
                        successMsg('Create Category', data.msg, btn);
                        //$('#submitForm')[0].reset();
                        
                        location.href='{{route('category-list')}}';

                    }else{
                        $.each(data.errors, function(fieldName, field){
                            $.each(field, function(index, msg){
                                $('#'+fieldName).addClass('is-invalid state-invalid');
                               errorDiv = $('#'+fieldName).parent('div');
                               errorDiv.append('<div class="invalid-feedback">'+msg+'</div>');
                            });
                        });
                        errorMsg('Create Category','Input error');
                    }
                    buttonLoading('reset', $this);

                },
                error: function() {
                    errorMsg('Create Category', 'There has been an error, please alert us immediately');
                    buttonLoading('reset', $this);
                }

            });

            return false;
           });

           });


    </script>
    <script>
         <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
    </script>
@stop
