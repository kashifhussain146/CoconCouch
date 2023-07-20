@extends('admin.layouts.app')

@section('title')
<title>{{$module->name}}</title>
@endsection

@section('content')

<div class="app-content">
   <div class="side-app">

       <!-- PAGE-HEADER -->
       @include('admin.layouts.pagehead')
       <!-- PAGE-HEADER END -->

       <!-- ROW-1 OPEN -->
       <div class="col-12">
           <div class="row">
               <div class="card">
                   <div class="card-header">

                     <h3 class="card-title">{{$module->name}}</h3>

                       <div class="ml-auto pageheader-btn">
                           @can('Category Create')
                              <a href="{{ route('admin.modules.data.add',$module->slug) }}" class="btn btn-sm btn-success btn-icon text-white mr-2">
                                 <span>
                                    <i class="fe fe-plus"></i>
                                 </span> Add {{$module->name}}
                              </a>
                           @endcan
                        </div>
                   </div>

                   <div class="card-body ">
                              <table id="fix-header" class="table table-striped table-bordered nowrap dataTable">

                              <thead>

                                 <tr>

                                    @if($module->is_image)

                                    <th>{{__('Image')}}</th>

                                    @endif

                                    <th>{{__('Title')}}</th>

                                    <th>{{__('Created Date')}}</th>

                                    <th>{{__('Status')}}</th>

                                    <th>{{__('Action')}}</th>

                                 </tr>

                              </thead>

                              <tbody>

                                 @if($module->modules_data)

                                 @foreach($module->modules_data as $data)

                                 <tr>

                                    @if($module->is_image)

                                    <td width="12%""><img src="{{asset('/images/thumb/'.$data->image)}}" alt=""></td>

                                    @endif

                                    <td>{{$data->title}}</td>

                                    

                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)}}</td>

                                    <td><a class="waves-effect btn-sm status waves-light" onclick="update_status({{$data->id}});" href="javascript:void(0);" id="sts_{{$data->id}}">@if($data->status=='active')<span class="btn btn-success">{{$data->status}}</span>@else <span class="btn btn-warning">{{$data->status}}</span> @endif </a></td>

                                    <td>

                                      <a href="{{route('admin.modules.data.edit',[$module->slug,$data->id])}}" class="btn-sm tabledit-edit-button btn btn-primary waves-effect waves-light"><span class="icofont icofont-ui-edit"></span>&nbsp {{__('Edit')}}</a>

                                       <a href="{{route('admin.modules.data.delete',[$module->slug,$data->id])}}" class="btn-sm tabledit-delete-button btn btn-danger waves-effect waves-light deletebtn"><span class="icofont icofont-ui-delete"></span>&nbsp {{__('Delete')}}</a>

                                    </td>

                                 </tr>

                                 @endforeach

                                 @endif

                              </tbody>

                              </table>

                           </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 CLOSED -->
            </div>        
   </div>

@endsection

@push('js')


@if(session()->has('message.added'))

<script type="text/javascript">

  var msg = '{!! session('message.content' )!!}';

</script>

<script type="text/javascript" src="{{asset('js/order.js')}}"></script>

@endif
<script type="text/javascript" src="{{asset('admin/assets/js/update_status.js')}}"></script>
<script>

   $(document).on('click','.deletebtn',function(){

      var con = confirm('Are you sure want to delete this college ?');
         if(!con){
            event.preventDefault();
            return false;
         }

   });
</script>
@endpush