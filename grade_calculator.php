<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="d-flex just justify-content-center align-items-center" style="height: 100vh;">
        <div class="p-5 border rounded w-50">
            <h4>grade Calculate</h4>
            <form action="" method="post" class="mt-3">
                <div class="from-group my-3">
                    <label for="">Score 1</label>
                    <input type="text" class="form-control" name="score1">
                </div>
                <div class="from-group my-3">
                    <label for="">Score 2</label>
                    <input type="text" class="form-control" name="score2" >
                </div>
                <div class="from-group my-3">
                    <label for="">Score 3</label>
                    <input type="text" class="form-control" name="score3" >
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">calculate</button>
            </form>

            <div id="output" >
            <h3 class="text-success text-center mt-5">
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $score1=$_POST['score1'];
                    $score2=$_POST['score2'];
                    $score3=$_POST['score3'];

                    $average = ($score1 + $score2 + $score3) / 3;

                    switch($average){
                        case $average >= 90:
                            echo "Average number is $average. Your grade is A";
                            break;
                        case $average >=80;
                            echo "Average number is $average. Your grade is B";
                            break;
                        case $average >= 70;
                            echo "Average number is $average. Your grade is C";
                            break;
                        case   $average >=60;
                            echo "Average number is $average. Your grade is D";
                            break;
                        default :
                        echo "Average number is $average. Your grade is F";      

                    }
                }
                ?>
            </h3>
            
            </div>
        </div>
    </div>
    
</body>
</html>