<?php

namespace ctodobom\APInterPHP\Cobranca;

class Multa implements \JsonSerializable
{
    private $codigoMulta = "NAOTEMMULTA";
    private $taxa = 0.0;
    
    public const NAO_TEM_MULTA = 'NAOTEMMULTA';
    public const VALOR_FIXO = 'VALORFIXO';
    public const PERCENTUAL = 'PERCENTUAL';
    /**
     * @return string
     */
    public function getCodigoMulta()
    {
        return $this->codigoMulta;
    }

    

    /**
     * @return number
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

     

    /**
     * @param string $codigos
     */
    public function setCodigoMulta($codigoMulta)
    {
        $this->codigoMulta = $codigoMulta;
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
