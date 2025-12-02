<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Contratos extends BaseController
{
    public function index()
    {
        return view('painel/gerar_contrato');
    }

    public function generate()
    {
        $post = $this->request->getPost();

    $template = $post['template'] ?? 'contrato_venda';
        $parteA = $post['parteA'] ?? '__________';
        $parteB = $post['parteB'] ?? '__________';
        $data = $post['data'] ?? '';
        $valor = isset($post['valor']) && $post['valor'] !== '' ? number_format((float)$post['valor'], 2, '.', '') : '0.00';
        $clausulas = $post['clausulas'] ?? '';
    $format = $post['format'] ?? 'auto'; // 'pdf', 'txt' or 'auto'

        // Templates espelhados do lado cliente (simples)
        $templates = [
            'contrato_venda' => "CONTRATO DE COMPRA E VENDA\n\nEntre {{PARTE_A}} e {{PARTE_B}}, tem-se justo e contratado o seguinte:\n\nCláusulas:\n\n1. Objeto: Venda de bens conforme acordado.\n\n2. Valor: R$ {{VALOR}}.\n\n3. Data: {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes.",
            'contrato_prestacao' => "CONTRATO DE PRESTAÇÃO DE SERVIÇOS\n\nContratante: {{PARTE_A}}\nContratado: {{PARTE_B}}\n\nCláusulas:\n\n1. Objeto: Prestação de serviços conforme especificações.\n\n2. Remuneração: R$ {{VALOR}}.\n\n3. Vigência: a partir de {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes.",
            'contrato_parceria' => "CONTRATO DE PARCERIA\n\nAs partes {{PARTE_A}} e {{PARTE_B}} acordam em firmar parceria comercial nas seguintes bases:\n\n1. Objetivo: Cooperação mútua.\n\n2. Participação: conforme acordo entre as partes.\n\n3. Data: {{DATA}}.\n\n{{CLAUSULAS}}\n\nAssinam as partes."
        ];

        $txt = $templates[$template] ?? $templates['contrato_venda'];
        $txt = str_replace(['{{PARTE_A}}','{{PARTE_B}}','{{DATA}}','{{VALOR}}','{{CLAUSULAS}}'], [$parteA,$parteB,$data,$valor,$clausulas], $txt);

        // salvar no servidor em writable/contratos (formato TXT)
        $saveDir = WRITEPATH . 'contratos/';
        if (!is_dir($saveDir)) {
            mkdir($saveDir, 0755, true);
        }

        $filename = 'contrato_' . date('Ymd_His') . '.txt';
        $filepath = $saveDir . $filename;
        file_put_contents($filepath, $txt);

        return $this->response->download($filepath, null)->setFileName($filename);
    }
}
