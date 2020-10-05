
@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="float: left">Patients</h1>
            <span class="m-0 text-dark" style="float: left;padding-left: 10px;padding-top: 10px">Details</span>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item"><a href="Patients">Patient</a></li>
              <li class="breadcrumb-item active">Add Update Counter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <div  style="width: 99%">
            <div class="col-md-12">
            <div class="container-fluid">   
                  <h3 class="container p-3 my-3 bg-dark text-white">
                    @foreach($data as $nam)  
                    @endforeach
                    Patient:{{$nam->Name}}/HPN-{{$nam->ID}}</h3>
                    @foreach($data as $item)  
                    @endforeach
                </div>
                 <div class="modal-header">
                         <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:20px; color:Black; width:100%">Patient Invoice</h1>
                        </div>
                        @if(Session::get('alert'))
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
               {{Session::get('alert')}}
              </div>
              @endif
           <div class="modal-body">
          
          <form action="{{url('patientEncountUpdate')}}" method="post"> 
          @csrf 
           
          <div class="col-sm-12">
            <div class="row">
           <div class="col-sm-6" >
            <div class="col-sm-9" >
            <input type="hidden" name="id" value="{{$item->id}}" > 
          </div>
          <div class="col-sm-9" >
            <input type="hidden" name="patient" value="{{$nam->ID}}" > 
          </div>
           <div class="col-sm-9" >
            <b>Reason Of Visits ICD CODES</b> 
            <input type="text" class="form-control" name="reason" value="{{$item->Rson}}" style="background-color:#ffcccb" required> 
          </div> 
          <div class="col-sm-9" >
           <b>Referee</b> 
             <select name="ref" id="host" style="width: 100%">
             <option name="ref" value="{{$item->Ref}}">{{$item->Ref}}</option>  
             <option name="ref" value="">-No Choose-</option>  
             @foreach(App\refere::all() as $re)                              
            <option name="ref" value="{{$re->Referee_Name}}">{{$re->Referee_Name}}</option>
              @endforeach
              </select> 
         </div>
          <div class="col-sm-9" >
           <b>Doctor</b> 
             <select name="doctor" id="doct" style="width: 100%">
              <option name="doctor" value="{{$item->Doct}}">{{$item->Doct}}</option>  
             @foreach(App\doct::all() as $do)                             
            <option name="doctor" value="{{$do->Doctor_Name}}">{{$do->Doctor_Name}}</option>
             @endforeach
            </select> 
         </div>
         </div> 



           <div class="col-sm-6" >
           <div class="col-sm-9" style="margin-left: 130px" >
            <b>Encounter Date</b> 
            <input type="text" class="form-control" name="date" id="datepicker" value="{{$item->Date}}" required> 
          </div> 
          <div class="col-sm-9" style="margin-left: 130px" >
           <b>Users</b> 
            <select name="user" id="user" style="width: 100%">                               
              @foreach(App\dash::all() as $dat)                              
            <option name="user" value="{{$dat->email}}">{{$dat->email}}</option>
              @endforeach
            </select> 
         </div>
         <div class="col-sm-9" style="margin-left: 130px;margin-bottom: 20px" >
           <b>Notes</b> 
           <input type="text" class="form-control" name="note" placeholder="Description" > 
         </div>
         </div>
       </div>

</div>



       <div class="from-control" style="width: 106%;border: 1px solid silver;background: white;border-radius: 4px;margin-left: -25px">
