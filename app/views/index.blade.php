@extends('master')

@section('title')
	Developer's Best Friend
@stop

@section('content')
		
		{{--Description of Project 3 - Developer's Best Friend--}}
		<br />
		Lorem Ipsum is simply dummy text that is used as a place holder in layouts/designs and has no actual meaning.
		This tool allows you to request a specific number of Lorem Ipsum paragraphs you want to use for your work.
		This tool also includes a random user generator that provides fake names you can use to populate your projects.
		<br />
		
		{{--Lorem Ipsum Form--}}
		<h1>Lorem Ipsum Generator</h1>
		How many paragraphs do you want?
		{{ Form::open(array('url' => '/LoremIpsumResults', 'method' => 'GET')) }}
			{{ Form::label('query','Paragraphs ') }}
			{{ Form::text('query'); }}
			{{ Form::submit('Submit'); }}
		{{ Form::close() }}
		<br />
		
		{{--Random User Generator Form--}}
		<h1>Random User Generator</h1>
		How many Random Users do you want?
		{{ Form::open(array('url' => '/RandomUserResults', 'method' => 'GET')) }}
			{{ Form::label('query2','Users ') }}
			{{ Form::text('query2'); }}
			{{ Form::submit('Submit'); }}
		{{ Form::close() }}
		<br />

@stop