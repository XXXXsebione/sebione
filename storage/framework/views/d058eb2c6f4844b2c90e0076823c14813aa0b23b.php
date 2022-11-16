
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tutor Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/tutors/create')); ?>" class="btn btn-success btn-sm" title="Add New Tutor">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tutors #</th>
                                        <th>Tutors Name</th>
                                        <th>Contact #</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $tutors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->Tutors #); ?></td>
                                        <td><?php echo e($item->Tutors Name); ?></td>
                                        <td><?php echo e($item->Contact #); ?></td>
                                        <td><?php echo e($item->Email); ?></td>
  
                                        <td>
                                            <a href="<?php echo e(url('/tutors/' . $item->id)); ?>" title="View Tutor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/tutors/' . $item->id . '/edit')); ?>" title="Edit Tutor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="<?php echo e(url('/tutors' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Tutor" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tutors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myact\resources\views/tutors/index.blade.php ENDPATH**/ ?>