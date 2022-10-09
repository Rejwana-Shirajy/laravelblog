<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <a href="{{URL::to('/home')}}">Home</a>
  <a href="{{URL::to('/addblog')}}">Add Blogs</a>
<h1>All Blogs</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Tag</th>
      <th scope="col">Post</th>
    </tr>
  </thead>
  @foreach($blogs as $blog)
  <tbody>
  <tr>
      <th scope="row">{{$blog['id']}}</th>
     
      <td>{{$blog['category']}}</td>
      <td>{{$blog['tag']}}</td>
      <td colspan="2">{{$blog['post']}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
</body>
</html>
