<?php include("../html/head.php") ?>
<?php include("../html/header.php") ?>
        <main>
            <section>
                <?php include("../html/navMenu.php") ?>
                <article>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Cadastra de Objetos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tipo de Objeto</li>
                        </ol>
                    </nav>
                    <form>
                        <div class="row" id="busca">
                            <div class="col-md-8">
                                <div>
                                    <a href="Novo.php" class="btn btn-success">Novo</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="SearchText" placeholder="Buscar por ..." />
                                    &nbsp;
                                    <input type="submit" value="Buscar" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>teste</th>
                                <th>teste</th>
                                <th>teste</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>texto</td>
                                <td>texto</td>
                                <td>texto</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Alterar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>
        </main>
<?php  include("../html/footer.php") ?>