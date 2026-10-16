<?php
/**
 * TEMA: Fluxo de Controle e Seleção Múltipla (Guarded Commands & Match)
 * CONCEITO: Dijkstra introduziu comandos protegidos (guardas lógicas).
 * No PHP moderno, a estrutura 'match' atua como uma expressão determinística
 * de seleção baseada em checagem estrita de identidade (===).
 */

function classificarToken(string $token): string {
    return match (true) {
        is_numeric($token)               => "LITERAL_NUMERICO",
        in_array($token, ['if', 'while']) => "PALAVRA_RESERVADA",
        preg_match('/^[a-zA-Z_]\w*$/', $token) === 1 => "IDENTIFICADOR",
        default                          => "SIMBOLO_DESCONHECIDO",
    };
}

echo "[06] Avaliação de '123': " . classificarToken('123') . "\n";
echo "[06] Avaliação de 'while': " . classificarToken('while') . "\n";
echo "[06] Avaliação de '\$variavel': " . classificarToken('$variavel') . "\n";