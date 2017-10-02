<?php
include_once('Database.php');
class Register{

		function getAllUsers(){
		$db = new Database();
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		$array = array(
// 				'user_status'	      => "Y",
// 				'user_role'	      => "**"
		); 
		
		/* $result = $db->queryWithParamsArray("SELECT user_id,user_name,user_email,owner_name,restaurant_name,user_address,
				city,country,postal_code,user_phone,user_image,langitude,latitude,user_status
				from restaurant_user where user_status =:user_status AND user_role=:user_role", $array); */
		
		$result = $db->queryWithParamsArray("SELECT *FROM app_user", $array);
		
		if($result->rowCount() > 0 )
			return $result->fetchAll();
		else
			return FALSE;
	}
	
	function insert($array){
		$db = new Database();
	
		$stmt = $db->queryWithParamsArray("insert into app_user(app_user_name, app_user_pass,
				app_user_email, app_user_phone, app_user_gender, app_user_image, app_user_status)
				values(:app_user_name, :app_user_pass, :app_user_email, :app_user_phone,
				:app_user_gender, :app_user_email, :app_user_email)",$array);
		if($stmt){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	
	function login($array){
		$db = new Database();
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
		$result = $db->queryWithParamsArray("SELECT * from app_user where app_user_name =:app_user_name  AND app_user_pass=:app_user_pass", $array);
		if($result->rowCount() > 0 )
			return $result->fetch();
		else
			return FALSE;
	}
	
	function isDuplicate($app_user_name){
		$db = new Database();
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
		$array = array(
				'app_user_name'	      => $app_user_name
		);
	
		$result = $db->queryWithParamsArray("SELECT * from app_user where app_user_name=:app_user_name", $array);
		if($result->rowCount() > 0 )
			return TRUE;
		else
			return FALSE;
	}
	
}

?>