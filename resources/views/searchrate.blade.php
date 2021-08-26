@extends('layouts.app')

@section('content')

<style>
    .text {
        width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px;

    }
.login-form {
  background: #ffffff;
  padding: 30px 30px 20px;
  border-radius: 2px; }

.login-form h4 {
  color: #878787;
  text-align: center;
  margin-bottom: 50px; }

.login-form .checkbox {
  color: #878787; }

.login-form .checkbox label {
  text-transform: none; }

.login-form .btn {
  width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px; }

.login-form label {
  color: #878787;
  text-transform: uppercase; }

.login-form label a {
  color: #ff2e44; }

  .card-header{
    color: #878787;
  text-align: center;
  margin-bottom: 50px;

  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Stocks</h4></div>

                <div class="card-body">
                   <table align="center" style=" solid border:1px">
<tr></tr>
<tr>
    <td>
    <select data-placeholder="Choose a Company..."
     tabindex="1" name="company" @onchange="get_rate()"  v-model="company">
                         @foreach ($companies as $comp)
                              <option value='{{$comp->company_id}}'  >{{$comp->companyname}}</option>
                         @endforeach 
                                                        </select>  
    </td>
</tr>

<tr>
    <td colspan=3></td>
</tr>
<tr>
    <td><table><tr><td>Company Name</td><td>Rate</td></tr>
    @foreach ($companies as $comp)
                              <tr><td>{{$comp->companyname}}</td><td>{{$comp->currentmarketprice}}</td></tr>
                         @endforeach 
</table></td>
</tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
