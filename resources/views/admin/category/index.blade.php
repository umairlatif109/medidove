@extends('admin.layout.admin')


@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">categories=></a>
        <ul class="nav navbar-nav">

            @if(!empty($categories))
                @forelse($categories as $category)

                    <li>
                        <a href="{{route('category.show',$category->id)}}"> {{$category->name}} </a>
                    </li>

                @empty
                    <li>No Data</li>
                @endforelse
            @endif

        </ul>

        <a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Category</a>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">

                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismis="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">

                            {{form::label('name' , 'Name')}}
                            {{form::text('name',null, array('class' => 'form-control')) }}

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismis="modal" >Close</button>
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </div>
                </div> {{-- /.Model-Content--}}
                {!! Form::close() !!}


            </div>{{--/.Model-Dialog --}}
        </div>{{-- /.Model --}}

    </div>


    @if(!empty($products))

    <section>
        <h3>Products</h3>
        <table class="table table-hover">
           <thead>
              <tr>

                  <th>Products</th>

              </tr>
           </thead>
            <tbody>

                @forelse($products as $product)

                <tr>
                    <td>{{$category->name}}</td>
                </tr>

                @empty

                <tr> <td>No Data</td> </tr>

                 @endforelse

            </tbody>
        </table>
    </section>

    @endif


@endsection
