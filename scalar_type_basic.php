<?php

declare(strict_types=1);

/**
 * Example basic class of scalar type declaration
 * 
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class Calculator
{
    /**
     * Performs the sum between two values
     * 
     * @param  float  $value1 value sum
     * @param  float  $value2 value sum
     * 
     * @return float  resulting of sum
     */
    public function sumCurrency(float $value1, float $value2)
    {
        $result = $value1 + $value2;

        return $result;
    }
}