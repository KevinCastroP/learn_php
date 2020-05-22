<?php
    //creating an array
    $jobs = [
        'PHP dev',
        'PYTHON dev',
        'DevOps'
    ];
    //accessing to positions inside the array and show the variable type
    var_dump($jobs[2]);

    //creating an array used key and value
    $jobs = [
        'title' => 'PHP dev',
        1 => 'PYTHON dev',
        2 => 'DevOps'
    ];

    //creating an array of array used key and value
    $jobs = [
        [
            'title' => 'PHP dev',
            'description' => 'test text'
        ],
        [
            'title' => 'PYTHON dev'
        ],
        [
            'title' => 'DevOps'
        ]
    ];

    //accesing to positions inside the array of array
    // $jobs[0]['title'];

    //Cicles and conditionals
    $var2 = 1;
    
    if ($var2 > 3) {
        echo 'is greater than 3';
    } else {
        echo 'is less than 3';
    }

    $idx = 0;
    do {
        $idx = $idx + 1;
    } while ($idx < 3);

    for ($idx = 0; $idx < 3; $idx++) {
        echo $idx;
    }

?>
