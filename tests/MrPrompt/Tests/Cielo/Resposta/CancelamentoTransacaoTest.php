<?php
namespace MrPrompt\Tests\Cielo\Resposta;

use MrPrompt\Cielo\Resposta\CancelamentoTransacao;
use PHPUnit_Framework_TestCase;

class CancelamentoTransacaoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CancelamentoTransacao
     */
    protected $object;
    
    /**
     * Setup
     * 
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp()
    {
        $this->object = new CancelamentoTransacao();
    }
}