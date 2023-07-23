{{-- <!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    @yield('title')
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('admin/assets/Home.css')}}">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

    @yield('inlinecss')

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

            
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
                    id="kt_app_header_container">

                    <!--begin::Sidebar mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                    </div>
                    <!--end::Sidebar mobile toggle-->


                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="../index.html" class="d-lg-none">
                            <img alt="Logo" src="{{asset('admin/assets/media/logos/default-small.svg')}}" class="h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->

                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">

                        <!--begin::Menu wrapper-->
                        <div class="
                            app-header-menu 
                            app-header-mobile-drawer 
                            align-items-stretch
                        " data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="
                                    menu 
                                    menu-rounded  
                                    menu-column 
                                    menu-lg-row 
                                    my-5 
                                    my-lg-0 
                                    align-items-stretch 
                                    fw-semibold
                                    px-2 px-lg-0
                                " id="kt_app_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link--><span class="menu-link"><span
                                            class="menu-title">Home</span><span
                                            class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                        <!--begin:Dashboards menu-->

                                        <!--end:Dashboards menu-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="bottom-start"
                                    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <!--begin:Menu link--><span class="menu-link"><span
                                            class="menu-title">Contact</span><span
                                            class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                        <!--begin:Dashboards menu-->

                                        <!--end:Dashboards menu-->
                                    </div><!--end:Menu sub-->
                                </div>

                                <!--end:Dashboards menu-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item--><!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link--><!--end:Menu link--><!--begin:Menu sub-->
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                <!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="../base/utilities"
                                        target="_blank"
                                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right"><span class="menu-icon"><i
                                                class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i></span><span
                                            class="menu-title">Components</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="https://preview.keenthemes.com/html/metronic/docs" target="_blank"
                                        title="Check out the complete documentation" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span
                                            class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span
                                                    class="path1"></span><span class="path2"></span></i></span><span
                                            class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="../getting-started/changelog"
                                        target="_blank"><span class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i></span><span
                                            class="menu-title">Changelog v8.1.8</span></a><!--end:Menu link--></div>
                                <!--end:Menu item-->
                            </div><!--end:Menu sub-->
                        </div><!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->


                <!--begin::Navbar-->
                <div class="app-navbar flex-shrink-0">
                    <!--begin::Search-->
                    <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">

                        <!--begin::Search-->
                        <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                            data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                            data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                            data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                            <!--begin::Search toggle-->
                            <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                id="kt_header_search_toggle">
                                <div
                                    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                    <i class="ki-duotone ki-magnifier fs-2 fs-lg-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                            </div>
                            <!--end::Search toggle-->

                            <!--begin::Menu-->
                            <div data-kt-search-element="content"
                                class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                <!--begin::Wrapper-->
                                <div data-kt-search-element="wrapper">
                                    <!--begin::Form-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                        autocomplete="off">
                                        <!--begin::Icon-->
                                        <i
                                            class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span
                                                class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                        <!--begin::Input-->
                                        <input type="text" class="search-input  form-control form-control-flush ps-10"
                                            name="search" value="" placeholder="Search..."
                                            data-kt-search-element="input" />
                                        <!--end::Input-->

                                        <!--begin::Spinner-->
                                        <span
                                            class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                            data-kt-search-element="spinner">
                                            <span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->

                                        <!--begin::Reset-->
                                        <span
                                            class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                            data-kt-search-element="clear">
                                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Reset-->

                                        <!--begin::Toolbar-->
                                        <div class="position-absolute top-50 end-0 translate-middle-y"
                                            data-kt-search-element="toolbar">
                                            <!--begin::Preferences toggle-->
                                            <div data-kt-search-element="preferences-show"
                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                data-bs-toggle="tooltip" title="Show search preferences">
                                                <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!--end::Preferences toggle-->

                                            <!--begin::Advanced search toggle-->
                                            <div data-kt-search-element="advanced-options-form-show"
                                                class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                data-bs-toggle="tooltip" title="Show more search options">
                                                <i class="ki-duotone ki-down fs-2"></i>
                                            </div>
                                            <!--end::Advanced search toggle-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </form>
                                    <!--end::Form-->

                                    <!--begin::Separator-->
                                    <div class="separator border-gray-200 mb-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Recently viewed-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-350px">
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0  pb-5"
                                                data-kt-search-element="category-title">
                                                Users </h3>
                                            <!--end::Category title-->




                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="{{asset('admin/assets/media/avatars/300-6.jpg')}}" alt="" />
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Karina Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="{{asset('admin/assets/media/avatars/300-2.jpg')}}" alt="" />
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                    <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="{{asset('admin/assets/media/avatars/300-9.jpg')}}" alt="" />
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Ana Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="{{asset('admin/assets/media/avatars/300-14.jpg')}}" alt="" />
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                    <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="{{asset('admin/assets/media/avatars/300-11.jpg')}}" alt="" />
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                    <span class="fs-7 fw-semibold text-muted">System
                                                        Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                data-kt-search-element="category-title">
                                                Customers </h3>
                                            <!--end::Category title-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="{{asset('admin/assets/media/svg/brand-logos/volicity-9.svg')}}"
                                                            alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="{{asset('admin/assets/media/svg/brand-logos/tvit.svg')}}" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="{{asset('admin/assets/media/svg/misc/infography.svg')}}" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                    <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="{{asset('admin/assets/media/svg/brand-logos/leaf.svg')}}" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                            src="{{asset('admin/assets/media/svg/brand-logos/tower.svg')}}" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                    <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->

                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                data-kt-search-element="category-title">
                                                Projects </h3>
                                            <!--end::Category title-->


                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                        Discussion</span>
                                                    <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->



                                            <!--begin::Item-->
                                            <a href="#"
                                                class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->


                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Recently viewed-->
                                    <div class="mb-5" data-kt-search-element="main">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-stack fw-semibold mb-4">
                                            <!--begin::Label-->
                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                            <!--end::Label-->

                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-325px">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-laptop fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                        by CoachOnCouch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                        API Project Meeting</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                        Monitoring App Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                        Reference FAQ</a>
                                                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                        App Development</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                        Mobile App</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                        UI Design" Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Icon-->
                                        <div class="pt-10 pb-10">
                                            <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Message-->
                                        <div class="pb-15 fw-semibold">
                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Preferences-->
                                <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" class="form-control form-control-sm form-control-solid"
                                            placeholder="Contains the word" name="query" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="has"
                                                    checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                    All
                                                </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="users" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Users
                                                </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="orders" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Orders
                                                </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="projects" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Projects
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="assignedto"
                                            class="form-control form-control-sm form-control-solid"
                                            placeholder="Assigned to" value="" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="collaborators"
                                            class="form-control form-control-sm form-control-solid"
                                            placeholder="Collaborators" value="" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="has"
                                                    checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                    Has attachment
                                                </span>
                                            </label>
                                            <!--end::Option-->

                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="any" />
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Any
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                            data-dropdown-parent="#kt_header_search" data-placeholder="date_period"
                                            class="form-select form-select-sm form-select-solid">
                                            <option value="next">Within the next</option>
                                            <option value="last">Within the last</option>
                                            <option value="between">Between</option>
                                            <option value="on">On</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="number" name="date_number"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Lenght" value="" />
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="date_typer" aria-label="Select a Timezone"
                                                data-control="select2" data-dropdown-parent="#kt_header_search"
                                                data-placeholder="Period"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="days">Days</option>
                                                <option value="weeks">Weeks</option>
                                                <option value="months">Months</option>
                                                <option value="years">Years</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                            data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                        <a href="../pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary"
                                            data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="pb-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Projects
                                            </span>

                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Targets
                                            </span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Affiliate Programs
                                            </span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Referrals
                                            </span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Users
                                            </span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end pt-7">
                                        <button type="reset"
                                            class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                            data-kt-search-element="preferences-dismiss">Cancel</button>
                                        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                            Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Search-->

                    <!--begin::Activities-->
                    <div class="app-navbar-item ms-1 ms-md-3">
                        <!--begin::Drawer toggle-->

                        <!--end::Drawer toggle-->
                    </div>
                    <!--end::Activities-->

                    <!--begin::Notifications-->
                    <div class="app-navbar-item ms-1 ms-md-3">
                        <!--begin::Menu- wrapper-->


                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                            id="kt_menu_notifications">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                style="background-image:url('{{asset('admin/assets/media/misc/menu-header-bg.jpg')}}">
                                <!--begin::Title-->
                                <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                    Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                </h3>
                                <!--end::Title-->

                                <!--begin::Tabs-->
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                            data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-abstract-28 fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Alice</a>
                                                    <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 hr</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-information fs-2 text-danger"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                        Confidential</a>
                                                    <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-briefcase fs-2 text-warning"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                        HR</a>
                                                    <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-abstract-12 fs-2 text-success"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Redux</a>
                                                    <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-colors-square fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                        Breafing</a>
                                                    <div class="text-gray-400 fs-7">Product launch status update</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="/banner.html"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                        Assets</a>
                                                    <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-color-swatch fs-2 text-warning"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span><span class="path6"></span><span
                                                                class="path7"></span><span class="path8"></span><span
                                                                class="path9"></span><span class="path10"></span><span
                                                                class="path11"></span><span class="path12"></span><span
                                                                class="path13"></span><span class="path14"></span><span
                                                                class="path15"></span><span class="path16"></span><span
                                                                class="path17"></span><span class="path18"></span><span
                                                                class="path19"></span><span class="path20"></span><span
                                                                class="path21"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                        Assets</a>
                                                    <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">20 March</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Items-->

                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../pages/user-profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">
                                            View All
                                            <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                                    class="path2"></span></i> </a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->

                                <!--begin::Tab panel-->
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column px-9">
                                        <!--begin::Section-->
                                        <div class="pt-10 pb-0">
                                            <!--begin::Title-->
                                            <h3 class="text-dark text-center fw-bold">
                                                Get Pro Access
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Text-->
                                            <div class="text-center text-gray-600 fw-semibold pt-1">
                                                Outlines keep you honest. They stoping you from amazing poorly about
                                                drive
                                            </div>
                                            <!--end::Text-->

                                            <!--begin::Action-->
                                            <div class="text-center mt-5 mb-9">
                                                <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img class="mw-100 mh-200px" alt="image"
                                                src="{{asset('admin/assets/media/illustrations/sketchy-1/1.png')}}" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab panel-->

                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                    order</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Just now</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                    customer</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search
                                                    query</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                    connection</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 week</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Database
                                                    restore</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Mar 5</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System
                                                    update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">May 15</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server
                                                    OS update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Apr 3</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                    rollback</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jun 30</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jul 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                    process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Sep 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->

                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                    tasks</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Dec 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Items-->

                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../pages/user-profile/activity.html"
                                            class="btn btn-color-gray-600 btn-active-color-primary">
                                            View All
                                            <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                                    class="path2"></span></i> </a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Menu--> <!--end::Menu wrapper-->
                    </div>
                    <!--end::Notifications-->

                    <!--begin::Chat-->

                    <!--end::Chat-->

                    <!--begin::My apps links-->
                    <div class="app-navbar-item ms-1 ms-md-3">
                        <!--begin::Menu wrapper-->


                        <!--begin::My apps-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">My Apps</div>
                                    <!--end::Card title-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span><span class="path5"></span></i> </button>

                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments
                                                </div>
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Create Invoice
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">
                                                    Create Payment

                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Generate Bill
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Plans
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Billing
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Statements
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->

                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">
                                                                    Recuring
                                                                </span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">
                                                    Settings
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body py-5">
                                    <!--begin::Scroll-->
                                    <div class="mh-450px scroll-y me-n5 pe-5">
                                        <!--begin::Row-->
                                        <div class="row g-2">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/amazon.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">AWS</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/angular-icon-1.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">AngularJS</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/atica.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Atica</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/beats-electronics.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Music</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/codeigniter.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Codeigniter</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/bootstrap-4.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Bootstrap</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/google-tag-manager.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">GTM</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/disqus.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Disqus</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/dribbble-icon-1.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Dribble</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/google-play-store.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Play Store</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/google-podcasts.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Podcasts</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/figma-1.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Figma</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/github.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Github</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/gitlab.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Gitlab</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/instagram-2-1.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Instagram</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <a href="#"
                                                    class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                    <img src="{{asset('admin/assets/media/svg/brand-logos/pinterest-p.svg')}}"
                                                        class="w-25px h-25px mb-2" alt="" />
                                                    <span class="fw-semibold">Pinterest</span>
                                                </a>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::My apps--> <!--end::Menu wrapper-->
                    </div>
                    <!--end::My apps links-->

                    <!--begin::Theme mode-->
                    <div class="app-navbar-item ms-1 ms-md-3">

                        <!--begin::Menu toggle-->

                        <!--begin::Menu toggle-->

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span><span class="path7"></span><span
                                                class="path8"></span><span class="path9"></span><span
                                                class="path10"></span></i> </span>
                                    <span class="menu-title">
                                        Light
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </span>
                                    <span class="menu-title">
                                        Dark
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-0">
                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                    <span class="menu-icon" data-kt-element="icon">
                                        <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i> </span>
                                    <span class="menu-title">
                                        System
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Theme mode-->

                    <!--begin::User menu-->

                    <!--end::User menu-->

                    <!--begin::Header menu toggle-->
                    <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                            id="kt_app_header_menu_toggle">
                            <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                    </div>
                    <!--end::Header menu toggle-->
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>
    <!--end::Header-->

    <!--begin::Wrapper-->
    <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">





        <!--begin::Sidebar-->
        <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
            data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


            <!--begin::Logo-->
            <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                <!--begin::Logo image-->
                <a href="../index.html">
                    <img alt="Logo" src="{{asset('admin/assets/media/logos/coc-logo.png')}}" class="h-25px app-sidebar-logo-default" />

                    <img alt="Logo" src="{{asset('admin/assets/media/logos/coc-logo.png')}}" class="h-20px app-sidebar-logo-minimize" />
                </a>
                <!--end::Logo image-->

                <!--begin::Sidebar toggle-->
                <!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") { 
                1. "src/js/layout/sidebar.js')}}" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
                <div id="kt_app_sidebar_toggle"
                    class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                    data-kt-toggle-name="app-sidebar-minimize">

                    <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <!--end::Sidebar toggle-->
            </div>
            <!--end::Logo-->
            <!--begin::sidebar menu-->
            <div class="app-sidebar-menu overflow-hidden flex-column-fluid">

               

                <!--begin::Menu wrapper-->
                @include('admin.layouts.sidebar')
            </div>

        </div>
        

        @include('admin.layouts.pagehead')
        
        @yield('content')

        <div id="kt_app_footer" class="app-footer ">
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-dark order-2 order-md-1">
    <span class="text-muted fw-semibold me-1 text-center">2023©</span>
    <a href="https://CoachOnCouch.com/" target="_blank" class="text-gray-800 text-hover-primary">CoachOnCouch</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->

