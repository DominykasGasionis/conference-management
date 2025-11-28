<?php

return [
    'required' => 'The :attribute field is required.',
    'string' => 'The :attribute must be a string.',
    'max' => [
        'string' => 'The :attribute may not be greater than :max characters.',
    ],
    'date' => 'The :attribute must be a valid date.',
    'integer' => 'The :attribute must be an integer.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
    ],
    
    'attributes' => [
        'title' => 'title',
        'description' => 'description',
        'date' => 'date',
        'address' => 'address',
        'participants' => 'number of participants',
        'email' => 'email',
        'password' => 'password',
    ],
];