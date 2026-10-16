<?php
declare(strict_types=1);

/**
 * TEMA: Paradigma Orientado a Objetos e Polimorfismo
 * CONCEITO: Superclasse abstrata definindo contrato comum de síntese de código
 * e subclasses especializadas sobrescrevendo comportamentos de backend.
 */

abstract class NodoAST {
    abstract public function emitirCodigo(): string;
}

class AtribuicaoNodo extends NodoAST {
    public function __construct(
        protected string $identificador,
        protected int $valor
    ) {}

    public function emitirCodigo(): string {
        return "STORE #{$this->valor}, {$this->identificador}";
    }
}

class OperacaoSomaNodo extends NodoAST {
    public function __construct(
        protected string $destino,
        protected string $op1,
        protected string $op2
    ) {}

    public function emitirCodigo(): string {
        return "ADD {$this->op1}, {$this->op2} -> {$this->destino}";
    }
}

// Polimorfismo: manipulação homogênea de instâncias heterogêneas
$arvore = [
    new AtribuicaoNodo("x", 42),
    new OperacaoSomaNodo("y", "x", "10")
];

echo "[13] Emissão de Código Polimórfico (Backend):\n";
foreach ($arvore as $nodo) {
    echo " -> " . $nodo->emitirCodigo() . "\n";
}