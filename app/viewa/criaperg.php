<div class="content-wrapper">
    <div class="container-fluid">
<!--meio-->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Crie sua pergunta</h1>
                <p class="lead">Não esqueça que sua pergunta ainda entrará em aprovação, e após isso ela será respondida e publicada :)</p>

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
        <div class="container">
            <div class="row">
                <form role="form" id="contact-form" class="contact-form" method="post">
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control textarea" rows="1" name="pergunta" id="Message" placeholder="Pergunta"></textarea>
                </div>
            </div>
        </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control textarea" rows="5" name="descricao" id="Message" placeholder="Detalhamento"></textarea>
                            </div>
                        </div>
                    </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <!-- image-preview-filename input [CUT FROM HERE]-->
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Imagem</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
                            </div><!-- /input-group image-preview [TO HERE]-->
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="gravar" class="btn main-btn pull-right">Enviar Pergunta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
