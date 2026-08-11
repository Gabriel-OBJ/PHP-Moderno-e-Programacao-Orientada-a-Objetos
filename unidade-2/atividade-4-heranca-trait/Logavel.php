<?php

declare(strict_types=1);

trait Logavel
{
    public function registrarLog(string $acao): string
    {
        $dataHora = date('d/m/Y H:i:s');
        return "[{$dataHora}] LOG: {$acao}";
    }
}
