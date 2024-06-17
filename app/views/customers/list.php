<?php

require_once dir_views('/common/header');

?>
<div class="form-container">
  <h2> Customer Information</h2>
  <form action="<?php echo base_url('/customers'); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="lastname">Last Name:</label>
    </div>
    <div class="form-group">
        <label for="firstname">First Name:</label>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
    </div>
    <div class="form-group">
        <label for="picture">Picture:</label>
        <div class="file-input">
            <input type="file" id="picture" name="picture" accept="image/*">
        </div>
        <div class="file-preview">
            <img src="https://via.placeholder.com/150" alt="Customer Picture">
        </div>
    </div>
  </form>
</div>

<?php

require_once dir_views('/common/footer');