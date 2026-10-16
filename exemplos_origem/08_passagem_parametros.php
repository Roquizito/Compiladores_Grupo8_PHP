<?php
/**
 * TEMA: Mecanismos de Passagem de Parâmetros
 * CONCEITO: Demonstra o contraste formal entre passagem por valor
 * (cópia de dado isolada no registro de ativação) e passagem por
 * referência direta via operador '&' (compartilhamento de célula de memória).
 */

function passagemPorValor(int $x): void {
    $x += 50;
}

function passagemPorReferencia(int &$x): void {
    $x += 50;
}

$valorOriginal = 100;
passagemPorValor($valorOriginal);
echo "[08] Após passagemPorValor: {$valorOriginal} (inalterado)\n";

passagemPorReferencia($valorOriginal);
echo "[08] Após passagemPorReferencia: {$valorOriginal} (mutado diretamente)\n";