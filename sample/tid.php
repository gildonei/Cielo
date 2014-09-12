<?php
require_once __DIR__ . '/resources/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use MrPrompt\Cielo\Autorizacao;
use MrPrompt\Cielo\Cliente;

/* @var $transacao \MrPrompt\Cielo\Transacao */
$transacao = require_once __DIR__ . '/resources/transacao.php';

/* @var $cartao \MrPrompt\Cielo\Cartao */
$cartao    = require_once __DIR__ . '/resources/cartao.php';

/* @var $autorizacao \MrPrompt\Cielo\Autorizacao */
$autorizacao = new Autorizacao(NUMERO_CIELO, CHAVE_CIELO);

/* @var $client \MrPrompt\Cielo\Cliente */
$cielo = new Cliente($autorizacao);
$cielo->setAmbiente('teste');

/* @var $tid \MrPrompt\Cielo\Resposta\IdentificacaoTransacao */
$tid   = $cielo->tid($transacao, $cartao);

echo 'RETORNO: ', $tid->getIdentificador(), PHP_EOL;
