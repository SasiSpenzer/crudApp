<head>
    <title>Employee List Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<h1>All Employee List <a  href="{{ URL('/create_employee')}}"><button class="btn btn-warning">Add New Employee + </button></a> </h1>

<table id="emp_table" class="display">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Hire Date</th>
        <th> </th>
    </tr>
    </thead>
    <tbody>
    @foreach($employeeList as $eachEmp)
    <tr>
        <td>{{$eachEmp['first_name']}}</td>
        <td>{{$eachEmp['last_name']}}</td>
        <td>{{$eachEmp['birth_date']}}</td>
        <td>{{$eachEmp['gender']}}</td>
        <td>{{$eachEmp['hire_date']}}</td>
        <td>
            <a href="employee_view/{{$eachEmp['emp_no']}}"><button class="btn btn-success">View</button></a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#emp_table').DataTable();
    } );
</script>
</body>


