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
    private $resposta;

    public function executar()
    {
        $this->model = new Usuario();
        $this->validarEntrada();

        if ($this->model->save()) {
            $this->resposta = "Usuário cadastrado com sucesso.";
            $this->flash->success($this->resposta);
        } else {
            $this->resposta = "Falha ao cadastrado com sucesso.";
            $this->flash->error($this->resposta);
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
            throw new \Exception($mensagem);
        }
    }

    public function resposta()
    {
        return ['status'=>$this->resposta];
    }


}
