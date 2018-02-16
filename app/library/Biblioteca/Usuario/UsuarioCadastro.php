<?php

namespace Tf\Lib\Biblioteca\Usuario;

use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Usuario;

/**
 *
 *
 * @package Tf\Lib\Biblioteca\Usuario
 * @date    09/02/18 11:28
 *
 * @author  Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class UsuarioCadastro extends Component implements MainInterface
{
    /**
     * @var Usuario
     */
    private $model;
    private $resposta = false;

    public function executar()
    {
        $this->model             = new Usuario();
        $this->view->usuarioForm = $this->model;

        $this->validarEntrada();

        if ($this->model->save()) {
            $this->flashSession->success("Usuário cadastrado com sucesso.");
            $this->resposta = true;
        } else {
            $this->flashSession->error("Usuário cadastrado com sucesso.");
        }
    }

    private function validarEntrada()
    {
        $this->entrada('nome', 'Nome obrigatorio.');
        $this->entrada('email', 'Email obrigatorio.');
        $this->entrada('senha', 'Senha obrigatorio.');
    }

    private function entrada($campo, $mensagem)
    {
        $this->model->{$campo} = $this->request->getPost($campo);
        if (empty($this->model->{$campo})) {
            throw new \Exception($mensagem, E_USER_ERROR);
        }
    }

    public function resposta()
    {
        if($this->resposta){
            $this->response->redirect('usuario');
        }else{
            $this->dispatcher->forward(['action'=>'index']);
        }
        return $this->resposta;


    }


}
//    $this->response->redirect('usuario');
//    $this->dispatcher->forward(['action' => 'index']);
