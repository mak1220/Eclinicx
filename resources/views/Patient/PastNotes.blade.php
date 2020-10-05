@extends('Patient.EncounterNote')
@section('encounter')


              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-sm-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="datatable">
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;">Encounter</th>
                      <th style="text-align: center;">Date</th>
                      <th style="text-align: center;">Doctor</th>
                      <th style="text-align: center;">Note</th>
                      <th style="text-align: center;">Department</th>
                      <th style="text-align: center;">Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td style="text-align: center;"></td>
                      <td style="text-align: center;"></td>
                      <td style="text-align: center;"></td>
                      <td style="text-align: center;"></td>
                      <td style="text-align: center;"></td>
                      <td style="text-align: center;"></td>
                     
                    </tr>
                   
                     
                    
                  </tbody>
                </table>
                <script>
              function checkdelete()
              {
                 return confirm("Are you sure you want to delete this data");

                }
             </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
            <!-- /.card-body -->
         
  </section>



  
@endsection
@section('code')
 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
  </script>


@endsection
