
<style>
body {
    font-family: Cambria;
    height: 100%;
    background-image: linear-gradient(#4e0374, #c37ee6);
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
<div class="row" style="margin-bottom: 72px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <center><h1 style="color:white;">Heart Disease Predictor</h1></center>
        <div class="card card-body" style="border: 1px solid black; background-color: #daa8f4">
            <form class="form-horizontal" action="heart.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="age" placeholder="Age (in years)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="sex" placeholder="Sex (1 = Male; 0 = Female)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="cp" placeholder="Chest Pain Type"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="trestbps" placeholder="Resting Blood Pressure (in mm Hg)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="chol" placeholder="Serum Cholesterol (in mg/dl)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="fbs" placeholder="Fasting Blood Sugar > 120 mg/dl (1 = True; 0 = False)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="restecg" placeholder="Resting Electrocardiograph Results">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="thalach" placeholder="Maximum Heart Rate Achieved">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="exang" placeholder="Exercise Induced Angina (1 = Yes; 0 = No)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="oldpeak" placeholder="ST Depression Induced by Exercise Relative to Rest">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="slope" placeholder="The Slope of the Peak Exercise ST Segment">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="ca" placeholder="Number of Major Vessels (0-3) Colored by Fluoroscopy">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input style="border: 1px solid black; background-color: #f0d0ff" class="form-control" type="text" name="thal" placeholder="Thal: 1 = Normal; 2 = Fixed Defect; 3 = Reversible Defect">
                        </div>
                    </div>
                </div>
                <input style="background-color: #4e0374" type="submit" class="btn btn-info btn-block" value="Predict">
            </form>
        </div>
    </div>
<!--    <div class="col-md-2"></div>-->
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form inputs
    $cp = $_POST["cp"];
    $trestbps = $_POST["trestbps"];
    $chol = $_POST["chol"];
    $fbs = $_POST["fbs"];
    $restecg = $_POST["restecg"];
    $thalach = $_POST["thalach"];
    $exang = $_POST["exang"];
    $slope = $_POST["slope"];
    $ca = $_POST["ca"];
    $thal = $_POST["thal"];

    // Check conditions and provide the result
    if (in_array(strtolower($cp), ["squeezing", "pressure", "heaviness"])) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($trestbps > 120) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($chol > 160) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($fbs == 1) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($thalach > 150) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($exang == 0) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif ($ca < 0 || $ca > 3) {
        echo "Sorry! Please Consult a DOCTOR.";
    } elseif (!in_array($thal, [1, 2, 3])) {
        echo "Sorry! Please Consult a DOCTOR.";
    } else {
        echo "Great! You are HEALTHY";
    }
} 

?>

</body>
</html>
