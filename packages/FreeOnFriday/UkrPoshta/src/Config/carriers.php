<?php

return [
    'ukrposhta' => [
        'code'         => 'ukrposhta',
        'title'        => 'УкрПочта',
        'description'  => 'Доставка службой УкрПочта',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'FreeOnFriday\UkrPoshta\Carriers\UkrPoshta',
    ],
];
