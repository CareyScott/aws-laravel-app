<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>StoreFront</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <h2 class="pt-5 mt-5">StoreFront Laravel App</h2>
            <ul class="nav nav-pills position-absolute top-50 start-50 translate-middle " id="nav-btns">
                <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link active" aria-current="page">All Products</a></li>
                <li class="nav-item"><a href="{{ route('products.create') }}" class="nav-link">Create</a></li>
            </ul>
        </header>
    </div>
</body>

</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
