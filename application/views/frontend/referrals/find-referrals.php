<body class="page-header-fixed">
<link href="<?php echo base_url(DIR_FRONTEND_TERCEROS); ?>/gridgallery/css/component.css" rel="stylesheet"
      type="text/css"/>
<link rel="stylesheet" type="text/css"
      href="<?php echo base_url(DIR_FRONTEND_TERCEROS) . "/jquery.typeahead/jquery.typeahead.css" ?>">
<script type="text/javascript"
        src="<?php echo base_url(DIR_FRONTEND_TERCEROS) . "/jquery.typeahead/jquery.typeahead.js" ?>"></script>
<main class="page-content">

    <div class="page-inner">

        <div id="main-wrapper">

            <div class="col-md-6">
                <img src="<?php echo base_url(DIR_FRONTEND_IMG) . "/page/logo.png" ?>" width="250px">
            </div>

            <div class="col-md-6 text-right">
                <a href="<?php echo base_url("in") ?>" class="btn btn-success btn-rounded btn-addon"><i
                        class="fa fa-pencil"></i> <?php echo lang("referrals_botto_login") ?></a>
            </div>

            <div class="col-md-12">

                <h2><?php echo lang("referrals_title") ?></h2>

                <div class="panel panel-white">

                    <div class="panel-body">
                        <br>
                        <?php
                        $attributes = array('class' => 'form-horizontal', 'id' => 'frm-search-referral');
                        echo form_open('search-referrals', $attributes);
                        ?>

                        <div class="typeahead-container">
                            <div class="typeahead-field">
                                <input class="form-control input-lg m-b-sm" id="user_v1-query" name="user_v1[query]"
                                       type="search" placeholder="Search" autofocus autocomplete="off">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default exe" type="button"><i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                <input type="hidden" class="form-control input-lg m-b-sm" id="_id_find" name="_id_find">
                            </div>
                        </div>

                        <div id="m"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div id="grid-gallery" class="grid-gallery">
                            <section class="grid-wrap">
                                <ul class="grid">
                                    <li class="grid-sizer"></li>
                                    <?php
                                    if (!$all_refer) {
                                        echo "<h2>" . lang("referrals_no_result_h2") . "</h2>";
                                    } else {
                                        $i = 0;
                                        foreach ($all_refer as $all) {
                                            ?>
                                            <li>
                                                <figure>
                                                    <?php
                                                    if (!$all->img) {
                                                        $img = base_url(DIR_FRONTEND_IMG) . "/page/avatar.jpg";
                                                    } else {
                                                        $img = base_url(DIR_FRONTEND_IMG) . "/profile/" . $all->id . "/" . $all->img;
                                                    }
                                                    ?>
                                                    <img src="<?php echo $img ?>" alt="img<?php echo $i ?>"/>
                                                    <figcaption><h3><?php echo $all->nomb ?></h3>

                                                        <p><?php echo $all->email ?></p></figcaption>
                                                    <a href="<?php echo base_url() . "addReferr/?qrefer=" . base64_encode($all->id) ?>"
                                                       class="btn btn-success btn-addon btn-rounded btn-block m-t-md"><i
                                                            class="fa fa-users"></i> <?php echo lang("referrals_botto_referral") ?>
                                                    </a>
                                                </figure>
                                            </li>

                                            <?php
                                            $i++;
                                        }
                                    }
                                    ?>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style type="text/css">
    .typeahead_wrapper {
        display: block;
        height: 45px;
    }

    .typeahead_photo {
        float: left;
        max-width: 40px;
        max-height: 40px;
        margin-right: 5px;
        margin-bottom: 10px;
    }

    .typeahead_labels {
        float: left;
        height: 30px;
    }

    .typeahead_primary {
        font-weight: bold;
    }

    .typeahead_secondary {
        font-size: .9em;
        margin-top: -5px;
    }
</style>
<script type="text/javascript">
    $(function () {

        $(".exe").bind("click", function () {
            alert($("#_id_find").val() + ":" + $("#user_v1-query").val());
        });


        $('#user_v1-query').typeahead({
            minLength: 3,
            order: "asc",
            hint: true,
            dynamic: true,
            dropdownFilter: "All",
            group: false,
            emptyTemplate: "<?php echo lang("") ?>",
            delay: 300,
            backdrop: {
                "background-color": "#fff"
            },
            template: "<div class='typeahead_wrapper'>"
            + "<img class='typeahead_photo' src='<?php echo base_url(DIR_FRONTEND_IMG) . "/page/img1.jpg" ?>' />"
            + "<div class='typeahead_labels'>"
            + "<div class='typeahead_primary'>{{nomb}}</div>"
            + "<div class='typeahead_secondary'>{{email}}</div>"
            + "</div>"
            + "</div>",
            source: {
                user: {
                    display: ["nomb", "apellido", "email", "telefono"],
                    href: "{{nomb}} {{apellido}}",
                    url: [{
                        type: "POST",
                        url: $("#frm-search-referral").attr('action'),
                        data: {
                            query: "{{query}}",
                            sknUnNetsarVTwerk: $("[name=sknUnNetsarVTwerk]").val()
                        },
                        callback: {
                            done: function (data) {
                                return data;
                            }

                        }

                    }, "data.user"]

                }
            },
            callback: {
                onClick: function (node, a, item, event) {
                    $("#_id_find").empty().val(item.id);
                },
                onClickAfter: function (node, a, item, event) {
                },
                onResult: function (node, query, obj, objCount) {
                },
                onSendRequest: function (node, query) {
                },
                onReceiveRequest: function (node, query) {
                }
            },
            debug: false
        });

    });
</script>
<script src="<?php echo base_url(DIR_FRONTEND_TERCEROS); ?>/gridgallery/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(DIR_FRONTEND_TERCEROS); ?>/gridgallery/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(DIR_FRONTEND_TERCEROS); ?>/gridgallery/js/classie.js"></script>
<script src="<?php echo base_url(DIR_FRONTEND_TERCEROS); ?>/gridgallery/js/cbpgridgallery.js"></script>
<script src="<?php echo base_url(DIR_FRONTEND_JS); ?>/pages/gallery.js"></script>