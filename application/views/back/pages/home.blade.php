   @extends('back.layouts.app')
   @section('content')
          <!-- Page Wrapper -->
          <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">ยินดีตอนรับ </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon  text-success"><i class="la la-users"></i></span>
                                <div class="dash-widget-info">
                                    <h3 class="text-danger">2 / 3</h3>
                                    <span>เพื่อนที่ประเมินแล้ว</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                                <div class="dash-widget-info">
                                    <h3>44</h3>
                                    <span>Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                                <div class="dash-widget-info">
                                    <h3>37</h3>
                                    <span>Tasks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                                <div class="dash-widget-info">
                                    <h3>218</h3>
                                    <span>Employees</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->  
    @endsection
    
{{-- @section('script')
    	<!-- Datatable JS -->
	<script src={{ base_url('assets/back/js/jquery.dataTables.min.js') }}></script>
	<script src={{ base_url('assets/back/js/dataTables.bootstrap4.min.js') }}></script>		
	<!-- Custom JS -->
	<script src={{ base_url('assets/back/js/app.js') }}></script>
@endsection --}}