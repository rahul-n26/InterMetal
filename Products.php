<?php

include 'config.php';

session_start();
if(!isset($_SESSION['user'])) {
    echo "<script>location.href='index.php'</script>";
    die();
}

$qsearch = "select distinct Item_Code,Item_Name from reqm";
$result2 = mysqli_query($connection, $qsearch);


$reqid = '';
$iid = '';

if (isset($_COOKIE['ccookie']))
$reqid = $_COOKIE['ccookie'];

setcookie('ecookie', $reqid);

?>


<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="PageStyles.css">
    <title>START</title>
</head>

<body style="width:100%,align:center;">
   
  <div class="headingtext">
  <img src="intermetal.svg" alt="LOGO" class="logo" height="60px" width="170px" />
  <h1>WELCOME</h1>
  </div>
  
  <div class="container" id="productsentry">
 
   
   <div  style="margin-bottom:5px;" id="latest">
            
     <div class="input-group form-group col">
              <div class="input-group-prepend">
                <label class="input-group-text" id="f2">Item Code</label> 
              </div>
             <!--<input type="text" class="form-control" id="icode" name="icode" required autocomplete="off">-->
             
             <?php 
         
         echo "<select class='form-control' id='icode' name='icode' required >";
        echo "<option> </option>";
         while($row1 = mysqli_fetch_assoc($result2)) {
         
             
    echo "<option value='".$row1['Item_Code']."'>".$row1['Item_Name']."</option>";
    
               
         }
         echo "</select>";
             
             ?>
             
             <span id="error_icode" class="text-danger"></span>
             <form method="post">
             <input type="button" onclick="getDetails();" class="btn btn-primary" name="codebtn" data-toggle="modal" data-target="#myModals" id="pops" value="...">
            </form>

            
    </div>       
            
    <div class="input-group form-group col">
    <div class="input-group-prepend">
    <label class="input-group-text">Quantity</label>
       </div>       
    <input type="text" name="quantity" onfocus="this.value=''" id="quantity" class="form-control" required autocomplete="off"/>
    <span id="error_quantity" class="text-danger"></span>
   </div>
   
   <div class="input-group form-group col">
   <div class="input-group-prepend">
    <label class="input-group-text">Price</label>
    </div>
    <input type="text" name="price" onfocus="this.value=''" id="price" class="form-control" required autocomplete="off" />
    <span id="error_price" class="text-danger"></span>
   </div>
   
   
   
   <div class="input-group form-group col" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-primary">+ Add Product</button>
   </div>
   
   </div>
   
   <br />
   <form method="post" id="user_form">
    <div class="table-responsive" id="ptab" >
     <table class="table table-striped table-bordered" id="user_data">
      <tr id="headrow">
       <th>Remove</th>
       <th>Item Code</th>
       <th>Quantity</th>
       <th>Price</th>
      </tr>
     </table>
    </div>
    <div align="center">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
    </div>
   </form>

   <br />
  
  
   
  
  <div id="action_alert" title="Action">

  </div>
  
  
  
  <div class="modal" id="myModals" role="dialog">
 
  <div class="modal-dialog">
    
    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" >Details</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>   
      </div>
               
      <div class="modal-body" id="modalbody">   
          <!-- <script>
            function getDetails() {
                var inputValue = $("#icode").val();
                console.log(inputValue);
                document.cookie = "inputValue = " + inputValue;
            }
          </script>     
            <?php     
            /*$code = $_COOKIE['inputValue'];
            include 'Practice2.php'; */    
            ?>
            <script>
                console.log('pass');
            </script> -->
            
            <div class="cont">
            <div id="idimage"></div> 
            </div>    
            <div id="idname"></div>
            <div id="idcode"></div>
            <div>
            <span id="idtype1"></span>
            <span id="iddesc1"></span>
            </div>
            <div>
            <span id="idtype2"></span>
            <span id="iddesc2"></span>
            </div>
            <div>
            <span id="idtype3"></span>
            <span id="iddesc3"></span>
            </div>
            <div>
            <span id="idtype4"></span>
            <span id="iddesc4"></span>
            </div>
            <div>
            <span id="idtype5"></span>
            <span id="iddesc5"></span>
            </div>
            <div>
            <span id="idtype6"></span>
            <span id="iddesc6"></span>
            </div>
            <div>
            <span id="idtype7"></span>
            <span id="iddesc7"></span>
            </div>
            <div>
            <span id="idtype8"></span>
            <span id="iddesc8"></span>
            </div>
            <div>
            <span id="idtype9"></span>
            <span id="iddesc9"></span>
            </div>
            <div>
            <span id="idtype10"></span>
            <span id="iddesc10"></span>
            </div>
            <div>
            <span id="idtype11"></span>
            <span id="iddesc11"></span>
            </div>
            <div>
            <span id="idtype12"></span>
            <span id="iddesc12"></span>
            </div>
            <div>
            <span id="idtype13"></span>
            <span id="iddesc13"></span>
            </div>
            <div>
            <span id="idtype14"></span>
            <span id="iddesc14"></span>
            </div>
            <div>
            <span id="idtype15"></span>
            <span id="iddesc15"></span>
            </div>
            <div>
            <span id="idtype16"></span>
            <span id="iddesc16"></span>
            </div>
            <div>
            <span id="idtype17"></span>
            <span id="iddesc17"></span>
            </div>
            <div>
            <span id="idtype18"></span>
            <span id="iddesc18"></span>
            </div>
            <div>
            <span id="idtype19"></span>
            <span id="iddesc19"></span>
            </div>
            <div>
            <span id="idtype20"></span>
            <span id="iddesc20"></span>
            </div>
            
            <div>
            <span id="idtype21"></span>
            <span id="iddesc21"></span>
            </div>
            <div>
            <span id="idtype22"></span>
            <span id="iddesc22"></span>
            </div>
            <div>
            <span id="idtype23"></span>
            <span id="iddesc23"></span>
            </div>
            <div>
            <span id="idtype24"></span>
            <span id="iddesc24"></span>
            </div>
            <div>
            <span id="idtype25"></span>
            <span id="iddesc25"></span>
            </div>
            <div>
            <span id="idtype26"></span>
            <span id="iddesc26"></span>
            </div>
            <div>
            <span id="idtype27"></span>
            <span id="iddesc27"></span>
            </div>
            <div>
            <span id="idtype28"></span>
            <span id="iddesc28"></span>
            </div>
            <div>
            <span id="idtype29"></span>
            <span id="iddesc29"></span>
            </div>
            <div>
            <span id="idtype30"></span>
            <span id="iddesc30"></span>
            </div>
            
            <!--<div id="idfin"></div>
            <div id="idsb"></div>
            <div id="idreccuse"></div>
            <div id="idwrty"></div>
            <div id="idcorg"></div>
            <div id="idamr"></div>
            <div id="idbase"></div>
            <div id="idleg"></div>
            <div id="idtop"></div>
            <div id="idcush"></div>
            <div id="idfabr"></div>
            <div id="idlegs"></div>
            <div id="idfeats"></div>
            <div id="idfoam"></div>
            <div id="iduphol"></div>
            <div id="idopt"></div>
            <div id="idscush"></div>
            <div id="idseet"></div>
            <div id="idframefin"></div>
            <div id="idtabtop"></div>
            <div id="idlouframe"></div>
            <div id="idnote"></div>
            <div id="idarmbak"></div>
            <div id="idbak"></div>
            <div id="idspfeats"></div>--> 
         
      </div>
               
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<form method="post" action="Report.php" >
     <br><br><br>
     <input type = submit value="View Report" id="reportbutton">     
