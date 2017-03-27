<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
// ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

define('sugarEntry', TRUE);
//Use the NuSOAP files



function createDateRangeArray($strDateFrom,$strDateTo)
{
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script

    $aryRange=array();

    $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
    $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

    if ($iDateTo>=$iDateFrom)
    {
        array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo)
        {
            $iDateFrom+=86400; // add 24 hours
            array_push($aryRange,date('Y-m-d',$iDateFrom));
        }
    }
    return $aryRange;
}



//$apiURL = 'http://localhost/sunspot_villa/_admin/custom/services/v2_1/Booking/soap.php';
 $apiURL = 'http://admin1.sunspotvillaja.com/custom/services/v2_1/Prices/soap.php';
// $apiUserName = 'admin';
// $apiMd5Pass = md5('toohSpU4eva');
$apiUserName = 'website';
$apiMd5Pass = md5('fAEPgZfAEPgZ');

    $soap_path = 'assets/nusoap/nusoap.php';
    // $soap_path = $_SERVER['DOCUMENT_ROOT'] . '/sunspot_villa/production/examples/web/assets/nusoap/nusoap.php';
    include($soap_path);


    $soapclient = new nusoap_client($apiURL ,false);
    $user_auth = array(
        'user_auth' => array(
        'user_name' => $apiUserName,
        'password' => $apiMd5Pass,
        'version' => '0.1'
    ),
    'application_name' => 'soapGetPrices');
    $result_array = $soapclient->call('login',$user_auth);
    $session_id =  $result_array['id'];
    
   
	
    $set_entry_params = array(
        'session' => $session_id,        
    );
    $result = $soapclient->call('getPriceRates',$set_entry_params);
    $result = json_decode($result, true);
    

    $return_results = array();


    foreach ( $result as $item ) {

        


            $return_results[] = array(
                    'Season' => $item['name'],
                    'Period' => date('M jS Y', strtotime($item['start_date_c']) ) . ' - ' . date('M jS Y', strtotime($item['end_date_c']) ),
                    'Nightly' => number_format( $item['nightly_rate_c'], 2 ),
                    'Weekly_8' => number_format( $item['weekly_rate_c'], 2 ),
                    'Weekly_10' => number_format( $item['weekly_rate_10_guests_c'], 2 ),
                    'Weekly_12' => number_format( $item['weekly_rate_12_guests_c'], 2 )
                );

    }


    
    echo json_encode( $return_results );
    die();

