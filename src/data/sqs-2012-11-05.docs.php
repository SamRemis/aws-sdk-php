<?php return [
  'operations' => [
    'AddPermission' => '<p>Adds a permission to a queue for a specific <a href="http://docs.aws.amazon.com/general/latest/gr/glos-chap.html#P">principal</a>. This allows for sharing access to the queue.</p> <p>When you create a queue, you have full control access rights for the queue. Only you (as owner of the queue] can grant or deny permissions to the queue. For more information about these permissions, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/acp-overview.html">Shared Queues</a> in the <i>Amazon SQS Developer Guide</i>.</p> <note> <p><code>AddPermission</code> writes an Amazon SQS-generated policy. If you want to write your own policy, use <a>SetQueueAttributes</a> to upload your policy. For more information about writing your own policy, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AccessPolicyLanguage.html">Using The Access Policy Language</a> in the <i>Amazon SQS Developer Guide</i>.</p> </note> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'ChangeMessageVisibility' => '<p>Changes the visibility timeout of a specified message in a queue to a new value. The maximum allowed timeout value you can set the value to is 12 hours. This means you can\'t extend the timeout of a message in an existing queue to more than a total visibility timeout of 12 hours. (For more information visibility timeout, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AboutVT.html">Visibility Timeout</a> in the <i>Amazon SQS Developer Guide</i>.]</p> <p>For example, let\'s say you have a message and its default message visibility timeout is 30 minutes. You could call <code>ChangeMessageVisiblity</code> with a value of two hours and the effective timeout would be two hours and 30 minutes. When that time comes near you could again extend the time out by calling ChangeMessageVisiblity, but this time the maximum allowed timeout would be 9 hours and 30 minutes.</p> <note><p>There is a 120,000 limit for the number of inflight messages per queue. Messages are inflight after they have been received from the queue by a consuming component, but have not yet been deleted from the queue. If you reach the 120,000 limit, you will receive an OverLimit error message from Amazon SQS. To help avoid reaching the limit, you should delete the messages from the queue after they have been processed. You can also increase the number of queues you use to process the messages. </p></note> <important>If you attempt to set the <code>VisibilityTimeout</code> to an amount more than the maximum time left, Amazon SQS returns an error. It will not automatically recalculate and increase the timeout to the maximum time remaining.</important> <important>Unlike with a queue, when you change the visibility timeout for a specific message, that timeout value is applied immediately but is not saved in memory for that message. If you don\'t delete a message after it is received, the visibility timeout for the message the next time it is received reverts to the original timeout value, not the value you set with the <code>ChangeMessageVisibility</code> action.</important>',
    'ChangeMessageVisibilityBatch' => '<p>Changes the visibility timeout of multiple messages. This is a batch version of <a>ChangeMessageVisibility</a>. The result of the action on each message is reported individually in the response. You can send up to 10 <a>ChangeMessageVisibility</a> requests with each <code>ChangeMessageVisibilityBatch</code> action.</p> <important>Because the batch request can result in a combination of successful and unsuccessful actions, you should check for batch errors even when the call returns an HTTP status code of 200.</important> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'CreateQueue' => '<p>Creates a new queue, or returns the URL of an existing one. When you request <code>CreateQueue</code>, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues.</p> <note> <p>If you delete a queue, you must wait at least 60 seconds before creating a queue with the same name.</p> </note> <p>You may pass one or more attributes in the request. If you do not provide a value for any attribute, the queue will have the default value for that attribute. Permitted attributes are the same that can be set using <a>SetQueueAttributes</a>.</p> <note><p>Use <a>GetQueueUrl</a> to get a queue\'s URL. <a>GetQueueUrl</a> requires only the <code>QueueName</code> parameter.</p></note> <p>If you provide the name of an existing queue, along with the exact names and values of all the queue\'s attributes, <code>CreateQueue</code> returns the queue URL for the existing queue. If the queue name, attribute names, or attribute values do not match an existing queue, <code>CreateQueue</code> returns an error.</p> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'DeleteMessage' => '<p> Deletes the specified message from the specified queue. You specify the message by using the message\'s <code>receipt handle</code> and not the <code>message ID</code> you received when you sent the message. Even if the message is locked by another reader due to the visibility timeout setting, it is still deleted from the queue. If you leave a message in the queue for longer than the queue\'s configured retention period, Amazon SQS automatically deletes it. </p> <note> <p> The receipt handle is associated with a specific instance of receiving the message. If you receive a message more than once, the receipt handle you get each time you receive the message is different. When you request <code>DeleteMessage</code>, if you don\'t provide the most recently received receipt handle for the message, the request will still succeed, but the message might not be deleted. </p> </note> <important> <p> It is possible you will receive a message even after you have deleted it. This might happen on rare occasions if one of the servers storing a copy of the message is unavailable when you request to delete the message. The copy remains on the server and might be returned to you again on a subsequent receive request. You should create your system to be idempotent so that receiving a particular message more than once is not a problem. </p> </important>',
    'DeleteMessageBatch' => '<p>Deletes up to ten messages from the specified queue. This is a batch version of <a>DeleteMessage</a>. The result of the delete action on each message is reported individually in the response.</p> <important> <p> Because the batch request can result in a combination of successful and unsuccessful actions, you should check for batch errors even when the call returns an HTTP status code of 200. </p> </important> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'DeleteQueue' => '<p> Deletes the queue specified by the <b>queue URL</b>, regardless of whether the queue is empty. If the specified queue does not exist, Amazon SQS returns a successful response. </p> <important> <p> Use <code>DeleteQueue</code> with care; once you delete your queue, any messages in the queue are no longer available. </p> </important> <p> When you delete a queue, the deletion process takes up to 60 seconds. Requests you send involving that queue during the 60 seconds might succeed. For example, a <a>SendMessage</a> request might succeed, but after the 60 seconds, the queue and that message you sent no longer exist. Also, when you delete a queue, you must wait at least 60 seconds before creating a queue with the same name. </p> <p> We reserve the right to delete queues that have had no activity for more than 30 days. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSConcepts.html">How Amazon SQS Queues Work</a> in the <i>Amazon SQS Developer Guide</i>. </p>',
    'GetQueueAttributes' => '<p>Gets attributes for the specified queue. The following attributes are supported: <ul> <li> <code>All</code> - returns all values.</li> <li> <code>ApproximateNumberOfMessages</code> - returns the approximate number of visible messages in a queue. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/ApproximateNumber.html">Resources Required to Process Messages</a> in the <i>Amazon SQS Developer Guide</i>.</li> <li> <code>ApproximateNumberOfMessagesNotVisible</code> - returns the approximate number of messages that are not timed-out and not deleted. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/ApproximateNumber.html">Resources Required to Process Messages</a> in the <i>Amazon SQS Developer Guide</i>.</li> <li> <code>VisibilityTimeout</code> - returns the visibility timeout for the queue. For more information about visibility timeout, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AboutVT.html">Visibility Timeout</a> in the <i>Amazon SQS Developer Guide</i>.</li> <li> <code>CreatedTimestamp</code> - returns the time when the queue was created (epoch time in seconds].</li> <li> <code>LastModifiedTimestamp</code> - returns the time when the queue was last changed (epoch time in seconds].</li> <li> <code>Policy</code> - returns the queue\'s policy.</li> <li> <code>MaximumMessageSize</code> - returns the limit of how many bytes a message can contain before Amazon SQS rejects it.</li> <li> <code>MessageRetentionPeriod</code> - returns the number of seconds Amazon SQS retains a message.</li> <li> <code>QueueArn</code> - returns the queue\'s Amazon resource name (ARN].</li> <li> <code>ApproximateNumberOfMessagesDelayed</code> - returns the approximate number of messages that are pending to be added to the queue.</li> <li> <code>DelaySeconds</code> - returns the default delay on the queue in seconds.</li> <li> <code>ReceiveMessageWaitTimeSeconds</code> - returns the time for which a ReceiveMessage call will wait for a message to arrive.</li> <li> <code>RedrivePolicy</code> - returns the parameters for dead letter queue functionality of the source queue. For more information about RedrivePolicy and dead letter queues, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSDeadLetterQueue.html">Using Amazon SQS Dead Letter Queues</a> in the <i>Amazon SQS Developer Guide</i>.</li> </ul> </p> <note>Going forward, new attributes might be added. If you are writing code that calls this action, we recommend that you structure your code so that it can handle new attributes gracefully.</note> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'GetQueueUrl' => '<p> Returns the URL of an existing queue. This action provides a simple way to retrieve the URL of an Amazon SQS queue. </p> <p> To access a queue that belongs to another AWS account, use the <code>QueueOwnerAWSAccountId</code> parameter to specify the account ID of the queue\'s owner. The queue\'s owner must grant you permission to access the queue. For more information about shared queue access, see <a>AddPermission</a> or go to <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/acp-overview.html">Shared Queues</a> in the <i>Amazon SQS Developer Guide</i>. </p>',
    'ListDeadLetterSourceQueues' => '<p>Returns a list of your queues that have the RedrivePolicy queue attribute configured with a dead letter queue.</p> <p>For more information about using dead letter queues, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSDeadLetterQueue.html">Using Amazon SQS Dead Letter Queues</a>.</p>',
    'ListQueues' => '<p>Returns a list of your queues. The maximum number of queues that can be returned is 1000. If you specify a value for the optional <code>QueueNamePrefix</code> parameter, only queues with a name beginning with the specified value are returned.</p>',
    'PurgeQueue' => '<p>Deletes the messages in a queue specified by the <b>queue URL</b>.</p> <important>When you use the <code>PurgeQueue</code> API, the deleted messages in the queue cannot be retrieved.</important> <p>When you purge a queue, the message deletion process takes up to 60 seconds. All messages sent to the queue before calling <code>PurgeQueue</code> will be deleted; messages sent to the queue while it is being purged may be deleted. While the queue is being purged, messages sent to the queue before <code>PurgeQueue</code> was called may be received, but will be deleted within the next minute.</p>',
    'ReceiveMessage' => '<p> Retrieves one or more messages, with a maximum limit of 10 messages, from the specified queue. Long poll support is enabled by using the <code>WaitTimeSeconds</code> parameter. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/sqs-long-polling.html">Amazon SQS Long Poll</a> in the <i>Amazon SQS Developer Guide</i>. </p> <p> Short poll is the default behavior where a weighted random set of machines is sampled on a <code>ReceiveMessage</code> call. This means only the messages on the sampled machines are returned. If the number of messages in the queue is small (less than 1000], it is likely you will get fewer messages than you requested per <code>ReceiveMessage</code> call. If the number of messages in the queue is extremely small, you might not receive any messages in a particular <code>ReceiveMessage</code> response; in which case you should repeat the request. </p> <p> For each message returned, the response includes the following: </p> <ul> <li> <p> Message body </p> </li> <li> <p> MD5 digest of the message body. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>. </p> </li> <li> <p> Message ID you received when you sent the message to the queue. </p> </li> <li> <p> Receipt handle. </p> </li> <li> <p> Message attributes. </p> </li> <li> <p> MD5 digest of the message attributes. </p> </li> </ul> <p> The receipt handle is the identifier you must provide when deleting the message. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/ImportantIdentifiers.html">Queue and Message Identifiers</a> in the <i>Amazon SQS Developer Guide</i>. </p> <p> You can provide the <code>VisibilityTimeout</code> parameter in your request, which will be applied to the messages that Amazon SQS returns in the response. If you do not include the parameter, the overall visibility timeout for the queue is used for the returned messages. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AboutVT.html">Visibility Timeout</a> in the <i>Amazon SQS Developer Guide</i>. </p> <note> <p> Going forward, new attributes might be added. If you are writing code that calls this action, we recommend that you structure your code so that it can handle new attributes gracefully. </p> </note>',
    'RemovePermission' => '<p>Revokes any permissions in the queue policy that matches the specified <code>Label</code> parameter. Only the owner of the queue can remove permissions.</p>',
    'SendMessage' => '<p> Delivers a message to the specified queue. With Amazon SQS, you now have the ability to send large payload messages that are up to 256KB (262,144 bytes] in size. To send large payloads, you must use an AWS SDK that supports SigV4 signing. To verify whether SigV4 is supported for an AWS SDK, check the SDK release notes. </p> <important> <p> The following list shows the characters (in Unicode] allowed in your message, according to the W3C XML specification. For more information, go to <a href="http://www.w3.org/TR/REC-xml/#charsets">http://www.w3.org/TR/REC-xml/#charsets</a> If you send any characters not included in the list, your request will be rejected. </p> <p> #x9 | #xA | #xD | [#x20 to #xD7FF] | [#xE000 to #xFFFD] | [#x10000 to #x10FFFF] </p> </important>',
    'SendMessageBatch' => '<p>Delivers up to ten messages to the specified queue. This is a batch version of <a>SendMessage</a>. The result of the send action on each message is reported individually in the response. The maximum allowed individual message size is 256 KB (262,144 bytes].</p> <p>The maximum total payload size (i.e., the sum of all a batch\'s individual message lengths] is also 256 KB (262,144 bytes].</p> <p>If the <code>DelaySeconds</code> parameter is not specified for an entry, the default for the queue is used.</p> <important>The following list shows the characters (in Unicode] that are allowed in your message, according to the W3C XML specification. For more information, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>. If you send any characters that are not included in the list, your request will be rejected. <p>#x9 | #xA | #xD | [#x20 to #xD7FF] | [#xE000 to #xFFFD] | [#x10000 to #x10FFFF]</p> </important> <important> Because the batch request can result in a combination of successful and unsuccessful actions, you should check for batch errors even when the call returns an HTTP status code of 200. </important> <note>Some API actions take lists of parameters. These lists are specified using the <code>param.n</code> notation. Values of <code>n</code> are integers starting from 1. For example, a parameter list with two elements looks like this: </note> <p><code>&amp;Attribute.1=this</code></p> <p><code>&amp;Attribute.2=that</code></p>',
    'SetQueueAttributes' => '<p>Sets the value of one or more queue attributes. When you change a queue\'s attributes, the change can take up to 60 seconds for most of the attributes to propagate throughout the SQS system. Changes made to the <code>MessageRetentionPeriod</code> attribute can take up to 15 minutes.</p> <note>Going forward, new attributes might be added. If you are writing code that calls this action, we recommend that you structure your code so that it can handle new attributes gracefully.</note>',
  ],
  'service' => '<p>Welcome to the <i>Amazon Simple Queue Service API Reference</i>. This section describes who should read this guide, how the guide is organized, and other resources related to the Amazon Simple Queue Service (Amazon SQS].</p> <p>Amazon SQS offers reliable and scalable hosted queues for storing messages as they travel between computers. By using Amazon SQS, you can move data between distributed components of your applications that perform different tasks without losing messages or requiring each component to be always available.</p> <p>Helpful Links: <ul> <li><a href="http://queue.amazonaws.com/doc/2012-11-05/QueueService.wsdl">Current WSDL (2012-11-05]</a></li> <li><a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/MakingRequestsArticle.html">Making API Requests</a></li> <li><a href="http://aws.amazon.com/sqs/">Amazon SQS product page</a></li> <li><a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSMessageAttributes.html">Using Amazon SQS Message Attributes</a></li> <li><a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSDeadLetterQueue.html">Using Amazon SQS Dead Letter Queues</a></li> <li><a href="http://docs.aws.amazon.com/general/latest/gr/rande.html#sqs_region">Regions and Endpoints</a></li> </ul> </p> <p>We also provide SDKs that enable you to access Amazon SQS from your preferred programming language. The SDKs contain functionality that automatically takes care of tasks such as:</p> <p> <ul> <li>Cryptographically signing your service requests</li> <li>Retrying requests</li> <li>Handling error responses</li> </ul> </p> <p>For a list of available SDKs, go to <a href="http://aws.amazon.com/tools/">Tools for Amazon Web Services</a>.</p>',
  'shapes' => [
    'AWSAccountIdList' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionRequest$AWSAccountIds' => '<p>The AWS account number of the <a href="http://docs.aws.amazon.com/general/latest/gr/glos-chap.html#P">principal</a> who will be given permission. The principal must have an AWS account, but does not need to be signed up for Amazon SQS. For information about locating the AWS account identification, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AWSCredentials.html">Your AWS Identifiers</a> in the <i>Amazon SQS Developer Guide</i>.</p>',
      ],
    ],
    'ActionNameList' => [
      'base' => NULL,
      'refs' => [
        'AddPermissionRequest$Actions' => '<p>The action the client wants to allow for the specified principal. The following are valid values: <code>* | SendMessage | ReceiveMessage | DeleteMessage | ChangeMessageVisibility | GetQueueAttributes | GetQueueUrl</code>. For more information about these actions, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/acp-overview.html#PermissionTypes">Understanding Permissions</a> in the <i>Amazon SQS Developer Guide</i>.</p> <p>Specifying <code>SendMessage</code>, <code>DeleteMessage</code>, or <code>ChangeMessageVisibility</code> for the <code>ActionName.n</code> also grants permissions for the corresponding batch versions of those actions: <code>SendMessageBatch</code>, <code>DeleteMessageBatch</code>, and <code>ChangeMessageVisibilityBatch</code>.</p>',
      ],
    ],
    'AddPermissionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'AttributeMap' => [
      'base' => NULL,
      'refs' => [
        'CreateQueueRequest$Attributes' => '<p>A map of attributes with their corresponding values.</p> <p>The following lists the names, descriptions, and values of the special request parameters the <code>CreateQueue</code> action uses:</p> <p> <ul> <li> <code>DelaySeconds</code> - The time in seconds that the delivery of all messages in the queue will be delayed. An integer from 0 to 900 (15 minutes]. The default for this attribute is 0 (zero].</li> <li> <code>MaximumMessageSize</code> - The limit of how many bytes a message can contain before Amazon SQS rejects it. An integer from 1024 bytes (1 KiB] up to 262144 bytes (256 KiB]. The default for this attribute is 262144 (256 KiB].</li> <li> <code>MessageRetentionPeriod</code> - The number of seconds Amazon SQS retains a message. Integer representing seconds, from 60 (1 minute] to 1209600 (14 days]. The default for this attribute is 345600 (4 days].</li> <li> <code>Policy</code> - The queue\'s policy. A valid AWS policy. For more information about policy structure, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/PoliciesOverview.html">Overview of AWS IAM Policies</a> in the <i>Amazon IAM User Guide</i>.</li> <li> <code>ReceiveMessageWaitTimeSeconds</code> - The time for which a <a>ReceiveMessage</a> call will wait for a message to arrive. An integer from 0 to 20 (seconds]. The default for this attribute is 0. </li> <li> <code>VisibilityTimeout</code> - The visibility timeout for the queue. An integer from 0 to 43200 (12 hours]. The default for this attribute is 30. For more information about visibility timeout, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/AboutVT.html">Visibility Timeout</a> in the <i>Amazon SQS Developer Guide</i>.</li> </ul> </p>',
        'GetQueueAttributesResult$Attributes' => '<p>A map of attributes to the respective values.</p>',
        'Message$Attributes' => '<p><code>SenderId</code>, <code>SentTimestamp</code>, <code>ApproximateReceiveCount</code>, and/or <code>ApproximateFirstReceiveTimestamp</code>. <code>SentTimestamp</code> and <code>ApproximateFirstReceiveTimestamp</code> are each returned as an integer representing the <a href="http://en.wikipedia.org/wiki/Unix_time">epoch time</a> in milliseconds.</p>',
        'SetQueueAttributesRequest$Attributes' => '<p>A map of attributes to set.</p> <p>The following lists the names, descriptions, and values of the special request parameters the <code>SetQueueAttributes</code> action uses:</p> <p> <ul> <li> <code>DelaySeconds</code> - The time in seconds that the delivery of all messages in the queue will be delayed. An integer from 0 to 900 (15 minutes]. The default for this attribute is 0 (zero].</li> <li> <code>MaximumMessageSize</code> - The limit of how many bytes a message can contain before Amazon SQS rejects it. An integer from 1024 bytes (1 KiB] up to 262144 bytes (256 KiB]. The default for this attribute is 262144 (256 KiB].</li> <li> <code>MessageRetentionPeriod</code> - The number of seconds Amazon SQS retains a message. Integer representing seconds, from 60 (1 minute] to 1209600 (14 days]. The default for this attribute is 345600 (4 days].</li> <li> <code>Policy</code> - The queue\'s policy. A valid AWS policy. For more information about policy structure, see <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/PoliciesOverview.html">Overview of AWS IAM Policies</a> in the <i>Amazon IAM User Guide</i>.</li> <li> <code>ReceiveMessageWaitTimeSeconds</code> - The time for which a ReceiveMessage call will wait for a message to arrive. An integer from 0 to 20 (seconds]. The default for this attribute is 0. </li> <li> <code>VisibilityTimeout</code> - The visibility timeout for the queue. An integer from 0 to 43200 (12 hours]. The default for this attribute is 30. For more information about visibility timeout, see Visibility Timeout in the <i>Amazon SQS Developer Guide</i>.</li> <li> <code>RedrivePolicy</code> - The parameters for dead letter queue functionality of the source queue. For more information about RedrivePolicy and dead letter queues, see Using Amazon SQS Dead Letter Queues in the <i>Amazon SQS Developer Guide</i>.</li> </ul> </p>',
      ],
    ],
    'AttributeNameList' => [
      'base' => NULL,
      'refs' => [
        'GetQueueAttributesRequest$AttributeNames' => '<p>A list of attributes to retrieve information for. </p>',
        'ReceiveMessageRequest$AttributeNames' => '<p>A list of attributes that need to be returned along with each message. </p> <p> The following lists the names and descriptions of the attributes that can be returned: </p> <ul> <li> <code>All</code> - returns all values.</li> <li> <code>ApproximateFirstReceiveTimestamp</code> - returns the time when the message was first received from the queue (epoch time in milliseconds].</li> <li> <code>ApproximateReceiveCount</code> - returns the number of times a message has been received from the queue but not deleted.</li> <li> <code>SenderId</code> - returns the AWS account number (or the IP address, if anonymous access is allowed] of the sender.</li> <li> <code>SentTimestamp</code> - returns the time when the message was sent to the queue (epoch time in milliseconds].</li> </ul>',
      ],
    ],
    'BatchEntryIdsNotDistinct' => [
      'base' => '<p>Two or more batch entries have the same <code>Id</code> in the request.</p>',
      'refs' => [],
    ],
    'BatchRequestTooLong' => [
      'base' => '<p>The length of all the messages put together is more than the limit.</p>',
      'refs' => [],
    ],
    'BatchResultErrorEntry' => [
      'base' => '<p>This is used in the responses of batch API to give a detailed description of the result of an action on each entry in the request.</p>',
      'refs' => [
        'BatchResultErrorEntryList$member' => NULL,
      ],
    ],
    'BatchResultErrorEntryList' => [
      'base' => NULL,
      'refs' => [
        'ChangeMessageVisibilityBatchResult$Failed' => '<p>A list of <a>BatchResultErrorEntry</a> items.</p>',
        'DeleteMessageBatchResult$Failed' => '<p>A list of <a>BatchResultErrorEntry</a> items.</p>',
        'SendMessageBatchResult$Failed' => '<p>A list of <a>BatchResultErrorEntry</a> items with the error detail about each message that could not be enqueued.</p>',
      ],
    ],
    'Binary' => [
      'base' => NULL,
      'refs' => [
        'BinaryList$member' => NULL,
        'MessageAttributeValue$BinaryValue' => '<p>Binary type attributes can store any binary data, for example, compressed data, encrypted data, or images.</p>',
      ],
    ],
    'BinaryList' => [
      'base' => NULL,
      'refs' => [
        'MessageAttributeValue$BinaryListValues' => '<p>Not implemented. Reserved for future use.</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'BatchResultErrorEntry$SenderFault' => '<p>Whether the error happened due to the sender\'s fault.</p>',
      ],
    ],
    'ChangeMessageVisibilityBatchRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ChangeMessageVisibilityBatchRequestEntry' => [
      'base' => '<p>Encloses a receipt handle and an entry id for each message in <a>ChangeMessageVisibilityBatch</a>. </p> <important> <p>All of the following parameters are list parameters that must be prefixed with <code>ChangeMessageVisibilityBatchRequestEntry.n</code>, where <code>n</code> is an integer value starting with 1. For example, a parameter list for this action might look like this:</p> </important> <p><code>&amp;ChangeMessageVisibilityBatchRequestEntry.1.Id=change_visibility_msg_2</code></p> <p><code>&amp;ChangeMessageVisibilityBatchRequestEntry.1.ReceiptHandle=<replaceable>Your_Receipt_Handle</replaceable></code></p> <p><code>&amp;ChangeMessageVisibilityBatchRequestEntry.1.VisibilityTimeout=45</code></p>',
      'refs' => [
        'ChangeMessageVisibilityBatchRequestEntryList$member' => NULL,
      ],
    ],
    'ChangeMessageVisibilityBatchRequestEntryList' => [
      'base' => NULL,
      'refs' => [
        'ChangeMessageVisibilityBatchRequest$Entries' => '<p>A list of receipt handles of the messages for which the visibility timeout must be changed.</p>',
      ],
    ],
    'ChangeMessageVisibilityBatchResult' => [
      'base' => '<p> For each message in the batch, the response contains a <a>ChangeMessageVisibilityBatchResultEntry</a> tag if the message succeeds or a <a>BatchResultErrorEntry</a> tag if the message fails. </p>',
      'refs' => [],
    ],
    'ChangeMessageVisibilityBatchResultEntry' => [
      'base' => '<p>Encloses the id of an entry in <a>ChangeMessageVisibilityBatch</a>.</p>',
      'refs' => [
        'ChangeMessageVisibilityBatchResultEntryList$member' => NULL,
      ],
    ],
    'ChangeMessageVisibilityBatchResultEntryList' => [
      'base' => NULL,
      'refs' => [
        'ChangeMessageVisibilityBatchResult$Successful' => '<p>A list of <a>ChangeMessageVisibilityBatchResultEntry</a> items.</p>',
      ],
    ],
    'ChangeMessageVisibilityRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateQueueRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CreateQueueResult' => [
      'base' => '<p>Returns the QueueUrl element of the created queue.</p>',
      'refs' => [],
    ],
    'DeleteMessageBatchRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteMessageBatchRequestEntry' => [
      'base' => '<p>Encloses a receipt handle and an identifier for it.</p>',
      'refs' => [
        'DeleteMessageBatchRequestEntryList$member' => NULL,
      ],
    ],
    'DeleteMessageBatchRequestEntryList' => [
      'base' => NULL,
      'refs' => [
        'DeleteMessageBatchRequest$Entries' => '<p>A list of receipt handles for the messages to be deleted.</p>',
      ],
    ],
    'DeleteMessageBatchResult' => [
      'base' => '<p> For each message in the batch, the response contains a <a>DeleteMessageBatchResultEntry</a> tag if the message is deleted or a <a>BatchResultErrorEntry</a> tag if the message cannot be deleted. </p>',
      'refs' => [],
    ],
    'DeleteMessageBatchResultEntry' => [
      'base' => '<p>Encloses the id an entry in <a>DeleteMessageBatch</a>.</p>',
      'refs' => [
        'DeleteMessageBatchResultEntryList$member' => NULL,
      ],
    ],
    'DeleteMessageBatchResultEntryList' => [
      'base' => NULL,
      'refs' => [
        'DeleteMessageBatchResult$Successful' => '<p>A list of <a>DeleteMessageBatchResultEntry</a> items.</p>',
      ],
    ],
    'DeleteMessageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeleteQueueRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'EmptyBatchRequest' => [
      'base' => '<p>Batch request does not contain an entry.</p>',
      'refs' => [],
    ],
    'GetQueueAttributesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetQueueAttributesResult' => [
      'base' => 'A list of returned queue attributes.',
      'refs' => [],
    ],
    'GetQueueUrlRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetQueueUrlResult' => [
      'base' => '<p>For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/UnderstandingResponses.html">Responses</a> in the <i>Amazon SQS Developer Guide</i>.</p>',
      'refs' => [],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'ChangeMessageVisibilityBatchRequestEntry$VisibilityTimeout' => '<p>The new value (in seconds] for the message\'s visibility timeout.</p>',
        'ChangeMessageVisibilityRequest$VisibilityTimeout' => '<p>The new value (in seconds - from 0 to 43200 - maximum 12 hours] for the message\'s visibility timeout.</p>',
        'ReceiveMessageRequest$MaxNumberOfMessages' => '<p>The maximum number of messages to return. Amazon SQS never returns more messages than this value but may return fewer. Values can be from 1 to 10. Default is 1.</p> <p>All of the messages are not necessarily returned.</p>',
        'ReceiveMessageRequest$VisibilityTimeout' => '<p>The duration (in seconds] that the received messages are hidden from subsequent retrieve requests after being retrieved by a <code>ReceiveMessage</code> request.</p>',
        'ReceiveMessageRequest$WaitTimeSeconds' => '<p>The duration (in seconds] for which the call will wait for a message to arrive in the queue before returning. If a message is available, the call will return sooner than WaitTimeSeconds.</p>',
        'SendMessageBatchRequestEntry$DelaySeconds' => '<p>The number of seconds for which the message has to be delayed.</p>',
        'SendMessageRequest$DelaySeconds' => '<p> The number of seconds (0 to 900 - 15 minutes] to delay a specific message. Messages with a positive <code>DelaySeconds</code> value become available for processing after the delay time is finished. If you don\'t specify a value, the default value for the queue applies. </p>',
      ],
    ],
    'InvalidAttributeName' => [
      'base' => '<p>The attribute referred to does not exist.</p>',
      'refs' => [],
    ],
    'InvalidBatchEntryId' => [
      'base' => '<p>The <code>Id</code> of a batch entry in a batch request does not abide by the specification.</p>',
      'refs' => [],
    ],
    'InvalidIdFormat' => [
      'base' => '<p>The receipt handle is not valid for the current version.</p>',
      'refs' => [],
    ],
    'InvalidMessageContents' => [
      'base' => '<p>The message contains characters outside the allowed set.</p>',
      'refs' => [],
    ],
    'ListDeadLetterSourceQueuesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListDeadLetterSourceQueuesResult' => [
      'base' => 'A list of your dead letter source queues.',
      'refs' => [],
    ],
    'ListQueuesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListQueuesResult' => [
      'base' => 'A list of your queues.',
      'refs' => [],
    ],
    'Message' => [
      'base' => '<p>An Amazon SQS message.</p>',
      'refs' => [
        'MessageList$member' => NULL,
      ],
    ],
    'MessageAttributeMap' => [
      'base' => NULL,
      'refs' => [
        'Message$MessageAttributes' => '<p>Each message attribute consists of a Name, Type, and Value. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSMessageAttributes.html#SQSMessageAttributesNTV">Message Attribute Items</a>.</p>',
        'SendMessageBatchRequestEntry$MessageAttributes' => '<p>Each message attribute consists of a Name, Type, and Value. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSMessageAttributes.html#SQSMessageAttributesNTV">Message Attribute Items</a>.</p>',
        'SendMessageRequest$MessageAttributes' => '<p>Each message attribute consists of a Name, Type, and Value. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSMessageAttributes.html#SQSMessageAttributesNTV">Message Attribute Items</a>.</p>',
      ],
    ],
    'MessageAttributeName' => [
      'base' => NULL,
      'refs' => [
        'MessageAttributeNameList$member' => NULL,
      ],
    ],
    'MessageAttributeNameList' => [
      'base' => NULL,
      'refs' => [
        'ReceiveMessageRequest$MessageAttributeNames' => '<p>The name of the message attribute, where <i>N</i> is the index. The message attribute name can contain the following characters: A-Z, a-z, 0-9, underscore (_], hyphen (-], and period (.]. The name must not start or end with a period, and it should not have successive periods. The name is case sensitive and must be unique among all attribute names for the message. The name can be up to 256 characters long. The name cannot start with "AWS." or "Amazon." (or any variations in casing], because these prefixes are reserved for use by Amazon Web Services.</p> <p>When using <code>ReceiveMessage</code>, you can send a list of attribute names to receive, or you can return all of the attributes by specifying "All" or ".*" in your request. You can also use "foo.*" to return all message attributes starting with the "foo" prefix.</p>',
      ],
    ],
    'MessageAttributeValue' => [
      'base' => '<p>The user-specified message attribute value. For string data types, the value attribute has the same restrictions on the content as the message body. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/APIReference/API_SendMessage.html">SendMessage</a>.</p> <p>Name, type, and value must not be empty or null. In addition, the message body should not be empty or null. All parts of the message attribute, including name, type, and value, are included in the message size restriction, which is currently 256 KB (262,144 bytes].</p>',
      'refs' => [
        'MessageAttributeMap$value' => NULL,
      ],
    ],
    'MessageList' => [
      'base' => NULL,
      'refs' => [
        'ReceiveMessageResult$Messages' => '<p>A list of messages.</p>',
      ],
    ],
    'MessageNotInflight' => [
      'base' => '<p>The message referred to is not in flight.</p>',
      'refs' => [],
    ],
    'OverLimit' => [
      'base' => '<p>The action that you requested would violate a limit. For example, ReceiveMessage returns this error if the maximum number of messages inflight has already been reached. <a>AddPermission</a> returns this error if the maximum number of permissions for the queue has already been reached. </p>',
      'refs' => [],
    ],
    'PurgeQueueInProgress' => [
      'base' => '<p>Indicates that the specified queue previously received a <code>PurgeQueue</code> request within the last 60 seconds, the time it can take to delete the messages in the queue.</p>',
      'refs' => [],
    ],
    'PurgeQueueRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'QueueAttributeName' => [
      'base' => NULL,
      'refs' => [
        'AttributeMap$key' => '<p>The name of a queue attribute.</p>',
        'AttributeNameList$member' => NULL,
      ],
    ],
    'QueueDeletedRecently' => [
      'base' => '<p>You must wait 60 seconds after deleting a queue before you can create another with the same name.</p>',
      'refs' => [],
    ],
    'QueueDoesNotExist' => [
      'base' => '<p>The queue referred to does not exist.</p>',
      'refs' => [],
    ],
    'QueueNameExists' => [
      'base' => '<p>A queue already exists with this name. Amazon SQS returns this error only if the request includes attributes whose values differ from those of the existing queue.</p>',
      'refs' => [],
    ],
    'QueueUrlList' => [
      'base' => NULL,
      'refs' => [
        'ListDeadLetterSourceQueuesResult$queueUrls' => 'A list of source queue URLs that have the RedrivePolicy queue attribute configured with a dead letter queue.',
        'ListQueuesResult$QueueUrls' => '<p>A list of queue URLs, up to 1000 entries.</p>',
      ],
    ],
    'ReceiptHandleIsInvalid' => [
      'base' => '<p>The receipt handle provided is not valid.</p>',
      'refs' => [],
    ],
    'ReceiveMessageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReceiveMessageResult' => [
      'base' => 'A list of received messages.',
      'refs' => [],
    ],
    'RemovePermissionRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'SendMessageBatchRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'SendMessageBatchRequestEntry' => [
      'base' => '<p>Contains the details of a single Amazon SQS message along with a <code>Id</code>. </p>',
      'refs' => [
        'SendMessageBatchRequestEntryList$member' => NULL,
      ],
    ],
    'SendMessageBatchRequestEntryList' => [
      'base' => NULL,
      'refs' => [
        'SendMessageBatchRequest$Entries' => '<p>A list of <a>SendMessageBatchRequestEntry</a> items.</p>',
      ],
    ],
    'SendMessageBatchResult' => [
      'base' => '<p>For each message in the batch, the response contains a <a>SendMessageBatchResultEntry</a> tag if the message succeeds or a <a>BatchResultErrorEntry</a> tag if the message fails.</p>',
      'refs' => [],
    ],
    'SendMessageBatchResultEntry' => [
      'base' => '<p>Encloses a message ID for successfully enqueued message of a <a>SendMessageBatch</a>.</p>',
      'refs' => [
        'SendMessageBatchResultEntryList$member' => NULL,
      ],
    ],
    'SendMessageBatchResultEntryList' => [
      'base' => NULL,
      'refs' => [
        'SendMessageBatchResult$Successful' => '<p>A list of <a>SendMessageBatchResultEntry</a> items.</p>',
      ],
    ],
    'SendMessageRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'SendMessageResult' => [
      'base' => '<p>The MD5OfMessageBody and MessageId elements.</p>',
      'refs' => [],
    ],
    'SetQueueAttributesRequest' => [
      'base' => NULL,
      'refs' => [],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'AWSAccountIdList$member' => NULL,
        'ActionNameList$member' => NULL,
        'AddPermissionRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'AddPermissionRequest$Label' => '<p>The unique identification of the permission you\'re setting (e.g., <code>AliceSendMessage</code>]. Constraints: Maximum 80 characters; alphanumeric characters, hyphens (-], and underscores (_] are allowed.</p>',
        'AttributeMap$value' => '<p>The value of a queue attribute.</p>',
        'BatchResultErrorEntry$Id' => '<p>The id of an entry in a batch request.</p>',
        'BatchResultErrorEntry$Code' => '<p>An error code representing why the action failed on this entry.</p>',
        'BatchResultErrorEntry$Message' => '<p>A message explaining why the action failed on this entry.</p>',
        'ChangeMessageVisibilityBatchRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'ChangeMessageVisibilityBatchRequestEntry$Id' => '<p>An identifier for this particular receipt handle. This is used to communicate the result. Note that the <code>Id</code>s of a batch request need to be unique within the request.</p>',
        'ChangeMessageVisibilityBatchRequestEntry$ReceiptHandle' => '<p>A receipt handle.</p>',
        'ChangeMessageVisibilityBatchResultEntry$Id' => '<p>Represents a message whose visibility timeout has been changed successfully.</p>',
        'ChangeMessageVisibilityRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'ChangeMessageVisibilityRequest$ReceiptHandle' => '<p>The receipt handle associated with the message whose visibility timeout should be changed. This parameter is returned by the <a>ReceiveMessage</a> action.</p>',
        'CreateQueueRequest$QueueName' => '<p>The name for the queue to be created.</p>',
        'CreateQueueResult$QueueUrl' => '<p>The URL for the created Amazon SQS queue.</p>',
        'DeleteMessageBatchRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'DeleteMessageBatchRequestEntry$Id' => '<p>An identifier for this particular receipt handle. This is used to communicate the result. Note that the <code>Id</code>s of a batch request need to be unique within the request.</p>',
        'DeleteMessageBatchRequestEntry$ReceiptHandle' => '<p>A receipt handle.</p>',
        'DeleteMessageBatchResultEntry$Id' => '<p>Represents a successfully deleted message.</p>',
        'DeleteMessageRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'DeleteMessageRequest$ReceiptHandle' => '<p>The receipt handle associated with the message to delete.</p>',
        'DeleteQueueRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'GetQueueAttributesRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'GetQueueUrlRequest$QueueName' => '<p>The name of the queue whose URL must be fetched. Maximum 80 characters; alphanumeric characters, hyphens (-], and underscores (_] are allowed.</p>',
        'GetQueueUrlRequest$QueueOwnerAWSAccountId' => '<p>The AWS account ID of the account that created the queue.</p>',
        'GetQueueUrlResult$QueueUrl' => '<p>The URL for the queue.</p>',
        'ListDeadLetterSourceQueuesRequest$QueueUrl' => 'The queue URL of a dead letter queue.',
        'ListQueuesRequest$QueueNamePrefix' => '<p>A string to use for filtering the list results. Only those queues whose name begins with the specified string are returned.</p>',
        'Message$MessageId' => '<p>A unique identifier for the message. Message IDs are considered unique across all AWS accounts for an extended period of time.</p>',
        'Message$ReceiptHandle' => '<p>An identifier associated with the act of receiving the message. A new receipt handle is returned every time you receive a message. When deleting a message, you provide the last received receipt handle to delete the message.</p>',
        'Message$MD5OfBody' => '<p>An MD5 digest of the non-URL-encoded message body string.</p>',
        'Message$Body' => '<p>The message\'s contents (not URL-encoded].</p>',
        'Message$MD5OfMessageAttributes' => '<p>An MD5 digest of the non-URL-encoded message attribute string. This can be used to verify that Amazon SQS received the message correctly. Amazon SQS first URL decodes the message before creating the MD5 digest. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>.</p>',
        'MessageAttributeMap$key' => NULL,
        'MessageAttributeValue$StringValue' => '<p>Strings are Unicode with UTF8 binary encoding. For a list of code values, see <a href="http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters">http://en.wikipedia.org/wiki/ASCII#ASCII_printable_characters</a>.</p>',
        'MessageAttributeValue$DataType' => '<p>Amazon SQS supports the following logical data types: String, Number, and Binary. In addition, you can append your own custom labels. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/SQSMessageAttributes.html#SQSMessageAttributes.DataTypes">Message Attribute Data Types</a>.</p>',
        'PurgeQueueRequest$QueueUrl' => '<p>The queue URL of the queue to delete the messages from when using the <code>PurgeQueue</code> API.</p>',
        'QueueUrlList$member' => NULL,
        'ReceiveMessageRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'RemovePermissionRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'RemovePermissionRequest$Label' => '<p>The identification of the permission to remove. This is the label added with the <a>AddPermission</a> action.</p>',
        'SendMessageBatchRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'SendMessageBatchRequestEntry$Id' => '<p>An identifier for the message in this batch. This is used to communicate the result. Note that the <code>Id</code>s of a batch request need to be unique within the request.</p>',
        'SendMessageBatchRequestEntry$MessageBody' => '<p>Body of the message.</p>',
        'SendMessageBatchResultEntry$Id' => '<p>An identifier for the message in this batch.</p>',
        'SendMessageBatchResultEntry$MessageId' => '<p>An identifier for the message.</p>',
        'SendMessageBatchResultEntry$MD5OfMessageBody' => '<p>An MD5 digest of the non-URL-encoded message body string. This can be used to verify that Amazon SQS received the message correctly. Amazon SQS first URL decodes the message before creating the MD5 digest. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>.</p>',
        'SendMessageBatchResultEntry$MD5OfMessageAttributes' => '<p>An MD5 digest of the non-URL-encoded message attribute string. This can be used to verify that Amazon SQS received the message batch correctly. Amazon SQS first URL decodes the message before creating the MD5 digest. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>.</p>',
        'SendMessageRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'SendMessageRequest$MessageBody' => '<p>The message to send. String maximum 256 KB in size. For a list of allowed characters, see the preceding important note.</p>',
        'SendMessageResult$MD5OfMessageBody' => '<p>An MD5 digest of the non-URL-encoded message body string. This can be used to verify that Amazon SQS received the message correctly. Amazon SQS first URL decodes the message before creating the MD5 digest. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>.</p>',
        'SendMessageResult$MD5OfMessageAttributes' => '<p>An MD5 digest of the non-URL-encoded message attribute string. This can be used to verify that Amazon SQS received the message correctly. Amazon SQS first URL decodes the message before creating the MD5 digest. For information about MD5, go to <a href="http://www.faqs.org/rfcs/rfc1321.html">http://www.faqs.org/rfcs/rfc1321.html</a>.</p>',
        'SendMessageResult$MessageId' => '<p> An element containing the message ID of the message sent to the queue. For more information, see <a href="http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/ImportantIdentifiers.html">Queue and Message Identifiers</a> in the <i>Amazon SQS Developer Guide</i>. </p>',
        'SetQueueAttributesRequest$QueueUrl' => '<p>The URL of the Amazon SQS queue to take action on.</p>',
        'StringList$member' => NULL,
      ],
    ],
    'StringList' => [
      'base' => NULL,
      'refs' => [
        'MessageAttributeValue$StringListValues' => '<p>Not implemented. Reserved for future use.</p>',
      ],
    ],
    'TooManyEntriesInBatchRequest' => [
      'base' => '<p>Batch request contains more number of entries than permissible.</p>',
      'refs' => [],
    ],
    'UnsupportedOperation' => [
      'base' => '<p>Error code 400. Unsupported operation.</p>',
      'refs' => [],
    ],
  ],
];
