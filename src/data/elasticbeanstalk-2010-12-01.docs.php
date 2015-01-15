<?php return [
  'operations' => [
    'CheckDNSAvailability' => '<p> Checks if the specified CNAME is available. </p>',
    'CreateApplication' => '<p> Creates an application that has one configuration template named <code>default</code> and no application versions. </p> <?oxy_delete author="brussard" timestamp="20131024T142047-0700" content="&lt;note&gt; The &lt;code&gt;default&lt;/code&gt; configuration template is for a 32-bit version of the Amazon Linux operating system running the Tomcat 6 application container. &lt;/note&gt;">',
    'CreateApplicationVersion' => '<p>Creates an application version for the specified application.</p>',
    'CreateConfigurationTemplate' => '<p>Creates a configuration template. Templates are associated with a specific application and are used to deploy different versions of the application with the same configuration settings.</p> <p>Related Topics</p> <ul> <li> <a>DescribeConfigurationOptions</a> </li> <li> <a>DescribeConfigurationSettings</a> </li> <li> <a>ListAvailableSolutionStacks</a> </li> </ul>',
    'CreateEnvironment' => '<p> Launches an environment for the specified application using the specified configuration. </p>',
    'CreateStorageLocation' => '<p> Creates the Amazon S3 storage location for the account. </p> <p> This location is used to store user log files. </p>',
    'DeleteApplication' => '<p> Deletes the specified application along with all associated versions and configurations. The application versions will not be deleted from your Amazon S3 bucket. </p>',
    'DeleteApplicationVersion' => '<p> Deletes the specified version from the specified application. </p>',
    'DeleteConfigurationTemplate' => '<p>Deletes the specified configuration template.</p>',
    'DeleteEnvironmentConfiguration' => '<p> Deletes the draft configuration associated with the running environment. </p> <p> Updating a running environment with any configuration changes creates a draft configuration set. You can get the draft configuration using <a>DescribeConfigurationSettings</a> while the update is in progress or if the update fails. The <code>DeploymentStatus</code> for the draft configuration indicates whether the deployment is in process or has failed. The draft configuration remains in existence until it is deleted with this action. </p>',
    'DescribeApplicationVersions' => '<p>Returns descriptions for existing application versions.</p>',
    'DescribeApplications' => '<p>Returns the descriptions of existing applications.</p>',
    'DescribeConfigurationOptions' => '<p> Describes the configuration options that are used in a particular configuration template or environment, or that a specified solution stack defines. The description includes the values the options, their default values, and an indication of the required action on a running environment if an option value is changed. </p>',
    'DescribeConfigurationSettings' => '<p> Returns a description of the settings for the specified configuration set, that is, either a configuration template or the configuration set associated with a running environment. </p> <p> When describing the settings for the configuration set associated with a running environment, it is possible to receive two sets of setting descriptions. One is the deployed configuration set, and the other is a draft configuration of an environment that is either in the process of deployment or that failed to deploy. </p> <p>Related Topics</p> <ul> <li> <a>DeleteEnvironmentConfiguration</a> </li> </ul>',
    'DescribeEnvironmentResources' => '<p>Returns AWS resources for this environment.</p>',
    'DescribeEnvironments' => '<p>Returns descriptions for existing environments.</p>',
    'DescribeEvents' => '<p>Returns list of event descriptions matching criteria up to the last 6 weeks.</p>',
    'ListAvailableSolutionStacks' => '<p> Returns a list of the available solution stack names. </p>',
    'RebuildEnvironment' => '<p> Deletes and recreates all of the AWS resources (for example: the Auto Scaling group, load balancer, etc.] for a specified environment and forces a restart. </p>',
    'RequestEnvironmentInfo' => '<p> Initiates a request to compile the specified type of information of the deployed environment. </p> <p> Setting the <code>InfoType</code> to <code>tail</code> compiles the last lines from the application server log files of every Amazon EC2 instance in your environment. </p> <p> Setting the <code>InfoType</code> to <code>bundle</code> compresses the application server log files for every Amazon EC2 instance into a <code>.zip</code> file. Legacy and .NET containers do not support bundle logs. </p> <p> Use <a>RetrieveEnvironmentInfo</a> to obtain the set of logs. </p> <p>Related Topics</p> <ul> <li> <a>RetrieveEnvironmentInfo</a> </li> </ul>',
    'RestartAppServer' => '<p> Causes the environment to restart the application container server running on each Amazon EC2 instance. </p>',
    'RetrieveEnvironmentInfo' => '<p> Retrieves the compiled information from a <a>RequestEnvironmentInfo</a> request. </p> <p>Related Topics</p> <ul> <li> <a>RequestEnvironmentInfo</a> </li> </ul>',
    'SwapEnvironmentCNAMEs' => '<p> Swaps the CNAMEs of two environments. </p>',
    'TerminateEnvironment' => '<p> Terminates the specified environment. </p>',
    'UpdateApplication' => '<p>Updates the specified application to have the specified properties. </p>',
    'UpdateApplicationVersion' => '<p> Updates the specified application version to have the specified properties. </p>',
    'UpdateConfigurationTemplate' => '<p> Updates the specified configuration template to have the specified properties or configuration option values. </p> <p>Related Topics</p> <ul> <li> <a>DescribeConfigurationOptions</a> </li> </ul>',
    'UpdateEnvironment' => '<p> Updates the environment description, deploys a new application version, updates the configuration settings to an entirely new configuration template, or updates select configuration option values in the running environment. </p> <p> Attempting to update both the release and configuration is not allowed and AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. </p> <p> When updating the configuration settings to a new template or individual settings, a draft configuration is created and <a>DescribeConfigurationSettings</a> for this environment returns two setting descriptions with different <code>DeploymentStatus</code> values. </p>',
    'ValidateConfigurationSettings' => '<p> Takes a set of configuration settings and either a configuration template or environment, and determines whether those values are valid. </p> <p> This action returns a list of messages indicating any errors or warnings associated with the selection of option values. </p>',
  ],
  'service' => '<fullname>AWS Elastic Beanstalk</fullname> <p> This is the AWS Elastic Beanstalk API Reference. This guide provides detailed information about AWS Elastic Beanstalk actions, data types, parameters, and errors. </p> <p>AWS Elastic Beanstalk is a tool that makes it easy for you to create, deploy, and manage scalable, fault-tolerant applications running on Amazon Web Services cloud resources. </p> <p> For more information about this product, go to the <a href="http://aws.amazon.com/elasticbeanstalk/">AWS Elastic Beanstalk</a> details page. The location of the latest AWS Elastic Beanstalk WSDL is <a href="http://elasticbeanstalk.s3.amazonaws.com/doc/2010-12-01/AWSElasticBeanstalk.wsdl">http://elasticbeanstalk.s3.amazonaws.com/doc/2010-12-01/AWSElasticBeanstalk.wsdl</a>. </p> <p><b>Endpoints</b></p> <p>For a list of region-specific endpoints that AWS Elastic Beanstalk supports, go to <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#elasticbeanstalk_region">Regions and Endpoints</a> in the <i>Amazon Web Services Glossary</i>.</p>',
  'shapes' => [
    'ApplicationDescription' => [
      'base' => '<p>Describes the properties of an application.</p>',
      'refs' => [
        'ApplicationDescriptionList$member' => NULL,
        'ApplicationDescriptionMessage$Application' => '<p> The <a>ApplicationDescription</a> of the application. </p>',
      ],
    ],
    'ApplicationDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescriptionsMessage$Applications' => '<p> This parameter contains a list of <a>ApplicationDescription</a>. </p>',
      ],
    ],
    'ApplicationDescriptionMessage' => [
      'base' => '<p>Result message containing a single description of an application.</p>',
      'refs' => [],
    ],
    'ApplicationDescriptionsMessage' => [
      'base' => '<p>Result message containing a list of application descriptions.</p>',
      'refs' => [],
    ],
    'ApplicationName' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$ApplicationName' => '<p>The name of the application.</p>',
        'ApplicationNamesList$member' => NULL,
        'ApplicationVersionDescription$ApplicationName' => '<p>The name of the application associated with this release.</p>',
        'ConfigurationSettingsDescription$ApplicationName' => '<p> The name of the application associated with this configuration set. </p>',
        'CreateApplicationMessage$ApplicationName' => '<p>The name of the application.</p> <p> Constraint: This name must be unique within your account. If the specified name already exists, the action returns an <code>InvalidParameterValue</code> error. </p>',
        'CreateApplicationVersionMessage$ApplicationName' => '<p> The name of the application. If no application is found with this name, and <code>AutoCreateApplication</code> is <code>false</code>, returns an <code>InvalidParameterValue</code> error. </p>',
        'CreateConfigurationTemplateMessage$ApplicationName' => '<p> The name of the application to associate with this configuration template. If no application is found with this name, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p>',
        'CreateEnvironmentMessage$ApplicationName' => '<p> The name of the application that contains the version to be deployed. </p> <p> If no application is found with this name, <code>CreateEnvironment</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'DeleteApplicationMessage$ApplicationName' => '<p>The name of the application to delete.</p>',
        'DeleteApplicationVersionMessage$ApplicationName' => '<p>The name of the application to delete releases from.</p>',
        'DeleteConfigurationTemplateMessage$ApplicationName' => '<p> The name of the application to delete the configuration template from. </p>',
        'DeleteEnvironmentConfigurationMessage$ApplicationName' => '<p> The name of the application the environment is associated with. </p>',
        'DescribeApplicationVersionsMessage$ApplicationName' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to only include ones that are associated with the specified application. </p>',
        'DescribeConfigurationOptionsMessage$ApplicationName' => '<p> The name of the application associated with the configuration template or environment. Only needed if you want to describe the configuration options associated with either the configuration template or environment. </p>',
        'DescribeConfigurationSettingsMessage$ApplicationName' => '<p> The application for the environment or configuration template. </p>',
        'DescribeEnvironmentsMessage$ApplicationName' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to include only those that are associated with this application. </p>',
        'DescribeEventsMessage$ApplicationName' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to include only those associated with this application. </p>',
        'EnvironmentDescription$ApplicationName' => '<p>The name of the application associated with this environment.</p>',
        'EventDescription$ApplicationName' => '<p>The application associated with the event.</p>',
        'SourceConfiguration$ApplicationName' => '<p>The name of the application associated with the configuration.</p>',
        'UpdateApplicationMessage$ApplicationName' => '<p> The name of the application to update. If no such application is found, <code>UpdateApplication</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'UpdateApplicationVersionMessage$ApplicationName' => '<p> The name of the application associated with this version. </p> <p> If no application is found with this name, <code>UpdateApplication</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'UpdateConfigurationTemplateMessage$ApplicationName' => '<p>The name of the application associated with the configuration template to update.</p> <p> If no application is found with this name, <code>UpdateConfigurationTemplate</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'ValidateConfigurationSettingsMessage$ApplicationName' => '<p> The name of the application that the configuration template or environment belongs to. </p>',
      ],
    ],
    'ApplicationNamesList' => [
      'base' => NULL,
      'refs' => [
        'DescribeApplicationsMessage$ApplicationNames' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to only include those with the specified names. </p>',
      ],
    ],
    'ApplicationVersionDescription' => [
      'base' => '<p> Describes the properties of an application version. </p>',
      'refs' => [
        'ApplicationVersionDescriptionList$member' => NULL,
        'ApplicationVersionDescriptionMessage$ApplicationVersion' => '<p> The <a>ApplicationVersionDescription</a> of the application version. </p>',
      ],
    ],
    'ApplicationVersionDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'ApplicationVersionDescriptionsMessage$ApplicationVersions' => '<p> A list of <a>ApplicationVersionDescription</a> . </p>',
      ],
    ],
    'ApplicationVersionDescriptionMessage' => [
      'base' => '<p> Result message wrapping a single description of an application version. </p>',
      'refs' => [],
    ],
    'ApplicationVersionDescriptionsMessage' => [
      'base' => '<p>Result message wrapping a list of application version descriptions.</p>',
      'refs' => [],
    ],
    'AutoCreateApplication' => [
      'base' => NULL,
      'refs' => [
        'CreateApplicationVersionMessage$AutoCreateApplication' => '<p> Determines how the system behaves if the specified application for this version does not already exist: </p> <enumValues> <value name="true"> <p> <code>true</code>: Automatically creates the specified application for this version if it does not already exist. </p> </value> <value name="false"> <p> <code>false</code>: Returns an <code>InvalidParameterValue</code> if the specified application for this version does not already exist. </p> </value> </enumValues> <ul> <li> <code>true</code> : Automatically creates the specified application for this release if it does not already exist. </li> <li> <code>false</code> : Throws an <code>InvalidParameterValue</code> if the specified application for this release does not already exist. </li> </ul> <p> Default: <code>false</code> </p> <p> Valid Values: <code>true</code> | <code>false</code> </p>',
      ],
    ],
    'AutoScalingGroup' => [
      'base' => '<p> Describes an Auto Scaling launch configuration. </p>',
      'refs' => [
        'AutoScalingGroupList$member' => NULL,
      ],
    ],
    'AutoScalingGroupList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$AutoScalingGroups' => '<p> The <code>AutoScalingGroups</code> used by this environment. </p>',
      ],
    ],
    'AvailableSolutionStackDetailsList' => [
      'base' => NULL,
      'refs' => [
        'ListAvailableSolutionStacksResultMessage$SolutionStackDetails' => '<p> A list of available solution stacks and their <a>SolutionStackDescription</a>. </p>',
      ],
    ],
    'AvailableSolutionStackNamesList' => [
      'base' => NULL,
      'refs' => [
        'ListAvailableSolutionStacksResultMessage$SolutionStacks' => '<p> A list of available solution stacks. </p>',
      ],
    ],
    'CheckDNSAvailabilityMessage' => [
      'base' => '<p>Results message indicating whether a CNAME is available.</p>',
      'refs' => [],
    ],
    'CheckDNSAvailabilityResultMessage' => [
      'base' => '<p>Indicates if the specified CNAME is available.</p>',
      'refs' => [],
    ],
    'CnameAvailability' => [
      'base' => NULL,
      'refs' => [
        'CheckDNSAvailabilityResultMessage$Available' => '<p> Indicates if the specified CNAME is available: </p> <enumValues> <value name="true"> <p> <code>true</code> : The CNAME is available. </p> </value> <value name="false"> <p> <code>true</code> : The CNAME is not available. </p> </value> </enumValues> <p> <ul> <li> <code>true</code> : The CNAME is available. </li> <li> <code>false</code> : The CNAME is not available. </li> </ul> </p>',
      ],
    ],
    'ConfigurationDeploymentStatus' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsDescription$DeploymentStatus' => '<p> If this configuration set is associated with an environment, the <code>DeploymentStatus</code> parameter indicates the deployment status of this configuration set: </p> <enumValues> <value name="null"> <p> <code>null</code>: This configuration is not associated with a running environment. </p> </value> <value name="pending"> <p> <code>pending</code>: This is a draft configuration that is not deployed to the associated environment but is in the process of deploying. </p> </value> <value name="deployed"> <p> <code>deployed</code>: This is the configuration that is currently deployed to the associated running environment. </p> </value> <value name="failed"> <p> <code>failed</code>: This is a draft configuration, that failed to successfully deploy. </p> </value> </enumValues> <ul> <li> <code>null</code>: This configuration is not associated with a running environment. </li> <li> <code>pending</code>: This is a draft configuration that is not deployed to the associated environment but is in the process of deploying. </li> <li> <code>deployed</code>: This is the configuration that is currently deployed to the associated running environment. </li> <li> <code>failed</code>: This is a draft configuration that failed to successfully deploy. </li> </ul>',
      ],
    ],
    'ConfigurationOptionDefaultValue' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$DefaultValue' => '<p> The default value for this configuration option. </p>',
      ],
    ],
    'ConfigurationOptionDescription' => [
      'base' => '<p> Describes the possible values for a configuration option. </p>',
      'refs' => [
        'ConfigurationOptionDescriptionsList$member' => NULL,
      ],
    ],
    'ConfigurationOptionDescriptionsList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionsDescription$Options' => '<p> A list of <a>ConfigurationOptionDescription</a>. </p>',
      ],
    ],
    'ConfigurationOptionName' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$Name' => '<p> The name of the configuration option. </p>',
        'ConfigurationOptionSetting$OptionName' => '<p> The name of the configuration option. </p>',
        'OptionSpecification$OptionName' => '<p> The name of the configuration option. </p>',
        'ValidationMessage$OptionName' => '<p></p>',
      ],
    ],
    'ConfigurationOptionPossibleValue' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionPossibleValues$member' => NULL,
      ],
    ],
    'ConfigurationOptionPossibleValues' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$ValueOptions' => '<p> If specified, values for the configuration option are selected from this list. </p>',
      ],
    ],
    'ConfigurationOptionSetting' => [
      'base' => '<p> A specification identifying an individual configuration option along with its current value. For a list of possible option values, go to <a href="http://docs.aws.amazon.com/elasticbeanstalk/latest/dg/command-options.html">Option Values</a> in the <i>AWS Elastic Beanstalk Developer Guide</i>. </p>',
      'refs' => [
        'ConfigurationOptionSettingsList$member' => NULL,
      ],
    ],
    'ConfigurationOptionSettingsList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsDescription$OptionSettings' => '<p> A list of the configuration options and their values in this configuration set. </p>',
        'CreateConfigurationTemplateMessage$OptionSettings' => '<p> If specified, AWS Elastic Beanstalk sets the specified configuration option to the requested value. The new value overrides the value obtained from the solution stack or the source configuration template. </p>',
        'CreateEnvironmentMessage$OptionSettings' => '<p> If specified, AWS Elastic Beanstalk sets the specified configuration options to the requested value in the configuration set for the new environment. These override the values obtained from the solution stack or the configuration template. </p>',
        'UpdateConfigurationTemplateMessage$OptionSettings' => '<p> A list of configuration option settings to update with the new specified option value. </p>',
        'UpdateEnvironmentMessage$OptionSettings' => '<p> If specified, AWS Elastic Beanstalk updates the configuration set associated with the running environment and sets the specified configuration options to the requested value. </p>',
        'ValidateConfigurationSettingsMessage$OptionSettings' => '<p> A list of the options and desired values to evaluate. </p>',
      ],
    ],
    'ConfigurationOptionSeverity' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$ChangeSeverity' => '<p> An indication of which action is required if the value for this configuration option changes: </p> <enumValues> <value name="NoInterruption"> <p> NoInterruption - There is no interruption to the environment or application availability. </p> </value> <value name="RestartEnvironment"> <p> RestartEnvironment - The environment is restarted, all AWS resources are deleted and recreated, and the environment is unavailable during the process. </p> </value> <value name="RestartApplicationServer"> <p> RestartApplicationServer - The environment is available the entire time. However, a short application outage occurs when the application servers on the running Amazon EC2 instances are restarted. </p> </value> </enumValues> <ul> <li> <code>NoInterruption</code> : There is no interruption to the environment or application availability. </li> <li> <code>RestartEnvironment</code> : The environment is entirely restarted, all AWS resources are deleted and recreated, and the environment is unavailable during the process. </li> <li> <code>RestartApplicationServer</code> : The environment is available the entire time. However, a short application outage occurs when the application servers on the running Amazon EC2 instances are restarted. </li> </ul>',
      ],
    ],
    'ConfigurationOptionValue' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionSetting$Value' => '<p> The current value for the configuration option. </p>',
      ],
    ],
    'ConfigurationOptionValueType' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$ValueType' => '<p> An indication of which type of values this option has and whether it is allowable to select one or more than one of the possible values: </p> <enumValues> <value name="Scalar"> <p> <code>Scalar</code> : Values for this option are a single selection from the possible values, or a unformatted string or numeric value governed by the MIN/MAX/Regex constraints: </p> </value> <value name="List"> <p> <code>List</code> : Values for this option are multiple selections of the possible values. </p> </value> <value name="Boolean"> <p> <code>Boolean</code> : Values for this option are either <code>true</code> or <code>false</code> . </p> </value> </enumValues> <p> <ul> <li> <code>Scalar</code> : Values for this option are a single selection from the possible values, or an unformatted string, or numeric value governed by the <code>MIN/MAX/Regex</code> constraints. </li> <li> <code>List</code> : Values for this option are multiple selections from the possible values. </li> <li> <code>Boolean</code> : Values for this option are either <code>true</code> or <code>false</code> . </li> </ul> </p>',
      ],
    ],
    'ConfigurationOptionsDescription' => [
      'base' => '<p>Describes the settings for a specified configuration set.</p>',
      'refs' => [],
    ],
    'ConfigurationSettingsDescription' => [
      'base' => '<p> Describes the settings for a configuration set. </p>',
      'refs' => [
        'ConfigurationSettingsDescriptionList$member' => NULL,
      ],
    ],
    'ConfigurationSettingsDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsDescriptions$ConfigurationSettings' => '<p> A list of <a>ConfigurationSettingsDescription</a>. </p>',
      ],
    ],
    'ConfigurationSettingsDescriptions' => [
      'base' => '<p>The results from a request to change the configuration settings of an environment.</p>',
      'refs' => [],
    ],
    'ConfigurationSettingsValidationMessages' => [
      'base' => '<p>Provides a list of validation messages.</p>',
      'refs' => [],
    ],
    'ConfigurationTemplateName' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsDescription$TemplateName' => '<p> If not <code>null</code>, the name of the configuration template for this configuration set. </p>',
        'ConfigurationTemplateNamesList$member' => NULL,
        'CreateConfigurationTemplateMessage$TemplateName' => '<p>The name of the configuration template.</p> <p>Constraint: This name must be unique per application. </p> <p>Default: If a configuration template already exists with this name, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p>',
        'CreateEnvironmentMessage$TemplateName' => '<p> The name of the configuration template to use in deployment. If no configuration template is found with this name, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this parameter or a <code>SolutionStackName</code>, but not both. If you specify both, AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. If you do not specify either, AWS Elastic Beanstalk returns a <code>MissingRequiredParameter</code> error. </p>',
        'DeleteConfigurationTemplateMessage$TemplateName' => '<p>The name of the configuration template to delete.</p>',
        'DescribeConfigurationOptionsMessage$TemplateName' => '<p> The name of the configuration template whose configuration options you want to describe. </p>',
        'DescribeConfigurationSettingsMessage$TemplateName' => '<p> The name of the configuration template to describe. </p> <p> Conditional: You must specify either this parameter or an EnvironmentName, but not both. If you specify both, AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. If you do not specify either, AWS Elastic Beanstalk returns a <code>MissingRequiredParameter</code> error. </p>',
        'DescribeEventsMessage$TemplateName' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those that are associated with this environment configuration. </p>',
        'EnvironmentDescription$TemplateName' => '<p> The name of the configuration template used to originally launch this environment. </p>',
        'EventDescription$TemplateName' => '<p>The name of the configuration associated with this event.</p>',
        'SourceConfiguration$TemplateName' => '<p>The name of the configuration template.</p>',
        'UpdateConfigurationTemplateMessage$TemplateName' => '<p>The name of the configuration template to update.</p> <p> If no configuration template is found with this name, <code>UpdateConfigurationTemplate</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'UpdateEnvironmentMessage$TemplateName' => '<p> If this parameter is specified, AWS Elastic Beanstalk deploys this configuration template to the environment. If no such configuration template is found, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p>',
        'ValidateConfigurationSettingsMessage$TemplateName' => '<p> The name of the configuration template to validate the settings against. </p> <p> Condition: You cannot specify both this and an environment name. </p>',
      ],
    ],
    'ConfigurationTemplateNamesList' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$ConfigurationTemplates' => '<p> The names of the configuration templates associated with this application. </p>',
      ],
    ],
    'CreateApplicationMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'CreateApplicationVersionMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateConfigurationTemplateMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'CreateEnvironmentMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'CreateStorageLocationResultMessage' => [
      'base' => '<p>Results of a <a>CreateStorageLocationResult</a> call.</p>',
      'refs' => [],
    ],
    'CreationDate' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$DateCreated' => '<p>The date when the application was created.</p>',
        'ApplicationVersionDescription$DateCreated' => '<p>The creation date of the application version.</p>',
        'ConfigurationSettingsDescription$DateCreated' => '<p> The date (in UTC time] when this configuration set was created. </p>',
        'EnvironmentDescription$DateCreated' => '<p>The creation date for this environment.</p>',
      ],
    ],
    'DNSCname' => [
      'base' => NULL,
      'refs' => [
        'CheckDNSAvailabilityResultMessage$FullyQualifiedCNAME' => '<p>The fully qualified CNAME to reserve when <a>CreateEnvironment</a> is called with the provided prefix.</p>',
        'EnvironmentDescription$CNAME' => '<p> The URL to the CNAME for this environment. </p>',
      ],
    ],
    'DNSCnamePrefix' => [
      'base' => NULL,
      'refs' => [
        'CheckDNSAvailabilityMessage$CNAMEPrefix' => '<p> The prefix used when this CNAME is reserved. </p>',
        'CreateEnvironmentMessage$CNAMEPrefix' => '<p> If specified, the environment attempts to use this value as the prefix for the CNAME. If not specified, the CNAME is generated automatically by appending a random alphanumeric string to the environment name. </p>',
      ],
    ],
    'DeleteApplicationMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DeleteApplicationVersionMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DeleteConfigurationTemplateMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DeleteEnvironmentConfigurationMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DeleteSourceBundle' => [
      'base' => NULL,
      'refs' => [
        'DeleteApplicationVersionMessage$DeleteSourceBundle' => '<p>Indicates whether to delete the associated source bundle from Amazon S3: </p> <ul> <li> <code>true</code>: An attempt is made to delete the associated Amazon S3 source bundle specified at time of creation. </li> <li> <code>false</code>: No action is taken on the Amazon S3 source bundle specified at time of creation. </li> </ul> <p> Valid Values: <code>true</code> | <code>false</code> </p>',
      ],
    ],
    'DescribeApplicationVersionsMessage' => [
      'base' => '<p>Result message containing a list of configuration descriptions.</p>',
      'refs' => [],
    ],
    'DescribeApplicationsMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DescribeConfigurationOptionsMessage' => [
      'base' => '<p>Result message containig a list of application version descriptions. </p>',
      'refs' => [],
    ],
    'DescribeConfigurationSettingsMessage' => [
      'base' => '<p>Result message containing all of the configuration settings for a specified solution stack or configuration template.</p>',
      'refs' => [],
    ],
    'DescribeEnvironmentResourcesMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DescribeEnvironmentsMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'DescribeEventsMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$Description' => '<p>User-defined description of the application.</p>',
        'ApplicationVersionDescription$Description' => '<p>The description of this application version.</p>',
        'ConfigurationSettingsDescription$Description' => '<p> Describes this configuration set. </p>',
        'CreateApplicationMessage$Description' => '<p>Describes the application.</p>',
        'CreateApplicationVersionMessage$Description' => '<p>Describes this version.</p>',
        'CreateConfigurationTemplateMessage$Description' => '<p>Describes this configuration.</p>',
        'CreateEnvironmentMessage$Description' => '<p>Describes this environment.</p>',
        'EnvironmentDescription$Description' => '<p>Describes this environment.</p>',
        'UpdateApplicationMessage$Description' => '<p> A new description for the application. </p> <p>Default: If not specified, AWS Elastic Beanstalk does not update the description. </p>',
        'UpdateApplicationVersionMessage$Description' => '<p>A new description for this release.</p>',
        'UpdateConfigurationTemplateMessage$Description' => '<p>A new description for the configuration.</p>',
        'UpdateEnvironmentMessage$Description' => '<p> If this parameter is specified, AWS Elastic Beanstalk updates the description of this environment. </p>',
      ],
    ],
    'Ec2InstanceId' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentInfoDescription$Ec2InstanceId' => '<p>The Amazon EC2 Instance ID for this information.</p>',
      ],
    ],
    'EndpointURL' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentDescription$EndpointURL' => '<p>For load-balanced, autoscaling environments, the URL to the LoadBalancer. For single-instance environments, the IP address of the instance.</p>',
      ],
    ],
    'EnvironmentDescription' => [
      'base' => '<p>Describes the properties of an environment.</p>',
      'refs' => [
        'EnvironmentDescriptionsList$member' => NULL,
      ],
    ],
    'EnvironmentDescriptionsList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentDescriptionsMessage$Environments' => '<p> Returns an <a>EnvironmentDescription</a> list. </p>',
      ],
    ],
    'EnvironmentDescriptionsMessage' => [
      'base' => '<p>Result message containing a list of environment descriptions.</p>',
      'refs' => [],
    ],
    'EnvironmentHealth' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentDescription$Health' => '<p> Describes the health status of the environment. AWS Elastic Beanstalk indicates the failure levels for a running environment: </p> <enumValues> <value name="Red"> <p> <code>Red</code> : Indicates the environment is not working. </p> </value> <value name="Yellow"> <p> <code>Yellow</code>: Indicates that something is wrong, the application might not be available, but the instances appear running. </p> </value> <value name="Green"> <p> <code>Green</code>: Indicates the environment is healthy and fully functional. </p> </value> </enumValues> <ul> <li> <code>Red</code>: Indicates the environment is not responsive. Occurs when three or more consecutive failures occur for an environment. </li> <li> <code>Yellow</code>: Indicates that something is wrong. Occurs when two consecutive failures occur for an environment. </li> <li> <code>Green</code>: Indicates the environment is healthy and fully functional. </li> <li> <code>Grey</code>: Default health for a new environment. The environment is not fully launched and health checks have not started or health checks are suspended during an <code>UpdateEnvironment</code> or <code>RestartEnvironement</code> request. </li> </ul> <p> Default: <code>Grey</code> </p>',
      ],
    ],
    'EnvironmentId' => [
      'base' => NULL,
      'refs' => [
        'CreateConfigurationTemplateMessage$EnvironmentId' => '<p> The ID of the environment used with this configuration template. </p>',
        'DescribeEnvironmentResourcesMessage$EnvironmentId' => '<p> The ID of the environment to retrieve AWS resource usage data. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'DescribeEventsMessage$EnvironmentId' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those associated with this environment. </p>',
        'EnvironmentDescription$EnvironmentId' => '<p> The ID of this environment. </p>',
        'EnvironmentIdList$member' => NULL,
        'RebuildEnvironmentMessage$EnvironmentId' => '<p> The ID of the environment to rebuild. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RequestEnvironmentInfoMessage$EnvironmentId' => '<p>The ID of the environment of the requested data.</p> <p> If no such environment is found, <code>RequestEnvironmentInfo</code> returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RestartAppServerMessage$EnvironmentId' => '<p> The ID of the environment to restart the server for. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RetrieveEnvironmentInfoMessage$EnvironmentId' => '<p>The ID of the data\'s environment.</p> <p> If no such environment is found, returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'SwapEnvironmentCNAMEsMessage$SourceEnvironmentId' => '<p> The ID of the source environment. </p> <p> Condition: You must specify at least the <code>SourceEnvironmentID</code> or the <code>SourceEnvironmentName</code>. You may also specify both. If you specify the <code>SourceEnvironmentId</code>, you must specify the <code>DestinationEnvironmentId</code>. </p>',
        'SwapEnvironmentCNAMEsMessage$DestinationEnvironmentId' => '<p> The ID of the destination environment. </p> <p> Condition: You must specify at least the <code>DestinationEnvironmentID</code> or the <code>DestinationEnvironmentName</code>. You may also specify both. You must specify the <code>SourceEnvironmentId</code> with the <code>DestinationEnvironmentId</code>. </p>',
        'TerminateEnvironmentMessage$EnvironmentId' => '<p>The ID of the environment to terminate.</p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'UpdateEnvironmentMessage$EnvironmentId' => '<p>The ID of the environment to update.</p> <p> If no environment with this ID exists, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentName, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
      ],
    ],
    'EnvironmentIdList' => [
      'base' => NULL,
      'refs' => [
        'DescribeEnvironmentsMessage$EnvironmentIds' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to include only those that have the specified IDs. </p>',
      ],
    ],
    'EnvironmentInfoDescription' => [
      'base' => '<p>The information retrieved from the Amazon EC2 instances.</p>',
      'refs' => [
        'EnvironmentInfoDescriptionList$member' => NULL,
      ],
    ],
    'EnvironmentInfoDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'RetrieveEnvironmentInfoResultMessage$EnvironmentInfo' => '<p> The <a>EnvironmentInfoDescription</a> of the environment. </p>',
      ],
    ],
    'EnvironmentInfoType' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentInfoDescription$InfoType' => '<p>The type of information retrieved.</p>',
        'RequestEnvironmentInfoMessage$InfoType' => '<p> The type of information to request. </p>',
        'RetrieveEnvironmentInfoMessage$InfoType' => '<p> The type of information to retrieve. </p>',
      ],
    ],
    'EnvironmentName' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsDescription$EnvironmentName' => '<p> If not <code>null</code>, the name of the environment for this configuration set. </p>',
        'CreateEnvironmentMessage$EnvironmentName' => '<p> A unique name for the deployment environment. Used in the application URL. </p> <p>Constraint: Must be from 4 to 23 characters in length. The name can contain only letters, numbers, and hyphens. It cannot start or end with a hyphen. This name must be unique in your account. If the specified name already exists, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p> <p>Default: If the CNAME parameter is not specified, the environment name becomes part of the CNAME, and therefore part of the visible URL for your application.</p>',
        'DeleteEnvironmentConfigurationMessage$EnvironmentName' => '<p> The name of the environment to delete the draft configuration from. </p>',
        'DescribeConfigurationOptionsMessage$EnvironmentName' => '<p> The name of the environment whose configuration options you want to describe. </p>',
        'DescribeConfigurationSettingsMessage$EnvironmentName' => '<p> The name of the environment to describe. </p> <p> Condition: You must specify either this or a TemplateName, but not both. If you specify both, AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'DescribeEnvironmentResourcesMessage$EnvironmentName' => '<p> The name of the environment to retrieve AWS resource usage data. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'DescribeEventsMessage$EnvironmentName' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those associated with this environment. </p>',
        'EnvironmentDescription$EnvironmentName' => '<p>The name of this environment.</p>',
        'EnvironmentNamesList$member' => NULL,
        'EnvironmentResourceDescription$EnvironmentName' => '<p>The name of the environment.</p>',
        'EventDescription$EnvironmentName' => '<p>The name of the environment associated with this event.</p>',
        'RebuildEnvironmentMessage$EnvironmentName' => '<p> The name of the environment to rebuild. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RequestEnvironmentInfoMessage$EnvironmentName' => '<p>The name of the environment of the requested data.</p> <p> If no such environment is found, <code>RequestEnvironmentInfo</code> returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RestartAppServerMessage$EnvironmentName' => '<p> The name of the environment to restart the server for. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'RetrieveEnvironmentInfoMessage$EnvironmentName' => '<p>The name of the data\'s environment.</p> <p> If no such environment is found, returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'SwapEnvironmentCNAMEsMessage$SourceEnvironmentName' => '<p> The name of the source environment. </p> <p> Condition: You must specify at least the <code>SourceEnvironmentID</code> or the <code>SourceEnvironmentName</code>. You may also specify both. If you specify the <code>SourceEnvironmentName</code>, you must specify the <code>DestinationEnvironmentName</code>. </p>',
        'SwapEnvironmentCNAMEsMessage$DestinationEnvironmentName' => '<p> The name of the destination environment. </p> <p> Condition: You must specify at least the <code>DestinationEnvironmentID</code> or the <code>DestinationEnvironmentName</code>. You may also specify both. You must specify the <code>SourceEnvironmentName</code> with the <code>DestinationEnvironmentName</code>. </p>',
        'TerminateEnvironmentMessage$EnvironmentName' => '<p>The name of the environment to terminate.</p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'UpdateEnvironmentMessage$EnvironmentName' => '<p>The name of the environment to update. If no environment with this name exists, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p> <p> Condition: You must specify either this or an EnvironmentId, or both. If you do not specify either, AWS Elastic Beanstalk returns <code>MissingRequiredParameter</code> error. </p>',
        'ValidateConfigurationSettingsMessage$EnvironmentName' => '<p> The name of the environment to validate the settings against. </p> <p> Condition: You cannot specify both this and a configuration template name. </p>',
      ],
    ],
    'EnvironmentNamesList' => [
      'base' => NULL,
      'refs' => [
        'DescribeEnvironmentsMessage$EnvironmentNames' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to include only those that have the specified names. </p>',
      ],
    ],
    'EnvironmentResourceDescription' => [
      'base' => '<p>Describes the AWS resources in use by this environment. This data is live.</p>',
      'refs' => [
        'EnvironmentResourceDescriptionsMessage$EnvironmentResources' => '<p> A list of <a>EnvironmentResourceDescription</a>. </p>',
      ],
    ],
    'EnvironmentResourceDescriptionsMessage' => [
      'base' => '<p>Result message containing a list of environment resource descriptions. </p>',
      'refs' => [],
    ],
    'EnvironmentResourcesDescription' => [
      'base' => '<p>Describes the AWS resources in use by this environment. This data is not live data.</p>',
      'refs' => [
        'EnvironmentDescription$Resources' => '<p>The description of the AWS resources used by this environment.</p>',
      ],
    ],
    'EnvironmentStatus' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentDescription$Status' => '<p> The current operational status of the environment: </p> <ul> <li> <code>Launching</code>: Environment is in the process of initial deployment. </li> <li> <code>Updating</code>: Environment is in the process of updating its configuration settings or application version. </li> <li> <code>Ready</code>: Environment is available to have an action performed on it, such as update or terminate. </li> <li> <code>Terminating</code>: Environment is in the shut-down process. </li> <li> <code>Terminated</code>: Environment is not running. </li> </ul>',
      ],
    ],
    'EnvironmentTier' => [
      'base' => '<p> Describes the properties of an environment tier </p>',
      'refs' => [
        'CreateEnvironmentMessage$Tier' => '<p> This specifies the tier to use for creating this environment. </p>',
        'EnvironmentDescription$Tier' => '<p>Describes the current tier of this environment.</p>',
        'UpdateEnvironmentMessage$Tier' => '<p> This specifies the tier to use to update the environment. </p> <p> Condition: You can only update the tier version for an environment. If you change the name of the type, AWS Elastic Beanstalk returns <code>InvalidParameterValue</code> error. </p>',
      ],
    ],
    'EventDate' => [
      'base' => NULL,
      'refs' => [
        'EventDescription$EventDate' => '<p>The date when the event occurred.</p>',
      ],
    ],
    'EventDescription' => [
      'base' => '<p>Describes an event.</p>',
      'refs' => [
        'EventDescriptionList$member' => NULL,
      ],
    ],
    'EventDescriptionList' => [
      'base' => NULL,
      'refs' => [
        'EventDescriptionsMessage$Events' => '<p> A list of <a>EventDescription</a>. </p>',
      ],
    ],
    'EventDescriptionsMessage' => [
      'base' => '<p>Result message wrapping a list of event descriptions.</p>',
      'refs' => [],
    ],
    'EventMessage' => [
      'base' => NULL,
      'refs' => [
        'EventDescription$Message' => '<p>The event message.</p>',
      ],
    ],
    'EventSeverity' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$Severity' => '<p> If specified, limits the events returned from this call to include only those with the specified severity or higher. </p>',
        'EventDescription$Severity' => '<p>The severity level of this event. </p>',
      ],
    ],
    'FileTypeExtension' => [
      'base' => NULL,
      'refs' => [
        'SolutionStackFileTypeList$member' => NULL,
      ],
    ],
    'IncludeDeleted' => [
      'base' => NULL,
      'refs' => [
        'DescribeEnvironmentsMessage$IncludeDeleted' => '<p>Indicates whether to include deleted environments: </p> <p> <code>true</code>: Environments that have been deleted after <code>IncludedDeletedBackTo</code> are displayed. </p> <p> <code>false</code>: Do not include deleted environments. </p>',
      ],
    ],
    'IncludeDeletedBackTo' => [
      'base' => NULL,
      'refs' => [
        'DescribeEnvironmentsMessage$IncludedDeletedBackTo' => '<p> If specified when <code>IncludeDeleted</code> is set to <code>true</code>, then environments deleted after this date are displayed. </p>',
      ],
    ],
    'Instance' => [
      'base' => '<p>The description of an Amazon EC2 instance.</p>',
      'refs' => [
        'InstanceList$member' => NULL,
      ],
    ],
    'InstanceList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$Instances' => '<p>The Amazon EC2 instances used by this environment.</p>',
      ],
    ],
    'InsufficientPrivilegesException' => [
      'base' => '<p>Unable to perform the specified operation because the user does not have enough privileges for one of more downstream aws services</p>',
      'refs' => [],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'Listener$Port' => '<p>The port that is used by the Listener.</p>',
      ],
    ],
    'LaunchConfiguration' => [
      'base' => '<p>Describes an Auto Scaling launch configuration.</p>',
      'refs' => [
        'LaunchConfigurationList$member' => NULL,
      ],
    ],
    'LaunchConfigurationList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$LaunchConfigurations' => '<p>The Auto Scaling launch configurations in use by this environment.</p>',
      ],
    ],
    'ListAvailableSolutionStacksResultMessage' => [
      'base' => '<p>A list of available AWS Elastic Beanstalk solution stacks. </p>',
      'refs' => [],
    ],
    'Listener' => [
      'base' => '<p>Describes the properties of a Listener for the LoadBalancer.</p>',
      'refs' => [
        'LoadBalancerListenersDescription$member' => NULL,
      ],
    ],
    'LoadBalancer' => [
      'base' => '<p>Describes a LoadBalancer.</p>',
      'refs' => [
        'LoadBalancerList$member' => NULL,
      ],
    ],
    'LoadBalancerDescription' => [
      'base' => '<p>Describes the details of a LoadBalancer.</p>',
      'refs' => [
        'EnvironmentResourcesDescription$LoadBalancer' => '<p>Describes the LoadBalancer.</p>',
      ],
    ],
    'LoadBalancerList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$LoadBalancers' => '<p>The LoadBalancers in use by this environment.</p>',
      ],
    ],
    'LoadBalancerListenersDescription' => [
      'base' => NULL,
      'refs' => [
        'LoadBalancerDescription$Listeners' => '<p>A list of Listeners used by the LoadBalancer.</p>',
      ],
    ],
    'MaxRecords' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$MaxRecords' => '<p> Specifies the maximum number of events that can be returned, beginning with the most recent event. </p>',
      ],
    ],
    'Message' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentInfoDescription$Message' => '<p>The retrieved information.</p>',
      ],
    ],
    'OperationInProgressException' => [
      'base' => '<p>Unable to perform the specified operation because another operation is already in progress affecting an an element in this activity.</p>',
      'refs' => [],
    ],
    'OptionNamespace' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$Namespace' => '<p> A unique namespace identifying the option\'s associated AWS resource. </p>',
        'ConfigurationOptionSetting$Namespace' => '<p> A unique namespace identifying the option\'s associated AWS resource. </p>',
        'OptionSpecification$Namespace' => '<p> A unique namespace identifying the option\'s associated AWS resource. </p>',
        'ValidationMessage$Namespace' => '<p></p>',
      ],
    ],
    'OptionRestrictionMaxLength' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$MaxLength' => '<p> If specified, the configuration option must be a string value no longer than this value. </p>',
      ],
    ],
    'OptionRestrictionMaxValue' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$MaxValue' => '<p> If specified, the configuration option must be a numeric value less than this value. </p>',
      ],
    ],
    'OptionRestrictionMinValue' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$MinValue' => '<p> If specified, the configuration option must be a numeric value greater than this value. </p>',
      ],
    ],
    'OptionRestrictionRegex' => [
      'base' => '<p> A regular expression representing a restriction on a string configuration option value. </p>',
      'refs' => [
        'ConfigurationOptionDescription$Regex' => '<p> If specified, the configuration option must be a string value that satisfies this regular expression. </p>',
      ],
    ],
    'OptionSpecification' => [
      'base' => '<p> A specification identifying an individual configuration option. </p>',
      'refs' => [
        'OptionsSpecifierList$member' => NULL,
      ],
    ],
    'OptionsSpecifierList' => [
      'base' => NULL,
      'refs' => [
        'CreateEnvironmentMessage$OptionsToRemove' => '<p> A list of custom user-defined configuration options to remove from the configuration set for this new environment. </p>',
        'DescribeConfigurationOptionsMessage$Options' => '<p> If specified, restricts the descriptions to only the specified options. </p>',
        'UpdateConfigurationTemplateMessage$OptionsToRemove' => '<p> A list of configuration options to remove from the configuration set. </p> <p> Constraint: You can remove only <code>UserDefined</code> configuration options. </p>',
        'UpdateEnvironmentMessage$OptionsToRemove' => '<p> A list of custom user-defined configuration options to remove from the configuration set for this environment. </p>',
      ],
    ],
    'Queue' => [
      'base' => '<p>Describes a queue.</p>',
      'refs' => [
        'QueueList$member' => NULL,
      ],
    ],
    'QueueList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$Queues' => '<p> The queues used by this environment. </p>',
      ],
    ],
    'RebuildEnvironmentMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'RegexLabel' => [
      'base' => NULL,
      'refs' => [
        'OptionRestrictionRegex$Label' => '<p> A unique name representing this regular expression. </p>',
      ],
    ],
    'RegexPattern' => [
      'base' => NULL,
      'refs' => [
        'OptionRestrictionRegex$Pattern' => '<p> The regular expression pattern that a string configuration option value with this restriction must match. </p>',
      ],
    ],
    'RequestEnvironmentInfoMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'RequestId' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$RequestId' => '<p> If specified, AWS Elastic Beanstalk restricts the described events to include only those associated with this request ID. </p>',
        'EventDescription$RequestId' => '<p>The web service request ID for the activity of this event.</p>',
      ],
    ],
    'ResourceId' => [
      'base' => NULL,
      'refs' => [
        'AutoScalingGroup$Name' => '<p> The name of the <code>AutoScalingGroup</code> . </p>',
        'Instance$Id' => '<p>The ID of the Amazon EC2 instance.</p>',
        'LaunchConfiguration$Name' => '<p>The name of the launch configuration.</p>',
        'LoadBalancer$Name' => '<p>The name of the LoadBalancer.</p>',
        'Trigger$Name' => '<p>The name of the trigger.</p>',
      ],
    ],
    'RestartAppServerMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'RetrieveEnvironmentInfoMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'RetrieveEnvironmentInfoResultMessage' => [
      'base' => '<p>Result message containing a description of the requested environment info.</p>',
      'refs' => [],
    ],
    'S3Bucket' => [
      'base' => NULL,
      'refs' => [
        'CreateStorageLocationResultMessage$S3Bucket' => '<p> The name of the Amazon S3 bucket created. </p>',
        'S3Location$S3Bucket' => '<p>The Amazon S3 bucket where the data is located.</p>',
      ],
    ],
    'S3Key' => [
      'base' => NULL,
      'refs' => [
        'S3Location$S3Key' => '<p>The Amazon S3 key where the data is located.</p>',
      ],
    ],
    'S3Location' => [
      'base' => '<p>A specification of a location in Amazon S3.</p>',
      'refs' => [
        'ApplicationVersionDescription$SourceBundle' => '<p> The location where the source bundle is located for this version. </p>',
        'CreateApplicationVersionMessage$SourceBundle' => '<p> The Amazon S3 bucket and key that identify the location of the source bundle for this version. </p> <p> If data found at the Amazon S3 location exceeds the maximum allowed source bundle size, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. The maximum size allowed is 512 MB. </p> <p>Default: If not specified, AWS Elastic Beanstalk uses a sample application. If only partially specified (for example, a bucket is provided but not the key] or if no data is found at the Amazon S3 location, AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. </p>',
      ],
    ],
    'S3LocationNotInServiceRegionException' => [
      'base' => '<p>The specified S3 bucket does not belong to the S3 region in which the service is running.</p>',
      'refs' => [],
    ],
    'S3SubscriptionRequiredException' => [
      'base' => '<p>The caller does not have a subscription to Amazon S3.</p>',
      'refs' => [],
    ],
    'SampleTimestamp' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentInfoDescription$SampleTimestamp' => '<p>The time stamp when this information was retrieved.</p>',
      ],
    ],
    'SolutionStackDescription' => [
      'base' => '<p> Describes the solution stack. </p>',
      'refs' => [
        'AvailableSolutionStackDetailsList$member' => NULL,
      ],
    ],
    'SolutionStackFileTypeList' => [
      'base' => NULL,
      'refs' => [
        'SolutionStackDescription$PermittedFileTypes' => '<p> The permitted file types allowed for a solution stack. </p>',
      ],
    ],
    'SolutionStackName' => [
      'base' => NULL,
      'refs' => [
        'AvailableSolutionStackNamesList$member' => NULL,
        'ConfigurationOptionsDescription$SolutionStackName' => '<p> The name of the solution stack these configuration options belong to. </p>',
        'ConfigurationSettingsDescription$SolutionStackName' => '<p> The name of the solution stack this configuration set uses. </p>',
        'CreateConfigurationTemplateMessage$SolutionStackName' => '<p>The name of the solution stack used by this configuration. The solution stack specifies the operating system, architecture, and application server for a configuration template. It determines the set of configuration options as well as the possible and default values. </p> <p> Use <a>ListAvailableSolutionStacks</a> to obtain a list of available solution stacks. </p> <p> A solution stack name or a source configuration parameter must be specified, otherwise AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p> <p> If a solution stack name is not specified and the source configuration parameter is specified, AWS Elastic Beanstalk uses the same solution stack as the source configuration template. </p>',
        'CreateEnvironmentMessage$SolutionStackName' => '<p> This is an alternative to specifying a configuration name. If specified, AWS Elastic Beanstalk sets the configuration values to the default values associated with the specified solution stack. </p> <p> Condition: You must specify either this or a <code>TemplateName</code>, but not both. If you specify both, AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. If you do not specify either, AWS Elastic Beanstalk returns a <code>MissingRequiredParameter</code> error. </p>',
        'DescribeConfigurationOptionsMessage$SolutionStackName' => '<p> The name of the solution stack whose configuration options you want to describe. </p>',
        'EnvironmentDescription$SolutionStackName' => '<p> The name of the <code>SolutionStack</code> deployed with this environment. </p>',
        'SolutionStackDescription$SolutionStackName' => '<p> The name of the solution stack. </p>',
      ],
    ],
    'SourceBundleDeletionException' => [
      'base' => '<p>Unable to delete the Amazon S3 source bundle associated with the application version, although the application version deleted successfully.</p>',
      'refs' => [],
    ],
    'SourceConfiguration' => [
      'base' => '<p>A specification for an environment configuration</p>',
      'refs' => [
        'CreateConfigurationTemplateMessage$SourceConfiguration' => '<p> If specified, AWS Elastic Beanstalk uses the configuration values from the specified configuration template to create a new configuration. </p> <p> Values specified in the <code>OptionSettings</code> parameter of this call overrides any values obtained from the <code>SourceConfiguration</code>. </p> <p> If no configuration template is found, returns an <code>InvalidParameterValue</code> error. </p> <p> Constraint: If both the solution stack name parameter and the source configuration parameters are specified, the solution stack of the source configuration template must match the specified solution stack name or else AWS Elastic Beanstalk returns an <code>InvalidParameterCombination</code> error. </p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentTier$Name' => '<p>The name of this environment tier.</p>',
        'EnvironmentTier$Type' => '<p>The type of this environment tier.</p>',
        'EnvironmentTier$Version' => '<p>The version of this environment tier.</p>',
        'Listener$Protocol' => '<p>The protocol that is used by the Listener.</p>',
        'LoadBalancerDescription$LoadBalancerName' => '<p>The name of the LoadBalancer.</p>',
        'LoadBalancerDescription$Domain' => '<p>The domain name of the LoadBalancer.</p>',
        'Queue$Name' => '<p>The name of the queue.</p>',
        'Queue$URL' => '<p>The URL of the queue.</p>',
      ],
    ],
    'SwapEnvironmentCNAMEsMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'Tag' => [
      'base' => '<p>Describes a tag applied to a resource in an environment.</p>',
      'refs' => [
        'Tags$member' => NULL,
      ],
    ],
    'TagKey' => [
      'base' => NULL,
      'refs' => [
        'Tag$Key' => '<p>The key of the tag.</p>',
      ],
    ],
    'TagValue' => [
      'base' => NULL,
      'refs' => [
        'Tag$Value' => '<p>The value of the tag.</p>',
      ],
    ],
    'Tags' => [
      'base' => NULL,
      'refs' => [
        'CreateEnvironmentMessage$Tags' => '<p> This specifies the tags applied to resources in the environment. </p>',
      ],
    ],
    'TerminateEnvForce' => [
      'base' => NULL,
      'refs' => [
        'DeleteApplicationMessage$TerminateEnvByForce' => '<p>When set to true, running environments will be terminated before deleting the application.</p>',
      ],
    ],
    'TerminateEnvironmentMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'TerminateEnvironmentResources' => [
      'base' => NULL,
      'refs' => [
        'TerminateEnvironmentMessage$TerminateResources' => '<p> Indicates whether the associated AWS resources should shut down when the environment is terminated: </p> <enumValues> <value name="true"> <p> <code>true</code>: (default] The user AWS resources (for example, the Auto Scaling group, LoadBalancer, etc.] are terminated along with the environment. </p> </value> <value name="false"> <p> <code>false</code>: The environment is removed from the AWS Elastic Beanstalk but the AWS resources continue to operate. </p> </value> </enumValues> <ul> <li> <code>true</code>: The specified environment as well as the associated AWS resources, such as Auto Scaling group and LoadBalancer, are terminated. </li> <li> <code>false</code>: AWS Elastic Beanstalk resource management is removed from the environment, but the AWS resources continue to operate. </li> </ul> <p> For more information, see the <a href="http://docs.aws.amazon.com/elasticbeanstalk/latest/ug/"> AWS Elastic Beanstalk User Guide. </a> </p> <p> Default: <code>true</code> </p> <p> Valid Values: <code>true</code> | <code>false</code> </p>',
      ],
    ],
    'TimeFilterEnd' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$EndTime' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those that occur up to, but not including, the <code>EndTime</code>. </p>',
      ],
    ],
    'TimeFilterStart' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$StartTime' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those that occur on or after this time. </p>',
      ],
    ],
    'Token' => [
      'base' => NULL,
      'refs' => [
        'DescribeEventsMessage$NextToken' => '<p> Pagination token. If specified, the events return the next batch of results. </p>',
        'EventDescriptionsMessage$NextToken' => '<p> If returned, this indicates that there are more results to obtain. Use this token in the next <a>DescribeEvents</a> call to get the next batch of events. </p>',
      ],
    ],
    'TooManyApplicationVersionsException' => [
      'base' => '<p>The caller has exceeded the limit on the number of application versions associated with their account.</p>',
      'refs' => [],
    ],
    'TooManyApplicationsException' => [
      'base' => '<p>The caller has exceeded the limit on the number of applications associated with their account.</p>',
      'refs' => [],
    ],
    'TooManyBucketsException' => [
      'base' => '<p>The web service attempted to create a bucket in an Amazon S3 account that already has 100 buckets.</p>',
      'refs' => [],
    ],
    'TooManyConfigurationTemplatesException' => [
      'base' => '<p>The caller has exceeded the limit on the number of configuration templates associated with their account.</p>',
      'refs' => [],
    ],
    'TooManyEnvironmentsException' => [
      'base' => '<p>The caller has exceeded the limit of allowed environments associated with the account.</p>',
      'refs' => [],
    ],
    'Trigger' => [
      'base' => '<p>Describes a trigger.</p>',
      'refs' => [
        'TriggerList$member' => NULL,
      ],
    ],
    'TriggerList' => [
      'base' => NULL,
      'refs' => [
        'EnvironmentResourceDescription$Triggers' => '<p> The <code>AutoScaling</code> triggers in use by this environment. </p>',
      ],
    ],
    'UpdateApplicationMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'UpdateApplicationVersionMessage' => [
      'base' => '<p></p>',
      'refs' => [],
    ],
    'UpdateConfigurationTemplateMessage' => [
      'base' => '<p>The result message containing the options for the specified solution stack.</p>',
      'refs' => [],
    ],
    'UpdateDate' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$DateUpdated' => '<p>The date when the application was last modified.</p>',
        'ApplicationVersionDescription$DateUpdated' => '<p>The last modified date of the application version.</p>',
        'ConfigurationSettingsDescription$DateUpdated' => '<p> The date (in UTC time] when this configuration set was last modified. </p>',
        'EnvironmentDescription$DateUpdated' => '<p>The last modified date for this environment.</p>',
      ],
    ],
    'UpdateEnvironmentMessage' => [
      'base' => '<p>This documentation target is not reported in the API reference.</p>',
      'refs' => [],
    ],
    'UserDefinedOption' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationOptionDescription$UserDefined' => '<p> An indication of whether the user defined this configuration option: </p> <enumValues> <value name="true"> <p> <code>true</code> : This configuration option was defined by the user. It is a valid choice for specifying this as an Option to Remove when updating configuration settings. </p> </value> <value name="false"> <p> <code>false</code> : This configuration was not defined by the user. </p> </value> </enumValues> <ul> <li> <p> <code>true</code> : This configuration option was defined by the user. It is a valid choice for specifying if this as an <code>Option to Remove</code> when updating configuration settings. </p> </li> <li> <code>false</code> : This configuration was not defined by the user. </li> </ul> <p> Constraint: You can remove only <code>UserDefined</code> options from a configuration. </p> <p> Valid Values: <code>true</code> | <code>false</code></p>',
      ],
    ],
    'ValidateConfigurationSettingsMessage' => [
      'base' => '<p>A list of validation messages for a specified configuration template. </p>',
      'refs' => [],
    ],
    'ValidationMessage' => [
      'base' => '<p> An error or warning for a desired configuration option value. </p>',
      'refs' => [
        'ValidationMessagesList$member' => NULL,
      ],
    ],
    'ValidationMessageString' => [
      'base' => NULL,
      'refs' => [
        'ValidationMessage$Message' => '<p> A message describing the error or warning. </p>',
      ],
    ],
    'ValidationMessagesList' => [
      'base' => NULL,
      'refs' => [
        'ConfigurationSettingsValidationMessages$Messages' => '<p> A list of <a>ValidationMessage</a>. </p>',
      ],
    ],
    'ValidationSeverity' => [
      'base' => NULL,
      'refs' => [
        'ValidationMessage$Severity' => '<p> An indication of the severity of this message: </p> <enumValues> <value name="error"> <p> error: This message indicates that this is not a valid setting for an option. </p> </value> <value name="warning"> <p> warning: This message is providing information you should take into account. </p> </value> </enumValues> <ul> <li> error: This message indicates that this is not a valid setting for an option. </li> <li> warning: This message is providing information you should take into account. </li> </ul>',
      ],
    ],
    'VersionLabel' => [
      'base' => NULL,
      'refs' => [
        'ApplicationVersionDescription$VersionLabel' => '<p> A label uniquely identifying the version for the associated application. </p>',
        'CreateApplicationVersionMessage$VersionLabel' => '<p>A label identifying this version.</p> <p>Constraint: Must be unique per application. If an application version already exists with this label for the specified application, AWS Elastic Beanstalk returns an <code>InvalidParameterValue</code> error. </p>',
        'CreateEnvironmentMessage$VersionLabel' => '<p>The name of the application version to deploy.</p> <p> If the specified application has no associated application versions, AWS Elastic Beanstalk <code>UpdateEnvironment</code> returns an <code>InvalidParameterValue</code> error. </p> <p> Default: If not specified, AWS Elastic Beanstalk attempts to launch the <?oxy_delete author="brussard" timestamp="20131030T145730-0700" content="most recently created application version"><?oxy_insert_start author="brussard" timestamp="20131030T145730-0700">sample application in the container<?oxy_insert_end>. </p>',
        'DeleteApplicationVersionMessage$VersionLabel' => '<p> The label of the version to delete. </p>',
        'DescribeEnvironmentsMessage$VersionLabel' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to include only those that are associated with this application version. </p>',
        'DescribeEventsMessage$VersionLabel' => '<p> If specified, AWS Elastic Beanstalk restricts the returned descriptions to those associated with this application version. </p>',
        'EnvironmentDescription$VersionLabel' => '<p>The application version deployed in this environment.</p>',
        'EventDescription$VersionLabel' => '<p>The release label for the application version associated with this event.</p>',
        'UpdateApplicationVersionMessage$VersionLabel' => '<p>The name of the version to update.</p> <p> If no application version is found with this label, <code>UpdateApplication</code> returns an <code>InvalidParameterValue</code> error. </p>',
        'UpdateEnvironmentMessage$VersionLabel' => '<p> If this parameter is specified, AWS Elastic Beanstalk deploys the named application version to the environment. If no such application version is found, returns an <code>InvalidParameterValue</code> error. </p>',
        'VersionLabelsList$member' => NULL,
      ],
    ],
    'VersionLabelsList' => [
      'base' => NULL,
      'refs' => [
        'ApplicationDescription$Versions' => '<p>The names of the versions for this application.</p>',
        'DescribeApplicationVersionsMessage$VersionLabels' => '<p> If specified, restricts the returned descriptions to only include ones that have the specified version labels. </p>',
      ],
    ],
  ],
];
