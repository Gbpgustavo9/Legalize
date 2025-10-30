<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Assistente Jurídico | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/painel.css') ?>">
    <style>
        .row { display:flex; gap:20px; flex-wrap:wrap; }
        .col { flex:1 1 420px; }
        .form-actions { margin-top: 12px; display:flex; gap:8px; }
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
                <li><a href="/assistente" class="active">Assistente Jurídico</a></li>
                <li><a href="/configuracoes">Configurações</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            Legalize © <?= date('Y') ?><br>Todos os direitos reservados
        </div>
    </aside>

    <header class="navbar">
        <h2>Assistente Jurídico</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user">
        </div>
    </header>

    <main class="content">
        <div class="page-title">
            <h2>Assistente Jurídico</h2>
            <p class="note">Ferramenta visual para gerar sugestões de cláusulas e modelos a partir das informações fornecidas.</p>
        </div>

        <div class="row">
            <div class="col card">
                <h3>Entrada</h3>
                <form id="assistente-form" method="post" action="#">
                    <label for="assunto">Assunto</label>
                    <input id="assunto" name="assunto" class="form-control" placeholder="Ex: contrato de prestação de serviços" />

                    <label for="detalhes">Detalhes / Pontos importantes</label>
                    <textarea id="detalhes" name="detalhes" class="form-control" rows="6" placeholder="Descreva as partes, obrigações, prazos, multas, etc."></textarea>

                    <div class="form-actions">
                        <button type="button" id="btn-gerar" class="btn">Gerar sugestão</button>
                        <button type="button" id="btn-limpar" class="btn secondary">Limpar</button>
                    </div>
                </form>
            </div>

            <div class="col card">
                <h3>Resultado / Sugestões</h3>
                <div id="assistente-result" class="preview">
                    <p class="muted">As sugestões aparecerão aqui após clicar em "Gerar sugestão".</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col card">
                <h3>Gerar contrato a partir da sugestão</h3>
                <p>Quando tiver uma sugestão aceitável, copie o texto para o gerador de contrato ou exporte direto daqui.</p>
                <div class="form-actions">
                    <button id="btn-copiar" class="btn">Copiar sugestão</button>
                    <button id="btn-export-txt" class="btn success">Exportar .txt</button>
                </div>
            </div>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>

    <script>
    document.getElementById('btn-limpar').addEventListener('click', function(){
        document.getElementById('assunto').value = '';
        document.getElementById('detalhes').value = '';
        document.getElementById('assistente-result').innerHTML = '<p class="muted">As sugestões aparecerão aqui após clicar em "Gerar sugestão".</p>';
    });

    document.getElementById('btn-gerar').addEventListener('click', function(){
        var assunto = document.getElementById('assunto').value.trim();
        var detalhes = document.getElementById('detalhes').value.trim();

        if(!assunto && !detalhes){
            alert('Por favor informe ao menos um assunto ou detalhes.');
            return;
        }

        var out = '';
        out += '<h4>Proposta de cláusulas para: ' + (assunto || 'Assunto não especificado') + '</h4>';
        out += '<ol>';
        out += '<li><strong>Objeto:</strong> Descreve o objeto do contrato conforme as partes e condições informadas.</li>';
        out += '<li><strong>Prazo:</strong> O prazo inicia na assinatura e terá duração conforme acordado entre as partes.</li>';
        out += '<li><strong>Remuneração:</strong> Forma de pagamento, valores e reajustes.</li>';
        out += '<li><strong>Rescisão:</strong> Condições para rescisão antecipada e multas aplicáveis.</li>';
        out += '<li><strong>Confidencialidade:</strong> Cláusula de sigilo para informações sensíveis.</li>';
        out += '</ol>';
        out += '<p><em>Observações:</em> ' + (detalhes || 'Nenhuma observação adicional fornecida.') + '</p>';

        document.getElementById('assistente-result').innerHTML = out;
    });

    document.getElementById('btn-copiar').addEventListener('click', function(){
        var el = document.getElementById('assistente-result');
        var range = document.createRange();
        range.selectNodeContents(el);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
        try {
            document.execCommand('copy');
            alert('Sugestão copiada para a área de transferência.');
        } catch (e) {
            alert('Não foi possível copiar automaticamente. Seleciona e use Ctrl+C.');
        }
    });

    document.getElementById('btn-export-txt').addEventListener('click', function(){
        var text = document.getElementById('assistente-result').innerText;
        if(!text.trim()){
            alert('Nenhuma sugestão disponível para exportar.');
            return;
        }

        var blob = new Blob([text], { type: 'text/plain;charset=utf-8' });
        var url = URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.href = url;
        a.download = 'sugestao_assistente.txt';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });
    </script>
</body>
</html>