</form>


<script>  
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });



 $('#save').click(function(){
  var error_icode = '';
  var error_quantity = '';
  var error_price = '';
  var icode = '';
  var quantity  = '';
  var price = '';
     
  if($('#icode').val() == '')
  {
   error_icode = 'Item Code is required';
   $('#error_icode').text(error_icode);
   $('#icode').css('border-color', '#cc0000');
   icode = '';
  } 
  else
  {
   error_icode = '';
   $('#error_icode').text(error_icode);
   $('#icode').css('border-color', '');
   icode = $('#icode').val();
  } 
     
     
  if($('#quantity').val() == '')
  {
   error_quantity = 'Quantity is required';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '#cc0000');
   quantity = '';
  }
  else
  {
   error_quantity = '';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '');
   quantity = $('#quantity').val();
  } 
  if($('#price').val() == '')
  {
   error_price = 'Price is required';
   $('#error_price').text(error_price);
   $('#price').css('border-color', '#cc0000');
   price = '';
  }
  else
  {
   error_price = '';
   $('#error_price').text(error_price);
   $('#price').css('border-color', '');
   price = $('#price').val();
  }
  if(error_icode != '' || error_quantity != '' || error_price != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == '+ Add Product')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">X</button></td>';
    output += '<td>'+icode+' <input type="hidden" name="hidden_icode[]" id="icode'+count+'" class="icode" value="'+icode+'" /></td>';
    output += '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+count+'" class="quantity" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="hidden_price[]" id="price'+count+'" value="'+price+'" /></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">X</button></td>';
    output = '<td>'+icode+' <input type="hidden" name="hidden_icode[]" id="icode'+row_id+'" class="icode" value="'+icode+'" /></td>';
    output = '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+row_id+'" class="quantity" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="hidden_price[]" id="price'+row_id+'" value="'+price+'" /></td>';
    
    $('#row_'+row_id+'').html(output);
   }

   
  }
 });



 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.icode').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"ProductEntry.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>

