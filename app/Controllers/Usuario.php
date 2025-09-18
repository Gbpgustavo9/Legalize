<?php
namespace App\Controllers;

use CodeIgniter\Controller;


use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function cadastrar()
    {
        return view('usuario/cadastrar_usuario');
    }

    public function salvar()
    {
        $request = service('request');
        $nome = $request->getPost('nome');
        $cpf = $request->getPost('cpf');
        $cargo = $request->getPost('cargo');
        $usuario = $request->getPost('usuario');
        $senha = $request->getPost('senha');

        // Validação simples
        if (!$nome || !$cpf || !$cargo || !$usuario || !$senha) {
            return redirect()->back()->with('error', 'Preencha todos os campos.');
        }

        $usuarioModel = new UsuarioModel();
        $data = [
            'nome' => $nome,
            'cpf' => $cpf,
            'cargo' => $cargo,
            'usuario' => $usuario,
            'senha' => password_hash($senha, PASSWORD_DEFAULT),
        ];

        // Salva o usuário
        $usuarioModel->insert($data);

        return redirect()->to('/')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function login()
    {
        $request = service('request');
        $usuario = $request->getPost('usuario');
        $senha = $request->getPost('senha');

        if (!$usuario || !$senha) {
            return redirect()->back()->with('error', 'Preencha usuário e senha.');
        }

        $usuarioModel = new UsuarioModel();
        $user = $usuarioModel->where('usuario', $usuario)->first();

        if ($user && password_verify($senha, $user['senha'])) {
            // Login bem-sucedido, pode salvar dados na sessão se desejar
            session()->set('usuario_logado', $user['id']);
            return view('painel/painel');
        } else {
            return redirect()->back()->with('error', 'Usuário ou senha inválidos.');
        }
    }

    public function redefinirSenha()
    {
        $request = service('request');
        $usuario = $request->getPost('usuario');
        $cpf = $request->getPost('cpf');
        $novaSenha = $request->getPost('nova_senha');

        if (!$usuario || !$cpf || !$novaSenha) {
            return redirect()->back()->with('error', 'Preencha todos os campos.');
        }

        $usuarioModel = new UsuarioModel();
        $user = $usuarioModel->where('usuario', $usuario)->where('cpf', $cpf)->first();

        if ($user) {
            $usuarioModel->update($user['id'], [
                'senha' => password_hash($novaSenha, PASSWORD_DEFAULT)
            ]);
            return redirect()->to('/')->with('success', 'Senha redefinida com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Usuário ou CPF incorretos.');
        }
    }
}
