// var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
// console.log(base_url + "/validate_email");
// $("#send_code_form").validate({
//
//     rules: {
//         email: {
//             required: true,
//             maxlength: 50,
//             email: true,
//
//
//
//             remote: {
//                 url: base_url + "/validate_email",
//                 type: "post",
//
//                 data: {
//                     _token: function() {
//                         return "{{ csrf_token() }}"
//                     }
//                 }
//             }
//         },
//     },
//     // messages: {
//     // 	email: {
//     // 		required: "กรุณาระบุที่อยู่สำหรับส่ง Registration Code",
//     // 		email: "รูปแบบอีเมล์ไม่ถูกต้อง",
//     // 		remote: "อีเมล์นี้ได้ใช้ลงทะเบียนไว้แล้ว"
//     // 	},
//     // },
// });


jQuery.extend(jQuery.validator.messages, {
    required: "This field is required.",
    remote: "อีเมล์นี้ได้ใช้ลงทะเบียนไว้แล้ว",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});
