<?php
namespace M2i\Framework;


abstract class AbstractController{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = (new DAO)->getConnection();

        dd($this->connection);
    }

    public function render ($template, $data = []){
        $loader = new \Twig\Loader\FilesystemLoader('src/Resources/views');
        $twig = new \Twig\Environment($loader,[
            'cache' => 'var/cache',
            'debug' => true 
        ]);
        return $twig->render($template, $data);
    }
}