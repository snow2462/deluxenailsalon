function checknumber(evt,objectid){

    var key=(!window.ActiveXObject)?evt.which:window.event.keyCode;
    var values=document.getElementById(objectid).value;
    if((key<48 || key >57) && key!=8 && key!=0 && key!=46 ) return false;
    return true;
}