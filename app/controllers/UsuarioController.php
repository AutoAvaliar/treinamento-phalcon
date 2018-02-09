<?php

namespace Tf\Controllers;

use Tf\Lib\Biblioteca\Usuario\UsuarioCadastro;

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
    public function indexAction() { }

    public function cadastroAction()
    {
        parent::execVolt(new UsuarioCadastro());
        $this->dispatcher->forward(['action'=>'index']);
    }

    public function cadastroJsonAction()
    {
        return parent::execJson(new UsuarioCadastro());
    }

}
