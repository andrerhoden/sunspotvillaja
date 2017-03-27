<?php

ini_set('display_errors', 0);
ini_set('log_errors', 0);
// ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

define('sugarEntry', TRUE);
//Use the NuSOAP files



    // // Check CAPTCHA code
    // if (isset($_REQUEST['g-recaptcha-response'])) {
    //     $captcha=$_REQUEST['g-recaptcha-response'];
    // }

    // if (!$captcha){
        
    //     $status = array(
    //         'status_code'   => false,
    //         'status_msg'    => 'ERROR: Please check the captcha!'
    //     );
    //     echo json_encode( $status );
    //     die();
    // }
    
    // $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Led3CUTAAAAAFoM3sSh2cM0aBDd3CTaRX-UmWKy&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    
    // if ($response['success'] == false)
    // {
    //     $status = array(
    //         'status_code'   => false,
    //         'status_msg'    => 'ERROR: Spam detected.'
    //     );
    //     echo json_encode( $status );
    //     die();
    // } 




if ( empty( $_REQUEST['email'] ) ) {
	die( '{"status_code":false,"status_msg":"ERROR: message was not sent. No data to submit"}' );
}


// Save Lead

// $apiURL = 'http://localhost/sunspot_villa/_admin/custom/services/v2_1/Booking/soap.php';
$apiURL = 'http://admin1.sunspotvillaja.com/custom/services/v2_1/Booking/soap.php';
// $apiUserName = 'admin';
// $apiMd5Pass = md5('sunspot4eva');
$apiUserName = 'website';
$apiMd5Pass = md5('fAEPgZfAEPgZ');

    $soap_path = '/home/sunspotvillaja/public_html/examples/web/assets/nusoap/nusoap.php';
    // $soap_path = $_SERVER['DOCUMENT_ROOT'] . '/sunspot_villa/production/examples/web/assets/nusoap/nusoap.php';
    include($soap_path);


    
 
    $soapclient = new nusoap_client($apiURL ,false);
    $user_auth = array(
        'user_auth' => array(
        'user_name' => $apiUserName,
        'password' => $apiMd5Pass,
        'version' => '0.1'
    ),
    'application_name' => 'soapleadcapture');
    $result_array = $soapclient->call('login',$user_auth);
    
    
    $session_id =  $result_array['id'];
    $user_guid = $soapclient->call('get_user_id',$session_id);
   

	$description = PHP_EOL . 'Inquiring Booking Dates: ' . $_REQUEST['fromDate'] . ' - ' . $_REQUEST['toDate']  
    . PHP_EOL  . PHP_EOL . 'Country: ' . $_REQUEST['country'] 
	. PHP_EOL  . PHP_EOL . 'Number of Adult Guests: ' . $_REQUEST['numberAdultGuests']
    . PHP_EOL  . PHP_EOL . 'Number of Child Guests: ' . $_REQUEST['numberChildGuests']
    . PHP_EOL  . PHP_EOL . 'Number of Infant Guests: ' . $_REQUEST['numberInfantGuests']
    . PHP_EOL  . PHP_EOL . $_REQUEST['commentBox'] ;
	
    $set_entry_params = array(
        'session' => $session_id,
        'module_name' => 'Leads',
        'name_value_list'=>array(
            array('name'=>'last_name','value'=> $_REQUEST['name']),
            array('name'=>'email1','value'=> $_REQUEST['email']),
            array('name'=>'phone_mobile','value'=> $_REQUEST['phone']),
            array('name'=>'status', 'value'=> 'New'),                         
            array('name'=>'account_name','value'=> $_REQUEST['name']),                
            array('name'=>'description','value'=> $description ),
            array('name'=>'assigned_user_id', 'value'=>'')
            // 2e0dbd4f-2616-05f3-8b5e-5789a049a16c                 
        )
    );

    $result = $soapclient->call('set_entry',$set_entry_params);
    $lead_id = $result['id'];
    

    //////////////////////////////////////////////
    // Create Scheduled Meeting and Relate to Lead and User

    $t1 = StrToTime ( $_REQUEST['fromDate'] );
    $t2 = StrToTime ( $_REQUEST['toDate'] );
    $diff = $t2 - $t1;
    $hours = $diff / ( 60 * 60 );


    $set_entry_parameters = array(          
        "session" => $session_id,  
        "module_name" => "Meetings",  
        "name_value_list" => array(  
            array("name" => "name", "value" => 'Booking for ' . $_REQUEST['name'] ),  
            array("name" => "date_start", "value" => date('Y-m-d', strtotime($_REQUEST['fromDate']) ) ),  
            array("name" => "date_end", "value" => date('Y-m-d', strtotime($_REQUEST['toDate']) ) ),  
            array("name" => "duration_hours", "value" => $hours ),  
            array("name" => "status", "value" => 'Requested' ),   
            array('name'=>'assigned_user_id', 'value'=>'1')           
        )  
    );  
    $set_entry_result = $soapclient->call("set_entry", $set_entry_parameters);  
    $meeting_id = $set_entry_result['id'];  
    
    $set_relationship_parameters = array(  
        //session id  
        "session" => $session_id,          
        "module_name" => "Meetings",  
        "module_id" => $meeting_id,  
        "link_field_name" => "leads",  
        "related_ids" => array($lead_id)  
    );  
    $set_relationship_result = $soapclient->call("set_relationship", $set_relationship_parameters);   

    $set_relationship_parameters = array(  
        //session id  
        "session" => $session_id,          
        "module_name" => "Meetings",  
        "module_id" => $meeting_id,  
        "link_field_name" => "users",  
        "related_ids" => array('1')  
    );  
    $set_relationship_result = $soapclient->call("set_relationship", $set_relationship_parameters);   

    //////////////////////////////////////////////



    //////////////////////////////////////////////
    // Create Contact and Relate to Lead

    $set_entry_parameters = array(          
        "session" => $session_id,  
        "module_name" => "Contacts",  
        "name_value_list" => array(  
            array("name" => "salutation", "value" => 'test' ),  
            array("name" => "first_name", "value" => 'test' ),  
            array("name" => "last_name", "value" => 'test' ),  
            array("name" => "title", "value" => 'test' ),  
            array("name" => "phone_mobile", "value" => 'test' ),  
            array("name" => "email1", "value" => 'test' )  
        )  
    );  
    $set_entry_result = $soapclient->call("set_entry", $set_entry_parameters);  
    $contact_id = $set_entry_result['id'];  
    
    $set_relationship_parameters = array(  
        //session id  
        "session" => $session_id,          
        "module_name" => "Contacts",  
        "module_id" => $contact_id,  
        "link_field_name" => "leads",  
        "related_ids" => array($lead_id)  
    );  
    $set_relationship_result = $soapclient->call("set_relationship", $set_relationship_parameters);   

    //////////////////////////////////////////////



        $data = $_REQUEST;
        unset( $data['g-recaptcha-response'], $data['PHPSESSID'] );
        $data = print_r($data, true);
        $mailResponse = mail('newlead@sunspotvillaja.com', 'Lead created in safe mode', $data);



    
    // if ( $result['error']['number'] == 0 ) {
        
        $status = array(
            'status_code'   => true,
            'status_msg'    => 'Thank you for inquiring about our service. You will receive an e-mail with more information shortly.'
        );
        echo json_encode( $status ) ;
        die();

/*
    } else {

        $data = print_r($SaleInfoArray, true);

        $mailResponse = mail('andre.rhoden@upshootmedia.com', 'Email request sent in safe mode', $data);

        if ($mailResponse) {
            
            $status = array(
                'status_code'   => true,
                'status_msg'    => 'Error, request was sent in safe mode. <br>' . print_r($result, true)
            );
            echo json_encode( $status ) ;
            die();

        } else {
            $status = array(
                'status_code'   => false,
                'status_msg'    => 'Error, request was not sent'
            );
            echo json_encode( $status ) ;
            die();
        }

    }
*/
