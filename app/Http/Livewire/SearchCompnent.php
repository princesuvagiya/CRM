<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Admin;
use Livewire\WithPagination;

class SearchCompnent extends Component
{

    use WithPagination;

     public $search = '';
     public $page = 1;

     protected $paginationTheme = 'bootstrap';

     protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['except' => 1, 'as' => 'p'],
    ];
 
    public function paginationView()
    {
        return 'pagination-links';
    } 
     
    public function render()
    {
        return view('livewire.search-compnent',[

            'admins'=>Admin::where('name', 'like', '%'.$this->search.'%')->paginate(2),

        ]);

    }
}
