<?php

return [
    'novaposhta' => [
        'code'         => 'novaposhta',
        'title'        => 'Новая Почта',
        'description'  => 'Доставка службой Новая Почта',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'FreeOnFriday\NovaPoshta\Carriers\NovaPoshta',
    ],
];
