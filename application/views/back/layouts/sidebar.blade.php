{{-- @section('sidebar') --}}
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    @php
                        // $ci = &get_instance();
                        $main_menu = main_menu();
                    @endphp
                    <span>เมนู</span>
                </li>
                @foreach ($main_menu as $main)
                    @php
                        $sub_menu = sub_menu($main->id);
                    @endphp
                    @if ($sub_menu)
                        <li class="submenu">
                            <a href="#"><i class="{{$main->icon}}"></i> <span>{{ $main->menu_name }}</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">

                                @foreach ($sub_menu as $sub)
                                    @if ($sub->parent_id == $main->id)
                                        <li><a class="{{ $sub->url == $ci->uri->segment(1, 0) . $ci->uri->slash_segment(2, 'leading'). $ci->uri->slash_segment(3, 'leading') ? 'active' : '' }}"
                                                href="{{ base_url($sub->url) }}">{{ $sub->menu_name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="{{ $main->url == $ci->uri->segment(1, 0) . $ci->uri->slash_segment(2, 'leading') ? 'active' : '' }}">
                            <a href="{{ base_url($main->url) }}"><i class="{{$main->icon}}"></i>
                                <span>{{ $main->menu_name }}</span></a>
                        </li>
                    @endif


                @endforeach



                {{-- logout --}}
                {{-- <li class="active">
                    <a href="{{ base_url('auth/logout') }}"><i class="la la-sign-out"></i> <span>ออกจากระบบ</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
{{-- @endsection --}}
