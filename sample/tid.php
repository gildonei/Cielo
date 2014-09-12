<?php
require_once __DIR__ . '/resources/config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use MrPrompt\Cielo\Autorizacao;
use MrPrompt\Cielo\Cliente;

$transacao = require_once __DIR__ . '/resources/transacao.php';
$cartao    = require_once __DIR__ . '/resources/cartao.php';

$autorizacao = new Autorizacao(NUMERO_CIELO, CHAVE_CIELO);
$cielo       = new Cliente($autorizacao);
$cielo->setAmbiente('teste');

$requisicao = $cielo->tid($transacao, $cartao);

echo 'RETORNO: ', $requisicao->getTid(), PHP_EOL;
