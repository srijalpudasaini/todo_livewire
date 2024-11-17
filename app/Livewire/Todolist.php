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

    public $editId;

    #[Validate('required|min:3|max:50')]
    public $editName;

    public function create(){
        //  dd('test');
        $validated = $this->validateOnly('name');
        Todo::create($validated);
        $this->reset();

        session()->flash('success','Created');
    }

    public function edit($id){
        $this->editId=$id;
        $this->editName=Todo::find($id)->name;
    }

    public function cancel(){
        $this->reset('editName','editId');
    }

    public function delete($id){
        Todo::findOrFail($id)->delete();
    }

    public function update(){
        $validated = $this->validateOnly('editName');
        $todo = Todo::findOrFail($this->editId);
        $todo->name = $validated['editName'];
        $todo->save();
        $this->cancel();
        session()->flash('update','Updated');
    }

    public function toggle($id){
        $todo = Todo::findOrFail($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }
    public function render()
    {
        return view('livewire.todolist',[
            'todos'=> Todo::latest()->get()
        ]);
    }

}
