<?php 
	
	include('dbconnection.php');
	
	class offering{
		//function to get offering by user_id
		public function get_offerings_by_user_id($user_id,$item_num)
		{
			//creating connection
			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM offering where user_id = $user_id";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$row2 = mysqli_fetch_array($sql_result);
			//for loop to store data in 2-D array
			for($row=0;$row<$item_num;$row++)
				{
					$data[$row][0] = $row2['offer_id'];
					$data[$row][1] = $row2['picture'];
					$data[$row][2] = $row2['title'];
					$data[$row][3] = $row2['description'];
					$data[$row][4] = $row2['date'];
					$row2 = mysql_fetch_array($sql_result);
				}
		//returning the array
		return ($data);
	}
		

		//getting offerings by category
		public function get_offerings_by_category($category_id, $item_num,){
			//creating connection
			$con = create_connection();
			//if no category_id is defined
			if ($category_id==0) 
	    {
	                  $sql=mysqli_query($con,"SELECT DISTINCT * FROM offering ")or die(mysql_error());

	    }
	    	//else with category_id
	    	else
	    {
	                  $sql=mysqli_query($con,"SELECT DISTINCT * FROM offering o  inner join offer_category oc on o.offer_id=oc.offer_id where oc.category_id='$category_id'")or die(mysql_error());

	    } 
					//fetching data in array
		            $row2=mysqli_fetch_array($sql);
		            //for loop to store data in 2-D array
	                for($row=0;$row<$item_num;$row++)
	                { 
	                            
	                    $data[$row][0] = $row2['offer_id'];
						$data[$row][1] = $row2['picture'];
						$data[$row][2] = $row2['title'];
						$data[$row][3] = $row2['description'];
						$data[$row][4] = $row2['date'];
						$data[$row][5] =$row2['user_id'];
	                    $row2=mysqli_fetch_array($sql);
	                            
	                }
	    //returning data array
	    return($data);
	               
	           }
	    public function featured_offering()
	    {
	    	$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM offering ";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$row2 = mysqli_fetch_array($sql_result);
			//for loop to store data in 2-D array
			for($row=0;$row<$item_num;$row++)
				{
					$data[$row][0] = $row2['picture'];
					$data[$row][1] = $row2['title'];
					$row2 = mysql_fetch_array($sql_result);
				}
		//returning the array
		return ($data);
	    }

        //create new offering
		public function create_offering($user_id,$title,$description,$picture)
		{
			//creating connection
			$con = create_connection();
			//query for storing value in table
			$sql_query =	mysqli_query($con,"INSERT INTO offering(user_id, title, description, picture, date) VALUES ('$user_id', '$title', '$description', '$picture', Now())");
		}

		//update offering
		public function update_offering($user_id,$offer_id,$title,$description,$picture)
		{
			//creating connection
			$con = create_connection();
			//query for update values in table
			$sql_query = mysqli_query($con,"UPDATE offering SET title = $title, description = $description, picture = $picture WHERE offer_id = $offer_id AND user_id = $user_id");
		}

		//delete offering
		public function delete_offering($user_id,$offer_id)
		{
			//creating connection
			$con = create_connection();
			//query for delete values from table
			$sql_query = mysqli_query($con,"DELETE FROM offering WHERE user_id = $user_id AND offer_id = $user_id");
		}

}

?>