<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-3">
                <h1 class="text-center">Hello</h1><br>
                <h4 class="text-center">Enter the company's information in the form below</h4>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <form action="{{route('company.store')}}" method="POST" autocomplete="on">
                @csrf
                <label for="company_name">Company Name</label><br>
                <input name="company_name" type="text"><br>
                <label for="company_address">Company Address</label><br>
                <input name="company_address" type="text"><br>
                <label for="company_founder">Founder Name</label><br>
                <input type="text" name="company_founder"><br>
                <label for="company_age">Company Age</label><br>
                <input name="company_age" type="number"><br>
                
                <button type="submit" class="mt-2">Submit</button>
            </form>
        </div>
        <a href="/welcome">back</a>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>