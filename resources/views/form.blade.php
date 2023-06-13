
<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS Styling for the form */
    form {
      width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
      
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    h1 ,a{
        text-align: center;
    }
    .go{
      text-align: center;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
       
    }
    
  </style>
</head>
<body>
<h1>Student Form</h1>
  <form action="adddata"  method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" >

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" >

    <label for="city">City:</label>
    <input type="text" id="city" name="city" >

    <input type="submit" value="Submit">
  </form>
  <div class="container">
    <button><a href="showdata">Show List</a></button>
  </div>
</body>
</html>
