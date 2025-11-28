<?php

return [
    'required' => 'Laukas :attribute yra privalomas.',
    'string' => 'Laukas :attribute turi būti tekstas.',
    'max' => [
        'string' => 'Laukas :attribute negali būti ilgesnis nei :max simbolių.',
    ],
    'date' => 'Laukas :attribute turi būti galiojanti data.',
    'integer' => 'Laukas :attribute turi būti sveikasis skaičius.',
    'min' => [
        'numeric' => 'Laukas :attribute turi būti bent :min.',
    ],
    
    'attributes' => [
        'title' => 'pavadinimas',
        'description' => 'aprašymas',
        'date' => 'data',
        'address' => 'adresas',
        'participants' => 'dalyvių skaičius',
        'email' => 'el. paštas',
        'password' => 'slaptažodis',
    ],
];