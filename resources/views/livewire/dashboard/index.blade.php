<div>
    {{-- Header --}}
    <livewire:dashboard.header />
    {{-- Header --}}

    {{-- Search and Filter --}}
    <div class="card">
        <div class="card-body d-flex gap-2">
            <input type="search" class="form-control" placeholder="Cari..." wire:model.live.debounce.500ms="search">
            <select class="form-select" wire:model.live='filter'>
                <option value="latest">Terbaru</option>
                <option value="oldest">Terlama</option>
            </select>
            <button class="btn btn-primary" wire:click='resetFilter'>Reset</button>
        </div>
    </div>
    {{-- Search and Filter --}}

    {{-- Table --}}
    <div class="table-responsive">
        <table class="table table-bordered border table-hover text-nowrap">
            <thead class="table-info text-center align-middle">
                <tr>
                    <th rowspan="2">No Agenda</th>
                    <th rowspan="2">Tanggal Terima</th>
                    <th colspan="3">Surat</th>
                    <th rowspan="2">Dari</th>
                    <th rowspan="2">Hal</th>
                    <th rowspan="2">Keterangan</th>
                    <th rowspan="2">Kode Arsip</th>
                    <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th>Tipe</th>
                    <th>Nomor</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($agendas as $agenda)
                    <tr class="text-center" wire:key='{{ $agenda->id }}'>
                        <td>{{ $agendas->firstItem() + $loop->index }}.</td>
                        <td>{{ $agenda->tanggal_terima }}</td>
                        <td>
                            @if ($agenda->tipe_surat == 'masuk')
                                <i class="ti ti-arrow-up-right text-success"></i>
                            @else
                                <i class="ti ti-arrow-down-left text-danger"></i>
                            @endif
                        </td>
                        <td>{{ $agenda->nomor_surat }}</td>
                        <td>{{ $agenda->tanggal_surat }}</td>
                        <td>{{ $agenda->dari_kepada }}</td>
                        <td>{{ $agenda->hal }}</td>
                        <td>{{ $agenda->keterangan }}</td>
                        <td>{{ $agenda->kode_arsip }}</td>
                        <td>
                            <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-sm btn-warning"
                                wire:navigate>
                                <i class="ti ti-pencil"></i>
                            </a>
                            <button class="btn btn-sm btn-danger"
                                @click="$dispatch('delete-agenda', {id: {{ $agenda->id }}})">
                                <i class="ti ti-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Data tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- Table --}}

    {{-- Pagination --}}
    <div>
        {{ $agendas->links('livewire::bootstrap', data: ['scrollTo' => false]) }}
    </div>
    {{-- Pagination --}}

    @script
        <script>
            $wire.on('delete-agenda', data => {
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Data tidak bisa dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, hapus!"
                }).then((result) => {
                    if (result.value) {
                        $wire.deleteAgenda(data.id);
                    }
                });
            });
        </script>
    @endscript
</div>
