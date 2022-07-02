<?php

class productModel {
	public function get_products(){
        $conn = Database::get_DB();
		try{
			$query ="select * from product";
            $resultSet = $conn->query($query);
			$rs=$resultSet->fetch_all(MYSQLI_ASSOC);
			return($rs);
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
    public function get_products_home(){
        $conn = Database::get_DB();
		try{
			$query ="select * from product order by rand() limit 3";
            $resultSet = $conn->query($query);
			$rs=$resultSet->fetch_all(MYSQLI_ASSOC);
			return($rs);
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function get_product_by_catid($catid){
        $conn = Database::get_DB();
		try{ 
			$query ="select * from category
			where catid=:id";
			$statement=$conn->query($query);
			$statement->bindValue(':id', $catid);
			$rs=$statement->fetch_all();
			return($rs);
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function get_product_by_alias($alias){
        $conn = Database::get_DB();
		try{ 
			$query ="select * from product
			where alias=?";
			$statement=$conn->query($query);
			$statement->bindParam(1, $alias);
            $rs=$statement->fetch();
			return $rs;
		} catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function add_product($product){
        $conn = Database::get_DB();
		try {
			$query = "insert into product(id,catid,name,alias,avatar,img,sortDesc,detail,producer,number, number_buy, sale, price, price_sale)
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$statement=$conn->prepare($query);
			$statement->bindParam(1,$product['id']);
			$statement->bindParam(2,$product['catid']);
			$statement->bindParam(3,$product['name']);
			$statement->bindParam(4,$product['alias']);
			$statement->bindParam(5,$product['avatar']);
			$statement->bindParam(6,$product['img']);
			$statement->bindParam(7,$product['sortDesc']);
			$statement->bindParam(8,$product['detail']);
			$statement->bindParam(9,$product['producer']);
			$statement->bindParam(10,$product['number']);
            $statement->bindParam(11,$product['number_buy']);
			$statement->bindParam(12,$product['sale']);
			$statement->bindParam(13,$product['price']);
			$statement->bindParam(14,$product['price_sale']);
			$statement->execute();
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}

	}
	public function delete_product($alias){
		$conn = Database::get_DB();
		try {
			$query="delete from product where alias=?";
			$statement=$conn->prepare($query);
			$statement->bindParam(1,$alias);
			$statement->execute();
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function update_product($product){
        $conn = Database::get_DB();
		$query='update product set catid=?,name=?,alias=?,avatar=?,img=?,sortDesc=?,detail=?,producer=?,number=?,number_buy=?,sale=?,price=?,price_sale=?
		WHERE id=?';
		try {
			$statement->bindParam(1,$product['id']);
			$statement->bindParam(2,$product['catid']);
			$statement->bindParam(3,$product['name']);
			$statement->bindParam(4,$product['alias']);
			$statement->bindParam(5,$product['avatar']);
			$statement->bindParam(6,$product['img']);
			$statement->bindParam(7,$product['sortDesc']);
			$statement->bindParam(8,$product['detail']);
			$statement->bindParam(9,$product['producer']);
			$statement->bindParam(10,$product['number']);
            $statement->bindParam(11,$product['number_buy']);
			$statement->bindParam(12,$product['sale']);
			$statement->bindParam(13,$product['price']);
			$statement->bindParam(14,$product['price_sale']);
			$result = $statement->execute();
			return $result;
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function search_product($search_value){
        $conn = Database::get_DB();
		$search_value='%'.trim($search_value).'%';
		try {
			$query ="select * FROM product WHERE name like?";
			$statement=$conn->prepare($query);
			$statement->bindParam(1,$search_value);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error:$error_message ";
			exit();
		}
	}
	public function check_peoduct_id($id){
        $conn = Database::get_DB();
		$query ="select * from product where id=?";
		try {
			$statement =$conn->prepare($query);
			$statement->bindParam(1,$id);
			$statement->execute();
			$result = $statement->fetch();
			if(!empty($result)){
				return true;
			}else{
				return false;
			}
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "database error: $error_message";
			exit();
		}
	}
}