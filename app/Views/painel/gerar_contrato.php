<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerar Contrato | Legalize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f8f8f8; color: #222; min-height:100vh; }
        .sidebar { width:250px; background: linear-gradient(180deg,#330505,#530d0d); color:#fff; position:fixed; height:100vh; display:flex; flex-direction:column; justify-content:space-between; padding-bottom:12px; }
        .logo { text-align:center; padding:22px 12px; border-bottom:1px solid rgba(255,255,255,0.06); }
        .logo img{ max-width:140px; height:auto; filter: drop-shadow(0 2px 4px #0005); }
        .sidebar ul{ list-style:none; padding:18px; }
        .sidebar ul li{ margin-bottom:12px; }
        .sidebar ul li a{ color:#fff; text-decoration:none; display:block; padding:8px 10px; border-radius:8px; }
        .sidebar ul li a.active, .sidebar ul li a:hover{ background:#a66a2c; }
        .sidebar-footer{ text-align:center; padding:12px 8px; opacity:0.8; font-size:0.85rem; border-top:1px solid rgba(255,255,255,0.06); }

        header.navbar{ position:fixed; left:250px; right:0; top:0; height:60px; background:#fff; display:flex; align-items:center; justify-content:space-between; padding:0 30px; box-shadow:0 2px 8px rgba(0,0,0,0.06); }
        header.navbar h2{ color:#530d0d; font-weight:600; margin:0; }
        .user-info{ display:flex; align-items:center; gap:10px; }

        main.content{ margin-left:250px; padding:86px 30px 40px 30px; }
        .page-title{ margin-bottom:12px; }
        .grid{ display:grid; grid-template-columns: 1fr 420px; gap:20px; align-items:start; }
        @media (max-width:980px){ .grid{ grid-template-columns: 1fr; } .sidebar{ position:fixed; left:-260px; z-index:1000; } }

        .panel{ background:#fff; border-radius:10px; padding:18px; box-shadow:0 4px 18px rgba(0,0,0,0.06); }
        .panel h3{ color:#a66a2c; margin-bottom:10px; }
        label{ display:block; font-weight:600; margin-top:10px; margin-bottom:6px; color:#333; }
        input[type=text], textarea, select, input[type=date], input[type=number] { width:100%; padding:10px 12px; border:1px solid #e6e6e6; border-radius:8px; font-size:0.95rem; }
        textarea{ min-height:120px; resize:vertical; }
        .actions{ display:flex; gap:10px; margin-top:14px; }
        .btn{
            background:#a66a2c;
            color:#fff;
            padding:8px 14px;
            border-radius:6px;
            text-decoration:none;
            display:inline-block;
            border:none;                
            cursor:pointer;            
            font:inherit;               
            line-height:normal;
            -webkit-appearance:none;   
            -moz-appearance:none;
            appearance:none;
            box-shadow:none;         
        }
        .btn:hover{ opacity:0.95; }
        .btn:active{ transform:translateY(1px); }
        .btn:focus{ outline:3px solid rgba(166,106,44,0.15); outline-offset:2px; }

        .btn.secondary{ background:#6c6c6c; border:none; }
        .note{ font-size:0.9rem; color:#666; margin-top:8px; }

        .preview{ background:#fafafa; border:1px solid #ececec; padding:12px; border-radius:8px; height:500px; overflow:auto; white-space:pre-wrap; }

        .form-row{ display:grid; grid-template-columns: repeat(2,1fr); gap:12px; }
        @media (max-width:700px){ .form-row{ grid-template-columns:1fr; } }
        footer { text-align: center; font-size: 0.8rem; color: #777; margin-top: 40px; }
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
                <li><a href="/contratos" class="active">Gerar Contratos</a></li>
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

    <header class="navbar">
        <h2>Gerar Contrato</h2>
        <div class="user-info">
            <?php $usuarioNome = session()->get('usuario_nome') ?? 'Usuário'; ?>
            <span>Olá, <?= esc($usuarioNome) ?></span>
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="user" style="width:36px;height:36px;border-radius:50%;border:2px solid #a66a2c;">
        </div>
    </header>

    <main class="content">
        <div class="page-title"><h2>Criação Automática de Contratos</h2><p class="note">Preencha os campos abaixo e gere um contrato a partir de modelos pré-definidos.</p></div>

        <div class="grid">
            <section class="panel">
                <h3>Formulário de Geração</h3>
                <form id="contractForm" method="post" action="<?= base_url('contratos/generate') ?>">
                    <?= csrf_field() ?>
                    <label for="template">Modelo de Contrato</label>
                    <select id="template" name="template" class="form-control">
                        <option value="contrato_venda">Contrato de Compra e Venda</option>
                        <option value="contrato_prestacao">Contrato de Prestação de Serviços</option>
                        <option value="contrato_parceria">Contrato de Parceria</option>
                    </select>

                    <div class="form-row">
                        <div>
                            <label for="parteA">Parte A (Nome)</label>
                            <input type="text" id="parteA" name="parteA" class="form-control" placeholder="Nome da parte A" required>
                        </div>
                        <div>
                            <label for="parteB">Parte B (Nome)</label>
                            <input type="text" id="parteB" name="parteB" class="form-control" placeholder="Nome da parte B" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div>
                            <label for="data">Data</label>
                            <input type="date" id="data" name="data" class="form-control">
                        </div>
                        <div>
                            <label for="valor">Valor (R$)</label>
                            <input type="number" step="0.01" id="valor" name="valor" class="form-control" placeholder="0.00">
                        </div>
                    </div>

                    <label for="clausulas">Cláusulas adicionais (opcional)</label>
                    <textarea id="clausulas" name="clausulas" class="form-control" placeholder="Insira cláusulas específicas..."></textarea>

                    <div class="actions">
                        <a href="#" class="btn" id="btnPreview">Visualizar</a>
                        <button type="submit" class="btn" id="btnGenerate">Gerar e Baixar (.txt)</button>
                        <a href="/painel" class="btn secondary">Voltar</a>
                    </div>
                </form>
            </section>

            <aside class="panel">
                <h3>Pré-visualização</h3>
                <div class="preview" id="preview">Preencha o formulário e clique em "Visualizar" para ver o contrato aqui.</div>
            </aside>
        </div>

        <footer>
            Desenvolvido por Gustavo Barbosa © <?= date('Y') ?>
        </footer>
    </main>

    <script>
        const templates = {
            contrato_venda: `CONTRATO DE COMPRA E VENDA\n\nEntre {{PARTE_A}} e {{PARTE_B}}, tem-se justo e contratado o seguinte:\n\nCláusulas:\n\n1. Objeto: Venda de bens conforme acordado.\n\n2. Valor: R$ {{VALOR}}.\n\n3. Data: {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes.`,

            contrato_prestacao: `CONTRATO DE PRESTAÇÃO DE SERVIÇOS\n\nContratante: {{PARTE_A}}\nContratado: {{PARTE_B}}\n\nCláusulas:\n\n1. Objeto: Prestação de serviços conforme especificações.\n\n2. Remuneração: R$ {{VALOR}}.\n\n3. Vigência: a partir de {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes.`,

            contrato_parceria: `CONTRATO DE PARCERIA\n\nAs partes {{PARTE_A}} e {{PARTE_B}} acordam em firmar parceria comercial nas seguintes bases:\n\n1. Objetivo: Cooperação mútua.\n\n2. Participação: conforme acordo entre as partes.\n\n3. Data: {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes.`
        };

        function formatDateInput(value){ if(!value) return ''; try{ const d=new Date(value); return d.toLocaleDateString(); }catch(e){return value;} }

        function renderPreview(){
            const t = document.getElementById('template').value;
            const parteA = document.getElementById('parteA').value || '________________';
            const parteB = document.getElementById('parteB').value || '________________';
            const data = formatDateInput(document.getElementById('data').value) || '________________';
            const valor = document.getElementById('valor').value ? parseFloat(document.getElementById('valor').value).toFixed(2) : '0.00';
            const clausulas = document.getElementById('clausulas').value || '';

            let txt = templates[t] || '';
            txt = txt.replace(/{{PARTE_A}}/g, parteA)
                     .replace(/{{PARTE_B}}/g, parteB)
                     .replace(/{{DATA}}/g, data)
                     .replace(/{{VALOR}}/g, valor)
                     .replace(/{{CLAUSULAS}}/g, clausulas);

                        <link rel="stylesheet" href="<?= base_url('assets/css/painel.css') ?>">
    