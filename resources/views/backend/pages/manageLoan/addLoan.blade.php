@extends('backend.master')
@section('content')


<style>
    .center {
    text-align: center;
    }

</style>



<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="text-center">+Add Loan Form</h4>
      </div>
    <form action="{{route('add.authorities.create')}}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputName1">Authorities Name</label>



                <select class="form-control" name="loan_type_id" id="">
                    @foreach ($authorities as $authoritie)

                    <option value="{{$authoritie->id}}">{{$authoritie->name}}</option>
                    @endforeach
                </select>



                @error('account_holder_name')

                <small class="text-danger">{{$message}}</small>

                @enderror
              </div>

          <div class="form-group col-md-3">
            <label for="inputName2">Account</label>

           <select class="form-control" name="Account_name_id" id="">
            @foreach ($accounts as $account)

            <option value="{{$account->id}}">{{$account->account_name}}</option>

            @endforeach
           </select>

            @error('bank_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
           </div>

          <div class="form-group col-md-3">
            <label for="inputBalance1">Loan Reason</label>
            <input type="text" name="number" class="form-control" id="inputBalance1" placeholder="Write Loan Reason here....">
            @error('account_number')
            <small class="text-danger">{{$message}}</small>
            @enderror
           </div>

           <div class="form-group col-md-3">
            <label for="inputName2">Reference</label>
           <input class="form-control" type="text" name="reference" placeholder="Reference....">

            @error('bank_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
           </div>

          <div class="form-group col-md-3">
            <label for="inputBalance1">Loan Type</label>

            <select class="form-control" name="loan_type_id" id="">
                @foreach ($loanTypes as $loanType)
                <option value="{{$loanType->id}}">{{$loanType->loan_type}}</option>
                @endforeach

            </select>
            @error('account_number')
            <small class="text-danger">{{$message}}</small>
            @enderror
           </div>


           <div class="form-group col-md-6">
            <label for="inputName2">Amount</label>
           <input class="form-control" type="number" name="cash_limit" placeholder="100000">

            @error('cash_credit')
            <p class="text-danger">{{$message}}</p>
            @enderror
           </div>

          <div class="form-group col-md-6">
            <label for="inputBalance1">Interest (%) </label>
            <input type="number" name="address" class="form-control" id="inputBalance1" placeholder="Enter an address ">
            @error('address')
            <small class="text-danger">{{$message}}</small>
            @enderror
           </div>

           <div class="form-group col-md-4">
            <label for="inputAddress">Payment Type</label>
            <input type="hidden" name="status" class="form-control " id="inputAddress" placeholder="Account Status">
              <select class="form-control" name="status" id="">
                <option value="Active">Daily</option>
                <option value="Inactive">Monthly</option>
                <option value="Inactive">Yearly</option>
              </select>

            @error('status')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>


          <div class="form-group col-md-4">
            <label for="inputAddress">Duration *</label>
            <input type="number" name="status" class="form-control " id="inputAddress" placeholder="Account Status">


            @error('status')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>


          <div class="form-group col-md-4">
            <label for="inputAddress">Per Month</label>
            <input type="number" name="status" class="form-control " id="inputAddress" placeholder="1000">

            @error('status')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>

          <div class="form-group col-md-12" style="width: 80%;">
            <label for="inputAddress" style="font-size: 18px;">Note</label>
            <textarea name="note" class="form-control" id="inputAddress" placeholder="Write your note here....." style="font-size: 16px; height: 150px; padding: 10px; resize: vertical;"></textarea>

            @error('note')
            <small class="text-danger" style="font-size: 14px;">{{$message}}</small>
            @enderror
          </div>




        </div>

        <div class="center">
            <button type="submit" class="btn btn-success ">Submit</button>
        </div>
      </div>

        </form>

      </div>
    </div>
  </div>

@endsection
