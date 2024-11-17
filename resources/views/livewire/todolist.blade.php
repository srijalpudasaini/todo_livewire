<div>
    <div class="todo-add border-white light-bg">
        <h4>Create New Todo</h4>
        <input type="text" class="w-100" placeholder="Todo" wire:model = 'name'>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror
        <button class="btn create-btn" wire:click = "create" type="submit">Create +</button>
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
    </div>

    <div class="todo-list light-bg border-white">

        @if ($todos->isEmpty())
            <h4 class="text-center">No Todos Found</h4>
        @else
            @foreach ($todos as $todo)
                <div class="todo-item flex" wire:key="{{ $todo->id }}">
                    <div class="flex">
                        <input wire:click="toggle({{ $todo->id }})" type="checkbox"
                            @if ($todo->completed) checked @endif>
                        @if ($editId === $todo->id)
                            <div>
                                <input type="text" class="w-100" placeholder="Todo" wire:model = 'editName'>
                                @error('editName')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn update-btn" wire:click = "update" type="submit">Update</button>
                            <button class="btn cancel-btn" wire:click = "cancel" type="submit">Cancel</button>
                            @if (session('success'))
                                <p class="success">{{ session('success') }}</p>
                            @endif
                        @else
                            <p>{{ $todo->name }}</p>
                        @endif
                    </div>
                    <div class="actions">
                        <button wire:click='edit({{ $todo->id }})'><img src="{{ asset('icon/edit.svg') }}"
                                alt=""></button>
                        <button wire:click = 'delete({{ $todo->id }})'><img src="{{ asset('icon/close.svg') }}"
                                alt=""></button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
