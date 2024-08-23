<x-app-layout>
    <x-slot name="header">
        {{ __('Template Base') }}
    </x-slot>
    <h2>Título h2</h2>
    <h3>Título h3</h3>
    <h4>Título h4</h4>
    <h5>Título h5</h5>
    <h6>Título h6</h6>
    <div class="row">
        <div class="col-auto">
            <ul>
                <li>item sem ordenação</li>
                <li>item sem ordenação</li>
                <li>item sem ordenação</li>
            </ul>
        </div>
        <div class="col-auto">
            <ol>
                <li>item ordenado</li>
                <li>item ordenado</li>
                <li>item ordenado</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <fieldset>
                <legend>Nome Completo (Legend)</legend>
                <div class="row">
                    <div class="col-md-7 mb-3">
                        <div class="br-input"><label for="name">Nome</label>
                            <input id="name" value="Fulano (input preenchido)" type="text" />
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="br-input">
                            <label for="surname">Sobrenome</label>
                            <input id="surname" type="text" placeholder="Placeholder"/>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="col-sm">
            <fieldset>
                <legend>Outros Dados (Legend)</legend>
                <div class="row">
                    <div class="col-md-7 mb-3">
                        <div class="br-input">
                            <label for="cpf">CPF</label>
                            <input id="cpf" type="text" placeholder="Placeholder"/>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="br-input input-button">
                            <label for="input-password">Senha</label>
                            <input id="input-password" type="password" placeholder="Digite sua senha"/>
                            <button class="br-button" type="button" aria-label="Exibir senha" role="switch"
                                    aria-checked="false"
                            >
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-sm d-flex">
            <div class="br-card">
                <div class="card-header">Card de exemplo 1</div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dignissimos, recusandae at accusamus
                    autem error hic adipisci eligendi eum debitis dolores magnam quod sint doloribus omnis vitae placeat.
                    Natus, minus.
                </div>
            </div>
        </div>
        <div class="col-sm d-flex">
            <div class="br-card">
                <div class="card-header">Card de exemplo 2</div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dignissimos, recusandae at accusamus
                    autem error hic adipisci eligendi eum debitis dolores magnam quod sint doloribus omnis vitae placeat.
                    Natus, minus.
                </div>
            </div>
        </div>
        <div class="col-sm d-flex">
            <div class="br-card">
                <div class="card-header">Card de exemplo 3</div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dignissimos, recusandae at accusamus
                    autem error hic adipisci eligendi eum debitis dolores magnam quod sint doloribus omnis vitae placeat.
                    Natus, minus.
                </div>
                <div class="col-sm d-flex mb-4">
                    <div class="br-scrim-util foco" id="scrimutilexamplemodal" data-scrim="true">
                        <div class="br-modal" aria-labelledby="titulomodalexemplo">
                            <div class="br-modal-header" id="titulomodalexemplo">Modal com scrim</div>
                            <div class="br-modal-body">
                                <p>Exemplo utilizando o componente scrim com FOCO</p>
                            </div>
                            <div class="br-modal-footer justify-content-center">
                                <button class="br-button secondary" type="button" data-dismiss="true">Cancelar
                                </button>
                                <button class="br-button primary mt-3 mt-sm-0 ml-sm-3" type="button">Retornar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="scrimutilexamplemodal">
                        <button class="br-button primary" type="button" id="buttonactivatemodal">
                            Testar o Modal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
