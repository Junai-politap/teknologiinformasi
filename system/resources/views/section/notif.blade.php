@if ($message = Session::get('success'))
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
</div>
@endif 
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>    
    <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
</div>
@endif
   

  
@if ($errors->any())
<div class="alert alert-danger alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif