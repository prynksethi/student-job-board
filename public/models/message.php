<?php

	class message{
		//function to get offering by user_id

		public function get_message_by_thread($thread)
		{

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM message INNER JOIN thread ON thread.thread_id=message.thread WHERE message.thread='".$thread."' ORDER BY timestamp";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			
			//for loop to store data in 2-D array

			while ($row= mysqli_fetch_array($sql_result)){
				$data[]=array('userid'=>$row['user_id'],'title'=>$row['title'],'senderid'=>$row['sender_id'],'msg'=>$row['msg'],'thread'=>$row['thread'],'timestamp'=>$row['timestamp']);
				$reciever=$row['user_id'];
			}
		//returning the array
			echo $reciever;
			if($reciever==$_SESSION['userid']){
				$update_query="UPDATE message SET read_status='Yes' WHERE thread='$thread'";
				$sql_res = mysqli_query($con,$update_query) or die("Couldn't Execute Query");
			}

		return ($data);

		}

		public function list_message_by_thread($user_id)
		{

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM message INNER JOIN thread ON message.thread=thread.thread_id WHERE user_id='".$user_id."' GROUP BY message.user_id, message.sender_id, message.thread";
			//storing query value in result



			$list = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			$rowcount=mysqli_num_rows($list);

			if($rowcount==0)
			{
				return 0;
				exit();
			}

			else{
			
			while($row = mysqli_fetch_array($list)){
				$data[]=array('user_id'=>$row['user_id'],'sender_id'=>$row['sender_id'],'thread'=>$row['thread'],'msg'=>$row['msg'],'read_status'=>$row['read_status'], 'title'=>$row['title']);
				}
				return $data;
				exit();
		}
		}


		




		
		public function get_unread_message_by_user_id($user_id)
		{

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT count(*) as num FROM message WHERE user_id=$user_id and read_status='No'";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
		
			//for loop to store data in 2-D array

			$data=mysqli_fetch_array($sql_result);
			
				
		//returning the array
		return ($data['num']);
		}

	public function first_message($user_id,$sender_id,$msg,$offertitle,$read_status){
	$con = create_connection();
	//selecting offering table for particular user
	$sql_query1 = "INSERT INTO thread(title) VALUES ('$offertitle')";
	$sql_result1 = mysqli_query($con,$sql_query1) or die("Couldn't Execute Query");

	$thread=mysqli_insert_id($con);

	$sql_query = "INSERT INTO message(user_id,sender_id,thread,msg,read_status,timestamp) VALUES ('$user_id','$sender_id','$thread','$msg','$read_status',NOW())";
	//storing query value in result
	$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
	//fetching data as an array from database

	}

		public function send_message($user_id,$sender_id,$msg,$thread,$read_status){

			$con = create_connection();
			//selecting offering table for particular user


			$sql_query = "INSERT INTO message(user_id,sender_id,thread,msg,read_status,timestamp) VALUES ('$user_id','$sender_id','$thread','$msg','$read_status',NOW())";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			

	}

	}
?>