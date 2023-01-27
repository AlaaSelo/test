<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
    <input type="search" name="search" id="search" placeholder="search here...." class="form-control">
    <br><br>
    <table class="table">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        <tbody id="tbody">
        @if(count($users) > 0)
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>

        </tr>

        @endforeach
        @else
            <tr>
                <td>No Data Found</td>
            </tr>
        @endif
        </tbody>
    </table>

    <script>
        $(document).ready(function(){
            $("#search").on('keyup',function(){
                var value = $(this).val();
                $.ajax({
                    url:"{{ route('userSearch') }}",
                    type:"GET",
                    data:{'search':value},
                    success:function(data){
                        // console.log(users)
                        var employees = data.employees;
                        var html = '';
                        if(employees.length > 0){
                            for(let i=0; i<users.length; i++){
                                html +='<tr>\
                                            <td>'+employees[i]['name']+'</td>\
                                            <td>'+employees[i]['email']+'</td>\
                                            <td>'+employees[i]['phone']+'</td>\
                                        </tr>';
                            }

                        }
                        else{
                            html +='<tr>\
                                <td>No Data Found</td>\
                            </tr>';
                        }

                        $("#tbody").html(html);
                    }

                });
            });
        });
    </script>


</body>
</html>
