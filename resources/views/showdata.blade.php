<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* .container {
      display: grid;
      justify-content: center;
      align-items: center;
     
    } */
    /* CSS for the table */
table {
  width: 100%;
  border-collapse: collapse;
}
th {
    background:linear-gradient(to right, #ff6a00, #ee0979);
    color: #fff;
    
}
td, th {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* CSS for the color gradient */
table.gradient {
  background: linear-gradient(to right, #ff6a00, #ee0979);
  color: white;
}

/* CSS for the buttons */
.button {
  display: inline-block;
  padding: 8px 12px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 4px;
}

.button:hover {
  background-color: #45a049;
}

.update-button {
  background-color: #2196F3;
}

.delete-button {
  background-color: #f44336;
}
</style>
<body>
    <div class="container">


<table class="table.gradient" >
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

