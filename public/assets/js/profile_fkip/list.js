$(document).ready(function () {
    let table = $("#data-table").DataTable({
        language: dtLang,
        serverSide: true,
        processing: true,
        ajax: {
            url: "profile-fkip/data",
            type: "get",
            dataType: "json",
        },
        columnDefs: [
            {
                targets: [2],
                orderable: false,
                searchable: false,
                className: "text-center align-top justify-content-center",
            },
        ],
        columns: [
            {
                data: "DT_RowIndex",
            },
            {
                data: "judul",
            },
            {
                data: "id",
                render: function (data, type, row) {
                    const button_detail = `<button class="btn btn-primary button_detall" style="margin-right: 10px"> Detail </button>`;
                    const button_edit = `<button class="btn btn-danger button_edit"> Edit </button>`;
                    const button_delete = `<button class="btn btn-danger button_hapus"> Hapus </button>`;

                    return (
                        button_detail + "" + button_edit + "" + button_delete
                    );
                },
            },
        ],
    });

    //     $(".button_tambah").click(function () {
    //         $("#modal-tambah").modal("show");
    //     });

    //     $("#data-table").on("click", ".button_edit", function () {
    //         let data = table.row($(this).closest("tr")).data();
    //         console.log(data);
    //         $("#form-edit")[0].reset();
    //         clearErrorMessage();
    //         let { id, tahun } = data;
    //         $("#id_lama").val(id);
    //         $("#edit_tahun").val(tahun);
    //         $("#modal-edit").modal("show");
    //     });

    //     $("#form-edit").on("submit", function (e) {
    //         e.preventDefault();

    //         var data = new FormData(this);

    //         $.ajax({
    //             url: $(this).attr("action"),
    //             type: $(this).attr("method"),
    //             data: data,
    //             dataType: "json",
    //             contentType: false,
    //             processData: false,
    //             beforeSend: () => {
    //                 clearErrorMessage();
    //                 $("#modal-edit").find(".modal-dialog").LoadingOverlay("show");
    //             },
    //             success: (res) => {
    //                 $("#modal-edit")
    //                     .find(".modal-dialog")
    //                     .LoadingOverlay("hide", true);
    //                 $(this)[0].reset();
    //                 clearErrorMessage();
    //                 table.ajax.reload();
    //                 $("#modal-edit").modal("hide");
    //             },
    //             error: ({ status, responseJSON }) => {
    //                 $("#modal-edit")
    //                     .find(".modal-dialog")
    //                     .LoadingOverlay("hide", true);

    //                 if (status == 422) {
    //                     generateErrorMessage(responseJSON, true);
    //                     return false;
    //                 }

    //                 showErrorToastr("oops", responseJSON.msg);
    //             },
    //         });
    //     });

    //     $("#form-tambah").on("submit", function (e) {
    //         e.preventDefault();

    //         var data = new FormData(this);

    //         $.ajax({
    //             url: $(this).attr("action"),
    //             type: $(this).attr("method"),
    //             data: data,
    //             dataType: "json",
    //             contentType: false,
    //             processData: false,
    //             beforeSend: () => {
    //                 clearErrorMessage();
    //                 $("#modal-tambah").find(".modal-dialog").LoadingOverlay("show");
    //             },
    //             success: (res) => {
    //                 $("#modal-tambah")
    //                     .find(".modal-dialog")
    //                     .LoadingOverlay("hide", true);
    //                 $(this)[0].reset();
    //                 clearErrorMessage();

    //                 showSuccessToastr("Success", res.message);
    //                 table.ajax.reload();
    //                 $("#modal-tambah").modal("hide");
    //             },
    //             error: ({ status, responseJSON }) => {
    //                 $("#modal-tambah")
    //                     .find(".modal-dialog")
    //                     .LoadingOverlay("hide", true);

    //                 if (status == 422) {
    //                     generateErrorMessage(responseJSON, true);
    //                 } else {
    //                     showErrorToastr("Oops", responseJSON.message);
    //                 }
    //             },
    //         });
    //     });

    //     $("#data-table").on("click", ".button_hapus", function () {
    //         let data = table.row($(this).closest("tr")).data();
    //         console.log(data);

    //         let { id, tahun } = data;

    //         Swal.fire({
    //             title: "Anda yakin?",
    //             html: `Anda akan menghapus "<b>${id}</b>"!`,
    //             icon: "warning",
    //             showCancelButton: true,
    //             confirmButtonColor: "#d33",
    //             cancelButtonColor: "#3085d6",
    //             confirmButtonText: "Ya, Hapus!",
    //             cancelButtonText: "Batal",
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 $.post({
    //                     url: `external-banchmarking/delete/${id}`,
    //                     data: {
    //                         _method: "DELETE",
    //                     },
    //                     headers: {
    //                         "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr(
    //                             "content"
    //                         ),
    //                     },
    //                     success: (res) => {
    //                         showSuccessToastr(
    //                             "Sukses",
    //                             `Data : ${id} berhasil dihapus`
    //                         );
    //                         table.ajax.reload();
    //                     },
    //                     error: (res) => {
    //                         let { status, responseJSON } = res;
    //                         showErrorToastr("Oops", responseJSON.message);
    //                     },
    //                 });
    //             }
    //         });
    //     });
});
