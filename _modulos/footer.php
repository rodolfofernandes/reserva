	</head>
</html>



</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script type="text/javascript">
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$(".side-nav .collapse").on("hide.bs.collapse", function() {
			$(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
		});
		$('.side-nav .collapse').on("show.bs.collapse", function() {
			$(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
		});
	})
</script>
</body>
</html>
		<body>
							<div id='wrap'>

								<div id='calendar'></div>

								<div style='clear:both'></div>
							</div>
						</body>