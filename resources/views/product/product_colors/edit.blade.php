@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product Color
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productColor, ['route' => ['product.productColors.update', $productColor->id], 'method' => 'patch']) !!}

                        @include('product.product_colors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection