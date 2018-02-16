<?php

namespace Tf\Controllers;

use Phalcon\Mvc\Controller;
use Tf\Lib\MainInterface;

class ControllerBase extends Controller
{
    protected function execVolt(MainInterface $main)
    {
        try {
            $main->executar();
        } catch (\Exception $e) {
            $this->flashSession->error($e->getMessage());
        }
        return $main->resposta();
    }

    protected function execJson(MainInterface $main)
    {
        $main->executar();
        return $this->response->setJsonContent($main->resposta());
    }

}
