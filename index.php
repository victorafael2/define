<form action="" method="post">

        <legend>Informações da Minha Empresa</legend>
        <p>
            <label for="startup_early_stage">Startup early stage (sem faturamento):</label>
            <input type="radio" name="tamanho_empresa" id="startup_early_stage" value="startup_early_stage" />
        </p>
        <p>
            <label for="startup">Startup (R$ 0 a R$ 4,8milhões):</label>
            <input type="radio" name="tamanho_empresa" id="startup" value="startup" />
        </p>
        <p>
            <label for="microempresa">Microempresa (até R$ 360mil):</label>
            <input type="radio" name="tamanho_empresa" id="microempresa" value="microempresa" />
        </p>
        <p>
            <label for="empresa_pequeno_porte">Empresa de pequeno porte (R$ 360.000,01 mil a R$ 4,8milhões):</label>
            <input type="radio" name="tamanho_empresa" id="empresa_pequeno_porte" value="empresa_pequeno_porte" />
        </p>
        <p>
            <label for="pequena_empresa">Pequena Empresa (De R$ 4.800.000,01 a R$ 16.000.000,00):</label>
            <input type="radio" name="tamanho_empresa" id="pequena_empresa" value="pequena_empresa" />
        </p>
        <p>
            <label for="media_empresa">Media Empresa (De R$ 16.000.000,01 a R$ 90.000.000,00):</label>
            <input type="radio" name="tamanho_empresa" id="media_empresa" value="media_empresa" />
        </p>
        <p>
            <label for="media_grande">Media Grande (De R$ 90.000.000,01 a R$ 300.000.000,00):</label>
            <input type="radio" name="tamanho_empresa" id="media_grande" value="media_grande" />
        </p>
        <p>
            <label for="grande_empresa">Grande Empresa (Acima de R$ 300.000.000,01):</label>
            <input type="radio" name="tamanho_empresa" id="grande_empresa" value="grande_empresa" />
        </p>



        <legend>Inovação Técnológica</legend>
        <label>
            <input type="radio" name="regime_tributario" value="Lucro Real"> Lucro Real
        </label>
        <label>
            <input type="radio" name="regime_tributario" value="Lucro Presumido"> Lucro Presumido
        </label>
        <label>
            <input type="radio" name="regime_tributario" value="Simples Nacional"> Simples Nacional
        </label>


        <legend>Inovação Técnológica</legend>
        <p>
            <label for="mercado">Para minha empresa, já existe no mercado:</label>
            <input type="radio" name="inovacao" id="mercado" value="mercado" />
        </p>
        <p>
            <label for="estado">Para meu Estado:</label>
            <input type="radio" name="inovacao" id="estado" value="estado" />
        </p>
        <p>
            <label for="pais">Para meu país:</label>
            <input type="radio" name="inovacao" id="pais" value="pais" />
        </p>
        <p>
            <label for="mundial">Inovação mundial:</label>
            <input type="radio" name="inovacao" id="mundial" value="mundial" />
        </p>



        <legend>Desenvolvimento</legend>
        <label>Meu projeto visa desenvolver:</label><br>
        <input type="radio" name="innovation" value="technology" />Inovação tecnológica: produto, processo ou
        serviço<br />
        <input type="radio" name="innovation" value="business" />Inovação em modelo de negócio<br />
        <input type="radio" name="innovation" value="method" />Inovação de Método: Marketing e Organizacional<br />




        <legend>Inovação</legend>
        <label>Meu projeto apresenta de uma inovação:</label><br>
        <input type="radio" name="innovation" value="incremental" />Incremental: Melhorias em produto ou processos<br />
        <input type="radio" name="innovation" value="disruptive" />Disruptiva: Cria novo produto e processo, sem alterar
        a cadeia de fornecedores existente associada à empresa<br />
        <input type="radio" name="innovation" value="radical" />Radical: Cria novo produto e processo que redefine toda
        a cadeia de fornecedores bem como o mercado<br />






        <legend>Inovação</legend>
        <label>Meu projeto está no TRL:</label><br>
        <input type="radio" name="trl" value="trl0" />TRL0<br />
        <input type="radio" name="trl" value="trl1" />TRL1<br />
        <input type="radio" name="trl" value="trl2" />TRL2<br />
        <input type="radio" name="trl" value="trl3" />TRL3<br />
        <input type="radio" name="trl" value="trl4" />TRL4<br />
        <input type="radio" name="trl" value="trl5" />TRL5<br />
        <input type="radio" name="trl" value="trl6" />TRL6<br />
        <input type="radio" name="trl" value="trl7" />TRL7<br />
        <input type="radio" name="trl" value="trl8" />TRL8<br />
        <input type="radio" name="trl" value="trl9" />TRL9<br />











        <legend>Inovação</legend>
        <label>Meu projeto poderá gerar:</label><br>
        <input type="radio" name="generation" value="patent" />Patente<br />
        <input type="radio" name="generation" value="software" />Registro de Software<br />
        <input type="radio" name="generation" value="industrial" />Desenhos industriais<br />
        <input type="radio" name="generation" value="artistic" />Criações artísticas<br />
        <input type="radio" name="generation" value="none" />Nenhuma alternativa<br />




    <h3>Infraestrutura para desenvolver o projeto</h3>
    <input type="radio" name="infraestrutura" value="Sim, o projeto será desenvolvido na empresa">Sim, o projeto será
    desenvolvido na empresa<br>
    <input type="radio" name="infraestrutura"
        value="Sim, porém apenas parte do projeto será desenvolvido na empresa">Sim, porém apenas parte do projeto será
    desenvolvido na empresa<br>
    <input type="radio" name="infraestrutura"
        value="Não, o projeto será desenvolvido na ICT (universidade, instituto de pesquisa, laboratório público) parceira">Não,
    o projeto será desenvolvido na ICT (universidade, instituto de pesquisa, laboratório público) parceira<br>
    <input type="radio" name="infraestrutura"
        value="Não, o projeto será desenvolvido na empresa contratada/parceira">Não, o projeto será desenvolvido na
    empresa contratada/parceira<br>
    <h3>Desenvolvimento do projeto</h3>
    <input type="radio" name="desenvolvimento" value="Em parceria com universidade ou instituto de pesquisa">Em parceria
    com universidade ou instituto de pesquisa<br>
    <input type="radio" name="desenvolvimento" value="Em parceria com Startup">Em parceria com Startup<br>
    <input type="radio" name="desenvolvimento" value="Em parceria com empresa">Em parceria com empresa<br>
    <input type="radio" name="desenvolvimento" value="Sem parceria">Sem parceria<br>
    <h3>Qualificação da equipe</h3>
    <input type="radio" name="qualificacao" value="Sim, a equipe possui qualificação na área do projeto">Sim, a equipe
    possui qualificação na área do projeto<br>
    <input type="radio" name="qualificacao"
        value="Sim, parte da equipe possui qualificação na área do projeto, mas precisaremos contratar outra empresa ou terceiros">Sim,
    parte da equipe possui qualificação na área do projeto, mas precisaremos contratar outra empresa ou terceiros<br>
    <input type="radio" name="qualificacao"
        value="Não, precisaremos contratar outra empresa ou terceiros para desenvolver o projeto">Não, precisaremos
    contratar outra empresa ou terceiros para desenvolver o projeto<br>
    <h3>Recursos Públicos</h3>
    <input type="radio" name="recursos" value="Sim, Recurso Não-Reembolsável (Subvenção Econômica)">Sim, Recurso
    Não-Reembolsável (Subvenção Econômica)<br>
    <input type="radio" name="recursos" value="Sim, Recurso reembolsável (financiamento para inovação)">Sim, Recurso
    reembolsável (financiamento para inovação)<br>
    <input type="radio" name="recursos" value="Sim, Lei de incentivo fiscal para inovação">Sim, Lei de incentivo fiscal
    para inovação<br>
    <input type="radio" name="recursos" value="Não, mas já tentamos">Não, mas já tentamos<br>
    <input type="radio" name="recursos" value="Não, nunca tentamos">Não, nunca tentamos<br>
    <input type="submit" value="Enviar">