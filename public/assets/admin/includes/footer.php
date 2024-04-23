<!--footer start-->
<div class="footer" id="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="javascript:;">Ahmed Shoaib</a> 2022
        </p>
    </div>
</div>
<!--footer close-->

<!-- modal start -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Lorem</h5>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea class="form-control" id="basic-example" rows="7" name="" value="" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->

<!-- overlay start -->
<!-- <div class="overlay">
	<div class="overlayDoor"></div>
	<div class="overlayContent">
		<div class="loader">
			<div class="inner"></div>
		</div>
	</div>
</div> -->
<!-- overlay close -->

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="js/custom.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
</body>

<script>
    tinymce.init({
        selector: 'textarea#basic-example',
        height: 250,
        skin: "oxide-dark",
        content_css: "dark",
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount', 'advcode'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help |' + 'code',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>

</html>