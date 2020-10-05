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
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Date</th>
                      <th style="text-align: center;">Pulse</th>
                      <th style="text-align: center;">RR</th>
                      <th style="text-align: center;">BP</th>
                      <th style="text-align: center;">Temperature</th>
                      <th style="text-align: center;">Height</th>
                      <th style="text-align: center;">Weight</th>
                      <th style="text-align: center;">BMI</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(App\vital::all() as $item)  
                    <tr>
                      <td style="text-align: center;">{{$item->id}}</td>
                      <td style="text-align: center;">{{$item->created_at}}</td>
                      <td style="text-align: center;">{{$item->Pulse}}</td>
                      <td style="text-align: center;">{{$item->RR}}</td>
                      <td style="text-align: center;">{{$item->BP}}</td>
                      <td style="text-align: center;">{{$item->Temperature}}</td>
                      <td style="text-align: center;">{{$item->Height}}</td>
                      <td style="text-align: center;">{{$item->Weight}}</td>
                      <td style="text-align: center;">{{$item->BMI}}</td>
                      
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