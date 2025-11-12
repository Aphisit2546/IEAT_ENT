var alertPopup = function(titleText, message, iconClass = "success") {
    swal(message, {
        // icon: "success",
        closeOnClickOutside: false,
        title: titleText,
        text: message,
        icon: iconClass,
    });

}
var confirmPopup = function(txtTitle, txtOK, txtCancel, fncCallBack, message = null) {
    swal({
            title: txtTitle,
            type: "warning",
            text: message,
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

var fncConvDateEn_2_Th = function(pDate) {
    var strDate = "";
    var regexDDMMYYYYSlash = /\d{2}\/\d{2}\/\d{4}/;
    var regexDDMMYYYYDash = /\d{2}-\d{2}-\d{4}/;
    var regexYYYYMMDDDash = /\d{4}-\d{2}-\d{2}/;
    if (pDate.match(regexDDMMYYYYSlash)) {

        var lstDate = pDate.split("/");
        lstDate[2] = parseInt(lstDate[2]) + 543;
        strDate = lstDate.join("/");
    } else if (pDate.match(regexDDMMYYYYDash)) {

        var lstDate = pDate.split("-");
        lstDate[2] = parseInt(lstDate[2]) + 543;
        strDate = lstDate.join("-");
    } else if (pDate.match(regexYYYYMMDDDash)) {

        var lstDate = pDate.split("-");
        lstDate[0] = parseInt(lstDate[0]) + 543;
        strDate = lstDate.join("-");
    }
    return strDate;
}
var fncConvDateTh_2_En = function(pDate) {
    var strDate = "";
    var regexDDMMYYYYSlash = /\d{2}\/\d{2}\/\d{4}/;
    var regexDDMMYYYYDash = /\d{2}-\d{2}-\d{4}/;
    var regexYYYYMMDDDash = /\d{4}-\d{2}-\d{2}/;
    if (pDate.match(regexDDMMYYYYSlash)) {

        var lstDate = pDate.split("/");
        lstDate[2] = parseInt(lstDate[2]) - 543;
        strDate = lstDate.join("/");
    } else if (pDate.match(regexDDMMYYYYDash)) {

        var lstDate = pDate.split("-");
        lstDate[2] = parseInt(lstDate[2]) - 543;
        strDate = lstDate.join("-");
    } else if (pDate.match(regexYYYYMMDDDash)) {

        var lstDate = pDate.split("-");
        lstDate[0] = parseInt(lstDate[2]) - 543;
        strDate = lstDate.join("-");
    }
    return strDate;
}
var fncDisplayDateBuddhaDDMMYYYY = function(pDate) {
    var iYear = 0;
    iYear = parseInt(moment(pDate).format("YYYY")) + 543;
    return moment(pDate).locale("th").format("DD/MM/") + iYear;
}
var fncDisplayDateBuddhaDDMMMYYYY = function(pDate) {
    var iYear = 0;
    iYear = parseInt(moment(pDate).format("YYYY")) + 543;
    return moment(pDate).locale("th").format("DD/MMM/") + iYear;
}
var fncDisplayDateBuddhaMMMM = function(pDate) {
    var iYear = 0;
    iYear = parseInt(moment(pDate).format("YYYY")) + 543;
    return moment(pDate).locale("th").format("DD MMMM ") + iYear;
}

var fncCalcDisplayTimeDiff = function(TimeBegin, TimeEnd) {
    var iHour = (TimeBegin == null || TimeEnd == null) ? 0 : moment(TimeEnd).diff(TimeBegin, "HOUR");
    var iMinute = (TimeBegin == null || TimeEnd == null) ? 0 : moment(TimeEnd).diff(TimeBegin, "MINUTE") % 60;
    var objRetrun = {
        iHour: iHour,
        iMinute: iMinute,
        sTimeDisplay: ((iHour > 0) ? iHour : "0") + ":" + iMinute
    }
    return objRetrun;
}

function BlockUI() {
    $.blockUI({
        message: '<div class="loader"></div><span style="font-size:20px;">Loading...</span>',
        css: {
            border: 'none',
            padding: '10px',
            backgroundColor: 'none',
            //'-webkit-border-radius': '10px',
            //'-moz-border-radius': '10px',
            //opacity: .5,
            //color: '#FFF',
            fontFamily: 'THSarabunNew'
        },
        baseZ: 5000
    });

} //Void
function UnblockUI() {
    $.unblockUI();
} //Void