<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #2e0303, #4a0b0b, #7a1212);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: rgba(0,0,0,0.35);
            border-radius: 18px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.5);
            padding: 40px 30px;
            gap: 40px;
        }

        .logo {
            max-width: 220px;
            height: auto;
            display: block;
            margin: 0;
            filter: drop-shadow(0 2px 8px #000a);
        }

        .login-box {
            background: rgba(0, 0, 0, 0.6);
            padding: 32px 36px;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.4);
            text-align: center;
            min-width: 320px;
        }

        .login-box h2 {
            margin-bottom: 18px;
            font-size: 2.3rem;
            letter-spacing: 1.2px;
            font-family: "Gill Sans", sans-serif;            
            font-weight: 700;
            color: #ffffffff;
        }
            <div class="login-title">Login</div>
            text-transform: uppercase;
        }
        .login-title {
            margin-bottom: 20px;
            font-size: 2.5rem;
            letter-spacing: 2px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            font-weight: 700;
            color: #a66a2c;
            text-shadow: 0 4px 18px #000a, 0 1px 0 #fff2;
            text-transform: uppercase;
            background: linear-gradient(90deg, #fff2, #a66a2c22 60%, #fff2);
            border-radius: 10px;
            padding: 10px 0 10px 0;
            box-shadow: 0 2px 8px #0002;
            letter-spacing: 3px;
        }

        .login-box form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
        }
        .login-box input {
            width: 220px;
            padding: 8px 10px;
            margin: 8px 0 0 0;
            border: none;
            border-radius: 6px;
            font-size: 0.98rem;
            background: #fff2;
            color: #fff;
            transition: background 0.2s;
            box-sizing: border-box;
            display: block;
        }
        .login-box input:first-child {
            margin-top: 0;
        }
        .login-box input:focus {
            background: #fff4;
            outline: 2px solid #a66a2c;
        }

        .login-box button {
            width: 220px;
            padding: 8px 10px;
            background: #a66a2c;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin: 12px 0 0 0;
            box-shadow: 0 2px 8px #0004;
            transition: background 0.2s, transform 0.1s;
            display: block;
        }
         .login-links {
            margin-top: 18px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: center;
        }
        .login-links a {
            color: #a66a2c;
            text-decoration: none;
            font-size: 0.98rem;
            transition: color 0.2s;
        }
        .login-links a:hover {
            color: #fff;
            text-decoration: underline;
        }
        .login-box button:hover {
            background: #a66a2c;
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="/emblema.png" alt="Logo Legalize" class="logo">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="usuario" placeholder="Usuário" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <div class="login-links">
                <a href="redefinir_senha.php">Esqueceu a senha?</a>
                <a href="cadastrar_usuario.php">Cadastrar novo usuário</a>
            </div>
        </div>
    </div>
</body>
</html>
