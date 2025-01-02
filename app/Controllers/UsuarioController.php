<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {

        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();
       return view('usuarios/index', ['usuarios' => $usuarios]);
    }

    public function create(){
        return view('usuarios/create');
    }

    public function store(){
       $usuarioModel = new UsuarioModel();
       $data = [
           'nome'  => $this->request->getVar('nome'),
           'email' => $this->request->getVar('email'),
           'senha' => $this->request->getVar('senha')
       ];

       if ($usuarioModel->insert($data)) {
            // Definir mensagem de sucesso
            session()->setFlashdata('success', 'Usuário inserido com sucesso!');
            return redirect()->to('/usuario');
        } else {
            // Definir mensagem de erro
            session()->setFlashdata('error', 'Falha ao inserir o usuário.');
            return redirect()->to('/usuario')->withInput(); // Retorna os dados já inseridos no formulário
        }
   
    }

    public function edit($id){
 
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);
        $data = [
            'id'    => $id,
            'nome'  => $usuario['nome'],
            'email' => $usuario['email'],
            'senha' => $usuario['senha']
        ];  

     
        return view('usuarios/edit', ['usuario' => $data]);

        
    }

    public function delete($id){
       $usuarioModel = new UsuarioModel();
       
       if ($usuarioModel->delete($id)) {
            // Definir mensagem de sucesso
            session()->setFlashdata('success', 'Usuário excluido com sucesso!');
            return redirect()->to('/usuario');
        } else {
            // Definir mensagem de erro
            session()->setFlashdata('error', 'Falha ao excluir o usuário.');
            return redirect()->to('/usuario');
        }
    }

    public function update($id){
        $usuarioModel = new UsuarioModel();
        
        $data = [
            'id'    => $id,
            'nome'  => $this->request->getVar('nome'),
            'email' => $this->request->getVar('email'),
            'senha' => $this->request->getVar('senha')
        ];  
        if ($usuarioModel->update($id, $data)) {
            // Definir mensagem de sucesso
            session()->setFlashdata('success', 'Usuário atualizado com sucesso!');
            return redirect()->to('/usuario');
        } else {
            // Definir mensagem de erro
            session()->setFlashdata('error', 'Falha ao atualizar o usuário.');
            return redirect()->to('/usuario')->withInput(); // Retorna os dados já inseridos no formulário
        }
        
    }
}
