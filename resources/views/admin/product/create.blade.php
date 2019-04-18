@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">

       <div class="col-md-6 col-md-offset-3">

           {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true ]) !!}

           <div class="form-group">
               {{form::label('name' , 'Name')}}
               {{form::text('name',null, array('class' => 'form-control')) }}
           </div>

           <div class="form-group">
               {{form::label('description' , 'Description')}}
               {{form::text('description',null, array('class' => 'form-control')) }}
           </div>

           <div class="form-group">
               {{form::label('price' , 'Price')}}
               {{form::text('price',null, array('class' => 'form-control')) }}
           </div>

           <div class="form-group">
               {{form::label('size' , 'Size') }}
               {{form::select('size', ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'], null,['class' => 'form-control']) }}
           </div>


           <div class="form-group">
               {{form::label('category_id' , 'Categories') }}
               {{form::select('category_id',$categories, null,['class' => 'form-control', 'placeholder' => 'Select Category']) }}
           </div>

           <div class="form-group">
               {{form::label('image' , 'Image')}}
               {{form::file('image', array('class' => 'form-control')) }}
           </div>

           {{Form::submit('create', array('class' => 'btn btn-default'))}}

           {!! Form::close() !!}

       </div>



    </div>


    @endsection
