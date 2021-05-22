const logout_btn = document.getElementById("logout");
const logout_form = document.getElementById("form-logout");

if(logout_btn != null){
    logout_btn.addEventListener("click",()=>{
        logout_form.submit()
    })
}
