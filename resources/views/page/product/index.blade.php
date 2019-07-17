@extends('layouts.master')
@section('content')
    <div class="widget">
        <h3>Featured Products</h3>
        <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <!-- <img class="card-img-top feature-img" src="{{asset('images/products/'. '1.png')}}" alt="Card image cap"> -->
                @php $i = 1; @endphp
                @foreach($product->images as $image)
                    @if($i > 0)
                        <img class="card-img-top feature-img" src="{{asset('images/products/'. $image->image)}}" alt="Card image cap">
                    @endif
                    @php $i-- ; @endphp 
                @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">{{$product->price}}Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
            
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap" enctype="multipart/form-data">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> 200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> 200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> 200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> 200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;" align="center">
                <img class="card-img-top feature-img" src="{{asset('images/products/'. 'mobile1.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"> 200 Tk</p>
                        <a href="#" class="btn btn-outline-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection