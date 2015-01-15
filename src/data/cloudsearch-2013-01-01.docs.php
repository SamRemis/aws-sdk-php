<?php return [
  'operations' => [
    'BuildSuggesters' => '<p>Indexes the search suggestions. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-suggestions.html#configuring-suggesters">Configuring Suggesters</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'CreateDomain' => '<p>Creates a new search domain. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/creating-domains.html" target="_blank">Creating a Search Domain</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DefineAnalysisScheme' => '<p>Configures an analysis scheme that can be applied to a <code>text</code> or <code>text-array</code> field to define language-specific text processing options. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-analysis-schemes.html" target="_blank">Configuring Analysis Schemes</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DefineExpression' => '<p>Configures an <code><a>Expression</a></code> for the search domain. Used to create new expressions and modify existing ones. If the expression exists, the new configuration replaces the old one. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-expressions.html" target="_blank">Configuring Expressions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DefineIndexField' => '<p>Configures an <code><a>IndexField</a></code> for the search domain. Used to create new fields and modify existing ones. You must specify the name of the domain you are configuring and an index field configuration. The index field configuration specifies a unique name, the index field type, and the options you want to configure for the field. The options you can specify depend on the <code><a>IndexFieldType</a></code>. If the field exists, the new configuration replaces the old one. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-index-fields.html" target="_blank">Configuring Index Fields</a> in the <i>Amazon CloudSearch Developer Guide</i>. </p>',
    'DefineSuggester' => '<p>Configures a suggester for a domain. A suggester enables you to display possible matches before users finish typing their queries. When you configure a suggester, you must specify the name of the text field you want to search for possible matches and a unique name for the suggester. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-suggestions.html" target="_blank">Getting Search Suggestions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DeleteAnalysisScheme' => '<p>Deletes an analysis scheme. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-analysis-schemes.html" target="_blank">Configuring Analysis Schemes</a> in the <i>Amazon CloudSearch Developer Guide</i>. </p>',
    'DeleteDomain' => '<p>Permanently deletes a search domain and all of its data. Once a domain has been deleted, it cannot be recovered. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/deleting-domains.html" target="_blank">Deleting a Search Domain</a> in the <i>Amazon CloudSearch Developer Guide</i>. </p>',
    'DeleteExpression' => '<p>Removes an <code><a>Expression</a></code> from the search domain. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-expressions.html" target="_blank">Configuring Expressions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DeleteIndexField' => '<p>Removes an <code><a>IndexField</a></code> from the search domain. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-index-fields.html" target="_blank">Configuring Index Fields</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DeleteSuggester' => '<p>Deletes a suggester. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-suggestions.html" target="_blank">Getting Search Suggestions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeAnalysisSchemes' => '<p>Gets the analysis schemes configured for a domain. An analysis scheme defines language-specific text processing options for a <code>text</code> field. Can be limited to specific analysis schemes by name. By default, shows all analysis schemes and includes any pending changes to the configuration. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-analysis-schemes.html" target="_blank">Configuring Analysis Schemes</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeAvailabilityOptions' => '<p>Gets the availability options configured for a domain. By default, shows the configuration with any pending changes. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-availability-options.html" target="_blank">Configuring Availability Options</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeDomains' => '<p>Gets information about the search domains owned by this account. Can be limited to specific domains. Shows all domains by default. To get the number of searchable documents in a domain, use the console or submit a <code>matchall</code> request to your domain\'s search endpoint: <code>q=matchall&amp;amp;q.parser=structured&amp;amp;size=0</code>. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-domain-info.html" target="_blank">Getting Information about a Search Domain</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeExpressions' => '<p>Gets the expressions configured for the search domain. Can be limited to specific expressions by name. By default, shows all expressions and includes any pending changes to the configuration. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-expressions.html" target="_blank">Configuring Expressions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeIndexFields' => '<p>Gets information about the index fields configured for the search domain. Can be limited to specific fields by name. By default, shows all fields and includes any pending changes to the configuration. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-domain-info.html" target="_blank">Getting Domain Information</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeScalingParameters' => '<p>Gets the scaling parameters configured for a domain. A domain\'s scaling parameters specify the desired search instance type and replication count. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-scaling-options.html" target="_blank">Configuring Scaling Options</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeServiceAccessPolicies' => '<p>Gets information about the access policies that control access to the domain\'s document and search endpoints. By default, shows the configuration with any pending changes. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-access.html" target="_blank">Configuring Access for a Search Domain</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'DescribeSuggesters' => '<p>Gets the suggesters configured for a domain. A suggester enables you to display possible matches before users finish typing their queries. Can be limited to specific suggesters by name. By default, shows all suggesters and includes any pending changes to the configuration. Set the <code>Deployed</code> option to <code>true</code> to show the active configuration and exclude pending changes. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/getting-suggestions.html" target="_blank">Getting Search Suggestions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'IndexDocuments' => '<p>Tells the search domain to start indexing its documents using the latest indexing options. This operation must be invoked to activate options whose <a>OptionStatus</a> is <code>RequiresIndexDocuments</code>.</p>',
    'ListDomainNames' => '<p>Lists all search domains owned by an account.</p>',
    'UpdateAvailabilityOptions' => '<p>Configures the availability options for a domain. Enabling the Multi-AZ option expands an Amazon CloudSearch domain to an additional Availability Zone in the same Region to increase fault tolerance in the event of a service disruption. Changes to the Multi-AZ option can take about half an hour to become active. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-availability-options.html" target="_blank">Configuring Availability Options</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
    'UpdateScalingParameters' => '<p>Configures scaling parameters for a domain. A domain\'s scaling parameters specify the desired search instance type and replication count. Amazon CloudSearch will still automatically scale your domain based on the volume of data and traffic, but not below the desired instance type and replication count. If the Multi-AZ option is enabled, these values control the resources used per Availability Zone. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-scaling-options.html" target="_blank">Configuring Scaling Options</a> in the <i>Amazon CloudSearch Developer Guide</i>. </p>',
    'UpdateServiceAccessPolicies' => '<p>Configures the access rules that control access to the domain\'s document and search endpoints. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-access.html" target="_blank"> Configuring Access for an Amazon CloudSearch Domain</a>.</p>',
  ],
  'service' => '<fullname>Amazon CloudSearch Configuration Service</fullname> <p>You use the Amazon CloudSearch configuration service to create, configure, and manage search domains. Configuration service requests are submitted using the AWS Query protocol. AWS Query requests are HTTP or HTTPS requests submitted via HTTP GET or POST with a query parameter named Action.</p> <p>The endpoint for configuration service requests is region-specific: cloudsearch.<i>region</i>.amazonaws.com. For example, cloudsearch.us-east-1.amazonaws.com. For a current list of supported regions and endpoints, see <a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#cloudsearch_region" target="_blank">Regions and Endpoints</a>.</p>',
  'shapes' => [
    'APIVersion' => [
      'base' => '<p>The Amazon CloudSearch API version for a domain: 2011-02-01 or 2013-01-01.</p>',
      'refs' => [
        'DomainNameMap$value' => NULL,
      ],
    ],
    'ARN' => [
      'base' => '<p>The Amazon Resource Name (ARN] of the search domain. See <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/index.html?Using_Identifiers.html" target="_blank">Identifiers for IAM Entities</a> in <i>Using AWS Identity and Access Management</i> for more information.</p>',
      'refs' => [
        'DomainStatus$ARN' => NULL,
      ],
    ],
    'AccessPoliciesStatus' => [
      'base' => '<p>The configured access rules for the domain\'s document and search endpoints, and the current status of those rules.</p>',
      'refs' => [
        'DescribeServiceAccessPoliciesResponse$AccessPolicies' => '<p>The access rules configured for the domain specified in the request.</p>',
        'UpdateServiceAccessPoliciesResponse$AccessPolicies' => '<p>The access rules configured for the domain.</p>',
      ],
    ],
    'AlgorithmicStemming' => [
      'base' => NULL,
      'refs' => [
        'AnalysisOptions$AlgorithmicStemming' => '<p>The level of algorithmic stemming to perform: <code>none</code>, <code>minimal</code>, <code>light</code>, or <code>full</code>. The available levels vary depending on the language. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/text-processing.html#text-processing-settings" target="_blank">Language Specific Text Processing Settings</a> in the <i>Amazon CloudSearch Developer Guide</i> </p>',
      ],
    ],
    'AnalysisOptions' => [
      'base' => '<p>Synonyms, stopwords, and stemming options for an analysis scheme. Includes tokenization dictionary for Japanese.</p>',
      'refs' => [
        'AnalysisScheme$AnalysisOptions' => NULL,
      ],
    ],
    'AnalysisScheme' => [
      'base' => '<p>Configuration information for an analysis scheme. Each analysis scheme has a unique name and specifies the language of the text to be processed. The following options can be configured for an analysis scheme: <code>Synonyms</code>, <code>Stopwords</code>, <code>StemmingDictionary</code>, <code>JapaneseTokenizationDictionary</code> and <code>AlgorithmicStemming</code>.</p>',
      'refs' => [
        'AnalysisSchemeStatus$Options' => NULL,
        'DefineAnalysisSchemeRequest$AnalysisScheme' => NULL,
      ],
    ],
    'AnalysisSchemeLanguage' => [
      'base' => '<p>An <a href="http://tools.ietf.org/html/rfc4646" target="_blank">IETF RFC 4646</a> language code or <code>mul</code> for multiple languages.</p>',
      'refs' => [
        'AnalysisScheme$AnalysisSchemeLanguage' => NULL,
      ],
    ],
    'AnalysisSchemeStatus' => [
      'base' => '<p>The status and configuration of an <code>AnalysisScheme</code>.</p>',
      'refs' => [
        'AnalysisSchemeStatusList$member' => NULL,
        'DefineAnalysisSchemeResponse$AnalysisScheme' => NULL,
        'DeleteAnalysisSchemeResponse$AnalysisScheme' => '<p>The status of the analysis scheme being deleted.</p>',
      ],
    ],
    'AnalysisSchemeStatusList' => [
      'base' => '<p>A list of the analysis schemes configured for a domain.</p>',
      'refs' => [
        'DescribeAnalysisSchemesResponse$AnalysisSchemes' => '<p>The analysis scheme descriptions.</p>',
      ],
    ],
    'AvailabilityOptionsStatus' => [
      'base' => '<p>The status and configuration of the domain\'s availability options.</p>',
      'refs' => [
        'DescribeAvailabilityOptionsResponse$AvailabilityOptions' => '<p>The availability options configured for the domain. Indicates whether Multi-AZ is enabled for the domain. </p>',
        'UpdateAvailabilityOptionsResponse$AvailabilityOptions' => '<p>The newly-configured availability options. Indicates whether Multi-AZ is enabled for the domain. </p>',
      ],
    ],
    'BaseException' => [
      'base' => '<p>An error occurred while processing the request.</p>',
      'refs' => [],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'DateArrayOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'DateArrayOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'DateArrayOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'DateOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'DateOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'DateOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'DateOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'DescribeAnalysisSchemesRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DescribeAvailabilityOptionsRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DescribeExpressionsRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DescribeIndexFieldsRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DescribeServiceAccessPoliciesRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DescribeSuggestersRequest$Deployed' => '<p>Whether to display the deployed configuration (<code>true</code>] or include any pending changes (<code>false</code>]. Defaults to <code>false</code>.</p>',
        'DomainStatus$Created' => '<p>True if the search domain is created. It can take several minutes to initialize a domain when <a>CreateDomain</a> is called. Newly created search domains are returned from <a>DescribeDomains</a> with a false value for Created until domain creation is complete.</p>',
        'DomainStatus$Deleted' => '<p>True if the search domain has been deleted. The system must clean up resources dedicated to the search domain when <a>DeleteDomain</a> is called. Newly deleted search domains are returned from <a>DescribeDomains</a> with a true value for IsDeleted for several minutes until resource cleanup is complete.</p>',
        'DomainStatus$RequiresIndexDocuments' => '<p>True if <a>IndexDocuments</a> needs to be called to activate the current domain configuration.</p>',
        'DomainStatus$Processing' => '<p>True if processing is being done to activate the current domain configuration.</p>',
        'DoubleArrayOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'DoubleArrayOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'DoubleArrayOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'DoubleOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'DoubleOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'DoubleOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'DoubleOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'IntArrayOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'IntArrayOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'IntArrayOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'IntOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'IntOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'IntOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'IntOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'LatLonOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'LatLonOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'LatLonOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'LatLonOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'LiteralArrayOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'LiteralArrayOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'LiteralArrayOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'LiteralOptions$FacetEnabled' => '<p>Whether facet information can be returned for the field.</p>',
        'LiteralOptions$SearchEnabled' => '<p>Whether the contents of the field are searchable.</p>',
        'LiteralOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'LiteralOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'OptionStatus$PendingDeletion' => '<p>Indicates that the option will be deleted once processing is complete.</p>',
        'TextArrayOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'TextArrayOptions$HighlightEnabled' => '<p>Whether highlights can be returned for the field.</p>',
        'TextOptions$ReturnEnabled' => '<p>Whether the contents of the field can be returned in the search results.</p>',
        'TextOptions$SortEnabled' => '<p>Whether the field can be used to sort the search results.</p>',
        'TextOptions$HighlightEnabled' => '<p>Whether highlights can be returned for the field.</p>',
        'UpdateAvailabilityOptionsRequest$MultiAZ' => '<p>You expand an existing search domain to a second Availability Zone by setting the Multi-AZ option to true. Similarly, you can turn off the Multi-AZ option to downgrade the domain to a single Availability Zone by setting the Multi-AZ option to <code>false</code>. </p>',
      ],
    ],
    'BuildSuggestersRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>BuildSuggester</a></code> operation. Specifies the name of the domain you want to update.</p>',
      'refs' => [],
    ],
    'BuildSuggestersResponse' => [
      'base' => '<p>The result of a <code>BuildSuggester</code> request. Contains a list of the fields used for suggestions.</p>',
      'refs' => [],
    ],
    'CreateDomainRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>CreateDomain</a></code> operation. Specifies a name for the new search domain.</p>',
      'refs' => [],
    ],
    'CreateDomainResponse' => [
      'base' => '<p>The result of a <code>CreateDomainRequest</code>. Contains the status of a newly created domain.</p>',
      'refs' => [],
    ],
    'DateArrayOptions' => [
      'base' => '<p>Options for a field that contains an array of dates. Present if <code>IndexFieldType</code> specifies the field is of type <code>date-array</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$DateArrayOptions' => NULL,
      ],
    ],
    'DateOptions' => [
      'base' => '<p>Options for a date field. Dates and times are specified in UTC (Coordinated Universal Time] according to IETF RFC3339: yyyy-mm-ddT00:00:00Z. Present if <code>IndexFieldType</code> specifies the field is of type <code>date</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$DateOptions' => NULL,
      ],
    ],
    'DefineAnalysisSchemeRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DefineAnalysisScheme</a></code> operation. Specifies the name of the domain you want to update and the analysis scheme configuration.</p>',
      'refs' => [],
    ],
    'DefineAnalysisSchemeResponse' => [
      'base' => '<p>The result of a <code><a>DefineAnalysisScheme</a></code> request. Contains the status of the newly-configured analysis scheme.</p>',
      'refs' => [],
    ],
    'DefineExpressionRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DefineExpression</a></code> operation. Specifies the name of the domain you want to update and the expression you want to configure.</p>',
      'refs' => [],
    ],
    'DefineExpressionResponse' => [
      'base' => '<p>The result of a <code>DefineExpression</code> request. Contains the status of the newly-configured expression.</p>',
      'refs' => [],
    ],
    'DefineIndexFieldRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DefineIndexField</a></code> operation. Specifies the name of the domain you want to update and the index field configuration.</p>',
      'refs' => [],
    ],
    'DefineIndexFieldResponse' => [
      'base' => '<p>The result of a <code><a>DefineIndexField</a></code> request. Contains the status of the newly-configured index field.</p>',
      'refs' => [],
    ],
    'DefineSuggesterRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DefineSuggester</a></code> operation. Specifies the name of the domain you want to update and the suggester configuration.</p>',
      'refs' => [],
    ],
    'DefineSuggesterResponse' => [
      'base' => '<p>The result of a <code>DefineSuggester</code> request. Contains the status of the newly-configured suggester.</p>',
      'refs' => [],
    ],
    'DeleteAnalysisSchemeRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DeleteAnalysisScheme</a></code> operation. Specifies the name of the domain you want to update and the analysis scheme you want to delete. </p>',
      'refs' => [],
    ],
    'DeleteAnalysisSchemeResponse' => [
      'base' => '<p>The result of a <code>DeleteAnalysisScheme</code> request. Contains the status of the deleted analysis scheme.</p>',
      'refs' => [],
    ],
    'DeleteDomainRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DeleteDomain</a></code> operation. Specifies the name of the domain you want to delete.</p>',
      'refs' => [],
    ],
    'DeleteDomainResponse' => [
      'base' => '<p>The result of a <code>DeleteDomain</code> request. Contains the status of a newly deleted domain, or no status if the domain has already been completely deleted.</p>',
      'refs' => [],
    ],
    'DeleteExpressionRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DeleteExpression</a></code> operation. Specifies the name of the domain you want to update and the name of the expression you want to delete.</p>',
      'refs' => [],
    ],
    'DeleteExpressionResponse' => [
      'base' => '<p>The result of a <code><a>DeleteExpression</a></code> request. Specifies the expression being deleted.</p>',
      'refs' => [],
    ],
    'DeleteIndexFieldRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DeleteIndexField</a></code> operation. Specifies the name of the domain you want to update and the name of the index field you want to delete.</p>',
      'refs' => [],
    ],
    'DeleteIndexFieldResponse' => [
      'base' => '<p>The result of a <code><a>DeleteIndexField</a></code> request.</p>',
      'refs' => [],
    ],
    'DeleteSuggesterRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DeleteSuggester</a></code> operation. Specifies the name of the domain you want to update and name of the suggester you want to delete.</p>',
      'refs' => [],
    ],
    'DeleteSuggesterResponse' => [
      'base' => '<p>The result of a <code>DeleteSuggester</code> request. Contains the status of the deleted suggester.</p>',
      'refs' => [],
    ],
    'DescribeAnalysisSchemesRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeAnalysisSchemes</a></code> operation. Specifies the name of the domain you want to describe. To limit the response to particular analysis schemes, specify the names of the analysis schemes you want to describe. To show the active configuration and exclude any pending changes, set the <code>Deployed</code> option to <code>true</code>. </p>',
      'refs' => [],
    ],
    'DescribeAnalysisSchemesResponse' => [
      'base' => '<p>The result of a <code>DescribeAnalysisSchemes</code> request. Contains the analysis schemes configured for the domain specified in the request.</p>',
      'refs' => [],
    ],
    'DescribeAvailabilityOptionsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeAvailabilityOptions</a></code> operation. Specifies the name of the domain you want to describe. To show the active configuration and exclude any pending changes, set the Deployed option to <code>true</code>.</p>',
      'refs' => [],
    ],
    'DescribeAvailabilityOptionsResponse' => [
      'base' => '<p>The result of a <code>DescribeAvailabilityOptions</code> request. Indicates whether or not the Multi-AZ option is enabled for the domain specified in the request. </p>',
      'refs' => [],
    ],
    'DescribeDomainsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeDomains</a></code> operation. By default shows the status of all domains. To restrict the response to particular domains, specify the names of the domains you want to describe.</p>',
      'refs' => [],
    ],
    'DescribeDomainsResponse' => [
      'base' => '<p>The result of a <code>DescribeDomains</code> request. Contains the status of the domains specified in the request or all domains owned by the account.</p>',
      'refs' => [],
    ],
    'DescribeExpressionsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeDomains</a></code> operation. Specifies the name of the domain you want to describe. To restrict the response to particular expressions, specify the names of the expressions you want to describe. To show the active configuration and exclude any pending changes, set the <code>Deployed</code> option to <code>true</code>.</p>',
      'refs' => [],
    ],
    'DescribeExpressionsResponse' => [
      'base' => '<p>The result of a <code>DescribeExpressions</code> request. Contains the expressions configured for the domain specified in the request.</p>',
      'refs' => [],
    ],
    'DescribeIndexFieldsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeIndexFields</a></code> operation. Specifies the name of the domain you want to describe. To restrict the response to particular index fields, specify the names of the index fields you want to describe. To show the active configuration and exclude any pending changes, set the <code>Deployed</code> option to <code>true</code>.</p>',
      'refs' => [],
    ],
    'DescribeIndexFieldsResponse' => [
      'base' => '<p>The result of a <code>DescribeIndexFields</code> request. Contains the index fields configured for the domain specified in the request.</p>',
      'refs' => [],
    ],
    'DescribeScalingParametersRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeScalingParameters</a></code> operation. Specifies the name of the domain you want to describe. </p>',
      'refs' => [],
    ],
    'DescribeScalingParametersResponse' => [
      'base' => '<p>The result of a <code>DescribeScalingParameters</code> request. Contains the scaling parameters configured for the domain specified in the request.</p>',
      'refs' => [],
    ],
    'DescribeServiceAccessPoliciesRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeServiceAccessPolicies</a></code> operation. Specifies the name of the domain you want to describe. To show the active configuration and exclude any pending changes, set the <code>Deployed</code> option to <code>true</code>.</p>',
      'refs' => [],
    ],
    'DescribeServiceAccessPoliciesResponse' => [
      'base' => '<p>The result of a <code>DescribeServiceAccessPolicies</code> request.</p>',
      'refs' => [],
    ],
    'DescribeSuggestersRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>DescribeSuggester</a></code> operation. Specifies the name of the domain you want to describe. To restrict the response to particular suggesters, specify the names of the suggesters you want to describe. To show the active configuration and exclude any pending changes, set the <code>Deployed</code> option to <code>true</code>.</p>',
      'refs' => [],
    ],
    'DescribeSuggestersResponse' => [
      'base' => '<p>The result of a <code>DescribeSuggesters</code> request.</p>',
      'refs' => [],
    ],
    'DisabledOperationException' => [
      'base' => '<p>The request was rejected because it attempted an operation which is not enabled.</p>',
      'refs' => [],
    ],
    'DocumentSuggesterOptions' => [
      'base' => '<p>Options for a search suggester.</p>',
      'refs' => [
        'Suggester$DocumentSuggesterOptions' => NULL,
      ],
    ],
    'DomainId' => [
      'base' => '<p>An internally generated unique identifier for a domain.</p>',
      'refs' => [
        'DomainStatus$DomainId' => NULL,
      ],
    ],
    'DomainName' => [
      'base' => '<p>A string that represents the name of a domain. Domain names are unique across the domains owned by an account within an AWS region. Domain names start with a letter or number and can contain the following characters: a-z (lowercase], 0-9, and - (hyphen].</p>',
      'refs' => [
        'BuildSuggestersRequest$DomainName' => NULL,
        'CreateDomainRequest$DomainName' => '<p>A name for the domain you are creating. Allowed characters are a-z (lower-case letters], 0-9, and hyphen (-]. Domain names must start with a letter or number and be at least 3 and no more than 28 characters long.</p>',
        'DefineAnalysisSchemeRequest$DomainName' => NULL,
        'DefineExpressionRequest$DomainName' => NULL,
        'DefineIndexFieldRequest$DomainName' => NULL,
        'DefineSuggesterRequest$DomainName' => NULL,
        'DeleteAnalysisSchemeRequest$DomainName' => NULL,
        'DeleteDomainRequest$DomainName' => '<p>The name of the domain you want to permanently delete.</p>',
        'DeleteExpressionRequest$DomainName' => NULL,
        'DeleteIndexFieldRequest$DomainName' => NULL,
        'DeleteSuggesterRequest$DomainName' => NULL,
        'DescribeAnalysisSchemesRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DescribeAvailabilityOptionsRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DescribeExpressionsRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DescribeIndexFieldsRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DescribeScalingParametersRequest$DomainName' => NULL,
        'DescribeServiceAccessPoliciesRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DescribeSuggestersRequest$DomainName' => '<p>The name of the domain you want to describe.</p>',
        'DomainNameList$member' => NULL,
        'DomainNameMap$key' => NULL,
        'DomainStatus$DomainName' => NULL,
        'IndexDocumentsRequest$DomainName' => NULL,
        'UpdateAvailabilityOptionsRequest$DomainName' => NULL,
        'UpdateScalingParametersRequest$DomainName' => NULL,
        'UpdateServiceAccessPoliciesRequest$DomainName' => NULL,
      ],
    ],
    'DomainNameList' => [
      'base' => '<p>A list of domain names.</p>',
      'refs' => [
        'DescribeDomainsRequest$DomainNames' => '<p>The names of the domains you want to include in the response.</p>',
      ],
    ],
    'DomainNameMap' => [
      'base' => '<p>A collection of domain names.</p>',
      'refs' => [
        'ListDomainNamesResponse$DomainNames' => '<p>The names of the search domains owned by an account.</p>',
      ],
    ],
    'DomainStatus' => [
      'base' => '<p>The current status of the search domain.</p>',
      'refs' => [
        'CreateDomainResponse$DomainStatus' => NULL,
        'DeleteDomainResponse$DomainStatus' => NULL,
        'DomainStatusList$member' => NULL,
      ],
    ],
    'DomainStatusList' => [
      'base' => '<p>A list that contains the status of each requested domain.</p>',
      'refs' => [
        'DescribeDomainsResponse$DomainStatusList' => NULL,
      ],
    ],
    'Double' => [
      'base' => NULL,
      'refs' => [
        'DoubleArrayOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'DoubleOptions$DefaultValue' => '<p>A value to use for the field if the field isn\'t specified for a document. This can be important if you are using the field in an expression and that field is not present in every document.</p>',
      ],
    ],
    'DoubleArrayOptions' => [
      'base' => '<p>Options for a field that contains an array of double-precision 64-bit floating point values. Present if <code>IndexFieldType</code> specifies the field is of type <code>double-array</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$DoubleArrayOptions' => NULL,
      ],
    ],
    'DoubleOptions' => [
      'base' => '<p>Options for a double-precision 64-bit floating point field. Present if <code>IndexFieldType</code> specifies the field is of type <code>double</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$DoubleOptions' => NULL,
      ],
    ],
    'DynamicFieldName' => [
      'base' => '<p>A string that represents the name of an index field. CloudSearch supports regular index fields as well as dynamic fields. A dynamic field\'s name defines a pattern that begins or ends with a wildcard. Any document fields that don\'t map to a regular index field but do match a dynamic field\'s pattern are configured with the dynamic field\'s indexing options. </p> <p>Field names begin with a letter and can contain the following characters: a-z (lowercase], 0-9, and _ (underscore]. Dynamic field names must begin or end with a wildcard (*]. The wildcard can also be the only character in a dynamic field name. Multiple wildcards, and wildcards embedded within a string are not supported. </p> <p>The name <code>score</code> is reserved and cannot be used as a field name. To reference a document\'s ID, you can use the name <code>_id</code>. </p>',
      'refs' => [
        'DeleteIndexFieldRequest$IndexFieldName' => '<p>The name of the index field your want to remove from the domain\'s indexing options.</p>',
        'DynamicFieldNameList$member' => NULL,
        'IndexField$IndexFieldName' => '<p>The name of a field in the search index. Field names must begin with a letter and can contain the following characters: a-z (lowercase], 0-9, and _ (underscore]. Uppercase letters and hyphens are not allowed. The name "score" is reserved and cannot be specified as field or expression name.</p>',
      ],
    ],
    'DynamicFieldNameList' => [
      'base' => NULL,
      'refs' => [
        'DescribeIndexFieldsRequest$FieldNames' => '<p>A list of the index fields you want to describe. If not specified, information is returned for all configured index fields.</p>',
      ],
    ],
    'ErrorCode' => [
      'base' => '<p>A machine-parsable string error or warning code.</p>',
      'refs' => [
        'BaseException$Code' => NULL,
      ],
    ],
    'ErrorMessage' => [
      'base' => '<p>A human-readable string error or warning message.</p>',
      'refs' => [
        'BaseException$Message' => NULL,
      ],
    ],
    'Expression' => [
      'base' => '<p>A named expression that can be evaluated at search time. Can be used to sort the search results, define other expressions, or return computed information in the search results. </p>',
      'refs' => [
        'DefineExpressionRequest$Expression' => NULL,
        'ExpressionStatus$Options' => '<p>The expression that is evaluated for sorting while processing a search request.</p>',
      ],
    ],
    'ExpressionStatus' => [
      'base' => '<p>The value of an <code>Expression</code> and its current status.</p>',
      'refs' => [
        'DefineExpressionResponse$Expression' => NULL,
        'DeleteExpressionResponse$Expression' => '<p>The status of the expression being deleted.</p>',
        'ExpressionStatusList$member' => NULL,
      ],
    ],
    'ExpressionStatusList' => [
      'base' => '<p>Contains the status of multiple expressions.</p>',
      'refs' => [
        'DescribeExpressionsResponse$Expressions' => '<p>The expressions configured for the domain.</p>',
      ],
    ],
    'ExpressionValue' => [
      'base' => '<p>The expression to evaluate for sorting while processing a search request. The <code>Expression</code> syntax is based on JavaScript expressions. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-expressions.html" target="_blank">Configuring Expressions</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
      'refs' => [
        'Expression$ExpressionValue' => NULL,
      ],
    ],
    'FieldName' => [
      'base' => '<p>A string that represents the name of an index field. Field names begin with a letter and can contain the following characters: a-z (lowercase], 0-9, and _ (underscore]. The name "score" is reserved and cannot be used as a field name. To reference a document\'s ID, you can use the name <code>_id</code>.</p>',
      'refs' => [
        'DateOptions$SourceField' => NULL,
        'DocumentSuggesterOptions$SourceField' => '<p>The name of the index field you want to use for suggestions. </p>',
        'DoubleOptions$SourceField' => '<p>The name of the source field to map to the field. </p>',
        'FieldNameList$member' => NULL,
        'IntOptions$SourceField' => '<p>The name of the source field to map to the field. </p>',
        'LatLonOptions$SourceField' => NULL,
        'LiteralOptions$SourceField' => NULL,
        'TextOptions$SourceField' => NULL,
      ],
    ],
    'FieldNameCommaList' => [
      'base' => NULL,
      'refs' => [
        'DateArrayOptions$SourceFields' => '<p>A list of source fields to map to the field. </p>',
        'DoubleArrayOptions$SourceFields' => '<p>A list of source fields to map to the field. </p>',
        'IntArrayOptions$SourceFields' => '<p>A list of source fields to map to the field. </p>',
        'LiteralArrayOptions$SourceFields' => '<p>A list of source fields to map to the field. </p>',
        'TextArrayOptions$SourceFields' => '<p>A list of source fields to map to the field. </p>',
      ],
    ],
    'FieldNameList' => [
      'base' => '<p>A list of field names.</p>',
      'refs' => [
        'BuildSuggestersResponse$FieldNames' => NULL,
        'IndexDocumentsResponse$FieldNames' => '<p>The names of the fields that are currently being indexed.</p>',
      ],
    ],
    'FieldValue' => [
      'base' => '<p>The value of a field attribute.</p>',
      'refs' => [
        'DateArrayOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'DateOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'LatLonOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'LiteralArrayOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'LiteralOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'TextArrayOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'TextOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
      ],
    ],
    'IndexDocumentsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>IndexDocuments</a></code> operation. Specifies the name of the domain you want to re-index.</p>',
      'refs' => [],
    ],
    'IndexDocumentsResponse' => [
      'base' => '<p>The result of an <code>IndexDocuments</code> request. Contains the status of the indexing operation, including the fields being indexed.</p>',
      'refs' => [],
    ],
    'IndexField' => [
      'base' => '<p>Configuration information for a field in the index, including its name, type, and options. The supported options depend on the <code><a>IndexFieldType</a></code>.</p>',
      'refs' => [
        'DefineIndexFieldRequest$IndexField' => '<p>The index field and field options you want to configure. </p>',
        'IndexFieldStatus$Options' => NULL,
      ],
    ],
    'IndexFieldStatus' => [
      'base' => '<p>The value of an <code>IndexField</code> and its current status.</p>',
      'refs' => [
        'DefineIndexFieldResponse$IndexField' => NULL,
        'DeleteIndexFieldResponse$IndexField' => '<p>The status of the index field being deleted.</p>',
        'IndexFieldStatusList$member' => NULL,
      ],
    ],
    'IndexFieldStatusList' => [
      'base' => '<p>Contains the status of multiple index fields.</p>',
      'refs' => [
        'DescribeIndexFieldsResponse$IndexFields' => '<p>The index fields configured for the domain.</p>',
      ],
    ],
    'IndexFieldType' => [
      'base' => '<p>The type of field. The valid options for a field depend on the field type. For more information about the supported field types, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-index-fields.html" target="_blank">Configuring Index Fields</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
      'refs' => [
        'IndexField$IndexFieldType' => NULL,
      ],
    ],
    'InstanceCount' => [
      'base' => NULL,
      'refs' => [
        'DomainStatus$SearchInstanceCount' => '<p>The number of search instances that are available to process search requests.</p>',
      ],
    ],
    'IntArrayOptions' => [
      'base' => '<p>Options for a field that contains an array of 64-bit signed integers. Present if <code>IndexFieldType</code> specifies the field is of type <code>int-array</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$IntArrayOptions' => NULL,
      ],
    ],
    'IntOptions' => [
      'base' => '<p>Options for a 64-bit signed integer field. Present if <code>IndexFieldType</code> specifies the field is of type <code>int</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$IntOptions' => NULL,
      ],
    ],
    'InternalException' => [
      'base' => '<p>An internal error occurred while processing the request. If this problem persists, report an issue from the <a href="http://status.aws.amazon.com/" target="_blank">Service Health Dashboard</a>.</p>',
      'refs' => [],
    ],
    'InvalidTypeException' => [
      'base' => '<p>The request was rejected because it specified an invalid type definition.</p>',
      'refs' => [],
    ],
    'LatLonOptions' => [
      'base' => '<p>Options for a latlon field. A latlon field contains a location stored as a latitude and longitude value pair. Present if <code>IndexFieldType</code> specifies the field is of type <code>latlon</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$LatLonOptions' => NULL,
      ],
    ],
    'LimitExceededException' => [
      'base' => '<p>The request was rejected because a resource limit has already been met.</p>',
      'refs' => [],
    ],
    'Limits' => [
      'base' => NULL,
      'refs' => [
        'DomainStatus$Limits' => NULL,
      ],
    ],
    'ListDomainNamesResponse' => [
      'base' => '<p>The result of a <code>ListDomainNames</code> request. Contains a list of the domains owned by an account.</p>',
      'refs' => [],
    ],
    'LiteralArrayOptions' => [
      'base' => '<p>Options for a field that contains an array of literal strings. Present if <code>IndexFieldType</code> specifies the field is of type <code>literal-array</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$LiteralArrayOptions' => NULL,
      ],
    ],
    'LiteralOptions' => [
      'base' => '<p>Options for literal field. Present if <code>IndexFieldType</code> specifies the field is of type <code>literal</code>. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$LiteralOptions' => NULL,
      ],
    ],
    'Long' => [
      'base' => NULL,
      'refs' => [
        'IntArrayOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document.',
        'IntOptions$DefaultValue' => 'A value to use for the field if the field isn\'t specified for a document. This can be important if you are using the field in an expression and that field is not present in every document.',
      ],
    ],
    'MaximumPartitionCount' => [
      'base' => NULL,
      'refs' => [
        'Limits$MaximumPartitionCount' => NULL,
      ],
    ],
    'MaximumReplicationCount' => [
      'base' => NULL,
      'refs' => [
        'Limits$MaximumReplicationCount' => NULL,
      ],
    ],
    'MultiAZ' => [
      'base' => NULL,
      'refs' => [
        'AvailabilityOptionsStatus$Options' => '<p>The availability options configured for the domain.</p>',
      ],
    ],
    'OptionState' => [
      'base' => '<p>The state of processing a change to an option. One of:</p> <ul> <li>RequiresIndexDocuments: The option\'s latest value will not be deployed until <a>IndexDocuments</a> has been called and indexing is complete.</li> <li>Processing: The option\'s latest value is in the process of being activated.</li> <li>Active: The option\'s latest value is fully deployed. </li> <li>FailedToValidate: The option value is not compatible with the domain\'s data and cannot be used to index the data. You must either modify the option value or update or remove the incompatible documents.</li> </ul>',
      'refs' => [
        'OptionStatus$State' => '<p>The state of processing a change to an option. Possible values:</p> <ul> <li> <code>RequiresIndexDocuments</code>: the option\'s latest value will not be deployed until <a>IndexDocuments</a> has been called and indexing is complete.</li> <li> <code>Processing</code>: the option\'s latest value is in the process of being activated. </li> <li> <code>Active</code>: the option\'s latest value is completely deployed.</li> <li> <code>FailedToValidate</code>: the option value is not compatible with the domain\'s data and cannot be used to index the data. You must either modify the option value or update or remove the incompatible documents.</li> </ul>',
      ],
    ],
    'OptionStatus' => [
      'base' => '<p>The status of domain configuration option.</p>',
      'refs' => [
        'AccessPoliciesStatus$Status' => NULL,
        'AnalysisSchemeStatus$Status' => NULL,
        'AvailabilityOptionsStatus$Status' => NULL,
        'ExpressionStatus$Status' => NULL,
        'IndexFieldStatus$Status' => NULL,
        'ScalingParametersStatus$Status' => NULL,
        'SuggesterStatus$Status' => NULL,
      ],
    ],
    'PartitionCount' => [
      'base' => '<p>The number of partitions used to hold the domain\'s index.</p>',
      'refs' => [
        'DomainStatus$SearchPartitionCount' => '<p>The number of partitions across which the search index is spread.</p>',
      ],
    ],
    'PartitionInstanceType' => [
      'base' => '<p>The instance type (such as <code>search.m1.small</code>] on which an index partition is hosted.</p>',
      'refs' => [
        'ScalingParameters$DesiredInstanceType' => '<p>The instance type that you want to preconfigure for your domain. For example, <code>search.m1.small</code>.</p>',
      ],
    ],
    'PolicyDocument' => [
      'base' => '<p>Access rules for a domain\'s document or search service endpoints. For more information, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-access.html" target="_blank">Configuring Access for a Search Domain</a> in the <i>Amazon CloudSearch Developer Guide</i>. The maximum size of a policy document is 100 KB.</p>',
      'refs' => [
        'AccessPoliciesStatus$Options' => NULL,
        'UpdateServiceAccessPoliciesRequest$AccessPolicies' => '<p>The access rules you want to configure. These rules replace any existing rules. </p>',
      ],
    ],
    'ResourceNotFoundException' => [
      'base' => '<p>The request was rejected because it attempted to reference a resource that does not exist.</p>',
      'refs' => [],
    ],
    'ScalingParameters' => [
      'base' => '<p>The desired instance type and desired number of replicas of each index partition.</p>',
      'refs' => [
        'ScalingParametersStatus$Options' => NULL,
        'UpdateScalingParametersRequest$ScalingParameters' => NULL,
      ],
    ],
    'ScalingParametersStatus' => [
      'base' => '<p>The status and configuration of a search domain\'s scaling parameters. </p>',
      'refs' => [
        'DescribeScalingParametersResponse$ScalingParameters' => NULL,
        'UpdateScalingParametersResponse$ScalingParameters' => NULL,
      ],
    ],
    'SearchInstanceType' => [
      'base' => '<p>The instance type (such as <code>search.m1.small</code>] that is being used to process search requests.</p>',
      'refs' => [
        'DomainStatus$SearchInstanceType' => '<p>The instance type that is being used to process search requests.</p>',
      ],
    ],
    'ServiceEndpoint' => [
      'base' => '<p>The endpoint to which service requests can be submitted.</p>',
      'refs' => [
        'DomainStatus$DocService' => '<p>The service endpoint for updating documents in a search domain.</p>',
        'DomainStatus$SearchService' => '<p>The service endpoint for requesting search results from a search domain.</p>',
      ],
    ],
    'ServiceUrl' => [
      'base' => '<p>The endpoint to which service requests can be submitted. For example, <code>search-imdb-movies-oopcnjfn6ugofer3zx5iadxxca.eu-west-1.cloudsearch.amazonaws.com</code> or <code>doc-imdb-movies-oopcnjfn6ugofer3zx5iadxxca.eu-west-1.cloudsearch.amazonaws.com</code>.</p>',
      'refs' => [
        'ServiceEndpoint$Endpoint' => NULL,
      ],
    ],
    'StandardName' => [
      'base' => '<p>Names must begin with a letter and can contain the following characters: a-z (lowercase], 0-9, and _ (underscore].</p>',
      'refs' => [
        'AnalysisScheme$AnalysisSchemeName' => NULL,
        'DeleteAnalysisSchemeRequest$AnalysisSchemeName' => '<p>The name of the analysis scheme you want to delete.</p>',
        'DeleteExpressionRequest$ExpressionName' => '<p>The name of the <code><a>Expression</a></code> to delete.</p>',
        'DeleteSuggesterRequest$SuggesterName' => '<p>Specifies the name of the suggester you want to delete.</p>',
        'Expression$ExpressionName' => NULL,
        'StandardNameList$member' => NULL,
        'Suggester$SuggesterName' => NULL,
      ],
    ],
    'StandardNameList' => [
      'base' => NULL,
      'refs' => [
        'DescribeAnalysisSchemesRequest$AnalysisSchemeNames' => '<p>The analysis schemes you want to describe.</p>',
        'DescribeExpressionsRequest$ExpressionNames' => '<p>Limits the <code><a>DescribeExpressions</a></code> response to the specified expressions. If not specified, all expressions are shown.</p>',
        'DescribeSuggestersRequest$SuggesterNames' => '<p>The suggesters you want to describe.</p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'AnalysisOptions$Synonyms' => '<p>A JSON object that defines synonym groups and aliases. A synonym group is an array of arrays, where each sub-array is a group of terms where each term in the group is considered a synonym of every other term in the group. The aliases value is an object that contains a collection of string:value pairs where the string specifies a term and the array of values specifies each of the aliases for that term. An alias is considered a synonym of the specified term, but the term is not considered a synonym of the alias. For more information about specifying synonyms, see <a href="http://docs.aws.amazon.com/cloudsearch/latest/developerguide/configuring-analysis-schemes.html#synonyms">Synonyms</a> in the <i>Amazon CloudSearch Developer Guide</i>.</p>',
        'AnalysisOptions$Stopwords' => '<p>A JSON array of terms to ignore during indexing and searching. For example, <code>["a", "an", "the", "of"]</code>. The stopwords dictionary must explicitly list each word you want to ignore. Wildcards and regular expressions are not supported. </p>',
        'AnalysisOptions$StemmingDictionary' => '<p>A JSON object that contains a collection of string:value pairs that each map a term to its stem. For example, <code>{"term1": "stem1", "term2": "stem2", "term3": "stem3"}</code>. The stemming dictionary is applied in addition to any algorithmic stemming. This enables you to override the results of the algorithmic stemming to correct specific cases of overstemming or understemming. The maximum size of a stemming dictionary is 500 KB.</p>',
        'AnalysisOptions$JapaneseTokenizationDictionary' => '<p>A JSON array that contains a collection of terms, tokens, readings and part of speech for Japanese Tokenizaiton. The Japanese tokenization dictionary enables you to override the default tokenization for selected terms. This is only valid for Japanese language fields.</p>',
        'DocumentSuggesterOptions$SortExpression' => '<p>An expression that computes a score for each suggestion to control how they are sorted. The scores are rounded to the nearest integer, with a floor of 0 and a ceiling of 2^31-1. A document\'s relevance score is not computed for suggestions, so sort expressions cannot reference the <code>_score</code> value. To sort suggestions using a numeric field or existing expression, simply specify the name of the field or expression. If no expression is configured for the suggester, the suggestions are sorted with the closest matches listed first.</p>',
      ],
    ],
    'Suggester' => [
      'base' => '<p>Configuration information for a search suggester. Each suggester has a unique name and specifies the text field you want to use for suggestions. The following options can be configured for a suggester: <code>FuzzyMatching</code>, <code>SortExpression</code>. </p>',
      'refs' => [
        'DefineSuggesterRequest$Suggester' => NULL,
        'SuggesterStatus$Options' => NULL,
      ],
    ],
    'SuggesterFuzzyMatching' => [
      'base' => NULL,
      'refs' => [
        'DocumentSuggesterOptions$FuzzyMatching' => '<p>The level of fuzziness allowed when suggesting matches for a string: <code>none</code>, <code>low</code>, or <code>high</code>. With none, the specified string is treated as an exact prefix. With low, suggestions must differ from the specified string by no more than one character. With high, suggestions can differ by up to two characters. The default is none. </p>',
      ],
    ],
    'SuggesterStatus' => [
      'base' => '<p>The value of a <code>Suggester</code> and its current status.</p>',
      'refs' => [
        'DefineSuggesterResponse$Suggester' => NULL,
        'DeleteSuggesterResponse$Suggester' => '<p>The status of the suggester being deleted.</p>',
        'SuggesterStatusList$member' => NULL,
      ],
    ],
    'SuggesterStatusList' => [
      'base' => '<p>Contains the status of multiple suggesters.</p>',
      'refs' => [
        'DescribeSuggestersResponse$Suggesters' => '<p>The suggesters configured for the domain specified in the request.</p>',
      ],
    ],
    'TextArrayOptions' => [
      'base' => '<p>Options for a field that contains an array of text strings. Present if <code>IndexFieldType</code> specifies the field is of type <code>text-array</code>. A <code>text-array</code> field is always searchable. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$TextArrayOptions' => NULL,
      ],
    ],
    'TextOptions' => [
      'base' => '<p>Options for text field. Present if <code>IndexFieldType</code> specifies the field is of type <code>text</code>. A <code>text</code> field is always searchable. All options are enabled by default.</p>',
      'refs' => [
        'IndexField$TextOptions' => NULL,
      ],
    ],
    'UIntValue' => [
      'base' => NULL,
      'refs' => [
        'OptionStatus$UpdateVersion' => '<p>A unique integer that indicates when this option was last updated.</p>',
        'ScalingParameters$DesiredReplicationCount' => '<p>The number of replicas you want to preconfigure for each index partition.</p>',
        'ScalingParameters$DesiredPartitionCount' => '<p>The number of partitions you want to preconfigure for your domain. Only valid when you select <code>m2.2xlarge</code> as the desired instance type.</p>',
      ],
    ],
    'UpdateAvailabilityOptionsRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>UpdateAvailabilityOptions</a></code> operation. Specifies the name of the domain you want to update and the Multi-AZ availability option.</p>',
      'refs' => [],
    ],
    'UpdateAvailabilityOptionsResponse' => [
      'base' => '<p>The result of a <code>UpdateAvailabilityOptions</code> request. Contains the status of the domain\'s availability options. </p>',
      'refs' => [],
    ],
    'UpdateScalingParametersRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>UpdateScalingParameters</a></code> operation. Specifies the name of the domain you want to update and the scaling parameters you want to configure.</p>',
      'refs' => [],
    ],
    'UpdateScalingParametersResponse' => [
      'base' => '<p>The result of a <code>UpdateScalingParameters</code> request. Contains the status of the newly-configured scaling parameters.</p>',
      'refs' => [],
    ],
    'UpdateServiceAccessPoliciesRequest' => [
      'base' => '<p>Container for the parameters to the <code><a>UpdateServiceAccessPolicies</a></code> operation. Specifies the name of the domain you want to update and the access rules you want to configure.</p>',
      'refs' => [],
    ],
    'UpdateServiceAccessPoliciesResponse' => [
      'base' => '<p>The result of an <code>UpdateServiceAccessPolicies</code> request. Contains the new access policies.</p>',
      'refs' => [],
    ],
    'UpdateTimestamp' => [
      'base' => NULL,
      'refs' => [
        'OptionStatus$CreationDate' => '<p>A timestamp for when this option was created.</p>',
        'OptionStatus$UpdateDate' => '<p>A timestamp for when this option was last updated.</p>',
      ],
    ],
    'Word' => [
      'base' => NULL,
      'refs' => [
        'TextArrayOptions$AnalysisScheme' => '<p>The name of an analysis scheme for a <code>text-array</code> field.</p>',
        'TextOptions$AnalysisScheme' => '<p>The name of an analysis scheme for a <code>text</code> field.</p>',
      ],
    ],
  ],
];
