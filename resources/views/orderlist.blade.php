@extends('master')
@section('content')
    <div class="container">
        <table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>Tk 0.00</td>
    </tr>
    <tr>
      <td>Delivery Charge</td>
      <td>Tk 50</td>
    </tr>
    
    <tr>
      <td>Total Amount</td>
      <td>{{$total+50}}</td>
    </tr>
  </tbody>
</table>


<form action="/confirmorder" method="post">
<h1>Payment System</h1>
@csrf
  <fieldset class="form-group">
  
    <div class="row">
    <textarea type="text" name="address" placeholder="Enter Your Adress"></textarea>
      <legend class="col-form-label col-sm-2 pt-0">Select Payment System</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" name="payment" type="radio" name="gridRadios" id="gridRadios1" value="online" checked>
          <label class="form-check-label" for="gridRadios1">
            Online Payment
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="payment" type="radio" name="gridRadios" id="gridRadios2" value="cash">
          <label class="form-check-label" for="gridRadios2">
           Cash On Delivery
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Confirm Order</button>
    </div>
  </div>
</form>
    </div>



<script>
function goBack() {
  window.history.back();
}
</script>
@endsection