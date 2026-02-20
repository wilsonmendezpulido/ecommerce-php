<?php

class Usuario
{
    private $id;
    private $nombre;
    private $correo;
    private $password;

    public function __construct($id, $nombre, $correo, $password)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getCorreo()
    {
        return $this->correo;
    }

    public function verificarPassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function __destruct()
    {
        // Limpieza opcional
    }
}
