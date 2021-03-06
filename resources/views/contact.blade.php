@extends("layouts/app")

@section("content")
<h1>Contact us</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Enter username'])}}
    </div>
     <div class="form-group">
      {{Form::label('email', 'Email')}}
      {{Form::text('email', '',['class'=>'form-control', 'placeholder'=>'someone@gmail.com'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '',['class'=>'form-control', 'placeholder'=>'Enter message'])}}
    </div>
     <div>
     {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    </div>
{!! Form::close() !!}
@endsection



@section('sidebar')
@parent
<p>This is contact page</p>
@endsection