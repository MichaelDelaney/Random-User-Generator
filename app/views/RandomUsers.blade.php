@extends('master')

@section('title')
	P3 - Random User Generator
@stop

@section('content')
	
	{{-- Statement + Return Home Link --}}
	<p><span>Here are the <?php echo $query2; ?> Random Users you requested!</span> <a href='/'>Go Back to Home</a></p>
	
	{{-- Random User Generator --}}
	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $query2; $i++) {
		echo $faker->name, "\n <br />";
		}
	?>
	
	<br /><br />
@stop