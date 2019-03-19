<script type="text/javascript">

window.setInterval(function(){

  // this is my office url
  // change to your image on your Server
  var url = "https://ugm.ac.id/images/new/hero_logo.png";
	var img = new Image();
	img.src = url;

  //img.onload = function()
	//{
	//		alert("Server is up!");
	//}

	img.onerror = function()
	{
		alert("Server is down!");
	}

}, 5000);
</script>
