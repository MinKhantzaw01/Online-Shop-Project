<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MM-Coder-Shop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet"
                href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-4">
            <div class="card">
                <div class="card-header"><b>Login To Admin</b></div>
                <div class="card-body">
                    <form action="{{url('admin/login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <input type="submit" value="Login" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.js"></script>
    <script
            src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/js/argon-design-system.min.js"></script>

</body>

</html>
