<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Even And odd number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex just justify-content-center align-items-center" style="height: 100vh;">
        <div class="p-5 border rounded w-50">
            <h4>Check Even And odd number.</h4>
            <form action="" method="post" class="mt-3">
                <div class="from-group my-3">
                    <label for="">Number</label>
                    <input type="text" class="form-control" name="number">
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">Check</button>
            </form>

            <div id="output" >
            <h3 class="text-success text-center mt-5">
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $number=$_POST['number'];
                    switch($number){
                        case $number % 2 == 0:
                            echo "$number is Even Number."; 
                            break;
                        default: 
                        echo    "$number is Odd Number.";
                    }
                }
                ?>
            </h3>
            
            </div>
        </div>
    </div>
    
</body>
</html>