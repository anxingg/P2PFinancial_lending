$(function(){
    $("#loginCheck").bootstrapValidator({
       
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: '用户名不能为空..',
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 15,
                        message: '用户名在6-15位之间...'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 18,
                        message: '用户名在6-18位之间...'
                    },
                }
            },
            repassword: {
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    identical:{
                        field:"password",
                        message:"两次密码输入不一致"
                    }
                }
            },
        }
    })
    .on('success.form.bv', function(e) {
        //阻止表单默认提交
        e.preventDefault();
        var $form = $(e.target);
       
         //获取验证实例
        var bv = $form.data('bootstrapValidator');
       var URL="./api/logincheck.php";
        var data= $form.serialize();
      
        //使用ajax提交表单的数据
      $.post(URL,data, function(result) {
          
            if(result.isSuccess){
               $("#loginModal").modal('show');
               $(".loginModalContent").html(`<span class='glyphicon glyphicon-ok green'></span> ${result.msg},等待<span id
               ='num'>6</span>秒后将跳转到个人中心....`);
               var num=5;

               var timer=setInterval(()=>{
                num--;
                $("#num").text(num);
                if(num==0){
                    clearInterval(timer);
                    location.href="./personal.php";
                }
             },1000);
           }else{
            $("#loginModal").modal('show');
        
               $(".loginModalContent").html("<span class='glyphicon glyphicon-remove red'></span>"+result.msg);
           } 
        }, 'json');  
    });
})