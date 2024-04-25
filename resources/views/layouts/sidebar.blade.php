<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ url('/') }}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Shops</li>
                <li>
                    <a href="{{ route('shops.create') }}">
                        <i class="metismenu-icon pe-7s-cart"></i>New Shop
                    </a>
                </li>
                <li>
                    <a href="{{ route('shops.index') }}">
                        <i class="metismenu-icon pe-7s-menu"></i>Shop List
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Categories
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('categories.create') }}">
                                <i class="metismenu-icon"></i>
                                New Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class="metismenu-icon"></i>
                                Categories List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Item
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('products.create') }}">
                                <i class="metismenu-icon"></i>
                                New Item
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="metismenu-icon"></i>
                                Item List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Item Type
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('types.create') }}">
                                <i class="metismenu-icon"></i>
                                New Products Type
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('types.index') }}">
                                <i class="metismenu-icon"></i>
                                Product Type
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="app-sidebar__heading">Customer</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Customers
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('customers.create') }}">
                                <i class="metismenu-icon pe-7s-users">
                                </i>New Customer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customers.index') }}">
                                <i class="metismenu-icon pe-7s-menu">
                                </i>Customer List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">Sold Item</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Sold product
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>

                        <li>
                            <a href="{{ route('orders.create') }}">
                                <i class="metismenu-icon pe-7s-users">
                                </i>New Items
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.index') }}">
                                <i class="metismenu-icon pe-7s-menu">
                                </i>Sold Items List
                            </a>
                        </li>
                        <li>
                            <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                <i class="metismenu-icon pe-7s-back">
                                </i>
                                Logout
                            </a>
                        </li>
                    </ul>
        </div>
    </div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
