<!-- Sidebar start -->
<div
    class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
    <div class="logo-w">
        <a class="logo" href="/admin">
            <div class="logo-element"></div>
            <div class="logo-label">Dashboard</div>
        </a>
    </div>
    <!-- Info User -->
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
            <div class="avatar-w"><img alt="" src="/images/company3.png" /></div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">{{ auth()->user()->name }}</div>
                <div class="logged-user-role">Administrator</div>
            </div>
        </div>
    </div>

    <!-- List sidebar -->
    
    <h1 class="menu-page-header">Page Header</h1>
    <ul class="main-menu">

        <li class="selected has-sub-menu">
            <a href="/admin">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="/admin/order">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>List order</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="/admin/gallery">
                <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                </div>
                <span>Gallery</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="/admin/blog">
                <div class="icon-w">
                    <div class="os-icon os-icon-edit-32"></div>
                </div>
                <span>Blogs</span>
            </a>
        </li>
        <li class="has-sub-menu">
            <a href="/admin/menu">
                <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                </div>
                <span>List Menu</span>
            </a>
            
        </li>
    </ul>
</div>
<!-- End of sidebar -->
