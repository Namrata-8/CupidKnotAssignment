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
        <div class="justify-content-end">
            <a href="adminLogout" class="btn btn-success">Logout</a>
        </div>
        <div class="d-flex" style="display:flex;">
            <div class="form-mb-2">
                <label>Gender</label>
                <select id="gender" name="gender" class="form-control" 
                        onchange="window.location.href = '/adminhome?gender='+this.value 
                            @if(request()->has('occupation'))    
                            +'&occupation={{ request()->occupation }}'
                            @endif
                            @if(request()->has('family_type'))    
                            +'&family_type={{ request()->family_type }}'
                            @endif
                            @if(request()->has('manglik'))    
                            +'&manglik={{ request()->manglik }}'
                            @endif;"
                    >
                    <option @if(request()->gender == 'All') selected @endif>All</option>
                    <option @if(request()->gender == 'Male') selected @endif>Male</option>
                    <option @if(request()->gender == 'Female') selected @endif>Female</option>
                    <option @if(request()->login_from_filter == 'Others') selected @endif>Others</option>
                </select>
            </div>
            <div class="form-mb-2">
                <label>Occupation</label>
                <select id="occupation" name="occupation" class="form-control"
                        onchange="window.location.href = '/adminhome?occupation='+this.value 
                            @if(request()->has('gender'))    
                            +'&gender={{ request()->gender }}'
                            @endif
                            @if(request()->has('family_type'))    
                            +'&family_type={{ request()->family_type }}'
                            @endif
                            @if(request()->has('manglik'))    
                            +'&manglik={{ request()->manglik }}'
                            @endif;"
                >
                    <option @if(request()->occupation == 'All') selected @endif>All</option>
                    <option @if(request()->occupation == 'Private job') selected @endif>Private job</option>
                    <option @if(request()->occupation == 'Government job') selected @endif>Government job</option>
                    <option @if(request()->occupation == 'Business') selected @endif>Business</option>
                </select>
            </div>
            <div class="form-mb-2">
                <label>Family Type</label>
                <select id="family_type" name="family_type" class="form-control"
                onchange="window.location.href = '/adminhome?family_type='+this.value 
                            @if(request()->has('occupation'))    
                            +'&occupation={{ request()->occupation }}'
                            @endif
                            @if(request()->has('gender'))    
                            +'&gender={{ request()->gender }}'
                            @endif
                            @if(request()->has('manglik'))    
                            +'&manglik={{ request()->manglik }}'
                            @endif;"
                    >
                    <option @if(request()->family_type == 'All') selected @endif>All</option>
                    <option @if(request()->family_type == 'Joint family') selected @endif>Joint family</option>
                    <option @if(request()->family_type == 'Nuclear family') selected @endif>Nuclear family</option>
                </select>
            </div>
            <div class="form-mb-2">
                <label>Manglik</label>
                <select id="manglik" name="manglik" class="form-control"
                        onchange="window.location.href = '/adminhome?manglik='+this.value 
                            @if(request()->has('occupation'))    
                            +'&occupation={{ request()->occupation }}'
                            @endif
                            @if(request()->has('family_type'))    
                            +'&family_type={{ request()->family_type }}'
                            @endif
                            @if(request()->has('gender'))    
                            +'&gender={{ request()->gender }}'
                            @endif;"
                    >
                    <option @if(request()->manglik == 'Both') selected @endif>Both</option>
                    <option @if(request()->manglik == 'Yes') selected @endif>Yes</option>
                    <option @if(request()->manglik == 'No') selected @endif>No</option>
                </select>
            </div>
        </div>

        <div class="panel panel-default">
            <table class="table table-bordered">
                <caption>Users Data</caption>
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Annual Income</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Family Type</th>
                    <th scope="col">Manglik</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $data)
                    <tr>
                        <td>{{ $data->first_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->date_of_birth }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->annual_income }}</td>
                        <td>{{ $data->occupation }}</td>
                        <td>{{ $data->family_type }}</td>
                        <td>{{ $data->manglik }}</td>
                    </tr>  
                    @endforeach            
                </tbody>
            </table>
             {{ $users->links() }}
        </div>
    </body>
</html>