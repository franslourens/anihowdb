<div class="row">
		<div class="col-lg-12">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::open(['url' => 'admin/media', 'class' => 'form-horizontal']) !!}
						<fieldset class="col-sm-12">

								<div class="form-group">
								  <label class="control-label" for="title">Title</label>
								  <div class="controls">
									<div class="input-group col-sm-4">
										<span class="input-group-addon"><i class="fa fa-list"></i></span>
										<?php echo Form::text('title',null,array('class' => 'form-control')); ?>
									</div>	
								  </div>
								</div>

								<div class="form-group">
								  <label class="control-label" for="description">Description</label>
								  <div class="controls">
									<div class="input-group col-sm-4">
										<span class="input-group-addon"><i class="fa fa-list"></i></span>
										<?php echo Form::text('description',null,array('class' => 'form-control')); ?>
									</div>	
								  </div>
								</div>
				
								<div class="form-group hidden-xs">
								  <div class="controls">
										<?php echo Form::hidden('start_date', date('Y-m-d')); ?>
										<?php echo Form::hidden('end_date', date('Y-m-d')); ?>
								  </div>
								</div>

								<div class="form-actions">
								  <button type="reset" class="btn">Cancel</button>
								  <button type="submit" class="btn btn-primary pull-right">Save changes</button>
								</div>
						</fieldset>
				{!! Form::close() !!} 
		</div><!--/col-->
</div><!--/row-->



