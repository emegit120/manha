<?= view('./cms/includes/top'); ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?= view('./cms/includes/header'); ?>
        <?= view('./cms/includes/menu'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= ucwords($entity[0]->name); ?>
                    <small>Listagem de <?= ucwords($entity[0]->name); ?></small>
                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <?PHP if (!empty($data)): ?>
                                <?PHP if(ucwords($entity[0]->name) !== 'Acompanhamento'): ?>
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <?PHP foreach ($entity as $attribute): ?>
                                            <?PHP if ($attribute->visible == 1): ?>
                                            <th width="20%"><?= $attribute->field; ?></th>
                                            <?PHP endif; ?>
                                            <?PHP endforeach; ?>
                                            <th>Editar/Visualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP foreach ($data as $line): ?>
                                        <tr>
                                            <?PHP
                                            foreach ($entity as $attribute):
                                                if ($attribute->visible == 1):
                                                    $field = $attribute->field;
                                                    if ($attribute->type == 'image'):
                                                        ?>
                                            <td width="20%"><img src="uploads/<?= @$line->$field; ?>" width="200px" />
                                            </td>
                                            <?PHP
                                                    else:
                                                        ?>
                                            <td width="20%"><?= @$line->$field; ?></td>
                                            <?PHP
                                                    endif;
                                                endif;
                                            endforeach;
                                            ?>

                                            <td>
                                                <?PHP
                                                $array = get_object_vars($line);
                                                reset($array);
                                                $first_key = key($array);
                                                ?>
                                                <a
                                                    href="manage/modify/<?= $entity[0]->name; ?>/<?= $array[$first_key]; ?>">
                                                    <button class="btn btn-block btn-primary">Editar/Visualizar</button>
                                                </a>
                                            </td>

                                        </tr>
                                        <?PHP endforeach; ?>
                                    </tbody>
                                </table>
                                <?PHP else: ?>
                                <h4><?= ucwords($entity[0]->name); ?> empty!</h4>
                                <?PHP endif; ?>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        <?PHP if(ucwords($entity[0]->name) !== 'Acompanhamento'): ?>
                        <div class="col-xs-4">
                            <a href="manage/add/<?= $entity[0]->name; ?>/">
                                <button class="btn btn-block btn-primary">add
                                    <?PHP echo ucwords($entity[0]->name); ?>
                                </button>
                            </a>
                        </div>
                        <?PHP else: ?>
                        <div class="col-xs-4 add-acompanhamento">

                        </div>
                        <?PHP endif; ?>
                        <?PHP endif; ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?= view('./cms/includes/footer'); ?>

    </div><!-- ./wrapper -->

    <?= view('./cms/includes/scripts'); ?>
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script>
    $(function() {
        $("#table").DataTable();
    });


    const chamaTable = (mes, ano) => {


        let mesSelect = mes;

        let anoSelect = ano;

        let params = new URLSearchParams(document.location.search);
        let mesparam = params.get("mes"); // is the string "Jonathan"
        let anoparam = parseInt(params.get("ano"), 10); // is the number 18

        if (mesparam && anoparam) {
            mesSelect = mesparam;
            anoSelect = anoparam;
        }


        let addAcom =
            `<a href="manage/add/acompanhamento/?ano=${anoSelect}&mes=${mesSelect}"><button class="btn btn-block btn-primary">adicionar imagem</button></a>`;


        $(".add-acompanhamento").append(addAcom);


        $(".content-header").html('<h1>Acompanhamento > ' + mesSelect + ' > ' + anoSelect + '</h1>');

        let ntable =
            '<table id="table" class="table table-bordered table-striped"><thead><tr><th width="20%">imagem</th><th width="20%">texto</th><th width="20%">ordem</th><th width="20%">mobile</th><th width="20%">mes</th><th width="20%">ano</th><th>Editar/Visualizar</th></tr></thead><tbody></tbody></table>'

        $.ajax({
            type: "POST",
            data: {
                mes: mesSelect,
                ano: anoSelect
            },
            url: "acompanhamento/carrega_galeria",
            success: function(data) {

                $(".acompanhamento").empty();

                $(".acompanhamento").append(ntable);

                let items = JSON.parse(data);

                for (let index = 0; index < items.length; index++) {
                    const element = items[index];

                    let newHt = '<tr><td width="20%"><img src="uploads/' + element.imagem +
                        '" width="200px"></td><td width="20%">' + element.texto +
                        '</td><td width="20%">' + element.ordem +
                        '</td><td width="20%"><img src="uploads/' + element.mobile +
                        '" width="200px"></td><td width="20%">' + mesSelect + '</td><td width="20%">' +
                        anoSelect +
                        '</td><td><a href="manage/modify/acompanhamento/' + element.bannerID +
                        '?ano=' + anoSelect + '&mes=' + mesSelect +
                        '"><button class="btn btn-block btn-primary">Editar/Visualizar</button></a></td></tr>'

                    $(".acompanhamento table tbody").append(newHt);
                }


            }
        });

    }

    if ($(location).attr('href').includes("/acompanhamento")) {

        //$("#table").remove();

        if ($(location).attr('href').includes("/acompanhamento/?")) {
            chamaTable();
        }

        $(".box-body").addClass('acompanhamento');

        let formu = '<form role="form" method="post" action="" enctype="multipart/form-data"></form>'

        let anoHtml =
            '<div class="form-group"><label for="exampleInputFile">Ano:</label><input type="number" value="2023" min="2023" max="2099" name="ano" class="form-control" required=""></div>'
        let btnAno =
            '<div class="box-footer"><button type="button" onclick="showMonth()" class="btn btn-primary">Continuar</button></div>'

        $(".acompanhamento").empty();
        $(".acompanhamento").append(formu);



        $.ajax({
            type: "GET",
            url: "acompanhamento/lista_periodos",
            success: function(data) {

                data = data.replaceAll('<br />', '');

                let items = JSON.parse(data);

                let arrcorrect = [];
                let perio = [];

                for (let index = 0; index < items.length; index++) {
                    const element = items[index];

                    for (let index2 = 0; index2 < element.length; index2++) {
                        const element2 = element[index2];


                        if (!perio.includes(element2.mes + element2.ano)) {

                            perio.push(element2.mes + element2.ano);

                            let obj = {
                                ano: element2.ano,
                                mes: element2.mes
                            }

                            arrcorrect.push(obj);
                        }
                    }
                }


                let arrcorrectorder = [];
               
                const meses = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
                ];


                for (let index = 0; index < meses.length; index++) {
                    const element = meses[index].toUpperCase();

                    let found = arrcorrect.filter((ele) => ele.mes === element);

                    if(found.length > 0){
                        for (let index2 = 0; index2 < found.length; index2++) {
                            const element2 = found[index2];
                            arrcorrectorder.push(element2)
                        }
                        
                    }

                }

                
               function compararNumeros(a, b) {                   
                return a.ano - b.ano;
               }

               arrcorrectorder.sort(compararNumeros);

               arrcorrectorder.reverse()
                

                for (let index = 0; index < arrcorrectorder.length; index++) {
                    const element = arrcorrectorder[index];
                    htpaths =
                        `<div class="col-xs-12 col-lg-3" onclick="chamaTable('${element.mes}',${element.ano})" style="border: 3px solid white;border-radius: 10px;background: #b5b5b5;display: flex;justify-content: center;align-items: center;font-size: 2rem;height: 145px;font-weight: bold;cursor: pointer;">
                                ${element.mes} ${element.ano}</div>`;

                    $(".acompanhamento form").append(htpaths);

                }



            }
        });
        //$(".acompanhamento form").append(anoHtml);
        //$(".acompanhamento form").append(btnAno);


    }
    </script>
</body>

</html>