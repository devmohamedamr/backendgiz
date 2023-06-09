<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

    <form action="{{url('update')}}" method="post">
        @csrf
        <input type="text" value="{{ $category->name }}" name="category">
        <input type="hidden" name="id" value="{{$category->id}}">
        <input type="submit">
    </form>
</body>
</html>
