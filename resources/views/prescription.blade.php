@extends('main')
@section('title',"Home")
@section('pagestyles')

@endsection
@section('content')
<Section id="medicalVisit">
    <div class="container mt-2">
        <div class="heading">Precription </div>
        <div class="row">
            <!-- data table start -->
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3 class="header-title"> Create New </h3>
                        @include('backend.layouts.partials.messages')
                        
                        <form action="{{route('admin.prescription.store')}}" method="POST" id="form"  data-parsley-validate>
                            @csrf
                          
                               
                               <div class="form-group row">
                                 <label  for="Debit" class="col-sm-2 col-form-label" style="text-align: right"><b>Debit</b><span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                    <div class="col-sm-10">
                                    <div class="col-sm-8" style="display:flex;">
                                        <select name="branch1[]" id="branch1" class="form-control" required><option value="">Select Branch</option>
                                        @foreach($branches as $key=>$branch)
                                        <option value="{{$branch}}">{{$key}}</option>
                                       
                                        @endforeach
                                      
                                        </select> &emsp;
                                        <select name="account[]" id="debit_account" class="form-control" required><option value="">Select Debit Account</option>
                                        @foreach($account as $accounts)
                                        <option value="{{$accounts->id}}">{{$accounts->name}}--{{$accounts->system_name}}({{$accounts->ledger_type}})</option>
                                       
                                        @endforeach
                                      
                                        </select> &emsp;
                                        <input type="text" name="amount[]"  placeholder="Enter Debit Amount" class="form-control" required>
                                        <input type="hidden" name="type[]"  value="Debit">
                                    </div>
                                    <div class="col-sm-8" style="display:flex;">
                                    
                                    <div class="container1">
                                    <a class="add_form_field" style="color:blue; cursor: pointer;">Add Debit Amount&nbsp; 
                                        <span style="font-size:16px; font-weight:bold;">+ </span>
                                    </a>
                               
                                    </div>
                                    </div>
                                    </div>
    
    
                                    <!-- <input type="text", name="account_debits", id="account_debits", class="form-control"> -->
    
                                </div>
    
                                <div class="form-group row">
                                 <label  for="Credit" class="col-sm-2 col-form-label" style="text-align: right"><b>Credit</b><span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                 <div class="col-sm-10">
    
                                 <div class="col-sm-8" style="display:flex;">
    
                                 <select name="branch1[]" id="branch1" class="form-control" required><option value="">Select Branch</option>
                                        @foreach($branches as $key=>$branch)
                                        <option value="{{$branch}}">{{$key}}</option>
                                       
                                       @endforeach
                                      
                                    </select>&emsp;
                                    <select name="account[]" id="credit_account" class="form-control" required><option value="">Select Credit Account</option>
                                        @foreach($account as $accounts)
                                        <option value="{{$accounts->id}}">{{$accounts->name}}--{{$accounts->system_name}}({{$accounts->ledger_type}})</option>
                                       
                                       @endforeach
                                      
                                    </select>&emsp;
                                    <input type="text" name="amount[]"  placeholder="Enter Credit Amount" class="form-control" required> 
                                    <input type="hidden" name="type[]"  value="Credit">
    
                                </div>
                                    <div class="col-sm-8" style="display:flex;">
    
                                    <div class="container2">
                                    <a class="add_form_field1" style="color:blue; cursor: pointer;">Add credit Amount&nbsp; 
                                        <span style="font-size:16px; font-weight:bold;">+ </span>
                                    </a>
                               
                                    </div>
                                    </div>
    
                                    </div>
                                </div>
                                
    
    
    
                                               
                            <div style="text-align:center;">
                            <button type="submit" class="btn btn-primary  pr-4 pl-4">Save Voucher </button>
                            <a class="btn btn-danger" href="">Cancel </a>
                            </div>
                            <br>
                            <br>
                            <span style="color:white;background-color: coral;font-size: 150%;"><i class="fa fa-info-circle" aria-hidden="true"></i> &emsp; Sum of debits must be equal to sum of credits. (DEBITS == CREDITS)</span>
    
                        </form>
                    </div>
                </div>
            </div>
            <!-- data table end -->
    
            
        </div>
    </div>
</Section>
@endsection