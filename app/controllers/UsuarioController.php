<?php

namespace Tf\Controllers;

use Tf\Lib\Biblioteca\Usuario\UsuarioCadastro;
use Tf\Models\Usuario;

/**
 *
 *
 * @package Tf\Controllers
 * @date    07/02/18 11:01
 *
 * @author  Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class UsuarioController extends ControllerBase
{
    public function onConstruct()
    {
        $this->view->usuarioForm = new Usuario();
        $this->view->usuarios    = Usuario::find();
    }

    public function indexAction() { }

    public function cadastroAction()
    {
        parent::execVolt(new UsuarioCadastro());
    }

    public function editarAction($id)
    {
        $this->view->usuarioForm = Usuario::findFirst($id);
        $this->dispatcher->forward(['action' => 'index']);
    }

    public function excluirAction($id)
    {
        $usuario = Usuario::find($id);

        if ($usuario->delete()) {
            $this->flashSession->success("Usuario excluido com sucesso");
        } else {
            $this->flashSession->error("Ops, falha ao excluir usuario.");
        }

        $this->response->redirect('usuario');
    }

    public function cadastroJsonAction()
    {
        return parent::execJson(new UsuarioCadastro());
    }

}
