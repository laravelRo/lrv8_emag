<div>

    
    <?php if($section->active): ?>

        <button wire:click="changeStatus('active')" class="btn btn-success">Activ</button>
    <?php else: ?>
        <button wire:click="changeStatus('active')" class="btn btn-danger">Inactiv</button>
    <?php endif; ?>

    
    <?php if($section->promo): ?>
        <button wire:click="changeStatus('promo')" class="btn btn-success">Promovat</button>
    <?php else: ?>
        <button wire:click="changeStatus('promo')" class="btn btn-danger">Standard</button>
    <?php endif; ?>

</div>
<?php /**PATH C:\xampp\htdocs\lrv8_emag\resources\views/livewire/admin/sections-status.blade.php ENDPATH**/ ?>