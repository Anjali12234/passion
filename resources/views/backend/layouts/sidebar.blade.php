<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ officeSetting()->institute_logo ??'' }}" alt="" class="dark-logo" />
            <img src="{{ officeSetting()->institute_logo ??''}}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.about.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">About</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.course.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Course</span>
                    </a>

                </li>
                <li>
                    <a href="{{ route('admin.service.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Service</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.slider.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-archive"></span><span class="mtext"> Slider </span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.testimonial.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-command"></span><span class="mtext">Testimonial</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.staff.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Staff</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Student</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{ route('admin.popUp.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-bug"></span
                        ><span class="mtext">Pop Up</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
