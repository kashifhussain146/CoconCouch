@push('css')
<script type="text/javascript">
	var thumbnail_height = "{{$module->thumbnail_height}}";
	var thumbnail_width = "{{$module->thumbnail_width}}";
</script>
@endpush
<input type="hidden" name="module_id" value="{{$module->id}}">
<input type="hidden" name="module_term" value="{{$module->term}}">
<input type="hidden" name="module_slug" value="{{$module->slug}}">
<input type="hidden" id="attached_file" <?php if(isset($module_data)){echo 'value="'.$module_data->image.'"';} ?> name="attached_file">
<input type="hidden" id="attached_files" <?php if(isset($module_data)){echo 'value="'.$module_data->images.'"';} ?> name="attached_files">
<div class="row">
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('title', $module->term.' Title', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>$module->term.' Title', 'required'=>'required')) !!}
     </div>
  </div>
  @if($module->is_slug)
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('term', $module->term.' Slug', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('slug', null, array('class'=>'form-control', 'id'=>'slug', 'placeholder'=>$module->term.' Slug', 'required'=>'required')) !!}
     </div>
  </div>
  @endif


  @if($module->category)
  <div class="col-md-12">
    <div class="form-group">
       {!! Form::label('category', $module->term.' Category', ['class' => 'font-weight-bold']) !!}
       {!! Form::select('category', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}
       {!! APFrmErrHelp::showErrors($errors, 'category') !!}
    </div>
 </div>
 @endif


  @if($module->category_module_id!='')
  <div class="col-md-12">
     <div class="form-group">
        @php
              $category_ids = explode(',',$module->category_module_id);
              $modules = \App\Models\Modules::whereHas('modules_data')->with('modules_data')->whereIn('id',$category_ids)->get();
            //   dd($modules);
            $categoriesids = [];

            if(isset($module_data)){
                if($module_data->category_ids!=''){
                    foreach(json_decode($module_data->category_ids) as $k=>$v){
                        foreach($v as $k2=>$v3){
                            $categoriesids[] = $v3;                             
                        }
                    }
                }
            }
        @endphp
      
      @foreach($modules as $k1=>$v1)
        <label class='font-weight-bold' for="{{$v1->name}}">{{$v1->name}}</label>
        
        <input type="hidden" name="module_ids[]" value="{{$v1->id}}" />

        <select name="category_ids[{{$v1->id}}][]" class="form-control select2" id="{{$v1->name}}" multiple>
            @foreach($v1->modules_data as $k2=>$v2)
            <option @if( in_array($v2->id,$categoriesids) ) selected @endif value="{{$v2->id}}">{{$v2->title}}</option>
            @endforeach
        </select>
      @endforeach



        {{-- {!! Form::label('category_ids', $module->term.' Categories', ['class' => 'font-weight-bold']) !!}
        {!! Form::select('category_ids[]', $categories, isset($category_ids)?$category_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'category_ids', 'multiple'=>'multiple')) !!} --}}
        {!! APFrmErrHelp::showErrors($errors, 'category_ids') !!}
     </div>
  </div>

  @endif



  @if($module->is_description)
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('description', $module->term.' Description', ['class' => 'font-weight-bold']) !!}
        {!! Form::textarea('description', null, array('class'=>'form-control summernote', 'id'=>'editor1', 'placeholder'=>$module->term.' Description', 'required'=>'required')) !!}
     </div>
  </div>
  @endif

  @if($module->extra_fields)
  @for($i = 1 ; $i<=$module->extra_fields; $i++)
    <div class="col-md-12">
      <div class="form-group">
      	@php
      	$label = 'extra_field_title_'.$i;
      	$name = 'extra_field_'.$i;
      	@endphp
	    {!! Form::label($name, $module->$label, ['class' => 'font-weight-bold']) !!}
	    {!! Form::text($name, null, array('class'=>'form-control', 'id'=>$name, 'placeholder'=>$module->$label, 'required'=>'required')) !!}
	  </div>
	</div>
	@endfor
  @endif

  @if($module->is_image)
    <div class="col-md-12">
      <div class="form-group">
	    <div class="sub-title">{{$module->name}} @if($module->multi_images) Images @else Image @endif</div>
	    <input type="file" name="image" id="filer_input1">
	  </div>
	</div>
  @endif

  @if($module->tags)
  <div class="col-md-12">
     <div class="form-group">
        @php
            if(isset($module_data)){
              $tag_ids = explode(',',$module_data->tag_ids);
        
            }
        @endphp
        {!! Form::label('tag_ids', $module->term.' Tags', ['class' => 'font-weight-bold']) !!}
        {!! Form::select('tag_ids[]', $tags, isset($tag_ids)?$tag_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'tag_ids', 'multiple'=>'multiple')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'tag_ids') !!}
     </div>
  </div>
  @endif

  @if($module->is_seo)
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('meta_title', $module->term.' Meta Title', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('meta_title', null, array('class'=>'form-control', 'id'=>'meta_title', 'placeholder'=>$module->term.' Meta Title')) !!}
     </div>
  </div>
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('meta_keywords', $module->term.' Meta Keywords', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('meta_keywords', null, array('class'=>'form-control', 'id'=>'meta_keywords', 'placeholder'=>$module->term.' Meta Keywords')) !!}
     </div>
  </div>
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('meta_description', $module->term.' Meta Description', ['class' => 'font-weight-bold']) !!}
        {!! Form::textarea('meta_description', null, array('class'=>'form-control', 'id'=>'meta_description', 'placeholder'=>$module->term.' Meta Description')) !!}
     </div>
  </div>
  @endif

</div>
@push('js')
{{-- <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script> --}}
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
{{-- @include('admin.ckeditor.index') --}}


<script type="text/javascript">
  
  @if($module->multi_images)
  images_limit = 10;
  @endif
	 $(document).ready(function() {

	 	@if($module->is_description)
	 	if ($(".form").length > 0) {
            $(".form").validate({
                validateHiddenInputs: true,
                ignore: "",

                rules: {
                    title: {
                        required: true,
                        maxlength: 500
                    },
                    slug: {
                        required: true,
                        maxlength: 500
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {

                    title: {
                        required: "Title is required",
                    },
                    slug: {
                        required: "Slug is required",
                    }, 
                    description: {
                        required: "Description is required",
                    }

                },
            })
        }
        @else
        if ($(".form").length > 0) {
            $(".form").validate({
                validateHiddenInputs: true,
                ignore: "",

                rules: {
                    title: {
                        required: true,
                        maxlength: 500
                    },
                    slug: {
                        required: true,
                        maxlength: 500
                    }
                },
                messages: {

                    title: {
                        required: "Title is required",
                    },
                    slug: {
                        required: "Slug is required",
                    }

                },
            })
        }
	 	@endif
        
    })
</script>

@endpush