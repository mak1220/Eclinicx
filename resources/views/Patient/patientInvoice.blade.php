@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patients</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Invoice</span>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="form-control" style="height: 900px; background-color:#ecf0f5;">
    <div class="col-sm-12" style="border: 1px solid silver;background: white;border-radius: 4px">
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="text-align: right;">
           <button type="button" class="btn btn-primary">Return</button>
           <button type="button" onclick="printDiv()" class="btn btn-primary">Print Invoice</button>
          </div><!-- /.col -->
         <div class="col-sm-12" style="border: 1px solid silver;border-radius: 4PX" id="print">
           <h1 style="text-align: center;font-family: 'Source Sans Pro',sans-serif"><b>E-Care Clinic</b></h1>
           <div style="margin-top: 10px">
            <h5 style="font-size: 13px;text-align: center;">
             Address:Shahdara Lahore, Distruct Sheikhopora
           </h5>
           </div>
           <div style="margin-top: 10px">
            <h5 style="font-size: 13px;text-align: center;">
             Phone:042-337930224/03224346035
           </h5>
           </div>
           <h1 style="text-align: center;font-family: 'Source Sans Pro',sans-serif"><b>BILLING PAYMENT INVOICE</b></h1>
           <hr>
           @foreach($data as $item)
           @endforeach
            <div style="margin-top: 10px">
            <h1 style="font-size: 18px;">
             <b>{{$item->Name}}/HPN-{{$item->ID}}</b>
           </h1>
           </div>
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             {{$item->Age}} year,{{$item->Gender}}
           </h1>
           </div>
            <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             {{$item->Reg}}
           </h1>
           </div>


           <div style="margin-top: 10px;margin-top: 35px">
            <h1 style="font-size: 18px;">
             <b>Physical Information</b>
           </h1>
           </div>
           <hr>
           <div class=col-sm-12>
            <div class="row">
           <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             Doctor:
           </h1>
           </div>
           </div>
             <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             {{$item->Doct}}
           </h1>
           </div>
           </div>
         </div>
       </div>

       <div class=col-sm-12>
            <div class="row">
           <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             Reason Of Visit:
           </h1>
           </div>
           </div>
             <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
            {{$item->Rson}}
           </h1>
           </div>
           </div>
         </div>
       </div>

       <div class=col-sm-12>
            <div class="row">
           <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             ICD Code:
           </h1>
           </div>
           </div>
             <div class="col-sm-3">
           <div style="margin-top: 10px">
            <h1 style="font-size: 15px;">
             6-040-256-451-5
           </h1>
           </div>
           </div>
         </div>
       </div>

      <div style="margin-top: 10px;margin-top: 35px">
            <h1 style="font-size: 18px;">
             <b>InVoice Details</b>
           </h1>
           </div>
           <hr>
           <div class=col-sm-12>
            <div class="row">
            <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                <table class="table table-hover text-nowrap" id="datatable" >
                  
                  <thead class="text-white-50 bg-dark">

                    <tr>
                      <th style="text-align: center;">#</th>
                      <th style="text-align: center;">Procedure</th>
                      <th style="text-align: center;">Item</th>
                      <th style="text-align: center;">Unit</th>
                      <th style="text-align: center;">Cost</th>
                      <th style="text-align: center;">Discount</th>
                      <th style="text-align: center;">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $send)
                    <tr>
                      <td style="text-align: center;">{{$send->id}}</td>
                      <td style="text-align: center;">{{$send->Prod}}</td>
                      <td style="text-align: center;">{{$send->Stock}}</td>
                      <td style="text-align: center;">{{$send->unit}}</td>
                      <td style="text-align: center;">{{$send->cost}}</td>
                      <td style="text-align: center;">{{$send->Dcount}}</td>
                      <td style="text-align: center;">{{$send->total}}</td>
                    </tr>
                     @endforeach
                     <tr>
                      <td colspan="6" style="text-align: right;padding-right: 55px"><b>Sub Total</b></td>
                      <td style="text-align: center;">{{$send->Sub}}</td>
                    </tr>
                     <tr>
                      <td colspan="6" style="text-align: right;padding-right: 55px"><b>Discounted Amount</b></td>
                      <td style="text-align: center;">{{$send->Discount}}</td>
                    </tr>
                     <tr>
                      <td colspan="6" style="text-align: right;padding-right: 55px"><b>Net Total</b></td>
                      <td style="text-align: center;">{{$send->Grand}}</td>
                    </tr>
                   
                     
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         </div>
       </div>




            
           

         </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      
    </div>
  </div> 
   <script type="text/javascript">
     function printDiv(){
      var value1=document.getElementById('print').innerHTML;
      var value2=document.body.innerHTML;
      document.body.innerHTML=value1;
      window.print();
      document.body.innerHTML=value2;
     }
   </script>


    @endsection