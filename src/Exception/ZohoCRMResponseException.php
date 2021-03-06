<?php

namespace Wabel\Zoho\CRM\Exception;

use Wabel\Zoho\CRM\Request\Response;

/**
 * Zoho CRM Exception.
 *
 * Error thrown when using the API
 *
 * @version 1.0.0
 */
class ZohoCRMResponseException extends ZohoCRMException
{
    public static $errorMessages = array(
   '0000' => 'Unknown error',
   '4000' => 'Please use Authtoken, instead of API ticket and API key.',
   '4500' => 'Internal server error while processing this request.',
   '4501' => 'API Key is inactive.',
   '4502' => 'This module is not supported in your edition.',
   '4401' => 'Mandatory field missing.',
   '4600' => 'Incorrect API parameter or API parameter value. Also check the method name and/or spelling errors in the API url.',
   '4831' => 'Missing parameters error.',
   '4832' => 'Text value given for an Integer field.',
   '4834' => 'Invalid ticket. Also check if ticket has expired.',
   '4835' => 'XML parsing error.',
   '4890' => 'Wrong API Key.',
   '4487' => 'No permission to convert lead.',
   '4001' => 'No API permission.',
   '401' => 'No module permission.',
   '401.1' => 'No permission to create a record.',
   '401.2' => 'No permission to edit a record.',
   '401.3' => 'No permission to delete a record.',
   '4101' => 'Zoho CRM disabled.',
   '4102' => 'No CRM account.',
   '4103' => 'No record available with the specified record ID.',
   '4422' => 'No records available in the module.',
   '4420' => 'Wrong value for search parameter and/or search parameter value.',
   '4421' => 'Number of API calls exceeded.',
   '4423' => 'Exceeded record search limit.',
   '4807' => 'Exceeded file size limit.',
   '4424' => 'Invalid File Type.',
   '4809' => 'Exceeded storage space limit.',
  );

    public function __construct(Response $zohoResponse)
    {
        $code = $zohoResponse->getCode();
        $message = "Code {$code} ".(isset(self::$errorMessages[$code]) ? '['.self::$errorMessages[$code].']' : '').' '.$zohoResponse->getMessage();

        parent::__construct($message, $code);
    }
}
