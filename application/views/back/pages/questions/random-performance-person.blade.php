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
                    <h3 class="page-title">แบบประเมินสมรรถนะของเพื่อน</h3>
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
                        <a href="{{base_url('backend/questions/questions_performance_person/')}}{{$person->who_id.'/'.$person->by_id.'/1'}}" class="avatar"><img alt="" src={{base_url('assets/back/img/profiles/avatar-19.jpg')}}></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                    </div>
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{base_url('backend/questions/questions_performance_person/5/4')}}">{{$person->who_is}}</a></h4>
                    <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{base_url('backend/questions/questions_performance_person/5/4')}}">คะแนน</a></h5>
                    {{-- <div class="text-success">{{($person->totalscore != null ? $person->totalscore : 'ยังไม่ได้ประเมิน')}}</div> --}}
                    <div class="{{($person->active != 0 ? 'text-success' : 'text-danger')}}">{{($person->active != 0 ? 'ประเมินแล้ว' : 'ยังไม่ได้ประเมิน')}}</div>
                    <a href="" class="btn btn-success btn-sm m-t-10 {{($person->active != 0 ? 'disabled' : '')}}">ทำแบบประเมิน</a>
                </div>
            </div>   
            @endforeach
         
        </div>


    </div>
    <!-- /Page Content -->
   
</div>
<!-- /Page Wrapper -->
@endsection