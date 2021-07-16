<?php

return [
    'sign_in' => 'S\'inscrire',
    'go_to_login' => 'Se connecter',
    'failed' => 'Aucun compte trouvé avec les informations suivantes.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Entrez votre adresse mail afin de recevoir les instructions pour réinitialiser votre mot de passe.',
        'button' => 'Récupérer mon compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialisé et se connecter',
    ],

    'two_factor' => [
        'label' => 'Token 2 Facteurs',
        'label_help' => 'Ce compte requiert un second facteur de connexion. Veuillez entrer le code générer par votre périphérique de double authentification afin de continuer.',
        'checkpoint_failed' => 'Le code est invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexions. Veuillez ré-essayer dans :seconds secondes.',
    'password_requirements' => 'Votre mot de passe doit faire 8 caractères minimum et être unique à ce site.',
    '2fa_must_be_enabled' => 'L\'administrateur du site web a ordonné que vous utilisiez la double authentification afin de continuer.',
];
