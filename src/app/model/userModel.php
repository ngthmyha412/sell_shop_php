<?php 

class userModel {
    //login
    public function user_login($username, $password){
    	$conn = Database::get_DB();
        try{
			$query="select * from user where username='".$username."' and password='".$password."'";
			$statement=$conn->query($query);
			$result=$statement->fetch_all();
			$statement->closeCursor();
			if(count($result)>0){
				return true;
			}else{
				return false;
			}
			
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
    }
    //index
    public function users_all($limit, $first){
        
    }
    public function users_count(){
        
    }
    public function user_detail_id($id){
           
    }

    //RECYCLEBIN
    public function user_trash($limit, $first){
        
    }
    public function user_trash_count(){
        
    }

    public function user_restore($id){
        
    }

    //
    public function user_insert($mydata){
        
    }
    public function user_update($mydata, $id){
        
    }
    public function user_delete($id){
        
    }
    //header
    public function user_name($id){
        
    }
    //
    public function groupadmin_list(){
        
    }
}