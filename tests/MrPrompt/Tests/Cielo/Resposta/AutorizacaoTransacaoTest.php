<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\AutorizacaoTransacao;
use PHPUnit_Framework_TestCase;

class AutorizacaoTransacaoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AutorizacaoTransacao
     */
    protected $object;
    
    /**
     * Setup
     * 
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->object = new AutorizacaoTransacao();
    }
}