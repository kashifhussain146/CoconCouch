<p class="black">Showing {{$questions->currentPage()}}-{{$questions->perPage()}} of {{$questions->total()}} results</p>
@foreach($questions as $k=>$v)
<div style="box-shadow: rgba(255, 119, 7, 1) 0px 1px 8px, white 0px 1px 2px;" class="py-4 mb-5">
    <div class="px-4">
        <div class="row w-50">
            <div class="col-4 w-25">
                <p style="background-color: #ff7707; font-size: small;" class="text-white text-center rounded-pill">{{ ($v->category!='')?$v->category->category_name:'' }}</p>
            </div>
            @if($v->subjects!='')
            <div class="col-4 w-25">
                <p style="background-color: #ff7707; font-size: small;" class="text-white text-center rounded-pill">{{ ($v->subjects!='')?$v->subjects->subject_name:'' }}</p>
            </div>
            @endif
            <div class="col-4 w-25">
                <p style="background-color: #ff7707; font-size: small;" class="text-white text-center rounded-pill"> Solutions ID {{ $v->id }}</p>
            </div>
        </div>
        <div class="questions">
            <strong style="font-weight: 700">Q.{{++$k}} </strong> {!! substr( strip_tags($v->question) ,0,500).'...' !!}
        </div>
        
        <div>
            @if($v->visiblity=='Y')
            <strong style="font-weight: 700">Ans.</strong> {!! substr(strip_tags(masks($v->answer,"x")),0,500)  !!}
            @else
            <strong style="font-weight: 700">Ans.</strong> {!! substr(strip_tags($v->answer,"x"),0,500)  !!}
            @endif

        </div>

        <div class="row">
            <p style="color: #ff7707;" class="col-6 fs-6">Published on {{ date('d M Y',strtotime($v->added_date)) }}</p>
            <div style="text-align: right;" class="col-6">
                <button style="background-color: #ff7707;" class="w-25 fs-6 fw-bold text-white">${{$v->price}} | Buy Now</button>
            </div>
        </div>
    </div>
</div>
@endforeach
