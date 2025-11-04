function alertPopup(titleText, message, iconClass) {
    swal(message, {
        // icon: "success",
        closeOnClickOutside: false,
        title: titleText,
        text: message,
        //icon: iconClass,
    });

}

function confirmPopup(txtTitle, txtOK, txtCancel, fncCallBack) {
    swal({
            title: txtTitle,
            type: "warning",
            // closeOnClickOutside: false,
            buttons: {
                cancel: {
                    text: txtCancel,
                    value: false,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: txtOK,
                    value: true,
                    visible: true,
                    className: "btn-primary",
                    closeModal: true
                }
            },
        })
        .then((value) => {
            if (value) {
                fncCallBack();
            }
        });
}