
@extends('Patient.EncounterNote')
@section('encounter')

 <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Patients encounter</h3>
                
              </div>
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                <table class="table table-hover text-nowrap" id="datatable" >
                  

                  <thead class="text-white-50 bg-dark">

                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Date</th>
                      <th style="text-align: center;">MRN</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Patient Name</th>
                      <th style="text-align: center;">Patient Age</th>
                      <th style="text-align: center;">Patient Phone</th>
                      <th style="text-align: center;">Patient Doctor</th>
                    </tr>
                  </thead>
                  <tbody>
                 @foreach($data as $item)
                    <tr>
                      <td style="text-align: center;">HPEN-{{$item->id}}</td>
                      <td style="text-align: center;">{{$item->created_at}}</td>
                      <td style="text-align: center;">HPN-{{$item->ID}}</td>
                      <td style="text-align: center;"><!--<span class="badge bg-danger">Not Active</span>--><span class="badge bg-success">DoctorDone</span></td>
                      
                      <td style="text-align: center;">{{$item->Name}}</td>
                      <td style="text-align: center;">{{$item->Age}}</td>
                      <td style="text-align: center;">{{$item->Phone}}</td>
                      <td style="text-align: center;">{{$item->Doct}}</td>
                      
                    </tr>
                   @endforeach
                     
                    
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
