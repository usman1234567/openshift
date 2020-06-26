<?php
			include "./include/header.php";
			
?>

  
<div class="container" id='loginDiv'>

	<div class="row">
		<div class="col-sm-12" style="text-align:center; color:#fff;"><h1>Welcome to IT Support</h1></div>
	</div>
  
  <div class="row" style="margin-top:10px;" id='prob-box'>
	
	 <div class="col-sm-3"></div>
	
	
	 <div class="col-sm-6">
		<a href='end-user-tiket.php' style='text-decoration:none; color:#FFF'>
			<div class='jumbotron text-center'>
			<i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
			<h3 class='tophead'>Please click here to go</h3>
				
			 </div>
        </a>
    </div>
	

	 <div class="col-sm-3">
	

	 </div>
       
    </div>
		
	  
  </div>
  

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script src="http://vaporvm.com/kiosk-new/dist/js/animsition.min.js" charset="utf-8"></script>
  <script>
  $( document ).ready(function() {
    var $animsition = $('.animsition');
    $animsition
      .animsition()
      .one('animsition.inStart',function(){
        $(this).append('<h2 class="target">Callback: Start</h2>');
        console.log('event -> inStart');
      })
      .one('animsition.inEnd',function(){
        $('.target', this).html('Callback: End');
        console.log('event -> inEnd');
      })
      .one('animsition.outStart',function(){
        console.log('event -> outStart');
      })
      .one('animsition.outEnd',function(){
        console.log('event -> outEnd');
      });
  });
  </script>
</body>
</html>
