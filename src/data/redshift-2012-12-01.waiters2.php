<?php return [
  'version' => 2,
  'waiters' => [
    'ClusterAvailable' => [
      'operation' => 'DescribeClusters',
      'maxAttempts' => 30,
      'delay' => 60,
      'acceptors' => [
        [
          'state' => 'success',
          'matcher' => 'pathAll',
          'argument' => 'Clusters[].ClusterStatus',
          'expected' => 'available',
        ],
        [
          'state' => 'failure',
          'matcher' => 'pathAny',
          'argument' => 'Clusters[].ClusterStatus',
          'expected' => 'deleting',
        ],
      ],
    ],
    'ClusterDeleted' => [
      'operation' => 'DescribeClusters',
      'maxAttempts' => 30,
      'delay' => 60,
      'acceptors' => [
        [
          'state' => 'success',
          'matcher' => 'error',
          'expected' => 'ClusterNotFound',
        ],
        [
          'state' => 'failure',
          'matcher' => 'pathAny',
          'argument' => 'Clusters[].ClusterStatus',
          'expected' => 'creating',
        ],
        [
          'state' => 'failure',
          'matcher' => 'pathAny',
          'argument' => 'Clusters[].ClusterStatus',
          'expected' => 'rebooting',
        ],
      ],
    ],
    'SnapshotAvailable' => [
      'operation' => 'DescribeClusterSnapshots',
      'maxAttempts' => 20,
      'delay' => 15,
      'acceptors' => [
        [
          'state' => 'success',
          'matcher' => 'pathAll',
          'argument' => 'Snapshots[].Status',
          'expected' => 'available',
        ],
        [
          'state' => 'failure',
          'matcher' => 'pathAny',
          'argument' => 'Snapshots[].Status',
          'expected' => 'deleted',
        ],
      ],
    ],
  ],
];
