<div class="input-field">
    <input type="text" name="nome" value="{{ isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>

    <div class="input-field">
        <input type="text" name="endereco" value="{{ isset($registro->endereco) ? $registro->endereco : ''}}">
        <label>Endereço</label>
    </div>

    <div class="input-field">
        <input type="text" name="email" value="{{ isset($registro->email) ? $registro->email : ''}}">
        <label>Email</label>
    </div>

    <div class="input-field">
        <input type="text" name="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : ''}}">
        <label>Telefone</label>
    </div>

    <div class="input-field">
        <p>
            <input type="checkbox" id="teste" name="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true"/>
            <label for="teste">Publicar</label>
        </p>
        <br><br>
    </div>

</div>