<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostForm</title>
</head>
<body>
<form action="{{route('posts.update', $posts->id)}}" method="post">
    @method('PUT')
    @csrf
    <label>title</label>
    <input type="text" value="{{$posts->title}}" name="title">

    <label>content</label>
    <input type="text" value="{{$posts->content}}" name="content">

    <button>edit post</button>
</form>
</body>
</html>