<div class="col-sm-12" >
<div class="modal-header">
     <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:18px; color:Black; width:100%;">Item Details</h1>
       </div>
       
         <div class="panel panel-footer" >
                 <table border="1" cellpadding="3" style="margin-left: -6px;border-color:silver;border-style: solid;margin-bottom: 13px;">
                     <thead >
                         <tr>
                             <th style="font-size: 80%">PROCEDURES</th>
                             <th style="font-size: 80%">STOCK_ITEM</th>
                             <th style="font-size: 80%">UNIT</th>
                             <th style="font-size: 80%">COST</th>
                             <th style="font-size: 80%">DISCOUNT</th>
                             <th style="font-size: 80%">TYPE</th>
                             <th style="font-size: 80%">DEDUCT</th>
                             <th style="font-size: 80%">SUB_TOTAL</th>
                             <th style="font-size: 80%">DISCOUNT</th>
                             <th style="font-size: 80%">TOTAL AMOUNT</th>
                             <th style="text-align: center"><a href="#" class="addNewRow"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                         </tr>
                     </thead>
                     <tbody id="table1">
         <tr>
          <td>
          <select name="prod[]" id="prod"  class="custom-select prod" style="background-color:#ffcccb;font-size: 15px">
             <option name="prod[]" value=""></option>                                
              @foreach(App\proced::all() as $prod)                              
            <option name="prod[]" value="{{$prod->Procedure_Name}}">{{$prod->Procedure_Name}}</option>
              @endforeach
            </select> 
        </td>
         <td><select name="stock[]" id="item"  class="custom-select item" style="background-color:#ffcccb;font-size: 15px">
             <option name="stock[]" value=""></option>                                
              @foreach(App\pharmacy::all() as $phar)                              
            <option name="stock[]" value="{{$phar->Item_Name}}">{{$phar->Item_Name}}</option>
              @endforeach
            </select></td>  
          <td><input type="text" name="unitt[]" id="unit" class="form-control unit"></td>  
           <td><input type="text" name="costt[]" id="cost" class="form-control cost" style="width: 80px" readonly></td>  
            <td><input type="text" class="form-control Discount"></td>  
             <td><select name="type" class="form-control type" style="width: 80px">                        
            <option name="type" value="1">%</option>
             <option name="type" value="2">cash</option>
            </select></td>  
              <td><select  class="browser-default custom-select">
             <option  value="Doctor">Doctor Hospita</option>                             
            <option  value="bajwa">Bajwa Hospita</option>
             <option value="nationa">Nationa Hospita</option>
            </select></td>  
           <td><input type="text" name="subtotal[]" class="form-control sub" readonly></td>
           <td><input type="text" name="dcount[]" class="form-control dcount" readonly></td>
           <td><input type="text" name="totall[]" class="form-control total" readonly></td>
         <td><a href="#" class="btn btn-danger removed"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
                         
                     </tbody>
                     
                 </table>
             </div>
        
</div>
</div>
<script type="text/javascript">
    $('#table1').delegate('.unit,.cost,.Discount,.type','keyup',function(){

        var tr=$(this).parent().parent();
         var di=tr.find('.Discount').val();
        var typ=tr.find('.type').html();
        var AllTotal=tr.find('.unit').val();
        var Discount=tr.find('.cost').val();
        var amount=parseInt(AllTotal*Discount);
        tr.find('.total').val(amount);
        tr.find('.sub').val(amount);
        
        var ans=((Discount*di)/100);
        var min=parseInt(amount-ans);
        tr.find('.dcount').val(ans);
        tr.find('.total').val(min);
        
        totall();
        subtotal();
        discAmount();
        
    });
    function totall(){
        var total=0;
        $('.total').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
         $('#grand').val(total+".00 Rs"); 
     
    }
    function subtotal(){
        var Total=0;
        $('.sub').each(function(i,e){
            var amount=$(this).val()-0;
        Total +=amount;
    });
         $('#subtotal').val(Total+".00 Rs"); 
     
    }
     function discAmount(){
        var Totaal=0;
        $('.dcount').each(function(i,e){
            var amount=$(this).val()-0;
        Totaal +=amount;
    });
         $('#discAmount').val(Totaal+".00 Rs"); 
     
    }

   

    $('.addNewRow').on('click',function(){
        addNewRow();
    });
    function addNewRow()
    {
        var tr='<tr>'+
        '<td><select name="prod[]" id="prod"  class="browser-default custom-select" style="background-color:#ffcccb;font-size: 15px"><option name="prod[]" value=""></option> @foreach(App\ proced::all() as $prod)<option name="prod[]" value="{{$prod->Prodecure_Charges}}">{{$prod->Procedure_Name}}</option> @endforeach </select></td>'+
        '<td><select name="stock[]" id="item"  class="browser-default custom-select" style="background-color:#ffcccb;font-size: 15px"> <option name="stock[]" value=""></option>@foreach(App\ Item::all() as $it)<option name="stock[]" value="{{$it->Stock_Item}}">{{$it->Stock_Item}}</option>@endforeach  </select></td>'+
        '<td><input type="text" name="unitt[]" id="unit" class="form-control unit" ></td>'+
        '<td><input type="text" name="costt[]" id="cost" class="form-control cost" readonly></td>'+
        '<td><input type="text" class="form-control Discount"></td>'+
        '<td><select  class="form-control type" style="width: 80px">                <option value="1">%</option><option  value="2">cash</option></select></td>'+
        '<td><select  class="browser-default custom-select"><option  value="Doctor">Doctor Hospita</option>    <option  value="bajwa">Bajwa Hospita</option><option  value="nationa">Nationa Hospita</option></select></td>'+
        '<td><input type="text" name="subtotal[]" class="form-control sub" readonly></td>'+
        '<td><input type="text" name="dcount[]" class="form-control dcount" readonly></td>'+
        ' <td><input type="text" name="totall[]" class="form-control total" readonly></td>'+
        '<td><a href="#" class="btn btn-danger removed"><i class="fas fa-trash-alt"></i></a></td>'+
        '</tr>';
        $('#table1').append(tr);
    };
    $(document).on('click', '.removed', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>=1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });

     $('tbody').on('change','.prod',function(){
     var id=$(this).val();
     var div=$(this).parent().parent();
      console.log(id);
       var op=" ";

     $.ajax({
       type : 'GET',
       url :'{!!URL::to('findCost')!!}',
       dataType:'json',
       data : {'id':id},
       success:function(data){
        
       console.log("price");
          console.log(data.Prodecure_Charges);
          
          div.find('.cost').val(data.Prodecure_Charges);
          
          div.find('#unit').val(1);

        }
        });
   });
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
        
      
          console.log(data.Item_Cost);
          
          div.find('.cost').val(data.Item_Cost);
          
          div.find('#unit').val(1);

        }
        });
   });

     $(document).on('change','.type', function(){
        var tr=$(this).parent().parent();
       if(tr.find('#item').val()!=1)
        {
         
         if(tr.find('.Discount').val()=="")
         {
          tr.find('.total').val("");
         }
          
        }
        

    });


    
