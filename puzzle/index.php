<?

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Creative Commons</title>
	<style type="text/css" media="screen">
	  @import url('flg-five.css');
    @import url('../popup.css');
	</style>
	
	    <script type="text/javascript" language="javascript" src="prototype.js"></script>
	    <script type="text/javascript" language="javascript" src="cc-license.js"></script>
      <script type="text/javascript" language="javascript" src="cc-lib-freedoms.js"></script>
	    <script type="text/javascript" language="javascript" src="chooser.js"></script>

      <script type="text/javascript" language="javascript">
      <!--
      var freedoms;

      var init_freedoms = function()
      {
          freedoms = new CCLibFreedoms(); // in cc-lib-freedoms.js
          // the next two are in cc-license.js
          init(); 
          modify(this);

          //init_tip();

          // init the chooser
      	  FreedomsChooser = new FreedomsChooserClass("Freedoms_");
      	  FreedomsChooser.selectLicense("by");
      	  FreedomsChooser.setupEventListeners();

      }

      // -->
      </script>
      <!--[if lt IE 7]>
      		<script type="text/javascript" language="javascript" src="iepngfix2.js"></script>
      		<script type="text/javascript" language="javascript">
              var $PNGFIX=true;
          </script>
      <![endif]-->
  <script language="javascript" type="text/javascript">

  var share = false;
  var remix = false;
  var sa_cond = false;
  var nc_cond = false;
  var sa_on = false;
  var nc_on = false;


  function freedoms_update (license) {

  	license["share"] ? share = 1 : share = 0;
  	license["remix"] ? remix = 1 : remix = 0;
  	license["nc"] ? nc = 1 : nc = 0;
  	license["sa"] ? sa = 1 : sa = 0;

  	update_hack( license.data[2], license.data[0], license.data[1] );

  }

  </script>
	
</head>
<body onload="init_freedoms();">
  <div id="header">
    <h2>License Generator Demo</h2>
  </div>
  <div id="body">
   <div id="nc-ad"></div>
    <div id="flg-container">

      <div id="Freedoms_container" style="">

      	<img src="images/sa-shadow.png" id="Freedoms_image_sa-shadow" alt="" style="display: none;">
      	<img src="images/share-shadow.png" id="Freedoms_image_share-shadow" alt="" style="display: none;">
      	<img src="images/nc-shadow.png" id="Freedoms_image_nc-shadow" alt="" style="display: none;">
      	<img src="images/remix-shadow.png" id="Freedoms_image_remix-shadow" alt="" style="display: none;">

      	<img src="images/nc-piece.png" id="Freedoms_image_nc-piece-normal" alt="" style="position: absolute; left: 0px; top: 172px; display: none;">
      	<img src="images/sa-piece.png" id="Freedoms_image_sa-piece-normal" alt="" style="position: absolute; left: 172px; top: 238px; display: none;">
      	<img src="images/share-piece.png" id="Freedoms_image_share-piece-normal" alt="" style="position: absolute; left: 0px; top: 0px;">
      	<img src="images/remix-piece.png" id="Freedoms_image_remix-piece-normal" alt="" style="position: absolute; left: 239px; top: 0px;">

      	<img src="images/sa-piece-grey.png" id="Freedoms_image_sa-piece-grey" alt="" style="position: absolute; left: 172px; top: 238px;">
      	<img src="images/nc-piece-grey.png" id="Freedoms_image_nc-piece-grey" alt="" style="position: absolute; left: 0px; top: 172px;">

      	<img src="images/off-x.png" id="Freedoms_image_nc-off-x" alt="" style="position: absolute; left: 9px; top: 372px;">
      	<img src="images/off-x.png" id="Freedoms_image_sa-off-x" alt="" style="position: absolute; left: 388px; top: 372px;">

      	<img src="images/button-shadow-clean.png" id="Freedoms_image_button-shadow-clean" alt="" style="position: absolute; left: 163px; top: 182px;">

      	<div style="position: absolute; left: 175px; top: 202px;" id="Freedoms_centerLicense"></div>
      </div>

    </div>
    <br clear="all"/>
  </div>
  <div id="close">
    <a href="#" onclick="window.close()">Close</a>
  </div>
</body>
</html>
