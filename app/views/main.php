<?php

require_once dir_views('common/header');

?>

<div class="flex justify-center flex-col align-center">
    <h1>Welcome, I'm Samuel</h1>
    <div>
        <a href="<?php echo base_url('/customers'); ?>">Add Customers</a> &nbsp;
        <a href="<?php echo base_url('/customers/list'); ?>">Customers List</a>
    </div>
</div>
<?php

require_once dir_views('common/footer');