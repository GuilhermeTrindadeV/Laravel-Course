<h3>Fornecedor</h3>

@php
    /*
    if(!<condicao>) {} //enquanto executa se o retorno for true
    */
@endphp
{{-- @unless execute se o retorno for false --}}

Fornecedor: {{$fornecedores[0]['nome']}}
<br>
Status: {{$fornecedores[0]['status']}}
<br>

@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor Inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- Se o retorno da condição for false-->   
    Fornecedor Inativo
@endunless