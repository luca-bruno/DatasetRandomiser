<?php
    $elements = [
        // 'navbar-light'  => [
        //     'dsl'   => 'navbar-light',
        //     'html'  => 'navbar-light' 
            // <<<_EOC
//  _EOC;
        // ],
        // 'navbar-dark'   => [

        // ]

        'row' => [
            'dsl' => 'row',
            'html' => 'row'
        ],

        'single' => [
            'dsl' => 'single',
            'html' => 'col-lg-12'
        ],
        
        'double' => [
            'dsl' => 'double',
            'html' => 'col-lg-6'
        ],
        
        'triple' => [
            'dsl' => 'triple',
            'html' => 'col-lg-4'
        ],
        
        'quadruple' => [
            'dsl' => 'quadruple',
            'html' => 'col-lg-3'
        ]
    ];


$dslFile = fopen("uploads/" . $timestamp . ".gui", "w");

$content = "$elements[row][dsl] { \n";
    fwrite($dslFile, $content);

    
$content = "single/double/triple/quadruple{ \n";
    fwrite($dslFile, $content);
$content = "small-title,";
    fwrite($dslFile, $content);
$content = "text,\n";
    fwrite($dslFile, $content);
$content = "btn-red\n";
    fwrite($dslFile, $content);


    $content = "
            row{
            single{
            small-title,text,btn-red
            }
            }
            row{
            quadruple{
            small-title,text,btn-red
            }
            quadruple{
            small-title,text,btn-orange
            }
            quadruple{
            small-title,text,btn-orange
            }
            quadruple{
            small-title,text,btn-orange
            }
            }
            ";
    write($dslFile, $content);

fclose($dslFile);
?>