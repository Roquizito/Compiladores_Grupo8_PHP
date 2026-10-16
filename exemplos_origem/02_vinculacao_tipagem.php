<?php
declare(strict_types=1);

/**
 * TEMA: Vinculação de Tipos (Type Binding) e Verificação Estrita
 * CONCEITO: PHP possui vinculação de tipo dinâmica por padrão. Contudo,
 * a diretiva strict_types=1 impõe verificação estrita em tempo de execução
 * para parâmetros de subprogramas e retornos, impedindo coerções implícitas perigosas.
 */

// Vinculação dinâmica de uma variável comum
$dadoDinamico = 42;
echo "[02] Tipo inicial de \$dadoDinamico: " . gettype($dadoDinamico) . "\n";

$dadoDinamico = "Transpilador PHP";
echo "[02] Novo tipo por retipagem dinâmica: " . gettype($dadoDinamico) . "\n";

// Subprograma com assinatura estritamente vinculada
function somarIdentificadores(int $a, int $b): int {
    return $a + $b;
}

echo "[02] Execução sob verificação de tipo estrita: " . somarIdentificadores(10, 25) . "\n";