$(function(){
    $("#regCheck").bootstrapValidator({
        message:"必填...",
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
            email: {
                validators: {
                    notEmpty: {
                        message: '邮箱不能为空'
                    },
                    emailAddress: {
                        message: '邮箱不能为空'
                    }
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
            tel: {
                validators: {
                    notEmpty: {
                        message: '电话不能为空'
                    },
                    regexp: {
                        regexp:/^[1][3,4,5,7,8][0-9]{9}$/,
                        message:"电话格式不正确"
                    },
                }
            },
        }
    })
    .on('./index.php', function(e) {
        e.preventDefault();

        var $form = $(e.target);

        var bv = $form.data('bootstrapValidator');

        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json');
    });
})