<script>
function getDetails() {
     var inputValue = $("#icode").val();
    
    $.post('jsondetail.php', { codeValue: inputValue }, 
        function(data){
            //console.log(typeof(data));
            //data.preventDefault;
            var details = JSON.parse(data);   
            console.log(details);
            var i = 0;
            
            var name = "<b>Name: </b> " + details[0].trim();
            var icode ="<b>Item Code: </b> " + details[1].trim();
            
            $('#idtype1').html("");$('#iddesc1').html("");
            $('#idtype2').html("");$('#iddesc2').html("");
            $('#idtype3').html("");$('#iddesc3').html("");
            $('#idtype4').html("");$('#iddesc4').html("");
            $('#idtype5').html("");$('#iddesc5').html("");
            $('#idtype6').html("");$('#iddesc6').html("");
            $('#idtype7').html("");$('#iddesc7').html("");
            $('#idtype8').html("");$('#iddesc8').html("");
            $('#idtype9').html("");$('#iddesc9').html("");
            $('#idtype10').html("");$('#iddesc10').html("");
        
            $('#idtype11').html("");$('#iddesc11').html("");
            $('#idtype12').html("");$('#iddesc12').html("");
            $('#idtype13').html("");$('#iddesc13').html("");
            $('#idtype14').html("");$('#iddesc14').html("");
            $('#idtype15').html("");$('#iddesc15').html("");
            $('#idtype16').html("");$('#iddesc16').html("");
            $('#idtype17').html("");$('#iddesc17').html("");
            $('#idtype18').html("");$('#iddesc18').html("");
            $('#idtype19').html("");$('#iddesc19').html("");
            $('#idtype20').html("");$('#iddesc20').html("");
        
            $('#idtype21').html("");$('#iddesc21').html("");
            $('#idtype22').html("");$('#iddesc22').html("");
            $('#idtype23').html("");$('#iddesc23').html("");
            $('#idtype24').html("");$('#iddesc24').html("");
            $('#idtype25').html("");$('#iddesc25').html("");
            $('#idtype26').html("");$('#iddesc26').html("");
            $('#idtype27').html("");$('#iddesc27').html("");
            $('#idtype28').html("");$('#iddesc28').html("");
            $('#idtype29').html("");$('#iddesc29').html("");
            $('#idtype30').html("");$('#iddesc30').html("");
        
            for(i=2;i<details.length; i += 2) {
                $('#' + 'idtype' + i).html("<b>" + details[i] + "</b>");
                $('#' + 'iddesc' + i).html(details[i+1]);
            }
            /*var finish ="<b>Finish: </b> " + details[4].trim();
            var snb ="<b>Seat and Back: </b> " + details[5].trim();
            var recommend ="<b>Recommended Use: </b> " + details[6].trim();
            var wrnty = "<b>Warranty: </b> " + details[7].trim();
            var coo ="<b>Country Of Origin: </b> " + details[8].trim();
            var armrest ="<b>Armrest: </b> " + details[9].trim();
            var base ="<b>Base: </b> " + details[10].trim();
            var leg ="<b>Leg: </b> " + details[11].trim();
            var top = "<b>Top: </b> " + details[12].trim();
            var cushion ="<b>Cushion: </b> " + details[13].trim();
            var fabric ="<b>Fabric: </b> " + details[14].trim();
            var legs ="<b>Legs: </b> " + details[15].trim();
            var feat ="<b>Features: </b> " + details[16].trim();
            var foam ="<b>Foam: </b> " + details[17].trim();
            var uphol ="<b>Upholstry: </b> " + details[18].trim();
            var option ="<b>Option: </b>  " + details[19].trim();
            var seat_cushion ="<b>Seat Cushion: </b> " + details[20].trim();
            var seat ="<b>Seat: </b> " + details[21].trim();
            var frame_finish ="<b>Frame Finish: </b> " + details[22].trim();
            var table_top ="<b>Table Top</b>: " + details[23].trim();
            var lounger_frame ="<b>Lounger Frame: </b> " + details[24].trim();
            var note = "<b>Note: </b> " + details[25].trim();
            var anb ="<b>Arm and Back: </b> " + details[26].trim();
            var back ="<b>Back: </b> " + details[27].trim();
            var spcl_feat ="<b>Special Features: </b> " + details[28].trim();*/
            var image = "<b>Image :</b>" + "<img src='./media/" + details[1] + ".png'>";
            //var image = "<img src='./media/A-BH19.png'>";
            $('#idimage').html(image);
    /*
           
            if(name.substring(name.length - 4) != "null") {
                $('#idname').html(name);
            } else { $('#idname').html(""); }
            
            if(icode.substring(icode.length - 4) != "null") {
                $('#idcode').html(icode);
            } else { $('#idcode').html(""); }
         
         if(finish.substring(finish.length - 4) != "null") {
                $('#idfin').html(finish);
            } else { $('#idfin').html(""); }
           
            if(snb.substring(snb.length - 4) != "null") {
                $('#idsb').html(snb);
            } else { $('#idsb').html(""); }
            
            if(recommend.substring(recommend.length - 4) != "null") {
                $('#idreccuse').html(recommend);
            } else { $('#idreccuse').html(""); }
        
            if(wrnty.substring(wrnty.length - 4) != "null") {
                $('#idwrty').html(wrnty);
            } else { $('#idwrty').html(""); }
        
             if(coo.substring(coo.length - 4) != "null") {
                    $('#idcorg').html(coo);
            } else { $('#idcorg').html(""); }
        
            if(armrest.substring(armrest.length - 4) != "null") {
                    $('#idamr').html(armrest);
            } else { $('#idamr').html(""); }
        
            if(base.substring(base.length - 4) != "null") {
                    $('#idbase').html(base);
            } else { $('#idbase').html(""); }
        
            if(leg.substring(leg.length - 4) != "null") {
                    $('#idleg').html(leg);
            } else { $('#idleg').html(""); }
        
            if(top.substring(top.length - 4) != "null") {
                    $('#idtop').html(top);
            } else { $('#idtop').html(""); }
        
            if(cushion.substring(cushion.length - 4) != "null") {
                    $('#idcush').html(cushion);
            } else { $('#idcush').html(""); }
        
            if(fabric.substring(fabric.length - 4) != "null") {
                    $('#idfabr').html(fabric);
            } else { $('#idfabr').html(""); }
        
            if(legs.substring(legs.length - 4) != "null") {
                    $('#idlegs').html(legs);
            } else { $('#idlegs').html(""); }
        
            if(feat.substring(feat.length - 4) != "null") {
                    $('#idfeats').html(feat);
            } else { $('#idfeats').html(""); }
        
            if(foam.substring(foam.length - 4) != "null") {
                    $('#idfoam').html(foam);
            } else { $('#idfoam').html(""); }
        
            if(uphol.substring(uphol.length - 4) != "null") {
                    $('#iduphol').html(uphol);
            } else { $('#iduphol').html(""); }
        
            if(option.substring(option.length - 4) != "null") {
                    $('#idopt').html(option);
            } else { $('#idopt').html(""); }
        
            if(seat_cushion.substring(seat_cushion.length - 4) != "null") {
                    $('#idscush').html(seat_cushion);
            } else { $('#idcush').html(""); }
        
            if(seat.substring(seat.length - 4) != "null") {
                    $('#idseet').html(seat);
            } else { $('#idseet').html(""); }
        
            if(frame_finish.substring(frame_finish.length - 4) != "null") {
                    $('#idframefin').html(frame_finish);
            } else { $('#idframefin').html(""); }
        
            if(table_top.substring(table_top.length - 4) != "null") {
                    $('#idtabtop').html(table_top);
            } else { $('#idtabtop').html(""); }
        
            if(lounger_frame.substring(lounger_frame.length - 4) != "null") {
                    $('#idlouframe').html(lounger_frame);
            } else { $('#idlouframe').html(""); }
        
            if(note.substring(note.length - 4) != "null") {
                    $('#idnote').html(note);
            } else { $('#idnote').html(""); }
        
            if(anb.substring(anb.length - 4) != "null") {
                    $('#idarmbak').html(anb);
            } else { $('#idarmbak').html(""); }
        
            if(back.substring(back.length - 4) != "null") {
                    $('#idbak').html(back);
            } else { $('#idbak').html(""); }
        
            if(spcl_feat.substring(spcl_feat.length - 4) != "null") {
                    $('#idspfeats').html(spcl_feat);
            } else { $('#idspfeats').html(""); }*/
        
      
    })
}
</script>



</body>
</html>