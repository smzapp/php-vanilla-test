<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      var expression = '';
      var display = $('#calculator-display');

      $('.calculator-button').on('click', function() {
        var value = $(this).data('value');
        if (value === '=') {
          calculateResult();
        } else {
          expression += value;
          display.text(expression);
        }
      });

      function calculateResult() {
        try {
          var result = eval(expression);
          display.text(result);
          expression = '';
        } catch (error) {
          display.text('Error');
          expression = '';
        }
      }
    });
  </script>
</body>
</html>