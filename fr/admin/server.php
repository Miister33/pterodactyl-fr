<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Vous essayez de supprimer l\'allocation par défaut pour ce serveur, mais il n\'y a aucune allocation de secours à utiliser.',
        'marked_as_failed' => 'Ce serveur a été marqué comme ayant échoué lors d\'une installation précédente. L\'état actuel ne peut pas être basculé dans cet état.',
        'bad_variable' => 'Il y a eu une erreur de validation avec la variable :name.',
        'daemon_exception' => 'Une exception s\'est produite lors de la tentative de communication avec le daemon, ce qui a généré un code de réponse HTTP/:code. Cette exception a été enregistrée. (identifiant de la requête : :request_id)',
        'default_allocation_not_found' => 'L\'allocation par défaut demandée n\'a pas été trouvée dans les allocations de ce serveur.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuration de démarrage de ce serveur a été mise à jour. Si le Node ou l\'Egg de ce serveur a été modifié, une réinstallation aura lieu maintenant.',
        'server_deleted' => 'Le serveur a été supprimé avec succès du système.',
        'server_created' => 'Le serveur a été créé avec succès sur le panneau. Veuillez laisser au daemon quelques minutes pour installer complètement ce serveur.',
        'build_updated' => 'Les détails de construction de ce serveur ont été mis à jour. Certaines modifications peuvent nécessiter un redémarrage pour prendre effet.',
        'suspension_toggled' => 'L\'état de suspension du serveur a été changé en :status.',
        'rebuild_on_boot' => 'Ce serveur a été marqué comme nécessitant une reconstruction du conteneur Docker. Cela se produira au prochain démarrage du serveur.',
        'install_toggled' => 'L\'état d\'installation de ce serveur a été basculé.',
        'server_reinstalled' => 'Ce serveur a été mis en file d\'attente pour une réinstallation commençant maintenant.',
        'details_updated' => 'Les détails du serveur ont été mis à jour avec succès.',
        'docker_image_updated' => 'Modification réussie de l\'image Docker par défaut à utiliser pour ce serveur. Un redémarrage est nécessaire pour appliquer cette modification.',
        'node_required' => 'Vous devez avoir au moins un Node configuré avant de pouvoir ajouter un serveur à ce panneau.',
        'transfer_nodes_required' => 'Vous devez avoir au moins deux nœuds configurés avant de pouvoir transférer des serveurs.',
        'transfer_started' => 'Le transfert du serveur a démarré.',
        'transfer_not_viable' => 'Le Node que vous avez sélectionné ne dispose pas de l\'espace disque ou de la mémoire disponible pour accueillir ce serveur.',
    ],
];
