@extends('admin.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="app-content">
   <div class="side-app">
       @include('admin.layouts.pagehead')
        <div class="col-lg-12">
           <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Module Inputs</h3>
              </div>

                   <div class="card-body">
                           {!! Form::open(array('method' => 'post', 'route' => 'admin.modules.store', 'class' => 'form', 'files'=>true)) !!}
                           @include('admin.modules.inc.form')
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Create')}}</button></div>
                           </div>
                           
                     </div>

                     
                  </div>
                  
               </div>
               
            </div>
            
         </div>
@endsection
@push('js')
<script type="text/javascript">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@if(session()->has('message.added'))
    
    $(document).ready(function() {
   
    /*--------------------------------------
         Notifications & Dialogs
     ---------------------------------------*/
    /*
     * Notifications
     */
    function notify(from, align, icon, type, animIn, animOut){
        $.growl({
            icon: icon,
            title: ' <strong>Created Successfully!</strong> ',
            message: "{!! session('message.content') !!}",
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    

        var nFrom = 'top';
        var nAlign = 'right';
        var nIcons = $(this).attr('data-icon');
        var nType = 'success';
        var nAnimIn = 'animated flipInY';
        var nAnimOut = 'animated flipOutY';

        notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);

});
@endif
</script>
@endpush