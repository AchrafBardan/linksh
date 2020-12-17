<?php $__env->startSection('content'); ?>
<div class="w-full gap-4 h-screen flex flex-col items-center pt-20 bg-gradient-to-bl px-11 from-indigo-400 to-indigo-500">
    <a href="<?php echo e(route('home')); ?>"><button class="px-4 py-2 mb-5 bg-indigo-200 rounded-xl   hover:text-indigo-200 hover:bg-indigo-900 shadow-2xl duration-300">Terug</button></a>
    <?php if($req->link): ?>
        <div onclick="this.style.display = 'none';" class="px-10 py-4 mb-5 text-center bg-green-500 rounded-2xl">
            Url met de code <?php echo e($req->link); ?> succesvol toegevoegd!
        </div>
    <?php endif; ?>
        
    <div class="text-center text-2xl sm:text-4xl font-semibold">Deze links zijn gemaakt op dit ip:</div>
    <a href="https://whatismyipaddress.com/ip/<?php echo e($req->ip()); ?>"><div class="text-4xl sm:text-6xl font-black"><?php echo e($req->ip()); ?></div></a>
    <div class="bg-indigo-300 px-4 py-6 flex flex-col bg-opacity-50 rounded-3xl shadow-2xl">
        <table class="flex flex-col">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="">
                <th><a href="https://bardan.nl/<?php echo e($link->link); ?>"><span class="font-light">https://bardan.nl/</span><?php echo e($link->link); ?></a></th> 
                <th><a class="font-light" href="<?php echo e($link->dest); ?>"><?php echo e($link->dest); ?></a></th>  
            </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </table>
        <div class="mt-5 flex flex-col">
            <?php echo e($links->links()); ?>    
        </div>
        
    </div>
    
</div>
  
<?php $__env->stopSection(); ?>


 
 
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u65154p61957/domains/bardan.nl/linksh/resources/views/mylink.blade.php ENDPATH**/ ?>