<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxxy: A Calculator Web App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <div class="container">
            <h1 class = "calculator-label"> Taxxy: A Tax Calculator </h1>
        
                <form action="#" method="POST"> 
                    <p class = "salary-label"> Salary: <input type="text" name="salaryy" class="salary">
                    <p class="top-label">Type of Payment:</p>
                    <label for="option1">
                        <input type="radio" id="option1" name="payment-type" value="Bi-Monthly">
                        Bi-Monthly
                    </label>
                
                    <label for="option2">
                        <input type="radio" id="option2" name="payment-type" value="Monthly">
                        Monthly
                    </label>
                    <br>
                    <button class="submit" type="submit" name="submit" value="submit">COMPUTE</button>
                    <button class="reset" type="reset" value="reset">CLEAR</button>
                </form>
        
            <?php
            if (isset($_POST['submit'])) {
                $salary = $_POST['salaryy'];
                $salaryType = $_POST['payment-type'];

                if ($salaryType == "Monthly") {
                    $annualSalary = $salary * 12;
                } else {
                    $annualSalary = $salary * 24;
                }

                if ($annualSalary <= 250000) {
                    $tax = 0;
                } else if ($annualSalary <= 400000) {
                    $excess = 250000;
                    $tax = (($annualSalary - $excess) * 0.20);
                } else if ($annualSalary <= 800000) {
                    $excess = 400000;
                    $tax = 30000 + (($annualSalary - $excess) * 0.25);
                } else if ($annualSalary <= 2000000) {
                    $excess = 800000;
                    $tax = 130000 + (($annualSalary - $excess) * 0.30);
                } else if ($annualSalary <= 8000000) {
                    $excess = 2000000;
                    $tax = 490000 + (($annualSalary - $excess) * 0.32);
                } else {
                    $excess = 8000000;
                    $tax = 2410000 + (($annualSalary - $excess) * 0.35);
                }

                $annualTax = $tax;
                $monthlyTax = $annualTax / 12;


                echo "<p>Annual Salary: </p>₱" . number_format($annualSalary, 2) . "<br>";
                echo "<p>Annual Tax: </p>₱" .number_format($annualTax, 2) . "<br>";
                echo "<p>Monthly Tax: </p>₱" .number_format($monthlyTax, 2);
            }

            ///annual tax = annual salary - tax = total x 0.2
            //monthly tax = annual tax /12
            ?>
        </div>
    </div>
</body>
 </html>