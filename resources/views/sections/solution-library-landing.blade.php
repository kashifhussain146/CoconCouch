@foreach($questions as $k1=>$v1)
   
            <p class="black fs-2 mt-3 mb-5">{{$v1['category_name']}} 
                @if($subject_category_id!=null)
                    > 
                    
                    {{ (isset($v1['questions'][0]->subjects->subject_name))?$v1['questions'][0]->subjects->subject_name:'' }}
                @endif
            </p>
            
            @foreach($v1['questions'] as $k=>$v)
                   
                        <div style="box-shadow: rgba(255, 119, 7, 1) 0px 1px 8px, white 0px 1px 2px;" class="py-4 mb-5">
                            <div class="px-4">
                                
                                <div class="row w-75">
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
                                <p class="fs-6 mb-1">{{($v->college!='')?$v->college->name:'N/A'}} </p>
                                <div class="black fw-bold">
                                    @auth
                                            @if(!in_array($v->id,Auth::guard('web')->user()->isPaidQuestions()->pluck('question_id')->toArray()))
                                            <strong style="font-weight: 700">Q.{{++$k}} </strong> {!! substr( strip_tags($v->question) ,0,100).'...' !!}
                                            @else
                                            <strong style="font-weight: 700">Q.{{++$k}} </strong> {!! strip_tags($v->question)  !!}</p>
                                            @endif
                                    @endauth

                                    @guest
                                    <strong style="font-weight: 700">Q.{{++$k}} </strong> {!! substr( strip_tags($v->question) ,0,100).'...' !!}                                     
                                    @endguest                                    
                                </div>
                                
                                <div>
                                    @auth
                                        @if(!in_array($v->id,Auth::guard('web')->user()->isPaidQuestions()->pluck('question_id')->toArray()))
                                        @if($v->visiblity=='Y')
                                        <strong style="font-weight: 700">Ans.</strong> {!! substr(strip_tags(masks($v->answer,"x")),0,500)  !!}
                                        @else
                                        <strong style="font-weight: 700">Ans.</strong> {!! substr(strip_tags($v->answer,"x"),0,500)  !!}
                                        @endif
                                        @else
                                        <p style="text-align: justify;"><strong>Ans.</strong> {!! substr(strip_tags($v->answer),0,1000).'.......'    !!}</p><br />
                                        @endif
                                    @endauth

                                    @guest
                                    <strong style="font-weight: 700">Ans.</strong> {!! substr(strip_tags(masks($v->answer,"x")),0,500)  !!}                                    
                                    @endguest
                                </div>

                                <div class="row mt-3 mb-3">
                                    <ul class="col-6 d-flex">
                                        <li class="list-items">{{$v->num_words}} words</li>
                                        <li class="ms-3 list-items">{{$v->views_count}} views</li>
                                        <li class="ms-3 list-items">ID {{$v->id}}</li>
                                    </ul>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <button type="button" style="background-color: #ff7707;float:right;margin-right:10px" class="fs-6 px-3 fw-bold text-white">${{$v->price}} | Buy Now</button>
                                            <a href="{{route('solutions.library.question.page',['question_id'=>$v->id])}}">
                                                <button type="button" style="background-color: #ff7707;float:right;margin-right:10px" class="fs-6 px-3 fw-bold text-white">Get an Original Solution</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
            @endforeach

            @if($subject_category_id==null)
            <a href="{{route('solutions.library.subject.page',['subject_id'=>$v->subject_category])}}">
                <p class="black fw-bold fs-6">+ View More</p>
            </a>
            @endif


@endforeach
