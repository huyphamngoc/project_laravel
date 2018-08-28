var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/aptech-fpt/upload';
var CLOUDINARY_UPLOAD_PRESET = 'DemoImg';
var imgPreview = '';

$(document).ready(function () {
    var fileUpload = document.getElementById('thumbnail');
    fileUpload.addEventListener('change', function (event) {
        var file = event.target.files[0];
        var formData = new FormData();
        formData.append('file',file);
        formData.append('upload_preset',CLOUDINARY_UPLOAD_PRESET);
        $.ajax({
            url: CLOUDINARY_URL,
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                // imgPreview= res.secure_url;
                console.log('Upload Img Thành Công');
                console.log(res.secure_url);
                return $('#avatar2').val(res.secure_url);
            },
            error: function (res, message) {
                console.log(res + message);
            }
        });
    })});