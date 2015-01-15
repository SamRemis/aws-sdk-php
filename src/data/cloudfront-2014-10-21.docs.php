<?php return [
  'operations' => [
    'CreateCloudFrontOriginAccessIdentity' => 'Create a new origin access identity.',
    'CreateDistribution' => 'Create a new distribution.',
    'CreateInvalidation' => 'Create a new invalidation.',
    'CreateStreamingDistribution' => 'Create a new streaming distribution.',
    'DeleteCloudFrontOriginAccessIdentity' => 'Delete an origin access identity.',
    'DeleteDistribution' => 'Delete a distribution.',
    'DeleteStreamingDistribution' => 'Delete a streaming distribution.',
    'GetCloudFrontOriginAccessIdentity' => 'Get the information about an origin access identity.',
    'GetCloudFrontOriginAccessIdentityConfig' => 'Get the configuration information about an origin access identity.',
    'GetDistribution' => 'Get the information about a distribution.',
    'GetDistributionConfig' => 'Get the configuration information about a distribution.',
    'GetInvalidation' => 'Get the information about an invalidation.',
    'GetStreamingDistribution' => 'Get the information about a streaming distribution.',
    'GetStreamingDistributionConfig' => 'Get the configuration information about a streaming distribution.',
    'ListCloudFrontOriginAccessIdentities' => 'List origin access identities.',
    'ListDistributions' => 'List distributions.',
    'ListInvalidations' => 'List invalidation batches.',
    'ListStreamingDistributions' => 'List streaming distributions.',
    'UpdateCloudFrontOriginAccessIdentity' => 'Update an origin access identity.',
    'UpdateDistribution' => 'Update a distribution.',
    'UpdateStreamingDistribution' => 'Update a streaming distribution.',
  ],
  'service' => NULL,
  'shapes' => [
    'AccessDenied' => [
      'base' => 'Access denied.',
      'refs' => [],
    ],
    'ActiveTrustedSigners' => [
      'base' => 'A complex type that lists the AWS accounts, if any, that you included in the TrustedSigners complex type for the default cache behavior or for any of the other cache behaviors for this distribution. These are accounts that you want to allow to create signed URLs for private content.',
      'refs' => [
        'Distribution$ActiveTrustedSigners' => 'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you]. The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
        'StreamingDistribution$ActiveTrustedSigners' => 'CloudFront automatically adds this element to the response only if you\'ve set up the distribution to serve private content with signed URLs. The element lists the key pair IDs that CloudFront is aware of for each trusted signer. The Signer child element lists the AWS account number of the trusted signer (or an empty Self element if the signer is you]. The Signer element also includes the IDs of any active key pairs associated with the trusted signer\'s AWS account. If no KeyPairId element appears for a Signer, that signer can\'t create working signed URLs.',
      ],
    ],
    'AliasList' => [
      'base' => NULL,
      'refs' => [
        'Aliases$Items' => 'Optional: A complex type that contains CNAME elements, if any, for this distribution. If Quantity is 0, you can omit Items.',
      ],
    ],
    'Aliases' => [
      'base' => 'A complex type that contains information about CNAMEs (alternate domain names], if any, for this distribution.',
      'refs' => [
        'DistributionConfig$Aliases' => 'A complex type that contains information about CNAMEs (alternate domain names], if any, for this distribution.',
        'DistributionSummary$Aliases' => 'A complex type that contains information about CNAMEs (alternate domain names], if any, for this distribution.',
        'StreamingDistributionConfig$Aliases' => 'A complex type that contains information about CNAMEs (alternate domain names], if any, for this streaming distribution.',
        'StreamingDistributionSummary$Aliases' => 'A complex type that contains information about CNAMEs (alternate domain names], if any, for this streaming distribution.',
      ],
    ],
    'AllowedMethods' => [
      'base' => 'A complex type that controls which HTTP methods CloudFront processes and forwards to your Amazon S3 bucket or your custom origin. There are three choices: - CloudFront forwards only GET and HEAD requests. - CloudFront forwards only GET, HEAD and OPTIONS requests. - CloudFront forwards GET, HEAD, OPTIONS, PUT, PATCH, POST, and DELETE requests. If you pick the third choice, you may need to restrict access to your Amazon S3 bucket or to your custom origin so users can\'t perform operations that you don\'t want them to. For example, you may not want users to have permission to delete objects from your origin.',
      'refs' => [
        'CacheBehavior$AllowedMethods' => NULL,
        'DefaultCacheBehavior$AllowedMethods' => NULL,
      ],
    ],
    'AwsAccountNumberList' => [
      'base' => NULL,
      'refs' => [
        'TrustedSigners$Items' => 'Optional: A complex type that contains trusted signers for this cache behavior. If Quantity is 0, you can omit Items.',
      ],
    ],
    'BatchTooLarge' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CNAMEAlreadyExists' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CacheBehavior' => [
      'base' => 'A complex type that describes how CloudFront processes requests. You can create up to 10 cache behaviors.You must create at least as many cache behaviors (including the default cache behavior] as you have origins if you want CloudFront to distribute objects from all of the origins. Each cache behavior specifies the one origin from which you want CloudFront to get objects. If you have two origins and only the default cache behavior, the default cache behavior will cause CloudFront to get objects from one of the origins, but the other origin will never be used. If you don\'t want to specify any cache behaviors, include only an empty CacheBehaviors element. Don\'t include an empty CacheBehavior element, or CloudFront returns a MalformedXML error. To delete all cache behaviors in an existing distribution, update the distribution configuration and include only an empty CacheBehaviors element. To add, change, or remove one or more cache behaviors, update the distribution configuration and specify all of the cache behaviors that you want to include in the updated distribution.',
      'refs' => [
        'CacheBehaviorList$member' => NULL,
      ],
    ],
    'CacheBehaviorList' => [
      'base' => NULL,
      'refs' => [
        'CacheBehaviors$Items' => 'Optional: A complex type that contains cache behaviors for this distribution. If Quantity is 0, you can omit Items.',
      ],
    ],
    'CacheBehaviors' => [
      'base' => 'A complex type that contains zero or more CacheBehavior elements.',
      'refs' => [
        'DistributionConfig$CacheBehaviors' => 'A complex type that contains zero or more CacheBehavior elements.',
        'DistributionSummary$CacheBehaviors' => 'A complex type that contains zero or more CacheBehavior elements.',
      ],
    ],
    'CachedMethods' => [
      'base' => 'A complex type that controls whether CloudFront caches the response to requests using the specified HTTP methods. There are two choices: - CloudFront caches responses to GET and HEAD requests. - CloudFront caches responses to GET, HEAD, and OPTIONS requests. If you pick the second choice for your S3 Origin, you may need to forward Access-Control-Request-Method, Access-Control-Request-Headers and Origin headers for the responses to be cached correctly.',
      'refs' => [
        'AllowedMethods$CachedMethods' => NULL,
      ],
    ],
    'CloudFrontOriginAccessIdentity' => [
      'base' => 'CloudFront origin access identity.',
      'refs' => [
        'CreateCloudFrontOriginAccessIdentityResult$CloudFrontOriginAccessIdentity' => 'The origin access identity\'s information.',
        'GetCloudFrontOriginAccessIdentityResult$CloudFrontOriginAccessIdentity' => 'The origin access identity\'s information.',
        'UpdateCloudFrontOriginAccessIdentityResult$CloudFrontOriginAccessIdentity' => 'The origin access identity\'s information.',
      ],
    ],
    'CloudFrontOriginAccessIdentityAlreadyExists' => [
      'base' => 'If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
      'refs' => [],
    ],
    'CloudFrontOriginAccessIdentityConfig' => [
      'base' => 'Origin access identity configuration.',
      'refs' => [
        'CloudFrontOriginAccessIdentity$CloudFrontOriginAccessIdentityConfig' => 'The current configuration information for the identity.',
        'CreateCloudFrontOriginAccessIdentityRequest$CloudFrontOriginAccessIdentityConfig' => 'The origin access identity\'s configuration information.',
        'GetCloudFrontOriginAccessIdentityConfigResult$CloudFrontOriginAccessIdentityConfig' => 'The origin access identity\'s configuration information.',
        'UpdateCloudFrontOriginAccessIdentityRequest$CloudFrontOriginAccessIdentityConfig' => 'The identity\'s configuration information.',
      ],
    ],
    'CloudFrontOriginAccessIdentityInUse' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CloudFrontOriginAccessIdentityList' => [
      'base' => 'The CloudFrontOriginAccessIdentityList type.',
      'refs' => [
        'ListCloudFrontOriginAccessIdentitiesResult$CloudFrontOriginAccessIdentityList' => 'The CloudFrontOriginAccessIdentityList type.',
      ],
    ],
    'CloudFrontOriginAccessIdentitySummary' => [
      'base' => 'Summary of the information about a CloudFront origin access identity.',
      'refs' => [
        'CloudFrontOriginAccessIdentitySummaryList$member' => NULL,
      ],
    ],
    'CloudFrontOriginAccessIdentitySummaryList' => [
      'base' => NULL,
      'refs' => [
        'CloudFrontOriginAccessIdentityList$Items' => 'A complex type that contains one CloudFrontOriginAccessIdentitySummary element for each origin access identity that was created by the current AWS account.',
      ],
    ],
    'CookieNameList' => [
      'base' => NULL,
      'refs' => [
        'CookieNames$Items' => 'Optional: A complex type that contains whitelisted cookies for this cache behavior. If Quantity is 0, you can omit Items.',
      ],
    ],
    'CookieNames' => [
      'base' => 'A complex type that specifies the whitelisted cookies, if any, that you want CloudFront to forward to your origin that is associated with this cache behavior.',
      'refs' => [
        'CookiePreference$WhitelistedNames' => 'A complex type that specifies the whitelisted cookies, if any, that you want CloudFront to forward to your origin that is associated with this cache behavior.',
      ],
    ],
    'CookiePreference' => [
      'base' => 'A complex type that specifies the cookie preferences associated with this cache behavior.',
      'refs' => [
        'ForwardedValues$Cookies' => 'A complex type that specifies how CloudFront handles cookies.',
      ],
    ],
    'CreateCloudFrontOriginAccessIdentityRequest' => [
      'base' => 'The request to create a new origin access identity.',
      'refs' => [],
    ],
    'CreateCloudFrontOriginAccessIdentityResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'CreateDistributionRequest' => [
      'base' => 'The request to create a new distribution.',
      'refs' => [],
    ],
    'CreateDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'CreateInvalidationRequest' => [
      'base' => 'The request to create an invalidation.',
      'refs' => [],
    ],
    'CreateInvalidationResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'CreateStreamingDistributionRequest' => [
      'base' => 'The request to create a new streaming distribution.',
      'refs' => [],
    ],
    'CreateStreamingDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'CustomErrorResponse' => [
      'base' => 'A complex type that describes how you\'d prefer CloudFront to respond to requests that result in either a 4xx or 5xx response. You can control whether a custom error page should be displayed, what the desired response code should be for this error page and how long should the error response be cached by CloudFront. If you don\'t want to specify any custom error responses, include only an empty CustomErrorResponses element. To delete all custom error responses in an existing distribution, update the distribution configuration and include only an empty CustomErrorResponses element. To add, change, or remove one or more custom error responses, update the distribution configuration and specify all of the custom error responses that you want to include in the updated distribution.',
      'refs' => [
        'CustomErrorResponseList$member' => NULL,
      ],
    ],
    'CustomErrorResponseList' => [
      'base' => NULL,
      'refs' => [
        'CustomErrorResponses$Items' => 'Optional: A complex type that contains custom error responses for this distribution. If Quantity is 0, you can omit Items.',
      ],
    ],
    'CustomErrorResponses' => [
      'base' => 'A complex type that contains zero or more CustomErrorResponse elements.',
      'refs' => [
        'DistributionConfig$CustomErrorResponses' => 'A complex type that contains zero or more CustomErrorResponse elements.',
        'DistributionSummary$CustomErrorResponses' => 'A complex type that contains zero or more CustomErrorResponses elements.',
      ],
    ],
    'CustomOriginConfig' => [
      'base' => 'A customer origin.',
      'refs' => [
        'Origin$CustomOriginConfig' => 'A complex type that contains information about a custom origin. If the origin is an Amazon S3 bucket, use the S3OriginConfig element instead.',
      ],
    ],
    'DefaultCacheBehavior' => [
      'base' => 'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
      'refs' => [
        'DistributionConfig$DefaultCacheBehavior' => 'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
        'DistributionSummary$DefaultCacheBehavior' => 'A complex type that describes the default cache behavior if you do not specify a CacheBehavior element or if files don\'t match any of the values of PathPattern in CacheBehavior elements.You must create exactly one default cache behavior.',
      ],
    ],
    'DeleteCloudFrontOriginAccessIdentityRequest' => [
      'base' => 'The request to delete a origin access identity.',
      'refs' => [],
    ],
    'DeleteDistributionRequest' => [
      'base' => 'The request to delete a distribution.',
      'refs' => [],
    ],
    'DeleteStreamingDistributionRequest' => [
      'base' => 'The request to delete a streaming distribution.',
      'refs' => [],
    ],
    'Distribution' => [
      'base' => 'A distribution.',
      'refs' => [
        'CreateDistributionResult$Distribution' => 'The distribution\'s information.',
        'GetDistributionResult$Distribution' => 'The distribution\'s information.',
        'UpdateDistributionResult$Distribution' => 'The distribution\'s information.',
      ],
    ],
    'DistributionAlreadyExists' => [
      'base' => 'The caller reference you attempted to create the distribution with is associated with another distribution.',
      'refs' => [],
    ],
    'DistributionConfig' => [
      'base' => 'A distribution Configuration.',
      'refs' => [
        'CreateDistributionRequest$DistributionConfig' => 'The distribution\'s configuration information.',
        'Distribution$DistributionConfig' => 'The current configuration information for the distribution.',
        'GetDistributionConfigResult$DistributionConfig' => 'The distribution\'s configuration information.',
        'UpdateDistributionRequest$DistributionConfig' => 'The distribution\'s configuration information.',
      ],
    ],
    'DistributionList' => [
      'base' => 'A distribution list.',
      'refs' => [
        'ListDistributionsResult$DistributionList' => 'The DistributionList type.',
      ],
    ],
    'DistributionNotDisabled' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DistributionSummary' => [
      'base' => 'A summary of the information for an Amazon CloudFront distribution.',
      'refs' => [
        'DistributionSummaryList$member' => NULL,
      ],
    ],
    'DistributionSummaryList' => [
      'base' => NULL,
      'refs' => [
        'DistributionList$Items' => 'A complex type that contains one DistributionSummary element for each distribution that was created by the current AWS account.',
      ],
    ],
    'ForwardedValues' => [
      'base' => 'A complex type that specifies how CloudFront handles query strings, cookies and headers.',
      'refs' => [
        'CacheBehavior$ForwardedValues' => 'A complex type that specifies how CloudFront handles query strings, cookies and headers.',
        'DefaultCacheBehavior$ForwardedValues' => 'A complex type that specifies how CloudFront handles query strings, cookies and headers.',
      ],
    ],
    'GeoRestriction' => [
      'base' => 'A complex type that controls the countries in which your content is distributed. For more information about geo restriction, go to Customizing Error Responses in the Amazon CloudFront Developer Guide. CloudFront determines the location of your users using MaxMind GeoIP databases. For information about the accuracy of these databases, see How accurate are your GeoIP databases? on the MaxMind website.',
      'refs' => [
        'Restrictions$GeoRestriction' => NULL,
      ],
    ],
    'GeoRestrictionType' => [
      'base' => NULL,
      'refs' => [
        'GeoRestriction$RestrictionType' => 'The method that you want to use to restrict distribution of your content by country: - none: No geo restriction is enabled, meaning access to content is not restricted by client geo location. - blacklist: The Location elements specify the countries in which you do not want CloudFront to distribute your content. - whitelist: The Location elements specify the countries in which you want CloudFront to distribute your content.',
      ],
    ],
    'GetCloudFrontOriginAccessIdentityConfigRequest' => [
      'base' => 'The request to get an origin access identity\'s configuration.',
      'refs' => [],
    ],
    'GetCloudFrontOriginAccessIdentityConfigResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetCloudFrontOriginAccessIdentityRequest' => [
      'base' => 'The request to get an origin access identity\'s information.',
      'refs' => [],
    ],
    'GetCloudFrontOriginAccessIdentityResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetDistributionConfigRequest' => [
      'base' => 'The request to get a distribution configuration.',
      'refs' => [],
    ],
    'GetDistributionConfigResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetDistributionRequest' => [
      'base' => 'The request to get a distribution\'s information.',
      'refs' => [],
    ],
    'GetDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetInvalidationRequest' => [
      'base' => 'The request to get an invalidation\'s information.',
      'refs' => [],
    ],
    'GetInvalidationResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetStreamingDistributionConfigRequest' => [
      'base' => 'To request to get a streaming distribution configuration.',
      'refs' => [],
    ],
    'GetStreamingDistributionConfigResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'GetStreamingDistributionRequest' => [
      'base' => 'The request to get a streaming distribution\'s information.',
      'refs' => [],
    ],
    'GetStreamingDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'HeaderList' => [
      'base' => NULL,
      'refs' => [
        'Headers$Items' => 'Optional: A complex type that contains a Name element for each header that you want CloudFront to forward to the origin and to vary on for this cache behavior. If Quantity is 0, omit Items.',
      ],
    ],
    'Headers' => [
      'base' => 'A complex type that specifies the headers that you want CloudFront to forward to the origin for this cache behavior. For the headers that you specify, CloudFront also caches separate versions of a given object based on the header values in viewer requests; this is known as varying on headers. For example, suppose viewer requests for logo.jpg contain a custom Product header that has a value of either Acme or Apex, and you configure CloudFront to vary on the Product header. CloudFront forwards the Product header to the origin and caches the response from the origin once for each header value.',
      'refs' => [
        'ForwardedValues$Headers' => 'A complex type that specifies the Headers, if any, that you want CloudFront to vary upon for this cache behavior.',
      ],
    ],
    'IllegalUpdate' => [
      'base' => 'Origin and CallerReference cannot be updated.',
      'refs' => [],
    ],
    'InconsistentQuantities' => [
      'base' => 'The value of Quantity and the size of Items do not match.',
      'refs' => [],
    ],
    'InvalidArgument' => [
      'base' => 'The argument is invalid.',
      'refs' => [],
    ],
    'InvalidDefaultRootObject' => [
      'base' => 'The default root object file name is too big or contains an invalid character.',
      'refs' => [],
    ],
    'InvalidErrorCode' => [
      'base' => NULL,
      'refs' => [],
    ],
    'InvalidForwardCookies' => [
      'base' => 'Your request contains forward cookies option which doesn\'t match with the expectation for the whitelisted list of cookie names. Either list of cookie names has been specified when not allowed or list of cookie names is missing when expected.',
      'refs' => [],
    ],
    'InvalidGeoRestrictionParameter' => [
      'base' => NULL,
      'refs' => [],
    ],
    'InvalidHeadersForS3Origin' => [
      'base' => NULL,
      'refs' => [],
    ],
    'InvalidIfMatchVersion' => [
      'base' => 'The If-Match version is missing or not valid for the distribution.',
      'refs' => [],
    ],
    'InvalidLocationCode' => [
      'base' => NULL,
      'refs' => [],
    ],
    'InvalidOrigin' => [
      'base' => 'The Amazon S3 origin server specified does not refer to a valid Amazon S3 bucket.',
      'refs' => [],
    ],
    'InvalidOriginAccessIdentity' => [
      'base' => 'The origin access identity is not valid or doesn\'t exist.',
      'refs' => [],
    ],
    'InvalidProtocolSettings' => [
      'base' => 'You cannot specify SSLv3 as the minimum protocol version if you only want to support only clients that Support Server Name Indication (SNI].',
      'refs' => [],
    ],
    'InvalidRelativePath' => [
      'base' => 'The relative path is too big, is not URL-encoded, or does not begin with a slash (/].',
      'refs' => [],
    ],
    'InvalidRequiredProtocol' => [
      'base' => 'This operation requires the HTTPS protocol. Ensure that you specify the HTTPS protocol in your request, or omit the RequiredProtocols element from your distribution configuration.',
      'refs' => [],
    ],
    'InvalidResponseCode' => [
      'base' => NULL,
      'refs' => [],
    ],
    'InvalidViewerCertificate' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Invalidation' => [
      'base' => 'An invalidation.',
      'refs' => [
        'CreateInvalidationResult$Invalidation' => 'The invalidation\'s information.',
        'GetInvalidationResult$Invalidation' => 'The invalidation\'s information.',
      ],
    ],
    'InvalidationBatch' => [
      'base' => 'An invalidation batch.',
      'refs' => [
        'CreateInvalidationRequest$InvalidationBatch' => 'The batch information for the invalidation.',
        'Invalidation$InvalidationBatch' => 'The current invalidation information for the batch request.',
      ],
    ],
    'InvalidationList' => [
      'base' => 'An invalidation list.',
      'refs' => [
        'ListInvalidationsResult$InvalidationList' => 'Information about invalidation batches.',
      ],
    ],
    'InvalidationSummary' => [
      'base' => 'Summary of an invalidation request.',
      'refs' => [
        'InvalidationSummaryList$member' => NULL,
      ],
    ],
    'InvalidationSummaryList' => [
      'base' => NULL,
      'refs' => [
        'InvalidationList$Items' => 'A complex type that contains one InvalidationSummary element for each invalidation batch that was created by the current AWS account.',
      ],
    ],
    'ItemSelection' => [
      'base' => NULL,
      'refs' => [
        'CookiePreference$Forward' => 'Use this element to specify whether you want CloudFront to forward cookies to the origin that is associated with this cache behavior. You can specify all, none or whitelist. If you choose All, CloudFront forwards all cookies regardless of how many your application uses.',
      ],
    ],
    'KeyPairIdList' => [
      'base' => NULL,
      'refs' => [
        'KeyPairIds$Items' => 'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
      ],
    ],
    'KeyPairIds' => [
      'base' => 'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
      'refs' => [
        'Signer$KeyPairIds' => 'A complex type that lists the active CloudFront key pairs, if any, that are associated with AwsAccountNumber.',
      ],
    ],
    'ListCloudFrontOriginAccessIdentitiesRequest' => [
      'base' => 'The request to list origin access identities.',
      'refs' => [],
    ],
    'ListCloudFrontOriginAccessIdentitiesResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'ListDistributionsRequest' => [
      'base' => 'The request to list your distributions.',
      'refs' => [],
    ],
    'ListDistributionsResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'ListInvalidationsRequest' => [
      'base' => 'The request to list invalidations.',
      'refs' => [],
    ],
    'ListInvalidationsResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'ListStreamingDistributionsRequest' => [
      'base' => 'The request to list your streaming distributions.',
      'refs' => [],
    ],
    'ListStreamingDistributionsResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'LocationList' => [
      'base' => NULL,
      'refs' => [
        'GeoRestriction$Items' => 'A complex type that contains a Location element for each country in which you want CloudFront either to distribute your content (whitelist] or not distribute your content (blacklist]. The Location element is a two-letter, uppercase country code for a country that you want to include in your blacklist or whitelist. Include one Location element for each country. CloudFront and MaxMind both use ISO 3166 country codes. For the current list of countries and the corresponding codes, see ISO 3166-1-alpha-2 code on the International Organization for Standardization website. You can also refer to the country list in the CloudFront console, which includes both country names and codes.',
      ],
    ],
    'LoggingConfig' => [
      'base' => 'A complex type that controls whether access logs are written for the distribution.',
      'refs' => [
        'DistributionConfig$Logging' => 'A complex type that controls whether access logs are written for the distribution.',
      ],
    ],
    'Method' => [
      'base' => NULL,
      'refs' => [
        'MethodsList$member' => NULL,
      ],
    ],
    'MethodsList' => [
      'base' => NULL,
      'refs' => [
        'AllowedMethods$Items' => 'A complex type that contains the HTTP methods that you want CloudFront to process and forward to your origin.',
        'CachedMethods$Items' => 'A complex type that contains the HTTP methods that you want CloudFront to cache responses to.',
      ],
    ],
    'MinimumProtocolVersion' => [
      'base' => NULL,
      'refs' => [
        'ViewerCertificate$MinimumProtocolVersion' => 'Specify the minimum version of the SSL protocol that you want CloudFront to use, SSLv3 or TLSv1, for HTTPS connections. CloudFront will serve your objects only to browsers or devices that support at least the SSL version that you specify. The TLSv1 protocol is more secure, so we recommend that you specify SSLv3 only if your users are using browsers or devices that don\'t support TLSv1. If you\'re using a custom certificate (if you specify a value for IAMCertificateId] and if you\'re using dedicated IP (if you specify vip for SSLSupportMethod], you can choose SSLv3 or TLSv1 as the MinimumProtocolVersion. If you\'re using a custom certificate (if you specify a value for IAMCertificateId] and if you\'re using SNI (if you specify sni-only for SSLSupportMethod], you must specify TLSv1 for MinimumProtocolVersion.',
      ],
    ],
    'MissingBody' => [
      'base' => 'This operation requires a body. Ensure that the body is present and the Content-Type header is set.',
      'refs' => [],
    ],
    'NoSuchCloudFrontOriginAccessIdentity' => [
      'base' => 'The specified origin access identity does not exist.',
      'refs' => [],
    ],
    'NoSuchDistribution' => [
      'base' => 'The specified distribution does not exist.',
      'refs' => [],
    ],
    'NoSuchInvalidation' => [
      'base' => 'The specified invalidation does not exist.',
      'refs' => [],
    ],
    'NoSuchOrigin' => [
      'base' => 'No origin exists with the specified Origin Id.',
      'refs' => [],
    ],
    'NoSuchStreamingDistribution' => [
      'base' => 'The specified streaming distribution does not exist.',
      'refs' => [],
    ],
    'Origin' => [
      'base' => 'A complex type that describes the Amazon S3 bucket or the HTTP server (for example, a web server] from which CloudFront gets your files.You must create at least one origin.',
      'refs' => [
        'OriginList$member' => NULL,
      ],
    ],
    'OriginList' => [
      'base' => NULL,
      'refs' => [
        'Origins$Items' => 'A complex type that contains origins for this distribution.',
      ],
    ],
    'OriginProtocolPolicy' => [
      'base' => NULL,
      'refs' => [
        'CustomOriginConfig$OriginProtocolPolicy' => 'The origin protocol policy to apply to your origin.',
      ],
    ],
    'Origins' => [
      'base' => 'A complex type that contains information about origins for this distribution.',
      'refs' => [
        'DistributionConfig$Origins' => 'A complex type that contains information about origins for this distribution.',
        'DistributionSummary$Origins' => 'A complex type that contains information about origins for this distribution.',
      ],
    ],
    'PathList' => [
      'base' => NULL,
      'refs' => [
        'Paths$Items' => 'A complex type that contains a list of the objects that you want to invalidate.',
      ],
    ],
    'Paths' => [
      'base' => 'A complex type that contains information about the objects that you want to invalidate.',
      'refs' => [
        'InvalidationBatch$Paths' => 'The path of the object to invalidate. The path is relative to the distribution and must begin with a slash (/]. You must enclose each invalidation object with the Path element tags. If the path includes non-ASCII characters or unsafe characters as defined in RFC 1783 (http://www.ietf.org/rfc/rfc1738.txt], URL encode those characters. Do not URL encode any other characters in the path, or CloudFront will not invalidate the old version of the updated object.',
      ],
    ],
    'PreconditionFailed' => [
      'base' => 'The precondition given in one or more of the request-header fields evaluated to false.',
      'refs' => [],
    ],
    'PriceClass' => [
      'base' => NULL,
      'refs' => [
        'DistributionConfig$PriceClass' => 'A complex type that contains information about price class for this distribution.',
        'DistributionSummary$PriceClass' => NULL,
        'StreamingDistributionConfig$PriceClass' => 'A complex type that contains information about price class for this streaming distribution.',
        'StreamingDistributionSummary$PriceClass' => NULL,
      ],
    ],
    'Restrictions' => [
      'base' => 'A complex type that identifies ways in which you want to restrict distribution of your content.',
      'refs' => [
        'DistributionConfig$Restrictions' => NULL,
        'DistributionSummary$Restrictions' => NULL,
      ],
    ],
    'S3Origin' => [
      'base' => 'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
      'refs' => [
        'StreamingDistributionConfig$S3Origin' => 'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
        'StreamingDistributionSummary$S3Origin' => 'A complex type that contains information about the Amazon S3 bucket from which you want CloudFront to get your media files for distribution.',
      ],
    ],
    'S3OriginConfig' => [
      'base' => 'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
      'refs' => [
        'Origin$S3OriginConfig' => 'A complex type that contains information about the Amazon S3 origin. If the origin is a custom origin, use the CustomOriginConfig element instead.',
      ],
    ],
    'SSLSupportMethod' => [
      'base' => NULL,
      'refs' => [
        'ViewerCertificate$SSLSupportMethod' => 'If you specify a value for IAMCertificateId, you must also specify how you want CloudFront to serve HTTPS requests. Valid values are vip and sni-only. If you specify vip, CloudFront uses dedicated IP addresses for your content and can respond to HTTPS requests from any viewer. However, you must request permission to use this feature, and you incur additional monthly charges. If you specify sni-only, CloudFront can only respond to HTTPS requests from viewers that support Server Name Indication (SNI]. All modern browsers support SNI, but some browsers still in use don\'t support SNI. Do not specify a value for SSLSupportMethod if you specified true for CloudFrontDefaultCertificate.',
      ],
    ],
    'Signer' => [
      'base' => 'A complex type that lists the AWS accounts that were included in the TrustedSigners complex type, as well as their active CloudFront key pair IDs, if any.',
      'refs' => [
        'SignerList$member' => NULL,
      ],
    ],
    'SignerList' => [
      'base' => NULL,
      'refs' => [
        'ActiveTrustedSigners$Items' => 'A complex type that contains one Signer complex type for each unique trusted signer that is specified in the TrustedSigners complex type, including trusted signers in the default cache behavior and in all of the other cache behaviors.',
      ],
    ],
    'StreamingDistribution' => [
      'base' => 'A streaming distribution.',
      'refs' => [
        'CreateStreamingDistributionResult$StreamingDistribution' => 'The streaming distribution\'s information.',
        'GetStreamingDistributionResult$StreamingDistribution' => 'The streaming distribution\'s information.',
        'UpdateStreamingDistributionResult$StreamingDistribution' => 'The streaming distribution\'s information.',
      ],
    ],
    'StreamingDistributionAlreadyExists' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StreamingDistributionConfig' => [
      'base' => 'The configuration for the streaming distribution.',
      'refs' => [
        'CreateStreamingDistributionRequest$StreamingDistributionConfig' => 'The streaming distribution\'s configuration information.',
        'GetStreamingDistributionConfigResult$StreamingDistributionConfig' => 'The streaming distribution\'s configuration information.',
        'StreamingDistribution$StreamingDistributionConfig' => 'The current configuration information for the streaming distribution.',
        'UpdateStreamingDistributionRequest$StreamingDistributionConfig' => 'The streaming distribution\'s configuration information.',
      ],
    ],
    'StreamingDistributionList' => [
      'base' => 'A streaming distribution list.',
      'refs' => [
        'ListStreamingDistributionsResult$StreamingDistributionList' => 'The StreamingDistributionList type.',
      ],
    ],
    'StreamingDistributionNotDisabled' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StreamingDistributionSummary' => [
      'base' => 'A summary of the information for an Amazon CloudFront streaming distribution.',
      'refs' => [
        'StreamingDistributionSummaryList$member' => NULL,
      ],
    ],
    'StreamingDistributionSummaryList' => [
      'base' => NULL,
      'refs' => [
        'StreamingDistributionList$Items' => 'A complex type that contains one StreamingDistributionSummary element for each distribution that was created by the current AWS account.',
      ],
    ],
    'StreamingLoggingConfig' => [
      'base' => 'A complex type that controls whether access logs are written for this streaming distribution.',
      'refs' => [
        'StreamingDistributionConfig$Logging' => 'A complex type that controls whether access logs are written for the streaming distribution.',
      ],
    ],
    'TooManyCacheBehaviors' => [
      'base' => 'You cannot create anymore cache behaviors for the distribution.',
      'refs' => [],
    ],
    'TooManyCertificates' => [
      'base' => 'You cannot create anymore custom ssl certificates.',
      'refs' => [],
    ],
    'TooManyCloudFrontOriginAccessIdentities' => [
      'base' => 'Processing your request would cause you to exceed the maximum number of origin access identities allowed.',
      'refs' => [],
    ],
    'TooManyCookieNamesInWhiteList' => [
      'base' => 'Your request contains more cookie names in the whitelist than are allowed per cache behavior.',
      'refs' => [],
    ],
    'TooManyDistributionCNAMEs' => [
      'base' => 'Your request contains more CNAMEs than are allowed per distribution.',
      'refs' => [],
    ],
    'TooManyDistributions' => [
      'base' => 'Processing your request would cause you to exceed the maximum number of distributions allowed.',
      'refs' => [],
    ],
    'TooManyHeadersInForwardedValues' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TooManyInvalidationsInProgress' => [
      'base' => 'You have exceeded the maximum number of allowable InProgress invalidation batch requests, or invalidation objects.',
      'refs' => [],
    ],
    'TooManyOrigins' => [
      'base' => 'You cannot create anymore origins for the distribution.',
      'refs' => [],
    ],
    'TooManyStreamingDistributionCNAMEs' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TooManyStreamingDistributions' => [
      'base' => 'Processing your request would cause you to exceed the maximum number of streaming distributions allowed.',
      'refs' => [],
    ],
    'TooManyTrustedSigners' => [
      'base' => 'Your request contains more trusted signers than are allowed per distribution.',
      'refs' => [],
    ],
    'TrustedSignerDoesNotExist' => [
      'base' => 'One or more of your trusted signers do not exist.',
      'refs' => [],
    ],
    'TrustedSigners' => [
      'base' => 'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false], change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
      'refs' => [
        'CacheBehavior$TrustedSigners' => 'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false], change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
        'DefaultCacheBehavior$TrustedSigners' => 'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false], change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
        'StreamingDistributionConfig$TrustedSigners' => 'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false], change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
        'StreamingDistributionSummary$TrustedSigners' => 'A complex type that specifies the AWS accounts, if any, that you want to allow to create signed URLs for private content. If you want to require signed URLs in requests for objects in the target origin that match the PathPattern for this cache behavior, specify true for Enabled, and specify the applicable values for Quantity and Items. For more information, go to Using a Signed URL to Serve Private Content in the Amazon CloudFront Developer Guide. If you don\'t want to require signed URLs in requests for objects that match PathPattern, specify false for Enabled and 0 for Quantity. Omit Items. To add, change, or remove one or more trusted signers, change Enabled to true (if it\'s currently false], change Quantity as applicable, and specify all of the trusted signers that you want to include in the updated distribution.',
      ],
    ],
    'UpdateCloudFrontOriginAccessIdentityRequest' => [
      'base' => 'The request to update an origin access identity.',
      'refs' => [],
    ],
    'UpdateCloudFrontOriginAccessIdentityResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'UpdateDistributionRequest' => [
      'base' => 'The request to update a distribution.',
      'refs' => [],
    ],
    'UpdateDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'UpdateStreamingDistributionRequest' => [
      'base' => 'The request to update a streaming distribution.',
      'refs' => [],
    ],
    'UpdateStreamingDistributionResult' => [
      'base' => 'The returned result of the corresponding request.',
      'refs' => [],
    ],
    'ViewerCertificate' => [
      'base' => 'A complex type that contains information about viewer certificates for this distribution.',
      'refs' => [
        'DistributionConfig$ViewerCertificate' => NULL,
        'DistributionSummary$ViewerCertificate' => NULL,
      ],
    ],
    'ViewerProtocolPolicy' => [
      'base' => NULL,
      'refs' => [
        'CacheBehavior$ViewerProtocolPolicy' => 'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https. If you want CloudFront to respond to an HTTP request with an HTTP status code of 301 (Moved Permanently] and the HTTPS URL, specify redirect-to-https. The viewer then resubmits the request using the HTTPS URL.',
        'DefaultCacheBehavior$ViewerProtocolPolicy' => 'Use this element to specify the protocol that users can use to access the files in the origin specified by TargetOriginId when a request matches the path pattern in PathPattern. If you want CloudFront to allow end users to use any available protocol, specify allow-all. If you want CloudFront to require HTTPS, specify https. If you want CloudFront to respond to an HTTP request with an HTTP status code of 301 (Moved Permanently] and the HTTPS URL, specify redirect-to-https. The viewer then resubmits the request using the HTTPS URL.',
      ],
    ],
    'boolean' => [
      'base' => NULL,
      'refs' => [
        'ActiveTrustedSigners$Enabled' => 'Each active trusted signer.',
        'CacheBehavior$SmoothStreaming' => 'Indicates whether you want to distribute media files in Microsoft Smooth Streaming format using the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
        'CloudFrontOriginAccessIdentityList$IsTruncated' => 'A flag that indicates whether more origin access identities remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more items in the list.',
        'DefaultCacheBehavior$SmoothStreaming' => 'Indicates whether you want to distribute media files in Microsoft Smooth Streaming format using the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
        'DistributionConfig$Enabled' => 'Whether the distribution is enabled to accept end user requests for content.',
        'DistributionList$IsTruncated' => 'A flag that indicates whether more distributions remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more distributions in the list.',
        'DistributionSummary$Enabled' => 'Whether the distribution is enabled to accept end user requests for content.',
        'ForwardedValues$QueryString' => 'Indicates whether you want CloudFront to forward query strings to the origin that is associated with this cache behavior. If so, specify true; if not, specify false.',
        'InvalidationList$IsTruncated' => 'A flag that indicates whether more invalidation batch requests remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more invalidation batches in the list.',
        'LoggingConfig$Enabled' => 'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a distribution or if you want to disable logging for an existing distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket, prefix and IncludeCookies, the values are automatically deleted.',
        'LoggingConfig$IncludeCookies' => 'Specifies whether you want CloudFront to include cookies in access logs, specify true for IncludeCookies. If you choose to include cookies in logs, CloudFront logs all cookies regardless of how you configure the cache behaviors for this distribution. If you do not want to include cookies when you create a distribution or if you want to disable include cookies for an existing distribution, specify false for IncludeCookies.',
        'StreamingDistributionConfig$Enabled' => 'Whether the streaming distribution is enabled to accept end user requests for content.',
        'StreamingDistributionList$IsTruncated' => 'A flag that indicates whether more streaming distributions remain to be listed. If your results were truncated, you can make a follow-up pagination request using the Marker request parameter to retrieve more distributions in the list.',
        'StreamingDistributionSummary$Enabled' => 'Whether the distribution is enabled to accept end user requests for content.',
        'StreamingLoggingConfig$Enabled' => 'Specifies whether you want CloudFront to save access logs to an Amazon S3 bucket. If you do not want to enable logging when you create a streaming distribution or if you want to disable logging for an existing streaming distribution, specify false for Enabled, and specify empty Bucket and Prefix elements. If you specify false for Enabled but you specify values for Bucket and Prefix, the values are automatically deleted.',
        'TrustedSigners$Enabled' => 'Specifies whether you want to require end users to use signed URLs to access the files specified by PathPattern and TargetOriginId.',
        'ViewerCertificate$CloudFrontDefaultCertificate' => 'If you want viewers to use HTTPS to request your objects and you\'re using the CloudFront domain name of your distribution in your object URLs (for example, https://d111111abcdef8.cloudfront.net/logo.jpg], set to true. Omit this value if you are setting an IAMCertificateId.',
      ],
    ],
    'integer' => [
      'base' => NULL,
      'refs' => [
        'ActiveTrustedSigners$Quantity' => 'The number of unique trusted signers included in all cache behaviors. For example, if three cache behaviors all list the same three AWS accounts, the value of Quantity for ActiveTrustedSigners will be 3.',
        'Aliases$Quantity' => 'The number of CNAMEs, if any, for this distribution.',
        'AllowedMethods$Quantity' => 'The number of HTTP methods that you want CloudFront to forward to your origin. Valid values are 2 (for GET and HEAD requests], 3 (for GET, HEAD and OPTIONS requests] and 7 (for GET, HEAD, OPTIONS, PUT, PATCH, POST, and DELETE requests].',
        'CacheBehaviors$Quantity' => 'The number of cache behaviors for this distribution.',
        'CachedMethods$Quantity' => 'The number of HTTP methods for which you want CloudFront to cache responses. Valid values are 2 (for caching responses to GET and HEAD requests] and 3 (for caching responses to GET, HEAD, and OPTIONS requests].',
        'CloudFrontOriginAccessIdentityList$MaxItems' => 'The value you provided for the MaxItems request parameter.',
        'CloudFrontOriginAccessIdentityList$Quantity' => 'The number of CloudFront origin access identities that were created by the current AWS account.',
        'CookieNames$Quantity' => 'The number of whitelisted cookies for this cache behavior.',
        'CustomErrorResponse$ErrorCode' => 'The 4xx or 5xx HTTP status code that you want to customize. For a list of HTTP status codes that you can customize, see CloudFront documentation.',
        'CustomErrorResponses$Quantity' => 'The number of custom error responses for this distribution.',
        'CustomOriginConfig$HTTPPort' => 'The HTTP port the custom origin listens on.',
        'CustomOriginConfig$HTTPSPort' => 'The HTTPS port the custom origin listens on.',
        'Distribution$InProgressInvalidationBatches' => 'The number of invalidation batches currently in progress.',
        'DistributionList$MaxItems' => 'The value you provided for the MaxItems request parameter.',
        'DistributionList$Quantity' => 'The number of distributions that were created by the current AWS account.',
        'GeoRestriction$Quantity' => 'When geo restriction is enabled, this is the number of countries in your whitelist or blacklist. Otherwise, when it is not enabled, Quantity is 0, and you can omit Items.',
        'Headers$Quantity' => 'The number of different headers that you want CloudFront to forward to the origin and to vary on for this cache behavior. The maximum number of headers that you can specify by name is 10. If you want CloudFront to forward all headers to the origin and vary on all of them, specify 1 for Quantity and * for Name. If you don\'t want CloudFront to forward any additional headers to the origin or to vary on any headers, specify 0 for Quantity and omit Items.',
        'InvalidationList$MaxItems' => 'The value you provided for the MaxItems request parameter.',
        'InvalidationList$Quantity' => 'The number of invalidation batches that were created by the current AWS account.',
        'KeyPairIds$Quantity' => 'The number of active CloudFront key pairs for AwsAccountNumber.',
        'Origins$Quantity' => 'The number of origins for this distribution.',
        'Paths$Quantity' => 'The number of objects that you want to invalidate.',
        'StreamingDistributionList$MaxItems' => 'The value you provided for the MaxItems request parameter.',
        'StreamingDistributionList$Quantity' => 'The number of streaming distributions that were created by the current AWS account.',
        'TrustedSigners$Quantity' => 'The number of trusted signers for this cache behavior.',
      ],
    ],
    'long' => [
      'base' => NULL,
      'refs' => [
        'CacheBehavior$MinTTL' => 'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years].',
        'CustomErrorResponse$ErrorCachingMinTTL' => 'The minimum amount of time you want HTTP error codes to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated. You can specify a value from 0 to 31,536,000.',
        'DefaultCacheBehavior$MinTTL' => 'The minimum amount of time that you want objects to stay in CloudFront caches before CloudFront queries your origin to see whether the object has been updated.You can specify a value from 0 to 3,153,600,000 seconds (100 years].',
      ],
    ],
    'string' => [
      'base' => NULL,
      'refs' => [
        'AccessDenied$Message' => NULL,
        'AliasList$member' => NULL,
        'AwsAccountNumberList$member' => NULL,
        'BatchTooLarge$Message' => NULL,
        'CNAMEAlreadyExists$Message' => NULL,
        'CacheBehavior$PathPattern' => 'The pattern (for example, images/*.jpg] that specifies which requests you want this cache behavior to apply to. When CloudFront receives an end-user request, the requested path is compared with path patterns in the order in which cache behaviors are listed in the distribution. The path pattern for the default cache behavior is * and cannot be changed. If the request for an object does not match the path pattern for any cache behaviors, CloudFront applies the behavior in the default cache behavior.',
        'CacheBehavior$TargetOriginId' => 'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
        'CloudFrontOriginAccessIdentity$Id' => 'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
        'CloudFrontOriginAccessIdentity$S3CanonicalUserId' => 'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
        'CloudFrontOriginAccessIdentityAlreadyExists$Message' => NULL,
        'CloudFrontOriginAccessIdentityConfig$CallerReference' => 'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the CloudFrontOriginAccessIdentityConfig object], a new origin access identity is created. If the CallerReference is a value you already sent in a previous request to create an identity, and the content of the CloudFrontOriginAccessIdentityConfig is identical to the original request (ignoring white space], the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create an identity but the content of the CloudFrontOriginAccessIdentityConfig is different from the original request, CloudFront returns a CloudFrontOriginAccessIdentityAlreadyExists error.',
        'CloudFrontOriginAccessIdentityConfig$Comment' => 'Any comments you want to include about the origin access identity.',
        'CloudFrontOriginAccessIdentityInUse$Message' => NULL,
        'CloudFrontOriginAccessIdentityList$Marker' => 'The value you provided for the Marker request parameter.',
        'CloudFrontOriginAccessIdentityList$NextMarker' => 'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your origin access identities where they left off.',
        'CloudFrontOriginAccessIdentitySummary$Id' => 'The ID for the origin access identity. For example: E74FTE3AJFJ256A.',
        'CloudFrontOriginAccessIdentitySummary$S3CanonicalUserId' => 'The Amazon S3 canonical user ID for the origin access identity, which you use when giving the origin access identity read permission to an object in Amazon S3.',
        'CloudFrontOriginAccessIdentitySummary$Comment' => 'The comment for this origin access identity, as originally specified when created.',
        'CookieNameList$member' => NULL,
        'CreateCloudFrontOriginAccessIdentityResult$Location' => 'The fully qualified URI of the new origin access identity just created. For example: https://cloudfront.amazonaws.com/2010-11-01/origin-access-identity/cloudfront/E74FTE3AJFJ256A.',
        'CreateCloudFrontOriginAccessIdentityResult$ETag' => 'The current version of the origin access identity created.',
        'CreateDistributionResult$Location' => 'The fully qualified URI of the new distribution resource just created. For example: https://cloudfront.amazonaws.com/2010-11-01/distribution/EDFDVBD632BHDS5.',
        'CreateDistributionResult$ETag' => 'The current version of the distribution created.',
        'CreateInvalidationRequest$DistributionId' => 'The distribution\'s id.',
        'CreateInvalidationResult$Location' => 'The fully qualified URI of the distribution and invalidation batch request, including the Invalidation ID.',
        'CreateStreamingDistributionResult$Location' => 'The fully qualified URI of the new streaming distribution resource just created. For example: https://cloudfront.amazonaws.com/2010-11-01/streaming-distribution/EGTXBD79H29TRA8.',
        'CreateStreamingDistributionResult$ETag' => 'The current version of the streaming distribution created.',
        'CustomErrorResponse$ResponsePagePath' => 'The path of the custom error page (for example, /custom_404.html]. The path is relative to the distribution and must begin with a slash (/]. If the path includes any non-ASCII characters or unsafe characters as defined in RFC 1783 (http://www.ietf.org/rfc/rfc1738.txt], URL encode those characters. Do not URL encode any other characters in the path, or CloudFront will not return the custom error page to the viewer.',
        'CustomErrorResponse$ResponseCode' => 'The HTTP status code that you want CloudFront to return with the custom error page to the viewer. For a list of HTTP status codes that you can replace, see CloudFront Documentation.',
        'DefaultCacheBehavior$TargetOriginId' => 'The value of ID for the origin that you want CloudFront to route requests to when a request matches the path pattern either for a cache behavior or for the default cache behavior.',
        'DeleteCloudFrontOriginAccessIdentityRequest$Id' => 'The origin access identity\'s id.',
        'DeleteCloudFrontOriginAccessIdentityRequest$IfMatch' => 'The value of the ETag header you received from a previous GET or PUT request. For example: E2QWRUHAPOMQZL.',
        'DeleteDistributionRequest$Id' => 'The distribution id.',
        'DeleteDistributionRequest$IfMatch' => 'The value of the ETag header you received when you disabled the distribution. For example: E2QWRUHAPOMQZL.',
        'DeleteStreamingDistributionRequest$Id' => 'The distribution id.',
        'DeleteStreamingDistributionRequest$IfMatch' => 'The value of the ETag header you received when you disabled the streaming distribution. For example: E2QWRUHAPOMQZL.',
        'Distribution$Id' => 'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
        'Distribution$Status' => 'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
        'Distribution$DomainName' => 'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
        'DistributionAlreadyExists$Message' => NULL,
        'DistributionConfig$CallerReference' => 'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the DistributionConfig object], a new distribution is created. If the CallerReference is a value you already sent in a previous request to create a distribution, and the content of the DistributionConfig is identical to the original request (ignoring white space], the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of the DistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
        'DistributionConfig$DefaultRootObject' => 'The object that you want CloudFront to return (for example, index.html] when an end user requests the root URL for your distribution (http://www.example.com] instead of an object in your distribution (http://www.example.com/index.html]. Specifying a default root object avoids exposing the contents of your distribution. If you don\'t want to specify a default root object when you create a distribution, include an empty DefaultRootObject element. To delete the default root object from an existing distribution, update the distribution configuration and include an empty DefaultRootObject element. To replace the default root object, update the distribution configuration and specify the new object.',
        'DistributionConfig$Comment' => 'Any comments you want to include about the distribution.',
        'DistributionList$Marker' => 'The value you provided for the Marker request parameter.',
        'DistributionList$NextMarker' => 'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your distributions where they left off.',
        'DistributionNotDisabled$Message' => NULL,
        'DistributionSummary$Id' => 'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
        'DistributionSummary$Status' => 'This response element indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
        'DistributionSummary$DomainName' => 'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
        'DistributionSummary$Comment' => 'The comment originally specified when this distribution was created.',
        'GetCloudFrontOriginAccessIdentityConfigRequest$Id' => 'The identity\'s id.',
        'GetCloudFrontOriginAccessIdentityConfigResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'GetCloudFrontOriginAccessIdentityRequest$Id' => 'The identity\'s id.',
        'GetCloudFrontOriginAccessIdentityResult$ETag' => 'The current version of the origin access identity\'s information. For example: E2QWRUHAPOMQZL.',
        'GetDistributionConfigRequest$Id' => 'The distribution\'s id.',
        'GetDistributionConfigResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'GetDistributionRequest$Id' => 'The distribution\'s id.',
        'GetDistributionResult$ETag' => 'The current version of the distribution\'s information. For example: E2QWRUHAPOMQZL.',
        'GetInvalidationRequest$DistributionId' => 'The distribution\'s id.',
        'GetInvalidationRequest$Id' => 'The invalidation\'s id.',
        'GetStreamingDistributionConfigRequest$Id' => 'The streaming distribution\'s id.',
        'GetStreamingDistributionConfigResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'GetStreamingDistributionRequest$Id' => 'The streaming distribution\'s id.',
        'GetStreamingDistributionResult$ETag' => 'The current version of the streaming distribution\'s information. For example: E2QWRUHAPOMQZL.',
        'HeaderList$member' => NULL,
        'IllegalUpdate$Message' => NULL,
        'InconsistentQuantities$Message' => NULL,
        'InvalidArgument$Message' => NULL,
        'InvalidDefaultRootObject$Message' => NULL,
        'InvalidErrorCode$Message' => NULL,
        'InvalidForwardCookies$Message' => NULL,
        'InvalidGeoRestrictionParameter$Message' => NULL,
        'InvalidHeadersForS3Origin$Message' => NULL,
        'InvalidIfMatchVersion$Message' => NULL,
        'InvalidLocationCode$Message' => NULL,
        'InvalidOrigin$Message' => NULL,
        'InvalidOriginAccessIdentity$Message' => NULL,
        'InvalidProtocolSettings$Message' => NULL,
        'InvalidRelativePath$Message' => NULL,
        'InvalidRequiredProtocol$Message' => NULL,
        'InvalidResponseCode$Message' => NULL,
        'InvalidViewerCertificate$Message' => NULL,
        'Invalidation$Id' => 'The identifier for the invalidation request. For example: IDFDVBD632BHDS5.',
        'Invalidation$Status' => 'The status of the invalidation request. When the invalidation batch is finished, the status is Completed.',
        'InvalidationBatch$CallerReference' => 'A unique name that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the Path object], a new distribution is created. If the CallerReference is a value you already sent in a previous request to create an invalidation batch, and the content of each Path element is identical to the original request, the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a distribution but the content of any Path is different from the original request, CloudFront returns an InvalidationBatchAlreadyExists error.',
        'InvalidationList$Marker' => 'The value you provided for the Marker request parameter.',
        'InvalidationList$NextMarker' => 'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your invalidation batches where they left off.',
        'InvalidationSummary$Id' => 'The unique ID for an invalidation request.',
        'InvalidationSummary$Status' => 'The status of an invalidation request.',
        'KeyPairIdList$member' => NULL,
        'ListCloudFrontOriginAccessIdentitiesRequest$Marker' => 'Use this when paginating results to indicate where to begin in your list of origin access identities. The results include identities in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last identity on that page].',
        'ListCloudFrontOriginAccessIdentitiesRequest$MaxItems' => 'The maximum number of origin access identities you want in the response body.',
        'ListDistributionsRequest$Marker' => 'Use this when paginating results to indicate where to begin in your list of distributions. The results include distributions in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last distribution on that page].',
        'ListDistributionsRequest$MaxItems' => 'The maximum number of distributions you want in the response body.',
        'ListInvalidationsRequest$DistributionId' => 'The distribution\'s id.',
        'ListInvalidationsRequest$Marker' => 'Use this parameter when paginating results to indicate where to begin in your list of invalidation batches. Because the results are returned in decreasing order from most recent to oldest, the most recent results are on the first page, the second page will contain earlier results, and so on. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response. This value is the same as the ID of the last invalidation batch on that page.',
        'ListInvalidationsRequest$MaxItems' => 'The maximum number of invalidation batches you want in the response body.',
        'ListStreamingDistributionsRequest$Marker' => 'Use this when paginating results to indicate where to begin in your list of streaming distributions. The results include distributions in the list that occur after the marker. To get the next page of results, set the Marker to the value of the NextMarker from the current page\'s response (which is also the ID of the last distribution on that page].',
        'ListStreamingDistributionsRequest$MaxItems' => 'The maximum number of streaming distributions you want in the response body.',
        'LocationList$member' => NULL,
        'LoggingConfig$Bucket' => 'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
        'LoggingConfig$Prefix' => 'An optional string that you want CloudFront to prefix to the access log filenames for this distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
        'MissingBody$Message' => NULL,
        'NoSuchCloudFrontOriginAccessIdentity$Message' => NULL,
        'NoSuchDistribution$Message' => NULL,
        'NoSuchInvalidation$Message' => NULL,
        'NoSuchOrigin$Message' => NULL,
        'NoSuchStreamingDistribution$Message' => NULL,
        'Origin$Id' => 'A unique identifier for the origin. The value of Id must be unique within the distribution. You use the value of Id when you create a cache behavior. The Id identifies the origin that CloudFront routes a request to when the request matches the path pattern for that cache behavior.',
        'Origin$DomainName' => 'Amazon S3 origins: The DNS name of the Amazon S3 bucket from which you want CloudFront to get objects for this origin, for example, myawsbucket.s3.amazonaws.com. Custom origins: The DNS domain name for the HTTP server from which you want CloudFront to get objects for this origin, for example, www.example.com.',
        'PathList$member' => NULL,
        'PreconditionFailed$Message' => NULL,
        'S3Origin$DomainName' => 'The DNS name of the S3 origin.',
        'S3Origin$OriginAccessIdentity' => 'Your S3 origin\'s origin access identity.',
        'S3OriginConfig$OriginAccessIdentity' => 'The CloudFront origin access identity to associate with the origin. Use an origin access identity to configure the origin so that end users can only access objects in an Amazon S3 bucket through CloudFront. If you want end users to be able to access objects using either the CloudFront URL or the Amazon S3 URL, specify an empty OriginAccessIdentity element. To delete the origin access identity from an existing distribution, update the distribution configuration and include an empty OriginAccessIdentity element. To replace the origin access identity, update the distribution configuration and specify the new origin access identity. Use the format origin-access-identity/cloudfront/Id where Id is the value that CloudFront returned in the Id element when you created the origin access identity.',
        'Signer$AwsAccountNumber' => 'Specifies an AWS account that can create signed URLs. Values: self, which indicates that the AWS account that was used to create the distribution can created signed URLs, or an AWS account number. Omit the dashes in the account number.',
        'StreamingDistribution$Id' => 'The identifier for the streaming distribution. For example: EGTXBD79H29TRA8.',
        'StreamingDistribution$Status' => 'The current status of the streaming distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
        'StreamingDistribution$DomainName' => 'The domain name corresponding to the streaming distribution. For example: s5c39gqb8ow64r.cloudfront.net.',
        'StreamingDistributionAlreadyExists$Message' => NULL,
        'StreamingDistributionConfig$CallerReference' => 'A unique number that ensures the request can\'t be replayed. If the CallerReference is new (no matter the content of the StreamingDistributionConfig object], a new streaming distribution is created. If the CallerReference is a value you already sent in a previous request to create a streaming distribution, and the content of the StreamingDistributionConfig is identical to the original request (ignoring white space], the response includes the same information returned to the original request. If the CallerReference is a value you already sent in a previous request to create a streaming distribution but the content of the StreamingDistributionConfig is different from the original request, CloudFront returns a DistributionAlreadyExists error.',
        'StreamingDistributionConfig$Comment' => 'Any comments you want to include about the streaming distribution.',
        'StreamingDistributionList$Marker' => 'The value you provided for the Marker request parameter.',
        'StreamingDistributionList$NextMarker' => 'If IsTruncated is true, this element is present and contains the value you can use for the Marker request parameter to continue listing your streaming distributions where they left off.',
        'StreamingDistributionNotDisabled$Message' => NULL,
        'StreamingDistributionSummary$Id' => 'The identifier for the distribution. For example: EDFDVBD632BHDS5.',
        'StreamingDistributionSummary$Status' => 'Indicates the current status of the distribution. When the status is Deployed, the distribution\'s information is fully propagated throughout the Amazon CloudFront system.',
        'StreamingDistributionSummary$DomainName' => 'The domain name corresponding to the distribution. For example: d604721fxaaqy9.cloudfront.net.',
        'StreamingDistributionSummary$Comment' => 'The comment originally specified when this distribution was created.',
        'StreamingLoggingConfig$Bucket' => 'The Amazon S3 bucket to store the access logs in, for example, myawslogbucket.s3.amazonaws.com.',
        'StreamingLoggingConfig$Prefix' => 'An optional string that you want CloudFront to prefix to the access log filenames for this streaming distribution, for example, myprefix/. If you want to enable logging, but you do not want to specify a prefix, you still must include an empty Prefix element in the Logging element.',
        'TooManyCacheBehaviors$Message' => NULL,
        'TooManyCertificates$Message' => NULL,
        'TooManyCloudFrontOriginAccessIdentities$Message' => NULL,
        'TooManyCookieNamesInWhiteList$Message' => NULL,
        'TooManyDistributionCNAMEs$Message' => NULL,
        'TooManyDistributions$Message' => NULL,
        'TooManyHeadersInForwardedValues$Message' => NULL,
        'TooManyInvalidationsInProgress$Message' => NULL,
        'TooManyOrigins$Message' => NULL,
        'TooManyStreamingDistributionCNAMEs$Message' => NULL,
        'TooManyStreamingDistributions$Message' => NULL,
        'TooManyTrustedSigners$Message' => NULL,
        'TrustedSignerDoesNotExist$Message' => NULL,
        'UpdateCloudFrontOriginAccessIdentityRequest$Id' => 'The identity\'s id.',
        'UpdateCloudFrontOriginAccessIdentityRequest$IfMatch' => 'The value of the ETag header you received when retrieving the identity\'s configuration. For example: E2QWRUHAPOMQZL.',
        'UpdateCloudFrontOriginAccessIdentityResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'UpdateDistributionRequest$Id' => 'The distribution\'s id.',
        'UpdateDistributionRequest$IfMatch' => 'The value of the ETag header you received when retrieving the distribution\'s configuration. For example: E2QWRUHAPOMQZL.',
        'UpdateDistributionResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'UpdateStreamingDistributionRequest$Id' => 'The streaming distribution\'s id.',
        'UpdateStreamingDistributionRequest$IfMatch' => 'The value of the ETag header you received when retrieving the streaming distribution\'s configuration. For example: E2QWRUHAPOMQZL.',
        'UpdateStreamingDistributionResult$ETag' => 'The current version of the configuration. For example: E2QWRUHAPOMQZL.',
        'ViewerCertificate$IAMCertificateId' => 'If you want viewers to use HTTPS to request your objects and you\'re using an alternate domain name in your object URLs (for example, https://example.com/logo.jpg], specify the IAM certificate identifier of the custom viewer certificate for this distribution. Specify either this value or CloudFrontDefaultCertificate.',
      ],
    ],
    'timestamp' => [
      'base' => NULL,
      'refs' => [
        'Distribution$LastModifiedTime' => 'The date and time the distribution was last modified.',
        'DistributionSummary$LastModifiedTime' => 'The date and time the distribution was last modified.',
        'Invalidation$CreateTime' => 'The date and time the invalidation request was first made.',
        'InvalidationSummary$CreateTime' => NULL,
        'StreamingDistribution$LastModifiedTime' => 'The date and time the distribution was last modified.',
        'StreamingDistributionSummary$LastModifiedTime' => 'The date and time the distribution was last modified.',
      ],
    ],
  ],
];
