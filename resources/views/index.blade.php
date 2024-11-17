<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #987EFF;
        color: white;
        display: grid;
        place-items: center;
        min-height: 100vh;
        font-family: "Outfit", sans-serif;
    }

    .light-bg {
        background: #A18AFF;
    }

    .container {
        width: 40%;
        max-width: 70%;
        margin: auto;
    }

    .flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .w-100 {
        width: 100%;
        max-width: 100%;
    }

    .border-white {
        border: 3px solid white;
        border-radius: 15px;
    }

    .create-btn {
        background: white;
        color: #1A78ED;
        margin-top: 15px;
    }

    .btn {
        padding: 8px 15px;
        border-radius: 8px;
        border: none;
        outline: none;
    }

    .todo-item {
        background: white;
        color: black;
        padding: 10px;
        border-radius: 10px;
    }

    input {
        padding: 8px;
        outline: none;
        border-radius: 15px;
        border: 1px solid #e9e9e9;
        margin-top: 10px;
    }

    .todo-add {
        padding: 2rem;
        margin-bottom: 2rem;
    }

    button {
        cursor: pointer;
        background: none;
        border: none;
        outline: none;
    }

    .todo-list {
        padding: 2rem;
    }
    .error{
        font-size: 12px;
        color: red;
    }
    .success{
        font-size: 12px;
        color: #157347;
    }

</style>

<body>
    <div class="container">
        @livewire('todolist')
    </div>
</body>

</html>
