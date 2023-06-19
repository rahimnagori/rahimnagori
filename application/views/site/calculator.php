<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zakat Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputX">Total Income (X)</label>
                    <input type="number" class="form-control" id="inputX" onchange="calculate_zakat();" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputY">Expenses (Y)</label>
                    <input type="number" class="form-control" id="inputY" onchange="calculate_zakat();" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                Zakat is applicable for more than 100.
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="output"></div>
        </div>
    </div>

    <script>
        function calculate_zakat() {
            let inputX = parseInt($("#inputX").val())
            let inputY = parseInt($("#inputY").val())
            if(inputX > 0 && inputY > 0){
                if(inputX > inputY){
                    let difference = inputX - inputY
                    if(difference > 100){
                        let applicableZakat = difference * 2.5 / 100
                        $("#output").html(`Total applicable Zakat is: ${applicableZakat}`)
                    }else{
                        $("#output").html(`Amount is not eligible for Zakat.`)
                    }
                }else{
                    $("#output").html("Income cannot be less then expenses.");
                }
            }
        }
    </script>

</body>

</html>