
<style>
    /* Fullscreen loader styling */
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: #008cff;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
</style>


<div class="loader" id="loader">
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

  <!-- Scroll Top -->
  
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    
    <script>
        window.addEventListener('load', function () {
            // Wait a little bit before hiding the loader to simulate the loading process
            setTimeout(function () {
                document.getElementById('loader').style.display = 'none'; // Hide the loader
                document.querySelector('main').style.display = 'block'; // Show the main content
            }, 1000); // Adjust the delay as needed (2000ms = 2 seconds)
        });
    </script>

