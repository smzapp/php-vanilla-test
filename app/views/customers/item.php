<?php

require_once dir_views('common/header');

$data = get_session('data');


if ($data == null)  {
  echo 'No Data found.';
  return;
}
?>
<div class="form-container">
  <h2> Customer Information</h2>
  <form action="<?php echo base_url('/customers'); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <?php echo $data['lastname'] ?? ''; ?>
    </div>
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <?php echo $data['firstname'] ?? ''; ?>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <?php echo $data['email'] ?? ''; ?>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <?php echo $data['city'] ?? ''; ?>
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <?php echo $data['country'] ?? ''; ?>
    </div>
    <div class="form-group">
        <label for="picture">Picture:</label>
        <div class="file-preview">
          <img id="preview" src="<?php echo base_url('/' . $data['path']); ?>" alt="Preview">
        </div>
    </div>
  </form>
</div>

<?php

require_once dir_views('common/footer');