$(document).ready( function () {
   
    $('#doct').select2({
     placeholder:'Please select',
     allowClear:true,
      matcher:function(term, text) 
      { 
        return text.toUpperCase().indexOf(term.toUpperCase())==0;
       }
    });

     $('#user').select2({
     placeholder:'Please select',
     allowClear:true,
      matcher:function(term, text) 
      { 
        return text.toUpperCase().indexOf(term.toUpperCase())==0;
       }
    });
} 
);

    /*function select(){
      if(document.getElementById('prod').value!="")
      {
        var prod=document.getElementById('prod').value;
        document.getElementById('item').value="";
        document.getElementById('unit').value=1;
        document.getElementById('cost').value=prod;

      }
      
    }
     function selected(){
      if(document.getElementById('item').value!="")
      {
        var item=document.getElementById('item').value;
        document.getElementById('prod').value="";
         document.getElementById('unit').value=1;
           document.getElementById('cost').value=item;
      }
      
    }
   */
    

</script>




<div class="col-sm-12" style="margin-left: 30px">

<div class="row">
           <div class="col-sm-6" >
           <div class="col-sm-12" >
            <div class="from-control" style="width: 150%;border: 1px solid silver;background: white;margin-top: 10px;border-radius: 4px;margin-left: -55px">

<div class="modal-header">
     <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:20px; color:Black; width:100%">Payment Details</h1>
       </div>
       
          <div class="panel panel-footer" >
                <table border="1"cellpadding="5" style="border-color:silver;border-style: solid;margin-bottom: 13px;width: 97%;margin-left: 10px">
                     <thead>
                         <tr>
                             <th style="font-size: 80%">Payment Date</th>
                             <th style="font-size: 80%">Payment Type</th>
                             <th style="font-size: 80%">Bank Name</th>
                             <th style="font-size: 80%">Card/Cheque</th>
                             <th style="font-size: 80%">Amount</th>
                             <th style="text-align: center"><a href="#" class="newRowAdd"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                         </tr>
                     </thead>
                     <tbody id="table2">
         <tr>
        <td ><input type="text" name="Date[]" class="form-control datepicker2" placeholder="Date"></td>
         <td style="width: 16%" ><select name="Type[]" class="browser-default custom-select">
             <option name="Type[]" value="Cash">Cash</option>                             
            <option name="Type[]" value="Cheque">Cheque</option>
             <option name="Type[]" value="Card">Card</option>
             <option name="Type[]" value="Online">Online</option>
            </select></td>  
         <td><input type="text" name="Bank[]" class="form-control Bank" ></td>
           <td><input type="text" name="card[]" class="form-control card" style="margin-top: 15px "></td>
           <td><input type="text" name="amount[]" class="form-control amount"></td>
         <td><a href="#" class="btn btn-danger removeRow"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
                         
                     </tbody>
                     
                 </table>
             </div>
        
