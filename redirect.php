<?php 
	require_once('top.php');
	// require_once('db/dbconnector.php');
    require_once('helper/pesapalV30Helper.php');

    $consumer_key = "wtBqTmDwiRC+xRNv0mZmQ3N04lgCkm8e";
    $consumer_secret = "ExKOKS2rfDzAJGDR8GJmJBBUKKQ=";

    $api = 'demo';

    $helper = new pesapalV30Helper($api);

    $access = $helper->getAccessToken($consumer_key, $consumer_secret);
    $access_token = $access->token;
    // echo $access_token;

        
    if(isset($_GET['OrderTrackingId']))
        $orderTrackingId = $_GET['OrderTrackingId'];
        
    
    $status = $helper->getTransactionStatus($orderTrackingId, $access_token);

    // var_dump($status)
    
    //At this point, you can update your database.
    //In my case i will let the IPN do this for me since it will run
    //IPN runs when there is a status change  and since this is a new transaction, 
    //the status has changed for UNKNOWN to PENDING/COMPLETED/FAILED
    // <b>Status: </b> <?php echo $status->payment_status_description 
?>
<!-- <h3>Callback/ return URl</h3> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="row-fluid ">
	<div class="span6 text-success">
        <b class="text-success">PAYMENT RECEIVED SUCCESSFULLY</b>
        <blockquote class="text-success">
         	<b  class="text-success">Order Tracking ID: </b> <?php echo $orderTrackingId; ?><br />
         	<b  class="text-success">Status: </b> <?php echo $status->payment_status_description; ?><br /> 
        </blockquote>
    </div>
</div>