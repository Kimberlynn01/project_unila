$(document).ready(function () {
    let table = $("#data-table").DataTable({
        language: dtLang,
        serverSide: true,
        processing: true,
        ajax: {
            url: "rtl/data",
            type: "get",
            dataType: "json",
        },
        columnDefs: [
            {
                targets: [2, 3],
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
                data: "program_studi",
            },
            {
                data: "file",
                render: function (data, type, row) {
                    return `<a href="${
                        "/storage/rtl/" + data
                    }" target="_blank" class="btn btn-primary">Lihat File</a>`;
                },
            },
            {
                data: "id",
                render: function (data, type, row) {
                    const button_edit = `<button class="btn btn-primary button_edit" style="margin-right: 10px"> Edit </button>`;
                    const button_delete = `<button class="btn btn-danger button_hapus" data-id="${data}"> Delete </button>`;

                    return button_edit + "" + button_delete;
                },
            },
        ],
    });

    $(".button_tambah").click(function () {
        $("#modal-tambah").modal("show");
    });

    $("#data-table").on("click", ".button_edit", function () {
        let data = table.row($(this).closest("tr")).data();
        console.log(data);
        $("#form-edit")[0].reset();
        clearErrorMessage();
        let { program_studi, id } = data;
        $("#id_lama").val(id);
        $("#edit_program_studi").val(program_studi);
        $("#modal-edit").modal("show");
    });

    $("#form-tambah").on("submit", function (e) {
        e.preventDefault();

        var data = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            beforeSend: () => {
                clearErrorMessage();
                $("#modal-tambah").find(".modal-dialog").LoadingOverlay("show");
            },
            success: (res) => {
                $("#modal-tambah")
                    .find(".modal-dialog")
                    .LoadingOverlay("hide", true);
                $(this)[0].reset();
                clearErrorMessage();
                table.ajax.reload();
                $("#modal-tambah").modal("hide");
            },
            error: ({ status, responseJSON }) => {
                $("#modal-tambah")
                    .find(".modal-dialog")
                    .LoadingOverlay("hide", true);

                if (status == 422) {
                    generateErrorMessage(responseJSON, true);
                    return false;
                }

                showErrorToastr("oops", responseJSON.msg);
            },
        });
    });

    $("#data-table").on("click", ".button_hapus", function () {
        let data = table.row($(this).closest("tr")).data();
        console.log(data); // Log the data to the console to inspect its contents

        let { id, program_studi } = data;

        Swal.fire({
            title: "Anda yakin?",
            html: `Anda akan menghapus "<b>${program_studi}</b>"!`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                $.post({
                    url: `/rtl/delete/${id}`,
                    data: {
                        _method: "DELETE",
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr(
                            "content"
                        ),
                    },
                    success: (res) => {
                        showSuccessToastr(
                            "Sukses",
                            `Data : ${program_studi} berhasil dihapus`
                        );
                        table.ajax.reload();
                    },
                    error: (res) => {
                        let { status, responseJSON } = res;
                        showErrorToastr("Oops", responseJSON.message);
                    },
                });
            }
        });
    });
});
