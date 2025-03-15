
function handleSubmit()
{
    var data = new FormData;
    var to_search = form.value;
    var request = new XMLHttpRequest();
    data.append('search',to_search);
    request.open('POST','toSearch');
    request.send(data);
    request.onload = function(){
        result.innerHTML = this.responseText;
    };
}

var result = document.getElementById('result');
var form = document.getElementById('search_data');
form.addEventListener("keyup", handleSubmit);