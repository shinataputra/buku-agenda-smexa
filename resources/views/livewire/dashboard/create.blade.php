<div>
    {{-- Header Content --}}
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tambah Buku Agenda</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('dashboard') }}"
                                    wire:navigate>Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Buku Agenda</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('assets/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Header Content --}}

    {{-- Form --}}
    <div class="col-12">
        <div class="card w-100 position-relative overflow-hidden mb-0">
            <div class="card-body p-4">
                <form id="biodata-update-form" wire:submit='save'>
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Tanggal Terima</label>
                                <input type="date"
                                    class="form-control @error('form.tanggal_terima') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Nama Anda" wire:model='form.tanggal_terima'>
                                @error('form.tanggal_terima')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="nickname-input" class="form-label fw-semibold">Tipe Surat</label>
                                <select class="form-select @error('form.tipe_surat') is-invalid @enderror"
                                    id="nickname-input" wire:model='form.tipe_surat'>
                                    <option value="" disabled>Pilih Tipe Surat</option>
                                    <option value="masuk">Masuk</option>
                                    <option value="keluar">Keluar</option>
                                </select>
                                @error('form.tipe_surat')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Nomor Surat</label>
                                <input type="text"
                                    class="form-control @error('form.nomor_surat') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Nomor Surat" wire:model='form.nomor_surat'>
                                @error('form.nomor_surat')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Tanggal Surat</label>
                                <input type="date"
                                    class="form-control @error('form.tanggal_surat') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Tanggal Surat" wire:model='form.tanggal_surat'>
                                @error('form.tanggal_surat')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Dari/Kepada</label>
                                <input type="text"
                                    class="form-control @error('form.dari_kepada') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Dari/Kepada" wire:model='form.dari_kepada'>
                                @error('form.dari_kepada')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Hal</label>
                                <input type="text"
                                    class="form-control @error('form.hal') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Hal" wire:model='form.hal'>
                                @error('form.hal')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Keterangan</label>
                                <input type="text"
                                    class="form-control @error('form.keterangan') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Keterangan" wire:model='form.keterangan'>
                                @error('form.keterangan')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username-input" class="form-label fw-semibold">Kode Arsip</label>
                                <input type="text"
                                    class="form-control @error('form.kode_arsip') is-invalid @enderror"
                                    id="username-input" placeholder="Isi Kode Arsip" wire:model='form.kode_arsip'>
                                @error('form.kode_arsip')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Form --}}
</div>
