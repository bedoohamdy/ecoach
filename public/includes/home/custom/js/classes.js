class  Utilites {

    header(){

        let facebook = "https://facebook.com/bedoohamdy";
        let whatsapp = "https://wa.me/+201110645479";
        let youtube = "https://youtube.com/";
        let instagram = "https://instagram.com/";

        let header = `
                    <header>
                    <div class="container">
                        <section class="social-media d-flex justify-content-between align-items-center flex-row-reverse">
                         
                            <a class="text-light" href="/login">
                                تسجيل الدخول
                                <i class="bi bi-person-fill"></i>
                            </a>
                            
                            <div class="icon d-flex">
                                <a href="${facebook}" target="_blank">
                                    <i class="bi bi-facebook text-light px-2"></i>
                                </a>
                                <a href="${instagram}" target="_blank">
                                    <i class="bi bi-instagram text-light px-2"></i>
                                </a>
                                <a href="${whatsapp}" target="_blank">
                                    <i class="bi bi-whatsapp text-light px-2"></i>
                                </a>
                                <a href="${youtube}" target="_blank">
                                    <i class="bi bi-youtube text-light px-2"></i>
                                </a>
                            </div>
                    

                        </section>
                        <hr class="bg-light">
                        <section class="header-content flex-column flex-lg-row-reverse d-flex justify-content-between px-5  align-items-center" style="min-height: 135px">
                            <img class="my-3" src="/includes/img/logo.png" alt="logo" style="width: 100px">
                            <ul class="nav d-flex flex-row-reverse">
                                <li id="home" class="active px-4 my-3 fs-5"><a href="/home">
                                    الرئيسية
                                    <i class="bi bi-house-fill"></i>
                                </a>
                                </li>
                                <li id="players" class="px-4 fs-5 my-3"><a href="/players">
                                    اللاعبين
                                    <i class="bi bi-person-lines-fill"></i>
                                </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </header>
        `;

        let element = document.createElement("header");
        element.innerHTML += header;
        document.body.prepend(element);

        let path = window.location.pathname.split("/");

        let pageName = path[path.length - 1];

        let links = document.querySelectorAll("li");

        links.forEach(link => {
            if(pageName.includes(link.id)){
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
        

    }
}

