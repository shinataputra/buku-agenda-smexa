<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="" class="text-nowrap logo-img" wire:navigate>
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                class="dark-logo" width="180" alt="" />
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                class="light-logo" width="180" alt="" />
        </a>
        <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
            <li class="sidebar-item">
                <a class="sidebar-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}" aria-expanded="false" wire:navigate>
                    <span>
                        <i class="ti ti-home"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
