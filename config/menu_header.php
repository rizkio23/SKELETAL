<?php


// foreach($navbar as $n){
    return [
    
        'items' => [
           
                [
                    'title' => "",
                    'root' => true,
                    'page' => '/',
                    'new-tab' => false,
                ],
            
    
            // @foreach ($navbar as $n)
            [
                'title' => 'Pusing' ,
                'root' => true,
                'toggle' => 'hover',
                'submenu' => [
                    'type' => 'classic',
                    'alignment' => 'left',
                    'items' => [
                        [
                            'title' => 'test',
                            'desc' => '',
                            'icon' => '',
                            'page' => '',
                        ],
                    ]
                ]
            ],
            // @endforeach
        ]
    
    ];
    
// }

