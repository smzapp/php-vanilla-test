<?php

require_once dir_views('/common/header');

?>
<div class="form-container">
  <h2>Edit Customer Information</h2>
  <form action="<?php echo base_url('/customers'); ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" value="Doe" required>
    </div>
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="John" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="john.doe@example.com" required>
    </div>
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="New York">
    </div>
    <div class="form-group">
      <label for="country">Country:</label>
      <select id="country" name="country" required>
          <option value="USA" selected>United States</option>
          <option value="UK">United Kingdom</option>
          <option value="Canada">Canada</option>
      </select>
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
    <div class="form-group">
        <button type="submit" class="btn">Save Changes</button>
        <button type="clear" class="btn">Clear</button>
    </div>
  </form>
</div>

<?php

require_once dir_views('/common/footer');