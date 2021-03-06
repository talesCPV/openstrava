localStorage.clear();
document.getElementById('btnLogin').addEventListener('click',()=>{

    const mail = document.getElementById('edtUser').value.trim();
    const pass = document.getElementById('edtPass').value.trim();

    const params = new Object;
        params.user = mail;
        params.pass = pass;

    const data = new URLSearchParams();        
    data.append("cod", 0);
    data.append("token", '');
    data.append("params", JSON.stringify(params));

    const myRequest = new Request("db/query_db.php",{
        method : "POST",
        body : data
    });

    const myPromisse = new Promise((resolve,reject) =>{

        fetch(myRequest)
        .then(function (response){

            if (response.status === 200) { 
                resolve(response.text());
            } else { 
                reject(new Error("Houve algum erro na comunicação com o servidor"));
            } 

        });            

    });

    myPromisse.then((resolve)=>{
//            console.log(resolve);
        if(resolve.trim() != ""){
            const json = JSON.parse(resolve);
//                console.log(json);
            localStorage.setItem("id",json[0].id);
            localStorage.setItem("user",json[0].user);
            localStorage.setItem("nome",json[0].nome);
            localStorage.setItem("class",json[0].class);
            localStorage.setItem("token",json[0].token);
            localStorage.setItem("email",json[0].email);
            window.open("main.html","_self")
        }else{
            alert("Usuário ou senha inválido!");
            localStorage.clear();
        }        

    });

});  