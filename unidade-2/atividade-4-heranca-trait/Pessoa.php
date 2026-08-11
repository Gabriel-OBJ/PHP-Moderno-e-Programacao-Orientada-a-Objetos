<?php

declare(strict_types=1);

abstract class Pessoa
{
    public function __construct(
        protected string $nome,
        protected string $email
    ) {
    }

    abstract public function exibirPerfil(): string;
}
