<footer>
    <div class='green-stuff'>
        <div class="logo-xp">
            <img src="<?=get_template_directory_uri()?>/public/images/xp-logo.png" alt="xp-logo" height="15px" width="15px">
        </div>

        <div class="start-label">
            Iniciar
        </div>
    </div>
</footer>   

<style scoped>
    footer{
    position: fixed;
    bottom: 0; /* Coloca o rodapé no final do post */
    left: 0;

    width: 100%;

    border-top: 1px solid black; 

    z-index: 2;
    background: linear-gradient(180deg,#0997ff,#0053ee 8%,#0050ee 40%,#06f 88%,#06f 93%,#005bff 95%,#003dd7 96%,#003dd7);
    border-right: 10px;
    }
    .green-stuff{
        display: flex;
        place-content: space-evenly;

        background: linear-gradient(90deg, #005f00, #008000);

        width: 120px;
        height: 100%;

        border-bottom-right-radius: 5px;
    }
    .start-label{
        color: white;
        font-size: 20px;
    }

    @media (width <800px) {
        footer{
         display: none   ;
        }
    }


</style>

