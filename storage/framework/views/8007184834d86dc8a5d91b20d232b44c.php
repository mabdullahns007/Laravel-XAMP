
<?php $__env->startSection('content'); ?>
<div class="searchTab">
            <form action="/searchAccount" method="GET">
                <input name="search" type="search" required>
                <i class="fa fa-search"></i>
                <button id="searchB" class="mt-5" type="submit">SUMBIT</button>
                
            </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\KAM 25\WORK PROFILE\5TH SEMESTER\Web Tech\LARAVEL\12\resources\views/search.blade.php ENDPATH**/ ?>