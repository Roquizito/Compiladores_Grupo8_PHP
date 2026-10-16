<?php
/**
 * TEMA: Funções Lambda (Anônimas) e Arrow Functions
 * CONCEITO: Expressões lambda permitem a modelagem matemática pura
 * sem necessidade de identificador no cabeçalho formal. As arrow functions
 * realizam captura automática por valor do escopo externo.
 */

$multiplicador = 3;

// Arrow Function simplificada: fn(parâmetros) => expressão
$calcularTriplo = fn(int $valor): int => $valor * $multiplicador;

$vetorEntrada = [1, 2, 3, 4, 5];
$vetorTransformado = array_map($calcularTriplo, $vetorEntrada);

echo "[10] Vetor original: " . implode(", ", $vetorEntrada) . "\n";
echo "[10] Vetor processado por Lambda: " . implode(", ", $vetorTransformado) . "\n";