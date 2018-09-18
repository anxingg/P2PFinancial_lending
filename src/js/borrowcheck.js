$(function(){
    $("#borrow-apply").bootstrapValidator({
       
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            borrowAmount: {
             
                validators: {
                    notEmpty: {
                        message: '借款金额不能为空'
                    },
                    stringLength: {
                        min: 4,
                        max: 6,
                        message: '借款位数在4-6位之间...'
                    },
                }
            },
            currentRate: {
                validators: {
                    notEmpty: {
                        message: '借款利息不能为空'
                    },
                    regexp: {
                    
                    regexp:/^\d+(\.\d)?\d{0,3}%$/,
                        message: '小数点后最多四位小数 eg:1.12%'
                    },
                }
            }, 
            minAmount: {
                validators: {
                    notEmpty: {
                        message: '不能为空'
                    },
                    
                }
            },
            borrowTitle: {
                validators: {
                    notEmpty: {
                        message: '不能为空'
                    },
                    regexp:{
                        regexp:/^[\u4e00-\u9fa5]{8,20}$/,
                        message: '只能为8-20位汉字'
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
       var URL="./api/borrowInfocheck.php";
        var data= $form.serialize();
      
        //使用ajax提交表单的数据
    $.post(URL,data, function(result) {
         if(result.isSuccess){
            // alert(result.msg);
         }else{
            //alert(result.msg);
         }
        }, 'json');   
    });
})