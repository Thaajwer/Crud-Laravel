<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
        }
        td,th{

            padding:5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
<a style="float:right" href="{{route('post.add')}}">Add Post</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>ACtion</th>
        </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->description}}</td>
            <td>
                <a>Edit</a>
                <a>Delete</a>
            </td>
        </tr>
    @endforeach
    </table>


</body>
</html>