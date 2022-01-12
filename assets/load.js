
function loadHTML(template,where="window",label="", data=""){
    if(template.trim() != ""){
        fetch( "templates/"+template)
        .then( stream => stream.text())
        .then( text => {
            const temp = document.createElement('div');
            temp.innerHTML = text;
            const body = temp.getElementsByTagName('template')[0];
            const script = temp.getElementsByTagName('script')[0];

            if(body != undefined){
                if(where == "self"){
                    screen.innerHTML = body.innerHTML;
                }else if(where == "pop-up"){

                    document.querySelector('.modal-text') . innerHTML = body.innerHTML;
                    document.querySelector('.text-title') . innerHTML = label;
                    document.querySelector('.modal').style.display = 'block'

                }else{
                    document.getElementById(where).innerHTML = body.innerHTML;
                }
//                modal_data.value = data;
                eval(script.innerHTML);
            }
        }); 
    }
}
