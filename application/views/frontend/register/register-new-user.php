<body class="page-header-fixed">
<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div id="rootwizard">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i
                                                class="fa fa-paperclip m-r-xs"></i><?= lang("register_tab_info_term") ?>
                                        </a></li>
                                    <li role="presentation"><a href="#tab2" data-toggle="tab"><i
                                                class="fa fa-user m-r-xs"></i><?= lang("register_tab_info_basic") ?></a>
                                    </li>
                                    <li role="presentation"><a href="#tab3" data-toggle="tab"><i
                                                class="fa fa-pencil m-r-xs"></i><?= lang("register_tab_info_add") ?></a>
                                    </li>
                                    <li role="presentation"><a href="#tab4" data-toggle="tab"><i
                                                class="fa fa-photo m-r-xs"></i><?= lang("register_tab_info_pic") ?></a>
                                    </li>
                                    <li role="presentation"><a href="#tab5" data-toggle="tab"><i
                                                class="fa fa-check m-r-xs"></i><?= lang("register_tab_info_end") ?></a>
                                    </li>
                                </ul>


                                <div class="progress progress-sm m-t-sm">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    </div>
                                </div>
                                <?php
                                $attributes = array('id' => 'wizardForm');
                                echo form_open('exec-in', $attributes);
                                ?>
                                <div class="tab-content">
                                    <div class="tab-pane active fade in" id="tab1">
                                        <div class="row m-b-lg">
                                            <h2>Terminos y Condiciones</h2>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label
                                                            for="_firt_name"><?= lang("register_tab_info_input_firt_name") ?></label>
                                                        <input type="text" class="form-control"
                                                               name="_firt_name" id="_firt_name"
                                                               placeholder="<?= lang("register_tab_info_input_firt_name") ?>">
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <label
                                                            for="_last_name"><?= lang("register_tab_info_input_last_name") ?></label>
                                                        <input type="text" class="form-control col-md-6"
                                                               name="_last_name" id="_last_name"
                                                               placeholder="<?= lang("register_tab_info_input_last_name") ?>">
                                                    </div>
                                                    <div ng-app="RegisterUser" ng-controller="ListTipoId">
                                                        <div class="form-group col-md-6">
                                                            <label
                                                                for="_idn"><?= lang("register_tab_info_input_tipoid") ?></label>
                                                            <select name="_tidn" id="_tidn" ng-options="t.id_dato as t.uso_id for t in tipos " ng-model="region" class="form-control col-md-6">
                                                                <option value=""><?= lang("register_tab_info_input_selected") ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <label
                                                            for="_idn"><?= lang("register_tab_info_input_id") ?></label>
                                                        <input type="text" class="form-control col-md-6"
                                                               name="_idn" id="_idn"
                                                               placeholder="<?= lang("register_tab_info_input_id") ?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label
                                                            for="_nickname"><?= lang("register_tab_info_input_nickname") ?></label>
                                                        <input type="text" class="form-control"
                                                               name="_nickname" id="_nickname"
                                                               placeholder="<?= lang("register_tab_info_input_nickname") ?>">
                                                    </div>
                                                    <div class="form-group  col-md-6">
                                                        <label
                                                            for="_phone"><?= lang("register_tab_info_input_telephone") ?></label>
                                                        <input type="text" class="form-control col-md-6"
                                                               name="_phone" id="_phone"
                                                               placeholder="<?= lang("register_tab_info_input_telephone") ?>">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label
                                                            for="_email"><?= lang("register_tab_info_input_email") ?></label>
                                                        <input type="email" class="form-control"
                                                               name="_email" id="_email"
                                                               placeholder="<?= lang("register_tab_info_input_email") ?>l">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label
                                                            for="_pw"><?= lang("register_tab_info_input_pwd") ?></label>
                                                        <input type="password" class="form-control"
                                                               name="_pw"
                                                               id="_pw"
                                                               placeholder="<?= lang("register_tab_info_input_pwd") ?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label
                                                            for="_rpw"><?= lang("register_tab_info_input_rpwd") ?></label>
                                                        <input type="password" class="form-control"
                                                               name="_rpw"
                                                               id="_rpw"
                                                               placeholder="<?= lang("register_tab_info_input_rpwd") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3><?= lang("register_title_info") ?></h3>

                                                <p>

                                                <h2><?= lang("register_title_content") ?></h2>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputCard">Card Number</label>

                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   name="exampleInputCard" id="exampleInputCard"
                                                                   placeholder="Card Number">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control col-md-4"
                                                                   name="exampleInputSecurity"
                                                                   id="exampleInputSecurity"
                                                                   placeholder="Security Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputHolder">Card Holders Name</label>
                                                    <input type="text" class="form-control"
                                                           name="exampleInputHolder" id="exampleInputHolder"
                                                           placeholder="Card Holders Name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputExpiration">Expiration</label>
                                                    <input type="text" class="form-control date-picker"
                                                           name="exampleInputExpiration" id="exampleInputExpiration"
                                                           placeholder="Expiration">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputCsv">CSV</label>
                                                    <input type="text" class="form-control" name="exampleInputCsv"
                                                           id="exampleInputCsv" placeholder="CSV">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="f-s-12">By pressing Next You will Agree to the
                                                        Payment <a href="#">Terms & Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <h2 class="no-s">Thank You !</h2>

                                        <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                            Congratulations ! You got the last step.
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <h2 class="no-s">Thank You !</h2>

                                        <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                            Congratulations ! You got the last step.
                                        </div>
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#" class="btn btn-default">Previous</a></li>
                                        <li class="next"><a href="#" class="btn btn-default">Next</a></li>
                                    </ul>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>
        <!-- Main Wrapper -->
    </div>
