<?php
return [
  'Account' => [
    'afterRelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Account\\Contacts',
        'order' => 9
      ]
    ],
    'afterUnrelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Account\\Contacts',
        'order' => 9
      ]
    ]
  ],
  'Contact' => [
    'afterRelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Contact\\Opportunities',
        'order' => 9
      ]
    ],
    'afterUnrelate' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Contact\\Opportunities',
        'order' => 9
      ]
    ]
  ],
  'Meeting' => [
    'afterRemove' => [
      0 => [
        'className' => 'Espo\\Modules\\Crm\\Hooks\\Meeting\\EmailCreatedEvent',
        'order' => 9
      ]
    ]
  ],
  'RealEstateProperty' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Modules\\RealEstate\\Hooks\\RealEstateProperty\\EmailRequester',
        'order' => 16
      ]
    ]
  ],
  'RealEstateRequest' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Modules\\RealEstate\\Hooks\\RealEstateRequest\\EmailRequester',
        'order' => 16
      ]
    ]
  ],
  'Common' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\FieldProcessing',
        'order' => -11
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\AssignmentEmailNotification',
        'order' => 9
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ],
      3 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ],
      4 => [
        'className' => 'Espo\\Hooks\\Common\\StreamNotesAcl',
        'order' => 10
      ],
      5 => [
        'className' => 'Espo\\Hooks\\Common\\WebSocketSubmit',
        'order' => 20
      ],
      6 => [
        'className' => 'Espo\\Hooks\\Common\\Webhook',
        'order' => 101
      ]
    ],
    'beforeSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\CurrencyConverted',
        'order' => 1
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\NextNumber',
        'order' => 9
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\VersionNumber',
        'order' => 9
      ],
      3 => [
        'className' => 'Espo\\Hooks\\Common\\Formula',
        'order' => 11
      ],
      4 => [
        'className' => 'Espo\\Hooks\\Common\\CurrencyDefault',
        'order' => 200
      ]
    ],
    'beforeRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ]
    ],
    'afterRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Common\\Notifications',
        'order' => 10
      ],
      2 => [
        'className' => 'Espo\\Hooks\\Common\\Webhook',
        'order' => 101
      ]
    ],
    'afterRelate' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ]
    ],
    'afterUnrelate' => [
      0 => [
        'className' => 'Espo\\Hooks\\Common\\Stream',
        'order' => 9
      ]
    ]
  ],
  'Integration' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Integration\\GoogleMaps',
        'order' => 9
      ]
    ]
  ],
  'LayoutSet' => [
    'afterRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\LayoutSet\\Removal',
        'order' => 9
      ]
    ]
  ],
  'Note' => [
    'beforeSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Note\\Mentions',
        'order' => 9
      ]
    ],
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Note\\Notifications',
        'order' => 14
      ],
      1 => [
        'className' => 'Espo\\Hooks\\Note\\WebSocketSubmit',
        'order' => 20
      ]
    ]
  ],
  'Notification' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Notification\\WebSocketSubmit',
        'order' => 20
      ]
    ]
  ],
  'Portal' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Portal\\WriteConfig',
        'order' => 9
      ]
    ]
  ],
  'Sms' => [
    'beforeSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\Sms\\Numbers',
        'order' => 9
      ]
    ]
  ],
  'User' => [
    'afterSave' => [
      0 => [
        'className' => 'Espo\\Hooks\\User\\ApiKey',
        'order' => 9
      ]
    ],
    'afterRemove' => [
      0 => [
        'className' => 'Espo\\Hooks\\User\\ApiKey',
        'order' => 9
      ]
    ]
  ]
];
