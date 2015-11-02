<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript">
	
	$(function() {
	    $('#itemStartBidDate').datetimepicker({
	        defaultDate: new Date()
	    });
	    $('#itemEndBidDate').datetimepicker({
	        defaultDate: new Date()
	    });
	    $('[data-toggle="tooltip"]').tooltip();
	});

</script>