<!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>


    </div>

    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->

    <!--end::Modal - Upgrade plan--><!--begin::Modal - Create Project-->
    <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content modal-rounded">
                <!--begin::Modal header-->

                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Nav-->

                            <!--end::Nav-->

                            <!--begin::Form-->
                            <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                                id="kt_modal_create_project_form" method="post">

                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->

                                        <!--end::Heading-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->

                                            <!--end::Label-->

                                            <!--begin::Dialer-->


                                            <!--end::Modal - Create Campaign--><!--begin::Modal - New Target-->
                                            <div class="modal fade" id="kt_modal_bidding" tabindex="-1"
                                                aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content rounded">
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                            <!--begin::Close-->
                                                            <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-kt-modal-action-type="close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <!--begin::Modal header-->

                                                        <!--begin::Modal body-->
                                                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                            <!--begin:Form-->
                                                            <!-- Akshay  -->
                                                            <!--end:Form-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                    </div>
                                                    <!--end::Modal content-->
                                                </div>
                                                <!--end::Modal dialog-->
                                            </div>
                                            <!--end::Modal - New Target--><!--begin::Modal - Users Search-->



                                            <!--begin::Javascript-->
                                            <script>
                                                var hostUrl = "{{route('home')}}"; 
                                            </script>

                                            <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                            <script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>


                                            <script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
                                            <!--end::Global Javascript Bundle-->

                                            <!--begin::Vendors Javascript(used for this page only)-->
                                            <script src="{{asset('admin/assets/plugins/custom/fslightbox/fslightbox.bundle.js')}}"></script>
                                            <script src="{{asset('admin/assets/plugins/custom/typedjs/typedjs.bundle.js')}}"></script>
                                          
                                            <script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                                            <!--end::Vendors Javascript-->

                                            <!--begin::Custom Javascript(used for this page only)-->
                                            <script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
                                            <script
                                                src="{{asset('admin/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/utilities/modals/bidding.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script>
                                            <script src="{{asset('admin/assets/js/custom/utilities/modals/create-app.js')}}"></script>
                                               
                                            @yield('inlinejs')
                                            <!--end::Custom Javascript-->
                                            <!--end::Javascript-->
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<!--end::Body-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/dashboards/bidding.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 07:53:19 GMT -->
<script>
        function buttonLoading(processType, ele){
        if(processType == 'loading'){
            ele.html(ele.attr('data-loading-text'));
            ele.attr('disabled', true);
        }else{
            ele.html(ele.attr('data-rest-text'));
            ele.attr('disabled', false);
        }
    }

    function successMsg(heading,message, html = ""){

        Swal.fire({
            title: heading,
            text: message,
            icon: 'success',
            confirmButtonText: 'Ok !'
            }).then((result) => {
  if (result.isConfirmed) {
    location.reload();
  }
})
        // box = $('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>'+heading+'</strong><hr class="message-inner-separator"><p>'+message+'</p>'+html+'</div>');
        // $('.alert-messages-box').append(box);
    }
    function errorMsg(heading,message){

        Swal.fire({
            title: heading,
            text: message,
            icon: 'danger',
            showCancelButton: false,
            
            confirmButtonText: 'Ok !'
            }).then((result) => {
  if (result.isConfirmed) {
   
  }
})

        // box = $('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>'+heading+'</strong><hr class="message-inner-separator"><p>'+message+'</p></div>');
        // $('.alert-messages-box').append(box);
    }
