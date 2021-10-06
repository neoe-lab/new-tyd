@extends('back.layouts.app')
@section('content')
   <!-- Page Wrapper -->
   <div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">แบบประเมินสมรรถภาพของเพื่อน </h3>
                        {{-- @php
                        $CI = &get_instance();
                        echo $CI->session->userdata("fullname");
                      @endphp --}}
                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> --}}
                        {{-- <li class="breadcrumb-item active">Clients</li> --}}
                    </ul>
                </div>
                {{-- <div class="col-auto float-right ml-auto">
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
                    <div class="view-icons">
                        <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                        <a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Search Filter -->
        {{-- <div class="row filter-row">
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Client Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
                <div class="form-group form-focus select-focus">
                    <select class="select floating"> 
                        <option>Select Company</option>
                        <option>Global Technologies</option>
                        <option>Delta Infotech</option>
                    </select>
                    <label class="focus-label">Company</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">  
                <a href="#" class="btn btn-success btn-block"> Search </a>  
            </div>     
        </div> --}}
        <!-- Search Filter -->
        
        <div class="row staff-grid-row">
            @foreach ($person as $person)              
            <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                <div class="profile-widget">
                    <div class="profile-img">
                        <a href="" class="avatar"><img alt="" src={{base_url('assets/back/img/profiles/avatar-19.jpg')}}></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a> --}}
                    </div>
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="">{{$person->who_is}}</a></h4>
                    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="">คะแนน</a></h5>
                    <div class="{{($person->active != 0 ? 'text-success' : 'text-danger')}}"><h3>0</h3></div>
                    <div class="{{($person->active != 0 ? 'text-success' : 'text-danger')}}">{{($person->active != 0 ? 'ประเมินแล้ว' : 'ยังไม่ได้ประเมิน')}}</div>
                    {{-- <div class="text-success">{{($person->totalscore != null ? $person->totalscore : 'ยังไม่ได้ประเมิน')}}</div> --}}
                    {{-- <a href="{{base_url('backend/questions/questions_behavior_person/')}}{{$person->who_id}}" class="btn btn-success btn-sm m-t-10 {{($person->active != 0 ? 'disabled' : '')}}">ทำแบบประเมิน</a> --}}
                    <a class="btn btn-success btn-sm m-t-10 answer {{($person->active != 0 ? 'disabled' : '')}}" href="#" data-toggle="modal" data-target="#questions_behavior" data-whoid="{{$person->who_id}}">ทำแบบประเมิน</a>
                    
                </div>
            </div>   
            @endforeach
         
        </div>
                 
         <!-- questions_behavior Modal -->
         <div id="questions_behavior" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title">แบบประเมินสมรรถภาพ</h5>
                     
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="was-validated" action="{{ base_url('backend/questions/answersbehavior') }}"
                                method="POST">
                                @php
                                    $i = 0;
                                @endphp
                                <input type="hidden" id="who_is" name="who_is" value="">
                                {{-- แสดงหัวข้อหลัก --}}
                                @foreach ($title_list->result() as $titles)
                                    @if ($titles->parent_id == 0)
                                        <div class="from-group">
                                            <h4><b>{{ $titles->title }}</b></h4>
                                            <hr>
                                        </div>
                                        {{-- แสดงคำถามในกรณีที่ไม่มีหัวข้อย่อย --}}
                                        @foreach ($questions->result() as $question)
                                            @if ($question->title_id == $titles->id)
                                                <div class="form-group">
                                                    <div class="">
                                                        {{-- <div class="custom-control"> --}}
                                                    <label>{{ $question->question }}</label>
                                                
                                                    </div>

                                                    <div class="custom-radio">
                                                        {{-- <div class="custom-control custom-radio"> --}}
                                                        {{-- <label> --}}
                                                        {{-- {{$titles->type_id}}
                                                        {{$question->id}} --}}
                                                        {{-- <input type="hidden" name="type_form[{{ $i }}]" value="{{ $titles->type_id }}"> --}}
                                                        <input type="hidden" name="question_number[{{ $i }}]"
                                                            value="{{ $question->id }}">
                                                        {{-- </label> --}}
                                                        {{-- <label> --}}
                                                              {{-- <input type="hidden" id="who_is" name="who_is" value=""> --}}
                                                            {{-- <input type="hidden" id="whoid" name="who_is[]"
                                                                value="{{ $person->who_id }}"> --}}
                                                            {{-- <input type="hidden" name="by_is[]" value="{{$by_is}}"> --}}
                                                        {{-- </label> --}}
                                                        <label>
                                                            <input type="radio" value="5"
                                                                name="answers[{{ $i }}]" required>
                                                            ดีมาก
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="4"
                                                                name="answers[{{ $i }}]">
                                                            ดี
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="3"
                                                                name="answers[{{ $i }}]">
                                                            ปานกลาง
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="2"
                                                                name="answers[{{ $i }}]"> น้อย
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="1"
                                                                name="answers[{{ $i }}]"> ควรปรับปรุง
                                                        </label>
                                                        {{-- <input type="radio" value="0.6"
                                                                name="answers[{{ $i }}]"> 6
                                                            <input type="radio" value="0.7"
                                                                name="answers[{{ $i }}]"> 7
                                                            <input type="radio" value="0.8"
                                                                name="answers[{{ $i }}]"> 8
                                                            <input type="radio" value="0.9"
                                                                name="answers[{{ $i }}]"> 9
                                                            <input type="radio" value="1"
                                                                name="answers[{{ $i }}]"> 10 --}}

                                                        <hr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    </div>
                                            @endif
                                        @endforeach
                                        {{-- end question on no sub titles --}}
                                    @endif


                                    {{-- แสดงหัวข้อย่อย --}}
                                    @foreach ($title_list->result() as $sub_title)
                                        @if ($sub_title->parent_id == $titles->id)
                                            <div class="from-group">
                                                <hr>
                                                <hr>
                                                <b>
                                                    <p>{{ $sub_title->title }}</p>
                                                </b>
                                                <hr>
                                            </div>
                                            {{-- แสดงคำถาม --}}
                                            @foreach ($questions->result() as $question)
                                                @if ($question->title_id == $sub_title->id)
                                                    <div class="form-group">
                                                        <div class="custom-control">
                                                            <label>{{ $question->question }}</label>
                                                        </div>
                                                        <div class="custom-control radio">
                                                            <label>
                                                                @php
                                                                    $i++;
                                                                @endphp
                                                                {{-- <input type="hidden" name="type_form[{{$i}}]" value="{{$sub_title->type_id}}"> --}}
                                                                <input type="hidden"
                                                                    name="question_number[{{ $i }}]"
                                                                    value="{{ $question->id }}">
                                                                <input type="radio" value="1"
                                                                    name="answers[{{ $i }}]" required> 1
                                                                <input type="radio" value="2"
                                                                    name="answers[{{ $i }}]"> 2
                                                                <input type="radio" value="3"
                                                                    name="answers[{{ $i }}]"> 3
                                                                <input type="radio" value="4"
                                                                    name="answers[{{ $i }}]"> 4
                                                                <input type="radio" value="5"
                                                                    name="answers[{{ $i }}]"> 5
                                                                <input type="radio" value="6"
                                                                    name="answers[{{ $i }}]"> 6
                                                                <input type="radio" value="7"
                                                                    name="answers[{{ $i }}]"> 7
                                                                <input type="radio" value="8"
                                                                    name="answers[{{ $i }}]"> 8
                                                                <input type="radio" value="9"
                                                                    name="answers[{{ $i }}]"> 9
                                                                <input type="radio" value="10"
                                                                    name="answers[{{ $i }}]"> 10
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    {{-- จบแสดงหัวข้อย่อย --}}
                                @endforeach
                                {{-- จบแสดงหัวข้อหลัก --}}

                                <div class="text-right">
                                    <a class="btn btn-success"
                                        href="{{ base_url('backend/questions/random_behavior_person') }}">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Profile Modal -->
    </div>
    <!-- /Page Content -->
   
</div>
<!-- /Page Wrapper -->
@endsection

@section('script')

<script>
    // $(document).on('click','.answer'),function(){
    //     alert(1);
    // }
    $('.answer').click(function(){
        var who_is = $(this).attr('data-whoid');
        // console.log(who_is);
        $('#who_is').val(who_is);

    })
</script>
    
@endsection