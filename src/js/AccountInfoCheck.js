$(function(){
    $("#AccountInfo").bootstrapValidator({
       
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            realname: {
             
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
            cardNum: {
                validators: {
                    notEmpty: {
                        message: '证件号码不能为空'
                    },
                    regexp: {
                    
                    regexp:/^[1-9]\d{5}[1-9]\d{3}((0[1-9])|(1[0-2]))((0[1-9])|([1-2][0-9])|(3[0-1]))\d{3}(\d|x|X)$/,
                        message: '身份证输入格式不正确'
                    },
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: '地址不能为空'
                    },
                    
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
       var URL="./api/AccountInfocheck.php";
        var data= $form.serialize();
      
        //使用ajax提交表单的数据
      $.post(URL,data, function(result) {
          console.log(result);
          
           /*  if(result.isSuccess){
               $("#loginModal").modal('show');
               $(".loginModalContent").html(`<span class='glyphicon glyphicon-ok green'></span> ${result.msg},等待<span id
               ='num'>5</span>秒后将跳转到个人中心....`);
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
           }  */
        }, 'json');   
    });
})