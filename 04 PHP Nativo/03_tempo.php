<?php
require_once 'geral.php';

imprimirTitulo('TEMPO');

$agora = new DateTime(); // sem fuso-horário
$tempoFormatado = $agora->format('H:i:s d/m/Y');
echo "Data de agora: $tempoFormatado\n\n";

$fusoHorario = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $fusoHorario); // com fuso-horário
$tempoFormatado = $agora->format('H:i:s d/m/Y');
echo "Data de agora: $tempoFormatado\n\n";

$doisDiasEUmaHora = new DateInterval('P2DT1H');
$futuro = $agora->add($doisDiasEUmaHora);
$tempoFormatado = $futuro->format('H:i:s d/m/Y');
echo "Data do futuro: $tempoFormatado\n\n";
