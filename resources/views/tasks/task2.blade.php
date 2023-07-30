@extends('layouts.master')
@section('main')
<form id="sellerInfo">
    @csrf
    <div id="append">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" class="form-control" name="phone" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Business Name</label>
                    <input type="text" class="form-control" name="business" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" name="city" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Zip Code</label>
                    <input type="text" class="form-control" name="zip_code" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <button type="button" id="saveBtn"  class="btn btn-success">Save</button>
        </div>
    </div>
</form>
@endsection
@push('js')
    <script>
        const seller_store_url = "{{ route('seller.store') }}";
    </script>
    <script src="{{ asset('assets/js/seller.js') }}"></script>
@endpush