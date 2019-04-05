<?php
if (!isConnect('admin')) {
	throw new Exception('{{401 - Accès non autorisé}}');
}

$plugin = plugin::byId('rikaha');
sendVarToJS('eqType', $plugin->getId());
$eqLogics = eqLogic::byType($plugin->getId());
?>
<div class="row row-overflow">
	<div class="col-lg-2 col-md-3 col-sm-4">
		<div class="bs-sidebar">
			<ul id="ul_eqLogic" class="nav nav-list bs-sidenav">
				<a class="btn btn-default eqLogicAction" style="width : 100%;margin-top : 5px;margin-bottom: 5px;" data-action="add"><i class="fa fa-plus-circle"></i> {{Ajouter un poêle}}</a>
				<li class="filter" style="margin-bottom: 5px;"><input class="filter form-control input-sm" placeholder="{{Rechercher}}" style="width: 100%"/></li>
				<?php
					foreach ($eqLogics as $eqLogic) {
					echo '<li class="cursor li_eqLogic" data-eqLogic_id="' . $eqLogic->getId() . '"><a>' . $eqLogic->getHumanName(true) . '</a></li>';
					}
				?>
			</ul>
		</div>
	</div>
	<div class="col-lg-10 col-md-9 col-sm-8 eqLogicThumbnailDisplay" style="border-left: solid 1px #EEE; padding-left: 25px;">
		<legend><i class="fa fa-cog"></i>  {{Gestion}}</legend>
		<div class="eqLogicThumbnailContainer">
			<div class="cursor eqLogicAction" data-action="add" style="background-color : #ffffff; height : 140px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;" >
				<center><i class="fa fa-plus-circle" style="font-size : 6em;color:#94ca02;"></i></center>
			<span style="font-size : 1.1em;position:relative; top : 15px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;;color:#94ca02"><center>{{Ajouter}}</center></span>
			</div>
			<div class="cursor eqLogicAction" data-action="gotoPluginConf" style="background-color : #ffffff; height : 140px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;">
				<center><i class="fa fa-wrench" style="font-size : 6em;color:#767676;"></i></center>
				<span style="font-size : 1.1em;position:relative; top : 15px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;color:#767676"><center>{{Configuration}}</center></span>
			</div>
		</div>
		<legend><i class="fa fa-bolt"></i>  {{Mes poêles}}</legend>
		<div class="eqLogicThumbnailContainer">
			<?php
				foreach ($eqLogics as $eqLogic) {
				$opacity = '';
				if ($eqLogic->getIsEnable() != 1) {
					$opacity = 'opacity:0.3;';
				}
				echo '<div class="eqLogicDisplayCard cursor" data-eqLogic_id="' . $eqLogic->getId() . '" style="background-color : #ffffff; height : 200px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;' . $opacity . '" >';
				echo "<center>";
				echo '<img src="plugins/rikaha/plugin_info/rikaha_icon.png" height="105" width="95" />';
				echo "</center>";
				echo '<span style="font-size : 1.1em;position:relative; top : 15px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;"><center>' . $eqLogic->getHumanName(true, true) . '</center></span>';
				echo '</div>';
				}
			?>
		</div>
	</div>

	<div class="col-lg-10 col-md-9 col-sm-8 eqLogic" style="border-left: solid 1px #EEE; padding-left: 25px;display: none;">
		<a class="btn btn-success eqLogicAction pull-right" data-action="save"><i class="fa fa-check-circle"></i> {{Sauvegarder}}</a>
		<a class="btn btn-danger eqLogicAction pull-right" data-action="remove"><i class="fa fa-minus-circle"></i> {{Supprimer}}</a>
		<a class="btn btn-default eqLogicAction pull-right" data-action="configure"><i class="fa fa-cogs"></i> {{Configuration avancée}}</a>
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation"><a href="#" class="eqLogicAction" aria-controls="home" role="tab" data-toggle="tab" data-action="returnToThumbnailDisplay"><i class="fa fa-arrow-circle-left"></i></a></li>
			<li role="presentation" class="active"><a href="#eqlogictab" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-tachometer"></i> {{Equipement}}</a></li>
			<li role="presentation"><a href="#commandtab" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i> {{Commandes}}</a></li>
		</ul>
		<div class="tab-content" style="height:calc(100% - 50px);overflow:auto;overflow-x: hidden;">
			<div role="tabpanel" class="tab-pane active" id="eqlogictab">
				<br/>
				<div class="row">
					<div class="col-xs-6">
						<form class="form-horizontal">
						<fieldset>
							<legend><i class="fa fa-arrow-circle-left eqLogicAction cursor" data-action="returnToThumbnailDisplay"></i> {{Général}}<i class='fa fa-cogs eqLogicAction pull-right cursor' data-action='configure'></i></legend>
						<div class="form-group">
							<label class="col-md-4 control-label">{{Nom du poêle}}</label>
							<div class="col-md-8">
								<input type="text" class="eqLogicAttr form-control" data-l1key="id" style="display : none;" />
								<input type="text" class="eqLogicAttr form-control" data-l1key="name" placeholder="{{Nom du poêle}}"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" >{{Objet parent}}</label>
							<div class="col-md-8">
								<select id="sel_object" class="eqLogicAttr form-control" data-l1key="object_id">
									<option value="">{{Aucun}}</option>
									<?php
										foreach (object::all() as $object) {
										echo '<option value="' . $object->getId() . '">' . $object->getName() . '</option>';
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">{{Catégorie}}</label>
							<div class="col-sm-8">
								<?php
									foreach (jeedom::getConfiguration('eqLogic:category') as $key => $value) {
									echo '<label class="checkbox-inline">';
									echo '<input type="checkbox" class="eqLogicAttr" data-l1key="category" data-l2key="' . $key . '" />' . $value['name'];
									echo '</label>';
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-8">
								<label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isEnable" checked/>{{Activer}}</label>
								<label class="checkbox-inline"><input type="checkbox" class="eqLogicAttr" data-l1key="isVisible" checked/>{{Visible}}</label>
							</div>
						</div>
						<div class="form-group">
								<label class="col-md-4 control-label">{{Identifiant}}</label>
								<div class="col-md-8">
										<input type="text" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="login" placeholder="Identifiant"/>
								</div>
						</div>
						<div class="form-group">
								<label class="col-md-4 control-label">{{Mot de passe}}</label>
								<div class="col-md-8">
										<input type="password" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="password" placeholder="Mot de passe"/>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">{{Numéro du poêle}}</label>
							<div class="col-md-8">
								<input type="text" class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="stoveid" placeholder="Numéro de l'équipement"/>
							</div>
						</div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{Capacité du réservoir (Kg)}}</label>
              <div class="col-md-8">
                <input type="text" class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="tankcapacity" placeholder="Capacité du réservoir à pellet"/>
                {{Permet de gérer des alertes en fonction du niveau de pellet restant. Saisissez 0 pour désactiver cette fonctionnalité}}
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{Template du widget}}</label>
              <div class="col-md-8">
                <select class="eqLogicAttr form-control" data-l1key="configuration" data-l2key="templateid">
                  <?php
                    $templateList=rikaha::getStoveTemplateList();
                    for($i=0;$i<count($templateList);$i++){
                      echo '<option value="' . $templateList[$i] . '">' . $templateList[$i] . '</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
					</fieldset>
					</form>
				</div>
			</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="commandtab">
				<br/>
				<legend><i class="fa fa-arrow-circle-left eqLogicAction cursor" data-action="returnToThumbnailDisplay"></i> {{Commandes}}</legend>

				<table id="table_cmd" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<th>{{Nom}}</th>
              <th>{{Icone}}</th>
							<th>{{Afficher/Historiser}}</th>
              <th>{{Ordre d'affichage}}</th>
							<th>{{Type}}</th>
							<th>{{Actions}}</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php include_file('desktop', 'rikaha', 'js', 'rikaha');?>
<?php include_file('core', 'plugin.template', 'js'); ?>
