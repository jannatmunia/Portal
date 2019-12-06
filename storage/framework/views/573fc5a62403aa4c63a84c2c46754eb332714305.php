<?php $__env->startSection('content'); ?>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        Delete resume
    </button>
    <p style="padding-top: 5px;"></p>
    <div class="row" style="padding-top: 10px">

        <table class="table table-striped">
            <thead>
            <tr>

                <th scope="col">Resume id</th>
                <th scope="col">Description</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Resume</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('employerPost')); ?>" method="post" role="form">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for=" Resume Id">Resume Id</label>
                            <input class="form-control" id=" Resume Id" type="text" name="Delete Resume Id" placeholder="Enter Resume Id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>