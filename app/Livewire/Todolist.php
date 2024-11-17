<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Todolist extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;

    public function create(){
        //  dd('test');
        $validated = $this->validate();
        Todo::create($validated);
        $this->reset();

        session()->flash('success','Created');
    }

    public function delete($id){
        Todo::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.todolist',[
            'todos'=> Todo::latest()->get()
        ]);
    }

}
