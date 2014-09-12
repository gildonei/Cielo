<?php
namespace MrPrompt\Tests\Cielo\Requisicao;

use MrPrompt\Cielo\Resposta\IdentificacaoTransacao;
use PHPUnit_Framework_TestCase;
use SimpleXMLElement;

class IdentificacaoTransacaoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var IdentificacaoTransacao
     */
    protected $object;
    
    public function respostas()
    {
        return [
            [
                '<?xml version="1.0"?><requisicao-tid id="6" versao="1.1.0"><dados-ec><numero>1006993069</numero>' . 
                '<chave>25fbb99741c739dd84d7b06ec78c9bac718838630f30b112d033ce2e621b34f3</chave></dados-ec>' .
                '<forma-pagamento><bandeira>visa</bandeira><produto>1</produto><parcelas>1</parcelas></forma-pagamento></requisicao-tid>'
            ]
        ];
    }
    
    /**
     * @test
     * 
     * @covers MrPrompt\Cielo\Resposta\IdentificacaoTransacao::getConteudo
     * @dataProvider respostas
     */
    public function getXmlStringQuandoRespostaValida($resposta)
    {
        $xml = new SimpleXMLElement($resposta);
        $obj = new IdentificacaoTransacao($xml);
        
        $this->assertNotEmpty($obj->getXml());
    }
}