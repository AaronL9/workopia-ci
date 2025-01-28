<?php
$session = session();
?>
<?php $successMessage = $session->getFlashdata('success_message'); ?>

<?php if ($successMessage !== null): ?>
  <div class="message bg-green-100 p-3 my-3">
    <?= $successMessage ?>
  </div>
<?php endif; ?>

<?php $errorMessage = $session->getFlashdata('error_message'); ?>
<?php if ($errorMessage !== null): ?>
  <div class="message bg-red-100 p-3 my-3">
    <?= $errorMessage ?>
  </div>
<?php endif; ?>