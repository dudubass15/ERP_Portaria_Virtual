<script type="text/javascript">
 function validaForm()
 {
    erro = false;
    if($('#nome').val() == '')
    {
        alert('Voc&ecirc; precisa preencher o campo Nome');erro = true;
    }
    if($('#sobrenome').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo E-mail');erro = true;
    }
    if($('#apt').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo Mensagem');erro = true;
    }

    //se nao tiver erros
    if(!erro)
    {
        $('#formulario_contato').submit();
    }
 }
</script>