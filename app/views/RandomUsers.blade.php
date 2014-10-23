@extends('master')

@section('title')
	P3 Random Users
@stop

@section('content')
	<a href='/'>Go Back</a><br /><br />
	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $query2; $i++) {
		echo $faker->name, "\n <br />";
		}
	?>
	<br /><br />
@stop