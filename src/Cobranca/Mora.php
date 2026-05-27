<?php

namespace ctodobom\APInterPHP\Cobranca;

class Mora implements \JsonSerializable
{
    private $codigoMora = "ISENTO";
    private $taxa = 0.0;

    public const ISENTO = 'ISENTO';
    public const TAXA_MENSAL = 'TAXAMENSAL';
    public const VALOR_POR_DIA = 'VALORDIA';

    /**
     * @return string
     */
    public function getCodigoMora()
    {
        return $this->codigoMora;
    }

    /**
     * @return number
     */
    public function getTaxa()
    {
        return $this->taxa;
    }


    /**
     * @param string $codigoMora
     */
    public function setCodigoMora($codigoMora)
    {
        $this->codigoMora = $codigoMora;
    }


    /**
     * @param number $taxa
     */
    public function setTaxa($taxa)
    {
        $this->taxa = $taxa;
    }


    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
