<div>
    {{-- Header Content --}}
    <div class="card w-100 bg-light-info overflow-hidden shadow-none">
        <div class="card-body py-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <h5 class="fw-semibold mb-9 fs-5">Selamat datang {{ auth()->user()->name }}</h5>
                    <p class="mb-9">
                        Ini adalah list Buku Agenda!
                    </p>
                    <a href="{{ route('agenda.create') }}" class="btn btn-primary" wire:navigate>
                        Tambah Buku Agenda
                    </a>
                </div>
                <div class="col-sm-5">
                    <div class="position-relative mb-n7 text-end">
                        <img src="{{ asset('assets/images/backgrounds/welcome-bg2.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Header Content --}}
</div>
