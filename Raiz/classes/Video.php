<?php
class Video
{
    public $id;
    public $idYoutube;
    public $titulo;
    public $descricao;
    public $tags = array();
    public $inicioHora;
    public $inicioMinuto;
    public $inicioSegundo;
    public $fimHora;
    public $fimMinuto;
    public $fimSegundo;

    public function Inicio()
    {
        return $this->inicioHora * 3600 + $this->inicioMinuto * 60 + $this->inicioSegundo;
    }

    public function Fim()
    {
        return $this->fimHora * 3600 + $this->fimMinuto * 60 + $this->fimSegundo;
    }
}
