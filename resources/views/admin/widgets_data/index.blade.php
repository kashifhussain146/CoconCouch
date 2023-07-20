@extends('admin.layouts.app')

@section('breadcrum')
<h1 class="page-title">{{$page->title}} </h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">{{$page->title}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>
@stop

@push('css')
  
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endpush

@section('content')

<div class="app-content">
   <div class="side-app">
       @include('admin.layouts.pagehead')
        <div class="col-lg-8">
           <div class="card">
              <div class="card-header">
                 <h3 class="card-title">{{$page->title}}</h3>
              </div>

                   <div class="card-body">

                     @if(null!==($widgets))

                        @foreach($widgets as $wid)

                        <?php $widget_data = null; ?>

                        <div class="page-body" id="widget_{{$wid->id}}">

                           <div class="row">

                                    <div class="col-md-12">


                                       <?php 



                                          $widget_data = App\Models\WidgetsData::where('widget_id',$wid->id)->first()

                                       ?>

                                    @if(null!==($widget_data))

                                    {!! Form::model($widget_data, array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)) !!}

                                       

                                    @else

                                    {!! Form::open(array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)) !!}

                                       

                                    @endif

                                       {!! Form::hidden('id', $wid->id) !!}

                                       @include('admin.widgets_data.inc.form')

                                       <div class="col-md-12">
                                          <center>
                                          <button type="submit" class="btn btn-primary btn-sm">{{__('Update')}}</button>
                                          </center>
                                       </div>



                                       {!! Form::close() !!}

                                       

                                    </div>



                           </div>

                        </div>

                        @endforeach

                  @endif

                   </div>

           </div>
        </div>
   </div>
</div>


@endsection

@push('js')



@include('admin.widgets_data.widgetfiler')

@include('admin.widgets_data.dynamic_form')


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
   $('.summernote').summernote({
        placeholder: 'Please enter a Description',
        height: 400
      });

</script>
@if(session()->has('message.added'))

<script type="text/javascript">

  var msg = '{!! session('message.content' )!!}';

</script>

<script type="text/javascript" src="{{asset('js/order.js')}}"></script>

@endif

@endpush