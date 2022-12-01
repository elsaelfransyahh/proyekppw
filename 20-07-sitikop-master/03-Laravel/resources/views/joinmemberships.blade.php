<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- {{-- SELECTPICKER FOR DROPDOWN SEARCHING --}} -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <!-- Datatables styling -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

</head>
<body>
    <center><h2>Form Membership</h2></center>
    <div class="container mt-5">
        <div class="col-12">    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus"></i>

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-Namamembership" id="exampleModalLabel">Tambah Membership</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="joinmemberships/tambah" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="id_member">id_member</label>
                                    <input type="text" class="form-control" name="id_member" required>
                                </div>

                                <div class="form-group">
                                    <label for="gender">gender</label>
                                    <input type="text" class="form-control" name="gender" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">phone_number</label>
                                    <input type="text" class="form-control" name="phone_number" required>
                                </div>

                                <div class="form-group">
                                <label for="banking">banking</label>
                                    <input type="text" class="form-control" name="banking" required>
                                </div>

                                <div class="form-group">
                                <label for="operator">operator</label>
                                    <input type="text" class="form-control" name="operator" required>
                                </div>

                                <div class="form-group">
                                <label for="name_membership">name_membership</label>
                                    <input type="text" class="form-control" name="name_membership" required>
                                </div>

                                <div class="form-group">
                                <label for="membership_type">membership_type</label>
                                <input type="text" class="form-control" name="membership_type" required>
                               </div>
                        </div>
                        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
      </div>
     
    </div>
  </div>

  <table class="table table-striped" id="joinmemberships">
                <thead>
                    <tr>
                        <th scope="col">id_member</th>
                        <th scope="col">gender</th>
                        <th scope="col">email</th>
                        <th scope="col">phone_number</th>
                        <th scope="col">banking</th>
                        <th scope="col">operator</th>
                        <th scope="col">name_membership</th>
                        <th scope="col">membership_type</th>
                        <th scope="col"></th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="dynamic-row">
                  
                </tbody>
            </table>
            @foreach ($JoinMembership as $p)
            <div class="modal fade" id="modal_edit_{{$p->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-Namajoinmemberships" id="exampleModalLongjoinmemberships">Edit App</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form id="app_form_{{$p->id}}" action="{{ url('joinmemberships/update', [$p->id]) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" form="app_form_{{$p->id}}" />
                               
                        <div class="form-group">
                                    <label for="id_member">id_member</label>
                                    <input type="text" class="form-control" name="id_member" required>
                                </div>

                                <div class="form-group">
                                    <label for="gender">gender</label>
                                    <input type="text" class="form-control" name="gender" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number">phone_number</label>
                                    <input type="text" class="form-control" name="phone_number" required>
                                </div>

                                <div class="form-group">
                                <label for="banking">banking</label>
                                    <input type="text" class="form-control" name="banking" required>
                                </div>

                                <div class="form-group">
                                <label for="operator">operator</label>
                                    <input type="text" class="form-control" name="operator" required>
                                </div>

                                <div class="form-group">
                                <label for="name_membership">name_membership</label>
                                    <input type="text" class="form-control" name="name_membership" required>
                                </div>

                                <div class="form-group">
                                <label for="membership_type">membership_type</label>
                                    <input type="text" class="form-control" name="membership_type" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="app_form_{{$p->id}}" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
           @foreach ($JoinMembership as $p)
            <div class="modal fade" id="modal_hapus_{{$p->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-Namajoinmemberships">Data akan dihapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Data yang dihapus tidak dapat dikembalikan!
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{ url('joinmemberships/destroy', [$p->id]) }}" class="btn btn-danger">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
<script>
    var row = 0;

        $(document).ready(function() {
           
           
            $('#JoinMembership thead tr').clone(true).appendTo( '#joinmemberships thead' );
    $('#joinmemberships thead tr:eq(1) th').each( function (i) {
        if (row < 2) {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + id + '" />');
} else {
            $(this).html('');
        }
        row++;
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table =   $('#joinmemberships').DataTable({

            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('ajaxdata.joinmemberships') }}",
            "lengthMenu" : [[20, 50, 100, 500, 1000, -1],[20, 50, 100, 500, 1000, "All"]],
            "columns":[
                { "data": "id" },
                { "data": "gender" },
                { "data": "email" },
                { "data": "phone_number" },
                { "data": "banking" },
                { "data": "operator" },
                { "data": "name_membership" },
                { "data": "membership_type" },
                {
                    sortable: false,
                    "render": function ( data, type, full, meta ) {
                        return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_'+full.id+'"><i class="fas fa-edit"></i></button>';
                    }
                },
                {
                    sortable: false,
                    "render": function ( data, type, full, meta ) {
                        return '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus_'+full.id+'"><i class="fas fa-trash"></i></button>';
                    }
        } );
    } );

    var table =   $('#joinmemberships').DataTable({

"processing": true,
"serverSide": true,
"ajax": "{{ route('ajaxdata.joinmemberships') }}",
"lengthMenu" : [[20, 50, 100, 500, 1000, -1],[20, 50, 100, 500, 1000, "All"]],
"columns":[
    { "data": "id" },
    { "data": "gender" },
    { "data": "email" },
    { "data": "phone_number" },
    { "data": "banking" },
    { "data": "operator" },
    { "data": "name_membership" },
    { "data": "membership_type" },
    {
        sortable: false,
        "render": function ( data, type, full, meta ) {
            return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_'+full.id+'"><i class="fas fa-edit"></i></button>';
        }
    },
    {
        sortable: false,
        "render": function ( data, type, full, meta ) {
            return '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus_'+full.id+'"><i class="fas fa-trash"></i></button>';
        }
    },
],
});



} );
</script>
</body>
</html>