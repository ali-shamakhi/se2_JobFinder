/**
 * Created by ahmadreza on 8/28/16.
 */
$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*Created by Ahmadreza_HK*/

$(function() {
    $("form[name='swdt_user_registration']").validate({
        rules: {
            "swdt_user_registration[fName]":{
                required:true,
                maxlength:50,
                lettersonly:true
            },
            "swdt_user_registration[lName]":{
                required:true,
                maxlength:50,
                lettersonly:true
            },
            "swdt_user_registration[gender]":{
                required:false
            },
            "swdt_user_registration[karjoo][grade]":{
                required:false
            },
            "swdt_user_registration[soldiering]":{
                required:false
            },
            "swdt_user_registration[birth_year]":{
                number:true,
                required:false,
                maxlength:4,
                minlength:4,
                max:1395,
                min:1300
            },
            "swdt_user_registration[karjoo][student_id]":{
                required:false,
                number:true,
                maxlength:8,
                minlength:8
            },
            "swdt_user_registration[karjoo][national_id]":{
                required:true,
                maxlength:10,
                minlength:10
            },
            "swdt_user_registration[mobile]":{
                number:true,
                required:true
            },
            "swdt_user_registration[email]":{
                email:true,
                required:true
            },
            "swdt_user_registration[username]":{
                required:true,
                alphanumeric:true,
                minlength:5,
                maxlength:255
            },
            "swdt_user_registration[plainPassword][first]":{
                required:true,
                minlength:6
            },
            "swdt_user_registration[plainPassword][second]":{
                required: true
            },
            "swdt_user_registration[karfarma][company_name]":{
                required:true,
                maxlength:100
            },
            "swdt_user_registration[karfarma][company_field]":{
                required:true,
                maxlength:100
            },
            "swdt_user_registration[karfarma][telephone]":{
                number:true,
                required: false
            },
            "swdt_user_registration[karfarma][company_email]":{
                required:true,
                maxlength:100,
                email:true
            },
            "swdt_user_registration[karfarma][address]":{
                required:true
            },
            "swdt_user_registration[captcha]":{
                required:true
            },
            "swdt_user_registration[karjoo][is_student]":{
                required:false
            },
            "swdt_user_registration[karjoo][current_university]":{
                required:false
            },
            "swdt_user_registration[karjoo][current_field]":{
                required:false
            },
            "swdt_user_registration[karjoo][licanse_univesity]":{
                required:false
            },
            "swdt_user_registration[karjoo][licanse_field]":{
                required:false
            },
            "swdt_user_registration[karjoo][fogh_licanse_field]":{
                required:false
            },
            "swdt_user_registration[karjoo][fogh_licanse_univesity]":{
                required:false
            },
            "swdt_user_registration[karjoo][phd_field]":{
                required:false
            },
            "swdt_user_registration[karjoo][phd_univesity]":{
                required:false
            }
        },



        messages: {
            "swdt_user_registration[fName]":{
                required: 'لطفا این فیلد را پر کنید.',
                lettersonly: 'تنها می توانید از حروف فارسی استفاده کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "swdt_user_registration[lName]":{
                required: 'لطفا این فیلد را پر کنید.',
                lettersonly: 'تنها می توانید از حروف فارسی استفاده کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "swdt_user_registration[birth_year]":{
                number:'لطفا فقط عدد وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.',
                max: 'مقدار ورودی نباید از {0} بیشتر باشد.',
                min: 'مقدار ورودی باید حداقل {0} باشد.'
            },
            "swdt_user_registration[karjoo][student_id]":{
                required: 'لطفا این فیلد را پر کنید.',
                number:'لطفا فقط عدد وارد کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.'
            },
            "swdt_user_registration[karjoo][national_id]":{
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.'
            },
            "swdt_user_registration[mobile]":{
                required: 'لطفا این فیلد را پر کنید.',
                number:'لطفا فقط عدد وارد کنید.'
            },
            "swdt_user_registration[email]":{
                required: 'لطفا این فیلد را پر کنید.',
                email: 'لطفا ایمیل معتبر وارد کنید.'
            },
            "swdt_user_registration[username]":{
                required: 'لطفا این فیلد را پر کنید.',
                alphanumeric: 'تنها می توانید از حروف ، اعداد و آندرلاین استفاده کنید.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "swdt_user_registration[plainPassword][first]":{
                required: 'لطفا این فیلد را پر کنید.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.'
            },
            "swdt_user_registration[plainPassword][second]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "swdt_user_registration[karfarma][company_name]":{
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "swdt_user_registration[karfarma][company_field]":{
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "swdt_user_registration[karfarma][telephone]":{
                required: 'لطفا این فیلد را پر کنید.',
                number:'لطفا فقط عدد وارد کنید.'
            },
            "swdt_user_registration[karfarma][company_email]":{
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                email: 'لطفا ایمیل معتبر وارد کنید.'
            },
            "swdt_user_registration[karfarma][address]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "swdt_user_registration[captcha]":{
                required: 'لطفا این فیلد را پر کنید.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(function() {
    $("form[name='mz_user_change_password']").validate({
        rules: {
            "mz_user_change_password[fName]":{
                required:true,
                maxlength:50,
                lettersonly:true
            },
            "mz_user_change_password[lName]":{
                required:true,
                maxlength:50,
                lettersonly:true
            },
            "mz_user_change_password[karjoo][student_id]":{
                required:false,
                number:true,
                maxlength:8,
                minlength:8
            },
            "mz_user_change_password[birth_year]":{
                number:true,
                required:false,
                maxlength:4,
                minlength:4,
                max:1395,
                min:1300
            },
            "mz_user_change_password[current_password]":{
                required: false
            },
            "mz_user_change_password[plainPassword][first]":{
                required: false,
                minlength:6
            },
            "mz_user_change_password[plainPassword][second]":{
                required: false
            },
            // "mz_user_change_password[username]":{
            //     alphanumeric:true,
            //     minlength:5,
            //     maxlength:255
            // },
            "mz_user_change_password[email]":{
                required: true,
                email:true
            },
            "mz_user_change_password[mobile]":{
                required: false,
                number:true
            }
        },

        messages: {
            "mz_user_change_password[fName]":{
                required: 'لطفا این فیلد را پر کنید.',
                lettersonly: 'تنها می توانید از حروف فارسی استفاده کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "mz_user_change_password[lName]":{
                required: 'لطفا این فیلد را پر کنید.',
                lettersonly: 'تنها می توانید از حروف فارسی استفاده کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "mz_user_change_password[karjoo][student_id]":{
                required: 'لطفا این فیلد را پر کنید.',
                number:'لطفا فقط عدد وارد کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.'
            },
            "mz_user_change_password[birth_year]":{
                number:'لطفا فقط عدد وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.',
                max: 'مقدار ورودی نباید از {0} بیشتر باشد.',
                min: 'مقدار ورودی باید حداقل {0} باشد.'
            },
            "mz_user_change_password[current_password]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "mz_user_change_password[plainPassword][first]":{
                required: 'لطفا این فیلد را پر کنید.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.'
            },
            "mz_user_change_password[plainPassword][second]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "mz_user_change_password[username]":{
                alphanumeric: 'تنها می توانید از حروف ، اعداد و آندرلاین استفاده کنید.',
                minlength: 'کاراکتر ورودی باید حداقل {0} تا باشد.',
                maxlength: 'کاراکتر ورودی نباید از {0} تا بیشتر باشد.'
            },
            "mz_user_change_password[email]":{
                email: 'لطفا ایمیل معتبر وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.'
            },
            "mz_user_change_password[mobile]":{
                number:'لطفا فقط عدد وارد کنید.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(function() {
    $("form[name='user_profile_karfarma']").validate({
        rules: {
            "user_profile_karfarma[mobile]":{
                number:true,
                required:true
            },
            "user_profile_karfarma[email]":{
                email:true,
                required:true
            },
            "user_profile_karfarma[karfarma][telephone]":{
                number:true,
                required:false
            },
            "user_profile_karfarma[karfarma][company_email]":{
                email:true,
                required:true
            },
            "user_profile_karfarma[karfarma][company_name]":{
                required:true
            },
            "user_profile_karfarma[karfarma][address]":{
                required:true
            },
            "user_profile_karfarma[karfarma][company_field]":{
                required:true
            }
        },

        messages: {
            "user_profile_karfarma[mobile]":{
                number:'لطفا فقط عدد وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.'
            },
            "user_profile_karfarma[email]":{
                email: 'لطفا ایمیل معتبر وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.'

            },
            "user_profile_karfarma[karfarma][telephone]":{
                number:'لطفا فقط عدد وارد کنید.',
            },
            "user_profile_karfarma[karfarma][company_email]":{
                email: 'لطفا ایمیل معتبر وارد کنید.',
                required: 'لطفا این فیلد را پر کنید.'
            },
            "user_profile_karfarma[karfarma][company_name]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "user_profile_karfarma[karfarma][address]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "user_profile_karfarma[karfarma][company_field]":{
                required: 'لطفا این فیلد را پر کنید.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(function() {
    $("form[name='mz_new_advertize']").validate({
        rules: {
            "mz_new_advertize[title]":{
                required:true
            },
            "mz_new_advertize[expireDate]":{
                required:true
            },
            "mz_new_advertize[brochure_file]":{
                required:false
            },
            "mz_new_advertize[grade]":{
                required:false
            }
            ,
            "mz_new_advertize[soldiery]":{
                required:false
            },
            "mz_new_advertize[gender]":{
                required:false
            },
            "mz_new_advertize[description]":{
                required:false
            },
            "mz_new_advertize[otherSkills]":{
                required:false
            },
            "mz_new_advertize[coOperation][]":{
                required:false
            }
        },

        messages: {
            "mz_new_advertize[title]":{
                required: 'لطفا این فیلد را پر کنید.'
            },
            "mz_new_advertize[expireDate]":{
                required: 'لطفا این فیلد را پر کنید.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





























