<?php
namespace MrPrompt\Tests\Cielo\Resposta;

use MrPrompt\Cielo\Resposta\Resposta;
use PHPUnit_Framework_TestCase;

class RespostaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Requisicao
     */
    protected $object;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Resposta();
    }
}