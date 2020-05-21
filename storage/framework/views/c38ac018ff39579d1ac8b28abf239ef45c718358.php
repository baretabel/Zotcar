<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-2">

</div>
<div class="col-md-8">
  <h1>Réservations validés</h1>
  <table class="table" >
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Utilisateur</th>
        <th scope="col">Voiture</th>
        <th scope="col">Date</th>
        <th scope="col">Lieu</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $valides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
       
      <tr>
        <th scope="row"><?php echo e($valide->id); ?></th>
        <td><?php echo e($valide->user); ?></td>
        <td><?php echo e($valide->voiture->marque); ?></td>
        <td><?php echo e($valide->réservation); ?></td>
        <td><?php echo e($valide->lieu->lieu); ?></td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo e($valide->id); ?>">Détails</button></td>
      </tr> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    </tbody>
     </table>
     <br><br>
<table class="table" >
  <h1>Résevations en attentes de validation</h1>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Utilisateur</th>
      <th scope="col">Voiture</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col"></th>
    </tr>
  </thead>
    <tbody>
      
        <?php $__currentLoopData = $attentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <th scope="row"><?php echo e($attente->id); ?></th>
          <td><?php echo e($attente->user); ?></td>
          <td><?php echo e($attente->voiture->marque); ?></td>
          <td><?php echo e($attente->réservation); ?></td>
          <td><?php echo e($attente->lieu->lieu); ?></td>
          <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo e($attente->id); ?>">Détails</button></td>
        </tr> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    </tbody>
     </table>
    

<!--Modal de details-->

             <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="modal fade" id="<?php echo e($reservation->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Réservation n°<?php echo e($reservation->id); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <p>Nom du locataire: <?php echo e($reservation->user); ?> </p>
                  <p>Modele: <?php echo e($reservation->voiture->marque); ?></p>
                  <p>Date de sortie du véhicule: <?php echo e($reservation->réservation); ?></p>
                  <p>Lieu de remise des clés: <?php echo e($reservation->lieu->lieu); ?></p>
               
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/del/<?php echo e($reservation->id); ?>" class="btn btn-success">Supprimer</a>
                    <?php if($reservation->etat==0): ?>
                    <a href="/val/<?php echo e($reservation->id); ?>" class="btn btn-success">Valider</a>
                    <?php endif; ?>
                  </div>
                 </div>
               </div>
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


           
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/reser.blade.php ENDPATH**/ ?>