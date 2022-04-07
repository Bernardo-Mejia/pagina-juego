const d = document,
    n=navigator,
    ua=n.userAgent;

    const $id=d.getElementById("user-device"),
        isMobile={
            android:()=>ua.match(/android/i),
            ios:()=>ua.match(/iphone|ipad|ipod/i),
            windows:()=>ua.match(/windows phone/i),
            any:function(){
                return this.android()||this.ios()||this.windows();
            },
        },
        isDesktop={
            linux:()=>ua.match(/linux/i),
            mac:()=>ua.match(/mac os/i),
            windows:()=>ua.match(/windows nt/i),
            any:function(){
                return this.linux()||this.mac()||this.windows();
            },
        },
        isBrowser={
            chrome: () => ua.match(/chrome/i),
            safari: () => ua.match(/safari/i),
            firefox: () => ua.match(/firefox/i),
            opera: () => ua.match(/opr|opera|opera mini/i),
            ie: () => ua.match(/msie|iemobile/i),
            edge: () => ua.match(/edg|edge/i),
            any: function() {
                return (
                    this.ie() ||
                    this.edge() ||
                    this.opera() ||
                    this.chrome() ||
                    this.safari() ||
                    this.firefox()
                );
            },
        };
    // console.log(ua);
    // console.log(isMobile.android());
    // console.log(isMobile.ios());
    // console.log(isMobile.any());

    // console.log(isDesktop.linux());
    // console.log(isDesktop.mac());
    // console.log(isDesktop.windows());
    // console.log(isDesktop.any());

    // console.log(isBrowser.chrome());
    // console.log(isBrowser.safari());
    // console.log(isBrowser.opera());
    // console.log(isBrowser.ie());
    // console.log(isBrowser.edge());
    // console.log(isBrowser.any());

    $id.innerHTML=`
    <ul>
        <li>User Adgent: <b>${ua}</b></li>
        <br>
        <li>Plataforma: <b>${isMobile.any()?isMobile.any():isDesktop.any()}</b></li>
        <br>
        <li>Navegador: <b>${isBrowser.any()}</b></li>
    </ul>
    `;

    /*CONTENIDO EXCLUSIVO*/
    if(isBrowser.chrome()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de Chrome</mark></p>`;
    }
    if(isBrowser.firefox()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de firefox</mark></p>`;
    }
    if(isBrowser.opera()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de Opera</mark></p>`;
    }
    if(isBrowser.safari()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de safari</mark></p>`;
    }
    if(isBrowser.edge()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de edge</mark></p>`;
    }

    if(isMobile.android()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de Android</mark></p>`;
    }
    if(isMobile.ios()){
        $id.innerHTML+=`<p><mark>Este contenido es exclusivo de Ipad y Iphone</mark></p>`;
    }

    if(isDesktop.linux()){
        $id.innerHTML+=`<p><mark>Descarga este softare exclusivo de Linux</mark></p>`;
    }
    if(isDesktop.mac()){
        $id.innerHTML+=`<p><mark>Descarga este softare exclusivo de Mac OS</mark></p>`;
    }
    if(isDesktop.windows()){
        $id.innerHTML+=`<p><mark>Descarga este softare exclusivo de Windows</mark></p>`;
    }

    /*Redirecciones*/
    // if(isMobile.android()){
    //     window.location.href="https://aprendejavascript.org";
    // }
