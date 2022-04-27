
function confirmMdp(){
    $('#pwd').val();
    alert("probleme");
}
$(document).ready(function()
{
    console.log("ready");
    $('#connexion').submit(confirmMdp);
});