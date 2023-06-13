<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
      display: grid;
      justify-content: center;
      align-items: center;
     
    }
</style>
<body>
    <div class="container">


<table border='1'>
    <tr><h1>All Student Data</h1></tr>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    @foreach($list as $info)
    <tr>
        <td>{{$info['id']}}</td>
        <td>{{$info['name']}}</td>
        <td>{{$info['email']}}</td>
        <td>{{$info['city']}}</td>
        <td><button><a href={{"delete/". $info['id']}}>Delete</button></a>
        <button><a href={{"edit/". $info['id']}}>Update</a></button></td>
        
    </tr>
    @endforeach
</table>
<br>
<div class="container">
    <button><a href="aditform">Add new Student</a></button>
  </div>
</div>
</body>
</html>

