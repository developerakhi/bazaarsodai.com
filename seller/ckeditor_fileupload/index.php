<!DOCTYPE html>
<html>
<head>
	<title>Custom file upload in CKEditor with PHP</title>

	<script src="ckeditor/ckeditor.js" type="text/javascript" ></script>
</head>
<body>

	<!-- Editor -->
	<textarea id='editor'></textarea>

	<!-- Script -->
	<script type="text/javascript">
		CKEDITOR.replace( 'editor', {
            height: 300,
            filebrowserUploadUrl: "/ckeditor_fileupload/ajaxfile.php?type=file",
            filebrowserImageUploadUrl: "/ckeditor_fileupload/ajaxfile.php?type=image"
        } );
	</script>
</body>
</html>