<?php

Class Profile
{
	
	function get_profile($id){

		$id = addslashes($id);
        // addslashes is use for escaping 
        // generally use to protect our site from sql injection
        //  for eg ?id = '4' in address bar will be changed into id ='\4'
        //  thats how the protection is done and is called as variable escaping
        
		$DB = new Database();
		$query = "select * from users where userid = '$id' limit 1";
		return $DB->read($query);

	}
}