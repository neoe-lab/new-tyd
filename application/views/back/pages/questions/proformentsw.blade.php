@extends('back.layouts.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Form Mask</h3>
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
                            <h4 class="card-title mb-0">แบบประเมินสมรรถนะ</h4>
                            <p class="card-text">คำชี้แจง :	สมรรถนะมีทั้งหมด 9 ข้อ ก่อนทำการประเมินสมรรถนะ ให้ท่านสังเกตระดับของผู้ถูกประเมินก่อนว่าอยู่ในระดับใด และให้ประเมินคะแนนถึงสีที่กำหนดเท่านั้น</p>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="from-group">
                                    <h4>ระดับที่ 1 : แสดงความมุ่งมั่นและกระตือรือร้นที่จะปฏิบัติราชการให้ดี(แสดงความพยายามในการทำงานให้ดี)</h4>

                                </div>
                                <div class="form-group">
                                    <label>1.1 มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[]"> 1
                                            <input type="radio" name="radio[]"> 2
                                            <input type="radio" name="radio[]"> 3
                                            <input type="radio" name="radio[]"> 4
                                            <input type="radio" name="radio[]"> 5
                                            <input type="radio" name="radio[]"> 6
                                            <input type="radio" name="radio[]"> 7
                                            <input type="radio" name="radio[]"> 8
                                            <input type="radio" name="radio[]"> 9
                                            <input type="radio" name="radio[]"> 10                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>1.2มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[]"> 1
                                            <input type="radio" name="radio[]"> 2
                                            <input type="radio" name="radio[]"> 3
                                            <input type="radio" name="radio[]"> 4
                                            <input type="radio" name="radio[]"> 5
                                            <input type="radio" name="radio[]"> 6
                                            <input type="radio" name="radio[]"> 7
                                            <input type="radio" name="radio[]"> 8
                                            <input type="radio" name="radio[]"> 9
                                            <input type="radio" name="radio[]"> 10                                            
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>1.3 มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[]"> 1
                                            <input type="radio" name="radio[]"> 2
                                            <input type="radio" name="radio[]"> 3
                                            <input type="radio" name="radio[]"> 4
                                            <input type="radio" name="radio[]"> 5
                                            <input type="radio" name="radio[]"> 6
                                            <input type="radio" name="radio[]"> 7
                                            <input type="radio" name="radio[]"> 8
                                            <input type="radio" name="radio[]"> 9
                                            <input type="radio" name="radio[]"> 10                                            
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>1.4 มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[]"> 1
                                            <input type="radio" name="radio[]"> 2
                                            <input type="radio" name="radio[]"> 3
                                            <input type="radio" name="radio[]"> 4
                                            <input type="radio" name="radio[]"> 5
                                            <input type="radio" name="radio[]"> 6
                                            <input type="radio" name="radio[]"> 7
                                            <input type="radio" name="radio[]"> 8
                                            <input type="radio" name="radio[]"> 9
                                            <input type="radio" name="radio[]"> 10                                            
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>1.5 มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[0]"> 1
                                            <input type="radio" name="radio[0]"> 2
                                            <input type="radio" name="radio[0]"> 3
                                            <input type="radio" name="radio[0]"> 4
                                            <input type="radio" name="radio[0]"> 5
                                            <input type="radio" name="radio[0]"> 6
                                            <input type="radio" name="radio[0]"> 7
                                            <input type="radio" name="radio[0]"> 8
                                            <input type="radio" name="radio[0]"> 9
                                            <input type="radio" name="radio[0]"> 10                                            
                                        </label>
                                    </div>

                                    <label>1.6 มานะ อดทน ขยันหมั่นเพียรในการทำงาน</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio[1]"> 1
                                            <input type="radio" name="radio[1]"> 2
                                            <input type="radio" name="radio[1]"> 3
                                            <input type="radio" name="radio[1]"> 4
                                            <input type="radio" name="radio[1]"> 5
                                            <input type="radio" name="radio[1]"> 6
                                            <input type="radio" name="radio[1]"> 7
                                            <input type="radio" name="radio[1]"> 8
                                            <input type="radio" name="radio[1]"> 9
                                            <input type="radio" name="radio[1]"> 10                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-success" href="">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                




                                {{-- <div class="from-group">

                                    <button class="btn btn-success" type="submit">save</button>
                                </div> --}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>			
    </div>
    <!-- /Page Wrapper -->
@endsection