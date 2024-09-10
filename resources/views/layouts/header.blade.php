@php
    $notifications = getNotification();
    $notificationCount = count($notifications);
    $styleCss = 'style';
@endphp
<!-- <header class='d-flex align-items-center justify-content-between flex-grow-1 header px-3 px-xl-0'>
    <button type="button" class="btn px-0 aside-menu-container__aside-menubar d-block d-xl-none sidebar-btn">
        <i class="fa-solid fa-bars fs-1"></i>
    </button>
    <nav class="navbar navbar-expand-xl navbar-light top-navbar d-xl-flex d-block px-3 px-xl-0 py-4 py-xl-0 "
        id="nav-header">
        <div class="container-fluid">
            <div class="navbar-collapse">
                @if (getLogInUser()->hasRole('admin'))
                    <div class="d-none d-xl-flex align-items-stretch dropdown me-2">
                        <button class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                            type="button" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"
                            id="quickLinksID">
                            <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Quick Links">
                                <i class="fas fa-plus"></i>
                            </span>
                        </button>
                        <div x-placement="bottom-start" aria-labelledby="quickLinksID"
                            class="shortcut-menu dropdown-menu px-3 py-3" data-popper-reference-hidden="false"
                            data-popper-escaped="false" data-popper-placement="bottom-start"
                            style="position: absolute; inset: 0px auto auto 0px; transform: translate(0px, 44px);">
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('invoices.index') }}">
                                <a class="nav-link px-4" href="{{ route('invoices.index') }}">
                                    <span class="dropdown-icon me-4">
                                        <i class="fa-solid far fa-file-alt pe-3"></i>
                                    </span>
                                    <span>{{ __('messages.invoices') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('quotes.index') }}">
                                <a class="nav-link px-4" href="{{ route('quotes.index') }}">
                                    <span class="dropdown-icon me-4">
                                        <i class="fa-solid fas fa-quote-left pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.quotes') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('products.index') }}">
                                <a class="nav-link px-4" href="{{ route('products.index') }}">
                                    <span class="dropdown-icon me-4">
                                        <i class="fa-solid fas fa-cube pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.products') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('taxes.index') }}">
                                <a class="nav-link px-4" href="{{ route('taxes.index') }}">
                                    <span class="dropdown-icon me-4">
                                        <i class="fa-solid fas fa-percentage pe-3"></i>
                                    </span>
                                    <span>{{ __('messages.taxes') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('payment-qr-codes.index') }}">
                                <a class="nav-link px-4" href="{{ route('payment-qr-codes.index') }}">
                                    <span class="dropdown-icon me-4">
                                        <i class="fa-solid fa-qrcode pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.payment_qr_codes.payment_qr_codes') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('clients.index') }}">
                                <a class="nav-link px-4" href="{{ route('clients.index') }}">
                                    <span class="dropdown-icon me-3">
                                        <i class="fa-solid fas fa-users pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.clients') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('transactions.index') }}">
                                <a class="nav-link px-4" href="{{ route('transactions.index') }}">
                                    <span class="dropdown-icon me-3">
                                        <i class="fa-solid fas fa-list-ol pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.transactions') }}</span>
                                </a>
                            </a>
                            <a class="py-0 fs-4 dropdown-item" href="{{ route('payments.index') }}">
                                <a class="nav-link px-4" href="{{ route('payments.index') }}">
                                    <span class="dropdown-icon me-3">
                                        <i class="fa-solid fas fa-money-check pe-2"></i>
                                    </span>
                                    <span>{{ __('messages.payments') }}</span>
                                </a>
                            </a>
                        </div>
                    </div>
                @endif
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @include('layouts.sub_menu')
                </ul>
            </div>
        </div>
    </nav>
    <ul class="nav align-items-center">
        @hasrole('admin')
            <li class="px-sm-3 px-2">
                <a class="btn btn-primary createInvoiceBtn"
                    href="{{ route('invoices.create') }}">{{ __('messages.invoice.new_invoice') }}</a>
            </li>
        @endrole
        <li class="px-sm-3 px-2 fullScreenBtn">
            <a href="javascript:void(0)" id="gotoFullScreen" title="Fullscreen"><i class="fas fa-expand fs-2"></i></a>
        </li>
        <li class="px-sm-3 px-2">
            @if (\Illuminate\Support\Facades\Auth::user()->dark_mode)
                <a href="{{ route('update-dark-mode') }}" data-turbo="false"><i
                        class="fa-solid fa-moon text-primary fs-2"></i></a>
            @else
                <a href="{{ route('update-dark-mode') }}" data-turbo="false"><i
                        class="fa-solid fas fa-sun text-primary fs-2"></i></a>
            @endif
        </li>
        <li class="px-sm-3 px-0">
            <div class="dropdown custom-dropdown d-flex align-items-center">
                <button class="btn dropdown-toggle hide-arrow position-relative d-flex align-items-center hoverable"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bell text-primary fs-2"></i>
                    @if (count(getNotification()) != 0)
                        <span
                            class="badge navbar-badge bg-primary notification-count notification-message-counter rounded-circle position-absolute translate-middle d-flex justify-content-center align-items-center {{ $notificationCount > 9 ? 'end-0' : 'counter-0' }}"
                            {{ $styleCss }}="top:8px" id="counter">{{ count(getNotification()) }}</span>
                    @endif
                </button>
                <div class="dropdown-menu py-0 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-start border-bottom py-4 px-7">
                        <h3 class="text-gray-900 mb-0">{{ __('messages.notification.notifications') }}</h3>
                    </div>
                    <div class="px-7 mt-5 inner-scroll height-270">
                        @if ($notificationCount > 0)
                            @foreach ($notifications as $notification)
                                <a data-turbo="false" href="#" data-id="{{ $notification->id }}"
                                    class="notification text-hover-primary text-decoration-none" id="notification">
                                    <div class="d-flex position-relative mb-5">
                                        <span class="me-5 text-primary fs-2 icon-label">
                                            <i class="fa-solid {{ getNotificationIcon($notification->type) }}"></i>
                                        </span>
                                        <div>
                                            <h5 class="text-gray-900 fs-6 mb-2">{{ $notification->title }}</h5>
                                            <h6 class="text-gray-600 fs-small fw-light mb-0">
                                                {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans(null, true) }}
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="empty-state fs-6 text-gray-800 fw-bold text-center mt-5" data-height="400">
                                <p>{{ __('messages.notification.you_don`t_have_any_new_notification') }}</p>
                            </div>
                        @endif
                        <div class="empty-state fs-6 text-gray-800 fw-bold text-center mt-5 d-none" data-height="400">
                            <p>{{ __('messages.notification.you_don`t_have_any_new_notification') }}</p>
                        </div>
                    </div>
                    <div class="text-center border-top p-4">
                        @if (count(getNotification()) > 0)
                            <a href="#"
                                class="read-all-notification text-primary mb-0 fs-5 text-decoration-none"
                                id="readAllNotification">
                                {{ __('messages.notification.mark_all_as_read') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </li>
        <li class="px-sm-3 px-2">
            <div class="dropdown d-flex align-items-center py-4">
                <div class="image image-circle image-mini">
                    <img src="{{ getLogInUser()->profile_image }}" class="img-fluid" alt="profile image">
                </div>
                <button class="btn dropdown-toggle ps-2 pe-0" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    {{ getLogInUser()->full_name }}
                </button>
                <div class="dropdown-menu py-7 pb-4 my-2" aria-labelledby="dropdownMenuButton1">
                    <div class="text-center border-bottom pb-5">
                        <div class="image image-circle image-tiny mb-5">
                            <img src="{{ getLogInUser()->profile_image }}" class="img-fluid" alt="profile image">
                        </div>
                        <h3 class="text-gray-900">{{ getLogInUser()->full_name }}</h3>
                        <h4 class="mb-0 fw-400 fs-6">{{ getLogInUser()->email }}</h4>
                    </div>
                    <ul class="pt-4">
                        <li>
                            <a class="dropdown-item text-gray-900" href="{{ route('profile.setting') }}">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                {{ __('messages.user.account_setting') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" href="javascript:void(0)" id="changePassword">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                {{ __('messages.user.change_password') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-gray-900" id="changeLanguage" href="javascript:void(0)">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-globe"></i>
                                </span>
                                {{ __('messages.change_language') }}
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="post">
                                @csrf
                            </form>
                            <a class="dropdown-item text-gray-900" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                <span class="dropdown-icon me-4 text-gray-600">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </span>
                                {{ __('messages.sign_out') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <button type="button" class="btn px-0 d-block d-xl-none header-btn pb-2">
                <i class="fa-solid fa-bars fs-1"></i>
            </button>
        </li>
    </ul>
</header>
<div class="bg-overlay" id="nav-overly"></div> -->

<!-- Start Header Area -->
<header class="header-area bg-white mb-4 rounded-bottom-15" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6">
            <div class="left-header-content">
                <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </li>
                    <li>
                        <form class="src-form position-relative">
                            <input type="text" class="form-control" placeholder="Search here.....">
                            <button type="submit" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </li>
                  
                </ul>
            </div>
        </div>

        <div class="col-lg-8 col-sm-6">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                    <li class="header-right-item">
                        <div class="light-dark">
                            <button class="switch-toggle settings-btn dark-btn p-0 bg-transparent" id="switch-toggle">
                                <span class="dark"><i class="material-symbols-outlined">light_mode</i></span> 
                                <span class="light"><i class="material-symbols-outlined">dark_mode</i></span>
                            </button>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications language">
                            <button class="btn btn-secondary dropdown-toggle border-0 p-0 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">translate</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 dropdown-menu-end">
                                <span class="fw-semibold fs-15 text-secondary title">Choose Language</span>
                                <div class="max-h-275" data-simplebar>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/usa.svg" class="wh-30 rounded-circle" alt="united-states">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">English</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/canada.svg" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Canada</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/germany.svg" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Germany</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/portugal.svg" class="wh-30 rounded-circle" alt="portugal">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Portugal</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu mb-0">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/spain.svg" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Spain</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="fullscreen-btn bg-transparent p-0 border-0" id="fullscreen-button">
                            <i class="material-symbols-outlined text-body">fullscreen</i>
                        </button>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications noti">
                            <button class="btn btn-secondary border-0 p-0 position-relative badge" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">notifications</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                <div class="d-flex justify-content-between align-items-center title">

                                @if (count(getNotification()) != 0)
                                    <span class="fw-semibold fs-15 text-secondary">Notifications <span class="fw-normal text-body fs-14">{{ count(getNotification()) }}</span></span>
                                    <button class=" read-all-notification p-0 m-0 bg-transparent border-0 fs-14 text-primary" id="readAllNotification">Clear All</button>
                                @endif
                         
                                </div> 

                                <div class="max-h-217" data-simplebar>
                                @if ($notificationCount > 0)
                            @foreach ($notifications as $notification)
 
                                <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="fa-solid {{ getNotificationIcon($notification->type) }}"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>{{ $notification->title }}</p>
                                                    <span class="fs-13">
                                                        {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans(null, true) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            @endforeach
                        @else
                            <div class="empty-state fs-6 text-gray-800 fw-bold text-center mt-5" data-height="400">
                                <p>{{ __('messages.notification.you_don`t_have_any_new_notification') }}</p>
                            </div>
                        @endif
                                 
                                </div>

                                <a href="notification.html" class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3">
                                    <span>See All Notifications </span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle wh-40 administrator" src="{{ getLogInUser()->profile_image }}" alt="admin">
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-none d-xxl-block">
                                            <div class="d-flex align-content-center">
                                                <h3> {{ getLogInUser()->full_name }}</h3>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-menu border-0 bg-white dropdown-menu-end">
                                <div class="d-flex align-items-center info">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-circle wh-30 administrator" src="{{ getLogInUser()->profile_image }}" alt="admin">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h3 class="fw-medium"> {{ getLogInUser()->full_name }}</h3>
                                        <!-- <span class="fs-12">Marketing Manager</span> -->
                                    </div>
                                </div>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="#">
                                            <i class="material-symbols-outlined">account_circle</i>
                                            <span class="ms-2">My Profile</span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="">
                                            <i class="material-symbols-outlined">chat</i>
                                            <span class="ms-2">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="to-do-list.html">
                                            <i class="material-symbols-outlined">format_list_bulleted </i>
                                            <span class="ms-2">My Task</span>
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="my-profile.html">
                                            <i class="material-symbols-outlined">credit_card </i>
                                            <span class="ms-2">Billing</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="settings.html">
                                            <i class="material-symbols-outlined">settings </i>
                                            <span class="ms-2">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="tickets.html">
                                            <i class="material-symbols-outlined">support</i>
                                            <span class="ms-2">Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="lock-screen.html">
                                            <i class="material-symbols-outlined">lock</i>
                                            <span class="ms-2">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-body" href="login.html">
                                            <i class="material-symbols-outlined">logout</i>
                                            <span class="ms-2">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="theme-settings-btn p-0 border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="material-symbols-outlined" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings">settings</i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->