<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Configurações | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/painel.css') ?>">
    <style>
        .form-row{ display:flex; gap:12px; flex-wrap:wrap; }
        .form-col{ flex:1 1 220px; }
        .small-note{ font-size:0.9rem; color:#666; margin-top:6px; }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div>
            <div class="logo">
                <img src="/emblema.png" alt="Logo Legalize">
            </div>
            <ul>
                <li><a href="/painel">Painel</a></li>
                <li><a href="/contratos">Gerar Contratos</a></li>
                <li><a href="/analise">Análise de Cláusulas</a></li>
                <li><a href="/leis">Consulta Legislativa</a></li>
                <li><a href="/assistente">Assistente Jurídico</a></li>
                <li><a href="/configuracoes" class="active">Configurações</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            Legalize © <?= date('Y') ?><br>Todos os direitos reservados
        </div>
    </aside>

    <header class="navbar">
        <h2>Configurações</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user">
        </div>
    </header>

    <main class="content">
        <div class="page-title">
            <h2>Configurações da conta</h2>
            <p class="note">Atualize seu perfil, altere sua senha e ajuste preferências do sistema.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Perfil</h3>
                <form id="perfilForm" method="post" action="#">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" class="form-control form-control-lg" value="<?= esc(session()->get('usuario_nome') ?? '') ?>" />

                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="seu@exemplo.com" />

                    <div class="form-actions">
                        <button type="button" id="btn-salvar-perfil" class="btn">Salvar perfil</button>
                        <button type="button" id="btn-reset-perfil" class="btn secondary">Restaurar</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <h3>Senha</h3>
                <form id="senhaForm" method="post" action="#">
                    <label for="senha_atual">Senha atual</label>
                    <input id="senha_atual" name="senha_atual" type="password" class="form-control" />

                    <label for="nova_senha">Nova senha</label>
                    <input id="nova_senha" name="nova_senha" type="password" class="form-control" />

                    <label for="confirmar_senha">Confirmar nova senha</label>
                    <input id="confirmar_senha" name="confirmar_senha" type="password" class="form-control" />

                    <div class="form-actions">
                        <button type="button" id="btn-mudar-senha" class="btn">Alterar senha</button>
                    </div>
                    <p class="small-note">Dica: use no mínimo 8 caracteres, com letras e números.</p>
                </form>
            </div>

            <div class="card">
                <h3>Preferências</h3>
                <form id="prefForm" method="post" action="#">
                    <label><input type="checkbox" id="pref_notificacoes" checked /> Receber notificações por e-mail</label>
                    <label><input type="checkbox" id="pref_news" /> Receber novidades e atualizações</label>

                    <div class="form-actions">
                        <button type="button" id="btn-salvar-pref" class="btn">Salvar preferências</button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>

    <script>
    // Handlers visuais (mock) — substitua por chamadas reais ao servidor quando desejar
    document.getElementById('btn-salvar-perfil').addEventListener('click', function(){
        alert('Perfil salvo (simulado).');
    });
    document.getElementById('btn-reset-perfil').addEventListener('click', function(){
        document.getElementById('nome').value = '<?= esc(session()->get('usuario_nome') ?? '') ?>';
        document.getElementById('email').value = '';
    });
    document.getElementById('btn-mudar-senha').addEventListener('click', function(){
        var nova = document.getElementById('nova_senha').value;
        var conf = document.getElementById('confirmar_senha').value;
        if(nova !== conf){ alert('As senhas não coincidem.'); return; }
        if(nova.length < 8){ alert('A senha deve ter ao menos 8 caracteres.'); return; }
        alert('Senha alterada (simulado).');
    });
    document.getElementById('btn-salvar-pref').addEventListener('click', function(){
        alert('Preferências salvas (simulado).');
    });
    </script>

</body>
</html>
