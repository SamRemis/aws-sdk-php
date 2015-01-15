<?php return [
  'version' => 2,
  'waiters' => [
    'ClusterRunning' => [
      'delay' => 30,
      'operation' => 'DescribeCluster',
      'maxAttempts' => 60,
      'acceptors' => [
        [
          'state' => 'success',
          'matcher' => 'path',
          'argument' => 'Cluster.Status.State',
          'expected' => 'RUNNING',
        ],
        [
          'state' => 'success',
          'matcher' => 'path',
          'argument' => 'Cluster.Status.State',
          'expected' => 'WAITING',
        ],
        [
          'state' => 'failure',
          'matcher' => 'path',
          'argument' => 'Cluster.Status.State',
          'expected' => 'TERMINATING',
        ],
        [
          'state' => 'failure',
          'matcher' => 'path',
          'argument' => 'Cluster.Status.State',
          'expected' => 'TERMINATED',
        ],
        [
          'state' => 'failure',
          'matcher' => 'path',
          'argument' => 'Cluster.Status.State',
          'expected' => 'TERMINATED_WITH_ERRORS',
        ],
      ],
    ],
  ],
];
