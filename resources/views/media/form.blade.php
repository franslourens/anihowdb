<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <?php echo Form::text('title'); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <?php echo Form::text('description'); ?>
            </div>
        </div>
        <?= Form::hidden('start_date', date('Y-m-d')); ?>
        <?= Form::hidden('end_date', date('Y-m-d')); ?>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>