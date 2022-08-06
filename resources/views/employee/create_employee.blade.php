<head>
    <title>Create Employee</title>
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
                {{ Form::open(array('url' => '/employee_create','method'=>'post')) }}
                @csrf
                <h1 class=" mb-4">Create Employee Details   <a href="/crud-app/public"><button type="button" class="btn btn-warning">Back</button> </a></h1>
                <input name="getHiddenVal_sal" type="hidden" value="1" id="getHiddenVal_sal">
                <input name="getHiddenVal_title" type="hidden" value="1" id="getHiddenVal_title">
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

                                <input required value=" " type="text" name="first_name" class="form-control form-control-lg" />
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

                                <input required value=" " name="last_name" type="text" class="form-control form-control-lg" />
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

                                <input required value=" " id="birth_date" name="birth_date" type="text" class="form-control form-control-lg" />
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

                                <input required value="  " id="hire_date" name="hire_date" type="text" class="form-control form-control-lg" />
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
                                    <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>
                                </select>
                                @error('gender')
                                <p style="color: red;font-weight: bold">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        <hr class="mx-n3">
                        <h3>Salary Details   <button id="add_salary" class="btn-success btn">Add +</button>  </h3>
                        <label style="margin-left: 90%" class="col-form-label"><a href=" "> Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i></a></label>

                            <div id="salary_div">

                                <div class="form-group row">

                                    <label for="staticEmail" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="salary_amount_0"  class="form-control" id="salary_amount_0" value=" ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="from_date" class="col-sm-2 col-form-label">From date</label>
                                    <div class="col-sm-8">
                                        <input   type="date" class="form-control" name="salary_from_date_0" value=" " id="salary_from_date_0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="todate" class="col-sm-2 col-form-label">From date</label>
                                    <div class="col-sm-8">
                                        <input   type="date" class="form-control" name="salary_to_date_0" value=" " id="salary_to_date_0">
                                    </div>

                                </div>

                            </div>

                        <hr class="mx-n3">

                        <h3>Designation Details   <button id="add_title" class="btn-success btn">Add +</button>  </h3>
                        <label style="margin-left: 90%" class="col-form-label"><a href=""> Delete &nbsp;<i class="fa fa-trash" aria-hidden="true"></i></a></label>

                            <div id="title_dev">

                                <div class="form-group row">

                                    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="title_amount_0"  class="form-control" id="title_amount_0" value=" ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="from_date" class="col-sm-2 col-form-label">From date</label>
                                    <div class="col-sm-8">
                                        <input   type="date" class="form-control" name="title_from_date_0" value=" " id="salary_from_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="todate" class="col-sm-2 col-form-label">From date</label>
                                    <div class="col-sm-8">
                                        <input   type="date" class="form-control" name="title_to_date_0" value=" " id="salary_to_date">
                                    </div>
                                </div>
                            </div>


                        <div class="px-5 py-4">
                            <button type="submit" class="btn btn-primary btn-lg">Create Employee</button>
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

    $("#add_salary").click(function (e){

        e.preventDefault();
        var getValues = $("#getHiddenVal_sal").val();
        var html = '<p>*****</p>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">Amount</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="number"  name ="salary_amount_'+getValues+'"  class="form-control" id="salary_amount_'+getValues+'" value=" ">';
        html += '</div></div>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">From Date</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="date" name="salary_from_date_'+getValues+'"  class="form-control" id="salary_from_date_'+getValues+'" value=" ">';
        html += '</div></div>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">To Date</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="date" name="salary_to_date_'+getValues+'"   class="form-control" id="salary_to_date_'+getValues+'" value=" ">';
        html += '</div></div>';


        $("#salary_div").append(html);
        var newhidval = parseInt(getValues) + 1 ;
        $("#getHiddenVal_sal").val(newhidval);

    });
    $("#add_title").click(function (e){

        e.preventDefault();
        var getValues = $("#getHiddenVal_title").val();
        var html = '<p>*****</p>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">Title</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="text" name ="title_amount_'+getValues+'"  class="form-control" id="title_amount_'+getValues+'" value=" ">';
        html += '</div></div>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">From Date</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="date" name="title_from_date_'+getValues+'"   class="form-control" id="title_from_date_'+getValues+'" value=" ">';
        html += '</div></div>';
        html += '<div class="form-group row">';
        html += '<label for="staticEmail" class="col-sm-2 col-form-label">To Date</label>';
        html += '<div class="col-sm-10">';
        html += '<input type="date"  name ="title_to_date_'+getValues+'"  class="form-control" id="title_to_date_'+getValues+'" value=" ">';
        html += '</div></div>';


        $("#title_dev").append(html);
        var newhidval = parseInt(getValues) + 1 ;
        $("#getHiddenVal_title").val(newhidval);

    });
</script>
</body>
