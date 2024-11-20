
<style>
body {
    font-family: Cambria;
    height: 100%;
    background-image: linear-gradient(#4e0374, #c37ee6);
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

        .result {
            font-size: 18px;
            color: #4e0374;
            text-align: center;
            margin-top: 20px;
        }
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <center><h1 style="color:white;">Diabetes Predictor</h1></center>
        <div class="card card-body" style="border: 1px solid black; background-color: #daa8f4">
            <form class="form-horizontal" action="DiabetesPredictPage.php" method="POST">
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="Pregnancies" placeholder="No. of Pregnancies">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="Glucose" placeholder="Glucose">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="BloodPressure" placeholder="Blood Pressure (in mmHg)">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="SkinThickness" placeholder="Skin Thickness (in mm)">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="Insulin" placeholder="Insulin (in µU/ml)">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="BMI" placeholder="BMI">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="DiabetesPedigreeFunction" placeholder="Diabetes Pedigree Function">
                </div>
                <div class="form-group">
                    <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="Age" placeholder="Age (in years)">
                </div>

                <input style="background-color: #4e0374" type="submit" class="btn btn-info btn-block" value="Predict">
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pregnancies = (int)$_POST["Pregnancies"];
        $glucose = (int)$_POST["Glucose"];
        $bloodPressure = (int)$_POST["BloodPressure"];
        $skinThickness = (int)$_POST["SkinThickness"];
        $insulin = (int)$_POST["Insulin"];
        $bmi = (float)$_POST["BMI"];
        $age = (int)$_POST["Age"];

        $result = "consult doctor";

        if ($pregnancies == 0) {
            if ($glucose >= 100 && $glucose <= 125) {
                $result = "healthy";
            }
            if ($bloodPressure <= 100) {
                $result = "healthy";
            }
            if ($skinThickness > 3) {
                $result = "healthy";
            }
            if ($insulin < 250) {
                $result = "healthy";
            }
            if ($bmi >= 23 && $bmi <= 25) {
                $result = "healthy";
            }
            if ($age > 0) {
                $result = "healthy";
            }
        }

        echo '<div class="result">Result: ' . $result . '</div>';
    }
    ?>