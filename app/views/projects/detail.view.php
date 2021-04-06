<?php

use App\Core\Auth;

require __DIR__ . '/../layouts/head.php'; ?>

<div class="row">
	<div class="col-md-12">
		<a class="btn btn-success btn-sm text-rigth"><i class="fas fa-arrow-left"></i> Back</a>
	</div>
</div>

<?= $project_details['project_code'] ?>


<?php require __DIR__ . '/../layouts/footer.php'; ?>