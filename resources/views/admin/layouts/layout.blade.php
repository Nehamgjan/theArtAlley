<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>@yield('admin_page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{asset('admin_asset/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{route('admin')}}">
                    <span class="align-middle">theArtAlley</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>

                    <li class="sidebar-item {{request()->routeIs('admin')?'active':''}}">
                        <a class="sidebar-link" href="{{route('admin')}}">
                            <i class="align-middle" data-feather="activity"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('category.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#categoryMenu" role="button"
                            aria-expanded="{{ request()->routeIs('category.*') ? 'true' : 'false' }}"
                            aria-controls="categoryMenu">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Category</span>
                        </a>
                        <ul id="categoryMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('category.*') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('category.create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('category.create') }}">
                                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create
                                        Category</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('category.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('category.manage') }}">
                                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage
                                        Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('subcategory.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#subCategoryMenu" role="button"
                            aria-expanded="{{ request()->routeIs('subcategory.*') ? 'true' : 'false' }}"
                            aria-controls="subCategoryMenu">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Sub
                                Category</span>
                        </a>
                        <ul id="subCategoryMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('subcategory.*') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('subcategory.create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('subcategory.create') }}">
                                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create
                                        Sub Category</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('subcategory.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('subcategory.manage') }}">
                                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage
                                        Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item {{ request()->routeIs('product.*') || request()->routeIs('product.review.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#productMenu" role="button"
                            aria-expanded="{{ request()->routeIs('product.*') || request()->routeIs('product.review.*') ? 'true' : 'false' }}"
                            aria-controls="productMenu">
                            <i class="align-middle" data-feather="package"></i> <span
                                class="align-middle">Product</span>
                        </a>
                        <ul id="productMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('product.*') || request()->routeIs('product.review.*') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('product.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('product.manage') }}">
                                    <i class="align-middle" data-feather="shopping-bag"></i> <span
                                        class="align-middle">Manage Product</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('product.review.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('product.review.manage') }}">
                                    <i class="align-middle" data-feather="star"></i> <span class="align-middle">Manage
                                        Review</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('productattribute.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#productAttributeMenu" role="button"
                            aria-expanded="{{ request()->routeIs('productattribute.*') ? 'true' : 'false' }}"
                            aria-controls="productAttributeMenu">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Product
                                Attribute</span>
                        </a>
                        <ul id="productAttributeMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('productattribute.*') ? 'show' : '' }}">
                            <li
                                class="sidebar-item {{ request()->routeIs('productattribute.create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('productattribute.create') }}">
                                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create
                                        Product Attribute</span>
                                </a>
                            </li>
                            <li
                                class="sidebar-item {{ request()->routeIs('productattribute.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('productattribute.manage') }}">
                                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage
                                        Product Attribute</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('discount.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#discountMenu" role="button"
                            aria-expanded="{{ request()->routeIs('discount.*') ? 'true' : 'false' }}"
                            aria-controls="discountMenu">
                            <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Discount</span>
                        </a>
                        <ul id="discountMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('discount.*') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('discount.create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('discount.create') }}">
                                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create
                                        Discount</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('discount.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('discount.manage') }}">
                                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage
                                        Discount</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('payment.*') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#paymentMenu" role="button"
                            aria-expanded="{{ request()->routeIs('payment.*') ? 'true' : 'false' }}"
                            aria-controls="paymentMenu">
                            <i class="align-middle" data-feather="credit-card"></i> <span
                                class="align-middle">Payment</span>
                        </a>
                        <ul id="paymentMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('payment.*') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('payment.create') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('payment.create') }}">
                                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create
                                        Payment</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('payment.manage') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('payment.manage') }}">
                                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage
                                        Payment</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="sidebar-item {{ request()->routeIs('admin.cart.history') || request()->routeIs('admin.order.history') ? 'active' : '' }}">
                        <a data-bs-toggle="collapse" class="sidebar-link" href="#historyMenu" role="button"
                            aria-expanded="{{ request()->routeIs('admin.cart.history') || request()->routeIs('admin.order.history') ? 'true' : 'false' }}"
                            aria-controls="historyMenu">
                            <i class="align-middle" data-feather="clock"></i> <span class="align-middle">History</span>
                        </a>
                        <ul id="historyMenu"
                            class="sidebar-dropdown list-unstyled collapse {{ request()->routeIs('admin.cart.history') || request()->routeIs('admin.order.history') ? 'show' : '' }}">
                            <li class="sidebar-item {{ request()->routeIs('admin.cart.history') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin.cart.history') }}">
                                    <i class="align-middle" data-feather="shopping-cart"></i> <span
                                        class="align-middle">Cart</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ request()->routeIs('admin.order.history') ? 'active' : '' }}">
                                <a class="sidebar-link" href="{{ route('admin.order.history') }}">
                                    <i class="align-middle" data-feather="list"></i> <span
                                        class="align-middle">Order</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.settings') }}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a> -->
                        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div> -->
                        <!-- </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                    tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a> -->

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <!-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" /> -->
                                <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a> -->
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="align-middle me-1" data-feather="log-out"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">


                    @yield('admin_layout')

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('admin_asset/js/app.js')}}"></script>

</body>

</html>