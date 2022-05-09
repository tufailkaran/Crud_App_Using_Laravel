<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Crud App Using Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <header style="background-color: #e2e2e2; text-align:center; color:white">
                    <h1>Crud App Using Laravel</h1>
                </header>
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <section>
                    @yield('mainarea')
                </section>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <footer style="background-color: #e2e2e2; text-align:center; color:white; position:fixed; padding: 10px 10px 0px 10px;bottom: 0;width: 100%;">
                    <h3>Copyright &copy; 2022</h3> 
                </footer>            
            </div>
        </div>
    </div>
    
</body>
</html>