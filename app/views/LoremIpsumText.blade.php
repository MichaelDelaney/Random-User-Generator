@extends('master')

@section('title')
	P3 - Lorem Ipsum Generator
@stop

@section('content')
	
	{{--Statement + Return Home Link--}}
	<p><span>Here are the <?php echo $query; ?> Lorem Ipsum paragraphs you requested!</span> <a href='/'>Go Back to Home</a></p>
	
	{{-- Paragraph generator --}}
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($query);
		echo implode('<p>', $paragraphs);
	?>
	
	<br /><br />
@stop