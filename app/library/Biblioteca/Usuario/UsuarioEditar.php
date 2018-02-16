<?php

namespace Tf\Lib\Biblioteca\Usuario;

use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Usuario;

/**
 *
 *
 * @package Tf\Lib\Biblioteca\Usuario
 * @date    16/02/18 12:15
 *
 * @author  Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class UsuarioEditar extends Component implements MainInterface
{
    private $id;
    private $resultado = false;

    /**
     * @param int $id Informe o ID do usuário
     */
    public function __construct($id) { $this->id = $id; }

    public function executar()
    {
        // set a ação do formulario, ou seja, para o mesmo controller
        UsuarioHelper::$formAction = 'usuario/editar/' . $this->id;

        // carrega o usuario informado
        UsuarioHelper::$user = Usuario::findFirst($this->id);

        // se for um post, atualiza o usuario
        if ($this->request->isPost())
            $this->updateData();
    }

    /**
     * Efetua a atualização do usuario
     */
    private function updateData()
    {
        UsuarioHelper::$user->nome  = $this->request->getPost('nome');
        UsuarioHelper::$user->email = $this->request->getPost('email');
        UsuarioHelper::$user->senha = $this->request->getPost('senha');

        $this->resultado = UsuarioHelper::$user->save();
    }

    /**
     * Resposta da Operação
     */
    public function resposta()
    {
        if ($this->resultado) {
            $this->response->redirect('usuario');
        } else {
            $this->dispatcher->forward(['action' => 'index']);
        }
    }
}
