<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\Consulta;
use PHPUnit_Framework_TestCase;

class ConsultaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Consulta
     */
    protected $object;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Consulta();
    }
}