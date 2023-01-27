<html>
    <title>
         {{__('messages.All employees')}}
    </title>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    </head>
        <body>
            <!-- <div class="container">
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="search somthing here.."
                    class="form-control">

                </div>

            </div> -->
            <!-- <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('\search') }}">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="search somthing here..">
                <button class="btn btn-outline my-2 my-sm-0" type="submit">search</button>
            </form> -->
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


            <table class="table">
                <thead>
                    <a class="btn btn-primary" href="{{route('post.create')}}" role="button">{{__('messages.New employee')}}</a>
                    <a class="btn btn-danger" href="{{route('post.delete.all')}}" role="button">{{__('messages.Delete')}}</a>
                    <a class="btn btn-danger" href="{{route('userSearch')}}" role="button">Search</a>

                    <tr>
                        <th scope="col">{{__('messages.Name')}}</th>
                        <th scope="col">{{__('messages.Email')}}</th>
                        <th scope="col">{{__('messages.phone')}}</th>
                        <th scope="col">{{__('messages.pro')}}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('post.edit', $employee->name)}}" role="button">{{__('messages.Edit')}}</a>
                            <a class="btn btn-danger" href="{{route('post.delet', $employee->name)}}" role="button">{{__('messages.Delete')}}</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $employees -> links() !!}
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
            <!-- <script type="text/javascript">
                $('#search').on('keyup',function(){
                    $value=$(this).val();
                    $.ajax({
                        type:'get',
                        url:'{{ URL::to('search') }}',
                        data:{'search':$value},

                        success:function(data){
                            console.log(data);
                            $('#Content').html(data)
                        }
                    });
                })

            </script> -->


        <div class="container">
            @yield('content')
        </div>
    </body>


</html>

