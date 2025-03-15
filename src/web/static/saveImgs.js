var elements = document.getElementsByClassName('ZapamietajCheck');
var button = document.getElementById('zapamietajWybrane');
button.addEventListener('click',saveChecked);


function saveChecked()
{
    var formData = new FormData();
    for(element of elements)
    {
        let newid = element.id;
        newid = newid.substr(6);
        formData.append(newid,element.checked);
    }
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.open('POST','update');
    ajaxRequest.send(formData);
}