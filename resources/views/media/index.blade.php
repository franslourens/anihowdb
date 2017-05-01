@extends('layouts.perfectum')

@section('title', 'Media')

@section('footer')
    @parent

@stop

@section('content')
    			<div class="row">
				
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-th"></i><span class="break"></span>Media</h2>
							<div class="box-icon">
								<a href="grid.html#" class="btn-setting"><i class="icon-wrench"></i></a>
								<a href="grid.html#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
								<a href="grid.html#" class="btn-close"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Title</th>
									  <th>Description</th>
								  </tr>
							  </thead>   
							  <tbody>
                                @foreach ( $media as $m )
                                    <tr>
                                        <td>{{ $m->title }}</td>
                                        <td>{{ $m->description }}</td>
                                    </tr>
                                @endforeach 
							  </tbody>
						  </table>                      
						</div>
					</div>
				</div><!--/col-->
			</div><!--/row-->
@stop