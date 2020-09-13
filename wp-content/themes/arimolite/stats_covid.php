<?php /* Template Name:Statistical */ ?>
<?php get_header(); ?>
<script src="../stats_assets/js_css/js/jquery.min.js"></script>
<script src="../stats_assets/js_css/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../stats_assets/js_css/css/bootstrap.min.css">

<script src="../stats_assets/js_css/js/d3-dsv.v1.min.js"> </script>
<script>
    d4 = d3
</script>
<script src="../stats_assets/js_css/js/d3-fetch.v1.min.js"></script>
<script src="../stats_assets/js_css/js/numeral.min.js"></script>


<script src="../stats_assets/js_css/js/jquery.dataTables.js"></script>

<script src="../stats_assets/js_css/js/dataTables.fixedHeader.min.js"></script>
<script src="../stats_assets/js_css/js/dataTables.responsive.min.js"></script>
<script src="../stats_assets/js_css/js/responsive.bootstrap.min.js"></script>



<script type="text/javascript" src="../stats_assets/utilities.js"></script>
<script src="../stats_assets/map_tools.js"></script>
<script type="text/javascript" src="../stats_assets/indexes.js"></script>
<script type="text/javascript" src="../stats_assets/data_finder.js"></script>
<script type="text/javascript" src="../stats_assets/main.js"></script>
<script type="text/javascript" src="../stats_assets/table_manager.js"></script>



<script>
    $ = jQuery.noConflict(true);
</script>

<link rel="stylesheet" href="../stats_assets/style.css">
<section class="section-module services page main_container">
   
    <div class="d-flex flex-column flex-sm-row  bd-highlight ">
        <div class="col-sm-2 bd-highlight centered">

            <div class="card">
                <div class="card-header" data-toggle="collapse" href="#world_data_body">
                    Données Mondiales

                </div>
                <div class="card-body centered" id="world_data_body">

                    <div class="card ">

                        <div class="card-header">
                            Actifs

                        </div>

                        <div class="card-body  world_data_info" id="world_infected">

                        </div>

                    </div>

                    <div class="card">

                        <div class="card-header">
                            Confirmées

                        </div>

                        <div class="card-body  world_data_info" id="world_confirmed">

                        </div>





                    </div>


                    <div class="card">

                        <div class="card-header">
                            Décès
                        </div>

                        <div class="card-body  world_data_info" id="world_deaths">

                        </div>

                    </div>





                    <div class="card">

                        <div class="card-header">
                            Guérisons

                        </div>

                        <div class=" world_data_info card-body  " id="world_recovered">


                        </div>

                    </div>



















                </div>
            </div>




            <hr>

            <section id="tabs">
                <div class="card">

                    <div class="card-header">Option d'affichage</div>
                    <div class="card-body">
                        <ul class="nav " style="width:100%">
                            <li class="nav-item">
                                <a data-toggle="pill" href="#map"style="width:100%">
                                    <button class="btn btn-secondary" style="width:100%">
                                        Carte du monde
                                    </button>
                                </a>

                            </li>
                            
                            <li class="nav-item">
                                <a data-toggle="pill" href="#table" style="width:100%">
                                    <button class="btn btn-secondary" style="width:100%">
                                        Tableau
                                    </button>
                                </a>

                            </li>
                        </ul>

                    </div>


                </div>

                </ <hr>





        </div>





















        <div class="col-sm-10  bd-highlight">




            <div class="tab-content">
                <div id="table" class="tab-pane fade show active">



                    <table id="main_table" class="display main_table" style="width:100%">

                        <thead>
                            <tr>
                                <th data-priority="1">Pays</th>
                                <th data-priority="3">Cas actifs</th>
                                <th data-priority="2">Cas confirmés</th>
                                <th>Décès</th>
                                <th>Guéris</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

                
                    <?php include get_template_directory() . '/stats_pages/world_map.php'; ?>

                
            </div>












        </div>

    </div>







</section>
<?php get_footer(); ?>