</main>
<script src="<?= base_url(DIR_FRONTEND_TERCEROS) ."/mask/jquery.inputmask.min.js" ?>"></script>
<script src="<?= base_url(DIR_FRONTEND_TERCEROS) . "/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js" ?>"
        type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {

        var $validator = $("#wizardForm").validate({
            rules: {
                _firt_name: {
                    required: true
                },
                _last_name: {
                    required: true
                },
                _idn: {
                    required: true
                },
                _email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "<?= base_url("verify-email-exec") ?>",
                        type: "post",
                        data: {
                            _email: function () {
                                return $("#_email").val();
                            },
                            sknUnNetsarVTwerk: function () {
                                return $("[name=sknUnNetsarVTwerk]").val();
                            }
                        }
                    }
                },
                _phone: {
                    required: true,
                    remote: {
                        url: "<?= base_url("verify-phone-exec") ?>",
                        type: "post",
                        data: {
                            _phone: function () {
                                return $("#_phone").val();
                            },
                            sknUnNetsarVTwerk: function () {
                                return $("[name=sknUnNetsarVTwerk]").val();
                            }
                        }
                    }
                },
                _pw: {
                    required: true
                },
                _rpw: {
                    required: true,
                    equalTo: '#_pw'
                },
                _nickname: {
                    required: true,
                    remote: {
                        url: "<?= base_url("verify-nick-exec") ?>",
                        type: "post",
                        data: {
                            _nickname: function () {
                                return $("#_nickname").val();
                            },
                            sknUnNetsarVTwerk: function () {
                                return $("[name=sknUnNetsarVTwerk]").val();
                            }
                        }
                    }
                },
                exampleInputProductId: {
                    required: true
                },
                exampleInputQuantity: {
                    required: true
                },
                exampleInputCard: {
                    required: true,
                    number: true
                },
                exampleInputSecurity: {
                    required: true,
                    number: true
                },
                exampleInputHolder: {
                    required: true
                },
                exampleInputExpiration: {
                    required: true,
                    date: true
                },
                exampleInputCsv: {
                    required: true,
                    number: true
                }
            },
            messages: {
                _firt_name: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>"
                },
                _last_name: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>"
                },
                _idn: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>"
                },
                _email: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>",
                    email: "<h3><?= lang("index_msg_validation_input_2") ?></h3>",
                    remote: "<h3><?= lang("index_msg_validation_input_8") ?></h3>"
                },
                _phone: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>",
                    remote: "<h3><?= lang("index_msg_validation_input_7") ?></h3>"
                },
                _pw: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>"
                },
                _rpw: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>",
                    equalTo: "<h3><?= lang("index_msg_validation_input_5") ?></h3>"
                },
                _nickname: {
                    required: "<h3><?= lang("index_msg_validation_input_1") ?></h3>",
                    remote: "<h3><?= lang("index_msg_validation_input_6") ?></h3>"
                }
            }
        });

        $('#rootwizard').bootstrapWizard({
            'tabClass': 'nav nav-tabs',
            onTabShow: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.progress-bar').css({width: $percent + '%'});
            },
            'onNext': function (tab, navigation, index) {
                var $valid = $("#wizardForm").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            },
            'onTabClick': function (tab, navigation, index) {
                var $valid = $("#wizardForm").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
        });
    });

    var app = angular.module('RegisterUser', []);
    app.controller('ListTipoId', function ($scope, $http) {
        $http.get("<?= base_url("get-tipo-id")  ?>")
            .success(function (response) {
                $scope.tipos = response;
            });
    });
</script>
