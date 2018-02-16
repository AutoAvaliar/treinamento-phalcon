<?php

namespace Tf\Controllers;

use Tf\Lib\Biblioteca\Usuario\UsuarioCadastro;
use Tf\Lib\Biblioteca\Usuario\UsuarioEditar;
use Tf\Lib\Biblioteca\Usuario\UsuarioExcluir;
use Tf\Lib\Biblioteca\Usuario\UsuarioHelper;
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
    public function beforeExecuteRoute($dispatcher)
    {
        $this->view->usuarioForm = UsuarioHelper::getUser();
        $this->view->usuarios    = Usuario::find();
        $this->view->formAction  = UsuarioHelper::$formAction;
    }

    public function indexAction() { }

    public function cadastroAction()
    {
        parent::execVolt(new UsuarioCadastro());
    }

    public function editarAction($id)
    {
        parent::execVolt(new UsuarioEditar($id));
    }

    public function excluirAction($id)
    {
        parent::execVolt(new UsuarioExcluir($id));
    }

    public function cadastroJsonAction()
    {
        return parent::execJson(new UsuarioCadastro());
    }

}
