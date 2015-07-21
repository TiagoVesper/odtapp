<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to CodeIgniter 3 on OpenShift</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<section class="container">

        <h1>Oraculo das Tavernas</h1>
        <hr>

    <!--BEGIN FORM-->
    <form method="post" action="" class="horizontal-form" id="frmEnviar">

        <div class="row">
            <!-- nome -->
            <div class="col-md-4" id="" >
                <div class="form-group">
                    <label class="control-label">Nome<span class="required">*</span></label>
                    <input type="text" id="nome" name="nome" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- jogador -->
            <div class="col-md-4" id="" >
                <div class="form-group">
                    <label class="control-label">Jogador<span class="required">*</span></label>
                    <input type="text" id="jogador" name="jogador" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- classe -->
            <div class="col-md-4" id="" >
                <div class="form-group">
                    <label class="control-label">Classe<span class="required">*</span></label>
                    <input type="text" id="classe" name="classe" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- raça -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Raça<span class="required">*</span></label>
                    <input type="text" id="raça" name="raça" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- tendencia -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Tendência<span class="required">*</span></label>
                    <input type="text" id="tendencia" name="tendencia" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- divindade -->
            <div class="col-md-4" id="" >
                <div class="form-group">
                    <label class="control-label">Divindade<span class="required">*</span></label>
                    <input type="text" id="divindade" name="divindade" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- nivel -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Nivel<span class="required">*</span></label>
                    <input type="text" id="nivel" name="nivel" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- tamanho -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Tamanho<span class="required">*</span></label>
                    <input type="text" id="tamanho" name="tamanho" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <!-- idade -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Idade<span class="required">*</span></label>
                    <input type="text" id="idade" name="idade" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- sexo -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Sexo<span class="required">*</span></label>
                    <input type="text" id="sexo" name="sexo" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- altura -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Altura<span class="required">*</span></label>
                    <input type="text" id="altura" name="altura" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- peso -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Peso<span class="required">*</span></label>
                    <input type="text" id="peso" name="peso" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- olhos -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Olhos<span class="required">*</span></label>
                    <input type="text" id="olhos" name="olhos" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <!-- cabelo -->
            <div class="col-md-2" id="" >
                <div class="form-group">
                    <label class="control-label">Cabelo<span class="required">*</span></label>
                    <input type="text" id="cabelo" name="cabelo" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <p class="text-center small"><b>HAB</b></p>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <p class="text-center small"><b>NIVEL HAB</b></p>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <p class="text-center small"><b>MOD HAB</b></p>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <p class="text-center small"><b>HAB TEMP</b></p>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <p class="text-center small"><b>MOD</b></p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- força -->
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnFor">FOR</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="forca" name="forca" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modForca" name="modForca" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempForca" name="tempForca" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempForca" name="modTempForca" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnDes">DES</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="destreza" name="destreza" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modDestreza" name="modDestreza" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempDestreza" name="tempDestreza" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempDestreza" name="modTempDestreza" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnCon">CON</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="constituicao" name="constituicao" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modConstituicao" name="modConstituicao" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempConstituicao" name="tempConstituicao" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempConstituicao" name="modTempConstituicao" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnInt">INT</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="inteligencia" name="inteligencia" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modInteligencia" name="modInteligencia" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempInteligencia" name="tempInteligencia" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempInteligencia" name="modTempInteligencia" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnSab">SAB</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="sabedoria" name="sabedoria" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modSabedoria" name="modSabedoria" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempSabedoria" name="tempSabedoria" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempSabedoria" name="modTempSabedoria" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block" id="btnCar">CAR</button>
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="carisma" name="carisma" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modCarisma" name="modCarisma" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="tempCarisma" name="tempCarisma" class="form-control" value="" autocomplete="off">
                </div>
            </div>
            <div class="col-md-1" id="" >
                <div class="form-group">
                    <input type="text" id="modTempCarisma" name="modTempCarisma" class="form-control" value="" autocomplete="off">
                </div>
            </div>
        </div>


        <button type="button" class="btn btn-default" id="btnEnviar">Enviar</button>

    </form>
    <!--END FORM-->

    <footer>
          <div class="logo"><a href="https://www.meusite.com/"></a></div>
    </footer>
</section>

</body>
</html>
