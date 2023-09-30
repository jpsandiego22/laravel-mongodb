
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <add http-equiv="X-Frame-Options" content="deny">
        <add name="X-Frame-Options" value="SAMEORIGIN" />
        <title>Hello, world!</title>
    </head>
    <body>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Laravel MongoDB Crud (Jquery,Ajax,Bootstrap 4)</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 border border-primary">
                    <form id="submit_data" class="p-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control form-control-sm" id="fname">
                                </div>
                                <div class="form-group">
                                    <label for="mname">Middle Name</label>
                                    <input type="text" class="form-control form-control-sm" id="mname">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control form-control-sm " id="lname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prefix">Age</label>
                                    <input type="text" class="form-control form-control-sm" id="prefix">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <select multiple class="form-control" id="address">
                                        <option>Cavite</option>
                                        <option>Batangas</option>
                                        <option>Quezon Province</option>
                                        <option>Bulacan</option>
                                        <option>Mandaluyong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="float-left">
                                    Favorite  
                                </h5>
                                <button class="btn btn-success btn-sm float-right" onclick='addInput()'>+Add input</button>
                                <div class="row">
                                    <div id='input-cont' class="col-md-12">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12"><br></div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
                
            </div> 
            <br><br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 border border-primary p-2">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Middle name</th>
                                <th>Prefix</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Favorite</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
     
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script>
            $(document).ready(function() {
                get_record()
            });
            function get_record()
            {
                $.ajax({
                    url:'{{ route("get_data") }}',
                    type:'get',
                    data: 
                    {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success:function(data)
                    {
                        var obj = JSON.parse(data);
                        
                        if(obj.status == "success")
                        {
                            $("#example tbody").append(obj.list); 
                        }
                        
                    }
                })
            }
           

            // Call addInput() function on button click
            function addInput(){
                var container = document.getElementById('input-cont');
                container.appendChild(input);
            }
            $("#submit_data").on('submit', function (e) {
               
                e.preventDefault();
                $('#submit_data').find('input').each(function()
                {
                    if($(this).val())
                    {
                        $(this).removeClass('is-invalid')
                    }
                    else
                    {
                        $(this).addClass('is-invalid')
                    }
                });
                if($('#address option:selected').text())
                {
                    $("#address").removeClass('border border-danger')
                }
                else
                {
                    $("#address").addClass('border border-danger')
                }
            });
        </script>
        
    </body>
</html>