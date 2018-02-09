<?php

namespace Tf\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Usuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(column="nome", type="string", length=45, nullable=false)
     */
    public $nome;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=85, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(column="senha", type="string", length=128, nullable=false)
     */
    public $senha;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
//        $validator = new Validation();
//
//        $validator->add(
//            'email',
//            new EmailValidator(
//                [
//                    'model'   => $this,
//                    'message' => 'Please enter a correct email address',
//                ]
//            )
//        );
//
//        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("biblioteca");
        $this->setSource("usuario");
        $this->hasMany('id', 'Emprestimo', 'cd_usuario', ['alias' => 'Emprestimo']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'usuario';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario[]|Usuario|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Usuario|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
