<?= view('./cms/includes/top'); ?>

<style>

#map {
    height: 500px;
    width: 100%;
}

</style>


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
                            <form role="form" method="post" action="revendas/edit" enctype="multipart/form-data">
                                <input type="hidden" name="revendaID" value="<?= $revenda->revendaID; ?>" />
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nome*</label>
                                        <input class="form-control input-lg" type="text" placeholder="" name="nome" value="<?= $revenda->nome; ?>" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Endereço*</label>
                                        <input class="form-control input-lg" type="text" placeholder="" name="endereco" value="<?= $revenda->endereco; ?>" id='endereco' required>
                                        <input class="form-control input-lg" type="text" placeholder="" name="latitude" value="<?= $revenda->latitude; ?>" id='latitude' required readonly>
                                        <input class="form-control input-lg" type="text" placeholder="" name="longitude" value="<?= $revenda->longitude; ?>" id='longitude' required readonly>
                                        <div id="map"></div>
                                    </div>

                                    
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </div>
                                </div><!-- /.box-body -->
                            </form>
                        </div><!-- /.box -->
                    </div><!--/.col (left) -->
                    <div class="col-md-6">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                              <div class="inner">
                                <h3><?= $relatorio->impressoes; ?></h3>
                                <p>Impressões</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                          <div class="inner">
                            <h3><?= $relatorio->cliques; ?></h3>
                            <p>Cliques</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>

                <!-- ./col -->



            </div>
            <!-- ./col -->

        </div>

    </div><!--/.col (left) -->


</div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
</div><!-- /.content-wrapper -->
<?= view('./cms/includes/footer'); ?>
</div><!-- ./wrapper -->
<?= view('./cms/includes/scripts'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaFKIIg1ZTGFmE-Ai2vXKApVADAA8JONw&libraries=places&callback=initMap" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $("#cnpj").mask("00.000.000/0000-00");
        $(".fone").mask("(99) 9 9999-9999");
    })

    var map;
    function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -11.53, lng: -50.21},
          zoom: 4
      });

        const input = document.getElementById("endereco");

        const options = {
            componentRestrictions: { country: "br" },
            fields: ["address_components", "geometry", "icon", "name"],
            strictBounds: false,
            types: ["address"]
        };

        const autocomplete = new google.maps.places.Autocomplete(input, options);

        autocomplete.addListener("place_changed", () => {

            const place = autocomplete.getPlace();

            var location = place.geometry.location;
            var lat = location.lat();
            var lng = location.lng();

            $("#latitude").val(lat);
            $("#longitude").val(lng);

            map.setCenter(place.geometry.location);
            map.setZoom(17);

            
            addMarker(location, map);

            // preencher os campos latiutude e longitude
            // colocar um pin no local certo

        });
    }

// Adds a marker to the map.
function addMarker(location, map) {
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  new google.maps.Marker({
    position: location,
    map: map
});
}





</script>

</body>
</html>