</div>
<script type="text/javascript">
    $('#table2').delegate('.amount','keyup',function(){
        var tr=$(this).parent().parent();
        var Bank=tr.find('.amount').val();
        
        totalamount();
        totall();
    });
    function totalamount(){
        var totalll=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
        totalll +=amount;
    });
     

    var total=0;
        $('.total').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
         var result=(total-totalll);  
         if(result>=0)
         {
          var zero1=0;
          $('#due').val(result+".00 Rs");
           $('#advanced').val(zero1); 
         }
         else
         {
              var zero=0;
             $('#advanced').val((result*(-1))+".00 Rs"); 
             $('#due').val(zero);
         }
          
        

    }

    

     
    $('.newRowAdd').on('click',function(){
        newRowAdd();
    });
    function newRowAdd()
    {
        var tr='<tr>'+
        '<td><input type="date" name="Date[]" class="form-control" ></td>'+
        '<td><select name="Type[]" class="browser-default custom-select"><option name="Type[]" value="Cash">Cash</option>  <option name="Type[]" value="Cheque">Cheque</option> <option name="Type[]" value="Card">Card</option><option name="Type[]" value="Online">Online</option></select></td>'+
        '<td><input type="text" name="Bank[]" class="form-control bank" ></td>'+
        '<td><input type="text" name="Card[]" class="form-control card"></td>'+
        ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+
        '<td><a href="#" class="btn btn-danger removeRow"><i class="fas fa-trash-alt"></i></a></td>'+
        '</tr>';
        $('#table2').append(tr);
    };
    $(document).on('click', '.removeRow', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>=1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
</script>

</div>

         </div>
         



         <div class="from-control" style="width: 32%;border: 1px solid silver;background: white;border-radius: 4px;margin-left: 15%;margin-top: 10px">

<div class="modal-header">
     <h1 style="font-family: 'Source Sans Pro',sans-serif; font-size:20px; color:Black; width:100%">Sub Total</h1>
       </div>
           <div class="col-sm-12" >
           <div class="col-sm-12"  >
             <b>Sub_Total</b>
        <div class="input-group mb-3" >
          <div class="input-group-append">
            <div class="input-group-text" >
              <span >PKR</span>
            </div>
          </div>
          <input type="text" name="sub"  class="form-control" placeholder="0.00" id="subtotal"  readonly>
        </div>
           <b>Discount Amount</b>
        <div class="input-group mb-3" >
          <div class="input-group-append">
            <div class="input-group-text" >
              <span >PKR</span>
            </div>
          </div>
          <input type="text" name="disc"  class="form-control" placeholder="0.00" id="discAmount"  readonly>
        </div>
         
           <b>Grand Total</b>
        <div class="input-group mb-3" >
          <div class="input-group-append">
            <div class="input-group-text" >
              <span >PKR</span>
            </div>
          </div>
   <input type="text" name="grand"  class="form-control" placeholder="0.00" value="{{$item->Note}}" id="grand"  readonly>
        </div>
        <b>Advanced Amount</b>
        <div class="input-group mb-3" >
          <div class="input-group-append">
            <div class="input-group-text" >
              <span >PKR</span>
            </div>
          </div>
          <input type="text" name="advance"  class="form-control" placeholder="0.00" id="advanced"  readonly>
          
        </div>
        <b>Due Amount</b>
        <div class="input-group mb-3" >
          <div class="input-group-append">
            <div class="input-group-text" >
              <span >PKR</span>
            </div>
          </div>
          <input type="text" name="due"  class="form-control" placeholder="0.00" id="due"  readonly>
          
        </div> 
         </div>
         </div>
       </div>
     </div>
</div> 
       

      <div class="col-sm-12">
       <button class="btn btn-warning" type="submit" style="width: 25%;height:35px;margin-left: 75%;margin-bottom: 5px;margin-top: 15px">Update</button>
      </div>
       <div class="col-sm-12">
       <a href="{{url('patients')}}" class="btn btn-primary" style="width: 25%;height:35px;margin-left: 75%">Cancle</a>
      </div>  
            
         </form>
           </div>
             </div>
                    </div>

                   <!-- <script type="text/javascript">
                      $('.reason').mask("99-Z99.9-Z99.9-Z99.9-Z999");
                    </script>-->
                    


@endsection



