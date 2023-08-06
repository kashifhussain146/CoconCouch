@extends('layouts.app')

@section('title')
    Home | Solution Library
@endsection

@push('css')

<style>
    .page-item.active .page-link{
        background-color: #ff7707;
        border-color: #ff7707;
    }
    .page-link{
        color:#ff7707;
    }
    .page-link:hover{
        color: #ff7707;
    }
    .pagination{
        justify-content: center;
    }

    .questions p{
        color :#ff7707!important;
    }
</style>
@endpush

@section('content')

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{asset('assets/images/contact-bnnr.png')}});">

        <div class="auto-container">

            <div class="col-md-7">

                <div class="title-outer">

                    <h1 class="title">Solution Library</h1>

                    <p class="text-white ntext">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>

                </div>

            </div>

        </div>

    </section>
    <!-- end main-content -->


    <!-- Results Section  -->



    <div class="p-5 ">
        <div class="position-relative">
            <input class="w-100 mb-4 py-1 px-4 fs-6" style="border: 2px solid #ff7707;" name="search" id="search" placeholder="Search by name, topic or question" type="text">
            <select style="top: 0.6rem; right: 20rem; color: grey;" class="position-absolute bg-transparent fs-6 " name="subject_category" id="subject_category">
                <option value="">Select Subject</option>
                @foreach ($subjectcategory as $item)
                <option value="{{$item->id}}">{{$item->category_name}}</option>
                @endforeach
            </select>
            <select style="top: 0.6rem; right: 12rem; color: grey;" class="position-absolute bg-transparent fs-6" name="subject" id="subject">
                <option value="">Select Topic</option>
                
            </select>
            <button style="background-color: #ff7707; padding: 0.35rem 0;" class="fs-6 px-5 searchBtn position-absolute end-0">Search</button>
        </div>

        <div id="solutions_library">
            @include('sections.solution-library',['questions'=>$questions])
        </div>
    </div>
    

    <!-- Why Testimonials -->
    <section class="whychoose-section section-paddding bg-light">
        <div class="auto-container">
            <div class="row">
                <div class="sec-title text-center">
                    <span class="sub-title">TAGLINE</span>
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <!-- whychoose Block -->
                <div class="why-block col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="testimonial wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div style="transform: skewY(-2deg); border-radius: 5px; left: 0px !important; border-color: black; bottom: -30px !important;" class="border-layer"></div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium saepe laborum eaque explicabo harum quod a delectus, distinctio veniam culpa! Illo obcaecati ratione perferendis eos magnam assumenda illum aut consequuntur!
                        </div>
                        <div style="z-index: 1;" class="row pt-4 position-relative">
                            <img style="height: 4rem; width: 6rem; border-radius: 100%;" class="col-4"
                                src="https://1.bp.blogspot.com/-bo50-jrhUoA/XpWrJsMPVFI/AAAAAAAATRU/D5KtkduEKqIgzxA4KSjRPbZIKwmPPZH2wCLcBGAsYHQ/s400/krishna.jpg"
                                alt="">
                            <div class="col-8">
                                <p style="margin-bottom: 0 !important;" class="black fw-bold fs-6">Martha Maldonado
                                </p>
                                <p style="margin-bottom: 0 !important; color: #ff7707;" class="fs-6">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- whychoose Block -->
                <div class="why-block col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="testimonial wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div style="transform: skewY(-2deg); border-radius: 5px; left: 0px !important; border-color: black; bottom: -30px !important;" class="border-layer"></div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium saepe laborum eaque explicabo harum quod a delectus, distinctio veniam culpa! Illo obcaecati ratione perferendis eos magnam assumenda illum aut consequuntur!
                        </div>
                        <div style="z-index: 1;" class="row pt-4 position-relative">
                            <img style="height: 4rem; width: 6rem; border-radius: 100%;" class="col-4"
                                src="https://1.bp.blogspot.com/-bo50-jrhUoA/XpWrJsMPVFI/AAAAAAAATRU/D5KtkduEKqIgzxA4KSjRPbZIKwmPPZH2wCLcBGAsYHQ/s400/krishna.jpg"
                                alt="">
                            <div class="col-8">
                                <p style="margin-bottom: 0 !important;" class="black fw-bold fs-6">Martha Maldonado
                                </p>
                                <p style="margin-bottom: 0 !important; color: #ff7707;" class="fs-6">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- whychoose Block -->
                <div class="why-block col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="testimonial wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div style="transform: skewY(-2deg); border-radius: 5px; left: 0px !important; border-color: black; bottom: -30px !important;" class="border-layer"></div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium saepe laborum eaque explicabo harum quod a delectus, distinctio veniam culpa! Illo obcaecati ratione perferendis eos magnam assumenda illum aut consequuntur!
                        </div>
                        <div style="z-index: 1;" class="row pt-4 position-relative">
                            <img style="height: 4rem; width: 6rem; border-radius: 100%;" class="col-4"
                                src="https://1.bp.blogspot.com/-bo50-jrhUoA/XpWrJsMPVFI/AAAAAAAATRU/D5KtkduEKqIgzxA4KSjRPbZIKwmPPZH2wCLcBGAsYHQ/s400/krishna.jpg"
                                alt="">
                            <div class="col-8">
                                <p style="margin-bottom: 0 !important;" class="black fw-bold fs-6">Martha Maldonado
                                </p>
                                <p style="margin-bottom: 0 !important; color: #ff7707;" class="fs-6">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Testimonials-->

@endsection

@push('js')

<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select2').select2();
});


$(document).on('change','#subject_category',function(){
    
    $.LoadingOverlay("show");

    $.ajax({
        url: '{{route('get.ajax.subcategory')}}',
        type: 'GET',
        data:{category_id:$("#subject_category option:selected").val()},
        success: function(data){
            $.LoadingOverlay("hide");
            if(data.html != ''){
                $("#solutions_library").html(data.html);
                if(data.subject.length > 0){
                    $("#subject option").remove();
                    $("#subject").append(`<option value="">Select Subject</option>`)
                    $.each(data.subject,function(key,value){
                        $("#subject").append(`<option value="${value.id}">${value.subject_name}</option>`)
                    });
                }
            }
            else{
                $("#solutions_library").html("<p class='text-danger'> No records found </p>");                
            }
        }
    });
});



$(document).on('change','#subject',function(){
    
    $.LoadingOverlay("show");

    $.ajax({
        url: '{{route('get.ajax.subjects')}}',
        type: 'GET',
        data:{category_id:$("#subject_category option:selected").val(),subject_id:$("#subject option:selected").val()},
        success: function(data){
            $.LoadingOverlay("hide");
            if(data.html != ''){
                $("#solutions_library").html(data.html);
            }else{
                $("#solutions_library").html("<p class='text-danger'> No records found </p>");                
            }
        }
    });
});

$(document).on('click','.searchBtn',function(){

    $.LoadingOverlay("show");

    $.ajax({
        url: '{{route('get.ajax.subjects')}}',
        type: 'GET',
        data:{category_id:$("#subject_category option:selected").val(),subject_id:$("#subject option:selected").val(),'search':$("#search").val()},
        success: function(data){
            $.LoadingOverlay("hide");
            if(data.html != ''){
                $("#solutions_library").html(data.html);
            }else{
                $("#solutions_library").html("<p class='text-danger'> No records found </p>");                
            }
        }
    });

})


</script>
@endpush