</script>
</html> --}}












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
  
  <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
@stack('css')
@yield('inlinecss')
</head>

<script type="text/javascript">

    var base_url = "{!!url('/')!!}"

    var images_limit = 1

    
  </script>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('admin.layouts.pagehead')  
  @include('admin.layouts.sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('breadcrum')
    
    @yield('content')
    <!-- /.content-header -->


  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
{{-- <script src="{{asset('admin/js/jquery.validate.min.js')}}"></script> --}}


@stack('js')
@yield('inlinejs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        function buttonLoading(processType, ele){
        if(processType == 'loading'){
            ele.html(ele.attr('data-loading-text'));
            ele.attr('disabled', true);
        }else{
            ele.html(ele.attr('data-rest-text'));
            ele.attr('disabled', false);
        }
    }

    function successMsg(heading,message, html = ""){
        Swal.fire({
            title: heading,
            text: message,
            icon: 'success',
            confirmButtonText: 'Ok !'
            }).then((result) => {
                if (result.isConfirmed) {
                    if(html!=''){
                        location.href = html;
                    }else{
                        location.reload();
                    }
                    
                }
            })
    }

    function errorMsg(heading,message){

        Swal.fire({
            title: heading,
            text: message,
            icon: 'danger',
            showCancelButton: false,
            
            confirmButtonText: 'Ok !'
            }).then((result) => {
                if (result.isConfirmed) {
                
                }
            })
    }
</script>

<!-- ChartJS -->
<script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('admin/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script> --}}
</body>
</html>
