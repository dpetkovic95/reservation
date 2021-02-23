<?php include_once 'server.php';
	$movies = [];
	$query = $_POST['query']; 

	
		
		$query = htmlspecialchars($query); 
		$query = mysqli_real_escape_string($db,$query);
		$raw_results = mysqli_query($db,"SELECT * FROM `movies`
			WHERE `title` LIKE '%{$query}%'");
        
        
		if(mysqli_num_rows($raw_results) > 0){ 
			
			while($results = mysqli_fetch_assoc($raw_results)){
				
				$movies[] = $results;
				
			}
		}
		
	
?>