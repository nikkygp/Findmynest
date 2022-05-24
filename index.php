<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  body{
    overflow: hidden;
  }
  .loader{
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }
.lds-facebook {
  display: flex;
  width: 60px;
  height: 80px;
  justify-content: space-between;
  align-items: center;
}
.lds-facebook div {
  height: 60px;
  width: 12px;
  background: white;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {

  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    height: 80px;
  }
  50%, 100% {
    height: 40px;
  }
}
</style>
</head>
<body bgcolor="#007bff">
<div class="loader">
<div class="lds-facebook">
  <div></div>
  <div></div>
  <div></div>
</div>
</div>
<script type="text/javascript">
function on() {
  setTimeout(timer, 3000);
  function timer(){
      window.location.href='landing.php';
    }
  }
  on();
</script>
</body>
</html>