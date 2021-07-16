<?php

return [
    'daemon_connection_failed' => 'Une exception s\'est produite lors de la tentative de communication avec le daemon, ce qui a généré un code de réponse HTTP/:code. Cette exception a été enregistrée.',
    'node' => [
        'servers_attached' => 'Une node ne doit avoir aucun serveur associé pour être supprimé.',
        'daemon_off_config_updated' => 'La configuration du daemon <strong>a été mise à jour</strong>, mais une erreur s\'est produite lors de la tentative de mise à jour automatique du fichier de configuration sur le daemon. Vous devrez mettre à jour manuellement le fichier de configuration (config.yml) du daemon pour appliquer ces modifications.',
    ],
    'allocations' => [
        'server_using' => 'Un serveur est actuellement affecté à cette allocation. Une allocation ne peut être supprimée que si aucun serveur n\'est actuellement affecté.',
        'too_many_ports' => 'L\'ajout simultané de plus de 1 000 ports dans une même plage n\'est pas pris en charge.',
        'invalid_mapping' => 'Le mappage fourni pour :port n\'était pas valide et n\'a pas pu être traité.',
        'cidr_out_of_range' => 'La notation CIDR n\'autorise que les masques entre /25 et /32.',
        'port_out_of_range' => 'Les ports d\'une allocation doivent être supérieurs à 1024 et inférieurs ou égaux à 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Un Nest auquel sont connectés des serveurs actifs ne peut pas être supprimé du Panel.',
        'egg' => [
            'delete_has_servers' => 'Un Egg auquel sont attachés des serveurs actifs ne peut pas être supprimé du Panel.',
            'invalid_copy_id' => 'L\'Egg sélectionné pour copier un script n\'existe pas ou copie un script lui-même.',
            'must_be_child' => 'La directive « Copier les paramètres de » pour cet Egg doit être une option enfant pour le nid sélectionné.',
            'has_children' => 'Cet Egg est le parent d\'un ou plusieurs autres Egg. Veuillez supprimer ces Egg avant de supprimer cet Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable d\'environnement :name doit être unique à cet Egg.',
            'reserved_name' => 'La variable d\'environnement :name est protégée et ne peut pas être affectée à une variable.',
            'bad_validation_rule' => 'La règle de validation ":rule" n\'est pas une règle valide pour cette application.',
        ],
        'importer' => [
            'json_error' => 'Une erreur s\'est produite lors de la tentative d\'analyse du fichier JSON : :error.',
            'file_error' => 'Le fichier JSON fourni n\'était pas valide.',
            'invalid_json_provided' => 'Le fichier JSON fourni n\'est pas dans un format reconnaissable.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'La modification de votre propre compte de sous-utilisateur n\'est pas autorisée.',
        'user_is_owner' => 'Vous ne pouvez pas ajouter le propriétaire du serveur en tant que sous-utilisateur pour ce serveur.',
        'subuser_exists' => 'Un utilisateur avec cette adresse e-mail est déjà affecté en tant que sous-utilisateur pour ce serveur.',
    ],
    'databases' => [
        'delete_has_databases' => 'Impossible de supprimer un serveur hôte de base de données auquel des bases de données actives sont liées.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'L\'intervalle de temps maximal pour une tâche chaînée est de 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Impossible de supprimer un emplacement auquel sont attachés des Nodes actifs.',
    ],
    'users' => [
        'node_revocation_failed' => 'Échec de la révocation des clés sur <a href=":link">Node #:node</a>. :Erreur',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Aucun Node répondant aux exigences spécifiées pour le déploiement automatique n\'a pu être trouvé.',
        'no_viable_allocations' => 'Aucune allocation répondant aux exigences du déploiement automatique n\'a été trouvée.',
    ],
    'api' => [
        'resource_not_found' => 'La ressource demandée n\'existe pas sur ce serveur.',
    ],
];
