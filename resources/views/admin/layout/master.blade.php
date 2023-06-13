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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <a href="">
                            <li class="list-group-item bg-dark text-white">
                                Admin Management
                            </li>
                        </a>
                        <a href="{{url('/admin')}}">
                            <li class="list-group-item text-dark">
                                Dashboard
                            </li>
                        </a>
                        <a href="{{route('admin.category.index')}}">
                            <li class="list-group-item text-dark">
                                Category
                            </li>
                        </a>
                        <a href="{{route('admin.product.index')}}">
                            <li class="list-group-item text-dark">
                                Product
                            </li>
                        </a>
                        <a href="{{url('admin/order/pending')}}">
                            <li class="list-group-item text-dark">
                                Pending Order
                            </li>
                        </a>
                        <a href="{{url('admin/order/complete')}}">

                            <li class="list-group-item text-dark">
                                Complete Order
                            </li>
                        </a>
                        <a href="{{url('admin/user')}}">

                            <li class="list-group-item text-dark">
                                User List
                            </li>
                        </a>
                        <a href="{{url('admin/logout')}}">

                            <li class="list-group-item text-dark">
                                Logout
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @include('admin.inc.error')
                    @yield('content')
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
