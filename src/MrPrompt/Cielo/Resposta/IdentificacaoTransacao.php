<?php
/**
 * Cielo
 *
 * Cliente para o Web Service da Cielo.
 *
 * O Web Service permite efetuar vendas com cartões de bandeira
 * VISA e Mastercard, tanto no débito quanto em compras a vista ou parceladas.
 *
 * Licença
 * Este código fonte está sob a licença GPL-3.0+
 *
 * @category   Library
 * @package    MrPrompt\Cielo
 * @subpackage Cliente
 * @copyright  Thiago Paes <mrprompt@gmail.com> (c) 2013
 * @license    GPL-3.0+
 */

namespace MrPrompt\Cielo\Resposta;

use MrPrompt\Cielo\Resposta\Resposta;
use SimpleXMLElement;

/**
 * Requisição de autorizacao de portador
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class IdentificacaoTransacao extends Resposta
{
    /**
     * @var integer
     */
    private $tid;
    
    /**
     * @var string
     */
    private $xml;
    
    /**
     * Construtor
     * 
     * @param SimpleXMLElement $xml
     */
    public function __construct(SimpleXMLElement $xml)
    {
        $this->xml = $xml;
        $this->tid = $xml->tid;
    }
    
    /**
     * Retorna a representação xml da resposta da requisição
     * 
     * @return string
     */
    public function getXML()
    {
        return $this->xml->asXML();
    }
}
