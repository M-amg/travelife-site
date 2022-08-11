<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute doit être accepté.',
    'active_url'           => ':attribute n\'est pas une URL valide.',
    'after'                => ':attribute doit être une date après: date.',
    'after_or_equal'       => ':attribute doit être une date après ou égale à: date.',
    'alpha'                => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'           => ':attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num'            => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit être un tableau.',
    'before'               => ':attribute doit être une date antérieure à: date.',
    'before_or_equal'      => ':attribute doit être une date antérieure ou égale à: date.',
    'between'              => [
        'numeric' => ':attribute doit être compris entre: min et: max.',
        'file'    => ':attribute doit être compris entre: min et: max kilo-octets.',
        'string'  => ':attribute doit être compris entre: min et: max caractères.',
        'array'   => ':attribute doit avoir entre: min et: max items.',
    ],
    'boolean'              => ' champ :attribute doit être vrai ou faux.',
    'confirmed'            => ' confirmation :attribute ne correspond pas.',
    'date'                 => ':attribute n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au format: format.',
    'different'            => ':attribute et: autre doivent être différents.',
    'digits'               => ':attribute doit être: digits digits.',
    'digits_between'       => ':attribute doit être compris entre: min et: max digits.',
    'dimensions'           => ':attribute a des dimensions image non valides.',
    'distinct'             => ' champ :attribute a une valeur en double.',
    'email'                => ':attribute doit être une adresse email valide.',
    'exists'               => ':attribute sélectionné: n\'est pas valide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => ' champ :attribute doit avoir une valeur.',
    'gt'                   => [
        'numeric' => ':attribute doit être supérieur à: valeur.',
        'file'    => ':attribute doit être supérieur à: valeur kilo-octets.',
        'string'  => ':attribute doit être supérieur à: caractères de valeur.',
        'array'   => ':attribute doit avoir plus de: éléments de valeur.',
    ],
    'gte'                  => [
        'numeric' => ':attribute doit être supérieur ou égal à: valeur.',
        'file'    => ':attribute doit être supérieur ou égal à: valeur en kilo-octets.',
        'string'  => ':attribute doit être supérieur ou égal à: caractères de valeur.',
        'array'   => ':attribute doit avoir: éléments de valeur ou plus.',
    ],
    'image'                => ':attribute doit être une image.',
    'in'                   => ':attribute sélectionné: n\'est pas valide.',
    'in_array'             => ' champ: :attribute n\'existe pas dans: autre.',
    'integer'              => ':attribute doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'ipv4'                 => ':attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => ':attribute doit être une adresse IPv6 valide.',
    'json'                 => ':attribute doit être une chaîne JSON valide.',
    'lt'                   => [
        'numeric' => ':attribute doit être inférieur à: valeur.',
        'file'    => ':attribute doit être inférieur à: valeur kilo-octets.',
        'string'  => ':attribute doit être inférieur à: caractères de valeur.',
        'array'   => ':attribute doit avoir moins de: éléments de valeur.',
    ],
    'lte'                  => [
        'numeric' => ':attribute doit être inférieur ou égal à: valeur.',
        'file'    => ':attribute doit être inférieur ou égal à: valeur kilo-octets.',
        'string'  => ':attribute doit être inférieur ou égal à: caractères de valeur.',
        'array'   => ':attribute ne doit pas avoir plus de: éléments de valeur.',
    ],
    'max'                  => [
        'numeric' => ':attribute ne peut pas être supérieur à: max.',
        'file'    => ':attribute ne peut pas être supérieur à: max kilo-octets.',
        'string'  => ':attribute ne peut pas être supérieur à: max caractères.',
        'array'   => ':attribute ne peut avoir plus de: max articles.',
    ],
    'mimes'                => ':attribute doit être un fichier de type:: valeurs.',
    'mimetypes'            => ':attribute doit être un fichier de type:: valeurs.',
    'min'                  => [
        'numeric' => ':attribute doit être au moins: min.',
        'file'    => ':attribute doit être au moins: min kilo-octets.',
        'string'  => ':attribute doit être au moins: min caractères.',
        'array'   => ':attribute doit avoir au moins: min items.',
    ],
    'not_in'               => ':attribute sélectionné: n\'est pas valide.',
    'not_regex'            => ' format d\':attribute est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => ' champ d\':attribute doit être présent.',
    'regex'                => ' format d\':attribute est invalide.',
    'required'             => ' champ :attribute est requis.',
    'required_if'          => ' champ: :attribute est requis lorsque: autre est: valeur.',
    'required_unless'      => ' champ: :attribute est obligatoire sauf si: autre est dans: valeurs.',
    'required_with'        => ' champ :attribute est requis lorsque: values ​​est présent.',
    'required_with_all'    => ' champ :attribute est requis lorsque: values ​​est présent.',
    'required_without'     => ' champ :attribute est requis lorsque: values ​​n\'est pas présent.',
    'required_without_all' => ' champ :attribute est requis lorsqu\'aucune des valeurs suivantes n\'est présente.',
    'same'                 => ':attribute et: other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être: taille.',
        'file'    => ':attribute doit être: taille kilo-octets.',
        'string'  => ':attribute doit être: caractères de taille.',
        'array'   => ':attribute doit contenir: les éléments de taille.',
    ],
    'string'               => ':attribute doit être une chaîne.',
    'timezone'             => ':attribute doit être une zone valide.',
    'unique'               => ':attribute a déjà été pris.',
    'uploaded'             => ':attribute échec du téléchargement.',
    'url'                  => ' format :attribute est invalide',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
