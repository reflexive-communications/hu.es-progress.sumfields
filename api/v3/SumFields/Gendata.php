<?php

/**
 * SumFields.Gendata API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 *
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
function _civicrm_api3_sum_fields_gendata_spec(&$spec)
{
    // Nothing in spec.
}

/**
 * SumFields.Gendata API
 *
 * @param array $params
 *
 * @return array API result descriptor
 * @throws API_Exception
 * @see civicrm_api3_create_error
 * @see civicrm_api3_create_success
 */
function civicrm_api3_sum_fields_gendata($params)
{
    $returnValues = [];
    $ret = sumfields_gen_data($returnValues);
    if ($ret) {
        // Spec: civicrm_api3_create_success($values = 1, $params = array(), $entity = NULL, $action = NULL)
        return civicrm_api3_create_success($returnValues, $params, 'SumFields', 'gendata');
    } else {
        throw new API_Exception(/*errorMessage*/ 'Generating data returned an error.', /*errorCode*/ 1234);
    }
}
