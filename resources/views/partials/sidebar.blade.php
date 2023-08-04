<nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow">
        <i data-feather="arrow-left"></i>
    </div>

    <div id="sidebar-menu" style="">
        <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"></li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard')}}">
                    <i class="ri-home-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-store-3-line"></i>
                    <span>Product</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="products.html">Products</a>
                    </li>

                    <li>
                        <a href="{{route('products.create')}}">Add New Products</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-list-check-2"></i>
                    <span>Category</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('categories.index')}}">Category List</a>
                    </li>

                    <li>
                        <a href="{{route('categories.create')}}">Add New Category</a>
                    </li>

                    <li>
                        <a href="{{route('subcategories.create')}}">Add New SubCategory</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-user-3-line"></i>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="all-users.html">All users</a>
                    </li>
                    <li>
                        <a href="add-new-user.html">Add new user</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                    <i class="ri-settings-line"></i>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="profile-setting.html">Profile Setting</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="right-arrow" id="right-arrow">
        <i data-feather="arrow-right"></i>
    </div>
</nav>