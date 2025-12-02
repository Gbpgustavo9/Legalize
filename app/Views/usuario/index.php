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
            background: linear-gradient(135deg, #330505ff, #530d0dff, #330505ff);
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
            background: linear-gradient(135deg, rgba(109, 0, 0, 0.73), rgba(143, 0, 0, 0.73));
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
            background: rgba(63, 0, 0, 0.59);
            padding: 32px 36px;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.4);
            text-align: center;
            min-width: 320px;
        }

        .login-box h2 {
            margin-bottom: 18px;
            font-size: 1.7rem;
            letter-spacing: 1.2px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            font-weight: 600;
            color: #ffffffff;
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
            padding: 0;
            margin: 0;
        }
        .login-box input {
            width: 220px;
            padding: 8px 10px;
            margin: 0 0 12px 0;
            border: none;
            border-radius: 6px;
            font-size: 0.98rem;
            background: #2e0303 !important;
            color: #fff !important;
            transition: background 0.2s;
            box-sizing: border-box;
            display: block;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            text-align: left;
            opacity: 1;
        }
        /* Forçar cor de fundo mesmo com autocomplete/autofill */
        input:-webkit-autofill,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 1000px #2e0303 inset !important;
            box-shadow: 0 0 0 1000px #2e0303 inset !important;
            -webkit-text-fill-color: #fff !important;
            color: #fff !important;
            transition: background-color 5000s ease-in-out 0s;
        }
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
            box-shadow: 0 2px 8px rgba(201, 0, 0, 0.27);
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
            color: #ffffffff;
            text-decoration: none;
            font-size: 0.80rem;
            transition: color 0.2s, background 0.2s, transform 0.1s, box-shadow 0.1s;
            box-shadow: 0 2px 8px rgba(201, 0, 0, 0);
            border-radius: 6px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            padding: 2px 8px;
        }
        .login-links a:hover {
            color: #fff;
            text-decoration: underline;
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 2px 8px #0004;
        }
        .login-box button:hover {
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInMove 1.1s cubic-bezier(.23,1.02,.47,.98) forwards;
        }
        @keyframes fadeInMove {
            to {
                opacity: 1;
                transform: none;
            }
        }
        .login-box input:focus {
            box-shadow: 0 0 0 2px #a66a2c88, 0 2px 8px #a66a2c22;
        }
        .login-box button:active {
            transform: scale(0.97);
            box-shadow: 0 1px 4px #0002;
        }
    
        .nomes_campos {
            display: flex;
            justify-content: flex-start;
            width: 220px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .nomes_campos h4 {
            margin: 0 0 2px 0;
            padding: 0;
            font-size: 1rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container fade-in" id="mainContainer">
        <img src="/emblema.png" alt="Logo Legalize" class="logo fade-in" id="logoImg" style="animation-delay:0.2s">
        <div class="login-box fade-in" id="loginBox" style="animation-delay:0.4s">
            <h2 style="display:flex;align-items:center;justify-content:center;gap:10px;">
                <span style="display:inline-flex;align-items:center;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;"><circle cx="12" cy="8" r="4.2" stroke="#a66a2c" stroke-width="1.7" fill="none"/><path d="M4.5 20c0-3.5 3.5-6 7.5-6s7.5 2.5 7.5 6" stroke="#a66a2c" stroke-width="1.7" fill="none" stroke-linecap="round"/></svg>
                </span>
                Login
            </h2>
            <?php if (session()->getFlashdata('error')): ?>
                <div style="color:#fff;background:rgba(143, 0, 0, 0.73);padding:8px 0 8px 0;margin-bottom:10px;border-radius:6px;font-size:0.98rem;">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="nomes_campos"><h4>Usuário </h4></div>
                <input type="text" name="usuario" placeholder="Digite Seu Usuário" required id="usuarioInput">
                <div class="nomes_campos"><h4>Senha </h4></div>
                <input type="password" name="senha" placeholder="Digite Sua Senha" required id="senhaInput">
                <button type="submit" id="entrarBtn">Entrar</button>
            </form>
            <div class="login-links">
                <a href="redefinir_senha.php">Esqueceu a senha?</a>
                <a href="/cadastrar-usuario">Cadastrar novo usuário</a>
            </div>
        </div>
    </div>
    <script>
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelectorAll('.login-box input').forEach(function(el) {
                el.style.background = '#2e0303';
                el.style.color = '#fff';
            });
        }, 100);
    });
        
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('mainContainer').style.animationDelay = '0s';
        document.getElementById('logoImg').style.animationDelay = '0.2s';
        document.getElementById('loginBox').style.animationDelay = '0.4s';
    });

    const inputs = [document.getElementById('usuarioInput'), document.getElementById('senhaInput')];
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.background = 'rgba(143, 0, 0, 0.73)';
        });
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.style.background = '#2e0303';
            } else {
                this.style.background = '#fff2';
            }
        });
        if (input.value.trim() === '') {
            input.style.background = '#2e0303';
        }
    });

    const btn = document.getElementById('entrarBtn');
    btn.addEventListener('mousedown', function() {
        this.style.transform = 'scale(0.97)';
    });
    btn.addEventListener('mouseup', function() {
        this.style.transform = '';
    });
    btn.addEventListener('mouseleave', function() {
        this.style.transform = '';
    });
    </script>
</body>
</html>
