@extends('back.layouts.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">แบบประเมินสมรรถภาพ</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Mask</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h4 class="card-title mb-0">แบบประเมินสมรรถภาพ</h4>
                            <p class="card-text">คำชี้แจง : โปรดเลือกช่องคะแนน ในช่อง "พฤติกกรมที่ปรากฏ"
                                ตามความเป็นจริงในแต่ละหัวข้อของพฤติกรรม</p>
                                {{-- <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div> --}}
                        </div>
                        <div class="card-body">
                            <form class="was-validated" action="{{ base_url('backend/questions/answersbehavior') }}"
                                method="POST">
                                @php
                                    $i = 0;
                                @endphp
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

                                                    <div class="
                                                        custom-radio">
                                                        {{-- <div class="custom-control custom-radio"> --}}
                                                        {{-- <label> --}}
                                                        {{-- {{$titles->type_id}}
                                                        {{$question->id}} --}}
                                                        {{-- <input type="hidden" name="type_form[{{ $i }}]" value="{{ $titles->type_id }}"> --}}
                                                        <input type="hidden" name="question_number[{{ $i }}]"
                                                            value="{{ $question->id }}">
                                                        {{-- </label> --}}
                                                        <label>
                                                            <input type="hidden" name="who_is[]"
                                                                value="{{ $who_is }}">
                                                            {{-- <input type="hidden" name="by_is[]" value="{{$by_is}}"> --}}
                                                        </label>
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

        </div>





       

    </div>
    <!-- /Page Wrapper -->
@endsection

@section('script')
    <!-- Form Validation JS -->
    <script src={{ base_url('assets/back/js/form-validation.js') }}> </script>

@endsection
