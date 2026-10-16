<?php
declare(strict_types=1);

/**
 * TEMA: Chamadas Indiretas de Subprogramas e Funções Delegadas
 * CONCEITO: Abstração de subprogramas como dados manipuláveis.
 * Uso de First-Class Callables (sintaxe 'fn(...)') para delegação de execução.
 */

function codificarHex(string $conteudo): string {
    return bin2hex($conteudo);
}

function codificarBase64(string $conteudo): string {
    return base64_encode($conteudo);
}

// O subprograma recebe outro subprograma delegado como argumento formal
function processadorPipeline(string $dado, callable $estrategia): string {
    return $estrategia($dado);
}

$texto = "Compiladores UERN";

// Passagem indireta através de referências a funções
$delegadaHex = codificarHex(...);
$delegadaB64 = codificarBase64(...);

echo "[09] Execução Delegada Hex: " . processadorPipeline($texto, $delegadaHex) . "\n";
echo "[09] Execução Delegada Base64: " . processadorPipeline($texto, $delegadaB64) . "\n";