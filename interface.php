<?php
if(!empty($_POST['range'])){
    if($_POST['range'] == 'all'){
        echo json_encode(['msg'=> 'data recieved']);
    }
}
?>
