<?php return [
  'version' => 2,
  'waiters' => [
    'JobComplete' => [
      'delay' => 30,
      'operation' => 'ReadJob',
      'maxAttempts' => 120,
      'acceptors' => [
        [
          'expected' => 'Complete',
          'matcher' => 'path',
          'state' => 'success',
          'argument' => 'Job.Status',
        ],
        [
          'expected' => 'Canceled',
          'matcher' => 'path',
          'state' => 'failure',
          'argument' => 'Job.Status',
        ],
        [
          'expected' => 'Error',
          'matcher' => 'path',
          'state' => 'failure',
          'argument' => 'Job.Status',
        ],
      ],
    ],
  ],
];
