$().ready(function() {
    $("#form-contact").validate({
        rules: {
            "name": {
                required: true,
                maxlength: 255,
                minlength: 2
            },
            "phone": {
                required: true,
                minlength: 8
            },
            "type": {
                required: true,
            },
            "location": {
                required: true,
            }
        },
        messages: {
            "name": {
                required: "Vui lòng nhập họ và tên",
                maxlength: "Vui lòng nhập tối đa 255 ký tự",
                minlength: "Vui lòng nhập ít nhất 2 ký tự"
            },
            "phone": {
                required: "Vui lòng nhập số điện thoại",
                minlength: "Vui lòng nhập ít nhất 8 ký tự"
            },
            "type": {
                required: "Bắt buộc chọn",
            },
            "location": {
                required: "Bắt buộc chọn",
            }
        }
    });
});
