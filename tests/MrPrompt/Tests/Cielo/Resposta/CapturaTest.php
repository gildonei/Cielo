<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\Captura;
use PHPUnit_Framework_TestCase;

class CapturaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Captura
     */
    protected $object;
    
    /**
     * Setup 
     * 
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->object = new Captura();
    }
}