@extends('layout')

@section('content')


	<div class="col-sm-8 blog-main">

		<h1>Create a Post</h1>

		<form method="POST" action="/posts">

		  <div class="form-group">

		    <label for="title">Title</label>

		    <input type="text" class="form-control" id="postTitle">

		  </div>

		  <div class="form-group">

		    <label for="body">Body</label>

		    <textarea class="form-control" id="body"></textarea>

		  </div>

		  <button type="submit" class="btn btn-primary">Publish</button>

		</form>
			
	</div>




@endsection