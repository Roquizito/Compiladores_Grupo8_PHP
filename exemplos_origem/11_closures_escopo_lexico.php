<?php
/**
 * TEMA: Closures e Ambientes de Referenciamento Léxico
 * CONCEITO: Uma closure empacota o corpo da função anônima juntamente com
 * as variáveis de estado de seu escopo envoltório léxico através da cláusula 'use'.
 */

function criarGeradorIdentificador(string $prefixo): Closure {
    $sequencial = 0;
    
    // A closure retém o ambiente de referenciamento de $prefixo e de $sequencial
    return function() use ($prefixo, &$sequencial): string {
        $sequencial++;
        return "{$prefixo}_{$sequencial}";
    };
}

$geradorTokens = criarGeradorIdentificador("TOKEN");
$geradorLabels = criarGeradorIdentificador("L");

echo "[11] Token 1: " . $geradorTokens() . "\n";
echo "[11] Token 2: " . $geradorTokens() . "\n";
echo "[11] Rótulo 1: " . $geradorLabels() . "\n";