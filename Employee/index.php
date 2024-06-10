<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Income Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="John Doe">
                                </div>                            
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="civil" class="form-label">Civil Status</label>
                                    <select name="civil" id="civil" class="form-select" placeholder="Select Civil Status">
                                        <option value="single">single</option>
                                        <option value="married">married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                <label for="position" class="form-label">Position</label>
                                    <select name="position" id="position" class="form-select" placeholder="Select position">
                                        <option value="admin">admin</option>
                                        <option value="staff">staff</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="employment" class="form-label">Employment Status</label>
                                    <select name="employment" id="employment" class="form-select" placeholder="Select Employment Status">
                                        <option value="contractual">Contractual</option>
                                        <option value="probationary">Probationary</option>
                                        <option value="regular">Regular</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="regular_hour" class="form-label">Regular Hours Rendered</label>
                                    <input type="number" name="regular_hour" id="regular_hour" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="over_time" class="form-label">Over Time Hours</label>
                                <input type="number" name="over_time" id="over_time" class="form-control">
                            </div>
                            
                            <div class="row">
                                
                                <div class="col">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success w-100">
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            
            </div>
        </div>

    </div>

    <?php
    include 'employee.php';

    if(isset($_POST['submit'])){
    ?>

        <?php
        $employee = new Employee($_POST['fullname'], $_POST['civil'],$_POST['position'],$_POST['employment'],$_POST['regular_hour'],$_POST['over_time']);
        ?>

        <div class="col-8">
            <div class="card border-0">
                <div class="card-body">
                    <table>
                        <tr>
                            <th class="table-dark w-25">Full Name</th>
                            <td class="table-secondary"><?=$employee->getFullname() ?></td>
                        </tr>
                        <tr>
                            <th class="table-dark w-25">Civil Status</th>
                            <td class="table-secondary"><?=$employee->getCivil() ?></td>
                        </tr>
                        <tr>
                            <th class="table-dark w-25">Position</th>
                            <td class="table-secondary"><?=$employee->getPosition() ?></td>
                        </tr>
                        <tr>
                            <th class="table-dark w-25">Employment Status</th>
                            <td class="table-secondary"><?=$employee->getEmployment() ?></td>
                        </tr>
                        <tr>
                            <th class="table-dark w-25">Gross Income</th>
                            <td class="table-secondary"><?=$employee->grossIncome($rPay,$otPay) ?></td>
                        </tr>
                        <tr>
                            <th class="table-dark w-25">Net Income</th>
                            <td class="table-secondary"><?=$employee->netIncome($gross,$deductions) ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        
        
        
    <?php
    }

    // echo "<hr>";
    //     echo "Full Name: " . $employee->getFullname();
    //     echo "<br>";
    //     echo "Civil Status: " . $employee->getCivil();
    //     echo "<br>";
    //     echo "Position: " . $employee->getPosition();
    //     echo "<br>";
    //     echo "Employment Status: " . $employee->getEmployment();
    //     echo "<br>";
    //     echo "Gross Income: " . $employee->grossIncome($rPay,$otPay);
    //     echo "<br>";
    //     echo "Net Income: " . $employee->netIncome($gross,$deductions);

    ?>

    
</body>
</html>