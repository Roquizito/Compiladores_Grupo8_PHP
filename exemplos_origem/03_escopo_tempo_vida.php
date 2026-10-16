<?php
/**
 * TEMA: Escopo e Tempo de Vida (Scope and Lifetime)
 * CONCEITO: Diferencia variáveis locais de pilha (stack-dynamic), cujo tempo
 * de vida termina ao término do registro de ativação, de variáveis 'static',
 * cujo escopo é restrito à função, porém o tempo de vida dura toda a execução.
 */

$contadorGlobal = 100;

function registrarAcesso(): int {
    // Variável estática retém valor entre invocações (tempo de vida global, escopo local)
    static $requisicoes = 0;
    
    // Variável local puramente dinâmica de pilha
    $variavelPilha = 1;
    
    $requisicoes++;
    $variavelPilha++;
    
    return $requisicoes;
}

echo "[03] Chamada 1: acumulador estático = " . registrarAcesso() . "\n";
echo "[03] Chamada 2: acumulador estático = " . registrarAcesso() . "\n";
echo "[03] Chamada 3: acumulador estático = " . registrarAcesso() . "\n";