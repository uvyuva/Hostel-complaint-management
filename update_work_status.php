<?php
require 'includes/config.inc.php';

echo $_GET['id'] . $_GET['work'];

$id = $_GET['id'];
$q = 'select * from message where msg_id = "' . $_GET['id'] . '"';
$result = $conn->query($q);
$r = mysqli_fetch_assoc($result);
if(empty($r['work'])){
    $work = $_GET['work'];
}
else{
    $work = explode('-', $r['work']);
    print_r($work);
    if(count($work) == 2){
        if($_GET['work'] == 'wc'){
            $work = 'wa';
        }
        else{
            $work = 'wc';
        }
    }
    elseif(count($work) == 1){
        if(in_array($_GET['work'], $work)){
            $work = '';
            // echo "Here";
        }
        else{
            $work = $r['work'] . '-' . $_GET['work'];
        }
    }
    else{
        $work = $r['work'] . '-' . $_GET['work'];
    }
}

$q = 'update message set work = "' . $work . '" where msg_id = "' . $id . '"';
echo $q;
$conn->query($q);

header("Location: message_hostel_manager.php");