# Suíte de Códigos-Fonte de Exemplo — Linguagem PHP (Origem)

Este diretório contém 15 arquivos de teste e demonstração funcional em PHP, concebidos para abranger os conceitos teóricos do seminário de compiladores e paradigmas de programação.

## 1. Ambiente de Execução e Compilador/Runtime

A linguagem PHP utiliza uma arquitetura clássica de **compilador híbrido** (máquina virtual baseada em pilha — *Zend Engine*):
1. O interpretador/compilador analisa o código-fonte (`.php`), gerando uma sequência de *opcodes* (código intermediário de máquina virtual).
2. A máquina virtual executa os *opcodes*. Em ambientes de produção com extensões como OPcache e JIT (*Just-In-Time*), os *opcodes* compilados podem ser traduzidos diretamente para código de máquina nativo da arquitetura do host.

* **Interpretador/Compilador Utilizado:** PHP CLI (Interface de Linha de Comando) — versão **8.2** ou superior.

---

## 2. Instruções de Instalação do Ambiente

### Distribuições Linux (Debian, Ubuntu, Pop!_OS, Zorin OS)
Abra o emulador de terminal e execute:
```bash
sudo apt update
sudo apt install php-cli -y
```
Para confirmar a instalação e a versão:
```bash
php -v
```

### Windows (via Winget / Manual)
1. Baixe o pacote binário *PHP 8.2+ Thread Safe* ou *Non-Thread Safe* no portal oficial [php.net](https://windows.php.net/download/).
2. Descompacte no diretório `C:\php` e adicione o diretório às *Variáveis de Ambiente do Sistema* (`PATH`).
3. Ou instale via gerenciador de pacotes:
   ```powershell
   winget install PHP.PHP
   ```

---

## 3. Instruções de Execução

Todos os arquivos são autônomos e contêm saída formatada para o terminal. Para executá-los individualmente a partir desta pasta:

```bash
# Execução direta de um módulo
php 01_nomes_identificadores.php

# Execução com ativação de asserções (necessário para o arquivo 15)
php -d zend.assertions=1 -d assert.exception=1 15_assercoes_defensivas.php
```

Para validar a sintaxe de qualquer arquivo sem executá-lo (*Linting* do frontend léxico/sintático):
```bash
php -l 07_subprogramas_perfil.php
```

---

## 4. Tabela de Cobertura Temática

| Arquivo | Tópico Abordado | Fundamentação Teórica |
| :--- | :--- | :--- |
| `01_nomes_identificadores.php` | Nomes e Identificadores | Sigil (`$`), sensibilidade a caixa e regras léxicas de identificadores. |
| `02_vinculacao_tipagem.php` | Vinculação e Tipos | Amarração dinâmica vs. estática, coerção fraca e `declare(strict_types=1)`. |
| `03_escopo_tempo_vida.php` | Escopo e Tempo de Vida | Variáveis locais de pilha, escopo global explícito e armazenamento estático. |
| `04_constantes_imutabilidade.php`| Constantes e Vinculação | Tempo de compilação (`const`) vs. tempo de execução (`define`). |
| `05_expressoes_efeitos_colaterais.php` | Expressões e Avaliação | Precedência, efeitos colaterais e transparência referencial. |
| `06_comandos_protegidos.php` | Fluxos de Controle | Estruturas de seleção, expressão `match` e simulação de *guarded commands*. |
| `07_subprogramas_perfil.php` | Subprogramas e Perfil | Assinatura, protocolo de retorno, parâmetros opcionais e nomeados. |
| `08_passagem_parametros.php` | Modelos de Passagem | Passagem por valor vs. por referência semântica explícita (`&`). |
| `09_funcoes_delegadas.php` | Chamadas Indiretas | *First-class callables* (`Closure::fromCallable`) e ponteiros abstratos. |
| `10_funcoes_lambda_arrow.php` | Lambdas e Arrow Functions | Expressões anônimas, retorno implícito e escopo por valor. |
| `11_closures_escopo_lexico.php` | Closures | Empacotamento de subprograma com ambiente de referenciamento (`use`). |
| `12_corrotinas_geradores.php` | Co-rotinas / Concorrência | Quase-concorrência cooperativa, controle de fluxo e suspensão via `yield`. |
| `13_heranca_polimorfismo.php` | Paradigma OO | Abstração, superclasses, herança única, sobrescrita e interfaces. |
| `14_tratamento_excecoes.php` | Tratamento de Exceções | Eventos incomuns, bloco `try/catch/finally` e recuperação do fluxo. |
| `15_assercoes_defensivas.php` | Asserções e Verificação | Invariantes de código, diretivas de compilação e validação estática. |