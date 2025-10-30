<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f8f8;
            display: flex;
            min-height: 100vh;
            color: #222;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #330505, #530d0d);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 10px rgba(0,0,0,0.3);
            position: fixed;
            height: 100vh;
        }

        .sidebar .logo {
            text-align: center;
            padding: 25px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar .logo img {
            max-width: 140px;
            height: auto;
            filter: drop-shadow(0 2px 4px #0005);
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
        }

        .sidebar ul li {
            margin-bottom: 16px;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 10px 12px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .sidebar ul li a:hover, .sidebar ul li a.active {
            background: #a66a2c;
        }

        .sidebar-footer {
            text-align: center;
            font-size: 0.8rem;
            padding: 15px;
            opacity: 0.8;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #fff;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px; /* matched with content padding for horizontal alignment */
            position: fixed;
            left: 250px;
            right: 0;
            top: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .navbar h2 {
            font-weight: 600;
            color: #530d0d;
            margin: 0; /* remove default margin to align precisely with content */
        }

        .navbar .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .navbar .user-info img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid #a66a2c;
        }

        /* ===== CONTEÚDO ===== */
        .content {
            margin-left: 250px;
            padding: 80px 30px 30px 30px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        /* Padrão unificado para os cards */
        :root { --card-min-height: 240px; }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: transform 0.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: var(--card-min-height);
            position: relative;
            overflow: hidden;
        }

        .card:hover { transform: translateY(-5px); }

        .card h3 {
            color: #a66a2c;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 0.9rem;
            line-height: 1.5;
            color: #444;
            margin-bottom: 8px;
        }

        /* Botão padronizado fixado no canto inferior esquerdo do card */
        .card .btn {
            background: #a66a2c;
            color: #fff;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.2s;
            align-self: flex-start; /* left */
            margin-top: auto; /* push to bottom */
        }

        .card .btn:hover { opacity: 0.9; }

        /* ===== FOOTER ===== */
        footer {
            text-align: center;
            font-size: 0.8rem;
            color: #777;
            margin-top: 40px;
        }
    </style>
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
