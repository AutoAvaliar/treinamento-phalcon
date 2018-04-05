<?php
namespace Tf\Lib\Biblioteca\Autor;

use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Autor;

class AutorCadastro extends Component implements MainInterface
{

    /**
     * @var Autor
     */
    private $model;
    private $resposta = false;
    private $mensagem = '';
    private $dados = [];

    public function __construct($dados = [])
    {
        if (!$dados) {
            $dados = $this->request->getPost();
        }
        $this->dados = $dados;
    }

    public function executar()
    {
        $this->model = new Autor();
        $this->view->autorForm = $this->model;

        try {
            $this->validarEntrada();

            if ($this->model->save()) {
                $this->mensagem = "Autor cadastrado com sucesso!";
                $this->resposta = true;
            } else {
                $this->mensagem = "Ocorreu um erro ao cadastrar o autor!";
            }
        } catch (\Exception $ex) {
            $this->mensagem = $ex->getMessage();
        }
    }

    private function validarEntrada()
    {
        $this->entrada('nome', 'Nome obrigatorio.');
    }

    private function entrada($campo, $mensagem)
    {
        $this->model->{$campo} = isset($this->dados[$campo]) ? $this->dados[$campo] : NULL;
        if (empty($this->model->{$campo})) {
            throw new \Exception($mensagem, E_USER_ERROR);
        }
    }

    public function resposta()
    {
        return $this->resposta;
    }

    public function mensagem()
    {
        return $this->mensagem;
    }

    public function resultado()
    {
        return ['sucesso' => $this->resposta, 'mensagem' => $this->mensagem];
    }
}
