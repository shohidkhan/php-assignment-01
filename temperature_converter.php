<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex just justify-content-center align-items-center" style="height: 100vh;">
        <div class="p-5 border rounded w-50">
            <h4>Temperature Converter</h4>
            <form action="" method="post" class="mt-3">
                <div class="from-group my-3">
                    <label for="">Temperature Value</label>
                    <input type="text" class="form-control" name="temp_value" placeholder="Enter Temperature value">
                </div>
                <div>
                <label for="">Temperature Direction</label>
                    <select name="temp_direction" class="form-control">
                        <option value="">Select Temperature Direction</option>
                        <option value="fahrenheit">Celsius To Fahrenheit</option>
                        <option value="celsius"> Fahrenheit to Celsius</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Convert</button>
            </form>

            <div id="output" >
            <h3 class="text-success text-center mt-5">
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $temperature=$_POST['temp_value'];
                    $direction=$_POST['temp_direction'];

                    if($direction == 'fahrenheit'){
                        $farenheit= ($temperature*(9/5))+32;
                        echo "$farenheit F of $temperature  Celsius.";
                    }
                    else{
                        $celsius= ($temperature-32)*(5/9);
                        echo "$celsius C of $temperature fahrenheit.";
                    }
                }
                ?>
            </h3>
            
            </div>
        </div>
    </div>
</body>
</html>