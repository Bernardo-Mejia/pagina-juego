window.addEventListener("DOMContentLoaded", ()=>{
	d=document;
	const $form = d.querySelector(".contact-form"),
        $inputs = d.querySelectorAll(".contact-form [required]");
    $inputs.forEach(input=>{
        const $span = document.createElement("span");
        $span.id=input.name;
        $span.textContent=input.title;
        $span.classList.add("contact-form-error", "none")
        input.insertAdjacentElement("afterend", $span);
    });

    d.addEventListener("keyup", e=>{
        if(e.target.matches(".contact-form [required]")){
            let $input = e.target,
                pattern=$input.pattern || $input.dataset.pattern;   
            // console.log($input, pattern);
            if(pattern && $input.value!==""){
                // console.log("El input tiene patrón");
                let regex=new RegExp(pattern);
                return !regex.exec($input.value)
                    ?d.getElementById($input.name).classList.add("is-active")
                    :d.getElementById($input.name).classList.remove("is-active");
            }

            if(!pattern){
                // console.log("El input NO tiene patrón");
                return $input.value===""
                    ?d.getElementById($input.name).classList.add("is-active")
                    :d.getElementById($input.name).classList.remove("is-active");
            }
        }
    });

    d.addEventListener("submit", e=>{
        e.preventDefault();
        alert("Formulario enviado");
        const $loader=d.querySelector(".contact-form-loader"),
            $response=d.querySelector(".contact-form-response");
        
    });
});