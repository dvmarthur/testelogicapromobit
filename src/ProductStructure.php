<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
       
        $output = array();
        $countValues = array_count_values(ProductStructure::products);
        foreach (ProductStructure::products as $value) {
            $explode = explode("-", $value);
            $count = (array_key_exists($value, $countValues)) ? $countValues[$value] : null;
            $output[$explode[0]][$explode[1]] = $count;
        }
        
        return [$output];
    }
}
