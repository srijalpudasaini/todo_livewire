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
                    <p>{{ $todo->name }}</p>
                    <div class="actions">
                        <button><img src="{{ asset('icon/edit.svg') }}" alt=""></button>
                        <button wire:click = 'delete({{ $todo->id }})'><img src="{{ asset('icon/close.svg') }}"
                                alt=""></button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
