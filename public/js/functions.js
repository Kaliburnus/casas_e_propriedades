function loading(){
  body.style.opacity = '1';
  body.style.transition = 'opacity 750ms';


}


window.addEventListener('load',()=>{
  body.style.opacity = '0';
  setTimeout(() => {
    loading();
  }, 0)
})


function abrirPopupGestor(id){
  window.open(
    `http://localhost/casas_e_propriedades/public/filemanager/dialog.php?field_id=${id}&popup=1`,
    "Gestor de Ficheiros",
    "width=850,height=600"
  );
}

function abrirPopup(directory){
    window.open(
    `http://localhost/casas_e_propriedades/backoffice/${directory}`,
    "Caroussel",
    "width=850,height=600"
  );
}

function abrirPopupId(id, directory){
    window.open(
    `http://localhost/casas_e_propriedades/backoffice/${directory}=${id}&popup=1`,
    "Caroussel",
    "width=850,height=600"
  );
}


function fecharPopup(){
  window.close() 
}

function operacaoConcluida(){
  alert("Operação Concluida!");
  setTimeout(fecharPopup,1000);
}
function confirmacao(directory,id){
  if(confirm("Esta operação é irreversivel tem acerteza que deseja continuar?")){
    window.location.href = directory+id;
  }
  else{
    "";
  }
}



function scrollAutomatico(){
  document.querySelector("main").scrollIntoView();
}

function verificar_scroll(){
  if(menu_atual != "home"){scroll_automatico();}
}


function abrir_menu_delay(){
  setTimeout(function(){menu_projetos.click();}, 750)
}

window.addEventListener("load", verificar_scroll);