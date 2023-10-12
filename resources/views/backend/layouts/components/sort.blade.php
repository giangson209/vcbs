<script type="text/javascript">
	$( document ).ready(function() {
	    $('.sort-inin').click(function () {
	    	var table = $('#table-ajax').DataTable();
	    	// var sohanghienthi = table.page.info().length;
	    	var items=[];
        	$('#table-ajax tbody tr td:nth-child(1)').each( function(){
				items.push( $(this).find("input").val() );       
			});
			$('#example1 tbody tr td:nth-child(1)').each( function(){
				items.push( $(this).find("input").val() );       
			});
        	if(items.length > 0){
				$.ajax({
		            url: '{{ $route }}',
		            type: 'GET',
		            data:{
		                // sohanghienthi : sohanghienthi,
		                sort : items,
		             },
		            success:function(data){ 
		                showSuc('Thay đổi thành công', 'Thông báo');
		                location.reload();
		            }
			    });
        	}else{
        		showEr('Chưa có dữ liệu để cập nhật', 'Lỗi');
        	}
		
        });
	});
</script>