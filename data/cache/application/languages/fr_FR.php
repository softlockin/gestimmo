<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'User',
      'action' => 'Action',
      'createdAt' => 'Date',
      'userType' => 'Type d\'utilisateur',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Enregistrement du journal d\'authentification'
    ],
    'links' => [
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Enregistrement du journal d\'authentification',
      'user' => 'User',
      'target' => 'Target'
    ],
    'presetFilters' => [
      'onlyMy' => 'Only My'
    ],
    'options' => [
      'action' => [
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete',
        'create' => 'Create'
      ]
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Actif',
      'Disabled' => 'Inactif',
      'System' => 'Système',
      'Users' => 'Utilisateurs',
      'Email' => 'Courriel',
      'Messaging' => 'Messaging',
      'Data' => 'Données',
      'Misc' => 'Misc',
      'Customization' => 'Personnalisation',
      'Available Fields' => 'Champs disponibles',
      'Layout' => 'Agencements des champs',
      'Entity Manager' => 'Gestionnaire de Fonctionnalités',
      'Add Panel' => 'Ajouter un volet',
      'Add Field' => 'Ajouter un champ',
      'Settings' => 'Paramètres',
      'Scheduled Jobs' => 'Tâches planifiées',
      'Upgrade' => 'Mettre à jour',
      'Clear Cache' => 'Vider le cache',
      'Rebuild' => 'Reconstruire',
      'Teams' => 'Équipes',
      'Roles' => 'Rôles',
      'Portal' => 'Portail',
      'Portals' => 'Portails',
      'Portal Roles' => 'Rôles Portail',
      'Portal Users' => 'Portal Users',
      'API Users' => 'Utilisateurs d\'API',
      'Outbound Emails' => 'Emails sortants',
      'Group Email Accounts' => 'Comptes email communs',
      'Personal Email Accounts' => 'Comptes email personnels',
      'Inbound Emails' => 'Emails entrants',
      'Email Templates' => 'Modèles d\'email',
      'Import' => 'Import',
      'Layout Manager' => 'Gestionnaire de modèles',
      'User Interface' => 'Interface utilisateur',
      'Auth Tokens' => 'Jetons d\'authentification',
      'Auth Log' => 'Journal d\'authentification',
      'Authentication' => 'Authentification',
      'Currency' => 'Devise',
      'Integrations' => 'Intégrations',
      'Extensions' => 'Extensions',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Modèles de tableau de bord',
      'Upload' => 'Mettre en ligne',
      'Installing...' => 'Installation...',
      'Upgrading...' => 'Mise à jour...',
      'Upgraded successfully' => 'Mise à jour réussie',
      'Installed successfully' => 'Installé avec succès',
      'Ready for upgrade' => 'Prêt pour la mise à jour',
      'Run Upgrade' => 'Démarrer la mise à jour',
      'Install' => 'Installer',
      'Ready for installation' => 'Prêt pour l\'installation',
      'Uninstalling...' => 'Désinstallation...',
      'Uninstalled' => 'Désinstallé',
      'Create Entity' => 'Créer une Fonctionnalité',
      'Edit Entity' => 'Modifier une Fonctionnalités',
      'Create Link' => 'Créer un lien',
      'Edit Link' => 'Éditer un lien',
      'Notifications' => 'Notifications',
      'Jobs' => 'Travaux',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => 'Valeurs par défaut',
      'Email Filters' => 'Filtres email',
      'Action History' => 'Action History',
      'Label Manager' => 'Label Manager',
      'Template Manager' => 'Gestionnaire de modèles',
      'Lead Capture' => 'Capture de plomb',
      'Attachments' => 'Les pièces jointes',
      'System Requirements' => 'Configuration requise',
      'PDF Templates' => 'Modèles PDF',
      'PHP Settings' => 'Paramètres PHP',
      'Database Settings' => 'Paramètres de la base de données',
      'Permissions' => 'Les permissions',
      'Email Addresses' => 'Adresses email',
      'Phone Numbers' => 'Numéros de téléphone',
      'Layout Sets' => 'Modèles de Disposition d\'écrans',
      'Success' => 'Succès',
      'Fail' => 'Échouer',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formula Sandbox',
      'is recommended' => 'est recommandé',
      'extension is missing' => 'l\'extension est manquante',
      'Real Estate' => 'Immobilier',
      'Locations' => 'Emplacements',
      'Property Matching' => 'Property Matching'
    ],
    'layouts' => [
      'list' => 'Liste',
      'detail' => 'Détail',
      'listSmall' => 'Liste (réduite)',
      'detailSmall' => 'Détail (réduit)',
      'detailPortal' => 'Détail (portail)',
      'detailSmallPortal' => 'Détail (petit, portail)',
      'listSmallPortal' => 'Liste (petit, portail)',
      'listPortal' => 'Liste (portail)',
      'relationshipsPortal' => 'Volets de Relations (portail)',
      'filters' => 'Filtres de recherche',
      'massUpdate' => 'Mise à jour groupée',
      'relationships' => 'Volets de Relations',
      'defaultSidePanel' => 'Champs du volet latéral',
      'bottomPanelsDetail' => 'Volets inférieurs',
      'bottomPanelsEdit' => 'Volets inférieurs (modification)',
      'bottomPanelsDetailSmall' => 'Volets inférieurs (détails réduits)',
      'bottomPanelsEditSmall' => 'Volets inférieurs (modification réduite)',
      'sidePanelsDetail' => 'Volets latéraux (Detail)',
      'sidePanelsEdit' => 'Volets latéraux (Edit)',
      'sidePanelsDetailSmall' => 'Volets latéraux (Detail Small)',
      'sidePanelsEditSmall' => 'Volets latéraux (Edit Small)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convertir le prospect',
      'listForAccount' => 'Liste (compte)',
      'listForContact' => 'Liste (pour contact)',
      'listForProperty' => 'Liste (pour Bien)',
      'listForRequest' => 'Liste (pour Demande)'
    ],
    'fieldTypes' => [
      'address' => 'Adresse',
      'array' => 'Tableau',
      'foreign' => 'Étranger',
      'duration' => 'Durée',
      'password' => 'Mot de passe',
      'personName' => 'Nom',
      'autoincrement' => 'Auto-incrément',
      'bool' => 'Case à cocher',
      'currency' => 'Devise',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Date',
      'datetime' => 'Date-heure',
      'datetimeOptional' => 'Date / Date-Heure',
      'email' => 'Email',
      'enum' => 'Énumération',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Lien multiple',
      'linkParent' => 'Lien parent',
      'linkOne' => 'Lien',
      'phone' => 'Téléphone',
      'text' => 'Texte',
      'url' => 'Url',
      'varchar' => 'Phrase',
      'file' => 'Fichier',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Pièces jointes multiples',
      'rangeInt' => 'Plage d\'entiers',
      'rangeFloat' => 'Intervalle réel',
      'rangeCurrency' => 'Plage de devises',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Carte',
      'number' => 'Number',
      'colorpicker' => 'Color Picker',
      'checklist' => 'Liste de contrôle',
      'barcode' => 'Code barre',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Objet Json'
    ],
    'fields' => [
      'type' => 'Type',
      'name' => 'Nom',
      'label' => 'Libellé',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Requis',
      'default' => 'Par défaut',
      'maxLength' => 'Longueur max',
      'options' => 'Options',
      'after' => 'Après (le champ)',
      'before' => 'Avant (le champ)',
      'link' => 'Lien',
      'field' => 'Champ',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Traduction',
      'previewSize' => 'Prévisualiser la taille',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Type par défaut',
      'seeMoreDisabled' => 'Désactiver l\'abréviation de texte',
      'cutHeight' => 'Hauteur de coupe (px)',
      'entityList' => 'Liste des Fonctionnalités',
      'isSorted' => 'Trié (alphabétique)',
      'audited' => 'Audité',
      'trim' => 'Rogner',
      'height' => 'Hauteur (px)',
      'minHeight' => 'Hauteur min. (px)',
      'provider' => 'Fournisseur',
      'typeList' => 'Liste de types',
      'rows' => 'Nombre de lignes de la zone de texte',
      'lengthOfCut' => 'Longueur de coupe',
      'sourceList' => 'Liste des sources',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'probabilityMap' => 'Stage Probabilities (%)',
      'notActualOptions' => 'Options non réelles',
      'readOnly' => 'Read-only',
      'maxFileSize' => 'Taille maximale du fichier (Mo)',
      'isPersonalData' => 'Est-ce que des données personnelles',
      'useIframe' => 'Utilisez Iframe',
      'useNumericFormat' => 'Utiliser le format numérique',
      'strip' => 'Bande',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Désactiver la modification en ligne',
      'allowCustomOptions' => 'Autoriser les options personnalisées',
      'displayAsLabel' => 'Afficher comme étiquette',
      'displayAsList' => 'Afficher en Liste',
      'maxCount' => 'Nombre d\'éléments maximum',
      'accept' => 'Acceptez',
      'viewMap' => 'Bouton Voir la carte',
      'codeType' => 'Code',
      'lastChar' => 'Dernier caractère',
      'onlyDefaultCurrency' => 'Only default currency',
      'displayRawText' => 'Afficher le texte brut (pas de démarques)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM sera mis à niveau vers la version ** {version} **. S\'il vous plaît soyez patient car cela peut prendre un certain temps.',
      'upgradeDone' => 'EspoCRM a été mis à niveau vers la version ** {version} **.',
      'upgradeBackup' => 'We recommend making a backup of your EspoCRM files and data before upgrading.',
      'thousandSeparatorEqualsDecimalMark' => 'The thousands separator character can not be the same as the decimal point character.',
      'userHasNoEmailAddress' => 'User has no email address.',
      'selectEntityType' => 'Sélectionner le type de Fonctionnalité dans le menu de gauche.',
      'selectUpgradePackage' => 'Sélectionner le pack de mise à jour',
      'downloadUpgradePackage' => 'Téléchargez le (s) package (s) de mise à niveau [ici]({url}).',
      'selectLayout' => 'Sélectionnez le modèle dans le menu de gauche et modifiez-le.',
      'selectExtensionPackage' => 'Sélectionner un pack d\'extension',
      'extensionInstalled' => 'L\'extension {name} {version} a été installé.',
      'installExtension' => 'L\'extension {name} {version} est prête pour l\'installation.',
      'cronIsNotConfigured' => 'Les travaux planifiés ne sont pas en cours d\'exécution. Par conséquent, les courriels entrants, les notifications et les rappels ne fonctionnent pas. Suivez les [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) pour configurer le travail cron.',
      'newVersionIsAvailable' => 'Nouvelle version de EspoCRM {latestVersion} disponible. Veuillez suivre les [instructions](https://www.espocrm.com/documentation/administration/upgrading/) pour mettre à jour votre instance.',
      'newExtensionVersionIsAvailable' => 'La nouvelle version de {extensionName} {latestVersion} est disponible.',
      'uninstallConfirmation' => 'Êtes-vous sûr de vouloir désinstaller l\'extension?',
      'upgradeInfo' => 'Consultez la [documentation]({url}) sur la mise à niveau de votre instance EspoCRM.',
      'upgradeRecommendation' => 'Cette méthode de mise à niveau n\'est pas recommandée. Il est préférable de mettre à niveau à partir de CLI.'
    ],
    'descriptions' => [
      'settings' => 'Paramètres système de l\'application.',
      'scheduledJob' => 'Tâches qui sont exécutées par Cron.',
      'jobs' => 'Les tâches exécutent des tâches en arrière-plan.',
      'upgrade' => 'Mettre à jour le système.',
      'clearCache' => 'Vider tout le cache.',
      'rebuild' => 'Reconstruire et vider tout le cache.',
      'users' => 'Gestion des utilisateurs.',
      'teams' => 'Gestion des équipes.',
      'roles' => 'Gestion des rôles.',
      'portals' => 'Gestion des portails',
      'portalRoles' => 'Rôles du portail',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Paramètres SMTP pour les emails sortants.',
      'groupEmailAccounts' => 'Comptes email IMAP communs',
      'personalEmailAccounts' => 'Comptes email utilisateurs',
      'emailTemplates' => 'Modèles pour les emails sortants.',
      'import' => 'Importer les données d\'un fichier CSV.',
      'layoutManager' => 'Personnalisation des interfaces (listes, détails, édition, recherche, mise à jour groupée).',
      'entityManager' => 'Créer et modifier les Fonctionnalités personnalisées. Organiser les champs et leurs relations.',
      'userInterface' => 'Configurer l\'interface utilisateur.',
      'authTokens' => 'Auth sessions actives. Adresse IP et date du dernier accès.',
      'authentication' => 'Paramètres d\'authentification.',
      'currency' => 'Réglages des devises et des taux.',
      'extensions' => 'Installer ou désinstaller des extensions.',
      'integrations' => 'Intégration avec des services tiers.',
      'notifications' => 'Paramètres des notifications emails et internes au CRM.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'actionHistory' => 'Log of user actions.',
      'labelManager' => 'Customize application labels.',
      'templateManager' => 'Personnaliser les modèles de message.',
      'authLog' => 'Historique de connexion.',
      'leadCapture' => 'Points d\'entrée API pour Web-to-Lead.',
      'attachments' => 'Toutes les pièces jointes stockées dans le système.',
      'systemRequirements' => 'Configuration système requise pour EspoCRM.',
      'apiUsers' => 'Séparer les utilisateurs à des fins d\'intégration.',
      'webhooks' => 'Gérer les webhooks.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'Tous les numéros de téléphone stocké dans le système.',
      'dashboardTemplates' => 'Déployer des tableaux de bord pour les utilisateurs.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS settings.',
      'pdfTemplates' => 'Modèles pour l\'impression au format PDF.',
      'formulaSandbox' => 'Write and test formula scripts.',
      'realEstateSettings' => 'Param�tres pour l\'extension immobili�re.',
      'realEstateLocations' => 'G�rer les Emplacements Immobilier.',
      'propertyMatching' => 'Matching configuration.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password,security,ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'champs,relations,liens',
      'templateManager' => 'notifications',
      'jobs' => 'Cron'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Défaut',
        'x-small' => 'Très petit',
        'small' => 'Petit',
        'medium' => 'Moyen',
        'large' => 'Large'
      ]
    ],
    'logicalOperators' => [
      'and' => 'AND',
      'or' => 'OR',
      'not' => 'NOT'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Version PHP',
      'requiredMysqlVersion' => 'Version MySQL',
      'requiredMariadbVersion' => 'Version de MariaDB',
      'host' => 'Nom d\'hôte',
      'dbname' => 'Nom de la base de données',
      'user' => 'Nom d\'utilisateur',
      'writable' => 'Enregistrable',
      'readable' => 'Lisible'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Informations d\'accès',
      'accessInfoPortal' => 'Informations d\'accès pour les portails',
      'assignment' => 'Affectation',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note à propos de l\'Email reçu',
      'notePost' => 'Note sur le post',
      'notePostNoParent' => 'Note sur Post (pas de parent)',
      'noteStatus' => 'Note sur la mise à jour du statut',
      'passwordChangeLink' => 'Lien de changement de mot de passe',
      'invitation' => 'Invitation',
      'reminder' => 'Rappel'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Créer un utilisateur API'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Rôle',
      'related' => 'Apparenté, relié, connexe',
      'file' => 'Fichier',
      'type' => 'Type',
      'field' => 'Champ',
      'sourceId' => 'ID source',
      'storage' => 'Espace de rangement',
      'size' => 'Taille (octets)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Attachement',
        'Inline Attachment' => 'Attachement en ligne',
        'Import File' => 'Importer le fichier',
        'Export File' => 'Fichier d\'exportation',
        'Mail Merge' => 'Fusion et publipostage',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Ajouter un document'
    ],
    'presetFilters' => [
      'orphan' => 'Orphelin'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Nom d\'utilisateur',
      'ipAddress' => 'Adresse IP',
      'requestTime' => 'Temps de demande',
      'createdAt' => 'Demandé à',
      'isDenied' => 'Est refusé',
      'denialReason' => 'Motif de refus',
      'portal' => 'Portail',
      'user' => 'Utilisateur',
      'authToken' => 'Jeton d\'authentification créé',
      'requestUrl' => 'URL de demande',
      'requestMethod' => 'Méthode de demande',
      'authTokenIsActive' => 'Le jeton d\'authentification est actif',
      'authenticationMethod' => 'Méthode d\'authentification'
    ],
    'links' => [
      'authToken' => 'Jeton d\'authentification créé',
      'user' => 'Utilisateur',
      'portal' => 'Portail',
      'actionHistoryRecords' => 'Histoire d\'action'
    ],
    'presetFilters' => [
      'denied' => 'Refusé',
      'accepted' => 'Accepté'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'les informations d\'identification invalides',
        'INACTIVE_USER' => 'Utilisateur inactif',
        'IS_PORTAL_USER' => 'Utilisateur du portail',
        'IS_NOT_PORTAL_USER' => 'Pas un utilisateur du portail',
        'USER_IS_NOT_IN_PORTAL' => 'L\'utilisateur n\'est pas lié au portail'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Utilisateur',
      'ipAddress' => 'Adresse IP',
      'lastAccess' => 'Dernière date d\'accès',
      'createdAt' => 'Date de connexion',
      'isActive' => 'Is Active',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Action History'
    ],
    'presetFilters' => [
      'active' => 'Active',
      'inactive' => 'Inactive'
    ],
    'labels' => [
      'Set Inactive' => 'Set Inactive'
    ],
    'massActions' => [
      'setInactive' => 'Passer en inactif'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham
',
      'AFN' => 'Afghani Afghan',
      'ALL' => 'Lek Albanais',
      'AMD' => 'Dram Arménien',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Kwanza Angolais',
      'ARS' => 'Peso Argentin',
      'AUD' => 'Dollar Australien',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Dollar Barbadien',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Dollar canadien',
      'CDF' => 'Franc congolais',
      'CHE' => 'Euro WIR',
      'CHF' => 'Franc suisse',
      'CHW' => 'Franc WIR',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Peso chilien',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Franc guinéen',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Yen japonais',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Franc comorien',
      'KPW' => 'Won nord-koréen',
      'KRW' => 'Won sud-coréen',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Dollar namibien',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Złoty polonais',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Rial qatari',
      'RON' => 'Romanian Leu',
      'RSD' => 'Dinar serbe',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'Dollar US',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'Franc CFA d\'Afrique de l\'Ouest',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Disposition',
      'append' => 'Ajouter (ne pas supprimer les onglets de l\'utilisateur)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Créer un modèle',
      'Deploy to Users' => 'Déployer vers les utilisateurs',
      'Deploy to Team' => 'Déployer en équipe'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Titre',
      'dateFrom' => 'Début',
      'dateTo' => 'Fin',
      'autorefreshInterval' => 'Intervalle de rafraîchissement automatique',
      'displayRecords' => 'Afficher les enregistrements',
      'isDoubleHeight' => 'Hauteur 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'Afficher',
      'users' => 'Utilisateurs',
      'entityType' => 'Type de Fonctionnalités',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Layout',
      'skipOwn' => 'Ne pas montrer ses propres dossiers',
      'url' => 'URL',
      'dateFilter' => 'Filtre de date',
      'team' => 'Équipe',
      'futureDays' => 'X prochains jours',
      'useLastStage' => 'Groupe par dernier stade atteint'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Semaine (agenda)',
        'basicWeek' => 'Semaine',
        'month' => 'Mois',
        'basicDay' => 'Jour',
        'agendaDay' => 'Jour (calendrier)',
        'timeline' => 'Plage de temps'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Sélectionnez un Type de Fonctionnalité parmi les options.'
    ],
    'tooltips' => [
      'skipOwn' => 'Les actions effectuées par votre compte d\'utilisateur ne seront pas affichées.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Champ'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Equals',
        'notEquals' => 'N\'est pas égale',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'In',
        'notIn' => 'Not In',
        'inPast' => 'In Past',
        'inFuture' => 'Is Future',
        'isToday' => 'Is Today',
        'isTrue' => 'Is True',
        'isFalse' => 'Is False',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
        'contains' => 'Contains',
        'notContains' => 'Ne contient pas',
        'has' => 'Contains',
        'notHas' => 'Ne contient pas',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Name (Subject)',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateSent' => 'Date d\'envoi',
      'from' => 'De',
      'to' => 'À',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Répondre à',
      'replyToString' => 'Répondre à (texte)',
      'personStringData' => 'Données de chaîne de personne',
      'isHtml' => 'Html',
      'body' => 'Corps',
      'bodyPlain' => 'Corps (plaine)',
      'subject' => 'Objet',
      'attachments' => 'Pièces-jointes',
      'selectTemplate' => 'Sélectionner un modèle',
      'fromEmailAddress' => 'De l\'adresse (lien)',
      'toEmailAddresses' => 'À EmailAddresses',
      'emailAddress' => 'Adresse email',
      'deliveryDate' => 'Date de remise',
      'account' => 'Compte',
      'users' => 'Utilisateurs',
      'replied' => 'Répondu',
      'replies' => 'Réponses',
      'isRead' => 'Lu',
      'isNotRead' => 'Non lu',
      'isImportant' => 'Important',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Utilisateurs',
      'inTrash' => 'Supprimé',
      'sentBy' => 'Sent By',
      'folder' => 'Folder',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'ccEmailAddresses' => 'Adresses mail CC',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Répondre à EmailAddresses',
      'messageId' => 'ID du message',
      'messageIdInternal' => 'Identifiant du message (interne)',
      'folderId' => 'ID de dossier',
      'fromName' => 'De nom',
      'fromString' => 'De la corde',
      'fromAddress' => 'Depuis l\'adresse',
      'replyToName' => 'Nom de réponse',
      'replyToAddress' => 'Répondre à l\'adresse',
      'isSystem' => 'Est système',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Event',
      'icsEventDateStart' => 'ICS Event Date Start',
      'tasks' => 'Tasks'
    ],
    'links' => [
      'replied' => 'Répondu',
      'replies' => 'Réponses',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Sent By',
      'attachments' => 'Les pièces jointes',
      'fromEmailAddress' => 'De l\'adresse e-mail',
      'toEmailAddresses' => 'À EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Répondre à EmailAddresses'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Brouillon',
        'Sending' => 'En cours d\'envoi',
        'Sent' => 'Envoyé',
        'Archived' => 'Archivé',
        'Received' => 'Reçu',
        'Failed' => 'Echec'
      ]
    ],
    'labels' => [
      'Create Email' => 'Archiver l\'Email',
      'Archive Email' => 'Archiver l\'Email',
      'Compose' => 'Composer',
      'Reply' => 'Répondre',
      'Reply to All' => 'Répondre à tous',
      'Forward' => 'Transférer',
      'Insert Field' => 'Insère un champ',
      'Original message' => 'Message d\'origine',
      'Forwarded message' => 'Message transféré',
      'Email Accounts' => 'Comptes emails',
      'Inbound Emails' => 'Comptes email communs',
      'Email Templates' => 'Modèles d\'email',
      'Send Test Email' => 'Envoyer un email test',
      'Send' => 'Envoyer',
      'Email Address' => 'Adresse email',
      'Mark Read' => 'Marquer comme lu',
      'Sending...' => 'Envoi en cours...',
      'Save Draft' => 'Sauvegarder le brouillon',
      'Mark all as read' => 'Marquer tout comme lu',
      'Show Plain Text' => 'Afficher texte brut',
      'Mark as Important' => 'Marquer comme important',
      'Unmark Importance' => 'Marquer comme non important',
      'Move to Trash' => 'Mettre à la corbeille',
      'Retrieve from Trash' => 'Enlever de la corbeille',
      'Move to Folder' => 'Move to Folder',
      'Filters' => 'Filters',
      'Folders' => 'Folders',
      'No Subject' => 'Aucun Objet',
      'View Users' => 'Afficher les utilisateurs',
      'Event' => 'Event',
      'Create Lead' => 'Créer un Prospect',
      'Create Contact' => 'Créer un Contact',
      'Add to Contact' => 'Add to Contact',
      'Add to Lead' => 'Add to Lead',
      'Create Task' => 'Créer une tâche',
      'Create Case' => 'Créer un Ticket'
    ],
    'strings' => [
      'sendingFailed' => 'Échec d\'envoi du courriel'
    ],
    'messages' => [
      'noSmtpSetup' => 'SMTP n\'est pas configuré: {link}',
      'testEmailSent' => 'L\'email de test a été envoyé',
      'emailSent' => 'L\'email a été envoyé',
      'savedAsDraft' => 'Sauvegardé en tant que brouillon',
      'sendConfirm' => 'Envoyer l\'email ?',
      'removeSelectedRecordsConfirmation' => 'Êtes-vous sûr de vouloir supprimer les courriels sélectionnés ?

Ils seront supprimés pour tous les utilisateurs.',
      'removeRecordConfirmation' => 'Êtes-vous sûr de vouloir supprimer ce courriel ?

Il sera supprimé pour tous les utilisateurs.',
      'confirmInsertTemplate' => 'Le corps de l\'e-mail sera perdu. Êtes-vous sûr de vouloir insérer le modèle?'
    ],
    'presetFilters' => [
      'sent' => 'Envoyé',
      'archived' => 'Archivé',
      'inbox' => 'Boite de réception',
      'drafts' => 'Brouillons',
      'trash' => 'Corbeille',
      'important' => 'Important'
    ],
    'massActions' => [
      'markAsRead' => 'Marquer commer lu',
      'markAsNotRead' => 'Marquer comme non-lu',
      'markAsImportant' => 'Marquer comme important',
      'markAsNotImportant' => 'Marquer comme non important',
      'moveToTrash' => 'Mettre à la corbeille',
      'moveToFolder' => 'Deplacer vers',
      'retrieveFromTrash' => 'Récupérer de la corbeille'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'host' => 'Hôte',
      'username' => 'Nom d\'utilisateur',
      'password' => 'Mot de passe',
      'port' => 'Port',
      'monitoredFolders' => 'Dossiers surveillés',
      'security' => 'Sécurité',
      'fetchSince' => 'Apporté depuis',
      'emailAddress' => 'Adresse email',
      'sentFolder' => 'Dossier d\'envoi',
      'storeSentEmails' => 'Conserver les emails envoyés',
      'keepFetchedEmailsUnread' => 'Conserver les emails reçu non lus',
      'emailFolder' => 'Put in Folder',
      'useImap' => 'Récupérer des emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'SMTP Host',
      'smtpPort' => 'SMTP Port',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpAuthMechanism' => 'Mécanisme d\'authentification SMTP',
      'smtpUsername' => 'SMTP Username',
      'smtpPassword' => 'SMTP Password'
    ],
    'links' => [
      'filters' => 'Filtres',
      'emails' => 'Emails'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actif',
        'Inactive' => 'Inactif'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAINE',
        'login' => 'S\'IDENTIFIER',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Créer un compte email',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Tester la connexion',
      'Send Test Email' => 'Envoyer un message de test',
      'SMTP' => 'SMTP'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Impossible de se connecter au serveur IMAP',
      'connectionIsOk' => 'Connexion établie'
    ],
    'tooltips' => [
      'useSmtp' => 'Possibilité d\'envoyer des courriels.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primaire',
      'Opted Out' => 'Désinscrit',
      'Invalid' => 'Invalide'
    ],
    'fields' => [
      'optOut' => 'Désinscrit',
      'invalid' => 'Invalide'
    ],
    'presetFilters' => [
      'orphan' => 'Orphelin'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'De',
      'to' => 'A',
      'subject' => 'Objet',
      'bodyContains' => 'Corps de texte contient',
      'action' => 'Action',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Folder'
    ],
    'labels' => [
      'Create EmailFilter' => 'Créer un filtre email',
      'Emails' => 'Emails'
    ],
    'options' => [
      'action' => [
        'Skip' => 'Ignore',
        'Move to Folder' => 'Put in Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Juste un nom de filtre',
      'subject' => '* `texte*` – commence par texte,
* `*texte*` – contient texte,
* `*texte` – finit par texte.',
      'bodyContains' => 'Le corps de l\'email contient l\'un des mots ou phrases',
      'from' => 'Emails envoyés de cette adresse. Laisser vide si inutile. Vous pouvez utiliser des caractères de substitution: *',
      'to' => 'Emails envoyés de cette adresse. Laisser vide si inutile. Vous pouvez utiliser des caractères de substitution: *',
      'isGlobal' => 'Applies this filter to all emails incoming to system.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Skip Notifications'
    ],
    'labels' => [
      'Create EmailFolder' => 'Create Folder',
      'Manage Folders' => 'Manage Folders',
      'Emails' => 'Emails'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'isHtml' => 'Html',
      'body' => 'Corps',
      'subject' => 'Objet',
      'attachments' => 'Pièces-jointes',
      'oneOff' => 'Une seule fois',
      'category' => 'Catégorie',
      'insertField' => 'Emplacements'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Créer un modèle d\'email',
      'Info' => 'Info',
      'Available placeholders' => 'Espaces réservés disponibles'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.'
    ],
    'presetFilters' => [
      'actual' => 'Réel'
    ],
    'placeholderTexts' => [
      'today' => 'La date d\'aujourd\'hui',
      'now' => 'Date et heure actuelles',
      'currentYear' => 'Année actuelle',
      'optOutUrl' => 'URL for an unsubscribe link',
      'optOutLink' => 'un lien de désabonnement'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Créer une catégorie',
      'Manage Categories' => 'Gérer les catégories',
      'EmailTemplates' => 'Modèles de courrier électronique'
    ],
    'fields' => [
      'order' => 'Ordre',
      'childList' => 'Liste des enfants'
    ],
    'links' => [
      'emailTemplates' => 'Modèles de courrier électronique'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Champs',
      'Relationships' => 'Relations',
      'Layouts' => 'Dispositions d\'écran',
      'Schedule' => 'Emploi du temps',
      'Log' => 'Log',
      'Formula' => 'Formule'
    ],
    'fields' => [
      'name' => 'Nom',
      'type' => 'Type',
      'labelSingular' => 'Libellé au singulier',
      'labelPlural' => 'Libellé au pluriel',
      'stream' => 'Flux',
      'label' => 'Libellé',
      'linkType' => 'Type de lien',
      'entity' => 'Entity',
      'entityForeign' => 'Fonctionnalité externe',
      'linkForeign' => 'Lien externe',
      'link' => 'Lien',
      'labelForeign' => 'Libellé externe',
      'sortBy' => 'Tri par défaut (champ)',
      'sortDirection' => 'Tri par défaut (direction)',
      'relationName' => 'Nom de table intermédiaire',
      'linkMultipleField' => 'Lier un champ multiple',
      'linkMultipleFieldForeign' => 'Lien externe vers un champ multiple',
      'disabled' => 'Désactivé',
      'textFilterFields' => 'Champs de filtre textuel',
      'audited' => 'Contrôlé',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Champ d\'État',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'color' => 'Couleur',
      'kanbanViewMode' => 'Vue Kanban',
      'kanbanStatusIgnoreList' => 'Groupes ignorés dans la vue Kanban',
      'iconClass' => 'Icône',
      'countDisabled' => 'Désactiver le compteur de lignes',
      'fullTextSearch' => 'Recherche du texte complet',
      'parentEntityTypeList' => 'Types de Fonctionnalités parentes',
      'foreignLinkEntityTypeList' => 'Liens externes',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control'
    ],
    'options' => [
      'type' => [
        '' => 'Aucun',
        'Base' => 'Base',
        'Person' => 'Individu',
        'CategoryTree' => 'Arborescence des catégories',
        'Event' => 'Évènement',
        'BasePlus' => 'Base Plus',
        'Company' => 'Structure'
      ],
      'linkType' => [
        'manyToMany' => 'Plusieurs-à-Plusieurs',
        'oneToMany' => 'Un-à-Plusieurs',
        'manyToOne' => 'Plusieurs-à-Un',
        'oneToOneRight' => 'Un-à-Un Droite',
        'oneToOneLeft' => 'Un-à-Un Gauche',
        'parentToChildren' => 'Parent-Enfant',
        'childrenToParent' => 'Enfant-Parent'
      ],
      'sortDirection' => [
        'asc' => 'Croissant',
        'desc' => 'Décroissant'
      ]
    ],
    'messages' => [
      'confirmRemove' => 'Êtes-vous sûr de vouloir supprimer ce type de Fonctionnalité du système ?',
      'entityCreated' => 'La Fonctionnalités a bien été créée',
      'linkAlreadyExists' => 'Conflit : lien déjà existant.',
      'linkConflict' => 'Conflit de nom : un lien ou un champ portant ce nom existe déjà.'
    ],
    'tooltips' => [
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'statusField' => 'Les mises à jour de ce champ sont inscrites dans le Flux.',
      'textFilterFields' => 'Champs utilisés lors de recherches textuelles.',
      'stream' => 'Quand la Fonctionnalité a un Flux.',
      'disabled' => 'Vérifiez que vous n\'ayez pas besoin de cette Fonctionnalité dans votre système.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Le champ de Liens multiples est très utile à la création de relations. Mais ne l\'utilisez pas si un trop grand nombre d\'éléments sont reliés.',
      'entityType' => 'Base Plus - ajoute les volets Activités, Historique et Tâches.

Évènement - est disponible dans les volets Calendrier and Activités.',
      'countDisabled' => 'Le nombre total ne sera pas affiché en vue Liste. Cela peut faire baisser les temps de chargement quand la base de données est grande.',
      'fullTextSearch' => 'Une reconstruction est requise.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exporter tous les champs',
      'fieldList' => 'Choix de champs',
      'format' => 'Format',
      'status' => 'Status'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Nom',
      'version' => 'Version',
      'description' => 'Description',
      'isInstalled' => 'Installé',
      'checkVersionUrl' => 'Une URL pour vérifier les nouvelles versions'
    ],
    'labels' => [
      'Uninstall' => 'Désinstaller',
      'Install' => 'Installer'
    ],
    'messages' => [
      'uninstalled' => 'L\'extension {name} a bien été désinstallée'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Connecter',
      'Disconnect' => 'Déconnecter',
      'Disconnected' => 'Déconnecté',
      'Connected' => 'Connecté'
    ],
    'help' => []
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Nom',
      'Label' => 'Étiquette',
      'Type' => 'Type'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'None',
        'javascript: return this.dateTime.getNow(1);' => 'Now',
        'javascript: return this.dateTime.getNow(5);' => 'Now (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Now (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Now (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 hour',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 hours',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 day',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 days',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week'
      ],
      'dateDefault' => [
        '' => 'None',
        'javascript: return this.dateTime.getToday();' => 'Today',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'fileAccept' => 'Quels types de fichiers accepter? Il est possible d\'ajouter des éléments personnalisés.',
      'barcodeLastChar' => 'Pour le type EAN-13.',
      'maxFileSize' => 'Si vide ou 0 alors pas de limite.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Rue',
        'city' => 'Ville',
        'state' => 'Etat',
        'country' => 'Pays',
        'postalCode' => 'Code Postal',
        'map' => 'Carte'
      ],
      'personName' => [
        'salutation' => 'Salutation',
        'first' => 'Première',
        'middle' => 'Milieu',
        'last' => 'Dernier'
      ],
      'currency' => [
        'converted' => '(Converti)',
        'currency' => '(Devise)'
      ],
      'datetimeOptional' => [
        'date' => 'Date'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'Texte sur une seule ligne.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date sans horaire.',
      'datetime' => 'Date et horaire',
      'currency' => 'Une valeur de change. Une valeur à virgule variable avec un code de devise.',
      'int' => 'Un nombre entier.',
      'float' => 'Un nombre suivi de décimales.',
      'bool' => 'Une case à cocher. Deux valeurs possibles : vrai ou faux.',
      'multiEnum' => 'Une liste de valeurs, éventuellement multiples, peuvent être sélectionnées. Cette liste est soumise à un tri.',
      'checklist' => 'Une liste de cases à cocher.',
      'array' => 'Une liste de valeurs, semblables au champ Multi-Enum (énumération multiple).',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'Un nombre entier généré automatiquement et en lecture seule.',
      'barcode' => 'Un code-barre. Peut être enregistré en PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'Un champ d\'éléments liés. En lecture seule.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'Email',
      'User' => 'Utilisateur',
      'Team' => 'Équipe',
      'Role' => 'Rôle',
      'EmailTemplate' => 'Modèle d\'email',
      'EmailTemplateCategory' => 'Catégories de modèles de courrier électronique',
      'EmailAccount' => 'Compte Email',
      'EmailAccountScope' => 'Compte Email',
      'OutboundEmail' => 'Email Sortant',
      'ScheduledJob' => 'Tâche planifiée',
      'ExternalAccount' => 'Compte externe',
      'Extension' => 'Extension',
      'Dashboard' => 'Tableau de bord',
      'InboundEmail' => 'Email entrant',
      'Stream' => 'Flux',
      'Import' => 'Import',
      'ImportError' => 'Import Error',
      'Template' => 'Modèle',
      'Job' => 'Tâche',
      'EmailFilter' => 'Filtre email',
      'Portal' => 'Portail',
      'PortalRole' => 'Rôle Portail',
      'Attachment' => 'Pièce jointe',
      'EmailFolder' => 'Email Folder',
      'PortalUser' => 'Portal User',
      'ApiUser' => 'API utilisateur',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Dernier enregistrement',
      'Settings' => 'Paramètres',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integration',
      'LayoutManager' => 'Layout Manager',
      'EntityManager' => 'Gestionnaire de Fonctionnalités',
      'Export' => 'Exporter',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Email Address',
      'PhoneNumber' => 'Phone Number',
      'AuthLogRecord' => 'Enregistrement du journal d\'authentification',
      'AuthFailLogRecord' => 'Enregistrement du journal d\'échec d\'authentification',
      'LeadCapture' => 'Point d\'entrée de capture de plomb',
      'LeadCaptureLogRecord' => 'Enregistrement du journal de capture de plomb',
      'ArrayValue' => 'Valeur du tableau',
      'DashboardTemplate' => 'Modèle de tableau de bord',
      'Currency' => 'Devise',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'Mass Action' => 'Mass Action',
      'Account' => 'Compte',
      'Contact' => 'Contact',
      'Lead' => 'Prospect',
      'Target' => 'Cible',
      'Opportunity' => 'Opportunité',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appel',
      'Task' => 'Tâche',
      'Case' => 'Ticket',
      'Document' => 'Document',
      'DocumentFolder' => 'Dossier',
      'Campaign' => 'Campagne',
      'TargetList' => 'Liste de cibles',
      'MassEmail' => 'Emails groupé',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activités',
      'KnowledgeBaseArticle' => 'Article de la base de connaissance',
      'KnowledgeBaseCategory' => 'Catégorie de la base de connaissance',
      'CampaignLogRecord' => 'Campaign Log Record',
      'RealEstateProperty' => 'Biens',
      'RealEstateRequest' => 'Demande',
      'RealEstateLocation' => 'Emplacement'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'Emails',
      'User' => 'Utilisateurs',
      'Team' => 'Équipes',
      'Role' => 'Rôles',
      'EmailTemplate' => 'Modèles d\'email',
      'EmailTemplateCategory' => 'Catégories de modèles de courrier électronique',
      'EmailAccount' => 'Comptes Email',
      'EmailAccountScope' => 'Comptes Email',
      'OutboundEmail' => 'Emails sortants',
      'ScheduledJob' => 'Tâches planifiées',
      'ExternalAccount' => 'Comptes externes',
      'Extension' => 'Extensions',
      'Dashboard' => 'Tableau de bord',
      'InboundEmail' => 'Emails entrants',
      'EmailAddress' => 'Adresses email',
      'PhoneNumber' => 'Numéros de téléphone',
      'Stream' => 'Flux',
      'Import' => 'Importation',
      'ImportError' => 'Import Errors',
      'Template' => 'Modèles',
      'Job' => 'Tâches',
      'EmailFilter' => 'Filtres Email',
      'Portal' => 'Portails',
      'PortalRole' => 'Roles Portail',
      'Attachment' => 'Pièces jointes',
      'EmailFolder' => 'Email Folders',
      'PortalUser' => 'Portal Users',
      'ApiUser' => 'Utilisateurs d\'API',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Password Change Requests',
      'ActionHistoryRecord' => 'Action History',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Dernières vues',
      'AuthLogRecord' => 'Journal d\'authentification',
      'AuthFailLogRecord' => 'Journal d\'échec d\'authentification',
      'LeadCapture' => 'Capture de plomb',
      'LeadCaptureLogRecord' => 'Journal de capture de plomb',
      'ArrayValue' => 'Valeurs de tableau',
      'DashboardTemplate' => 'Modèles de tableau de bord',
      'Currency' => 'Devise',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'Account' => 'Comptes',
      'Contact' => 'Contacts',
      'Lead' => 'Prospects',
      'Target' => 'Cibles',
      'Opportunity' => 'Opportunités',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appels',
      'Task' => 'Tâches',
      'Case' => 'Tickets',
      'Document' => 'Documents',
      'DocumentFolder' => 'Dossiers',
      'Campaign' => 'Campagnes',
      'TargetList' => 'Listes de cibles',
      'MassEmail' => 'Emails groupés',
      'EmailQueueItem' => 'File d\'attente',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activités',
      'KnowledgeBaseArticle' => 'Base de connaissance',
      'KnowledgeBaseCategory' => 'Catégories de la base de connaissance',
      'CampaignLogRecord' => 'Logs',
      'RealEstateProperty' => 'Biens',
      'RealEstateRequest' => 'Demandes',
      'RealEstateLocation' => 'Emplacements'
    ],
    'labels' => [
      'Sort' => 'Sort',
      'Misc' => 'Divers',
      'Merge' => 'Fusionner',
      'None' => 'Aucun',
      'Home' => 'Accueil',
      'by' => 'par',
      'Proceed' => 'Proceed',
      'Saved' => 'Sauvegardé',
      'Error' => 'Erreur',
      'Select' => 'Sélectionner',
      'Not valid' => 'Invalide',
      'Please wait...' => 'Veuillez patienter...',
      'Please wait' => 'Veuillez patienter',
      'Attached' => 'Attached',
      'Loading...' => 'Chargement...',
      'Uploading...' => 'Mise en ligne...',
      'Sending...' => 'Envoi...',
      'Merging...' => 'Fusion...',
      'Merged' => 'Fusionné',
      'Removed' => 'Supprimé',
      'Posted' => 'Posté',
      'Linked' => 'Lié',
      'Unlinked' => 'Délié',
      'Done' => 'Effectué ',
      'Access denied' => 'Accès refusé',
      'Not found' => 'Pas de résultat',
      'Access' => 'Accès',
      'Are you sure?' => 'Êtes-vous sûr?',
      'Record has been removed' => 'La donnée a été supprimée',
      'Wrong username/password' => 'Mauvaise combinaison nom d\'utilisateur/mot de passe',
      'Post cannot be empty' => 'La note ne peut pas être laissée vide',
      'Removing...' => 'Suppression...',
      'Unlinking...' => 'Suppression du lien...',
      'Posting...' => 'Mise en ligne...',
      'Username can not be empty!' => 'Le nom d\'utilisateur ne peut pas être laissé vide!',
      'Cache is not enabled' => 'Le cache est désactivé',
      'Cache has been cleared' => 'Le cache a été vidé',
      'Rebuild has been done' => 'La reconstruction a été faite',
      'Return to Application' => 'Retour à l\'application',
      'Saving...' => 'Sauvegarde...',
      'Modified' => 'Modifié',
      'Created' => 'Créé',
      'Create' => 'Créer',
      'create' => 'Créer',
      'Overview' => 'Vue d\'ensemble',
      'Details' => 'Détails',
      'Add Field' => 'Ajouter un filtre',
      'Add Dashlet' => 'Ajouter un widget',
      'Filter' => 'Filtre',
      'Edit Dashboard' => 'Éditer le tableau de bord',
      'Add' => 'Ajouter',
      'Add Item' => 'Ajouter un élément',
      'Reset' => 'Réinitialiser',
      'Menu' => 'Menu',
      'More' => 'Plus',
      'Search' => 'Recherche',
      'Only My' => 'Perso',
      'Open' => 'Ouvrir',
      'Admin' => 'Admin',
      'About' => 'A propos',
      'Refresh' => 'Rafraîchir',
      'Remove' => 'Supprimer',
      'Restore' => 'Restaurer',
      'Options' => 'Options',
      'Username' => 'Nom d\'utilisateur',
      'Password' => 'Mot de passe',
      'Login' => 'Connexion',
      'Log Out' => 'Se déconnecter',
      'Preferences' => 'Préférences',
      'State' => 'Région',
      'Street' => 'Rue',
      'Country' => 'Pays',
      'City' => 'Ville',
      'PostalCode' => 'Code postal',
      'Followed' => 'Suivi',
      'Follow' => 'Suivre',
      'Followers' => 'Suiveurs',
      'Clear Local Cache' => 'Vider le cache local',
      'Actions' => 'Actions',
      'Delete' => 'Supprimer',
      'Update' => 'Mettre à jour',
      'Save' => 'Sauvegarder',
      'Edit' => 'Éditer',
      'View' => 'Voir',
      'Cancel' => 'Annuler',
      'Apply' => 'Appliquer',
      'Unlink' => 'Délier',
      'Mass Update' => 'Mise à jour groupée',
      'Export' => 'Exporter',
      'No Data' => 'Aucune donnée',
      'No Access' => 'Aucun accès',
      'All' => 'Tous',
      'Active' => 'Actif',
      'Inactive' => 'Inactif',
      'Write your comment here' => 'Écrivez votre commentaire ici',
      'Post' => 'Poster',
      'Stream' => 'Flux',
      'Show more' => 'Voir davantage',
      'Dashlet Options' => 'Options du widget',
      'Full Form' => 'Formulaire complet',
      'Insert' => 'Insérer',
      'Person' => 'Personne',
      'First Name' => 'Prénom',
      'Last Name' => 'Nom',
      'Middle Name' => 'Second prénom',
      'Original' => 'Original',
      'You' => 'Vous',
      'you' => 'vous',
      'change' => 'changer',
      'Change' => 'Changer',
      'Primary' => 'Primaire',
      'Save Filter' => 'Sauvegarder le filtre',
      'Administration' => 'Administration',
      'Run Import' => 'Démarrer l\'import',
      'Duplicate' => 'Dupliquer',
      'Notifications' => 'Notifications',
      'Mark all read' => 'Marquer tout comme lu',
      'See more' => 'Voir davantage',
      'Today' => 'Aujourd\'hui',
      'Tomorrow' => 'Demain',
      'Yesterday' => 'Hier',
      'Submit' => 'Envoyer',
      'Close' => 'Fermer',
      'Yes' => 'Oui',
      'No' => 'Non',
      'Select All Results' => 'Select All Results',
      'Value' => 'Valeur',
      'Current version' => 'Version actuelle',
      'List View' => 'Vue en liste',
      'Tree View' => 'Vue en arborescence',
      'Unlink All' => 'Tout déconnecter',
      'Total' => 'Total',
      'Print to PDF' => 'Enregistrer en PDF',
      'Default' => 'Par défaut',
      'Number' => 'Nombre',
      'From' => 'De',
      'To' => 'A',
      'Create Post' => 'Créer une publication',
      'Previous Entry' => 'Précédent',
      'Next Entry' => 'Suivant',
      'View List' => 'Vue en liste',
      'Attach File' => 'Attacher un fichier',
      'Skip' => 'Skip',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Développer',
      'Collapse' => 'Effondrer',
      'New notifications' => 'Nouvelles notifications',
      'Manage Categories' => 'Gérer les catégories',
      'Manage Folders' => 'Gérer les dossiers',
      'Convert to' => 'Convertir en',
      'View Personal Data' => 'Voir les données personnelles',
      'Personal Data' => 'Données personnelles',
      'Erase' => 'Effacer',
      'View Followers' => 'Voir les abonnés',
      'Convert Currency' => 'Convertir la monnaie',
      'View on Map' => 'Voir sur la carte',
      'Preview' => 'Prévisualisation',
      'Move Over' => 'Bouge',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Scheduler' => 'Emploi du temps',
      'Create InboundEmail' => 'Créer un email entrant',
      'Activities' => 'Activités',
      'History' => 'Historique',
      'Attendees' => 'Participants',
      'Schedule Meeting' => 'Planifier un rendez-vous',
      'Schedule Call' => 'Programmer un appel',
      'Compose Email' => 'Composer un Email',
      'Log Meeting' => 'Rapporter un rendez-vous',
      'Log Call' => 'Rapporter un appel',
      'Archive Email' => 'Archiver l\'Email',
      'Create Task' => 'Créer une tâche',
      'Tasks' => 'Tâches'
    ],
    'messages' => [
      'pleaseWait' => 'Veuillez patienter...',
      'posting' => 'Publication...',
      'loading' => 'Chargement...',
      'saving' => 'Sauvegarde...',
      'confirmLeaveOutMessage' => 'Êtes-vous sûr de vouloir quitter le formulaire?',
      'notModified' => 'Vous n\'avez pas modifié l\'enregistrement',
      'duplicate' => 'The record you are creating might already exist',
      'dropToAttach' => 'Drop to attach',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldInvalid' => '{field} n\'est pas valide',
      'fieldIsRequired' => '{field} est requis',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldShouldBeEmail' => '{field} should be a valid email',
      'fieldShouldBeFloat' => '{field} should be a valid float',
      'fieldShouldBeInt' => '{field} should be a valid integer',
      'fieldShouldBeDate' => '{field} should be a valid date',
      'fieldShouldBeDatetime' => '{field} should be a valid date/time',
      'fieldShouldAfter' => '{field} doit être après {otherField}',
      'fieldShouldBefore' => '{field} doit être avant {otherField}',
      'fieldShouldBeBetween' => '{field} doit être compris entre {min} et {max}',
      'fieldShouldBeLess' => '{field} doit être moins élevé que {value}',
      'fieldShouldBeGreater' => '{field} doit être plus grand que {value}',
      'fieldBadPasswordConfirm' => '{field} n\'a pas été confirmé correctement',
      'fieldMaxFileSizeError' => 'Le fichier ne doit pas dépasser {max} Mo',
      'fieldValueDuplicate' => 'Dupliquer la valeur',
      'fieldIsUploading' => 'En cours de téléchargement',
      'fieldExceedsMaxCount' => 'Le nombre dépasse le maximum autorisé {maxCount}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'resetPreferencesDone' => 'Vos préférences ont été réinitialisées.',
      'confirmation' => 'Êtes-vous sûr?',
      'unlinkAllConfirmation' => 'Êtes-vous certain de vouloir déconnecter tous les enregistrements liés ?',
      'resetPreferencesConfirmation' => 'Êtes-vous sûr de vouloir réinitialiser vos préférences?',
      'removeRecordConfirmation' => 'Êtes-vous sûr de vouloir supprimer cet enregistrement?',
      'unlinkRecordConfirmation' => 'Êtes-vous sûr de vouloir casser cette relation?',
      'removeSelectedRecordsConfirmation' => 'Êtes-vous sûr de vouloir supprimer les enregistrements sélectionnés?',
      'unlinkSelectedRecordsConfirmation' => 'Êtes-vous sûr de vouloir dissocier les enregistrements sélectionnés?',
      'massUpdateResult' => '{count} enregistrements ont été mis à jour',
      'massUpdateResultSingle' => '{count} enregistrement a été mis à jour',
      'recalculateFormulaConfirmation' => 'Êtes-vous sûr de vouloir recalculer la formule pour les enregistrements sélectionnés?',
      'noRecordsUpdated' => 'Aucun enregistrement n\'a été trouvé',
      'massRemoveResult' => '{count} enregistrements ont été supprimés',
      'massRemoveResultSingle' => '{count} enregistrement a été supprimé',
      'noRecordsRemoved' => 'Aucun enregistrement n\'a été trouvé',
      'clickToRefresh' => 'Cliquer pour rafraîchir',
      'writeYourCommentHere' => 'Écrivez votre commentaire ici',
      'writeMessageToUser' => 'Écrire un message à {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Écrivez puis appuyez sur la touche Entrée',
      'checkForNewNotifications' => 'Vérifier les nouvelles notifications',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Done',
      'notUpdated' => 'Pas à jour',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Les champs cochés seront effacés de façon permanente. Êtes-vous sûr?',
      'maintenanceMode' => 'L\'application est actuellement en mode maintenance. Seuls les utilisateurs administrateurs ont accès. 

Le mode maintenance peut être désactivé dans Administration → Paramètres.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => 'Impossible d\'imprimer plus que {maxCount} enregistrements.',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have an access to this area.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Perso',
      'onlyMyTeam' => 'Mon équipe',
      'followed' => 'Suivi'
    ],
    'presetFilters' => [
      'followed' => 'Suivi',
      'all' => 'Tous'
    ],
    'massActions' => [
      'remove' => 'Supprimer',
      'merge' => 'Fusionner',
      'update' => 'Update',
      'massUpdate' => 'Mise à jour groupée',
      'unlink' => 'Dissocier',
      'export' => 'Exporter',
      'follow' => 'Suivre',
      'unfollow' => 'Ne plus suivre',
      'convertCurrency' => 'Convertir la monnaie',
      'recalculateFormula' => 'Recalculer la formule',
      'printPdf' => 'Imprimer en PDF'
    ],
    'fields' => [
      'name' => 'Nom',
      'firstName' => 'Prénom',
      'lastName' => 'Nom de famille',
      'middleName' => 'Second prénom',
      'salutationName' => 'Salutation',
      'assignedUser' => 'Utilisateur assigné',
      'assignedUsers' => 'Utilisateurs assignés',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Adresse électronique',
      'emailAddressIsOptedOut' => 'L\'adresse e-mail est désactivée',
      'assignedUserName' => 'Nom de l\'utilisateur assigné',
      'teams' => 'Équipes',
      'createdAt' => 'Date de création',
      'modifiedAt' => 'Modifié à',
      'createdBy' => 'Créé par',
      'modifiedBy' => 'Modifié par',
      'description' => 'Description',
      'address' => 'Adresse',
      'phoneNumber' => 'Téléphone',
      'phoneNumberMobile' => 'Téléphone (Mobile)',
      'phoneNumberHome' => 'Téléphone (Maison)',
      'phoneNumberFax' => 'Fax',
      'phoneNumberOffice' => 'Téléphone (Bureau)',
      'phoneNumberOther' => 'Téléphone (Autre)',
      'phoneNumberData' => 'Numéro de téléphone',
      'phoneNumberIsOptedOut' => 'Le numéro de téléphone est désactivé',
      'order' => 'Tri',
      'parent' => 'Parent',
      'children' => 'Enfants',
      'id' => 'ID',
      'ids' => 'Identifiants',
      'type' => 'Type',
      'names' => 'Des noms',
      'types' => 'Les types',
      'targetListIsOptedOut' => 'Est désinscrit (liste cible)',
      'billingAddressCity' => 'Ville',
      'billingAddressCountry' => 'Pays',
      'billingAddressPostalCode' => 'Code postal',
      'billingAddressState' => 'Régions',
      'billingAddressStreet' => 'Rue',
      'billingAddressMap' => 'Carte',
      'addressCity' => 'Ville',
      'addressStreet' => 'Rue',
      'addressCountry' => 'Pays',
      'addressState' => 'Régions',
      'addressPostalCode' => 'Code postal',
      'addressMap' => 'Carte',
      'shippingAddressCity' => 'Ville (livraison)',
      'shippingAddressStreet' => 'Rue (livraison)',
      'shippingAddressCountry' => 'Pays (livraison)',
      'shippingAddressState' => 'Région (livraison)',
      'shippingAddressPostalCode' => 'Code Postal (livraison)',
      'shippingAddressMap' => 'Carte (Transport)'
    ],
    'links' => [
      'assignedUser' => 'Utilisateur assigné',
      'createdBy' => 'Créé par',
      'modifiedBy' => 'Modifié par',
      'team' => 'Équipe',
      'roles' => 'Rôles',
      'teams' => 'Équipes',
      'users' => 'Utilisateurs',
      'parent' => 'Parent',
      'children' => 'Enfants',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunités',
      'leads' => 'Prospects',
      'meetings' => 'Rendez-vous',
      'calls' => 'Appels',
      'tasks' => 'Tâches',
      'emails' => 'Emails',
      'accounts' => 'Comptes',
      'cases' => 'Tickets',
      'documents' => 'Documents',
      'account' => 'Compte',
      'opportunity' => 'Opportunité',
      'contact' => 'Contact'
    ],
    'dashlets' => [
      'Stream' => 'Flux',
      'Emails' => 'Ma boite de réception',
      'Iframe' => 'Iframe',
      'Records' => 'Record List',
      'Leads' => 'Mes prospects',
      'Opportunities' => 'Mes opportunités',
      'Tasks' => 'Mes tâches',
      'Cases' => 'Mes tickets',
      'Calendar' => 'Calendrier',
      'Calls' => 'Mes appels',
      'Meetings' => 'Mes rendez-vous',
      'OpportunitiesByStage' => 'Opportunités par étape',
      'OpportunitiesByLeadSource' => 'Opportunités par source de prospects',
      'SalesByMonth' => 'Ventes par mois',
      'SalesPipeline' => 'Canaux de vente',
      'Activities' => 'Mes activités',
      'Properties' => 'Mes Biens',
      'Requests' => 'Mes demandes'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} vous a été assigné',
      'emailReceived' => 'Email reçu de la part de {from}',
      'entityRemoved' => '{user} a supprimé {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} a posté sur {entityType} {entity}',
      'attach' => '{user} a joint un fichier à {entityType} {entity}',
      'status' => '{user} a mis à jour le {field} pour {entityType} {entity}',
      'update' => '{user} a mis à jour {entityType} {entity}',
      'postTargetTeam' => '{user} a publié pour l’équipe {target}',
      'postTargetTeams' => '{user} a publié pour les équipes {target}',
      'postTargetPortal' => '{user} a publié sur le portail {target}',
      'postTargetPortals' => '{user} a publié sur les portails {target}',
      'postTarget' => '{user} a publié pour {target}',
      'postTargetYou' => '{user} a publié pour vous',
      'postTargetYouAndOthers' => '{user} a publié pour {target} et vous',
      'postTargetAll' => '{user} a publié pour tous',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} a mentionné {mentioned} dans {entityType} {entity}',
      'mentionYouInPost' => '{user} vous a mentionné dans {entityType} {entity}',
      'mentionInPostTarget' => '{user} a mentionné {mentionned} dans une publication',
      'mentionYouInPostTarget' => '{user} vous a mentionné dans une publication pour {target}',
      'mentionYouInPostTargetAll' => '{user} vous a mentionné dans une publication pour tous',
      'mentionYouInPostTargetNoTarget' => '{user} vous a mentionné dans une publication',
      'create' => '{user} a créé {entityType} {entity}',
      'createThis' => '{user} a créé {entityType}',
      'createAssignedThis' => '{user} a créé {entityType} assignée à {assignee}',
      'createAssigned' => '{user} a créé {entityType} {entity} et l\'a assigné à {assignee}',
      'createAssignedYou' => '{user} a créé {entityType} {entity} et vous l\'a attribué',
      'createAssignedThisSelf' => '{user} a créé {entityType} avec auto-attribution',
      'createAssignedSelf' => '{user} a créé {entityType} {entity} avec auto-attribution',
      'assign' => '{user} a assigné {entityType} {entity} à {assignee}',
      'assignThis' => '{user} a assigné {entityType} à {assignee}',
      'assignYou' => '{user} vous a attribué {entityType} {entity}',
      'assignThisVoid' => '{user} a retiré l\'attribution de {entityType}',
      'assignVoid' => '{user} a retiré l\'attribution de {entityType} {entity}',
      'assignThisSelf' => '{user} a mis {entityType} en auto-attribution',
      'assignSelf' => '{user} a mis {entityType} {entity} en auto-attribution',
      'postThis' => '{user} a posté',
      'attachThis' => '{user} a joint un fichier',
      'statusThis' => '{user} a mis à jour {field}',
      'updateThis' => '{user} a mis à jour {entityType}',
      'createRelatedThis' => '{user} a créé {relatedEntityType} {relatedEntity} reliée à {entityType}',
      'createRelated' => '{user} a créé {relatedEntityType} {relatedEntity} relié au {entityType} {entity}',
      'relate' => '{user} a relié {relatedEntityType} {relatedEntity} avec {entityType} {entity}',
      'relateThis' => '{user} a relié {relatedEntityType} {relatedEntity} avec {entityType}',
      'emailReceivedFromThis' => 'Email reçu de la part de {from}',
      'emailReceivedInitialFromThis' => 'Email reçu de la part de {from}, {entityType} créé',
      'emailReceivedThis' => 'Email reçu',
      'emailReceivedInitialThis' => 'Email reçu, {entityType} créé',
      'emailReceivedFrom' => 'Email reçu de la part de  {from}, relié à {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email reçu de la part de {from}, {entityType} {entity} créé',
      'emailReceived' => 'Email reçu relié à {entityType} {entity}',
      'emailReceivedInitial' => 'Email reçu: {entityType} {entity} créé',
      'emailReceivedInitialFrom' => 'Email reçu de la part de {from}, {entityType} {entity} créé',
      'emailSent' => '{by} a envoyé un email lié à {entityType} {entity}',
      'emailSentThis' => '{by} a envoyé un email'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Janvier',
        1 => 'Février',
        2 => 'Mars',
        3 => 'Avril',
        4 => 'Mai',
        5 => 'Juin',
        6 => 'Juillet',
        7 => 'Août',
        8 => 'Septembre',
        9 => 'Octobre',
        10 => 'Novembre',
        11 => 'Décembre'
      ],
      'monthNamesShort' => [
        0 => 'Jan',
        1 => 'Fév',
        2 => 'Mar',
        3 => 'Avr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aoû',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Déc'
      ],
      'dayNames' => [
        0 => 'Dimanche',
        1 => 'Lundi',
        2 => 'Mardi',
        3 => 'Mercredi',
        4 => 'Jeudi',
        5 => 'Vendredi',
        6 => 'Samedi'
      ],
      'dayNamesShort' => [
        0 => 'Dim',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mer',
        4 => 'Jeu',
        5 => 'Ven',
        6 => 'Sam'
      ],
      'dayNamesMin' => [
        0 => 'Di',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Me',
        4 => 'Je',
        5 => 'Ve',
        6 => 'Sa'
      ]
    ],
    'durationUnits' => [
      'd' => 'ré',
      'h' => 'h',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'M.',
        'Mrs.' => 'Mme.',
        'Ms.' => 'Mlle.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Actif',
        'notOn' => 'Inactif',
        'after' => 'Après',
        'before' => 'Avant',
        'between' => 'Entre',
        'today' => 'Aujourd\'hui',
        'past' => 'Passé',
        'future' => 'Futur',
        'currentMonth' => 'Mois en cours',
        'lastMonth' => 'Dernier mois',
        'nextMonth' => 'Le mois prochain',
        'currentQuarter' => 'Quinzaine en cours',
        'lastQuarter' => 'Dernière quinzaine',
        'currentYear' => 'Année en cours',
        'lastYear' => 'Dernière année',
        'lastSevenDays' => '7 derniers jours',
        'lastXDays' => 'Derniers X jours',
        'nextXDays' => 'Prochains X jours',
        'ever' => 'Toujours',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
        'currentFiscalYear' => 'Année fiscale en cours',
        'lastFiscalYear' => 'Dernier exercice financier',
        'currentFiscalQuarter' => 'Trimestre financier en cours',
        'lastFiscalQuarter' => 'Dernier trimestre fiscal'
      ],
      'searchRanges' => [
        'is' => 'Est',
        'isEmpty' => 'Est vide',
        'isNotEmpty' => 'Non vide',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Provient de l’équipe',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'allOf' => 'Tous de',
        'noneOf' => 'None Of',
        'any' => 'Parmi'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Égale',
        'like' => 'Correspond à (%)',
        'notLike' => 'N\'est pas (%)',
        'startsWith' => 'Commence par',
        'endsWith' => 'Fini par',
        'contains' => 'Contient',
        'notContains' => 'Ne contient pas',
        'isEmpty' => 'Est vide',
        'isNotEmpty' => 'Non vide',
        'notEquals' => 'N\'est pas égale'
      ],
      'intSearchRanges' => [
        'equals' => 'Egale',
        'notEquals' => 'N\'est pas égale',
        'greaterThan' => 'Plus grand que',
        'lessThan' => 'Moins grand que',
        'greaterThanOrEquals' => 'Plus grand que ou égale',
        'lessThanOrEquals' => 'Moins grand que ou égale',
        'between' => 'Entre',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty'
      ],
      'autorefreshInterval' => [
        0 => 'Aucun',
        '0.5' => '30 secondes',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes'
      ],
      'phoneNumber' => [
        'Mobile' => 'Mobile',
        'Office' => 'Bureau',
        'Fax' => 'Fax',
        'Home' => 'Maison',
        'Other' => 'Autre'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Popup',
        'Email' => 'Email'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Vous pouvez trouver des traductions ici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Gras',
          'italic' => 'Italique',
          'underline' => 'Soulignement',
          'strike' => 'Texte barré',
          'clear' => 'Supprimer le style d\'écriture',
          'height' => 'Hauteur de ligne',
          'name' => 'Police de caractère',
          'size' => 'Taille de police'
        ],
        'image' => [
          'image' => 'Image',
          'insert' => 'Insérer une Image',
          'resizeFull' => 'Redimensionner 100%',
          'resizeHalf' => 'Redimensionner de moitié',
          'resizeQuarter' => 'Redimensionner de quart',
          'floatLeft' => 'Marge à gauche',
          'floatRight' => 'Marge à droite',
          'floatNone' => 'Pas de marge',
          'dragImageHere' => 'Glissez une image ici',
          'selectFromFiles' => 'Sélectionner depuis les fichiers',
          'url' => 'URL de l\'image',
          'remove' => 'Supprimer l\'Image'
        ],
        'link' => [
          'link' => 'Lien',
          'insert' => 'Insérer un Lien',
          'unlink' => 'Supprimer le lien',
          'edit' => 'Éditer',
          'textToDisplay' => 'Texte à afficher',
          'url' => 'Vers quelle URL le lien doit-il pointer?',
          'openInNewWindow' => 'Ouvrir dans une nouvelle fenêtre'
        ],
        'video' => [
          'video' => 'Vidéo',
          'videoLink' => 'Lien vidéo',
          'insert' => 'Insérer une Vidéo',
          'url' => 'URL de la vidéo ?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, ou DailyMotion)'
        ],
        'table' => [
          'table' => 'Tableau'
        ],
        'hr' => [
          'insert' => 'Insérer une règle horizontale'
        ],
        'style' => [
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Citation',
          'pre' => 'Code',
          'h1' => 'Titre 1',
          'h2' => 'Titre 2',
          'h3' => 'Titre 3',
          'h4' => 'Titre 4',
          'h5' => 'Titre 5',
          'h6' => 'Titre 6'
        ],
        'lists' => [
          'unordered' => 'Liste non ordonnée',
          'ordered' => 'Liste ordonnée'
        ],
        'options' => [
          'help' => 'Aide',
          'fullscreen' => 'Plein écran',
          'codeview' => 'Voir le code'
        ],
        'paragraph' => [
          'paragraph' => 'Paragraphe',
          'outdent' => 'Diminuer le retrait',
          'indent' => 'Accentuer le retrait',
          'left' => 'Aligner à gauche',
          'center' => 'Aligner au centre',
          'right' => 'Aligner à droite',
          'justify' => 'Justifier'
        ],
        'color' => [
          'recent' => 'Couleur récente',
          'more' => 'Plus de couleurs',
          'background' => 'Couleur de fond',
          'foreground' => 'Couleur de la police',
          'transparent' => 'Transparent',
          'setTransparent' => 'Rendre transparent',
          'reset' => 'Réinitialiser',
          'resetToDefault' => 'Remettre à zéro'
        ],
        'shortcut' => [
          'shortcuts' => 'Raccourcis clavier',
          'close' => 'Fermer',
          'textFormatting' => 'Formattage du texte',
          'action' => 'Action',
          'paragraphFormatting' => 'Formattage du paragraphe',
          'documentStyle' => 'Style du document'
        ],
        'history' => [
          'undo' => 'Aller en arrière',
          'redo' => 'Aller en avant'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'liste',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Valid',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Annuler l\'import',
      'Return to Import' => 'Retourner à l\'import',
      'Run Import' => 'Démarrer l\'import',
      'Back' => 'Retour',
      'Field Mapping' => 'Correspondance des champs',
      'Default Values' => 'Valeurs par défaut',
      'Add Field' => 'Ajouter un champ',
      'Created' => 'Créé',
      'Updated' => 'Mis à jour',
      'Result' => 'Résultat',
      'Show records' => 'Montrer les enregistrements',
      'Remove Duplicates' => 'Supprimer les doublons',
      'importedCount' => 'Importés (compte)',
      'duplicateCount' => 'Doublons (compte)',
      'updatedCount' => 'Mis à jour (compte)',
      'Create Only' => 'Créer uniquement',
      'Create and Update' => 'Créer et modifier',
      'Update Only' => 'Modifier uniquement',
      'Update by' => 'Modifié par',
      'Set as Not Duplicate' => 'Marquer comme distincts',
      'File (CSV)' => 'Fichier (CSV)',
      'First Row Value' => 'Valeur de la première ligne',
      'Skip' => 'Ignorer',
      'Header Row Value' => 'Valeur de la ligne d\'entête',
      'Field' => 'Champs',
      'What to Import?' => 'Importer quoi ?',
      'Entity Type' => 'Type de Fonctionnalité',
      'What to do?' => 'Faire quoi ?',
      'Properties' => 'Propriétés',
      'Header Row' => 'Ligne d’entête ',
      'Person Name Format' => 'Format du nom des personnes',
      'John Smith' => 'Jean Dupont',
      'Smith John' => 'Dupont Jean',
      'Smith, John' => 'Dupont, Jean',
      'Field Delimiter' => 'Délimiteur de champs',
      'Date Format' => 'Format des dates',
      'Decimal Mark' => 'Séparateur de décimales',
      'Text Qualifier' => 'Marqueurs de texte',
      'Time Format' => 'Format de l\'heure',
      'Currency' => 'Devise',
      'Preview' => 'Prévisualiser',
      'Next' => 'Suivant',
      'Step 1' => 'Étape 1',
      'Step 2' => 'Étape 2',
      'Double Quote' => 'Guillemet',
      'Single Quote' => 'Apostrophe',
      'Imported' => 'Importé',
      'Duplicates' => 'Doublons',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Timezone',
      'Remove Import Log' => 'Supprimer le journal d\'importation',
      'New Import' => 'Nouvelle importation',
      'Import Results' => 'Résultats d\'importation',
      'Run Manually' => 'Déclencher manuellement',
      'Silent Mode' => 'Mode silencieux',
      'Export' => 'Export'
    ],
    'messages' => [
      'noErrors' => 'No errors.',
      'utf8' => 'Devrait être en UTF-8',
      'duplicatesRemoved' => 'Doublons supprimés',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'Cela supprimera définitivement tous les enregistrements importés.',
      'removeDuplicates' => 'Cela supprimera définitivement tous les enregistrements importés qui ont été reconnus comme des doublons.',
      'confirmRevert' => 'Cela supprimera définitivement tous les enregistrements importés. Êtes-vous sûr?',
      'confirmRemoveDuplicates' => 'Cela supprimera définitivement tous les enregistrements importés qui ont été reconnus comme des doublons. Êtes-vous sûr?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => 'Cela supprimera le journal d\'importation. Tous les enregistrements importés seront conservés. Utilisez-le si vous êtes sûr que l\'importation est correcte.'
    ],
    'fields' => [
      'file' => 'Fichier',
      'entityType' => 'Type de Fonctionnalité',
      'imported' => 'Enregistrements importés',
      'duplicates' => 'Enregistrements doublons',
      'updated' => 'Enregistrements mis à jour',
      'status' => 'Status'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Failed',
        'Standby' => 'Pause',
        'Pending' => 'Attente',
        'In Process' => 'In Process',
        'Complete' => 'Complete'
      ],
      'personNameFormat' => [
        'f l' => 'Prénom Nom',
        'l f' => 'Nom Prénom',
        'f m l' => 'Prénom Nom de jeune fille Nom de famille',
        'l f m' => 'Nom de famille Nom de jeune fille Prénom',
        'l, f' => 'Nom, Prénom'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Ligne de commande à opérer (depuis l\'interface',
      'saveAsDefault' => 'Enregistrer comme élément par défaut'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Nom',
      'emailAddress' => 'Adresse email',
      'team' => 'Target Team',
      'status' => 'Statut',
      'assignToUser' => 'Assigner à l\'utilisateur',
      'host' => 'Hôte',
      'username' => 'Nom d\'utilisateur',
      'password' => 'Mot de passe',
      'port' => 'Port',
      'monitoredFolders' => 'Dossiers surveillés',
      'trashFolder' => 'Dossier Corbeille',
      'security' => 'Sécurité',
      'createCase' => 'Créer un ticket',
      'reply' => 'Réponse automatique',
      'caseDistribution' => 'Distribution des tickets',
      'replyEmailTemplate' => 'Modèle de réponse email',
      'replyFromAddress' => 'Adresse de réponse',
      'replyToAddress' => 'Adresse de  destination',
      'replyFromName' => 'Nom pour répondre',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'Pour tous les membres de l\'équipe',
      'teams' => 'Teams',
      'sentFolder' => 'Dossier envoyé',
      'storeSentEmails' => 'Stocker les emails envoyés',
      'keepFetchedEmailsUnread' => 'Conserver les e-mails non lus',
      'useImap' => 'Récupérer des emails',
      'useSmtp' => 'Utiliser SMTP',
      'smtpHost' => 'Hôte SMTP',
      'smtpPort' => 'Port SMTP',
      'smtpAuth' => 'Authentification SMTP',
      'smtpSecurity' => 'Sécurité SMTP',
      'smtpAuthMechanism' => 'Mécanisme d\'authentification SMTP',
      'smtpUsername' => 'Nom d\'utilisateur SMTP',
      'smtpPassword' => 'Mot de passe SMTP
',
      'fromName' => 'De nom',
      'smtpIsShared' => 'SMTP est partagé',
      'smtpIsForMassEmail' => 'SMTP est pour le courrier électronique en masse'
    ],
    'tooltips' => [
      'useSmtp' => 'Capacité à envoyer des courriels',
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Création automatique de tickets à partir des emails entrant',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'Si cette case est cochée, les utilisateurs pourront envoyer des courriels à l\'aide de ce protocole SMTP. La disponibilité est contrôlée par les rôles via l\'autorisation Compte de groupe électronique.',
      'smtpIsForMassEmail' => 'Si cette case est cochée, SMTP sera disponible pour le courrier électronique en masse.',
      'storeSentEmails' => 'Les emails envoyés seront stockés sur le serveur IMAP.'
    ],
    'links' => [
      'filters' => 'Filtre',
      'emails' => 'Emails',
      'assignToUser' => 'Attribuer à l\'utilisateur'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actif',
        'Inactive' => 'Inactif'
      ],
      'caseDistribution' => [
        '' => 'Aucun',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAINE',
        'login' => 'S\'IDENTIFIER',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Ajouter un compte email',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Principal'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Impossible de se connecter au serveur IMAP'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Activé',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps'
    ],
    'messages' => [
      'selectIntegration' => 'Sélectionnez une intégration à partir du menu.',
      'noIntegrations' => 'Aucune intégration n\'est disponible.'
    ],
    'help' => [
      'Google' => '** Obtenez les informations d\'identification OAuth 2.0 auprès de Google Developers Console. ** 

Visitez [Console Google Developers](https://console.developers.google.com/project) pour obtenir des informations d\'identification OAuth 2.0, telles qu\'un ID client et un client. Des secrets connus des applications Google et EspoCRM.',
      'GoogleMaps' => 'Obtenir la clé d\'API [ici](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Statut',
      'executeTime' => 'Exécuté à',
      'executedAt' => 'Exécuté à',
      'startedAt' => 'Commencé à',
      'attempts' => 'Tentatives restantes',
      'failedAttempts' => 'Tentatives échouées',
      'serviceName' => 'Service',
      'method' => 'Méthode',
      'methodName' => 'Méthode',
      'scheduledJob' => 'Tâche planifiée',
      'scheduledJobJob' => 'Nom du travail planifié',
      'data' => 'Données',
      'targetType' => 'Type de cible',
      'targetId' => 'ID cible',
      'number' => 'Nombre',
      'queue' => 'Queue',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Emploi'
    ],
    'options' => [
      'status' => [
        'Pending' => 'En attente',
        'Success' => 'Succès',
        'Running' => 'En cours',
        'Failed' => 'Échec'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Largeur (%)',
      'widthPx' => 'Width (px)',
      'link' => 'Lien',
      'notSortable' => 'Not Sortable',
      'align' => 'Align',
      'panelName' => 'Nom du volet',
      'style' => 'Style',
      'sticked' => 'Sticked',
      'isLarge' => 'Grande taille de police',
      'hidden' => 'Caché',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Conditions rendant le volet visible',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break'
    ],
    'options' => [
      'align' => [
        'left' => 'Gauche',
        'right' => 'Droite'
      ],
      'style' => [
        'default' => 'Default',
        'success' => 'Success',
        'danger' => 'Danger',
        'info' => 'Info',
        'warning' => 'Warning',
        'primary' => 'Primary'
      ]
    ],
    'labels' => [
      'New panel' => 'Nouveau volet',
      'Layout' => 'Disposition'
    ],
    'messages' => [
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width in percentage. It\'s recommended to have one column with the not-set width, usually it\'s the *Name* field.',
      'widthPx' => 'A column width in pixels. Takes effect only if the (%) value is not set. Makes the column width fixed.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'Si cette case est cochée, une valeur de champ sera affichée sous forme de lien pointant vers la vue détaillée de l\'enregistrement. Habituellement, il est utilisé pour les champs * Nom *.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Dispositions d\'écrans'
    ],
    'labels' => [
      'Create LayoutSet' => 'Créer des Dispositions d\'écrans',
      'Edit Layouts' => 'Modifier les Dispositions d\'écrans'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Nom',
      'campaign' => 'Campagne',
      'isActive' => 'C\'est actif',
      'subscribeToTargetList' => 'S\'abonner à la liste des cibles',
      'subscribeContactToTargetList' => 'S\'abonner Contact si existe',
      'targetList' => 'Liste de cibles',
      'fieldList' => 'Champs de charge utile',
      'optInConfirmation' => 'Double opt-in',
      'optInConfirmationEmailTemplate' => 'Modèle d\'e-mail de confirmation d\'adhésion',
      'optInConfirmationLifetime' => 'Opt-in confirmation à vie (heures)',
      'optInConfirmationSuccessMessage' => 'Texte à afficher après la confirmation d\'adhésion',
      'leadSource' => 'Source principale',
      'apiKey' => 'clé API',
      'targetTeam' => 'Équipe cible',
      'exampleRequestMethod' => 'Méthode',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Charge utile',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Créer un prospect avant confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Ignorer la confirmation si le prospect est déjà dans la liste des cibles',
      'smtpAccount' => 'Compte SMTP',
      'inboundEmail' => 'Compte de messagerie de groupe',
      'duplicateCheck' => 'Contrôle en double'
    ],
    'links' => [
      'targetList' => 'Liste de cibles',
      'campaign' => 'Campagne',
      'optInConfirmationEmailTemplate' => 'Modèle d\'e-mail de confirmation d\'adhésion',
      'targetTeam' => 'Équipe cible',
      'inboundEmail' => 'Compte de messagerie de groupe',
      'logRecords' => 'Bûche'
    ],
    'labels' => [
      'Create LeadCapture' => 'Créer un point d\'entrée',
      'Generate New API Key' => 'Générer une nouvelle clé API',
      'Request' => 'Demande',
      'Confirm Opt-In' => 'Confirmer la participation'
    ],
    'messages' => [
      'generateApiKey' => 'Créer une nouvelle clé API',
      'optInConfirmationExpired' => 'Le lien de confirmation d\'adhésion a expiré.',
      'optInIsConfirmed' => 'L\'inscription est confirmée.'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => 'Markdown est pris en charge.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Nombre',
      'data' => 'Les données',
      'target' => 'Cible',
      'leadCapture' => 'Capture de plomb',
      'createdAt' => 'Entré à',
      'isCreated' => 'Le plomb est-il créé?'
    ],
    'links' => [
      'leadCapture' => 'Capture de plomb',
      'target' => 'Cible'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Poster',
      'attachments' => 'Pièces-jointes',
      'targetType' => 'Cible',
      'teams' => 'Équipes',
      'users' => 'Utilisateurs',
      'portals' => 'Portails',
      'type' => 'Type',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Data',
      'number' => 'Number'
    ],
    'filters' => [
      'all' => 'Tous',
      'posts' => 'Publications',
      'updates' => 'Mises à jour'
    ],
    'options' => [
      'targetType' => [
        'self' => 'to myself',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users'
      ],
      'type' => [
        'Post' => 'Poster'
      ]
    ],
    'messages' => [
      'writeMessage' => 'Écrivez votre message ici'
    ],
    'links' => [
      'superParent' => 'Super parent',
      'related' => 'Apparenté, relié, connexe'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Désinscrit',
      'invalid' => 'Invalide'
    ],
    'presetFilters' => [
      'orphan' => 'Orphelin'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Nom',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Rôles',
      'isActive' => 'Actif',
      'isDefault' => 'Par défaut',
      'tabList' => 'Liste des onglets',
      'quickCreateList' => 'Liste de création rapide',
      'companyLogo' => 'Logo',
      'theme' => 'Thème',
      'language' => 'Langue',
      'dashboardLayout' => 'Organisation Dashboard',
      'dateFormat' => 'Format date',
      'timeFormat' => 'Format heure',
      'timeZone' => 'Fuseau',
      'weekStart' => 'Premier jour de la semaine',
      'defaultCurrency' => 'Devise par défaut',
      'layoutSet' => 'Agencements des champs',
      'customUrl' => 'Lien personnalisé',
      'customId' => 'Custom ID'
    ],
    'links' => [
      'users' => 'Utilisateurs',
      'portalRoles' => 'Rôles',
      'layoutSet' => 'Agencements des champs',
      'notes' => 'Notes',
      'articles' => 'Articles de la base de connaissance'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.'
    ],
    'labels' => [
      'Create Portal' => 'Créer un Portail',
      'User Interface' => 'Interface utilisateur',
      'General' => 'Général',
      'Settings' => 'Paramètres'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Permission d\'exportation',
      'massUpdatePermission' => 'Autorisation de mise à jour en masse'
    ],
    'links' => [
      'users' => 'Utilisateurs'
    ],
    'labels' => [
      'Access' => 'Accès',
      'Create PortalRole' => 'Créer un rôle Portail',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ],
    'tooltips' => [
      'exportPermission' => 'Définit si les utilisateurs du portail ont la possibilité d\'exporter des enregistrements.',
      'massUpdatePermission' => 'Définit si les utilisateurs du portail ont la possibilité d\'effectuer une mise à jour en masse des enregistrements.'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Create Portal User'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Format de la date',
      'timeFormat' => 'Format de l\'heure',
      'timeZone' => 'Fuseau horaire',
      'weekStart' => 'Premier jour de la semaine',
      'thousandSeparator' => 'Séparateur de milliers',
      'decimalMark' => 'Symbole décimal',
      'defaultCurrency' => 'Devise par défaut',
      'currencyList' => 'Liste des devises',
      'language' => 'Langage',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de passe',
      'smtpEmailAddress' => 'Adresse email',
      'exportDelimiter' => 'Délimitant pour l\'export',
      'receiveAssignmentEmailNotifications' => 'Email notifications upon assignment',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'assignmentNotificationsIgnoreEntityTypeList' => 'Notifications d\'affectation dans l\'application',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Notifications d\'attribution de courrier électronique',
      'autoFollowEntityTypeList' => 'Global Auto-Follow',
      'signature' => 'Signature email',
      'dashboardTabList' => 'Liste des onglets',
      'defaultReminders' => 'Notifications par défaut',
      'theme' => 'Thème',
      'useCustomTabList' => 'Liste d\'onglets personnalisé',
      'tabList' => 'Liste des onglets',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Auto-follow record after posting in Stream',
      'followCreatedEntities' => 'Auto-follow created records',
      'followCreatedEntityTypeList' => 'Suivre automatiquement les éléments créés parmi les Fonctionnalités sélectionnées',
      'emailUseExternalClient' => 'Utiliser un client de messagerie externe',
      'scopeColorsDisabled' => 'Désactiver les couleurs de la portée',
      'tabColorsDisabled' => 'Désactiver les couleurs des onglets'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Dimanche',
        1 => 'Lundi'
      ]
    ],
    'labels' => [
      'Notifications' => 'Notifications',
      'User Interface' => 'Interface utilisateurs',
      'SMTP' => 'SMTP',
      'Misc' => 'Divers',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Réinitialiser le tableau de bord par défaut'
    ],
    'tooltips' => [
      'autoFollowEntityTypeList' => 'Suivre automatiquement TOUS les nouveaux éléments parmi la sélection de Type de Fonctionnalités, quelqu\'en soit le créateur. Les voir dans le Flux et recevoir des notifications pour TOUS les éléments du système.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'Lors de la création de nouveaux enregistrements, ils seront automatiquement suivis même s\'ils sont attribués à un autre utilisateur.',
      'followCreatedEntityTypeList' => 'Vous suivrez automatiquement les éléments que vous créerez s\'ils font partie de votre sélection de Fonctionnalités, même s’ils sont attribués à un autre utilisateur.'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Nom',
      'roles' => 'Rôles',
      'assignmentPermission' => 'Assignation de permissions',
      'userPermission' => 'Permission utilisateur',
      'portalPermission' => 'Permission portail',
      'groupEmailAccountPermission' => 'Autorisation de compte de messagerie de groupe',
      'exportPermission' => 'Permission d\'exportation',
      'massUpdatePermission' => 'Autorisation de mise à jour en masse',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => 'Permission de confidentialité des données'
    ],
    'links' => [
      'users' => 'Utilisateurs',
      'teams' => 'Équipes'
    ],
    'tooltips' => [
      'assignmentPermission' => 'Permet de restreindre la capacité pour les utilisateurs d\'attribuer des enregistrements aux autres utilisateurs.

tous - aucune restriction

équipe - peuvent assigner aux utilisateurs de l\'équipe

non - seulement à soi',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Définit un accès aux comptes de messagerie du groupe, une possibilité d\'envoyer des courriels à partir du groupe SMTP.',
      'exportPermission' => 'Définit si les utilisateurs ont la possibilité d\'exporter des enregistrements.',
      'massUpdatePermission' => 'Définit si les utilisateurs ont la possibilité d\'effectuer une mise à jour en masse des enregistrements.',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => 'Permet d\'afficher et d\'effacer des données personnelles.'
    ],
    'labels' => [
      'Access' => 'Accès',
      'Create Role' => 'Créer un rôle',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'non-défini',
        'enabled' => 'activé',
        'disabled' => 'désactivé'
      ],
      'levelList' => [
        'all' => 'tous',
        'team' => 'équipe',
        'account' => 'Compte',
        'contact' => 'Contact',
        'own' => 'soi',
        'no' => 'non',
        'yes' => 'oui',
        'not-set' => 'non défini'
      ]
    ],
    'actions' => [
      'read' => 'Voir',
      'edit' => 'Modifier',
      'delete' => 'Supprimer',
      'stream' => 'Flux',
      'create' => 'Créer'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Veuillez vider le cache pour que les changements soient pris en compte.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'job' => 'Tâche',
      'scheduling' => 'Planification (crontab notation)'
    ],
    'links' => [
      'log' => 'Log'
    ],
    'labels' => [
      'As often as possible' => 'Aussi souvent que possible',
      'Create ScheduledJob' => 'Créer une tâche planifiée'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Nettoyer',
        'CheckInboundEmails' => 'Vérifier les emails entrants',
        'CheckEmailAccounts' => 'Vérifier ses comptes emails personnels',
        'SendEmailReminders' => 'Envoyer des notifications par email',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Vérifier la nouvelle version',
        'ProcessWebhookQueue' => 'Traiter la file d\'attente Webhook',
        'ProcessMassEmail' => 'Envoyer emails groupés',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status',
        'PropertyMatchingUpdate' => 'Property Matching Update',
        'SendPropertyMatches' => 'Send Matched Properties to Requestors'
      ],
      'cronSetup' => [
        'linux' => 'Note: Ajoutez cette ligne dans le fichier crontab pour lancer les tâches planifiées:',
        'mac' => 'Note: Ajoutez cette ligne dans le fichier crontab pour lancer les tâches planifiées:',
        'windows' => 'Note: Créez un fichier de commandes avec les commandes suivantes pour exécuter des tâches planifiées Windows',
        'default' => 'Note: Ajouter cette commande pour Cron (tâche planifiée):'
      ],
      'status' => [
        'Active' => 'Actif',
        'Inactive' => 'Inactif'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

`*/5 * * * *` - every 5 minutes

`0 */2 * * *` - every 2 hours

`30 1 * * *` - at 01:30 once a day

`0 0 1 * *` - on the first day of the month'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Statut',
      'executionTime' => 'Temps d\'exécution',
      'target' => 'Cible'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Utiliser la mise en cache',
      'dateFormat' => 'Format de la date',
      'timeFormat' => 'Format horaire',
      'timeZone' => 'Fuseau horaire',
      'weekStart' => 'Premier jour de la semaine',
      'thousandSeparator' => 'Séparateur de millier',
      'decimalMark' => 'Symbole décimal',
      'defaultCurrency' => 'Devise par défaut',
      'baseCurrency' => 'Devise de base',
      'currencyRates' => 'Taux des devises',
      'currencyList' => 'Liste des devises',
      'language' => 'Langue',
      'companyLogo' => 'Logo',
      'smsProvider' => 'SMS Provider',
      'outboundSmsFromNumber' => 'SMS From Number',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de passe',
      'outboundEmailFromName' => 'De',
      'outboundEmailFromAddress' => 'Depuis l\'adresse',
      'outboundEmailIsShared' => 'Est partagé',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'recordsPerPage' => 'Enregistrements par page',
      'recordsPerPageSmall' => 'Enregistrements par page (réduits)',
      'recordsPerPageSelect' => 'Records Per Page (Select)',
      'tabList' => 'Liste des onglets',
      'quickCreateList' => 'Liste des créations rapides',
      'exportDelimiter' => 'Délimitant en exportation',
      'globalSearchEntityList' => 'Liste des Fonctionnalités pour la Recherche globale',
      'authenticationMethod' => 'Méthode d\'authentification',
      'ldapHost' => 'Hôte',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Full User DN',
      'ldapPassword' => 'Mot de passe',
      'ldapBindRequiresDn' => 'Bind Requires DN',
      'ldapBaseDn' => 'Base DN',
      'ldapAccountCanonicalForm' => 'Compte forme canonique',
      'ldapAccountDomainName' => 'Compte du nom de domaine',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapPortalUserLdapAuth' => 'Utiliser l\'authentification LDAP pour les utilisateurs du portail',
      'ldapCreateEspoUser' => 'Créer un utilisateur dans EspoCRM',
      'ldapSecurity' => 'Sécurité',
      'ldapUserLoginFilter' => 'Filtre des connexions utilisateur',
      'ldapAccountDomainNameShort' => 'Compte du nom de domaine réduit',
      'ldapOptReferrals' => 'Abonnés parrainés',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'User Last Name Attribute',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Portails par défaut pour un utilisateur du portail',
      'ldapPortalUserRoles' => 'Rôles par défaut pour un utilisateur du portail',
      'exportDisabled' => 'Désactiver l\'Export (seul l\'administrateur pourra le faire)',
      'assignmentNotificationsEntityList' => 'Fonctionnalités à notifier lors de l\'attribution',
      'assignmentEmailNotifications' => 'Notifications upon assignment',
      'assignmentEmailNotificationsEntityList' => 'Assignment email notifications scopes',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'Ce qu\'il faut signaler',
      'emailNotificationsDelay' => 'Délai de notification par courrier électronique (en secondes)',
      'b2cMode' => 'Mode B2C',
      'avatarsDisabled' => 'Désactiver les avatars',
      'followCreatedEntities' => 'Follow created records',
      'displayListViewRecordCount' => 'Afficher le Nombre Total (listes)',
      'theme' => 'Thème',
      'userThemesDisabled' => 'Désactiver les thèmes utilisateur',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Taille maximale d\'Emails (Mo)',
      'massEmailMaxPerHourCount' => 'Nombre maximum d\'Emails par heure',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Nombre maximum de comptes Emails personnels par utilisateur',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'URL du site',
      'addressPreview' => 'Address Preview',
      'addressFormat' => 'Address Format',
      'personNameFormat' => 'Format du nom',
      'notificationSoundsDisabled' => 'Disable Notification Sounds',
      'newNotificationCountInTitle' => 'Afficher le nombre de nouvelles notifications dans le titre de la page web',
      'applicationName' => 'Application Name',
      'calendarEntityList' => 'Liste Calendrier',
      'busyRangesEntityList' => 'Liste de Fonctionnalités libres/inactives',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'massEmailOpenTracking' => 'Suivi des e-mails ouverts',
      'massEmailVerp' => 'Utiliser VERP',
      'activitiesEntityList' => 'Liste Activités',
      'historyEntityList' => 'Liste Historique',
      'currencyFormat' => 'Currency Format',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclAllowDeleteCreated' => 'Allow to remove created records',
      'adminNotifications' => 'Notifications du système dans le volet Administration',
      'adminNotificationsNewVersion' => 'Afficher la notification lorsque la nouvelle version d\'EspoCRM est disponible',
      'adminNotificationsNewExtensionVersion' => 'Afficher la notification lorsque de nouvelles versions d\'extensions sont disponibles',
      'textFilterUseContainsForVarchar' => 'Utilisez l\'opérateur \'contient\' lors du filtrage des champs varchar',
      'authTokenPreventConcurrent' => 'Un seul jeton d\'authentification par utilisateur',
      'scopeColorsDisabled' => 'Désactiver les couleurs de la portée',
      'tabColorsDisabled' => 'Désactiver les couleurs des onglets',
      'tabIconsDisabled' => 'Désactiver les icônes d\'onglets',
      'emailAddressIsOptedOutByDefault' => 'Marquer les nouvelles adresses e-mail comme désactivées',
      'outboundEmailBccAddress' => 'Adresse BCC pour les clients externes',
      'cleanupDeletedRecords' => 'Nettoyer les enregistrements supprimés',
      'addressCountryList' => 'Adresse Pays Liste de saisie semi-automatique',
      'addressCityList' => 'Adresse Ville Liste de saisie semi-automatique',
      'addressStateList' => 'Liste de complétion automatique d\'état d\'adresse',
      'fiscalYearShift' => 'Année fiscale début',
      'jobRunInParallel' => 'Travaux exécutés en parallèle',
      'jobMaxPortion' => 'Emplois Portion Max',
      'jobPoolConcurrencyNumber' => 'Numéro d\'accès simultané au pool d\'emplois',
      'daemonInterval' => 'Intervalle de démon',
      'daemonMaxProcessNumber' => 'Nombre de processus Daemon Max',
      'daemonProcessTimeout' => 'Délai de traitement du démon',
      'cronDisabled' => 'Désactiver Cron',
      'maintenanceMode' => 'Mode de Maintenance',
      'useWebSocket' => 'Utiliser WebSocket',
      'passwordRecoveryDisabled' => 'Désactiver la récupération du mot de passe',
      'passwordRecoveryForAdminDisabled' => 'Désactiver la récupération de mot de passe pour les utilisateurs administrateurs',
      'passwordRecoveryForInternalUsersDisabled' => 'Désactiver la récupération de mot de passe pour les utilisateurs internes',
      'passwordRecoveryNoExposure' => 'Évitez d\'afficher l\'adresse courriel sur le formulaire de récupération de mot de passe',
      'passwordGenerateLength' => 'Longueur des mots de passe générés',
      'passwordStrengthLength' => 'Longueur minimale du mot de passe',
      'passwordStrengthLetterCount' => 'Nombre de lettres requises dans le mot de passe',
      'passwordStrengthNumberCount' => 'Nombre de chiffres requis dans le mot de passe',
      'passwordStrengthBothCases' => 'Le mot de passe doit contenir des lettres en majuscule et en minuscule',
      'auth2FA' => 'Activer l\'authentification à 2 facteurs',
      'auth2FAForced' => 'Forcer les utilisateurs réguliers à utiliser l\'authentification à deux facteurs',
      'auth2FAMethodList' => 'Méthodes 2FA disponibles',
      'saleMarkup' => 'Honoraires de vente (%)',
      'rentMarkup' => 'Honoraires de Location (%)',
      'realEstateEmailSending' => 'Envoyer un courriel aux demandeurs concernant les biens correspondants',
      'realEstatePropertyTemplate' => 'Mod�le d\'email de Bien',
      'realEstateEmailSendingAssignedUserCc' => 'Ajouter Utilisateur selectionn� au CC'
    ],
    'options' => [
      'currencyFormat' => [
        3 => '10 €'
      ],
      'personNameFormat' => [
        'firstLast' => 'Prénom Nom',
        'lastFirst' => 'Nom Prénom',
        'firstMiddleLast' => 'Prénom Second Prénom Nom',
        'lastFirstMiddle' => 'Nom Prénom Second Prénom'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Des postes',
        'Status' => 'Mises à jour de statut',
        'EmailReceived' => 'Courriels reçus'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ]
    ],
    'tooltips' => [
      'displayListViewRecordCount' => 'Le nombre total d\'éléments sera affiché dans les affichages en Liste.',
      'currencyList' => 'Devises disponibles dans le système.',
      'activitiesEntityList' => 'Éléments disponibles dans le volet Activités.',
      'historyEntityList' => 'Éléments disponibles dans le volet Historique.',
      'calendarEntityList' => 'Éléments disponibles dans le Calendrier.',
      'addressStateList' => 'Suggestions de Régions pour les champs d\'adresse.',
      'addressCityList' => 'Suggestions de Villes pour les champs d\'adresse. ',
      'addressCountryList' => 'Suggestions de Pays pour les champs d\'adresse. ',
      'exportDisabled' => 'Les utilisateurs ne pourront pas faire d\'export. L\'export sera réservé aux administrateurs.',
      'globalSearchEntityList' => 'Éléments trouvables grâce à la Recherche globale.',
      'siteUrl' => 'Lien vers cette installation d\'EspoCRM. Vous devrez le modifier si vous souhaitez migrer vers un autre domaine.',
      'useCache' => 'Gardez cette option activée, sauf pour des motifs de développement.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Seuls les utilisateurs Portail pourront récupérer leur mot de passe.',
      'passwordRecoveryNoExposure' => 'Il ne sera pas possible de déterminer si une adresse courriel spécifique est enregistrée dans le système.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Nombre d\'enregistrements dans les volets Relations.',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Les utilisateurs suivront automatiquement leurs entrées',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'Si coché alors les utilisateurs ne pourront pas sélectionner un autre thème',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Le type de votre compte forme canonique. Il y a 4 options: 

- \'Dn\' - le formulaire au format \'CN = testeur, OU = espocr, DC = test, DC = lan\'. 

- \'Nom d\'utilisateur\' - le formulaire \'testeur \'. 

-\' Barre oblique inverse \'- le formulaire\' ENTREPRISE \\ testeur \'. 

-\' Principal \'- le formulaire\' testeur@entreprise.fr \'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Autoriser les utilisateurs du portail à utiliser l\'authentification LDAP au lieu de l\'authentification Espo.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'LDAP attribute which is used to determine the user last name. E.g. "sn".',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
      'ldapPortalUserPortals' => 'Portails par défaut pour l\'utilisateur de portail créé',
      'ldapPortalUserRoles' => 'Rôles par défaut pour l\'utilisateur de portail créé',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'Si cette case n\'est pas cochée, l\'opérateur "commence par" est utilisé. Vous pouvez utiliser le caractère générique \'%\'.',
      'streamEmailNotificationsEntityList' => 'Notifications par courriel des mises à jour de flux des éléments suivis. Uniquement pour les Fonctionnalités spécifiées.',
      'authTokenPreventConcurrent' => 'Les utilisateurs ne pourront pas se connecter simultanément sur plusieurs appareils.',
      'emailAddressIsOptedOutByDefault' => 'Lors de la création d\'un nouvel enregistrement, l\'adresse e-mail sera marquée comme désactivée.',
      'cleanupDeletedRecords' => 'Les enregistrements supprimés seront supprimés de la base de données après un certain temps.',
      'jobRunInParallel' => 'Les travaux seront exécutés dans des processus parallèles.',
      'jobPoolConcurrencyNumber' => 'Nombre maximal de processus exécutés simultanément.',
      'jobMaxPortion' => 'Nombre maximal de travaux traités par exécution.',
      'daemonInterval' => 'L\'intervalle entre les processus cron s\'exécute en secondes.',
      'daemonMaxProcessNumber' => 'Nombre maximal de processus cron exécutés simultanément.',
      'daemonProcessTimeout' => 'Temps d\'exécution maximal (en secondes) alloué pour un seul processus cron.',
      'cronDisabled' => 'Cron ne courra pas.',
      'maintenanceMode' => 'Seuls les administrateurs auront accès au système.'
    ],
    'labels' => [
      'Group Tab' => 'Onglet de Groupe',
      'System' => 'Système',
      'Locale' => 'Local',
      'Search' => 'Chercher',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
      'In-app Notifications' => 'Notifications internes',
      'Email Notifications' => 'Notifications par email',
      'Currency Settings' => 'Paramètres de devises',
      'Currency Rates' => 'Taux des devises',
      'Mass Email' => 'Emails groupés',
      'Test Connection' => 'Test Connection',
      'Connecting' => 'Connecting...',
      'Activities' => 'Activities',
      'Admin Notifications' => 'Notifications de l\'administrateur',
      'Passwords' => 'Mots de passe',
      '2-Factor Authentication' => 'Authentification à 2 facteurs',
      'Attachments' => 'Attachments'
    ],
    'messages' => [
      'ldapTestConnection' => 'The connection successfully established.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Tapez ** @ username ** pour mentionner l\'utilisateur dans le message.',
      'infoSyntax' => 'Syntaxe de marquage disponible',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'code multiligne',
      'strongText' => 'texte fort',
      'emphasizedText' => 'texte souligné',
      'deletedText' => 'texte supprimé',
      'blockquote' => 'blockquote',
      'link' => 'lien'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Nom',
      'roles' => 'Rôles',
      'layoutSet' => 'Layout Set',
      'positionList' => 'Position de liste'
    ],
    'links' => [
      'users' => 'Utilisateurs',
      'notes' => 'Notes',
      'roles' => 'Rôles',
      'layoutSet' => 'Layout Set',
      'inboundEmails' => 'Group Email Accounts'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Permissions. Les utilisateurs de cette équipe obtiennent le niveau d\'accès des rôles sélectionnés.',
      'positionList' => 'Postes disponibles dans cette équipe. Par exemple : conseiller, manager.'
    ],
    'labels' => [
      'Create Team' => 'Créer une équipe'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Nom',
      'body' => 'Corps de texte',
      'entityType' => 'Type de Fonctionnalité',
      'header' => 'Entête',
      'footer' => 'Pied de page',
      'leftMargin' => 'Marge gauche',
      'topMargin' => 'Marge du haut',
      'rightMargin' => 'Marge droite',
      'bottomMargin' => 'Marge du bas',
      'printFooter' => 'Imprimer les pieds de page',
      'printHeader' => 'Print Header',
      'footerPosition' => 'Position des pieds de page',
      'headerPosition' => 'Position de l\'entête',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Orientation de la page',
      'pageFormat' => 'Format de papier',
      'pageWidth' => 'Largeur de page (mm)',
      'pageHeight' => 'Hauteur de la page (mm)',
      'fontFace' => 'Police de caractère',
      'title' => 'Title'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Créer un modèle'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Portrait',
        'Landscape' => 'Paysage'
      ],
      'pageFormat' => [
        'Custom' => 'Douane'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'La date d\'aujourd\'hui)',
        'now' => 'Maintenant (date-heure)'
      ],
      'fontFace' => [
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courrier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courrier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'Symbole PDFA',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'symbole',
        'times' => 'Fois'
      ]
    ],
    'tooltips' => [
      'footer' => 'Utiliser {pageNumber} pour imprimer la page.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Nom',
      'userName' => 'Nom d\'utilisateur',
      'title' => 'Titre',
      'type' => 'Type',
      'isAdmin' => 'Est administrateur',
      'defaultTeam' => 'Équipe par défaut',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Téléphone',
      'roles' => 'Rôles',
      'portals' => 'Portails',
      'portalRoles' => 'Rôles de Portail',
      'teamRole' => 'Position',
      'password' => 'Mot de passe',
      'currentPassword' => 'Mot de passe actuel',
      'passwordConfirm' => 'Confirmer le mot de passe',
      'newPassword' => 'Nouveau mot de passe',
      'newPasswordConfirm' => 'Confirmer le nouveau mot de passe',
      'yourPassword' => 'Votre mot de passe actuel',
      'avatar' => 'Avatar',
      'isActive' => 'Est actif',
      'isPortalUser' => 'Utilisateur de Portail',
      'contact' => 'Contact',
      'accounts' => 'Comptes',
      'account' => 'Compte (principal)',
      'sendAccessInfo' => 'Envoyer un email avec ses accès à l\'utilisateur',
      'portal' => 'Portail',
      'gender' => 'Gender',
      'position' => 'Position in Team',
      'ipAddress' => 'IP Address',
      'passwordPreview' => 'Password Preview',
      'isSuperAdmin' => 'Est super admin',
      'lastAccess' => 'Dernier accès',
      'apiKey' => 'clé API',
      'secretKey' => 'Clef secrète',
      'dashboardTemplate' => 'Modèle de tableau de bord',
      'auth2FA' => '2FA',
      'authMethod' => 'Méthode d\'authentification',
      'auth2FAEnable' => 'Activer l\'authentification à 2 facteurs',
      'auth2FAMethod' => 'Méthode 2FA',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)'
    ],
    'links' => [
      'defaultTeam' => 'Équipe par défaut',
      'teams' => 'Équipes',
      'roles' => 'Rôles',
      'notes' => 'Notes',
      'portals' => 'Portails',
      'portalRoles' => 'Rôles Portail',
      'contact' => 'Contact',
      'accounts' => 'Comptes',
      'account' => 'Compte (principal)',
      'tasks' => 'Tasks',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Modèle de tableau de bord',
      'targetLists' => 'Listes de cibles'
    ],
    'labels' => [
      'Create User' => 'Créer un utilisateur',
      'Generate' => 'Générer',
      'Access' => 'Accès',
      'Preferences' => 'Préférences',
      'Change Password' => 'Changer le mot de passe',
      'Teams and Access Control' => 'Équipes et permissions',
      'Forgot Password?' => 'Mot de passe oublié?',
      'Password Change Request' => 'Changement de mot de passe',
      'Email Address' => 'Adresse email',
      'External Accounts' => 'Comptes externes',
      'Email Accounts' => 'Comptes email',
      'Portal' => 'Portail',
      'Create Portal User' => 'Créer un utilisateur de Portail',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
      'Generate New API Key' => 'Générer une nouvelle clé API',
      'Generate New Password' => 'Générer un nouveau mot de passe',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Retour au formulaire de connexion',
      'Requirements' => 'Exigences',
      'Security' => 'Sécurité',
      'Reset 2FA' => 'Réinitialiser 2FA',
      'Code' => 'Code',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code'
    ],
    'tooltips' => [
      'defaultTeam' => 'Toutes les données créées par cet utilisateur seront liés à cette équipe par défaut.',
      'userName' => 'Lettres a-z, nombres 0-9 et underscores autorisés.',
      'isAdmin' => 'Un administrateur accède à tout.',
      'isActive' => 'Si décoché, alors l\'utilisateur ne pourra plus se connecter.',
      'teams' => 'Les équipes auxquelles l\'utilisateur appartient. Permissions héritées de celles de l\'équipe.',
      'roles' => 'Rôles d\'accès supplémentaires. Utilisez-les si l\'utilisateur ne fait pas partie d\'une équipe ou si vous avez besoin d\'étendre le niveau des permissions uniquement pour cet utilisateur.',
      'portalRoles' => 'Rôles de Portail additionnels',
      'portals' => 'Portails auxquels cet utilisateur a accès'
    ],
    'messages' => [
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Doit comporter au moins {longueur} caractères.',
      'passwordStrengthLetterCount' => 'Doit contenir au moins {count} lettre (s).',
      'passwordStrengthNumberCount' => 'Doit contenir au moins {count} digit (s).',
      'passwordStrengthBothCases' => 'Doit contenir des lettres des majuscules et des minuscules.',
      'passwordWillBeSent' => 'Les identifiants (y compris le mot de passe) seront envoyés à l\'adresse email de l\'utilisateur.',
      'passwordChanged' => 'Le mot de passe a été modifié',
      'userCantBeEmpty' => 'Le nom d\'utilisateur ne peut être laissé vide',
      'wrongUsernamePasword' => 'Mauvaise combinaison nom d\'utilisateur/mot de passe',
      'emailAddressCantBeEmpty' => 'L\'adresse email ne peut être laissée vide',
      'userNameEmailAddressNotFound' => 'Cette combinaison utilisateur/adresse email n\'a pas été retrouvée.',
      'forbidden' => 'Erreur, veuillez réessayer plus tard.',
      'uniqueLinkHasBeenSent' => 'Un lien unique et temporaire a été envoyé à votre adresse email.',
      'passwordChangedByRequest' => 'Le mot de passe a été modifié.',
      'setupSmtpBefore' => 'Vous devez configurer [Paramètres SMTP]({url}) pour que le système puisse envoyer un mot de passe par courrier électronique.',
      'userNameExists' => 'Ce nom d\'utilisateur existe déjà',
      'wrongCode' => 'Mauvais code',
      'codeIsRequired' => 'Le code est requis',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Entrez un code de votre application d\'authentification.',
      'verifyTotpCode' => 'Scannez le code QR avec votre application d\'authentificateur mobile. Si vous rencontrez des problèmes de numérisation, vous pouvez entrer le secret manuellement. Après cela, vous verrez un code à 6 chiffres dans votre application. Entrez ce code dans le champ ci-dessous.',
      'generateAndSendNewPassword' => 'Un nouveau mot de passe sera généré et envoyé à l\'adresse électronique de l\'utilisateur.',
      'security2FaResetConfimation' => 'Êtes-vous sûr de vouloir réinitialiser les paramètres 2FA actuels?',
      'auth2FARequiredHeader' => 'Authentification à deux facteurs exigée',
      'auth2FARequired' => 'Activez l\'authentification à deux facteurs. Utilisez une application d\'authentification dans votre mobile (comme Google Authentificator).',
      'ldapUserInEspoNotFound' => 'Utilisateur introuvable dans EspoCRM. Veuillez contacter votre administrateur pour en créer un.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).'
    ],
    'options' => [
      'gender' => [
        '' => 'Not Set',
        'Male' => 'Male',
        'Female' => 'Female',
        'Neutral' => 'Neutral'
      ],
      'type' => [
        'regular' => 'Ordinaire',
        'admin' => 'Admin',
        'portal' => 'Portail',
        'system' => 'Système',
        'super-admin' => 'Super-admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'clé API',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'De mon équipe'
    ],
    'presetFilters' => [
      'active' => 'Actif',
      'activePortal' => 'Portail actif',
      'activeApi' => 'API active'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Créer un crochet Web'
    ],
    'fields' => [
      'event' => 'un événement',
      'url' => 'URL',
      'isActive' => 'C\'est actif',
      'user' => 'API utilisateur',
      'entityType' => 'Type de Fonctionnalité',
      'field' => 'Champ',
      'secretKey' => 'Clef secrète'
    ],
    'links' => [
      'user' => 'Utilisateur'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'website' => 'Site internet',
      'phoneNumber' => 'Téléphone',
      'billingAddress' => 'Adresse de facturation',
      'shippingAddress' => 'Adresse de livraison',
      'description' => 'Description',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Titre',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'originalLead' => 'Original Lead'
    ],
    'links' => [
      'contacts' => 'Contacts',
      'contactsPrimary' => 'Contacts (primary)',
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Rendez-vous (étendus)',
      'callsPrimary' => 'Appels (étendus)',
      'tasksPrimary' => 'Tâches (étendues)',
      'emailsPrimary' => 'Emails (étendus)',
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Log de campagne',
      'campaign' => 'Campagne',
      'portalUsers' => 'Utilisateurs Portail',
      'originalLead' => 'Original Lead',
      'properties' => 'Biens'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Client',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Reseller' => 'Revendeur'
      ],
      'industry' => [
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Publicité',
        'Apparel & Accessories' => 'Mode et accessoires',
        'Architecture' => 'Architecture',
        'Automotive' => 'Auto',
        'Banking' => 'Banque',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Matériaux de construction & équipements',
        'Chemical' => 'Chimie',
        'Construction' => 'Construction',
        'Computer' => 'Informatique',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Education',
        'Electronics' => 'Électronique',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Énergie',
        'Entertainment & Leisure' => 'Divertissement et loisirs',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Alimentation',
        'Grocery' => 'Épicerie',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Santé',
        'Insurance' => 'Assurance',
        'Legal' => 'Droit',
        'Manufacturing' => 'Industrie',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publication',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Immobilier',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Logiciel',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Télécommunications',
        'Television' => 'Télévision',
        'Testing, Inspection & Certification' => 'Testing, Inspection & Certification',
        'Transportation' => 'Transport',
        'Travel' => 'Travel',
        'Venture Capital' => 'Investissement',
        'Wholesale' => 'Wholesale',
        'Water' => 'Water'
      ]
    ],
    'labels' => [
      'Create Account' => 'Créer un compte',
      'Copy Billing' => 'Copie de facturation',
      'Set Primary' => 'Set Primary'
    ],
    'presetFilters' => [
      'customers' => 'Clients',
      'partners' => 'Partenaires',
      'recentlyCreated' => 'Recently Created'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Mois',
      'week' => 'Semaine',
      'day' => 'Jour',
      'agendaWeek' => 'Semaine',
      'agendaDay' => 'Jour',
      'timeline' => 'Plage de temps'
    ],
    'labels' => [
      'Today' => 'Aujourd\'hui',
      'Create' => 'Créer',
      'Shared' => 'Partagé',
      'Add User' => 'Ajouter un utilisateur',
      'current' => 'actuel',
      'time' => 'heure',
      'User List' => 'Liste utilisateurs',
      'Manage Users' => 'Gérer les utilisateurs',
      'View Calendar' => 'View Calendar',
      'Create Shared View' => 'Créer une vue partagée'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date de fin',
      'direction' => 'Direction',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'reminders' => 'Notifications',
      'account' => 'Compte',
      'acceptanceStatus' => 'Acceptance Status'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Prévu',
        'Held' => 'Effectué',
        'Not Held' => 'Non effectué'
      ],
      'direction' => [
        'Outbound' => 'Sortant',
        'Inbound' => 'Entrant'
      ],
      'acceptanceStatus' => [
        'None' => 'Aucun',
        'Accepted' => 'Accepté',
        'Declined' => 'Décliné',
        'Tentative' => 'Tentative'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Définir comme effectué',
      'setNotHeld' => 'Définir comme non effectué'
    ],
    'labels' => [
      'Create Call' => 'Créer un appel',
      'Set Held' => 'Définir comme effectué',
      'Set Not Held' => 'Définir comme non effectué',
      'Send Invitations' => 'Envoyer les invitations'
    ],
    'presetFilters' => [
      'planned' => 'Prévu',
      'held' => 'Effectué',
      'todays' => 'Aujourd\'hui'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Nom',
      'description' => 'Description',
      'status' => 'Statut',
      'type' => 'Type',
      'startDate' => 'Date de début',
      'endDate' => 'Date de fin',
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Exclure les listes de cibles',
      'sentCount' => 'Envoyé',
      'openedCount' => 'Ouvert',
      'clickedCount' => 'Cliqué',
      'optedOutCount' => 'Désinscrit',
      'bouncedCount' => 'Renvoyé',
      'optedInCount' => 'A opté pour',
      'hardBouncedCount' => 'Rejeté fortement',
      'softBouncedCount' => 'Rejeté',
      'leadCreatedCount' => 'Prospects créés',
      'revenue' => 'Revenu',
      'revenueConverted' => 'Revenu (converti)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converti)',
      'budgetCurrency' => 'Devise Budget',
      'contactsTemplate' => 'Modèle de contacts',
      'leadsTemplate' => 'Modèle de pistes',
      'accountsTemplate' => 'Modèle de comptes',
      'usersTemplate' => 'Modèle d\'utilisateurs',
      'mailMergeOnlyWithAddress' => 'Ignorer les enregistrements sans adresse renseignée'
    ],
    'links' => [
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Excluant les listes de cibles',
      'accounts' => 'Comptes',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'opportunities' => 'Opportunités',
      'campaignLogRecords' => 'Logs',
      'massEmails' => 'Emails groupés',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Modèle de contacts',
      'leadsTemplate' => 'Modèle de pistes',
      'accountsTemplate' => 'Modèle de comptes',
      'usersTemplate' => 'Modèle d\'utilisateurs'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Télévision',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail'
      ],
      'status' => [
        'Planning' => 'Planning',
        'Active' => 'Actif',
        'Inactive' => 'Inactif',
        'Complete' => 'Terminer'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Créer une campagne',
      'Target Lists' => 'Listes de cibles',
      'Statistics' => 'Statistiques',
      'hard' => 'fort',
      'soft' => 'faible',
      'Unsubscribe' => 'Se désinscrire',
      'Mass Emails' => 'Emails groupés',
      'Email Templates' => 'Modèles d\'email',
      'Unsubscribe again' => 'Se re-désabonner',
      'Subscribe again' => 'Se réinscrire',
      'Create Target List' => 'Create Target List',
      'Mail Merge' => 'Fusion et publipostage',
      'Generate Mail Merge PDF' => 'Générer un PDF de publipostage'
    ],
    'presetFilters' => [
      'active' => 'Actif'
    ],
    'messages' => [
      'unsubscribed' => 'Vous avez été désinscrit de notre liste d\'envoi',
      'subscribedAgain' => 'Vous vous êtes réinscrit.'
    ],
    'tooltips' => [
      'targetLists' => 'Cibles devant recevoir les messages',
      'excludingTargetLists' => 'Cibles ne devant pas recevoir les messages'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Donnée',
      'campaign' => 'Campagne',
      'parent' => 'Cible',
      'object' => 'Objet',
      'application' => 'Application',
      'queueItem' => 'Mettre en file d\'attente',
      'stringData' => 'Chaîne de texte',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'queueItem' => 'Mettre en file d\'attente',
      'parent' => 'Parent',
      'object' => 'Objet',
      'campaign' => 'Campaign'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Envoyé',
        'Opened' => 'Ouvert',
        'Opted Out' => 'Désinscrit',
        'Bounced' => 'Renvoyé',
        'Clicked' => 'Cliqué',
        'Lead Created' => 'Prospect créé',
        'Opted In' => 'A opté pour'
      ]
    ],
    'labels' => [
      'All' => 'Tous'
    ],
    'presetFilters' => [
      'sent' => 'Envoyé',
      'opened' => 'Ouvert',
      'optedOut' => 'Désinscrit',
      'optedIn' => 'A opté pour',
      'bounced' => 'Bounced',
      'clicked' => 'Cliqué',
      'leadCreated' => 'Prospect créé'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Action',
      'urlToUse' => 'Code à insérer au lieu de l\'URL',
      'message' => 'Message',
      'campaign' => 'Campagne'
    ],
    'links' => [
      'campaign' => 'Campagne'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Create Tracking URL'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Rediriger',
        'Show Message' => 'Afficher le message'
      ]
    ],
    'tooltips' => [
      'url' => 'Le destinataire sera redirigé à cet endroit en suivant le lien.',
      'message' => 'Le message sera affiché au destinataire après avoir suivi le lien. Markdown est supporté.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Nom',
      'number' => 'Nombre',
      'status' => 'Statut',
      'account' => 'Compte',
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'priority' => 'Priorité',
      'type' => 'Type',
      'description' => 'Description',
      'inboundEmail' => 'Compte de messagerie de groupe',
      'lead' => 'Prospect',
      'attachments' => 'Les pièces jointes'
    ],
    'links' => [
      'inboundEmail' => 'Compte de messagerie de groupe',
      'account' => 'Compte',
      'contact' => 'Contact (principal)',
      'Contacts' => 'Contacts',
      'meetings' => 'Rendez-vous',
      'calls' => 'Appels',
      'tasks' => 'Tâches',
      'emails' => 'Emails',
      'articles' => 'Articles base de connaissance',
      'lead' => 'Prospect',
      'attachments' => 'Les pièces jointes'
    ],
    'options' => [
      'status' => [
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Pending' => 'En cours',
        'Closed' => 'Fermé',
        'Rejected' => 'Rejeté',
        'Duplicate' => 'Dupliquer'
      ],
      'priority' => [
        'Low' => 'Basse',
        'Normal' => 'Normale',
        'High' => 'Haute',
        'Urgent' => 'Urgente'
      ],
      'type' => [
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problème'
      ]
    ],
    'labels' => [
      'Create Case' => 'Créer un ticket',
      'Close' => 'Fermer',
      'Reject' => 'Rejeter',
      'Closed' => 'Fermé',
      'Rejected' => 'Rejeté'
    ],
    'presetFilters' => [
      'open' => 'Ouvert',
      'closed' => 'Fermé'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre du Compte',
      'account' => 'Compte',
      'accounts' => 'Comptes',
      'phoneNumber' => 'Téléphone',
      'accountType' => 'Type de compte',
      'doNotCall' => 'Ne pas appeler',
      'address' => 'Adresse',
      'opportunityRole' => 'Rôle d\'opportunité',
      'accountRole' => 'Titre',
      'description' => 'Description',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'portalUser' => 'Utilisateur Portail',
      'hasPortalUser' => 'Dispose d\'un utilisateur de Portail',
      'originalLead' => 'Original Lead',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'properties' => 'Biens',
      'propertyRole' => 'R�le'
    ],
    'links' => [
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Rapporter une campagne',
      'campaign' => 'Campagne',
      'account' => 'Compte (principal)',
      'accounts' => 'Comptes',
      'casesPrimary' => 'Tickets (principal)',
      'tasksPrimary' => 'Tâches (développées)',
      'opportunitiesPrimary' => 'Opportunités (Parentes)',
      'portalUser' => 'Utilisateur Portail',
      'originalLead' => 'Original Lead',
      'documents' => 'Documents',
      'properties' => 'Biens',
      'requests' => 'Demandes',
      'requestsPrimary' => 'Demandes (principales)'
    ],
    'labels' => [
      'Create Contact' => 'Créer un Contact'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Décisionnaire',
        'Evaluator' => 'Évaluateur',
        'Influencer' => 'Influenceur'
      ],
      'propertyRole' => [
        'Landlord' => 'Propri�taire',
        'Tenant' => 'Locataire',
        'Property Manager' => 'Administrateur du Bien',
        'Requester' => 'Demandeur'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Utilisateurs Portail',
      'notPortalUsers' => 'N\'est pas un utilisateur Portail',
      'accountActive' => 'Active'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Créer un Document',
      'Details' => 'Détails'
    ],
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'file' => 'Fichier',
      'type' => 'Type',
      'publishDate' => 'Date de publication',
      'expirationDate' => 'Date d\'expiration',
      'description' => 'Description',
      'accounts' => 'Comptes',
      'folder' => 'Dossier',
      'properties' => 'Biens'
    ],
    'links' => [
      'accounts' => 'Comptes',
      'opportunities' => 'Opportunités',
      'folder' => 'Dossier',
      'leads' => 'Prospects',
      'contacts' => 'Contacts',
      'properties' => 'Biens'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actif',
        'Draft' => 'Brouillon',
        'Expired' => 'Expiré',
        'Canceled' => 'Annulé'
      ],
      'type' => [
        '' => 'Aucun',
        'Contract' => 'Contrat',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Accord de licence'
      ]
    ],
    'presetFilters' => [
      'active' => 'Actif',
      'draft' => 'Brouillon'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Créer un dossier',
      'Manage Categories' => 'Gérer les dossiers',
      'Documents' => 'Documents'
    ],
    'links' => [
      'documents' => 'Documents'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'target' => 'Cible',
      'sentAt' => 'Date d\'envoi',
      'attemptCount' => 'Tentatives',
      'emailAddress' => 'Adresse email',
      'massEmail' => 'Emails groupé',
      'isTest' => 'Test'
    ],
    'links' => [
      'target' => 'Cible',
      'massEmail' => 'Emails groupé'
    ],
    'options' => [
      'status' => [
        'Pending' => 'En cours',
        'Sent' => 'Envoyé',
        'Failed' => 'Echec',
        'Sending' => 'Sending'
      ]
    ],
    'presetFilters' => [
      'pending' => 'En cours',
      'sent' => 'Envoyé',
      'failed' => 'Échec'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Créer un article',
      'Any' => 'Any',
      'Send in Email' => 'Envoyer par mail',
      'Move Up' => 'Move Up',
      'Move Down' => 'Move Down',
      'Move to Top' => 'Move to Top',
      'Move to Bottom' => 'Move to Bottom'
    ],
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'type' => 'Type',
      'attachments' => 'Pièces jointes',
      'publishDate' => 'Date de publication',
      'expirationDate' => 'Date d\'expiration',
      'description' => 'Description',
      'body' => 'Corps de texte',
      'categories' => 'Catégories',
      'language' => 'Langue',
      'portals' => 'Portails'
    ],
    'links' => [
      'cases' => 'Tickets',
      'opportunities' => 'Opportunités',
      'categories' => 'Catégories',
      'portals' => 'Portails'
    ],
    'options' => [
      'status' => [
        'In Review' => 'In Review',
        'Draft' => 'Brouillon',
        'Archived' => 'Archivé',
        'Published' => 'Publié'
      ],
      'type' => [
        'Article' => 'Article'
      ]
    ],
    'tooltips' => [
      'portals' => 'Article will be available only in specified portals.'
    ],
    'presetFilters' => [
      'published' => 'Publié'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Créer une catégorie',
      'Manage Categories' => 'Gérer les catégories',
      'Articles' => 'Articles'
    ],
    'links' => [
      'articles' => 'Articles'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Converti en',
      'Create Lead' => 'Créer un prospect',
      'Convert' => 'Convertir',
      'convert' => 'convert'
    ],
    'fields' => [
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'website' => 'Site internet',
      'phoneNumber' => 'Téléphone',
      'accountName' => 'Nom du compte',
      'doNotCall' => 'Ne pas appeler',
      'address' => 'Adresse',
      'status' => 'Statut',
      'source' => 'Source',
      'opportunityAmount' => 'Montant en jeu de l\'opportunité',
      'opportunityAmountConverted' => 'Montant en jeu de l\'opportunité (converti)',
      'description' => 'Description',
      'createdAccount' => 'Compte',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunité',
      'convertedAt' => 'Converti à',
      'campaign' => 'Campagne',
      'targetLists' => 'Listes de cibles',
      'targetList' => 'Liste de cibles',
      'industry' => 'Industry',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)'
    ],
    'links' => [
      'targetLists' => 'Listes de cibles',
      'campaignLogRecords' => 'Journaux de campagne',
      'campaign' => 'Campagne',
      'createdAccount' => 'Compte',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunité',
      'cases' => 'Tickets',
      'documents' => 'Documents'
    ],
    'options' => [
      'status' => [
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'Recyclé',
        'Dead' => 'Dead'
      ],
      'source' => [
        'Call' => 'Appel',
        'Email' => 'Email',
        'Existing Customer' => 'Client existant',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relations publiques',
        'Web Site' => 'Site internet',
        'Campaign' => 'Campagne',
        'Other' => 'Autre'
      ]
    ],
    'presetFilters' => [
      'active' => 'Actif',
      'actual' => 'En cours',
      'converted' => 'Converti'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Nom',
      'status' => 'Statut',
      'storeSentEmails' => 'Conserver les emails envoyés',
      'startAt' => 'Date de début',
      'fromAddress' => 'Adresse de l’émetteur',
      'fromName' => 'Nom de l\'expéditeur',
      'replyToAddress' => 'Addresse de réponse',
      'replyToName' => 'Nom pour répondre',
      'campaign' => 'Campagne',
      'emailTemplate' => 'Modèle d\'email',
      'inboundEmail' => 'Compte email',
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Liste des cibles à exclure',
      'optOutEntirely' => 'Désinscription email globale',
      'smtpAccount' => 'Compte SMTP'
    ],
    'links' => [
      'targetLists' => 'Listes de cibles',
      'excludingTargetLists' => 'Liste des cibles à exclure',
      'queueItems' => 'File d\'attente',
      'campaign' => 'Campagne',
      'emailTemplate' => 'Modèle d\'email',
      'inboundEmail' => 'Compte email'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Brouillon',
        'Pending' => 'En attente',
        'In Process' => 'En cours',
        'Complete' => 'Terminé',
        'Canceled' => 'Annulé',
        'Failed' => 'Échec'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Créer un email groupé',
      'Send Test' => 'Envoyer un message de test',
      'System SMTP' => 'Système SMTP',
      'system' => 'système',
      'group' => 'groupe'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Sélectionner au moins une cible',
      'testSent' => 'Le message de test est supposé être envoyé'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Les courriels seront stockés dans CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actual',
      'complete' => 'Complete'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date de fin',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'reminders' => 'Notifications',
      'account' => 'Compte',
      'acceptanceStatus' => 'Acceptance Status',
      'dateStartDate' => 'Date de début (toute la journée)',
      'dateEndDate' => 'Date de fin (toute la journée)',
      'isAllDay' => 'Est toute la journée',
      'sourceEmail' => 'Source Email',
      'Acceptance' => 'Acceptation'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Prévu',
        'Held' => 'Effectué',
        'Not Held' => 'Non effectué'
      ],
      'acceptanceStatus' => [
        'None' => 'Aucun',
        'Accepted' => 'Accepté',
        'Declined' => 'Décliné',
        'Tentative' => 'Tentative'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Définir comme effectué',
      'setNotHeld' => 'Définir comme non effectué'
    ],
    'labels' => [
      'Create Meeting' => 'Créer un Rendez-vous',
      'Set Held' => 'Définir comme effectué',
      'Set Not Held' => 'Définir comme non effectué',
      'Send Invitations' => 'Envoyer des Invitations',
      'on time' => 'à l\'heure',
      'before' => 'en avance',
      'All-Day' => 'Toute la journée'
    ],
    'presetFilters' => [
      'planned' => 'Prévu',
      'held' => 'Effectué',
      'todays' => 'Aujourd\'hui'
    ],
    'messages' => [
      'sendInvitationsConfirmation' => 'Send invitation emails to attendees?',
      'selectAcceptanceStatus' => 'Définissez votre statut d\'acceptation.',
      'nothingHasBeenSent' => 'Aucun envoi effectué'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Nom',
      'account' => 'Compte',
      'stage' => 'Etape',
      'amount' => 'Montant',
      'probability' => 'Probabilité, %',
      'leadSource' => 'Source du prospect',
      'doNotCall' => 'Ne pas appeler',
      'closeDate' => 'Date de fermeture',
      'contacts' => 'Contacts',
      'contact' => 'Contact (Parent)',
      'description' => 'Description',
      'amountConverted' => 'Montant (converti)',
      'amountWeightedConverted' => 'Montant pondéré',
      'campaign' => 'Campagne',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Dernière étape',
      'property' => 'Bien',
      'request' => 'Demande'
    ],
    'links' => [
      'contacts' => 'Contacts',
      'contact' => 'Contact (Parent)',
      'documents' => 'Documents',
      'campaign' => 'Campagne',
      'originalLead' => 'Original Lead',
      'property' => 'Bien',
      'request' => 'Demande'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Proposal' => 'Proposition',
        'Negotiation' => 'Négociation',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Valeur de la proposition',
        'Id. Decision Makers' => 'Id. Decisionnaire',
        'Perception Analysis' => 'Analyse de la perception',
        'Proposal/Price Quote' => 'Proposition/devis',
        'Negotiation/Review' => 'Négociation/évaluation',
        'Closed Won' => 'Conclusion gagnante',
        'Closed Lost' => 'Conclusion perdante'
      ],
      'contactRole' => [
        'Landlord' => 'Propri�taire',
        'Tenant' => 'Locataire',
        'Property Manager' => 'Administrateur de biens'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Créer une opportunité'
    ],
    'presetFilters' => [
      'open' => 'Ouvert',
      'won' => 'Gagné',
      'lost' => 'Perdu'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Nom',
      'description' => 'Description',
      'entryCount' => 'Compteur d\'entrées',
      'optedOutCount' => 'Décompté',
      'campaigns' => 'Campagnes',
      'endDate' => 'Date de fin',
      'targetLists' => 'Listes de cibles',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Statut cible',
      'isOptedOut' => 'Est exclu'
    ],
    'links' => [
      'accounts' => 'Comptes',
      'contacts' => 'Contacts',
      'leads' => 'Prospects',
      'campaigns' => 'Campagnes',
      'massEmails' => 'Emails groupés'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Télévision',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter'
      ],
      'targetStatus' => [
        'Opted Out' => 'Choisi de se retirer',
        'Listed' => 'Listé'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Créer une liste de cibles',
      'Opted Out' => 'Désinscrit',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de début',
      'dateEnd' => 'Date d\'échéance',
      'dateStartDate' => 'Date de début (toute la journée)',
      'dateEndDate' => 'Date de fin (toute la journée)',
      'priority' => 'Priorité',
      'description' => 'Description',
      'isOverdue' => 'En retard',
      'account' => 'Compte',
      'dateCompleted' => 'Date de Clôture',
      'attachments' => 'Pièces jointes',
      'reminders' => 'Reminders',
      'contact' => 'Contact'
    ],
    'links' => [
      'attachments' => 'Pièces jointes',
      'account' => 'Compte',
      'contact' => 'Contact',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'N\'a pas démarré',
        'Started' => 'Démarré',
        'Completed' => 'Terminé',
        'Canceled' => 'Annulé',
        'Deferred' => 'Reporté'
      ],
      'priority' => [
        'Low' => 'Basse',
        'Normal' => 'Normale',
        'High' => 'Haute',
        'Urgent' => 'Urgente'
      ]
    ],
    'labels' => [
      'Create Task' => 'Créer une tâche',
      'Complete' => 'Clôturer',
      'overdue' => 'dépassé'
    ],
    'presetFilters' => [
      'actual' => 'En cours',
      'completed' => 'Terminés',
      'deferred' => 'Deferred',
      'todays' => 'Aujourd\'hui',
      'overdue' => 'En retard'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ],
  'RealEstateLocation' => [
    'labels' => [
      'Create Location' => 'Cr�er Emplacement'
    ],
    'fields' => [
      'address' => 'Adresse'
    ],
    'tooltips' => [
      'address' => 'This address will be inserted into property address field once you specify this location. Keep not needed address fields empty.'
    ]
  ],
  'RealEstateMatchingConfiguration' => [
    'fields' => [
      'fieldList' => 'Field list used for matching'
    ],
    'messages' => [
      'typeFieldsMap' => 'Fields available for property types'
    ]
  ],
  'RealEstateProperty' => [
    'labels' => [
      'Create RealEstateProperty' => 'Cr�er un Bien',
      'Matching Requests' => 'Biens correpondants',
      'Locations' => 'Locations'
    ],
    'fields' => [
      'type' => 'Type',
      'address' => 'Adresse',
      'contacts' => 'Contacts',
      'status' => 'Statut',
      'assignedUser' => 'Utilisateur assign�',
      'images' => 'Images',
      'sellers' => 'Vendeurs',
      'square' => 'Surface',
      'yearBuilt' => 'Ann�e de construction',
      'documents' => 'Documents',
      'requestType' => 'Type de Demande',
      'price' => 'Prix',
      'priceConverted' => 'Prix ??(converti)',
      'bedroomCount' => 'Nombre de Chambres',
      'bathroomCount' => 'Nombre de Salle de Bain',
      'floor' => 'Niveau',
      'floorCount' => 'Nombre Niveaux',
      'location' => 'Emplacement',
      'matchingRequest' => 'Biens correspondants',
      'number' => 'Nombre',
      'account' => 'Compte',
      'addressMap' => 'Carte',
      'matchingRequestCount' => 'Matching Count',
      'contactRole' => 'Role'
    ],
    'options' => [
      'type' => [
        'Apartment' => 'Appartement',
        'Separate House' => 'Maison Individuelle',
        'Office' => 'Bureau',
        'Warehouse' => 'Entrep�t',
        'Retail' => 'Commerce',
        'Farm' => 'Ferme',
        'Room' => 'Chambre',
        'Land Lot' => 'Terrain'
      ],
      'status' => [
        'New' => 'Neuf',
        'Assigned' => 'Assign�',
        'In Process' => 'En cours',
        'Completed' => 'Termin�',
        'Canceled' => 'Annul�',
        'Lost' => 'Perdu'
      ],
      'requestType' => [
        'Rent' => 'Loyer',
        'Sale' => 'Vente'
      ]
    ],
    'links' => [
      'contacts' => 'Contacts',
      'documents' => 'Documents',
      'opportunities' => 'Opportunit�s',
      'location' => 'Emplacement',
      'account' => 'Compte',
      'matchingRequests' => 'Matching Requests'
    ],
    'presetFilters' => [
      'completed' => 'Termin�',
      'actual' => 'Actuel',
      'actualRent' => 'Location en Cours',
      'actualSale' => 'Vente en Cours'
    ]
  ],
  'RealEstateRequest' => [
    'labels' => [
      'Create RealEstateRequest' => 'Cr�er une Demande',
      'Matching Properties' => 'Biens Correspondants',
      'Create Opportunity' => 'Cr�er une Opportunit�',
      'Not Interested' => 'Pas int�ress�',
      'Unset Not Interested' => 'D�sactiver Pas Int�ress�',
      'Locations' => 'Locations',
      'Min' => 'Min',
      'Max' => 'Max'
    ],
    'fields' => [
      'status' => 'Statut',
      'assignedUser' => 'Utilisateur Assign�',
      'type' => 'Type',
      'propertyType' => 'Type de Bien',
      'number' => 'Nombre',
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'fromPrice' => 'Prix Min',
      'toPrice' => 'Prix Max',
      'fromSquare' => 'Surface Min',
      'toSquare' => 'Surface Max',
      'fromBedroomCount' => 'Nbre Chambre Min',
      'toBedroomCount' => 'Nbre Chambre Max',
      'fromBathroomCount' => 'Nbre SDB Min',
      'toBathroomCount' => 'Nbre SDB Max',
      'fromFloor' => 'Niveau Min',
      'toFloor' => 'Niveau Max',
      'fromFloorCount' => 'Nbre Niveaux Min',
      'toFloorCount' => 'Nbre Niveaux Max',
      'fromPriceConverted' => 'Prix Min (Converti)',
      'toPriceConverted' => 'Prix Max (Converti)',
      'price' => 'Prix',
      'bedroomCount' => 'Nbre Chambre',
      'bathroomCount' => 'Nbre SDB',
      'floor' => 'niveau',
      'floorCount' => 'Nbre de Niveaux',
      'square' => 'Surface',
      'locations' => 'Emplacements',
      'matchingProperty' => 'Biens Correspondants',
      'yearBuilt' => 'Ann�e de Construction',
      'fromYearBuilt' => 'Ann�e de Construction Min',
      'toYearBuilt' => 'Ann�e de Construction Max',
      'matchingPropertyCount' => 'Matching Count'
    ],
    'links' => [
      'contact' => 'Contact',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunit�s',
      'locations' => 'Emplacements',
      'matchingProperties' => 'Matching Properties'
    ],
    'options' => [
      'status' => [
        'New' => 'Neuf',
        'Assigned' => 'Assign�',
        'In Process' => 'En Cours',
        'Completed' => 'Complet�',
        'Canceled' => 'Annul�',
        'Lost' => 'Perdu'
      ],
      'type' => [
        'Rent' => 'Location',
        'Sale' => 'Vente'
      ],
      'propertyType' => [
        'Apartment' => 'Appartement',
        'Separate House' => 'Maison Individuelle',
        'Office' => 'Bureau',
        'Warehouse' => 'Entrep�t',
        'Retail' => 'Commerce',
        'Farm' => 'Ferme'
      ]
    ],
    'presetFilters' => [
      'completed' => 'Termin�',
      'actual' => 'Exact',
      'actualRent' => 'Loyer en Cours',
      'actualSale' => 'Vente en Cours'
    ]
  ]
];
