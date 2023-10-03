
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
        <title>Laravel MongoDB Crud (Jquery,Ajax,Bootstrap 4)</title>
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
                        <div class="row p-1">
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
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control form-control-sm" id="age">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <select multiple class="form-control" id="address">
                                        <option value="Cavite">Cavite</option>
                                        <option value="Batangas">Batangas</option>
                                        <option value="Quezon Province">Quezon Province</option>
                                        <option value="Bulacan">Bulacan</option>
                                        <option value="Mandaluyong">Mandaluyong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="float-left">
                                    Favorite  
                                </h5>
                                <button type="button" class="btn btn-success btn-sm float-right" onclick='addInput()'>ADD FAVORITE</button>
                                <div class="row" id='input-cont'>
                                   
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
        {{-- UPDATE MODAL --}}
        <form id="e_data" class="p-5">
            <div class="modal fade" id="get_update_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row p-1">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e_fname">First Name</label>
                                        <input type="text" class="form-control form-control-sm" id="e_fname">
                                    </div>
                                    <div class="form-group">
                                        <label for="e_mname">Middle Name</label>
                                        <input type="text" class="form-control form-control-sm" id="e_mname">
                                    </div>
                                    <div class="form-group">
                                        <label for="e_lname">Last Name</label>
                                        <input type="text" class="form-control form-control-sm " id="e_lname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e_age">Age</label>
                                        <input type="text" class="form-control form-control-sm" id="e_age">
                                    </div>
                                    <div class="form-group">
                                        <label for="e_address">Address</label>
                                        <select multiple class="form-control" id="e_address">
                                            <option value="Cavite">Cavite</option>
                                            <option value="Batangas">Batangas</option>
                                            <option value="Quezon Province">Quezon Province</option>
                                            <option value="Bulacan">Bulacan</option>
                                            <option value="Mandaluyong">Mandaluyong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="float-left">
                                        Favorite  
                                    </h5>
                                    <button type="button" class="btn btn-success btn-sm float-right" onclick='e_addInput()'>ADD FAVORITE</button>
                                    <br>
                                    <br>
                                    <div class="row" id='e_input-cont'>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm float-right">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
      

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script>
            $("#e_data").on('submit', function (e) {

                var count = 0;
                var fav = [];
                $('#e_data').find('input').each(function()
                {
                    if($(this).val())
                    {
                        $(this).removeClass('is-invalid');
                        
                    }
                    else
                    {
                        $(this).addClass('is-invalid')
                        count++;
                    }
                });
                if($('#e_address option:selected').text())
                {
                    $("#e_address").removeClass('border border-danger')
                }
                else
                {
                    $("#e_address").addClass('border border-danger')
                    count++;
                }
                if($('input[name^="e_games[]"]'))
                {
                    var arr = $('input[name^="e_games"]');
                    var fav_with = $('input[name^="e_with"]');
                    for(var i = 0; i < arr.length; i++)
                    {
                        fav[i] = {games:arr[i].value, 
                                with:fav_with[i].value};
                    }
                }
                var i_address = 0;
                var address = [];
                $('#e_address > option:selected').each(function() {
                   address[i_address] = $(this).val();
                   i_address++;
                });

                if(count==0)
                {
                    var ids = $(".modal-title").text();
                    $.ajax({
                        url:'{{ url("/") }}' + '/api/users/'+ids,
                        type:'put',
                        data: 
                        {
                            fname: $("#e_fname").val(),
                            mname: $("#e_mname").val(),
                            lname: $("#e_lname").val(),
                            prefix: $("#e_prefix").val(),
                            age:  $("#e_age").val(),
                            address: address,
                            favs:fav,
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                        },
                        success:function(data)
                        {
                            var obj = JSON.parse(data);
                        
                            if(obj.status == "success")
                            {
                                get_record();
                                $('#get_update_data').modal('hide'); 
                            }
                        }
                    })
                }
                
            });


            $(document).ready(function(){
                $(document).on('click','.button1',function() {
                    $(this).closest('div').remove();
                });           
            }); 
           
            $('#get_update_data').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var ids = button.data('id') 
                var modal = $(this)
                
                $.ajax({
                    url:'{{ url("/") }}' + '/users/' + ids,
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
                            
                            $("#e_fname").val(obj['data']['fname'])
                            $("#e_mname").val(obj['data']['mname'])
                            $("#e_lname").val(obj['data']['lname'])
                            $("#e_prefix").val(obj['data']['prefix'])
                            $("#e_age").val(obj['data']['age'])
                           
                            const select = document.getElementById('e_address');

                            if (select) {
                                for(i in obj['data']['address'])
                                {
                                    Array.from(select.options).map((option) => {
                                    
                                        if (option.value === obj['data']['address'][i]) {
                                            option.selected = true;
                                        }
                                    });
                                }
                            }
                          
                            if(obj['data']['favorite'] != null)
                            {
                                $("#e_input-cont").empty();
                                for(i in obj['data']['favorite'])
                                {
                                    $("#e_input-cont").append('<div class="col-md-12"><div class="div row">'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>Games</label>'+
                                                '<input value="'+ obj['data']['favorite'][i]['games'] + '" type="text" class="form-control form-control-sm" name="e_games[]">'+
                                            '</div>'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>With</label>'+
                                                '<input value="'+ obj['data']['favorite'][i]['with'] + '" type="text" class="form-control form-control-sm" name="e_with[]">'+
                                            '</div></div>'+
                                            '<button class="button1 btn btn-sm btn-danger float-right mt-3">Remove</button>'+
                                        '</div>');
                                }
                            }
                           
                            modal.find('.modal-title').text(button.data('id'))
                        }
                        else
                        {
                            alert(obj.message);
                        }
                        
                    }
                })
            });
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
                            $("#example tbody").html(''); 
                            $("#example tbody").append(obj.list); 
                        }
                        
                    }
                })
            }
           

            // Call addInput() function on button click
            function addInput(){
                $("#input-cont").append('<div class="col-md-12"><div class="div row">'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>Games</label><br>'+
                                                '<input type="text" class="form-control form-control-sm" name="games[]">'+
                                            '</div>'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>With</label><br>'+
                                                '<input type="text" class="form-control form-control-sm" name="with[]">'+
                                            '</div></div>'+
                                            '<button class="button1 btn btn-sm btn-danger float-right mt-3">Remove</button>'+
                                        '</div>');
            }
            function e_addInput(){

                $("#e_input-cont").append('<div class="col-md-12"><div class="div row">'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>Games</label><br>'+
                                                '<input type="text" class="form-control form-control-sm" name="e_games[]">'+
                                            '</div>'+
                                            '<div class="col-md-6 pt-1">  '+
                                                '<label>With</label><br>'+
                                                '<input type="text" class="form-control form-control-sm" name="e_with[]">'+
                                            '</div></div>'+
                                            '<button class="button1 btn btn-sm btn-danger float-right mt-3">Remove</button>'+
                                        '</div>');
            }
            $("#submit_data").on('submit', function (e) {
               
                e.preventDefault();
                var count = 0;
                var fav = [];
                $('#submit_data').find('input').each(function()
                {
                    if($(this).val())
                    {
                        $(this).removeClass('is-invalid');
                        
                    }
                    else
                    {
                        $(this).addClass('is-invalid')
                        count++;
                    }
                });
                if($('#address option:selected').text())
                {
                    $("#address").removeClass('border border-danger')
                }
                else
                {
                    $("#address").addClass('border border-danger')
                    count++;
                }
                // alert($('input[name^="games[]"]'))
                if($('input[name^="games[]"]'))
                {
  

                    var arr = $('input[name^="games"]');
                    var fav_with = $('input[name^="with"]');
  
                    for(var i = 0; i < arr.length; i++)
                    {
                        fav[i] = {games:arr[i].value, 
                                with:fav_with[i].value};

                    }
                }

                var i_address = 0;
                var address = [];
                $('#address > option:selected').each(function() {
                   address[i_address] = $(this).val();
                   i_address++;
                });

                if(count==0)
                {
                    $.ajax({
                        url:'{{ route("submit_data") }}',
                        type:'get',
                        data: 
                        {
                            fname: $("#fname").val(),
                            mname: $("#mname").val(),
                            lname: $("#lname").val(),
                            prefix: $("#prefix").val(),
                            age:  $("#age").val(),
                            address: address,
                            favs:fav,
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                        },
                        success:function(data)
                        {
                            var obj = JSON.parse(data);
                        
                            if(obj.status == "success")
                            {
                                get_record();
                                $("#example tbody").append(obj.list); 
                            }
                            
                        }
                    })
                }
                
            });
            function delete_data(url)
            {
                $.ajax({
                    url:url,
                    type:'delete',
                    data: 
                    {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success:function(data)
                    {
                        var obj = JSON.parse(data);
                    
                        if(obj.status == "success")
                        {
                            get_record();
                        }
                    }
                })
            }
        </script>
        
    </body>
</html>