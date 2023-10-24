<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <style>

        .link {
        text-decoration: none
        }
        .product {
            background-color: #ef444ee3;
            font-weight: 600;
            letter-spacing: 1px;
            font-family: 'Roboto', sans-serif;
        }
        .price {
            color: #ef444ee3;
        }
        .detail {
            color: #991d46e3;
            font-weight: bold;
        }
        .btn {
            color: #ef444ee3
        }
        .btn.detail:hover {
            color: black;
        }
        .up {
            background-color: #ef444ee3;
            color: #fff;
        }
        .pay {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            color: white;
        }
        .btn:hover {
         background-color: #991d46e3;
        color: white;
        }
        .waves-effect.waves-pink .waves-ripple {
            /* The alpha value allows the text and background color
        of the button to still show through. */
         background-color: #ef444eba;
         }
         #cart {
             margin-left: 15px;
             margin-right: 5px;
         }
         #name {
        position: relative;
        left: 15px;
        }
        #quantity {
        position: relative;
        right: 25px;
        }
        #price {
        position: relative;
        right: 20px;
        }
        #remove {
        position: relative;
        right: 25px;
        }
        .trash {
        margin-top: 25px;
        }
        </style>


</head>
<body>
    <div  class="bg-white">
        <header>
                <nav class="bg-white border-b border-gray-100" >
                    <div class="flex flex-col sm:flex-row">
{{--                         <a class="btn mt-3 text-muted hover:underline sm:mx-3 sm:mt-0" href="/">Home</a> --}}

                        <a href="/" class="ml-5 flex text-muted items-center my-0">
                            <img  src="/img/home.svg" alt="home" width=50px  />
                           </a>

                          <a href="{{ route('cart.list') }}" class="flex text-muted items-center my-0">
                            <img id="cart" src="/img/cart.svg" alt="cart" width=50px />
                        ({{ Cart::getTotalQuantity()}})
                           </a>

                    </div>
                </nav>

        </header>

        <main class="my-8">
            @yield('content')
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
