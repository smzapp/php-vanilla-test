<?php

require_once dir_views('common/header');

?>

<div class="flex justify-center flex-col align-center">
    <h1>Mini Calculator</h1>

    <div class="calculator-container">
        <div class="calculator-display" id="calculator-display">0</div>
        <div class="calculator-buttons">
            <div class="calculator-button" data-value="7">7</div>
            <div class="calculator-button" data-value="8">8</div>
            <div class="calculator-button" data-value="9">9</div>
            <div class="calculator-button operator" data-value="+">+</div>
            <div class="calculator-button" data-value="4">4</div>
            <div class="calculator-button" data-value="5">5</div>
            <div class="calculator-button" data-value="6">6</div>
            <div class="calculator-button operator" data-value="-">-</div>
            <div class="calculator-button" data-value="1">1</div>
            <div class="calculator-button" data-value="2">2</div>
            <div class="calculator-button" data-value="3">3</div>
            <div class="calculator-button" data-value="0">0</div>
            <div class="calculator-button" data-value="=">=</div>
        </div>
    </div>
</div>
<?php

require_once dir_views('common/footer');