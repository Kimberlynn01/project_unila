$(document).ready(function () {
    let table = $("#data-table").DataTable({
        language: dtLang,
        serverSide: true,
        processing: true,
        ajax: {
            url: "visi-misi/data",
            type: "get",
            dataType: "json",
        },
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
                    const button_detail = `<button class="btn btn-warning button_detall" onclick="detail(${data})"><i class="bx bxs-dashboard bx-spin bx-flip-vertical"></i></button>`;
                    const button_edit = `<button class="btn btn-primary button_edit"><i class="bx bx-edit"></i></button>`;
                    const button_delete = `<button class="btn btn-danger button_hapus"><i class="bx bxs-trash"></i></button>`;
                    const buttonGroup = `<div class="btn-group">${button_detail}${button_edit}${button_delete}</div>`;

                    return buttonGroup;
                },
            },
        ],
    });

    $("#data-table").on("click", ".button_edit", function () {
        let data = table.row($(this).closest("tr")).data();
        console.log(data);
        clearErrorMessage();
        let { id } = data;
        window.location.href = "/visi-misi/edit/" + id;
    });

    $("#form-edit").on("submit", function (e) {
        e.preventDefault();

        var data = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: (res) => {
                showSuccessToastr("Success", res.message);
            },
            error: ({ status, responseJSON }) => {
                if (status == 422) {
                    generateErrorMessage(responseJSON, true);
                    return false;
                }

                showErrorToastr("oops", responseJSON.msg);
            },
        });
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

                showSuccessToastr("Success", res.message);
                table.ajax.reload();
                $("#modal-tambah").modal("hide");
            },
            error: ({ status, responseJSON }) => {
                $("#modal-tambah")
                    .find(".modal-dialog")
                    .LoadingOverlay("hide", true);

                if (status == 422) {
                    generateErrorMessage(responseJSON, true);
                } else {
                    showErrorToastr("Oops", responseJSON.message);
                }
            },
        });
    });

    $("#data-table").on("click", ".button_hapus", function () {
        let data = table.row($(this).closest("tr")).data();
        console.log(data);

        let { id } = data;

        Swal.fire({
            title: "Anda yakin?",
            html: `Anda akan menghapus "<b>${id}</b>"!`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                $.post({
                    url: `visi-misi/delete/${id}`,
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
                            `Data : ${id} berhasil dihapus`
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

ClassicEditor.create(document.querySelector("#uraian")).then((editor) =>
    console.log(editor.getData())
);

ClassicEditor.create(document.querySelector("#edit_uraian")).then((editor) =>
    console.log(editor.getData())
);

function detail(id) {
    window.location.href = `/visi-misi/detail/${id}`;
}
