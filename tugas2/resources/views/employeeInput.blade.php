<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <h1 class="text-center">Employee Form</h1>
            <h3 class="text-center">Enter the Employee Information in the Form Bellow</h3>
        </div>
    </div>
    <div class="">
        <form action="" method="POST" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @csrf
            <label for="employee_name">Name</label><br>
            <input name="employee_name" type="text" placeholder="full name"><br>
            <label for="employee_age">Age</label><br>
            <input name="employee_age" type="number"><br>
            <label for="employee_mstatus">Maritial status</label><br>
            <input type="radio" id="male" name="married">
            <label for="married">Married</label><br>
            <input type="radio" id="n_married" name="n_married">
            <label for="n_married">Not Married</label><br>
            <label for="company_name">Company</label>
            <select name="company_name">
                <option value="PT_Sinar">PT Sinar</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>
    </div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>