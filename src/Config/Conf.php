<?php
namespace App\eCommerce\Config;

class Conf
{

    static private array $databases = array(

        'hostname' => '',

        'database' => '',

        'login' => '',

        'password' => ''
    );

    static public function getLogin(): string
    {
        // L'attribut statique $databases s'obtient avec la syntaxe static::$databases
        // au lieu de $this->databases pour un attribut non statique
        return static::$databases['login'];
    }

    static public function getHostName(): string
    {
        return static::$databases['hostname'];
    }

    static public function getDatabase(): string
    {
        return static::$databases['database'];
    }

    static public function getPassword(): string
    {
        return static::$databases['password'];
    }
}

?>

