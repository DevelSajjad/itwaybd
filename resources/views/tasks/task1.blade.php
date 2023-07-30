@extends('layouts.master')
@section('main')
<form id="serviceInfo">
    @csrf
    <div id="append">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Label</label>
                    <input type="text" class="form-control" name="data[0][label]" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
    
            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Service</label>
                    <input type="text" class="form-control" name="data[0][service]" aria-describedby="emailHelp">
                    <span class="text-danger error"></span>
                </div>
            </div>
    
            <div class="col-md-2">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <button type="button" id="addMoreBtn" data-count="1" class="form-control btn btn-primary">Add More</button>
        </div>
        <div class="col-md-2">
            <button type="button" id="saveBtn"  class="btn btn-success">Save</button>
        </div>
    </div>
</form>
    @include('includes.inputFields')
@endsection
@push('js')
    <script>
        const service_store_url = "{{ route('service.store') }}";
    </script>
    <script src="{{ asset('assets/js/form.js') }}"></script>
@endpush