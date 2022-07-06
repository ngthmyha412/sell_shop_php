<?php 

class userModel {
    //login
    public function user_login($username, $password){
    	$conn = Database::get_DB();
        try{
			$query="select * from user where username='".$username."' and password='".$password."'";
			$statement=$conn->query($query);
			$result=$statement->fetch_all();
			if(count($result)>0){
				return true;
			}
            else{
				return false;
			}
			
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
    }
    //index
    public function users_all(){
        $conn = Database::get_DB();
        try{
			$query="select * from user";
			$statement=$conn->query($query);
			$result=$statement->fetch_all();
			return $result;
			
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
    }
    public function users_count($username, $password){
        $conn = Database::get_DB();
        try{
			$query="select * from user where username='".$username."' and password='".$password."'";
			$statement=$conn->query($query);
			$result=$statement->fetch_all();
			if(count($result)>1){
				return false;
			}else{
				return true;
			}
			
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
    }
    public function user_detail_id($id){
        
    }

    public function user_register($newuser){
        $conn = Database::get_DB();
		try {
			$query = "insert into user(id,fullname,username,password,role,email,phone,address,img)
			VALUES('".$newuser[0]."','".$newuser[1]."','".$newuser[2]."','".$newuser[3]."',
            '".$newuser[4]."','".$newuser[5]."','".$newuser[6]."',
            '".$newuser[7]."','".$newuser[8]."')";
			$statement=$conn->query($query);
			if($statement){
				return true;
			}else{
				return false;
			}
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
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