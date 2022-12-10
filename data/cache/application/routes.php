<?php
return [
  0 => [
    'route' => '/Activities/{scope}/{id}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'list',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name'
    ]
  ],
  1 => [
    'route' => '/Activities',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'listCalendarEvents'
    ]
  ],
  2 => [
    'route' => '/Timeline',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'getTimeline'
    ]
  ],
  3 => [
    'route' => '/Activities/{scope}/{id}/{name}/list/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Activities',
      'action' => 'entityTypeList',
      'scope' => ':scope',
      'id' => ':id',
      'name' => ':name',
      'entityType' => ':entityType'
    ]
  ],
  4 => [
    'route' => '/RealEstateMatchingConfiguration',
    'method' => 'put',
    'params' => [
      'controller' => 'RealEstateMatchingConfiguration',
      'action' => 'update'
    ]
  ],
  5 => [
    'route' => '/',
    'method' => 'get',
    'params' => [
      'controller' => 'ApiIndex',
      'action' => 'index'
    ]
  ],
  6 => [
    'route' => '/App/user',
    'method' => 'get',
    'params' => [
      'controller' => 'App',
      'action' => 'user'
    ]
  ],
  7 => [
    'route' => '/Metadata',
    'method' => 'get',
    'params' => [
      'controller' => 'Metadata'
    ]
  ],
  8 => [
    'route' => '/I18n',
    'method' => 'get',
    'params' => [
      'controller' => 'I18n'
    ],
    'noAuth' => true
  ],
  9 => [
    'route' => '/Settings',
    'method' => 'get',
    'params' => [
      'controller' => 'Settings'
    ],
    'noAuth' => true
  ],
  10 => [
    'route' => '/Settings',
    'method' => 'patch',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  11 => [
    'route' => '/Settings',
    'method' => 'put',
    'params' => [
      'controller' => 'Settings'
    ]
  ],
  12 => [
    'route' => '/User/passwordChangeRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'passwordChangeRequest'
    ],
    'noAuth' => true
  ],
  13 => [
    'route' => '/User/changePasswordByRequest',
    'method' => 'post',
    'params' => [
      'controller' => 'User',
      'action' => 'changePasswordByRequest'
    ],
    'noAuth' => true
  ],
  14 => [
    'route' => '/Stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'scope' => 'User'
    ]
  ],
  15 => [
    'route' => '/GlobalSearch',
    'method' => 'get',
    'params' => [
      'controller' => 'GlobalSearch',
      'action' => 'search'
    ]
  ],
  16 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'post',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  17 => [
    'route' => '/LeadCapture/{apiKey}',
    'method' => 'options',
    'params' => [
      'controller' => 'LeadCapture',
      'action' => 'leadCapture',
      'apiKey' => ':apiKey'
    ],
    'noAuth' => true
  ],
  18 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  19 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  20 => [
    'route' => '/{controller}/action/{action}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => ':action'
    ]
  ],
  21 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  22 => [
    'route' => '/{controller}/layout/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  23 => [
    'route' => '/{controller}/layout/{name}/{setId}',
    'method' => 'put',
    'params' => [
      'controller' => 'Layout',
      'scope' => ':controller'
    ]
  ],
  24 => [
    'route' => '/Admin/rebuild',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'rebuild'
    ]
  ],
  25 => [
    'route' => '/Admin/clearCache',
    'method' => 'post',
    'params' => [
      'controller' => 'Admin',
      'action' => 'clearCache'
    ]
  ],
  26 => [
    'route' => '/Admin/jobs',
    'method' => 'get',
    'params' => [
      'controller' => 'Admin',
      'action' => 'jobs'
    ]
  ],
  27 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'get',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'read',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  28 => [
    'route' => '/Admin/fieldManager/{scope}',
    'method' => 'post',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'create',
      'scope' => ':scope'
    ]
  ],
  29 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'put',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  30 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'patch',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'update',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  31 => [
    'route' => '/Admin/fieldManager/{scope}/{name}',
    'method' => 'delete',
    'params' => [
      'controller' => 'FieldManager',
      'action' => 'delete',
      'scope' => ':scope',
      'name' => ':name'
    ]
  ],
  32 => [
    'route' => '/CurrencyRate',
    'method' => 'put',
    'params' => [
      'controller' => 'CurrencyRate',
      'action' => 'update'
    ]
  ],
  33 => [
    'route' => '/Action',
    'method' => 'post',
    'params' => [
      'controller' => 'Action',
      'action' => 'process'
    ]
  ],
  34 => [
    'route' => '/MassAction',
    'method' => 'post',
    'params' => [
      'controller' => 'MassAction',
      'action' => 'process'
    ]
  ],
  35 => [
    'route' => '/Export',
    'method' => 'post',
    'params' => [
      'controller' => 'Export',
      'action' => 'process'
    ]
  ],
  36 => [
    'route' => '/Kanban/{entityType}',
    'method' => 'get',
    'params' => [
      'controller' => 'Kanban',
      'action' => 'getData'
    ]
  ],
  37 => [
    'route' => '/Attachment/file/{id}',
    'method' => 'get',
    'params' => [
      'controller' => 'Attachment',
      'action' => 'file'
    ]
  ],
  38 => [
    'route' => '/Attachment/chunk/{id}',
    'method' => 'post',
    'params' => [
      'controller' => 'Attachment',
      'action' => 'chunk'
    ]
  ],
  39 => [
    'route' => '/{controller}/{id}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'read',
      'id' => ':id'
    ]
  ],
  40 => [
    'route' => '/{controller}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'index'
    ]
  ],
  41 => [
    'route' => '/{controller}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'create'
    ]
  ],
  42 => [
    'route' => '/{controller}/{id}',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  43 => [
    'route' => '/{controller}/{id}',
    'method' => 'patch',
    'params' => [
      'controller' => ':controller',
      'action' => 'update',
      'id' => ':id'
    ]
  ],
  44 => [
    'route' => '/{controller}/{id}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'delete',
      'id' => ':id'
    ]
  ],
  45 => [
    'route' => '/{controller}/{id}/stream',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'list',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  46 => [
    'route' => '/{controller}/{id}/posts',
    'method' => 'get',
    'params' => [
      'controller' => 'Stream',
      'action' => 'listPosts',
      'id' => ':id',
      'scope' => ':controller'
    ]
  ],
  47 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'put',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'follow'
    ]
  ],
  48 => [
    'route' => '/{controller}/{id}/subscription',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'id' => ':id',
      'action' => 'unfollow'
    ]
  ],
  49 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'get',
    'params' => [
      'controller' => ':controller',
      'action' => 'listLinked',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  50 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'post',
    'params' => [
      'controller' => ':controller',
      'action' => 'createLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ],
  51 => [
    'route' => '/{controller}/{id}/{link}',
    'method' => 'delete',
    'params' => [
      'controller' => ':controller',
      'action' => 'removeLink',
      'id' => ':id',
      'link' => ':link'
    ]
  ]
];
