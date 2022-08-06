<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<section class="vh-200"  >
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
                {{ Form::open(array('url' => '/employee_edit','method'=>'post')) }}
                @csrf
                <h1 class=" mb-4">Edit Employee Details</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                        <h3>Profile Details</h3>
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">First name</h6>

                            </div>
                            <div class="col-md-9 pe-5">
                                <input type="hidden" name="emp_no" value="{{$employeeData['emp_no']}}">
                                <input required value="{{$employeeData['first_name']}}" type="text" name="first_name" class="form-control form-control-lg" />
                                @error('first_name')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row align-items-center pt-4 pb-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Last name</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input required value="{{$employeeData['last_name']}}" name="last_name" type="text" class="form-control form-control-lg" />
                                @error('last_name')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>



                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Date of Birth</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input required value="{{$employeeData['birth_date']}}" id="birth_date" name="birth_date" type="text" class="form-control form-control-lg" />
                                @error('birth_date')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Hire Date</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <input required value="{{$employeeData['hire_date']}}" id="hire_date" name="hire_date" type="text" class="form-control form-control-lg" />
                                @error('hire_date')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">

                                <h6 class="mb-0">Gender</h6>

                            </div>
                            <div class="col-md-9 pe-5">

                                <select name="gender" class="form-control">
                                    <option {{ ($employeeData['gender']) == 'Male' ? 'selected' : '' }} value="Male">Male</option>
                                    <option {{ ($employeeData['gender']) == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                                </select>
                                @error('gender')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        <hr class="mx-n3">
                        <h3>Salary Details <!-- <button id="add_salary" class="btn-success btn">Add +</button> --></h3>
                        <label style="margin-left: 90%" class="col-form-label"><a href="{{ URL('/delete_salary/'.$employeeData['emp_no'] )}}"> Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i></a></label>
                        @foreach($SalaryData as $salary)
                        <div>

                            <div class="form-group row">

                                <label for="staticEmail" class="col-sm-2 col-form-label">Amount</label>
                                <div class="col-sm-10">
                                    <input type="number" readonly class="form-control-plaintext" id="amount" value="{{$salary['salary']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from_date" class="col-sm-2 col-form-label">From date</label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="salary_from_date" value="{{$salary['from_date']}}" id="salary_from_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="todate" class="col-sm-2 col-form-label">From date</label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="salary_to_date" value="{{$salary['to_date']}}" id="salary_to_date">
                                </div>

                            </div>

                        </div>
                        @endforeach
                        <hr class="mx-n3">

                        <h3>Designation Details <!-- <button id="add_title" class="btn-success btn">Add +</button> --></h3>
                        <label style="margin-left: 90%" class="col-form-label"><a href="{{ URL('/delete_title/'.$employeeData['emp_no'] )}}"> Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i></a></label>
                        @foreach($TitleData as $title)
                        <div>

                            <div class="form-group row">

                                <label for="staticEmail" class="col-sm-2 col-form-label">Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="title" value="{{$title['title']}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from_date" class="col-sm-2 col-form-label">From date</label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="title_from_date" value="{{$title['from_date']}}" id="salary_from_date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="todate" class="col-sm-2 col-form-label">From date</label>
                                <div class="col-sm-8">
                                    <input readonly type="text" class="form-control" name="title_to_date" value="{{$title['to_date']}}" id="salary_to_date">
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg">Edit Employee</button>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
<script>
    $( function() {
        $("#hire_date").datepicker({ dateFormat: 'yy-mm-dd' });
    } );
    $( function() {
        $("#birth_date").datepicker({ dateFormat: 'yy-mm-dd' });
    } );
</script>
</body>
