{{-- @section('sidebar') --}}
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>หน้าหลัก</span>
                        </li>
                        {{-- <li class="submenu">
                            <a href="#"><i class="la la-dashboard"></i> <span> เดชบอร์ด</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="active" href="index.html">แอดมิน Dashboard</a></li>
                            </ul>
                        </li> --}}

                        <li class="active"> 
                            <a href="{{base_url('backend/dashboard')}}" ><i class="la la-dashboard"></i> <span>เดชบอร์ด</span></a>
                        </li>
                        <li class="menu-title">
                            <span>ตั้งค่า</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-users"></i> <span> พนังงาน</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="index.html">ผู้ใช้งาน</a></li>
                                <li><a class="" href="index.html">แผนก</a></li>
                                <li><a class="" href="index.html">ตำแหน่ง</a></li>
                                <li><a class="" href="index.html">สิทธิการเข้าถึง</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-file-text"></i> <span>แบบประเมิน</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="index.html">รอบการประเมิน</a></li>
                                <li><a class="" href="index.html">หัวข้อการประเมิน</a></li>
                                <li><a class="" href="{{base_url('backend/questions')}}">คำถามการประเมิน</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-bar-chart"></i> <span> ผลการประเมิน</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="index.html">ผู้ใช้งาน</a></li>
                                <li><a class="" href="index.html">แผนก</a></li>
                                <li><a class="" href="index.html">ตำแหน่ง</a></li>
                                <li><a class="" href="index.html">สิทธิการเข้าถึง</a></li>
                            </ul>
                        </li>
                        {{-- User --}}
                        <li class="menu-title">
                            <span>ผู้ใช้งาน</span>
                        </li>
                        <li> 
                            <a href="{{base_url('backend/profiles')}}"><i class="la la-user"></i> <span>ประวัติส่วนตัว</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-file-text"></i> <span>ประเมินตนเอง</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                @php
                                    $class_id = 2;
                                @endphp
                                <li><a class="" href="{{base_url('backend/questions/randomPerson')}}{{$class_id}}">แบบประเมินสมรรถนะ</a></li>
                                <li><a class="" href="{{base_url('backend/questions/randomPerson')}}">แบบประเมินสมรรถภาพ</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-file-pdf-o"></i> <span>ประเมินเพื่อนร่วมงาน</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="" href="{{base_url('backend/questions/random_performance_Person')}}">แบบประเมินสมรรถนะ</a></li>
                                <li><a class="" href="{{base_url('backend/questions/random_behavior_person')}}">แบบประเมินสมรรถภาพ</a></li>
                            </ul>
                        </li>
                        {{-- end User --}}

                        {{-- logout --}}
                        <li class="active"> 
                            <a href="{{base_url('auth/logout')}}" ><i class="la la-sign-out"></i> <span>ออกจากระบบ</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
{{-- @endsection --}}