/**
 * 
 * @param {*} element 
 * @param {*} url 
 */
var getContent=(element, url)=>{
    
    if (window.XMLHttpRequest){
        ajax = new XMLHttpRequest();
    }else{
        // for old IE
        ajax = new ActiveXObject('Microstoft.XMLHTTP');
    }
    ajax.onreadystatechange = ()=> {
        if (ajax.readyState == 4 && ajax.status ==200){
            element.innerHTML = ajax.responseText;
        }
    }
    ajax.open ('GET', url, true);
    ajax.send();
}