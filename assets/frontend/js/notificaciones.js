
function notificaWarning(msg, tit) {

    toastr.warning(msg, tit);
    toastr.options.closeButton = true;
    toastr.options.showEasing = 'swing';
    toastr.options.hideEasing = 'linear';
    toastr.options.progressBar = true;
}


