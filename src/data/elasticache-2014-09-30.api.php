<?php return [
  'metadata' => [
    'apiVersion' => '2014-09-30',
    'endpointPrefix' => 'elasticache',
    'serviceFullName' => 'Amazon ElastiCache',
    'signatureVersion' => 'v4',
    'xmlNamespace' => 'http://elasticache.amazonaws.com/doc/2014-09-30/',
    'protocol' => 'query',
  ],
  'operations' => [
    'AuthorizeCacheSecurityGroupIngress' => [
      'name' => 'AuthorizeCacheSecurityGroupIngress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AuthorizeCacheSecurityGroupIngressMessage',
      ],
      'output' => [
        'shape' => 'AuthorizeCacheSecurityGroupIngressResult',
        'wrapper' => true,
        'resultWrapper' => 'AuthorizeCacheSecurityGroupIngressResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheSecurityGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheSecurityGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AuthorizationAlreadyExistsFault',
          'error' => [
            'code' => 'AuthorizationAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CopySnapshot' => [
      'name' => 'CopySnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CopySnapshotMessage',
      ],
      'output' => [
        'shape' => 'CopySnapshotResult',
        'wrapper' => true,
        'resultWrapper' => 'CopySnapshotResult',
      ],
      'errors' => [
        [
          'shape' => 'SnapshotAlreadyExistsFault',
          'error' => [
            'code' => 'SnapshotAlreadyExistsFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotNotFoundFault',
          'error' => [
            'code' => 'SnapshotNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotQuotaExceededFault',
          'error' => [
            'code' => 'SnapshotQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSnapshotStateFault',
          'error' => [
            'code' => 'InvalidSnapshotState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateCacheCluster' => [
      'name' => 'CreateCacheCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCacheClusterMessage',
      ],
      'output' => [
        'shape' => 'CreateCacheClusterResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateCacheClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'ReplicationGroupNotFoundFault',
          'error' => [
            'code' => 'ReplicationGroupNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidReplicationGroupStateFault',
          'error' => [
            'code' => 'InvalidReplicationGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheClusterAlreadyExistsFault',
          'error' => [
            'code' => 'CacheClusterAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientCacheClusterCapacityFault',
          'error' => [
            'code' => 'InsufficientCacheClusterCapacity',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSubnetGroupNotFoundFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ClusterQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'ClusterQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForClusterExceededFault',
          'error' => [
            'code' => 'NodeQuotaForClusterExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'NodeQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCNetworkStateFault',
          'error' => [
            'code' => 'InvalidVPCNetworkStateFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateCacheParameterGroup' => [
      'name' => 'CreateCacheParameterGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCacheParameterGroupMessage',
      ],
      'output' => [
        'shape' => 'CreateCacheParameterGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateCacheParameterGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheParameterGroupQuotaExceededFault',
          'error' => [
            'code' => 'CacheParameterGroupQuotaExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupAlreadyExistsFault',
          'error' => [
            'code' => 'CacheParameterGroupAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheParameterGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheParameterGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateCacheSecurityGroup' => [
      'name' => 'CreateCacheSecurityGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCacheSecurityGroupMessage',
      ],
      'output' => [
        'shape' => 'CreateCacheSecurityGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateCacheSecurityGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSecurityGroupAlreadyExistsFault',
          'error' => [
            'code' => 'CacheSecurityGroupAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupQuotaExceededFault',
          'error' => [
            'code' => 'QuotaExceeded.CacheSecurityGroup',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateCacheSubnetGroup' => [
      'name' => 'CreateCacheSubnetGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCacheSubnetGroupMessage',
      ],
      'output' => [
        'shape' => 'CreateCacheSubnetGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateCacheSubnetGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSubnetGroupAlreadyExistsFault',
          'error' => [
            'code' => 'CacheSubnetGroupAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetGroupQuotaExceededFault',
          'error' => [
            'code' => 'CacheSubnetGroupQuotaExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetQuotaExceededFault',
          'error' => [
            'code' => 'CacheSubnetQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSubnet',
          'error' => [
            'code' => 'InvalidSubnet',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateReplicationGroup' => [
      'name' => 'CreateReplicationGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateReplicationGroupMessage',
      ],
      'output' => [
        'shape' => 'CreateReplicationGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateReplicationGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ReplicationGroupAlreadyExistsFault',
          'error' => [
            'code' => 'ReplicationGroupAlreadyExists',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientCacheClusterCapacityFault',
          'error' => [
            'code' => 'InsufficientCacheClusterCapacity',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSubnetGroupNotFoundFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ClusterQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'ClusterQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForClusterExceededFault',
          'error' => [
            'code' => 'NodeQuotaForClusterExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'NodeQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCNetworkStateFault',
          'error' => [
            'code' => 'InvalidVPCNetworkStateFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateSnapshot' => [
      'name' => 'CreateSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSnapshotMessage',
      ],
      'output' => [
        'shape' => 'CreateSnapshotResult',
        'wrapper' => true,
        'resultWrapper' => 'CreateSnapshotResult',
      ],
      'errors' => [
        [
          'shape' => 'SnapshotAlreadyExistsFault',
          'error' => [
            'code' => 'SnapshotAlreadyExistsFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotQuotaExceededFault',
          'error' => [
            'code' => 'SnapshotQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotFeatureNotSupportedFault',
          'error' => [
            'code' => 'SnapshotFeatureNotSupportedFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteCacheCluster' => [
      'name' => 'DeleteCacheCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteCacheClusterMessage',
      ],
      'output' => [
        'shape' => 'DeleteCacheClusterResult',
        'wrapper' => true,
        'resultWrapper' => 'DeleteCacheClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotAlreadyExistsFault',
          'error' => [
            'code' => 'SnapshotAlreadyExistsFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotFeatureNotSupportedFault',
          'error' => [
            'code' => 'SnapshotFeatureNotSupportedFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotQuotaExceededFault',
          'error' => [
            'code' => 'SnapshotQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteCacheParameterGroup' => [
      'name' => 'DeleteCacheParameterGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteCacheParameterGroupMessage',
      ],
      'errors' => [
        [
          'shape' => 'InvalidCacheParameterGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheParameterGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteCacheSecurityGroup' => [
      'name' => 'DeleteCacheSecurityGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteCacheSecurityGroupMessage',
      ],
      'errors' => [
        [
          'shape' => 'InvalidCacheSecurityGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheSecurityGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteCacheSubnetGroup' => [
      'name' => 'DeleteCacheSubnetGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteCacheSubnetGroupMessage',
      ],
      'errors' => [
        [
          'shape' => 'CacheSubnetGroupInUse',
          'error' => [
            'code' => 'CacheSubnetGroupInUse',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSubnetGroupNotFoundFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteReplicationGroup' => [
      'name' => 'DeleteReplicationGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteReplicationGroupMessage',
      ],
      'output' => [
        'shape' => 'DeleteReplicationGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'DeleteReplicationGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'ReplicationGroupNotFoundFault',
          'error' => [
            'code' => 'ReplicationGroupNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidReplicationGroupStateFault',
          'error' => [
            'code' => 'InvalidReplicationGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotAlreadyExistsFault',
          'error' => [
            'code' => 'SnapshotAlreadyExistsFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotFeatureNotSupportedFault',
          'error' => [
            'code' => 'SnapshotFeatureNotSupportedFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotQuotaExceededFault',
          'error' => [
            'code' => 'SnapshotQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteSnapshot' => [
      'name' => 'DeleteSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSnapshotMessage',
      ],
      'output' => [
        'shape' => 'DeleteSnapshotResult',
        'wrapper' => true,
        'resultWrapper' => 'DeleteSnapshotResult',
      ],
      'errors' => [
        [
          'shape' => 'SnapshotNotFoundFault',
          'error' => [
            'code' => 'SnapshotNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSnapshotStateFault',
          'error' => [
            'code' => 'InvalidSnapshotState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCacheClusters' => [
      'name' => 'DescribeCacheClusters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheClustersMessage',
      ],
      'output' => [
        'shape' => 'CacheClusterMessage',
        'resultWrapper' => 'DescribeCacheClustersResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCacheEngineVersions' => [
      'name' => 'DescribeCacheEngineVersions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheEngineVersionsMessage',
      ],
      'output' => [
        'shape' => 'CacheEngineVersionMessage',
        'resultWrapper' => 'DescribeCacheEngineVersionsResult',
      ],
    ],
    'DescribeCacheParameterGroups' => [
      'name' => 'DescribeCacheParameterGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheParameterGroupsMessage',
      ],
      'output' => [
        'shape' => 'CacheParameterGroupsMessage',
        'resultWrapper' => 'DescribeCacheParameterGroupsResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCacheParameters' => [
      'name' => 'DescribeCacheParameters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheParametersMessage',
      ],
      'output' => [
        'shape' => 'CacheParameterGroupDetails',
        'resultWrapper' => 'DescribeCacheParametersResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCacheSecurityGroups' => [
      'name' => 'DescribeCacheSecurityGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheSecurityGroupsMessage',
      ],
      'output' => [
        'shape' => 'CacheSecurityGroupMessage',
        'resultWrapper' => 'DescribeCacheSecurityGroupsResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCacheSubnetGroups' => [
      'name' => 'DescribeCacheSubnetGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheSubnetGroupsMessage',
      ],
      'output' => [
        'shape' => 'CacheSubnetGroupMessage',
        'resultWrapper' => 'DescribeCacheSubnetGroupsResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSubnetGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSubnetGroupNotFoundFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeEngineDefaultParameters' => [
      'name' => 'DescribeEngineDefaultParameters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeEngineDefaultParametersMessage',
      ],
      'output' => [
        'shape' => 'DescribeEngineDefaultParametersResult',
        'wrapper' => true,
        'resultWrapper' => 'DescribeEngineDefaultParametersResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeEvents' => [
      'name' => 'DescribeEvents',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeEventsMessage',
      ],
      'output' => [
        'shape' => 'EventsMessage',
        'resultWrapper' => 'DescribeEventsResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeReplicationGroups' => [
      'name' => 'DescribeReplicationGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReplicationGroupsMessage',
      ],
      'output' => [
        'shape' => 'ReplicationGroupMessage',
        'resultWrapper' => 'DescribeReplicationGroupsResult',
      ],
      'errors' => [
        [
          'shape' => 'ReplicationGroupNotFoundFault',
          'error' => [
            'code' => 'ReplicationGroupNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeReservedCacheNodes' => [
      'name' => 'DescribeReservedCacheNodes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedCacheNodesMessage',
      ],
      'output' => [
        'shape' => 'ReservedCacheNodeMessage',
        'resultWrapper' => 'DescribeReservedCacheNodesResult',
      ],
      'errors' => [
        [
          'shape' => 'ReservedCacheNodeNotFoundFault',
          'error' => [
            'code' => 'ReservedCacheNodeNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeReservedCacheNodesOfferings' => [
      'name' => 'DescribeReservedCacheNodesOfferings',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeReservedCacheNodesOfferingsMessage',
      ],
      'output' => [
        'shape' => 'ReservedCacheNodesOfferingMessage',
        'resultWrapper' => 'DescribeReservedCacheNodesOfferingsResult',
      ],
      'errors' => [
        [
          'shape' => 'ReservedCacheNodesOfferingNotFoundFault',
          'error' => [
            'code' => 'ReservedCacheNodesOfferingNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeSnapshots' => [
      'name' => 'DescribeSnapshots',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSnapshotsMessage',
      ],
      'output' => [
        'shape' => 'DescribeSnapshotsListMessage',
        'resultWrapper' => 'DescribeSnapshotsResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SnapshotNotFoundFault',
          'error' => [
            'code' => 'SnapshotNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ModifyCacheCluster' => [
      'name' => 'ModifyCacheCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyCacheClusterMessage',
      ],
      'output' => [
        'shape' => 'ModifyCacheClusterResult',
        'wrapper' => true,
        'resultWrapper' => 'ModifyCacheClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheSecurityGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheSecurityGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientCacheClusterCapacityFault',
          'error' => [
            'code' => 'InsufficientCacheClusterCapacity',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForClusterExceededFault',
          'error' => [
            'code' => 'NodeQuotaForClusterExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'NodeQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCNetworkStateFault',
          'error' => [
            'code' => 'InvalidVPCNetworkStateFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ModifyCacheParameterGroup' => [
      'name' => 'ModifyCacheParameterGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyCacheParameterGroupMessage',
      ],
      'output' => [
        'shape' => 'CacheParameterGroupNameMessage',
        'resultWrapper' => 'ModifyCacheParameterGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheParameterGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheParameterGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ModifyCacheSubnetGroup' => [
      'name' => 'ModifyCacheSubnetGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyCacheSubnetGroupMessage',
      ],
      'output' => [
        'shape' => 'ModifyCacheSubnetGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'ModifyCacheSubnetGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSubnetGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSubnetGroupNotFoundFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSubnetQuotaExceededFault',
          'error' => [
            'code' => 'CacheSubnetQuotaExceededFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'SubnetInUse',
          'error' => [
            'code' => 'SubnetInUse',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSubnet',
          'error' => [
            'code' => 'InvalidSubnet',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ModifyReplicationGroup' => [
      'name' => 'ModifyReplicationGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ModifyReplicationGroupMessage',
      ],
      'output' => [
        'shape' => 'ModifyReplicationGroupResult',
        'wrapper' => true,
        'resultWrapper' => 'ModifyReplicationGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'ReplicationGroupNotFoundFault',
          'error' => [
            'code' => 'ReplicationGroupNotFoundFault',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidReplicationGroupStateFault',
          'error' => [
            'code' => 'InvalidReplicationGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheSecurityGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheSecurityGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InsufficientCacheClusterCapacityFault',
          'error' => [
            'code' => 'InsufficientCacheClusterCapacity',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForClusterExceededFault',
          'error' => [
            'code' => 'NodeQuotaForClusterExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NodeQuotaForCustomerExceededFault',
          'error' => [
            'code' => 'NodeQuotaForCustomerExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidVPCNetworkStateFault',
          'error' => [
            'code' => 'InvalidVPCNetworkStateFault',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'PurchaseReservedCacheNodesOffering' => [
      'name' => 'PurchaseReservedCacheNodesOffering',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PurchaseReservedCacheNodesOfferingMessage',
      ],
      'output' => [
        'shape' => 'PurchaseReservedCacheNodesOfferingResult',
        'wrapper' => true,
        'resultWrapper' => 'PurchaseReservedCacheNodesOfferingResult',
      ],
      'errors' => [
        [
          'shape' => 'ReservedCacheNodesOfferingNotFoundFault',
          'error' => [
            'code' => 'ReservedCacheNodesOfferingNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ReservedCacheNodeAlreadyExistsFault',
          'error' => [
            'code' => 'ReservedCacheNodeAlreadyExists',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ReservedCacheNodeQuotaExceededFault',
          'error' => [
            'code' => 'ReservedCacheNodeQuotaExceeded',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RebootCacheCluster' => [
      'name' => 'RebootCacheCluster',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RebootCacheClusterMessage',
      ],
      'output' => [
        'shape' => 'RebootCacheClusterResult',
        'wrapper' => true,
        'resultWrapper' => 'RebootCacheClusterResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidCacheClusterStateFault',
          'error' => [
            'code' => 'InvalidCacheClusterState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheClusterNotFoundFault',
          'error' => [
            'code' => 'CacheClusterNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ResetCacheParameterGroup' => [
      'name' => 'ResetCacheParameterGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResetCacheParameterGroupMessage',
      ],
      'output' => [
        'shape' => 'CacheParameterGroupNameMessage',
        'resultWrapper' => 'ResetCacheParameterGroupResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidCacheParameterGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheParameterGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CacheParameterGroupNotFoundFault',
          'error' => [
            'code' => 'CacheParameterGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RevokeCacheSecurityGroupIngress' => [
      'name' => 'RevokeCacheSecurityGroupIngress',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RevokeCacheSecurityGroupIngressMessage',
      ],
      'output' => [
        'shape' => 'RevokeCacheSecurityGroupIngressResult',
        'wrapper' => true,
        'resultWrapper' => 'RevokeCacheSecurityGroupIngressResult',
      ],
      'errors' => [
        [
          'shape' => 'CacheSecurityGroupNotFoundFault',
          'error' => [
            'code' => 'CacheSecurityGroupNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AuthorizationNotFoundFault',
          'error' => [
            'code' => 'AuthorizationNotFound',
            'httpStatusCode' => 404,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidCacheSecurityGroupStateFault',
          'error' => [
            'code' => 'InvalidCacheSecurityGroupState',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'code' => 'InvalidParameterValue',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterCombinationException',
          'error' => [
            'code' => 'InvalidParameterCombination',
            'httpStatusCode' => 400,
            'senderFault' => true,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AZMode' => [
      'type' => 'string',
      'enum' => [
        'single-az',
        'cross-az',
      ],
    ],
    'AuthorizationAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'AuthorizationAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'AuthorizationNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'AuthorizationNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'AuthorizeCacheSecurityGroupIngressMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSecurityGroupName',
        'EC2SecurityGroupName',
        'EC2SecurityGroupOwnerId',
      ],
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupName' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupOwnerId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'AutomaticFailoverStatus' => [
      'type' => 'string',
      'enum' => [
        'enabled',
        'disabled',
        'enabling',
        'disabling',
      ],
    ],
    'AvailabilityZone' => [
      'type' => 'structure',
      'members' => [
        'Name' => [
          'shape' => 'String',
        ],
      ],
      'wrapper' => true,
    ],
    'AvailabilityZonesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'AvailabilityZone',
      ],
    ],
    'AwsQueryErrorMessage' => [
      'type' => 'string',
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'BooleanOptional' => [
      'type' => 'boolean',
    ],
    'CacheCluster' => [
      'type' => 'structure',
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'ConfigurationEndpoint' => [
          'shape' => 'Endpoint',
        ],
        'ClientDownloadLandingPage' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'CacheClusterStatus' => [
          'shape' => 'String',
        ],
        'NumCacheNodes' => [
          'shape' => 'IntegerOptional',
        ],
        'PreferredAvailabilityZone' => [
          'shape' => 'String',
        ],
        'CacheClusterCreateTime' => [
          'shape' => 'TStamp',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'PendingModifiedValues' => [
          'shape' => 'PendingModifiedValues',
        ],
        'NotificationConfiguration' => [
          'shape' => 'NotificationConfiguration',
        ],
        'CacheSecurityGroups' => [
          'shape' => 'CacheSecurityGroupMembershipList',
        ],
        'CacheParameterGroup' => [
          'shape' => 'CacheParameterGroupStatus',
        ],
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheNodes' => [
          'shape' => 'CacheNodeList',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'Boolean',
        ],
        'SecurityGroups' => [
          'shape' => 'SecurityGroupMembershipList',
        ],
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
      ],
      'wrapper' => true,
    ],
    'CacheClusterAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheClusterAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheClusterList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheCluster',
        'locationName' => 'CacheCluster',
      ],
    ],
    'CacheClusterMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'CacheClusters' => [
          'shape' => 'CacheClusterList',
        ],
      ],
    ],
    'CacheClusterNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheClusterNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheEngineVersion' => [
      'type' => 'structure',
      'members' => [
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'CacheEngineDescription' => [
          'shape' => 'String',
        ],
        'CacheEngineVersionDescription' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CacheEngineVersionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheEngineVersion',
        'locationName' => 'CacheEngineVersion',
      ],
    ],
    'CacheEngineVersionMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'CacheEngineVersions' => [
          'shape' => 'CacheEngineVersionList',
        ],
      ],
    ],
    'CacheNode' => [
      'type' => 'structure',
      'members' => [
        'CacheNodeId' => [
          'shape' => 'String',
        ],
        'CacheNodeStatus' => [
          'shape' => 'String',
        ],
        'CacheNodeCreateTime' => [
          'shape' => 'TStamp',
        ],
        'Endpoint' => [
          'shape' => 'Endpoint',
        ],
        'ParameterGroupStatus' => [
          'shape' => 'String',
        ],
        'SourceCacheNodeId' => [
          'shape' => 'String',
        ],
        'CustomerAvailabilityZone' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CacheNodeIdsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'CacheNodeId',
      ],
    ],
    'CacheNodeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheNode',
        'locationName' => 'CacheNode',
      ],
    ],
    'CacheNodeTypeSpecificParameter' => [
      'type' => 'structure',
      'members' => [
        'ParameterName' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'Source' => [
          'shape' => 'String',
        ],
        'DataType' => [
          'shape' => 'String',
        ],
        'AllowedValues' => [
          'shape' => 'String',
        ],
        'IsModifiable' => [
          'shape' => 'Boolean',
        ],
        'MinimumEngineVersion' => [
          'shape' => 'String',
        ],
        'CacheNodeTypeSpecificValues' => [
          'shape' => 'CacheNodeTypeSpecificValueList',
        ],
      ],
    ],
    'CacheNodeTypeSpecificParametersList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheNodeTypeSpecificParameter',
        'locationName' => 'CacheNodeTypeSpecificParameter',
      ],
    ],
    'CacheNodeTypeSpecificValue' => [
      'type' => 'structure',
      'members' => [
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Value' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CacheNodeTypeSpecificValueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheNodeTypeSpecificValue',
        'locationName' => 'CacheNodeTypeSpecificValue',
      ],
    ],
    'CacheParameterGroup' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
      ],
      'wrapper' => true,
    ],
    'CacheParameterGroupAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheParameterGroupAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheParameterGroupDetails' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'Parameters' => [
          'shape' => 'ParametersList',
        ],
        'CacheNodeTypeSpecificParameters' => [
          'shape' => 'CacheNodeTypeSpecificParametersList',
        ],
      ],
    ],
    'CacheParameterGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheParameterGroup',
        'locationName' => 'CacheParameterGroup',
      ],
    ],
    'CacheParameterGroupNameMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CacheParameterGroupNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheParameterGroupNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheParameterGroupQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheParameterGroupQuotaExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheParameterGroupStatus' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'ParameterApplyStatus' => [
          'shape' => 'String',
        ],
        'CacheNodeIdsToReboot' => [
          'shape' => 'CacheNodeIdsList',
        ],
      ],
    ],
    'CacheParameterGroupsMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'CacheParameterGroups' => [
          'shape' => 'CacheParameterGroupList',
        ],
      ],
    ],
    'CacheSecurityGroup' => [
      'type' => 'structure',
      'members' => [
        'OwnerId' => [
          'shape' => 'String',
        ],
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroups' => [
          'shape' => 'EC2SecurityGroupList',
        ],
      ],
      'wrapper' => true,
    ],
    'CacheSecurityGroupAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSecurityGroupAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSecurityGroupMembership' => [
      'type' => 'structure',
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CacheSecurityGroupMembershipList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheSecurityGroupMembership',
        'locationName' => 'CacheSecurityGroup',
      ],
    ],
    'CacheSecurityGroupMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'CacheSecurityGroups' => [
          'shape' => 'CacheSecurityGroups',
        ],
      ],
    ],
    'CacheSecurityGroupNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'CacheSecurityGroupName',
      ],
    ],
    'CacheSecurityGroupNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSecurityGroupNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSecurityGroupQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'QuotaExceeded.CacheSecurityGroup',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSecurityGroups' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheSecurityGroup',
        'locationName' => 'CacheSecurityGroup',
      ],
    ],
    'CacheSubnetGroup' => [
      'type' => 'structure',
      'members' => [
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupDescription' => [
          'shape' => 'String',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
        'Subnets' => [
          'shape' => 'SubnetList',
        ],
      ],
      'wrapper' => true,
    ],
    'CacheSubnetGroupAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSubnetGroupAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSubnetGroupInUse' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSubnetGroupInUse',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSubnetGroupMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroups' => [
          'shape' => 'CacheSubnetGroups',
        ],
      ],
    ],
    'CacheSubnetGroupNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSubnetGroupNotFoundFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSubnetGroupQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSubnetGroupQuotaExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CacheSubnetGroups' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheSubnetGroup',
        'locationName' => 'CacheSubnetGroup',
      ],
    ],
    'CacheSubnetQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'CacheSubnetQuotaExceededFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ClusterIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'ClusterId',
      ],
    ],
    'ClusterQuotaForCustomerExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ClusterQuotaForCustomerExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'CopySnapshotMessage' => [
      'type' => 'structure',
      'required' => [
        'SourceSnapshotName',
        'TargetSnapshotName',
      ],
      'members' => [
        'SourceSnapshotName' => [
          'shape' => 'String',
        ],
        'TargetSnapshotName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateCacheClusterMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheClusterId',
      ],
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'AZMode' => [
          'shape' => 'AZMode',
        ],
        'PreferredAvailabilityZone' => [
          'shape' => 'String',
        ],
        'PreferredAvailabilityZones' => [
          'shape' => 'PreferredAvailabilityZoneList',
        ],
        'NumCacheNodes' => [
          'shape' => 'IntegerOptional',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheSecurityGroupNames' => [
          'shape' => 'CacheSecurityGroupNameList',
        ],
        'SecurityGroupIds' => [
          'shape' => 'SecurityGroupIdsList',
        ],
        'SnapshotArns' => [
          'shape' => 'SnapshotArnsList',
        ],
        'SnapshotName' => [
          'shape' => 'String',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'Port' => [
          'shape' => 'IntegerOptional',
        ],
        'NotificationTopicArn' => [
          'shape' => 'String',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'BooleanOptional',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateCacheParameterGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupName',
        'CacheParameterGroupFamily',
        'Description',
      ],
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateCacheSecurityGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSecurityGroupName',
        'Description',
      ],
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateCacheSubnetGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSubnetGroupName',
        'CacheSubnetGroupDescription',
        'SubnetIds',
      ],
      'members' => [
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupDescription' => [
          'shape' => 'String',
        ],
        'SubnetIds' => [
          'shape' => 'SubnetIdentifierList',
        ],
      ],
    ],
    'CreateReplicationGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'ReplicationGroupId',
        'ReplicationGroupDescription',
      ],
      'members' => [
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'ReplicationGroupDescription' => [
          'shape' => 'String',
        ],
        'PrimaryClusterId' => [
          'shape' => 'String',
        ],
        'AutomaticFailoverEnabled' => [
          'shape' => 'BooleanOptional',
        ],
        'NumCacheClusters' => [
          'shape' => 'IntegerOptional',
        ],
        'PreferredCacheClusterAZs' => [
          'shape' => 'AvailabilityZonesList',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheSecurityGroupNames' => [
          'shape' => 'CacheSecurityGroupNameList',
        ],
        'SecurityGroupIds' => [
          'shape' => 'SecurityGroupIdsList',
        ],
        'SnapshotArns' => [
          'shape' => 'SnapshotArnsList',
        ],
        'SnapshotName' => [
          'shape' => 'String',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'Port' => [
          'shape' => 'IntegerOptional',
        ],
        'NotificationTopicArn' => [
          'shape' => 'String',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'BooleanOptional',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
      ],
    ],
    'CreateSnapshotMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheClusterId',
        'SnapshotName',
      ],
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'SnapshotName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteCacheClusterMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheClusterId',
      ],
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'FinalSnapshotIdentifier' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteCacheParameterGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupName',
      ],
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteCacheSecurityGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSecurityGroupName',
      ],
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteCacheSubnetGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSubnetGroupName',
      ],
      'members' => [
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteReplicationGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'ReplicationGroupId',
      ],
      'members' => [
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'RetainPrimaryCluster' => [
          'shape' => 'BooleanOptional',
        ],
        'FinalSnapshotIdentifier' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DeleteSnapshotMessage' => [
      'type' => 'structure',
      'required' => [
        'SnapshotName',
      ],
      'members' => [
        'SnapshotName' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeCacheClustersMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
        'ShowCacheNodeInfo' => [
          'shape' => 'BooleanOptional',
        ],
      ],
    ],
    'DescribeCacheEngineVersionsMessage' => [
      'type' => 'structure',
      'members' => [
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
        'DefaultOnly' => [
          'shape' => 'Boolean',
        ],
      ],
    ],
    'DescribeCacheParameterGroupsMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeCacheParametersMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupName',
      ],
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'Source' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeCacheSecurityGroupsMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeCacheSubnetGroupsMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeEngineDefaultParametersMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupFamily',
      ],
      'members' => [
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeEventsMessage' => [
      'type' => 'structure',
      'members' => [
        'SourceIdentifier' => [
          'shape' => 'String',
        ],
        'SourceType' => [
          'shape' => 'SourceType',
        ],
        'StartTime' => [
          'shape' => 'TStamp',
        ],
        'EndTime' => [
          'shape' => 'TStamp',
        ],
        'Duration' => [
          'shape' => 'IntegerOptional',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeReplicationGroupsMessage' => [
      'type' => 'structure',
      'members' => [
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeReservedCacheNodesMessage' => [
      'type' => 'structure',
      'members' => [
        'ReservedCacheNodeId' => [
          'shape' => 'String',
        ],
        'ReservedCacheNodesOfferingId' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Duration' => [
          'shape' => 'String',
        ],
        'ProductDescription' => [
          'shape' => 'String',
        ],
        'OfferingType' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeReservedCacheNodesOfferingsMessage' => [
      'type' => 'structure',
      'members' => [
        'ReservedCacheNodesOfferingId' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Duration' => [
          'shape' => 'String',
        ],
        'ProductDescription' => [
          'shape' => 'String',
        ],
        'OfferingType' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeSnapshotsListMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'Snapshots' => [
          'shape' => 'SnapshotList',
        ],
      ],
    ],
    'DescribeSnapshotsMessage' => [
      'type' => 'structure',
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'SnapshotName' => [
          'shape' => 'String',
        ],
        'SnapshotSource' => [
          'shape' => 'String',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
        'MaxRecords' => [
          'shape' => 'IntegerOptional',
        ],
      ],
    ],
    'Double' => [
      'type' => 'double',
    ],
    'EC2SecurityGroup' => [
      'type' => 'structure',
      'members' => [
        'Status' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupName' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupOwnerId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'EC2SecurityGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EC2SecurityGroup',
        'locationName' => 'EC2SecurityGroup',
      ],
    ],
    'Endpoint' => [
      'type' => 'structure',
      'members' => [
        'Address' => [
          'shape' => 'String',
        ],
        'Port' => [
          'shape' => 'Integer',
        ],
      ],
    ],
    'EngineDefaults' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroupFamily' => [
          'shape' => 'String',
        ],
        'Marker' => [
          'shape' => 'String',
        ],
        'Parameters' => [
          'shape' => 'ParametersList',
        ],
        'CacheNodeTypeSpecificParameters' => [
          'shape' => 'CacheNodeTypeSpecificParametersList',
        ],
      ],
      'wrapper' => true,
    ],
    'Event' => [
      'type' => 'structure',
      'members' => [
        'SourceIdentifier' => [
          'shape' => 'String',
        ],
        'SourceType' => [
          'shape' => 'SourceType',
        ],
        'Message' => [
          'shape' => 'String',
        ],
        'Date' => [
          'shape' => 'TStamp',
        ],
      ],
    ],
    'EventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Event',
        'locationName' => 'Event',
      ],
    ],
    'EventsMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'Events' => [
          'shape' => 'EventList',
        ],
      ],
    ],
    'InsufficientCacheClusterCapacityFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InsufficientCacheClusterCapacity',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'IntegerOptional' => [
      'type' => 'integer',
    ],
    'InvalidCacheClusterStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidCacheClusterState',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidCacheParameterGroupStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidCacheParameterGroupState',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidCacheSecurityGroupStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidCacheSecurityGroupState',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidParameterCombinationException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'AwsQueryErrorMessage',
        ],
      ],
      'error' => [
        'code' => 'InvalidParameterCombination',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidParameterValueException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'AwsQueryErrorMessage',
        ],
      ],
      'error' => [
        'code' => 'InvalidParameterValue',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidReplicationGroupStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidReplicationGroupState',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidSnapshotStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidSnapshotState',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidSubnet' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidSubnet',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'InvalidVPCNetworkStateFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'InvalidVPCNetworkStateFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ModifyCacheClusterMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheClusterId',
      ],
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'NumCacheNodes' => [
          'shape' => 'IntegerOptional',
        ],
        'CacheNodeIdsToRemove' => [
          'shape' => 'CacheNodeIdsList',
        ],
        'AZMode' => [
          'shape' => 'AZMode',
        ],
        'NewAvailabilityZones' => [
          'shape' => 'PreferredAvailabilityZoneList',
        ],
        'CacheSecurityGroupNames' => [
          'shape' => 'CacheSecurityGroupNameList',
        ],
        'SecurityGroupIds' => [
          'shape' => 'SecurityGroupIdsList',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'NotificationTopicArn' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'NotificationTopicStatus' => [
          'shape' => 'String',
        ],
        'ApplyImmediately' => [
          'shape' => 'Boolean',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'BooleanOptional',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ModifyCacheParameterGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupName',
        'ParameterNameValues',
      ],
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'ParameterNameValues' => [
          'shape' => 'ParameterNameValueList',
        ],
      ],
    ],
    'ModifyCacheSubnetGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSubnetGroupName',
      ],
      'members' => [
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupDescription' => [
          'shape' => 'String',
        ],
        'SubnetIds' => [
          'shape' => 'SubnetIdentifierList',
        ],
      ],
    ],
    'ModifyReplicationGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'ReplicationGroupId',
      ],
      'members' => [
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'ReplicationGroupDescription' => [
          'shape' => 'String',
        ],
        'PrimaryClusterId' => [
          'shape' => 'String',
        ],
        'SnapshottingClusterId' => [
          'shape' => 'String',
        ],
        'AutomaticFailoverEnabled' => [
          'shape' => 'BooleanOptional',
        ],
        'CacheSecurityGroupNames' => [
          'shape' => 'CacheSecurityGroupNameList',
        ],
        'SecurityGroupIds' => [
          'shape' => 'SecurityGroupIdsList',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'NotificationTopicArn' => [
          'shape' => 'String',
        ],
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'NotificationTopicStatus' => [
          'shape' => 'String',
        ],
        'ApplyImmediately' => [
          'shape' => 'Boolean',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'BooleanOptional',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
      ],
    ],
    'NodeGroup' => [
      'type' => 'structure',
      'members' => [
        'NodeGroupId' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'String',
        ],
        'PrimaryEndpoint' => [
          'shape' => 'Endpoint',
        ],
        'NodeGroupMembers' => [
          'shape' => 'NodeGroupMemberList',
        ],
      ],
    ],
    'NodeGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NodeGroup',
        'locationName' => 'NodeGroup',
      ],
    ],
    'NodeGroupMember' => [
      'type' => 'structure',
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'CacheNodeId' => [
          'shape' => 'String',
        ],
        'ReadEndpoint' => [
          'shape' => 'Endpoint',
        ],
        'PreferredAvailabilityZone' => [
          'shape' => 'String',
        ],
        'CurrentRole' => [
          'shape' => 'String',
        ],
      ],
    ],
    'NodeGroupMemberList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NodeGroupMember',
        'locationName' => 'NodeGroupMember',
      ],
    ],
    'NodeQuotaForClusterExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'NodeQuotaForClusterExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'NodeQuotaForCustomerExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'NodeQuotaForCustomerExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'NodeSnapshot' => [
      'type' => 'structure',
      'members' => [
        'CacheNodeId' => [
          'shape' => 'String',
        ],
        'CacheSize' => [
          'shape' => 'String',
        ],
        'CacheNodeCreateTime' => [
          'shape' => 'TStamp',
        ],
        'SnapshotCreateTime' => [
          'shape' => 'TStamp',
        ],
      ],
      'wrapper' => true,
    ],
    'NodeSnapshotList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NodeSnapshot',
        'locationName' => 'NodeSnapshot',
      ],
    ],
    'NotificationConfiguration' => [
      'type' => 'structure',
      'members' => [
        'TopicArn' => [
          'shape' => 'String',
        ],
        'TopicStatus' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Parameter' => [
      'type' => 'structure',
      'members' => [
        'ParameterName' => [
          'shape' => 'String',
        ],
        'ParameterValue' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'Source' => [
          'shape' => 'String',
        ],
        'DataType' => [
          'shape' => 'String',
        ],
        'AllowedValues' => [
          'shape' => 'String',
        ],
        'IsModifiable' => [
          'shape' => 'Boolean',
        ],
        'MinimumEngineVersion' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ParameterNameValue' => [
      'type' => 'structure',
      'members' => [
        'ParameterName' => [
          'shape' => 'String',
        ],
        'ParameterValue' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ParameterNameValueList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ParameterNameValue',
        'locationName' => 'ParameterNameValue',
      ],
    ],
    'ParametersList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Parameter',
        'locationName' => 'Parameter',
      ],
    ],
    'PendingAutomaticFailoverStatus' => [
      'type' => 'string',
      'enum' => [
        'enabled',
        'disabled',
      ],
    ],
    'PendingModifiedValues' => [
      'type' => 'structure',
      'members' => [
        'NumCacheNodes' => [
          'shape' => 'IntegerOptional',
        ],
        'CacheNodeIdsToRemove' => [
          'shape' => 'CacheNodeIdsList',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
      ],
    ],
    'PreferredAvailabilityZoneList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'PreferredAvailabilityZone',
      ],
    ],
    'PurchaseReservedCacheNodesOfferingMessage' => [
      'type' => 'structure',
      'required' => [
        'ReservedCacheNodesOfferingId',
      ],
      'members' => [
        'ReservedCacheNodesOfferingId' => [
          'shape' => 'String',
        ],
        'ReservedCacheNodeId' => [
          'shape' => 'String',
        ],
        'CacheNodeCount' => [
          'shape' => 'IntegerOptional',
        ],
      ],
    ],
    'RebootCacheClusterMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheClusterId',
        'CacheNodeIdsToReboot',
      ],
      'members' => [
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'CacheNodeIdsToReboot' => [
          'shape' => 'CacheNodeIdsList',
        ],
      ],
    ],
    'RecurringCharge' => [
      'type' => 'structure',
      'members' => [
        'RecurringChargeAmount' => [
          'shape' => 'Double',
        ],
        'RecurringChargeFrequency' => [
          'shape' => 'String',
        ],
      ],
      'wrapper' => true,
    ],
    'RecurringChargeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RecurringCharge',
        'locationName' => 'RecurringCharge',
      ],
    ],
    'ReplicationGroup' => [
      'type' => 'structure',
      'members' => [
        'ReplicationGroupId' => [
          'shape' => 'String',
        ],
        'Description' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'String',
        ],
        'PendingModifiedValues' => [
          'shape' => 'ReplicationGroupPendingModifiedValues',
        ],
        'MemberClusters' => [
          'shape' => 'ClusterIdList',
        ],
        'NodeGroups' => [
          'shape' => 'NodeGroupList',
        ],
        'SnapshottingClusterId' => [
          'shape' => 'String',
        ],
        'AutomaticFailover' => [
          'shape' => 'AutomaticFailoverStatus',
        ],
      ],
      'wrapper' => true,
    ],
    'ReplicationGroupAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReplicationGroupAlreadyExists',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ReplicationGroupList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReplicationGroup',
        'locationName' => 'ReplicationGroup',
      ],
    ],
    'ReplicationGroupMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'ReplicationGroups' => [
          'shape' => 'ReplicationGroupList',
        ],
      ],
    ],
    'ReplicationGroupNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReplicationGroupNotFoundFault',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ReplicationGroupPendingModifiedValues' => [
      'type' => 'structure',
      'members' => [
        'PrimaryClusterId' => [
          'shape' => 'String',
        ],
        'AutomaticFailoverStatus' => [
          'shape' => 'PendingAutomaticFailoverStatus',
        ],
      ],
    ],
    'ReservedCacheNode' => [
      'type' => 'structure',
      'members' => [
        'ReservedCacheNodeId' => [
          'shape' => 'String',
        ],
        'ReservedCacheNodesOfferingId' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'StartTime' => [
          'shape' => 'TStamp',
        ],
        'Duration' => [
          'shape' => 'Integer',
        ],
        'FixedPrice' => [
          'shape' => 'Double',
        ],
        'UsagePrice' => [
          'shape' => 'Double',
        ],
        'CacheNodeCount' => [
          'shape' => 'Integer',
        ],
        'ProductDescription' => [
          'shape' => 'String',
        ],
        'OfferingType' => [
          'shape' => 'String',
        ],
        'State' => [
          'shape' => 'String',
        ],
        'RecurringCharges' => [
          'shape' => 'RecurringChargeList',
        ],
      ],
      'wrapper' => true,
    ],
    'ReservedCacheNodeAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReservedCacheNodeAlreadyExists',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ReservedCacheNodeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedCacheNode',
        'locationName' => 'ReservedCacheNode',
      ],
    ],
    'ReservedCacheNodeMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'ReservedCacheNodes' => [
          'shape' => 'ReservedCacheNodeList',
        ],
      ],
    ],
    'ReservedCacheNodeNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReservedCacheNodeNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ReservedCacheNodeQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReservedCacheNodeQuotaExceeded',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ReservedCacheNodesOffering' => [
      'type' => 'structure',
      'members' => [
        'ReservedCacheNodesOfferingId' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Duration' => [
          'shape' => 'Integer',
        ],
        'FixedPrice' => [
          'shape' => 'Double',
        ],
        'UsagePrice' => [
          'shape' => 'Double',
        ],
        'ProductDescription' => [
          'shape' => 'String',
        ],
        'OfferingType' => [
          'shape' => 'String',
        ],
        'RecurringCharges' => [
          'shape' => 'RecurringChargeList',
        ],
      ],
      'wrapper' => true,
    ],
    'ReservedCacheNodesOfferingList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ReservedCacheNodesOffering',
        'locationName' => 'ReservedCacheNodesOffering',
      ],
    ],
    'ReservedCacheNodesOfferingMessage' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
        ],
        'ReservedCacheNodesOfferings' => [
          'shape' => 'ReservedCacheNodesOfferingList',
        ],
      ],
    ],
    'ReservedCacheNodesOfferingNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'ReservedCacheNodesOfferingNotFound',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'ResetCacheParameterGroupMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheParameterGroupName',
        'ParameterNameValues',
      ],
      'members' => [
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'ResetAllParameters' => [
          'shape' => 'Boolean',
        ],
        'ParameterNameValues' => [
          'shape' => 'ParameterNameValueList',
        ],
      ],
    ],
    'RevokeCacheSecurityGroupIngressMessage' => [
      'type' => 'structure',
      'required' => [
        'CacheSecurityGroupName',
        'EC2SecurityGroupName',
        'EC2SecurityGroupOwnerId',
      ],
      'members' => [
        'CacheSecurityGroupName' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupName' => [
          'shape' => 'String',
        ],
        'EC2SecurityGroupOwnerId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'SecurityGroupIdsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SecurityGroupId',
      ],
    ],
    'SecurityGroupMembership' => [
      'type' => 'structure',
      'members' => [
        'SecurityGroupId' => [
          'shape' => 'String',
        ],
        'Status' => [
          'shape' => 'String',
        ],
      ],
    ],
    'SecurityGroupMembershipList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SecurityGroupMembership',
      ],
    ],
    'Snapshot' => [
      'type' => 'structure',
      'members' => [
        'SnapshotName' => [
          'shape' => 'String',
        ],
        'CacheClusterId' => [
          'shape' => 'String',
        ],
        'SnapshotStatus' => [
          'shape' => 'String',
        ],
        'SnapshotSource' => [
          'shape' => 'String',
        ],
        'CacheNodeType' => [
          'shape' => 'String',
        ],
        'Engine' => [
          'shape' => 'String',
        ],
        'EngineVersion' => [
          'shape' => 'String',
        ],
        'NumCacheNodes' => [
          'shape' => 'IntegerOptional',
        ],
        'PreferredAvailabilityZone' => [
          'shape' => 'String',
        ],
        'CacheClusterCreateTime' => [
          'shape' => 'TStamp',
        ],
        'PreferredMaintenanceWindow' => [
          'shape' => 'String',
        ],
        'TopicArn' => [
          'shape' => 'String',
        ],
        'Port' => [
          'shape' => 'IntegerOptional',
        ],
        'CacheParameterGroupName' => [
          'shape' => 'String',
        ],
        'CacheSubnetGroupName' => [
          'shape' => 'String',
        ],
        'VpcId' => [
          'shape' => 'String',
        ],
        'AutoMinorVersionUpgrade' => [
          'shape' => 'Boolean',
        ],
        'SnapshotRetentionLimit' => [
          'shape' => 'IntegerOptional',
        ],
        'SnapshotWindow' => [
          'shape' => 'String',
        ],
        'NodeSnapshots' => [
          'shape' => 'NodeSnapshotList',
        ],
      ],
      'wrapper' => true,
    ],
    'SnapshotAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'SnapshotAlreadyExistsFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SnapshotArnsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SnapshotArn',
      ],
    ],
    'SnapshotFeatureNotSupportedFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'SnapshotFeatureNotSupportedFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SnapshotList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Snapshot',
        'locationName' => 'Snapshot',
      ],
    ],
    'SnapshotNotFoundFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'SnapshotNotFoundFault',
        'httpStatusCode' => 404,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SnapshotQuotaExceededFault' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'SnapshotQuotaExceededFault',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SourceType' => [
      'type' => 'string',
      'enum' => [
        'cache-cluster',
        'cache-parameter-group',
        'cache-security-group',
        'cache-subnet-group',
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'Subnet' => [
      'type' => 'structure',
      'members' => [
        'SubnetIdentifier' => [
          'shape' => 'String',
        ],
        'SubnetAvailabilityZone' => [
          'shape' => 'AvailabilityZone',
        ],
      ],
    ],
    'SubnetIdentifierList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
        'locationName' => 'SubnetIdentifier',
      ],
    ],
    'SubnetInUse' => [
      'type' => 'structure',
      'members' => [],
      'error' => [
        'code' => 'SubnetInUse',
        'httpStatusCode' => 400,
        'senderFault' => true,
      ],
      'exception' => true,
    ],
    'SubnetList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Subnet',
        'locationName' => 'Subnet',
      ],
    ],
    'TStamp' => [
      'type' => 'timestamp',
    ],
    'AuthorizeCacheSecurityGroupIngressResult' => [
      'type' => 'structure',
      'members' => [
        'CacheSecurityGroup' => [
          'shape' => 'CacheSecurityGroup',
        ],
      ],
    ],
    'CopySnapshotResult' => [
      'type' => 'structure',
      'members' => [
        'Snapshot' => [
          'shape' => 'Snapshot',
        ],
      ],
    ],
    'CreateCacheClusterResult' => [
      'type' => 'structure',
      'members' => [
        'CacheCluster' => [
          'shape' => 'CacheCluster',
        ],
      ],
    ],
    'CreateCacheParameterGroupResult' => [
      'type' => 'structure',
      'members' => [
        'CacheParameterGroup' => [
          'shape' => 'CacheParameterGroup',
        ],
      ],
    ],
    'CreateCacheSecurityGroupResult' => [
      'type' => 'structure',
      'members' => [
        'CacheSecurityGroup' => [
          'shape' => 'CacheSecurityGroup',
        ],
      ],
    ],
    'CreateCacheSubnetGroupResult' => [
      'type' => 'structure',
      'members' => [
        'CacheSubnetGroup' => [
          'shape' => 'CacheSubnetGroup',
        ],
      ],
    ],
    'CreateReplicationGroupResult' => [
      'type' => 'structure',
      'members' => [
        'ReplicationGroup' => [
          'shape' => 'ReplicationGroup',
        ],
      ],
    ],
    'CreateSnapshotResult' => [
      'type' => 'structure',
      'members' => [
        'Snapshot' => [
          'shape' => 'Snapshot',
        ],
      ],
    ],
    'DeleteCacheClusterResult' => [
      'type' => 'structure',
      'members' => [
        'CacheCluster' => [
          'shape' => 'CacheCluster',
        ],
      ],
    ],
    'DeleteReplicationGroupResult' => [
      'type' => 'structure',
      'members' => [
        'ReplicationGroup' => [
          'shape' => 'ReplicationGroup',
        ],
      ],
    ],
    'DeleteSnapshotResult' => [
      'type' => 'structure',
      'members' => [
        'Snapshot' => [
          'shape' => 'Snapshot',
        ],
      ],
    ],
    'DescribeEngineDefaultParametersResult' => [
      'type' => 'structure',
      'members' => [
        'EngineDefaults' => [
          'shape' => 'EngineDefaults',
        ],
      ],
    ],
    'ModifyCacheClusterResult' => [
      'type' => 'structure',
      'members' => [
        'CacheCluster' => [
          'shape' => 'CacheCluster',
        ],
      ],
    ],
    'ModifyCacheSubnetGroupResult' => [
      'type' => 'structure',
      'members' => [
        'CacheSubnetGroup' => [
          'shape' => 'CacheSubnetGroup',
        ],
      ],
    ],
    'ModifyReplicationGroupResult' => [
      'type' => 'structure',
      'members' => [
        'ReplicationGroup' => [
          'shape' => 'ReplicationGroup',
        ],
      ],
    ],
    'PurchaseReservedCacheNodesOfferingResult' => [
      'type' => 'structure',
      'members' => [
        'ReservedCacheNode' => [
          'shape' => 'ReservedCacheNode',
        ],
      ],
    ],
    'RebootCacheClusterResult' => [
      'type' => 'structure',
      'members' => [
        'CacheCluster' => [
          'shape' => 'CacheCluster',
        ],
      ],
    ],
    'RevokeCacheSecurityGroupIngressResult' => [
      'type' => 'structure',
      'members' => [
        'CacheSecurityGroup' => [
          'shape' => 'CacheSecurityGroup',
        ],
      ],
    ],
  ],
];
