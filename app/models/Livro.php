<?php

namespace Tf\Models;

class Livro extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(column="cd_autor", type="integer", length=11, nullable=false)
     */
    public $cd_autor;

    /**
     *
     * @var integer
     * @Column(column="cd_genero", type="integer", length=11, nullable=false)
     */
    public $cd_genero;

    /**
     *
     * @var string
     * @Column(column="titulo", type="string", length=85, nullable=false)
     */
    public $titulo;

    /**
     *
     * @var integer
     * @Column(column="ano", type="integer", length=5, nullable=false)
     */
    public $ano;

    /**
     *
     * @var integer
     * @Column(column="edicao", type="integer", length=5, nullable=false)
     */
    public $edicao;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("biblioteca");
        $this->setSource("livro");
        $this->hasMany('id', 'Emprestimo', 'cd_livro', ['alias' => 'Emprestimo']);
        $this->belongsTo('cd_autor', '\Autor', 'id', ['alias' => 'Autor']);
        $this->belongsTo('cd_genero', '\Genero', 'id', ['alias' => 'Genero']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'livro';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Livro[]|Livro|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Livro|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
