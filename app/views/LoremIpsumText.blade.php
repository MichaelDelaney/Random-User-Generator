@extends('master')

@section('title')
	P3 - Lorem Ipsum Generator
@stop

@section('content')
	<a href='/'>Go Back</a><br /><br />
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($query);
		echo implode('<p>', $paragraphs);
	?>
	<br /><br />
@stop