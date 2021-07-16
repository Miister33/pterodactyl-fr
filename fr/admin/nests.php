<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Un nouveau Nest, :name, a été créé avec succès.',
        'deleted' => 'Suppression réussie du Nest demandé du Panel.',
        'updated' => 'Les options de configuration du Nest ont été mises à jour avec succès.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importation réussie de cet Egg et de ses variables associées.',
            'updated_via_import' => 'Cet Egg a été mis à jour à l\'aide du fichier fourni.',
            'deleted' => 'L\'Egg demandé a été supprimé avec succès du Panel.',
            'updated' => 'La configuration de l\'Egg a été mise à jour avec succès.',
            'script_updated' => 'Le script d\'installation d\'Egg a été mis à jour et s\'exécutera chaque fois que des serveurs seront installés.',
            'egg_created' => 'Un nouvel Egg a été créé avec succès. Vous devrez redémarrer tous les daemons en cours d\'exécution pour appliquer ce nouvel Egg.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ":variable" a été supprimée et ne sera plus disponible pour les serveurs une fois reconstruite.',
            'variable_updated' => 'La variable ":variable" a été mise à jour. Vous devrez reconstruire tous les serveurs utilisant cette variable afin d\'appliquer les modifications.',
            'variable_created' => 'Une nouvelle variable a été créée avec succès et affectée à cet Egg.',
        ],
    ],
];
