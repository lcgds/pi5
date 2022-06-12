@if(session()->has('success'))
<div class="br-message success" role="alert">
    <div class="icon"><i class="fas fa-check-circle fa-lg" aria-hidden="true"></i>
    </div>
    <div class="content">
        <span class="message-title">Sucesso.</span>
        <span class="message-body">
            {{ session()->get('success') }}
        </span>
    </div>
    <div class="close">
        <button class="br-button circle small" type="button" aria-label="Fechar"><i class="fas fa-times"
                aria-hidden="true"></i>
        </button>
    </div>
</div>
@endif

@if(session()->has('warning'))
<div class="br-message warning" role="alert">
    <div class="icon"><i class="fas fa-exclamation-triangle fa-lg" aria-hidden="true"></i>
    </div>
    <div class="content">
        <span class="message-title">Aviso.</span>
        <span class="message-body">
            {{ session()->get('warning') }}
        </span>
    </div>
    <div class="close">
        <button class="br-button circle small" type="button" aria-label="Fechar"><i class="fas fa-times"
                aria-hidden="true"></i>
        </button>
    </div>
</div>
@endif
