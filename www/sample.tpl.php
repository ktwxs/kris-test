<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<title>Sample QForm</title>
<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
</head><body>

<?php $this->RenderBegin(); ?>
	<p><?php $this->lblMessage->Render(); ?></p>
	<p><?php $this->btnButton->Render(); ?></p>
<?php $this->RenderEnd(); ?>

This is only a test.

This is my second changeset.

This is a third test

This will conflict with the new stuff from the upstream master.


///////////////////////////////////
// STEP ONE - COPY FILES to DOCROOT
///////////////////////////////////

	Copy or move the contents of www/* to the ROOT level of your web site's DOCROOT
	(also known as DocumentRoot, webroot, wwwroot, etc., depending on which platform
	you are using).

	Next, copy the "cli" and the "includes" directory to the SAME level as your
	web site's DOCROOT directory.

	So for example, if your website's docroot is at:
		/path/to/my/docroot
	the place the www/* contents into
		/path/to/my/docroot
	and then place the cli directory at
		/path/to/my/cli
	and finally, place the includes directory at
		/path/to/my/includes

	At a later point, you may choose to move folders around in your system,
	putting them in subdirectories, etc.  Qcodo offers the flexibility to have
	these framework files in any location.

	But for now, since we're getting started, we'll provide you with the instructions
	on how to finish the installation assuming that you're keeping the entire
	Qcodo installation hierarchy as originally released.

	Even though we're assuming the entire contents of wwwroot/* is in your DOCROOT,
	you can feel free to put it in a subdirectory WITHIN DOCROOT if you wish.



</body></html>