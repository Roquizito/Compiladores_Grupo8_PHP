<?php
/**
 * TEMA: Co-rotinas e Concorrência Cooperativa (Quase-concorrência)
 * CONCEITO: Co-rotinas não executam simultaneamente via preemptividade;
 * elas suspendem voluntariamente sua execução através da instrução 'yield'
 * e retomam do ponto exato onde pararam, compartilhando controle cooperativo.
 */

function scannerDeInstrucoes(array $instrucoes): Generator {
    foreach ($instrucoes as $linha => $instrucao) {
        // Pausa a execução e transfere o controle de volta ao chamador
        yield $linha => strtoupper($instrucao);
    }
}

$programaFonte = [
    "mov ax, bx",
    "add ax, 10",
    "ret"
];

$corrotina = scannerDeInstrucoes($programaFonte);

echo "[12] Execução intercalada da Co-rotina (passo a passo):\n";
while ($corrotina->valid()) {
    echo " -> Linha processada: {$corrotina->key()} | Opcode: {$corrotina->current()}\n";
    $corrotina->next(); // Retoma a execução
}