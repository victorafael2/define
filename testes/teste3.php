<?php
$data = [
    [
        'x' => 10,
        'y' => 20,
        'r' => 5,
        'serie' => 'Série 1',
        'videoId' => 'VIDEO_ID_1',
    ],
    [
        'x' => 20,
        'y' => 30,
        'r' => 10,
        'serie' => 'Série 2',
        'videoId' => 'VIDEO_ID_2',
    ],
    [
        'x' => 30,
        'y' => 40,
        'r' => 15,
        'serie' => 'Série 3',
        'videoId' => 'VIDEO_ID_3',
    ],
    [
        'x' => 40,
        'y' => 50,
        'r' => 20,
        'serie' => 'Série 4',
        'videoId' => 'VIDEO_ID_4',
    ],
    [
        'x' => 50,
        'y' => 60,
        'r' => 25,
        'serie' => 'Série 5',
        'videoId' => 'VIDEO_ID_5',
    ],
];

echo json_encode($data);
?>
