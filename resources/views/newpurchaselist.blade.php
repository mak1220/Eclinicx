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
          <form action="{{url('list')}}" method="post" class="was-validated"> 
          @csrf  
          <div class="col-sm-12">
            <div class="row">
           <div class="col-sm-6" >
           <div class="col-sm-9" >
            <b>Supplier Name</b> 
            <input type="text" class="form-control" name="name" style="background-color:#ffcccb" required> 
          </div>
          @error('name')
          <span style="color:red">{{$message}}</span>
          @enderror 
          <div class="col-sm-9" >
           <b>Purchase Proof</b> 
           <input type="file" class="form-control" name="prof" style="padding-top: 3px"  required> 
         </div>
         @error('proof')
          <span style="color:red">{{$message}}</span>
          @enderror
         </div> 
           <div class="col-sm-6" >
           <div class="col-sm-9" style="margin-left: 140px" >
            <b>Purchase Date</b> 
            <input type="date" class="form-control" name="date" required> 
          </div> 
          @error('date')
          <span style="color:red">{{$message}}</span>
          @enderror
          <div class="col-sm-9" style="margin-left: 140px" >
           <b>Purchase Description</b> 
           <input type="text" class="form-control" name="desc" placeholder="Description" required> 
         </div>
         @error('desc')
          <span style="color:red">{{$message}}</span>
          @enderror
         
         </div>
       </div>

         <div class="container" style="margin-top: 25px">
     
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Stock Item</th>
                             <th >Batch</th>
                             <th >Count</th>
                             <th >Cost</th>
                             <th >Total</th>
                             <th><a href="#" class="addRow"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td><input type="text" name="product_name[]" class="form-control" required=""></td>
         <td><input type="text" name="brand[]" class="form-control"></td>  
           <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
           <td><input type="text" name="budget[]" class="form-control budget"></td>
           <td><input type="text" name="amount[]" class="form-control amount"></td>
         <td><a href="#" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td>Total Amount</td>
                             <td><b class="total"></b> </td>
                             <td></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
        
</div>
<script type="text/javascript">
    $('tbody').delegate('.quantity,.budget','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var budget=tr.find('.budget').val();
        var amount=(quantity*budget);
        tr.find('.amount').val(amount);
        total();
    });
    function total(){
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
    $('.total').html(total+".00 Rs"); 
     
    }
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><input type="text" name="product_name[]" class="form-control" required=""></td>'+
        '<td><input type="text" name="brand[]" class="form-control"></td>'+
        '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+
        '<td><input type="text" name="budget[]" class="form-control budget"></td>'+
        ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="fas fa-trash-alt"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>=1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
</script>
       
      <div class="col-sm-12">
       <button class="btn btn-warning" type="submit" style="width: 25%;height:35px;margin-left: 765px;margin-bottom: 5px">Update</button>
      </div>
       <div class="col-sm-12">
       <button class="btn btn-primary" style="width: 25%;height:35px;margin-left: 765px">Cancle</button>
      </div>  
            </div>
         </form>
           </div>
             </div>
                   
                    

                    
                    


@endsection
 