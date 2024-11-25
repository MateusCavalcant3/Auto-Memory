<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .admin-login-container {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 320px;
      text-align: center;
    }
    h2 {
      color: #6a0dad;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #6a0dad;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #5b0c96;
    }
    .admin-login-container p {
      margin-top: 15px;
      font-size: 14px;
      color: #777;
    }
    .admin-login-container a {
      color: #6a0dad;
      text-decoration: none;
    }
    .admin-login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="admin-login-container">
    <h2>Login Admin</h2>
    <form action="#">
      <input type="text" placeholder="Usuário" required>
      <input type="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>
    <p><a href="#">Esqueceu sua senha?</a></p>
  </div>
</body>
</html>
