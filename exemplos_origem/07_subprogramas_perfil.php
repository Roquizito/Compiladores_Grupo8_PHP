<?php
declare(strict_types=1);

/**
 * TEMA: Subprogramas, Perfil de Parâmetros e Named Arguments
 * CONCEITO: Demonstra a assinatura formal de um subprograma (perfil = número,
 * tipo e ordem), protocolos de retorno tipados, valores default e chamada por parâmetros nomeados.
 */

function configurarAmbienteCompilacao(
    string $arquivoFonte,
    int $nivelOtimizacao = 2,
    bool $emitirAvisos = true
): string {
    return "Fonte: {$arquivoFonte} | Otimização: -O{$nivelOtimizacao} | Avisos: " . ($emitirAvisos ? "ON" : "OFF");
}

echo "[07] Chamada posicional com valor default:\n";
echo " -> " . configurarAmbienteCompilacao("main.php") . "\n";

echo "[07] Chamada por parâmetros nomeados (ordem arbitrária):\n";
echo " -> " . configurarAmbienteCompilacao(emitirAvisos: false, arquivoFonte: "scanner.php", nivelOtimizacao: 3) . "\n";