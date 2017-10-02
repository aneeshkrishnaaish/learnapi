<?php
include_once ('Controller/users.php');
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['app_user_email']) && isset($_POST['app_user_pass'])) {
    // receiving the post params
    $email = $_POST['app_user_email'];
    $password = $_POST['app_user_pass'];
 
    // get the user by email and password
    $user = getUserByEmailAndPassword($email, $password);
 
    if ($user != false) {
        // user is found
        $response["error"] = FALSE;
		$response["user"]["id"] = $user["id"];
        $response["user"]["app_user_email"] = $user["app_user_email"];
        $response["user"]["app_user_name"] = $user["app_user_name"];
		
        echo json_encode($response);
    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Wrong email or password entered! Please try again!"
        echo json_encode($response);
    }
} else {
    //required post params is missing
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters missing :(!";
    echo json_encode($response);
}
?>