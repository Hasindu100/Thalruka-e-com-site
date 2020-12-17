<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'config.php'; 
     
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif','pdf','jxr');
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName;
			
			$item_id = $_POST["item_id"];
			$caption = $_POST["caption"];
			$price = $_POST["price"];
			$catagory = $_POST["catagory"];
			
			$sql = "SELECT cat_id FROM catagory where name='$catagory'";
$result = mysqli_query($db, $sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		$cid = $row['cat_id'];
	}
}
			
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', NOW()),";
					//$insertValuesSQL .= "('".$fileName."','".$item_id."', NOW()),"; 					
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ',');
			//echo $insertValuesSQL;
			//echo $fileName;
            // Insert image file name into database
			$insert = $db->query("INSERT into item (item_id, name, price, cat_id, file_name, uploaded_on) VALUES ('".$item_id."','".$caption."','".$price."','".$cid."','".$fileName."', NOW())");
			//$insert = $db->query("INSERT INTO item (item_id, name, cat_id, quantity, uploaded_on) VALUES $item_id,$caption,$catagory,$quantity,NOW()");
           // $insert = $db->query("INSERT INTO images (file_name, item_id, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 
?>