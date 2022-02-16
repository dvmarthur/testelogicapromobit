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
        $return = array();
        
        $contp['preto'] = 0;
        $contp['branco'] = 0;
        $contp['vermelho'] = 0;
        $contp['azul'] = 0;

        $contpp['preto'] = 0;
        $contpp['branco'] = 0;
        $contpp['vermelho'] = 0;
        $contpp['azul'] = 0;

        $contm['preto'] = 0;
        $contm['branco'] = 0;
        $contm['vermelho'] = 0;
        $contm['azul'] = 0;

        $contg['preto'] = 0;
        $contg['branco'] = 0;
        $contg['vermelho'] = 0;
        $contg['azul'] = 0;

        $contgg['preto'] = 0;
        $contgg['branco'] = 0;
        $contgg['vermelho'] = 0;
        $contgg['azul'] = 0;

        $contxg['preto'] = 0;
        $contxg['branco'] = 0;
        $contxg['vermelho'] = 0;
        $contxg['azul'] = 0;

        foreach (ProductStructure::products as $k => $v) {

            $arrayconst = explode('-', $v);
            switch ($arrayconst) {
                case $arrayconst[0] == 'preto':
                    switch ($arrayconst[1]) {
                        case $arrayconst[1] == 'P':
                            $contp['preto']++;
                            break;
                        case $arrayconst[1] == 'PP':
                            $contpp['preto']++;
                            break;
                        case $arrayconst[1] == 'M':
                            $contm['preto']++;
                            break;
                        case $arrayconst[1] == 'G':
                            $contg['preto']++;
                            break;
                        case $arrayconst[1] == 'GG':
                            $contgg['preto']++;
                            break;
                        case $arrayconst[1] == 'XG':
                            $contxg['preto']++;
                            break;
                    }
                    $return['preto'] = ['P' => $contp['preto'], 'PP' => $contpp['preto'], 'M' => $contm['preto'], 'G' => $contg['preto'], 'GG' => $contgg['preto'], 'XG' => $contxg['preto']];
                    if ($contp['preto'] == 0)
                    unset($return['preto']['P']);
                    if ($contpp['preto'] == 0)
                    unset($return['preto']['PP']);
                    if ($contm['preto'] == 0)
                    unset($return['preto']['M']);
                    if ($contg['preto'] == 0)
                    unset($return['preto']['G']);
                    if ($contgg['preto'] == 0)
                    unset($return['preto']['GG']);
                    if ($contxg['preto'] == 0)
                    unset($return['preto']['XG']);
                    break;
                case $arrayconst[0] == 'branco':
                    switch ($arrayconst[1]) {
                        case $arrayconst[1] == 'P':
                            $contp['branco']++;
                            break;
                        case $arrayconst[1] == 'PP':
                            $contpp['branco']++;
                            break;
                        case $arrayconst[1] == 'M':
                            $contm['branco']++;
                            break;
                        case $arrayconst[1] == 'G':
                            $contg['branco']++;
                            break;
                        case $arrayconst[1] == 'GG':
                            $contgg['branco']++;
                            break;
                        case $arrayconst[1] == 'XG':
                            $contxg['branco']++;
                            break;
                    }
                    $return['branco'] = ['P' => $contp['branco'], 'PP' => $contpp['branco'], 'M' => $contm['branco'], 'G' => $contg['branco'], 'GG' => $contgg['branco'], 'XG' => $contxg['branco']];
                    if ($contp['branco'] == 0)
                    unset($return['branco']['P']);
                    if ($contpp['branco'] == 0)
                    unset($return['branco']['PP']);
                    if ($contm['branco'] == 0)
                    unset($return['branco']['M']);
                    if ($contg['branco'] == 0)
                    unset($return['branco']['G']);
                    if ($contgg['branco'] == 0)
                    unset($return['branco']['GG']);
                    if ($contxg['branco'] == 0)
                    unset($return['branco']['XG']);
                    break;
                case $arrayconst[0] == 'vermelho':
                    switch ($arrayconst[1]) {
                        case $arrayconst[1] == 'P':
                            $contp['vermelho']++;
                            break;
                        case $arrayconst[1] == 'PP':
                            $contpp['vermelho']++;
                            break;
                        case $arrayconst[1] == 'M':
                            $contm['vermelho']++;
                            break;
                        case $arrayconst[1] == 'G':
                            $contg['vermelho']++;
                            break;
                        case $arrayconst[1] == 'GG':
                            $contgg['vermelho']++;
                            break;
                        case $arrayconst[1] == 'XG':
                            $contxg['vermelho']++;
                            break;
                    }
                    $return['vermelho'] = ['P' => $contp['vermelho'], 'PP' => $contpp['vermelho'], 'M' => $contm['vermelho'], 'G' => $contg['vermelho'], 'GG' => $contgg['vermelho'],'XG'=> $contxg['vermelho']];
                    if ($contp['vermelho'] == 0)
                    unset($return['vermelho']['P']);
                    if ($contpp['vermelho'] == 0)
                    unset($return['vermelho']['PP']);
                    if ($contm['vermelho'] == 0)
                    unset($return['vermelho']['M']);
                    if ($contg['vermelho'] == 0)
                    unset($return['vermelho']['G']);
                    if ($contgg['vermelho'] == 0)
                    unset($return['vermelho']['GG']);
                    if ($contxg['vermelho'] == 0)
                    unset($return['vermelho']['XG']);
                    break;
                case $arrayconst[0] == 'azul':
                    switch ($arrayconst[1]) {
                        case $arrayconst[1] == 'P':
                            $contp['azul']++;
                            break;
                        case $arrayconst[1] == 'PP':
                            $contpp['azul']++;
                            break;
                        case $arrayconst[1] == 'M':
                            $contm['azul']++;
                            break;
                        case $arrayconst[1] == 'G':
                            $contg['azul']++;
                            break;
                        case $arrayconst[1] == 'GG':
                            $contgg['azul']++;
                            break;
                        case $arrayconst[1] == 'XG':
                            $contxg['azul']++;
                            break;
                    }


                    $return['azul'] = ['XG' => $contxg['azul'],'P' => $contp['azul'], 'PP' => $contpp['azul'], 'M' => $contm['azul'], 'G' => $contg['azul'], 'GG' => $contgg['azul']];
                         if ($contp['azul'] == 0)
                        unset($return['azul']['P']);
                        if ($contpp['azul'] == 0)
                        unset($return['azul']['PP']);
                        if ($contm['azul'] == 0)
                        unset($return['azul']['M']);
                        if ($contg['azul'] == 0)
                        unset($return['azul']['G']);
                        if ($contgg['azul'] == 0)
                        unset($return['azul']['GG']);
                        if ($contxg['azul'] == 0)
                        unset($return['azul']['XG']);

                    break;
            }
        }
        
        return [$return];
    }
}
