@php
    $activeClassFormExcel = Request::is('formexcel', 'Import1', 'Import2', 'Import3', 'Import4', 'Import5', 'Import6', 'Import7', 'Import8', 'Import9', 'Import10', 'Import11', 'Import12', 'Import13', 'Import14', 'Import15', 'Import16', 'Import17', 'Import18') ? 'active' : '';
    $activeClassSMS = Request::is('navigationaudit', 'cargooperation', 'mooringoperation', 'engineeringaudit', 'superintendentvisit', 'circular', 'mwt', 'negativefeedback') ? 'active' : '';
    $activeClassQSE = Request::is('incidentrecord', 'investigationrecord', 'bjst', 'psc', 'cdi', 'sirre', 'internalaudit', 'uauc', 'ohsisftmt', 'coc') ? 'active' : '';
    $showClassSMS = Request::is('navigationaudit', 'cargooperation', 'mooringoperation', 'engineeringaudit', 'superintendentvisit', 'circular', 'mwt', 'negativefeedback') ? 'show' : '';
    $showClassQSE = Request::is('incidentrecord', 'investigationrecord', 'bjst', 'psc', 'cdi', 'sirre', 'internalaudit', 'uauc', 'ohsisftmt', 'coc') ? 'show' : '';
@endphp

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
            <a class="nav-link {{ $activeClassFormExcel }}" href="{{ route('formexcel') }}">
                <i class="bi bi-journal-text"></i>
                <span>Form Excel</span>
            </a>
        </li><!-- End Form Excel Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $activeClassSMS }}" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Chart (SMS)</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse {{ $showClassSMS }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-content {{ Request::is('navigationaudit') ? 'active' : '' }}"
                        href="{{ route('navigationaudit') }}">
                        <i class="bi bi-circle"></i><span>Navigation Audit</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('cargooperation') ? 'active' : '' }}"
                        href="{{ route('cargooperation') }}">
                        <i class="bi bi-circle"></i><span>Cargo Operation</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('mooringoperation') ? 'active' : '' }}"
                        href="{{ route('mooringoperation') }}">
                        <i class="bi bi-circle"></i><span>Mooring Operation</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('engineeringaudit') ? 'active' : '' }}"
                        href="{{ route('engineeringaudit') }}">
                        <i class="bi bi-circle"></i><span>Engineering Audit</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('superintendentvisit') ? 'active' : '' }}"
                        href="{{ route('superintendentvisit') }}">
                        <i class="bi bi-circle"></i><span>Superintendent Visit</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('circular') ? 'active' : '' }}"
                        href="{{ route('circular') }}">
                        <i class="bi bi-circle"></i><span>Circular</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('mwt') ? 'active' : '' }}" href="{{ route('mwt') }}">
                        <i class="bi bi-circle"></i><span>MWT</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('negativefeedback') ? 'active' : '' }}"
                        href="{{ route('negativefeedback') }}">
                        <i class="bi bi-circle"></i><span>Negative Feedback</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link {{ $activeClassQSE }}" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                href="#">
                <i class="bi bi-bar-chart"></i><span>Chart (QSE)</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse {{ $showClassQSE }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-content {{ Request::is('incidentrecord') ? 'active' : '' }}"
                        href="{{ route('incidentrecord') }}">
                        <i class="bi bi-circle"></i><span>Incident Record</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('investigationrecord') ? 'active' : '' }}"
                        href="{{ route('investigationrecord') }}">
                        <i class="bi bi-circle"></i><span>Investigation Record</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('bjst') ? 'active' : '' }}" href="{{ route('bjst') }}">
                        <i class="bi bi-circle"></i><span>BJST</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('psc') ? 'active' : '' }}" href="{{ route('psc') }}">
                        <i class="bi bi-circle"></i><span>PSC</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('cdi') ? 'active' : '' }}" href="{{ route('cdi') }}">
                        <i class="bi bi-circle"></i><span>CDI</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('sirre') ? 'active' : '' }}" href="{{ route('sirre') }}">
                        <i class="bi bi-circle"></i><span>Sire</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('internalaudit') ? 'active' : '' }}"
                        href="{{ route('internalaudit') }}">
                        <i class="bi bi-circle"></i><span>Internal Audit</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('uauc') ? 'active' : '' }}" href="{{ route('uauc') }}">
                        <i class="bi bi-circle"></i><span>UAUC</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('ohsisftmt') ? 'active' : '' }}"
                        href="{{ route('ohsisftmt') }}">
                        <i class="bi bi-circle"></i><span>OSHI - Safety Meeting</span>
                    </a>
                </li>
                <li>
                    <a class="nav-content {{ Request::is('coc') ? 'active' : '' }}" href="{{ route('coc') }}">
                        <i class="bi bi-circle"></i><span>COC</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-heading">Options</li>

        @if (Auth::check() && Auth::user()->type === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('userdate') ? 'active' : '' }}" href="{{ route('userdate') }}">
                    <i class="bi bi-person"></i>
                    <span>Manage User</span>
                </a>
            </li>
        @endif
        <!-- End Manage User Nav -->

        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a id="logout-link" class="nav-link" href="#">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Sign Out</span>
            </a>
        </li>


    </ul>
</aside><!-- End Sidebar-->
