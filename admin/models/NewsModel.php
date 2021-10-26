<?php 
	trait NewsModel{
		//lay ve danh sach ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			// lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//--
			//lay bien ket noi csdl
			$conn = Connection::GetInstance();
			//thuc hien truy van
			$query =  $conn->query("select * from news order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::GetInstance();
			//thuc hien truy van
			$query =  $conn->query("select * from news");
			// tra ve so luong ban ghi
			return $query->rowCount();
			
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from news where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;			
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			// chuan bi truy van
			$query = $conn->prepare("update news set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot]);
			//neu password khong rong thi update password
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from news where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/news/".$record->photo))
						unlink("../assets/upload/news/".$record->photo);
					}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/news/$photo");
				$query = $conn->prepare("update news set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
				}
			}
		public function modelCreate(){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/news/$photo");
			}
			//chuan bi truy van
			$query = $conn->prepare("insert into news set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,photo=:var_photo");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_photo"=>$photo]);

		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from news where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/news/".$record->photo))
					unlink("../assets/upload/news/".$record->photo);
			}
			//chuan bi truy van
			$query = $conn->prepare("delete from news where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
?>