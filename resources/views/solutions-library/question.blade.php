@extends('layouts.app')

@section('title')
    {{$question->category->category_name}} | {{$question->subjects->subject_name}}
@endsection

@push('css')

<style>

</style>
@endpush

@section('content')

       <!-- Start main-content -->
       <section class="page-title">
        <div class="sol-pad">
            <div class="text-end mb-5 list-items">
                <input style="background-color: gainsboro; padding: 0.5rem 1rem;" class="rounded-pill w-25"
                    placeholder="Search Keyword" type="text">
            </div>
            <ul class="d-flex list-items mb-4">
                <li>{{$question->category->category_name}}</li>
                <li class="ms-3">|</li>
                <li class="ms-3">{{$question->num_words}} Words</li>
            </ul>
            <div>
                <p class="mb-2 black"></strong> {!! substr( strip_tags($question->question) ,0,500).'...' !!}</p>
                <p class="list-items" style="text-align: justify;">
                    
                        <span>{!! substr(strip_tags($question->answer,"x"),0,500)  !!}/span><br />
                            @if($question->visiblity=='Y')
                            <span  class="blur">{!! substr(strip_tags(masks($question->answer,"x")),0,500)  !!}       </span>
                            @endif

                </p>
            </div>
            
            <div class="my-3 text-center">
                <!-- Button trigger modal -->
                <button type="button" style="background-color: #ff7707; z-index: 10;" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo" class="fs-6 px-4 py-1 text-white rounded-pill position-relative">Buy this  Article for $5</button>                

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <p style="font-size: 1rem; line-height: 1.5;" class="mb-3 black fw-bold">The order has been purchased multiple times hence originality is not assured.</p>
                                <p style="font-size: 0.9rem; line-height: 1.5;">If you wish to receive and original solution that is plagarism adn AI free click on order and original solution,  Or else click Continue</p>
                            </div>
                            <div class="modal-footer">
                                <button style="background-color: black;" type="button" class="btn text-white" data-bs-dismiss="modal">Continue</button>
                                <button style="background-color: #ff7707;" type="button" class="btn btn-primary">Order an original Solution</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="my-5">
                <p class="text-uppercase fw-bold fs-6">More Articles From {{$question->category->category_name}}</p>
                <div class="row">
                    @foreach($relatedQuestions as $k=>$v)
                        <div class="col-6 mb-4">
                            <div class="item-bord" style="height: 243px;">
                                <p class="black" style="text-align: justify;"> {!! substr(strip_tags($v->question),0,100)  !!}...</p>
                                <p style="text-align: justify;">{!! substr(strip_tags($v->answer),0,150)  !!}...</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-light position-relative">
        <img class="accounting-img3" src="{{asset('./assets/images/trial10_new.png')}}" alt="">
        <div class="sec-title text-center pt-3 mb-3">
            <span class="sub-title fw-bold">TAGLINE HEADING</span>
            <h2 class="fs-2 pb-4">More Subjects Homework Help</h2>
        </div>
        <div class="text-center row sol-pad">
            <div class="col-3 py-3">
                <div class="rounded-3 economics">
                    <p class="text-white acc-more-pad fw-bold">Economics</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 maths">
                    <p class="text-white acc-more-pad fw-bold">Maths</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 english">
                    <p class="text-white acc-more-pad fw-bold">English</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 history">
                    <p class="text-white acc-more-pad fw-bold">History</p>
                </div>
            </div>
        </div>
        <div class="text-center row sol-pad">
            <div class="col-3 py-3">
                <div class="rounded-3 biology">
                    <p class="text-white fw-bold acc-more-pad">Biology</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 physics">
                    <p class="text-white fw-bold acc-more-pad">Physics</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 dbms">
                    <p class="text-white fw-bold acc-more-pad">DBMS</p>
                </div>
            </div>
            <div class="col-3 py-3">
                <div class="rounded-3 accounts">
                    <p class="text-white fw-bold acc-more-pad">Finance & Accounting</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end main-content -->

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script>

</script>
@endpush