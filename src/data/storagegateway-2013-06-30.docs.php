<?php return [
  'operations' => [
    'ActivateGateway' => '<p>This operation activates the gateway you previously deployed on your host. For more information, see <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/GettingStartedActivateGateway-common.html"> Activate the AWS Storage Gateway</a>. In the activation process, you specify information such as the region you want to use for storing snapshots, the time zone for scheduled snapshots the gateway snapshot schedule window, an activation key, and a name for your gateway. The activation process also associates your gateway with your account; for more information, see <a>UpdateGatewayInformation</a>.</p> <note>You must turn on the gateway VM before you can activate your gateway.</note>',
    'AddCache' => '<p>This operation configures one or more gateway local disks as cache for a cached-volume gateway. This operation is supported only for the gateway-cached volume architecture (see <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/StorageGatewayConcepts.html">Storage Gateway Concepts</a>].</p> <p>In the request, you specify the gateway Amazon Resource Name (ARN] to which you want to add cache, and one or more disk IDs that you want to configure as cache. </p>',
    'AddUploadBuffer' => '<p>This operation configures one or more gateway local disks as upload buffer for a specified gateway. This operation is supported for both the gateway-stored and gateway-cached volume architectures. </p> <p> In the request, you specify the gateway Amazon Resource Name (ARN] to which you want to add upload buffer, and one or more disk IDs that you want to configure as upload buffer.</p>',
    'AddWorkingStorage' => '<p>This operation configures one or more gateway local disks as working storage for a gateway. This operation is supported only for the gateway-stored volume architecture. This operation is deprecated method in cached-volumes API version (20120630]. Use AddUploadBuffer instead.</p> <note><p>Working storage is also referred to as upload buffer. You can also use the <a>AddUploadBuffer</a> operation to add upload buffer to a stored-volume gateway.</p></note> <p>In the request, you specify the gateway Amazon Resource Name (ARN] to which you want to add working storage, and one or more disk IDs that you want to configure as working storage.</p>',
    'CancelArchival' => '<p>Cancels archiving of a virtual tape to the virtual tape shelf (VTS] after the archiving process is initiated. </p>',
    'CancelRetrieval' => '<p>Cancels retrieval of a virtual tape from the virtual tape shelf (VTS] to a gateway after the retrieval process is initiated. The virtual tape is returned to the VTS.</p>',
    'CreateCachediSCSIVolume' => '<p>This operation creates a cached volume on a specified cached gateway. This operation is supported only for the gateway-cached volume architecture.</p> <note>Cache storage must be allocated to the gateway before you can create a cached volume. Use the <a>AddCache</a> operation to add cache storage to a gateway. </note> <p>In the request, you must specify the gateway, size of the volume in bytes, the iSCSI target name, an IP address on which to expose the target, and a unique client token. In response, AWS Storage Gateway creates the volume and returns information about it such as the volume Amazon Resource Name (ARN], its size, and the iSCSI target ARN that initiators can use to connect to the volume target.</p>',
    'CreateSnapshot' => '<p>This operation initiates a snapshot of a volume.</p> <p>AWS Storage Gateway provides the ability to back up point-in-time snapshots of your data to Amazon Simple Storage (S3] for durable off-site recovery, as well as import the data to an Amazon Elastic Block Store (EBS] volume in Amazon Elastic Compute Cloud (EC2]. You can take snapshots of your gateway volume on a scheduled or ad-hoc basis. This API enables you to take ad-hoc snapshot. For more information, see <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/WorkingWithSnapshots.html">Working With Snapshots in the AWS Storage Gateway Console</a>.</p> <p>In the CreateSnapshot request you identify the volume by providing its Amazon Resource Name (ARN]. You must also provide description for the snapshot. When AWS Storage Gateway takes the snapshot of specified volume, the snapshot and description appears in the AWS Storage Gateway Console. In response, AWS Storage Gateway returns you a snapshot ID. You can use this snapshot ID to check the snapshot progress or later use it when you want to create a volume from a snapshot.</p> <note>To list or delete a snapshot, you must use the Amazon EC2 API. For more information, .</note>',
    'CreateSnapshotFromVolumeRecoveryPoint' => '<p>This operation initiates a snapshot of a gateway from a volume recovery point. This operation is supported only for the gateway-cached volume architecture (see ].</p> <p>A volume recovery point is a point in time at which all data of the volume is consistent and from which you can create a snapshot. To get a list of volume recovery point for gateway-cached volumes, use <a>ListVolumeRecoveryPoints</a>.</p> <p>In the <code>CreateSnapshotFromVolumeRecoveryPoint</code> request, you identify the volume by providing its Amazon Resource Name (ARN]. You must also provide a description for the snapshot. When AWS Storage Gateway takes a snapshot of the specified volume, the snapshot and its description appear in the AWS Storage Gateway console. In response, AWS Storage Gateway returns you a snapshot ID. You can use this snapshot ID to check the snapshot progress or later use it when you want to create a volume from a snapshot.</p> <note> <p>To list or delete a snapshot, you must use the Amazon EC2 API. For more information, in <i>Amazon Elastic Compute Cloud API Reference</i>.</p> </note>',
    'CreateStorediSCSIVolume' => '<p>This operation creates a volume on a specified gateway. This operation is supported only for the gateway-stored volume architecture. </p> <p>The size of the volume to create is inferred from the disk size. You can choose to preserve existing data on the disk, create volume from an existing snapshot, or create an empty volume. If you choose to create an empty gateway volume, then any existing data on the disk is erased.</p> <p>In the request you must specify the gateway and the disk information on which you are creating the volume. In response, AWS Storage Gateway creates the volume and returns volume information such as the volume Amazon Resource Name (ARN], its size, and the iSCSI target ARN that initiators can use to connect to the volume target.</p>',
    'CreateTapes' => '<p>Creates one or more virtual tapes. You write data to the virtual tapes and then archive the tapes.</p> <note>Cache storage must be allocated to the gateway before you can create virtual tapes. Use the <a>AddCache</a> operation to add cache storage to a gateway. </note>',
    'DeleteBandwidthRateLimit' => '<p>This operation deletes the bandwidth rate limits of a gateway. You can delete either the upload and download bandwidth rate limit, or you can delete both. If you delete only one of the limits, the other limit remains unchanged. To specify which gateway to work with, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'DeleteChapCredentials' => '<p>This operation deletes Challenge-Handshake Authentication Protocol (CHAP] credentials for a specified iSCSI target and initiator pair.</p>',
    'DeleteGateway' => '<p>This operation deletes a gateway. To specify which gateway to delete, use the Amazon Resource Name (ARN] of the gateway in your request. The operation deletes the gateway; however, it does not delete the gateway virtual machine (VM] from your host computer.</p> <p>After you delete a gateway, you cannot reactivate it. Completed snapshots of the gateway volumes are not deleted upon deleting the gateway, however, pending snapshots will not complete. After you delete a gateway, your next step is to remove it from your environment.</p> <important> <p>You no longer pay software charges after the gateway is deleted; however, your existing Amazon EBS snapshots persist and you will continue to be billed for these snapshots. You can choose to remove all remaining Amazon EBS snapshots by canceling your Amazon EC2 subscription.  If you prefer not to cancel your Amazon EC2 subscription, you can delete your snapshots using the Amazon EC2 console. For more information, see the <a href="http://aws.amazon.com/storagegateway"> AWS Storage Gateway Detail Page</a>. </p> </important>',
    'DeleteSnapshotSchedule' => '<p> This operation deletes a snapshot of a volume. </p> <p> You can take snapshots of your gateway volumes on a scheduled or ad-hoc basis. This API enables you to delete a snapshot schedule for a volume. For more information, see <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/WorkingWithSnapshots.html">Working with Snapshots</a>. In the <code>DeleteSnapshotSchedule</code> request, you identify the volume by providing its Amazon Resource Name (ARN]. </p> <note> <p>To list or delete a snapshot, you must use the Amazon EC2 API. in <i>Amazon Elastic Compute Cloud API Reference</i>.</p> </note>',
    'DeleteTape' => '<p>Deletes the specified virtual tape.</p>',
    'DeleteTapeArchive' => '<p>Deletes the specified virtual tape from the virtual tape shelf (VTS].</p>',
    'DeleteVolume' => '<p>This operation delete the specified gateway volume that you previously created using the <a>CreateStorediSCSIVolume</a> API. For gateway-stored volumes, the local disk that was configured as the storage volume is not deleted. You can reuse the local disk to create another storage volume. </p> <p>Before you delete a gateway volume, make sure there are no iSCSI connections to the volume you are deleting. You should also make sure there is no snapshot in progress. You can use the Amazon Elastic Compute Cloud (Amazon EC2] API to query snapshots on the volume you are deleting and check the snapshot status. For more information, go to <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-DescribeSnapshots.html">DescribeSnapshots</a> in the <i>Amazon Elastic Compute Cloud API Reference</i>.</p> <p>In the request, you must provide the Amazon Resource Name (ARN] of the storage volume you want to delete.</p>',
    'DescribeBandwidthRateLimit' => '<p>This operation returns the bandwidth rate limits of a gateway. By default, these limits are not set, which means no bandwidth rate limiting is in effect.</p> <p>This operation only returns a value for a bandwidth rate limit only if the limit is set. If no limits are set for the gateway, then this operation returns only the gateway ARN in the response body. To specify which gateway to describe, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'DescribeCache' => '<p>This operation returns information about the cache of a gateway. This operation is supported only for the gateway-cached volume architecture. </p> <p> The response includes disk IDs that are configured as cache, and it includes the amount of cache allocated and used. </p>',
    'DescribeCachediSCSIVolumes' => '<p>This operation returns a description of the gateway volumes specified in the request. This operation is supported only for the gateway-cached volume architecture.</p> <p> The list of gateway volumes in the request must be from one gateway. In the response Amazon Storage Gateway returns volume information sorted by volume Amazon Resource Name (ARN]. </p>',
    'DescribeChapCredentials' => '<p>This operation returns an array of Challenge-Handshake Authentication Protocol (CHAP] credentials information for a specified iSCSI target, one for each target-initiator pair.</p>',
    'DescribeGatewayInformation' => '<p>This operation returns metadata about a gateway such as its name, network interfaces, configured time zone, and the state (whether the gateway is running or not]. To specify which gateway to describe, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'DescribeMaintenanceStartTime' => '<p>This operation returns your gateway\'s weekly maintenance start time including the day and time of the week. Note that values are in terms of the gateway\'s time zone.</p>',
    'DescribeSnapshotSchedule' => '<p>This operation describes the snapshot schedule for the specified gateway volume. The snapshot schedule information includes intervals at which snapshots are automatically initiated on the volume.</p>',
    'DescribeStorediSCSIVolumes' => '<p>This operation returns description of the gateway volumes specified in the request. The list of gateway volumes in the request must be from one gateway. In the response Amazon Storage Gateway returns volume information sorted by volume ARNs.</p>',
    'DescribeTapeArchives' => '<p>Returns a description of specified virtual tapes in the virtual tape shelf (VTS]. </p> <p>If a specific <code>TapeARN</code> is not specified, AWS Storage Gateway returns a description of all virtual tapes found in the VTS associated with your account.</p>',
    'DescribeTapeRecoveryPoints' => '<p>Returns a list of virtual tape recovery points that are available for the specified gateway-VTL.</p> <p>A recovery point is a point in time view of a virtual tape at which all the data on the virtual tape is consistent. If your gateway crashes, virtual tapes that have recovery points can be recovered to a new gateway.</p>',
    'DescribeTapes' => '<p>Returns a description of the specified Amazon Resource Name (ARN] of virtual tapes. If a <code>TapeARN</code> is not specified, returns a description of all virtual tapes associated with the specified gateway.</p>',
    'DescribeUploadBuffer' => '<p>This operation returns information about the upload buffer of a gateway. This operation is supported for both the gateway-stored and gateway-cached volume architectures. </p> <p> The response includes disk IDs that are configured as upload buffer space, and it includes the amount of upload buffer space allocated and used.</p>',
    'DescribeVTLDevices' => '<p>Returns a description of virtual tape library (VTL] devices for the specified gateway. In the response, AWS Storage Gateway returns VTL device information. </p> <p>The list of VTL devices must be from one gateway.</p>',
    'DescribeWorkingStorage' => '<p>This operation returns information about the working storage of a gateway. This operation is supported only for the gateway-stored volume architecture. This operation is deprecated in cached-volumes API version (20120630]. Use DescribeUploadBuffer instead.</p> <note><p>Working storage is also referred to as upload buffer. You can also use the DescribeUploadBuffer operation to add upload buffer to a stored-volume gateway.</p></note> <p>The response includes disk IDs that are configured as working storage, and it includes the amount of working storage allocated and used.</p>',
    'DisableGateway' => '<p>Disables a gateway when the gateway is no longer functioning. For example, if your gateway VM is damaged, you can disable the gateway so you can recover virtual tapes. </p> <p>Use this operation for a gateway-VTL that is not reachable or not functioning.</p> <important>Once a gateway is disabled it cannot be enabled.</important>',
    'ListGateways' => '<p>This operation lists gateways owned by an AWS account in a region specified in the request. The returned list is ordered by gateway Amazon Resource Name (ARN].</p> <p>By default, the operation returns a maximum of 100 gateways. This operation supports pagination that allows you to optionally reduce the number of gateways returned in a response.</p> <p>If you have more gateways than are returned in a response-that is, the response returns only a truncated list of your gateways-the response contains a marker that you can specify in your next request to fetch the next page of gateways.</p>',
    'ListLocalDisks' => '<p>This operation returns a list of the gateway\'s local disks. To specify which gateway to describe, you use the Amazon Resource Name (ARN] of the gateway in the body of the request.</p> <p>The request returns a list of all disks, specifying which are configured as working storage, cache storage, or stored volume or not configured at all. The response includes a <code>DiskStatus</code> field. This field can have a value of present (the disk is availble to use], missing (the disk is no longer connected to the gateway], or mismatch (the disk node is occupied by a disk that has incorrect metadata or the disk content is corrupted]. </p>',
    'ListVolumeRecoveryPoints' => '<p>This operation lists the recovery points for a specified gateway. This operation is supported only for the gateway-cached volume architecture.</p> <p>Each gateway-cached volume has one recovery point. A volume recovery point is a point in time at which all data of the volume is consistent and from which you can create a snapshot. To create a snapshot from a volume recovery point use the <a>CreateSnapshotFromVolumeRecoveryPoint</a> operation.</p>',
    'ListVolumes' => '<p>This operation lists the iSCSI stored volumes of a gateway. Results are sorted by volume ARN. The response includes only the volume ARNs. If you want additional volume information, use the <a>DescribeStorediSCSIVolumes</a> API.</p> <p>The operation supports pagination. By default, the operation returns a maximum of up to 100 volumes. You can optionally specify the <code>Limit</code> field in the body to limit the number of volumes in the response. If the number of volumes returned in the response is truncated, the response includes a Marker field. You can use this Marker value in your subsequent request to retrieve the next set of volumes.</p>',
    'ResetCache' => '<p>This operation resets all cache disks and makes the disks available for reconfiguration as cache storage. When a cache is reset, the gateway loses its cache storage. At this point you can reconfigure the disks as cache disks. </p>',
    'RetrieveTapeArchive' => '<p>Retrieves an archived virtual tape from the virtual tape shelf (VTS] to a gateway-VTL. Virtual tapes archived in the VTS are not associated with any gateway. However after a tape is retrieved, it is associated with a gateway, even though it is also listed in the VTS.</p> <p>Once a tape is successfully retrieved to a gateway, it cannot be retrieved again to another gateway. You must archive the tape again before you can retrieve it to another gateway.</p>',
    'RetrieveTapeRecoveryPoint' => '<p>Retrieves the recovery point for the specified virtual tape.</p> <p>A recovery point is a point in time view of a virtual tape at which all the data on the tape is consistent. If your gateway crashes, virtual tapes that have recovery points can be recovered to a new gateway.</p> <note>The virtual tape can be retrieved to only one gateway. The retrieved tape is read-only. The virtual tape can be retrieved to only a gateway-VTL. There is no charge for retrieving recovery points.</note>',
    'ShutdownGateway' => '<p>This operation shuts down a gateway. To specify which gateway to shut down, use the Amazon Resource Name (ARN] of the gateway in the body of your request.</p> <p>The operation shuts down the gateway service component running in the storage gateway\'s virtual machine (VM] and not the VM.</p> <note>If you want to shut down the VM, it is recommended that you first shut down the gateway component in the VM to avoid unpredictable conditions.</note> <p>After the gateway is shutdown, you cannot call any other API except <a>StartGateway</a>, <a>DescribeGatewayInformation</a>, and <a>ListGateways</a>. For more information, see <a>ActivateGateway</a>. Your applications cannot read from or write to the gateway\'s storage volumes, and there are no snapshots taken.</p> <note>When you make a shutdown request, you will get a <code>200 OK</code> success response immediately. However, it might take some time for the gateway to shut down. You can call the <a>DescribeGatewayInformation</a> API to check the status. For more information, see <a>ActivateGateway</a>.</note> <p>If do not intend to use the gateway again, you must delete the gateway (using <a>DeleteGateway</a>] to no longer pay software charges associated with the gateway.</p>',
    'StartGateway' => '<p>This operation starts a gateway that you previously shut down (see <a>ShutdownGateway</a>]. After the gateway starts, you can then make other API calls, your applications can read from or write to the gateway\'s storage volumes and you will be able to take snapshot backups.</p> <note>When you make a request, you will get a 200 OK success response immediately. However, it might take some time for the gateway to be ready. You should call <a>DescribeGatewayInformation</a> and check the status before making any additional API calls. For more information, see <a>ActivateGateway</a>.</note> <p>To specify which gateway to start, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'UpdateBandwidthRateLimit' => '<p>This operation updates the bandwidth rate limits of a gateway. You can update both the upload and download bandwidth rate limit or specify only one of the two. If you don\'t set a bandwidth rate limit, the existing rate limit remains.</p> <p>By default, a gateway\'s bandwidth rate limits are not set. If you don\'t set any limit, the gateway does not have any limitations on its bandwidth usage and could potentially use the maximum available bandwidth.</p> <p>To specify which gateway to update, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'UpdateChapCredentials' => '<p>This operation updates the Challenge-Handshake Authentication Protocol (CHAP] credentials for a specified iSCSI target. By default, a gateway does not have CHAP enabled; however, for added security, you might use it.</p> <important> <p>When you update CHAP credentials, all existing connections on the target are closed and initiators must reconnect with the new credentials.</p> </important>',
    'UpdateGatewayInformation' => '<p>This operation updates a gateway\'s metadata, which includes the gateway\'s name and time zone. To specify which gateway to update, use the Amazon Resource Name (ARN] of the gateway in your request.</p>',
    'UpdateGatewaySoftwareNow' => '<p>This operation updates the gateway virtual machine (VM] software. The request immediately triggers the software update. </p> <note>When you make this request, you get a <code>200 OK</code> success response immediately. However, it might take some time for the update to complete. You can call <a>DescribeGatewayInformation</a> to verify the gateway is in the <code>STATE_RUNNING</code> state.</note> <important>A software update forces a system restart of your gateway. You can minimize the chance of any disruption to your applications by increasing your iSCSI Initiators\' timeouts. For more information about increasing iSCSI Initiator timeouts for Windows and Linux, see <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/ConfiguringiSCSIClientInitiatorWindowsClient.html#CustomizeWindowsiSCSISettings">Customizing Your Windows iSCSI Settings</a> and <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/ConfiguringiSCSIClientInitiatorRedHatClient.html#CustomizeLinuxiSCSISettings">Customizing Your Linux iSCSI Settings</a>, respectively.</important>',
    'UpdateMaintenanceStartTime' => '<p>This operation updates a gateway\'s weekly maintenance start time information, including day and time of the week. The maintenance time is the time in your gateway\'s time zone.</p>',
    'UpdateSnapshotSchedule' => '<p>This operation updates a snapshot schedule configured for a gateway volume.</p> <p>The default snapshot schedule for volume is once every 24 hours, starting at the creation time of the volume. You can use this API to change the snapshot schedule configured for the volume.</p> <p>In the request you must identify the gateway volume whose snapshot schedule you want to update, and the schedule information, including when you want the snapshot to begin on a day and the frequency (in hours] of snapshots.</p>',
    'UpdateVTLDeviceType' => '<p>This operation updates the type of medium changer in a gateway-VTL. When you activate a gateway-VTL, you select a medium changer type for the gateway-VTL. This operation enables you to select a different type of medium changer after a gateway-VTL is activated.</p>',
  ],
  'service' => '<fullname>AWS Storage Gateway Service</fullname> <p>AWS Storage Gateway is the service that connects an on-premises software appliance with cloud-based storage to provide seamless and secure integration between an organization\'s on-premises IT environment and AWS\'s storage infrastructure. The service enables you to securely upload data to the AWS cloud for cost effective backup and rapid disaster recovery.</p> <p>Use the following links to get started using the <i>AWS Storage Gateway Service API Reference</i>:</p> <ul> <li> <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/AWSStorageGatewayHTTPRequestsHeaders.html">AWS Storage Gateway Required Request Headers</a>: Describes the required headers that you must send with every POST request to AWS Storage Gateway.</li> <li> <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/AWSStorageGatewaySigningRequests.html">Signing Requests</a>: AWS Storage Gateway requires that you authenticate every request you send; this topic describes how sign such a request.</li> <li> <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/APIErrorResponses.html">Error Responses</a>: Provides reference information about AWS Storage Gateway errors.</li> <li> <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/AWSStorageGatewayAPIOperations.html">Operations in AWS Storage Gateway</a>: Contains detailed descriptions of all AWS Storage Gateway operations, their request parameters, response elements, possible errors, and examples of requests and responses.</li> <li> <a href="http://docs.aws.amazon.com/general/latest/gr/index.html?rande.html">AWS Storage Gateway Regions and Endpoints</a>: Provides a list of each of the regions and endpoints available for use with AWS Storage Gateway. </li> </ul>',
  'shapes' => [
    'ActivateGatewayInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>ActivateGatewayInput$ActivationKey</a> </li> <li> <a>GatewayName</a> </li> <li> <a>ActivateGatewayInput$GatewayRegion</a> </li> <li> <a>ActivateGatewayInput$GatewayTimezone</a> </li> <li> <a>ActivateGatewayInput$GatewayType</a> </li> <li> <a>ActivateGatewayInput$TapeDriveType</a> </li> <li> <a>ActivateGatewayInput$MediumChangerType</a> </li> </ul>',
      'refs' => [],
    ],
    'ActivateGatewayOutput' => [
      'base' => '<p>AWS Storage Gateway returns the Amazon Resource Name (ARN] of the activated gateway. It is a string made of information such as your account, gateway name, and region. This ARN is used to reference the gateway in other API operations as well as resource-based authorization.</p>',
      'refs' => [],
    ],
    'ActivationKey' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$ActivationKey' => '<p>Your gateway activation key. You can obtain the activation key by sending an HTTP GET request with redirects enabled to the gateway IP address (port 80]. The redirect URL returned in the response provides you the activation key for your gateway in the query string parameter <code>activationKey</code>. It may also include other activation-related parameters, however, these are merely defaults -- the arguments you pass to the <code>ActivateGateway</code> API call determine the actual configuration of your gateway.</p>',
      ],
    ],
    'AddCacheInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AddCacheOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AddUploadBufferInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AddUploadBufferOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AddWorkingStorageInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>AddWorkingStorageInput$DiskIds</a> </li> </ul>',
      'refs' => [],
    ],
    'AddWorkingStorageOutput' => [
      'base' => '<p>A JSON object containing the of the gateway for which working storage was configured.</p>',
      'refs' => [],
    ],
    'BandwidthDownloadRateLimit' => [
      'base' => NULL,
      'refs' => [
        'DescribeBandwidthRateLimitOutput$AverageDownloadRateLimitInBitsPerSec' => '<p>The average download bandwidth rate limit in bits per second. This field does not appear in the response if the download rate limit is not set.</p>',
        'UpdateBandwidthRateLimitInput$AverageDownloadRateLimitInBitsPerSec' => '<p>The average download bandwidth rate limit in bits per second.</p>',
      ],
    ],
    'BandwidthType' => [
      'base' => NULL,
      'refs' => [
        'DeleteBandwidthRateLimitInput$BandwidthType' => NULL,
      ],
    ],
    'BandwidthUploadRateLimit' => [
      'base' => NULL,
      'refs' => [
        'DescribeBandwidthRateLimitOutput$AverageUploadRateLimitInBitsPerSec' => '<p>The average upload bandwidth rate limit in bits per second. This field does not appear in the response if the upload rate limit is not set.</p>',
        'UpdateBandwidthRateLimitInput$AverageUploadRateLimitInBitsPerSec' => '<p>The average upload bandwidth rate limit in bits per second.</p>',
      ],
    ],
    'CachediSCSIVolume' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolumes$member' => NULL,
      ],
    ],
    'CachediSCSIVolumes' => [
      'base' => NULL,
      'refs' => [
        'DescribeCachediSCSIVolumesOutput$CachediSCSIVolumes' => '<p>An array of objects where each object contains metadata about one cached volume.</p>',
      ],
    ],
    'CancelArchivalInput' => [
      'base' => '<p>CancelArchivalInput</p>',
      'refs' => [],
    ],
    'CancelArchivalOutput' => [
      'base' => '<p>CancelArchivalOutput</p>',
      'refs' => [],
    ],
    'CancelRetrievalInput' => [
      'base' => '<p>CancelRetrievalInput</p>',
      'refs' => [],
    ],
    'CancelRetrievalOutput' => [
      'base' => '<p>CancelRetrievalOutput</p>',
      'refs' => [],
    ],
    'ChapCredentials' => [
      'base' => NULL,
      'refs' => [
        'DescribeChapCredentialsOutput$ChapCredentials' => '<p>An array of <a>ChapInfo</a> objects that represent CHAP credentials. Each object in the array contains CHAP credential information for one target-initiator pair. If no CHAP credentials are set, an empty array is returned. CHAP credential information is provided in a JSON object with the following fields:</p> <ul> <li> <p><b>InitiatorName</b>: The iSCSI initiator that connects to the target.</p> </li> <li> <p><b>SecretToAuthenticateInitiator</b>: The secret key that the initiator (e.g. Windows client] must provide to participate in mutual CHAP with the target.</p> </li> <li> <p><b>SecretToAuthenticateTarget</b>: The secret key that the target must provide to participate in mutual CHAP with the initiator (e.g. Windows client].</p> </li> <li> <p><b>TargetARN</b>: The Amazon Resource Name (ARN] of the storage volume.</p> </li> </ul>',
      ],
    ],
    'ChapInfo' => [
      'base' => '<p>Describes Challenge-Handshake Authentication Protocol (CHAP] information that supports authentication between your gateway and iSCSI initiators.</p>',
      'refs' => [
        'ChapCredentials$member' => NULL,
      ],
    ],
    'ChapSecret' => [
      'base' => NULL,
      'refs' => [
        'ChapInfo$SecretToAuthenticateInitiator' => '<p>The secret key that the initiator (e.g. Windows client] must provide to participate in mutual CHAP with the target.</p>',
        'ChapInfo$SecretToAuthenticateTarget' => '<p>The secret key that the target must provide to participate in mutual CHAP with the initiator (e.g. Windows client].</p>',
        'UpdateChapCredentialsInput$SecretToAuthenticateInitiator' => '<p>The secret key that the initiator (e.g. Windows client] must provide to participate in mutual CHAP with the target.</p>',
        'UpdateChapCredentialsInput$SecretToAuthenticateTarget' => '<p>The secret key that the target must provide to participate in mutual CHAP with the initiator (e.g. Windows client].</p>',
      ],
    ],
    'ClientToken' => [
      'base' => NULL,
      'refs' => [
        'CreateCachediSCSIVolumeInput$ClientToken' => NULL,
        'CreateTapesInput$ClientToken' => '<p>A unique identifier that you use to retry a request. If you retry a request, use the same <code>ClientToken</code> you specified in the initial request.</p> <note>Using the same <code>ClientToken</code> prevents creating the tape multiple times.</note>',
      ],
    ],
    'CreateCachediSCSIVolumeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateCachediSCSIVolumeOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSnapshotFromVolumeRecoveryPointInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSnapshotFromVolumeRecoveryPointOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateSnapshotInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>CreateSnapshotInput$SnapshotDescription</a> </li> <li> <a>CreateSnapshotInput$VolumeARN</a> </li> </ul>',
      'refs' => [],
    ],
    'CreateSnapshotOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'CreateStorediSCSIVolumeInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>CreateStorediSCSIVolumeInput$DiskId</a> </li> <li> <a>CreateStorediSCSIVolumeInput$NetworkInterfaceId</a> </li> <li> <a>CreateStorediSCSIVolumeInput$PreserveExistingData</a> </li> <li> <a>CreateStorediSCSIVolumeInput$SnapshotId</a> </li> <li> <a>CreateStorediSCSIVolumeInput$TargetName</a> </li> </ul>',
      'refs' => [],
    ],
    'CreateStorediSCSIVolumeOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'CreateTapesInput' => [
      'base' => '<p>CreateTapesInput</p>',
      'refs' => [],
    ],
    'CreateTapesOutput' => [
      'base' => '<p>CreateTapeOutput</p>',
      'refs' => [],
    ],
    'DayOfWeek' => [
      'base' => NULL,
      'refs' => [
        'DescribeMaintenanceStartTimeOutput$DayOfWeek' => NULL,
        'UpdateMaintenanceStartTimeInput$DayOfWeek' => '<p>The maintenance start time day of the week.</p>',
      ],
    ],
    'DeleteBandwidthRateLimitInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteBandwidthRateLimitOutput' => [
      'base' => '<p>A JSON object containing the of the gateway whose bandwidth rate information was deleted.</p>',
      'refs' => [],
    ],
    'DeleteChapCredentialsInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>DeleteChapCredentialsInput$InitiatorName</a> </li> <li> <a>DeleteChapCredentialsInput$TargetARN</a> </li> </ul>',
      'refs' => [],
    ],
    'DeleteChapCredentialsOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'DeleteGatewayInput' => [
      'base' => '<p>A JSON object containing the of the gateway to delete.</p>',
      'refs' => [],
    ],
    'DeleteGatewayOutput' => [
      'base' => '<p>A JSON object containing the of the deleted gateway.</p>',
      'refs' => [],
    ],
    'DeleteSnapshotScheduleInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteSnapshotScheduleOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteTapeArchiveInput' => [
      'base' => '<p>DeleteTapeArchiveInput</p>',
      'refs' => [],
    ],
    'DeleteTapeArchiveOutput' => [
      'base' => '<p>DeleteTapeArchiveOutput</p>',
      'refs' => [],
    ],
    'DeleteTapeInput' => [
      'base' => '<p>DeleteTapeInput</p>',
      'refs' => [],
    ],
    'DeleteTapeOutput' => [
      'base' => '<p>DeleteTapeOutput</p>',
      'refs' => [],
    ],
    'DeleteVolumeInput' => [
      'base' => '<p>A JSON object containing the <a>DeleteVolumeInput$VolumeARN</a> to delete.</p>',
      'refs' => [],
    ],
    'DeleteVolumeOutput' => [
      'base' => '<p>A JSON object containing the of the storage volume that was deleted</p>',
      'refs' => [],
    ],
    'DescribeBandwidthRateLimitInput' => [
      'base' => '<p>A JSON object containing the of the gateway.</p>',
      'refs' => [],
    ],
    'DescribeBandwidthRateLimitOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'DescribeCacheInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeCacheOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeCachediSCSIVolumesInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeCachediSCSIVolumesOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'DescribeChapCredentialsInput' => [
      'base' => '<p>A JSON object containing the Amazon Resource Name (ARN] of the iSCSI volume target.</p>',
      'refs' => [],
    ],
    'DescribeChapCredentialsOutput' => [
      'base' => '<p>A JSON object containing a .</p>',
      'refs' => [],
    ],
    'DescribeGatewayInformationInput' => [
      'base' => '<p>A JSON object containing the of the gateway.</p>',
      'refs' => [],
    ],
    'DescribeGatewayInformationOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'DescribeMaintenanceStartTimeInput' => [
      'base' => '<p>A JSON object containing the of the gateway.</p>',
      'refs' => [],
    ],
    'DescribeMaintenanceStartTimeOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeSnapshotScheduleInput' => [
      'base' => '<p>A JSON object containing the <a>DescribeSnapshotScheduleInput$VolumeARN</a> of the volume.</p>',
      'refs' => [],
    ],
    'DescribeSnapshotScheduleOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeStorediSCSIVolumesInput' => [
      'base' => '<p>A JSON Object containing a list of <a>DescribeStorediSCSIVolumesInput$VolumeARNs</a>.</p>',
      'refs' => [],
    ],
    'DescribeStorediSCSIVolumesOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeTapeArchivesInput' => [
      'base' => '<p>DescribeTapeArchivesInput</p>',
      'refs' => [],
    ],
    'DescribeTapeArchivesOutput' => [
      'base' => '<p>DescribeTapeArchivesOutput</p>',
      'refs' => [],
    ],
    'DescribeTapeRecoveryPointsInput' => [
      'base' => '<p>DescribeTapeRecoveryPointsInput</p>',
      'refs' => [],
    ],
    'DescribeTapeRecoveryPointsOutput' => [
      'base' => '<p>DescribeTapeRecoveryPointsOutput</p>',
      'refs' => [],
    ],
    'DescribeTapesInput' => [
      'base' => '<p>DescribeTapesInput</p>',
      'refs' => [],
    ],
    'DescribeTapesOutput' => [
      'base' => '<p>DescribeTapesOutput</p>',
      'refs' => [],
    ],
    'DescribeUploadBufferInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeUploadBufferOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeVTLDevicesInput' => [
      'base' => '<p>DescribeVTLDevicesInput</p>',
      'refs' => [],
    ],
    'DescribeVTLDevicesOutput' => [
      'base' => '<p>DescribeVTLDevicesOutput</p>',
      'refs' => [],
    ],
    'DescribeWorkingStorageInput' => [
      'base' => '<p>A JSON object containing the of the gateway.</p>',
      'refs' => [],
    ],
    'DescribeWorkingStorageOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotScheduleOutput$Description' => NULL,
        'UpdateSnapshotScheduleInput$Description' => '<p>Optional description of the snapshot that overwrites the existing description.</p>',
      ],
    ],
    'DeviceType' => [
      'base' => NULL,
      'refs' => [
        'UpdateVTLDeviceTypeInput$DeviceType' => '<p>The type of medium changer you want to select.</p> <p><i>Valid Values</i>: "STK-L700", "AWS-Gateway-VTL"</p>',
      ],
    ],
    'DeviceiSCSIAttributes' => [
      'base' => '<p>Lists iSCSI information about a VTL device.</p>',
      'refs' => [
        'VTLDevice$DeviceiSCSIAttributes' => '<p>A list of iSCSI information about a VTL device.</p>',
      ],
    ],
    'DisableGatewayInput' => [
      'base' => '<p>DisableGatewayInput</p>',
      'refs' => [],
    ],
    'DisableGatewayOutput' => [
      'base' => '<p>DisableGatewayOutput</p>',
      'refs' => [],
    ],
    'Disk' => [
      'base' => NULL,
      'refs' => [
        'Disks$member' => NULL,
      ],
    ],
    'DiskAllocationType' => [
      'base' => NULL,
      'refs' => [
        'Disk$DiskAllocationType' => NULL,
      ],
    ],
    'DiskId' => [
      'base' => NULL,
      'refs' => [
        'CreateStorediSCSIVolumeInput$DiskId' => '<p>The unique identifier for the gateway local disk that is configured as a stored volume. Use <a href="http://docs.aws.amazon.com/storagegateway/latest/userguide/API_ListLocalDisks.html">ListLocalDisks</a> to list disk IDs for a gateway.</p>',
        'Disk$DiskId' => NULL,
        'DiskIds$member' => NULL,
        'StorediSCSIVolume$VolumeDiskId' => NULL,
      ],
    ],
    'DiskIds' => [
      'base' => NULL,
      'refs' => [
        'AddCacheInput$DiskIds' => NULL,
        'AddUploadBufferInput$DiskIds' => NULL,
        'AddWorkingStorageInput$DiskIds' => '<p>An array of strings that identify disks that are to be configured as working storage. Each string have a minimum length of 1 and maximum length of 300. You can get the disk IDs from the <a>ListLocalDisks</a> API.</p>',
        'DescribeCacheOutput$DiskIds' => NULL,
        'DescribeUploadBufferOutput$DiskIds' => NULL,
        'DescribeWorkingStorageOutput$DiskIds' => '<p>An array of the gateway\'s local disk IDs that are configured as working storage. Each local disk ID is specified as a string (minimum length of 1 and maximum length of 300]. If no local disks are configured as working storage, then the DiskIds array is empty.</p>',
      ],
    ],
    'Disks' => [
      'base' => NULL,
      'refs' => [
        'ListLocalDisksOutput$Disks' => NULL,
      ],
    ],
    'DoubleObject' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeProgress' => NULL,
        'StorediSCSIVolume$VolumeProgress' => NULL,
        'Tape$Progress' => '<p>For archiving virtual tapes, indicates how much data remains to be uploaded before archiving is complete.</p> <p>Range: 0 (not started] to 100 (complete].</p>',
      ],
    ],
    'ErrorCode' => [
      'base' => NULL,
      'refs' => [
        'StorageGatewayError$errorCode' => '<p>Additional information about the error.</p>',
      ],
    ],
    'GatewayARN' => [
      'base' => '<p>The Amazon Resource Name (ARN] of the gateway. Use the <a>ListGateways</a> operation to return a list of gateways for your account and region.</p>',
      'refs' => [
        'ActivateGatewayOutput$GatewayARN' => NULL,
        'AddCacheInput$GatewayARN' => NULL,
        'AddCacheOutput$GatewayARN' => NULL,
        'AddUploadBufferInput$GatewayARN' => NULL,
        'AddUploadBufferOutput$GatewayARN' => NULL,
        'AddWorkingStorageInput$GatewayARN' => NULL,
        'AddWorkingStorageOutput$GatewayARN' => NULL,
        'CancelArchivalInput$GatewayARN' => NULL,
        'CancelRetrievalInput$GatewayARN' => NULL,
        'CreateCachediSCSIVolumeInput$GatewayARN' => NULL,
        'CreateStorediSCSIVolumeInput$GatewayARN' => NULL,
        'CreateTapesInput$GatewayARN' => '<p>The unique Amazon Resource Name(ARN] that represents the gateway to associate the virtual tapes with. Use the <a>ListGateways</a> operation to return a list of gateways for your account and region.</p>',
        'DeleteBandwidthRateLimitInput$GatewayARN' => NULL,
        'DeleteBandwidthRateLimitOutput$GatewayARN' => NULL,
        'DeleteGatewayInput$GatewayARN' => NULL,
        'DeleteGatewayOutput$GatewayARN' => NULL,
        'DeleteTapeInput$GatewayARN' => '<p>The unique Amazon Resource Name (ARN] of the gateway that the virtual tape to delete is associated with. Use the <a>ListGateways</a> operation to return a list of gateways for your account and region.</p>',
        'DescribeBandwidthRateLimitInput$GatewayARN' => NULL,
        'DescribeBandwidthRateLimitOutput$GatewayARN' => NULL,
        'DescribeCacheInput$GatewayARN' => NULL,
        'DescribeCacheOutput$GatewayARN' => NULL,
        'DescribeGatewayInformationInput$GatewayARN' => NULL,
        'DescribeGatewayInformationOutput$GatewayARN' => NULL,
        'DescribeMaintenanceStartTimeInput$GatewayARN' => NULL,
        'DescribeMaintenanceStartTimeOutput$GatewayARN' => NULL,
        'DescribeTapeRecoveryPointsInput$GatewayARN' => NULL,
        'DescribeTapeRecoveryPointsOutput$GatewayARN' => NULL,
        'DescribeTapesInput$GatewayARN' => NULL,
        'DescribeUploadBufferInput$GatewayARN' => NULL,
        'DescribeUploadBufferOutput$GatewayARN' => NULL,
        'DescribeVTLDevicesInput$GatewayARN' => NULL,
        'DescribeVTLDevicesOutput$GatewayARN' => NULL,
        'DescribeWorkingStorageInput$GatewayARN' => NULL,
        'DescribeWorkingStorageOutput$GatewayARN' => NULL,
        'DisableGatewayInput$GatewayARN' => NULL,
        'DisableGatewayOutput$GatewayARN' => '<p>The unique Amazon Resource Name of the disabled gateway.</p>',
        'GatewayInfo$GatewayARN' => NULL,
        'ListLocalDisksInput$GatewayARN' => NULL,
        'ListLocalDisksOutput$GatewayARN' => NULL,
        'ListVolumeRecoveryPointsInput$GatewayARN' => NULL,
        'ListVolumeRecoveryPointsOutput$GatewayARN' => NULL,
        'ListVolumesInput$GatewayARN' => NULL,
        'ListVolumesOutput$GatewayARN' => NULL,
        'ResetCacheInput$GatewayARN' => NULL,
        'ResetCacheOutput$GatewayARN' => NULL,
        'RetrieveTapeArchiveInput$GatewayARN' => '<p>The Amazon Resource Name (ARN] of the gateway you want to retrieve the virtual tape to. Use the <a>ListGateways</a> operation to return a list of gateways for your account and region.</p> <p>You retrieve archived virtual tapes to only one gateway and the gateway must be a gateway-VTL.</p>',
        'RetrieveTapeRecoveryPointInput$GatewayARN' => NULL,
        'ShutdownGatewayInput$GatewayARN' => NULL,
        'ShutdownGatewayOutput$GatewayARN' => NULL,
        'StartGatewayInput$GatewayARN' => NULL,
        'StartGatewayOutput$GatewayARN' => NULL,
        'TapeArchive$RetrievedTo' => '<p>The Amazon Resource Name (ARN] of the gateway-VTL that the virtual tape is being retrieved to. </p> <p>The virtual tape is retrieved from the virtual tape shelf (VTS].</p>',
        'UpdateBandwidthRateLimitInput$GatewayARN' => NULL,
        'UpdateBandwidthRateLimitOutput$GatewayARN' => NULL,
        'UpdateGatewayInformationInput$GatewayARN' => NULL,
        'UpdateGatewayInformationOutput$GatewayARN' => NULL,
        'UpdateGatewaySoftwareNowInput$GatewayARN' => NULL,
        'UpdateGatewaySoftwareNowOutput$GatewayARN' => NULL,
        'UpdateMaintenanceStartTimeInput$GatewayARN' => NULL,
        'UpdateMaintenanceStartTimeOutput$GatewayARN' => NULL,
      ],
    ],
    'GatewayId' => [
      'base' => NULL,
      'refs' => [
        'DescribeGatewayInformationOutput$GatewayId' => '<p>The gateway ID.</p>',
      ],
    ],
    'GatewayInfo' => [
      'base' => NULL,
      'refs' => [
        'Gateways$member' => NULL,
      ],
    ],
    'GatewayName' => [
      'base' => '<p>A unique identifier for your gateway. This name becomes part of the gateway Amazon Resources Name (ARN] which is what you use as an input to other operations.</p>',
      'refs' => [
        'ActivateGatewayInput$GatewayName' => NULL,
        'UpdateGatewayInformationInput$GatewayName' => NULL,
      ],
    ],
    'GatewayNetworkInterfaces' => [
      'base' => NULL,
      'refs' => [
        'DescribeGatewayInformationOutput$GatewayNetworkInterfaces' => '<p>A <a>NetworkInterface</a> array that contains descriptions of the gateway network interfaces.</p>',
      ],
    ],
    'GatewayOperationalState' => [
      'base' => NULL,
      'refs' => [
        'GatewayInfo$GatewayOperationalState' => NULL,
      ],
    ],
    'GatewayState' => [
      'base' => NULL,
      'refs' => [
        'DescribeGatewayInformationOutput$GatewayState' => '<p>One of the values that indicates the operating state of the gateway.</p>',
      ],
    ],
    'GatewayTimezone' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$GatewayTimezone' => '<p>One of the values that indicates the time zone you want to set for the gateway. The time zone is used, for example, for scheduling snapshots and your gateway\'s maintenance schedule.</p>',
        'DescribeGatewayInformationOutput$GatewayTimezone' => '<p>One of the values that indicates the time zone configured for the gateway.</p>',
        'DescribeMaintenanceStartTimeOutput$Timezone' => NULL,
        'DescribeSnapshotScheduleOutput$Timezone' => NULL,
        'UpdateGatewayInformationInput$GatewayTimezone' => NULL,
      ],
    ],
    'GatewayType' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$GatewayType' => '<p>One of the values that defines the type of gateway to activate. The type specified is critical to all later functions of the gateway and cannot be changed after activation. The default value is <code>STORED</code>. </p>',
        'DescribeGatewayInformationOutput$GatewayType' => '<p>TBD</p>',
        'GatewayInfo$GatewayType' => NULL,
      ],
    ],
    'Gateways' => [
      'base' => NULL,
      'refs' => [
        'ListGatewaysOutput$Gateways' => NULL,
      ],
    ],
    'HourOfDay' => [
      'base' => NULL,
      'refs' => [
        'DescribeMaintenanceStartTimeOutput$HourOfDay' => NULL,
        'DescribeSnapshotScheduleOutput$StartAt' => NULL,
        'UpdateMaintenanceStartTimeInput$HourOfDay' => '<p>The hour component of the maintenance start time represented as <emphasis>hh</emphasis>, where <i>hh</i> is the hour (00 to 23]. The hour of the day is in the time zone of the gateway.</p>',
        'UpdateSnapshotScheduleInput$StartAt' => '<p>The hour of the day at which the snapshot schedule begins represented as <i>hh</i>, where <i>hh</i> is the hour (0 to 23]. The hour of the day is in the time zone of the gateway.</p>',
      ],
    ],
    'InternalServerError' => [
      'base' => '<p>An internal server error has occurred during the request. See the error and message fields for more information.</p>',
      'refs' => [],
    ],
    'InvalidGatewayRequestException' => [
      'base' => '<p>An exception occurred because an invalid gateway request was issued to the service. See the error and message fields for more information.</p>',
      'refs' => [],
    ],
    'IqnName' => [
      'base' => NULL,
      'refs' => [
        'ChapInfo$InitiatorName' => '<p>The iSCSI initiator that connects to the target.</p>',
        'DeleteChapCredentialsInput$InitiatorName' => '<p>The iSCSI initiator that connects to the target.</p>',
        'DeleteChapCredentialsOutput$InitiatorName' => '<p>The iSCSI initiator that connects to the target.</p>',
        'UpdateChapCredentialsInput$InitiatorName' => '<p>The iSCSI initiator that connects to the target.</p>',
        'UpdateChapCredentialsOutput$InitiatorName' => '<p>The iSCSI initiator that connects to the target. This is the same initiator name specified in the request.</p>',
      ],
    ],
    'ListGatewaysInput' => [
      'base' => '<p>A JSON object containing zero or more of the following fields:</p> <ul> <li> <a>ListGatewaysInput$Limit</a> </li> <li> <a>ListGatewaysInput$Marker</a> </li> </ul>',
      'refs' => [],
    ],
    'ListGatewaysOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListLocalDisksInput' => [
      'base' => '<p>A JSON object containing the of the gateway.</p>',
      'refs' => [],
    ],
    'ListLocalDisksOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListVolumeRecoveryPointsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListVolumeRecoveryPointsOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListVolumesInput' => [
      'base' => '<p>A JSON object that contains one or more of the following fields:</p> <ul> <li> <a>ListVolumesInput$Limit</a> </li> <li> <a>ListVolumesInput$Marker</a> </li> </ul>',
      'refs' => [],
    ],
    'ListVolumesOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Marker' => [
      'base' => NULL,
      'refs' => [
        'DescribeTapeArchivesInput$Marker' => '<p>An opaque string that indicates the position at which to begin describing virtual tapes.</p>',
        'DescribeTapeArchivesOutput$Marker' => '<p>An opaque string that indicates the position at which the virtual tapes that were fetched for description ended. Use this marker in your next request to fetch the next set of virtual tapes in the virtual tape shelf (VTS]. If there are no more virtual tapes to describe, this field does not appear in the response. </p>',
        'DescribeTapeRecoveryPointsInput$Marker' => '<p>An opaque string that indicates the position at which to begin describing the virtual tape recovery points.</p>',
        'DescribeTapeRecoveryPointsOutput$Marker' => '<p>An opaque string that indicates the position at which the virtual tape recovery points that were listed for description ended.</p> <p>Use this marker in your next request to list the next set of virtual tape recovery points in the list. If there are no more recovery points to describe, this field does not appear in the response.</p>',
        'DescribeTapesInput$Marker' => '<p>A marker value, obtained in a previous call to <code>DescribeTapes</code>. This marker indicates which page of results to retrieve. </p> <p>If not specified, the first page of results is retrieved.</p>',
        'DescribeTapesOutput$Marker' => '<p>An opaque string which can be used as part of a subsequent DescribeTapes call to retrieve the next page of results. </p> <p>If a response does not contain a marker, then there are no more results to be retrieved.</p>',
        'DescribeVTLDevicesInput$Marker' => '<p>An opaque string that indicates the position at which to begin describing the VTL devices.</p>',
        'DescribeVTLDevicesOutput$Marker' => '<p>An opaque string that indicates the position at which the VTL devices that were fetched for description ended. Use the marker in your next request to fetch the next set of VTL devices in the list. If there are no more VTL devices to describe, this field does not appear in the response.</p>',
        'ListGatewaysInput$Marker' => '<p>An opaque string that indicates the position at which to begin the returned list of gateways.</p>',
        'ListGatewaysOutput$Marker' => NULL,
        'ListVolumesInput$Marker' => '<p>A string that indicates the position at which to begin the returned list of volumes. Obtain the marker from the response of a previous List iSCSI Volumes request.</p>',
        'ListVolumesOutput$Marker' => NULL,
      ],
    ],
    'MediumChangerType' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$MediumChangerType' => '<p>The value that indicates the type of medium changer to use for gateway-VTL. This field is optional.</p> <p><i>Valid Values</i>: "STK-L700", "AWS-Gateway-VTL"</p>',
      ],
    ],
    'MinuteOfHour' => [
      'base' => NULL,
      'refs' => [
        'DescribeMaintenanceStartTimeOutput$MinuteOfHour' => NULL,
        'UpdateMaintenanceStartTimeInput$MinuteOfHour' => '<p>The minute component of the maintenance start time represented as <i>mm</i>, where <i>mm</i> is the minute (00 to 59]. The minute of the hour is in the time zone of the gateway.</p>',
      ],
    ],
    'NetworkInterface' => [
      'base' => '<p>Describes a gateway\'s network interface.</p>',
      'refs' => [
        'GatewayNetworkInterfaces$member' => NULL,
      ],
    ],
    'NetworkInterfaceId' => [
      'base' => NULL,
      'refs' => [
        'CreateCachediSCSIVolumeInput$NetworkInterfaceId' => NULL,
        'CreateStorediSCSIVolumeInput$NetworkInterfaceId' => '<p>The network interface of the gateway on which to expose the iSCSI target. Only IPv4 addresses are accepted. Use <a>DescribeGatewayInformation</a> to get a list of the network interfaces available on a gateway.</p> <p><i>Valid Values</i>: A valid IP address.</p>',
        'DeviceiSCSIAttributes$NetworkInterfaceId' => '<p>The network interface identifier of the VTL device.</p>',
        'VolumeiSCSIAttributes$NetworkInterfaceId' => '<p>The network interface identifier.</p>',
      ],
    ],
    'NextUpdateAvailabilityDate' => [
      'base' => NULL,
      'refs' => [
        'DescribeGatewayInformationOutput$NextUpdateAvailabilityDate' => '<p>The date at which an update to the gateway is available. This date is in the time zone of the gateway. If the gateway is not available for an update this field is not returned in the response.</p>',
      ],
    ],
    'NumTapesToCreate' => [
      'base' => NULL,
      'refs' => [
        'CreateTapesInput$NumTapesToCreate' => '<p>The number of virtual tapes you want to create.</p>',
      ],
    ],
    'PositiveIntObject' => [
      'base' => NULL,
      'refs' => [
        'DescribeTapeArchivesInput$Limit' => '<p>Specifies that the number of virtual tapes descried be limited to the specified number.</p>',
        'DescribeTapeRecoveryPointsInput$Limit' => '<p>Specifies that the number of virtual tape recovery points that are described be limited to the specified number.</p>',
        'DescribeTapesInput$Limit' => '<p>Specifies that the number of virtual tapes described be limited to the specified number.</p> <note>Amazon Web Services may impose its own limit, if this field is not set.</note>',
        'DescribeVTLDevicesInput$Limit' => '<p>Specifies that the number of VTL devices described be limited to the specified number.</p>',
        'ListGatewaysInput$Limit' => '<p>Specifies that the list of gateways returned be limited to the specified number of items.</p>',
        'ListVolumesInput$Limit' => '<p>Specifies that the list of volumes returned be limited to the specified number of items.</p>',
        'VolumeiSCSIAttributes$LunNumber' => '<p>The logical disk number.</p>',
      ],
    ],
    'RecurrenceInHours' => [
      'base' => NULL,
      'refs' => [
        'DescribeSnapshotScheduleOutput$RecurrenceInHours' => NULL,
        'UpdateSnapshotScheduleInput$RecurrenceInHours' => '<p>Frequency of snapshots. Specify the number of hours between snapshots.</p>',
      ],
    ],
    'RegionId' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$GatewayRegion' => '<p>One of the values that indicates the region where you want to store the snapshot backups. The gateway region specified must be the same region as the region in your <code>Host</code> header in the request. For more information about available regions and endpoints for AWS Storage Gateway, see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#sg_region">Regions and Endpoints</a> in the <i>Amazon Web Services Glossary</i>.</p> <p><i>Valid Values</i>: "us-east-1", "us-west-1", "us-west-2", "eu-west-1", "eu-central-1", "ap-northeast-1", "ap-southeast-1", "ap-southeast-2", "sa-east-1"</p>',
      ],
    ],
    'ResetCacheInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ResetCacheOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RetrieveTapeArchiveInput' => [
      'base' => '<p>RetrieveTapeArchiveInput</p>',
      'refs' => [],
    ],
    'RetrieveTapeArchiveOutput' => [
      'base' => '<p>RetrieveTapeArchiveOutput</p>',
      'refs' => [],
    ],
    'RetrieveTapeRecoveryPointInput' => [
      'base' => '<p>RetrieveTapeRecoveryPointInput</p>',
      'refs' => [],
    ],
    'RetrieveTapeRecoveryPointOutput' => [
      'base' => '<p>RetrieveTapeRecoveryPointOutput</p>',
      'refs' => [],
    ],
    'ShutdownGatewayInput' => [
      'base' => '<p>A JSON object containing the of the gateway to shut down.</p>',
      'refs' => [],
    ],
    'ShutdownGatewayOutput' => [
      'base' => '<p>A JSON object containing the of the gateway that was shut down.</p>',
      'refs' => [],
    ],
    'SnapshotDescription' => [
      'base' => NULL,
      'refs' => [
        'CreateSnapshotFromVolumeRecoveryPointInput$SnapshotDescription' => NULL,
        'CreateSnapshotInput$SnapshotDescription' => '<p>Textual description of the snapshot that appears in the Amazon EC2 console, Elastic Block Store snapshots panel in the <b>Description</b> field, and in the AWS Storage Gateway snapshot <b>Details</b> pane, <b>Description</b> field</p>',
      ],
    ],
    'SnapshotId' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$SourceSnapshotId' => NULL,
        'CreateCachediSCSIVolumeInput$SnapshotId' => NULL,
        'CreateSnapshotFromVolumeRecoveryPointOutput$SnapshotId' => NULL,
        'CreateSnapshotOutput$SnapshotId' => '<p>The snapshot ID that is used to refer to the snapshot in future operations such as describing snapshots (Amazon Elastic Compute Cloud API <code>DescribeSnapshots</code>] or creating a volume from a snapshot (<a>CreateStorediSCSIVolume</a>].</p>',
        'CreateStorediSCSIVolumeInput$SnapshotId' => '<p>The snapshot ID (e.g. "snap-1122aabb"] of the snapshot to restore as the new stored volume. Specify this field if you want to create the iSCSI storage volume from a snapshot otherwise do not include this field. To list snapshots for your account use <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-DescribeSnapshots.html">DescribeSnapshots</a> in the <i>Amazon Elastic Compute Cloud API Reference</i>.</p>',
        'StorediSCSIVolume$SourceSnapshotId' => NULL,
      ],
    ],
    'StartGatewayInput' => [
      'base' => '<p>A JSON object containing the of the gateway to start.</p>',
      'refs' => [],
    ],
    'StartGatewayOutput' => [
      'base' => '<p>A JSON object containing the of the gateway that was restarted.</p>',
      'refs' => [],
    ],
    'StorageGatewayError' => [
      'base' => '<p>Provides additional information about an error that was returned by the service as an or. See the <code>errorCode</code> and <code>errorDetails</code> members for more information about the error.</p>',
      'refs' => [
        'InternalServerError$error' => '<p>A <a>StorageGatewayError</a> that provides more detail about the cause of the error.</p>',
        'InvalidGatewayRequestException$error' => '<p>A <a>StorageGatewayError</a> that provides more detail about the cause of the error.</p>',
      ],
    ],
    'StorediSCSIVolume' => [
      'base' => NULL,
      'refs' => [
        'StorediSCSIVolumes$member' => NULL,
      ],
    ],
    'StorediSCSIVolumes' => [
      'base' => NULL,
      'refs' => [
        'DescribeStorediSCSIVolumesOutput$StorediSCSIVolumes' => NULL,
      ],
    ],
    'Tape' => [
      'base' => '<p>Describes a virtual tape object.</p>',
      'refs' => [
        'Tapes$member' => NULL,
      ],
    ],
    'TapeARN' => [
      'base' => NULL,
      'refs' => [
        'CancelArchivalInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape you want to cancel archiving for.</p>',
        'CancelArchivalOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape for which archiving was canceled.</p>',
        'CancelRetrievalInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape you want to cancel retrieval for.</p>',
        'CancelRetrievalOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape for which retrieval was canceled.</p>',
        'DeleteTapeArchiveInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape to delete from the virtual tape shelf (VTS].</p>',
        'DeleteTapeArchiveOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape that was deleted from the virtual tape shelf (VTS].</p>',
        'DeleteTapeInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape to delete.</p>',
        'DeleteTapeOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the deleted virtual tape.</p>',
        'RetrieveTapeArchiveInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape you want to retrieve from the virtual tape shelf (VTS]. </p>',
        'RetrieveTapeArchiveOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the retrieved virtual tape.</p>',
        'RetrieveTapeRecoveryPointInput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape for which you want to retrieve the recovery point.</p>',
        'RetrieveTapeRecoveryPointOutput$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape for which the recovery point was retrieved.</p>',
        'Tape$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape.</p>',
        'TapeARNs$member' => NULL,
        'TapeArchive$TapeARN' => '<p>The Amazon Resource Name (ARN] of an archived virtual tape.</p>',
        'TapeRecoveryPointInfo$TapeARN' => '<p>The Amazon Resource Name (ARN] of the virtual tape.</p>',
      ],
    ],
    'TapeARNs' => [
      'base' => NULL,
      'refs' => [
        'CreateTapesOutput$TapeARNs' => '<p>A list of unique Amazon Resource Named (ARN] the represents the virtual tapes that were created.</p>',
        'DescribeTapeArchivesInput$TapeARNs' => '<p>Specifies one or more unique Amazon Resource Names (ARNs] that represent the virtual tapes you want to describe. </p>',
        'DescribeTapesInput$TapeARNs' => '<p>Specifies one or more unique Amazon Resource Names (ARNs] that represent the virtual tapes you want to describe. If this parameter is not specified, AWS Storage Gateway returns a description of all virtual tapes associated with the specified gateway.</p>',
      ],
    ],
    'TapeArchive' => [
      'base' => '<p>Represents a virtual tape that is archived in the virtual tape shelf (VTS].</p>',
      'refs' => [
        'TapeArchives$member' => NULL,
      ],
    ],
    'TapeArchiveStatus' => [
      'base' => NULL,
      'refs' => [
        'TapeArchive$TapeStatus' => '<p>The current state of the archived virtual tape. </p>',
      ],
    ],
    'TapeArchives' => [
      'base' => NULL,
      'refs' => [
        'DescribeTapeArchivesOutput$TapeArchives' => '<p>An array of virtual tape objects in the virtual tape shelf (VTS]. The description includes of the Amazon Resource Name(ARN] of the virtual tapes. The information returned includes the Amazon Resource Names (ARNs] of the tapes, size of the tapes, status of the tapes, progress of the description and tape barcode.</p>',
      ],
    ],
    'TapeBarcode' => [
      'base' => NULL,
      'refs' => [
        'Tape$TapeBarcode' => '<p>The barcode that identifies a specific virtual tape.</p>',
        'TapeArchive$TapeBarcode' => '<p>The barcode that identifies the archived virtual tape.</p>',
      ],
    ],
    'TapeBarcodePrefix' => [
      'base' => NULL,
      'refs' => [
        'CreateTapesInput$TapeBarcodePrefix' => '<p>A prefix you append to the barcode of the virtual tape you are creating. This makes a barcode unique.</p> <note>The prefix must be 1 to 4 characters in length and must be upper-case letters A-Z.</note>',
      ],
    ],
    'TapeDriveType' => [
      'base' => NULL,
      'refs' => [
        'ActivateGatewayInput$TapeDriveType' => '<p>The value that indicates the type of tape drive to use for gateway-VTL. This field is optional. </p> <p><i>Valid Values</i>: "IBM-ULT3580-TD5" </p>',
      ],
    ],
    'TapeRecoveryPointInfo' => [
      'base' => '<p>Describes a recovery point. </p>',
      'refs' => [
        'TapeRecoveryPointInfos$member' => NULL,
      ],
    ],
    'TapeRecoveryPointInfos' => [
      'base' => NULL,
      'refs' => [
        'DescribeTapeRecoveryPointsOutput$TapeRecoveryPointInfos' => '<p>An array of TapeRecoveryPointInfos that are available for the specified gateway.</p>',
      ],
    ],
    'TapeRecoveryPointStatus' => [
      'base' => NULL,
      'refs' => [
        'TapeRecoveryPointInfo$TapeStatus' => NULL,
      ],
    ],
    'TapeSize' => [
      'base' => NULL,
      'refs' => [
        'CreateTapesInput$TapeSizeInBytes' => '<p>The size, in bytes, of the virtual tapes you want to create.</p> <note>The size must be gigabyte (1024*1024*1024 byte] aligned.</note>',
        'Tape$TapeSizeInBytes' => '<p>The size, in bytes, of the virtual tape.</p>',
        'TapeArchive$TapeSizeInBytes' => '<p>The size, in bytes, of the archived virtual tape.</p>',
        'TapeRecoveryPointInfo$TapeSizeInBytes' => '<p>The size, in bytes, of the virtual tapes to recover.</p>',
      ],
    ],
    'TapeStatus' => [
      'base' => NULL,
      'refs' => [
        'Tape$TapeStatus' => '<p>The current state of the virtual tape. </p>',
      ],
    ],
    'Tapes' => [
      'base' => NULL,
      'refs' => [
        'DescribeTapesOutput$Tapes' => '<p>An array of virtual tape descriptions.</p>',
      ],
    ],
    'TargetARN' => [
      'base' => NULL,
      'refs' => [
        'ChapInfo$TargetARN' => '<p>The Amazon Resource Name (ARN] of the volume.</p> <p><i>Valid Values</i>: 50 to 500 lowercase letters, numbers, periods (.], and hyphens (-].</p>',
        'CreateCachediSCSIVolumeOutput$TargetARN' => NULL,
        'CreateStorediSCSIVolumeOutput$TargetARN' => '<p>he Amazon Resource Name (ARN] of the volume target that includes the iSCSI name that initiators can use to connect to the target.</p>',
        'DeleteChapCredentialsInput$TargetARN' => '<p>The Amazon Resource Name (ARN] of the iSCSI volume target. Use the <a>DescribeStorediSCSIVolumes</a> operation to return to retrieve the TargetARN for specified VolumeARN.</p>',
        'DeleteChapCredentialsOutput$TargetARN' => '<p>The Amazon Resource Name (ARN] of the target.</p>',
        'DescribeChapCredentialsInput$TargetARN' => '<p>The Amazon Resource Name (ARN] of the iSCSI volume target. Use the <a>DescribeStorediSCSIVolumes</a> operation to return to retrieve the TargetARN for specified VolumeARN.</p>',
        'DeviceiSCSIAttributes$TargetARN' => '<p>Specifies the unique Amazon Resource Name(ARN] that encodes the iSCSI qualified name(iqn] of a tape drive or media changer target.</p>',
        'UpdateChapCredentialsInput$TargetARN' => '<p>The Amazon Resource Name (ARN] of the iSCSI volume target. Use the <a>DescribeStorediSCSIVolumes</a> operation to return to retrieve the TargetARN for specified VolumeARN.</p>',
        'UpdateChapCredentialsOutput$TargetARN' => '<p>The Amazon Resource Name (ARN] of the target. This is the same target specified in the request.</p>',
        'VolumeiSCSIAttributes$TargetARN' => '<p>The Amazon Resource Name (ARN] of the volume target.</p>',
      ],
    ],
    'TargetName' => [
      'base' => NULL,
      'refs' => [
        'CreateCachediSCSIVolumeInput$TargetName' => NULL,
        'CreateStorediSCSIVolumeInput$TargetName' => '<p>The name of the iSCSI target used by initiators to connect to the target and as a suffix for the target ARN. For example, specifying <code>TargetName</code> as <i>myvolume</i> results in the target ARN of arn:aws:storagegateway:us-east-1:111122223333:gateway/mygateway/target/iqn.1997-05.com.amazon:myvolume. The target name must be unique across all volumes of a gateway.</p>',
      ],
    ],
    'Time' => [
      'base' => NULL,
      'refs' => [
        'TapeArchive$CompletionTime' => '<p>The time that the archiving of the virtual tape was completed.</p> <p>The string format of the completion time is in the ISO8601 extended YYYY-MM-DD\'T\'HH:MM:SS\'Z\' format.</p>',
        'TapeRecoveryPointInfo$TapeRecoveryPointTime' => '<p>The time when the point-in-time view of the virtual tape was replicated for later recovery. </p> <p>The string format of the tape recovery point time is in the ISO8601 extended YYYY-MM-DD\'T\'HH:MM:SS\'Z\' format.</p>',
      ],
    ],
    'UpdateBandwidthRateLimitInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>UpdateBandwidthRateLimitInput$AverageDownloadRateLimitInBitsPerSec</a> </li> <li> <a>UpdateBandwidthRateLimitInput$AverageUploadRateLimitInBitsPerSec</a> </li> </ul>',
      'refs' => [],
    ],
    'UpdateBandwidthRateLimitOutput' => [
      'base' => '<p>A JSON object containing the of the gateway whose throttle information was updated.</p>',
      'refs' => [],
    ],
    'UpdateChapCredentialsInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>UpdateChapCredentialsInput$InitiatorName</a> </li> <li> <a>UpdateChapCredentialsInput$SecretToAuthenticateInitiator</a> </li> <li> <a>UpdateChapCredentialsInput$SecretToAuthenticateTarget</a> </li> <li> <a>UpdateChapCredentialsInput$TargetARN</a> </li> </ul>',
      'refs' => [],
    ],
    'UpdateChapCredentialsOutput' => [
      'base' => '<p>A JSON object containing the following fields:</p>',
      'refs' => [],
    ],
    'UpdateGatewayInformationInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UpdateGatewayInformationOutput' => [
      'base' => '<p>A JSON object containing the of the gateway that was updated.</p>',
      'refs' => [],
    ],
    'UpdateGatewaySoftwareNowInput' => [
      'base' => '<p>A JSON object containing the of the gateway to update.</p>',
      'refs' => [],
    ],
    'UpdateGatewaySoftwareNowOutput' => [
      'base' => '<p>A JSON object containing the of the gateway that was updated.</p>',
      'refs' => [],
    ],
    'UpdateMaintenanceStartTimeInput' => [
      'base' => '<p>A JSON object containing the following fields:</p> <ul> <li> <a>UpdateMaintenanceStartTimeInput$DayOfWeek</a> </li> <li> <a>UpdateMaintenanceStartTimeInput$HourOfDay</a> </li> <li> <a>UpdateMaintenanceStartTimeInput$MinuteOfHour</a> </li> </ul>',
      'refs' => [],
    ],
    'UpdateMaintenanceStartTimeOutput' => [
      'base' => '<p>A JSON object containing the of the gateway whose maintenance start time is updated.</p>',
      'refs' => [],
    ],
    'UpdateSnapshotScheduleInput' => [
      'base' => '<p>A JSON object containing one or more of the following fields:</p> <ul> <li> <a>UpdateSnapshotScheduleInput$Description</a> </li> <li> <a>UpdateSnapshotScheduleInput$RecurrenceInHours</a> </li> <li> <a>UpdateSnapshotScheduleInput$StartAt</a> </li> <li> <a>UpdateSnapshotScheduleInput$VolumeARN</a> </li> </ul>',
      'refs' => [],
    ],
    'UpdateSnapshotScheduleOutput' => [
      'base' => '<p>A JSON object containing the of the updated storage volume.</p>',
      'refs' => [],
    ],
    'UpdateVTLDeviceTypeInput' => [
      'base' => '<p>UpdateVTLDeviceTypeInput</p>',
      'refs' => [],
    ],
    'UpdateVTLDeviceTypeOutput' => [
      'base' => '<p>UpdateVTLDeviceTypeOutput</p>',
      'refs' => [],
    ],
    'VTLDevice' => [
      'base' => '<p> Represents a device object associated with a gateway-VTL. </p>',
      'refs' => [
        'VTLDevices$member' => NULL,
      ],
    ],
    'VTLDeviceARN' => [
      'base' => NULL,
      'refs' => [
        'Tape$VTLDevice' => '<p>The virtual tape library (VTL] device that the virtual tape is associated with.</p>',
        'UpdateVTLDeviceTypeInput$VTLDeviceARN' => '<p>The Amazon Resource Name (ARN] of the medium changer you want to select.</p>',
        'UpdateVTLDeviceTypeOutput$VTLDeviceARN' => '<p>The Amazon Resource Name (ARN] of the medium changer you have selected.</p>',
        'VTLDevice$VTLDeviceARN' => '<p>Specifies the unique Amazon Resource Name (ARN] of the device (tape drive or media changer].</p>',
        'VTLDeviceARNs$member' => NULL,
      ],
    ],
    'VTLDeviceARNs' => [
      'base' => NULL,
      'refs' => [
        'DescribeVTLDevicesInput$VTLDeviceARNs' => '<p>An array of strings, where each string represents the Amazon Resource Name (ARN] of a VTL device.</p> <note>All of the specified VTL devices must be from the same gateway. If no VTL devices are specified, the result will contain all devices on the specified gateway.</note>',
      ],
    ],
    'VTLDeviceProductIdentifier' => [
      'base' => NULL,
      'refs' => [
        'VTLDevice$VTLDeviceProductIdentifier' => NULL,
      ],
    ],
    'VTLDeviceType' => [
      'base' => NULL,
      'refs' => [
        'VTLDevice$VTLDeviceType' => NULL,
      ],
    ],
    'VTLDeviceVendor' => [
      'base' => NULL,
      'refs' => [
        'VTLDevice$VTLDeviceVendor' => NULL,
      ],
    ],
    'VTLDevices' => [
      'base' => NULL,
      'refs' => [
        'DescribeVTLDevicesOutput$VTLDevices' => '<p>An array of VTL device objects composed of the Amazon Resource Name(ARN] of the VTL devices.</p>',
      ],
    ],
    'VolumeARN' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeARN' => NULL,
        'CreateCachediSCSIVolumeOutput$VolumeARN' => NULL,
        'CreateSnapshotFromVolumeRecoveryPointInput$VolumeARN' => NULL,
        'CreateSnapshotFromVolumeRecoveryPointOutput$VolumeARN' => NULL,
        'CreateSnapshotInput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the volume. Use the <a>ListVolumes</a> operation to return a list of gateway volumes.</p>',
        'CreateSnapshotOutput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the volume of which the snapshot was taken.</p>',
        'CreateStorediSCSIVolumeOutput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the configured volume.</p>',
        'DeleteSnapshotScheduleInput$VolumeARN' => NULL,
        'DeleteSnapshotScheduleOutput$VolumeARN' => NULL,
        'DeleteVolumeInput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the volume. Use the <a>ListVolumes</a> operation to return a list of gateway volumes.</p>',
        'DeleteVolumeOutput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the storage volume that was deleted. It is the same ARN you provided in the request.</p>',
        'DescribeSnapshotScheduleInput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the volume. Use the <a>ListVolumes</a> operation to return a list of gateway volumes.</p>',
        'DescribeSnapshotScheduleOutput$VolumeARN' => NULL,
        'StorediSCSIVolume$VolumeARN' => NULL,
        'UpdateSnapshotScheduleInput$VolumeARN' => '<p>The Amazon Resource Name (ARN] of the volume. Use the <a>ListVolumes</a> operation to return a list of gateway volumes.</p>',
        'UpdateSnapshotScheduleOutput$VolumeARN' => NULL,
        'VolumeARNs$member' => NULL,
        'VolumeInfo$VolumeARN' => NULL,
        'VolumeRecoveryPointInfo$VolumeARN' => NULL,
      ],
    ],
    'VolumeARNs' => [
      'base' => NULL,
      'refs' => [
        'DescribeCachediSCSIVolumesInput$VolumeARNs' => NULL,
        'DescribeStorediSCSIVolumesInput$VolumeARNs' => '<p>An array of strings where each string represents the Amazon Resource Name (ARN] of a stored volume. All of the specified stored volumes must from the same gateway. Use <a>ListVolumes</a> to get volume ARNs for a gateway.</p>',
      ],
    ],
    'VolumeId' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeId' => NULL,
        'StorediSCSIVolume$VolumeId' => NULL,
      ],
    ],
    'VolumeInfo' => [
      'base' => NULL,
      'refs' => [
        'VolumeInfos$member' => NULL,
      ],
    ],
    'VolumeInfos' => [
      'base' => NULL,
      'refs' => [
        'ListVolumesOutput$VolumeInfos' => NULL,
      ],
    ],
    'VolumeRecoveryPointInfo' => [
      'base' => NULL,
      'refs' => [
        'VolumeRecoveryPointInfos$member' => NULL,
      ],
    ],
    'VolumeRecoveryPointInfos' => [
      'base' => NULL,
      'refs' => [
        'ListVolumeRecoveryPointsOutput$VolumeRecoveryPointInfos' => NULL,
      ],
    ],
    'VolumeStatus' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeStatus' => NULL,
        'StorediSCSIVolume$VolumeStatus' => NULL,
      ],
    ],
    'VolumeType' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeType' => NULL,
        'StorediSCSIVolume$VolumeType' => NULL,
        'VolumeInfo$VolumeType' => NULL,
      ],
    ],
    'VolumeiSCSIAttributes' => [
      'base' => '<p>Lists iSCSI information about a volume.</p>',
      'refs' => [
        'CachediSCSIVolume$VolumeiSCSIAttributes' => NULL,
        'StorediSCSIVolume$VolumeiSCSIAttributes' => NULL,
      ],
    ],
    'boolean' => [
      'base' => NULL,
      'refs' => [
        'CreateStorediSCSIVolumeInput$PreserveExistingData' => '<p>Specify this field as true if you want to preserve the data on the local disk. Otherwise, specifying this field as false creates an empty volume.</p> <p><i>Valid Values</i>: true, false</p>',
        'DeviceiSCSIAttributes$ChapEnabled' => '<p>Indicates whether mutual CHAP is enabled for the iSCSI target.</p>',
        'StorediSCSIVolume$PreservedExistingData' => NULL,
        'VolumeiSCSIAttributes$ChapEnabled' => '<p>Indicates whether mutual CHAP is enabled for the iSCSI target.</p>',
      ],
    ],
    'double' => [
      'base' => NULL,
      'refs' => [
        'DescribeCacheOutput$CacheUsedPercentage' => NULL,
        'DescribeCacheOutput$CacheDirtyPercentage' => NULL,
        'DescribeCacheOutput$CacheHitPercentage' => NULL,
        'DescribeCacheOutput$CacheMissPercentage' => NULL,
      ],
    ],
    'errorDetails' => [
      'base' => NULL,
      'refs' => [
        'StorageGatewayError$errorDetails' => '<p>Human-readable text that provides detail about the error that occurred.</p>',
      ],
    ],
    'integer' => [
      'base' => NULL,
      'refs' => [
        'DeviceiSCSIAttributes$NetworkInterfacePort' => '<p>The port used to communicate with iSCSI VTL device targets.</p>',
        'VolumeiSCSIAttributes$NetworkInterfacePort' => '<p>The port used to communicate with iSCSI targets.</p>',
      ],
    ],
    'long' => [
      'base' => NULL,
      'refs' => [
        'CachediSCSIVolume$VolumeSizeInBytes' => NULL,
        'CreateCachediSCSIVolumeInput$VolumeSizeInBytes' => NULL,
        'CreateStorediSCSIVolumeOutput$VolumeSizeInBytes' => '<p>The size of the volume in bytes.</p>',
        'DescribeCacheOutput$CacheAllocatedInBytes' => NULL,
        'DescribeUploadBufferOutput$UploadBufferUsedInBytes' => NULL,
        'DescribeUploadBufferOutput$UploadBufferAllocatedInBytes' => NULL,
        'DescribeWorkingStorageOutput$WorkingStorageUsedInBytes' => '<p>The total working storage in bytes in use by the gateway. If no working storage is configured for the gateway, this field returns 0.</p>',
        'DescribeWorkingStorageOutput$WorkingStorageAllocatedInBytes' => '<p>The total working storage in bytes allocated for the gateway. If no working storage is configured for the gateway, this field returns 0.</p>',
        'Disk$DiskSizeInBytes' => NULL,
        'StorediSCSIVolume$VolumeSizeInBytes' => NULL,
        'VolumeRecoveryPointInfo$VolumeSizeInBytes' => NULL,
        'VolumeRecoveryPointInfo$VolumeUsageInBytes' => NULL,
      ],
    ],
    'string' => [
      'base' => NULL,
      'refs' => [
        'CreateSnapshotFromVolumeRecoveryPointOutput$VolumeRecoveryPointTime' => NULL,
        'Disk$DiskPath' => NULL,
        'Disk$DiskNode' => NULL,
        'Disk$DiskStatus' => NULL,
        'Disk$DiskAllocationResource' => NULL,
        'InternalServerError$message' => '<p>A human-readable message describing the error that occurred.</p>',
        'InvalidGatewayRequestException$message' => '<p>A human-readable message describing the error that occurred.</p>',
        'NetworkInterface$Ipv4Address' => '<p>The Internet Protocol version 4 (IPv4] address of the interface.</p>',
        'NetworkInterface$MacAddress' => '<p>The Media Access Control (MAC] address of the interface.</p> <note>This is currently unsupported and will not be returned in output.</note>',
        'NetworkInterface$Ipv6Address' => '<p>The Internet Protocol version 6 (IPv6] address of the interface. <i>Currently not supported</i>.</p>',
        'VolumeRecoveryPointInfo$VolumeRecoveryPointTime' => NULL,
        'errorDetails$key' => NULL,
        'errorDetails$value' => NULL,
      ],
    ],
  ],
];
