@extends('layouts.app')

@section('content')

@section('stylesheets')

	{!!Html::style('css/parsley.css')!!}

@endsection

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create new post</h1>
			<hr>


			{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
				{{form::label('title','Title:')}}
				{{form::text('title',null,array('class' => 'form-control', 'required'=>'','maxlength'=>'255'))}}


				{{form::label('body','Post Blog:')}}
				{{form::textarea('body',null,array('class' => 'form-control', 'required'=>''))}}

				{{form::submit('Creat Post',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}


			{!! Form::close() !!}


		</div>

	</div>

@endsection

@section('scripts')

	{!!Html::script('js/parsley.min.js')!!}

@endsection

