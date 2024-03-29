<form class="w-3/5 h-auto bg-white mx-auto my-32 flex rounded-lg">
    <div class="flex items-end w-1/2">
        <img src="<?= get_template_directory_uri()?>/src/img/login-register.png" alt="Imagem de uma pessoa segurando o celular" class="h-5/6">
    </div>

    <!-- LOGAR -->
    <fieldset class="form">
        <h2 class="text-black font-bold text-xl">Resgistrar <span class="text-red font-bold text-xl">conta</span></h2>
        <input class="input-fields" type="text" placeholder="Entre com seu nome">
        <input class="input-fields" type="text" placeholder="Digite sua senha">
        <button  class="btn justify-center p-2 w-2/3">Entrar <i class="ph ph-sign-in"></i></button>
        <span class="text-black text-sm font-normal">Já possui conta ?<a href="#" class="text-red text-sm font-normal"> Acesse sua conta!</a></span>
    </fieldset>

    <!-- REGISTRAR -->
    <fieldset class="form">
        <h2 class="text-black font-bold text-xl">Resgistrar <span class="text-red font-bold text-xl">conta</span></h2>
        <input class="input-fields" type="text" placeholder="Entre com seu nome">
        <input class="input-fields" type="text" placeholder="Entre com seu e-mail">
        <input class="input-fields" type="text" placeholder="Digite sua senha">
        <input class="input-fields" type="text" placeholder="Repita sua senha">
        <button  class="btn justify-center p-2 w-2/3">Registrar-se <i class="ph ph-user-plus"></i></button>
        <span class="text-black text-sm font-normal">Já possui conta ?<a href="#" class="text-red text-sm font-normal"> Acesse sua conta!</a></span>
    </fieldset>
</form>