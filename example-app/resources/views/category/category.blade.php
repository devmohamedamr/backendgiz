<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>category index</h1>


    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>delete</td>
            <td>update</td>
        <tr>
        @foreach ($data as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href='{{url("delete/$category->id")}}'>delete</a></td>
            <td><a href='{{url("edit/$category->id")}}'>update</a></td>

        <tr>
        @endforeach
    </table>
</body>
</html>
