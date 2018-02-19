<?php
if(isset($_POST['data'])) {
  $userinfo = $_POST['data'];
  $userinfo=json_encode($userinfo);
  if($userinfo->username=='KK'&& $userinfo->password=='OK'){
    $res_json=json_encode($userinfo);
    echo $res_json;
  }
  else
    echo json_encode(array('username'=>'wrong username','password'=>'wrong password'));
  //var_dump(json_decode($json, true));
} else {
  // echo "Noooooooob";
}
?>
