
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
                                <button type="button" class="btn btn-success btn-sm float-right" onclick='addInput()'>+Add input</button>
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
        <div class="modal fade" id="update_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Recipient:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Message:</label>
                      <textarea class="form-control" id="message-text"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
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
            $('#update_data').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var ids = button.data('id') 
                var modal = $(this)
                modal.find('.modal-title').text('Update Date: ' + button.data('id') )
                $.ajax({
                    url:'{{ route("get_single_data") }}',
                    type:'get',
                    data: 
                    {
                        ids:ids,
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success:function(data)
                    {
                        var obj = JSON.parse(data);
                        
                        if(obj.status == "success")
                        {
                            
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
                            $("#example tbody").append(obj.list); 
                        }
                        
                    }
                })
            }
           

            // Call addInput() function on button click
            function addInput(){
                $("#input-cont").append('<div class="col-md-6 pt-1">  '+
                                            '<label>Games</label><br>'+
                                            '<input type="text" class="form-control form-control-sm" name="games[]">'+
                                        '</div>'+
                                        '<div class="col-md-6 pt-1">  '+
                                            '<label>With</label><br>'+
                                            '<input type="text" class="form-control form-control-sm" name="with[]">'+
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