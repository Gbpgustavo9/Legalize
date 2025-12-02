<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Análise de Cláusulas | Legalize</title>
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
                <li><a href="/analise" class="active">Análise de Cláusulas</a></li>
                <li><a href="/leis">Consulta Legislativa</a></li>
                <li><a href="/assistente">Assistente Jurídico</a></li>
                <li><a href="/configuracoes">Configurações</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            Legalize © <?= date('Y') ?><br>Todos os direitos reservados
        </div>
    </aside>

    <header class="navbar">
        <h2>Análise de Cláusulas</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user">
        </div>
    </header>

    <main class="content">
        <div class="page-title">
            <h2>Analise suas cláusulas</h2>
            <p class="note">Cole uma cláusula ou envie um documento para receber uma análise preliminar (funcionalidade em desenvolvimento).</p>
        </div>

        <div class="grid">
            <section class="panel">
                <h3>Enviar cláusula</h3>
                <form id="analiseForm" method="post" action="#">
                    <label for="clausula_text">Texto da cláusula</label>
                    <textarea id="clausula_text" name="clausula_text" placeholder="Cole a cláusula aqui..." required></textarea>

                    <label for="arquivo">Ou envie um arquivo (opcional)</label>
                    <input type="file" id="arquivo" name="arquivo" accept=".txt,.doc,.docx,.pdf">

                    <div class="actions">
                        <a href="#" class="btn" id="btnPreview">Pré-visualizar</a>
                        <button type="submit" class="btn" id="btnAnalyze">Analisar</button>
                        <a href="/painel" class="btn secondary">Voltar</a>
                    </div>
                </form>
            </section>

            <aside class="panel">
                <h3>Resultado</h3>
                <div class="preview" id="result">A análise aparecerá aqui após você enviar o texto. Por enquanto esta é apenas a área visual.</div>
                <p class="note">Funcionalidade de análise será integrada em breve — esta é a estrutura visual.</p>
            </aside>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>

    <script>
        document.getElementById('btnPreview').addEventListener('click', function(e){ e.preventDefault();
            const text = document.getElementById('clausula_text').value || 'Nenhuma cláusula informada';
            document.getElementById('result').textContent = text;
        });

        document.getElementById('analiseForm').addEventListener('submit', function(e){ e.preventDefault();
            document.getElementById('result').textContent = 'Análise simulada: nenhuma regra aplicada (em desenvolvimento).';
        });
    </script>
</body>
</html>
