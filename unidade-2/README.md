# IFCE - Campus Boa Viagem
## Disciplina: Programação Web I
### Atividade Prática Orientada - Unidade 2: Programação Orientada a Objetos com PHP 8.x

**Curso:** Tecnologia em Análise e Desenvolvimento de Sistemas  
**Professor:** Renato William Rodrigues de Souza  
**Aluno:** Gabriel Soares Vieira

---

## 📌 Visão Geral do Projeto

Este repositório contém a resolução das atividades práticas da **Unidade 2** da disciplina de **Programação Web I**. O objetivo principal é a aplicação de conceitos de Programação Orientada a Objetos (POO) utilizando os recursos modernos do **PHP 8.x**, como tipagem forte, *Constructor Property Promotion*, *Arrow Functions*, *Null Safe Operator* e Injeção de Dependência.

---

## 📁 Estrutura de Diretórios

```text
unidade-2/
├── atividade-1-refatoracao/
│   ├── Aluno.php
│   └── index.php
├── atividade-2-gerenciador-turma/
│   ├── Aluno.php
│   ├── Turma.php
│   └── index.php
├── atividade-3-interfaces/
│   ├── Aluno.php
│   ├── Avaliavel.php
│   ├── Professor.php
│   └── index.php
├── atividade-4-heranca-trait/
│   ├── Aluno.php
│   ├── Logavel.php
│   ├── Pessoa.php
│   ├── Professor.php
│   └── index.php
└── atividade-5-injecao-dependencia/
    ├── Aluno.php
    ├── RelatorioService.php
    ├── SistemaAcademico.php
    ├── Turma.php
    └── index.php
```

---

## 🚀 Descrição das Atividades

### 1. Atividade 1: Refatoração para Classe
- **Objetivo:** Refatorar o sistema de classificação da Unidade 1 para POO.
- **Requisitos:** Criação da classe `Aluno` com propriedades tipadas (`string $nome`, `float $nota`), uso obrigatório de `declare(strict_types=1);`, método `verificarSituacao()` e exibição do resultado em HTML.

### 2. Atividade 2: Gerenciador de Turma com Composição
- **Objetivo:** Criar um sistema utilizando o conceito de Composição.
- **Requisitos:** Classe `Aluno` com encapsulamento estrito (atributos privados e getters), classe `Turma` gerenciando um array de alunos e método para calcular a média utilizando `array_reduce` com *arrow function* (`fn`).

### 3. Atividade 3: Interfaces e Polimorfismo
- **Objetivo:** Implementar interfaces e demonstrar o comportamento polimórfico.
- **Requisitos:** Criação da interface `Avaliavel` implementada por `Aluno` e `Professor`. Demonstração de polimorfismo ao iterar em um array misto e uso seguro de valores nulos aplicando o operador *Null Safe* (`?->`).

### 4. Atividade 4: Classe Abstrata e Trait
- **Objetivo:** Aplicar herança, abstração e reuso de código com Traits.
- **Requisitos:** Classe abstrata `Pessoa` com atributos protegidos e método abstrato `exibirPerfil()`. Criação da trait `Logavel` e herança/uso desses recursos nas classes `Aluno` e `Professor`.

### 5. Atividade 5: Injeção de Dependência
- **Objetivo:** Implementar o padrão de Injeção de Dependência via construtor para gerar relatórios.
- **Requisitos:** Criação da classe `RelatorioService` para formatação. Criação da classe `SistemaAcademico` que exige o serviço via construtor (desacoplamento), chamando o método de execução para gerar o relatório da `Turma`.

---

## 💻 Como Executar o Projeto

1. Certifique-se de ter o **PHP 8.0+** instalado em sua máquina (necessário para os recursos modernos de POO utilizados).
2. Clone o repositório:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd Renato_AVA/unidade-2
   ```
3. Inicie o servidor embutido do PHP na raiz do projeto `unidade-2`:
   ```bash
   php -S localhost:8000
   ```
4. Acesse no navegador a atividade desejada: `http://localhost:8000/atividade-X-.../index.php`

---

## 📝 Critérios de Avaliação Atendidos
- **Aplicação correta de POO (3,0)**: Visibilidade, herança, interfaces e polimorfismo.
- **Uso adequado de recursos PHP 8.x (2,0)**: `declare(strict_types=1);`, *Null Safe*, *Arrow functions* e tipagem forte.
- **Organização e estrutura do código (2,0)**: Código limpo e separado em múltiplos arquivos.
- **Clareza (2,0)**
- **README e histórico de commits (1,0)**: Documentação completa e versão controlada passo a passo via Git.
