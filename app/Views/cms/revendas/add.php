<?= view('./cms/includes/top'); ?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= view('./cms/includes/mensagem'); ?>
        <?= view('./cms/includes/header'); ?>
        <?= view('./cms/includes/menu'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Revendas</h1>
            </section>
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Informações da Revenda</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                                <form role="form" method="post" action="revendas/save" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nome*</label>
                                            <input class="form-control input-lg" type="text" placeholder="" name="nome" required>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div><!-- /.box-body -->
                            </form>
                        </div><!-- /.box -->
                    </div><!--/.col (left) -->
                </div>   <!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.content-wrapper -->
    <?= view('./cms/includes/footer'); ?>
</div><!-- ./wrapper -->
<?= view('./cms/includes/scripts'); ?>
</body>
</html>

