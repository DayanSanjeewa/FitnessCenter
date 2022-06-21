<?php

	if(isset($_POST['btn-send'])){
		
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Comment = $_POST['Comment'];

		if (!empty($Name) || !empty($Email) || !empty($Comment)) {
			// code...
			$to= "dayanswijesekera@gmail.com";

			if(mail($to, $Name, $Comment)){

				header("location:index.php?success");
			}
		}

	}

	else{
		header("location:index.php");
	}


?> 