
<head>
    <title>Employee Data Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<h1 style="text-align: center">Employee Profile <a href="{{ URL('/employee_edit/'.$employeeData['emp_no'] )}}"><button class="btn btn-primary">Edit</button> </a>
    <a href="/crud-app/public"><button class="btn btn-warning">Back</button> </a>
</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th colspan="2" scope="col">Employee Details</th>


    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">Employee Name</th>
        <td>{{$employeeData['first_name']}} {{$employeeData['last_name']}}</td>

    </tr>
    <tr>
        <th scope="row">Employee Date of Birth</th>
        <td>{{$employeeData['birth_date']}}</td>

    </tr>
    <tr>
        <th scope="row">Gender</th>
        <td>{{$employeeData['gender']}}</td>

    </tr>
    <tr>
        <th scope="row">Hire Date</th>
        <td>{{$employeeData['hire_date']}}</td>

    </tr>
    </tbody>
</table>
</hr>

<h1 style="text-align: center">Salary Details</h1>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Amount</th>
        <th scope="col">From Date</th>
        <th scope="col">To Date</th>

    </tr>
    </thead>
    <tbody>
    @foreach($SalaryData as $salary)
    <tr>

        <td>{{$salary['salary']}}</td>
        <td>{{$salary['from_date']}}</td>
        <td>{{$salary['to_date']}}</td>
    </tr>
    @endforeach

    </tbody>
</table>

<h1 style="text-align: center">Designation Details</h1>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">From Date</th>
        <th scope="col">To Date</th>

    </tr>
    </thead>
    <tbody>
    @foreach($TitleData as $title)
        <tr>

            <td>{{$title['title']}}</td>
            <td>{{$title['from_date']}}</td>
            <td>{{$title['to_date']}}</td>
        </tr>
    @endforeach

    </tbody>
</table>


<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


</body>
