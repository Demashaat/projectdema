<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .container input[type="email"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #862186;
      color: #fff;
      cursor: pointer;
      border-radius: 4px;
    }
    
    .container input[type="submit"]:hover {
        background-color: #862186;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form>
      <input type="email" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="passwoed" required>

      <input type="submit" value="Login">
    
    </form>
    <a href ="register.php">singup</a>
  </div>
</body>
</html>



