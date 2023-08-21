<?php $page = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php if($page == "stereotype") {  ?>       
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script src="js/carrousel.js"></script>
<?php }   else  { ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
<script src="js/main.js"></script>

<?php }  ?>
</body>
</html>