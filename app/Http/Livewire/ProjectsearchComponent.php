<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;
use Livewire\WithPagination;

class ProjectsearchComponent extends Component
{

    use WithPagination;

    public $search = '';

    
   protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.projectsearch-component',[

              
            'products' =>product::where('name', 'like', '%'.$this->search.'%')->paginate(2),

        ]);
    }
}
