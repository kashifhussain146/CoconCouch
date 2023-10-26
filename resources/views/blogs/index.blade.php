@extends('layouts.app')

@section('title')
    Home | Blogs
@endsection

@push('css')

@endpush

@section('content')

    <!-- Start main-content -->
    <section class="page-title blog-bg">
        <div class="auto-container">
            <div class="col-md-7">
                <div class="title-outer">
                    <h1 class="title">Blog</h1>
                    <p class="text-white ntext">Lorem Ipsum is simply dummy text of the printing and typese
                        tting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end main-content -->



    <!-- Blog Section  -->


    <section class="row carousel-home">
        <div class="col-8 row blog-pad1" style="justify-content: space-evenly;">
			@foreach ($blogs as $item)
				<div class="card col-6 mb-4 blog-sec2-wid" >
					<img class="card-img-top"
						src="{{ asset('uploads/'.$item->image)}}"
						alt="Card image cap">
					<div class="card-body bg-light">
						<h6 class="blog-sec2-txt">
									<span style="color: #ff7707 !important;" class="mx-3">
									 	<i style="transform: rotate(90deg);" class="fa-solid fa-tag"></i>
									</span>{{$item->category_data->title}}
						</h6>
						<h5 class="black mx-3 py-2">{{$item->title}}</h5>

						<div class="row justify-content-between pb-2">
							<div class="col-6 fs-6 terms-points">
								<i class="fas fa-calendar-alt ms-3 me-2"></i>{{ date('d M, Y',strtotime($item->created_at)) }}
							</div>
							<div class="col-6 text-end fs-6">
								<a class="mx-3 fw-bold" href="">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
        </div>
        <div class="col-4 pe-5 blog-pad2">
            <div class="bg-light rounded-3">
                <p class="ps-4 pt-5 black fs-4 fw-bold">Search Here</p>
                <hr class="mx-4 mb-4">
                <div class="position-relative pb-2">
                    <input placeholder="Search your Keyword..." style="width: 80%; font-size: small; font-weight: 500;"
                    class="mx-4 mb-4 py-2 px-4 rounded-3" type="text" name="" id="">
                        <button class="rounded-end" style="padding: 0.5rem 1rem; background-color: #ff7707; position: absolute; top: -0.1px;
                        right: 1.5rem;"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                </div>
            </div>
            <div class="bg-light my-5 rounded-3 blog-pad3">
                <p class="ps-4 black fs-4 fw-bold">Categories</p>
                <hr class="mx-4 mb-4">
				@foreach($category as $k=>$v)
                <div class="row justify-content-between bg-white mx-4 my-3">
                        <p style="margin: 0 !important; padding: 1rem; font-weight: 500;" class="col-6 fs-6">{{$v->title}}</p>
                        <div class="col-6 row justify-content-evenly">
                            <hr class="col-6" style="transform: rotate(90deg); height: 1px; width: 5px; position: relative; top: 1.8rem;left: 3rem;">
                            <p style="margin: 0 !important; padding: 1rem; font-weight: 500;" class="col-6 fs-6 text-end">({{$v->count()}})</p>
                        </div>
                </div>
				@endforeach
            </div>
            <div class="bg-light my-5 rounded-3 blog-pad3">
                <p class="ps-4 black fs-4 fw-bold">Latest Posts</p>
                <hr class="mx-4">
                <div>
                    <div class="row bg-light mx-4 mb-3 py-2">
                        <img style="width: 30%;" class="col-6"
                            src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80"
                            alt="">
                        <div class="col-6">
                            <p class="fs-6" style="margin: 0 !important;">06 Nov, 2023</p>
                            <p class="fs-6 black" style="margin: 0 !important; font-weight: 600;">Recent Post 1</p>
                        </div>
                    </div>
                    <hr class="mx-4">
                    <div class="row bg-light mx-4 mb-3 py-2">
                        <img style="width: 30%;" class="col-6"
                            src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80"
                            alt="">
                        <div class="col-6">
                            <p class="fs-6" style="margin: 0 !important;">10 Nov, 2023</p>
                            <p class="fs-6 black" style="margin: 0 !important; font-weight: 600;">Recent Post 1</p>
                        </div>
                    </div>
                    <hr class="mx-4">
                    <div class="row bg-light mx-4 mb-3 py-2">
                        <img style="width: 30%;" class="col-6"
                            src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80"
                            alt="">
                        <div class="col-6">
                            <p class="fs-6" style="margin: 0 !important;">12 Nov, 2023</p>
                            <p class="fs-6 black" style="margin: 0 !important; font-weight: 600;">Recent Post 1</p>
                        </div>
                    </div>
                    <hr class="mx-4">
                </div>
            </div>
            <div class="bg-light my-5 rounded-3 blog-pad3">
                <p class="ps-4 black fs-4 fw-bold">Categories</p>
                <hr class="mx-4 mb-4">
                <div>
                    <div class="row mx-4 my-3">
                        <div style="width: 30%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Business</p>
                        </div>
                        <div style="width: 35%;" class="col-6 bg-white">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Eductaion</p>
                        </div>
                    </div>
                    <div class="row mx-4 mb-3">
                        <div style="width: 36%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">UI/UX Design</p>
                        </div>
                        <div style="width: 16%;" class="col-6 bg-white">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Art</p>
                        </div>
                    </div>
                    <div class="row mx-4 mb-3">
                        <div style="width: 37%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Development</p>
                        </div>
                        <div style="width: 28%;" class="col-6 bg-white">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">UI Design</p>
                        </div>
                    </div>
                    <div class="row mx-4 mb-3">
                        <div style="width: 32%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">e-Learning</p>
                        </div>
                        <div style="width: 42%;" class="col-6 bg-white">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Online Courses</p>
                        </div>
                    </div>
                    <div class="row mx-4 mb-3">
                        <div style="width: 26%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Finance</p>
                        </div>
                        <div style="width: 32%;" class="col-6 bg-white">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Consulting</p>
                        </div>
                    </div>
                    <div class="row mx-4 mb-3">
                        <div style="width: 30%;" class="col-6 bg-white me-2">
                            <p style="margin: 0 !important; padding: 0.2rem; font-size: medium; color: black;">Eductaion</p>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        
    </section>


@endsection

@push('js')

@endpush