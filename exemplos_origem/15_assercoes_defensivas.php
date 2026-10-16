<?php
/**
 * TEMA: Asserções e Invariantes de Desenvolvimento
 * CONCEITO: As asserções são mecanismos para garantir que pré-condições,
 * pós-condições e invariantes teóricos sejam respeitados em fase de teste.
 * Caso a expressão lógica resulte em falso, a execução é interrompida.
 */

function registrarSimbolo(string $identificador, int $posicaoMemoria): bool {
    // Invariante de pré-condição: endereço de memória deve ser estritamente positivo
    assert($posicaoMemoria > 0, "Violação de invariante: endereço de memória deve ser > 0.");
    
    // Invariante sintático: identificador não pode ser vazio
    assert(strlen($identificador) > 0, "Violação de invariante: identificador nulo.");
    
    return true;
}

echo "[15] Validação de asserção válida: ";
var_dump(registrarSimbolo("reg_temporario_1", 1024));

echo "[15] Concluído com sucesso sob diretivas de verificação ativas.\n";