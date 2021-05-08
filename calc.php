<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link  href="index.css" rel="stylesheet">  -->
    <title>Bolor</title>
</head>

<?php

if ( isset($_POST['number1']) &&  $_POST['number1'] !="" &&
     isset($_POST['number2']) &&  $_POST['number2'] !="" &&
     isset($_POST['operation']) &&  $_POST['operation'] !="") {
    $operation = $_POST['operation'] ;
    switch ($operation) {
        case "+" :
            $answer = $_POST['number1'] + $_POST['number2'] ;
        break;    
        case "-":
            $answer = $_POST['number1'] - $_POST['number2'] ;
        break ;   
        case "*" :
            $answer = $_POST['number1'] * $_POST['number2'] ;
        break  ;  
        case "/" :
            $answer = $_POST['number1'] / $_POST['number2'] ;
        break;
        default : 
            $answer = 'Error';    
    }
    echo $answer ;
}

?>

<body>
    <div class="container">
		<div class="row">
			<div class="col-12">
				<form action="calc.php" method="POST" >
					<h2>Calculator</h2>
					<input name="number1" type="number" required placeholder="#"/>
					<input name="number2" type="number" required placeholder="#"/>
                    <select required name="operation" class="form-select" aria-label="operation">
                        <option selected></option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
					<button type="submit">calculate</button>
				</form>
			</div>
		</div>
	</div>   
</body>
</html>
