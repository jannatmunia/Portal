<!-- BootstrapCDN start-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--BootstrapCDN end-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/magnific-popup.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/jquery-ui.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/owl.theme.default.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-datepicker.css')); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
<link rel="stylesheet" href="<?php echo e(asset('fonts/flaticon/font/flaticon.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/aos.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">

<!--Upload Resume-->
<!-- <form>
<div class="form-group">
<label for="exampleFormControlFile1">Upload Resume Here</label>
<input type="file" class="form-control-file" id="exampleFormControlFile1">
<br>
<button type="button" class="btn btn-info">Submit Resume</button>


</div>
</form> -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php if(session()->get('message')): ?>
      <div class="alert alert-success">
        <?php echo e(session()->get('message')); ?>

      </div>
      <?php endif; ?>
      <div class="card">
        <div class="card-header">Resume Information Upload</div>
        <div class="card-body">
          <form method="POST" action="<?php echo e(route('uploadResume')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label for="title" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('Title')); ?></label>
              <div class="col-md-6">
                <input id="title" type="text" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" value="<?php echo e(old('title')); ?>" required autofocus />
                <?php if($errors->has('title')): ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('title')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>
              <div class="col-md-6">
                <textarea id="description" cols="10" rows="10" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e(old('description')); ?>" required autofocus></textarea>
                <?php if($errors->has('description')): ?>
                <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('description')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputPhoto1">Photo</label>
              <input type="file" class="form-control" name="photo" placeholder="upload photo">
              <?php if(session()->has('message')): ?>
              <div class="alert alert-success">
                <?php echo e(session('message')); ?>

              </div>
              <?php endif; ?>
            </div> -->
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  <?php echo e(__('Upload')); ?>

                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $__env->make('Frontend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>