<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Le nom de domaine complet ou l\'adresse IP fourni ne se résout pas en une adresse IP valide.',
        'fqdn_required_for_ssl' => 'Un nom de domaine complet qui se résout en une adresse IP publique est requis afin d\'utiliser SSL pour ce Node.',
    ],
    'notices' => [
        'allocations_added' => 'Les allocations ont été ajoutées avec succès à ce Node.',
        'node_deleted' => 'Le Node a été supprimé avec succès du panneau.',
        'location_required' => 'Vous devez avoir au moins un emplacement configuré avant de pouvoir ajouter un Node à ce panneau.',
        'node_created' => 'Nouveau Node créé avec succès. Vous pouvez configurer automatiquement le daemon sur cette machine en visitant l\'onglet \'Configuration\'. <strong>Avant de pouvoir ajouter des serveurs, vous devez d\'abord allouer au moins une adresse IP et un port.</strong>',
        'node_updated' => 'Les informations sur les Node ont été mises à jour. Si des paramètres de démon ont été modifiés, vous devrez le redémarrer pour que ces modifications prennent effet.',
        'unallocated_deleted' => 'Suppression de tous les ports non alloués pour <code>:ip</code>.',
    ],
];
