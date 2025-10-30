<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/painel.css') ?>">
</head>
<body>

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <div>
            <div class="logo">
                <img src="/emblema.png" alt="Logo Legalize">
            </div>
            <ul>
                <li><a href="/painel" class="active">Painel</a></li>
                <li><a href="/contratos">Gerar Contratos</a></li>
                <li><a href="/analise">Análise de Cláusulas</a></li>
                <li><a href="/leis">Consulta Legislativa</a></li>
                <li><a href="/assistente">Assistente Jurídico</a></li>
                <li><a href="/configuracoes">Configurações</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            Legalize © <?= date('Y') ?><br>Todos os direitos reservados
        </div>
    </aside>

    <!-- ===== NAVBAR ===== -->
    <header class="navbar">
        <h2>Painel de Controle</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user">
        </div>
    </header>

    <!-- ===== CONTEÚDO PRINCIPAL ===== -->
    <main class="content">
        <h2>Bem-vindo ao Legalize</h2>
        <p style="margin: 8px 0 25px 0; color:#444;">
            Aqui você pode acompanhar as últimas atualizações legais, gerar contratos automáticos e utilizar as ferramentas inteligentes do sistema.
        </p>

        <div class="cards">
            <div class="card">
                <h3>Atualizações Legislativas</h3>
                <p>Veja as leis e normas mais recentes que afetam o cenário jurídico brasileiro.</p>
                <a href="/leis" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h3>Criação Automática de Contratos</h3>
                <p>Crie contratos personalizados em poucos cliques com base em modelos jurídicos.</p>
                <a href="/contratos" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h3>Análise de Cláusulas</h3>
                <p>Identifique cláusulas de risco em documentos e receba sugestões de melhoria.</p>
                <a href="/analise" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h3>Assistente Jurídico</h3>
                <p>Tire dúvidas sobre termos, artigos e procedimentos com o assistente do sistema.</p>
                <a href="/assistente" class="btn">Acessar</a>
            </div>

            <div class="card">
                <h3>Previsão de Sucesso em Processos</h3>
                <p>Simule suas chances de sucesso com base em dados estatísticos e históricos.</p>
                <a href="/processos" class="btn">Acessar</a>
            </div>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>
</body>
</html>
