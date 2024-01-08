function cancelconf(){
    var confcancel = window.confirm("are u sure to delete this thread")
    if (confcancel == true){
        alert('delete with succes')
        return false;
    } else {
        return false;
    }
}