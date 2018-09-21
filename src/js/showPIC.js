//用户上传图片
$(function() {
	//原理是把本地图片路径："D(盘符):/image/..."转为"http://..."格式路径来进行显示图片*/
	$("#imagefile1").change(function() {
		var $file = $(this);
		var objUrl = $file[0].files[0];
		//获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
		var windowURL = window.URL || window.webkitURL;
		//createObjectURL创建一个指向该参数对象(图片)的URL
		var dataURL;
		dataURL = windowURL.createObjectURL(objUrl);
		img1.innerHTML='<img src="'+dataURL+'" alt="" width=150 height=100 id="pic"/>'
		//var a1=$("#pic").attr("src");
		var a1=$("#imagefile1").val();
		var b=$("#realpic1").val(a1);

  });

  //反面
  $("#imagefile2").change(function() {
		var $file = $(this);
		var objUrl = $file[0].files[0];
		
		var windowURL = window.URL || window.webkitURL;
	
		var dataURL;
		dataURL = windowURL.createObjectURL(objUrl);
		
		$("#photo1").val(dataURL);
		   img2.innerHTML='<img src="'+dataURL+'" alt="" width=150 height=100 id="pic02"/>'
		  // var a2=$("#pic02").attr("src");
		   var a2=$("#imagefile2").val();
		   var b2=$("#realpic2").val(a2);
	});
});