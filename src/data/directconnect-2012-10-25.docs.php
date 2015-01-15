<?php return [
  'operations' => [
    'AllocateConnectionOnInterconnect' => '<p>Creates a hosted connection on an interconnect.</p> <p>Allocates a VLAN number and a specified amount of bandwidth for use by a hosted connection on the given interconnect.</p>',
    'AllocatePrivateVirtualInterface' => '<p>Provisions a private virtual interface to be owned by a different customer.</p> <p>The owner of a connection calls this function to provision a private virtual interface which will be owned by another AWS customer.</p> <p>Virtual interfaces created using this function must be confirmed by the virtual interface owner by calling ConfirmPrivateVirtualInterface. Until this step has been completed, the virtual interface will be in \'Confirming\' state, and will not be available for handling traffic.</p>',
    'AllocatePublicVirtualInterface' => '<p>Provisions a public virtual interface to be owned by a different customer.</p> <p>The owner of a connection calls this function to provision a public virtual interface which will be owned by another AWS customer.</p> <p>Virtual interfaces created using this function must be confirmed by the virtual interface owner by calling ConfirmPublicVirtualInterface. Until this step has been completed, the virtual interface will be in \'Confirming\' state, and will not be available for handling traffic.</p>',
    'ConfirmConnection' => '<p>Confirm the creation of a hosted connection on an interconnect.</p> <p>Upon creation, the hosted connection is initially in the \'Ordering\' state, and will remain in this state until the owner calls ConfirmConnection to confirm creation of the hosted connection.</p>',
    'ConfirmPrivateVirtualInterface' => '<p>Accept ownership of a private virtual interface created by another customer.</p> <p>After the virtual interface owner calls this function, the virtual interface will be created and attached to the given virtual private gateway, and will be available for handling traffic.</p>',
    'ConfirmPublicVirtualInterface' => '<p>Accept ownership of a public virtual interface created by another customer.</p> <p>After the virtual interface owner calls this function, the specified virtual interface will be created and made available for handling traffic.</p>',
    'CreateConnection' => '<p>Creates a new connection between the customer network and a specific AWS Direct Connect location.</p> <p>A connection links your internal network to an AWS Direct Connect location over a standard 1 gigabit or 10 gigabit Ethernet fiber-optic cable. One end of the cable is connected to your router, the other to an AWS Direct Connect router. An AWS Direct Connect location provides access to Amazon Web Services in the region it is associated with. You can establish connections with AWS Direct Connect locations in multiple regions, but a connection in one region does not provide connectivity to other regions.</p>',
    'CreateInterconnect' => '<p>Creates a new interconnect between a AWS Direct Connect partner\'s network and a specific AWS Direct Connect location.</p> <p>An interconnect is a connection which is capable of hosting other connections. The AWS Direct Connect partner can use an interconnect to provide sub-1Gbps AWS Direct Connect service to tier 2 customers who do not have their own connections. Like a standard connection, an interconnect links the AWS Direct Connect partner\'s network to an AWS Direct Connect location over a standard 1 Gbps or 10 Gbps Ethernet fiber-optic cable. One end is connected to the partner\'s router, the other to an AWS Direct Connect router.</p> <p>For each end customer, the AWS Direct Connect partner provisions a connection on their interconnect by calling AllocateConnectionOnInterconnect. The end customer can then connect to AWS resources by creating a virtual interface on their connection, using the VLAN assigned to them by the AWS Direct Connect partner.</p>',
    'CreatePrivateVirtualInterface' => '<p>Creates a new private virtual interface. A virtual interface is the VLAN that transports AWS Direct Connect traffic. A private virtual interface supports sending traffic to a single virtual private cloud (VPC].</p>',
    'CreatePublicVirtualInterface' => '<p>Creates a new public virtual interface. A virtual interface is the VLAN that transports AWS Direct Connect traffic. A public virtual interface supports sending traffic to public services of AWS such as Amazon Simple Storage Service (Amazon S3].</p>',
    'DeleteConnection' => '<p>Deletes the connection.</p> <p>Deleting a connection only stops the AWS Direct Connect port hour and data transfer charges. You need to cancel separately with the providers any services or charges for cross-connects or network circuits that connect you to the AWS Direct Connect location.</p>',
    'DeleteInterconnect' => '<p>Deletes the specified interconnect.</p>',
    'DeleteVirtualInterface' => '<p>Deletes a virtual interface.</p>',
    'DescribeConnections' => '<p>Displays all connections in this region.</p> <p>If a connection ID is provided, the call returns only that particular connection.</p>',
    'DescribeConnectionsOnInterconnect' => '<p>Return a list of connections that have been provisioned on the given interconnect.</p>',
    'DescribeInterconnects' => '<p>Returns a list of interconnects owned by the AWS account.</p> <p>If an interconnect ID is provided, it will only return this particular interconnect.</p>',
    'DescribeLocations' => '<p>Returns the list of AWS Direct Connect locations in the current AWS region. These are the locations that may be selected when calling CreateConnection or CreateInterconnect.</p>',
    'DescribeVirtualGateways' => '<p>Returns a list of virtual private gateways owned by the AWS account.</p> <p>You can create one or more AWS Direct Connect private virtual interfaces linking to a virtual private gateway. A virtual private gateway can be managed via Amazon Virtual Private Cloud (VPC] console or the <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-CreateVpnGateway.html">EC2 CreateVpnGateway</a> action.</p>',
    'DescribeVirtualInterfaces' => '<p>Displays all virtual interfaces for an AWS account. Virtual interfaces deleted fewer than 15 minutes before DescribeVirtualInterfaces is called are also returned. If a connection ID is included then only virtual interfaces associated with this connection will be returned. If a virtual interface ID is included then only a single virtual interface will be returned.</p> <p>A virtual interface (VLAN] transmits the traffic between the AWS Direct Connect location and the customer.</p> <p>If a connection ID is provided, only virtual interfaces provisioned on the specified connection will be returned. If a virtual interface ID is provided, only this particular virtual interface will be returned.</p>',
  ],
  'service' => '<p>AWS Direct Connect makes it easy to establish a dedicated network connection from your premises to Amazon Web Services (AWS]. Using AWS Direct Connect, you can establish private connectivity between AWS and your data center, office, or colocation environment, which in many cases can reduce your network costs, increase bandwidth throughput, and provide a more consistent network experience than Internet-based connections.</p> <p>The AWS Direct Connect API Reference provides descriptions, syntax, and usage examples for each of the actions and data types for AWS Direct Connect. Use the following links to get started using the <i>AWS Direct Connect API Reference</i>:</p> <ul> <li> <a href="http://docs.aws.amazon.com/directconnect/latest/APIReference/API_Operations.html">Actions</a>: An alphabetical list of all AWS Direct Connect actions.</li> <li> <a href="http://docs.aws.amazon.com/directconnect/latest/APIReference/API_Types.html">Data Types</a>: An alphabetical list of all AWS Direct Connect data types.</li> <li> <a href="http://docs.aws.amazon.com/directconnect/latest/APIReference/CommonParameters.html">Common Query Parameters</a>: Parameters that all Query actions can use.</li> <li> <a href="http://docs.aws.amazon.com/directconnect/latest/APIReference/CommonErrors.html">Common Errors</a>: Client and server errors that all actions can return.</li> </ul>',
  'shapes' => [
    'ASN' => [
      'base' => '<p>Autonomous system (AS] number for Border Gateway Protocol (BGP] configuration.</p> <p>Example: 65000</p>',
      'refs' => [
        'NewPrivateVirtualInterface$asn' => NULL,
        'NewPrivateVirtualInterfaceAllocation$asn' => NULL,
        'NewPublicVirtualInterface$asn' => NULL,
        'NewPublicVirtualInterfaceAllocation$asn' => NULL,
        'VirtualInterface$asn' => NULL,
      ],
    ],
    'AllocateConnectionOnInterconnectRequest' => [
      'base' => '<p>Container for the parameters to the AllocateConnectionOnInterconnect operation.</p>',
      'refs' => [],
    ],
    'AllocatePrivateVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the AllocatePrivateVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'AllocatePublicVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the AllocatePublicVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'AmazonAddress' => [
      'base' => '<p>IP address assigned to the Amazon interface.</p> <p>Example: 192.168.1.1/30</p>',
      'refs' => [
        'NewPrivateVirtualInterface$amazonAddress' => NULL,
        'NewPrivateVirtualInterfaceAllocation$amazonAddress' => NULL,
        'NewPublicVirtualInterface$amazonAddress' => NULL,
        'NewPublicVirtualInterfaceAllocation$amazonAddress' => NULL,
        'VirtualInterface$amazonAddress' => NULL,
      ],
    ],
    'BGPAuthKey' => [
      'base' => '<p>Authentication key for BGP configuration.</p> <p>Example: asdf34example</p>',
      'refs' => [
        'NewPrivateVirtualInterface$authKey' => NULL,
        'NewPrivateVirtualInterfaceAllocation$authKey' => NULL,
        'NewPublicVirtualInterface$authKey' => NULL,
        'NewPublicVirtualInterfaceAllocation$authKey' => NULL,
        'VirtualInterface$authKey' => NULL,
      ],
    ],
    'Bandwidth' => [
      'base' => '<p>Bandwidth of the connection.</p> <p>Example: 1Gbps</p> <p>Default: None</p>',
      'refs' => [
        'AllocateConnectionOnInterconnectRequest$bandwidth' => '<p>Bandwidth of the connection.</p> <p>Example: "<i>500Mbps</i>"</p> <p>Default: None</p>',
        'Connection$bandwidth' => '<p>Bandwidth of the connection.</p> <p>Example: 1Gbps (for regular connections], or 500Mbps (for hosted connections]</p> <p>Default: None</p>',
        'CreateConnectionRequest$bandwidth' => NULL,
        'CreateInterconnectRequest$bandwidth' => '<p>The port bandwidth</p> <p>Example: 1Gbps</p> <p>Default: None</p> <p>Available values: 1Gbps,10Gbps</p>',
        'Interconnect$bandwidth' => NULL,
      ],
    ],
    'CIDR' => [
      'base' => NULL,
      'refs' => [
        'RouteFilterPrefix$cidr' => '<p>CIDR notation for the advertised route. Multiple routes are separated by commas.</p> <p>Example: 10.10.10.0/24,10.10.11.0/24</p>',
      ],
    ],
    'ConfirmConnectionRequest' => [
      'base' => '<p>Container for the parameters to the ConfirmConnection operation.</p>',
      'refs' => [],
    ],
    'ConfirmConnectionResponse' => [
      'base' => '<p>The response received when ConfirmConnection is called.</p>',
      'refs' => [],
    ],
    'ConfirmPrivateVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the ConfirmPrivateVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'ConfirmPrivateVirtualInterfaceResponse' => [
      'base' => '<p>The response received when ConfirmPrivateVirtualInterface is called.</p>',
      'refs' => [],
    ],
    'ConfirmPublicVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the ConfirmPublicVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'ConfirmPublicVirtualInterfaceResponse' => [
      'base' => '<p>The response received when ConfirmPublicVirtualInterface is called.</p>',
      'refs' => [],
    ],
    'Connection' => [
      'base' => '<p>A connection represents the physical network connection between the AWS Direct Connect location and the customer.</p>',
      'refs' => [
        'ConnectionList$member' => NULL,
      ],
    ],
    'ConnectionId' => [
      'base' => '<p>ID of the connection.</p> <p>Example: dxcon-fg5678gh</p> <p>Default: None</p>',
      'refs' => [
        'AllocatePrivateVirtualInterfaceRequest$connectionId' => '<p>The connection ID on which the private virtual interface is provisioned.</p> <p>Default: None</p>',
        'AllocatePublicVirtualInterfaceRequest$connectionId' => '<p>The connection ID on which the public virtual interface is provisioned.</p> <p>Default: None</p>',
        'ConfirmConnectionRequest$connectionId' => NULL,
        'Connection$connectionId' => NULL,
        'CreatePrivateVirtualInterfaceRequest$connectionId' => NULL,
        'CreatePublicVirtualInterfaceRequest$connectionId' => NULL,
        'DeleteConnectionRequest$connectionId' => NULL,
        'DescribeConnectionsRequest$connectionId' => NULL,
        'DescribeVirtualInterfacesRequest$connectionId' => NULL,
        'VirtualInterface$connectionId' => NULL,
      ],
    ],
    'ConnectionList' => [
      'base' => '<p>A list of connections.</p>',
      'refs' => [
        'Connections$connections' => '<p>A list of connections.</p>',
      ],
    ],
    'ConnectionName' => [
      'base' => '<p>The name of the connection.</p> <p>Example: "<i>My Connection to AWS</i>"</p> <p>Default: None</p>',
      'refs' => [
        'AllocateConnectionOnInterconnectRequest$connectionName' => '<p>Name of the provisioned connection.</p> <p>Example: "<i>500M Connection to AWS</i>"</p> <p>Default: None</p>',
        'Connection$connectionName' => NULL,
        'CreateConnectionRequest$connectionName' => NULL,
      ],
    ],
    'ConnectionState' => [
      'base' => 'State of the connection. <ul> <li> <b>Ordering</b>: The initial state of a hosted connection provisioned on an interconnect. The connection stays in the ordering state until the owner of the hosted connection confirms or declines the connection order.</li> <li> <b>Requested</b>: The initial state of a standard connection. The connection stays in the requested state until the Letter of Authorization (LOA] is sent to the customer.</li> <li> <b>Pending</b>: The connection has been approved, and is being initialized.</li> <li> <b>Available</b>: The network link is up, and the connection is ready for use.</li> <li> <b>Down</b>: The network link is down.</li> <li> <b>Deleted</b>: The connection has been deleted.</li> <li> <b>Rejected</b>: A hosted connection in the \'Ordering\' state will enter the \'Rejected\' state if it is deleted by the end customer.</li> </ul>',
      'refs' => [
        'ConfirmConnectionResponse$connectionState' => NULL,
        'Connection$connectionState' => NULL,
      ],
    ],
    'Connections' => [
      'base' => '<p>A structure containing a list of connections.</p>',
      'refs' => [],
    ],
    'CreateConnectionRequest' => [
      'base' => '<p>Container for the parameters to the CreateConnection operation.</p>',
      'refs' => [],
    ],
    'CreateInterconnectRequest' => [
      'base' => '<p>Container for the parameters to the CreateInterconnect operation.</p>',
      'refs' => [],
    ],
    'CreatePrivateVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the CreatePrivateVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'CreatePublicVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the CreatePublicVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'CustomerAddress' => [
      'base' => '<p>IP address assigned to the customer interface.</p> <p>Example: 192.168.1.2/30</p>',
      'refs' => [
        'NewPrivateVirtualInterface$customerAddress' => NULL,
        'NewPrivateVirtualInterfaceAllocation$customerAddress' => NULL,
        'NewPublicVirtualInterface$customerAddress' => NULL,
        'NewPublicVirtualInterfaceAllocation$customerAddress' => NULL,
        'VirtualInterface$customerAddress' => NULL,
      ],
    ],
    'DeleteConnectionRequest' => [
      'base' => '<p>Container for the parameters to the DeleteConnection operation.</p>',
      'refs' => [],
    ],
    'DeleteInterconnectRequest' => [
      'base' => '<p>Container for the parameters to the DeleteInterconnect operation.</p>',
      'refs' => [],
    ],
    'DeleteInterconnectResponse' => [
      'base' => '<p>The response received when DeleteInterconnect is called.</p>',
      'refs' => [],
    ],
    'DeleteVirtualInterfaceRequest' => [
      'base' => '<p>Container for the parameters to the DeleteVirtualInterface operation.</p>',
      'refs' => [],
    ],
    'DeleteVirtualInterfaceResponse' => [
      'base' => '<p>The response received when DeleteVirtualInterface is called.</p>',
      'refs' => [],
    ],
    'DescribeConnectionsOnInterconnectRequest' => [
      'base' => '<p>Container for the parameters to the DescribeConnectionsOnInterconnect operation.</p>',
      'refs' => [],
    ],
    'DescribeConnectionsRequest' => [
      'base' => '<p>Container for the parameters to the DescribeConnections operation.</p>',
      'refs' => [],
    ],
    'DescribeInterconnectsRequest' => [
      'base' => '<p>Container for the parameters to the DescribeInterconnects operation.</p>',
      'refs' => [],
    ],
    'DescribeVirtualInterfacesRequest' => [
      'base' => '<p>Container for the parameters to the DescribeVirtualInterfaces operation.</p>',
      'refs' => [],
    ],
    'DirectConnectClientException' => [
      'base' => '<p>The API was called with invalid parameters. The error message will contain additional details about the cause.</p>',
      'refs' => [],
    ],
    'DirectConnectServerException' => [
      'base' => '<p>A server-side error occurred during the API call. The error message will contain additional details about the cause.</p>',
      'refs' => [],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'DirectConnectClientException$message' => NULL,
        'DirectConnectServerException$message' => NULL,
      ],
    ],
    'Interconnect' => [
      'base' => '<p>An interconnect is a connection that can host other connections.</p> <p>Like a standard AWS Direct Connect connection, an interconnect represents the physical connection between an AWS Direct Connect partner\'s network and a specific Direct Connect location. An AWS Direct Connect partner who owns an interconnect can provision hosted connections on the interconnect for their end customers, thereby providing the end customers with connectivity to AWS services.</p> <p>The resources of the interconnect, including bandwidth and VLAN numbers, are shared by all of the hosted connections on the interconnect, and the owner of the interconnect determines how these resources are assigned.</p>',
      'refs' => [
        'InterconnectList$member' => NULL,
      ],
    ],
    'InterconnectId' => [
      'base' => '<p>The ID of the interconnect.</p> <p>Example: dxcon-abc123</p>',
      'refs' => [
        'AllocateConnectionOnInterconnectRequest$interconnectId' => '<p>ID of the interconnect on which the connection will be provisioned.</p> <p>Example: dxcon-456abc78</p> <p>Default: None</p>',
        'DeleteInterconnectRequest$interconnectId' => NULL,
        'DescribeConnectionsOnInterconnectRequest$interconnectId' => '<p>ID of the interconnect on which a list of connection is provisioned.</p> <p>Example: dxcon-abc123</p> <p>Default: None</p>',
        'DescribeInterconnectsRequest$interconnectId' => NULL,
        'Interconnect$interconnectId' => NULL,
      ],
    ],
    'InterconnectList' => [
      'base' => '<p>A list of interconnects.</p>',
      'refs' => [
        'Interconnects$interconnects' => '<p>A list of interconnects.</p>',
      ],
    ],
    'InterconnectName' => [
      'base' => '<p>The name of the interconnect.</p> <p>Example: "<i>1G Interconnect to AWS</i>"</p>',
      'refs' => [
        'CreateInterconnectRequest$interconnectName' => '<p>The name of the interconnect.</p> <p>Example: "<i>1G Interconnect to AWS</i>"</p> <p>Default: None</p>',
        'Interconnect$interconnectName' => NULL,
      ],
    ],
    'InterconnectState' => [
      'base' => 'State of the interconnect. <ul> <li> <b>Requested</b>: The initial state of an interconnect. The interconnect stays in the requested state until the Letter of Authorization (LOA] is sent to the customer.</li> <li> <b>Pending</b>: The interconnect has been approved, and is being initialized.</li> <li> <b>Available</b>: The network link is up, and the interconnect is ready for use.</li> <li> <b>Down</b>: The network link is down.</li> <li> <b>Deleted</b>: The interconnect has been deleted.</li> </ul>',
      'refs' => [
        'DeleteInterconnectResponse$interconnectState' => NULL,
        'Interconnect$interconnectState' => NULL,
      ],
    ],
    'Interconnects' => [
      'base' => '<p>A structure containing a list of interconnects.</p>',
      'refs' => [],
    ],
    'Location' => [
      'base' => '<p>An AWS Direct Connect location where connections and interconnects can be requested.</p>',
      'refs' => [
        'LocationList$member' => NULL,
      ],
    ],
    'LocationCode' => [
      'base' => '<p>Where the connection is located.</p> <p>Example: EqSV5</p> <p>Default: None</p>',
      'refs' => [
        'Connection$location' => NULL,
        'CreateConnectionRequest$location' => NULL,
        'CreateInterconnectRequest$location' => '<p>Where the interconnect is located</p> <p>Example: EqSV5</p> <p>Default: None</p>',
        'Interconnect$location' => NULL,
        'Location$locationCode' => '<p>The code used to indicate the AWS Direct Connect location.</p>',
        'VirtualInterface$location' => NULL,
      ],
    ],
    'LocationList' => [
      'base' => NULL,
      'refs' => [
        'Locations$locations' => NULL,
      ],
    ],
    'LocationName' => [
      'base' => NULL,
      'refs' => [
        'Location$locationName' => '<p>The name of the AWS Direct Connect location. The name includes the colocation partner name and the physical site of the lit building.</p>',
      ],
    ],
    'Locations' => [
      'base' => NULL,
      'refs' => [],
    ],
    'NewPrivateVirtualInterface' => [
      'base' => '<p>A structure containing information about a new private virtual interface.</p>',
      'refs' => [
        'CreatePrivateVirtualInterfaceRequest$newPrivateVirtualInterface' => '<p>Detailed information for the private virtual interface to be created.</p> <p>Default: None</p>',
      ],
    ],
    'NewPrivateVirtualInterfaceAllocation' => [
      'base' => '<p>A structure containing information about a private virtual interface that will be provisioned on a connection.</p>',
      'refs' => [
        'AllocatePrivateVirtualInterfaceRequest$newPrivateVirtualInterfaceAllocation' => '<p>Detailed information for the private virtual interface to be provisioned.</p> <p>Default: None</p>',
      ],
    ],
    'NewPublicVirtualInterface' => [
      'base' => '<p>A structure containing information about a new public virtual interface.</p>',
      'refs' => [
        'CreatePublicVirtualInterfaceRequest$newPublicVirtualInterface' => '<p>Detailed information for the public virtual interface to be created.</p> <p>Default: None</p>',
      ],
    ],
    'NewPublicVirtualInterfaceAllocation' => [
      'base' => '<p>A structure containing information about a public virtual interface that will be provisioned on a connection.</p>',
      'refs' => [
        'AllocatePublicVirtualInterfaceRequest$newPublicVirtualInterfaceAllocation' => '<p>Detailed information for the public virtual interface to be provisioned.</p> <p>Default: None</p>',
      ],
    ],
    'OwnerAccount' => [
      'base' => NULL,
      'refs' => [
        'AllocateConnectionOnInterconnectRequest$ownerAccount' => '<p>Numeric account Id of the customer for whom the connection will be provisioned.</p> <p>Example: 123443215678</p> <p>Default: None</p>',
        'AllocatePrivateVirtualInterfaceRequest$ownerAccount' => '<p>The AWS account that will own the new private virtual interface.</p> <p>Default: None</p>',
        'AllocatePublicVirtualInterfaceRequest$ownerAccount' => '<p>The AWS account that will own the new public virtual interface.</p> <p>Default: None</p>',
        'Connection$ownerAccount' => NULL,
        'VirtualInterface$ownerAccount' => NULL,
      ],
    ],
    'PartnerName' => [
      'base' => NULL,
      'refs' => [
        'Connection$partnerName' => NULL,
      ],
    ],
    'Region' => [
      'base' => '<p>The AWS region where the connection is located.</p> <p>Example: us-east-1</p> <p>Default: None</p>',
      'refs' => [
        'Connection$region' => NULL,
        'Interconnect$region' => NULL,
      ],
    ],
    'RouteFilterPrefix' => [
      'base' => '<p>A route filter prefix that the customer can advertise through Border Gateway Protocol (BGP] over a public virtual interface.</p>',
      'refs' => [
        'RouteFilterPrefixList$member' => NULL,
      ],
    ],
    'RouteFilterPrefixList' => [
      'base' => '<p>A list of routes to be advertised to the AWS network in this region (public virtual interface] or your VPC (private virtual interface].</p>',
      'refs' => [
        'NewPublicVirtualInterface$routeFilterPrefixes' => NULL,
        'NewPublicVirtualInterfaceAllocation$routeFilterPrefixes' => NULL,
        'VirtualInterface$routeFilterPrefixes' => NULL,
      ],
    ],
    'RouterConfig' => [
      'base' => NULL,
      'refs' => [
        'VirtualInterface$customerRouterConfig' => '<p>Information for generating the customer router configuration.</p>',
      ],
    ],
    'VLAN' => [
      'base' => '<p>The VLAN ID.</p> <p>Example: 101</p>',
      'refs' => [
        'AllocateConnectionOnInterconnectRequest$vlan' => '<p>The dedicated VLAN provisioned to the connection.</p> <p>Example: 101</p> <p>Default: None</p>',
        'Connection$vlan' => NULL,
        'NewPrivateVirtualInterface$vlan' => NULL,
        'NewPrivateVirtualInterfaceAllocation$vlan' => NULL,
        'NewPublicVirtualInterface$vlan' => NULL,
        'NewPublicVirtualInterfaceAllocation$vlan' => NULL,
        'VirtualInterface$vlan' => NULL,
      ],
    ],
    'VirtualGateway' => [
      'base' => '<p>You can create one or more AWS Direct Connect private virtual interfaces linking to your virtual private gateway.</p> <p>Virtual private gateways can be managed using the Amazon Virtual Private Cloud (Amazon VPC] console or the <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-CreateVpnGateway.html">Amazon EC2 CreateVpnGateway action</a>.</p>',
      'refs' => [
        'VirtualGatewayList$member' => NULL,
      ],
    ],
    'VirtualGatewayId' => [
      'base' => '<p>The ID of the virtual private gateway to a VPC. This only applies to private virtual interfaces.</p> <p>Example: vgw-123er56</p>',
      'refs' => [
        'ConfirmPrivateVirtualInterfaceRequest$virtualGatewayId' => '<p>ID of the virtual private gateway that will be attached to the virtual interface.</p> <p> A virtual private gateway can be managed via the Amazon Virtual Private Cloud (VPC] console or the <a href="http://docs.aws.amazon.com/AWSEC2/latest/APIReference/ApiReference-query-CreateVpnGateway.html">EC2 CreateVpnGateway</a> action.</p> <p>Default: None</p>',
        'NewPrivateVirtualInterface$virtualGatewayId' => NULL,
        'VirtualGateway$virtualGatewayId' => NULL,
        'VirtualInterface$virtualGatewayId' => NULL,
      ],
    ],
    'VirtualGatewayList' => [
      'base' => '<p>A list of virtual private gateways.</p>',
      'refs' => [
        'VirtualGateways$virtualGateways' => '<p>A list of virtual private gateways.</p>',
      ],
    ],
    'VirtualGatewayState' => [
      'base' => 'State of the virtual private gateway. <ul> <li> <b>Pending</b>: This is the initial state after calling <i>CreateVpnGateway</i>.</li> <li> <b>Available</b>: Ready for use by a private virtual interface.</li> <li> <b>Deleting</b>: This is the initial state after calling <i>DeleteVpnGateway</i>.</li> <li> <b>Deleted</b>: In this state, a private virtual interface is unable to send traffic over this gateway.</li> </ul>',
      'refs' => [
        'VirtualGateway$virtualGatewayState' => NULL,
      ],
    ],
    'VirtualGateways' => [
      'base' => '<p>A structure containing a list of virtual private gateways.</p>',
      'refs' => [],
    ],
    'VirtualInterface' => [
      'base' => '<p>A virtual interface (VLAN] transmits the traffic between the AWS Direct Connect location and the customer.</p>',
      'refs' => [
        'VirtualInterfaceList$member' => NULL,
      ],
    ],
    'VirtualInterfaceId' => [
      'base' => '<p>ID of the virtual interface.</p> <p>Example: dxvif-123dfg56</p> <p>Default: None</p>',
      'refs' => [
        'ConfirmPrivateVirtualInterfaceRequest$virtualInterfaceId' => NULL,
        'ConfirmPublicVirtualInterfaceRequest$virtualInterfaceId' => NULL,
        'DeleteVirtualInterfaceRequest$virtualInterfaceId' => NULL,
        'DescribeVirtualInterfacesRequest$virtualInterfaceId' => NULL,
        'VirtualInterface$virtualInterfaceId' => NULL,
      ],
    ],
    'VirtualInterfaceList' => [
      'base' => '<p>A list of virtual interfaces.</p>',
      'refs' => [
        'VirtualInterfaces$virtualInterfaces' => '<p>A list of virtual interfaces.</p>',
      ],
    ],
    'VirtualInterfaceName' => [
      'base' => '<p>The name of the virtual interface assigned by the customer.</p> <p>Example: "My VPC"</p>',
      'refs' => [
        'NewPrivateVirtualInterface$virtualInterfaceName' => NULL,
        'NewPrivateVirtualInterfaceAllocation$virtualInterfaceName' => NULL,
        'NewPublicVirtualInterface$virtualInterfaceName' => NULL,
        'NewPublicVirtualInterfaceAllocation$virtualInterfaceName' => NULL,
        'VirtualInterface$virtualInterfaceName' => NULL,
      ],
    ],
    'VirtualInterfaceState' => [
      'base' => 'State of the virtual interface. <ul> <li> <b>Confirming</b>: The creation of the virtual interface is pending confirmation from the virtual interface owner. If the owner of the virtual interface is different from the owner of the connection on which it is provisioned, then the virtual interface will remain in this state until it is confirmed by the virtual interface owner.</li> <li> <b>Verifying</b>: This state only applies to public virtual interfaces. Each public virtual interface needs validation before the virtual interface can be created.</li> <li> <b>Pending</b>: A virtual interface is in this state from the time that it is created until the virtual interface is ready to forward traffic.</li> <li> <b>Available</b>: A virtual interface that is able to forward traffic.</li> <li> <b>Deleting</b>: A virtual interface is in this state immediately after calling <i>DeleteVirtualInterface</i> until it can no longer forward traffic.</li> <li> <b>Deleted</b>: A virtual interface that cannot forward traffic.</li> <li> <b>Rejected</b>: The virtual interface owner has declined creation of the virtual interface. If a virtual interface in the \'Confirming\' state is deleted by the virtual interface owner, the virtual interface will enter the \'Rejected\' state.</li> </ul>',
      'refs' => [
        'ConfirmPrivateVirtualInterfaceResponse$virtualInterfaceState' => NULL,
        'ConfirmPublicVirtualInterfaceResponse$virtualInterfaceState' => NULL,
        'DeleteVirtualInterfaceResponse$virtualInterfaceState' => NULL,
        'VirtualInterface$virtualInterfaceState' => NULL,
      ],
    ],
    'VirtualInterfaceType' => [
      'base' => '<p>The type of virtual interface.</p> <p>Example: private (Amazon VPC] or public (Amazon S3, Amazon DynamoDB, and so on.]</p>',
      'refs' => [
        'VirtualInterface$virtualInterfaceType' => NULL,
      ],
    ],
    'VirtualInterfaces' => [
      'base' => '<p>A structure containing a list of virtual interfaces.</p>',
      'refs' => [],
    ],
  ],
];
