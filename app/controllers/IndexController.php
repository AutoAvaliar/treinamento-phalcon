<?php

namespace Tf\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function testAction(){
        $this->flash->error('too bad! the form had errors');
        $this->flash->success('yes!, everything went very smoothly');
        $this->flash->notice('this a very important information');
        $this->flash->warning("best check yo self, you're not looking too good.");

        $this->dispatcher->forward(['action'=>'index']);
    }

}

