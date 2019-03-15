@extends('layouts.app')

@section('conteudo')
<br>

<div class="main main-raised">
    <h1 class="text-center" id="top">Cadastro de pessoa</h1><hr>
    <div class="container">  
          
        <div class="row">
            <h5>Tipo</h5>  
            <ul class="nav nav-pills nav-pills-icons" role="tablist">
            
            <li class="nav-item">
                <a class="nav-link active" href="#fisica" role="tab" data-toggle="tab">
                    Física
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#juridica" role="tab" data-toggle="tab">
                    jurídica
                </a>
            </li>
            </ul>
        </div>
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="fisica">
                <!-- Formulario Pessoa Fisica Por Kelvin -->
                    <form action="/NovoClienteFisica" method="post">
                            <h4>DADOS BÁSICOS</h4>
                        <div class="row">
                                @csrf
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Nome</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Data Nascimento</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="dataNasc" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">CPF</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="cpf" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4" >                       
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"></label>
                                    <select class="form-control selectpicker bmd-label-floating" data-style="btn btn-link" id="exampleFormControlSelect1" name="estadoCivil" required>
                                            <option value="">Estado Cívil</option>
                                            <option value="Estado">Casado  </option>
                                            <option value="Separado">Separado </option>
                                            <option value="Divorciado">Divorciado </option>
                                            <option value="Viúvo">Viúvo  </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4" >                       
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"></label>
                                    <select class="form-control selectpicker bmd-label-floating" data-style="btn btn-link" id="exampleFormControlSelect1" name="sexo" required>
                                            <option value="">Gênero</option>
                                            <option value="M">Masculino  </option>
                                            <option value="F">Feminino </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Profissão</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="profissao" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Nome Da Mãe</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="nomeMae" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Nome Do Pai</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="nomePai" required>
                                </div>
                            </div>         
                        </div>   
                        <h4>CONTATOS</h4>
                        <div class="row">
                                <!--Contatos -->     

                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">E-mail</label>
                                    <input type="email" class="form-control" id="exampleInput1" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Telefone</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="telefone1" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Telefone</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="telefone2" >
                                </div>
                            </div>
                        </div><br>
                                <div class="text-right">
                                    <!-- Submit -->
                                    <button type="reset" class="btn ">Limpar</button>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                    </form>   
                </div>
                <div class="tab-pane" id="juridica">
                    <!-- Formulario Pessoa Juídica Por Kelvin -->
                    <form action="NovoClienteJuridica" method="post">
                            <h4>DADOS BÁSICOS</h4>
                        <div class="row">
                                @csrf
                            <div class="col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Razão Social</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="razaoSocial" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">CNPJ</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="cnpj" required>
                                </div>
                            </div>
                            
                            <div class="col-lg-2 col-sm-4">
                                <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Data Fundação</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="dataFundacao" required>
                                </div>
                            </div>
           
                        </div>   <br>
                        <h4>CONTATOS</h4>
                        <div class="row">
                                <!--Contatos -->     

                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">E-mail</label>
                                    <input type="email" class="form-control" id="exampleInput1" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Telefone</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="telefone1" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Telefone</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="telefone2" >
                                </div>
                            </div>
                        </div><br>
                                <div class="text-right">
                                    <!-- Submit -->
                                    <button type="reset" class="btn ">Limpar</button>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
