<?php require_once "includes/layout/header.php"; ?>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="upload">
    		<form name="import" method="post" enctype="multipart/form-data">
                <input type="file" name="file" /><br />
                <input type="submit" name="submit" value="Submit" />
            </form>
    		<?php

    		if(isset($_POST["submit"]))
    		{
    			$file = $_FILES['file']['tmp_name'];
    			$handle = fopen($file, "r");
    			$n = 0;
    			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    			{
    				$rollno = $filesop[0];
    				$name = $filesop[1];
    				$insert = insert_from_csv($rollno, $name);
    				$n = $n + 1;
    			}

    			if($insert)
    				echo "Your database has imported successfully. You have inserted ". $n ." records";
    			else 
    				echo "Sorry! There is some problem.";
    		}

    		?>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php require_once "includes/layout/footer.php"; ?>