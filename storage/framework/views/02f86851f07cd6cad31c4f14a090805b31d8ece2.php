<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
Job category
</button>

<div class="row" style="padding-top: 10px">
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Serial No</th>
        <th scope="col">Category Name</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($key+1); ?></th>
        <td><?php echo e($data->job_category); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <div class="row" style="padding-top: 10px">
          <div class="col-md-12" style="background-color: #218838;">
            <div class="col-md-12">
              <h4>Job Category</h4>
            </div>
            <div class="page-ads box">
              <form class="form-ad" action="<?php echo e(route('processCategory')); ?>" method="post" role="form">
                <?php echo csrf_field(); ?>
                <div class="form-group is-empty">
                  <div class="row">
                    <div class="col-sm-12">

                      <!-- <div class="form-group">
                        <select class="form-control" class="optIndustrytype" name="job_category">
                          <option>Select Category</option>
                          <option >Agro based Industry</option>
                          <option >Engineerig</option>
                          <option >Bank/Non-bank</option>
                          <option >Networking</option>
                          <option >NGO</option>
                          <option >Education</option>
                          <option >Government</option>
                          <option >Architet</option>

                        </select>
                      </div> -->
                      <div class="col-sm-6">
                        <label class="control-label">Job Category</label>
                        <input type="text" class="form-control" name="job_category" placeholder="Enter Category" required>
                        <span class="material-input"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>





              </div>





              <div class="form-group">
                <input type="submit" name="submit" class="form-submit" value="Submit here"/>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>