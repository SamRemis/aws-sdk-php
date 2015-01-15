<?php return [
  'version' => 2,
  'waiters' => [
    'BucketExists' => [
      'delay' => 5,
      'operation' => 'HeadBucket',
      'maxAttempts' => 20,
      'acceptors' => [
        [
          'expected' => 200,
          'matcher' => 'status',
          'state' => 'success',
        ],
        [
          'expected' => 404,
          'matcher' => 'status',
          'state' => 'retry',
        ],
      ],
    ],
    'BucketNotExists' => [
      'delay' => 5,
      'operation' => 'HeadBucket',
      'maxAttempts' => 20,
      'acceptors' => [
        [
          'expected' => 404,
          'matcher' => 'status',
          'state' => 'success',
        ],
      ],
    ],
    'ObjectExists' => [
      'delay' => 5,
      'operation' => 'HeadObject',
      'maxAttempts' => 20,
      'acceptors' => [
        [
          'expected' => 200,
          'matcher' => 'status',
          'state' => 'success',
        ],
        [
          'expected' => 404,
          'matcher' => 'status',
          'state' => 'retry',
        ],
      ],
    ],
    'ObjectNotExists' => [
      'delay' => 5,
      'operation' => 'HeadObject',
      'maxAttempts' => 20,
      'acceptors' => [
        [
          'expected' => 404,
          'matcher' => 'status',
          'state' => 'success',
        ],
      ],
    ],
  ],
];
