<?php
/**
 * TEMA: Constantes e Tempos de Vinculação (Binding Time)
 * CONCEITO: A palavra-chave 'const' faz uma vinculação em tempo de compilação
 * (compile-time binding), enquanto a função 'define()' executa a amarração
 * dinamicamente em tempo de execução (runtime binding).
 */

// Vinculação em tempo de compilação
const VERSAO_TRANSPILADOR = "1.0.0-BETA";

// Vinculação em tempo de execução (permite expressões dinâmicas)
define("TIMESTAMP_INICIALIZACAO", microtime(true));

echo "[04] Constante de compilação: " . VERSAO_TRANSPILADOR . "\n";
echo "[04] Constante de runtime: " . TIMESTAMP_INICIALIZACAO . "\n";