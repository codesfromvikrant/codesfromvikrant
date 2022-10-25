<?php
include("header.php")
?>

<section class="h-[90vh] w-full polygon flex justify-center items-center gap-2">
  <div class="load w-[1.2rem] h-[1.2rem] rounded-full bg-gray-200 -translate-x-56 transition ease-in-out duration-500 opacity-0"></div>
  <div class="load w-[1.3rem] h-[1.3rem] rounded-full bg-gray-400 -translate-x-56 transition ease-in-out duration-400 opacity-0"></div>
  <div class="load w-[1.4rem] h-[1.4rem] rounded-full bg-gray-600 -translate-x-56 transition ease-in-out duration-300 opacity-0"></div>
  <div class="load w-[1.5rem] h-[1.5rem] rounded-full bg-gray-800 -translate-x-56 transition ease-in-out duration-200 opacity-0"></div>
</section>




<script>
  const load = document.querySelectorAll('.load');

  window.onload = () => {
    //alert("working");
    for (let i = 0; i < load.length; i++) {
      load[i].style.opacity = 1;
      load[i].style.transform = "translate(0)";
    }
  }

  setTimeout(function() {
    for (let i = 0; i < load.length; i++) {
      load[i].style.opacity = 0;
      load[i].style.transform = "translate(14rem)";
    }
  }, 1000);
</script>