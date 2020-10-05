@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">PurchaseList</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Administration</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">purchaselist</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


            <div class="col-md-12">
                        
           <div class="modal-body">
          <form action="{{url('newpurchase')}}" method="post" class="was-validated" enctype="multipart/form-data"> 
          @csrf  
          <div class="col-sm-12">
            <div class="row">
           <div class="col-sm-6" >
           <div class="col-sm-9" >
            <b>Supplier Name</b> 
            <input type="text" class="form-control" name="Supplier_Name" placeholder="Supplier Name" style="background-color:#ffcccb" required> 
          </div>
         
          <div class="col-sm-9" >
           <b>Purchase Proof</b> 
           <input type="file" class="form-control" name="file" style="padding-top: 3px"  required> 
           
         </div>
       
         </div> 
           <div class="col-sm-6" >
           <div class="col-sm-9" style="margin-left: 140px" >
            <b>Purchase Date</b> 
            <input type="text" class="form-control" name="Supplier_Date" id="datepicker" placeholder="Purchase Date" required> 
          </div> 
          
          <div class="col-sm-9" style="margin-left: 140px" >
           <b>Purchase Description</b> 
           <input type="text" class="form-control" name="Description" placeholder="Description" required> 
         </div>
         
          <div class="col-sm-9"  style="margin-left: 140px" >
           <b>Total Amount</b> 
           
             <input type="text" name="total" class="form-control" id="totall" readonly>
           
         </div>
         
          
       
         
         </div>
       </div>

         <div class="container" style="margin-top: 25px">
     
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             
                             <th style="width: 20%">Stock Item</th>
                             <th >Batch</th>
                             <th >Count</th>
                             <th >Cost</th>
                             <th >Total</th>
                             <th><a href="#" class="Add"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td>
          <select name="Stock_Item[]"  class="custom-select item" style="font-size: 15px;" required>
             <option name="Stock_Item[]" value=""></option>                                
              @foreach($purch as $data)                              
            <option  name="Stock_Item[]" value="{{$data->Item_Name}}">{{$data->Item_Name}}</option>
              @endforeach
            </select>
           

            
          
        </td>
         <td><input type="text" name="Batch[]" class="form-control" required></td>  
           <td><input type="text" name="Count[]" class="form-control count" required readonly></td>
            
           <td><input type="text" name="Cost[]" class="form-control cost" required readonly></td>
           
           <td><input type="text" name="Total[]" class="form-control amont" readonly></td>
         <td><a href="#" class="btn btn-danger RemoveRow"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td>Total Amount</td>
                             <td><b class="price"></b></td>
                           
                             <td></td>
                         </tr>
                     </tfoot>
                 </table>
    </div>
        
</div>

<script type="text/javascript">
   $('tbody').on('change','.item',function(){
     var id=$(this).val();
     var div=$(this).parent().parent();
      console.log(id);
       var op=" ";

     $.ajax({
       type : 'GET',
       url :'{!!URL::to('findPrice')!!}',
       dataType:'json',
       data : {'id':id},
       success:function(data){
        
       console.log("price");
          console.log(data.Item_Cost);
          console.log(data.Item_Count);
          div.find('.cost').val(data.Item_Cost);
          div.find('.count').val(data.Item_Count);
           

        var quantity=div.find('.count').val();
        var budget=div.find('.cost').val();
        var amount=(quantity*budget);
        div.find('.amont').val(amount);
        
        totall();
    
    function totall(){
        var totall=0;
        $('.amont').each(function(i,e){
            var amount=$(this).val()-0;
        totall +=amount;
    });
    $('.price').html(totall+".00 Rs"); 
    $('#totall').val(totall+".00 Rs"); 
     
    }


       },
       error:function(){

       }

     });

   });
   
  
    
    $('.Add').on('click',function(){
        Add();
    });
    function Add()
    {
        var tr='<tr>'+
        '<td><select name="Stock_Item[]"  class="custom-select item" style="font-size: 15px;" required> <option name="Stock_Item[]" value=""></option>     @foreach($purch as $data)  <option name="Stock_Item[]" value="{{$data->Item_Name}}">{{$data->Item_Name}}</option> @endforeach</select></td>'+
        '<td><input type="text" name="Batch[]" class="form-control" required></td>'+
        '<td><input type="text" name="Count[]" class="form-control count" required></td>'+
        '<td><input type="text" name="Cost[]" class="form-control cost" required></td>'+
        ' <td><input type="text" name="Total[]" class="form-control amont" readonly></td>'+
        '<td><a href="#" class="btn btn-danger RemoveRow"><i class="fas fa-trash-alt"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $(document).on('click', '.RemoveRow', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>=1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
</script>
       
      <div class="col-sm-12">
       <button class="btn btn-warning" type="submit" style="width: 25%;height:35px;margin-left: 765px;margin-bottom: 5px">Save</button>
      </div>
       <div class="col-sm-12">
       <a href="{{url('purchaseList')}}" class="btn btn-primary" style="width: 25%;height:35px;margin-left: 765px">Cancle</a>
      </div>  
            </div>
         </form>
           </div>
             </div>
                   
                    

                    
                    


@endsection
 