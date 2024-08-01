<div>
    <h1>Detalhes da Pessoa</h1>
    <p>Nome: {{ $this->nome }}</p>
    <p>Idade: {{ $this->$idade }}</p>

    <button wire:click="setNome('João')">Mudar Nome para João</button>
    <button wire:click="setIdade(30)">Mudar Idade para 30</button>
</div>
