<?php $__env->startSection('content'); ?>
  
<br><br><br>
<div class="form-cad" >
  <h2>Nouvelle Voiture</h2>
  <br>
<form method="POST" action="/form">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="form-group">
      <label for="marque">Marque</label>
      <input type="text" class="form-control" name="marque" id="marque" aria-describedby="emailHelp" placeholder="Entrer Marque du véhicule">
    </div>
    <div class="form-group">
      <label for="annee">Année</label>
      <input type="year" class="form-control" name="annee" id="annee" placeholder="Entrer Année du véhicuke">
    </div>
    <div class="form-group">
        <label for="immatriculation">Immatriculation</label>
        <input type="text" class="form-control" name="immatriculation" id="immatriculation" placeholder="Entrer Immatriculation du véhicule">
      </div>
      <div class="form-group">
        <label for="image">URL Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Entrer URL Image">
      </div>
    
    <button type="submit" class="btn btn-success form-control ">Submit</button>
  </form>
</div>
<a href="/car" style="margin:auto;">Retour-></a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/form.blade.php ENDPATH**/ ?>