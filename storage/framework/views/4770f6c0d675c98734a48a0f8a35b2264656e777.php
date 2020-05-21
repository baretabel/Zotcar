<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-2">

  </div>
<div class="col-md-8">
  <h1>Liste des véhicules</h1>
  <table class="table" >
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Marque</th>
        <th scope="col">Année</th>
        <th scope="col">Immatriculation</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
       
      <tr>
        <th scope="row"><?php echo e($voiture->id); ?></th>
        <td><?php echo e($voiture->marque); ?></td>
        <td><?php echo e($voiture->annee); ?></td>
        <td><?php echo e($voiture->immatriculation); ?></td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo e($voiture->id); ?>">Détails</button></td>
      </tr> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
    </tbody>
     </table>
    

<!--Modal de details-->

<?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="<?php echo e($voiture->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     
     <div style="text-align: center">
     <img  style="margin-top:50px" width="450px" src="<?php echo e($voiture->image); ?>" alt=" Image <?php echo e($voiture->marque); ?>" >
     <br><br>
    <p> Modele: <?php echo e($voiture->marque); ?></p>
    <p> Année: <?php echo e($voiture->annee); ?></p>
    <p> Immatriculation: <?php echo e($voiture->immatriculation); ?></p>
     <p><svg id="i-clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
     <circle cx="16" cy="16" r="14" />
     <path d="M16 8 L16 16 20 20" />
     </svg> <?php echo e($voiture->created_at); ?></p>
     <br>
   </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="/sup/<?php echo e($voiture->id); ?>" class="btn btn-success">Supprimer</a>
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mod<?php echo e($voiture->id); ?>" data-dismiss="modal">Modifier</button>
     </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--Modal de modification-->

<?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="mod<?php echo e($voiture->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel"><?php echo e($voiture->marque); ?></h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<form method="POST" action="/mod">
 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
 <input type="hidden" name="id" value="<?php echo e($voiture->id); ?>">
 <div class="form-group">
   <label for="marque">Marque</label>
   <input type="text" class="form-control" name="marque" id="marque" aria-describedby="emailHelp" value="<?php echo e($voiture->marque); ?>">
 </div>
 <div class="form-group">
   <label for="annee">Année</label>
   <input type="year" class="form-control" name="annee" id="annee" value="<?php echo e($voiture->annee); ?>">
 </div>
 <div class="form-group">
     <label for="immatriculation">Immatriculation</label>
     <input type="text" class="form-control" name="immatriculation" id="immatriculation" value="<?php echo e($voiture->immatriculation); ?>">
   </div>
   <div class="form-group">
     <label for="image">URL Image</label>
   <input type="text" class="form-control" name="image" id="image" value="<?php echo e($voiture->image); ?>">
   </div>
 
 <button type="submit" class="btn btn-success form-control ">Submit</button>
</form>
 </form>
</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


           
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/voiture.blade.php ENDPATH**/ ?>