<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
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
        .reset-box {
            background: rgba(63, 0, 0, 0.59);
            padding: 32px 36px;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.4);
            text-align: center;
            min-width: 320px;
        }
        .reset-title {
            margin-bottom: 20px;
            font-size: 1.7rem;
            letter-spacing: 1.2px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            font-weight: 600;
            color: #ffffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .reset-box form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
            width: 100%;
        }
        .reset-box input {
            width: 220px;
            padding: 8px 10px;
            margin: 8px auto 0 auto;
            border: none;
            border-radius: 6px;
            font-size: 0.98rem;
            background: #2e0303 !important;
            color: #fff !important;
            transition: background 0.2s, color 0.2s;
            box-sizing: border-box;
            display: block;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            text-align: left;
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
        .reset-box input:first-child {
            margin-top: 0;
        }
        .reset-box input:focus {
            background: #fff6;
            outline: 2px solid #a66a2c;
            box-shadow: 0 0 0 2px #a66a2c88, 0 2px 8px #a66a2c22;
        }
        .reset-box button {
            width: 220px;
            padding: 8px 10px;
            background: #a66a2c;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin: 12px auto 0 auto;
            box-shadow: 0 2px 8px rgba(201, 0, 0, 0.27);
            transition: background 0.2s, transform 0.1s;
            display: block;
        }
        .reset-box button:hover {
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
        }
        .reset-links {
            margin-top: 18px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: center;
        }
        .reset-links a {
            color: #ffffffff;
            text-decoration: none;
            font-size: 0.80rem;
            transition: color 0.2s, background 0.2s, transform 0.1s, box-shadow 0.1s;
            box-shadow: 0 2px 8px rgba(201, 0, 0, 0);
            border-radius: 6px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            padding: 2px 8px;
        }
        .reset-links a:hover {
            color: #fff;
            text-decoration: underline;
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 2px 8px #0004;
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
        <div class="reset-box fade-in" id="resetBox" style="animation-delay:0.4s">
            <div class="reset-title" style="display:flex;align-items:center;justify-content:center;gap:10px;">
                <span style="display:inline-flex;align-items:center;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;"><circle cx="12" cy="8" r="4.2" stroke="#a66a2c" stroke-width="1.7" fill="none"/><path d="M4.5 20c0-3.5 3.5-6 7.5-6s7.5 2.5 7.5 6" stroke="#a66a2c" stroke-width="1.7" fill="none" stroke-linecap="round"/></svg>
                </span>
                Redefinir Senha
            </div>
            <?php if (session()->getFlashdata('error')): ?>
                <div style="color:#fff;background:rgba(143, 0, 0, 0.73);padding:8px 0 8px 0;margin-bottom:10px;border-radius:6px;font-size:0.98rem;">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="redefinir_senha.php" method="POST">
                <input type="text" name="usuario" placeholder="Usuário" required id="usuarioInput">
                <input type="text" name="cpf" placeholder="CPF" required maxlength="14" id="cpfInput">
                <input type="password" name="nova_senha" placeholder="Nova senha" required id="novaSenhaInput">
                <button type="submit" id="redefinirBtn">Confirmar</button>
            </form>
            <div class="reset-links">
                <a href="index.php">Voltar ao login</a>
            </div>
        </div>
    </div>
    <script>
    // Forçar cor correta após autocomplete/autofill
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelectorAll('.reset-box input').forEach(function(el) {
                el.style.background = '#2e0303';
                el.style.color = '#fff';
            });
        }, 100);
    });
        
    // Máscara para o campo de CPF
    document.addEventListener('DOMContentLoaded', function() {
        var cpfInput = document.getElementById('cpfInput');
        if (cpfInput) {
            cpfInput.addEventListener('input', function(e) {
                let v = this.value.replace(/\D/g, '');
                if (v.length > 11) v = v.slice(0, 11);
                v = v.replace(/(\d{3})(\d)/, '$1.$2');
                v = v.replace(/(\d{3})(\d)/, '$1.$2');
                v = v.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                this.value = v;
            });
        }
    });
    // Animação de fade-in com delays
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('mainContainer').style.animationDelay = '0s';
        document.getElementById('logoImg').style.animationDelay = '0.2s';
        document.getElementById('resetBox').style.animationDelay = '0.4s';
    });
    // Efeito de foco animado nos inputs
    const usuarioInput = document.getElementById('usuarioInput');
    const cpfInput = document.getElementById('cpfInput');
    const novaSenhaInput = document.getElementById('novaSenhaInput');

    [usuarioInput, cpfInput, novaSenhaInput].forEach(input => {
        if (!input) return;
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
        input.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.style.background = '#fff2';
            }
        });
        if (input.value.trim() === '') {
            input.style.background = '#2e0303';
        }
    });
    // Efeito de clique animado no botão
    const btn = document.getElementById('redefinirBtn');
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
