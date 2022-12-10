<?php
return [
  'useCache' => true,
  'jobMaxPortion' => 15,
  'jobRunInParallel' => false,
  'jobPoolConcurrencyNumber' => 8,
  'daemonMaxProcessNumber' => 5,
  'daemonInterval' => 10,
  'daemonProcessTimeout' => 36000,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'recordsPerPageSelect' => 10,
  'applicationName' => 'GestImmo',
  'version' => '7.2.7',
  'timeZone' => 'UTC',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 1,
  'thousandSeparator' => '.',
  'decimalMark' => ',',
  'exportDelimiter' => ',',
  'currencyList' => [
    0 => 'USD',
    1 => 'EUR',
    2 => 'XAF'
  ],
  'defaultCurrency' => 'XAF',
  'baseCurrency' => 'XAF',
  'currencyRates' => [
    'USD' => 650,
    'EUR' => 650
  ],
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'Gestimmo',
  'outboundEmailFromAddress' => 'gestimmosenegal@gmail.com',
  'smtpServer' => '',
  'smtpPort' => 587,
  'smtpAuth' => false,
  'smtpSecurity' => 'TLS',
  'smtpUsername' => '',
  'smtpPassword' => '',
  'language' => 'fr_FR',
  'authenticationMethod' => 'Espo',
  'globalSearchEntityList' => [
    0 => 'RealEstateProperty',
    1 => 'RealEstateRequest',
    2 => 'Account',
    3 => 'Contact',
    4 => 'Lead',
    5 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'RealEstateProperty',
    1 => 'RealEstateRequest',
    2 => 'Account',
    3 => 'Contact',
    4 => 'Lead',
    5 => 'Opportunity',
    6 => 'Case',
    7 => 'Email',
    8 => 'Calendar',
    9 => 'Meeting',
    10 => 'Call',
    11 => 'Task',
    12 => '_delimiter_',
    13 => 'Document',
    14 => 'Campaign',
    15 => 'KnowledgeBaseArticle',
    16 => 'Stream',
    17 => 'User'
  ],
  'quickCreateList' => [
    0 => 'RealEstateRequest',
    1 => 'Account',
    2 => 'Contact',
    3 => 'Lead',
    4 => 'Opportunity',
    5 => 'Meeting',
    6 => 'Call',
    7 => 'Task',
    8 => 'Case',
    9 => 'Email'
  ],
  'exportDisabled' => false,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task',
    3 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 10,
  'notificationsCheckInterval' => 10,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => false,
  'theme' => 'Espo',
  'themeParams' => (object) [
    'navbar' => 'side'
  ],
  'massEmailMaxPerHourCount' => 100,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'emailAddressLookupEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 48,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 1,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'reStream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 2
        ],
        1 => (object) [
          'id' => 'reProperties',
          'name' => 'Properties',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 2
        ],
        2 => (object) [
          'id' => 'reRequests',
          'name' => 'Requests',
          'x' => 2,
          'y' => 0,
          'width' => 2,
          'height' => 2
        ],
        3 => (object) [
          'id' => 'reOpportunities',
          'name' => 'Opportunities',
          'x' => 0,
          'y' => 2,
          'width' => 2,
          'height' => 2
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'emailAutoReplySuppressPeriod' => '2 hours',
  'emailAutoReplyLimit' => 5,
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'currencyFormat' => 3,
  'currencyDecimalPlaces' => 2,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'attachmentUploadMaxSize' => 256,
  'attachmentUploadChunkSize' => 4,
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => false,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'emailForceUseExternalClient' => false,
  'useWebSocket' => false,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => false,
  'pdfEngine' => 'Tcpdf',
  'smsProvider' => NULL,
  'defaultFileStorage' => 'EspoUploadDir',
  'ldapUserNameAttribute' => 'sAMAccountName',
  'ldapUserFirstNameAttribute' => 'givenName',
  'ldapUserLastNameAttribute' => 'sn',
  'ldapUserTitleAttribute' => 'title',
  'ldapUserEmailAddressAttribute' => 'mail',
  'ldapUserPhoneNumberAttribute' => 'telephoneNumber',
  'ldapUserObjectClass' => 'person',
  'ldapPortalUserLdapAuth' => false,
  'passwordGenerateLength' => 10,
  'massActionIdleCountThreshold' => 100,
  'exportIdleCountThreshold' => 1000,
  'cacheTimestamp' => 1670693065,
  'microtime' => 1670693065.814742,
  'siteUrl' => 'http://localhost/EspoCRM',
  'fullTextSearchMinLength' => 4,
  'appTimestamp' => 1670691321,
  'maintenanceMode' => NULL,
  'cronDisabled' => NULL,
  'saleMarkup' => 5,
  'rentMarkup' => 50,
  'dashboardLayoutBeforeRealEstate' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ]
      ]
    ]
  ]
];
