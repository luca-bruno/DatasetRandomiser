<?php
    $elements = [
        [
            'dsl'   => 'single',
            'html'  => "elements/single.php"
        ]
    ];

    # $dslFile = fopen("uploads/" . $timestamp . ".gui", "w");
?>

<!-- Run randomizer + generate screenshot -->

<?php
    // Choose an element
    # include $elements[0]['html'];
    # fwrite($dslFile, $elements[0]['dsl']);
?>

<?php # fclose($dslFile); ?>

<?php

    // $doc = new DOMDocument();
    // $doc->loadHTMLFile("dataRandomiser.php");
    // echo $doc->saveHTML();

    function printArrayAsDSL($array, &$content)
    {
        // var_dump($array); die;
        foreach ($array as $key => $value)
        {
            if (is_array($value))
            {
                $content .= $key;
                $content .= " {";
                printArrayAsDSL($value, $content);
                $content .= "\n }";
            }
            else
            {
                $content .= $value;
                if ($key < count($array) - 1)
                    $content .= ", ";
            }
        }
    }


    $struct = [ 
        [
            'row' => [
                [ 'text' ]
            ]
        ],
        [
            'single' => [
                [ 'row' ]
            ]
        ],
        [
            'double' => [
                [ 'row' ],
                [ 'row' ]
            ]
        ],
        [
            'triple' => [
                [ 'row' ],
                [ 'row' ],
                [ 'row' ]
            ]
        ],
        [
            'quadruple' => [
                [ 'row' ],
                [ 'row' ],
                [ 'row' ],
                [ 'row' ]
            ]
        ],
    ];

    $output = '';
    var_dump($struct); die;
    printArrayAsDSL($test, $output);

    print_r($output);
?>