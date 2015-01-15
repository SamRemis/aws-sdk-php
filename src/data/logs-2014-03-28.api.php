<?php return [
  'metadata' => [
    'apiVersion' => '2014-03-28',
    'endpointPrefix' => 'logs',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'Amazon CloudWatch Logs',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'Logs_20140328',
    'protocol' => 'json',
  ],
  'operations' => [
    'CreateLogGroup' => [
      'name' => 'CreateLogGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateLogGroupRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'CreateLogStream' => [
      'name' => 'CreateLogStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateLogStreamRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceAlreadyExistsException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeleteLogGroup' => [
      'name' => 'DeleteLogGroup',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteLogGroupRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeleteLogStream' => [
      'name' => 'DeleteLogStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteLogStreamRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeleteMetricFilter' => [
      'name' => 'DeleteMetricFilter',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteMetricFilterRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DeleteRetentionPolicy' => [
      'name' => 'DeleteRetentionPolicy',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteRetentionPolicyRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeLogGroups' => [
      'name' => 'DescribeLogGroups',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeLogGroupsRequest',
      ],
      'output' => [
        'shape' => 'DescribeLogGroupsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeLogStreams' => [
      'name' => 'DescribeLogStreams',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeLogStreamsRequest',
      ],
      'output' => [
        'shape' => 'DescribeLogStreamsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeMetricFilters' => [
      'name' => 'DescribeMetricFilters',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeMetricFiltersRequest',
      ],
      'output' => [
        'shape' => 'DescribeMetricFiltersResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetLogEvents' => [
      'name' => 'GetLogEvents',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetLogEventsRequest',
      ],
      'output' => [
        'shape' => 'GetLogEventsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'PutLogEvents' => [
      'name' => 'PutLogEvents',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutLogEventsRequest',
      ],
      'output' => [
        'shape' => 'PutLogEventsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidSequenceTokenException',
          'exception' => true,
        ],
        [
          'shape' => 'DataAlreadyAcceptedException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'PutMetricFilter' => [
      'name' => 'PutMetricFilter',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutMetricFilterRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'PutRetentionPolicy' => [
      'name' => 'PutRetentionPolicy',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutRetentionPolicyRequest',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'OperationAbortedException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'TestMetricFilter' => [
      'name' => 'TestMetricFilter',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'TestMetricFilterRequest',
      ],
      'output' => [
        'shape' => 'TestMetricFilterResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'exception' => true,
        ],
        [
          'shape' => 'ServiceUnavailableException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'Arn' => [
      'type' => 'string',
    ],
    'CreateLogGroupRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
      ],
    ],
    'CreateLogStreamRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'logStreamName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'logStreamName' => [
          'shape' => 'LogStreamName',
        ],
      ],
    ],
    'DataAlreadyAcceptedException' => [
      'type' => 'structure',
      'members' => [
        'expectedSequenceToken' => [
          'shape' => 'SequenceToken',
        ],
      ],
      'exception' => true,
    ],
    'Days' => [
      'type' => 'integer',
    ],
    'DeleteLogGroupRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
      ],
    ],
    'DeleteLogStreamRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'logStreamName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'logStreamName' => [
          'shape' => 'LogStreamName',
        ],
      ],
    ],
    'DeleteMetricFilterRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'filterName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'filterName' => [
          'shape' => 'FilterName',
        ],
      ],
    ],
    'DeleteRetentionPolicyRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
      ],
    ],
    'DescribeLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 50,
    ],
    'DescribeLogGroupsRequest' => [
      'type' => 'structure',
      'members' => [
        'logGroupNamePrefix' => [
          'shape' => 'LogGroupName',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'limit' => [
          'shape' => 'DescribeLimit',
        ],
      ],
    ],
    'DescribeLogGroupsResponse' => [
      'type' => 'structure',
      'members' => [
        'logGroups' => [
          'shape' => 'LogGroups',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeLogStreamsRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'logStreamNamePrefix' => [
          'shape' => 'LogStreamName',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'limit' => [
          'shape' => 'DescribeLimit',
        ],
      ],
    ],
    'DescribeLogStreamsResponse' => [
      'type' => 'structure',
      'members' => [
        'logStreams' => [
          'shape' => 'LogStreams',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeMetricFiltersRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'filterNamePrefix' => [
          'shape' => 'FilterName',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'limit' => [
          'shape' => 'DescribeLimit',
        ],
      ],
    ],
    'DescribeMetricFiltersResponse' => [
      'type' => 'structure',
      'members' => [
        'metricFilters' => [
          'shape' => 'MetricFilters',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'EventMessage' => [
      'type' => 'string',
      'min' => 1,
      'max' => 32768,
    ],
    'EventNumber' => [
      'type' => 'long',
    ],
    'EventsLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10000,
    ],
    'ExtractedValues' => [
      'type' => 'map',
      'key' => [
        'shape' => 'Token',
      ],
      'value' => [
        'shape' => 'Value',
      ],
    ],
    'FilterCount' => [
      'type' => 'integer',
    ],
    'FilterName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 512,
      'pattern' => '[^:*]*',
    ],
    'FilterPattern' => [
      'type' => 'string',
      'min' => 0,
      'max' => 512,
    ],
    'GetLogEventsRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'logStreamName',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'logStreamName' => [
          'shape' => 'LogStreamName',
        ],
        'startTime' => [
          'shape' => 'Timestamp',
        ],
        'endTime' => [
          'shape' => 'Timestamp',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'limit' => [
          'shape' => 'EventsLimit',
        ],
        'startFromHead' => [
          'shape' => 'StartFromHead',
        ],
      ],
    ],
    'GetLogEventsResponse' => [
      'type' => 'structure',
      'members' => [
        'events' => [
          'shape' => 'OutputLogEvents',
        ],
        'nextForwardToken' => [
          'shape' => 'NextToken',
        ],
        'nextBackwardToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'InputLogEvent' => [
      'type' => 'structure',
      'required' => [
        'timestamp',
        'message',
      ],
      'members' => [
        'timestamp' => [
          'shape' => 'Timestamp',
        ],
        'message' => [
          'shape' => 'EventMessage',
        ],
      ],
    ],
    'InputLogEvents' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InputLogEvent',
      ],
      'min' => 1,
      'max' => 1000,
    ],
    'InvalidParameterException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'InvalidSequenceTokenException' => [
      'type' => 'structure',
      'members' => [
        'expectedSequenceToken' => [
          'shape' => 'SequenceToken',
        ],
      ],
      'exception' => true,
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'LogGroup' => [
      'type' => 'structure',
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'creationTime' => [
          'shape' => 'Timestamp',
        ],
        'retentionInDays' => [
          'shape' => 'Days',
        ],
        'metricFilterCount' => [
          'shape' => 'FilterCount',
        ],
        'arn' => [
          'shape' => 'Arn',
        ],
        'storedBytes' => [
          'shape' => 'StoredBytes',
        ],
      ],
    ],
    'LogGroupName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 512,
      'pattern' => '[\\.\\-_/#A-Za-z0-9]+',
    ],
    'LogGroups' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LogGroup',
      ],
    ],
    'LogStream' => [
      'type' => 'structure',
      'members' => [
        'logStreamName' => [
          'shape' => 'LogStreamName',
        ],
        'creationTime' => [
          'shape' => 'Timestamp',
        ],
        'firstEventTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'lastEventTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'lastIngestionTime' => [
          'shape' => 'Timestamp',
        ],
        'uploadSequenceToken' => [
          'shape' => 'SequenceToken',
        ],
        'arn' => [
          'shape' => 'Arn',
        ],
        'storedBytes' => [
          'shape' => 'StoredBytes',
        ],
      ],
    ],
    'LogStreamName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 512,
      'pattern' => '[^:*]*',
    ],
    'LogStreams' => [
      'type' => 'list',
      'member' => [
        'shape' => 'LogStream',
      ],
    ],
    'MetricFilter' => [
      'type' => 'structure',
      'members' => [
        'filterName' => [
          'shape' => 'FilterName',
        ],
        'filterPattern' => [
          'shape' => 'FilterPattern',
        ],
        'metricTransformations' => [
          'shape' => 'MetricTransformations',
        ],
        'creationTime' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'MetricFilterMatchRecord' => [
      'type' => 'structure',
      'members' => [
        'eventNumber' => [
          'shape' => 'EventNumber',
        ],
        'eventMessage' => [
          'shape' => 'EventMessage',
        ],
        'extractedValues' => [
          'shape' => 'ExtractedValues',
        ],
      ],
    ],
    'MetricFilterMatches' => [
      'type' => 'list',
      'member' => [
        'shape' => 'MetricFilterMatchRecord',
      ],
    ],
    'MetricFilters' => [
      'type' => 'list',
      'member' => [
        'shape' => 'MetricFilter',
      ],
    ],
    'MetricName' => [
      'type' => 'string',
      'max' => 255,
      'pattern' => '[^:*$]*',
    ],
    'MetricNamespace' => [
      'type' => 'string',
      'max' => 255,
      'pattern' => '[^:*$]*',
    ],
    'MetricTransformation' => [
      'type' => 'structure',
      'required' => [
        'metricName',
        'metricNamespace',
        'metricValue',
      ],
      'members' => [
        'metricName' => [
          'shape' => 'MetricName',
        ],
        'metricNamespace' => [
          'shape' => 'MetricNamespace',
        ],
        'metricValue' => [
          'shape' => 'MetricValue',
        ],
      ],
    ],
    'MetricTransformations' => [
      'type' => 'list',
      'member' => [
        'shape' => 'MetricTransformation',
      ],
      'min' => 1,
      'max' => 1,
    ],
    'MetricValue' => [
      'type' => 'string',
      'max' => 100,
    ],
    'NextToken' => [
      'type' => 'string',
    ],
    'OperationAbortedException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'OutputLogEvent' => [
      'type' => 'structure',
      'members' => [
        'timestamp' => [
          'shape' => 'Timestamp',
        ],
        'message' => [
          'shape' => 'EventMessage',
        ],
        'ingestionTime' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'OutputLogEvents' => [
      'type' => 'list',
      'member' => [
        'shape' => 'OutputLogEvent',
      ],
    ],
    'PutLogEventsRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'logStreamName',
        'logEvents',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'logStreamName' => [
          'shape' => 'LogStreamName',
        ],
        'logEvents' => [
          'shape' => 'InputLogEvents',
        ],
        'sequenceToken' => [
          'shape' => 'SequenceToken',
        ],
      ],
    ],
    'PutLogEventsResponse' => [
      'type' => 'structure',
      'members' => [
        'nextSequenceToken' => [
          'shape' => 'SequenceToken',
        ],
      ],
    ],
    'PutMetricFilterRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'filterName',
        'filterPattern',
        'metricTransformations',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'filterName' => [
          'shape' => 'FilterName',
        ],
        'filterPattern' => [
          'shape' => 'FilterPattern',
        ],
        'metricTransformations' => [
          'shape' => 'MetricTransformations',
        ],
      ],
    ],
    'PutRetentionPolicyRequest' => [
      'type' => 'structure',
      'required' => [
        'logGroupName',
        'retentionInDays',
      ],
      'members' => [
        'logGroupName' => [
          'shape' => 'LogGroupName',
        ],
        'retentionInDays' => [
          'shape' => 'Days',
        ],
      ],
    ],
    'ResourceAlreadyExistsException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
    ],
    'SequenceToken' => [
      'type' => 'string',
      'min' => 1,
    ],
    'ServiceUnavailableException' => [
      'type' => 'structure',
      'members' => [],
      'exception' => true,
      'fault' => true,
    ],
    'StartFromHead' => [
      'type' => 'boolean',
    ],
    'StoredBytes' => [
      'type' => 'long',
      'min' => 0,
    ],
    'TestEventMessages' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EventMessage',
      ],
      'min' => 1,
      'max' => 50,
    ],
    'TestMetricFilterRequest' => [
      'type' => 'structure',
      'required' => [
        'filterPattern',
        'logEventMessages',
      ],
      'members' => [
        'filterPattern' => [
          'shape' => 'FilterPattern',
        ],
        'logEventMessages' => [
          'shape' => 'TestEventMessages',
        ],
      ],
    ],
    'TestMetricFilterResponse' => [
      'type' => 'structure',
      'members' => [
        'matches' => [
          'shape' => 'MetricFilterMatches',
        ],
      ],
    ],
    'Timestamp' => [
      'type' => 'long',
      'min' => 0,
    ],
    'Token' => [
      'type' => 'string',
    ],
    'Value' => [
      'type' => 'string',
    ],
  ],
];
