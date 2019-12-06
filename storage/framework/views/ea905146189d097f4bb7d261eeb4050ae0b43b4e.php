<?php $__env->startSection('content'); ?>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        Add User
    </button>
    <p style="padding-top: 5px;"></p>
    <div class="row" style="padding-top: 10px">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">id</th>
                <th scope="col">Resume_id</th>
                <th scope="col">Category</th>
                <th scope="col">Email</th>
                <th scope="col">Phone no</th>
                <th scope="col">Address</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>munia</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">User of Job portal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('employerPost')); ?>" method="post" role="form">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="UserName">User Name:</label>
                            <input class="form-control" id="UserName" type="text" name="Employer_name" placeholder="Enter User Name...">
                        </div>
                        <div class="form-group">
                            <label for="UserId">User id</label>
                            <input class="form-control" id="UserId" type="text" name="EmployerId" placeholder="Enter User id...">
                        </div>
                        
                        <div class="form-group">
                            <label for="UserEmail">User Email</label>
                            <input class="form-control" name="Employee_email" id="UserEmail" type="text" placeholder="Enter User email..">
                        </div>
                        <div class="form-group">
                            <label for="UserPhoneNo">User Phone no</label>
                            <input class="form-control" name="employee_phn_no" id="UserPhoneNo" placeholder="Enter phone number..">
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