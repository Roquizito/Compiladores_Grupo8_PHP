<?php
/**
 * TEMA: Tratamento de Exceções e Recuperação de Execução
 * CONCEITO: Exceções são eventos incomuns que transferem o fluxo de controle
 * para blocos especializados, visando a tolerância a falhas e a recuperação.
 */

class ErroSemanticoException extends Exception {}

function analisarCompatibilidadeTipos(string $tipoEsperado, string $tipoFornecido): void {
    if ($tipoEsperado !== $tipoFornecido) {
        throw new ErroSemanticoException("Incompatibilidade semântica: esperado {$tipoEsperado}, recebido {$tipoFornecido}.");
    }
}

echo "[14] Teste de mecanismo de exceção com recuperação:\n";
try {
    analisarCompatibilidadeTipos("int", "string");
} catch (ErroSemanticoException $e) {
    echo " -> Falha capturada e tratada com sucesso: " . $e->getMessage() . "\n";
} finally {
    echo " -> Cláusula finally: limpeza de recursos da tabela de símbolos concluída.\n";
}

echo "[14] Continuidade normal do fluxo após o tratamento de erro.\n";