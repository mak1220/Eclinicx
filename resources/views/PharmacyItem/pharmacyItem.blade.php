@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Pharmacy Items</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">pharmacy items</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div ><!---unnecessary div--->
            <div class="row" style="width: 99%">
                <div class="col-md-12">
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:24px; color:Black; width:100%">Pharmacy Items Details</h1>
                         <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <div class="modal-body">
   
                            
          <form action="" method="POST" class="was-validated"> 
          @csrf
          <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Item Name</label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="name" placeholder="Item" required>
           </div>
          </div>  
          @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Item Types</label>
          <div class="col-sm-8">
         <select name="type" class="browser-default custom-select" required>
         <option name="type" value="">Item Type</option> 
         <option name="type" value="DISPOSIBLES">DISPOSIBLES</option>
         <option name="type" value="MEDICATIONS">MEDICATIONS</option>
         <option name="type" value="SURGICAL ITEMS">SURGICAL ITEMS</option>
         </select>
           </div>
          </div>
        @error('type')
          <span style="color:red">{{$message}}</span>
          @enderror
           <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Starting Count</label>
          <div class="col-sm-8">
          <input type="number" class="form-control" name="count" placeholder="Starting Count" required>
           </div>
          </div>  
          @error('count')
          <span style="color:red">{{$message}}</span>
          @enderror
          <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Item Cost Price</label>
          <div class="col-sm-8">
          <input type="number" class="form-control" name="cost" placeholder="Item Cost price" required>
           </div>
          </div> 
          @error('cost')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Item Description</label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="desc" placeholder="Item Descriptiom" required>
           </div>
          </div>
          @error('desc')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="form-group row">
          <label for="start" class="col-sm-4 col-form-label">Genaric Name</label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="gen" placeholder="Genaric Name" required>
           </div>
          </div>
          @error('gen')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="modal-footer">
           <button class="btn btn-primary" type="submit">Save</button>
    <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
        </div>

        </form>
         </div>
         </div>
                    </div>
                    </div>
                    <a href="#" data-toggle="modal"  data-target="#myModal">
                    
           <button type="button"  class="btn btn-primary" style="margin-top: 20px;margin-left: 50px;width: 20%;"> New Pharmacy Item</button>  
                   </a> 
 
                    
                </div>
                </div>
            
            </div>
              
            <section class="content" style="margin-top: 10px">
      
            <!-- /.card-header -->
           <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               
                  <h3 class="card-title">Pharmecy Items Details</h3>
                
              </div>
              @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="datatable">
                  <thead class="text-white-50 bg-dark">
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Item name</th>
                      <th style="text-align: center;">Genaric Name</th>
                      <th style="text-align: center;">Item Type</th>
                      <th style="text-align: center;">Item Description</th>
                      <th style="text-align: center;">Item Count</th>
                      <th style="text-align: center;">Item Cost</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td style="text-align: center;">{{$item->id}}</td>
                      <td style="text-align: center;">{{$item->Item_Name}}</td>
                      <td style="text-align: center;">{{$item->Genaric_Name}}</td>
                      <td style="text-align: center;">{{$item->Item_Type}}</td>
                      <td style="text-align: center;">{{$item->Item_Description}}</td>
                      <td style="text-align: center;">{{$item->Item_Count}}</td>
                      <td style="text-align: center;">{{$item->Item_Cost}}</td>
                      <td style="text-align: center;"><a href="pharUpdate/{{$item->id}}" class="btn btn-success"><i class=" fas fa-pencil-alt"></i> </a>
                      <a href="deletted/{{$item->id}}" onclick="return checkdelete()" class="btn btn-danger"><i class="fas fa-trash-alt" style="margin-left: 5px"></i></a> 
                      <a href=""class="btn btn-primary"><i class="fa fa-eye" style="margin-left: 5px"></i></a> </td>
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
@section('scripts')
 <script >
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
  </script>
@endsection