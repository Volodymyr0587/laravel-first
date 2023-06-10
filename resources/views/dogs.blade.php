<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body class="p-4">
    <h1 class="font-bold border-b-gray-300 border-b pb-2 mb-3">
        Dogs
    </h1>
    <ul>
        @foreach ($dogs as $dog)
            <li class="flex mb-1">
                <span class="flex-1">{{ $dog->name }}</span>
                <form action="{{ route('dog.delete', $dog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border bg-gray-200 p-1 border-black">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    @include('partials.form')
</body>

</html>
