@extends('master')

@section('title')
	P3 - Home
@stop

@section('content')
	
		{{ Form::open(array('url' => '/LoremIpsumResults', 'method' => 'GET')) }}
			{{ Form::label('query','Enter # of Lorem Ipsum paragraphs: ') }}
			{{ Form::text('query'); }}
			{{ Form::submit('Submit'); }}
		{{ Form::close() }}
		
		{{ Form::open(array('url' => '/RandomUserResults', 'method' => 'GET')) }}
			{{ Form::label('query2','Enter # of Random Users: ') }}
			{{ Form::text('query2'); }}
			{{ Form::submit('Submit'); }}
		{{ Form::close() }}
		
		<br />
@stop