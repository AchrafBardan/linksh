<?php $__env->startSection('content'); ?>
<div class="w-full h-screen flex flex-col items-center py-52 bg-gradient-to-bl from-indigo-400 to-indigo-500">
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="font-medium text-red-500">
        <?php echo e($error); ?>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(session('status')): ?>
        <div onclick="this.style.display = 'none';" class="font-medium text-red-500">
            <?php echo e(session('status')); ?> <i class="las la-times"></i>
        </div>
    <?php endif; ?>
    <h1 class="text-center">Link Shortener 
by Achraf 
Bardan</h1>
    <form class="flex flex-col mb-4" action="<?php echo e(route('newlink')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input class="w-60 mb-5 px-8 py-4 rounded-3xl border-indigo-200 border-b-4 placeholder-indigo-200 text-indigo-900 bg-indigo-300" value="https://" name="link" type="text" placeholder="Bv: https://google.com">
        <input id="linkname" class="w-60 mb-5 px-8 py-4 rounded-3xl border-indigo-200 border-b-4 placeholder-indigo-200 text-indigo-900 bg-indigo-300 hidden" value="" name="linkname" type="text" placeholder="Bv: google">
        <button class="border-indigo-200 border-b-4 hover:bg-indigo-200 duration-300 hover:text-indigo-900 rounded-3xl py-4 px-8 bg-indigo-900 text-indigo-200" type="submit">Submit</button>
    </form>
    <a onclick="showField()" id="textField" class="underline text-center hover:text-indigo-900 cursor-pointer">Custom link</a>
    <div>
        <a href="<?php echo e(route('mylink')); ?>"><button class="px-4 py-2 mb-5 bg-indigo-200 rounded-xl text-indigo-900 hover:text-indigo-200 hover:bg-indigo-900 shadow-2xl duration-300">Mijn links</button></a>
    </div>
    
</div>
<script src="<?php echo e(asset('js/addfield.js')); ?>"></script>
<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u65154p61957/domains/bardan.nl/linksh/resources/views/index.blade.php ENDPATH**/ ?>