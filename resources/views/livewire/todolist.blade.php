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
        <div class="todo-item flex">
            <p>Todo</p>
            <div class="actions">
                <button><img src="{{ asset('icon/edit.svg') }}" alt=""></button>
                <button><img src="{{ asset('icon/close.svg') }}" alt=""></button>
            </div>
        </div>
    </div>
</div>
