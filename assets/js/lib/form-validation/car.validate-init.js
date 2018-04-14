
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
                    "val-terms": {
                        required: !0
                    },
                    "val-nomorPolisi": {
                        required: !0,
                        minlength: 3,
                        maxlength: 12
                    },
                    "val-merkMobil": {
                        required: !0
                    },
                    "val-tipeMobil": {
                        required: !0
                    },
                    "val-tahunRakit": {
                        required: !0,
                        minlength: 4,
                        maxlength: 4,
                        number: ["[0-9]",!0]
                    },
                    "val-nomorRangka": {
                        required: !0,
                        minlength: 17,
                        maxlength: 17
                    },
                    "val-nomorMesin": {
                        required: !0,
                        minlength: 12,
                        maxlength: 12
                    },
                    "val-bahanBakar": {
                        required: !0
                    },
                    "val-jumlahCC": {
                        required: !0,
                        minlength: 4,
                        maxlength: 4,
                        number: ["[0-9]",!0]
                    },
                    "val-transmisi": {
                        required: !0
                    },
                    "val-jumlahPenumpang": {
                        required: !0
                    },
                    "val-biayaSewa": {
                        required: !0,
                        number: ["[0-9]",!0]
                    },
                    "val-gambarMobil": {
                        required: !0
                    },
                    "val-gambarSTNK": {
                        required: !0
                    },
                    "val-gambarBPKB": {
                        required: !0
                    }
                },
                messages: {
                    "val-nomorPolisi": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Panjang Nomor Polisi Mobil minimal 2 karakter",
                        maxlength: "Panjang Nomor Polisi Mobil maksimal 12 karakter"
                    },
                    "val-merkMobil": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-tipeMobil": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-tahunRakit": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Tahun rakit minimal 4 karakter",
                        maxlength: "Tahun rakit maksimal 9 karakter",
                        number: "Anda harus menginputkan tahun"
                    },
                    "val-nomorRangka": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Nomor rangka minimal 17 karakter",
                        maxlength: "Nomor rangka maksimal 17 karakter"
                    },
                    "val-nomorMesin": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Nomor mesin minimal 12 karakter",
                        maxlength: "Nomor mesin maksimal 12 karakter"
                    },
                    "val-bahanBakar": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-jumlahCC": {
                        required: "Anda harus mengisi kolom ini",
                        minlength: "Jumlah CC mobil minimal 4 karakter",
                        maxlength: "Jumlah CC mobil maksimal 4 karakter",
                        number: "Anda harus menginputkan angka"
                    },
                    "val-transmisi": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-jumlahPenumpang": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-biayaSewa": {
                        required: "Anda harus mengisi kolom ini",
                        number: "Anda harus menginputkan angka"
                    },
                    "val-gambarMobil": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-gambarSTNK": {
                        required: "Anda harus mengisi kolom ini",
                    },
                    "val-gambarBPKB": {
                        required: "Anda harus mengisi kolom ini",
                    },
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