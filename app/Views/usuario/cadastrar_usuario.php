<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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

        .register-box {
            background: rgba(63, 0, 0, 0.59);
            padding: 32px 36px;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.4);
            text-align: center;
            min-width: 320px;
        }

        .register-title {
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
        }

        .register-box form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
            width: 100%;
        }
        .register-box input, .register-box select {
            width: 270px;
            padding: 12px 14px;
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
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
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
        select:-webkit-autofill,
        select:-webkit-autofill:focus,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 1000px #2e0303 inset !important;
            box-shadow: 0 0 0 1000px #2e0303 inset !important;
            -webkit-text-fill-color: #fff !important;
            color: #fff !important;
            transition: background-color 5000s ease-in-out 0s;
        }
        .register-box select option {
            background: #2e0303;
            color: #fff;
        }
        }
        .register-box input:first-child {
            margin-top: 0;
        }
        .register-box input:focus, .register-box select:focus {
            background: #fff4;
            outline: 2px solid #a66a2c;
            box-shadow: 0 0 0 2px #a66a2c88, 0 2px 8px #a66a2c22;
        }

        .register-box button {
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
        .register-box button:hover {
            opacity: 0.85;
            transform: translateY(-2px) scale(1.03);
        }
        .register-links {
            margin-top: 18px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: center;
        }
        .register-links a {
            color: #ffffffff;
            text-decoration: none;
            font-size: 0.80rem;
            transition: color 0.2s, background 0.2s, transform 0.1s, box-shadow 0.1s;
            box-shadow: 0 2px 8px rgba(201, 0, 0, 0);
            border-radius: 6px;
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            padding: 2px 8px;
        }
        .register-links a:hover {
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
        <div class="register-box fade-in" id="registerBox" style="animation-delay:0.4s">
            <div class="register-title" style="display:flex;align-items:center;justify-content:center;gap:10px;">
                <span style="display:inline-flex;align-items:center;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;"><circle cx="12" cy="8" r="4.2" stroke="#a66a2c" stroke-width="1.7" fill="none"/><path d="M4.5 20c0-3.5 3.5-6 7.5-6s7.5 2.5 7.5 6" stroke="#a66a2c" stroke-width="1.7" fill="none" stroke-linecap="round"/></svg>
                </span>
                Cadastro
            </div>
            <form action="cadastrar_usuario.php" method="POST">
                <input type="text" name="nome" placeholder="Nome completo" required>
                <input type="text" name="cpf" placeholder="CPF" required maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" id="cpfInput">
                <select name="cargo" required >
                    <option value="" disabled selected hidden>Ocupação</option>
                    <option value="estudante">Estudante</option>
                    <option value="advogado">Advogado(a)</option>
                    <option value="outro">Outro</option>
                </select>
                <input type="text" name="usuario" placeholder="Usuário" required id="usuarioInput">
                <input type="password" name="senha" placeholder="Senha" required id="senhaInput">
                <button type="submit" id="cadastrarBtn">Cadastrar</button>
            </form>
            <div class="register-links">
                <a href="index.php">Já tem conta? Faça login</a>
            </div>
        </div>
    </div>
    <script>
    // Forçar cor correta após autocomplete/autofill
    window.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelectorAll('.register-box input, .register-box select').forEach(function(el) {
                el.style.background = '#2e0303';
                el.style.color = '#fff';
            });
        }, 100);
    });
    // Máscara para o campo de CPF
    document.addEventListener('DOMContentLoaded', function() {
        var cpfInput = document.querySelector('input[name="cpf"]');
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

        // Animação de fade-in com delays
        document.getElementById('mainContainer').style.animationDelay = '0s';
        document.getElementById('logoImg').style.animationDelay = '0.2s';
        document.getElementById('registerBox').style.animationDelay = '0.4s';

        // Efeito de foco animado nos campos
        const usuarioInput = document.getElementById('usuarioInput');
        const senhaInput = document.getElementById('senhaInput');
        const cpfInput2 = document.getElementById('cpfInput');
        const nomeInput = document.querySelector('input[name="nome"]');
        const cargoSelect = document.querySelector('select[name="cargo"]');

        // Função para atualizar cor do select
        function updateCargoBg() {
            if (!cargoSelect.value) {
                cargoSelect.style.background = '#2e0303';
                cargoSelect.style.color = 'rgba(201, 201, 201, 0.61)';
            } else {
                cargoSelect.style.background = 'rgba(255, 255, 255, 0.13)';
                cargoSelect.style.color = '#ffffff59';
            }
        }
        if (cargoSelect) {
            updateCargoBg();
            cargoSelect.addEventListener('change', updateCargoBg);
        }

        // Usuário e Senha: mantém efeito escuro
        [usuarioInput, senhaInput].forEach(input => {
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
            if (input.value.trim() === '') {
                input.style.background = '#2e0303';
            }
        });

        // CPF: escuro só se vazio, claro ao digitar
        if (cpfInput2) {
            cpfInput2.addEventListener('focus', function() {
                this.style.background = 'rgba(143, 0, 0, 0.73)';
            });
            cpfInput2.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.style.background = '#2e0303';
                } else {
                    this.style.background = '#fff2';
                }
            });
            cpfInput2.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    this.style.background = 'rgba(143, 0, 0, 0.73)';
                }
            });
            if (cpfInput2.value.trim() === '') {
                cpfInput2.style.background = '#2e0303';
            }
        }

        // Nome completo: escuro se vazio, claro ao digitar
        if (nomeInput) {
            if (nomeInput.value.trim() === '') {
                nomeInput.style.background = '#2e0303';
            }
            nomeInput.addEventListener('focus', function() {
                this.style.background = 'rgba(143, 0, 0, 0.73)';
            });
            nomeInput.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.style.background = '#2e0303';
                } else {
                    this.style.background = '#fff2';
                }
            });
            nomeInput.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    this.style.background = 'rgba(143, 0, 0, 0.73)';
                }
            });
        }

        // Efeito de clique animado no botão
        const btn = document.getElementById('cadastrarBtn');
        btn.addEventListener('mousedown', function() {
            this.style.transform = 'scale(0.97)';
        });
        btn.addEventListener('mouseup', function() {
            this.style.transform = '';
        });
        btn.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    </script>
</body>
</html>
