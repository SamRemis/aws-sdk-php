<?php return [
  'operations' => [
    'CancelUpdateStack' => '<p>Cancels an update on the specified stack. If the call completes successfully, the stack will roll back the update and revert to the previous stack configuration.</p> <note>Only stacks that are in the UPDATE_IN_PROGRESS state can be canceled.</note>',
    'CreateStack' => '<p>Creates a stack as specified in the template. After the call completes successfully, the stack creation starts. You can check the status of the stack via the <a>DescribeStacks</a> API.</p>',
    'DeleteStack' => '<p>Deletes a specified stack. Once the call completes successfully, stack deletion starts. Deleted stacks do not show up in the <a>DescribeStacks</a> API if the deletion has been completed successfully.</p>',
    'DescribeStackEvents' => '<p>Returns all stack related events for a specified stack. For more information about a stack\'s event history, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/concept-stack.html">Stacks</a> in the AWS CloudFormation User Guide.</p> <note>You can list events for stacks that have failed to create or have been deleted by specifying the unique stack identifier (stack ID].</note>',
    'DescribeStackResource' => '<p>Returns a description of the specified resource in the specified stack.</p> <p>For deleted stacks, DescribeStackResource returns resource information for up to 90 days after the stack has been deleted.</p>',
    'DescribeStackResources' => '<p>Returns AWS resource descriptions for running and deleted stacks. If <code>StackName</code> is specified, all the associated resources that are part of the stack are returned. If <code>PhysicalResourceId</code> is specified, the associated resources of the stack that the resource belongs to are returned.</p> <note>Only the first 100 resources will be returned. If your stack has more resources than this, you should use <code>ListStackResources</code> instead.</note> <p>For deleted stacks, <code>DescribeStackResources</code> returns resource information for up to 90 days after the stack has been deleted.</p> <p>You must specify either <code>StackName</code> or <code>PhysicalResourceId</code>, but not both. In addition, you can specify <code>LogicalResourceId</code> to filter the returned result. For more information about resources, the <code>LogicalResourceId</code> and <code>PhysicalResourceId</code>, go to the <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide">AWS CloudFormation User Guide</a>.</p> <note>A <code>ValidationError</code> is returned if you specify both <code>StackName</code> and <code>PhysicalResourceId</code> in the same request.</note>',
    'DescribeStacks' => '<p>Returns the description for the specified stack; if no stack name was specified, then it returns the description for all the stacks created.</p>',
    'EstimateTemplateCost' => '<p>Returns the estimated monthly cost of a template. The return value is an AWS Simple Monthly Calculator URL with a query string that describes the resources required to run the template.</p>',
    'GetStackPolicy' => '<p>Returns the stack policy for a specified stack. If a stack doesn\'t have a policy, a null value is returned.</p>',
    'GetTemplate' => '<p>Returns the template body for a specified stack. You can get the template for running or deleted stacks.</p> <p>For deleted stacks, GetTemplate returns the template for up to 90 days after the stack has been deleted.</p> <note> If the template does not exist, a <code>ValidationError</code> is returned. </note>',
    'GetTemplateSummary' => '<p>Returns information about a new or existing template. The <code>GetTemplateSummary</code> action is useful for viewing parameter information, such as default parameter values and parameter types, before you create or update a stack.</p> <p>You can use the <code>GetTemplateSummary</code> action when you submit a template, or you can get template information for a running or deleted stack.</p> <p>For deleted stacks, <code>GetTemplateSummary</code> returns the template information for up to 90 days after the stack has been deleted. If the template does not exist, a <code>ValidationError</code> is returned.</p>',
    'ListStackResources' => '<p>Returns descriptions of all resources of the specified stack.</p> <p>For deleted stacks, ListStackResources returns resource information for up to 90 days after the stack has been deleted.</p>',
    'ListStacks' => '<p>Returns the summary information for stacks whose status matches the specified StackStatusFilter. Summary information for stacks that have been deleted is kept for 90 days after the stack is deleted. If no StackStatusFilter is specified, summary information for all stacks is returned (including existing stacks and stacks that have been deleted].</p>',
    'SetStackPolicy' => '<p>Sets a stack policy for a specified stack.</p>',
    'SignalResource' => '<p>Sends a signal to the specified resource with a success or failure status. You can use the SignalResource API in conjunction with a creation policy or update policy. AWS CloudFormation doesn\'t proceed with a stack creation or update until resources receive the required number of signals or the timeout period is exceeded. The SignalResource API is useful in cases where you want to send signals from anywhere other than an Amazon EC2 instance.</p>',
    'UpdateStack' => '<p>Updates a stack as specified in the template. After the call completes successfully, the stack update starts. You can check the status of the stack via the <a>DescribeStacks</a> action.</p> <p>To get a copy of the template for an existing stack, you can use the <a>GetTemplate</a> action.</p> <p>Tags that were associated with this stack during creation time will still be associated with the stack after an <code>UpdateStack</code> operation.</p> <p>For more information about creating an update template, updating a stack, and monitoring the progress of the update, see <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/using-cfn-updating-stacks.html">Updating a Stack</a>.</p>',
    'ValidateTemplate' => '<p>Validates a specified template.</p>',
  ],
  'service' => '<fullname>AWS CloudFormation</fullname> <p>AWS CloudFormation enables you to create and manage AWS infrastructure deployments predictably and repeatedly. AWS CloudFormation helps you leverage AWS products such as Amazon EC2, EBS, Amazon SNS, ELB, and Auto Scaling to build highly-reliable, highly scalable, cost effective applications without worrying about creating and configuring the underlying AWS infrastructure.</p> <p>With AWS CloudFormation, you declare all of your resources and dependencies in a template file. The template defines a collection of resources as a single unit called a stack. AWS CloudFormation creates and deletes all member resources of the stack together and manages all dependencies between the resources for you.</p> <p>For more information about this product, go to the <a href="http://aws.amazon.com/cloudformation/">CloudFormation Product Page</a>.</p> <p>Amazon CloudFormation makes use of other AWS products. If you need additional technical information about a specific AWS product, you can find the product\'s technical documentation at <a href="http://aws.amazon.com/documentation/">http://aws.amazon.com/documentation/</a>.</p>',
  'shapes' => [
    'AlreadyExistsException' => [
      'base' => '<p>Resource with the name requested already exists.</p>',
      'refs' => [],
    ],
    'CancelUpdateStackInput' => [
      'base' => '<p>The input for <a>CancelUpdateStack</a> action.</p>',
      'refs' => [],
    ],
    'Capabilities' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$Capabilities' => '<p>A list of capabilities that you must specify before AWS CloudFormation can create or update certain stacks. Some stack templates might include resources that can affect permissions in your AWS account. For those stacks, you must explicitly acknowledge their capabilities by specifying this parameter.</p> <p>Currently, the only valid value is <code>CAPABILITY_IAM</code>, which is required for the following resources: <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-stack.html"> AWS::CloudFormation::Stack</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-accesskey.html"> AWS::IAM::AccessKey</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-group.html"> AWS::IAM::Group</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-resource-iam-instanceprofile.html"> AWS::IAM::InstanceProfile</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-policy.html"> AWS::IAM::Policy</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-resource-iam-role.html"> AWS::IAM::Role</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-user.html"> AWS::IAM::User</a>, and <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-addusertogroup.html"> AWS::IAM::UserToGroupAddition</a>. If your stack template contains these resources, we recommend that you review any permissions associated with them. If you don\'t specify this parameter, this action returns an <code>InsufficientCapabilities</code> error.</p>',
        'GetTemplateSummaryOutput$Capabilities' => '<p>The capabilities found within the template. Currently, AWS CloudFormation supports only the CAPABILITY_IAM capability. If your template contains IAM resources, you must specify the CAPABILITY_IAM value for this parameter when you use the <a>CreateStack</a> or <a>UpdateStack</a> actions with your template; otherwise, those actions return an InsufficientCapabilities error.</p>',
        'Stack$Capabilities' => '<p>The capabilities allowed in the stack.</p>',
        'UpdateStackInput$Capabilities' => '<p>A list of capabilities that you must specify before AWS CloudFormation can create or update certain stacks. Some stack templates might include resources that can affect permissions in your AWS account. For those stacks, you must explicitly acknowledge their capabilities by specifying this parameter. Currently, the only valid value is <code>CAPABILITY_IAM</code>, which is required for the following resources: <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-stack.html"> AWS::CloudFormation::Stack</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-accesskey.html"> AWS::IAM::AccessKey</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-group.html"> AWS::IAM::Group</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-resource-iam-instanceprofile.html"> AWS::IAM::InstanceProfile</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-policy.html"> AWS::IAM::Policy</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-resource-iam-role.html"> AWS::IAM::Role</a>, <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-user.html"> AWS::IAM::User</a>, and <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-properties-iam-addusertogroup.html"> AWS::IAM::UserToGroupAddition</a>. If your stack template contains these resources, we recommend that you review any permissions associated with them. If you don\'t specify this parameter, this action returns an InsufficientCapabilities error.</p>',
        'ValidateTemplateOutput$Capabilities' => '<p>The capabilities found within the template. Currently, AWS CloudFormation supports only the CAPABILITY_IAM capability. If your template contains IAM resources, you must specify the CAPABILITY_IAM value for this parameter when you use the <a>CreateStack</a> or <a>UpdateStack</a> actions with your template; otherwise, those actions return an InsufficientCapabilities error.</p>',
      ],
    ],
    'CapabilitiesReason' => [
      'base' => NULL,
      'refs' => [
        'GetTemplateSummaryOutput$CapabilitiesReason' => '<p>The capabilities reason found within the template.</p>',
        'ValidateTemplateOutput$CapabilitiesReason' => '<p>The capabilities reason found within the template.</p>',
      ],
    ],
    'Capability' => [
      'base' => NULL,
      'refs' => [
        'Capabilities$member' => NULL,
      ],
    ],
    'CreateStackInput' => [
      'base' => '<p>The input for <a>CreateStack</a> action.</p>',
      'refs' => [],
    ],
    'CreateStackOutput' => [
      'base' => '<p>The output for a <a>CreateStack</a> action.</p>',
      'refs' => [],
    ],
    'CreationTime' => [
      'base' => NULL,
      'refs' => [
        'Stack$CreationTime' => '<p>Time at which the stack was created.</p>',
        'StackSummary$CreationTime' => '<p>The time the stack was created.</p>',
      ],
    ],
    'DeleteStackInput' => [
      'base' => '<p>The input for <a>DeleteStack</a> action.</p>',
      'refs' => [],
    ],
    'DeletionTime' => [
      'base' => NULL,
      'refs' => [
        'StackSummary$DeletionTime' => '<p>The time the stack was deleted.</p>',
      ],
    ],
    'DescribeStackEventsInput' => [
      'base' => '<p>The input for <a>DescribeStackEvents</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStackEventsOutput' => [
      'base' => '<p>The output for a <a>DescribeStackEvents</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStackResourceInput' => [
      'base' => '<p>The input for <a>DescribeStackResource</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStackResourceOutput' => [
      'base' => '<p>The output for a <a>DescribeStackResource</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStackResourcesInput' => [
      'base' => '<p>The input for <a>DescribeStackResources</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStackResourcesOutput' => [
      'base' => '<p>The output for a <a>DescribeStackResources</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStacksInput' => [
      'base' => '<p>The input for <a>DescribeStacks</a> action.</p>',
      'refs' => [],
    ],
    'DescribeStacksOutput' => [
      'base' => '<p>The output for a <a>DescribeStacks</a> action.</p>',
      'refs' => [],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'GetTemplateSummaryOutput$Description' => '<p>The value that is defined in the <code>Description</code> property of the template.</p>',
        'Output$Description' => '<p>User defined description associated with the output.</p>',
        'ParameterDeclaration$Description' => '<p>The description that is associate with the parameter.</p>',
        'Stack$Description' => '<p>User defined description associated with the stack.</p>',
        'StackResource$Description' => '<p>User defined description associated with the resource.</p>',
        'StackResourceDetail$Description' => '<p>User defined description associated with the resource.</p>',
        'TemplateParameter$Description' => '<p>User defined description associated with the parameter.</p>',
        'ValidateTemplateOutput$Description' => '<p>The description found within the template.</p>',
      ],
    ],
    'DisableRollback' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$DisableRollback' => '<p>Set to <code>true</code> to disable rollback of the stack if stack creation failed. You can specify either <code>DisableRollback</code> or <code>OnFailure</code>, but not both.</p> <p>Default: <code>false</code> </p>',
        'Stack$DisableRollback' => '<p>Boolean to enable or disable rollback on stack creation failures:</p> <p> <ul> <li> <code>true</code>: disable rollback</li> <li> <code>false</code>: enable rollback</li> </ul> </p>',
      ],
    ],
    'EstimateTemplateCostInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EstimateTemplateCostOutput' => [
      'base' => '<p>The output for a <a>EstimateTemplateCost</a> action.</p>',
      'refs' => [],
    ],
    'EventId' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$EventId' => '<p>The unique ID of this event.</p>',
      ],
    ],
    'GetStackPolicyInput' => [
      'base' => '<p>The input for the <a>GetStackPolicy</a> action.</p>',
      'refs' => [],
    ],
    'GetStackPolicyOutput' => [
      'base' => '<p>The output for the <a>GetStackPolicy</a> action.</p>',
      'refs' => [],
    ],
    'GetTemplateInput' => [
      'base' => '<p>The input for a <a>GetTemplate</a> action.</p>',
      'refs' => [],
    ],
    'GetTemplateOutput' => [
      'base' => '<p>The output for <a>GetTemplate</a> action.</p>',
      'refs' => [],
    ],
    'GetTemplateSummaryInput' => [
      'base' => '<p>The input for the <a>GetTemplateSummary</a> action.</p>',
      'refs' => [],
    ],
    'GetTemplateSummaryOutput' => [
      'base' => '<p>The output for the <a>GetTemplateSummary</a> action.</p>',
      'refs' => [],
    ],
    'InsufficientCapabilitiesException' => [
      'base' => '<p>The template contains resources with capabilities that were not specified in the Capabilities parameter.</p>',
      'refs' => [],
    ],
    'LastUpdatedTime' => [
      'base' => NULL,
      'refs' => [
        'Stack$LastUpdatedTime' => '<p>The time the stack was last updated. This field will only be returned if the stack has been updated at least once.</p>',
        'StackSummary$LastUpdatedTime' => '<p>The time the stack was last updated. This field will only be returned if the stack has been updated at least once.</p>',
      ],
    ],
    'LimitExceededException' => [
      'base' => '<p>Quota for the resource has already been reached.</p>',
      'refs' => [],
    ],
    'ListStackResourcesInput' => [
      'base' => '<p>The input for the <a>ListStackResource</a> action.</p>',
      'refs' => [],
    ],
    'ListStackResourcesOutput' => [
      'base' => '<p>The output for a <a>ListStackResources</a> action.</p>',
      'refs' => [],
    ],
    'ListStacksInput' => [
      'base' => '<p>The input for <a>ListStacks</a> action.</p>',
      'refs' => [],
    ],
    'ListStacksOutput' => [
      'base' => '<p>The output for <a>ListStacks</a> action.</p>',
      'refs' => [],
    ],
    'LogicalResourceId' => [
      'base' => NULL,
      'refs' => [
        'DescribeStackResourceInput$LogicalResourceId' => '<p>The logical name of the resource as specified in the template.</p> <p>Default: There is no default value.</p>',
        'DescribeStackResourcesInput$LogicalResourceId' => '<p>The logical name of the resource as specified in the template.</p> <p>Default: There is no default value.</p>',
        'SignalResourceInput$LogicalResourceId' => '<p>The logical ID of the resource that you want to signal. The logical ID is the name of the resource that given in the template.</p>',
        'StackEvent$LogicalResourceId' => '<p>The logical name of the resource specified in the template.</p>',
        'StackResource$LogicalResourceId' => '<p>The logical name of the resource specified in the template.</p>',
        'StackResourceDetail$LogicalResourceId' => '<p>The logical name of the resource specified in the template.</p>',
        'StackResourceSummary$LogicalResourceId' => '<p>The logical name of the resource specified in the template.</p>',
      ],
    ],
    'Metadata' => [
      'base' => NULL,
      'refs' => [
        'StackResourceDetail$Metadata' => '<p>The JSON format content of the <code>Metadata</code> attribute declared for the resource. For more information, see <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-attribute-metadata.html">Metadata Attribute</a> in the AWS CloudFormation User Guide.</p>',
      ],
    ],
    'NextToken' => [
      'base' => NULL,
      'refs' => [
        'DescribeStackEventsInput$NextToken' => '<p>String that identifies the start of the next list of events, if there is one.</p> <p>Default: There is no default value.</p>',
        'DescribeStackEventsOutput$NextToken' => '<p>String that identifies the start of the next list of events, if there is one.</p>',
        'DescribeStacksInput$NextToken' => 'String that identifies the start of the next list of stacks, if there is one.',
        'DescribeStacksOutput$NextToken' => 'String that identifies the start of the next list of stacks, if there is one.',
        'ListStackResourcesInput$NextToken' => '<p>String that identifies the start of the next list of stack resource summaries, if there is one.</p> <p>Default: There is no default value.</p>',
        'ListStackResourcesOutput$NextToken' => '<p>String that identifies the start of the next list of stack resources, if there is one.</p>',
        'ListStacksInput$NextToken' => '<p>String that identifies the start of the next list of stacks, if there is one.</p> <p>Default: There is no default value.</p>',
        'ListStacksOutput$NextToken' => '<p>String that identifies the start of the next list of stacks, if there is one.</p>',
      ],
    ],
    'NoEcho' => [
      'base' => NULL,
      'refs' => [
        'ParameterDeclaration$NoEcho' => '<p>Flag that indicates whether the parameter value is shown as plain text in logs and in the AWS Management Console.</p>',
        'TemplateParameter$NoEcho' => '<p>Flag indicating whether the parameter should be displayed as plain text in logs and UIs.</p>',
      ],
    ],
    'NotificationARN' => [
      'base' => NULL,
      'refs' => [
        'NotificationARNs$member' => NULL,
      ],
    ],
    'NotificationARNs' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$NotificationARNs' => '<p>The Simple Notification Service (SNS] topic ARNs to publish stack related events. You can find your SNS topic ARNs using the <a href="http://console.aws.amazon.com/sns">SNS console</a> or your Command Line Interface (CLI].</p>',
        'Stack$NotificationARNs' => '<p>SNS topic ARNs to which stack related events are published.</p>',
        'UpdateStackInput$NotificationARNs' => '<p>Update the ARNs for the Amazon SNS topics that are associated with the stack.</p>',
      ],
    ],
    'OnFailure' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$OnFailure' => '<p>Determines what action will be taken if stack creation fails. This must be one of: DO_NOTHING, ROLLBACK, or DELETE. You can specify either <code>OnFailure</code> or <code>DisableRollback</code>, but not both.</p> <p>Default: <code>ROLLBACK</code></p>',
      ],
    ],
    'Output' => [
      'base' => '<p>The Output data type.</p>',
      'refs' => [
        'Outputs$member' => NULL,
      ],
    ],
    'OutputKey' => [
      'base' => NULL,
      'refs' => [
        'Output$OutputKey' => '<p>The key associated with the output.</p>',
      ],
    ],
    'OutputValue' => [
      'base' => NULL,
      'refs' => [
        'Output$OutputValue' => '<p>The value associated with the output.</p>',
      ],
    ],
    'Outputs' => [
      'base' => NULL,
      'refs' => [
        'Stack$Outputs' => '<p>A list of output structures.</p>',
      ],
    ],
    'Parameter' => [
      'base' => '<p>The Parameter data type.</p>',
      'refs' => [
        'Parameters$member' => NULL,
      ],
    ],
    'ParameterDeclaration' => [
      'base' => '<p>The ParameterDeclaration data type.</p>',
      'refs' => [
        'ParameterDeclarations$member' => NULL,
      ],
    ],
    'ParameterDeclarations' => [
      'base' => NULL,
      'refs' => [
        'GetTemplateSummaryOutput$Parameters' => '<p>A list of parameter declarations that describe various properties for each parameter.</p>',
      ],
    ],
    'ParameterKey' => [
      'base' => NULL,
      'refs' => [
        'Parameter$ParameterKey' => '<p>The key associated with the parameter.</p>',
        'ParameterDeclaration$ParameterKey' => '<p>The name that is associated with the parameter.</p>',
        'TemplateParameter$ParameterKey' => '<p>The name associated with the parameter.</p>',
      ],
    ],
    'ParameterType' => [
      'base' => NULL,
      'refs' => [
        'ParameterDeclaration$ParameterType' => '<p>The type of parameter.</p>',
      ],
    ],
    'ParameterValue' => [
      'base' => NULL,
      'refs' => [
        'Parameter$ParameterValue' => '<p>The value associated with the parameter.</p>',
        'ParameterDeclaration$DefaultValue' => '<p>The default value of the parameter.</p>',
        'TemplateParameter$DefaultValue' => '<p>The default value associated with the parameter.</p>',
      ],
    ],
    'Parameters' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$Parameters' => '<p>A list of <code>Parameter</code> structures that specify input parameters for the stack.</p>',
        'EstimateTemplateCostInput$Parameters' => '<p>A list of <code>Parameter</code> structures that specify input parameters.</p>',
        'Stack$Parameters' => '<p>A list of <code>Parameter</code> structures.</p>',
        'UpdateStackInput$Parameters' => '<p>A list of <code>Parameter</code> structures that specify input parameters for the stack.</p>',
      ],
    ],
    'PhysicalResourceId' => [
      'base' => NULL,
      'refs' => [
        'DescribeStackResourcesInput$PhysicalResourceId' => '<p>The name or unique identifier that corresponds to a physical instance ID of a resource supported by AWS CloudFormation.</p> <p>For example, for an Amazon Elastic Compute Cloud (EC2] instance, <code>PhysicalResourceId</code> corresponds to the <code>InstanceId</code>. You can pass the EC2 <code>InstanceId</code> to <code>DescribeStackResources</code> to find which stack the instance belongs to and what other resources are part of the stack.</p> <p>Required: Conditional. If you do not specify <code>PhysicalResourceId</code>, you must specify <code>StackName</code>.</p> <p>Default: There is no default value.</p>',
        'StackEvent$PhysicalResourceId' => '<p>The name or unique identifier associated with the physical instance of the resource.</p>',
        'StackResource$PhysicalResourceId' => '<p>The name or unique identifier that corresponds to a physical instance ID of a resource supported by AWS CloudFormation.</p>',
        'StackResourceDetail$PhysicalResourceId' => '<p>The name or unique identifier that corresponds to a physical instance ID of a resource supported by AWS CloudFormation.</p>',
        'StackResourceSummary$PhysicalResourceId' => '<p>The name or unique identifier that corresponds to a physical instance ID of the resource.</p>',
      ],
    ],
    'ResourceProperties' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$ResourceProperties' => '<p>BLOB of the properties used to create the resource.</p>',
      ],
    ],
    'ResourceSignalStatus' => [
      'base' => NULL,
      'refs' => [
        'SignalResourceInput$Status' => '<p>The status of the signal, which is either success or failure. A failure signal causes AWS CloudFormation to immediately fail the stack creation or update.</p>',
      ],
    ],
    'ResourceSignalUniqueId' => [
      'base' => NULL,
      'refs' => [
        'SignalResourceInput$UniqueId' => '<p>A unique ID of the signal. When you signal Amazon EC2 instances or Auto Scaling groups, specify the instance ID that you are signaling as the unique ID. If you send multiple signals to a single resource (such as signaling a wait condition], each signal requires a different unique ID.</p>',
      ],
    ],
    'ResourceStatus' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$ResourceStatus' => '<p>Current status of the resource.</p>',
        'StackResource$ResourceStatus' => '<p>Current status of the resource.</p>',
        'StackResourceDetail$ResourceStatus' => '<p>Current status of the resource.</p>',
        'StackResourceSummary$ResourceStatus' => '<p>Current status of the resource.</p>',
      ],
    ],
    'ResourceStatusReason' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$ResourceStatusReason' => '<p>Success/failure message associated with the resource.</p>',
        'StackResource$ResourceStatusReason' => '<p>Success/failure message associated with the resource.</p>',
        'StackResourceDetail$ResourceStatusReason' => '<p>Success/failure message associated with the resource.</p>',
        'StackResourceSummary$ResourceStatusReason' => '<p>Success/failure message associated with the resource.</p>',
      ],
    ],
    'ResourceType' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$ResourceType' => '<p>Type of resource. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html"> AWS Resource Types Reference</a> in the AWS CloudFormation User Guide.]</p>',
        'StackResource$ResourceType' => '<p>Type of resource. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html"> AWS Resource Types Reference</a> in the AWS CloudFormation User Guide.]</p>',
        'StackResourceDetail$ResourceType' => '<p>Type of resource. ((For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html"> AWS Resource Types Reference</a> in the AWS CloudFormation User Guide.]</p>',
        'StackResourceSummary$ResourceType' => '<p>Type of resource. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/aws-template-resource-type-ref.html"> AWS Resource Types Reference</a> in the AWS CloudFormation User Guide.]</p>',
      ],
    ],
    'SetStackPolicyInput' => [
      'base' => '<p>The input for the <a>SetStackPolicy</a> action.</p>',
      'refs' => [],
    ],
    'SignalResourceInput' => [
      'base' => '<p>The input for the <a>SignalResource</a> action.</p>',
      'refs' => [],
    ],
    'Stack' => [
      'base' => '<p>The Stack data type.</p>',
      'refs' => [
        'Stacks$member' => NULL,
      ],
    ],
    'StackEvent' => [
      'base' => '<p>The StackEvent data type.</p>',
      'refs' => [
        'StackEvents$member' => NULL,
      ],
    ],
    'StackEvents' => [
      'base' => NULL,
      'refs' => [
        'DescribeStackEventsOutput$StackEvents' => '<p>A list of <code>StackEvents</code> structures.</p>',
      ],
    ],
    'StackId' => [
      'base' => NULL,
      'refs' => [
        'CreateStackOutput$StackId' => '<p>Unique identifier of the stack.</p>',
        'Stack$StackId' => '<p>Unique identifier of the stack.</p>',
        'StackEvent$StackId' => '<p>The unique ID name of the instance of the stack.</p>',
        'StackResource$StackId' => '<p>Unique identifier of the stack.</p>',
        'StackResourceDetail$StackId' => '<p>Unique identifier of the stack.</p>',
        'StackSummary$StackId' => '<p>Unique stack identifier.</p>',
        'UpdateStackOutput$StackId' => '<p>Unique identifier of the stack.</p>',
      ],
    ],
    'StackName' => [
      'base' => NULL,
      'refs' => [
        'CancelUpdateStackInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack.</p>',
        'CreateStackInput$StackName' => '<p>The name that is associated with the stack. The name must be unique in the region in which you are creating the stack.</p> <note>A stack name can contain only alphanumeric characters (case sensitive] and hyphens. It must start with an alphabetic character and cannot be longer than 255 characters.</note>',
        'DeleteStackInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack.</p>',
        'DescribeStackEventsInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p>',
        'DescribeStackResourceInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p>',
        'DescribeStackResourcesInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p> <p>Required: Conditional. If you do not specify <code>StackName</code>, you must specify <code>PhysicalResourceId</code>.</p>',
        'DescribeStacksInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p>',
        'GetStackPolicyInput$StackName' => '<p>The name or unique stack ID that is associated with the stack whose policy you want to get.</p>',
        'GetTemplateInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p>',
        'ListStackResourcesInput$StackName' => '<p>The name or the unique stack ID that is associated with the stack, which are not always interchangeable:</p> <ul> <li>Running stacks: You can specify either the stack\'s name or its unique stack ID.</li> <li>Deleted stacks: You must specify the unique stack ID.</li> </ul> <p>Default: There is no default value.</p>',
        'SetStackPolicyInput$StackName' => '<p>The name or unique stack ID that you want to associate a policy with.</p>',
        'Stack$StackName' => '<p>The name associated with the stack.</p>',
        'StackEvent$StackName' => '<p>The name associated with a stack.</p>',
        'StackResource$StackName' => '<p>The name associated with the stack.</p>',
        'StackResourceDetail$StackName' => '<p>The name associated with the stack.</p>',
        'StackSummary$StackName' => '<p>The name associated with the stack.</p>',
        'UpdateStackInput$StackName' => '<p>The name or unique stack ID of the stack to update.</p>',
      ],
    ],
    'StackNameOrId' => [
      'base' => NULL,
      'refs' => [
        'GetTemplateSummaryInput$StackName' => '<p>The name or the stack ID that is associated with the stack, which are not always interchangeable. For running stacks, you can specify either the stack\'s name or its unique stack ID. For deleted stack, you must specify the unique stack ID.</p> <p>Conditional: You must specify only one of the following parameters: <code>StackName</code>, <code>TemplateBody</code>, or <code>TemplateURL</code>.</p>',
        'SignalResourceInput$StackName' => '<p>The stack name or unique stack ID that includes the resource that you want to signal.</p>',
      ],
    ],
    'StackPolicyBody' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$StackPolicyBody' => '<p>Structure containing the stack policy body. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/protect-stack-resources.html"> Prevent Updates to Stack Resources</a> in the AWS CloudFormation User Guide. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p>',
        'GetStackPolicyOutput$StackPolicyBody' => '<p>Structure containing the stack policy body. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/protect-stack-resources.html"> Prevent Updates to Stack Resources</a> in the AWS CloudFormation User Guide.]</p>',
        'SetStackPolicyInput$StackPolicyBody' => '<p>Structure containing the stack policy body. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/protect-stack-resources.html"> Prevent Updates to Stack Resources</a> in the AWS CloudFormation User Guide. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p>',
        'UpdateStackInput$StackPolicyBody' => '<p>Structure containing a new stack policy body. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p> <p>You might update the stack policy, for example, in order to protect a new resource that you created during a stack update. If you do not specify a stack policy, the current policy that is associated with the stack is unchanged.</p>',
      ],
    ],
    'StackPolicyDuringUpdateBody' => [
      'base' => NULL,
      'refs' => [
        'UpdateStackInput$StackPolicyDuringUpdateBody' => '<p>Structure containing the temporary overriding stack policy body. You can specify either the <code>StackPolicyDuringUpdateBody</code> or the <code>StackPolicyDuringUpdateURL</code> parameter, but not both.</p> <p>If you want to update protected resources, specify a temporary overriding stack policy during this update. If you do not specify a stack policy, the current policy that is associated with the stack will be used.</p>',
      ],
    ],
    'StackPolicyDuringUpdateURL' => [
      'base' => NULL,
      'refs' => [
        'UpdateStackInput$StackPolicyDuringUpdateURL' => '<p>Location of a file containing the temporary overriding stack policy. The URL must point to a policy (max size: 16KB] located in an S3 bucket in the same region as the stack. You can specify either the <code>StackPolicyDuringUpdateBody</code> or the <code>StackPolicyDuringUpdateURL</code> parameter, but not both.</p> <p>If you want to update protected resources, specify a temporary overriding stack policy during this update. If you do not specify a stack policy, the current policy that is associated with the stack will be used.</p>',
      ],
    ],
    'StackPolicyURL' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$StackPolicyURL' => '<p>Location of a file containing the stack policy. The URL must point to a policy (max size: 16KB] located in an S3 bucket in the same region as the stack. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p>',
        'SetStackPolicyInput$StackPolicyURL' => '<p>Location of a file containing the stack policy. The URL must point to a policy (max size: 16KB] located in an S3 bucket in the same region as the stack. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p>',
        'UpdateStackInput$StackPolicyURL' => '<p>Location of a file containing the updated stack policy. The URL must point to a policy (max size: 16KB] located in an S3 bucket in the same region as the stack. You can specify either the <code>StackPolicyBody</code> or the <code>StackPolicyURL</code> parameter, but not both.</p> <p>You might update the stack policy, for example, in order to protect a new resource that you created during a stack update. If you do not specify a stack policy, the current policy that is associated with the stack is unchanged.</p>',
      ],
    ],
    'StackResource' => [
      'base' => '<p>The StackResource data type.</p>',
      'refs' => [
        'StackResources$member' => NULL,
      ],
    ],
    'StackResourceDetail' => [
      'base' => '<p>Contains detailed information about the specified stack resource.</p>',
      'refs' => [
        'DescribeStackResourceOutput$StackResourceDetail' => '<p>A <code>StackResourceDetail</code> structure containing the description of the specified resource in the specified stack.</p>',
      ],
    ],
    'StackResourceSummaries' => [
      'base' => NULL,
      'refs' => [
        'ListStackResourcesOutput$StackResourceSummaries' => '<p>A list of <code>StackResourceSummary</code> structures.</p>',
      ],
    ],
    'StackResourceSummary' => [
      'base' => '<p>Contains high-level information about the specified stack resource.</p>',
      'refs' => [
        'StackResourceSummaries$member' => NULL,
      ],
    ],
    'StackResources' => [
      'base' => NULL,
      'refs' => [
        'DescribeStackResourcesOutput$StackResources' => '<p>A list of <code>StackResource</code> structures.</p>',
      ],
    ],
    'StackStatus' => [
      'base' => NULL,
      'refs' => [
        'Stack$StackStatus' => '<p>Current status of the stack.</p>',
        'StackStatusFilter$member' => NULL,
        'StackSummary$StackStatus' => '<p>The current status of the stack.</p>',
      ],
    ],
    'StackStatusFilter' => [
      'base' => NULL,
      'refs' => [
        'ListStacksInput$StackStatusFilter' => '<p>Stack status to use as a filter. Specify one or more stack status codes to list only stacks with the specified status codes. For a complete list of stack status codes, see the <code>StackStatus</code> parameter of the <a>Stack</a> data type.</p>',
      ],
    ],
    'StackStatusReason' => [
      'base' => NULL,
      'refs' => [
        'Stack$StackStatusReason' => '<p>Success/failure message associated with the stack status.</p>',
        'StackSummary$StackStatusReason' => '<p>Success/Failure message associated with the stack status.</p>',
      ],
    ],
    'StackSummaries' => [
      'base' => NULL,
      'refs' => [
        'ListStacksOutput$StackSummaries' => '<p>A list of <code>StackSummary</code> structures containing information about the specified stacks.</p>',
      ],
    ],
    'StackSummary' => [
      'base' => '<p>The StackSummary Data Type</p>',
      'refs' => [
        'StackSummaries$member' => NULL,
      ],
    ],
    'Stacks' => [
      'base' => NULL,
      'refs' => [
        'DescribeStacksOutput$Stacks' => '<p>A list of stack structures.</p>',
      ],
    ],
    'Tag' => [
      'base' => '<p>The Tag type is used by <code>CreateStack</code> in the <code>Tags</code> parameter. It allows you to specify a key/value pair that can be used to store information related to cost allocation for an AWS CloudFormation stack.</p>',
      'refs' => [
        'Tags$member' => NULL,
      ],
    ],
    'TagKey' => [
      'base' => NULL,
      'refs' => [
        'Tag$Key' => '<p><i>Required</i>. A string used to identify this tag. You can specify a maximum of 128 characters for a tag key. Tags owned by Amazon Web Services (AWS] have the reserved prefix: <code>aws:</code>.</p>',
      ],
    ],
    'TagValue' => [
      'base' => NULL,
      'refs' => [
        'Tag$Value' => '<p><i>Required</i>. A string containing the value for this tag. You can specify a maximum of 256 characters for a tag value.</p>',
      ],
    ],
    'Tags' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$Tags' => '<p>A set of user-defined <code>Tags</code> to associate with this stack, represented by key/value pairs. Tags defined for the stack are propagated to EC2 resources that are created as part of the stack. A maximum number of 10 tags can be specified.</p>',
        'Stack$Tags' => '<p>A list of <code>Tag</code>s that specify cost allocation information for the stack.</p>',
      ],
    ],
    'TemplateBody' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$TemplateBody' => '<p>Structure containing the template body with a minimum length of 1 byte and a maximum length of 51,200 bytes. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must specify either the <code>TemplateBody</code> or the <code>TemplateURL</code> parameter, but not both.</p>',
        'EstimateTemplateCostInput$TemplateBody' => '<p>Structure containing the template body with a minimum length of 1 byte and a maximum length of 51,200 bytes. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.]</p> <p>Conditional: You must pass <code>TemplateBody</code> or <code>TemplateURL</code>. If both are passed, only <code>TemplateBody</code> is used.</p>',
        'GetTemplateOutput$TemplateBody' => '<p>Structure containing the template body. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.]</p>',
        'GetTemplateSummaryInput$TemplateBody' => '<p>Structure containing the template body with a minimum length of 1 byte and a maximum length of 51,200 bytes. For more information about templates, see <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must specify only one of the following parameters: <code>StackName</code>, <code>TemplateBody</code>, or <code>TemplateURL</code>.</p>',
        'UpdateStackInput$TemplateBody' => '<p>Structure containing the template body with a minimum length of 1 byte and a maximum length of 51,200 bytes. (For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.]</p> <p>Conditional: You must specify either the <code>TemplateBody</code> or the <code>TemplateURL</code> parameter, but not both.</p>',
        'ValidateTemplateInput$TemplateBody' => '<p>Structure containing the template body with a minimum length of 1 byte and a maximum length of 51,200 bytes. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must pass <code>TemplateURL</code> or <code>TemplateBody</code>. If both are passed, only <code>TemplateBody</code> is used.</p>',
      ],
    ],
    'TemplateDescription' => [
      'base' => NULL,
      'refs' => [
        'StackSummary$TemplateDescription' => '<p>The template description of the template used to create the stack.</p>',
      ],
    ],
    'TemplateParameter' => [
      'base' => '<p>The TemplateParameter data type.</p>',
      'refs' => [
        'TemplateParameters$member' => NULL,
      ],
    ],
    'TemplateParameters' => [
      'base' => NULL,
      'refs' => [
        'ValidateTemplateOutput$Parameters' => '<p>A list of <code>TemplateParameter</code> structures.</p>',
      ],
    ],
    'TemplateURL' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$TemplateURL' => '<p>Location of file containing the template body. The URL must point to a template (max size: 307,200 bytes] located in an S3 bucket in the same region as the stack. For more information, go to the <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must specify either the <code>TemplateBody</code> or the <code>TemplateURL</code> parameter, but not both.</p>',
        'EstimateTemplateCostInput$TemplateURL' => '<p>Location of file containing the template body. The URL must point to a template located in an S3 bucket in the same region as the stack. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must pass <code>TemplateURL</code> or <code>TemplateBody</code>. If both are passed, only <code>TemplateBody</code> is used.</p>',
        'GetTemplateSummaryInput$TemplateURL' => '<p>Location of file containing the template body. The URL must point to a template (max size: 307,200 bytes] located in an Amazon S3 bucket. For more information about templates, see <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must specify only one of the following parameters: <code>StackName</code>, <code>TemplateBody</code>, or <code>TemplateURL</code>.</p>',
        'UpdateStackInput$TemplateURL' => '<p>Location of file containing the template body. The URL must point to a template located in an S3 bucket in the same region as the stack. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must specify either the <code>TemplateBody</code> or the <code>TemplateURL</code> parameter, but not both.</p>',
        'ValidateTemplateInput$TemplateURL' => '<p>Location of file containing the template body. The URL must point to a template (max size: 307,200 bytes] located in an S3 bucket in the same region as the stack. For more information, go to <a href="http://docs.aws.amazon.com/AWSCloudFormation/latest/UserGuide/template-anatomy.html">Template Anatomy</a> in the AWS CloudFormation User Guide.</p> <p>Conditional: You must pass <code>TemplateURL</code> or <code>TemplateBody</code>. If both are passed, only <code>TemplateBody</code> is used.</p>',
      ],
    ],
    'TimeoutMinutes' => [
      'base' => NULL,
      'refs' => [
        'CreateStackInput$TimeoutInMinutes' => '<p>The amount of time that can pass before the stack status becomes CREATE_FAILED; if <code>DisableRollback</code> is not set or is set to <code>false</code>, the stack will be rolled back.</p>',
        'Stack$TimeoutInMinutes' => '<p>The amount of time within which stack creation should complete.</p>',
      ],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'StackEvent$Timestamp' => '<p>Time the status was updated.</p>',
        'StackResource$Timestamp' => '<p>Time the status was updated.</p>',
        'StackResourceDetail$LastUpdatedTimestamp' => '<p>Time the status was updated.</p>',
        'StackResourceSummary$LastUpdatedTimestamp' => '<p>Time the status was updated.</p>',
      ],
    ],
    'UpdateStackInput' => [
      'base' => '<p>The input for <a>UpdateStack</a> action.</p>',
      'refs' => [],
    ],
    'UpdateStackOutput' => [
      'base' => '<p>The output for a <a>UpdateStack</a> action.</p>',
      'refs' => [],
    ],
    'Url' => [
      'base' => NULL,
      'refs' => [
        'EstimateTemplateCostOutput$Url' => '<p>An AWS Simple Monthly Calculator URL with a query string that describes the resources required to run the template.</p>',
      ],
    ],
    'UsePreviousTemplate' => [
      'base' => NULL,
      'refs' => [
        'UpdateStackInput$UsePreviousTemplate' => '<p>Reuse the existing template that is associated with the stack that you are updating.</p>',
      ],
    ],
    'UsePreviousValue' => [
      'base' => NULL,
      'refs' => [
        'Parameter$UsePreviousValue' => '<p>During a stack update, use the existing parameter value that is being used for the stack.</p>',
      ],
    ],
    'ValidateTemplateInput' => [
      'base' => '<p>The input for <a>ValidateTemplate</a> action.</p>',
      'refs' => [],
    ],
    'ValidateTemplateOutput' => [
      'base' => '<p>The output for <a>ValidateTemplate</a> action.</p>',
      'refs' => [],
    ],
    'Version' => [
      'base' => NULL,
      'refs' => [
        'GetTemplateSummaryOutput$Version' => '<p>The AWS template format version, which identifies the capabilities of the template.</p>',
      ],
    ],
  ],
];
