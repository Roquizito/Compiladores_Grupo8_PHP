<?php
/**
 * TEMA: Nomes, Identificadores e Questões de Projeto Léxico
 * CONCEITO: O PHP utiliza o caractere especial sigil '$' obrigatório para
 * prefixar variáveis. Identificadores de variáveis são sensíveis à caixa
 * (case-sensitive), enquanto nomes de funções e classes são insensíveis (case-insensitive).
 */

// 1. Variáveis com sigil e sensibilidade à caixa
$taxaCalculada = 0.15;
$TAXACALCULADA = 0.25;

echo "[01] Sensibilidade de caixa em variáveis:\n";
echo "Valor de \$taxaCalculada: {$taxaCalculada}\n";
echo "Valor de \$TAXACALCULADA: {$TAXACALCULADA}\n";

// 2. Nomes de subprogramas: insensibilidade à caixa na resolução léxica
function processarFaturamento(float $valor): float {
    return $valor * 1.05;
}

echo "\n[01] Resolução de subprograma (insensibilidade à caixa):\n";
echo "Chamada normal: " . processarFaturamento(100.0) . "\n";
echo "Chamada maiúscula: " . PROCESSARFATURAMENTO(100.0) . "\n";