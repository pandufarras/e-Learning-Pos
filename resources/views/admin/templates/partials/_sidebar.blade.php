<!-- menu -->
        <div class="page-menu">
            <!-- btn close on small devices -->
            <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
            <!-- traiger btn -->
            <span class="btn-menu-trigger" uk-toggle="target: .page-menu ; cls: menu-large"></span>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="{{ route('admin.index') }}"> <i class=" uil-graduation-hat"></i> <span> {{ config('app.name') }}</span> </a>
            </div>
            <div class="page-menu-inner" data-simplebar>
                <ul class="mt-0">
                    <li><a href="{{ route('admin.index') }}"><i class="uil-home-alt"></i> <span> Dashboard</span></a> </li>
                    <li><a href="#"><i class="uil-youtube-alt"></i> <span> Courses (coming soon)</span></a> </li>
                    <li><a href="students.html"><i class="uil-users-alt"></i> <span> Employees (coming soon)</span></a> </li>
                    <li><a href="instructures.html"><i class="uil-graduation-hat"></i> <span> Instructers (coming soon)</span></a>
                    </li>
                    <li><a href="{{ route('category.index') }}"><i class="uil-tag-alt"></i> <span> Catagories</span></a> </li>
                    <li><a href="#"><i class="uil-file-alt"></i> <span> Blogs (coming soon)</span></a> </li>
                    <li><a href="#"><i class="uil-layers"></i> <span> Pages (coming soon)</span></a> </li>
                    <li><a href="#"><i class="uil-chart-line"></i> <span> Report( coming soon)</span></a> </li>
                    <li><a href="#"><i class="uil-question-circle"></i> <span> Help (coming soon)</span></a> </li>
                </ul>

                <ul data-submenu-title="Setting">
                    <li><a href="setting.html"><i class="uil-cog"></i> <span> General (coming soon) </span></a> </li>
                    <li><a href="setting.html"><i class="uil-edit-alt"></i> <span> Site (coming soon) </span></a> </li>
                    <li class="#"><a href="#"><i class="uil-layers"></i> <span> simple link (coming soon)
                            </span></a>
                        <ul>
                            <li><a href="#"> simple link (coming soon) <span class="nav-tag">3</span></a>
                            </li>
                            <li><a href="#"> simple link (coming soon) </a></li>
                        </ul>
                    </li>
                    <li><a href="login.html"><i class="uil-sign-out-alt"></i> <span> Sign-out</span></a> </li>
                </ul>

            </div>
        </div>
