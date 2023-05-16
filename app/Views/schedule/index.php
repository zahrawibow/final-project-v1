<?= $this->extend('layouts/index'); ?>
<?= $this->section('content'); ?>

<!-- Main content dashboard -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

    <!-- Header page start-->
    <nav class="navbar navbar-main navbar-expand-lg blur position-sticky mt-4 top-1 px-0 mx-4 border-radius-xl z-index-sticky shadow-none" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="/">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-dark" href="javascript:;">Halaman</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        Agenda Kegiatan
                    </li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Agenda Kegiatan Laboratorium</h6>
            </nav>


            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <!-- search bar -->
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)" />
                    </div>
                </div>

                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html" class="nav-link font-weight-bold px-0 text-body" target="_blank">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Profil</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li> -->
                    <!-- notifikasi -->
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./dashboard_files/team-2.jpg" class="avatar avatar-sm me-3" alt="user image" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span>
                                                from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./dashboard_files/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3" alt="logo spotify" />
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by
                                                Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header Page end-->


    <div class="container-fluid py-4">
        <div class="row gx-4">
            <div class="col-lg-8">
                <div class="card widget-calendar">
                    <div class="card-header p-3 pb-0">
                        <h6 class="mb-0">Calendar</h6>
                        <div class="d-flex">
                            <div class="p text-sm font-weight-bold mb-0 widget-calendar-day">
                                Wednesday
                            </div>
                            <span>,&nbsp;</span>
                            <div class="p text-sm font-weight-bold mb-1 widget-calendar-year">
                                2023
                            </div>
                        </div>
                        <hr class="horizontal dark mb-0" />
                    </div>

                    <!-- <div class="card-body">
                        <div data-toggle="widget-calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                            <div class="fc-view-harness fc-view-harness-passive">
                                <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                    <table class="fc-scrollgrid">

                                        <thead>
                                            <tr class="fc-scrollgrid-section fc-scrollgrid-section-header col-lg-8">
                                                <td>
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: visible">
                                                            <table class="fc-col-header" style="width: 389px">
                                                                <colgroup></colgroup>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Sun</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Mon</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Tue</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Wed</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Thu</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Fri</a>
                                                                            </div>
                                                                        </th>
                                                                        <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                            <div class="fc-scrollgrid-sync-inner">
                                                                                <a class="fc-col-header-cell-cushion">Sat</a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="fc-scrollgrid-section fc-scrollgrid-section-body">
                                                <td>
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: visible">
                                                            <div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural" style="width: 389px">
                                                                <table class="fc-scrollgrid-sync-table" style="width: 389px">
                                                                    <colgroup></colgroup>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2020-11-29">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">29</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-success">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                All day conference
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other" data-date="2020-11-30">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">30</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2020-12-01">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">1</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Meeting with Mary
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2020-12-02">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">2</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Cyber Week
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2020-12-03">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">3</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Winter Hackaton
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2020-12-04">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">4</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2020-12-05">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">5</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2020-12-06">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">6</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2020-12-07">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">7</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events" style="padding-bottom: 29.125px">
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="right: -55.5625px">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Digital event
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2020-12-08">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">8</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events" style="padding-bottom: 29.125px"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2020-12-09">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">9</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2020-12-10">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">10</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-primary">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Marketing event
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2020-12-11">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">11</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2020-12-12">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">12</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2020-12-13">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">13</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2020-12-14">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">14</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2020-12-15">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">15</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2020-12-16">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">16</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2020-12-17">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">17</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2020-12-18">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">18</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2020-12-19">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">19</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Dinner with Family
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2020-12-20">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">20</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2020-12-21">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">21</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2020-12-22">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">22</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2020-12-23">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">23</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness">
                                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info">
                                                                                                <div class="fc-event-main">
                                                                                                    <div class="fc-event-main-frame">
                                                                                                        <div class="fc-event-title-container">
                                                                                                            <div class="fc-event-title fc-sticky">
                                                                                                                Black Friday
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2020-12-24">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">24</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2020-12-25">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">25</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2020-12-26">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">26</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2020-12-27">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">27</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2020-12-28">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">28</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2020-12-29">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">29</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2020-12-30">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">30</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2020-12-31">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">31</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other" data-date="2021-01-01">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">1</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other" data-date="2021-01-02">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">2</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2021-01-03">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">3</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other" data-date="2021-01-04">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">4</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other" data-date="2021-01-05">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">5</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other" data-date="2021-01-06">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">6</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other" data-date="2021-01-07">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">7</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other" data-date="2021-01-08">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">8</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past fc-day-other" data-date="2021-01-09">
                                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top">
                                                                                        <a class="fc-daygrid-day-number">9</a>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-events"></div>
                                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card bg-gradient-dark">
                    <div class="card-header bg-transparent pb-0">
                        <h6 class="text-white">Timeline dark with dashed line</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dashed">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        $2400, Design changes
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        22 DEC 7:20 PM
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-success">Design</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-html5 text-danger text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        New order #1832412
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        21 DEC 11 PM
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-danger">Order</span>
                                    <span class="badge badge-sm bg-gradient-danger">#1832412</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-cart text-info text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        Server payments for April
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        21 DEC 9:34 PM
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-info">Server</span>
                                    <span class="badge badge-sm bg-gradient-info">Payments</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-credit-card text-warning text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        New card added for order #4395133
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        20 DEC 2:20 AM
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Card</span>
                                    <span class="badge badge-sm bg-gradient-warning">#4395133</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>

                            <!-- <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-key-25 text-primary text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        Unlock packages for development
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        18 DEC 4:54 AM
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-primary">Development</span>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-archive-2 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        New message unread
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        16 DEC
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-success">Message</span>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-check-bold text-info text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        Notifications unread
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        15 DEC
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-box-2 text-warning text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        New request
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        14 DEC
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Request</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <span class="timeline-step bg-dark">
                                    <i class="ni ni-controller text-white"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-white text-sm font-weight-bold mb-0">
                                        Controller issues
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                        13 DEC
                                    </p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think,
                                        what motivates you, what you’re struggling with or
                                        afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-dark">Controller</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        2023, made with
                        <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>


</main>
<?= $this->endSection(); ?>