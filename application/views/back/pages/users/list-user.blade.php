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
                        <h3 class="page-title">Clients</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn"><i
                                class="fa fa-plus"></i> Add Client</a>
                        <div class="view-icons">
                            <a href="clients.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                            <a href="clients-list.html" class="list-view btn btn-link active"><i
                                    class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->



            <!-- Search Filter -->
            <div class="row filter-row">
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
            </div>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        {{-- <table id="user_data" class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>แผนก</th>
                                </tr>
                            </thead>
                        </table> --}}
                        <table id="user_data" class="table table-striped custom-table">
                            <thead>
                                <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ที่อยู่</th>
                                </tr>
                            </thead>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Client Modal -->
        {{-- <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">เพิ่มผู้ใช้งาน</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        
                                        <label class="col-form-label">คำนำหน้า<span class="text-danger">*</span></label>
                                        <select class="form-control">
                                            <option>- เลือก -</option>
                                            <option>นาย</option>
                                            <option>นาง</option>
                                            <option>นางสาว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="col-form-label">ชื่อ</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="col-form-label">นามสกุล</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">แผนก</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">ตำแหน่ง</label>
                                        <input class="form-control floating" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">E-mail</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">เบอร์ติดต่อ</label>
                                        <input class="form-control floating" type="email">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label">ที่อยู่</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Username</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control floating" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">status</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /Add Client Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection

@section('script')
{{-- @if (isset($datatable))
@php
    $this->load->view('back.pages.'.$datatable);
@endphp
@endif    --}}

<script type="text/javascript">

    let dataTable;
 
   // Show Table
    $(document).ready(function(){
        dataTable = $('#user_data').DataTable({
          processing: true,
          serverSide: true,
          order: [],
          ajax: {
             'url' : "{{base_url('backend/users/ajax_list')}}",
             'type' : "POST"
          },
          columnDefs: [
             { 
                'targets': [ 0, -1 ], 
                'orderable': false, 
             }
          ],
       });

    });
 </script>
@endsection
