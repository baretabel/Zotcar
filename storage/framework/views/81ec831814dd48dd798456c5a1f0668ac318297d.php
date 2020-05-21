<?php $__env->startSection('content'); ?>
  
<br><br><br>
<div class="form-cad" >
<h2>Résever <?php echo e($voiture->marque); ?></h2>
  <br>
<form method="POST" action="/resa">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="id" value="<?php echo e($voiture->id); ?>">
    <div class="form-group">
      <label for="user1">Nom</label>
      <input type="text" class="form-control" name="user1" id="user1" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
      <label for="user2">Prénom</label>
      <input type="text" class="form-control" name="user2" id="user2" placeholder="Entrer votre prénom">
    </div>
    <div class="form-group">
        <label for="immatriculation">Date</label>
        <input type="date" class="form-control" name="date" id="date">
      </div>
      <div class="form-group">
        <label for="lieu">Lieu</label>
        <select name="lieu" id="lieu"
        class="form-control">
          <option value="1">Sainte-Marie</option>
          <option value="2">Saint-Paul</option>
          <option value="3">Saint-Pierre</option>
      </select>
      </div>
    
    <button type="submit" class="btn btn-success form-control ">Submit</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/resa.blade.php ENDPATH**/ ?>