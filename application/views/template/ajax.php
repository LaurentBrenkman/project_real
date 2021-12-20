<script type="text/javascript">
	$(document).ready(function(){
		$("#form-detail").hide();
		$("body").on("change",".select2",function(){
			$("#form-detail").show();
		});
	});
</script>