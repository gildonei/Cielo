<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\IdentificacaoTransacao;
use PHPUnit_Framework_TestCase;

class IdentificacaoTransacaoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var IdentificacaoTransacao
     */
    protected $object;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new IdentificacaoTransacao();
    }
}