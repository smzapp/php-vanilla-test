<?php

require_once dir_views('common/header');

?>
<div class="form-container">
  <?php if(has_session('message')) { ?>
   <div class="bg-success"><?php echo get_session('message'); ?></div>
  <?php } ?>

  <h2>Add New Customer Information</h2>
  <form action="<?php echo base_url('/customers'); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname"  required>
    </div>
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  required>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" >
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <select id="country" name="country" required>
          <option value="">-- select country --</option>
          <option value="USA" selected>United States</option>
          <option value="Canada">Canada</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Japan">Japan</option>
          <option value="France">France</option>
          <option value="Germany">Germany</option>
      </select>
    </div>
    <div class="form-group">
        <label for="picture">Picture:</label>
        <div class="file-input">
            <input type="file" id="picture" name="picture" accept="image/*">
        </div>
        <div class="file-preview">
          <?php 
          if(has_session('image_path')) {
            ?>
              <img id="preview" src="<?php echo base_url('/' . get_session('image_path')); ?>" alt="Preview">
            <?php
          }
          ?>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn">Save Changes</button>
    </div>
  </form>
</div>

<?php

require_once dir_views('common/footer');