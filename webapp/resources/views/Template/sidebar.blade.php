<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('formexcel') ? 'active' : '' }}" href="{{ route('formexcel') }}">
                <i class="bi bi-journal-text"></i>
                <span>Form Excel</span>
            </a>
        </li><!-- End Form Excel Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('navigationaudit', 'cargooperation', 'mooringoperation', 'engineeringaudit', 'superintendentvisit', 'circular', 'mwt', 'negativefeedback') ? 'active' : '' }}"
                data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Chart (SMS)</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('navigationaudit') }}">
                        <i class="bi bi-circle"></i><span>Navigation Audit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cargooperation') }}">
                        <i class="bi bi-circle"></i><span>Cargo Operation</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mooringoperation') }}">
                        <i class="bi bi-circle"></i><span>Mooring Operation</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('engineeringaudit') }}">
                        <i class="bi bi-circle"></i><span>Engineering Audit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('superintendentvisit') }}">
                        <i class="bi bi-circle"></i><span>Superintendent Visit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('circular') }}">
                        <i class="bi bi-circle"></i><span>Circular</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mwt') }}">
                        <i class="bi bi-circle"></i><span>MWT</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('negativefeedback') }}">
                        <i class="bi bi-circle"></i><span>Negative Feedback</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('incidentrecord', 'investigationrecord', 'bjst', 'psc', 'cdi', 'sirre', 'internalaudit', 'uauc', 'ohsisftmt', 'coc') ? 'active' : '' }}"
                data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Chart (QSE)</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('incidentrecord') }}">
                        <i class="bi bi-circle"></i><span>Incident Record</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('investigationrecord') }}">
                        <i class="bi bi-circle"></i><span>Investigation Record</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bjst') }}">
                        <i class="bi bi-circle"></i><span>BJST</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('psc') }}">
                        <i class="bi bi-circle"></i><span>PSC</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cdi') }}">
                        <i class="bi bi-circle"></i><span>CDI</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sirre') }}">
                        <i class="bi bi-circle"></i><span>Sire</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('internalaudit') }}">
                        <i class="bi bi-circle"></i><span>Internal Audit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('uauc') }}">
                        <i class="bi bi-circle"></i><span>UAUC</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ohsisftmt') }}">
                        <i class="bi bi-circle"></i><span>OSHI - Safety Meeting</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('coc') }}">
                        <i class="bi bi-circle"></i><span>COC</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-heading">Pages</li>

        @if (Auth::check() && Auth::user()->type === 'admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('userdate') }}">
                    <i class="bi bi-person"></i>
                    <span>Manage User</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Sign Out</span>
            </a>
        </li><!-- End Register Page Nav -->

    </ul>
</aside><!-- End Sidebar-->
