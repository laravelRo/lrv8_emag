<div>
    
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="alert alert-info">
                <h4 class="mb-3">Search users <span
                        class="text-danger"><?php echo e(isset($users) ? $users->total() . ' utilizatori gasiti' : 'No users'); ?></span>
                    <?php echo e($publicUsers); ?>

                </h4>
                <hr>

                <div class="row">
                    <div class="form-floating mb-3 col-md-6">
                        <input wire:model.lazy="searchName" type="text" class="form-control" id="searchName"
                            placeholder="name or email address">
                        <label for="searchName">Email address or name</label>
                    </div>

                    
                    <div class="col-md-3">
                        <div class="form-check">
                            <input wire:click="showUsers('public')" name="flexRadioDefault" class="form-check-input"
                                type="radio" id="public_users" value="public" checked>
                            <label class="form-check-label" for="public_users">
                                Public users
                            </label>
                        </div>
                        <div class="form-check">
                            <input wire:click="showUsers('blocked')" name="flexRadioDefault" class="form-check-input"
                                type="radio" id="blocked_users" value="blocked">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Blocked users
                            </label>
                        </div>
                    </div>
                    
                </div>

            </div>
            
        </div>
    </div>
    

    
    <?php if(isset($users)): ?>
        <div class="row mt-4">
            <div class="col-md-8 offset-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Verified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php echo e($users->currentPage() > 1 ? $loop->iteration + $users->perPage() * ($users->currentPage() - 1) : $loop->iteration); ?>

                                </td>
                                <td>
                                    <?php echo e($user->name); ?>

                                </td>
                                <td>
                                    <?php echo e($user->email); ?>

                                </td>
                                <td>
                                    <?php echo e($user->type); ?>

                                </td>
                                <td
                                    class="<?php echo e($user->email_verified_at ? 'bg-success text-white' : 'bg-danger text-white'); ?>">
                                    <?php echo e($user->email_verified_at ? $user->email_verified_at->format('d M Y') : 'Unverified'); ?>

                                    <?php if(!$user->trashed()): ?>
                                        <?php if(!$user->email_verified_at): ?>
                                            <button
                                                onclick="confirm('Confirmati validarea emailului pentru <?php echo e($user->name); ?>') || event.stopImmediatePropagation()"
                                                wire:click="validateEmail(<?php echo e($user->id); ?>)" title="Valideaza email"
                                                class="btn btn-success btn-sm btn-circle">
                                                <i class="fas fa-at fa-2x"></i>
                                            </button>
                                        <?php else: ?>
                                            <button
                                                onclick="confirm('Confirmati invalidarea emailului pentru <?php echo e($user->name); ?>') || event.stopImmediatePropagation()"
                                                wire:click="invalidateEmail(<?php echo e($user->id); ?>)" title="invalideaza email"
                                                class="btn btn-danger btn-sm btn-circle">
                                                <i class="fas fa-at fa-2x"></i>
                                            </button>
                                        <?php endif; ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($user->trashed()): ?>
                                        <button onclick="activateUserConfirm('<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')"
                                            title="Activate" class="btn btn-primary">
                                            Activate
                                        </button>
                                        <button onclick="deleteUserConfirm('<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')"
                                            title="Delete" class="btn btn-danger">
                                            <i class="fas fa-user-slash"></i> Delete
                                        </button>
                                    <?php else: ?>
                                        <button onclick="blockUserConfirm('<?php echo e($user->id); ?>','<?php echo e($user->name); ?>')"
                                            title="Blocheaza utilizator" class="btn btn-danger btn-md btn-circle">
                                            <i class="fas fa-user-slash fa-2x"></i>
                                        </button>
                                    <?php endif; ?>

                                </td>


                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-warning">
                                Nu au fost gasiti utilizatori dupa criteriile selectate
                            </div>
                        <?php endif; ?>
                    </tbody>

                </table>

                
                <?php echo e($users->links()); ?>

            </div>
        </div>
    <?php endif; ?>

    


</div>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/livewire/admin/users.blade.php ENDPATH**/ ?>