@extends('layouts.app')

@section('content')

    

    <h3>商品編集ページ</h3>

    <div class="row">
        <div class="col-6">
            {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', '商品:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('description', '説明：') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
