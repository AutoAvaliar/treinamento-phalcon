<?php

namespace Tf\Lib\Biblioteca\Usuario;

use Tf\Models\Usuario;

/**
 *
 *
 * @package Tf\Lib\Biblioteca\Usuario
 * @date    16/02/18 12:32
 *
 * @author  Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class UsuarioHelper
{
    /**
     * @var Usuario
     */
    public static $user;
    public static $formAction = 'usuario/cadastro';
    public static $usuarioFirst;

    public static function getUser()
    {
        if (self::$user == null)
            return (new Usuario());

        return self::$user;
    }
}
