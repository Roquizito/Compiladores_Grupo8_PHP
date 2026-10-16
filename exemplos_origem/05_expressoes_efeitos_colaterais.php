<?php
/**
 * TEMA: Expressões, Efeitos Colaterais e Transparência Referencial
 * CONCEITO: Ilustra os riscos de efeitos colaterais na ordem de avaliação
 * de operandos e demonstra o princípio da transparência referencial.
 */

// Demonstração de função pura (Transparência Referencial)
function elevarAoQuadrado(int $n): int {
    return $n * $n;
}

// Demonstração de efeito colateral através de manipulação de estado global
$fatorMutavel = 2;
function calcularComEfeitoColateral(int $n): int {
    global $fatorMutavel;
    $fatorMutavel += 5; // Mutação externa de estado
    return $n * $fatorMutavel;
}

echo "[05] Transparência Referencial (elevarAoQuadrado(4)): " . elevarAoQuadrado(4) . "\n";
echo "[05] Substituição idêntica sem efeito colateral: " . (16 + elevarAoQuadrado(4)) . "\n";
echo "[05] Chamada 1 com efeito: " . calcularComEfeitoColateral(2) . "\n";
echo "[05] Chamada 2 com efeito (mesmo parâmetro, resultado divergente): " . calcularComEfeitoColateral(2) . "\n";