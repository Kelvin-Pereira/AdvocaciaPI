@extends('layouts.app')

@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Cadastro de Advogado</h1><hr>
    <div class="container">
           <form action="" method="post">
               @csrf
            <div class="row">
                <div class=" col-3">
                     <div class="form-group bmd-form-group">
                         <label class="bmd-label-floating"> Nome Completo</label>
                         <input type="text" class="form-control" name="nome" required>
                     </div>
                </div>
                <div class=" col-2">
                     <div class="form-group bmd-form-group">
                         <label class="bmd-label-floating"> Registro OAB</label>
                         <input type="text" class="form-control" name="OAB" required>
                     </div>
                </div>
                <div class=" col-3">
                     <div class="form-group bmd-form-group">
                         <label class="bmd-label-floating"> E-mail</label>
                         <input type="email" class="form-control" name="email" required>
                     </div>
                </div>
                <div class=" col-2">
                     <div class="form-group bmd-form-group">
                         <label class="bmd-label-floating"> Telefone</label>
                         <input type="text" class="form-control" name="telefone1" required>
                     </div>
                </div>
                <div class=" col-2">
                     <div class="form-group bmd-form-group">
                         <label class="bmd-label-floating"> Telefone</label>
                         <input type="text" class="form-control" name="telefone2">
                     </div>
                </div>
                <div class=" col-2">
                     <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <select class="form-control selectpicker bmd-label-floating" data-style="btn btn-link" id="exampleFormControlSelect1" name="NivelAcesso" required>
                                    <option value="">Perfil</option>
                                    <option value="A">Admin  </option>
                                    <option value="F">Funcionario </option>
                            </select>
                     </div>
                </div>
                <div class=" col-2">
                     <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <select class="form-control selectpicker bmd-label-floating" data-style="btn btn-link" id="exampleFormControlSelect1" name="AreaAtuacao" required>
                                    <option value="">Area Atuação</option>
                                    <option value="Familiar">Familiar</option>
                                    <option value="Palhaço">Palhaço</option>
                            </select>
                     </div>
                </div>
            </div>  <!-- and row -->
                <br>
               <!-- Submit -->
               <div class="text-right">
                    <button type="reset" class="btn ">Limpar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
           </form>
    </div>
</div>
@endsection