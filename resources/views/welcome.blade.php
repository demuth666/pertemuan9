<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan9</title>
</head>
<body>
<h1>Post your idea</h1>
<table>
        <tr>
            <td>title</td>
            <td>content</td>
            <td>action</td>
        </tr>
        <tr>
            @foreach($posts as $post)
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><a href="{{route('posts.edit', $post->id)}}">edit</a></td>
                <td>
                    <form action="{{route('posts.delete', $post->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button>delete</button>
                    </form>
                </td>
            @endforeach
        </tr>
</table>

<a href="{{route('posts.add')}}">
<button>Create Post</button>
</a>
</body>
</html>
