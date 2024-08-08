<?php

namespace App\Livewire\Dashboard;

use App\Models\Agenda;
use Illuminate\Support\Facades\Schema;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url('search', except: '')]
    public $search = '';

    #[Url('filter', except: '')]
    public $filter = 'latest';

    /**
     * Menampilkan Halaman Dashboard Index
     *
     * @return void
     */
    public function render()
    {
        // Start Query
        $agendasQuery = Agenda::query();

        // Searching
        $this->search(trim($this->search), $agendasQuery);

        // Filtering
        $this->filter($this->filter, $agendasQuery);

        // Get and paginate data
        $agendas = $agendasQuery->paginate(10);

        return view('livewire.dashboard.index', compact('agendas'));
    }

    /**
     * Fungsi untuk menghapus data dari database
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteAgenda($id)
    {
        Agenda::destroy($id);

        return $this->js("swal.fire({
            title: 'Berhasil',
            text: 'Data telah berhasil dihapus',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        })");
    }

    /**
     * Fungsi untuk mencari data dari database
     *
     * @param  mixed $search
     * @param  mixed $agendasQuery
     * @return void
     */
    public function search($search, $agendasQuery)
    {
        $columns = Schema::getColumnListing('agendas');
        $agendasQuery->where(function ($query) use ($columns, $search) {
            foreach ($columns as $column) {
                $query->orWhere($column, 'like', '%' . $search . '%');
            }
        });
    }

    /**
     * Fungsi untuk memfilter data dari database
     *
     * @param  mixed $filter
     * @param  mixed $agendasQuery
     * @return void
     */
    public function filter($filter, $agendasQuery)
    {
        if ($filter == 'latest') {
            $agendasQuery->orderBy('tanggal_terima', 'desc');
        } else {
            $agendasQuery->orderBy('tanggal_terima', 'asc');
        }
    }

    /**
     *  Livewire Lifecycle Hook
     */
    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    /**
     * Fungsi untuk mereset filter dan search
     *
     * @return void
     */
    public function resetFilter()
    {
        $this->reset();
    }
}
