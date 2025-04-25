import "jquery";
import './bootstrap';
import "https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js";
import "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js";
import "../../public/js/main";
import "bootstrap";
import "@popperjs/core"
import "../../public/js/main1";
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import "https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js";




import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/alert";
import "bootstrap/js/dist/modal";
import "bootstrap/js/dist/carousel";
import "../ts/adminlte";
import "./themes";
import "./Apexchart";
import "./scrollbars";
import "./mapload"; 
import "./charts";



document.addEventListener("DOMContentLoaded", function () {
    const quantityInput = document.getElementById("quantity");
    const incrementButton = document.getElementById("increment");
    const decrementButton = document.getElementById("decrement");

    // Increment
    incrementButton.addEventListener("click", function () {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    // Decrement
    decrementButton.addEventListener("click", function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            // Prevent decrementing below 1
            quantityInput.value = currentValue - 1;
        }
    });
});

  $(document).ready(function () {
      // Initialize the datepicker
      $("#event_date").datepicker({
          dateFormat: "yy-mm-dd", // Format the date to yyyy-mm-dd
          changeMonth: true, // Allow month dropdown
          changeYear: true, // Allow year dropdown
          showAnim: "fadeIn", // Add some animation for the dropdown
      });
  });
$(document).ready(function () {
    // Initialize the datepickers for start_date and end_date
    $("#start_date, #end_date").datepicker({
        dateFormat: "dd/mm/yy", // Format the date as DD/MM/YYYY
        changeMonth: true, // Allow month dropdown
        changeYear: true, // Allow year dropdown
        showAnim: "fadeIn", // Add some animation for the dropdown
    });
});
