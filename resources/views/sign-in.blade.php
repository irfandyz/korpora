<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .input-form {
            height: 40px;
            border: solid 1px rgb(202, 202, 202);
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }

        .color-1 {
            background: rgb(50, 59, 71);
            color: white;
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #979797
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #979797;
        }

        .separator:not(:empty)::before {
            margin-right: .25em;
        }

        .separator:not(:empty)::after {
            margin-left: .25em;
        }
    </style>
</head>

<body>
    <div class="row mt-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1 class="fw-bold">Masuk</h1>
            <form action="{{ asset('sign-in') }}" method="post">
                @csrf
                <input type="text" name="email" id="email" class="input-form" placeholder="Email">
                @if (Session::has('message'))
                    <small class="text-danger">{{ Session::get('message') }}</small>
                @endif
                <input type="password" name="password" id="password" class="input-form" placeholder="Password">
                <div class="text-end">
                    <a class="text-secondary text-decoration-none" style="font-size: 12px" href="#"
                        id="hidden-pass"><span id="show">Show</span> Password <i id="eye" class="fas fa-eye"></i></a>
                </div>
                <button type="submit" class="btn color-1 w-100 mt-4 fw-bold">Masuk</button>
            </form>
            <div class="separator mt-3"><small>ATAU</small></div>
            <p class="text-center mt-2" style="color: #5e5e5e;font-size:18px">
                Belum Punya Akun? Ayo <a href="{{ asset('sign-up') }}" class="text-primary text-decoration-none">Daftar</a>
            </p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        $('#hidden-pass').on('click',function(){
            if ($('#password').attr('type') == 'password') {
                $('#password').attr('type','text');
                $('#eye').removeClass('fa-eye');
                $('#eye').addClass('fa-eye-slash');
                $('#show').text('Hidden');
            }else{
                $('#password').attr('type','password');
                $('#eye').addClass('fa-eye');
                $('#eye').removeClass('fa-eye-slash');
                $('#show').text('Show');
            }
        });
    </script>
</body>

</html>