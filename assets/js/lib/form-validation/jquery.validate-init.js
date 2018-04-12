
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-nama": {
                        required: !0,
                        minlength: 3,
                        maxlength: 50
                    },
                    "val-alamat": {
                        required: !0,
                        minlength: 4,
                        maxlength: 70
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
                    "val-password": {
                        required: !0,
                        minlength: 6,
                        maxlength: 50
                    },
                    "val-nik": {
                        required: !0,
                        number:["0-9",!0],
                        minlength: 16,
                        maxlength: 16
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-provinsi": {
                        required: !0
                    },
                    "val-kota": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phone": {
                        required: !0,
                        number:["0-9-+",!0],
                        minlength: 11,
                        maxlength: 13
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    },
                    
                },
                messages: {
                    "val-nama": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Panjang Nama Anda minimal 3 karakter",
                        maxlength: "Panjang Nama Anda maksimal 50 karakter"
                    },
                    "val-alamat": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Panjang alamat Anda minimal 4 karakter",
                        maxlength: "Panjang alamat Anda maksimal 70 karakter"
                    },
                    "val-email": {
                        required: "Anda harus mengisi kolom ini",
                        email: "Alamat email Anda tidak valid"
                    },
                    "val-password": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Panjang kata sandi Anda minimal 6 karakter",
                        maxlength: "Panjang kata sandi Anda maksimal 50 karakter"
                    },
                    "val-nik": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Panjang NIK 16 karakter",
                        maxlength: "Panjang NIK 16 karakter"
                    },
                    "val-confirm-password": {
                        required: "Anda harus mengisi kolom ini",
                        equalTo: "Kata sandi yang Anda masukkan tidak sama"
                    },
                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",
                    "val-provinsi": "Anda harus memilih provinsi",
                    "val-kota": "Anda harus memilih kota",
                    "val-currency": "Please enter a price!",
                    "val-website": "Please enter your website!",
                    "val-phone": {
                        required: "Anda belum mengisi kolom ini",
                        number: "Nomor telepon tidak valid",
                        minlength: "Nomor telepon terlalu pendek",
                        maxlength: "Nomor telepon terlalu panjang"
                    },
                    "val-digits": "Please enter only digits!",
                    "val-number": "Please enter a number!",
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "Anda harus menyetujui ketentuan layanan"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});