<?php
namespace Tf\Lib\Biblioteca\Autor;

use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Autor;

class AutorExcluir extends Component implements MainInterface
{

    private $id;
    private $resposta = false;
    private $mensagem = '';

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function executar()
    {
        $autor = Autor::findFirst($this->id);
        if ($autor && $autor->delete()) {
            $this->mensagem = "Autor excluido com sucesso!";
            $this->resposta = true;
        } else {
            $this->mensagem = "Ocorreu um erro ao excluir o autor!";
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
