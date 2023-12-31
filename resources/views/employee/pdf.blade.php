<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        body {
                margin: 0;
                font-size: 85%;
            }
      </style>
  </head>
  <body>

    <div class="card">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">{{__('Employee Info')}}</h4>
        </div>
        <div class="modal-body">
            <br>
            <div class="row">
                <div class="col-md-7">
                    <div class="table-responsive">

                        <table class="table  table-bordered">
                            <tr>
                                <th>{{__('Photo')}}</th>
                                @if ($user['profile_photo']!==null)

                                    <td><img src="{{asset('../../'.tenantPath().'/uploads/profile_photos/' . $user['profile_photo'])}}" height="50" width="60"></td>


                                        {{-- <td>
                                            <img src="{{asset(base_path('public/uploads/profile_photos',$user['profile_photo']))}}" height="50" width="60">
                                        </td> --}}
                                        {{-- <img src="{{asset('uploads/samsung.png')}}" height="50" width="60"> --}}
                                        {{-- <img src="{{asset('public/uploads/profile_photos',$user['profile_photo'])}}" height="50" width="60"> --}}
                                        {{-- <td> <img src="/var/www/html/peoplepro_10/uploads/profile_photos/staff_1616582111.jpg" style="width: 60px; height: 50px;"> </td> --}}

                                        {{-- <td>
                                            <img src="https://thumbs.dreamstime.com/b/beautiful-rain-forest-ang-ka-nature-trail-36703721.jpg" style="width: 60px; height: 50px;">
                                        </td> --}}

                                    {{-- <td> <img src="{{asset('/uploads/profile_photos/'.$user['profile_photo'])}}" height="50px" width="60"> </td> --}}
                                    {{-- <td> <img src="{{url('uploads/profile_photos/'.$user['profile_photo'])}}" height="50px" width="60" alt="Image"> </td> --}}

                                    {{-- <img src="http://127.0.0.1:8000/public/uploads/profile_photos/staff_1616582111.jpg;base64,{{ base64_encode(file_get_contents(public_path('/img/logo.png'))) }}"> --}}
                                    {{-- <td> <img src="http://127.0.0.1:8000/uploads/profile_photos/staff_1616582111.jpg" style="width: 60px; height: 50px;"> </td> --}}


                                @else
                                    <td> <img src="{{asset('uploads/profile_photos/blank.jpg')}}" height="50px" width="60"> </td>
                                @endif
                            </tr>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <td>{{$first_name}} {{$last_name}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Username')}}</th>
                                <td>{{$user['username']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Gender')}}</th>
                                <td>{{$gender}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Contact')}}</th>
                                <td>
                                    Email : {{$email}} <br>
                                    Phone : {{$contact_no}}<br>
                                    Facebook : {{$fb_id}} <br>
                                    Skype : {{$skype_id}} <br>
                                    Whats App : {{$whatsapp_id}}
                                </td>
                            </tr>
                            <tr>
                                <th>{{__('Address')}}</th>
                                <td>
                                    Address : {{$address}} <br>
                                    City : {{$city}}<br>
                                    State : {{$state}} <br>
                                    Country : {{$country}} <br>
                                    Zipcode : {{$zip_code}}
                                </td>
                            </tr>
                            <tr>
                                <th>{{__('Role')}}</th>
                                <td>{{$role['name']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Company')}}</th>
                                <td>{{$company['company_name']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Department')}}</th>
                                <td>{{$department['department_name']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Designation')}}</th>
                                <td>{{$designation['designation_name']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Office Shift')}}</th>
                                <td>{{$office_shift['shift_name']}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Payslip Type')}}</th>
                                <td>{{$payslip_type}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Salary')}}</th>
                                @if(config('variable.currency_format') =='suffix')
                                    <td>{{$basic_salary}} {{config('variable.currency')}}</td>
                                @else
                                    <td>{{config('variable.currency')}} {{$basic_salary}} </td>
                                @endif
                            </tr>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


