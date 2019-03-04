@extends('site.templete.templete1')
@extends('site.templete.navbarLogado')

@section('content')
<br>

<div class="main main-raised ">
    <center><h3 >Cadastro de pessoa</h3></center><hr>
    <div class="container">      
        <div class="row">
            <div class="col-lg-6 col-md-8">
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
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="fisica">
                    <!-- Formulario Pessoa Fisica Por Kelvin -->
                        <form action="pessoaFisica" method="post">
                            <div class="row">

                                <div class="col-lg-6 col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Nome</label>
                                        <input type="text" class="form-control" id="exampleInput1" name="name">
                                    </div>
                                </div>
                                <div class="col-lg- col-sm-4">
                                    <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">CPF</label>
                                        <input type="text" class="form-control " id="exampleInput1" name="">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button type="reset" class="btn ">Limpar</button>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>      
                        </form>   
                    </div>
                    <div class="tab-pane" id="juridica">
                        <!-- Formulario Pessoa Juídica Por Kelvin -->
                        <form action="pessoaFisica" method="post">

                            <div class="col-lg-10 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Razão Social</label>
                                    <input type="text" class="form-control" id="exampleInput1" name="name">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">CPNJ</label>
                                    <input type="text" class="form-control " id="exampleInput1" name="cnpj">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="form-group has-default bmd-form-group">
                                    <input type="text" class="form-control" placeholder="Data Fundação">
                                </div>
                            </div>
                            
                            <!-- Submit -->
                            <button type="reset" class="btn ">Limpar</button>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
