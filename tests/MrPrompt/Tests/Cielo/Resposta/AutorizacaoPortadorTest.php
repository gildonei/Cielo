<?php
namespace MrPrompt\Tests\Cielo\Resposta;

use MrPrompt\Cielo\Resposta\AutorizacaoPortador;
use PHPUnit_Framework_TestCase;

class AutorizacaoPortadorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AutorizacaoPortador
     */
    protected $object;
    
    /**
     * Setup 
     * 
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $mock = $this->getMock('MrPrompt\Cielo\Requisicao\AutorizacaoPortador', array(), array(), '', false);
        
        $this->object = new AutorizacaoPortador($mock);
    }
}