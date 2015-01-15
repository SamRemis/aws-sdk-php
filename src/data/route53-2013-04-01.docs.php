<?php return [
  'operations' => [
    'AssociateVPCWithHostedZone' => '<p> This action associates a VPC with an hosted zone. </p> <p> To associate a VPC with an hosted zone, send a <code>POST</code> request to the <code>2013-04-01/hostedzone/<i>hosted zone ID</i>/associatevpc</code> resource. The request body must include an XML document with a <code>AssociateVPCWithHostedZoneRequest</code> element. The response returns the <code>AssociateVPCWithHostedZoneResponse</code> element that contains <code>ChangeInfo</code> for you to track the progress of the <code>AssociateVPCWithHostedZoneRequest</code> you made. See <code>GetChange</code> operation for how to track the progress of your change.</p>',
    'ChangeResourceRecordSets' => '<p>Use this action to create or change your authoritative DNS information. To use this action, send a <code>POST</code> request to the <code>2013-04-01/hostedzone/<i>hosted Zone ID</i>/rrset</code> resource. The request body must include an XML document with a <code>ChangeResourceRecordSetsRequest</code> element.</p> <p>Changes are a list of change items and are considered transactional. For more information on transactional changes, also known as change batches, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/RRSchanges.html#RRSchanges_API">Creating, Changing, and Deleting Resource Record Sets Using the Route 53 API</a> in the <i>Amazon Route 53 Developer Guide</i>.</p> <important>Due to the nature of transactional changes, you cannot delete the same resource record set more than once in a single change batch. If you attempt to delete the same change batch more than once, Route 53 returns an <code>InvalidChangeBatch</code> error.</important> <p>In response to a <code>ChangeResourceRecordSets</code> request, your DNS data is changed on all Route 53 DNS servers. Initially, the status of a change is <code>PENDING</code>. This means the change has not yet propagated to all the authoritative Route 53 DNS servers. When the change is propagated to all hosts, the change returns a status of <code>INSYNC</code>.</p> <p>Note the following limitations on a <code>ChangeResourceRecordSets</code> request:</p> <p>- A request cannot contain more than 100 Change elements.</p> <p>- A request cannot contain more than 1000 ResourceRecord elements.</p> <p>The sum of the number of characters (including spaces] in all <code>Value</code> elements in a request cannot exceed 32,000 characters.</p>',
    'ChangeTagsForResource' => NULL,
    'CreateHealthCheck' => '<p> This action creates a new health check.</p> <p> To create a new health check, send a <code>POST</code> request to the <code>2013-04-01/healthcheck</code> resource. The request body must include an XML document with a <code>CreateHealthCheckRequest</code> element. The response returns the <code>CreateHealthCheckResponse</code> element that contains metadata about the health check.</p>',
    'CreateHostedZone' => '<p> This action creates a new hosted zone.</p> <p>To create a new hosted zone, send a <code>POST</code> request to the <code>2013-04-01/hostedzone</code> resource. The request body must include an XML document with a <code>CreateHostedZoneRequest</code> element. The response returns the <code>CreateHostedZoneResponse</code> element that contains metadata about the hosted zone.</p> <p>Route 53 automatically creates a default SOA record and four NS records for the zone. The NS records in the hosted zone are the name servers you give your registrar to delegate your domain to. For more information about SOA and NS records, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/SOA-NSrecords.html">NS and SOA Records that Route 53 Creates for a Hosted Zone</a> in the <i>Amazon Route 53 Developer Guide</i>.</p> <p>When you create a zone, its initial status is <code>PENDING</code>. This means that it is not yet available on all DNS servers. The status of the zone changes to <code>INSYNC</code> when the NS and SOA records are available on all Route 53 DNS servers. </p> <p>When trying to create a hosted zone using a reusable delegation set, you could specify an optional DelegationSetId, and Route53 would assign those 4 NS records for the zone, instead of alloting a new one.</p>',
    'CreateReusableDelegationSet' => '<p> This action creates a reusable delegationSet.</p> <p> To create a new reusable delegationSet, send a <code>POST</code> request to the <code>2013-04-01/delegationset</code> resource. The request body must include an XML document with a <code>CreateReusableDelegationSetRequest</code> element. The response returns the <code>CreateReusableDelegationSetResponse</code> element that contains metadata about the delegationSet. </p> <p> If the optional parameter HostedZoneId is specified, it marks the delegationSet associated with that particular hosted zone as reusable. </p>',
    'DeleteHealthCheck' => '<p>This action deletes a health check. To delete a health check, send a <code>DELETE</code> request to the <code>2013-04-01/healthcheck/<i>health check ID</i></code> resource.</p> <important> You can delete a health check only if there are no resource record sets associated with this health check. If resource record sets are associated with this health check, you must disassociate them before you can delete your health check. If you try to delete a health check that is associated with resource record sets, Route 53 will deny your request with a <code>HealthCheckInUse</code> error. For information about disassociating the records from your health check, see <a>ChangeResourceRecordSets</a>.</important>',
    'DeleteHostedZone' => '<p>This action deletes a hosted zone. To delete a hosted zone, send a <code>DELETE</code> request to the <code>2013-04-01/hostedzone/<i>hosted zone ID</i></code> resource.</p> <p>For more information about deleting a hosted zone, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/DeleteHostedZone.html">Deleting a Hosted Zone</a> in the <i>Amazon Route 53 Developer Guide</i>.</p> <important> You can delete a hosted zone only if there are no resource record sets other than the default SOA record and NS resource record sets. If your hosted zone contains other resource record sets, you must delete them before you can delete your hosted zone. If you try to delete a hosted zone that contains other resource record sets, Route 53 will deny your request with a <code>HostedZoneNotEmpty</code> error. For information about deleting records from your hosted zone, see <a>ChangeResourceRecordSets</a>.</important>',
    'DeleteReusableDelegationSet' => '<p>This action deletes a reusable delegation set. To delete a reusable delegation set, send a <code>DELETE</code> request to the <code>2013-04-01/delegationset/<i>delegation set ID</i></code> resource.</p> <important> You can delete a reusable delegation set only if there are no associated hosted zones. If your reusable delegation set contains associated hosted zones, you must delete them before you can delete your reusable delegation set. If you try to delete a reusable delegation set that contains associated hosted zones, Route 53 will deny your request with a <code>DelegationSetInUse</code> error.</important>',
    'DisassociateVPCFromHostedZone' => '<p> This action disassociates a VPC from an hosted zone. </p> <p> To disassociate a VPC to a hosted zone, send a <code>POST</code> request to the <code>2013-04-01/hostedzone/<i>hosted zone ID</i>/disassociatevpc</code> resource. The request body must include an XML document with a <code>DisassociateVPCFromHostedZoneRequest</code> element. The response returns the <code>DisassociateVPCFromHostedZoneResponse</code> element that contains <code>ChangeInfo</code> for you to track the progress of the <code>DisassociateVPCFromHostedZoneRequest</code> you made. See <code>GetChange</code> operation for how to track the progress of your change.</p>',
    'GetChange' => '<p> This action returns the current status of a change batch request. The status is one of the following values:</p> <p>- <code>PENDING</code> indicates that the changes in this request have not replicated to all Route 53 DNS servers. This is the initial status of all change batch requests.</p> <p>- <code>INSYNC</code> indicates that the changes have replicated to all Amazon Route 53 DNS servers. </p>',
    'GetCheckerIpRanges' => '<p> To retrieve a list of the IP ranges used by Amazon Route 53 health checkers to check the health of your resources, send a <code>GET</code> request to the <code>2013-04-01/checkeripranges</code> resource. You can use these IP addresses to configure router and firewall rules to allow health checkers to check the health of your resources.</p>',
    'GetGeoLocation' => '<p> To retrieve a single geo location, send a <code>GET</code> request to the <code>2013-04-01/geolocation</code> resource with one of these options: continentcode | countrycode | countrycode and subdivisioncode.</p>',
    'GetHealthCheck' => '<p> To retrieve the health check, send a <code>GET</code> request to the <code>2013-04-01/healthcheck/<i>health check ID</i></code> resource. </p>',
    'GetHealthCheckCount' => '<p> To retrieve a count of all your health checks, send a <code>GET</code> request to the <code>2013-04-01/healthcheckcount</code> resource.</p>',
    'GetHealthCheckLastFailureReason' => '<p>If you want to learn why a health check is currently failing or why it failed most recently (if at all], you can get the failure reason for the most recent failure. Send a <code>GET</code> request to the <code>2013-04-01/healthcheck/<i>health check ID</i>/lastfailurereason</code> resource.</p>',
    'GetHealthCheckStatus' => '<p> To retrieve the health check status, send a <code>GET</code> request to the <code>2013-04-01/healthcheck/<i>health check ID</i>/status</code> resource. You can use this call to get a health check\'s current status. </p>',
    'GetHostedZone' => '<p> To retrieve the delegation set for a hosted zone, send a <code>GET</code> request to the <code>2013-04-01/hostedzone/<i>hosted zone ID</i></code> resource. The delegation set is the four Route 53 name servers that were assigned to the hosted zone when you created it.</p>',
    'GetReusableDelegationSet' => '<p> To retrieve the reusable delegation set, send a <code>GET</code> request to the <code>2013-04-01/delegationset/<i>delegation set ID</i></code> resource.</p>',
    'ListGeoLocations' => '<p> To retrieve a list of supported geo locations, send a <code>GET</code> request to the <code>2013-04-01/geolocations</code> resource. The response to this request includes a <code>GeoLocationDetailsList</code> element with zero, one, or multiple <code>GeoLocationDetails</code> child elements. The list is sorted by country code, and then subdivision code, followed by continents at the end of the list. </p> <p> By default, the list of geo locations is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. If the list is truncated, <code>IsTruncated</code> will be set to <i>true</i> and a combination of <code>NextContinentCode, NextCountryCode, NextSubdivisionCode</code> will be populated. You can pass these as parameters to <code>StartContinentCode, StartCountryCode, StartSubdivisionCode</code> to control the geo location that the list begins with. </p>',
    'ListHealthChecks' => '<p> To retrieve a list of your health checks, send a <code>GET</code> request to the <code>2013-04-01/healthcheck</code> resource. The response to this request includes a <code>HealthChecks</code> element with zero, one, or multiple <code>HealthCheck</code> child elements. By default, the list of health checks is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the health check that the list begins with. </p> <note> Amazon Route 53 returns a maximum of 100 items. If you set MaxItems to a value greater than 100, Amazon Route 53 returns only the first 100.</note>',
    'ListHostedZones' => '<p> To retrieve a list of your hosted zones, send a <code>GET</code> request to the <code>2013-04-01/hostedzone</code> resource. The response to this request includes a <code>HostedZones</code> element with zero, one, or multiple <code>HostedZone</code> child elements. By default, the list of hosted zones is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the hosted zone that the list begins with. </p> <note> Amazon Route 53 returns a maximum of 100 items. If you set MaxItems to a value greater than 100, Amazon Route 53 returns only the first 100.</note>',
    'ListResourceRecordSets' => '<p>Imagine all the resource record sets in a zone listed out in front of you. Imagine them sorted lexicographically first by DNS name (with the labels reversed, like "com.amazon.www" for example], and secondarily, lexicographically by record type. This operation retrieves at most MaxItems resource record sets from this list, in order, starting at a position specified by the Name and Type arguments:</p> <ul> <li>If both Name and Type are omitted, this means start the results at the first RRSET in the HostedZone.</li> <li>If Name is specified but Type is omitted, this means start the results at the first RRSET in the list whose name is greater than or equal to Name. </li> <li>If both Name and Type are specified, this means start the results at the first RRSET in the list whose name is greater than or equal to Name and whose type is greater than or equal to Type.</li> <li>It is an error to specify the Type but not the Name.</li> </ul> <p>Use ListResourceRecordSets to retrieve a single known record set by specifying the record set\'s name and type, and setting MaxItems = 1</p> <p>To retrieve all the records in a HostedZone, first pause any processes making calls to ChangeResourceRecordSets. Initially call ListResourceRecordSets without a Name and Type to get the first page of record sets. For subsequent calls, set Name and Type to the NextName and NextType values returned by the previous response. </p> <p>In the presence of concurrent ChangeResourceRecordSets calls, there is no consistency of results across calls to ListResourceRecordSets. The only way to get a consistent multi-page snapshot of all RRSETs in a zone is to stop making changes while pagination is in progress.</p> <p>However, the results from ListResourceRecordSets are consistent within a page. If MakeChange calls are taking place concurrently, the result of each one will either be completely visible in your results or not at all. You will not see partial changes, or changes that do not ultimately succeed. (This follows from the fact that MakeChange is atomic] </p> <p>The results from ListResourceRecordSets are strongly consistent with ChangeResourceRecordSets. To be precise, if a single process makes a call to ChangeResourceRecordSets and receives a successful response, the effects of that change will be visible in a subsequent call to ListResourceRecordSets by that process.</p>',
    'ListReusableDelegationSets' => '<p> To retrieve a list of your reusable delegation sets, send a <code>GET</code> request to the <code>2013-04-01/delegationset</code> resource. The response to this request includes a <code>DelegationSets</code> element with zero, one, or multiple <code>DelegationSet</code> child elements. By default, the list of delegation sets is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the delegation set that the list begins with. </p> <note> Amazon Route 53 returns a maximum of 100 items. If you set MaxItems to a value greater than 100, Amazon Route 53 returns only the first 100.</note>',
    'ListTagsForResource' => NULL,
    'ListTagsForResources' => NULL,
    'UpdateHealthCheck' => '<p> This action updates an existing health check.</p> <p> To update a health check, send a <code>POST</code> request to the <code>2013-04-01/healthcheck/<i>health check ID</i></code> resource. The request body must include an XML document with an <code>UpdateHealthCheckRequest</code> element. The response returns an <code>UpdateHealthCheckResponse</code> element, which contains metadata about the health check.</p>',
    'UpdateHostedZoneComment' => '<p> To update the hosted zone comment, send a <code>POST</code> request to the <code>2013-04-01/hostedzone/<i>hosted zone ID</i></code> resource. The request body must include an XML document with a <code>UpdateHostedZoneCommentRequest</code> element. The response to this request includes the modified <code>HostedZone</code> element.</p> <note> The comment can have a maximum length of 256 characters.</note>',
  ],
  'service' => NULL,
  'shapes' => [
    'AliasHealthEnabled' => [
      'base' => NULL,
      'refs' => [
        'AliasTarget$EvaluateTargetHealth' => '<p><i>Alias resource record sets only:</i> A boolean value that indicates whether this Resource Record Set should respect the health status of any health checks associated with the ALIAS target record which it is linked to.</p> <p>For more information and an example, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/CreatingAliasRRSets.html">Creating Alias Resource Record Sets</a> in the <i>Amazon Route 53 Developer Guide</i></p>.',
      ],
    ],
    'AliasTarget' => [
      'base' => '<p><i>Alias resource record sets only:</i> Information about the domain to which you are redirecting traffic.</p> <p>For more information and an example, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/CreatingAliasRRSets.html">Creating Alias Resource Record Sets</a> in the <i>Amazon Route 53 Developer Guide</i></p>.',
      'refs' => [
        'ResourceRecordSet$AliasTarget' => '<p><i>Alias resource record sets only:</i> Information about the AWS resource to which you are redirecting traffic.</p>',
      ],
    ],
    'AssociateVPCComment' => [
      'base' => NULL,
      'refs' => [
        'AssociateVPCWithHostedZoneRequest$Comment' => '<p><i>Optional:</i> Any comments you want to include about a <code>AssociateVPCWithHostedZoneRequest</code>.</p>',
      ],
    ],
    'AssociateVPCWithHostedZoneRequest' => [
      'base' => '<p>A complex type that contains information about the request to associate a VPC with an hosted zone.</p>',
      'refs' => [],
    ],
    'AssociateVPCWithHostedZoneResponse' => [
      'base' => '<p>A complex type containing the response information for the request.</p>',
      'refs' => [],
    ],
    'Change' => [
      'base' => '<p>A complex type that contains the information for each change in a change batch request.</p>',
      'refs' => [
        'Changes$member' => NULL,
      ],
    ],
    'ChangeAction' => [
      'base' => NULL,
      'refs' => [
        'Change$Action' => '<p>The action to perform.</p> <p>Valid values: <code>CREATE</code> | <code>DELETE</code> | <code>UPSERT</code></p>',
      ],
    ],
    'ChangeBatch' => [
      'base' => '<p>A complex type that contains an optional comment and the changes that you want to make with a change batch request.</p>',
      'refs' => [
        'ChangeResourceRecordSetsRequest$ChangeBatch' => '<p>A complex type that contains an optional comment and the <code>Changes</code> element.</p>',
      ],
    ],
    'ChangeInfo' => [
      'base' => '<p>A complex type that describes change information about changes made to your hosted zone.</p> <p>This element contains an ID that you use when performing a <a>GetChange</a> action to get detailed information about the change.</p>',
      'refs' => [
        'AssociateVPCWithHostedZoneResponse$ChangeInfo' => '<p>A complex type that contains the ID, the status, and the date and time of your <code>AssociateVPCWithHostedZoneRequest</code>.</p>',
        'ChangeResourceRecordSetsResponse$ChangeInfo' => '<p>A complex type that contains information about changes made to your hosted zone.</p> <p>This element contains an ID that you use when performing a <a>GetChange</a> action to get detailed information about the change.</p>',
        'CreateHostedZoneResponse$ChangeInfo' => '<p>A complex type that contains information about the request to create a hosted zone. This includes an ID that you use when you call the <a>GetChange</a> action to get the current status of the change request.</p>',
        'DeleteHostedZoneResponse$ChangeInfo' => '<p>A complex type that contains the ID, the status, and the date and time of your delete request.</p>',
        'DisassociateVPCFromHostedZoneResponse$ChangeInfo' => '<p>A complex type that contains the ID, the status, and the date and time of your <code>DisassociateVPCFromHostedZoneRequest</code>.</p>',
        'GetChangeResponse$ChangeInfo' => '<p>A complex type that contains information about the specified change batch, including the change batch ID, the status of the change, and the date and time of the request.</p>',
      ],
    ],
    'ChangeResourceRecordSetsRequest' => [
      'base' => '<p>A complex type that contains a change batch.</p>',
      'refs' => [],
    ],
    'ChangeResourceRecordSetsResponse' => [
      'base' => '<p>A complex type containing the response for the request.</p>',
      'refs' => [],
    ],
    'ChangeStatus' => [
      'base' => NULL,
      'refs' => [
        'ChangeInfo$Status' => '<p>The current state of the request. <code>PENDING</code> indicates that this request has not yet been applied to all Amazon Route 53 DNS servers.</p> <p>Valid Values: <code>PENDING</code> | <code>INSYNC</code></p>',
      ],
    ],
    'ChangeTagsForResourceRequest' => [
      'base' => '<p>A complex type containing information about a request to add, change, or delete the tags that are associated with a resource.</p>',
      'refs' => [],
    ],
    'ChangeTagsForResourceResponse' => [
      'base' => '<p>Empty response for the request.</p>',
      'refs' => [],
    ],
    'Changes' => [
      'base' => NULL,
      'refs' => [
        'ChangeBatch$Changes' => '<p>A complex type that contains one <code>Change</code> element for each resource record set that you want to create or delete.</p>',
      ],
    ],
    'CheckerIpRanges' => [
      'base' => NULL,
      'refs' => [
        'GetCheckerIpRangesResponse$CheckerIpRanges' => '<p>A complex type that contains sorted list of IP ranges in CIDR format for Amazon Route 53 health checkers.</p>',
      ],
    ],
    'ConflictingDomainExists' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateHealthCheckRequest' => [
      'base' => '<p>&gt;A complex type that contains information about the request to create a health check.</p>',
      'refs' => [],
    ],
    'CreateHealthCheckResponse' => [
      'base' => '<p>A complex type containing the response information for the new health check.</p>',
      'refs' => [],
    ],
    'CreateHostedZoneRequest' => [
      'base' => '<p>A complex type that contains information about the request to create a hosted zone.</p>',
      'refs' => [],
    ],
    'CreateHostedZoneResponse' => [
      'base' => '<p>A complex type containing the response information for the new hosted zone.</p>',
      'refs' => [],
    ],
    'CreateReusableDelegationSetRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateReusableDelegationSetResponse' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DNSName' => [
      'base' => NULL,
      'refs' => [
        'AliasTarget$DNSName' => '<p><i>Alias resource record sets only:</i> The external DNS name associated with the AWS Resource.</p> <p>For more information and an example, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/CreatingAliasRRSets.html">Creating Alias Resource Record Sets</a> in the <i>Amazon Route 53 Developer Guide</i></p>.',
        'CreateHostedZoneRequest$Name' => '<p>The name of the domain. This must be a fully-specified domain, for example, www.example.com. The trailing dot is optional; Route 53 assumes that the domain name is fully qualified. This means that Route 53 treats www.example.com (without a trailing dot] and www.example.com. (with a trailing dot] as identical.</p> <p>This is the name you have registered with your DNS registrar. You should ask your registrar to change the authoritative name servers for your domain to the set of <code>NameServers</code> elements returned in <code>DelegationSet</code>.</p>',
        'DelegationSetNameServers$member' => NULL,
        'HostedZone$Name' => '<p>The name of the domain. This must be a fully-specified domain, for example, www.example.com. The trailing dot is optional; Route 53 assumes that the domain name is fully qualified. This means that Route 53 treats www.example.com (without a trailing dot] and www.example.com. (with a trailing dot] as identical.</p> <p>This is the name you have registered with your DNS registrar. You should ask your registrar to change the authoritative name servers for your domain to the set of <code>NameServers</code> elements returned in <code>DelegationSet</code>.</p>',
        'ListResourceRecordSetsRequest$StartRecordName' => '<p>The first name in the lexicographic ordering of domain names that you want the <code>ListResourceRecordSets</code> request to list.</p>',
        'ListResourceRecordSetsResponse$NextRecordName' => '<p>If the results were truncated, the name of the next record in the list. This element is present only if <a>ListResourceRecordSetsResponse$IsTruncated</a> is true. </p>',
        'ResourceRecordSet$Name' => '<p>The domain name of the current resource record set.</p>',
      ],
    ],
    'DelegationSet' => [
      'base' => '<p>A complex type that contains name server information.</p>',
      'refs' => [
        'CreateHostedZoneResponse$DelegationSet' => '<p>A complex type that contains name server information.</p>',
        'CreateReusableDelegationSetResponse$DelegationSet' => '<p>A complex type that contains name server information.</p>',
        'DelegationSets$member' => NULL,
        'GetHostedZoneResponse$DelegationSet' => '<p>A complex type that contains information about the name servers for the specified hosted zone.</p>',
        'GetReusableDelegationSetResponse$DelegationSet' => '<p>A complex type that contains the information about the nameservers for the specified delegation set ID.</p>',
      ],
    ],
    'DelegationSetAlreadyCreated' => [
      'base' => '<p>A delegation set with the same owner and caller reference combination has already been created.</p>',
      'refs' => [],
    ],
    'DelegationSetAlreadyReusable' => [
      'base' => '<p>The specified delegation set has already been marked as reusable.</p>',
      'refs' => [],
    ],
    'DelegationSetInUse' => [
      'base' => '<p>The specified delegation contains associated hosted zones which must be deleted before the reusable delegation set can be deleted.</p>',
      'refs' => [],
    ],
    'DelegationSetNameServers' => [
      'base' => NULL,
      'refs' => [
        'DelegationSet$NameServers' => '<p>A complex type that contains the authoritative name servers for the hosted zone. Use the method provided by your domain registrar to add an NS record to your domain for each <code>NameServer</code> that is assigned to your hosted zone.</p>',
      ],
    ],
    'DelegationSetNotAvailable' => [
      'base' => '<p>Route 53 allows some duplicate domain names, but there is a maximum number of duplicate names. This error indicates that you have reached that maximum. If you want to create another hosted zone with the same name and Route 53 generates this error, you can request an increase to the limit on the <a href="http://aws.amazon.com/route53-request/">Contact Us</a> page.</p>',
      'refs' => [],
    ],
    'DelegationSetNotReusable' => [
      'base' => '<p>The specified delegation set has not been marked as reusable.</p>',
      'refs' => [],
    ],
    'DelegationSets' => [
      'base' => NULL,
      'refs' => [
        'ListReusableDelegationSetsResponse$DelegationSets' => '<p>A complex type that contains information about the reusable delegation sets associated with the current AWS account.</p>',
      ],
    ],
    'DeleteHealthCheckRequest' => [
      'base' => '<p>A complex type containing the request information for delete health check.</p>',
      'refs' => [],
    ],
    'DeleteHealthCheckResponse' => [
      'base' => '<p>Empty response for the request.</p>',
      'refs' => [],
    ],
    'DeleteHostedZoneRequest' => [
      'base' => '<p>A complex type that contains information about the hosted zone that you want to delete.</p>',
      'refs' => [],
    ],
    'DeleteHostedZoneResponse' => [
      'base' => '<p>A complex type containing the response information for the request.</p>',
      'refs' => [],
    ],
    'DeleteReusableDelegationSetRequest' => [
      'base' => '<p>A complex type containing the information for the delete request.</p>',
      'refs' => [],
    ],
    'DeleteReusableDelegationSetResponse' => [
      'base' => '<p>Empty response for the request.</p>',
      'refs' => [],
    ],
    'DisassociateVPCComment' => [
      'base' => NULL,
      'refs' => [
        'DisassociateVPCFromHostedZoneRequest$Comment' => '<p><i>Optional:</i> Any comments you want to include about a <code>DisassociateVPCFromHostedZoneRequest</code>.</p>',
      ],
    ],
    'DisassociateVPCFromHostedZoneRequest' => [
      'base' => '<p>A complex type that contains information about the request to disassociate a VPC from an hosted zone.</p>',
      'refs' => [],
    ],
    'DisassociateVPCFromHostedZoneResponse' => [
      'base' => '<p>A complex type containing the response information for the request.</p>',
      'refs' => [],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'ConflictingDomainExists$message' => NULL,
        'DelegationSetAlreadyCreated$message' => '<p>Descriptive message for the error response.</p>',
        'DelegationSetAlreadyReusable$message' => '<p>Descriptive message for the error response.</p>',
        'DelegationSetInUse$message' => '<p>Descriptive message for the error response.</p>',
        'DelegationSetNotAvailable$message' => '<p>Descriptive message for the error response.</p>',
        'DelegationSetNotReusable$message' => '<p>Descriptive message for the error response.</p>',
        'ErrorMessages$member' => NULL,
        'HealthCheckAlreadyExists$message' => '<p>Descriptive message for the error response.</p>',
        'HealthCheckInUse$message' => '<p>Descriptive message for the error response.</p>',
        'HealthCheckVersionMismatch$message' => NULL,
        'HostedZoneAlreadyExists$message' => '<p>Descriptive message for the error response.</p>',
        'HostedZoneNotEmpty$message' => '<p>Descriptive message for the error response.</p>',
        'HostedZoneNotFound$message' => '<p>Descriptive message for the error response.</p>',
        'IncompatibleVersion$message' => NULL,
        'InvalidArgument$message' => '<p>Descriptive message for the error response.</p>',
        'InvalidDomainName$message' => '<p>Descriptive message for the error response.</p>',
        'InvalidInput$message' => '<p>Descriptive message for the error response.</p>',
        'InvalidVPCId$message' => '<p>Descriptive message for the error response.</p>',
        'LastVPCAssociation$message' => '<p>Descriptive message for the error response.</p>',
        'LimitsExceeded$message' => '<p>Descriptive message for the error response.</p>',
        'NoSuchChange$message' => NULL,
        'NoSuchDelegationSet$message' => '<p>Descriptive message for the error response.</p>',
        'NoSuchGeoLocation$message' => '<p>Descriptive message for the error response.</p>',
        'NoSuchHealthCheck$message' => '<p>Descriptive message for the error response.</p>',
        'NoSuchHostedZone$message' => NULL,
        'PriorRequestNotComplete$message' => NULL,
        'PublicZoneVPCAssociation$message' => '<p>Descriptive message for the error response.</p>',
        'ThrottlingException$message' => NULL,
        'TooManyHealthChecks$message' => NULL,
        'TooManyHostedZones$message' => '<p>Descriptive message for the error response.</p>',
        'VPCAssociationNotFound$message' => '<p>Descriptive message for the error response.</p>',
      ],
    ],
    'ErrorMessages' => [
      'base' => NULL,
      'refs' => [
        'InvalidChangeBatch$messages' => '<p>Descriptive message for the error response.</p>',
      ],
    ],
    'FailureThreshold' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$FailureThreshold' => '<p>The number of consecutive health checks that an endpoint must pass or fail for Route 53 to change the current status of the endpoint from unhealthy to healthy or vice versa.</p> <p>Valid values are integers between 1 and 10. For more information, see "How Amazon Route 53 Determines Whether an Endpoint Is Healthy" in the Amazon Route 53 Developer Guide.</p>',
        'UpdateHealthCheckRequest$FailureThreshold' => '<p>The number of consecutive health checks that an endpoint must pass or fail for Route 53 to change the current status of the endpoint from unhealthy to healthy or vice versa.</p> <p>Valid values are integers between 1 and 10. For more information, see "How Amazon Route 53 Determines Whether an Endpoint Is Healthy" in the Amazon Route 53 Developer Guide.</p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'FullyQualifiedDomainName' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$FullyQualifiedDomainName' => '<p>Fully qualified domain name of the instance to be health checked.</p>',
        'UpdateHealthCheckRequest$FullyQualifiedDomainName' => '<p>Fully qualified domain name of the instance to be health checked.</p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'GeoLocation' => [
      'base' => '<p>A complex type that contains information about a geo location.</p>',
      'refs' => [
        'ResourceRecordSet$GeoLocation' => '<p><i>Geo location resource record sets only:</i> Among resource record sets that have the same combination of DNS name and type, a value that specifies the geo location for the current resource record set.</p>',
      ],
    ],
    'GeoLocationContinentCode' => [
      'base' => NULL,
      'refs' => [
        'GeoLocation$ContinentCode' => '<p>The code for a continent geo location. Note: only continent locations have a continent code.</p> <p>Valid values: <code>AF</code> | <code>AN</code> | <code>AS</code> | <code>EU</code> | <code>OC</code> | <code>NA</code> | <code>SA</code></p> <p>Constraint: Specifying <code>ContinentCode</code> with either <code>CountryCode</code> or <code>SubdivisionCode</code> returns an <a>InvalidInput</a> error.</p>',
        'GeoLocationDetails$ContinentCode' => '<p>The code for a continent geo location. Note: only continent locations have a continent code.</p>',
        'GetGeoLocationRequest$ContinentCode' => '<p>The code for a continent geo location. Note: only continent locations have a continent code.</p> <p>Valid values: <code>AF</code> | <code>AN</code> | <code>AS</code> | <code>EU</code> | <code>OC</code> | <code>NA</code> | <code>SA</code></p> <p>Constraint: Specifying <code>ContinentCode</code> with either <code>CountryCode</code> or <code>SubdivisionCode</code> returns an <a>InvalidInput</a> error.</p>',
        'ListGeoLocationsRequest$StartContinentCode' => '<p>The first continent code in the lexicographic ordering of geo locations that you want the <code>ListGeoLocations</code> request to list. For non-continent geo locations, this should be null.</p> <p>Valid values: <code>AF</code> | <code>AN</code> | <code>AS</code> | <code>EU</code> | <code>OC</code> | <code>NA</code> | <code>SA</code></p> <p>Constraint: Specifying <code>ContinentCode</code> with either <code>CountryCode</code> or <code>SubdivisionCode</code> returns an <a>InvalidInput</a> error.</p>',
        'ListGeoLocationsResponse$NextContinentCode' => '<p>If the results were truncated, the continent code of the next geo location in the list. This element is present only if <a>ListGeoLocationsResponse$IsTruncated</a> is true and the next geo location to list is a continent location. </p>',
      ],
    ],
    'GeoLocationContinentName' => [
      'base' => NULL,
      'refs' => [
        'GeoLocationDetails$ContinentName' => '<p>The name of the continent. This element is only present if <code>ContinentCode</code> is also present.</p>',
      ],
    ],
    'GeoLocationCountryCode' => [
      'base' => NULL,
      'refs' => [
        'GeoLocation$CountryCode' => '<p>The code for a country geo location. The default location uses \'*\' for the country code and will match all locations that are not matched by a geo location.</p> <p>The default geo location uses a <code>*</code> for the country code. All other country codes follow the ISO 3166 two-character code.</p>',
        'GeoLocationDetails$CountryCode' => '<p>The code for a country geo location. The default location uses \'*\' for the country code and will match all locations that are not matched by a geo location.</p> <p>The default geo location uses a <code>*</code> for the country code. All other country codes follow the ISO 3166 two-character code.</p>',
        'GetGeoLocationRequest$CountryCode' => '<p>The code for a country geo location. The default location uses \'*\' for the country code and will match all locations that are not matched by a geo location.</p> <p>The default geo location uses a <code>*</code> for the country code. All other country codes follow the ISO 3166 two-character code.</p>',
        'ListGeoLocationsRequest$StartCountryCode' => '<p>The first country code in the lexicographic ordering of geo locations that you want the <code>ListGeoLocations</code> request to list.</p> <p>The default geo location uses a <code>*</code> for the country code. All other country codes follow the ISO 3166 two-character code.</p>',
        'ListGeoLocationsResponse$NextCountryCode' => '<p>If the results were truncated, the country code of the next geo location in the list. This element is present only if <a>ListGeoLocationsResponse$IsTruncated</a> is true and the next geo location to list is not a continent location. </p>',
      ],
    ],
    'GeoLocationCountryName' => [
      'base' => NULL,
      'refs' => [
        'GeoLocationDetails$CountryName' => '<p>The name of the country. This element is only present if <code>CountryCode</code> is also present.</p>',
      ],
    ],
    'GeoLocationDetails' => [
      'base' => '<p>A complex type that contains information about a <code>GeoLocation</code>.</p>',
      'refs' => [
        'GeoLocationDetailsList$member' => NULL,
        'GetGeoLocationResponse$GeoLocationDetails' => '<p>A complex type that contains the information about the specified geo location.</p>',
      ],
    ],
    'GeoLocationDetailsList' => [
      'base' => NULL,
      'refs' => [
        'ListGeoLocationsResponse$GeoLocationDetailsList' => '<p>A complex type that contains information about the geo locations that are returned by the request.</p>',
      ],
    ],
    'GeoLocationSubdivisionCode' => [
      'base' => NULL,
      'refs' => [
        'GeoLocation$SubdivisionCode' => '<p>The code for a country\'s subdivision (e.g., a province of Canada]. A subdivision code is only valid with the appropriate country code.</p> <p>Constraint: Specifying <code>SubdivisionCode</code> without <code>CountryCode</code> returns an <a>InvalidInput</a> error.</p>',
        'GeoLocationDetails$SubdivisionCode' => '<p>The code for a country\'s subdivision (e.g., a province of Canada]. A subdivision code is only valid with the appropriate country code.</p>',
        'GetGeoLocationRequest$SubdivisionCode' => '<p>The code for a country\'s subdivision (e.g., a province of Canada]. A subdivision code is only valid with the appropriate country code.</p> <p>Constraint: Specifying <code>SubdivisionCode</code> without <code>CountryCode</code> returns an <a>InvalidInput</a> error.</p>',
        'ListGeoLocationsRequest$StartSubdivisionCode' => '<p>The first subdivision code in the lexicographic ordering of geo locations that you want the <code>ListGeoLocations</code> request to list.</p> <p>Constraint: Specifying <code>SubdivisionCode</code> without <code>CountryCode</code> returns an <a>InvalidInput</a> error.</p>',
        'ListGeoLocationsResponse$NextSubdivisionCode' => '<p>If the results were truncated, the subdivision code of the next geo location in the list. This element is present only if <a>ListGeoLocationsResponse$IsTruncated</a> is true and the next geo location has a subdivision. </p>',
      ],
    ],
    'GeoLocationSubdivisionName' => [
      'base' => NULL,
      'refs' => [
        'GeoLocationDetails$SubdivisionName' => '<p>The name of the subdivision. This element is only present if <code>SubdivisionCode</code> is also present.</p>',
      ],
    ],
    'GetChangeRequest' => [
      'base' => '<p>The input for a GetChange request.</p>',
      'refs' => [],
    ],
    'GetChangeResponse' => [
      'base' => '<p>A complex type that contains the <code>ChangeInfo</code> element.</p>',
      'refs' => [],
    ],
    'GetCheckerIpRangesRequest' => [
      'base' => '<p>Empty request.</p>',
      'refs' => [],
    ],
    'GetCheckerIpRangesResponse' => [
      'base' => '<p>A complex type that contains the <code>CheckerIpRanges</code> element.</p>',
      'refs' => [],
    ],
    'GetGeoLocationRequest' => [
      'base' => '<p>A complex type that contains information about the request to get a geo location.</p>',
      'refs' => [],
    ],
    'GetGeoLocationResponse' => [
      'base' => '<p>A complex type containing information about the specified geo location.</p>',
      'refs' => [],
    ],
    'GetHealthCheckCountRequest' => [
      'base' => '<p> To retrieve a count of all your health checks, send a <code>GET</code> request to the <code>2013-04-01/healthcheckcount</code> resource.</p>',
      'refs' => [],
    ],
    'GetHealthCheckCountResponse' => [
      'base' => '<p> A complex type that contains the count of health checks associated with the current AWS account.</p>',
      'refs' => [],
    ],
    'GetHealthCheckLastFailureReasonRequest' => [
      'base' => '<p>A complex type that contains information about the request to get the most recent failure reason for a health check.</p>',
      'refs' => [],
    ],
    'GetHealthCheckLastFailureReasonResponse' => [
      'base' => '<p>A complex type that contains information about the most recent failure for the specified health check.</p>',
      'refs' => [],
    ],
    'GetHealthCheckRequest' => [
      'base' => '<p>A complex type that contains information about the request to get a health check.</p>',
      'refs' => [],
    ],
    'GetHealthCheckResponse' => [
      'base' => '<p>A complex type containing information about the specified health check.</p>',
      'refs' => [],
    ],
    'GetHealthCheckStatusRequest' => [
      'base' => '<p>A complex type that contains information about the request to get health check status for a health check.</p>',
      'refs' => [],
    ],
    'GetHealthCheckStatusResponse' => [
      'base' => '<p>A complex type that contains information about the status of the specified health check.</p>',
      'refs' => [],
    ],
    'GetHostedZoneRequest' => [
      'base' => '<p> The input for a GetHostedZone request.</p>',
      'refs' => [],
    ],
    'GetHostedZoneResponse' => [
      'base' => '<p>A complex type containing information about the specified hosted zone.</p>',
      'refs' => [],
    ],
    'GetReusableDelegationSetRequest' => [
      'base' => '<p> The input for a GetReusableDelegationSet request.</p>',
      'refs' => [],
    ],
    'GetReusableDelegationSetResponse' => [
      'base' => '<p>A complex type containing information about the specified reusable delegation set.</p>',
      'refs' => [],
    ],
    'HealthCheck' => [
      'base' => '<p>A complex type that contains identifying information about the health check.</p>',
      'refs' => [
        'CreateHealthCheckResponse$HealthCheck' => '<p>A complex type that contains identifying information about the health check.</p>',
        'GetHealthCheckResponse$HealthCheck' => '<p>A complex type that contains the information about the specified health check.</p>',
        'HealthChecks$member' => NULL,
        'UpdateHealthCheckResponse$HealthCheck' => NULL,
      ],
    ],
    'HealthCheckAlreadyExists' => [
      'base' => '<p>The health check you are trying to create already exists. Route 53 returns this error when a health check has already been created with the specified <code>CallerReference</code>.</p>',
      'refs' => [],
    ],
    'HealthCheckConfig' => [
      'base' => '<p>A complex type that contains the health check configuration.</p>',
      'refs' => [
        'CreateHealthCheckRequest$HealthCheckConfig' => '<p>A complex type that contains health check configuration.</p>',
        'HealthCheck$HealthCheckConfig' => '<p>A complex type that contains the health check configuration.</p>',
      ],
    ],
    'HealthCheckCount' => [
      'base' => NULL,
      'refs' => [
        'GetHealthCheckCountResponse$HealthCheckCount' => '<p> The number of health checks associated with the current AWS account.</p>',
      ],
    ],
    'HealthCheckId' => [
      'base' => NULL,
      'refs' => [
        'DeleteHealthCheckRequest$HealthCheckId' => '<p>The ID of the health check to delete.</p>',
        'GetHealthCheckLastFailureReasonRequest$HealthCheckId' => '<p>The ID of the health check for which you want to retrieve the reason for the most recent failure.</p>',
        'GetHealthCheckRequest$HealthCheckId' => '<p>The ID of the health check to retrieve.</p>',
        'GetHealthCheckStatusRequest$HealthCheckId' => '<p>The ID of the health check for which you want to retrieve the most recent status.</p>',
        'HealthCheck$Id' => '<p>The ID of the specified health check.</p>',
        'ResourceRecordSet$HealthCheckId' => '<p><i>Health Check resource record sets only, not required for alias resource record sets:</i> An identifier that is used to identify health check associated with the resource record set.</p>',
        'UpdateHealthCheckRequest$HealthCheckId' => '<p>The ID of the health check to update.</p>',
      ],
    ],
    'HealthCheckInUse' => [
      'base' => '<p>There are resource records associated with this health check. Before you can delete the health check, you must disassociate it from the resource record sets.</p>',
      'refs' => [],
    ],
    'HealthCheckNonce' => [
      'base' => NULL,
      'refs' => [
        'CreateHealthCheckRequest$CallerReference' => '<p>A unique string that identifies the request and that allows failed <code>CreateHealthCheck</code> requests to be retried without the risk of executing the operation twice. You must use a unique <code>CallerReference</code> string every time you create a health check. <code>CallerReference</code> can be any unique string; you might choose to use a string that identifies your project.</p> <p>Valid characters are any Unicode code points that are legal in an XML 1.0 document. The UTF-8 encoding of the value must be less than 128 bytes.</p>',
        'HealthCheck$CallerReference' => '<p>A unique string that identifies the request to create the health check.</p>',
      ],
    ],
    'HealthCheckObservation' => [
      'base' => '<p>A complex type that contains the IP address of a Route 53 health checker and the reason for the health check status.</p>',
      'refs' => [
        'HealthCheckObservations$member' => NULL,
      ],
    ],
    'HealthCheckObservations' => [
      'base' => NULL,
      'refs' => [
        'GetHealthCheckLastFailureReasonResponse$HealthCheckObservations' => '<p>A list that contains one <code>HealthCheckObservation</code> element for each Route 53 health checker.</p>',
        'GetHealthCheckStatusResponse$HealthCheckObservations' => '<p>A list that contains one <code>HealthCheckObservation</code> element for each Route 53 health checker.</p>',
      ],
    ],
    'HealthCheckType' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$Type' => '<p>The type of health check to be performed. Currently supported types are TCP, HTTP, HTTPS, HTTP_STR_MATCH, and HTTPS_STR_MATCH.</p>',
      ],
    ],
    'HealthCheckVersion' => [
      'base' => NULL,
      'refs' => [
        'HealthCheck$HealthCheckVersion' => '<p>The version of the health check. You can optionally pass this value in a call to <code>UpdateHealthCheck</code> to prevent overwriting another change to the health check.</p>',
        'UpdateHealthCheckRequest$HealthCheckVersion' => '<p>Optional. When you specify a health check version, Route 53 compares this value with the current value in the health check, which prevents you from updating the health check when the versions don\'t match. Using <code>HealthCheckVersion</code> lets you prevent overwriting another change to the health check.</p>',
      ],
    ],
    'HealthCheckVersionMismatch' => [
      'base' => NULL,
      'refs' => [],
    ],
    'HealthChecks' => [
      'base' => NULL,
      'refs' => [
        'ListHealthChecksResponse$HealthChecks' => '<p>A complex type that contains information about the health checks associated with the current AWS account.</p>',
      ],
    ],
    'HostedZone' => [
      'base' => '<p>A complex type that contain information about the specified hosted zone.</p>',
      'refs' => [
        'CreateHostedZoneResponse$HostedZone' => '<p>A complex type that contains identifying information about the hosted zone.</p>',
        'GetHostedZoneResponse$HostedZone' => '<p>A complex type that contains the information about the specified hosted zone.</p>',
        'HostedZones$member' => NULL,
        'UpdateHostedZoneCommentResponse$HostedZone' => NULL,
      ],
    ],
    'HostedZoneAlreadyExists' => [
      'base' => '<p>The hosted zone you are trying to create already exists. Route 53 returns this error when a hosted zone has already been created with the specified <code>CallerReference</code>.</p>',
      'refs' => [],
    ],
    'HostedZoneConfig' => [
      'base' => '<p>A complex type that contains an optional comment about your hosted zone. If you don\'t want to specify a comment, you can omit the <code>HostedZoneConfig</code> and <code>Comment</code> elements from the XML document.</p>',
      'refs' => [
        'CreateHostedZoneRequest$HostedZoneConfig' => '<p>A complex type that contains an optional comment about your hosted zone.</p>',
        'HostedZone$Config' => '<p>A complex type that contains the <code>Comment</code> element.</p>',
      ],
    ],
    'HostedZoneNotEmpty' => [
      'base' => '<p>The hosted zone contains resource record sets in addition to the default NS and SOA resource record sets. Before you can delete the hosted zone, you must delete the additional resource record sets.</p>',
      'refs' => [],
    ],
    'HostedZoneNotFound' => [
      'base' => '<p>The specified HostedZone cannot be found.</p>',
      'refs' => [],
    ],
    'HostedZoneRRSetCount' => [
      'base' => NULL,
      'refs' => [
        'HostedZone$ResourceRecordSetCount' => '<p>Total number of resource record sets in the hosted zone.</p>',
      ],
    ],
    'HostedZones' => [
      'base' => NULL,
      'refs' => [
        'ListHostedZonesResponse$HostedZones' => '<p>A complex type that contains information about the hosted zones associated with the current AWS account.</p>',
      ],
    ],
    'IPAddress' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$IPAddress' => '<p>IP Address of the instance being checked. </p>',
        'HealthCheckObservation$IPAddress' => '<p>The IP address of the Route 53 health checker that performed the health check.</p>',
        'UpdateHealthCheckRequest$IPAddress' => '<p>The IP address of the resource that you want to check.</p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'IPAddressCidr' => [
      'base' => NULL,
      'refs' => [
        'CheckerIpRanges$member' => NULL,
      ],
    ],
    'IncompatibleVersion' => [
      'base' => '<p>The resource you are trying to access is unsupported on this Route 53 endpoint. Please consider using a newer endpoint or a tool that does so.</p>',
      'refs' => [],
    ],
    'InvalidArgument' => [
      'base' => '<p>At least one of the specified arguments is invalid.</p>',
      'refs' => [],
    ],
    'InvalidChangeBatch' => [
      'base' => '<p>This error contains a list of one or more error messages. Each error message indicates one error in the change batch. For more information, see <a href="http://docs.aws.amazon.com/Route53/latest/APIReference/API_ChangeResourceRecordSets.html#example_Errors">Example InvalidChangeBatch Errors</a>. </p>',
      'refs' => [],
    ],
    'InvalidDomainName' => [
      'base' => '<p>This error indicates that the specified domain name is not valid.</p>',
      'refs' => [],
    ],
    'InvalidInput' => [
      'base' => '<p>Some value specified in the request is invalid or the XML document is malformed.</p>',
      'refs' => [],
    ],
    'InvalidVPCId' => [
      'base' => '<p>The hosted zone you are trying to create for your VPC_ID does not belong to you. Route 53 returns this error when the VPC specified by <code>VPCId</code> does not belong to you.</p>',
      'refs' => [],
    ],
    'IsPrivateZone' => [
      'base' => NULL,
      'refs' => [
        'HostedZoneConfig$PrivateZone' => '<p>A value that indicates whether this is a private hosted zone. The value is returned in the response; do not specify it in the request.</p>',
      ],
    ],
    'LastVPCAssociation' => [
      'base' => '<p>The VPC you are trying to disassociate from the hosted zone is the last the VPC that is associated with the hosted zone. Route 53 currently doesn\'t support disassociate the last VPC from the hosted zone.</p>',
      'refs' => [],
    ],
    'LimitsExceeded' => [
      'base' => '<p>The limits specified for a resource have been exceeded.</p>',
      'refs' => [],
    ],
    'ListGeoLocationsRequest' => [
      'base' => '<p> The input for a ListGeoLocations request.</p>',
      'refs' => [],
    ],
    'ListGeoLocationsResponse' => [
      'base' => '<p>A complex type that contains information about the geo locations that are returned by the request and information about the response.</p>',
      'refs' => [],
    ],
    'ListHealthChecksRequest' => [
      'base' => '<p> To retrieve a list of your health checks, send a <code>GET</code> request to the <code>2013-04-01/healthcheck</code> resource. The response to this request includes a <code>HealthChecks</code> element with zero or more <code>HealthCheck</code> child elements. By default, the list of health checks is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the health check that the list begins with.</p> <note> Route 53 returns a maximum of 100 items. If you set <code>MaxItems</code> to a value greater than 100, Route 53 returns only the first 100.</note>',
      'refs' => [],
    ],
    'ListHealthChecksResponse' => [
      'base' => '<p> A complex type that contains the response for the request.</p>',
      'refs' => [],
    ],
    'ListHostedZonesRequest' => [
      'base' => '<p> To retrieve a list of your hosted zones, send a <code>GET</code> request to the <code>2013-04-01/hostedzone</code> resource. The response to this request includes a <code>HostedZones</code> element with zero or more <code>HostedZone</code> child elements. By default, the list of hosted zones is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the hosted zone that the list begins with. For more information about listing hosted zones, see <a href="http://docs.amazonwebservices.com/Route53/latest/DeveloperGuide/ListInfoOnHostedZone.html">Listing the Hosted Zones for an AWS Account</a> in the <i>Amazon Route 53 Developer Guide</i>.</p> <note> Route 53 returns a maximum of 100 items. If you set <code>MaxItems</code> to a value greater than 100, Route 53 returns only the first 100.</note>',
      'refs' => [],
    ],
    'ListHostedZonesResponse' => [
      'base' => '<p> A complex type that contains the response for the request.</p>',
      'refs' => [],
    ],
    'ListResourceRecordSetsRequest' => [
      'base' => '<p> The input for a ListResourceRecordSets request.</p>',
      'refs' => [],
    ],
    'ListResourceRecordSetsResponse' => [
      'base' => '<p>A complex type that contains information about the resource record sets that are returned by the request and information about the response.</p>',
      'refs' => [],
    ],
    'ListReusableDelegationSetsRequest' => [
      'base' => '<p> To retrieve a list of your reusable delegation sets, send a <code>GET</code> request to the <code>2013-04-01/delegationset</code> resource. The response to this request includes a <code>DelegationSets</code> element with zero or more <code>DelegationSet</code> child elements. By default, the list of reusable delegation sets is displayed on a single page. You can control the length of the page that is displayed by using the <code>MaxItems</code> parameter. You can use the <code>Marker</code> parameter to control the delegation set that the list begins with.</p> <note> Route 53 returns a maximum of 100 items. If you set <code>MaxItems</code> to a value greater than 100, Route 53 returns only the first 100.</note>',
      'refs' => [],
    ],
    'ListReusableDelegationSetsResponse' => [
      'base' => '<p> A complex type that contains the response for the request.</p>',
      'refs' => [],
    ],
    'ListTagsForResourceRequest' => [
      'base' => '<p>A complex type containing information about a request for a list of the tags that are associated with an individual resource.</p>',
      'refs' => [],
    ],
    'ListTagsForResourceResponse' => [
      'base' => '<p>A complex type containing tags for the specified resource.</p>',
      'refs' => [],
    ],
    'ListTagsForResourcesRequest' => [
      'base' => '<p>A complex type containing information about a request for a list of the tags that are associated with up to 10 specified resources.</p>',
      'refs' => [],
    ],
    'ListTagsForResourcesResponse' => [
      'base' => '<p>A complex type containing tags for the specified resources.</p>',
      'refs' => [],
    ],
    'NoSuchChange' => [
      'base' => NULL,
      'refs' => [],
    ],
    'NoSuchDelegationSet' => [
      'base' => '<p>The specified delegation set does not exist.</p>',
      'refs' => [],
    ],
    'NoSuchGeoLocation' => [
      'base' => '<p>The geo location you are trying to get does not exist.</p>',
      'refs' => [],
    ],
    'NoSuchHealthCheck' => [
      'base' => '<p>The health check you are trying to get or delete does not exist.</p>',
      'refs' => [],
    ],
    'NoSuchHostedZone' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Nonce' => [
      'base' => NULL,
      'refs' => [
        'CreateHostedZoneRequest$CallerReference' => '<p>A unique string that identifies the request and that allows failed <code>CreateHostedZone</code> requests to be retried without the risk of executing the operation twice. You must use a unique <code>CallerReference</code> string every time you create a hosted zone. <code>CallerReference</code> can be any unique string; you might choose to use a string that identifies your project, such as <code>DNSMigration_01</code>.</p> <p>Valid characters are any Unicode code points that are legal in an XML 1.0 document. The UTF-8 encoding of the value must be less than 128 bytes.</p>',
        'CreateReusableDelegationSetRequest$CallerReference' => '<p>A unique string that identifies the request and that allows failed <code>CreateReusableDelegationSet</code> requests to be retried without the risk of executing the operation twice. You must use a unique <code>CallerReference</code> string every time you create a reusable delegation set. <code>CallerReference</code> can be any unique string; you might choose to use a string that identifies your project, such as <code>DNSMigration_01</code>.</p> <p>Valid characters are any Unicode code points that are legal in an XML 1.0 document. The UTF-8 encoding of the value must be less than 128 bytes.</p>',
        'DelegationSet$CallerReference' => NULL,
        'HostedZone$CallerReference' => '<p>A unique string that identifies the request to create the hosted zone.</p>',
      ],
    ],
    'PageMarker' => [
      'base' => NULL,
      'refs' => [
        'ListHealthChecksRequest$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListHealthChecksResponse$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListHealthChecksResponse$NextMarker' => '<p> Indicates where to continue listing health checks. If <a>ListHealthChecksResponse$IsTruncated</a> is <code>true</code>, make another request to <code>ListHealthChecks</code> and include the value of the <code>NextMarker</code> element in the <code>Marker</code> element to get the next page of results.</p>',
        'ListHostedZonesRequest$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListHostedZonesResponse$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListHostedZonesResponse$NextMarker' => '<p> Indicates where to continue listing hosted zones. If <a>ListHostedZonesResponse$IsTruncated</a> is <code>true</code>, make another request to <code>ListHostedZones</code> and include the value of the <code>NextMarker</code> element in the <code>Marker</code> element to get the next page of results.</p>',
        'ListReusableDelegationSetsRequest$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListReusableDelegationSetsResponse$Marker' => '<p>If the request returned more than one page of results, submit another request and specify the value of <code>NextMarker</code> from the last response in the <code>marker</code> parameter to get the next page of results.</p>',
        'ListReusableDelegationSetsResponse$NextMarker' => '<p> Indicates where to continue listing reusable delegation sets. If <a>ListReusableDelegationSetsResponse$IsTruncated</a> is <code>true</code>, make another request to <code>ListReusableDelegationSets</code> and include the value of the <code>NextMarker</code> element in the <code>Marker</code> element to get the next page of results.</p>',
      ],
    ],
    'PageMaxItems' => [
      'base' => NULL,
      'refs' => [
        'ListGeoLocationsRequest$MaxItems' => '<p>The maximum number of geo locations you want in the response body.</p>',
        'ListGeoLocationsResponse$MaxItems' => '<p>The maximum number of records you requested. The maximum value of <code>MaxItems</code> is 100.</p>',
        'ListHealthChecksRequest$MaxItems' => '<p>Specify the maximum number of health checks to return per page of results.</p>',
        'ListHealthChecksResponse$MaxItems' => '<p>The maximum number of health checks to be included in the response body. If the number of health checks associated with this AWS account exceeds <code>MaxItems</code>, the value of <a>ListHealthChecksResponse$IsTruncated</a> in the response is <code>true</code>. Call <code>ListHealthChecks</code> again and specify the value of <a>ListHealthChecksResponse$NextMarker</a> in the <a>ListHostedZonesRequest$Marker</a> element to get the next page of results.</p>',
        'ListHostedZonesRequest$MaxItems' => '<p>Specify the maximum number of hosted zones to return per page of results.</p>',
        'ListHostedZonesResponse$MaxItems' => '<p>The maximum number of hosted zones to be included in the response body. If the number of hosted zones associated with this AWS account exceeds <code>MaxItems</code>, the value of <a>ListHostedZonesResponse$IsTruncated</a> in the response is <code>true</code>. Call <code>ListHostedZones</code> again and specify the value of <a>ListHostedZonesResponse$NextMarker</a> in the <a>ListHostedZonesRequest$Marker</a> element to get the next page of results.</p>',
        'ListResourceRecordSetsRequest$MaxItems' => '<p>The maximum number of records you want in the response body.</p>',
        'ListResourceRecordSetsResponse$MaxItems' => '<p>The maximum number of records you requested. The maximum value of <code>MaxItems</code> is 100.</p>',
        'ListReusableDelegationSetsRequest$MaxItems' => '<p>Specify the maximum number of reusable delegation sets to return per page of results.</p>',
        'ListReusableDelegationSetsResponse$MaxItems' => '<p>The maximum number of reusable delegation sets to be included in the response body. If the number of reusable delegation sets associated with this AWS account exceeds <code>MaxItems</code>, the value of <a>ListReusablDelegationSetsResponse$IsTruncated</a> in the response is <code>true</code>. Call <code>ListReusableDelegationSets</code> again and specify the value of <a>ListReusableDelegationSetsResponse$NextMarker</a> in the <a>ListReusableDelegationSetsRequest$Marker</a> element to get the next page of results.</p>',
      ],
    ],
    'PageTruncated' => [
      'base' => NULL,
      'refs' => [
        'ListGeoLocationsResponse$IsTruncated' => '<p> A flag that indicates whether there are more geo locations to be listed. If your results were truncated, you can make a follow-up request for the next page of results by using the values included in the <a>ListGeoLocationsResponse$NextContinentCode</a>, <a>ListGeoLocationsResponse$NextCountryCode</a> and <a>ListGeoLocationsResponse$NextSubdivisionCode</a> elements.</p> <p>Valid Values: <code>true</code> | <code>false</code></p>',
        'ListHealthChecksResponse$IsTruncated' => '<p> A flag indicating whether there are more health checks to be listed. If your results were truncated, you can make a follow-up request for the next page of results by using the <code>Marker</code> element.</p> <p>Valid Values: <code>true</code> | <code>false</code></p>',
        'ListHostedZonesResponse$IsTruncated' => '<p> A flag indicating whether there are more hosted zones to be listed. If your results were truncated, you can make a follow-up request for the next page of results by using the <code>Marker</code> element.</p> <p>Valid Values: <code>true</code> | <code>false</code></p>',
        'ListResourceRecordSetsResponse$IsTruncated' => '<p> A flag that indicates whether there are more resource record sets to be listed. If your results were truncated, you can make a follow-up request for the next page of results by using the <a>ListResourceRecordSetsResponse$NextRecordName</a> element.</p> <p>Valid Values: <code>true</code> | <code>false</code></p>',
        'ListReusableDelegationSetsResponse$IsTruncated' => '<p> A flag indicating whether there are more reusable delegation sets to be listed. If your results were truncated, you can make a follow-up request for the next page of results by using the <code>Marker</code> element.</p> <p>Valid Values: <code>true</code> | <code>false</code></p>',
      ],
    ],
    'Port' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$Port' => '<p>Port on which connection will be opened to the instance to health check. For HTTP and HTTP_STR_MATCH this defaults to 80 if the port is not specified. For HTTPS and HTTPS_STR_MATCH this defaults to 443 if the port is not specified.</p>',
        'UpdateHealthCheckRequest$Port' => '<p>The port on which you want Route 53 to open a connection to perform health checks.</p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'PriorRequestNotComplete' => [
      'base' => '<p>The request was rejected because Route 53 was still processing a prior request.</p>',
      'refs' => [],
    ],
    'PublicZoneVPCAssociation' => [
      'base' => '<p>The hosted zone you are trying to associate VPC with doesn\'t have any VPC association. Route 53 currently doesn\'t support associate a VPC with a public hosted zone.</p>',
      'refs' => [],
    ],
    'RData' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecord$Value' => '<p>The value of the <code>Value</code> element for the current resource record set.</p>',
      ],
    ],
    'RRType' => [
      'base' => NULL,
      'refs' => [
        'ListResourceRecordSetsRequest$StartRecordType' => '<p>The DNS type at which to begin the listing of resource record sets. </p> <p>Valid values: <code>A</code> | <code>AAAA</code> | <code>CNAME</code> | <code>MX</code> | <code>NS</code> | <code>PTR</code> | <code>SOA</code> | <code>SPF</code> | <code>SRV</code> | <code>TXT</code></p> <p>Values for Weighted Resource Record Sets: <code>A</code> | <code>AAAA</code> | <code>CNAME</code> | <code>TXT</code></p> <p> Values for Regional Resource Record Sets: <code>A</code> | <code>AAAA</code> | <code>CNAME</code> | <code>TXT</code></p> <p>Values for Alias Resource Record Sets: <code>A</code> | <code>AAAA</code></p> <p>Constraint: Specifying <code>type</code> without specifying <code>name</code> returns an <a>InvalidInput</a> error.</p>',
        'ListResourceRecordSetsResponse$NextRecordType' => '<p>If the results were truncated, the type of the next record in the list. This element is present only if <a>ListResourceRecordSetsResponse$IsTruncated</a> is true. </p>',
        'ResourceRecordSet$Type' => '<p>The type of the current resource record set.</p>',
      ],
    ],
    'RequestInterval' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$RequestInterval' => '<p>The number of seconds between the time that Route 53 gets a response from your endpoint and the time that it sends the next health-check request.</p> <p>Each Route 53 health checker makes requests at this interval. Valid values are 10 and 30. The default value is 30.</p>',
      ],
    ],
    'ResourceDescription' => [
      'base' => NULL,
      'refs' => [
        'ChangeBatch$Comment' => '<p><i>Optional:</i> Any comments you want to include about a change batch request.</p>',
        'ChangeInfo$Comment' => '<p>A complex type that describes change information about changes made to your hosted zone.</p> <p>This element contains an ID that you use when performing a <a>GetChange</a> action to get detailed information about the change.</p>',
        'HostedZoneConfig$Comment' => '<p>An optional comment about your hosted zone. If you don\'t want to specify a comment, you can omit the <code>HostedZoneConfig</code> and <code>Comment</code> elements from the XML document.</p>',
        'UpdateHostedZoneCommentRequest$Comment' => '<p>A comment about your hosted zone.</p>',
      ],
    ],
    'ResourceId' => [
      'base' => NULL,
      'refs' => [
        'AliasTarget$HostedZoneId' => '<p><i>Alias resource record sets only:</i> The value of the hosted zone ID for the AWS resource.</p> <p>For more information and an example, see <a href="http://docs.aws.amazon.com/Route53/latest/DeveloperGuide/CreatingAliasRRSets.html">Creating Alias Resource Record Sets</a> in the <i>Amazon Route 53 Developer Guide</i></p>.',
        'AssociateVPCWithHostedZoneRequest$HostedZoneId' => '<p> The ID of the hosted zone you want to associate your VPC with.</p> <p>Note that you cannot associate a VPC with a hosted zone that doesn\'t have an existing VPC association.</p>',
        'ChangeInfo$Id' => '<p>The ID of the request. Use this ID to track when the change has completed across all Amazon Route 53 DNS servers.</p>',
        'ChangeResourceRecordSetsRequest$HostedZoneId' => '<p> The ID of the hosted zone that contains the resource record sets that you want to change.</p>',
        'CreateHostedZoneRequest$DelegationSetId' => '<p>The delegation set id of the reusable delgation set whose NS records you want to assign to the new hosted zone.</p>',
        'CreateReusableDelegationSetRequest$HostedZoneId' => '<p>The ID of the hosted zone whose delegation set you want to mark as reusable. It is an optional parameter.</p>',
        'DelegationSet$Id' => NULL,
        'DeleteHostedZoneRequest$Id' => '<p> The ID of the hosted zone you want to delete.</p>',
        'DeleteReusableDelegationSetRequest$Id' => '<p> The ID of the reusable delegation set you want to delete.</p>',
        'DisassociateVPCFromHostedZoneRequest$HostedZoneId' => '<p> The ID of the hosted zone you want to disassociate your VPC from.</p> <p>Note that you cannot disassociate the last VPC from a hosted zone.</p>',
        'GetChangeRequest$Id' => '<p> The ID of the change batch request. The value that you specify here is the value that <code>ChangeResourceRecordSets</code> returned in the Id element when you submitted the request.</p>',
        'GetHostedZoneRequest$Id' => '<p>The ID of the hosted zone for which you want to get a list of the name servers in the delegation set.</p>',
        'GetReusableDelegationSetRequest$Id' => '<p>The ID of the reusable delegation set for which you want to get a list of the name server.</p>',
        'HostedZone$Id' => '<p>The ID of the specified hosted zone.</p>',
        'ListHostedZonesRequest$DelegationSetId' => NULL,
        'ListResourceRecordSetsRequest$HostedZoneId' => '<p> The ID of the hosted zone that contains the resource record sets that you want to get.</p>',
        'UpdateHostedZoneCommentRequest$Id' => '<p>The ID of the hosted zone you want to update.</p>',
      ],
    ],
    'ResourcePath' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$ResourcePath' => '<p>Path to ping on the instance to check the health. Required for HTTP, HTTPS, HTTP_STR_MATCH, and HTTPS_STR_MATCH health checks, HTTP request is issued to the instance on the given port and path.</p>',
        'UpdateHealthCheckRequest$ResourcePath' => '<p>The path that you want Amazon Route 53 to request when performing health checks. The path can be any value for which your endpoint will return an HTTP status code of 2xx or 3xx when the endpoint is healthy, for example the file /docs/route53-health-check.html. </p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'ResourceRecord' => [
      'base' => '<p>A complex type that contains the value of the <code>Value</code> element for the current resource record set.</p>',
      'refs' => [
        'ResourceRecords$member' => NULL,
      ],
    ],
    'ResourceRecordSet' => [
      'base' => '<p>A complex type that contains information about the current resource record set.</p>',
      'refs' => [
        'Change$ResourceRecordSet' => '<p>Information about the resource record set to create or delete.</p>',
        'ResourceRecordSets$member' => NULL,
      ],
    ],
    'ResourceRecordSetFailover' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecordSet$Failover' => '<p><i>Failover resource record sets only:</i> Among resource record sets that have the same combination of DNS name and type, a value that indicates whether the current resource record set is a primary or secondary resource record set. A failover set may contain at most one resource record set marked as primary and one resource record set marked as secondary. A resource record set marked as primary will be returned if any of the following are true: (1] an associated health check is passing, (2] if the resource record set is an alias with the evaluate target health and at least one target resource record set is healthy, (3] both the primary and secondary resource record set are failing health checks or (4] there is no secondary resource record set. A secondary resource record set will be returned if: (1] the primary is failing a health check and either the secondary is passing a health check or has no associated health check, or (2] there is no primary resource record set. </p> <p>Valid values: <code>PRIMARY</code> | <code>SECONDARY</code></p>',
      ],
    ],
    'ResourceRecordSetIdentifier' => [
      'base' => NULL,
      'refs' => [
        'ListResourceRecordSetsRequest$StartRecordIdentifier' => '<p><i>Weighted resource record sets only:</i> If results were truncated for a given DNS name and type, specify the value of <code>ListResourceRecordSetsResponse$NextRecordIdentifier</code> from the previous response to get the next resource record set that has the current DNS name and type.</p>',
        'ListResourceRecordSetsResponse$NextRecordIdentifier' => '<p><i>Weighted resource record sets only:</i> If results were truncated for a given DNS name and type, the value of <code>SetIdentifier</code> for the next resource record set that has the current DNS name and type.</p>',
        'ResourceRecordSet$SetIdentifier' => '<p><i>Weighted, Latency, Geo, and Failover resource record sets only:</i> An identifier that differentiates among multiple resource record sets that have the same combination of DNS name and type.</p>',
      ],
    ],
    'ResourceRecordSetRegion' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecordSet$Region' => '<p><i>Latency-based resource record sets only:</i> Among resource record sets that have the same combination of DNS name and type, a value that specifies the AWS region for the current resource record set.</p>',
      ],
    ],
    'ResourceRecordSetWeight' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecordSet$Weight' => '<p><i>Weighted resource record sets only:</i> Among resource record sets that have the same combination of DNS name and type, a value that determines what portion of traffic for the current resource record set is routed to the associated location.</p>',
      ],
    ],
    'ResourceRecordSets' => [
      'base' => NULL,
      'refs' => [
        'ListResourceRecordSetsResponse$ResourceRecordSets' => '<p>A complex type that contains information about the resource record sets that are returned by the request.</p>',
      ],
    ],
    'ResourceRecords' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecordSet$ResourceRecords' => '<p>A complex type that contains the resource records for the current resource record set.</p>',
      ],
    ],
    'ResourceTagSet' => [
      'base' => '<p>A complex type containing a resource and its associated tags.</p>',
      'refs' => [
        'ListTagsForResourceResponse$ResourceTagSet' => '<p>A <code>ResourceTagSet</code> containing tags associated with the specified resource.</p>',
        'ResourceTagSetList$member' => NULL,
      ],
    ],
    'ResourceTagSetList' => [
      'base' => NULL,
      'refs' => [
        'ListTagsForResourcesResponse$ResourceTagSets' => '<p>A list of <code>ResourceTagSet</code>s containing tags associated with the specified resources.</p>',
      ],
    ],
    'ResourceURI' => [
      'base' => NULL,
      'refs' => [
        'CreateHealthCheckResponse$Location' => '<p>The unique URL representing the new health check.</p>',
        'CreateHostedZoneResponse$Location' => '<p>The unique URL representing the new hosted zone.</p>',
        'CreateReusableDelegationSetResponse$Location' => '<p>The unique URL representing the new reusbale delegation set.</p>',
      ],
    ],
    'SearchString' => [
      'base' => NULL,
      'refs' => [
        'HealthCheckConfig$SearchString' => '<p>A string to search for in the body of a health check response. Required for HTTP_STR_MATCH and HTTPS_STR_MATCH health checks.</p>',
        'UpdateHealthCheckRequest$SearchString' => '<p>If the value of <code>Type</code> is <code>HTTP_STR_MATCH</code> or <code>HTTP_STR_MATCH</code>, the string that you want Route 53 to search for in the response body from the specified resource. If the string appears in the response body, Route 53 considers the resource healthy. </p> <p>Specify this value only if you want to change it.</p>',
      ],
    ],
    'Status' => [
      'base' => NULL,
      'refs' => [
        'StatusReport$Status' => '<p>The observed health check status.</p>',
      ],
    ],
    'StatusReport' => [
      'base' => '<p>A complex type that contains information about the health check status for the current observation.</p>',
      'refs' => [
        'HealthCheckObservation$StatusReport' => '<p>A complex type that contains information about the health check status for the current observation.</p>',
      ],
    ],
    'TTL' => [
      'base' => NULL,
      'refs' => [
        'ResourceRecordSet$TTL' => '<p>The cache time to live for the current resource record set.</p>',
      ],
    ],
    'Tag' => [
      'base' => '<p>A single tag containing a key and value.</p>',
      'refs' => [
        'TagList$member' => NULL,
      ],
    ],
    'TagKey' => [
      'base' => NULL,
      'refs' => [
        'Tag$Key' => '<p>The key for a <code>Tag</code>.</p>',
        'TagKeyList$member' => NULL,
      ],
    ],
    'TagKeyList' => [
      'base' => NULL,
      'refs' => [
        'ChangeTagsForResourceRequest$RemoveTagKeys' => '<p>A list of <code>Tag</code> keys that you want to remove from the specified resource.</p>',
      ],
    ],
    'TagList' => [
      'base' => NULL,
      'refs' => [
        'ChangeTagsForResourceRequest$AddTags' => '<p>A complex type that contains a list of <code>Tag</code> elements. Each <code>Tag</code> element identifies a tag that you want to add or update for the specified resource.</p>',
        'ResourceTagSet$Tags' => '<p>The tags associated with the specified resource.</p>',
      ],
    ],
    'TagResourceId' => [
      'base' => NULL,
      'refs' => [
        'ChangeTagsForResourceRequest$ResourceId' => '<p>The ID of the resource for which you want to add, change, or delete tags.</p>',
        'ListTagsForResourceRequest$ResourceId' => '<p>The ID of the resource for which you want to retrieve tags.</p>',
        'ResourceTagSet$ResourceId' => '<p>The ID for the specified resource.</p>',
        'TagResourceIdList$member' => NULL,
      ],
    ],
    'TagResourceIdList' => [
      'base' => NULL,
      'refs' => [
        'ListTagsForResourcesRequest$ResourceIds' => '<p>A complex type that contains the ResourceId element for each resource for which you want to get a list of tags.</p>',
      ],
    ],
    'TagResourceType' => [
      'base' => NULL,
      'refs' => [
        'ChangeTagsForResourceRequest$ResourceType' => '<p>The type of the resource.</p> <p>- The resource type for health checks is <code>healthcheck</code>.</p> <p>- The resource type for hosted zones is <code>hostedzone</code>.</p>',
        'ListTagsForResourceRequest$ResourceType' => '<p>The type of the resource.</p> <p>- The resource type for health checks is <code>healthcheck</code>.</p> <p>- The resource type for hosted zones is <code>hostedzone</code>.</p>',
        'ListTagsForResourcesRequest$ResourceType' => '<p>The type of the resources.</p> <p>- The resource type for health checks is <code>healthcheck</code>.</p> <p>- The resource type for hosted zones is <code>hostedzone</code>.</p>',
        'ResourceTagSet$ResourceType' => '<p>The type of the resource.</p> <p>- The resource type for health checks is <code>healthcheck</code>.</p> <p>- The resource type for hosted zones is <code>hostedzone</code>.</p>',
      ],
    ],
    'TagValue' => [
      'base' => NULL,
      'refs' => [
        'Tag$Value' => '<p>The value for a <code>Tag</code>.</p>',
      ],
    ],
    'ThrottlingException' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TimeStamp' => [
      'base' => NULL,
      'refs' => [
        'ChangeInfo$SubmittedAt' => '<p>The date and time the change was submitted, in the format <code>YYYY-MM-DDThh:mm:ssZ</code>, as specified in the ISO 8601 standard (for example, 2009-11-19T19:37:58Z]. The <code>Z</code> after the time indicates that the time is listed in Coordinated Universal Time (UTC], which is synonymous with Greenwich Mean Time in this context.</p>',
        'StatusReport$CheckedTime' => '<p>The date and time the health check status was observed, in the format <code>YYYY-MM-DDThh:mm:ssZ</code>, as specified in the ISO 8601 standard (for example, 2009-11-19T19:37:58Z]. The <code>Z</code> after the time indicates that the time is listed in Coordinated Universal Time (UTC], which is synonymous with Greenwich Mean Time in this context.</p>',
      ],
    ],
    'TooManyHealthChecks' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TooManyHostedZones' => [
      'base' => '<p>This error indicates that you\'ve reached the maximum number of hosted zones that can be created for the current AWS account. You can request an increase to the limit on the <a href="http://aws.amazon.com/route53-request/">Contact Us</a> page.</p>',
      'refs' => [],
    ],
    'UpdateHealthCheckRequest' => [
      'base' => '<p>&gt;A complex type that contains information about the request to update a health check.</p>',
      'refs' => [],
    ],
    'UpdateHealthCheckResponse' => [
      'base' => NULL,
      'refs' => [],
    ],
    'UpdateHostedZoneCommentRequest' => [
      'base' => '<p>A complex type that contains information about the request to update a hosted zone comment.</p>',
      'refs' => [],
    ],
    'UpdateHostedZoneCommentResponse' => [
      'base' => '<p>A complex type containing information about the specified hosted zone after the update.</p>',
      'refs' => [],
    ],
    'VPC' => [
      'base' => NULL,
      'refs' => [
        'AssociateVPCWithHostedZoneRequest$VPC' => '<p>The VPC that you want your hosted zone to be associated with. </p>',
        'CreateHostedZoneRequest$VPC' => '<p>The VPC that you want your hosted zone to be associated with. By providing this parameter, your newly created hosted cannot be resolved anywhere other than the given VPC.</p>',
        'CreateHostedZoneResponse$VPC' => NULL,
        'DisassociateVPCFromHostedZoneRequest$VPC' => '<p>The VPC that you want your hosted zone to be disassociated from. </p>',
        'VPCs$member' => NULL,
      ],
    ],
    'VPCAssociationNotFound' => [
      'base' => '<p>The VPC you specified is not currently associated with the hosted zone.</p>',
      'refs' => [],
    ],
    'VPCId' => [
      'base' => '<p>A VPC ID</p>',
      'refs' => [
        'VPC$VPCId' => NULL,
      ],
    ],
    'VPCRegion' => [
      'base' => NULL,
      'refs' => [
        'VPC$VPCRegion' => NULL,
      ],
    ],
    'VPCs' => [
      'base' => '<p>A list of VPCs</p>',
      'refs' => [
        'GetHostedZoneResponse$VPCs' => '<p>A complex type that contains information about VPCs associated with the specified hosted zone.</p>',
      ],
    ],
  ],
];
