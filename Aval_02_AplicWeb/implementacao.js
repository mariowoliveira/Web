$(document).ready(function(){
	$("#data").mask("09/09/9999");
});
function verificaData(){
	data=document.querySelector("#data").value;
	dt=data.split("/");
	dia= dt[0];
	mes= dt[1];
	ano= dt[2];
	var bool=true;
    if ((ano=>1500) || (ano<2017){
		if ((mes>=1) || (mes<=12)){
			if ((mes==01)||(mes==03)||(mes==05)||(mes==07)||(mes==8)||(mes==10)||(mes==12)){
				if ((dia>=01) && (dia<=31)){
					bool=true;
				}
			}else if ((mes==04)||(mes==06)||(mes== 9)||(mes==11)){
					if ((dia>=01) && (dia<=30)){
						bool=true;
					}
			}else if (mes==02){
				if ((ano%4==0) && (ano%100!=0)) || ((ano%4==0) && (ano%100==0) && (ano%400==0)){
					if ((dia>=1) && (dia<=29)){
						bool=true;
					}
				}else{ 
                    if((dia>=01) && (dia<=28)){
                        bool=true;
                        }
                    }
                }
			}
    }else{
        bool=true;
    }

}
function verificaNome(){
    var nome = document.getElementById("#nome");
    if(nome.value.length < 10){
var x = "Nome incorreto"
document.getElementById("#verf1").innerHTML = x;
    }
    else{
      var x = "";
	document.getElementById("verif1").innerHTML = "";
    }
}
function verificaEmail(){
          var e = document.querySelector("#email").value;
          var o=false;
          var i,j=0;
          for(i=0;i<e.lenght-1;i++){
            if(i == '@' ){  
               o=true;
               j++;
            }
          }
           if((o==false) or (j==0)){ 
                $("#email").fadeOut();
           }else{
             em=true; 
            }
        }
