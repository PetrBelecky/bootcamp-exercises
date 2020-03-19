<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($books as $book)
      {{$book->title}} Written by {{$book->authors}} Published by {{$book->publisher->name}}
      <br><br>

  @endforeach

  <br><br>

  {{$books->links()}} 
  
</body>
</html>