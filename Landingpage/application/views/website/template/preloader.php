<script>
$(document).ready(function(){
$("#preloader").delay(1000).fadeOut();
})
</script>

<div id="preloader">
  <div class="loading">	
        <object type="image/gif" data="https://cdn.dribbble.com/users/801336/screenshots/3547322/media/6d9b5ea750e15cbefb4338ff0b052c4c.gif"></object>
    </svg>
  </div>
</div>

<style type="text/css">
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999999999999999;
  background-color: #519fd6 !important;
}
#preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 14px arial;
}
</style>