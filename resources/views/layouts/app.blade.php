<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{config('app.name', 'Laravel')}}</title>
    <link rel="shortcut icon" href="{{ asset('themes/metronic-demo9/media/logos/favicon.ico') }}" /> -->
    <title>AHPharma App</title>
    <link rel="icon" href="img/logo ts.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('themes/metronic-demo9/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('themes/metronic-demo9/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('themes/metronic-demo9/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Logo-->
                <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                    <a href="../../demo9/dist/index.html">
                        <img alt="Logo" src="{{ asset('img/logo ts.png') }}"
                            class="h-60px" />
                    </a>
                </div>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="aside-menu flex-column-fluid pt-0 pb-5 py-lg-5" id="kt_aside_menu">
                    <!--begin::Aside menu-->
                    <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6"
                            data-kt-menu="true">
                            <div class="menu-item py-3">
                                <a class="menu-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}"
                                    title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </a>
                            </div>

                            <div class="menu-item py-3"> 
                                <a class="menu-link {{ Route::is('users.index') ? 'active' : '' }}" href="{{ route('users.index') }}" 
                                    title="User" data-bs-toggle="tooltip" data-bs-trigger="hover" 
                                    data-bs-dismiss="click" data-bs-placement="right"> 
                                    <span class="menu-icon"> 
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg--> 
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> 
                                            <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/> 
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/> 
                                            </svg> 
                                        </span> 
                                        <!--end::Svg Icon--> 
                                    </span> 
                                </a> 
                            </div>

                <div class="menu-item py-3">
                    <a class="menu-link {{ Route::is('item.index') ? 'active' : '' }}" href="#"
                        title="OBAT" data-bs-toggle="tooltip" data-bs-trigger="hover"
                        data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                    <path d="M112 96c-26.5 0-48 21.5-48 48V256h96V144c0-26.5-21.5-48-48-48zM0 144C0 82.1 50.1 32 112 32s112 50.1 112 112V368c0 61.9-50.1 112-112 112S0 429.9 0 368V144zM554.9 399.4c-7.1 12.3-23.7 13.1-33.8 3.1L333.5 214.9c-10-10-9.3-26.7 3.1-33.8C360 167.7 387.1 160 416 160c88.4 0 160 71.6 160 160c0 28.9-7.7 56-21.1 79.4zm-59.5 59.5C472 472.3 444.9 480 416 480c-88.4 0-160-71.6-160-160c0-28.9 7.7-56 21.1-79.4c7.1-12.3 23.7-13.1 33.8-3.1L498.5 425.1c10 10 9.3 26.7-3.1 33.8z" fill="black"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                </div>

            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                class="menu-item py-3 {{ Route::is('transactionItem.index') ? 'here' : '' }} {{ Route::is('transactionItem.history') ? 'here' : '' }} {{ Route::is('transactionItem.detail') ? 'here' : '' }}">
                <span class="menu-link" title="DISTRIBUTOR" data-bs-toggle="tooltip" data-bs-trigger="hover"
                    data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm004.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path d="M0 48C0 21.5 21.5 0 48 0H368c26.5 0 48 21.5 48 48V96h50.7c17 0 33.3 6.7 45.3 18.7L589.3 192c12 12 18.7 28.3 18.7 45.3V256v32 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H48c-26.5 0-48-21.5-48-48V48zM416 256H544V237.3L466.7 160H416v96zM160 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm368-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM176 80v48l-48 0c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V192h48c8.8 0 16-7.2 16-16V144c0-8.8-7.2-16-16-16H240V80c0-8.8-7.2-16-16-16H192c-8.8 0-16 7.2-16 16z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z"
                                    fill="black" />
                                <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z"
                                    fill="black" />
                                <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z"
                                    fill="black" />
                                <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="black" />
                                <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="black" />
                                <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="black" />
                                <path
                                    d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
            </div>

            <div class="menu-item py-3">
                <a class="menu-link {{ Route::is('itemReceiving.index') ? 'active' : '' }}" href="#"
                    title="PEMBELIAN" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm001.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z" fill="black"/>
                    <path opacity="0.3" d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z" fill="black"/>
                    <path opacity="0.3" d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z" fill="black"/>
                    <path d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z" fill="black"/>
                    </svg></span>
                    <!--end::Svg Icon-->
                    </span>
                </a>
            </div>

            <div class="menu-item py-3">
                <a class="menu-link {{ Route::is('itemReceiving.index') ? 'active' : '' }}" href="#"
                    title="DETAIL PEMBELIAN" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr084.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5"
                                    d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z"
                                    fill="black" />
                                <path
                                    d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z"
                                    fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </span>
                </a>
            </div>

            <div class="menu-item py-3">
                <a class="menu-link {{ Route::is('itemReceiving.index') ? 'active' : '' }}" href="#"
                    title="PENJUALAN" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr084.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5"
                                    d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z"
                                    fill="black" />
                                <path
                                    d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z"
                                    fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </span>
                </a>
            </div>

            <div class="menu-item py-3">
                <a class="menu-link {{ Route::is('itemReceiving.index') ? 'active' : '' }}" href="#"
                    title="DETAIL PENJUALAN" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr084.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5"
                                    d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z"
                                    fill="black" />
                                <path
                                    d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z"
                                    fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </span>
                </a>
            </div>

            <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                class="menu-item py-3 {{ Route::is('reporting.laporanPenjualan') ? 'here' : '' }} {{ Route::is('reporting.laporanTransaksiStock') ? 'here' : '' }}">
                <span class="menu-link" title="Reporting" data-bs-toggle="tooltip" data-bs-trigger="hover"
                    data-bs-dismiss="click" data-bs-placement="right">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/graphs/gra001.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                    fill="black" />
                                <path
                                    d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </span>
                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                    <div class="menu-item">
                        <div class="menu-content">
                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Laporan</span>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('reporting.laporanPenjualan') ? 'active' : '' }}"
                            href="#"><span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Laporan Penjualan</span>
                        </a>
                    </div>
                    {{-- <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Laporan Pengeluaran</span>
                                        </a>
                                    </div> --}}
                    <div class="menu-item">
                        <a class="menu-link {{ Route::is('reporting.laporanTransaksiStock') ? 'active' : '' }}"
                            href="#"><span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Laporan Transaksi Stock</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                class="menu-item py-3">
                                <span class="menu-link" title="User Management" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com014.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                                    fill="black" />
                                                <rect opacity="0.3" x="14" y="4" width="4"
                                                    height="4" rx="2" fill="black" />
                                                <path
                                                    d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                                    fill="black" />
                                                <rect opacity="0.3" x="6" y="5" width="6"
                                                    height="6" rx="3" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">User Management</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Menu Management</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Role Management</span>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
        </div>
    </div>
    <!--end::Aside menu-->
    </div>
    <!--end::Nav-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
        <!--begin::Menu-->
        <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right"
            data-bs-dismiss="click" title="Sign Out">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                <span class="svg-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)"
                            fill="black" />
                        <path
                            d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                            fill="black" />
                        <path
                            d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                            fill="#C4C4C4" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Footer-->
    </div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header tablet and mobile-->
        <div class="header-mobile py-3">
            <!--begin::Container-->
            <div class="container d-flex flex-stack">
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="../../demo9/dist/index.html">
                        <img alt="Logo" src="{{ asset('themes/metronic-demo9/media/logos/logo-demo9.svg') }}"
                            class="h-35px" />
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Aside toggle-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2x me-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="black" />
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Aside toggle-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header tablet and mobile-->
        <!--begin::Header-->
        @if (!Route::is('transactionItem.index'))
        <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
            data-kt-sticky-offset="{lg: '300px'}">
            <!--begin::Container-->
            <div class="header-container container-xxl"
                style="background-image: url('{{ asset('img/bg-invoice.png') }}');background-repeat: no-repeat;background-size: 332px 227px ;">
                <!--begin::Page title-->
                <div
                    class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                    <!--begin::Heading-->
                    <h1 class="d-flex flex-column text-dark fw-bolder text-start">
                        <span class="text-white fs-1">{{ $breadcumb ?? '' }}</span>
                    </h1>
                    <!--end::Heading-->
                </div>
                <!--end::Page title=-->
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center flex-wrap">
                    <!--begin::Action-->
                    <div class="d-flex align-items-center py-3 py-lg-0">
                        <div class="me-3">
                            <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                                data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                            fill="black" />
                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo"
                                                src="{{ asset('themes/metronic-demo9/media/avatars/150-26.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                <span
                                                    class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                            </div>
                                            <a href="#"
                                                class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../../demo9/dist/account/overview.html" class="menu-link px-5">My
                                        Profile</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="../../demo9/dist/account/settings.html" class="menu-link px-5">Account
                                        Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a class="menu-link px-5" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Sign Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                            </div>
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        @endif
        <!--end::Header-->

        <!--begin::Content-->
        <div class="d-flex flex-column flex-column-fluid py-10 {{ Route::is('transactionItem.index') ? 'py-10' : 'content' }}"
            id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                @yield('content')
            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->

        <!--begin::Footer-->
        @if (!Route::is('transactionItem.index'))
        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-gray-400 fw-bold me-1">Created by</span>
                    <a href="https://keenthemes.com" target="_blank"
                        class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Container-->
        </div>
        @endif

        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('themes/metronic-demo9/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('themes/metronic-demo9/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    @yield('onpage-js')
    <!--end::Page Vendors Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>