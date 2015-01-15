<?php return [
  'operations' => [
    'CountClosedWorkflowExecutions' => '<p>Returns the number of closed workflow executions within the given domain that meet the specified filtering criteria.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>tagFilter.tag</code>: String constraint. The key is <code>swf:tagFilter.tag</code>.</li> <li><code>typeFilter.name</code>: String constraint. The key is <code>swf:typeFilter.name</code>.</li> <li><code>typeFilter.version</code>: String constraint. The key is <code>swf:typeFilter.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'CountOpenWorkflowExecutions' => '<p>Returns the number of open workflow executions within the given domain that meet the specified filtering criteria.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>tagFilter.tag</code>: String constraint. The key is <code>swf:tagFilter.tag</code>.</li> <li><code>typeFilter.name</code>: String constraint. The key is <code>swf:typeFilter.name</code>.</li> <li><code>typeFilter.version</code>: String constraint. The key is <code>swf:typeFilter.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'CountPendingActivityTasks' => '<p>Returns the estimated number of activity tasks in the specified task list. The count returned is an approximation and is not guaranteed to be exact. If you specify a task list that no activity task was ever scheduled in then 0 will be returned.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the <code>taskList.name</code> parameter by using a <b>Condition</b> element with the <code>swf:taskList.name</code> key to allow the action to access only certain task lists.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'CountPendingDecisionTasks' => '<p>Returns the estimated number of decision tasks in the specified task list. The count returned is an approximation and is not guaranteed to be exact. If you specify a task list that no decision task was ever scheduled in then 0 will be returned.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the <code>taskList.name</code> parameter by using a <b>Condition</b> element with the <code>swf:taskList.name</code> key to allow the action to access only certain task lists.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DeprecateActivityType' => '<p>Deprecates the specified <i>activity type</i>. After an activity type has been deprecated, you cannot create new tasks of that activity type. Tasks of this type that were scheduled before the type was deprecated will continue to run.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>activityType.name</code>: String constraint. The key is <code>swf:activityType.name</code>.</li> <li><code>activityType.version</code>: String constraint. The key is <code>swf:activityType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DeprecateDomain' => '<p>Deprecates the specified domain. After a domain has been deprecated it cannot be used to create new workflow executions or register new types. However, you can still use visibility actions on this domain. Deprecating a domain also deprecates all activity and workflow types registered in the domain. Executions that were started before the domain was deprecated will continue to run.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DeprecateWorkflowType' => '<p>Deprecates the specified <i>workflow type</i>. After a workflow type has been deprecated, you cannot create new executions of that type. Executions that were started before the type was deprecated will continue to run. A deprecated workflow type may still be used when calling visibility actions.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>workflowType.name</code>: String constraint. The key is <code>swf:workflowType.name</code>.</li> <li><code>workflowType.version</code>: String constraint. The key is <code>swf:workflowType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DescribeActivityType' => '<p>Returns information about the specified activity type. This includes configuration settings provided when the type was registered and other general information about the type.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>activityType.name</code>: String constraint. The key is <code>swf:activityType.name</code>.</li> <li><code>activityType.version</code>: String constraint. The key is <code>swf:activityType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DescribeDomain' => '<p>Returns information about the specified domain, including description and status.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DescribeWorkflowExecution' => '<p>Returns information about the specified workflow execution including its type and some statistics.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'DescribeWorkflowType' => '<p>Returns information about the specified <i>workflow type</i>. This includes configuration settings specified when the type was registered and other information such as creation date, current status, etc.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>workflowType.name</code>: String constraint. The key is <code>swf:workflowType.name</code>.</li> <li><code>workflowType.version</code>: String constraint. The key is <code>swf:workflowType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'GetWorkflowExecutionHistory' => '<p>Returns the history of the specified workflow execution. The results may be split into multiple pages. To retrieve subsequent pages, make the call again using the <code>nextPageToken</code> returned by the initial call.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'ListActivityTypes' => '<p>Returns information about all activities registered in the specified domain that match the specified name and registration status. The result includes information like creation date, current status of the activity, etc. The results may be split into multiple pages. To retrieve subsequent pages, make the call again using the <code>nextPageToken</code> returned by the initial call.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'ListClosedWorkflowExecutions' => '<p>Returns a list of closed workflow executions in the specified domain that meet the filtering criteria. The results may be split into multiple pages. To retrieve subsequent pages, make the call again using the nextPageToken returned by the initial call.</p> <note>This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>tagFilter.tag</code>: String constraint. The key is <code>swf:tagFilter.tag</code>.</li> <li><code>typeFilter.name</code>: String constraint. The key is <code>swf:typeFilter.name</code>.</li> <li><code>typeFilter.version</code>: String constraint. The key is <code>swf:typeFilter.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'ListDomains' => '<p>Returns the list of domains registered in the account. The results may be split into multiple pages. To retrieve subsequent pages, make the call again using the nextPageToken returned by the initial call.</p> <note> This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains. The element must be set to <code>arn:aws:swf::AccountID:domain/*</code>, where <i>AccountID</i> is the account ID, with no dashes.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'ListOpenWorkflowExecutions' => '<p>Returns a list of open workflow executions in the specified domain that meet the filtering criteria. The results may be split into multiple pages. To retrieve subsequent pages, make the call again using the nextPageToken returned by the initial call.</p> <note> This operation is eventually consistent. The results are best effort and may not exactly reflect recent updates and changes.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>tagFilter.tag</code>: String constraint. The key is <code>swf:tagFilter.tag</code>.</li> <li><code>typeFilter.name</code>: String constraint. The key is <code>swf:typeFilter.name</code>.</li> <li><code>typeFilter.version</code>: String constraint. The key is <code>swf:typeFilter.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'ListWorkflowTypes' => '<p>Returns information about workflow types in the specified domain. The results may be split into multiple pages that can be retrieved by making the call repeatedly.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'PollForActivityTask' => '<p>Used by workers to get an <a>ActivityTask</a> from the specified activity <code>taskList</code>. This initiates a long poll, where the service holds the HTTP connection open and responds as soon as a task becomes available. The maximum time the service holds on to the request before responding is 60 seconds. If no task is available within 60 seconds, the poll will return an empty result. An empty result, in this context, means that an ActivityTask is returned, but that the value of taskToken is an empty string. If a task is returned, the worker should use its type to identify and process it correctly.</p> <important>Workers should set their client side socket timeout to at least 70 seconds (10 seconds higher than the maximum time service may hold the poll request].</important> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the <code>taskList.name</code> parameter by using a <b>Condition</b> element with the <code>swf:taskList.name</code> key to allow the action to access only certain task lists.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'PollForDecisionTask' => '<p>Used by deciders to get a <a>DecisionTask</a> from the specified decision <code>taskList</code>. A decision task may be returned for any open workflow execution that is using the specified task list. The task includes a paginated view of the history of the workflow execution. The decider should use the workflow type and the history to determine how to properly handle the task.</p> <p>This action initiates a long poll, where the service holds the HTTP connection open and responds as soon a task becomes available. If no decision task is available in the specified task list before the timeout of 60 seconds expires, an empty result is returned. An empty result, in this context, means that a DecisionTask is returned, but that the value of taskToken is an empty string.</p> <important>Deciders should set their client side socket timeout to at least 70 seconds (10 seconds higher than the timeout].</important> <important>Because the number of workflow history events for a single workflow execution might be very large, the result returned might be split up across a number of pages. To retrieve subsequent pages, make additional calls to <code>PollForDecisionTask</code> using the <code>nextPageToken</code> returned by the initial call. Note that you do <b>not</b> call <code>GetWorkflowExecutionHistory</code> with this <code>nextPageToken</code>. Instead, call <code>PollForDecisionTask</code> again.</important> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the <code>taskList.name</code> parameter by using a <b>Condition</b> element with the <code>swf:taskList.name</code> key to allow the action to access only certain task lists.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RecordActivityTaskHeartbeat' => '<p>Used by activity workers to report to the service that the <a>ActivityTask</a> represented by the specified <code>taskToken</code> is still making progress. The worker can also (optionally] specify details of the progress, for example percent complete, using the <code>details</code> parameter. This action can also be used by the worker as a mechanism to check if cancellation is being requested for the activity task. If a cancellation is being attempted for the specified task, then the boolean <code>cancelRequested</code> flag returned by the service is set to <code>true</code>.</p> <p>This action resets the <code>taskHeartbeatTimeout</code> clock. The <code>taskHeartbeatTimeout</code> is specified in <a>RegisterActivityType</a>.</p> <p>This action does not in itself create an event in the workflow execution history. However, if the task times out, the workflow execution history will contain a <code>ActivityTaskTimedOut</code> event that contains the information from the last heartbeat generated by the activity worker.</p> <note>The <code>taskStartToCloseTimeout</code> of an activity type is the maximum duration of an activity task, regardless of the number of <a>RecordActivityTaskHeartbeat</a> requests received. The <code>taskStartToCloseTimeout</code> is also specified in <a>RegisterActivityType</a>.</note> <note>This operation is only useful for long-lived activities to report liveliness of the task and to determine if a cancellation is being attempted. </note> <important>If the <code>cancelRequested</code> flag returns <code>true</code>, a cancellation is being attempted. If the worker can cancel the activity, it should respond with <a>RespondActivityTaskCanceled</a>. Otherwise, it should ignore the cancellation request.</important> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RegisterActivityType' => '<p>Registers a new <i>activity type</i> along with its configuration settings in the specified domain.</p> <important>A <code>TypeAlreadyExists</code> fault is returned if the type already exists in the domain. You cannot change any configuration settings of the type after its registration, and it must be registered as a new version.</important> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li> <code>defaultTaskList.name</code>: String constraint. The key is <code>swf:defaultTaskList.name</code>.</li> <li> <code>name</code>: String constraint. The key is <code>swf:name</code>.</li> <li> <code>version</code>: String constraint. The key is <code>swf:version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RegisterDomain' => '<p>Registers a new domain.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>You cannot use an IAM policy to control domain access for this action. The name of the domain being registered is available as the resource of this action.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RegisterWorkflowType' => '<p>Registers a new <i>workflow type</i> and its configuration settings in the specified domain.</p> <p>The retention period for the workflow history is set by the <a>RegisterDomain</a> action.</p> <important>If the type already exists, then a <code>TypeAlreadyExists</code> fault is returned. You cannot change the configuration settings of a workflow type once it is registered and it must be registered as a new version.</important> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li> <code>defaultTaskList.name</code>: String constraint. The key is <code>swf:defaultTaskList.name</code>.</li> <li> <code>name</code>: String constraint. The key is <code>swf:name</code>.</li> <li> <code>version</code>: String constraint. The key is <code>swf:version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RequestCancelWorkflowExecution' => '<p>Records a <code>WorkflowExecutionCancelRequested</code> event in the currently running workflow execution identified by the given domain, workflowId, and runId. This logically requests the cancellation of the workflow execution as a whole. It is up to the decider to take appropriate actions when it receives an execution history with this event.</p> <note>If the runId is not specified, the <code>WorkflowExecutionCancelRequested</code> event is recorded in the history of the current open workflow execution with the specified workflowId in the domain.</note> <note>Because this action allows the workflow to properly clean up and gracefully close, it should be used instead of <a>TerminateWorkflowExecution</a> when possible.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RespondActivityTaskCanceled' => '<p>Used by workers to tell the service that the <a>ActivityTask</a> identified by the <code>taskToken</code> was successfully canceled. Additional <code>details</code> can be optionally provided using the <code>details</code> argument.</p> <p>These <code>details</code> (if provided] appear in the <code>ActivityTaskCanceled</code> event added to the workflow history.</p> <important>Only use this operation if the <code>canceled</code> flag of a <a>RecordActivityTaskHeartbeat</a> request returns <code>true</code> and if the activity can be safely undone or abandoned.</important> <p>A task is considered open from the time that it is scheduled until it is closed. Therefore a task is reported as open while a worker is processing it. A task is closed after it has been specified in a call to <a>RespondActivityTaskCompleted</a>, RespondActivityTaskCanceled, <a>RespondActivityTaskFailed</a>, or the task has <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dg-basic.html#swf-dev-timeout-types">timed out</a>.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RespondActivityTaskCompleted' => '<p>Used by workers to tell the service that the <a>ActivityTask</a> identified by the <code>taskToken</code> completed successfully with a <code>result</code> (if provided]. The <code>result</code> appears in the <code>ActivityTaskCompleted</code> event in the workflow history.</p> <important> If the requested task does not complete successfully, use <a>RespondActivityTaskFailed</a> instead. If the worker finds that the task is canceled through the <code>canceled</code> flag returned by <a>RecordActivityTaskHeartbeat</a>, it should cancel the task, clean up and then call <a>RespondActivityTaskCanceled</a>.</important> <p>A task is considered open from the time that it is scheduled until it is closed. Therefore a task is reported as open while a worker is processing it. A task is closed after it has been specified in a call to RespondActivityTaskCompleted, <a>RespondActivityTaskCanceled</a>, <a>RespondActivityTaskFailed</a>, or the task has <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dg-basic.html#swf-dev-timeout-types">timed out</a>.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RespondActivityTaskFailed' => '<p>Used by workers to tell the service that the <a>ActivityTask</a> identified by the <code>taskToken</code> has failed with <code>reason</code> (if specified]. The <code>reason</code> and <code>details</code> appear in the <code>ActivityTaskFailed</code> event added to the workflow history.</p> <p>A task is considered open from the time that it is scheduled until it is closed. Therefore a task is reported as open while a worker is processing it. A task is closed after it has been specified in a call to <a>RespondActivityTaskCompleted</a>, <a>RespondActivityTaskCanceled</a>, RespondActivityTaskFailed, or the task has <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dg-basic.html#swf-dev-timeout-types">timed out</a>.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'RespondDecisionTaskCompleted' => '<p>Used by deciders to tell the service that the <a>DecisionTask</a> identified by the <code>taskToken</code> has successfully completed. The <code>decisions</code> argument specifies the list of decisions made while processing the task.</p> <p>A <code>DecisionTaskCompleted</code> event is added to the workflow history. The <code>executionContext</code> specified is attached to the event in the workflow execution history.</p> <p><b>Access Control</b></p> <p>If an IAM policy grants permission to use <code>RespondDecisionTaskCompleted</code>, it can express permissions for the list of decisions in the <code>decisions</code> parameter. Each of the decisions has one or more parameters, much like a regular API call. To allow for policies to be as readable as possible, you can express permissions on decisions as if they were actual API calls, including applying conditions to some parameters. For more information, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'SignalWorkflowExecution' => '<p>Records a <code>WorkflowExecutionSignaled</code> event in the workflow execution history and creates a decision task for the workflow execution identified by the given domain, workflowId and runId. The event is recorded with the specified user defined signalName and input (if provided].</p> <note> If a runId is not specified, then the <code>WorkflowExecutionSignaled</code> event is recorded in the history of the current open workflow with the matching workflowId in the domain.</note> <note> If the specified workflow execution is not open, this method fails with <code>UnknownResource</code>.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'StartWorkflowExecution' => '<p>Starts an execution of the workflow type in the specified domain using the provided <code>workflowId</code> and input data.</p> <p>This action returns the newly started workflow execution.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li> <code>tagList.member.0</code>: The key is <code>swf:tagList.member.0</code>.</li> <li> <code>tagList.member.1</code>: The key is <code>swf:tagList.member.1</code>.</li> <li> <code>tagList.member.2</code>: The key is <code>swf:tagList.member.2</code>.</li> <li> <code>tagList.member.3</code>: The key is <code>swf:tagList.member.3</code>.</li> <li> <code>tagList.member.4</code>: The key is <code>swf:tagList.member.4</code>.</li> <li><code>taskList</code>: String constraint. The key is <code>swf:taskList.name</code>.</li> <li><code>workflowType.name</code>: String constraint. The key is <code>swf:workflowType.name</code>.</li> <li><code>workflowType.version</code>: String constraint. The key is <code>swf:workflowType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
    'TerminateWorkflowExecution' => '<p>Records a <code>WorkflowExecutionTerminated</code> event and forces closure of the workflow execution identified by the given domain, runId, and workflowId. The child policy, registered with the workflow type or specified when starting this execution, is applied to any open child workflow executions of this workflow execution.</p> <important> If the identified workflow execution was in progress, it is terminated immediately.</important> <note> If a runId is not specified, then the <code>WorkflowExecutionTerminated</code> event is recorded in the history of the current open workflow with the matching workflowId in the domain.</note> <note> You should consider using <a>RequestCancelWorkflowExecution</a> action instead because it allows the workflow to gracefully close while <a>TerminateWorkflowExecution</a> does not.</note> <p><b>Access Control</b></p> <p>You can use IAM policies to control this action\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
  ],
  'service' => '<fullname>Amazon Simple Workflow Service</fullname> <p>The Amazon Simple Workflow Service (Amazon SWF] makes it easy to build applications that use Amazon\'s cloud to coordinate work across distributed components. In Amazon SWF, a <i>task</i> represents a logical unit of work that is performed by a component of your workflow. Coordinating tasks in a workflow involves managing intertask dependencies, scheduling, and concurrency in accordance with the logical flow of the application.</p> <p>Amazon SWF gives you full control over implementing tasks and coordinating them without worrying about underlying complexities such as tracking their progress and maintaining their state.</p> <p>This documentation serves as reference only. For a broader overview of the Amazon SWF programming model, see the <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/">Amazon SWF Developer Guide</a>.</p>',
  'shapes' => [
    'ActivityId' => [
      'base' => NULL,
      'refs' => [
        'ActivityTask$activityId' => '<p>The unique ID of the task.</p>',
        'ActivityTaskCancelRequestedEventAttributes$activityId' => '<p>The unique ID of the task.</p>',
        'ActivityTaskScheduledEventAttributes$activityId' => '<p>The unique id of the activity task.</p>',
        'RequestCancelActivityTaskDecisionAttributes$activityId' => '<p>The <code>activityId</code> of the activity task to be canceled.</p>',
        'RequestCancelActivityTaskFailedEventAttributes$activityId' => '<p>The activityId provided in the <code>RequestCancelActivityTask</code> decision that failed.</p>',
        'ScheduleActivityTaskDecisionAttributes$activityId' => '<p><b>Required.</b> The <code>activityId</code> of the activity task.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'ScheduleActivityTaskFailedEventAttributes$activityId' => '<p>The activityId provided in the <code>ScheduleActivityTask</code> decision that failed.</p>',
      ],
    ],
    'ActivityTask' => [
      'base' => '<p>Unit of work sent to an activity worker.</p>',
      'refs' => [],
    ],
    'ActivityTaskCancelRequestedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskCancelRequested</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskCancelRequestedEventAttributes' => '<p>If the event is of type <code>ActivityTaskcancelRequested</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskCanceledEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskCanceled</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskCanceledEventAttributes' => '<p>If the event is of type <code>ActivityTaskCanceled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskCompletedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskCompleted</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskCompletedEventAttributes' => '<p>If the event is of type <code>ActivityTaskCompleted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskFailedEventAttributes' => '<p>If the event is of type <code>ActivityTaskFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskScheduledEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskScheduled</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskScheduledEventAttributes' => '<p>If the event is of type <code>ActivityTaskScheduled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskStartedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskStarted</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskStartedEventAttributes' => '<p>If the event is of type <code>ActivityTaskStarted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskStatus' => [
      'base' => '<p>Status information about an activity task.</p>',
      'refs' => [],
    ],
    'ActivityTaskTimedOutEventAttributes' => [
      'base' => '<p>Provides details of the <code>ActivityTaskTimedOut</code> event.</p>',
      'refs' => [
        'HistoryEvent$activityTaskTimedOutEventAttributes' => '<p>If the event is of type <code>ActivityTaskTimedOut</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ActivityTaskTimeoutType' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskTimedOutEventAttributes$timeoutType' => '<p>The type of the timeout that caused this event.</p>',
      ],
    ],
    'ActivityType' => [
      'base' => '<p>Represents an activity type.</p>',
      'refs' => [
        'ActivityTask$activityType' => '<p>The type of this activity task.</p>',
        'ActivityTaskScheduledEventAttributes$activityType' => '<p>The type of the activity task.</p>',
        'ActivityTypeInfo$activityType' => '<p>The <a>ActivityType</a> type structure representing the activity type.</p>',
        'DeprecateActivityTypeInput$activityType' => '<p>The activity type to deprecate.</p>',
        'DescribeActivityTypeInput$activityType' => '<p>The activity type to get information about. Activity types are identified by the <code>name</code> and <code>version</code> that were supplied when the activity was registered.</p>',
        'ScheduleActivityTaskDecisionAttributes$activityType' => '<p><b>Required.</b> The type of the activity task to schedule.</p>',
        'ScheduleActivityTaskFailedEventAttributes$activityType' => '<p>The activity type provided in the <code>ScheduleActivityTask</code> decision that failed.</p>',
      ],
    ],
    'ActivityTypeConfiguration' => [
      'base' => '<p>Configuration settings registered with the activity type.</p>',
      'refs' => [
        'ActivityTypeDetail$configuration' => '<p>The configuration settings registered with the activity type.</p>',
      ],
    ],
    'ActivityTypeDetail' => [
      'base' => '<p>Detailed information about an activity type.</p>',
      'refs' => [],
    ],
    'ActivityTypeInfo' => [
      'base' => '<p>Detailed information about an activity type.</p>',
      'refs' => [
        'ActivityTypeDetail$typeInfo' => '<p>General information about the activity type.</p> <p>The status of activity type (returned in the ActivityTypeInfo structure] can be one of the following.</p> <ul> <li> <b>REGISTERED</b>: The type is registered and available. Workers supporting this type should be running. </li> <li> <b>DEPRECATED</b>: The type was deprecated using <a>DeprecateActivityType</a>, but is still in use. You should keep workers supporting this type running. You cannot create new tasks of this type. </li> </ul>',
        'ActivityTypeInfoList$member' => NULL,
      ],
    ],
    'ActivityTypeInfoList' => [
      'base' => NULL,
      'refs' => [
        'ActivityTypeInfos$typeInfos' => '<p>List of activity type information.</p>',
      ],
    ],
    'ActivityTypeInfos' => [
      'base' => '<p>Contains a paginated list of activity type information structures.</p>',
      'refs' => [],
    ],
    'CancelTimerDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>CancelTimer</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$cancelTimerDecisionAttributes' => '<p>Provides details of the <code>CancelTimer</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'CancelTimerFailedCause' => [
      'base' => NULL,
      'refs' => [
        'CancelTimerFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'CancelTimerFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>CancelTimerFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$cancelTimerFailedEventAttributes' => '<p>If the event is of type <code>CancelTimerFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'CancelWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>CancelWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$cancelWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>CancelWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'CancelWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'CancelWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'CancelWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>CancelWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$cancelWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>CancelWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'Canceled' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskStatus$cancelRequested' => '<p>Set to <code>true</code> if cancellation of the task is requested.</p>',
        'WorkflowExecutionInfo$cancelRequested' => '<p>Set to true if a cancellation is requested for this workflow execution.</p>',
      ],
    ],
    'ChildPolicy' => [
      'base' => NULL,
      'refs' => [
        'ContinueAsNewWorkflowExecutionDecisionAttributes$childPolicy' => '<p>If set, specifies the policy to use for the child workflow executions of the new execution if it is terminated by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout. This policy overrides the default child policy specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul> <note>A child policy for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default child policy was specified at registration time then a fault will be returned.</note>',
        'RegisterWorkflowTypeInput$defaultChildPolicy' => '<p>If set, specifies the default policy to use for the child workflow executions when a workflow execution of this type is terminated, by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'StartChildWorkflowExecutionDecisionAttributes$childPolicy' => '<p><i>Optional.</i> If set, specifies the policy to use for the child workflow executions if the workflow execution being started is terminated by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout. This policy overrides the default child policy specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul> <note>A child policy for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default child policy was specified at registration time then a fault will be returned.</note>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$childPolicy' => '<p>The policy to use for the child workflow executions if this execution gets terminated by explicitly calling the <a>TerminateWorkflowExecution</a> action or due to an expired timeout.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'StartWorkflowExecutionInput$childPolicy' => '<p>If set, specifies the policy to use for the child workflow executions of this workflow execution if it is terminated, by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout. This policy overrides the default child policy specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul> <note>A child policy for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default child policy was specified at registration time then a fault will be returned.</note>',
        'TerminateWorkflowExecutionInput$childPolicy' => '<p>If set, specifies the policy to use for the child workflow executions of the workflow execution being terminated. This policy overrides the child policy specified for the workflow execution at registration time or when starting the execution.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul> <note>A child policy for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default child policy was specified at registration time then a fault will be returned.</note>',
        'WorkflowExecutionConfiguration$childPolicy' => '<p>The policy to use for the child workflow executions if this workflow execution is terminated, by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'WorkflowExecutionContinuedAsNewEventAttributes$childPolicy' => '<p>The policy to use for the child workflow executions of the new execution if it is terminated by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'WorkflowExecutionStartedEventAttributes$childPolicy' => '<p>The policy to use for the child workflow executions if this workflow execution is terminated, by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'WorkflowExecutionTerminatedEventAttributes$childPolicy' => '<p>The policy used for the child workflow executions of this workflow execution.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'WorkflowExecutionTimedOutEventAttributes$childPolicy' => '<p>The policy used for the child workflow executions of this workflow execution.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
        'WorkflowTypeConfiguration$defaultChildPolicy' => '<p><i>Optional.</i> The default policy to use for the child workflow executions when a workflow execution of this type is terminated, by calling the <a>TerminateWorkflowExecution</a> action explicitly or due to an expired timeout. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The supported child policies are:</p> <ul> <li><b>TERMINATE:</b> the child executions will be terminated.</li> <li><b>REQUEST_CANCEL:</b> a request to cancel will be attempted for each child execution by recording a <code>WorkflowExecutionCancelRequested</code> event in its history. It is up to the decider to take appropriate actions when it receives an execution history with this event.</li> <li><b>ABANDON:</b> no action will be taken. The child executions will continue to run.</li> </ul>',
      ],
    ],
    'ChildWorkflowExecutionCanceledEventAttributes' => [
      'base' => '<p>Provide details of the <code>ChildWorkflowExecutionCanceled</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionCanceledEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionCanceled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ChildWorkflowExecutionCompletedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ChildWorkflowExecutionCompleted</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionCompletedEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionCompleted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ChildWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ChildWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ChildWorkflowExecutionStartedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ChildWorkflowExecutionStarted</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionStartedEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionStarted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ChildWorkflowExecutionTerminatedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ChildWorkflowExecutionTerminated</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionTerminatedEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionTerminated</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ChildWorkflowExecutionTimedOutEventAttributes' => [
      'base' => '<p>Provides details of the <code>ChildWorkflowExecutionTimedOut</code> event.</p>',
      'refs' => [
        'HistoryEvent$childWorkflowExecutionTimedOutEventAttributes' => '<p>If the event is of type <code>ChildWorkflowExecutionTimedOut</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'CloseStatus' => [
      'base' => NULL,
      'refs' => [
        'CloseStatusFilter$status' => '<p><b>Required.</b> The close status that must match the close status of an execution for it to meet the criteria of this filter.</p>',
        'WorkflowExecutionInfo$closeStatus' => '<p>If the execution status is closed then this specifies how the execution was closed:</p> <ul> <li> <code>COMPLETED</code>: the execution was successfully completed.</li> <li> <code>CANCELED</code>: the execution was canceled.Cancellation allows the implementation to gracefully clean up before the execution is closed.</li> <li> <code>TERMINATED</code>: the execution was force terminated.</li> <li> <code>FAILED</code>: the execution failed to complete.</li> <li> <code>TIMED_OUT</code>: the execution did not complete in the alloted time and was automatically timed out.</li> <li> <code>CONTINUED_AS_NEW</code>: the execution is logically continued. This means the current execution was completed and a new execution was started to carry on the workflow.</li> </ul>',
      ],
    ],
    'CloseStatusFilter' => [
      'base' => '<p>Used to filter the closed workflow executions in visibility APIs by their close status.</p>',
      'refs' => [
        'CountClosedWorkflowExecutionsInput$closeStatusFilter' => '<p>If specified, only workflow executions that match this close status are counted. This filter has an affect only if <code>executionStatus</code> is specified as <code>CLOSED</code>.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListClosedWorkflowExecutionsInput$closeStatusFilter' => '<p>If specified, only workflow executions that match this <i>close status</i> are listed. For example, if TERMINATED is specified, then only TERMINATED workflow executions are listed.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
      ],
    ],
    'CompleteWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>CompleteWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$completeWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>CompleteWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'CompleteWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'CompleteWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'CompleteWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>CompleteWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$completeWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>CompleteWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'ContinueAsNewWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>ContinueAsNewWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li> <code>tag</code>: <i>Optional.</i>. A tag used to identify the workflow execution</li> <li><code>taskList</code>: String constraint. The key is <code>swf:taskList.name</code>.</li> <li><code>workflowType.version</code>: String constraint. The key is <code>swf:workflowType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$continueAsNewWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>ContinueAsNewWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'ContinueAsNewWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'ContinueAsNewWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'ContinueAsNewWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ContinueAsNewWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$continueAsNewWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>ContinueAsNewWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'Count' => [
      'base' => NULL,
      'refs' => [
        'PendingTaskCount$count' => '<p>The number of tasks in the task list.</p>',
        'WorkflowExecutionCount$count' => '<p>The number of workflow executions.</p>',
        'WorkflowExecutionOpenCounts$openActivityTasks' => '<p>The count of activity tasks whose status is OPEN.</p>',
        'WorkflowExecutionOpenCounts$openTimers' => '<p>The count of timers started by this workflow execution that have not fired yet.</p>',
        'WorkflowExecutionOpenCounts$openChildWorkflowExecutions' => '<p>The count of child workflow executions whose status is OPEN.</p>',
      ],
    ],
    'CountClosedWorkflowExecutionsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CountOpenWorkflowExecutionsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CountPendingActivityTasksInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'CountPendingDecisionTasksInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Data' => [
      'base' => NULL,
      'refs' => [
        'ActivityTask$input' => '<p>The inputs provided when the activity task was scheduled. The form of the input is user defined and should be meaningful to the activity implementation.</p>',
        'ActivityTaskCanceledEventAttributes$details' => '<p>Details of the cancellation (if any].</p>',
        'ActivityTaskCompletedEventAttributes$result' => '<p>The results of the activity task (if any].</p>',
        'ActivityTaskFailedEventAttributes$details' => '<p>The details of the failure (if any].</p>',
        'ActivityTaskScheduledEventAttributes$input' => '<p>The input provided to the activity task.</p>',
        'ActivityTaskScheduledEventAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks. This data is not sent to the activity.</p>',
        'CancelWorkflowExecutionDecisionAttributes$details' => '<p><i>Optional.</i> details of the cancellation.</p>',
        'ChildWorkflowExecutionCanceledEventAttributes$details' => '<p>Details of the cancellation (if provided].</p>',
        'ChildWorkflowExecutionCompletedEventAttributes$result' => '<p>The result of the child workflow execution (if any].</p>',
        'ChildWorkflowExecutionFailedEventAttributes$details' => '<p>The details of the failure (if provided].</p>',
        'CompleteWorkflowExecutionDecisionAttributes$result' => '<p>The result of the workflow execution. The form of the result is implementation defined.</p>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$input' => '<p>The input provided to the new workflow execution.</p>',
        'DecisionTaskCompletedEventAttributes$executionContext' => '<p>User defined context for the workflow execution.</p>',
        'FailWorkflowExecutionDecisionAttributes$details' => '<p><i>Optional.</i> Details of the failure.</p>',
        'MarkerRecordedEventAttributes$details' => '<p>Details of the marker (if any].</p>',
        'RecordMarkerDecisionAttributes$details' => '<p><i>Optional.</i> details of the marker.</p>',
        'RequestCancelExternalWorkflowExecutionDecisionAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks.</p>',
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$control' => NULL,
        'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks.</p>',
        'RespondActivityTaskCanceledInput$details' => '<p><i>Optional.</i> Information about the cancellation.</p>',
        'RespondActivityTaskCompletedInput$result' => '<p>The result of the activity task. It is a free form string that is implementation specific.</p>',
        'RespondActivityTaskFailedInput$details' => '<p><i>Optional.</i> Detailed information about the failure.</p>',
        'RespondDecisionTaskCompletedInput$executionContext' => '<p>User defined context to add to workflow execution.</p>',
        'ScheduleActivityTaskDecisionAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks. This data is not sent to the activity.</p>',
        'ScheduleActivityTaskDecisionAttributes$input' => '<p>The input provided to the activity task.</p>',
        'SignalExternalWorkflowExecutionDecisionAttributes$input' => '<p><i>Optional.</i> Input data to be provided with the signal. The target workflow execution will use the signal name and input data to process the signal.</p>',
        'SignalExternalWorkflowExecutionDecisionAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent decision tasks.</p>',
        'SignalExternalWorkflowExecutionFailedEventAttributes$control' => NULL,
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$input' => '<p>Input provided to the signal (if any].</p>',
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$control' => '<p><i>Optional.</i> data attached to the event that can be used by the decider in subsequent decision tasks.</p>',
        'SignalWorkflowExecutionInput$input' => '<p>Data to attach to the <code>WorkflowExecutionSignaled</code> event in the target workflow execution\'s history.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks. This data is not sent to the child workflow execution.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$input' => '<p>The input to be provided to the workflow execution.</p>',
        'StartChildWorkflowExecutionFailedEventAttributes$control' => NULL,
        'StartChildWorkflowExecutionInitiatedEventAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent decision tasks. This data is not sent to the activity.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$input' => '<p>The inputs provided to the child workflow execution (if any].</p>',
        'StartTimerDecisionAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks.</p>',
        'StartWorkflowExecutionInput$input' => '<p>The input for the workflow execution. This is a free form string which should be meaningful to the workflow you are starting. This <code>input</code> is made available to the new workflow execution in the <code>WorkflowExecutionStarted</code> history event.</p>',
        'TerminateWorkflowExecutionInput$details' => '<p><i>Optional.</i> Details for terminating the workflow execution.</p>',
        'TimerStartedEventAttributes$control' => '<p><i>Optional.</i> Data attached to the event that can be used by the decider in subsequent workflow tasks.</p>',
        'WorkflowExecutionCanceledEventAttributes$details' => '<p>Details for the cancellation (if any].</p>',
        'WorkflowExecutionCompletedEventAttributes$result' => '<p>The result produced by the workflow execution upon successful completion.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$input' => '<p>The input provided to the new workflow execution.</p>',
        'WorkflowExecutionDetail$latestExecutionContext' => '<p>The latest executionContext provided by the decider for this workflow execution. A decider can provide an executionContext (a free-form string] when closing a decision task using <a>RespondDecisionTaskCompleted</a>.</p>',
        'WorkflowExecutionFailedEventAttributes$details' => '<p>The details of the failure (if any].</p>',
        'WorkflowExecutionSignaledEventAttributes$input' => '<p>Inputs provided with the signal (if any]. The decider can use the signal name and inputs to determine how to process the signal.</p>',
        'WorkflowExecutionStartedEventAttributes$input' => '<p>The input provided to the workflow execution (if any].</p>',
        'WorkflowExecutionTerminatedEventAttributes$details' => '<p>The details provided for the termination (if any].</p>',
      ],
    ],
    'Decision' => [
      'base' => '<p>Specifies a decision made by the decider. A decision can be one of these types:</p> <ul> <li> <b>CancelTimer</b>: cancels a previously started timer and records a <code>TimerCanceled</code> event in the history.</li> <li> <b>CancelWorkflowExecution</b>: closes the workflow execution and records a <code>WorkflowExecutionCanceled</code> event in the history.</li> <li> <b>CompleteWorkflowExecution</b>: closes the workflow execution and records a <code>WorkflowExecutionCompleted</code> event in the history .</li> <li> <b>ContinueAsNewWorkflowExecution</b>: closes the workflow execution and starts a new workflow execution of the same type using the same workflow id and a unique run Id. A <code>WorkflowExecutionContinuedAsNew</code> event is recorded in the history.</li> <li> <b>FailWorkflowExecution</b>: closes the workflow execution and records a <code>WorkflowExecutionFailed</code> event in the history.</li> <li> <b>RecordMarker</b>: records a <code>MarkerRecorded</code> event in the history. Markers can be used for adding custom information in the history for instance to let deciders know that they do not need to look at the history beyond the marker event.</li> <li> <b>RequestCancelActivityTask</b>: attempts to cancel a previously scheduled activity task. If the activity task was scheduled but has not been assigned to a worker, then it will be canceled. If the activity task was already assigned to a worker, then the worker will be informed that cancellation has been requested in the response to <a>RecordActivityTaskHeartbeat</a>.</li> <li> <b>RequestCancelExternalWorkflowExecution</b>: requests that a request be made to cancel the specified external workflow execution and records a <code>RequestCancelExternalWorkflowExecutionInitiated</code> event in the history.</li> <li> <b>ScheduleActivityTask</b>: schedules an activity task.</li> <li> <b>SignalExternalWorkflowExecution</b>: requests a signal to be delivered to the specified external workflow execution and records a <code>SignalExternalWorkflowExecutionInitiated</code> event in the history.</li> <li> <b>StartChildWorkflowExecution</b>: requests that a child workflow execution be started and records a <code>StartChildWorkflowExecutionInitiated</code> event in the history. The child workflow execution is a separate workflow execution with its own history.</li> <li> <b>StartTimer</b>: starts a timer for this workflow execution and records a <code>TimerStarted</code> event in the history. This timer will fire after the specified delay and record a <code>TimerFired</code> event.</li> </ul> <p><b>Access Control</b></p> <p>If you grant permission to use <code>RespondDecisionTaskCompleted</code>, you can use IAM policies to express permissions for the list of decisions returned by this action as if they were members of the API. Treating decisions as a pseudo API maintains a uniform conceptual model and helps keep policies readable. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p> <p><b>Decision Failure</b></p> <p>Decisions can fail for several reasons</p> <ul> <li>The ordering of decisions should follow a logical flow. Some decisions might not make sense in the current context of the workflow execution and will therefore fail.</li> <li>A limit on your account was reached.</li> <li>The decision lacks sufficient permissions.</li> </ul> <p>One of the following events might be added to the history to indicate an error. The event attribute\'s <b>cause</b> parameter indicates the cause. If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p> <ul> <li> <b>ScheduleActivityTaskFailed</b>: a ScheduleActivityTask decision failed. This could happen if the activity type specified in the decision is not registered, is in a deprecated state, or the decision is not properly configured.</li> <li> <b>RequestCancelActivityTaskFailed</b>: a RequestCancelActivityTask decision failed. This could happen if there is no open activity task with the specified activityId.</li> <li> <b>StartTimerFailed</b>: a StartTimer decision failed. This could happen if there is another open timer with the same timerId.</li> <li> <b>CancelTimerFailed</b>: a CancelTimer decision failed. This could happen if there is no open timer with the specified timerId.</li> <li> <b>StartChildWorkflowExecutionFailed</b>: a StartChildWorkflowExecution decision failed. This could happen if the workflow type specified is not registered, is deprecated, or the decision is not properly configured.</li> <li> <b>SignalExternalWorkflowExecutionFailed</b>: a SignalExternalWorkflowExecution decision failed. This could happen if the <code>workflowID</code> specified in the decision was incorrect.</li> <li> <b>RequestCancelExternalWorkflowExecutionFailed</b>: a RequestCancelExternalWorkflowExecution decision failed. This could happen if the <code>workflowID</code> specified in the decision was incorrect.</li> <li> <b>CancelWorkflowExecutionFailed</b>: a CancelWorkflowExecution decision failed. This could happen if there is an unhandled decision task pending in the workflow execution.</li> <li> <b>CompleteWorkflowExecutionFailed</b>: a CompleteWorkflowExecution decision failed. This could happen if there is an unhandled decision task pending in the workflow execution.</li> <li> <b>ContinueAsNewWorkflowExecutionFailed</b>: a ContinueAsNewWorkflowExecution decision failed. This could happen if there is an unhandled decision task pending in the workflow execution or the ContinueAsNewWorkflowExecution decision was not configured correctly.</li> <li> <b>FailWorkflowExecutionFailed</b>: a FailWorkflowExecution decision failed. This could happen if there is an unhandled decision task pending in the workflow execution.</li> </ul> <p>The preceding error events might occur due to an error in the decider logic, which might put the workflow execution in an unstable state The cause field in the event structure for the error event indicates the cause of the error.</p> <note>A workflow execution may be closed by the decider by returning one of the following decisions when completing a decision task: <code>CompleteWorkflowExecution</code>, <code>FailWorkflowExecution</code>, <code>CancelWorkflowExecution</code> and <code>ContinueAsNewWorkflowExecution</code>. An UnhandledDecision fault will be returned if a workflow closing decision is specified and a signal or activity event had been added to the history while the decision task was being performed by the decider. Unlike the above situations which are logic issues, this fault is always possible because of race conditions in a distributed system. The right action here is to call <a>RespondDecisionTaskCompleted</a> without any decisions. This would result in another decision task with these new events included in the history. The decider should handle the new events and may decide to close the workflow execution.</note> <p><b>How to Code a Decision</b></p> <p>You code a decision by first setting the decision type field to one of the above decision values, and then set the corresponding attributes field shown below:</p> <ul> <li> <a>ScheduleActivityTaskDecisionAttributes</a> </li> <li> <a>RequestCancelActivityTaskDecisionAttributes</a> </li> <li> <a>CompleteWorkflowExecutionDecisionAttributes</a> </li> <li> <a>FailWorkflowExecutionDecisionAttributes</a> </li> <li> <a>CancelWorkflowExecutionDecisionAttributes</a> </li> <li> <a>ContinueAsNewWorkflowExecutionDecisionAttributes</a> </li> <li> <a>RecordMarkerDecisionAttributes</a> </li> <li> <a>StartTimerDecisionAttributes</a> </li> <li> <a>CancelTimerDecisionAttributes</a> </li> <li> <a>SignalExternalWorkflowExecutionDecisionAttributes</a> </li> <li> <a>RequestCancelExternalWorkflowExecutionDecisionAttributes</a> </li> <li> <a>StartChildWorkflowExecutionDecisionAttributes</a> </li> </ul>',
      'refs' => [
        'DecisionList$member' => NULL,
      ],
    ],
    'DecisionList' => [
      'base' => NULL,
      'refs' => [
        'RespondDecisionTaskCompletedInput$decisions' => '<p>The list of decisions (possibly empty] made by the decider while processing this decision task. See the docs for the <a>Decision</a> structure for details.</p>',
      ],
    ],
    'DecisionTask' => [
      'base' => '<p>A structure that represents a decision task. Decision tasks are sent to deciders in order for them to make decisions.</p>',
      'refs' => [],
    ],
    'DecisionTaskCompletedEventAttributes' => [
      'base' => '<p>Provides details of the <code>DecisionTaskCompleted</code> event.</p>',
      'refs' => [
        'HistoryEvent$decisionTaskCompletedEventAttributes' => '<p>If the event is of type <code>DecisionTaskCompleted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'DecisionTaskScheduledEventAttributes' => [
      'base' => '<p>Provides details about the <code>DecisionTaskScheduled</code> event.</p>',
      'refs' => [
        'HistoryEvent$decisionTaskScheduledEventAttributes' => '<p>If the event is of type <code>DecisionTaskScheduled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'DecisionTaskStartedEventAttributes' => [
      'base' => '<p>Provides details of the <code>DecisionTaskStarted</code> event.</p>',
      'refs' => [
        'HistoryEvent$decisionTaskStartedEventAttributes' => '<p>If the event is of type <code>DecisionTaskStarted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'DecisionTaskTimedOutEventAttributes' => [
      'base' => '<p>Provides details of the <code>DecisionTaskTimedOut</code> event.</p>',
      'refs' => [
        'HistoryEvent$decisionTaskTimedOutEventAttributes' => '<p>If the event is of type <code>DecisionTaskTimedOut</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'DecisionTaskTimeoutType' => [
      'base' => NULL,
      'refs' => [
        'DecisionTaskTimedOutEventAttributes$timeoutType' => '<p>The type of timeout that expired before the decision task could be completed.</p>',
      ],
    ],
    'DecisionType' => [
      'base' => NULL,
      'refs' => [
        'Decision$decisionType' => '<p>Specifies the type of the decision.</p>',
      ],
    ],
    'DefaultUndefinedFault' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeprecateActivityTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeprecateDomainInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DeprecateWorkflowTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeActivityTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeDomainInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeWorkflowExecutionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'DescribeWorkflowTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'ActivityTypeInfo$description' => '<p>The description of the activity type provided in <a>RegisterActivityType</a>.</p>',
        'DomainInfo$description' => '<p>The description of the domain provided through <a>RegisterDomain</a>.</p>',
        'RegisterActivityTypeInput$description' => '<p>A textual description of the activity type.</p>',
        'RegisterDomainInput$description' => '<p>A text description of the domain.</p>',
        'RegisterWorkflowTypeInput$description' => '<p>Textual description of the workflow type.</p>',
        'WorkflowTypeInfo$description' => '<p>The description of the type registered through <a>RegisterWorkflowType</a>.</p>',
      ],
    ],
    'DomainAlreadyExistsFault' => [
      'base' => '<p>Returned if the specified domain already exists. You will get this fault even if the existing domain is in deprecated status.</p>',
      'refs' => [],
    ],
    'DomainConfiguration' => [
      'base' => '<p>Contains the configuration settings of a domain.</p>',
      'refs' => [
        'DomainDetail$configuration' => NULL,
      ],
    ],
    'DomainDeprecatedFault' => [
      'base' => '<p>Returned when the specified domain has been deprecated.</p>',
      'refs' => [],
    ],
    'DomainDetail' => [
      'base' => '<p>Contains details of a domain.</p>',
      'refs' => [],
    ],
    'DomainInfo' => [
      'base' => '<p>Contains general information about a domain.</p>',
      'refs' => [
        'DomainDetail$domainInfo' => NULL,
        'DomainInfoList$member' => NULL,
      ],
    ],
    'DomainInfoList' => [
      'base' => NULL,
      'refs' => [
        'DomainInfos$domainInfos' => '<p>A list of DomainInfo structures.</p>',
      ],
    ],
    'DomainInfos' => [
      'base' => '<p>Contains a paginated collection of DomainInfo structures.</p>',
      'refs' => [],
    ],
    'DomainName' => [
      'base' => NULL,
      'refs' => [
        'CountClosedWorkflowExecutionsInput$domain' => '<p>The name of the domain containing the workflow executions to count.</p>',
        'CountOpenWorkflowExecutionsInput$domain' => '<p>The name of the domain containing the workflow executions to count.</p>',
        'CountPendingActivityTasksInput$domain' => '<p>The name of the domain that contains the task list.</p>',
        'CountPendingDecisionTasksInput$domain' => '<p>The name of the domain that contains the task list.</p>',
        'DeprecateActivityTypeInput$domain' => '<p>The name of the domain in which the activity type is registered.</p>',
        'DeprecateDomainInput$name' => '<p>The name of the domain to deprecate.</p>',
        'DeprecateWorkflowTypeInput$domain' => '<p>The name of the domain in which the workflow type is registered.</p>',
        'DescribeActivityTypeInput$domain' => '<p>The name of the domain in which the activity type is registered.</p>',
        'DescribeDomainInput$name' => '<p>The name of the domain to describe.</p>',
        'DescribeWorkflowExecutionInput$domain' => '<p>The name of the domain containing the workflow execution.</p>',
        'DescribeWorkflowTypeInput$domain' => '<p>The name of the domain in which this workflow type is registered.</p>',
        'DomainInfo$name' => '<p>The name of the domain. This name is unique within the account.</p>',
        'GetWorkflowExecutionHistoryInput$domain' => '<p>The name of the domain containing the workflow execution.</p>',
        'ListActivityTypesInput$domain' => '<p>The name of the domain in which the activity types have been registered.</p>',
        'ListClosedWorkflowExecutionsInput$domain' => '<p>The name of the domain that contains the workflow executions to list.</p>',
        'ListOpenWorkflowExecutionsInput$domain' => '<p>The name of the domain that contains the workflow executions to list.</p>',
        'ListWorkflowTypesInput$domain' => '<p>The name of the domain in which the workflow types have been registered.</p>',
        'PollForActivityTaskInput$domain' => '<p>The name of the domain that contains the task lists being polled.</p>',
        'PollForDecisionTaskInput$domain' => '<p>The name of the domain containing the task lists to poll.</p>',
        'RegisterActivityTypeInput$domain' => '<p>The name of the domain in which this activity is to be registered.</p>',
        'RegisterDomainInput$name' => '<p>Name of the domain to register. The name must be unique in the region that the domain is registered in.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'RegisterWorkflowTypeInput$domain' => '<p>The name of the domain in which to register the workflow type.</p>',
        'RequestCancelWorkflowExecutionInput$domain' => '<p>The name of the domain containing the workflow execution to cancel.</p>',
        'SignalWorkflowExecutionInput$domain' => '<p>The name of the domain containing the workflow execution to signal.</p>',
        'StartWorkflowExecutionInput$domain' => '<p>The name of the domain in which the workflow execution is created.</p>',
        'TerminateWorkflowExecutionInput$domain' => '<p>The domain of the workflow execution to terminate.</p>',
      ],
    ],
    'DurationInDays' => [
      'base' => NULL,
      'refs' => [
        'DomainConfiguration$workflowExecutionRetentionPeriodInDays' => '<p>The retention period for workflow executions in this domain.</p>',
        'RegisterDomainInput$workflowExecutionRetentionPeriodInDays' => '<p>The duration (in days] that records and histories of workflow executions on the domain should be kept by the service. After the retention period, the workflow execution is not available in the results of visibility calls.</p> <p>If you pass the value <code>NONE</code> or <code>0</code> (zero], then the workflow execution history will not be retained. As soon as the workflow execution completes, the execution record and its history are deleted.</p> <p>The maximum workflow execution retention period is 90 days. For more information about Amazon SWF service limits, see: <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dg-limits.html">Amazon SWF Service Limits</a> in the <i>Amazon SWF Developer Guide</i>.</p>',
      ],
    ],
    'DurationInSeconds' => [
      'base' => NULL,
      'refs' => [
        'StartTimerDecisionAttributes$startToFireTimeout' => '<p><b>Required.</b> The duration to wait before firing the timer.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0.</p>',
        'TimerStartedEventAttributes$startToFireTimeout' => '<p>The duration of time after which the timer will fire.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0.</p>',
        'WorkflowExecutionConfiguration$taskStartToCloseTimeout' => '<p>The maximum duration allowed for decision tasks for this workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowExecutionConfiguration$executionStartToCloseTimeout' => '<p>The total duration for this workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
      ],
    ],
    'DurationInSecondsOptional' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskScheduledEventAttributes$scheduleToStartTimeout' => '<p>The maximum amount of time the activity task can wait to be assigned to a worker.</p>',
        'ActivityTaskScheduledEventAttributes$scheduleToCloseTimeout' => '<p>The maximum amount of time for this activity task.</p>',
        'ActivityTaskScheduledEventAttributes$startToCloseTimeout' => '<p>The maximum amount of time a worker may take to process the activity task.</p>',
        'ActivityTaskScheduledEventAttributes$heartbeatTimeout' => '<p>The maximum time before which the worker processing this task must report progress by calling <a>RecordActivityTaskHeartbeat</a>. If the timeout is exceeded, the activity task is automatically timed out. If the worker subsequently attempts to record a heartbeat or return a result, it will be ignored.</p>',
        'ActivityTypeConfiguration$defaultTaskStartToCloseTimeout' => '<p><i>Optional.</i> The default maximum duration for tasks of an activity type specified when registering the activity type. You can override this default when scheduling a task through the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'ActivityTypeConfiguration$defaultTaskHeartbeatTimeout' => '<p><i>Optional.</i> The default maximum time, in seconds, before which a worker processing a task must report progress by calling <a>RecordActivityTaskHeartbeat</a>.</p> <p>You can specify this value only when <i>registering</i> an activity type. The registered default value can be overridden when you schedule a task through the <code>ScheduleActivityTask</code> <a>Decision</a>. If the activity worker subsequently attempts to record a heartbeat or returns a result, the activity worker receives an <code>UnknownResource</code> fault. In this case, Amazon SWF no longer considers the activity task to be valid; the activity worker should clean up the activity task.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'ActivityTypeConfiguration$defaultTaskScheduleToStartTimeout' => '<p><i>Optional.</i> The default maximum duration, specified when registering the activity type, that a task of an activity type can wait before being assigned to a worker. You can override this default when scheduling a task through the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'ActivityTypeConfiguration$defaultTaskScheduleToCloseTimeout' => '<p><i>Optional.</i> The default maximum duration, specified when registering the activity type, for tasks of this activity type. You can override this default when scheduling a task through the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$executionStartToCloseTimeout' => '<p>If set, specifies the total duration for this workflow execution. This overrides the <code>defaultExecutionStartToCloseTimeout</code> specified when registering the workflow type.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>An execution start-to-close timeout for this workflow execution must be specified either as a default for the workflow type or through this field. If neither this field is set nor a default execution start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$taskStartToCloseTimeout' => '<p>Specifies the maximum duration of decision tasks for the new workflow execution. This parameter overrides the <code>defaultTaskStartToCloseTimout</code> specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A task start-to-close timeout for the new workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default task start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'DecisionTaskScheduledEventAttributes$startToCloseTimeout' => '<p>The maximum duration for this decision task. The task is considered timed out if it does not completed within this duration.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterActivityTypeInput$defaultTaskStartToCloseTimeout' => '<p>If set, specifies the default maximum duration that a worker can take to process tasks of this activity type. This default can be overridden when scheduling an activity task using the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterActivityTypeInput$defaultTaskHeartbeatTimeout' => '<p>If set, specifies the default maximum time before which a worker processing a task of this type must report progress by calling <a>RecordActivityTaskHeartbeat</a>. If the timeout is exceeded, the activity task is automatically timed out. This default can be overridden when scheduling an activity task using the <code>ScheduleActivityTask</code> <a>Decision</a>. If the activity worker subsequently attempts to record a heartbeat or returns a result, the activity worker receives an <code>UnknownResource</code> fault. In this case, Amazon SWF no longer considers the activity task to be valid; the activity worker should clean up the activity task.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterActivityTypeInput$defaultTaskScheduleToStartTimeout' => '<p>If set, specifies the default maximum duration that a task of this activity type can wait before being assigned to a worker. This default can be overridden when scheduling an activity task using the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterActivityTypeInput$defaultTaskScheduleToCloseTimeout' => '<p>If set, specifies the default maximum duration for a task of this activity type. This default can be overridden when scheduling an activity task using the <code>ScheduleActivityTask</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterWorkflowTypeInput$defaultTaskStartToCloseTimeout' => '<p>If set, specifies the default maximum duration of decision tasks for this workflow type. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'RegisterWorkflowTypeInput$defaultExecutionStartToCloseTimeout' => '<p>If set, specifies the default maximum duration for executions of this workflow type. You can override this default when starting an execution through the <a>StartWorkflowExecution</a> Action or <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. Unlike some of the other timeout parameters in Amazon SWF, you cannot specify a value of "NONE" for <code>defaultExecutionStartToCloseTimeout</code>; there is a one-year max limit on the time that a workflow execution can run. Exceeding this limit will always cause the workflow execution to time out.</p>',
        'ScheduleActivityTaskDecisionAttributes$scheduleToCloseTimeout' => '<p>The maximum duration for this activity task.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A schedule-to-close timeout for this activity task must be specified either as a default for the activity type or through this field. If neither this field is set nor a default schedule-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'ScheduleActivityTaskDecisionAttributes$scheduleToStartTimeout' => '<p><i>Optional.</i> If set, specifies the maximum duration the activity task can wait to be assigned to a worker. This overrides the default schedule-to-start timeout specified when registering the activity type using <a>RegisterActivityType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A schedule-to-start timeout for this activity task must be specified either as a default for the activity type or through this field. If neither this field is set nor a default schedule-to-start timeout was specified at registration time then a fault will be returned.</note>',
        'ScheduleActivityTaskDecisionAttributes$startToCloseTimeout' => '<p>If set, specifies the maximum duration a worker may take to process this activity task. This overrides the default start-to-close timeout specified when registering the activity type using <a>RegisterActivityType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A start-to-close timeout for this activity task must be specified either as a default for the activity type or through this field. If neither this field is set nor a default start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'ScheduleActivityTaskDecisionAttributes$heartbeatTimeout' => '<p>If set, specifies the maximum time before which a worker processing a task of this type must report progress by calling <a>RecordActivityTaskHeartbeat</a>. If the timeout is exceeded, the activity task is automatically timed out. If the worker subsequently attempts to record a heartbeat or returns a result, it will be ignored. This overrides the default heartbeat timeout specified when registering the activity type using <a>RegisterActivityType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$executionStartToCloseTimeout' => '<p>The total duration for this workflow execution. This overrides the defaultExecutionStartToCloseTimeout specified when registering the workflow type.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>An execution start-to-close timeout for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default execution start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'StartChildWorkflowExecutionDecisionAttributes$taskStartToCloseTimeout' => '<p>Specifies the maximum duration of decision tasks for this workflow execution. This parameter overrides the <code>defaultTaskStartToCloseTimout</code> specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A task start-to-close timeout for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default task start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$executionStartToCloseTimeout' => '<p>The maximum duration for the child workflow execution. If the workflow execution is not closed within this duration, it will be timed out and force terminated.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$taskStartToCloseTimeout' => '<p>The maximum duration allowed for the decision tasks for this workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'StartWorkflowExecutionInput$executionStartToCloseTimeout' => '<p>The total duration for this workflow execution. This overrides the defaultExecutionStartToCloseTimeout specified when registering the workflow type.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. Exceeding this limit will cause the workflow execution to time out. Unlike some of the other timeout parameters in Amazon SWF, you cannot specify a value of "NONE" for this timeout; there is a one-year max limit on the time that a workflow execution can run.</p> <note> An execution start-to-close timeout must be specified either through this parameter or as a default when the workflow type is registered. If neither this parameter nor a default execution start-to-close timeout is specified, a fault is returned.</note>',
        'StartWorkflowExecutionInput$taskStartToCloseTimeout' => '<p>Specifies the maximum duration of decision tasks for this workflow execution. This parameter overrides the <code>defaultTaskStartToCloseTimout</code> specified when registering the workflow type using <a>RegisterWorkflowType</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p> <note>A task start-to-close timeout for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default task start-to-close timeout was specified at registration time then a fault will be returned.</note>',
        'WorkflowExecutionContinuedAsNewEventAttributes$executionStartToCloseTimeout' => '<p>The total duration allowed for the new workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$taskStartToCloseTimeout' => '<p>The maximum duration of decision tasks for the new workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowExecutionStartedEventAttributes$executionStartToCloseTimeout' => '<p>The maximum duration for this workflow execution.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowExecutionStartedEventAttributes$taskStartToCloseTimeout' => '<p>The maximum duration of decision tasks for this workflow type.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowTypeConfiguration$defaultTaskStartToCloseTimeout' => '<p><i>Optional.</i> The default maximum duration, specified when registering the workflow type, that a decision task for executions of this workflow type might take before returning completion or failure. If the task does not close in the specified time then the task is automatically timed out and rescheduled. If the decider eventually reports a completion or failure, it is ignored. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
        'WorkflowTypeConfiguration$defaultExecutionStartToCloseTimeout' => '<p><i>Optional.</i> The default maximum duration, specified when registering the workflow type, for executions of this workflow type. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p> <p>The duration is specified in seconds; an integer greater than or equal to 0. The value "NONE" can be used to specify unlimited duration.</p>',
      ],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'DefaultUndefinedFault$message' => NULL,
        'DomainAlreadyExistsFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'DomainDeprecatedFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'LimitExceededFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'OperationNotPermittedFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'TypeAlreadyExistsFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'TypeDeprecatedFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'UnknownResourceFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
        'WorkflowExecutionAlreadyStartedFault$message' => '<p>A description that may help with diagnosing the cause of the fault.</p>',
      ],
    ],
    'EventId' => [
      'base' => NULL,
      'refs' => [
        'ActivityTask$startedEventId' => '<p>The id of the <code>ActivityTaskStarted</code> event recorded in the history.</p>',
        'ActivityTaskCancelRequestedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RequestCancelActivityTask</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskCanceledEventAttributes$scheduledEventId' => '<p>The id of the <code>ActivityTaskScheduled</code> event that was recorded when this activity task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskCanceledEventAttributes$startedEventId' => '<p>The Id of the <code>ActivityTaskStarted</code> event recorded when this activity task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskCanceledEventAttributes$latestCancelRequestedEventId' => '<p>If set, contains the Id of the last <code>ActivityTaskCancelRequested</code> event recorded for this activity task. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskCompletedEventAttributes$scheduledEventId' => '<p>The id of the <code>ActivityTaskScheduled</code> event that was recorded when this activity task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskCompletedEventAttributes$startedEventId' => '<p>The Id of the <code>ActivityTaskStarted</code> event recorded when this activity task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskFailedEventAttributes$scheduledEventId' => '<p>The id of the <code>ActivityTaskScheduled</code> event that was recorded when this activity task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskFailedEventAttributes$startedEventId' => '<p>The Id of the <code>ActivityTaskStarted</code> event recorded when this activity task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskScheduledEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision that resulted in the scheduling of this activity task. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskStartedEventAttributes$scheduledEventId' => '<p>The id of the <code>ActivityTaskScheduled</code> event that was recorded when this activity task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskTimedOutEventAttributes$scheduledEventId' => '<p>The id of the <code>ActivityTaskScheduled</code> event that was recorded when this activity task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ActivityTaskTimedOutEventAttributes$startedEventId' => '<p>The Id of the <code>ActivityTaskStarted</code> event recorded when this activity task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'CancelTimerFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CancelTimer</code> decision to cancel this timer. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'CancelWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CancelWorkflowExecution</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionCanceledEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionCanceledEventAttributes$startedEventId' => '<p>The Id of the <code>ChildWorkflowExecutionStarted</code> event recorded when this child workflow execution was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionCompletedEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionCompletedEventAttributes$startedEventId' => '<p>The Id of the <code>ChildWorkflowExecutionStarted</code> event recorded when this child workflow execution was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionFailedEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionFailedEventAttributes$startedEventId' => '<p>The Id of the <code>ChildWorkflowExecutionStarted</code> event recorded when this child workflow execution was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionStartedEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionTerminatedEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionTerminatedEventAttributes$startedEventId' => '<p>The Id of the <code>ChildWorkflowExecutionStarted</code> event recorded when this child workflow execution was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionTimedOutEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ChildWorkflowExecutionTimedOutEventAttributes$startedEventId' => '<p>The Id of the <code>ChildWorkflowExecutionStarted</code> event recorded when this child workflow execution was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'CompleteWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CompleteWorkflowExecution</code> decision to complete this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ContinueAsNewWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>ContinueAsNewWorkflowExecution</code> decision that started this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'DecisionTask$startedEventId' => '<p>The id of the <code>DecisionTaskStarted</code> event recorded in the history.</p>',
        'DecisionTask$previousStartedEventId' => '<p>The id of the DecisionTaskStarted event of the previous decision task of this workflow execution that was processed by the decider. This can be used to determine the events in the history new since the last decision task received by the decider.</p>',
        'DecisionTaskCompletedEventAttributes$scheduledEventId' => '<p>The id of the <code>DecisionTaskScheduled</code> event that was recorded when this decision task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'DecisionTaskCompletedEventAttributes$startedEventId' => '<p>The Id of the <code>DecisionTaskStarted</code> event recorded when this decision task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'DecisionTaskStartedEventAttributes$scheduledEventId' => '<p>The id of the <code>DecisionTaskScheduled</code> event that was recorded when this decision task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'DecisionTaskTimedOutEventAttributes$scheduledEventId' => '<p>The id of the <code>DecisionTaskScheduled</code> event that was recorded when this decision task was scheduled. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'DecisionTaskTimedOutEventAttributes$startedEventId' => '<p>The Id of the <code>DecisionTaskStarted</code> event recorded when this decision task was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ExternalWorkflowExecutionCancelRequestedEventAttributes$initiatedEventId' => '<p>The id of the <code>RequestCancelExternalWorkflowExecutionInitiated</code> event corresponding to the <code>RequestCancelExternalWorkflowExecution</code> decision to cancel this external workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ExternalWorkflowExecutionSignaledEventAttributes$initiatedEventId' => '<p>The id of the <code>SignalExternalWorkflowExecutionInitiated</code> event corresponding to the <code>SignalExternalWorkflowExecution</code> decision to request this signal. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'FailWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>FailWorkflowExecution</code> decision to fail this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'HistoryEvent$eventId' => '<p>The system generated id of the event. This id uniquely identifies the event with in the workflow execution history.</p>',
        'MarkerRecordedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RecordMarker</code> decision that requested this marker. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'RecordMarkerFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RecordMarkerFailed</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'RequestCancelActivityTaskFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RequestCancelActivityTask</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$initiatedEventId' => '<p>The id of the <code>RequestCancelExternalWorkflowExecutionInitiated</code> event corresponding to the <code>RequestCancelExternalWorkflowExecution</code> decision to cancel this external workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RequestCancelExternalWorkflowExecution</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>RequestCancelExternalWorkflowExecution</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'ScheduleActivityTaskFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision that resulted in the scheduling of this activity task. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'SignalExternalWorkflowExecutionFailedEventAttributes$initiatedEventId' => '<p>The id of the <code>SignalExternalWorkflowExecutionInitiated</code> event corresponding to the <code>SignalExternalWorkflowExecution</code> decision to request this signal. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'SignalExternalWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>SignalExternalWorkflowExecution</code> decision for this signal. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>SignalExternalWorkflowExecution</code> decision for this signal. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'StartChildWorkflowExecutionFailedEventAttributes$initiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this child workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'StartChildWorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>StartChildWorkflowExecution</code> <a>Decision</a> to request this child workflow execution. This information can be useful for diagnosing problems by tracing back the cause of events.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>StartChildWorkflowExecution</code> <a>Decision</a> to request this child workflow execution. This information can be useful for diagnosing problems by tracing back the cause of events.</p>',
        'StartTimerFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>StartTimer</code> decision for this activity task. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'TimerCanceledEventAttributes$startedEventId' => '<p>The id of the <code>TimerStarted</code> event that was recorded when this timer was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'TimerCanceledEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CancelTimer</code> decision to cancel this timer. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'TimerFiredEventAttributes$startedEventId' => '<p>The id of the <code>TimerStarted</code> event that was recorded when this timer was started. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'TimerStartedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>StartTimer</code> decision for this activity task. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionCancelRequestedEventAttributes$externalInitiatedEventId' => '<p>The id of the <code>RequestCancelExternalWorkflowExecutionInitiated</code> event corresponding to the <code>RequestCancelExternalWorkflowExecution</code> decision to cancel this workflow execution.The source event with this Id can be found in the history of the source workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionCanceledEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CancelWorkflowExecution</code> decision for this cancellation request. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionCompletedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>CompleteWorkflowExecution</code> decision to complete this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>ContinueAsNewWorkflowExecution</code> decision that started this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionFailedEventAttributes$decisionTaskCompletedEventId' => '<p>The id of the <code>DecisionTaskCompleted</code> event corresponding to the decision task that resulted in the <code>FailWorkflowExecution</code> decision to fail this execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
        'WorkflowExecutionSignaledEventAttributes$externalInitiatedEventId' => '<p>The id of the <code>SignalExternalWorkflowExecutionInitiated</code> event corresponding to the <code>SignalExternalWorkflow</code> decision to signal this workflow execution.The source event with this Id can be found in the history of the source workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event. This field is set only if the signal was initiated by another workflow execution.</p>',
        'WorkflowExecutionStartedEventAttributes$parentInitiatedEventId' => '<p>The id of the <code>StartChildWorkflowExecutionInitiated</code> event corresponding to the <code>StartChildWorkflowExecution</code> <a>Decision</a> to start this workflow execution. The source event with this Id can be found in the history of the source workflow execution. This information can be useful for diagnosing problems by tracing back the chain of events leading up to this event.</p>',
      ],
    ],
    'EventType' => [
      'base' => NULL,
      'refs' => [
        'HistoryEvent$eventType' => '<p>The type of the history event.</p>',
      ],
    ],
    'ExecutionStatus' => [
      'base' => NULL,
      'refs' => [
        'WorkflowExecutionInfo$executionStatus' => '<p>The current status of the execution.</p>',
      ],
    ],
    'ExecutionTimeFilter' => [
      'base' => '<p>Used to filter the workflow executions in visibility APIs by various time-based rules. Each parameter, if specified, defines a rule that must be satisfied by each returned query result. The parameter values are in the <a href="https://en.wikipedia.org/wiki/Unix_time">Unix Time format</a>. For example: <code>"oldestDate": 1325376070.</code></p>',
      'refs' => [
        'CountClosedWorkflowExecutionsInput$startTimeFilter' => '<p>If specified, only workflow executions that meet the start time criteria of the filter are counted.</p> <note><code>startTimeFilter</code> and <code>closeTimeFilter</code> are mutually exclusive. You must specify one of these in a request but not both.</note>',
        'CountClosedWorkflowExecutionsInput$closeTimeFilter' => '<p>If specified, only workflow executions that meet the close time criteria of the filter are counted.</p> <note><code>startTimeFilter</code> and <code>closeTimeFilter</code> are mutually exclusive. You must specify one of these in a request but not both.</note>',
        'CountOpenWorkflowExecutionsInput$startTimeFilter' => '<p>Specifies the start time criteria that workflow executions must meet in order to be counted.</p>',
        'ListClosedWorkflowExecutionsInput$startTimeFilter' => '<p>If specified, the workflow executions are included in the returned results based on whether their start times are within the range specified by this filter. Also, if this parameter is specified, the returned results are ordered by their start times.</p> <note><code>startTimeFilter</code> and <code>closeTimeFilter</code> are mutually exclusive. You must specify one of these in a request but not both.</note>',
        'ListClosedWorkflowExecutionsInput$closeTimeFilter' => '<p>If specified, the workflow executions are included in the returned results based on whether their close times are within the range specified by this filter. Also, if this parameter is specified, the returned results are ordered by their close times.</p> <note><code>startTimeFilter</code> and <code>closeTimeFilter</code> are mutually exclusive. You must specify one of these in a request but not both.</note>',
        'ListOpenWorkflowExecutionsInput$startTimeFilter' => '<p>Workflow executions are included in the returned results based on whether their start times are within the range specified by this filter.</p>',
      ],
    ],
    'ExternalWorkflowExecutionCancelRequestedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ExternalWorkflowExecutionCancelRequested</code> event.</p>',
      'refs' => [
        'HistoryEvent$externalWorkflowExecutionCancelRequestedEventAttributes' => '<p>If the event is of type <code>ExternalWorkflowExecutionCancelRequested</code> then this member is set and provides detailed information about the event. It is not set for other event types. </p>',
      ],
    ],
    'ExternalWorkflowExecutionSignaledEventAttributes' => [
      'base' => '<p> Provides details of the <code>ExternalWorkflowExecutionSignaled</code> event.</p>',
      'refs' => [
        'HistoryEvent$externalWorkflowExecutionSignaledEventAttributes' => '<p>If the event is of type <code>ExternalWorkflowExecutionSignaled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'FailWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>FailWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$failWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>FailWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'FailWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'FailWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'FailWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>FailWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$failWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>FailWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'FailureReason' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskFailedEventAttributes$reason' => '<p>The reason provided for the failure (if any].</p>',
        'ChildWorkflowExecutionFailedEventAttributes$reason' => '<p>The reason for the failure (if provided].</p>',
        'FailWorkflowExecutionDecisionAttributes$reason' => '<p>A descriptive reason for the failure that may help in diagnostics.</p>',
        'RespondActivityTaskFailedInput$reason' => '<p>Description of the error that may assist in diagnostics.</p>',
        'WorkflowExecutionFailedEventAttributes$reason' => '<p>The descriptive reason provided for the failure (if any].</p>',
      ],
    ],
    'GetWorkflowExecutionHistoryInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'History' => [
      'base' => '<p>Paginated representation of a workflow history for a workflow execution. This is the up to date, complete and authoritative record of the events related to all tasks and events in the life of the workflow execution.</p>',
      'refs' => [],
    ],
    'HistoryEvent' => [
      'base' => '<p>Event within a workflow execution. A history event can be one of these types:</p> <ul> <li> <b>WorkflowExecutionStarted</b>: The workflow execution was started.</li> <li> <b>WorkflowExecutionCompleted</b>: The workflow execution was closed due to successful completion.</li> <li> <b>WorkflowExecutionFailed</b>: The workflow execution closed due to a failure.</li> <li> <b>WorkflowExecutionTimedOut</b>: The workflow execution was closed because a time out was exceeded.</li> <li> <b>WorkflowExecutionCanceled</b>: The workflow execution was successfully canceled and closed.</li> <li> <b>WorkflowExecutionTerminated</b>: The workflow execution was terminated.</li> <li> <b>WorkflowExecutionContinuedAsNew</b>: The workflow execution was closed and a new execution of the same type was created with the same workflowId.</li> <li> <b>WorkflowExecutionCancelRequested</b>: A request to cancel this workflow execution was made.</li> <li> <b>DecisionTaskScheduled</b>: A decision task was scheduled for the workflow execution.</li> <li> <b>DecisionTaskStarted</b>: The decision task was dispatched to a decider.</li> <li> <b>DecisionTaskCompleted</b>: The decider successfully completed a decision task by calling <a>RespondDecisionTaskCompleted</a>.</li> <li> <b>DecisionTaskTimedOut</b>: The decision task timed out.</li> <li> <b>ActivityTaskScheduled</b>: An activity task was scheduled for execution.</li> <li> <b>ScheduleActivityTaskFailed</b>: Failed to process ScheduleActivityTask decision. This happens when the decision is not configured properly, for example the activity type specified is not registered.</li> <li> <b>ActivityTaskStarted</b>: The scheduled activity task was dispatched to a worker.</li> <li> <b>ActivityTaskCompleted</b>: An activity worker successfully completed an activity task by calling <a>RespondActivityTaskCompleted</a>.</li> <li> <b>ActivityTaskFailed</b>: An activity worker failed an activity task by calling <a>RespondActivityTaskFailed</a>.</li> <li> <b>ActivityTaskTimedOut</b>: The activity task timed out.</li> <li> <b>ActivityTaskCanceled</b>: The activity task was successfully canceled.</li> <li> <b>ActivityTaskCancelRequested</b>: A <code>RequestCancelActivityTask</code> decision was received by the system.</li> <li> <b>RequestCancelActivityTaskFailed</b>: Failed to process RequestCancelActivityTask decision. This happens when the decision is not configured properly.</li> <li> <b>WorkflowExecutionSignaled</b>: An external signal was received for the workflow execution.</li> <li> <b>MarkerRecorded</b>: A marker was recorded in the workflow history as the result of a <code>RecordMarker</code> decision.</li> <li> <b>TimerStarted</b>: A timer was started for the workflow execution due to a <code>StartTimer</code> decision.</li> <li> <b>StartTimerFailed</b>: Failed to process StartTimer decision. This happens when the decision is not configured properly, for example a timer already exists with the specified timer Id.</li> <li> <b>TimerFired</b>: A timer, previously started for this workflow execution, fired.</li> <li> <b>TimerCanceled</b>: A timer, previously started for this workflow execution, was successfully canceled.</li> <li> <b>CancelTimerFailed</b>: Failed to process CancelTimer decision. This happens when the decision is not configured properly, for example no timer exists with the specified timer Id.</li> <li> <b>StartChildWorkflowExecutionInitiated</b>: A request was made to start a child workflow execution.</li> <li> <b>StartChildWorkflowExecutionFailed</b>: Failed to process StartChildWorkflowExecution decision. This happens when the decision is not configured properly, for example the workflow type specified is not registered.</li> <li> <b>ChildWorkflowExecutionStarted</b>: A child workflow execution was successfully started.</li> <li> <b>ChildWorkflowExecutionCompleted</b>: A child workflow execution, started by this workflow execution, completed successfully and was closed.</li> <li> <b>ChildWorkflowExecutionFailed</b>: A child workflow execution, started by this workflow execution, failed to complete successfully and was closed.</li> <li> <b>ChildWorkflowExecutionTimedOut</b>: A child workflow execution, started by this workflow execution, timed out and was closed.</li> <li> <b>ChildWorkflowExecutionCanceled</b>: A child workflow execution, started by this workflow execution, was canceled and closed.</li> <li> <b>ChildWorkflowExecutionTerminated</b>: A child workflow execution, started by this workflow execution, was terminated.</li> <li> <b>SignalExternalWorkflowExecutionInitiated</b>: A request to signal an external workflow was made.</li> <li> <b>ExternalWorkflowExecutionSignaled</b>: A signal, requested by this workflow execution, was successfully delivered to the target external workflow execution.</li> <li> <b>SignalExternalWorkflowExecutionFailed</b>: The request to signal an external workflow execution failed.</li> <li> <b>RequestCancelExternalWorkflowExecutionInitiated</b>: A request was made to request the cancellation of an external workflow execution.</li> <li> <b>ExternalWorkflowExecutionCancelRequested</b>: Request to cancel an external workflow execution was successfully delivered to the target execution.</li> <li> <b>RequestCancelExternalWorkflowExecutionFailed</b>: Request to cancel an external workflow execution failed.</li> </ul>',
      'refs' => [
        'HistoryEventList$member' => NULL,
      ],
    ],
    'HistoryEventList' => [
      'base' => NULL,
      'refs' => [
        'DecisionTask$events' => '<p>A paginated list of history events of the workflow execution. The decider uses this during the processing of the decision task.</p>',
        'History$events' => '<p>The list of history events.</p>',
      ],
    ],
    'Identity' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskStartedEventAttributes$identity' => '<p>Identity of the worker that was assigned this task. This aids diagnostics when problems arise. The form of this identity is user defined.</p>',
        'DecisionTaskStartedEventAttributes$identity' => '<p>Identity of the decider making the request. This enables diagnostic tracing when problems arise. The form of this identity is user defined.</p>',
        'PollForActivityTaskInput$identity' => '<p>Identity of the worker making the request, recorded in the <code>ActivityTaskStarted</code> event in the workflow history. This enables diagnostic tracing when problems arise. The form of this identity is user defined.</p>',
        'PollForDecisionTaskInput$identity' => '<p>Identity of the decider making the request, which is recorded in the DecisionTaskStarted event in the workflow history. This enables diagnostic tracing when problems arise. The form of this identity is user defined.</p>',
      ],
    ],
    'LimitExceededFault' => [
      'base' => '<p>Returned by any operation if a system imposed limitation has been reached. To address this fault you should either clean up unused resources or increase the limit by contacting AWS.</p>',
      'refs' => [],
    ],
    'LimitedData' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskTimedOutEventAttributes$details' => '<p>Contains the content of the <code>details</code> parameter for the last call made by the activity to <code>RecordActivityTaskHeartbeat</code>.</p>',
        'RecordActivityTaskHeartbeatInput$details' => '<p>If specified, contains details about the progress of the task.</p>',
      ],
    ],
    'ListActivityTypesInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListClosedWorkflowExecutionsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListDomainsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListOpenWorkflowExecutionsInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ListWorkflowTypesInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'MarkerName' => [
      'base' => NULL,
      'refs' => [
        'MarkerRecordedEventAttributes$markerName' => '<p>The name of the marker.</p>',
        'RecordMarkerDecisionAttributes$markerName' => '<p><b>Required.</b> The name of the marker.</p>',
        'RecordMarkerFailedEventAttributes$markerName' => '<p>The marker\'s name.</p>',
      ],
    ],
    'MarkerRecordedEventAttributes' => [
      'base' => '<p>Provides details of the <code>MarkerRecorded</code> event.</p>',
      'refs' => [
        'HistoryEvent$markerRecordedEventAttributes' => '<p>If the event is of type <code>MarkerRecorded</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'Name' => [
      'base' => NULL,
      'refs' => [
        'ActivityType$name' => '<p>The name of this activity.</p> <note>The combination of activity type name and version must be unique within a domain.</note>',
        'ListActivityTypesInput$name' => '<p>If specified, only lists the activity types that have this name.</p>',
        'ListWorkflowTypesInput$name' => '<p>If specified, lists the workflow type with this name.</p>',
        'RegisterActivityTypeInput$name' => '<p>The name of the activity type within the domain.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'RegisterWorkflowTypeInput$name' => '<p>The name of the workflow type.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'TaskList$name' => '<p>The name of the task list.</p>',
        'WorkflowType$name' => '<p><b>Required.</b> The name of the workflow type.</p> <note>The combination of workflow type name and version must be unique with in a domain.</note>',
        'WorkflowTypeFilter$name' => '<p><b>Required.</b> Name of the workflow type.</p>',
      ],
    ],
    'OpenDecisionTasksCount' => [
      'base' => NULL,
      'refs' => [
        'WorkflowExecutionOpenCounts$openDecisionTasks' => '<p>The count of decision tasks whose status is OPEN. A workflow execution can have at most one open decision task.</p>',
      ],
    ],
    'OperationNotPermittedFault' => [
      'base' => '<p>Returned when the caller does not have sufficient permissions to invoke the action.</p>',
      'refs' => [],
    ],
    'PageSize' => [
      'base' => NULL,
      'refs' => [
        'GetWorkflowExecutionHistoryInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'ListActivityTypesInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'ListClosedWorkflowExecutionsInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'ListDomainsInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'ListOpenWorkflowExecutionsInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'ListWorkflowTypesInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
        'PollForDecisionTaskInput$maximumPageSize' => '<p>The maximum number of results that will be returned per call. <code>nextPageToken</code> can be used to obtain futher pages of results. The default is 100, which is the maximum allowed page size. You can, however, specify a page size <i>smaller</i> than 100.</p> <p>This is an upper limit only; the actual number of results returned per call may be fewer than the specified maximum.</p>',
      ],
    ],
    'PageToken' => [
      'base' => NULL,
      'refs' => [
        'ActivityTypeInfos$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'DecisionTask$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'DomainInfos$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'GetWorkflowExecutionHistoryInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'History$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'ListActivityTypesInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'ListClosedWorkflowExecutionsInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'ListDomainsInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'ListOpenWorkflowExecutionsInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'ListWorkflowTypesInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'PollForDecisionTaskInput$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p> <note>The <code>nextPageToken</code> returned by this action cannot be used with <a>GetWorkflowExecutionHistory</a> to get the next page. You must call <a>PollForDecisionTask</a> again (with the <code>nextPageToken</code>] to retrieve the next page of history records. Calling <a>PollForDecisionTask</a> with a <code>nextPageToken</code> will not return a new decision task.</note>.',
        'WorkflowExecutionInfos$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
        'WorkflowTypeInfos$nextPageToken' => '<p>If a <code>NextPageToken</code> was returned by a previous call, there are more results available. To retrieve the next page of results, make the call again using the returned token in <code>nextPageToken</code>. Keep all other arguments unchanged.</p> <p>The configured <code>maximumPageSize</code> determines how many results can be returned in a single call.</p>',
      ],
    ],
    'PendingTaskCount' => [
      'base' => '<p>Contains the count of tasks in a task list.</p>',
      'refs' => [],
    ],
    'PollForActivityTaskInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'PollForDecisionTaskInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RecordActivityTaskHeartbeatInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RecordMarkerDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>RecordMarker</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$recordMarkerDecisionAttributes' => '<p>Provides details of the <code>RecordMarker</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'RecordMarkerFailedCause' => [
      'base' => NULL,
      'refs' => [
        'RecordMarkerFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'RecordMarkerFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>RecordMarkerFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$recordMarkerFailedEventAttributes' => '<p>If the event is of type <code>DecisionTaskFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'RegisterActivityTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RegisterDomainInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RegisterWorkflowTypeInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RegistrationStatus' => [
      'base' => NULL,
      'refs' => [
        'ActivityTypeInfo$status' => '<p>The current status of the activity type.</p>',
        'DomainInfo$status' => '<p>The status of the domain:</p> <ul> <li> <b>REGISTERED</b>: The domain is properly registered and available. You can use this domain for registering types and creating new workflow executions. </li> <li> <b>DEPRECATED</b>: The domain was deprecated using <a>DeprecateDomain</a>, but is still in use. You should not create new workflow executions in this domain. </li> </ul>',
        'ListActivityTypesInput$registrationStatus' => '<p>Specifies the registration status of the activity types to list.</p>',
        'ListDomainsInput$registrationStatus' => '<p>Specifies the registration status of the domains to list.</p>',
        'ListWorkflowTypesInput$registrationStatus' => '<p>Specifies the registration status of the workflow types to list.</p>',
        'WorkflowTypeInfo$status' => '<p>The current status of the workflow type.</p>',
      ],
    ],
    'RequestCancelActivityTaskDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>RequestCancelActivityTask</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$requestCancelActivityTaskDecisionAttributes' => '<p>Provides details of the <code>RequestCancelActivityTask</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'RequestCancelActivityTaskFailedCause' => [
      'base' => NULL,
      'refs' => [
        'RequestCancelActivityTaskFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'RequestCancelActivityTaskFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>RequestCancelActivityTaskFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$requestCancelActivityTaskFailedEventAttributes' => '<p>If the event is of type <code>RequestCancelActivityTaskFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'RequestCancelExternalWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>RequestCancelExternalWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$requestCancelExternalWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>RequestCancelExternalWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'RequestCancelExternalWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'RequestCancelExternalWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>RequestCancelExternalWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$requestCancelExternalWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>RequestCancelExternalWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes' => [
      'base' => '<p>Provides details of the <code>RequestCancelExternalWorkflowExecutionInitiated</code> event.</p>',
      'refs' => [
        'HistoryEvent$requestCancelExternalWorkflowExecutionInitiatedEventAttributes' => '<p>If the event is of type <code>RequestCancelExternalWorkflowExecutionInitiated</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'RequestCancelWorkflowExecutionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RespondActivityTaskCanceledInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RespondActivityTaskCompletedInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RespondActivityTaskFailedInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'RespondDecisionTaskCompletedInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'ReverseOrder' => [
      'base' => NULL,
      'refs' => [
        'GetWorkflowExecutionHistoryInput$reverseOrder' => '<p>When set to <code>true</code>, returns the events in reverse order. By default the results are returned in ascending order of the <code>eventTimeStamp</code> of the events.</p>',
        'ListActivityTypesInput$reverseOrder' => '<p>When set to <code>true</code>, returns the results in reverse order. By default, the results are returned in ascending alphabetical order by <code>name</code> of the activity types.</p>',
        'ListClosedWorkflowExecutionsInput$reverseOrder' => '<p>When set to <code>true</code>, returns the results in reverse order. By default the results are returned in descending order of the start or the close time of the executions.</p>',
        'ListDomainsInput$reverseOrder' => '<p>When set to <code>true</code>, returns the results in reverse order. By default, the results are returned in ascending alphabetical order by <code>name</code> of the domains.</p>',
        'ListOpenWorkflowExecutionsInput$reverseOrder' => '<p>When set to <code>true</code>, returns the results in reverse order. By default the results are returned in descending order of the start time of the executions.</p>',
        'ListWorkflowTypesInput$reverseOrder' => '<p>When set to <code>true</code>, returns the results in reverse order. By default the results are returned in ascending alphabetical order of the <code>name</code> of the workflow types.</p>',
        'PollForDecisionTaskInput$reverseOrder' => '<p>When set to <code>true</code>, returns the events in reverse order. By default the results are returned in ascending order of the <code>eventTimestamp</code> of the events.</p>',
      ],
    ],
    'Run' => [
      'base' => '<p>Specifies the <code>runId</code> of a workflow execution.</p>',
      'refs' => [],
    ],
    'RunId' => [
      'base' => NULL,
      'refs' => [
        'Run$runId' => '<p>The <code>runId</code> of a workflow execution. This Id is generated by the service and can be used to uniquely identify the workflow execution within a domain.</p>',
        'WorkflowExecution$runId' => '<p>A system-generated unique identifier for the workflow execution.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$newExecutionRunId' => '<p>The <code>runId</code> of the new workflow execution.</p>',
      ],
    ],
    'RunIdOptional' => [
      'base' => NULL,
      'refs' => [
        'RequestCancelExternalWorkflowExecutionDecisionAttributes$runId' => '<p>The <code>runId</code> of the external workflow execution to cancel.</p>',
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$runId' => '<p>The <code>runId</code> of the external workflow execution.</p>',
        'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes$runId' => '<p>The <code>runId</code> of the external workflow execution to be canceled.</p>',
        'RequestCancelWorkflowExecutionInput$runId' => '<p>The runId of the workflow execution to cancel.</p>',
        'SignalExternalWorkflowExecutionDecisionAttributes$runId' => '<p>The <code>runId</code> of the workflow execution to be signaled.</p>',
        'SignalExternalWorkflowExecutionFailedEventAttributes$runId' => '<p>The <code>runId</code> of the external workflow execution that the signal was being delivered to.</p>',
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$runId' => '<p>The <code>runId</code> of the external workflow execution to send the signal to.</p>',
        'SignalWorkflowExecutionInput$runId' => '<p>The runId of the workflow execution to signal.</p>',
        'TerminateWorkflowExecutionInput$runId' => '<p>The runId of the workflow execution to terminate.</p>',
        'WorkflowExecutionStartedEventAttributes$continuedExecutionRunId' => '<p>If this workflow execution was started due to a <code>ContinueAsNewWorkflowExecution</code> decision, then it contains the <code>runId</code> of the previous workflow execution that was closed and continued as this execution.</p>',
      ],
    ],
    'ScheduleActivityTaskDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>ScheduleActivityTask</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li><code>activityType.name</code>: String constraint. The key is <code>swf:activityType.name</code>.</li> <li><code>activityType.version</code>: String constraint. The key is <code>swf:activityType.version</code>.</li> <li><code>taskList</code>: String constraint. The key is <code>swf:taskList.name</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$scheduleActivityTaskDecisionAttributes' => '<p>Provides details of the <code>ScheduleActivityTask</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'ScheduleActivityTaskFailedCause' => [
      'base' => NULL,
      'refs' => [
        'ScheduleActivityTaskFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'ScheduleActivityTaskFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>ScheduleActivityTaskFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$scheduleActivityTaskFailedEventAttributes' => '<p>If the event is of type <code>ScheduleActivityTaskFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'SignalExternalWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>SignalExternalWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$signalExternalWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>SignalExternalWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'SignalExternalWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'SignalExternalWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'SignalExternalWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>SignalExternalWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$signalExternalWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>SignalExternalWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'SignalExternalWorkflowExecutionInitiatedEventAttributes' => [
      'base' => '<p>Provides details of the <code>SignalExternalWorkflowExecutionInitiated</code> event.</p>',
      'refs' => [
        'HistoryEvent$signalExternalWorkflowExecutionInitiatedEventAttributes' => '<p>If the event is of type <code>SignalExternalWorkflowExecutionInitiated</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'SignalName' => [
      'base' => NULL,
      'refs' => [
        'SignalExternalWorkflowExecutionDecisionAttributes$signalName' => '<p><b>Required.</b> The name of the signal.The target workflow execution will use the signal name and input to process the signal.</p>',
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$signalName' => '<p>The name of the signal.</p>',
        'SignalWorkflowExecutionInput$signalName' => '<p>The name of the signal. This name must be meaningful to the target workflow.</p>',
        'WorkflowExecutionSignaledEventAttributes$signalName' => '<p>The name of the signal received. The decider can use the signal name and inputs to determine how to the process the signal.</p>',
      ],
    ],
    'SignalWorkflowExecutionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'StartChildWorkflowExecutionDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>StartChildWorkflowExecution</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>Constrain the following parameters by using a <code>Condition</code> element with the appropriate keys. <ul> <li> <code>tagList.member.N</code>: The key is "swf:tagList.N" where N is the tag number from 0 to 4, inclusive.</li> <li><code>taskList</code>: String constraint. The key is <code>swf:taskList.name</code>.</li> <li><code>workflowType.name</code>: String constraint. The key is <code>swf:workflowType.name</code>.</li> <li><code>workflowType.version</code>: String constraint. The key is <code>swf:workflowType.version</code>.</li> </ul> </li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$startChildWorkflowExecutionDecisionAttributes' => '<p>Provides details of the <code>StartChildWorkflowExecution</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'StartChildWorkflowExecutionFailedCause' => [
      'base' => NULL,
      'refs' => [
        'StartChildWorkflowExecutionFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'StartChildWorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>StartChildWorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$startChildWorkflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>StartChildWorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'StartChildWorkflowExecutionInitiatedEventAttributes' => [
      'base' => '<p>Provides details of the <code>StartChildWorkflowExecutionInitiated</code> event.</p>',
      'refs' => [
        'HistoryEvent$startChildWorkflowExecutionInitiatedEventAttributes' => '<p>If the event is of type <code>StartChildWorkflowExecutionInitiated</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'StartTimerDecisionAttributes' => [
      'base' => '<p>Provides details of the <code>StartTimer</code> decision.</p> <p><b>Access Control</b></p> <p>You can use IAM policies to control this decision\'s access to Amazon SWF resources as follows:</p> <ul> <li>Use a <code>Resource</code> element with the domain name to limit the action to only specified domains.</li> <li>Use an <code>Action</code> element to allow or deny permission to call this action.</li> <li>You cannot use an IAM policy to constrain this action\'s parameters.</li> </ul> <p>If the caller does not have sufficient permissions to invoke the action, or the parameter values fall outside the specified constraints, the action fails. The associated event attribute\'s <b>cause</b> parameter will be set to OPERATION_NOT_PERMITTED. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</p>',
      'refs' => [
        'Decision$startTimerDecisionAttributes' => '<p>Provides details of the <code>StartTimer</code> decision. It is not set for other decision types.</p>',
      ],
    ],
    'StartTimerFailedCause' => [
      'base' => NULL,
      'refs' => [
        'StartTimerFailedEventAttributes$cause' => '<p>The cause of the failure. This information is generated by the system and can be useful for diagnostic purposes.</p> <note>If <b>cause</b> is set to OPERATION_NOT_PERMITTED, the decision failed because it lacked sufficient permissions. For details and example IAM policies, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/swf-dev-iam.html">Using IAM to Manage Access to Amazon SWF Workflows</a>.</note>',
      ],
    ],
    'StartTimerFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>StartTimerFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$startTimerFailedEventAttributes' => '<p>If the event is of type <code>StartTimerFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'StartWorkflowExecutionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Tag' => [
      'base' => NULL,
      'refs' => [
        'TagFilter$tag' => '<p><b>Required.</b> Specifies the tag that must be associated with the execution for it to meet the filter criteria.</p>',
        'TagList$member' => NULL,
      ],
    ],
    'TagFilter' => [
      'base' => '<p>Used to filter the workflow executions in visibility APIs based on a tag.</p>',
      'refs' => [
        'CountClosedWorkflowExecutionsInput$tagFilter' => '<p>If specified, only executions that have a tag that matches the filter are counted.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'CountOpenWorkflowExecutionsInput$tagFilter' => '<p>If specified, only executions that have a tag that matches the filter are counted.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListClosedWorkflowExecutionsInput$tagFilter' => '<p>If specified, only executions that have the matching tag are listed.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListOpenWorkflowExecutionsInput$tagFilter' => '<p>If specified, only executions that have the matching tag are listed.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
      ],
    ],
    'TagList' => [
      'base' => NULL,
      'refs' => [
        'ContinueAsNewWorkflowExecutionDecisionAttributes$tagList' => '<p>The list of tags to associate with the new workflow execution. A maximum of 5 tags can be specified. You can list workflow executions with a specific tag by calling <a>ListOpenWorkflowExecutions</a> or <a>ListClosedWorkflowExecutions</a> and specifying a <a>TagFilter</a>.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$tagList' => '<p>The list of tags to associate with the child workflow execution. A maximum of 5 tags can be specified. You can list workflow executions with a specific tag by calling <a>ListOpenWorkflowExecutions</a> or <a>ListClosedWorkflowExecutions</a> and specifying a <a>TagFilter</a>.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$tagList' => '<p>The list of tags to associated with the child workflow execution.</p>',
        'StartWorkflowExecutionInput$tagList' => '<p>The list of tags to associate with the workflow execution. You can specify a maximum of 5 tags. You can list workflow executions with a specific tag by calling <a>ListOpenWorkflowExecutions</a> or <a>ListClosedWorkflowExecutions</a> and specifying a <a>TagFilter</a>.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$tagList' => '<p>The list of tags associated with the new workflow execution.</p>',
        'WorkflowExecutionInfo$tagList' => '<p>The list of tags associated with the workflow execution. Tags can be used to identify and list workflow executions of interest through the visibility APIs. A workflow execution can have a maximum of 5 tags.</p>',
        'WorkflowExecutionStartedEventAttributes$tagList' => '<p>The list of tags associated with this workflow execution. An execution can have up to 5 tags.</p>',
      ],
    ],
    'TaskList' => [
      'base' => '<p>Represents a task list.</p>',
      'refs' => [
        'ActivityTaskScheduledEventAttributes$taskList' => '<p>The task list in which the activity task has been scheduled.</p>',
        'ActivityTypeConfiguration$defaultTaskList' => '<p><i>Optional.</i> The default task list specified for this activity type at registration. This default is used if a task list is not provided when a task is scheduled through the <code>ScheduleActivityTask</code> <a>Decision</a>. You can override the default registered task list when scheduling a task through the <code>ScheduleActivityTask</code> <a>Decision</a>.</p>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$taskList' => NULL,
        'CountPendingActivityTasksInput$taskList' => '<p>The name of the task list.</p>',
        'CountPendingDecisionTasksInput$taskList' => '<p>The name of the task list.</p>',
        'DecisionTaskScheduledEventAttributes$taskList' => '<p>The name of the task list in which the decision task was scheduled.</p>',
        'PollForActivityTaskInput$taskList' => '<p>Specifies the task list to poll for activity tasks.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'PollForDecisionTaskInput$taskList' => '<p>Specifies the task list to poll for decision tasks.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'RegisterActivityTypeInput$defaultTaskList' => '<p>If set, specifies the default task list to use for scheduling tasks of this activity type. This default task list is used if a task list is not provided when a task is scheduled through the <code>ScheduleActivityTask</code> <a>Decision</a>.</p>',
        'RegisterWorkflowTypeInput$defaultTaskList' => '<p>If set, specifies the default task list to use for scheduling decision tasks for executions of this workflow type. This default is used only if a task list is not provided when starting the execution through the <a>StartWorkflowExecution</a> Action or <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p>',
        'ScheduleActivityTaskDecisionAttributes$taskList' => '<p>If set, specifies the name of the task list in which to schedule the activity task. If not specified, the <code>defaultTaskList</code> registered with the activity type will be used.</p> <note>A task list for this activity task must be specified either as a default for the activity type or through this field. If neither this field is set nor a default task list was specified at registration time then a fault will be returned.</note> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$taskList' => '<p>The name of the task list to be used for decision tasks of the child workflow execution.</p> <note>A task list for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default task list was specified at registration time then a fault will be returned.</note> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$taskList' => '<p>The name of the task list used for the decision tasks of the child workflow execution.</p>',
        'StartWorkflowExecutionInput$taskList' => '<p>The task list to use for the decision tasks generated for this workflow execution. This overrides the <code>defaultTaskList</code> specified when registering the workflow type.</p> <note>A task list for this workflow execution must be specified either as a default for the workflow type or through this parameter. If neither this parameter is set nor a default task list was specified at registration time then a fault will be returned.</note> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'WorkflowExecutionConfiguration$taskList' => '<p>The task list used for the decision tasks generated for this workflow execution.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$taskList' => NULL,
        'WorkflowExecutionStartedEventAttributes$taskList' => '<p>The name of the task list for scheduling the decision tasks for this workflow execution.</p>',
        'WorkflowTypeConfiguration$defaultTaskList' => '<p><i>Optional.</i> The default task list, specified when registering the workflow type, for decisions tasks scheduled for workflow executions of this type. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> <a>Decision</a>.</p>',
      ],
    ],
    'TaskPriority' => [
      'base' => NULL,
      'refs' => [
        'ActivityTaskScheduledEventAttributes$taskPriority' => '<p><i>Optional.</i> The priority to assign to the scheduled activity task. This will override any default priority that was assigned when the activity type was registered. If not set, then the priority set on the activity type is used as the task priority.</p> <p>Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'ActivityTypeConfiguration$defaultTaskPriority' => '<p><i>Optional.</i> The default task priority for tasks of this activity type, specified at registration. If not set, then "0" will be used as the default priority. This default can be overridden when scheduling an activity task.</p> <p>Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$taskPriority' => '<p><i>Optional.</i> The task priority that, if set, specifies the priority for the decision tasks for this workflow execution. This overrides the defaultTaskPriority specified when registering the workflow type. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'DecisionTaskScheduledEventAttributes$taskPriority' => '<p><i>Optional.</i> A task priority that, if set, specifies the priority for this decision task. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'RegisterActivityTypeInput$defaultTaskPriority' => '<p>The default task priority to assign to the activity type. If not assigned, then "0" will be used. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'RegisterWorkflowTypeInput$defaultTaskPriority' => '<p>The default task priority to assign to the workflow type. If not assigned, then "0" will be used. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'ScheduleActivityTaskDecisionAttributes$taskPriority' => '<p><i>Optional.</i> If set, specifies the priority with which the activity task is to be assigned to a worker. This overrides the defaultTaskPriority specified when registering the activity type using <a>RegisterActivityType</a>. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$taskPriority' => '<p><i>Optional.</i> A task priority that, if set, specifies the priority for a decision task of this workflow execution. This overrides the defaultTaskPriority specified when registering the workflow type. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$taskPriority' => '<p><i>Optional.</i> The priority assigned for the decision tasks for this workflow execution. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'StartWorkflowExecutionInput$taskPriority' => '<p>The task priority to use for this workflow execution. This will override any default priority that was assigned when the workflow type was registered. If not set, then the default task priority for the workflow type will be used. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'WorkflowExecutionConfiguration$taskPriority' => '<p>The priority assigned to decision tasks for this workflow execution. Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$taskPriority' => NULL,
        'WorkflowExecutionStartedEventAttributes$taskPriority' => NULL,
        'WorkflowTypeConfiguration$defaultTaskPriority' => '<p><i>Optional.</i> The default task priority, specified when registering the workflow type, for all decision tasks of this workflow type. This default can be overridden when starting a workflow execution using the <a>StartWorkflowExecution</a> action or the <code>StartChildWorkflowExecution</code> decision.</p> <p>Valid values are integers that range from Java\'s <code>Integer.MIN_VALUE</code> (-2147483648] to <code>Integer.MAX_VALUE</code> (2147483647]. Higher numbers indicate higher priority.</p> <p>For more information about setting task priority, see <a href="http://docs.aws.amazon.com/amazonswf/latest/developerguide/programming-priority.html">Setting Task Priority</a> in the <i>Amazon Simple Workflow Developer Guide</i>.</p>',
      ],
    ],
    'TaskToken' => [
      'base' => NULL,
      'refs' => [
        'ActivityTask$taskToken' => '<p>The opaque string used as a handle on the task. This token is used by workers to communicate progress and response information back to the system about the task.</p>',
        'DecisionTask$taskToken' => '<p>The opaque string used as a handle on the task. This token is used by workers to communicate progress and response information back to the system about the task.</p>',
        'RecordActivityTaskHeartbeatInput$taskToken' => '<p>The <code>taskToken</code> of the <a>ActivityTask</a>.</p> <important> <code>taskToken</code> is generated by the service and should be treated as an opaque value. If the task is passed to another process, its <code>taskToken</code> must also be passed. This enables it to provide its progress and respond with results. </important>',
        'RespondActivityTaskCanceledInput$taskToken' => '<p>The <code>taskToken</code> of the <a>ActivityTask</a>.</p> <important><code>taskToken</code> is generated by the service and should be treated as an opaque value. If the task is passed to another process, its <code>taskToken</code> must also be passed. This enables it to provide its progress and respond with results.</important>',
        'RespondActivityTaskCompletedInput$taskToken' => '<p>The <code>taskToken</code> of the <a>ActivityTask</a>.</p> <important> <code>taskToken</code> is generated by the service and should be treated as an opaque value. If the task is passed to another process, its <code>taskToken</code> must also be passed. This enables it to provide its progress and respond with results.</important>',
        'RespondActivityTaskFailedInput$taskToken' => '<p>The <code>taskToken</code> of the <a>ActivityTask</a>.</p> <important> <code>taskToken</code> is generated by the service and should be treated as an opaque value. If the task is passed to another process, its <code>taskToken</code> must also be passed. This enables it to provide its progress and respond with results.</important>',
        'RespondDecisionTaskCompletedInput$taskToken' => '<p>The <code>taskToken</code> from the <a>DecisionTask</a>.</p> <important><code>taskToken</code> is generated by the service and should be treated as an opaque value. If the task is passed to another process, its <code>taskToken</code> must also be passed. This enables it to provide its progress and respond with results.</important>',
      ],
    ],
    'TerminateReason' => [
      'base' => NULL,
      'refs' => [
        'TerminateWorkflowExecutionInput$reason' => '<p><i>Optional.</i> A descriptive reason for terminating the workflow execution.</p>',
        'WorkflowExecutionTerminatedEventAttributes$reason' => '<p>The reason provided for the termination (if any].</p>',
      ],
    ],
    'TerminateWorkflowExecutionInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'TimerCanceledEventAttributes' => [
      'base' => '<p> Provides details of the <code>TimerCanceled</code> event. </p>',
      'refs' => [
        'HistoryEvent$timerCanceledEventAttributes' => '<p>If the event is of type <code>TimerCanceled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'TimerFiredEventAttributes' => [
      'base' => '<p>Provides details of the <code>TimerFired</code> event.</p>',
      'refs' => [
        'HistoryEvent$timerFiredEventAttributes' => '<p>If the event is of type <code>TimerFired</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'TimerId' => [
      'base' => NULL,
      'refs' => [
        'CancelTimerDecisionAttributes$timerId' => '<p><b>Required.</b> The unique Id of the timer to cancel.</p>',
        'CancelTimerFailedEventAttributes$timerId' => '<p>The timerId provided in the <code>CancelTimer</code> decision that failed.</p>',
        'StartTimerDecisionAttributes$timerId' => '<p><b>Required.</b> The unique Id of the timer.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'StartTimerFailedEventAttributes$timerId' => '<p>The timerId provided in the <code>StartTimer</code> decision that failed.</p>',
        'TimerCanceledEventAttributes$timerId' => '<p> The unique Id of the timer that was canceled. </p>',
        'TimerFiredEventAttributes$timerId' => '<p>The unique Id of the timer that fired.</p>',
        'TimerStartedEventAttributes$timerId' => '<p>The unique Id of the timer that was started.</p>',
      ],
    ],
    'TimerStartedEventAttributes' => [
      'base' => '<p>Provides details of the <code>TimerStarted</code> event.</p>',
      'refs' => [
        'HistoryEvent$timerStartedEventAttributes' => '<p>If the event is of type <code>TimerStarted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'Timestamp' => [
      'base' => NULL,
      'refs' => [
        'ActivityTypeInfo$creationDate' => '<p>The date and time this activity type was created through <a>RegisterActivityType</a>.</p>',
        'ActivityTypeInfo$deprecationDate' => '<p>If DEPRECATED, the date and time <a>DeprecateActivityType</a> was called.</p>',
        'ExecutionTimeFilter$oldestDate' => '<p>Specifies the oldest start or close date and time to return.</p>',
        'ExecutionTimeFilter$latestDate' => '<p>Specifies the latest start or close date and time to return.</p>',
        'HistoryEvent$eventTimestamp' => '<p>The date and time when the event occurred.</p>',
        'WorkflowExecutionDetail$latestActivityTaskTimestamp' => '<p>The time when the last activity task was scheduled for this workflow execution. You can use this information to determine if the workflow has not made progress for an unusually long period of time and might require a corrective action.</p>',
        'WorkflowExecutionInfo$startTimestamp' => '<p>The time when the execution was started.</p>',
        'WorkflowExecutionInfo$closeTimestamp' => '<p>The time when the workflow execution was closed. Set only if the execution status is CLOSED.</p>',
        'WorkflowTypeInfo$creationDate' => '<p>The date when this type was registered.</p>',
        'WorkflowTypeInfo$deprecationDate' => '<p>If the type is in deprecated state, then it is set to the date when the type was deprecated.</p>',
      ],
    ],
    'Truncated' => [
      'base' => NULL,
      'refs' => [
        'PendingTaskCount$truncated' => '<p>If set to true, indicates that the actual count was more than the maximum supported by this API and the count returned is the truncated value.</p>',
        'WorkflowExecutionCount$truncated' => '<p>If set to true, indicates that the actual count was more than the maximum supported by this API and the count returned is the truncated value.</p>',
      ],
    ],
    'TypeAlreadyExistsFault' => [
      'base' => '<p>Returned if the type already exists in the specified domain. You will get this fault even if the existing type is in deprecated status. You can specify another version if the intent is to create a new distinct version of the type.</p>',
      'refs' => [],
    ],
    'TypeDeprecatedFault' => [
      'base' => '<p>Returned when the specified activity or workflow type was already deprecated.</p>',
      'refs' => [],
    ],
    'UnknownResourceFault' => [
      'base' => '<p>Returned when the named resource cannot be found with in the scope of this operation (region or domain]. This could happen if the named resource was never created or is no longer available for this operation.</p>',
      'refs' => [],
    ],
    'Version' => [
      'base' => NULL,
      'refs' => [
        'ActivityType$version' => '<p>The version of this activity.</p> <note>The combination of activity type name and version must be unique with in a domain.</note>',
        'ContinueAsNewWorkflowExecutionDecisionAttributes$workflowTypeVersion' => NULL,
        'RegisterActivityTypeInput$version' => '<p>The version of the activity type.</p> <note>The activity type consists of the name and version, the combination of which must be unique within the domain.</note> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'RegisterWorkflowTypeInput$version' => '<p>The version of the workflow type.</p> <note>The workflow type consists of the name and version, the combination of which must be unique within the domain. To get a list of all currently registered workflow types, use the <a>ListWorkflowTypes</a> action.</note> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'WorkflowType$version' => '<p><b>Required.</b> The version of the workflow type.</p> <note>The combination of workflow type name and version must be unique with in a domain.</note>',
      ],
    ],
    'VersionOptional' => [
      'base' => NULL,
      'refs' => [
        'WorkflowTypeFilter$version' => '<p>Version of the workflow type.</p>',
      ],
    ],
    'WorkflowExecution' => [
      'base' => '<p>Represents a workflow execution.</p>',
      'refs' => [
        'ActivityTask$workflowExecution' => '<p>The workflow execution that started this activity task.</p>',
        'ChildWorkflowExecutionCanceledEventAttributes$workflowExecution' => '<p>The child workflow execution that was canceled.</p>',
        'ChildWorkflowExecutionCompletedEventAttributes$workflowExecution' => '<p>The child workflow execution that was completed.</p>',
        'ChildWorkflowExecutionFailedEventAttributes$workflowExecution' => '<p>The child workflow execution that failed.</p>',
        'ChildWorkflowExecutionStartedEventAttributes$workflowExecution' => '<p>The child workflow execution that was started.</p>',
        'ChildWorkflowExecutionTerminatedEventAttributes$workflowExecution' => '<p>The child workflow execution that was terminated.</p>',
        'ChildWorkflowExecutionTimedOutEventAttributes$workflowExecution' => '<p>The child workflow execution that timed out.</p>',
        'DecisionTask$workflowExecution' => '<p>The workflow execution for which this decision task was created.</p>',
        'DescribeWorkflowExecutionInput$execution' => '<p>The workflow execution to describe.</p>',
        'ExternalWorkflowExecutionCancelRequestedEventAttributes$workflowExecution' => '<p>The external workflow execution to which the cancellation request was delivered.</p>',
        'ExternalWorkflowExecutionSignaledEventAttributes$workflowExecution' => '<p> The external workflow execution that the signal was delivered to.</p>',
        'GetWorkflowExecutionHistoryInput$execution' => '<p>Specifies the workflow execution for which to return the history.</p>',
        'WorkflowExecutionCancelRequestedEventAttributes$externalWorkflowExecution' => '<p>The external workflow execution for which the cancellation was requested.</p>',
        'WorkflowExecutionInfo$execution' => '<p>The workflow execution this information is about.</p>',
        'WorkflowExecutionInfo$parent' => '<p>If this workflow execution is a child of another execution then contains the workflow execution that started this execution.</p>',
        'WorkflowExecutionSignaledEventAttributes$externalWorkflowExecution' => '<p>The workflow execution that sent the signal. This is set only of the signal was sent by another workflow execution.</p>',
        'WorkflowExecutionStartedEventAttributes$parentWorkflowExecution' => '<p>The source workflow execution that started this workflow execution. The member is not set if the workflow execution was not started by a workflow.</p>',
      ],
    ],
    'WorkflowExecutionAlreadyStartedFault' => [
      'base' => '<p>Returned by <a>StartWorkflowExecution</a> when an open execution with the same workflowId is already running in the specified domain.</p>',
      'refs' => [],
    ],
    'WorkflowExecutionCancelRequestedCause' => [
      'base' => NULL,
      'refs' => [
        'WorkflowExecutionCancelRequestedEventAttributes$cause' => '<p>If set, indicates that the request to cancel the workflow execution was automatically generated, and specifies the cause. This happens if the parent workflow execution times out or is terminated, and the child policy is set to cancel child executions.</p>',
      ],
    ],
    'WorkflowExecutionCancelRequestedEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionCancelRequested</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionCancelRequestedEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionCancelRequested</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionCanceledEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionCanceled</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionCanceledEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionCanceled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionCompletedEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionCompleted</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionCompletedEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionCompleted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionConfiguration' => [
      'base' => '<p>The configuration settings for a workflow execution including timeout values, tasklist etc. These configuration settings are determined from the defaults specified when registering the workflow type and those specified when starting the workflow execution.</p>',
      'refs' => [
        'WorkflowExecutionDetail$executionConfiguration' => '<p>The configuration settings for this workflow execution including timeout values, tasklist etc.</p>',
      ],
    ],
    'WorkflowExecutionContinuedAsNewEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionContinuedAsNew</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionContinuedAsNewEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionContinuedAsNew</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionCount' => [
      'base' => '<p>Contains the count of workflow executions returned from <a>CountOpenWorkflowExecutions</a> or <a>CountClosedWorkflowExecutions</a></p>',
      'refs' => [],
    ],
    'WorkflowExecutionDetail' => [
      'base' => '<p>Contains details about a workflow execution.</p>',
      'refs' => [],
    ],
    'WorkflowExecutionFailedEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionFailed</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionFailedEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionFailed</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionFilter' => [
      'base' => '<p>Used to filter the workflow executions in visibility APIs by their <code>workflowId</code>.</p>',
      'refs' => [
        'CountClosedWorkflowExecutionsInput$executionFilter' => '<p>If specified, only workflow executions matching the <code>WorkflowId</code> in the filter are counted.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'CountOpenWorkflowExecutionsInput$executionFilter' => '<p>If specified, only workflow executions matching the <code>WorkflowId</code> in the filter are counted.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListClosedWorkflowExecutionsInput$executionFilter' => '<p>If specified, only workflow executions matching the workflow id specified in the filter are returned.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListOpenWorkflowExecutionsInput$executionFilter' => '<p>If specified, only workflow executions matching the workflow id specified in the filter are returned.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
      ],
    ],
    'WorkflowExecutionInfo' => [
      'base' => '<p>Contains information about a workflow execution. </p>',
      'refs' => [
        'WorkflowExecutionDetail$executionInfo' => '<p>Information about the workflow execution.</p>',
        'WorkflowExecutionInfoList$member' => NULL,
      ],
    ],
    'WorkflowExecutionInfoList' => [
      'base' => NULL,
      'refs' => [
        'WorkflowExecutionInfos$executionInfos' => '<p>The list of workflow information structures.</p>',
      ],
    ],
    'WorkflowExecutionInfos' => [
      'base' => '<p>Contains a paginated list of information about workflow executions.</p>',
      'refs' => [],
    ],
    'WorkflowExecutionOpenCounts' => [
      'base' => '<p>Contains the counts of open tasks, child workflow executions and timers for a workflow execution.</p>',
      'refs' => [
        'WorkflowExecutionDetail$openCounts' => '<p>The number of tasks for this workflow execution. This includes open and closed tasks of all types.</p>',
      ],
    ],
    'WorkflowExecutionSignaledEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionSignaled</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionSignaledEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionSignaled</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionStartedEventAttributes' => [
      'base' => '<p>Provides details of <code>WorkflowExecutionStarted</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionStartedEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionStarted</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionTerminatedCause' => [
      'base' => NULL,
      'refs' => [
        'WorkflowExecutionTerminatedEventAttributes$cause' => '<p>If set, indicates that the workflow execution was automatically terminated, and specifies the cause. This happens if the parent workflow execution times out or is terminated and the child policy is set to terminate child executions.</p>',
      ],
    ],
    'WorkflowExecutionTerminatedEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionTerminated</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionTerminatedEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionTerminated</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionTimedOutEventAttributes' => [
      'base' => '<p>Provides details of the <code>WorkflowExecutionTimedOut</code> event.</p>',
      'refs' => [
        'HistoryEvent$workflowExecutionTimedOutEventAttributes' => '<p>If the event is of type <code>WorkflowExecutionTimedOut</code> then this member is set and provides detailed information about the event. It is not set for other event types.</p>',
      ],
    ],
    'WorkflowExecutionTimeoutType' => [
      'base' => NULL,
      'refs' => [
        'ChildWorkflowExecutionTimedOutEventAttributes$timeoutType' => '<p>The type of the timeout that caused the child workflow execution to time out.</p>',
        'WorkflowExecutionTimedOutEventAttributes$timeoutType' => '<p>The type of timeout that caused this event.</p>',
      ],
    ],
    'WorkflowId' => [
      'base' => NULL,
      'refs' => [
        'RequestCancelExternalWorkflowExecutionDecisionAttributes$workflowId' => '<p><b>Required.</b> The <code>workflowId</code> of the external workflow execution to cancel.</p>',
        'RequestCancelExternalWorkflowExecutionFailedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the external workflow to which the cancel request was to be delivered.</p>',
        'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the external workflow execution to be canceled.</p>',
        'RequestCancelWorkflowExecutionInput$workflowId' => '<p>The workflowId of the workflow execution to cancel.</p>',
        'SignalExternalWorkflowExecutionDecisionAttributes$workflowId' => '<p><b>Required.</b> The <code>workflowId</code> of the workflow execution to be signaled.</p>',
        'SignalExternalWorkflowExecutionFailedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the external workflow execution that the signal was being delivered to.</p>',
        'SignalExternalWorkflowExecutionInitiatedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the external workflow execution.</p>',
        'SignalWorkflowExecutionInput$workflowId' => '<p>The workflowId of the workflow execution to signal.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$workflowId' => '<p><b>Required.</b> The <code>workflowId</code> of the workflow execution.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'StartChildWorkflowExecutionFailedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the child workflow execution.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$workflowId' => '<p>The <code>workflowId</code> of the child workflow execution.</p>',
        'StartWorkflowExecutionInput$workflowId' => '<p>The user defined identifier associated with the workflow execution. You can use this to associate a custom identifier with the workflow execution. You may specify the same identifier if a workflow execution is logically a <i>restart</i> of a previous execution. You cannot have two open workflow executions with the same <code>workflowId</code> at the same time.</p> <p>The specified string must not start or end with whitespace. It must not contain a <code>:</code> (colon], <code>/</code> (slash], <code>|</code> (vertical bar], or any control characters (\\u0000-\\u001f | \\u007f - \\u009f]. Also, it must not contain the literal string quotarnquot.</p>',
        'TerminateWorkflowExecutionInput$workflowId' => '<p>The workflowId of the workflow execution to terminate.</p>',
        'WorkflowExecution$workflowId' => '<p>The user defined identifier associated with the workflow execution.</p>',
        'WorkflowExecutionFilter$workflowId' => '<p>The workflowId to pass of match the criteria of this filter.</p>',
      ],
    ],
    'WorkflowType' => [
      'base' => '<p>Represents a workflow type.</p>',
      'refs' => [
        'ChildWorkflowExecutionCanceledEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'ChildWorkflowExecutionCompletedEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'ChildWorkflowExecutionFailedEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'ChildWorkflowExecutionStartedEventAttributes$workflowType' => '<p>The type of the child workflow execution. </p>',
        'ChildWorkflowExecutionTerminatedEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'ChildWorkflowExecutionTimedOutEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'DecisionTask$workflowType' => '<p>The type of the workflow execution for which this decision task was created.</p>',
        'DeprecateWorkflowTypeInput$workflowType' => '<p>The workflow type to deprecate.</p>',
        'DescribeWorkflowTypeInput$workflowType' => '<p>The workflow type to describe.</p>',
        'StartChildWorkflowExecutionDecisionAttributes$workflowType' => '<p><b>Required.</b> The type of the workflow execution to be started.</p>',
        'StartChildWorkflowExecutionFailedEventAttributes$workflowType' => '<p>The workflow type provided in the <code>StartChildWorkflowExecution</code> <a>Decision</a> that failed.</p>',
        'StartChildWorkflowExecutionInitiatedEventAttributes$workflowType' => '<p>The type of the child workflow execution.</p>',
        'StartWorkflowExecutionInput$workflowType' => '<p>The type of the workflow to start.</p>',
        'WorkflowExecutionContinuedAsNewEventAttributes$workflowType' => NULL,
        'WorkflowExecutionInfo$workflowType' => '<p>The type of the workflow execution.</p>',
        'WorkflowExecutionStartedEventAttributes$workflowType' => '<p>The workflow type of this execution.</p>',
        'WorkflowTypeInfo$workflowType' => '<p>The workflow type this information is about.</p>',
      ],
    ],
    'WorkflowTypeConfiguration' => [
      'base' => '<p>The configuration settings of a workflow type.</p>',
      'refs' => [
        'WorkflowTypeDetail$configuration' => '<p>Configuration settings of the workflow type registered through <a>RegisterWorkflowType</a></p>',
      ],
    ],
    'WorkflowTypeDetail' => [
      'base' => '<p>Contains details about a workflow type.</p>',
      'refs' => [],
    ],
    'WorkflowTypeFilter' => [
      'base' => '<p>Used to filter workflow execution query results by type. Each parameter, if specified, defines a rule that must be satisfied by each returned result.</p>',
      'refs' => [
        'CountClosedWorkflowExecutionsInput$typeFilter' => '<p>If specified, indicates the type of the workflow executions to be counted.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'CountOpenWorkflowExecutionsInput$typeFilter' => '<p>Specifies the type of the workflow executions to be counted.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListClosedWorkflowExecutionsInput$typeFilter' => '<p>If specified, only executions of the type specified in the filter are returned.</p> <note><code>closeStatusFilter</code>, <code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
        'ListOpenWorkflowExecutionsInput$typeFilter' => '<p>If specified, only executions of the type specified in the filter are returned.</p> <note><code>executionFilter</code>, <code>typeFilter</code> and <code>tagFilter</code> are mutually exclusive. You can specify at most one of these in a request.</note>',
      ],
    ],
    'WorkflowTypeInfo' => [
      'base' => '<p>Contains information about a workflow type.</p>',
      'refs' => [
        'WorkflowTypeDetail$typeInfo' => '<p>General information about the workflow type.</p> <p>The status of the workflow type (returned in the WorkflowTypeInfo structure] can be one of the following.</p> <ul> <li> <b>REGISTERED</b>: The type is registered and available. Workers supporting this type should be running.</li> <li> <b>DEPRECATED</b>: The type was deprecated using <a>DeprecateWorkflowType</a>, but is still in use. You should keep workers supporting this type running. You cannot create new workflow executions of this type.</li> </ul>',
        'WorkflowTypeInfoList$member' => NULL,
      ],
    ],
    'WorkflowTypeInfoList' => [
      'base' => NULL,
      'refs' => [
        'WorkflowTypeInfos$typeInfos' => '<p>The list of workflow type information.</p>',
      ],
    ],
    'WorkflowTypeInfos' => [
      'base' => '<p>Contains a paginated list of information structures about workflow types.</p>',
      'refs' => [],
    ],
  ],
];
