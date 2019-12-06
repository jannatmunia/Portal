<?php $__env->startSection('content'); ?>
<div class="row" style="padding-top: 10px">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th  scope="col">Serial No</th>
        <th scope="col">Title</th>
        <th scope="col">Company</th>
        <th scope="col">Category</th>
        <th scope="col">Type</th>
        <th scope="col">Location</th>
        <th scope="col">salary</th>
        <th scope="col">Status</th>

      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($key+1); ?></th>
        <td><?php echo e($data->job_title); ?></td>
        <td><?php echo e($data->com_name); ?></td>
        <td><?php echo e($data->category->job_category); ?></td>
        <td><?php echo e($data->job_type); ?></td>
        <td><?php echo e($data->location); ?></td>
        <td><?php echo e($data->salary); ?></td>
        <td>

          <a class="btn btn-success btn-sm" href="<?php echo e(route('approveJob',$data->id)); ?>" >Approve</a><hr>

        </td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>