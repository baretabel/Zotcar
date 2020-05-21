<?php $__env->startSection('content'); ?>
<div class="corps">
    <h2>Bienvenue! <br> Choisir une Voiture!</h2>
<div class="aligne-art">
<?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="art-cad"  onclick="changerPage('/resa/<?php echo e($voiture->id); ?>')">
    <article class="arti" onclick="changerPage('/resa/<?php echo e($voiture->id); ?>')">
        
         <img src="<?php echo e($voiture->image); ?>" alt=" Image <?php echo e($voiture->marque); ?>" >
         <br><br>
        <p> Modele: <?php echo e($voiture->marque); ?></p>
        <p> Année: <?php echo e($voiture->annee); ?></p>
        <p> Immatriculation: <?php echo e($voiture->immatriculation); ?></p>
         <p><svg id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
         <circle cx="16" cy="16" r="14" />
         <path d="M16 8 L16 16 20 20" />
         </svg> <?php echo e($voiture->created_at); ?></p>
         <br>
    </article>
</div>           
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<script>
function changerPage(urlDestination){
    document.location.href= urlDestination ;
    }</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/home.blade.php ENDPATH**/ ?>