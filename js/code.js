var emailId = "";

function addRowHandlers() {
    var rows = document.getElementById("table1").rows;
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function(){ return function(){
              var email = this.cells[1].innerHTML;
                document.getElementById("user-email").innerHTML=email;
                displayUserDocs(email);
        };}(rows[i]);
        
    }
}
window.onload = addRowHandlers();

function displayUserDocs(email) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("table2-body").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","getUserDocs.php?emailId="+email,true);
    xhttp.send();
}

function checkAll(){
    var x=document.getElementById("print-done-checkbox")
    if(x.checked==true){
        var checkB=document.getElementsByClassName("item-checkbox");
        for(i=0;i<checkB.length;i++){
            checkB[i].checked=true;    
        }
        
    }
}