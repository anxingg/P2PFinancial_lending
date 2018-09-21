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
                    regexp:{
                        regexp:/^[\u4e00-\u9fa5]{2,10}$/,
                        message: '用户名长度应为2-10位汉字'
                    }
                }
            },
            idcard: {
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
                    regexp:{
                        regexp:/^[\u4e00-\u9fa5]{6,50}$/,
                        message: '地址长度应为6-50位汉字'
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
       var URL="./api/AccountInfocheck.php";
        var data= $form.serialize();
      
        //使用ajax提交表单的数据
      $.post(URL,data, function(result) {
          //console.log(result);
            if(result.isSuccess){
               alert(result.msg);
               location.href="index.php"
           }else{
            alert(result.msg);
           }   
        },'json');   
    });
})