@extends('admin.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Create Product</strong>
    </div>
    <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
            <div class="card-body">
                <form action="{{Route('admin.product.postcreate')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product Title</label>
                        <input id="cc-payment" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Product Price</label>
                        <input id="cc-name" name="price" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Product Description</label>
                        <input id="cc-number" name="description" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Description</label>
                                    <input id="cc-number" name="image[]" type="file" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Description</label>
                                    <input id="cc-number" name="image[]" type="file" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Product Description</label>
                                    <input id="cc-number" name="image[]" type="file" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <span id="payment-button-amount">Product Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div> <!-- .card -->
@endsection