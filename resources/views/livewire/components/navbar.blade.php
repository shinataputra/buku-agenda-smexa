<div>
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
            <div class="d-block d-lg-none" wire:ignore>
                <img src="{{ asset('assets/images/dark-logo.svg') }}" class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                    class="light-logo" width="180" alt="" />
            </div>
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="p-2">
                    <i class="ti ti-dots fs-7"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        <img src="{{ asset($user->showAvatar()) }}" class="rounded-circle"
                                            width="35" height="35" alt="" style="object-fit: cover"
                                            class="rounded-circle" id="photo-profile-nav" />
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu content-dd dropdown-menu-end" aria-labelledby="drop1">
                                <div class="profile-dropdown position-relative" data-simplebar>
                                    <div class="py-3 px-7 pb-0">
                                        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                    </div>
                                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                        <img src="{{ asset($user->showAvatar()) }}" class="rounded-circle"
                                            width="80" height="80" alt="" style="object-fit: cover"
                                            class="rounded-circle" id="photo-profile-master" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-3" id="nama-user-nav">{{ $user->name }}
                                            </h5>
                                            <p class="mb-0 d-flex text-dark align-items-center gap-2"
                                                id="email-user-nav">
                                                <i class="ti ti-mail fs-4"></i> {{ $user->email }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <button class="btn btn-outline-primary w-100" wire:click='logout'>Log
                                            Out</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
