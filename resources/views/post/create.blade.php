
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
    <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li class="nav-item active">
                                                <a class="nav-link" aria-current="page"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}
                                                <span class="sr-only">(current)</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                            </nav>
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">{{__('messages.create new Employee')}}</h2>
                                <form action="{{route('post.insert')}}" method="post">
                                    @csrf
                                    <input type="text" name="name" class="form-control form-control-lg" placeholder="{{__('messages.enter name')}}" value="" required><br><br>
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="{{__('messages.enter email')}}"  value="" required><br><br>
                                    <input type="password" name="phone" class="form-control form-control-lg" placeholder="{{__('messages.enter phone')}}"  value="" required><br><br>
                                    <button type="submit" class="form-control form-control-lg">{{__('messages.submit')}}</button>
                                    <a type="submit" href="{{route('post.index')}}" role="button" >{{__('messages.Back')}}</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
