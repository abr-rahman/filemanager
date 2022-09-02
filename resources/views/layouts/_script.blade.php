    <script src="{{ asset('dashboard') }}/assets/js/bootstrap.bundle.min.js"></script>

	<!--plugins-->
	<script src="{{ asset('dashboard') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
	<script src="{{ asset('dashboard') }}/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>

	<script src="{{ asset('dashboard') }}/dist/js/dropify.min.js"></script>
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
	<!-- App JS -->
	<script src="{{ asset('dashboard') }}/assets/js/app.js"></script>


<script src="{{ asset('dashboard') }}/assets/code.jquery.com/jquery.min.js"></script>
<script src="{{ asset('dashboard') }}/assets/jquery.ui.widget.js"></script>
<script src="{{ asset('dashboard') }}/assets/jquery.fileupload.js"></script>
<script src="{{ asset('dashboard') }}/assets/jquery.iframe-transport.js"></script>
<script src="{{ asset('dashboard') }}/assets/jquery.fancy-fileupload.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
