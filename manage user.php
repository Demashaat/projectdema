<!DOCTYPE html>
<html>
<head>
  <title>Manage Users</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f5f5f5;
    }
    
    tr:hover {
      background-color: hsl(0, 0%, 98%);
    }
    
      .update-button {
            background-color: #902aa5;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
  </style>
</head>
<body>
  <div class="container">
    <h2>User Management</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Update Data</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>ward</td>
          <td>ward@gmail.com</td>
          <td>Admin</td>
          <td>
            <button class="update-button">Update</button>
        </td>
        </tr>
        <tr>
          <td>2</td>
          <td>joory</td>
          <td>joory@gmail.com</td>
          <td>User</td>
          <td>
            <button class="update-button">Update</button>
        </td>
        </tr>
        <!-- Add more rows for additional users -->
      </tbody>
    </table>
  </div>
</body>
</html>

