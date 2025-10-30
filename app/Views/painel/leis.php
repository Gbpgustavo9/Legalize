<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta Legislativa | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/painel.css') ?>">
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
                <li><a href="/leis" class="active">Consulta Legislativa</a></li>
                <li><a href="/assistente">Assistente Jurídico</a></li>
                <li><a href="/configuracoes">Configurações</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            Legalize © <?= date('Y') ?><br>Todos os direitos reservados
        </div>
    </aside>

    <header class="navbar">
        <h2>Consulta Legislativa</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user">
        </div>
    </header>

    <main class="content">
        <div class="page-title">
            <h2>Pesquisa Legislativa</h2>
            <p class="note">Busque por leis, projetos e normas por palavra-chave, número ou ano. Esta página é apenas a estrutura visual.</p>
        </div>

        <div class="grid">
            <section class="panel">
                <h3>Pesquisar legislação</h3>
                <form id="searchForm" method="get" action="#">
                    <label for="query">Termo de pesquisa</label>
                    <input type="text" id="query" name="query" placeholder="Ex.: Código Civil, PL 1234, MPV 2020" required>

                    <div class="form-row">
                        <div>
                            <label for="type">Tipo</label>
                            <select id="type" name="type">
                                <option value="all">Todos</option>
                                <option value="lei">Lei</option>
                                <option value="pl">Projeto de Lei</option>
                                <option value="mpv">Medida Provisória</option>
                            </select>
                        </div>
                        <div>
                            <label for="year">Ano</label>
                            <input type="number" id="year" name="year" placeholder="2023">
                        </div>
                    </div>

                    <div class="actions">
                        <a href="#" class="btn" id="btnPreview">Pesquisar</a>
                        <button type="submit" class="btn" id="btnSearch">Buscar</button>
                        <a href="/painel" class="btn secondary">Voltar</a>
                    </div>
                </form>
            </section>

            <aside class="panel">
                <h3>Resultados</h3>
                <div class="preview" id="results">Os resultados da pesquisa aparecerão aqui.</div>
                <p class="note">Integração com base de dados e filtros avançados será implementada em seguida.</p>
            </aside>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>

    <script>
        document.getElementById('btnPreview').addEventListener('click', function(e){ e.preventDefault();
            const q = document.getElementById('query').value || 'Nenhum termo';
            document.getElementById('results').textContent = 'Pré-visualização de busca para: ' + q;
        });

        document.getElementById('searchForm').addEventListener('submit', function(e){ e.preventDefault();
            document.getElementById('results').textContent = 'Busca simulada executada (desenvolvimento).';
        });
    </script>
</body>
</html>
