@layout('layouts/main')
@section('content')
<div class="hero-unit pagination-centered">
	{{Form::open()}}
	{{Form::hidden('word','1')}}
	<h1>ziyaret</h1>
	<p><br />{{Form::textarea('entry', NULL, array('rows' => '10', 'cols' => '30', 'class' => 'input-xxlarge', 'style' => 'resize:none;'))}}</p>
	<p><a class="btn btn-primary btn-large">Gönder</a></p>
	{{Form::close()}}
</div>
@endsection