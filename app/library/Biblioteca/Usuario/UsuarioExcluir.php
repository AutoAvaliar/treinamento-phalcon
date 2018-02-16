<?php

namespace Tf\Lib\Biblioteca\Usuario;
use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Usuario;

/**
 *
 *
 * @package Tf\Lib\Biblioteca\Usuario
 * @date    16/02/18 12:19
 *
 * @author  Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class UsuarioExcluir extends Component implements MainInterface
{
    private $id;

    public function __construct($id) { $this->id = $id; }

    public function executar()
    {
        $usuario = Usuario::find($this->id);

        if ($usuario->delete()) {
            $this->flashSession->success("Usuario excluido com sucesso");
        } else {
            $this->flashSession->error("Ops, falha ao excluir usuario.");
        }
    }

    public function resposta()
    {
        $this->response->redirect('usuario');
    }
}
