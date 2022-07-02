<?php
class categoryModel {
	public function get_brands($id){
        $conn = Database::get_DB();
		try{
			$query ="select * from category where level=".$id;
            $resultSet = $conn->query($query);
			$rs=$resultSet->fetch_all(MYSQLI_ASSOC);
			return($rs);
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
}