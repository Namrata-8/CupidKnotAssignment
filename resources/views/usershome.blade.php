<html>
    <head>
        <title>Cupid Knot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	</head>
    <body>
        <label>Welcome, {{ Session::get('name') }}</label>
        <div class="justify-content-end">
            <a href="logout" class="btn btn-success">Logout</a>
        </div>
        <div class="panel panel-default">
            <table class="table table-bordered">
                <caption>Users Preference Match</caption>
                <thead>
                    <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Match</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $data)
                    <tr>
                        <td>{{ $data->first_name.' '.$data->last_name }}</td>
                        <td>{{ $data->percentage.'%' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>