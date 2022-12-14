$(document).ready(function () {
    $("#edit-button").click(function () {
        $("#no_surat").removeAttr("readonly");
        $("#no_agenda").removeAttr("readonly");
        $("#perihal").removeAttr("readonly");
        $("#lampiran").removeAttr("readonly");
        $("#sifat").removeAttr("disabled");
        $("#tujuan").removeAttr("readonly");
        $("#asal").removeAttr("readonly");
        $("#tembusan").removeAttr("readonly");
        $("#tanggal_surat").removeAttr("readonly");
        $("#tanggal_diterima").removeAttr("readonly");
        $("#ringkasan").removeAttr("readonly");
        $("#file_surat_group").show();
        $("#file_surat_sebelumnya").hide();
        $("#submit-button").show();
        $("#edit-button").hide();
        $("#cancel-edit-button").show();
    });

    $("#cancel-edit-button").click(function () {
        $("#no_agenda").attr("readonly", true);
        $("#no_surat").attr("readonly", true);
        $("#no_agenda").attr("readonly", true);
        $("#perihal").attr("readonly", true);
        $("#lampiran").attr("readonly", true);
        $("#sifat").attr("disabled", true);
        $("#tujuan").attr("readonly", true);
        $("#asal").attr("readonly", true);
        $("#tembusan").attr("readonly", true);
        $("#tanggal_surat").attr("readonly", true);
        $("#tanggal_diterima").attr("readonly", true);
        $("#ringkasan").attr("readonly", true);
        $("#file_surat_group").hide();
        $("#file_surat_sebelumnya").show();
        $("#submit-button").hide();
        $("#edit-button").show();
        $("#cancel-edit-button").hide();
    });
});