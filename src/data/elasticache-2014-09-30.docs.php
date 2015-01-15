<?php return [
  'operations' => [
    'AuthorizeCacheSecurityGroupIngress' => '<p>The <i>AuthorizeCacheSecurityGroupIngress</i> operation allows network ingress to a cache security group. Applications using ElastiCache must be running on Amazon EC2, and Amazon EC2 security groups are used as the authorization mechanism.</p>',
    'CopySnapshot' => '<p>The <i>CopySnapshot</i> operation makes a copy of an existing snapshot.</p>',
    'CreateCacheCluster' => '<p>The <i>CreateCacheCluster</i> operation creates a cache cluster. All nodes in the cache cluster run the same protocol-compliant cache engine software, either Memcached or Redis.</p>',
    'CreateCacheParameterGroup' => '<p>The <i>CreateCacheParameterGroup</i> operation creates a new cache parameter group. A cache parameter group is a collection of parameters that you apply to all of the nodes in a cache cluster.</p>',
    'CreateCacheSecurityGroup' => '<p>The <i>CreateCacheSecurityGroup</i> operation creates a new cache security group. Use a cache security group to control access to one or more cache clusters.</p> <p>Cache security groups are only used when you are creating a cache cluster outside of an Amazon Virtual Private Cloud (VPC]. If you are creating a cache cluster inside of a VPC, use a cache subnet group instead. For more information, see <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/APIReference/API_CreateCacheSubnetGroup.html">CreateCacheSubnetGroup</a>.</p>',
    'CreateCacheSubnetGroup' => '<p>The <i>CreateCacheSubnetGroup</i> operation creates a new cache subnet group.</p> <p>Use this parameter only when you are creating a cluster in an Amazon Virtual Private Cloud (VPC].</p>',
    'CreateReplicationGroup' => '<p>The <i>CreateReplicationGroup</i> operation creates a replication group. A replication group is a collection of cache clusters, where one of the cache clusters is a read/write primary and the others are read-only replicas. Writes to the primary are automatically propagated to the replicas.</p> <p>When you create a replication group, you must specify an existing cache cluster that is in the primary role. When the replication group has been successfully created, you can add one or more read replica replicas to it, up to a total of five read replicas.</p> <p><b>Note:</b> This action is valid only for Redis.</p>',
    'CreateSnapshot' => '<p>The <i>CreateSnapshot</i> operation creates a copy of an entire cache cluster at a specific moment in time.</p>',
    'DeleteCacheCluster' => '<p>The <i>DeleteCacheCluster</i> operation deletes a previously provisioned cache cluster. <i>DeleteCacheCluster</i> deletes all associated cache nodes, node endpoints and the cache cluster itself. When you receive a successful response from this operation, Amazon ElastiCache immediately begins deleting the cache cluster; you cannot cancel or revert this operation.</p> <p>This API cannot be used to delete a cache cluster that is the last read replica of a replication group that has automatic failover mode enabled.</p>',
    'DeleteCacheParameterGroup' => '<p>The <i>DeleteCacheParameterGroup</i> operation deletes the specified cache parameter group. You cannot delete a cache parameter group if it is associated with any cache clusters.</p>',
    'DeleteCacheSecurityGroup' => '<p>The <i>DeleteCacheSecurityGroup</i> operation deletes a cache security group.</p>',
    'DeleteCacheSubnetGroup' => '<p>The <i>DeleteCacheSubnetGroup</i> operation deletes a cache subnet group.</p>',
    'DeleteReplicationGroup' => '<p>The <i>DeleteReplicationGroup</i> operation deletes an existing cluster. By default, this operation deletes the entire cluster, including the primary node group and all of the read replicas. You can optionally delete only the read replicas, while retaining the primary node group.</p> <p>When you receive a successful response from this operation, Amazon ElastiCache immediately begins deleting the selected resources; you cannot cancel or revert this operation.</p>',
    'DeleteSnapshot' => '<p>The <i>DeleteSnapshot</i> operation deletes an existing snapshot. When you receive a successful response from this operation, ElastiCache immediately begins deleting the snapshot; you cannot cancel or revert this operation.</p>',
    'DescribeCacheClusters' => '<p>The <i>DescribeCacheClusters</i> operation returns information about all provisioned cache clusters if no cache cluster identifier is specified, or about a specific cache cluster if a cache cluster identifier is supplied.</p> <p>By default, abbreviated information about the cache clusters(s] will be returned. You can use the optional <i>ShowDetails</i> flag to retrieve detailed information about the cache nodes associated with the cache clusters. These details include the DNS address and port for the cache node endpoint.</p> <p>If the cluster is in the CREATING state, only cluster level information will be displayed until all of the nodes are successfully provisioned.</p> <p>If the cluster is in the DELETING state, only cluster level information will be displayed.</p> <p>If cache nodes are currently being added to the cache cluster, node endpoint information and creation time for the additional nodes will not be displayed until they are completely provisioned. When the cache cluster state is <i>available</i>, the cluster is ready for use.</p> <p>If cache nodes are currently being removed from the cache cluster, no endpoint information for the removed nodes is displayed.</p>',
    'DescribeCacheEngineVersions' => '<p>The <i>DescribeCacheEngineVersions</i> operation returns a list of the available cache engines and their versions.</p>',
    'DescribeCacheParameterGroups' => '<p>The <i>DescribeCacheParameterGroups</i> operation returns a list of cache parameter group descriptions. If a cache parameter group name is specified, the list will contain only the descriptions for that group.</p>',
    'DescribeCacheParameters' => '<p>The <i>DescribeCacheParameters</i> operation returns the detailed parameter list for a particular cache parameter group.</p>',
    'DescribeCacheSecurityGroups' => '<p>The <i>DescribeCacheSecurityGroups</i> operation returns a list of cache security group descriptions. If a cache security group name is specified, the list will contain only the description of that group.</p>',
    'DescribeCacheSubnetGroups' => '<p>The <i>DescribeCacheSubnetGroups</i> operation returns a list of cache subnet group descriptions. If a subnet group name is specified, the list will contain only the description of that group.</p>',
    'DescribeEngineDefaultParameters' => '<p>The <i>DescribeEngineDefaultParameters</i> operation returns the default engine and system parameter information for the specified cache engine.</p>',
    'DescribeEvents' => '<p>The <i>DescribeEvents</i> operation returns events related to cache clusters, cache security groups, and cache parameter groups. You can obtain events specific to a particular cache cluster, cache security group, or cache parameter group by providing the name as a parameter.</p> <p>By default, only the events occurring within the last hour are returned; however, you can retrieve up to 14 days\' worth of events if necessary.</p>',
    'DescribeReplicationGroups' => '<p>The <i>DescribeReplicationGroups</i> operation returns information about a particular replication group. If no identifier is specified, <i>DescribeReplicationGroups</i> returns information about all replication groups.</p>',
    'DescribeReservedCacheNodes' => '<p>The <i>DescribeReservedCacheNodes</i> operation returns information about reserved cache nodes for this account, or about a specified reserved cache node.</p>',
    'DescribeReservedCacheNodesOfferings' => '<p>The <i>DescribeReservedCacheNodesOfferings</i> operation lists available reserved cache node offerings.</p>',
    'DescribeSnapshots' => '<p>The <i>DescribeSnapshots</i> operation returns information about cache cluster snapshots. By default, <i>DescribeSnapshots</i> lists all of your snapshots; it can optionally describe a single snapshot, or just the snapshots associated with a particular cache cluster.</p>',
    'ModifyCacheCluster' => '<p>The <i>ModifyCacheCluster</i> operation modifies the settings for a cache cluster. You can use this operation to change one or more cluster configuration parameters by specifying the parameters and the new values.</p>',
    'ModifyCacheParameterGroup' => '<p>The <i>ModifyCacheParameterGroup</i> operation modifies the parameters of a cache parameter group. You can modify up to 20 parameters in a single request by submitting a list parameter name and value pairs.</p>',
    'ModifyCacheSubnetGroup' => '<p>The <i>ModifyCacheSubnetGroup</i> operation modifies an existing cache subnet group.</p>',
    'ModifyReplicationGroup' => '<p>The <i>ModifyReplicationGroup</i> operation modifies the settings for a replication group.</p>',
    'PurchaseReservedCacheNodesOffering' => '<p>The <i>PurchaseReservedCacheNodesOffering</i> operation allows you to purchase a reserved cache node offering.</p>',
    'RebootCacheCluster' => '<p>The <i>RebootCacheCluster</i> operation reboots some, or all, of the cache nodes within a provisioned cache cluster. This API will apply any modified cache parameter groups to the cache cluster. The reboot action takes place as soon as possible, and results in a momentary outage to the cache cluster. During the reboot, the cache cluster status is set to REBOOTING.</p> <p>The reboot causes the contents of the cache (for each cache node being rebooted] to be lost.</p> <p>When the reboot is complete, a cache cluster event is created.</p>',
    'ResetCacheParameterGroup' => '<p>The <i>ResetCacheParameterGroup</i> operation modifies the parameters of a cache parameter group to the engine or system default value. You can reset specific parameters by submitting a list of parameter names. To reset the entire cache parameter group, specify the <i>ResetAllParameters</i> and <i>CacheParameterGroupName</i> parameters.</p>',
    'RevokeCacheSecurityGroupIngress' => '<p>The <i>RevokeCacheSecurityGroupIngress</i> operation revokes ingress from a cache security group. Use this operation to disallow access from an Amazon EC2 security group that had been previously authorized.</p>',
  ],
  'service' => '<fullname>Amazon ElastiCache</fullname> <p>Amazon ElastiCache is a web service that makes it easier to set up, operate, and scale a distributed cache in the cloud.</p> <p>With ElastiCache, customers gain all of the benefits of a high-performance, in-memory cache with far less of the administrative burden of launching and managing a distributed cache. The service makes setup, scaling, and cluster failure handling much simpler than in a self-managed cache deployment.</p> <p>In addition, through integration with Amazon CloudWatch, customers get enhanced visibility into the key performance statistics associated with their cache and can receive alarms if a part of their cache runs hot.</p>',
  'shapes' => [
    'AZMode' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$AZMode' => '<p>Specifies whether the nodes in this Memcached node group are created in a single Availability Zone or created across multiple Availability Zones in the cluster\'s region.</p> <p>This parameter is only supported for Memcached cache clusters.</p> <p>If the <code>AZMode</code> and <code>PreferredAvailabilityZones</code> are not specified, ElastiCache assumes <code>single-az</code> mode.</p>',
        'ModifyCacheClusterMessage$AZMode' => '<p>Specifies whether the new nodes in this Memcached cache cluster are all created in a single Availability Zone or created across multiple Availability Zones.</p> <p>Valid values: <code>single-az</code> | <code>cross-az</code>.</p> <p>This option is only supported for Memcached cache clusters.</p>',
      ],
    ],
    'AuthorizationAlreadyExistsFault' => [
      'base' => '<p>The specified Amazon EC2 security group is already authorized for the specified cache security group.</p>',
      'refs' => [],
    ],
    'AuthorizationNotFoundFault' => [
      'base' => '<p>The specified Amazon EC2 security group is not authorized for the specified cache security group.</p>',
      'refs' => [],
    ],
    'AuthorizeCacheSecurityGroupIngressMessage' => [
      'base' => '<p>Represents the input of an <i>AuthorizeCacheSecurityGroupIngress</i> operation.</p>',
      'refs' => [],
    ],
    'AutomaticFailoverStatus' => [
      'base' => NULL,
      'refs' => [
        'ReplicationGroup$AutomaticFailover' => '<p>Indicates the status of automatic failover for this replication group.</p>',
      ],
    ],
    'AvailabilityZone' => [
      'base' => '<p>Describes an Availability Zone in which the cache cluster is launched.</p>',
      'refs' => [
        'Subnet$SubnetAvailabilityZone' => '<p>The Availability Zone associated with the subnet</p>',
      ],
    ],
    'AvailabilityZonesList' => [
      'base' => NULL,
      'refs' => [
        'CreateReplicationGroupMessage$PreferredCacheClusterAZs' => '<p>A list of EC2 availability zones in which the replication group\'s cache clusters will be created. The order of the availability zones in the list is not important.</p> <p>Default: system chosen availability zones.</p> <p>Example: One Redis cache cluster in each of three availability zones. PreferredAvailabilityZones.member.1=us-east-1a PreferredAvailabilityZones.member.2=us-east-1c PreferredAvailabilityZones.member.3=us-east-1d</p>',
      ],
    ],
    'AwsQueryErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'InvalidParameterCombinationException$message' => '<p>Two or more parameters that must not be used together were used together.</p>',
        'InvalidParameterValueException$message' => '<p>A parameter value is invalid.</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$AutoMinorVersionUpgrade' => '<p>If <code>true</code>, then minor version patches are applied automatically; if <code>false</code>, then automatic minor version patches are disabled.</p>',
        'CacheNodeTypeSpecificParameter$IsModifiable' => '<p>Indicates whether (<code>true</code>] or not (<code>false</code>] the parameter can be modified. Some parameters have security or operational implications that prevent them from being changed.</p>',
        'DescribeCacheEngineVersionsMessage$DefaultOnly' => '<p>If <i>true</i>, specifies that only the default version of the specified engine or engine and major version combination is to be returned.</p>',
        'ModifyCacheClusterMessage$ApplyImmediately' => '<p>If <code>true</code>, this parameter causes the modifications in this request and any pending modifications to be applied, asynchronously and as soon as possible, regardless of the <i>PreferredMaintenanceWindow</i> setting for the cache cluster.</p> <p>If <code>false</code>, then changes to the cache cluster are applied on the next maintenance reboot, or the next failure reboot, whichever occurs first.</p> <important>If you perform a <code>ModifyCacheCluster</code> before a pending modification is applied, the pending modification is replaced by the newer modification.</important> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Default: <code>false</code></p>',
        'ModifyReplicationGroupMessage$ApplyImmediately' => '<p>If <code>true</code>, this parameter causes the modifications in this request and any pending modifications to be applied, asynchronously and as soon as possible, regardless of the <i>PreferredMaintenanceWindow</i> setting for the replication group.</p> <p>If <code>false</code>, then changes to the nodes in the replication group are applied on the next maintenance reboot, or the next failure reboot, whichever occurs first.</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Default: <code>false</code></p>',
        'Parameter$IsModifiable' => '<p>Indicates whether (<code>true</code>] or not (<code>false</code>] the parameter can be modified. Some parameters have security or operational implications that prevent them from being changed.</p>',
        'ResetCacheParameterGroupMessage$ResetAllParameters' => '<p>If <i>true</i>, all parameters in the cache parameter group will be reset to default values. If <i>false</i>, no such action occurs.</p> <p>Valid values: <code>true</code> | <code>false</code></p>',
        'Snapshot$AutoMinorVersionUpgrade' => '<p>For the source cache cluster, indicates whether minor version patches are applied automatically (<code>true</code>] or not (<code>false</code>].</p>',
      ],
    ],
    'BooleanOptional' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$AutoMinorVersionUpgrade' => '<p>Determines whether minor engine upgrades will be applied automatically to the node group during the maintenance window. A value of <code>true</code> allows these upgrades to occur; <code>false</code> disables automatic upgrades.</p> <p>Default: <code>true</code></p>',
        'CreateReplicationGroupMessage$AutomaticFailoverEnabled' => '<p>Specifies whether a read-only replica will be automatically promoted to read/write primary if the existing primary fails.</p> <p>If <code>true</code>, automatic failover is enabled for this replication group. If <code>false</code>, automatic failover is disabled for this replication group.</p> <p>Default: false</p>',
        'CreateReplicationGroupMessage$AutoMinorVersionUpgrade' => '<p>Determines whether minor engine upgrades will be applied automatically to the node group during the maintenance window. A value of <code>true</code> allows these upgrades to occur; <code>false</code> disables automatic upgrades.</p> <p>Default: <code>true</code></p>',
        'DeleteReplicationGroupMessage$RetainPrimaryCluster' => '<p>If set to <i>true</i>, all of the read replicas will be deleted, but the primary node will be retained.</p>',
        'DescribeCacheClustersMessage$ShowCacheNodeInfo' => '<p>An optional flag that can be included in the DescribeCacheCluster request to retrieve information about the individual cache nodes.</p>',
        'ModifyCacheClusterMessage$AutoMinorVersionUpgrade' => '<p>If <code>true</code>, then minor engine upgrades will be applied automatically to the cache cluster during the maintenance window.</p> <p>Valid values: <code>true</code> | <code>false</code></p> <p>Default: <code>true</code></p>',
        'ModifyReplicationGroupMessage$AutomaticFailoverEnabled' => '<p>Whether a read replica will be automatically promoted to read/write primary if the existing primary encounters a failure.</p> <p>Valid values: <code>true</code> | <code>false</code></p>',
        'ModifyReplicationGroupMessage$AutoMinorVersionUpgrade' => '<p>Determines whether minor engine upgrades will be applied automatically to all of the clusters in the replication group during the maintenance window. A value of <code>true</code> allows these upgrades to occur; <code>false</code> disables automatic upgrades.</p>',
      ],
    ],
    'CacheCluster' => [
      'base' => '<p>Contains all of the attributes of a specific cache cluster.</p>',
      'refs' => [
        'CacheClusterList$member' => NULL,
        'CreateCacheClusterResult$CacheCluster' => NULL,
        'DeleteCacheClusterResult$CacheCluster' => NULL,
        'ModifyCacheClusterResult$CacheCluster' => NULL,
        'RebootCacheClusterResult$CacheCluster' => NULL,
      ],
    ],
    'CacheClusterAlreadyExistsFault' => [
      'base' => '<p>You already have a cache cluster with the given identifier.</p>',
      'refs' => [],
    ],
    'CacheClusterList' => [
      'base' => NULL,
      'refs' => [
        'CacheClusterMessage$CacheClusters' => '<p>A list of cache clusters. Each item in the list contains detailed information about one cache cluster.</p>',
      ],
    ],
    'CacheClusterMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeCacheClusters</i> operation.</p>',
      'refs' => [],
    ],
    'CacheClusterNotFoundFault' => [
      'base' => '<p>The requested cache cluster ID does not refer to an existing cache cluster.</p>',
      'refs' => [],
    ],
    'CacheEngineVersion' => [
      'base' => '<p>Provides all of the details about a particular cache engine version.</p>',
      'refs' => [
        'CacheEngineVersionList$member' => NULL,
      ],
    ],
    'CacheEngineVersionList' => [
      'base' => NULL,
      'refs' => [
        'CacheEngineVersionMessage$CacheEngineVersions' => '<p>A list of cache engine version details. Each element in the list contains detailed information about one cache engine version.</p>',
      ],
    ],
    'CacheEngineVersionMessage' => [
      'base' => '<p>Represents the output of a <a>DescribeCacheEngineVersions</a> operation.</p>',
      'refs' => [],
    ],
    'CacheNode' => [
      'base' => '<p>Represents an individual cache node within a cache cluster. Each cache node runs its own instance of the cluster\'s protocol-compliant caching software - either Memcached or Redis.</p>',
      'refs' => [
        'CacheNodeList$member' => NULL,
      ],
    ],
    'CacheNodeIdsList' => [
      'base' => NULL,
      'refs' => [
        'CacheParameterGroupStatus$CacheNodeIdsToReboot' => '<p>A list of the cache node IDs which need to be rebooted for parameter changes to be applied. A node ID is a numeric identifier (0001, 0002, etc.].</p>',
        'ModifyCacheClusterMessage$CacheNodeIdsToRemove' => '<p>A list of cache node IDs to be removed. A node ID is a numeric identifier (0001, 0002, etc.]. This parameter is only valid when NumCacheNodes is less than the existing number of cache nodes. The number of cache node IDs supplied in this parameter must match the difference between the existing number of cache nodes in the cluster or pending cache nodes, whichever is greater, and the value of <i>NumCacheNodes</i> in the request.</p> <p>For example: If you have 3 active cache nodes, 7 pending cache nodes, and the number of cache nodes in this <code>ModifyCacheCluser</code> call is 5, you must list 2 (7 - 5] cache node IDs to remove.</p>',
        'PendingModifiedValues$CacheNodeIdsToRemove' => '<p>A list of cache node IDs that are being removed (or will be removed] from the cache cluster. A node ID is a numeric identifier (0001, 0002, etc.].</p>',
        'RebootCacheClusterMessage$CacheNodeIdsToReboot' => '<p>A list of cache node IDs to reboot. A node ID is a numeric identifier (0001, 0002, etc.]. To reboot an entire cache cluster, specify all of the cache node IDs.</p>',
      ],
    ],
    'CacheNodeList' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$CacheNodes' => '<p>A list of cache nodes that are members of the cache cluster.</p>',
      ],
    ],
    'CacheNodeTypeSpecificParameter' => [
      'base' => '<p>A parameter that has a different value for each cache node type it is applied to. For example, in a Redis cache cluster, a <i>cache.m1.large</i> cache node type would have a larger <i>maxmemory</i> value than a <i>cache.m1.small</i> type.</p>',
      'refs' => [
        'CacheNodeTypeSpecificParametersList$member' => NULL,
      ],
    ],
    'CacheNodeTypeSpecificParametersList' => [
      'base' => NULL,
      'refs' => [
        'CacheParameterGroupDetails$CacheNodeTypeSpecificParameters' => '<p>A list of parameters specific to a particular cache node type. Each element in the list contains detailed information about one parameter.</p>',
        'EngineDefaults$CacheNodeTypeSpecificParameters' => '<p>A list of parameters specific to a particular cache node type. Each element in the list contains detailed information about one parameter.</p>',
      ],
    ],
    'CacheNodeTypeSpecificValue' => [
      'base' => '<p>A value that applies only to a certain cache node type.</p>',
      'refs' => [
        'CacheNodeTypeSpecificValueList$member' => NULL,
      ],
    ],
    'CacheNodeTypeSpecificValueList' => [
      'base' => NULL,
      'refs' => [
        'CacheNodeTypeSpecificParameter$CacheNodeTypeSpecificValues' => '<p>A list of cache node types and their corresponding values for this parameter.</p>',
      ],
    ],
    'CacheParameterGroup' => [
      'base' => '<p>Represents the output of a <i>CreateCacheParameterGroup</i> operation.</p>',
      'refs' => [
        'CacheParameterGroupList$member' => NULL,
        'CreateCacheParameterGroupResult$CacheParameterGroup' => NULL,
      ],
    ],
    'CacheParameterGroupAlreadyExistsFault' => [
      'base' => '<p>A cache parameter group with the requested name already exists.</p>',
      'refs' => [],
    ],
    'CacheParameterGroupDetails' => [
      'base' => '<p>Represents the output of a <i>DescribeCacheParameters</i> operation.</p>',
      'refs' => [],
    ],
    'CacheParameterGroupList' => [
      'base' => NULL,
      'refs' => [
        'CacheParameterGroupsMessage$CacheParameterGroups' => '<p>A list of cache parameter groups. Each element in the list contains detailed information about one cache parameter group.</p>',
      ],
    ],
    'CacheParameterGroupNameMessage' => [
      'base' => '<p>Represents the output of one of the following operations:</p> <ul> <li> <i>ModifyCacheParameterGroup</i> </li> <li> <i>ResetCacheParameterGroup</i> </li> </ul>',
      'refs' => [],
    ],
    'CacheParameterGroupNotFoundFault' => [
      'base' => '<p> The requested cache parameter group name does not refer to an existing cache parameter group.</p>',
      'refs' => [],
    ],
    'CacheParameterGroupQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the maximum number of cache security groups.</p>',
      'refs' => [],
    ],
    'CacheParameterGroupStatus' => [
      'base' => '<p>The status of the cache parameter group.</p>',
      'refs' => [
        'CacheCluster$CacheParameterGroup' => NULL,
      ],
    ],
    'CacheParameterGroupsMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeCacheParameterGroups</i> operation.</p>',
      'refs' => [],
    ],
    'CacheSecurityGroup' => [
      'base' => '<p>Represents the output of one of the following operations:</p> <ul> <li> <i>AuthorizeCacheSecurityGroupIngress</i> </li> <li> <i>CreateCacheSecurityGroup</i> </li> <li> <i>RevokeCacheSecurityGroupIngress</i> </li> </ul>',
      'refs' => [
        'CacheSecurityGroups$member' => NULL,
        'AuthorizeCacheSecurityGroupIngressResult$CacheSecurityGroup' => NULL,
        'CreateCacheSecurityGroupResult$CacheSecurityGroup' => NULL,
        'RevokeCacheSecurityGroupIngressResult$CacheSecurityGroup' => NULL,
      ],
    ],
    'CacheSecurityGroupAlreadyExistsFault' => [
      'base' => '<p>A cache security group with the specified name already exists.</p>',
      'refs' => [],
    ],
    'CacheSecurityGroupMembership' => [
      'base' => '<p>Represents a cache cluster\'s status within a particular cache security group.</p>',
      'refs' => [
        'CacheSecurityGroupMembershipList$member' => NULL,
      ],
    ],
    'CacheSecurityGroupMembershipList' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$CacheSecurityGroups' => '<p>A list of cache security group elements, composed of name and status sub-elements.</p>',
      ],
    ],
    'CacheSecurityGroupMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeCacheSecurityGroups</i> operation.</p>',
      'refs' => [],
    ],
    'CacheSecurityGroupNameList' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$CacheSecurityGroupNames' => '<p>A list of security group names to associate with this cache cluster.</p> <p>Use this parameter only when you are creating a cache cluster outside of an Amazon Virtual Private Cloud (VPC].</p>',
        'CreateReplicationGroupMessage$CacheSecurityGroupNames' => '<p>A list of cache security group names to associate with this replication group.</p>',
        'ModifyCacheClusterMessage$CacheSecurityGroupNames' => '<p>A list of cache security group names to authorize on this cache cluster. This change is asynchronously applied as soon as possible.</p> <p>This parameter can be used only with clusters that are created outside of an Amazon Virtual Private Cloud (VPC].</p> <p>Constraints: Must contain no more than 255 alphanumeric characters. Must not be "Default".</p>',
        'ModifyReplicationGroupMessage$CacheSecurityGroupNames' => '<p>A list of cache security group names to authorize for the clusters in this replication group. This change is asynchronously applied as soon as possible.</p> <p>This parameter can be used only with replication group containing cache clusters running outside of an Amazon Virtual Private Cloud (VPC].</p> <p>Constraints: Must contain no more than 255 alphanumeric characters. Must not be "Default".</p>',
      ],
    ],
    'CacheSecurityGroupNotFoundFault' => [
      'base' => '<p> The requested cache security group name does not refer to an existing cache security group.</p>',
      'refs' => [],
    ],
    'CacheSecurityGroupQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of cache security groups.</p>',
      'refs' => [],
    ],
    'CacheSecurityGroups' => [
      'base' => NULL,
      'refs' => [
        'CacheSecurityGroupMessage$CacheSecurityGroups' => '<p>A list of cache security groups. Each element in the list contains detailed information about one group.</p>',
      ],
    ],
    'CacheSubnetGroup' => [
      'base' => '<p>Represents the output of one of the following operations:</p> <ul> <li> <i>CreateCacheSubnetGroup</i> </li> <li> <i>ModifyCacheSubnetGroup</i> </li> </ul>',
      'refs' => [
        'CacheSubnetGroups$member' => NULL,
        'CreateCacheSubnetGroupResult$CacheSubnetGroup' => NULL,
        'ModifyCacheSubnetGroupResult$CacheSubnetGroup' => NULL,
      ],
    ],
    'CacheSubnetGroupAlreadyExistsFault' => [
      'base' => '<p> The requested cache subnet group name is already in use by an existing cache subnet group.</p>',
      'refs' => [],
    ],
    'CacheSubnetGroupInUse' => [
      'base' => '<p>The requested cache subnet group is currently in use.</p>',
      'refs' => [],
    ],
    'CacheSubnetGroupMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeCacheSubnetGroups</i> operation.</p>',
      'refs' => [],
    ],
    'CacheSubnetGroupNotFoundFault' => [
      'base' => '<p>The requested cache subnet group name does not refer to an existing cache subnet group.</p>',
      'refs' => [],
    ],
    'CacheSubnetGroupQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of cache subnet groups.</p>',
      'refs' => [],
    ],
    'CacheSubnetGroups' => [
      'base' => NULL,
      'refs' => [
        'CacheSubnetGroupMessage$CacheSubnetGroups' => '<p>A list of cache subnet groups. Each element in the list contains detailed information about one group.</p>',
      ],
    ],
    'CacheSubnetQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of subnets in a cache subnet group.</p>',
      'refs' => [],
    ],
    'ClusterIdList' => [
      'base' => NULL,
      'refs' => [
        'ReplicationGroup$MemberClusters' => '<p>The names of all the cache clusters that are part of this replication group.</p>',
      ],
    ],
    'ClusterQuotaForCustomerExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of cache clusters per customer.</p>',
      'refs' => [],
    ],
    'CopySnapshotMessage' => [
      'base' => '<p>Represents the input of a <i>CopySnapshotMessage</i> operation.</p>',
      'refs' => [],
    ],
    'CreateCacheClusterMessage' => [
      'base' => '<p>Represents the input of a <i>CreateCacheCluster</i> operation.</p>',
      'refs' => [],
    ],
    'CreateCacheParameterGroupMessage' => [
      'base' => '<p>Represents the input of a <i>CreateCacheParameterGroup</i> operation.</p>',
      'refs' => [],
    ],
    'CreateCacheSecurityGroupMessage' => [
      'base' => '<p>Represents the input of a <i>CreateCacheSecurityGroup</i> operation.</p>',
      'refs' => [],
    ],
    'CreateCacheSubnetGroupMessage' => [
      'base' => '<p>Represents the input of a <i>CreateCacheSubnetGroup</i> operation.</p>',
      'refs' => [],
    ],
    'CreateReplicationGroupMessage' => [
      'base' => '<p>Represents the input of a <i>CreateReplicationGroup</i> operation.</p>',
      'refs' => [],
    ],
    'CreateSnapshotMessage' => [
      'base' => '<p>Represents the input of a <i>CreateSnapshot</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteCacheClusterMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteCacheCluster</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteCacheParameterGroupMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteCacheParameterGroup</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteCacheSecurityGroupMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteCacheSecurityGroup</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteCacheSubnetGroupMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteCacheSubnetGroup</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteReplicationGroupMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteReplicationGroup</i> operation.</p>',
      'refs' => [],
    ],
    'DeleteSnapshotMessage' => [
      'base' => '<p>Represents the input of a <i>DeleteSnapshot</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheClustersMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheClusters</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheEngineVersionsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheEngineVersions</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheParameterGroupsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheParameterGroups</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheParametersMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheParameters</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheSecurityGroupsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheSecurityGroups</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeCacheSubnetGroupsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeCacheSubnetGroups</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeEngineDefaultParametersMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeEngineDefaultParameters</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeEventsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeEvents</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeReplicationGroupsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeReplicationGroups</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeReservedCacheNodesMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeReservedCacheNodes</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeReservedCacheNodesOfferingsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeReservedCacheNodesOfferings</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeSnapshotsListMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeSnapshots</i> operation.</p>',
      'refs' => [],
    ],
    'DescribeSnapshotsMessage' => [
      'base' => '<p>Represents the input of a <i>DescribeSnapshotsMessage</i> operation.</p>',
      'refs' => [],
    ],
    'Double' => [
      'base' => NULL,
      'refs' => [
        'RecurringCharge$RecurringChargeAmount' => '<p>The monetary amount of the recurring charge.</p>',
        'ReservedCacheNode$FixedPrice' => '<p>The fixed price charged for this reserved cache node.</p>',
        'ReservedCacheNode$UsagePrice' => '<p>The hourly price charged for this reserved cache node.</p>',
        'ReservedCacheNodesOffering$FixedPrice' => '<p>The fixed price charged for this offering.</p>',
        'ReservedCacheNodesOffering$UsagePrice' => '<p>The hourly price charged for this offering.</p>',
      ],
    ],
    'EC2SecurityGroup' => [
      'base' => '<p>Provides ownership and status information for an Amazon EC2 security group.</p>',
      'refs' => [
        'EC2SecurityGroupList$member' => NULL,
      ],
    ],
    'EC2SecurityGroupList' => [
      'base' => NULL,
      'refs' => [
        'CacheSecurityGroup$EC2SecurityGroups' => '<p>A list of Amazon EC2 security groups that are associated with this cache security group.</p>',
      ],
    ],
    'Endpoint' => [
      'base' => '<p>Represents the information required for client programs to connect to a cache node.</p>',
      'refs' => [
        'CacheCluster$ConfigurationEndpoint' => NULL,
        'CacheNode$Endpoint' => '<p>The hostname and IP address for connecting to this cache node.</p>',
        'NodeGroup$PrimaryEndpoint' => NULL,
        'NodeGroupMember$ReadEndpoint' => NULL,
      ],
    ],
    'EngineDefaults' => [
      'base' => '<p>Represents the output of a <i>DescribeEngineDefaultParameters</i> operation.</p>',
      'refs' => [
        'DescribeEngineDefaultParametersResult$EngineDefaults' => NULL,
      ],
    ],
    'Event' => [
      'base' => '<p>Represents a single occurrence of something interesting within the system. Some examples of events are creating a cache cluster, adding or removing a cache node, or rebooting a node.</p>',
      'refs' => [
        'EventList$member' => NULL,
      ],
    ],
    'EventList' => [
      'base' => NULL,
      'refs' => [
        'EventsMessage$Events' => '<p>A list of events. Each element in the list contains detailed information about one event.</p>',
      ],
    ],
    'EventsMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeEvents</i> operation.</p>',
      'refs' => [],
    ],
    'InsufficientCacheClusterCapacityFault' => [
      'base' => '<p>The requested cache node type is not available in the specified Availability Zone.</p>',
      'refs' => [],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'Endpoint$Port' => '<p>The port number that the cache engine is listening on.</p>',
        'ReservedCacheNode$Duration' => '<p>The duration of the reservation in seconds.</p>',
        'ReservedCacheNode$CacheNodeCount' => '<p>The number of cache nodes that have been reserved.</p>',
        'ReservedCacheNodesOffering$Duration' => '<p>The duration of the offering. in seconds.</p>',
      ],
    ],
    'IntegerOptional' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$NumCacheNodes' => '<p>The number of cache nodes in the cache cluster.</p>',
        'CacheCluster$SnapshotRetentionLimit' => '<p>The number of days for which ElastiCache will retain automatic cache cluster snapshots before deleting them. For example, if you set <i>SnapshotRetentionLimit</i> to 5, then a snapshot that was taken today will be retained for 5 days before being deleted.</p> <p><b>Important</b><br>If the value of SnapshotRetentionLimit is set to zero (0], backups are turned off.</p>',
        'CreateCacheClusterMessage$NumCacheNodes' => '<p>The initial number of cache nodes that the cache cluster will have.</p> <p>For Memcached, valid values are between 1 and 20. If you need to exceed this limit, please fill out the ElastiCache Limit Increase Request form at <a href="http://aws.amazon.com/contact-us/elasticache-node-limit-request/">http://aws.amazon.com/contact-us/elasticache-node-limit-request/</a>.</p> <p>For Redis, only single-node cache cluster are supported at this time, so the value for this parameter must be 1.</p>',
        'CreateCacheClusterMessage$Port' => '<p>The port number on which each of the cache nodes will accept connections.</p>',
        'CreateCacheClusterMessage$SnapshotRetentionLimit' => '<p>The number of days for which ElastiCache will retain automatic snapshots before deleting them. For example, if you set <code>SnapshotRetentionLimit</code> to 5, then a snapshot that was taken today will be retained for 5 days before being deleted.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p> <p>Default: 0 (i.e., automatic backups are disabled for this cache cluster].</p>',
        'CreateReplicationGroupMessage$NumCacheClusters' => '<p>The number of cache clusters this replication group will initially have.</p> <p>If <i>AutomaticFailover</i> is <code>enabled</code>, the value of this parameter must be at least 2.</p> <p>The maximum permitted value for <i>NumCacheClusters</i> is 6 (primary plus 5 replicas]. If you need to exceed this limit, please fill out the ElastiCache Limit Increase Request forrm at <a href="http://aws.amazon.com/contact-us/elasticache-node-limit-request">http://aws.amazon.com/contact-us/elasticache-node-limit-request</a>.</p>',
        'CreateReplicationGroupMessage$Port' => '<p>The port number on which each member of the replication group will accept connections.</p>',
        'CreateReplicationGroupMessage$SnapshotRetentionLimit' => '<p>The number of days for which ElastiCache will retain automatic snapshots before deleting them. For example, if you set <code>SnapshotRetentionLimit</code> to 5, then a snapshot that was taken today will be retained for 5 days before being deleted.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p> <p>Default: 0 (i.e., automatic backups are disabled for this cache cluster].</p>',
        'DescribeCacheClustersMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeCacheEngineVersionsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeCacheParameterGroupsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeCacheParametersMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeCacheSecurityGroupsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeCacheSubnetGroupsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeEngineDefaultParametersMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeEventsMessage$Duration' => '<p>The number of minutes\' worth of events to retrieve.</p>',
        'DescribeEventsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeReplicationGroupsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeReservedCacheNodesMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeReservedCacheNodesOfferingsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 100</p> <p>Constraints: minimum 20; maximum 100.</p>',
        'DescribeSnapshotsMessage$MaxRecords' => '<p>The maximum number of records to include in the response. If more records exist than the specified <code>MaxRecords</code> value, a marker is included in the response so that the remaining results can be retrieved.</p> <p>Default: 50</p> <p>Constraints: minimum 20; maximum 50.</p>',
        'ModifyCacheClusterMessage$NumCacheNodes' => '<p>The number of cache nodes that the cache cluster should have. If the value for <code>NumCacheNodes</code> is greater than the sum of the number of current cache nodes and the number of cache nodes pending creation (which may be zero], then more nodes will be added. If the value is less than the number of existing cache nodes, then nodes will be removed. If the value is equal to the number of current cache nodes, then any pending add or remove requests are canceled.</p> <p>If you are removing cache nodes, you must use the <code>CacheNodeIdsToRemove</code> parameter to provide the IDs of the specific cache nodes to remove.</p> <p>For cache clusters running Redis, the value of <code>NumCacheNodes</code>must be 1.</p> <p><b>Note:</b><br>Adding or removing Memcached cache nodes can be applied immediately or as a pending action. See <code>ApplyImmediately</code>.<br> A pending action to modify the number of cache nodes in a cluster during its maintenance window, whether by adding or removing nodes in accordance with the scale out architecture, is not queued. The customer\'s latest request to add or remove nodes to the cluster overrides any previous pending actions to modify the number of cache nodes in the cluster. For example, a request to remove 2 nodes would override a previous pending action to remove 3 nodes. Similarly, a request to add 2 nodes would override a previous pending action to remove 3 nodes and vice versa. As Memcached cache nodes may now be provisioned in different Availability Zones with flexible cache node placement, a request to add nodes does not automatically override a previous pending action to add nodes. The customer can modify the previous pending action to add more nodes or explicitly cancel the pending request and retry the new request. To cancel pending actions to modify the number of cache nodes in a cluster, use the <code>ModifyCacheCluster</code> request and set <code>NumCacheNodes</code> equal to the number of cache nodes currently in the cache cluster.</p>',
        'ModifyCacheClusterMessage$SnapshotRetentionLimit' => '<p>The number of days for which ElastiCache will retain automatic cache cluster snapshots before deleting them. For example, if you set <i>SnapshotRetentionLimit</i> to 5, then a snapshot that was taken today will be retained for 5 days before being deleted.</p> <p><b>Important</b><br>If the value of SnapshotRetentionLimit is set to zero (0], backups are turned off.</p>',
        'ModifyReplicationGroupMessage$SnapshotRetentionLimit' => '<p>The number of days for which ElastiCache will retain automatic node group snapshots before deleting them. For example, if you set <i>SnapshotRetentionLimit</i> to 5, then a snapshot that was taken today will be retained for 5 days before being deleted.</p> <p><b>Important</b><br>If the value of SnapshotRetentionLimit is set to zero (0], backups are turned off.</p>',
        'PendingModifiedValues$NumCacheNodes' => '<p>The new number of cache nodes for the cache cluster.</p>',
        'PurchaseReservedCacheNodesOfferingMessage$CacheNodeCount' => '<p>The number of cache node instances to reserve.</p> <p>Default: <code>1</code></p>',
        'Snapshot$NumCacheNodes' => '<p>The number of cache nodes in the source cache cluster.</p>',
        'Snapshot$Port' => '<p>The port number used by each cache nodes in the source cache cluster.</p>',
        'Snapshot$SnapshotRetentionLimit' => '<p>For an automatic snapshot, the number of days for which ElastiCache will retain the snapshot before deleting it.</p> <p>For manual snapshots, this field reflects the <i>SnapshotRetentionLimit</i> for the source cache cluster when the snapshot was created. This field is otherwise ignored: Manual snapshots do not expire, and can only be deleted using the <i>DeleteSnapshot</i> action. </p> <p><b>Important</b><br>If the value of SnapshotRetentionLimit is set to zero (0], backups are turned off.</p>',
      ],
    ],
    'InvalidCacheClusterStateFault' => [
      'base' => '<p>The requested cache cluster is not in the <i>available</i> state.</p>',
      'refs' => [],
    ],
    'InvalidCacheParameterGroupStateFault' => [
      'base' => '<p>The current state of the cache parameter group does not allow the requested action to occur. </p>',
      'refs' => [],
    ],
    'InvalidCacheSecurityGroupStateFault' => [
      'base' => '<p>The current state of the cache security group does not allow deletion.</p>',
      'refs' => [],
    ],
    'InvalidParameterCombinationException' => [
      'base' => '<p>Two or more incompatible parameters were specified.</p>',
      'refs' => [],
    ],
    'InvalidParameterValueException' => [
      'base' => '<p>The value for a parameter is invalid.</p>',
      'refs' => [],
    ],
    'InvalidReplicationGroupStateFault' => [
      'base' => '<p>The requested replication group is not in the <i>available</i> state.</p>',
      'refs' => [],
    ],
    'InvalidSnapshotStateFault' => [
      'base' => '<p>The current state of the snapshot does not allow the requested action to occur.</p>',
      'refs' => [],
    ],
    'InvalidSubnet' => [
      'base' => '<p>An invalid subnet identifier was specified.</p>',
      'refs' => [],
    ],
    'InvalidVPCNetworkStateFault' => [
      'base' => '<p>The VPC network is in an invalid state.</p>',
      'refs' => [],
    ],
    'ModifyCacheClusterMessage' => [
      'base' => '<p>Represents the input of a <i>ModifyCacheCluster</i> operation.</p>',
      'refs' => [],
    ],
    'ModifyCacheParameterGroupMessage' => [
      'base' => '<p>Represents the input of a <i>ModifyCacheParameterGroup</i> operation.</p>',
      'refs' => [],
    ],
    'ModifyCacheSubnetGroupMessage' => [
      'base' => '<p>Represents the input of a <i>ModifyCacheSubnetGroup</i> operation.</p>',
      'refs' => [],
    ],
    'ModifyReplicationGroupMessage' => [
      'base' => '<p>Represents the input of a <i>ModifyReplicationGroups</i> operation.</p>',
      'refs' => [],
    ],
    'NodeGroup' => [
      'base' => '<p>Represents a collection of cache nodes in a replication group.</p>',
      'refs' => [
        'NodeGroupList$member' => NULL,
      ],
    ],
    'NodeGroupList' => [
      'base' => NULL,
      'refs' => [
        'ReplicationGroup$NodeGroups' => '<p>A single element list with information about the nodes in the replication group.</p>',
      ],
    ],
    'NodeGroupMember' => [
      'base' => '<p>Represents a single node within a node group.</p>',
      'refs' => [
        'NodeGroupMemberList$member' => NULL,
      ],
    ],
    'NodeGroupMemberList' => [
      'base' => NULL,
      'refs' => [
        'NodeGroup$NodeGroupMembers' => '<p>A list containing information about individual nodes within the node group.</p>',
      ],
    ],
    'NodeQuotaForClusterExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of cache nodes in a single cache cluster.</p>',
      'refs' => [],
    ],
    'NodeQuotaForCustomerExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the allowed number of cache nodes per customer. </p>',
      'refs' => [],
    ],
    'NodeSnapshot' => [
      'base' => '<p>Represents an individual cache node in a snapshot of a cache cluster.</p>',
      'refs' => [
        'NodeSnapshotList$member' => NULL,
      ],
    ],
    'NodeSnapshotList' => [
      'base' => NULL,
      'refs' => [
        'Snapshot$NodeSnapshots' => '<p>A list of the cache nodes in the source cache cluster.</p>',
      ],
    ],
    'NotificationConfiguration' => [
      'base' => '<p>Describes a notification topic and its status. Notification topics are used for publishing ElastiCache events to subscribers using Amazon Simple Notification Service (SNS].</p>',
      'refs' => [
        'CacheCluster$NotificationConfiguration' => NULL,
      ],
    ],
    'Parameter' => [
      'base' => '<p>Describes an individual setting that controls some aspect of ElastiCache behavior.</p>',
      'refs' => [
        'ParametersList$member' => NULL,
      ],
    ],
    'ParameterNameValue' => [
      'base' => '<p>Describes a name-value pair that is used to update the value of a parameter.</p>',
      'refs' => [
        'ParameterNameValueList$member' => NULL,
      ],
    ],
    'ParameterNameValueList' => [
      'base' => NULL,
      'refs' => [
        'ModifyCacheParameterGroupMessage$ParameterNameValues' => '<p>An array of parameter names and values for the parameter update. You must supply at least one parameter name and value; subsequent arguments are optional. A maximum of 20 parameters may be modified per request.</p>',
        'ResetCacheParameterGroupMessage$ParameterNameValues' => '<p>An array of parameter names to be reset. If you are not resetting the entire cache parameter group, you must specify at least one parameter name.</p>',
      ],
    ],
    'ParametersList' => [
      'base' => NULL,
      'refs' => [
        'CacheParameterGroupDetails$Parameters' => '<p>A list of <a>Parameter</a> instances.</p>',
        'EngineDefaults$Parameters' => '<p>Contains a list of engine default parameters.</p>',
      ],
    ],
    'PendingAutomaticFailoverStatus' => [
      'base' => NULL,
      'refs' => [
        'ReplicationGroupPendingModifiedValues$AutomaticFailoverStatus' => '<p>Indicates the status of automatic failover for this replication group.</p>',
      ],
    ],
    'PendingModifiedValues' => [
      'base' => '<p>A group of settings that will be applied to the cache cluster in the future, or that are currently being applied.</p>',
      'refs' => [
        'CacheCluster$PendingModifiedValues' => NULL,
      ],
    ],
    'PreferredAvailabilityZoneList' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$PreferredAvailabilityZones' => '<p>A list of the Availability Zones in which cache nodes will be created. The order of the zones in the list is not important.</p> <p>This option is only supported on Memcached.</p> <p>If you want all the nodes in the same Availability Zone, use <code>PreferredAvailabilityZone</code> instead, or repeat the Availability Zone multiple times in the list.</p> <p>Default: System chosen Availability Zones.</p> <p>Example: One Memcached node in each of three different Availability Zones: <code>PreferredAvailabilityZones.member.1=us-east-1a&amp;PreferredAvailabilityZones.member.2=us-east-1b&amp;PreferredAvailabilityZones.member.3=us-east-1d</code></p> <p>Example: All three Memcached nodes in one Availability Zone: <code>PreferredAvailabilityZones.member.1=us-east-1a&amp;PreferredAvailabilityZones.member.2=us-east-1a&amp;PreferredAvailabilityZones.member.3=us-east-1a</code></p>',
        'ModifyCacheClusterMessage$NewAvailabilityZones' => '<p>The list of Availability Zones where the new Memcached cache nodes will be created.</p> <p>This parameter is only valid when <code>NumCacheNodes</code> in the request is greater than the sum of the number of active cache nodes and the number of cache nodes pending creation (which may be zero]. The number of Availability Zones supplied in this list must match the cache nodes being added in this request.</p> <p>This option is only supported on Memcached clusters.</p> <p>Scenarios: <ul> <li> <b>Scenario 1:</b> You have 3 active nodes and wish to add 2 nodes.<br> Specify <code>NumCacheNodes=5</code> (3 + 2] and optionally specify two Availability Zones for the two new nodes.</li> <li> <b>Scenario 2:</b> You have 3 active nodes and 2 nodes pending creation (from the scenario 1 call] and want to add 1 more node.<br> Specify <code>NumCacheNodes=6</code> ((3 + 2] + 1]</li> and optionally specify an Availability Zone for the new node. <li> <b>Scenario 3:</b> You want to cancel all pending actions.<br> Specify <code>NumCacheNodes=3</code> to cancel all pending actions.</li> </ul> </p> <p>The Availability Zone placement of nodes pending creation cannot be modified. If you wish to cancel any nodes pending creation, add 0 nodes by setting <code>NumCacheNodes</code> to the number of current nodes.</p> <p>If <code>cross-az</code> is specified, existing Memcached nodes remain in their current Availability Zone. Only newly created nodes can be located in different Availability Zones. For guidance on how to move existing Memcached nodes to different Availability Zones, see the <b>Availability Zone Considerations</b> section of <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheNode.Memcached.html">Cache Node Considerations for Memcached</a>.</p> <p><b>Impact of new add/remove requests upon pending requests</b></p> <table> <tr> <th>Scenarios</th> <th>Pending Operation</th> <th>New Request</th> <th>Results</th> </tr> <tr> <td>Scenario-1</td> <td>Delete</td> <td>Delete</td> <td>The new delete, pending or immediate, replaces the pending delete.</td> </tr> <tr> <td>Scenario-2</td> <td>Delete</td> <td>Create</td> <td>The new create, pending or immediate, replaces the pending delete.</td> </tr> <tr> <td>Scenario-3</td> <td>Create</td> <td>Delete</td> <td>The new delete, pending or immediate, replaces the pending create.</td> </tr> <tr> <td>Scenario-4</td> <td>Create</td> <td>Create</td> <td>The new create is added to the pending create.<br/> <b>Important:</b><br/>If the new create request is <b>Apply Immediately - Yes</b>, all creates are performed immediately. If the new create request is <b>Apply Immediately - No</b>, all creates are pending.</td> </tr> </table> <p>Example: <code>NewAvailabilityZones.member.1=us-east-1a&amp;NewAvailabilityZones.member.2=us-east-1b&amp;NewAvailabilityZones.member.3=us-east-1d</code></p>',
      ],
    ],
    'PurchaseReservedCacheNodesOfferingMessage' => [
      'base' => '<p>Represents the input of a <i>PurchaseReservedCacheNodesOffering</i> operation.</p>',
      'refs' => [],
    ],
    'RebootCacheClusterMessage' => [
      'base' => '<p>Represents the input of a <i>RebootCacheCluster</i> operation.</p>',
      'refs' => [],
    ],
    'RecurringCharge' => [
      'base' => '<p>Contains the specific price and frequency of a recurring charges for a reserved cache node, or for a reserved cache node offering.</p>',
      'refs' => [
        'RecurringChargeList$member' => NULL,
      ],
    ],
    'RecurringChargeList' => [
      'base' => NULL,
      'refs' => [
        'ReservedCacheNode$RecurringCharges' => '<p>The recurring price charged to run this reserved cache node.</p>',
        'ReservedCacheNodesOffering$RecurringCharges' => '<p>The recurring price charged to run this reserved cache node.</p>',
      ],
    ],
    'ReplicationGroup' => [
      'base' => '<p>Contains all of the attributes of a specific replication group.</p>',
      'refs' => [
        'ReplicationGroupList$member' => NULL,
        'CreateReplicationGroupResult$ReplicationGroup' => NULL,
        'DeleteReplicationGroupResult$ReplicationGroup' => NULL,
        'ModifyReplicationGroupResult$ReplicationGroup' => NULL,
      ],
    ],
    'ReplicationGroupAlreadyExistsFault' => [
      'base' => '<p>The specified replication group already exists.</p>',
      'refs' => [],
    ],
    'ReplicationGroupList' => [
      'base' => NULL,
      'refs' => [
        'ReplicationGroupMessage$ReplicationGroups' => '<p>A list of replication groups. Each item in the list contains detailed information about one replication group.</p>',
      ],
    ],
    'ReplicationGroupMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeReplicationGroups</i> operation.</p>',
      'refs' => [],
    ],
    'ReplicationGroupNotFoundFault' => [
      'base' => '<p>The specified replication group does not exist.</p>',
      'refs' => [],
    ],
    'ReplicationGroupPendingModifiedValues' => [
      'base' => '<p>The settings to be applied to the replication group, either immediately or during the next maintenance window.</p>',
      'refs' => [
        'ReplicationGroup$PendingModifiedValues' => '<p>A group of settings to be applied to the replication group, either immediately or during the next maintenance window.</p>',
      ],
    ],
    'ReservedCacheNode' => [
      'base' => '<p>Represents the output of a <i>PurchaseReservedCacheNodesOffering</i> operation.</p>',
      'refs' => [
        'ReservedCacheNodeList$member' => NULL,
        'PurchaseReservedCacheNodesOfferingResult$ReservedCacheNode' => NULL,
      ],
    ],
    'ReservedCacheNodeAlreadyExistsFault' => [
      'base' => '<p>You already have a reservation with the given identifier.</p>',
      'refs' => [],
    ],
    'ReservedCacheNodeList' => [
      'base' => NULL,
      'refs' => [
        'ReservedCacheNodeMessage$ReservedCacheNodes' => '<p>A list of reserved cache nodes. Each element in the list contains detailed information about one node.</p>',
      ],
    ],
    'ReservedCacheNodeMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeReservedCacheNodes</i> operation.</p>',
      'refs' => [],
    ],
    'ReservedCacheNodeNotFoundFault' => [
      'base' => '<p>The requested reserved cache node was not found.</p>',
      'refs' => [],
    ],
    'ReservedCacheNodeQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the user\'s cache node quota.</p>',
      'refs' => [],
    ],
    'ReservedCacheNodesOffering' => [
      'base' => '<p>Describes all of the attributes of a reserved cache node offering.</p>',
      'refs' => [
        'ReservedCacheNodesOfferingList$member' => NULL,
      ],
    ],
    'ReservedCacheNodesOfferingList' => [
      'base' => NULL,
      'refs' => [
        'ReservedCacheNodesOfferingMessage$ReservedCacheNodesOfferings' => '<p>A list of reserved cache node offerings. Each element in the list contains detailed information about one offering.</p>',
      ],
    ],
    'ReservedCacheNodesOfferingMessage' => [
      'base' => '<p>Represents the output of a <i>DescribeReservedCacheNodesOfferings</i> operation.</p>',
      'refs' => [],
    ],
    'ReservedCacheNodesOfferingNotFoundFault' => [
      'base' => '<p>The requested cache node offering does not exist.</p>',
      'refs' => [],
    ],
    'ResetCacheParameterGroupMessage' => [
      'base' => '<p>Represents the input of a <i>ResetCacheParameterGroup</i> operation.</p>',
      'refs' => [],
    ],
    'RevokeCacheSecurityGroupIngressMessage' => [
      'base' => '<p>Represents the input of a <i>RevokeCacheSecurityGroupIngress</i> operation.</p>',
      'refs' => [],
    ],
    'SecurityGroupIdsList' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$SecurityGroupIds' => '<p>One or more VPC security groups associated with the cache cluster.</p> <p>Use this parameter only when you are creating a cache cluster in an Amazon Virtual Private Cloud (VPC].</p>',
        'CreateReplicationGroupMessage$SecurityGroupIds' => '<p>One or more Amazon VPC security groups associated with this replication group.</p> <p>Use this parameter only when you are creating a replication group in an Amazon Virtual Private Cloud (VPC].</p>',
        'ModifyCacheClusterMessage$SecurityGroupIds' => '<p>Specifies the VPC Security Groups associated with the cache cluster.</p> <p>This parameter can be used only with clusters that are created in an Amazon Virtual Private Cloud (VPC].</p>',
        'ModifyReplicationGroupMessage$SecurityGroupIds' => '<p>Specifies the VPC Security Groups associated with the cache clusters in the replication group.</p> <p>This parameter can be used only with replication group containing cache clusters running in an Amazon Virtual Private Cloud (VPC].</p>',
      ],
    ],
    'SecurityGroupMembership' => [
      'base' => '<p>Represents a single cache security group and its status..</p>',
      'refs' => [
        'SecurityGroupMembershipList$member' => NULL,
      ],
    ],
    'SecurityGroupMembershipList' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$SecurityGroups' => '<p>A list of VPC Security Groups associated with the cache cluster.</p>',
      ],
    ],
    'Snapshot' => [
      'base' => '<p>Represents a copy of an entire cache cluster as of the time when the snapshot was taken.</p>',
      'refs' => [
        'SnapshotList$member' => NULL,
        'CopySnapshotResult$Snapshot' => NULL,
        'CreateSnapshotResult$Snapshot' => NULL,
        'DeleteSnapshotResult$Snapshot' => NULL,
      ],
    ],
    'SnapshotAlreadyExistsFault' => [
      'base' => '<p>You already have a snapshot with the given name.</p>',
      'refs' => [],
    ],
    'SnapshotArnsList' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheClusterMessage$SnapshotArns' => '<p>A single-element string list containing an Amazon Resource Name (ARN] that uniquely identifies a Redis RDB snapshot file stored in Amazon S3. The snapshot file will be used to populate the node group. The Amazon S3 object name in the ARN cannot contain any commas.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p> <p>Example of an Amazon S3 ARN: <code>arn:aws:s3:::my_bucket/snapshot1.rdb</code></p>',
        'CreateReplicationGroupMessage$SnapshotArns' => '<p>A single-element string list containing an Amazon Resource Name (ARN] that uniquely identifies a Redis RDB snapshot file stored in Amazon S3. The snapshot file will be used to populate the node group. The Amazon S3 object name in the ARN cannot contain any commas.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p> <p>Example of an Amazon S3 ARN: <code>arn:aws:s3:::my_bucket/snapshot1.rdb</code></p>',
      ],
    ],
    'SnapshotFeatureNotSupportedFault' => [
      'base' => '<p>You attempted one of the following actions:</p> <ul> <li> <p>Creating a snapshot of a Redis cache cluster running on a <i>t1.micro</i> cache node.</p> </li> <li> <p>Creating a snapshot of a cache cluster that is running Memcached rather than Redis.</p> </li> </ul> <p>Neither of these are supported by ElastiCache.</p>',
      'refs' => [],
    ],
    'SnapshotList' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotsListMessage$Snapshots' => '<p>A list of snapshots. Each item in the list contains detailed information about one snapshot.</p>',
      ],
    ],
    'SnapshotNotFoundFault' => [
      'base' => '<p>The requested snapshot name does not refer to an existing snapshot.</p>',
      'refs' => [],
    ],
    'SnapshotQuotaExceededFault' => [
      'base' => '<p>The request cannot be processed because it would exceed the maximum number of snapshots.</p>',
      'refs' => [],
    ],
    'SourceType' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$SourceType' => '<p>The event source to retrieve events for. If no value is specified, all events are returned.</p> <p>Valid values are: <code>cache-cluster</code> | <code>cache-parameter-group</code> | <code>cache-security-group</code> | <code>cache-subnet-group</code></p>',
        'Event$SourceType' => '<p>Specifies the origin of this event - a cache cluster, a parameter group, a security group, etc.</p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'AuthorizeCacheSecurityGroupIngressMessage$CacheSecurityGroupName' => '<p>The cache security group which will allow network ingress.</p>',
        'AuthorizeCacheSecurityGroupIngressMessage$EC2SecurityGroupName' => '<p>The Amazon EC2 security group to be authorized for ingress to the cache security group.</p>',
        'AuthorizeCacheSecurityGroupIngressMessage$EC2SecurityGroupOwnerId' => '<p>The AWS account number of the Amazon EC2 security group owner. Note that this is not the same thing as an AWS access key ID - you must provide a valid AWS account number for this parameter.</p>',
        'AvailabilityZone$Name' => '<p>The name of the Availability Zone.</p>',
        'AvailabilityZonesList$member' => NULL,
        'CacheCluster$CacheClusterId' => '<p>The user-supplied identifier of the cache cluster. This identifier is a unique key that identifies a cache cluster.</p>',
        'CacheCluster$ClientDownloadLandingPage' => '<p>The URL of the web page where you can download the latest ElastiCache client library.</p>',
        'CacheCluster$CacheNodeType' => '<p>The name of the compute and memory capacity node type for the cache cluster.</p>',
        'CacheCluster$Engine' => '<p>The name of the cache engine (<i>memcached</i> or <i>redis</i>] to be used for this cache cluster.</p>',
        'CacheCluster$EngineVersion' => '<p>The version of the cache engine version that is used in this cache cluster.</p>',
        'CacheCluster$CacheClusterStatus' => '<p>The current state of this cache cluster, one of the following values: <i>available</i>, <i>creating</i>, <i>deleted</i>, <i>deleting</i>, <i>incompatible-network</i>, <i>modifying</i>, <i>rebooting cache cluster nodes</i>, <i>restore-failed</i>, or <i>snapshotting</i>.</p>',
        'CacheCluster$PreferredAvailabilityZone' => '<p>The name of the Availability Zone in which the cache cluster is located or "Multiple" if the cache nodes are located in different Availability Zones.</p>',
        'CacheCluster$PreferredMaintenanceWindow' => '<p>The time range (in UTC] during which weekly system maintenance can occur.</p>',
        'CacheCluster$CacheSubnetGroupName' => '<p>The name of the cache subnet group associated with the cache cluster.</p>',
        'CacheCluster$ReplicationGroupId' => '<p>The replication group to which this cache cluster belongs. If this field is empty, the cache cluster is not associated with any replication group.</p>',
        'CacheCluster$SnapshotWindow' => '<p>The daily time range (in UTC] during which ElastiCache will begin taking a daily snapshot of your cache cluster.</p> <p>Example: <code>05:00-09:00</code></p>',
        'CacheClusterMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'CacheEngineVersion$Engine' => '<p>The name of the cache engine.</p>',
        'CacheEngineVersion$EngineVersion' => '<p>The version number of the cache engine.</p>',
        'CacheEngineVersion$CacheParameterGroupFamily' => '<p>The name of the cache parameter group family associated with this cache engine.</p>',
        'CacheEngineVersion$CacheEngineDescription' => '<p>The description of the cache engine.</p>',
        'CacheEngineVersion$CacheEngineVersionDescription' => '<p>The description of the cache engine version.</p>',
        'CacheEngineVersionMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'CacheNode$CacheNodeId' => '<p>The cache node identifier. A node ID is a numeric identifier (0001, 0002, etc.]. The combination of cluster ID and node ID uniquely identifies every cache node used in a customer\'s AWS account.</p>',
        'CacheNode$CacheNodeStatus' => '<p>The current state of this cache node.</p>',
        'CacheNode$ParameterGroupStatus' => '<p>The status of the parameter group applied to this cache node.</p>',
        'CacheNode$SourceCacheNodeId' => '<p>The ID of the primary node to which this read replica node is synchronized. If this field is empty, then this node is not associated with a primary cache cluster.</p>',
        'CacheNode$CustomerAvailabilityZone' => '<p>The Availability Zone where this node was created and now resides.</p>',
        'CacheNodeIdsList$member' => NULL,
        'CacheNodeTypeSpecificParameter$ParameterName' => '<p>The name of the parameter.</p>',
        'CacheNodeTypeSpecificParameter$Description' => '<p>A description of the parameter.</p>',
        'CacheNodeTypeSpecificParameter$Source' => '<p>The source of the parameter value.</p>',
        'CacheNodeTypeSpecificParameter$DataType' => '<p>The valid data type for the parameter.</p>',
        'CacheNodeTypeSpecificParameter$AllowedValues' => '<p>The valid range of values for the parameter.</p>',
        'CacheNodeTypeSpecificParameter$MinimumEngineVersion' => '<p>The earliest cache engine version to which the parameter can apply.</p>',
        'CacheNodeTypeSpecificValue$CacheNodeType' => '<p>The cache node type for which this value applies.</p>',
        'CacheNodeTypeSpecificValue$Value' => '<p>The value for the cache node type.</p>',
        'CacheParameterGroup$CacheParameterGroupName' => '<p>The name of the cache parameter group.</p>',
        'CacheParameterGroup$CacheParameterGroupFamily' => '<p>The name of the cache parameter group family that this cache parameter group is compatible with.</p>',
        'CacheParameterGroup$Description' => '<p>The description for this cache parameter group.</p>',
        'CacheParameterGroupDetails$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'CacheParameterGroupNameMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group.</p>',
        'CacheParameterGroupStatus$CacheParameterGroupName' => '<p>The name of the cache parameter group.</p>',
        'CacheParameterGroupStatus$ParameterApplyStatus' => '<p>The status of parameter updates.</p>',
        'CacheParameterGroupsMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'CacheSecurityGroup$OwnerId' => '<p>The AWS account ID of the cache security group owner.</p>',
        'CacheSecurityGroup$CacheSecurityGroupName' => '<p>The name of the cache security group.</p>',
        'CacheSecurityGroup$Description' => '<p>The description of the cache security group.</p>',
        'CacheSecurityGroupMembership$CacheSecurityGroupName' => '<p>The name of the cache security group.</p>',
        'CacheSecurityGroupMembership$Status' => '<p>The membership status in the cache security group. The status changes when a cache security group is modified, or when the cache security groups assigned to a cache cluster are modified.</p>',
        'CacheSecurityGroupMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'CacheSecurityGroupNameList$member' => NULL,
        'CacheSubnetGroup$CacheSubnetGroupName' => '<p>The name of the cache subnet group.</p>',
        'CacheSubnetGroup$CacheSubnetGroupDescription' => '<p>The description of the cache subnet group.</p>',
        'CacheSubnetGroup$VpcId' => '<p>The Amazon Virtual Private Cloud identifier (VPC ID] of the cache subnet group.</p>',
        'CacheSubnetGroupMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'ClusterIdList$member' => NULL,
        'CopySnapshotMessage$SourceSnapshotName' => '<p>The name of an existing snapshot from which to copy.</p>',
        'CopySnapshotMessage$TargetSnapshotName' => '<p>A name for the copied snapshot.</p>',
        'CreateCacheClusterMessage$CacheClusterId' => '<p>The node group identifier. This parameter is stored as a lowercase string.</p> <p>Constraints:</p> <ul> <li>A name must contain from 1 to 20 alphanumeric characters or hyphens.</li> <li>The first character must be a letter.</li> <li>A name cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'CreateCacheClusterMessage$ReplicationGroupId' => '<p>The ID of the replication group to which this cache cluster should belong. If this parameter is specified, the cache cluster will be added to the specified replication group as a read replica; otherwise, the cache cluster will be a standalone primary that is not part of any replication group.</p> <p>If the specified replication group is Automatic Failover enabled and the availability zone is not specified, the cache cluster will be created in availability zones that provide the best spread of read replicas across availability zones.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p>',
        'CreateCacheClusterMessage$PreferredAvailabilityZone' => '<p>The EC2 Availability Zone in which the cache cluster will be created.</p> <p>All nodes belonging to this Memcached cache cluster are placed in the preferred Availability Zone. If you want to create your nodes across multiple Availability Zones, use <code>PreferredAvailabilityZones</code>.</p> <p>Default: System chosen Availability Zone.</p>',
        'CreateCacheClusterMessage$CacheNodeType' => '<p>The compute and memory capacity of the nodes in the node group.</p> <p>Valid node types are as follows:</p> <ul> <li>General purpose: <ul> <li>Current generation: <code>cache.t2.micro</code>, <code>cache.t2.small</code>, <code>cache.t2.medium</code>, <code>cache.m3.medium</code>, <code>cache.m3.large</code>, <code>cache.m3.xlarge</code>, <code>cache.m3.2xlarge</code></li> <li>Previous generation: <code>cache.t1.micro</code>, <code>cache.m1.small</code>, <code>cache.m1.medium</code>, <code>cache.m1.large</code>, <code>cache.m1.xlarge</code></li> </ul></li> <li>Compute optimized: <code>cache.c1.xlarge</code></li> <li>Memory optimized <ul> <li>Current generation: <code>cache.r3.large</code>, <code>cache.r3.xlarge</code>, <code>cache.r3.2xlarge</code>, <code>cache.r3.4xlarge</code>, <code>cache.r3.8xlarge</code></li> <li>Previous generation: <code>cache.m2.xlarge</code>, <code>cache.m2.2xlarge</code>, <code>cache.m2.4xlarge</code></li> </ul></li> </ul> <p><b>Notes:</b></p> <ul> <li>All t2 instances are created in an Amazon Virtual Private Cloud (VPC].</li> <li>Redis backup/restore is not supported for t2 instances.</li> <li>Redis Append-only files (AOF] functionality is not supported for t1 or t2 instances.</li> </ul> <p>For a complete listing of cache node types and specifications, see <a href="http://aws.amazon.com/elasticache/details">Amazon ElastiCache Product Features and Details</a> and <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheParameterGroups.Memcached.html#CacheParameterGroups.Memcached.NodeSpecific">Cache Node Type-Specific Parameters for Memcached</a> or <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheParameterGroups.Redis.html#CacheParameterGroups.Redis.NodeSpecific">Cache Node Type-Specific Parameters for Redis</a>. </p>',
        'CreateCacheClusterMessage$Engine' => '<p>The name of the cache engine to be used for this cache cluster.</p> <p>Valid values for this parameter are:</p> <p><code>memcached</code> | <code>redis</code></p>',
        'CreateCacheClusterMessage$EngineVersion' => '<p>The version number of the cache engine to be used for this cache cluster. To view the supported cache engine versions, use the <i>DescribeCacheEngineVersions</i> operation.</p>',
        'CreateCacheClusterMessage$CacheParameterGroupName' => '<p>The name of the parameter group to associate with this cache cluster. If this argument is omitted, the default parameter group for the specified engine is used.</p>',
        'CreateCacheClusterMessage$CacheSubnetGroupName' => '<p>The name of the subnet group to be used for the cache cluster.</p> <p>Use this parameter only when you are creating a cache cluster in an Amazon Virtual Private Cloud (VPC].</p>',
        'CreateCacheClusterMessage$SnapshotName' => '<p>The name of a snapshot from which to restore data into the new node group. The snapshot status changes to <code>restoring</code> while the new node group is being created.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p>',
        'CreateCacheClusterMessage$PreferredMaintenanceWindow' => '<p>The weekly time range (in UTC] during which system maintenance can occur.</p> <p>Example: <code>sun:05:00-sun:09:00</code></p>',
        'CreateCacheClusterMessage$NotificationTopicArn' => '<p>The Amazon Resource Name (ARN] of the Amazon Simple Notification Service (SNS] topic to which notifications will be sent.</p>',
        'CreateCacheClusterMessage$SnapshotWindow' => '<p>The daily time range (in UTC] during which ElastiCache will begin taking a daily snapshot of your node group.</p> <p>Example: <code>05:00-09:00</code></p> <p>If you do not specify this parameter, then ElastiCache will automatically choose an appropriate time range.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p>',
        'CreateCacheParameterGroupMessage$CacheParameterGroupName' => '<p>A user-specified name for the cache parameter group.</p>',
        'CreateCacheParameterGroupMessage$CacheParameterGroupFamily' => '<p>The name of the cache parameter group family the cache parameter group can be used with.</p> <p>Valid values are: <code>memcached1.4</code> | <code>redis2.6</code> | <code>redis2.8</code></p>',
        'CreateCacheParameterGroupMessage$Description' => '<p>A user-specified description for the cache parameter group.</p>',
        'CreateCacheSecurityGroupMessage$CacheSecurityGroupName' => '<p>A name for the cache security group. This value is stored as a lowercase string.</p> <p>Constraints: Must contain no more than 255 alphanumeric characters. Cannot be the word "Default".</p> <p>Example: <code>mysecuritygroup</code></p>',
        'CreateCacheSecurityGroupMessage$Description' => '<p>A description for the cache security group.</p>',
        'CreateCacheSubnetGroupMessage$CacheSubnetGroupName' => '<p>A name for the cache subnet group. This value is stored as a lowercase string.</p> <p>Constraints: Must contain no more than 255 alphanumeric characters or hyphens.</p> <p>Example: <code>mysubnetgroup</code></p>',
        'CreateCacheSubnetGroupMessage$CacheSubnetGroupDescription' => '<p>A description for the cache subnet group.</p>',
        'CreateReplicationGroupMessage$ReplicationGroupId' => '<p>The replication group identifier. This parameter is stored as a lowercase string.</p> <p>Constraints:</p> <ul> <li>A name must contain from 1 to 20 alphanumeric characters or hyphens.</li> <li>The first character must be a letter.</li> <li>A name cannot end with a hyphen or contain two consecutive hyphens.</li> </ul>',
        'CreateReplicationGroupMessage$ReplicationGroupDescription' => '<p>A user-created description for the replication group.</p>',
        'CreateReplicationGroupMessage$PrimaryClusterId' => '<p>The identifier of the cache cluster that will serve as the primary for this replication group. This cache cluster must already exist and have a status of <i>available</i>.</p> <p>This parameter is not required if <i>NumCacheClusters</i> is specified.</p>',
        'CreateReplicationGroupMessage$CacheNodeType' => '<p>The compute and memory capacity of the nodes in the node group.</p> <p>Valid node types are as follows:</p> <ul> <li>General purpose: <ul> <li>Current generation: <code>cache.t2.micro</code>, <code>cache.t2.small</code>, <code>cache.t2.medium</code>, <code>cache.m3.medium</code>, <code>cache.m3.large</code>, <code>cache.m3.xlarge</code>, <code>cache.m3.2xlarge</code></li> <li>Previous generation: <code>cache.t1.micro</code>, <code>cache.m1.small</code>, <code>cache.m1.medium</code>, <code>cache.m1.large</code>, <code>cache.m1.xlarge</code></li> </ul></li> <li>Compute optimized: <code>cache.c1.xlarge</code></li> <li>Memory optimized <ul> <li>Current generation: <code>cache.r3.large</code>, <code>cache.r3.xlarge</code>, <code>cache.r3.2xlarge</code>, <code>cache.r3.4xlarge</code>, <code>cache.r3.8xlarge</code></li> <li>Previous generation: <code>cache.m2.xlarge</code>, <code>cache.m2.2xlarge</code>, <code>cache.m2.4xlarge</code></li> </ul></li> </ul> <p><b>Notes:</b></p> <ul> <li>All t2 instances are created in an Amazon Virtual Private Cloud (VPC].</li> <li>Redis backup/restore is not supported for t2 instances.</li> <li>Redis Append-only files (AOF] functionality is not supported for t1 or t2 instances.</li> </ul> <p>For a complete listing of cache node types and specifications, see <a href="http://aws.amazon.com/elasticache/details">Amazon ElastiCache Product Features and Details</a> and <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheParameterGroups.Memcached.html#CacheParameterGroups.Memcached.NodeSpecific">Cache Node Type-Specific Parameters for Memcached</a> or <a href="http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/CacheParameterGroups.Redis.html#CacheParameterGroups.Redis.NodeSpecific">Cache Node Type-Specific Parameters for Redis</a>. </p>',
        'CreateReplicationGroupMessage$Engine' => '<p>The name of the cache engine to be used for the cache clusters in this replication group.</p> <p>Default: redis</p>',
        'CreateReplicationGroupMessage$EngineVersion' => '<p>The version number of the cach engine to be used for the cache clusters in this replication group. To view the supported cache engine versions, use the <i>DescribeCacheEngineVersions</i> operation.</p>',
        'CreateReplicationGroupMessage$CacheParameterGroupName' => '<p>The name of the parameter group to associate with this replication group. If this argument is omitted, the default cache parameter group for the specified engine is used.</p>',
        'CreateReplicationGroupMessage$CacheSubnetGroupName' => '<p>The name of the cache subnet group to be used for the replication group.</p>',
        'CreateReplicationGroupMessage$SnapshotName' => '<p>The name of a snapshot from which to restore data into the new node group. The snapshot status changes to <code>restoring</code> while the new node group is being created.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p>',
        'CreateReplicationGroupMessage$PreferredMaintenanceWindow' => '<p>The weekly time range (in UTC] during which system maintenance can occur.</p> <p>Example: <code>sun:05:00-sun:09:00</code></p>',
        'CreateReplicationGroupMessage$NotificationTopicArn' => '<p>The Amazon Resource Name (ARN] of the Amazon Simple Notification Service (SNS] topic to which notifications will be sent.</p>',
        'CreateReplicationGroupMessage$SnapshotWindow' => '<p>The daily time range (in UTC] during which ElastiCache will begin taking a daily snapshot of your node group.</p> <p>Example: <code>05:00-09:00</code></p> <p>If you do not specify this parameter, then ElastiCache will automatically choose an appropriate time range.</p> <p><b>Note:</b> This parameter is only valid if the <code>Engine</code> parameter is <code>redis</code>.</p>',
        'CreateSnapshotMessage$CacheClusterId' => '<p>The identifier of an existing cache cluster. The snapshot will be created from this cache cluster.</p>',
        'CreateSnapshotMessage$SnapshotName' => '<p>A name for the snapshot being created.</p>',
        'DeleteCacheClusterMessage$CacheClusterId' => '<p>The cache cluster identifier for the cluster to be deleted. This parameter is not case sensitive.</p>',
        'DeleteCacheClusterMessage$FinalSnapshotIdentifier' => '<p>The user-supplied name of a final cache cluster snapshot. This is the unique name that identifies the snapshot. ElastiCache creates the snapshot, and then deletes the cache cluster immediately afterward.</p>',
        'DeleteCacheParameterGroupMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group to delete.</p>',
        'DeleteCacheSecurityGroupMessage$CacheSecurityGroupName' => '<p>The name of the cache security group to delete.</p>',
        'DeleteCacheSubnetGroupMessage$CacheSubnetGroupName' => '<p>The name of the cache subnet group to delete.</p> <p>Constraints: Must contain no more than 255 alphanumeric characters or hyphens.</p>',
        'DeleteReplicationGroupMessage$ReplicationGroupId' => '<p>The identifier for the cluster to be deleted. This parameter is not case sensitive.</p>',
        'DeleteReplicationGroupMessage$FinalSnapshotIdentifier' => '<p>The name of a final node group snapshot. ElastiCache creates the snapshot from the primary node in the cluster, rather than one of the replicas; this is to ensure that it captures the freshest data. After the final snapshot is taken, the cluster is immediately deleted.</p>',
        'DeleteSnapshotMessage$SnapshotName' => '<p>The name of the snapshot to be deleted.</p>',
        'DescribeCacheClustersMessage$CacheClusterId' => '<p>The user-supplied cluster identifier. If this parameter is specified, only information about that specific cache cluster is returned. This parameter isn\'t case sensitive.</p>',
        'DescribeCacheClustersMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeCacheEngineVersionsMessage$Engine' => '<p>The cache engine to return. Valid values: <code>memcached</code> | <code>redis</code></p>',
        'DescribeCacheEngineVersionsMessage$EngineVersion' => '<p>The cache engine version to return.</p> <p>Example: <code>1.4.14</code></p>',
        'DescribeCacheEngineVersionsMessage$CacheParameterGroupFamily' => '<p>The name of a specific cache parameter group family to return details for.</p> <p>Constraints:</p> <ul> <li>Must be 1 to 255 alphanumeric characters</li> <li>First character must be a letter</li> <li>Cannot end with a hyphen or contain two consecutive hyphens</li> </ul>',
        'DescribeCacheEngineVersionsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeCacheParameterGroupsMessage$CacheParameterGroupName' => '<p>The name of a specific cache parameter group to return details for.</p>',
        'DescribeCacheParameterGroupsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeCacheParametersMessage$CacheParameterGroupName' => '<p>The name of a specific cache parameter group to return details for.</p>',
        'DescribeCacheParametersMessage$Source' => '<p>The parameter types to return.</p> <p>Valid values: <code>user</code> | <code>system</code> | <code>engine-default</code></p>',
        'DescribeCacheParametersMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeCacheSecurityGroupsMessage$CacheSecurityGroupName' => '<p>The name of the cache security group to return details for.</p>',
        'DescribeCacheSecurityGroupsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeCacheSubnetGroupsMessage$CacheSubnetGroupName' => '<p>The name of the cache subnet group to return details for.</p>',
        'DescribeCacheSubnetGroupsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeEngineDefaultParametersMessage$CacheParameterGroupFamily' => '<p>The name of the cache parameter group family. Valid values are: <code>memcached1.4</code> | <code>redis2.6</code> | <code>redis2.8</code></p>',
        'DescribeEngineDefaultParametersMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeEventsMessage$SourceIdentifier' => '<p>The identifier of the event source for which events will be returned. If not specified, then all sources are included in the response.</p>',
        'DescribeEventsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeReplicationGroupsMessage$ReplicationGroupId' => '<p>The identifier for the replication group to be described. This parameter is not case sensitive.</p> <p>If you do not specify this parameter, information about all replication groups is returned.</p>',
        'DescribeReplicationGroupsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeReservedCacheNodesMessage$ReservedCacheNodeId' => '<p>The reserved cache node identifier filter value. Use this parameter to show only the reservation that matches the specified reservation ID.</p>',
        'DescribeReservedCacheNodesMessage$ReservedCacheNodesOfferingId' => '<p>The offering identifier filter value. Use this parameter to show only purchased reservations matching the specified offering identifier.</p>',
        'DescribeReservedCacheNodesMessage$CacheNodeType' => '<p>The cache node type filter value. Use this parameter to show only those reservations matching the specified cache node type.</p>',
        'DescribeReservedCacheNodesMessage$Duration' => '<p>The duration filter value, specified in years or seconds. Use this parameter to show only reservations for this duration.</p> <p>Valid Values: <code>1 | 3 | 31536000 | 94608000</code></p>',
        'DescribeReservedCacheNodesMessage$ProductDescription' => '<p>The product description filter value. Use this parameter to show only those reservations matching the specified product description.</p>',
        'DescribeReservedCacheNodesMessage$OfferingType' => '<p>The offering type filter value. Use this parameter to show only the available offerings matching the specified offering type.</p> <p>Valid values: <code>"Light Utilization" | "Medium Utilization" | "Heavy Utilization"</code></p>',
        'DescribeReservedCacheNodesMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeReservedCacheNodesOfferingsMessage$ReservedCacheNodesOfferingId' => '<p>The offering identifier filter value. Use this parameter to show only the available offering that matches the specified reservation identifier.</p> <p>Example: <code>438012d3-4052-4cc7-b2e3-8d3372e0e706</code></p>',
        'DescribeReservedCacheNodesOfferingsMessage$CacheNodeType' => '<p>The cache node type filter value. Use this parameter to show only the available offerings matching the specified cache node type.</p>',
        'DescribeReservedCacheNodesOfferingsMessage$Duration' => '<p>Duration filter value, specified in years or seconds. Use this parameter to show only reservations for a given duration.</p> <p>Valid Values: <code>1 | 3 | 31536000 | 94608000</code></p>',
        'DescribeReservedCacheNodesOfferingsMessage$ProductDescription' => '<p>The product description filter value. Use this parameter to show only the available offerings matching the specified product description.</p>',
        'DescribeReservedCacheNodesOfferingsMessage$OfferingType' => '<p>The offering type filter value. Use this parameter to show only the available offerings matching the specified offering type.</p> <p>Valid Values: <code>"Light Utilization" | "Medium Utilization" | "Heavy Utilization"</code></p>',
        'DescribeReservedCacheNodesOfferingsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeSnapshotsListMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'DescribeSnapshotsMessage$CacheClusterId' => '<p>A user-supplied cluster identifier. If this parameter is specified, only snapshots associated with that specific cache cluster will be described.</p>',
        'DescribeSnapshotsMessage$SnapshotName' => '<p>A user-supplied name of the snapshot. If this parameter is specified, only this snapshot will be described.</p>',
        'DescribeSnapshotsMessage$SnapshotSource' => '<p>If set to <code>system</code>, the output shows snapshots that were automatically created by ElastiCache. If set to <code>user</code> the output shows snapshots that were manually created. If omitted, the output shows both automatically and manually created snapshots.</p>',
        'DescribeSnapshotsMessage$Marker' => '<p>An optional marker returned from a prior request. Use this marker for pagination of results from this operation. If this parameter is specified, the response includes only records beyond the marker, up to the value specified by <i>MaxRecords</i>.</p>',
        'EC2SecurityGroup$Status' => '<p>The status of the Amazon EC2 security group.</p>',
        'EC2SecurityGroup$EC2SecurityGroupName' => '<p>The name of the Amazon EC2 security group.</p>',
        'EC2SecurityGroup$EC2SecurityGroupOwnerId' => '<p>The AWS account ID of the Amazon EC2 security group owner.</p>',
        'Endpoint$Address' => '<p>The DNS hostname of the cache node.</p>',
        'EngineDefaults$CacheParameterGroupFamily' => '<p>Specifies the name of the cache parameter group family to which the engine default parameters apply.</p>',
        'EngineDefaults$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'Event$SourceIdentifier' => '<p>The identifier for the source of the event. For example, if the event occurred at the cache cluster level, the identifier would be the name of the cache cluster.</p>',
        'Event$Message' => '<p>The text of the event.</p>',
        'EventsMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'ModifyCacheClusterMessage$CacheClusterId' => '<p>The cache cluster identifier. This value is stored as a lowercase string.</p>',
        'ModifyCacheClusterMessage$PreferredMaintenanceWindow' => '<p>The weekly time range (in UTC] during which system maintenance can occur. Note that system maintenance may result in an outage. This change is made immediately. If you are moving this window to the current time, there must be at least 120 minutes between the current time and end of the window to ensure that pending changes are applied.</p>',
        'ModifyCacheClusterMessage$NotificationTopicArn' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic to which notifications will be sent.</p>',
        'ModifyCacheClusterMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group to apply to this cache cluster. This change is asynchronously applied as soon as possible for parameters when the <i>ApplyImmediately</i> parameter is specified as <i>true</i> for this request.</p>',
        'ModifyCacheClusterMessage$NotificationTopicStatus' => '<p>The status of the Amazon SNS notification topic. Notifications are sent only if the status is <i>active</i>.</p> <p>Valid values: <code>active</code> | <code>inactive</code></p>',
        'ModifyCacheClusterMessage$EngineVersion' => '<p>The upgraded version of the cache engine to be run on the cache nodes.</p>',
        'ModifyCacheClusterMessage$SnapshotWindow' => '<p>The daily time range (in UTC] during which ElastiCache will begin taking a daily snapshot of your cache cluster. </p>',
        'ModifyCacheParameterGroupMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group to modify.</p>',
        'ModifyCacheSubnetGroupMessage$CacheSubnetGroupName' => '<p>The name for the cache subnet group. This value is stored as a lowercase string.</p> <p>Constraints: Must contain no more than 255 alphanumeric characters or hyphens.</p> <p>Example: <code>mysubnetgroup</code></p>',
        'ModifyCacheSubnetGroupMessage$CacheSubnetGroupDescription' => '<p>A description for the cache subnet group.</p>',
        'ModifyReplicationGroupMessage$ReplicationGroupId' => '<p>The identifier of the replication group to modify.</p>',
        'ModifyReplicationGroupMessage$ReplicationGroupDescription' => '<p>A description for the replication group. Maximum length is 255 characters.</p>',
        'ModifyReplicationGroupMessage$PrimaryClusterId' => '<p>If this parameter is specified, ElastiCache will promote each of the cache clusters in the specified replication group to the primary role. The nodes of all other cache clusters in the replication group will be read replicas.</p>',
        'ModifyReplicationGroupMessage$SnapshottingClusterId' => '<p>The cache cluster ID that will be used as the daily snapshot source for the replication group.</p>',
        'ModifyReplicationGroupMessage$PreferredMaintenanceWindow' => '<p>The weekly time range (in UTC] during which replication group system maintenance can occur. Note that system maintenance may result in an outage. This change is made immediately. If you are moving this window to the current time, there must be at least 120 minutes between the current time and end of the window to ensure that pending changes are applied.</p>',
        'ModifyReplicationGroupMessage$NotificationTopicArn' => '<p>The Amazon Resource Name (ARN] of the Amazon SNS topic to which notifications will be sent.</p>',
        'ModifyReplicationGroupMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group to apply to all of the clusters in this replication group. This change is asynchronously applied as soon as possible for parameters when the <i>ApplyImmediately</i> parameter is specified as <i>true</i> for this request.</p>',
        'ModifyReplicationGroupMessage$NotificationTopicStatus' => '<p>The status of the Amazon SNS notification topic for the replication group. Notifications are sent only if the status is <i>active</i>.</p> <p>Valid values: <code>active</code> | <code>inactive</code></p>',
        'ModifyReplicationGroupMessage$EngineVersion' => '<p>The upgraded version of the cache engine to be run on the cache clusters in the replication group.</p>',
        'ModifyReplicationGroupMessage$SnapshotWindow' => '<p>The daily time range (in UTC] during which ElastiCache will begin taking a daily snapshot of the node group specified by <i>SnapshottingClusterId</i>.</p> <p>Example: <code>05:00-09:00</code></p> <p>If you do not specify this parameter, then ElastiCache will automatically choose an appropriate time range.</p>',
        'NodeGroup$NodeGroupId' => '<p>The identifier for the node group. A replication group contains only one node group; therefore, the node group ID is 0001.</p>',
        'NodeGroup$Status' => '<p>The current state of this replication group - <i>creating</i>, <i>available</i>, etc.</p>',
        'NodeGroupMember$CacheClusterId' => '<p>The ID of the cache cluster to which the node belongs.</p>',
        'NodeGroupMember$CacheNodeId' => '<p>The ID of the node within its cache cluster. A node ID is a numeric identifier (0001, 0002, etc.].</p>',
        'NodeGroupMember$PreferredAvailabilityZone' => '<p>The name of the Availability Zone in which the node is located.</p>',
        'NodeGroupMember$CurrentRole' => '<p>The role that is currently assigned to the node - <i>primary</i> or <i>replica</i>.</p>',
        'NodeSnapshot$CacheNodeId' => '<p>The cache node identifier for the node in the source cache cluster.</p>',
        'NodeSnapshot$CacheSize' => '<p>The size of the cache on the source cache node.</p>',
        'NotificationConfiguration$TopicArn' => '<p>The Amazon Resource Name (ARN] that identifies the topic.</p>',
        'NotificationConfiguration$TopicStatus' => '<p>The current state of the topic.</p>',
        'Parameter$ParameterName' => '<p>The name of the parameter.</p>',
        'Parameter$ParameterValue' => '<p>The value of the parameter.</p>',
        'Parameter$Description' => '<p>A description of the parameter.</p>',
        'Parameter$Source' => '<p>The source of the parameter.</p>',
        'Parameter$DataType' => '<p>The valid data type for the parameter.</p>',
        'Parameter$AllowedValues' => '<p>The valid range of values for the parameter.</p>',
        'Parameter$MinimumEngineVersion' => '<p>The earliest cache engine version to which the parameter can apply.</p>',
        'ParameterNameValue$ParameterName' => '<p>The name of the parameter.</p>',
        'ParameterNameValue$ParameterValue' => '<p>The value of the parameter.</p>',
        'PendingModifiedValues$EngineVersion' => '<p>The new cache engine version that the cache cluster will run.</p>',
        'PreferredAvailabilityZoneList$member' => NULL,
        'PurchaseReservedCacheNodesOfferingMessage$ReservedCacheNodesOfferingId' => '<p>The ID of the reserved cache node offering to purchase.</p> <p>Example: 438012d3-4052-4cc7-b2e3-8d3372e0e706</p>',
        'PurchaseReservedCacheNodesOfferingMessage$ReservedCacheNodeId' => '<p>A customer-specified identifier to track this reservation.</p> <p>Example: myreservationID</p>',
        'RebootCacheClusterMessage$CacheClusterId' => '<p>The cache cluster identifier. This parameter is stored as a lowercase string.</p>',
        'RecurringCharge$RecurringChargeFrequency' => '<p>The frequency of the recurring charge.</p>',
        'ReplicationGroup$ReplicationGroupId' => '<p>The identifier for the replication group.</p>',
        'ReplicationGroup$Description' => '<p>The description of the replication group.</p>',
        'ReplicationGroup$Status' => '<p>The current state of this replication group - <i>creating</i>, <i>available</i>, etc.</p>',
        'ReplicationGroup$SnapshottingClusterId' => '<p>The cache cluster ID that is used as the daily snapshot source for the replication group.</p>',
        'ReplicationGroupMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'ReplicationGroupPendingModifiedValues$PrimaryClusterId' => '<p>The primary cluster ID which will be applied immediately (if <code>--apply-immediately</code> was specified], or during the next maintenance window.</p>',
        'ReservedCacheNode$ReservedCacheNodeId' => '<p>The unique identifier for the reservation.</p>',
        'ReservedCacheNode$ReservedCacheNodesOfferingId' => '<p>The offering identifier.</p>',
        'ReservedCacheNode$CacheNodeType' => '<p>The cache node type for the reserved cache nodes.</p>',
        'ReservedCacheNode$ProductDescription' => '<p>The description of the reserved cache node.</p>',
        'ReservedCacheNode$OfferingType' => '<p>The offering type of this reserved cache node.</p>',
        'ReservedCacheNode$State' => '<p>The state of the reserved cache node.</p>',
        'ReservedCacheNodeMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'ReservedCacheNodesOffering$ReservedCacheNodesOfferingId' => '<p>A unique identifier for the reserved cache node offering.</p>',
        'ReservedCacheNodesOffering$CacheNodeType' => '<p>The cache node type for the reserved cache node.</p>',
        'ReservedCacheNodesOffering$ProductDescription' => '<p>The cache engine used by the offering.</p>',
        'ReservedCacheNodesOffering$OfferingType' => '<p>The offering type.</p>',
        'ReservedCacheNodesOfferingMessage$Marker' => '<p>Provides an identifier to allow retrieval of paginated results.</p>',
        'ResetCacheParameterGroupMessage$CacheParameterGroupName' => '<p>The name of the cache parameter group to reset.</p>',
        'RevokeCacheSecurityGroupIngressMessage$CacheSecurityGroupName' => '<p>The name of the cache security group to revoke ingress from.</p>',
        'RevokeCacheSecurityGroupIngressMessage$EC2SecurityGroupName' => '<p>The name of the Amazon EC2 security group to revoke access from.</p>',
        'RevokeCacheSecurityGroupIngressMessage$EC2SecurityGroupOwnerId' => '<p>The AWS account number of the Amazon EC2 security group owner. Note that this is not the same thing as an AWS access key ID - you must provide a valid AWS account number for this parameter.</p>',
        'SecurityGroupIdsList$member' => NULL,
        'SecurityGroupMembership$SecurityGroupId' => '<p>The identifier of the cache security group.</p>',
        'SecurityGroupMembership$Status' => '<p>The status of the cache security group membership. The status changes whenever a cache security group is modified, or when the cache security groups assigned to a cache cluster are modified.</p>',
        'Snapshot$SnapshotName' => '<p>The name of a snapshot. For an automatic snapshot, the name is system-generated; for a manual snapshot, this is the user-provided name.</p>',
        'Snapshot$CacheClusterId' => '<p>The user-supplied identifier of the source cache cluster.</p>',
        'Snapshot$SnapshotStatus' => '<p>The status of the snapshot. Valid values: <code>creating</code> | <code>available</code> | <code>restoring</code> | <code>copying</code> | <code>deleting</code>.</p>',
        'Snapshot$SnapshotSource' => '<p>Indicates whether the snapshot is from an automatic backup (<code>automated</code>] or was created manually (<code>manual</code>].</p>',
        'Snapshot$CacheNodeType' => '<p>The name of the compute and memory capacity node type for the source cache cluster.</p>',
        'Snapshot$Engine' => '<p>The name of the cache engine (<i>memcached</i> or <i>redis</i>] used by the source cache cluster.</p>',
        'Snapshot$EngineVersion' => '<p>The version of the cache engine version that is used by the source cache cluster.</p>',
        'Snapshot$PreferredAvailabilityZone' => '<p>The name of the Availability Zone in which the source cache cluster is located.</p>',
        'Snapshot$PreferredMaintenanceWindow' => '<p> The time range (in UTC] during which weekly system maintenance can occur on the source cache cluster.</p>',
        'Snapshot$TopicArn' => '<p>The Amazon Resource Name (ARN] for the topic used by the source cache cluster for publishing notifications.</p>',
        'Snapshot$CacheParameterGroupName' => '<p>The cache parameter group that is associated with the source cache cluster.</p>',
        'Snapshot$CacheSubnetGroupName' => '<p>The name of the cache subnet group associated with the source cache cluster.</p>',
        'Snapshot$VpcId' => '<p>The Amazon Virtual Private Cloud identifier (VPC ID] of the cache subnet group for the source cache cluster.</p>',
        'Snapshot$SnapshotWindow' => '<p>The daily time range during which ElastiCache takes daily snapshots of the source cache cluster.</p>',
        'SnapshotArnsList$member' => NULL,
        'Subnet$SubnetIdentifier' => '<p>The unique identifier for the subnet</p>',
        'SubnetIdentifierList$member' => NULL,
      ],
    ],
    'Subnet' => [
      'base' => '<p>Represents the subnet associated with a cache cluster. This parameter refers to subnets defined in Amazon Virtual Private Cloud (Amazon VPC] and used with ElastiCache.</p>',
      'refs' => [
        'SubnetList$member' => NULL,
      ],
    ],
    'SubnetIdentifierList' => [
      'base' => NULL,
      'refs' => [
        'CreateCacheSubnetGroupMessage$SubnetIds' => '<p>A list of VPC subnet IDs for the cache subnet group.</p>',
        'ModifyCacheSubnetGroupMessage$SubnetIds' => '<p>The EC2 subnet IDs for the cache subnet group.</p>',
      ],
    ],
    'SubnetInUse' => [
      'base' => '<p>The requested subnet is being used by another cache subnet group.</p>',
      'refs' => [],
    ],
    'SubnetList' => [
      'base' => NULL,
      'refs' => [
        'CacheSubnetGroup$Subnets' => '<p>A list of subnets associated with the cache subnet group.</p>',
      ],
    ],
    'TStamp' => [
      'base' => NULL,
      'refs' => [
        'CacheCluster$CacheClusterCreateTime' => '<p>The date and time when the cache cluster was created.</p>',
        'CacheNode$CacheNodeCreateTime' => '<p>The date and time when the cache node was created.</p>',
        'DescribeEventsMessage$StartTime' => '<p>The beginning of the time interval to retrieve events for, specified in ISO 8601 format.</p>',
        'DescribeEventsMessage$EndTime' => '<p>The end of the time interval for which to retrieve events, specified in ISO 8601 format.</p>',
        'Event$Date' => '<p>The date and time when the event occurred.</p>',
        'NodeSnapshot$CacheNodeCreateTime' => '<p>The date and time when the cache node was created in the source cache cluster.</p>',
        'NodeSnapshot$SnapshotCreateTime' => '<p>The date and time when the source node\'s metadata and cache data set was obtained for the snapshot.</p>',
        'ReservedCacheNode$StartTime' => '<p>The time the reservation started.</p>',
        'Snapshot$CacheClusterCreateTime' => '<p>The date and time when the source cache cluster was created.</p>',
      ],
    ],
    'AuthorizeCacheSecurityGroupIngressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CopySnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCacheClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCacheParameterGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCacheSecurityGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCacheSubnetGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateReplicationGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteCacheClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteReplicationGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSnapshotResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeEngineDefaultParametersResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyCacheClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyCacheSubnetGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ModifyReplicationGroupResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PurchaseReservedCacheNodesOfferingResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RebootCacheClusterResult' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RevokeCacheSecurityGroupIngressResult' => [
      'base' => NULL,
      'refs' => [],
    ],
  ],
];
