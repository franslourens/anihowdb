@extends('layouts.perfectum')

@section('title', 'Media')

@section('footer')
    @parent

@stop

@section('content')
<div>
	<hr>
	<ul class="breadcrumb">
		<li>
			<a href="forms.html#">Home</a>
		</li>
		<li>
			<a href="forms.html#">Forms</a>
		</li>
	</ul>
	<hr>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-edit"></i>Form Elements</h2>
				<div class="box-icon">
					<a href="forms.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
					<a href="forms.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
					<a href="forms.html#" class="btn-close"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				@include('media.form', array("errors" => $errors))
			</div>
		</div>
	</div><!--/col-->
</div><!--/row-->
@stop

