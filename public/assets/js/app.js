const dtLang = {
    processing: "Memuat data",
    paginate: {
        first: "<<",
        previous: "<",
        next: ">",
        last: ">>",
    },
    lengthMenu: "Menampilkan _MENU_ data",
    search: "Pencarian: ",
    info: "Menampilkan _START_ ke _END_ dari _TOTAL_ data",
    infoEmpty: "0",
    infoFiltered: "(Tersaring dari _MAX_ data)",
    emptyTable: "Data kosong",
};

const clearErrorMessage = () => {
    $(".is-invalid").removeClass("is-invalid");
};

const showSuccessToastr = (title, mssg = null) => {
    toastr.success(mssg, title);
};

const showErrorToastr = (title, mssg = null) => {
    toastr.error(mssg, title);
};
