<?php
namespace Tf\Lib\Biblioteca\Autor;

use Phalcon\Mvc\User\Component;
use Tf\Lib\MainInterface;
use Tf\Models\Autor;

class AutorListar extends Component implements MainInterface
{

    private $resposta = [];

    private function listagem()
    {
        $autor = new Autor();
        $this->resposta = $autor->find()->toArray();
    }

    public function executar()
    {
        $this->listagem();
    }

    public function resposta()
    {
        return $this->resposta;
    }
}
