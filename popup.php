<?

$pages['nc']['title'] = 'What does "noncommercial" mean?';
$pages['nc']['content'] = 'When you see content licensed under one of CC\'s NonCommercial licenses, it means simply that you do not receive the commercial rights via the Creative Commons license. You can always approach the licensor directly to see if they will separately license you the commercial rights. Information about what constitutes commercial use can be found <a href="http://wiki.creativecommons.org/DiscussionDraftNonCommercial_Guidelines">here</a>.';

$pages['juris']['title'] = 'Must I select a jurisdiction?';
$pages['juris']['content'] = 'You should select a jurisdiction if you want a license that is governed by the copyright law of your specific jurisdiction. However, you\'re not required to select a jurisdiction.';

$page = $_GET['p'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Creative Commons</title>
	<style type="text/css" media="screen">
    @import url('popup.css');
	</style>
</head>
<body>
  <div id="header">
    <h2><?= $pages[$page]['title'] ?></h2>
  </div>
  <div id="body">
    <?= $pages[$page]['content'] ?>
  </div>
  <div id="close">
    <a href="#" onclick="window.close()">Close</a>
  </div>
</body>
</html>
