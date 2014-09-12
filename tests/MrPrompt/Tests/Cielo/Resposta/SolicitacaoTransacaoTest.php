<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\SolicitacaoTransacao;
use PHPUnit_Framework_TestCase;

class SolicitacaoTransacaoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SolicitacaoTransacao
     */
    protected $object;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new SolicitacaoTransacao();
    }
}